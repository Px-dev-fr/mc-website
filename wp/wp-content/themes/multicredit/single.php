<?php get_header('single'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 bigpadding">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					//echo('<div class="blogsubtitle"><p>'.get_the_excerpt().'</p></div>');
					// Displays the page's content
					the_content();

					// Previous/next post navigation.
					the_post_navigation();

				} // end while
			} // end if
			?>

		</div>
			<div class="col-lg-2"></div>
	</div>
</div>


<?php get_footer(); ?>
