<?php
/* Template Name: Archive Page */

?>
<?php get_header('archive'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					echo get_template_part( 'template-parts/content-archives' );

				} // end while
			} // end if
			?>
			</div>

			<?php // Add Contact block
				echo get_template_part('template-parts/credit-contact-block');
			?>

		</div>
	</div>
</div>


<?php get_footer(); ?>
