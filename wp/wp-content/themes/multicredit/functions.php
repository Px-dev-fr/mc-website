<?php

//Custom functions for the theme
function load_multicredit_scripts() {
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/dist/theme.css', array(), rand(111,9999) );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/app/css/aos.css' );
    wp_enqueue_style( 'jBox', get_template_directory_uri() . '/app/css/jBox.all.min.css' );

    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/app/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_register_script( 'gsap-js', get_template_directory_uri() . '/app/js/gsap.min.js', array(), '1.0.0', true );
    wp_register_script( 'slick', get_template_directory_uri() . '/app/js/slick.js', array(), '1.0.0', true );
    wp_register_script( 'ResizeSensor', get_template_directory_uri() . '/app/js/ResizeSensor.min.js', array(), '1.0.0', true );
    wp_register_script( 'theia', get_template_directory_uri() . '/app/js/theia-sticky-sidebar.min.js', array(), '1.0.0', true );
    wp_register_script( 'aos', get_template_directory_uri() . '/app/js/aos.js', array(), '1.0.0', true );
    wp_register_script( 'jBox-js', get_template_directory_uri() . '/app/js/jBox.all.min.js', array(), '1.0.0', true );
    wp_register_script( 'scripts', get_template_directory_uri() . '/app/js/scripts.js', array(), '1.0.1', true );

	wp_enqueue_script ( 'bootstrap-js' );
	wp_enqueue_script ( 'gsap-js' );
	wp_enqueue_script ( 'slick' );
  wp_enqueue_script ( 'ResizeSensor' );
  wp_enqueue_script ( 'theia' );
  	wp_enqueue_script ( 'aos' );
  wp_enqueue_script ( 'jBox-js' );
	wp_enqueue_script ( 'scripts' );

  if(is_page()){ //Check if we are viewing a page
     global $wp_query;
       //Check which template is assigned to current page we are looking at
       $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
     if($template_name == 'template-form.php'){
       wp_register_script( 'creditform', get_template_directory_uri() . '/app/js/creditform.js', array(), '1.0.1', true );
        wp_enqueue_script('creditform');
     }
     if($template_name == 'template-form-creditcard.php'){
       wp_register_script( 'creditcardform', get_template_directory_uri() . '/app/js/creditcardform.js', array(), '1.0.0', true );
      wp_enqueue_script('creditcardform');
     }
  }
}

add_action( 'wp_enqueue_scripts', 'load_multicredit_scripts' );

// Load textdomain

add_action('after_setup_theme', 'mc_theme_setup');
function mc_theme_setup(){
    load_theme_textdomain('multicredit', get_template_directory() . '/languages');
}


// Remove automatin <p>
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99 );
add_filter( 'the_content', 'shortcode_unautop', 100 );

// Add post categories to pages

function add_taxo_to_pages() {
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
}
 // Add to the admin_init hook of your theme functions.php file
add_action( 'init', 'add_taxo_to_pages' );


// Custom logo
function multicredit_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 250,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'multicredit_logo_setup' );

// Add image size
add_action( 'after_setup_theme', 'add_image_sizes' );
function add_image_sizes() {
    add_image_size( 'blog-thumb', 800, 325, true ); // (cropped)
}

// Include VC Shortcodes
include( 'vc_extends.php');

// Include VC Elements
add_action( 'vc_before_init', 'vc_before_init_actions' );

function vc_before_init_actions() {

    if( function_exists('vc_set_shortcodes_templates_dir') ){

        vc_set_shortcodes_templates_dir( get_template_directory() . '/vc-elements' );

    }

}

// After VC Init
add_action( 'vc_after_init', 'vc_after_init_actions' );

function vc_after_init_actions() {

    //*******************//
    // VC COL REMAPPING //
    //*******************//

    // Remove Params
    if( function_exists('vc_remove_param') ){
        //vc_remove_param( 'vc_column', 'css_animation' );
      //  vc_remove_param( 'vc_column', 'el_class' );
    }

    // Add Params
    $vc_column_new_params = array(

        // Animation
        array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'aos-animation',
            'heading' => __( 'Animation Type', 'multicredit' ),
            'param_name' => 'data_aos',
            //'value' => __( '', 'multicredit' ),
            'description' => __( 'AOS Animation type', 'multicredit' ),
            'admin_label' => true,
            'dependency' => '',
            'weight' => 0,
            'group' => 'AOS Animation',
        ),
        // Delay
        array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'aos-delay',
            'heading' => __( 'Animation Delay', 'multicredit' ),
            'param_name' => 'data_aos_delay',
            //'value' => __( '', 'multicredit' ),
            'description' => __( 'AOS Animation delay', 'multicredit' ),
            'admin_label' => true,
            'dependency' => '',
            'weight' => 0,
            'group' => 'AOS Animation',
        ),
        // Delay
        array(
            'type' => 'textfield',
            'holder' => 'h3',
            'class' => 'aos-duration',
            'heading' => __( 'Animation Duration', 'multicredit' ),
            'param_name' => 'data_aos_duration',
            //'value' => __( '', 'multicredit' ),
            'description' => __( 'AOS Animation durations', 'multicredit' ),
            'admin_label' => true,
            'dependency' => '',
            'weight' => 0,
            'group' => 'AOS Animation',
        ),

    );

    vc_add_params( 'vc_column', $vc_column_new_params );

}


// Custom menu
function register_menu() {
  	register_nav_menu('header-menu',__( 'Main navigation' ));
	register_nav_menu('secondary-menu',__( 'Secondary navigation' ));
	register_nav_menu('mobile-menu',__( 'Mobile navigation' ));
}
add_action( 'init', 'register_menu' );

// Page thumbnails that can be used as a header background
add_theme_support( 'post-thumbnails' );

/**
 * Adds the excerpt field to pages.
 */
function add_page_description() {
	 add_post_type_support( 'page', 'description' );
}
add_action( 'init', 'add_page_description' );


/**
 * Register Sidebar
 */
add_action( 'widgets_init', 'multicredit_widgets_init' );

function multicredit_widgets_init() {
	 register_sidebar( array(
        'name'          => __( 'Footer Sidebar 1', 'multicredit' ),
        'id'            => 'footer-sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title"><span id="plus-1"></span>',
        'after_title'   => '</h4>',
    ) );
	register_sidebar( array(
        'name'          => __( 'Footer Sidebar 2', 'multicredit' ),
        'id'            => 'footer-sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title"><span id="plus-2"></span>',
        'after_title'   => '</h4>',
    ) );
	register_sidebar( array(
        'name'          => __( 'Footer Sidebar 3', 'multicredit' ),
        'id'            => 'footer-sidebar-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title"><span id="plus-3"></span>',
        'after_title'   => '</h4>',
    ) );
	register_sidebar( array(
        'name'          => __( 'Footer Sidebar 4', 'multicredit' ),
        'id'            => 'footer-sidebar-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title"><span id="plus-4"></span>',
        'after_title'   => '</h4>',
    ) );
		register_sidebar( array(
        'name'          => __( 'Footer Sidebar 5', 'multicredit' ),
        'id'            => 'footer-sidebar-5',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
		register_sidebar( array(
        'name'          => __( 'Footer Sidebar 6', 'multicredit' ),
        'id'            => 'footer-sidebar-6',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
	register_sidebar( array(
        'name'          => __( 'Credit Footer', 'domainebovy' ),
        'id'            => 'footer-credit',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}



//Add search icon to secondary menu

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

// Display search icon in menus and toggle search form
function add_search_form($items, $args) {
if( $args->theme_location == 'secondary-menu' )
       $items .= '<li class="search hide-on-min"><a class="search_icon"><img src="'. get_template_directory_uri() .'/images/loop.svg"></a><div style="display:none;" class="spicewpsearchform">'. get_search_form(false) .'</div></li>';
       return $items;
}

/**
 * Allow shortcodes into widgets
 */

add_filter( 'widget_text', 'do_shortcode' );



/**
 * Thetur formated content for get_the_content
 */
function get_content($more_link_text = '(more...)', $stripteaser = 0, $more_file = '')
{
	$content = get_the_content($more_link_text, $stripteaser, $more_file);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}

/**
 * Add Page Slug Body Class
*/
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/**
 * Add Lang Slug Body Class
*/

function append_language_class($classes){
  $classes[] = ICL_LANGUAGE_CODE;
  return $classes;
}
add_filter('body_class', 'append_language_class');

/**
 * Add Excerpt Support
*/
add_post_type_support( 'page', 'excerpt' );

/* ------- Remove Header Plugins infos  --------*/

add_action('init', 'myoverride', 100);
function myoverride() {
    remove_action('wp_head', array(visual_composer(), 'addMetaData'));
}

/* ------- Added buyout calculator variables  --------*/

/*
add_action( 'wpcf7_before_send_mail', 'wpcf7_add_text_to_mail_body' );

function wpcf7_add_text_to_mail_body($contact_form){

  $wpcf7 = WPCF7_ContactForm::get_current();
  if($wpcf7->id() === 14406):

    session_start();


    $parameters = $request->get_params();
    //echo $parameters['ppc'];

    $DureeRachatValue = $_POST['dureerachat'];
    $TypeCredit1 = $parameters['type-credit-1'];
    $MontantCredit1 = $_POST['montantcredit1'];
    $TypeCredit2 = $_POST['type-credit-2'];
    $MontantCredit2 = $_POST['montantcredit2'];
    $TypeCredit3 = $_POST['type-credit-3'];
    $MontantCredit3 = $_POST['montantcredit3'];
    $TypeCredit4 = $_POST['type-credit-4'];
    $MontantCredit4 = $_POST['montantcredit4'];

    if (empty($MontantRachatValue)){
      $MontantRachatValue = $MontantCredit1 + $MontantCredit2 + $MontantCredit3 + $MontantCredit4;
    } else{
      $MontantRachatValue = 0;
    }

    if (!empty($DureeRachatValue)){
      $DureeRachatValue = $_POST['dureerachat'];
    } else{
      $DureeRachatValue = 12;
    }

   // get mail property
   $mail = $contact_form->prop( 'mail' ); // returns array

   // add content to email body
   $mail['body'] .= '<p>Montant :</p>';
   $mail['body'] .= $MontantRachatValue;
   $mail['body'] .= '<p>Durée :</p>';
   $mail['body'] .= $DureeRachatValue;
   $mail['body'] .= '<p>Type de crédit 1 :</p>';
   $mail['body'] .= $TypeCredit1;
   $mail['body'] .= '<p>Montant du crédit 1 :</p>';
   $mail['body'] .= $MontantCredit1;
   $mail['body'] .= '<p>Type de crédit 2 :</p>';
   $mail['body'] .= $TypeCredit2;
   $mail['body'] .= '<p>Montant du crédit 2 :</p>';
   $mail['body'] .= $MontantCredit2;
   $mail['body'] .= '<p>Type de crédit 3 :</p>';
   $mail['body'] .= $TypeCredit3;
   $mail['body'] .= '<p>Montant du crédit 3 :</p>';
   $mail['body'] .= $MontantCredit3;
   $mail['body'] .= '<p>Type de crédit 4 :</p>';
   $mail['body'] .= $TypeCredit4;
   $mail['body'] .= '<p>Montant du crédit 4 :</p>';
   $mail['body'] .= $MontantCredit4;

   // set mail property with changed value(s)
   $contact_form->set_properties( array( 'mail' => $mail ) );

 endif;
}

*/


/* ------- Custom Dashboard --------*/

if( ! function_exists( 'customize_dashboard' ) ):
	function customize_dashboard() {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	}
	add_action( 'admin_menu', 'customize_dashboard' );
endif;


    function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget', __('Wecome on Dashboard', 'houzez' ), 'custom_dashboard_help');
    }

    function custom_dashboard_help() {
    $output = '<div style="text-align:center;">';
    $output .= '<img style="text-align:center;padding:14px;" src="https://multicredit.ch/wp/wp-content/uploads/multicredit-logo.svg" width="90%" height="auto" " alt="';
	$output .= get_bloginfo( 'name' );
	$output .= '">';
    $output .='</div><hr>';
	$output .='
	<ul>
		<li class=""><i class="fa fa-calendar"></i> Created on : April 2020</li>
		<li class=""><i class="fa fa-calendar-plus-o"></i> Update : - </li>
		<li class=""><i class="fa fa-wordpress"></i> Wordpress : Version 5.3.2</li>
		<li class=""><i class="fa fa-laptop"></i> Theme : multicredit V1.0</li>
		<li class=""><i class="fa fa-rocket"></i> Hosting : Infomaniak<br /><hr></li>
		</ul>';
    echo ($output);
    }





    add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
	//add_action('init', 'amortization_table');

?>
