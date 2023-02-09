<?php get_header();
   global $post;
   $layout = insignia_page_layout();
?>
<div id="content" class="page-layout-<?php echo esc_attr( $layout ); ?>">
    <div class="main-page-content">
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div id="page-content" class="page-content-wrapper">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content page-content-inner">
                                <?php the_content(); ?>
                                <div class="entry-links"><?php wp_link_pages(); ?></div>
                            </div>
                        </article>
					<?php comments_template( '', true ); ?>
					</div>
				<?php
				// Page Sidebar
				if ( $layout != "full_width" ) {
					get_sidebar();    
				}
				?>
				<?php endwhile; endif; ?>
		  </div>
	   </div>
	</div>
<?php get_footer(); ?>