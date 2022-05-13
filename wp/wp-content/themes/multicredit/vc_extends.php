<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

add_action( 'vc_before_init', 'multicredit_integrateVC');

function multicredit_integrateVC() {

/*  Title Addon
§/*-------------------------------*/

    vc_map(array(
        'name'                    => "Title",
        'base'                    => "mc_title",
        'class'                   => 'mc_title',
        'show_settings_on_create' => false,
        'category'                => esc_html__("MultiCredit",'multicredit'),
        'icon'                    => 'icon-title',
        'description'             => 'Use this element to add a title with subtitle',
        'js_view'                 => '',
        'params'                  => array(
										array(
										'type' => 'dropdown',
										'class' => '',
										'heading' => __( 'Title tag', 'multicredit' ),
										'param_name' => 'titletag',
										'admin_label' => true,
										'value'       => array(
											'h2'   => 'H2',
											'h3'   => 'H3',
										),
										'std'         => 'h2',
										'description' => __( 'Title importance', 'multicredit' )
										),
										array(
										'type' => 'textfield',
										'holder' => 'div',
										'class' => '',
										'heading' => __( 'Title', 'multicredit' ),
										'param_name' => 'title',
										'description' => __( 'Add block title', 'multicredit' )
										),
										array(
										'type' => 'textfield',
										'holder' => 'div',
										'class' => '',
										'heading' => __( 'Subtitle', 'multicredit' ),
										'param_name' => 'subtitle',
										'description' => __( 'Add block subtitle', 'multicredit' )
										),
										array(
										'type' => 'dropdown',
										'class' => '',
										'heading' => __( 'Align', 'multicredit' ),
										'param_name' => 'align',
										'admin_label' => true,
										'value'       => array(
											'left'   => 'title-left',
											'center'   => 'title-center',
											'right' => 'title-right'
										),
										'std'         => 'left', // Your default value
										'description' => __( 'Title align', 'multicredit' )
										),
										array(
										'type' => 'dropdown',
										'class' => '',
										'heading' => __( 'Light/Dark Background', 'multicredit' ),
										'param_name' => 'background',
										'admin_label' => true,
										'value'       => array(
											'light'   => 'title-dark',
											'dark'   => 'title-light',
										),
										'std'         => 'light', // Your default value
										'description' => __( 'Title color', 'multicredit' )
										),

		)
		));

	/*  Title Shortcode
	/*===================*/

		add_shortcode('mc_title', 'mc_title_func');

		function mc_title_func($atts, $content = null) {

			extract(shortcode_atts(
				array(
					'title'    => 'Title',
					'subtitle' => 'Subtitle',
					'align'  => 'left',
					'background' => 'light',
					'titletag'  => 'h2',
				), $atts)
			);

			if ($subtitle != 'Subtitle') {
				$subtitle = '<h4>'.$subtitle.'</h4>';
			} else {$subtitle = '';}

			$output = '<div class="blocktitle '.$align.' '.$background.'" clearfix"><'.$titletag.'>'.$title.'</'.$titletag.'>'.$subtitle.'</div>';
			return $output;

		}


		/*  Credit Type Link Addon
		§/*-------------------------------*/

		    vc_map(array(
		        'name'                    => "Link Bloc",
		        'base'                    => "mc_linkblock",
		        'class'                   => 'mc_linkblock',
		        'show_settings_on_create' => false,
		        'category'                => esc_html__("MultiCredit",'multicredit'),
		        'icon'                    => 'icon-title',
		        'description'             => 'Use this element to add a link block',
		        'js_view'                 => '',
		        'params'                  => array(

												array(
												'type' => 'attach_image',
												'holder' => 'div',
												'class' => '',
												'heading' => __( 'Image', 'multicredit' ),
												'param_name' => 'image',
												'description' => __( 'Add block image', 'multicredit' )
												),
												array(
												'type' => 'textfield',
												'holder' => 'div',
												'class' => '',
												'heading' => __( 'Title', 'multicredit' ),
												'param_name' => 'title',
												'description' => __( 'Add block Title', 'multicredit' )
												),
												array(
												'type' => 'textfield',
												'holder' => 'div',
												'class' => '',
												'heading' => __( 'Description', 'multicredit' ),
												'param_name' => 'description',
												'description' => __( 'Add block description', 'multicredit' )
												),
												array(
												'type' => 'vc_link',
												'class' => '',
												'heading' => __( 'Link', 'multicredit' ),
												'param_name' => 'link',
												'description' => __( 'Add block link', 'multicredit' )
												),

				)
				));

			/*  Title Shortcode
			/*===================*/

				add_shortcode('mc_linkblock', 'mc_linkblock_func');

				function mc_linkblock_func($atts, $content = null) {

					extract(shortcode_atts(
						array(
							'image'    => '',
							'title' => '',
							'description'  => '',
							'link' => '',
						), $atts)
					);

					$imageSrc = wp_get_attachment_image_src($image, 'full');

					//Link construct
			    	$link = ($link=='||') ? '' : $link;
					$link = vc_build_link( $link );
					$a_link = $link['url'];
					$a_title = ($link['title'] == '') ? '' : 'title="'.$link['title'].'"';
					$a_target = ($link['target'] == '') ? '' : 'target="'.$link['target'].'"';


					$output =	'<div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom wpb_start_animation animated">
					<figure class="wpb_wrapper vc_figure"><div class="vc_single_image-wrapper"><img src="'.$imageSrc[0].'" /></div><figcaption><h4>'.$title.'</h4><p>'.$description.'</p></figcaption></figure></div><div class="vc_btn3-container text-center"><a class="btn-circle-2" href="'.$a_link.'" '.$a_title.' '.$a_target.'><span class="round">&gt;</span></a></div>';
					return $output;

				}

/*
https://kb.wpbakery.com/docs/inner-api/vc_map/#vc_map()-Availabletypevalues

Value
Description
textarea_html	Text area with default WordPress WYSIWYG Editor. Important: only one html textarea is permitted per shortcode and it should have “content” as a param_name
textfield		Simple input field
textarea		Simple textarea field
dropdown		Dropdown input field with set of available options. Array containing the drop down values (either should be a normal array, or an associative array)
attach_image	Single image selection
attach_images	Multiple images selection
posttypes		Checkboxes with available post types
colorpicker		Color picker
exploded_textarea	Text area, where each line will be imploded with comma (,)
widgetised_sidebars	Dropdown element with set of available widget regions, that are registered in the active wp theme
textarea_raw_html	Text area, its content will be coded into base64 (this allows you to store raw js or raw html code)
vc_link	Link selection. Then in shortcodes html output, use $href = vc_build_link( $href ); to parse link attribute
checkbox	Creates checkboxes, can have 1 or multiple checkboxes within one attribute
loop	Loop builder. Lets your users to construct loop which can later be used during the shortcode’s output
css	Basic CSS style editor for your content element. Check “Add “Design Options” Tab with CSS Editor to Your Element” page for more details

*/

};

?>
