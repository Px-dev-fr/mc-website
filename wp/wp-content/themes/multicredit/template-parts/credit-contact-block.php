<?php
$classes = get_body_class();

$current_language_code = apply_filters( 'wpml_current_language', null );
$telnumb = '';
$mobnumb = '';

if ($current_language_code=='fr') {
		$telnumb = '026 322 23 10';
		$mobnumb = '079 936 31 75';
	} else if ($current_language_code=='en') {
		$telnumb = '026 322 23 10';
		$mobnumb = '076 470 16 61';
	} else if ($current_language_code=='de') {
		$telnumb = '026 322 23 00';
		$mobnumb = '079 936 31 43';
	} else if ($current_language_code=='it') {
		$telnumb = '026 322 23 10';
		$mobnumb = '079 903 57 39';
	} else if ($current_language_code=='pt-pt') {
		$telnumb = '026 322 23 00';
		$mobnumb = '079 936 31 43';
	} else if ($current_language_code=='tr') {
	$telnumb = '026 322 23 10';
	$mobnumb = '076 412 37 89';
	} else if ($current_language_code=='es') {
	$telnumb = '026 322 23 10';
	$mobnumb = '079 934 21 34';
} else if ($current_language_code=='sq') {
	$telnumb = '026 322 23 10';
	$mobnumb = '079 903 57 39';
	} else {
	$telnumb = '026 322 23 10';
	$mobnumb = '079 936 31 75';
}

$title = __( 'At your service !', 'multicredit' );

$tellabel = __( 'T', 'multicredit' );
$moblabel = __( 'M', 'multicredit' );

$description  = __('For more information, consult our specialist or ask us for an offer!','multicredit');

$animate = "";


if ( in_array('page-template-template-form',$classes) || in_array('page-template-template-form-creditcard',$classes)) {
    $animate = '';
} else {
    $animate = 'data-aos="fade-in"';
}

?>

<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex contact-bloc full-width white-bck regularpadding">
	<div class="wpb_column vc_column_container vc_col-sm-12" <?php if(!empty($animate)) { echo $animate; }; ?> >
		<div class="vc_column-inner">
			<div class="wpb_wrapper">

				<div class="blocktitle title-center clearfix">
					<h2><?php echo $title ?></h2>
					<p><?php echo $description ?></p>
					<h4><?php echo '<span class="line-on-mobile"><span class="grey">' . $tellabel . ': </span><a href="tel:' . $telnumb . '">'.$telnumb.'</a></span>&nbsp;&nbsp;&nbsp;<span class="line-on-mobile"><span class="grey">' . $moblabel . ': </span><a href="tel:' . $mobnumb . '">'.$mobnumb.'</a></span><br />' . '<a href="mailto:info@multicredit.ch">info@multicredit.ch</a>'; ?></h4>

				</div>

			</div>
		</div>
	</div>
</div>
