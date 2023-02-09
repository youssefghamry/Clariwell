<?php
	if($insignia_blog_out == "4Columns"){
			$inv_blog_column_main = "blog-col-4";  
	}
	elseif($insignia_blog_out == "3Columns"){
			$inv_blog_column_main = "blog-col-3";
	}
	else{
			$inv_blog_column_main = "blog-col-2";
	}

 if ( $posts -> have_posts() ) : ?>
	<div  class="blog-column-main-archive blog-element-masonry-main-archive  <?php echo esc_attr($GLOBALS['insignia_css1']);?> <?php echo esc_attr($GLOBALS['insignia_blog_extra_class1']);?>">
	<div class="ajax_posts clearfix">
		<div class="inv-blog-element-masonry-wrapper <?php echo esc_attr($inv_blog_column_main); ?> clearfix inv-blog-element-article-holder" style="margin: 0 -<?php echo esc_attr($GLOBALS['insignia_blog_gap1']/2); ?>px;">
		    <div class="grid-sizer"></div>
		    <?php while($posts->have_posts()) {
		        $posts->the_post();
		    ?>
		     <?php	
			    get_template_part( 'inc/templates/blog/archive/blog','masonry-content');
		    ?>
		    <?php } ?>
		    <?php endif; ?>
		    <?php wp_reset_postdata(); ?>
		</div>
		    <?php if ( $posts -> have_posts() ) : ?>
		    <?php $count = $post_count ->post_count; 
		       if($GLOBALS['insignia_blog_no_posts1'] < $count){ ?>
		        <div class="invictus-pagination-wrapper col-md-12 text-center">
		            <?php  
			            if($GLOBALS['insignia_blog_load_more1'] == "pagination"){
				            if (function_exists("insignia_pagination")) {
					                insignia_pagination($posts->max_num_pages);
				            } 
			             } 
		            ?>
		        </div>
		        <?php }
		      endif; ?>
	        </div>
        </div>