<?php get_header();
	$layout = 'full_width';
?>
<div id="content" class="page-layout-<?php echo esc_attr( $layout ); ?>">
	<div class="blog-main-archive">
		<div class="container">
		    <div class="row">
			    <div id="page-content" class="portfolio-container page-content-wrapper">
                    <div class="inv-portfolio-element-main-wrapper clearfix inv-portfolio-wapper inv-portfolio-hover-1-wrapper">
                    <?php
			            $port_filter = insignia_option('portfolio_filter');
			            $filter_class = 'inv-portfolio-filter-disabled';
			        ?>

			    <div class="inv-portfolio-element-holder <?php echo esc_attr($filter_class); ?>">
				    <div class="portfolio-article-holder clearfix <?php echo esc_attr(insignia_option('portfolio_layout')); ?> portfolio-col-3"> 
						<div class="grid-sizer"></div>
						<?php
						if ( have_posts()) : while ( have_posts()) : the_post();
							insignia_portfolio_post();
						endwhile;

						// Archive doesn't exist:
						else :
							echo '<div class="insignia-nothing-found"><p>' . esc_html__('Nothing found, sorry.','clariwell') . '</p></div>';
						 endif;
						wp_reset_postdata(); ?>
					</div>

				<div class="invictus-pagination-wrapper col-md-12">
					<?php 
						if(insignia_option('portfolio_pagination') == "enable" ){
							if (function_exists("insignia_pagination")) {
								insignia_pagination();
							} 
						} 
					?>
				</div> 

				</div>
			</div>
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