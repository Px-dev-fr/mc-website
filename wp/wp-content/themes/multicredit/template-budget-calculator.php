<?php
/**
* Template Name: Budget calculator
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">

      <?php // Add Calculator link block
			 echo get_template_part('template-parts/budget-calculator-block');
			?>

			<div style="margin-top:-120px;">
			<?php // Add Calculator link block
			 echo get_template_part('template-parts/credit-stats-block');
			?>
			</div>
			
			<?php // Add Contact block
				echo get_template_part('template-parts/credit-contact-block');
			?>


		</div>
	</div>
</div>


<?php get_footer(); ?>
