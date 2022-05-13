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


<?php get_header('search'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">

	<div class="searchform-bar pb-4"><?php get_search_form(); ?></div>

			<h2 class="pb-4">
			<?php echo $wp_query->found_posts; ?>
        <?php _e( 'Search results found for', 'multicredit' ); ?>: "<?php the_search_query(); ?>"
			</h2>

			<?php
			if ( have_posts() ) { ?>
					 <?php while ( have_posts() ) { the_post(); ?>
								<h3><a href="<?php echo get_permalink(); ?>">
									<?php the_title();  ?>
								</a></h3>

								<p><?php echo wp_trim_words( get_the_excerpt(), 36, '...' ); ?></p>


								<p><a class="btn" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'multicredit' ); ?></a></p>
								<hr/>
					 <?php } ?>
					<?php echo paginate_links(); ?>
			<?php } // end if ?>

			<?php // Add Contact block
				echo get_template_part('template-parts/credit-contact-block');
			?>

		</div>
	</div>
</div>


<?php get_footer(); ?>
