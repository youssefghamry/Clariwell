<?php
	if(empty($GLOBALS['insignia_post_cat1'])){
		$args = array(
			'post_type' => 'post',
			'orderby' => $orderby,
			'order' => $order, 
			'posts_per_page' => $GLOBALS['insignia_blog_no_posts1'],
			'paged' => $GLOBALS['insignia_paged']
			); 
		} else{
		$args = array(
			'post_type' => 'post',
			'orderby' => $orderby,
			'order' => $order,
			'posts_per_page' => $GLOBALS['insignia_blog_no_posts1'],
			'category_name' => $GLOBALS['insignia_post_cat1'],
			'paged' => $GLOBALS['insignia_paged']
			);
		}
	$posts = new WP_Query($args);
	if (  	 $posts -> have_posts() ) : ?>
		<div  class="blog-column-main-archive blog-element-main-archive <?php echo esc_attr($GLOBALS['insignia_css1']);?> <?php echo esc_attr($GLOBALS['insignia_blog_extra_class1']);?> ">
	<div class="ajax_posts clearfix">
	    <?php if($blog_style == "blog_grid" || $blog_style == "blog_image" || $blog_style == "blog_classic" && $blog_layout != "Carousel" ){ ?>
		<div class="inv-blog-element-grid-wrapper inv-blog-element-article-holder" style="margin: 0 -<?php echo esc_attr($GLOBALS['insignia_blog_gap1']/2); ?>px;">
        <?php }else{ ?>
        <div class="inv-blog-element-grid-wrapper inv-blog-element-article-holder inv-blog-list-article-holder">
        <?php  }?>
			<div class="grid-sizer"></div>
		<?php while($posts->have_posts()) {
		$posts->the_post(); 
		?>
		<?php	
				get_template_part( 'inc/templates/blog/archive/blog','grid-content');  
		?>
		<?php } ?>
		<?php endif; ?>

		<?php wp_reset_postdata(); ?>

		</div>
		<?php if ( $posts -> have_posts() ) : ?>

		<?php global $insignia_count; $insignia_count = $post_count->post_count; ?>
			<div class="invictus-pagination-wrapper col-md-12 text-center">
			<?php 
			if($GLOBALS['insignia_blog_load_more1'] == "pagination"){
					if (function_exists("insignia_pagination")) {
						insignia_pagination($posts->max_num_pages);
					} 
				} 
			?>
			</div>
		<?php
			endif; 
		?>
	</div>
</div>