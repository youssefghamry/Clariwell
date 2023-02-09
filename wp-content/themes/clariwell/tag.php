<?php get_header();
    $layout = insignia_page_layout();
?>
<div id="content" class="page-layout-<?php echo esc_attr( $layout ); ?>">
	<div class="blog-main-archive">
		<div class="container">
			<div class="row">
				<div id="page-content" class="posts-container page-content-wrapper">
						<?php

						if (have_posts()) : while (have_posts()) : the_post();

							insignia_blog_post();

						endwhile;

						// Archive doesn't exist:
						else :

							echo '<div class="insignia-nothing-found"><p>' . esc_html__('Nothing 	found, sorry.','clariwell') . '</p></div>';

						endif;

						?>

						<?php insignia_pagination(); ?>

				    </div>

			<?php
			
			// Page Sidebar
			if ( $layout != "full_width" ) {
				get_sidebar();    
			}
			?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
