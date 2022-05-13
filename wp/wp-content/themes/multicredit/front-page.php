<?php get_header(); ?>

<?php // Add Calculator component
 echo get_template_part('template-parts/credit-calculator-component-min');
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					// Displays the page's content
					echo the_content();

				} // end while
			} // end if
			?>

			<?php // Add Contact block
				echo get_template_part('template-parts/credit-stats-block');
			?>

			<?php // Add Contact block
				echo get_template_part('template-parts/credit-contact-block');
			?>


		</div>
	</div>
</div>


<?php get_footer(); ?>
