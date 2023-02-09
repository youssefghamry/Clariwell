<?php
	if ( $posts -> have_posts() ) : ?>
		<div  class="blog-column-main-archive blog-element-main-archive <?php echo esc_attr($GLOBALS['insignia_css1']);?> <?php echo esc_attr($GLOBALS['insignia_blog_extra_class1']);?>">
			<div>
				<article class="blog-3-column ensign-carousel-slider slider blog-carousel-element">

				<?php while($posts->have_posts()) {
				$posts->the_post(); 
				?>

				<?php	
					get_template_part( 'inc/templates/blog/archive/blog','grid-content');
				?>
		
				<?php } ?>
				<?php endif; ?>

			<?php wp_reset_postdata(); ?>
			</article>
		</div>
	</div>