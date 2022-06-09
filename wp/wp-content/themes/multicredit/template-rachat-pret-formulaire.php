<?php
/**
* Template Name: Formulaire rachat de pret
*/

session_start();
$DureeRachatValue = $_GET['dureerachat'];
$TypeCredit1 = $_GET['type-credit-1'];
$MontantCredit1 = $_GET['montantcredit1'];
$TypeCredit2 = $_GET['type-credit-2'];
$MontantCredit2 = $_GET['montantcredit2'];
$TypeCredit3 = $_GET['type-credit-3'];
$MontantCredit3 = $_GET['montantcredit3'];
$TypeCredit4 = $_GET['type-credit-4'];
$MontantCredit4 = $_GET['montantcredit4'];

if ($TypeCredit1 == 'rachat-credit-en-cours' ) {	$TypeCredit1 = __( 'Credit refinancing', 'multicredit' ); };
if ($TypeCredit1 == 'leasing') { $TypeCredit1  = __( 'Lease refinancing', 'multicredit' ); };
if ($TypeCredit1 == 'carte-de-credit') { $TypeCredit1  = __( 'Credit card balance refinancing', 'multicredit' ); };
if ($TypeCredit1 == 'autres') {	$TypeCredit1  = __( 'Others', 'multicredit' ); };
if ($TypeCredit2 == 'rachat-credit-en-cours' ) {	$TypeCredit2 = __( 'Credit refinancing', 'multicredit' ); };
if ($TypeCredit2 == 'leasing') { $TypeCredit2  = __( 'Lease refinancing', 'multicredit' ); };
if ($TypeCredit2 == 'carte-de-credit') { $TypeCredit2  = __( 'Credit card balance refinancing', 'multicredit' ); };
if ($TypeCredit2 == 'autres') {	$TypeCredit2  = __( 'Others', 'multicredit' ); };
if ($TypeCredit3 == 'rachat-credit-en-cours' ) {	$TypeCredit3 = __( 'Credit refinancing', 'multicredit' ); };
if ($TypeCredit3 == 'leasing') { $TypeCredit3  = __( 'Lease refinancing', 'multicredit' ); };
if ($TypeCredit3 == 'carte-de-credit') { $TypeCredit3  = __( 'Credit card balance refinancing', 'multicredit' ); };
if ($TypeCredit3 == 'autres') {	$TypeCredit3  = __( 'Others', 'multicredit' ); };
if ($TypeCredit4 == 'rachat-credit-en-cours' ) {	$TypeCredit4 = __( 'Credit refinancing', 'multicredit' ); };
if ($TypeCredit4 == 'leasing') { $TypeCredit4  = __( 'Lease refinancing', 'multicredit' ); };
if ($TypeCredit4 == 'carte-de-credit') { $TypeCredit4  = __( 'Credit card balance refinancing', 'multicredit' ); };
if ($TypeCredit4 == 'autres') {	$TypeCredit4  = __( 'Others', 'multicredit' ); };


if (empty($MontantRachatValue)){

	if(empty($MontantCredit1)) { $MontantCredit1 = 0; };
	if(empty($MontantCredit2)) { $MontantCredit2 = 0; };
	if(empty($MontantCredit3)) { $MontantCredit3 = 0; };
	if(empty($MontantCredit4)) { $MontantCredit4 = 0; };

	$MontantRachatValue = $MontantCredit1 + $MontantCredit2 + $MontantCredit3 + $MontantCredit4;

} else{
	$MontantRachatValue = 0;
}

if (!empty($DureeRachatValue)){
	$DureeRachatValue = $_GET['dureerachat'];
} else{
	$DureeRachatValue = 12;
}

?>


<?php get_header(); ?>

<section class="lightgrey-bck bigpadding full-width" style="transform: none;">
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<h3><?php _e('Summary','multicredit')?></h3>
			<h4><?php _e('Amount','multicredit')?></h4>
			<p id="MCredit"><?php echo $MontantRachatValue; ?> CHF</p>

			<h4><?php _e('Duration','multicredit')?></h4>
			<p id="DCredit"><?php echo $DureeRachatValue; ?> <?php _e( 'months', 'multicredit' );?></p>

			<?php if (!empty($TypeCredit1)){ ?>
				<h4><?php _e('Credit','multicredit')?> 1</h4>
				<p id="typeCredit1"><?php echo $TypeCredit1; ?> : <span><?php echo $MontantCredit1; ?>  CHF</span></p>
			<?php } ?>

			<?php if (!empty($TypeCredit2)){ ?>
				<h4><?php _e('Credit','multicredit')?> 2</h4>
				<p id="typeCredit2"><?php echo $TypeCredit2; ?> : <span><?php echo $MontantCredit2; ?>  CHF</span></p>
			<?php } ?>

			<?php if (!empty($TypeCredit3)){ ?>
				<h4><?php _e('Credit','multicredit')?> 3</h4>
				<p id="typeCredit3"><?php echo $TypeCredit3; ?> : <span><?php echo $MontantCredit3; ?>  CHF</span></p>
			<?php	} ?>

			<?php if (!empty($TypeCredit4)){ ?>
				<h4><?php _e('Credit','multicredit')?> 4</h4>
				<p id="typeCredit4"><?php echo $TypeCredit4; ?> : <span><?php echo $MontantCredit4; ?>  CHF</span></p>
			<?php	} ?>
		</div>
		
		<div id="rachatpretform" class="col-lg-6">
			<h3><?php _e('Form','multicredit')?></h3>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					// Displays the page's content
					the_content();

				} // end while
			} // end if
			?>
		</div>
	</div>
</div>
</section>
<?php // Add Contact block
	echo get_template_part('template-parts/credit-contact-block');
?>

<?php get_footer(); ?>
