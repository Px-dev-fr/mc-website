<?php
	$btn = __( "Read more", 'multicredit');
	$thumbnail = get_the_post_thumbnail($post_id, 'blog-thumb');
	if (empty($thumbnail )) {
		$thumbnail = '<img src="https://multicredit.ch/wp/wp-content/uploads/blog-default-image.jpg" alt="thumbnail" />';
	}
	?>

<div class="vc_grid-item vc_clearfix col-lg-4 col-md-6 col-sm-12 vc_grid-item-zone-c-bottom vc_visible-item">
<div class="vc_grid-item-mini vc_clearfix">
	<div class="vc_gitem-animated-block">
		<div class="vc_gitem-zone vc_gitem-zone-a vc_gitem-is-link archive-img">
			<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="vc_gitem-link vc-zone-link">
			<?php echo $thumbnail;?>
		</a>
			<div class="vc_gitem-zone-mini">
			</div>
		</div>
	</div>
	<div class="vc_gitem-zone vc_gitem-zone-c">
		<div class="vc_gitem-zone-mini">
			<div class="vc_gitem_row vc_row vc_gitem-row-position-top">
				<div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
					<div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title">
						<h4 style="text-align: left"><?php the_title();?></h4>
					</div>
					<div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_excerpt">
						<p><?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?></p>
					</div>
					<div class="vc_btn3-container vc_btn3-left">
						<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-color-juicy-pink" href="<?php the_permalink(); ?>" title="<?php _e( "Read more", 'multicredit'); ?>"><?php _e( "Read more", 'multicredit'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="vc_clearfix"></div>
</div>
