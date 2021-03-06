<?php
/*
Template Name: Form
*/
?>
<?php get_header(); ?>

<?php

session_start();

$MontantValue = $_GET['montant'];
$DureeValue = $_GET['duree'];

$montantDuree = true;
// Add Calculator component
if ($MontantValue == '' || $DureeValue == '') {
	echo get_template_part('template-parts/credit-calculator-component-min');
	$montantDuree = false;
}
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">

			<?php // Add Calculator link block
			echo get_template_part('template-parts/credit-form-block');
			?>


			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();

					// Displays the page's content
					the_content();
				} // end while
			} // end if
			?>


			<?php // Add Blog block
			echo get_template_part('template-parts/credit-calculator-link-block');
			?>

			<?php // Add Read More block
			echo get_template_part('template-parts/read-more-block');
			?>


			<?php // Add Contact block
			echo get_template_part('template-parts/credit-contact-block');
			?>

		</div>
	</div>
</div>

<?php get_footer(); ?>

<?
if (!$montantDuree) {
?>
	<script>
		document.getElementById("demandeCredit").scrollIntoView();
	</script>
<?
} else {
?>
	<script>
		document.getElementById("contenu-principal").scrollIntoView();
	</script>
<?
}
?>