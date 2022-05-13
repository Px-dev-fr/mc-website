<?php

$classes = get_body_class();

$title = __( 'Budget calculator', 'multicredit' );
$subtitle = __( 'What are your credit options?', 'multicredit' );
$description = __( 'Estimate your budget with our calculator and take a look at our case studies', 'multicredit' );
$url = get_home_url();
$link = $url.__( 'budget-calculator', 'multicredit' );
$linkname = __( 'Calculate my budget', 'multicredit' );

$animate1 = '';
$animate2 = '';
$animate3 = '';

if ( in_array('page-template-template-form',$classes) || in_array('page-template-template-form-creditcard',$classes)) {
    $animate1 = '';
} else {
    $animate1 = 'data-aos="fade-in" data-aos-delay="0"';
		$animate2 = 'data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"';
		$animate3 = 'data-aos="fade-left" data-aos-delay="250"';
}


?>

<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex gradient-bck diagonal-bck bigpadding full-width">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">

				<div class="blocktitle title-center title-light clearfix " <?php if(!empty($animate1)) { echo $animate1; }; ?> >
					<h2><?php echo $title ?></h2>
					<h4><?php echo $subtitle ?></h4>
					<p><?php echo $description ?></p>

					<a href="<?php echo $link ?>" class="btn-circle">
						<span class="circle-btn-text"><?php echo $linkname; ?></span>
						 <span class="round">&gt;</span>
					 </a>

				<div class="calculatorimg hide-on-mobile" <?php if(!empty($animate2)) { echo $animate2; }; ?> ><img src="https://multicredit.ch/wp/wp-content/uploads/mobile.png" /></div>
				<div class="logocheck  hide-on-mobile"  <?php if(!empty($animate3)) { echo $animate3; }; ?>><img src="https://multicredit.ch/wp/wp-content/uploads/logocheck.svg" /></div>

				</div>

			</div>
		</div>
	</div>
</div>
