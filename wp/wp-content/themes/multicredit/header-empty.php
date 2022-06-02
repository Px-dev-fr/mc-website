<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<!--   <meta name="description" content="<?php bloginfo('description'); ?>" /> -->
  <link rel="shortcut icon" href="https://multicredit.ch/wp/wp-content/uploads/favicon_google.png">

<!--   <title><?php echo get_bloginfo('name'); ?> | <?php the_title(); ?></title> -->

<!--   <link rel="profile" href="http://gmpg.org/xfn/11" /> -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
  <div id="GeneralWrapper">
