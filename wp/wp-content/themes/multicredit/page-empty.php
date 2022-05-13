<?php /* Template Name: Empty page */ ?>

<?php get_header('empty'); ?>

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
		</div>
	</div>
</div>
