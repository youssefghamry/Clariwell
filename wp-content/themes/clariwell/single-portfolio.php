<?php 
    $post = $wp_query->post;
    $post_id = $post->ID;
    get_header(); 

    $layout = 'full_width';
    $page_content_class = 'col-md-12';
    $css_classes = array();
    $css_classes[] = 'page-layout-' . esc_attr( $layout );

    // Portfolio Post Layout (Fullwidth or Side)

    $post_layout = 'side';

    if( ( $value = get_post_meta( get_the_ID(), "portfolio_layout", true ) ) != '' || ( $value = insignia_option( 'portfolio_layout' ) ) == 'fullwidth' ) {
		$post_layout = $value;
    }
    if(  get_post_meta( get_the_ID(), "portfolio_layout", true ) == 'default' ){
		$post_layout = insignia_option('portfolio_layout');
    }

    if ( insignia_option_true( 'portfolio_media_display' ) == true ) {
			$css_classes[] = 'portfolio-with-media';
		} else {
           $css_classes[] = 'portfolio-no-media';
		}

    if ( insignia_option_true( 'portfolio_details_display' ) == true ) {
			$css_classes[] = 'portfolio-with-details';
        } else {
	        $css_classes[] = 'portfolio-no-details';
        }

    $css_classes[] = 'portfolio-layout-' . $post_layout;

    if ( insignia_option( 'portfolio_details_display' ) != 'no' && insignia_option( 'portfolio_details_display' ) == true ) {
	    // Properly checked
    }
    ?>

    <div class="section-page portfolio-post <?php echo implode( ' ', $css_classes ); ?>"<?php insignia_page_content_styles(); ?>> 
	
	<div class="container">
	
		<div class="row">
		
			<div id="page-content" class="page-content portfolio-holder clearfix">
				
				<?php
				
				// Portfolio Post Media
				
				if ( insignia_option_true( 'portfolio_media_display' ) == true && function_exists( 'insignia_portfolio_media' ) ) { 
				
					insignia_portfolio_media( $post_id, $post_layout );
					
				} // End Portfolio Post Media
				
				?>
			
				<div class="portfolio-content">
				    <?php if ( '' !== get_post()->post_content || insignia_option_true( 'portfolio_project_heading' ) == true ){ ?>
					    <div class="portfolio-content-inner last-paragraph-no-margin">
							<?php
							
							// Post Content
							
							if( insignia_option_true( 'portfolio_project_heading' ) == true ) {
								echo '<h4 class="project-content-heading">' . esc_html__( 'Project Overview', 'clariwell' ) . '</h4>';
							}

							if ( have_posts() ) : while (have_posts()) : the_post(); 
								the_content(); // Use the post content
								endwhile; endif; 
							?>
					
					</div>
				
					<?php
					}
					//
					// Project Details
					//
					
					if ( insignia_option_true( 'portfolio_details_display' ) == true ) { ?>
						
						<div class="project-details padding-25px-all border-all border-radius-4">
						
							<?php
							
							if ( insignia_option_true( 'portfolio_details_heading' ) == true ) {
								echo '<h4 class="project-details-heading">' . esc_html__( 'Research Details', 'clariwell' ) . '</h4>';
							} ?>
							
							<ul class="project-details-list">
							
								<?php
								
								// Research Name
								
								if ( get_post_meta( $post->ID, 'research_name', true ) ) {
									echo '<li><span class="detail-label">' . esc_html__( 'Research Name', 'clariwell' ) . ':</span>';
									echo '<span class="detail-value">' . esc_html( get_post_meta( $post->ID, 'research_name', true ) ) . '</span></li>';
								}
								
								// Categories
								
								if( insignia_option_true( 'portfolio_display_categories' ) == true ) {
									echo '<li><span class="detail-label">' . esc_html__( 'Category', 'clariwell' ) . ':</span>';
									echo '<span class="detail-value">';
									insignia_print_plain_terms( 'portfolio_category' );
									echo '</span></li>';
								}
								
								// Client
								
								if ( get_post_meta( $post->ID, 'portfolio_client', true ) ) {
									$client = esc_html( get_post_meta( $post->ID, 'portfolio_client', true ) );
									if( get_post_meta( $post->ID, 'portfolio_client_url', true ) ) {
										$client = '<a href="' . esc_url( get_post_meta( $post->ID, 'portfolio_client_url', true ) ) . '" target="_blank">' .  $client . '</a>';
									}
									echo '<li><span class="detail-label">' . esc_html__( 'Client', 'clariwell' ) . ':</span>';
									echo '<span class="detail-value">' .  $client . '</span></li>';
								}
								
								// Research Year
								
								if( get_post_meta( $post->ID, 'research_year', true ) ) {
									echo '<li><span class="detail-label">' . esc_html__( 'Research Year', 'clariwell' ) . ':</span>';
									echo '<span class="detail-value">' . esc_html( get_post_meta( $post->ID, 'research_year', true ) ) . '</span></li>';
								}
								
								// Location
								
								if( get_post_meta( $post->ID, 'research_location', true ) ) {
									echo '<li><span class="detail-label">' . esc_html__( 'Location', 'clariwell' ) . ':</span>';
									echo '<span class="detail-value">' . esc_html( get_post_meta( $post->ID, 'research_location', true ) ) . '</span></li>';
								}
								
								// Extra field 1
								
								if( ( $value = get_post_meta( $post->ID, 'portfolio_extra1', true ) ) ) {
									echo '<li><span class="detail-label">' . esc_html( $value ) . ':</span>';
									echo '<span class="detail-value">' . esc_html( get_post_meta( $post->ID, 'portfolio_extra1_value', true ) ) . '</span></li>';
								}
								
								?>
							
							</ul>
						</div>
				<?php
					 }
				?>
				</div>
			</div>
			
		<?php
		
		// Social Sharing
		
		if ( function_exists( 'insignia_socials_sharing' ) && insignia_option_true( 'portfolio_sharing' ) == true ) {
			insignia_socials_sharing();
		}
		
		?>
		</div>
	</div>
	
	<?php
	
	// Post Nav
	
	if ( function_exists( 'insignia_portfolio_post_nav' ) && insignia_option_true( 'portfolio_navigation' ) == true ) {
		insignia_portfolio_post_nav();
	}
	
	?>

<?php get_footer(); ?>