<?php get_header();
    $layout = insignia_page_layout();
?>
<div id="content" class="page-layout-<?php echo esc_attr( $layout ); ?>">
	<div class="blog-main-archive">
		<div class="container">
			<div class="row">
				<div id="page-content" class="posts-container page-content-wrapper">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('post entry-search clearfix margin-40px-bottom'); ?>>
							<div class="entry-wrap bg-light-gray padding-40px-all">
								<div class="entry-type text-uppercase text-medium-gray letter-spacing-1 font-weight-500 title-font text-small margin-10px-bottom">
								<?php if( get_post_type($post->ID) == 'post' ){ ?>
									<?php echo esc_html__('Blog Post', 'clariwell'); ?>
									<?php } elseif( get_post_type($post->ID) == 'page' ){ ?>
									<?php echo esc_html__('Page', 'clariwell'); ?>
									<?php } elseif( get_post_type($post->ID) == 'portfolio' ){ ?>
									<?php echo esc_html__('Portfolio Item', 'clariwell'); ?>
									<?php } elseif( get_post_type($post->ID) == 'product' ){ ?>
									<?php echo esc_html__('Product', 'clariwell'); ?>
								<?php } ?>
							</div>

							<div class="entry-title">
								<h4><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'clariwell'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
							</div>
						</div>
					</article><!-- #post -->
					
				<?php endwhile; ?>
		
				<?php ?>
			
				<?php else : ?>
			
				<div class="ins-search-page-form margin-60px-bottom text-center">
					<h2 class="margin-10px-bottom"><?php esc_html_e('Oops! Nothing Found', 'clariwell') ?></h2>
					<p><?php esc_html_e('Sorry! but nothing matched your search terms. Please try again with some different keywords.', 'clariwell') ?></p>
					<form action="<?php echo esc_url( home_url() ); ?>" id="searchform" class="clearfix">
						<input type="text" name="s" type="text" value="" placeholder="<?php echo esc_attr__( 'Search for', 'clariwell' ); ?>">
						<input type="submit" id="search-submit" value="<?php echo esc_attr__( 'Search', 'clariwell' ); ?>">
					</form>
				</div>
			
				<?php endif; ?>
				</div>

				<?php
				if (function_exists("insignia_pagination")) {
					insignia_pagination();
				} ?>

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
