<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <link rel="shortcut icon" href="https://multicredit.ch/wp/wp-content/uploads/favicon_google.png">	

  <title><?php echo get_bloginfo('name'); ?> | <?php the_title(); ?></title>

<!--   <link rel="profile" href="http://gmpg.org/xfn/11" /> -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
  <div id="GeneralWrapper">

    <div class="loader">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mc_check_loader.gif" width="80" alt="La page est en chargement">
    </div>

    <header>
  		<div class="container-full-width">
        <div class="row alt-navigation-bar">
          <div class="logo col-lg-3">
  					<?php
  					if ( function_exists( 'the_custom_logo' ) ) {
  					 the_custom_logo();
  					}
  					?>
  			  </div>

          <div class="col-lg-9 text-right">
            <div class="alt-nav-element hide-on-min">
              <a class="btn" href="<?php echo get_home_url(); ?>/<?php _e('credit-application','multicredit') ?>"><?php _e('Credit application','multicredit') ?></a>
            </div>

            <div class="alt-nav-element">
              <?php wp_nav_menu( array(
                'container'       => 'nav',
                'container_class' => 'secondary-menu',
                'container_id'    => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s menu-nav">%3$s</ul>',
                'theme_location' => 'secondary-menu',
                ));
              ?>
            </div>

            <div class="alt-nav-element">
              <button id="hamburger-trigger" class="hamburger hamburger--collapse hide-on-desktop" type="button">
               <span class="hamburger-box">
                 <span class="hamburger-inner"></span>
               </span>
              </button>
            </div>

          </div>
        </div>

  			<div class="row">
          <div class="col-lg-12 text-right">
  				  <?php wp_nav_menu( array(
    					'container'       => 'nav',
    					'container_class' => 'primary-menu',
    					'container_id'    => '',
    					'items_wrap'      => '<ul id="%1$s" class="%2$s menu-nav">%3$s</ul>',
    					'theme_location' => 'header-menu',
    					));
  				  ?>
          </div>
  		  </div>

      </div> <!-- container -->

  		<div class="mobile-menu hide-on-desktop">
			<?php wp_nav_menu( array(
  			'container'       => 'nav',
  			'container_class' => '',
  			'container_id'    => '',
  			'items_wrap'      => '<ul id="%1$s" class="%2$s menu-nav mobile-nav">%3$s</ul>',
  			'theme_location' => 'mobile-menu',
  			));
        ?>
  			</div>
      </header>

      <?php if ( has_post_thumbnail() ) : ?>
      <div class="hero background-hero single-hero">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h1><?php the_archive_title(); ?></h1>
            </div>
          </div>
        </div>
        <!-- <div class="single-header-overlay"></div> -->
        <?php
        $coverimg = get_the_post_thumbnail_url(get_the_ID(),'full');
        if (empty($coverimg )) {
          $coverimg = 'https://multicredit.ch/wp/wp-content/uploads/blog-default-image.jpg';
        }
        ?>
        <div class="single-background-image" style="background: url('<?php echo $coverimg ?>') no-repeat; background-size: cover; background-position: center;"></div>
      </div>
      <?php else: ?>
      <div class="header hero single-hero">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h1><?php the_archive_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
