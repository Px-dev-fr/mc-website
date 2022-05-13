<?php
/*

_____     __     ______     ______     ______     __         ______
/\  __-.  /\ \   /\  __ \   /\  == \   /\  __ \   /\ \       /\  __ \
\ \ \/\ \ \ \ \  \ \  __ \  \ \  __<   \ \ \/\ \  \ \ \____  \ \ \/\ \
\ \____-  \ \_\  \ \_\ \_\  \ \_____\  \ \_____\  \ \_____\  \ \_____\
\/____/   \/_/   \/_/\/_/   \/_____/   \/_____/   \/_____/   \/_____/

Copyright (c) diabolo design | https://www.diabolo.com/

*/
?>


<?php get_header('404'); ?>

<?php // Add Calculator component
 //echo get_template_part('template-parts/credit-calculator-component');
?>


<div class="container">
	<div class="row">
		<div class="col-lg-12">

			<div class="blocktitle title-center clearfix regularpadding">
					<h2><?php _e('Page not found', 'multicredit'); ?></h2>
					<p><?php _e('Sorry, we can’t find the page you were looking for.', 'multicredit'); ?></p>
					<p><a href="<?php echo get_home_url(); ?>"><?php _e('Go back to our homepage.', 'multicredit'); ?></a></p>
			</div>

			<div class="searchform-bar pb-4" style="margin-bottom:128px">
				<p class="text-center"><?php _e('Or search on our website: ', 'multicredit'); ?></p>
				<?php get_search_form(); ?></div>

			<?php // Add Calculator link block
			 echo get_template_part('template-parts/credit-calculator-link-block');
			?>
			<?php // Add Contact block
				echo get_template_part('template-parts/credit-contact-block');
			?>

		</div>
	</div>
</div>


<?php get_footer(); ?>
