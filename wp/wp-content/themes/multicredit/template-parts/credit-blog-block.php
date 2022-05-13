<?php
	$title = __( 'Blog', 'multicredit' );
	$subtitle = __( 'we\'re talking about it on MultiCredit', 'multicredit');
	$btn = __( "Read the article", 'multicredit');
	$categories = get_the_category();
?>

<div class="lightgrey-bck full-width diagonal-bck-blog bigpadding credit-blog-bloc">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper container">

				<div class="blocktitle title-center clearfix">
					<h2><?php echo $title; ?></h2>
					<h4><?php echo $subtitle; ?></h4>
					</div>

				<div class="vc_row wpb_row vc_inner vc_row-fluid">
							<?php
							$args  = array(
							'posts_per_page'  => 2,
							'cat'   => $categories[0]->term_id,
							'orderby'         => 'post_date',
							'order'           => 'DESC',
							'post_type'       => 'post',
							'post_status'     => 'publish',
							);

							query_posts( $args );

							while ( have_posts() ) : the_post(); ?>

							<?php
							$thumbnail = get_the_post_thumbnail($post_id, 'blog-thumb');
							if (empty($thumbnail )) {
								$thumbnail = '<img src="https://multicredit.ch/wp/wp-content/uploads/blog-default-image.jpg" alt="thumbnail">';
							}
							?>

							<article class="vc_grid-item vc_clearfix vc_col-md-6 vc_col-sm-12 vc_visible-item  blog-block" data-aos="fade-in">
								<div class="vc_grid-item-inner vc_clearfix">
									<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
										<figure>
											<div class="figure-img">
										 		<?php echo $thumbnail;?>
											</div>
											<figcaption>
												<h3><?php the_title();?></h3>
												<p><?php echo wp_trim_words( get_the_excerpt(), 36, '...' ); ?>

												<div class="vc_btn3-container vc_btn3-right"></p>
													<div class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-flat"> <?php echo $btn ?> &rarr;</div>
												</div>

											</figcaption>
										</figure>
									</a>
								</div>
							</article>

							<?php endwhile;

							wp_reset_query();

							?>
					</div>
			</div>
		</div>
	</div>
</div>
