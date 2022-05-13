<?php
/**
* Template Name: Page rachat with Calculator
_____     __     ______     ______     ______     __         ______
/\  __-.  /\ \   /\  __ \   /\  == \   /\  __ \   /\ \       /\  __ \
\ \ \/\ \ \ \ \  \ \  __ \  \ \  __<   \ \ \/\ \  \ \ \____  \ \ \/\ \
\ \____-  \ \_\  \ \_\ \_\  \ \_____\  \ \_____\  \ \_____\  \ \_____\
\/____/   \/_/   \/_/\/_/   \/_____/   \/_____/   \/_____/   \/_____/

Copyright (c) diabolo design | https://www.diabolo.com/

*/
?>


<?php get_header(); ?>

<?php // Add Calculator component
 echo get_template_part('template-parts/rachat-credit-calculator-component');
?>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					// Displays the page's content
					the_content();

				} // end while
			} // end if
			?>

			<?php // Add Calculator link block
			 echo get_template_part('template-parts/credit-calculator-link-block');
			?>

      <?php // Add Blog block
        echo get_template_part('template-parts/credit-blog-block');
      ?>


			<?php // Add Contact block
				echo get_template_part('template-parts/credit-contact-block');
			?>

		</div>
	</div>
</div>


<?php get_footer(); ?>
