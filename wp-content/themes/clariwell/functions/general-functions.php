<?php

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
//
// 		General Theme Functions
//
// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

//
// Page Title Function
//

if ( !function_exists( 'insignia_get_title' ) ) {
	function insignia_get_title() {
	
		global $post;
		
		$post_id = get_the_ID();
	
		$page_title = get_the_title( $post_id );
		
		if ( is_home() && is_front_page() ) {
			$page_title = esc_html__( 'Blog', 'clariwell' );
		} elseif ( is_home() ) {
			$page_title = get_the_title( get_option( 'page_for_posts' ) );
		} elseif ( is_404() ) {
			$page_title = esc_html__( 'Page Not Found', 'clariwell' );
		} elseif ( is_search() ) {

		$result_title = "";

			global $wp_query;
		
			if( $wp_query->post_count == 1 ) {
				$result_title .= '1 Search result for:';
			} else {
				$result_title .= $wp_query->found_posts . ' ' . esc_html__('Search results for:', 'clariwell');
			}
			$result_title .= ' ' . get_search_query();
			$page_title = $result_title;

		} elseif ( is_archive() || is_tag() || is_category() || is_year() || is_month() ) {
			$page_title = esc_html__( 'Archives', 'clariwell' );
		}
		
		// WooCommerce

		if ( class_exists( 'Woocommerce' ) ) {

			$post_id = get_option( 'woocommerce_shop_page_id' );

		    if ( is_woocommerce() || is_product() || is_shop() || is_cart() || is_checkout() || is_account_page() ) {        
		    	$page_title = get_the_title( $post_id ); 
		    }
		}

		// Custom Title

		if ( get_post_meta( get_the_ID(), '_ins_custom_title', true ) != '' ) {
			$page_title = get_post_meta( get_the_ID(), '_ins_custom_title', true );
		}
		return $page_title;
	}
}

//
// Wrapper Classes
//

if ( !function_exists( "insignia_wrapper_classes" ) ) {
	function insignia_wrapper_classes() {
	
		$post_id = insignia_get_id();
	
		$classes = array();
		
		// Header Style:
		
		$header_position = insignia_option( 'header_position' );
		
		$classes[] = 'header-position-' . insignia_header_position();
		
		if ( $header_position == 'left' || $header_position == 'right' ) { // Aside Header
		
			$classes[] = 'header-' . $header_position;
			$classes[] = 'aside-' . $header_position;

			$classes[] = 'header-aside-visible';	
			$classes[] = 'aside-menu-open';		
			
		} else { // Top Header
		
			$header_style = insignia_header_style();
			//$classes[] = 'header-style-' . $header_style;
		
			if ( $header_style != 'classic' ) {
				$classes[] = 'header-style-' . $header_style;
			} else {
				$classes[] = 'header-style-classic';
			}
			
			if ( $header_style == 'top-logo' || $header_style == 'top-logo-center' ) {
				$classes[] = 'header-bottom-nav';
			}
			
			// Header Sticky
			
			if ( insignia_option( 'header_sticky' ) == 'not-sticky') {
				$classes[] = 'site-header-' . insignia_option( 'header_sticky' );
			} else {
				$classes[] = 'site-header-sticky';
			}
			
		}	
		
		// Page Title
		
		if ( insignia_pagetitle_enabled() == false ) {
			$classes[] = 'no-page-title';
		}
		
		// Theme Skin
		
		if ( insignia_option( 'theme_skin' ) == 'dark' ) {
			$classes[] = 'skin-dark';
		} else {
			$classes[] = 'skin-light';
		}
		
		if ( insignia_option( 'page_type' ) == 'one_pager' ) {
			$classes[] = 'one-pager';
		}
		
		// Custom
		
		if ( get_post_meta( insignia_get_id(), '_ins_wrapper_classes', true ) ) {
			$classes[] = esc_attr( get_post_meta( insignia_get_id(), '_ins_wrapper_classes', true ) );
		}
		
		echo implode( ' ', $classes );
		
	}
}

//
// Get Theme Options Value
//

if ( !function_exists( 'insignia_option' ) ) {
	function insignia_option( $option_name, $option_name_value = null ) {

		global $ins_opt;
		
		if ( is_array( $ins_opt ) ) {
		
			if ( $option_name_value == null) {
			
				if ( array_key_exists( $option_name, $ins_opt ) ) {
					return $ins_opt[ $option_name ];
				} else {
					return null;
				}
				
			} else {
			
				if ( array_key_exists( $option_name, $ins_opt ) && is_array( $ins_opt[ $option_name ] ) ) {
				
					if ( array_key_exists( $option_name_value, $ins_opt[ $option_name ] ) ) {
						return $ins_opt[ $option_name ][ $option_name_value ];
					}
					
				} else {
					return null;
				}
			}
		}
		return '';
	}
}

	if ( !function_exists( 'insignia_option_true' ) ) {
	function insignia_option_true( $option_name = null, $post_id = null ) {
        
		if ( !$option_name ) return false;
		if ( !$post_id ) $post_id = get_the_ID();
        
        if ( get_post_meta( $post_id, $option_name, true ) == 'default' || !get_post_meta( $post_id, $option_name, true ) ) {
            if ( insignia_option( 'g_' . $option_name ) == false ) {
                return false;
            } else {
                return true;
            }
        }
		
		if ( get_post_meta( $post_id, $option_name, true ) == 'yes' || get_post_meta( $post_id, $option_name, true ) != 'no' && insignia_option( 'g_' . $option_name ) == true ) {
			return true;
		}
		
		return false;
	}
}

//
// Insignia Page ID
//

function insignia_get_id() {

	global $post;
	
	$post_id = '';
	
	if ( is_object( $post ) ) {
		$post_id = $post->ID;
	}
	if ( is_home() || is_search() || is_archive() ) {
		$post_id = get_option( 'page_for_posts' );
	}
	
	if ( class_exists( 'Woocommerce' ) ) {
		if ( is_shop() && get_option( 'woocommerce_shop_page_id' ) ) {
			$post_id = get_option( 'woocommerce_shop_page_id' );
		}
	}
	
	return $post_id;
}

// Insignia Page Layout

if ( !function_exists( 'insignia_page_layout' ) ) {
	function insignia_page_layout( $page_id = null ) {
		$layout = 'full_width';

		if( !function_exists('clariwell_meta_includes') ) { 
		    if( is_singular('page') && is_active_sidebar( 'page_sidebar' ) ) { 
		            $layout = 'right_sidebar page-layout-one-sidebar'; 
		        }elseif(is_singular('post') && is_active_sidebar( 'default_sidebar' )){
		            $layout = 'right_sidebar page-layout-one-sidebar';
		        }elseif(is_front_page() && is_active_sidebar( 'default_sidebar' )){
		            $layout = 'right_sidebar page-layout-one-sidebar';
		        }elseif(is_archive() && is_active_sidebar( 'default_sidebar' )){
		            $layout = 'right_sidebar page-layout-one-sidebar';
		        }else{
		            $layout = 'full_width';
		        }
		}

		if ( !$page_id ) $page_id = get_the_ID();
		
		$meta_value = get_post_meta( $page_id, '_ins_select_layout', true );
		
		if ( $meta_value != '' && $meta_value != 'select_layout' ) {
			$page_layout = $meta_value;
		} elseif ( is_single() && get_post_type( $page_id ) == 'post' ) {
			$page_layout = insignia_option('blog_post_layout');
		} else {
			$page_layout = insignia_option('default-page-layout');
		}
		
		if ( class_exists( 'Woocommerce' ) ) {
			
			if ( is_shop() && ( $value = get_post_meta( get_option( 'woocommerce_shop_page_id' ), '_ins_select_layout', true ) ) ) {
				$page_layout = $value;
			}
		}
	
		if ( $page_layout == 'full_width' ) {
			$layout = 'full_width';
		} elseif ( $page_layout == 'right_sidebar' ) {
			$layout = 'right_sidebar page-layout-one-sidebar';
		} elseif ( $page_layout == 'left_sidebar' ) {
			$layout = 'left_sidebar page-layout-one-sidebar';
		}
		
		return $layout;
		
	}
}

// Insignia General Layout

if ( !function_exists( 'insignia_general_layout' ) ) {
	function insignia_general_layout( $layout = null ) {
	    
		$general_layout = 'full_width';
	
		if ( !$layout ) $layout = 'full_width';
		
		if ( $layout == 'right_sidebar' || $layout == 'left_sidebar' ) {
			$general_layout = 'one-sidebar';
		} 

		return 'page-layout-' . $general_layout;

	}
}

//
// Page title meta options
//

if ( !function_exists( 'insignia_pagetitle_meta' ) ) {
	function insignia_pagetitle_meta( $field_name, $array_key = false ) {
	
		$post_id = get_the_ID();
		
		if ( is_home() ) {
			$post_id = get_option( 'page_for_posts' );
		}
		
		if ( class_exists( 'Woocommerce' ) ) {
			if ( is_shop() && get_option( 'woocommerce_shop_page_id' ) ) {
				$post_id = get_option( 'woocommerce_shop_page_id' );
			}
		}
		
		$meta_value = get_post_meta( $post_id, '_ins_' . $field_name, true );
		
		if ( $array_key == false ) { // Non array value
		
			if ( is_array( $meta_value ) ) {
				if ( array_key_exists( 'url', $meta_value) && $meta_value['url'] != '' ) {
					return $meta_value;
				}
				return insignia_option( $field_name );
			}
			
			if ( $meta_value != '' && $meta_value != 'default' && $meta_value != insignia_option( $field_name ) ) {
				
				return $meta_value;
				
			}
			
		} else { // We're operating with an array value
		
			$global_value = insignia_option( $field_name ); // Get the value from the Theme Options panel
			
			if ( $meta_value[ $array_key ] != '' ) {
				return $meta_value[ $array_key ];
			} elseif ( $global_value[ $array_key ] != '' ) {
				return $global_value[ $array_key ];
			} else {
				return '';
			}
			
		}
		return insignia_option( $field_name );
	}
}

//
// If Page Title is enabled
//

if ( !function_exists( 'insignia_pagetitle_enabled' ) ) {
	function insignia_pagetitle_enabled() {
		
		$post_id = insignia_get_id();
		
		if ( get_post_meta( $post_id, 'custom_pagetitle', true ) == 'disable' || insignia_option( 'header_title') == false ) {
			return false;
		}
		
		return true;
	}
}

//
// Page Content Styles
//

if ( !function_exists( 'insignia_page_content_styles' ) ) {
	
	function insignia_page_content_styles() {
	
		return null;
		if ( insignia_pagetitle_enabled() == false ) return null;
		$post_id = get_the_ID();
	
		$css_classes = $css_styles = array();
		
		// Page Content Top and Bottom Padding
		
		$padding_meta = get_post_meta( get_the_ID(), 'page_content_padding', true );
		
		if ( $padding_meta && array_key_exists( 'padding-top', $padding_meta ) && $padding_meta[ 'padding-top' ] != '' ) {
			$padding = $padding_meta;
		} elseif( insignia_option( 'p_content_padding' ) ) {
			$padding = insignia_option( 'p_content_padding' );
		}

		if ( $padding != '' ) {

			$page_content_padding = $padding;
			
			// Padding Top
			
			if ( $page_content_padding['padding-top'] != '' ) {
				$css_styles[] = 'padding-top:' . str_replace( 'px', '', $page_content_padding['padding-top'] ) . 'px;';
			}
			
			// Padding Bottom
			
			if ( $page_content_padding['padding-bottom'] != '' ) {
				$css_styles[] = 'padding-bottom:' . str_replace( 'px', '', $page_content_padding['padding-bottom'] ) . 'px;';
			}

		}
		
		// Print inline CSS if necessary
		
		if ( !empty( $css_styles ) ) {
			echo 'style="' . esc_attr( implode( '', $css_styles ) ) . '"';
		}
		
	}
	
}

//
// Blog Post Title Category
//

if( !function_exists('insignia_blog_post_title_category') ) {
	function insignia_blog_post_title_category() {
		
		global $post;
		$post_id = get_the_ID();
		
		echo '<div class="category-wrap">';
			the_category();
		echo '</div>';
		  
	}
}

//
// Blog Post Title Meta
//

if( !function_exists('insignia_blog_post_title_meta') ) {
	function insignia_blog_post_title_meta() {
		
		global $post;
		$post_id = get_the_ID();

		$post_author_id = get_post_field( 'post_author', $post_id );
		$author = get_userdata( $post_author_id );
		
		echo '<div class="post-meta-wrap">';
		echo '<div class="post-author">';
		echo '<div class="author-avatar">';
		echo get_avatar( get_the_author_meta( 'ID' ), 30);
		echo '</div>';
			
		if( is_object( $author ) ) {
			echo '<div class="author-wrap">' . $author->display_name . '</div>';
		}

		echo '</div>';
		echo '<div class="date-wrap"> <i class="fa fa-clock-o" aria-hidden="true"></i>';
		the_time( get_option( 'date_format' ) );
		echo '</div></div>'; 

	}
}

//
// Blog Post Content
//

if( !function_exists( 'insignia_blog_post' ) ) {
	function insignia_blog_post( $page_layout = 'no_sidebar' ) {
		
		$post_id = get_the_ID();
		
		$post_format = get_post_format( $post_id );
		
		$extra_classes = array(); // Additional classes for the post
		
		// Define is post has any media
		
		$post_has_media = false;
		
		$extra_classes[] = 'inv-post-blog-item-holder inv-post-grid-one-main-wrapper col-md-12 col-lg-12 col-sm-12 col-xs-12 inv-post_full-width-img no-padding';
		
		if( has_post_thumbnail() || get_post_gallery() || $post_format == 'quote' || $post_format == 'audio' || $post_format == 'video' ) {
			$post_has_media = true;
		} else {
			$extra_classes[] = 'post-no-media';
		}
		
		$post_meta = true;
		
		?>
		
		<div <?php post_class( $extra_classes ); ?>>
		    <div class="inv-post-grid-one-inner blog-archive-custom-class">
		
			<?php
			
			if ( $post_has_media ) {
				// Image Size
				
				$img_size = 'full';
			
				insignia_post_media( $post_id, $post_format, $img_size ); // Print post media
			}
			
			?>
		
            <?php if ( has_post_thumbnail() ) { ?>
				<div class="inv-post-grid-one-content-wrap padding-40px-all border-all no-border-top">
			<?php }else{?>
			   	<div class="inv-post-grid-one-content-wrap padding-40px-all border-all">
			<?php } ?>
			
				<h3 class="title entry-post-title inv-post-grid-one-title post-default-layout-title margin-10px-bottom">
				<a href="<?php echo esc_url(get_permalink()); ?>" class="title-font text-extra-large font-weight-600 pc-hover"><?php the_title(); ?></a>
				</h3>
				
				<div class="inv-post-grid-one-meta text-extra-small display-inline-block text-uppercase text-medium-gray margin-15px-bottom">
				<span class="inv-post-grid-one-meta-wrapper"><span><?php echo the_time( get_option( 'date_format' ) ); ?></span><span class="blog-separator">|</span><span><?php echo the_category(', '); ?></span><?php if( function_exists( 'insignia_reading_time' ) ) {?> <span class="blog-separator">|</span><span> <?php echo insignia_reading_time();?> </span></span> <?php } ?></div>
				
				<div class="post-content <?php echo ( is_single() ? 'single-post-content' : 'post-excerpt' ); ?>">
					
					<div class="entry-excerpt inv-post-grid-one-excerpt">
						<?php the_excerpt(); ?>
					</div>
				    <div class="inv-post-grid-one-read-more">
					    <a class="inv-post-grid-one-btn-inner" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html__("Read More", "clariwell"); ?></a>
					</div>
					<div class="blog-author-box">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 50); ?> <?php echo esc_html__('by','clariwell'); ?> <?php the_author_posts_link(); ?>
					</div>
					
				</div>
			
			</div>
		
		</div>
		
		</div>
		
		<?php
	
	}
}

// Print blog post media: image, audio, video etc

if( !function_exists( 'insignia_post_media' ) ) {
	function insignia_post_media( $post_id, $post_format, $img_size = 'full' ) {
	
		if ($post_format == 'video') {
			get_template_part( 'inc/templates/blog/post','video'); 
		}
		elseif ($post_format == 'audio') {
			get_template_part( 'inc/templates/blog/post','audio'); 
		}
		elseif ($post_format == 'quote') {
			get_template_part( 'inc/templates/blog/post','quote'); 
		}
		elseif ($post_format == 'gallery') {
			get_template_part( 'inc/templates/blog/post','gallery'); 
		}else{
			if ( has_post_thumbnail($post_id) ) { ?>
				<a href="<?php echo esc_url(get_permalink()); ?>" class="display-block inv-archive-custom-link"><div class="thumbnail-image entry-thumb-wrap position-relative">
				<?php echo get_the_post_thumbnail( $post_id,$img_size); ?> 
				<div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div></div></a>
			<?php }
		}
	}
}

// Single Blog Post Tags

if( !function_exists( 'insignia_blog_post_tags' ) ) {
	function insignia_blog_post_tags() {
	
		if( has_tag() ) {
		
			echo '<div class="post-tags after-post-section margin-35px-tb">';
			
			the_tags('', '', '');
			
			echo '</div>';
		}
	}
}

if ( !function_exists( 'insignia_blog_post_author' ) ) {
	function insignia_blog_post_author() {
	
		global $post;
        
        $author_desc = '';
        $author_class = 'no-desc';

        if ( get_the_author_meta( 'description' ) != '' ) {
            $author_desc = get_the_author_meta( 'description' );
            $author_class = 'with-desc';
        }
		
		?>
		<div class="post-author after-post-section <?php echo esc_attr( $author_class ); ?> post-author after-post-section with-desc display-table width-100 border-all border-color-extra-light-gray padding-50px-all">
		
			<div class="post-author-avatar">
				<div class="post-author-circle"><?php echo get_avatar( get_the_author_meta('ID'), 100 ); ?></div>
			</div>		
            
			<div class="post-author-info">
				<h5 class="post-section-heading text-capitalize text-extra-large margin-5px-bottom margin-0px-top"><?php the_author(); ?></h5>
				<?php
        
                if ( $author_desc != '' ) {
                    echo '' . $author_desc;
                }
                    
				?>
			</div>	
		
		</div>
		<?php	
	}
}

if ( !function_exists( 'insignia_short_text' ) ) {
	function insignia_short_text( $text, $limit = null ) {
		if ( $limit == null ) $limit = 30;
		
		if ( strlen( $text ) > $limit ) {
			$text = substr( $text, 0, $limit ) . '...';
		}
		
		return esc_html( $text );
	}
}

// Blog Post Navigation

if( !function_exists( 'insignia_blog_post_nav' ) ) {
	function insignia_blog_post_nav() {
	?>
	
		<div id="ins-blog-post-nav" class="post-navigation blog-navigation after-post-section">
			<div class="container">
				<div class="row">
				<div class="ins-blog-post-nav-inner clearfix padding-35px-tb">
					<div class="col-xs-6 previous-post-wrap no-padding-left">
						<div class="previous-post">
							<?php
							
							$next_post = get_next_post();
							
							if ( !empty( $next_post ) ) {
							
							  echo '<a href="' . get_permalink( $next_post->ID ) . '" title="'. esc_html( $next_post->post_title ) . '">';
							  echo '<span class="side-icon side-prev-icon"><i class="fa fa-angle-left"></i></span>';
							  echo '<span class="post-nav-label previous-post-label">'. esc_html__( 'Previous Post', 'clariwell' ) . '</span>';
							  
							  echo '<span class="post-nav-title">' . insignia_short_text( $next_post->post_title, 45 ) . '</span>';
							  echo '</a>';
							  
							}
							
							?>
						</div>
					</div>
					
					<div class="col-xs-6 next-post-wrap no-padding-right">
						<div class="next-post">
							<?php
							
							$previous_post = get_previous_post();
							
							if ( !empty( $previous_post ) ) {
							
							  echo '<a href="' . get_permalink( $previous_post->ID ) . '" title="' . esc_html( $previous_post->post_title ) . '">';
							  echo '<span class="side-icon side-next-icon"><i class="fa fa-angle-right"></i></span>';
							  echo '<span class="post-nav-label next-post-label">'. esc_html__( 'Next Post', 'clariwell' ) . '</span>';
							  echo '<span class="post-nav-title">' . insignia_short_text( $previous_post->post_title, 45 ) . '</span>';
							  echo '</a>';
							  
							}
							
							?>
					</div>
				</div>
			</div>
		</div>
					
	</div>
</div>
		<?php
	}
}

//
//Categories
//

if ( !function_exists( 'insignia_print_plain_terms' ) ) {
	function insignia_print_plain_terms( $taxonomy = null ) {
		
		if ( !$taxonomy ) return false;
		
		$terms = wp_get_object_terms( get_the_ID(), $taxonomy );
		
		if ( !empty( $terms ) ) {
			foreach( $terms as $term ) {
				echo esc_html( $term->name );
				
				if ( $term === end( $terms ) ) {} else {
					echo ', ';
				}
			}
		}
		
		return false;
		
	}
}

//
// portfolio Post Content
//

if( !function_exists( 'insignia_portfolio_post' ) ) {
	function insignia_portfolio_post( $page_layout = 'no_sidebar' ) {
		
		$post_id = get_the_ID();
		global $post;
			
		$hover_style = insignia_option('portfolio_item_hover_style');
		$port_excerpt  = insignia_option('portfolio_item_excerpt');

		$port_terms = get_the_terms( $post->ID, 'portfolio_category' );
		if ( !empty( $port_terms ) ){
		$output = array();
		foreach ( $port_terms as $term ) { $output[] = $term->slug; } } 
		?>
		
		<article style="padding: 0 15px; margin-bottom:30px;" class="col-md-4 col-lg-4 col-sm-6 col-xs-12 inv-portfolio-hover-6 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> ">
			<div class="inv-portfolio-hover-6-content"> 	
				<div class="inv-portfolio-hover-1-thumb position-relative" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,'full')); ?>');">
				<?php if($hover_style == 'zoom_link'){ ?>
					<div class="portfolio-item-overlay-color" style="background-color:rgba(35, 40, 45, 0.65)">
						<div class="portfolio-item-overlay-icon item-overlay-zoom_link">
							<div class="portfolio-item-overlay-icon-inner">
								<div class="portfolio-item-overlay-icons">
								<a href="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,'full')); ?>" class="grid-gallery display-inline-block portfolio-overlay-icon-outer portfolio-image-lightbox"><i class="portfolio-overlay-icon fa fa-search text-extra-dark-gray"></i></a>
								<a href="<?php echo esc_url(get_permalink()); ?>" class="display-inline-block portfolio-overlay-icon-outer"><i class="portfolio-overlay-icon fa fa-link text-extra-dark-gray"></i></a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
				
				<div class="inv-portfolio-hover-6-entry-header padding-30px-all border-all no-border-top <?php echo insignia_option('portfolio_item_caption_align'); ?>">
				

					<?php if(insignia_option('portfolio_item_caption_content') == 'title_categories' ){ ?>
				
					<span class="inv-portfolio-hover-6-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
					if ( !empty( $terms ) ){
					foreach ( $terms as $term ) { ?>
					<a href=<?php echo esc_url(get_term_link($term)) ?>><span> <?php echo esc_html($term->name) ?> </span></a>
					<?php }  }
					} ?></span>
					
					<h5 class="inv-portfolio-hover-6-title display-block margin-0px-bottom"><a href="<?php echo esc_url(get_permalink()); ?>" class="text-black title-font margin-5px-bottom display-block"><?php the_title(); ?></a></h5>
					
				
				<?php if($port_excerpt == 'enable'){ ?>
					<div class="entry-excerpt inv-portfolio-excerpt margin-15px-top">
					<?php the_excerpt(); ?>
					</div>
				<?php } ?>
				
				</div>
			</div>
		</article>

<?php
	}
}

//
// Portfolio Post Nav
//

if( !function_exists('insignia_portfolio_post_nav') ) {
	function insignia_portfolio_post_nav() {
	
		global $post;
        
        $content = 'all';
        
        $title = $label = true;
        
        if ( insignia_option( 'por_nav_cont' ) == 'title' || insignia_option( 'por_nav_cont' ) == 'label' ) {
            $content = insignia_option( 'por_nav_cont' );
            
            if ( $content == 'title' ) {
                $label = false;
            } else {
                $title = false;
            }
        }
		
		?>

		<div class="portfolio-nav post-navigation portfolio-nav-cont-<?php echo esc_attr( $content ); ?> padding-30px-tb">
			<div class="container">
				<div class="row">
				
					<div class="col-xs-5 portfolio-nav-previous">
						<div class="previous-post">
						<?php
						
						$next_post = get_next_post();
						
						if ( !empty( $next_post ) ) {
						
						  echo '<a href="' . get_permalink( $next_post->ID ) . '">';
						  echo '<span class="side-icon side-prev-icon"><i class="fa fa-angle-left"></i></span>';
                            
                          if ( $label ) echo '<span class="post-nav-label previous-post-label">'. esc_html__( 'Previous Project', 'clariwell' ) . '</span>';
						  if ( $title ) echo '<span class="post-nav-title">' . $next_post->post_title . '</span>';
                            
						  echo '</a>';
						  
						}
						
						?>
						</div>
					</div>
					
					<div class="col-xs-2 portfolio-nav-grid">
						<div class="portfolio-nav-parent">
						<?php
						
						  echo '<a href="' . get_post_type_archive_link( 'portfolio' ) . '" title="' . esc_html__( 'View All', 'clariwell' ) . '"><i class="ti-layout-grid2"></i></a>';
						
						?>
						</div>
					</div>
					
					<div class="col-xs-5 portfolio-nav-next">
						<div class="next-post">
						<?php
						
						$previous_post = get_previous_post();
						
						if ( !empty( $previous_post ) ) {
						
						  echo '<a href="' . get_permalink( $previous_post->ID ) . '">';
						  echo '<span class="side-icon side-next-icon"><i class="fa fa-angle-right"></i></span>';
						  if ( $label ) echo '<span class="post-nav-label next-post-label">' . esc_html__( 'Next Project', 'clariwell' ) . '</span>';
						  if ( $title ) echo '<span class="post-nav-title">' . $previous_post->post_title . '</span>';
						  echo '</a>';
						  
						}
						
						?>
						<div class="next-post">
					</div>
					
				</div>
			</div>
		</div>
		</div>
	</div>
	<?php
	}
}

//
// Portfolio self-hosted Video
//

if ( !function_exists( 'insignia_portfolio_video' ) ) {
	function insignia_portfolio_video( $video_url, $featured_image_url ) {
		
		echo 
		'<div class="portfolio-video portfolio-video-self-hosted portfolio-media-element video-wrapper">
			<video class="video-js video-js-video vjs-sublime-skin" controls preload="auto" data-poster="' . $featured_image_url . '" data-setup="{}">
				<source src="' . esc_url( $video_url ) . '" type="video/mp4"/>
			</video>
		</div>';
		
	}
}

//
// Portfolio Media
//

if ( !function_exists( 'insignia_portfolio_media' ) ) {
	function insignia_portfolio_media( $post_id, $post_layout ) {
		
		?>
		
		<div class="portfolio-media">
							
		<?php
		
		$img_size = 'full';
		
		$featured_image =  get_post_thumbnail_id( $post_id );
		$featured_image_url  = get_the_post_thumbnail_url($post_id);
		
		$video = $gallery = false;
		
		// Video
		
		if( get_post_meta( $post_id, 'portfolio_video_type', true ) == 'oembed' && ( $video_url = get_post_meta( $post_id, 'portfolio_video_url', true ) ) != '' ) {
		
			// oEmbed Video
			$video = true;
			echo '<div class="portfolio-video portfolio-video-oembed portfolio-media-element oembed-video-container">' . wp_oembed_get( esc_url( $video_url ) ) . '</div>';
			
		} elseif( get_post_meta( $post_id, 'portfolio_video_type', true ) == 'self_hosted' && get_post_meta( $post_id, 'portfolio_video_file', true ) ) {
		
			// Self Hosted Video

			$video = true;
		
			$video_file = get_post_meta( $post_id, 'portfolio_video_file', true );
			
			if ( $video_file ) {
			
				$video_url = $video_file['url'];
				
				if ( function_exists( 'insignia_portfolio_video' ) ) {
					insignia_portfolio_video( $video_url, $featured_image_url );
				}
				
			} else {
				echo '<p class="missing-field">' . esc_html__('No video file selected.', 'clariwell') . '</p>';
			}
			
		}
		
		// Image Gallery
		
		$img_gallery = get_post_meta( $post_id, 'portfolio_gallery', true );
		
		if ( $img_gallery && $img_gallery != '' ) {
		
			echo '<div class="portfolio-gallery portfolio-media-element">';
			
			$gallery_images = get_post_meta( $post_id, 'portfolio_gallery', true );
			
			if ( ! empty( $gallery_images ) ) {	
				$gallery =  get_post_meta( $post_id, 'portfolio_gallery', true );
				
				$gallery_type = 'slider';
				$holder_class = '';
				
				if( ( $value = get_post_meta( get_the_ID(), "portfolio_gallery_type", true ) ) != '' || ( $value = insignia_option( 'portfolio_gallery_type' ) ) != 'slider' ) {
					$gallery_type = $value;
				}
				
				if( $gallery_type == 'slider' ) {	
					echo '<div class="post-gallery-wrapper"><div class="post-image-gallery slider">';	
					$holder_class = 'image-slider';
				} else {
					echo '<div class="portfolio-image-list">';
					$holder_class = 'image-list-item';
				}
				
				foreach( $gallery as $image_id ) {
					
					$img_url  = $image_id;
					$image = wp_get_attachment_image_src( $image_id, 'full' );
					$big_img_url = $image[0];
					 
					echo '<div class="' . $holder_class . ' "><a href="' . esc_url( $img_url ) . '"  class="portfolio-image-lightbox"><img src="' . esc_url( $img_url ) . '" alt="' . esc_attr__( "Portfolio Image" , "clariwell") . '"></a></div>';
					
				}
				
				if( $gallery_type == 'slider' ) {	
					echo '</div>';
				}
				
				echo '</div>';
			
			} else { // Singular image in Gallery
				//echo 'Single image';
			}
			
			echo '</div>';
			
		}
		
		// Featured Image
		
		if( $video == false && $gallery == false ) {	
			
			echo '<a href="' . esc_url( $featured_image_url ) . '" class="portfolio-image-lightbox"><img class="portfolio-post-featured-image portfolio-media-element" src="' . $featured_image_url . '" alt="' . esc_attr__( "Portfolio Image" , "clariwell") . '"></a>';
		}
		
		// Extra content
		
		if( ( $value = get_post_meta( $post_id, 'portfolio_info', true ) ) ) {
		
			if (have_posts()) : while (have_posts()) : the_post(); 
			   
			    echo '<div class="portfolio-extra-content">';
				the_content();
				echo '</div>';
			          
			endwhile; endif; 
			
		}
		
		?>
		
		</div>
		
		<?php
	}
}

// Custom HTML code

if ( !function_exists( 'insignia_custom_html' ) ) {
	function insignia_custom_html() {
		
		if ( insignia_option( 'custom_html' ) != '' ) {
			echo insignia_option( 'custom_html' );
		}
		
	}
}

//site pre-loader
if ( !function_exists( 'insignia_page_loader' ) ) {
	function insignia_page_loader() {
		echo '<div class="page-loader-wrapper"><div class="page-loader"></div></div>';
	}
}

// Insignia Social Profiles

if ( !function_exists( 'insignia_print_social_icons' ) ) {
	function insignia_print_social_icons() {
?>

		<div class="insignia-main-social-icons clearfix">
			<ul class="clearfix">
				<?php if(insignia_option('social_dribbble') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_dribbble')); ?>" target="_blank" title="<?php esc_attr_e( 'Dribbble', 'clariwell' ) ?>"><i class="fa fa-dribbble"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_facebook') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_facebook')); ?>" target="_blank" title="<?php esc_attr_e( 'Facebook', 'clariwell' ) ?>"><i class="fa fa-facebook"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_foursquare') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_foursquare')); ?>" target="_blank" title="<?php esc_attr_e( 'Foursquare', 'clariwell' ) ?>"><i class="fa fa-foursquare"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_flickr') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_flickr')); ?>" target="_blank" title="<?php esc_attr_e( 'Flickr', 'clariwell' ) ?>"><i class="fa fa-flickr"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_github') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_github')); ?>" target="_blank" title="<?php esc_attr_e( 'Github', 'clariwell' ) ?>"><i class="fa fa-github"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_googleplus') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_googleplus')); ?>" target="_blank" title="<?php esc_attr_e( 'Google+', 'clariwell' ) ?>"><i class="fa fa-google-plus"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_instagram') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_instagram')); ?>" target="_blank" title="<?php esc_attr_e( 'Instagram', 'clariwell' ) ?>"><i class="fa fa-instagram"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_linkedin') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_linkedin')); ?>" target="_blank" title="<?php esc_attr_e( 'LinkedIn', 'clariwell' ) ?>"><i class="fa fa-linkedin"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_pinterest') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_pinterest')); ?>" target="_blank" title="<?php esc_attr_e( 'Pinterest', 'clariwell' ) ?>"><i class="fa fa-pinterest"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_renren') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_renren')); ?>" target="_blank" title="<?php esc_attr_e( 'Renren', 'clariwell' ) ?>"><i class="fa fa-renren"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_rss') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_rss')); ?>" target="_blank" title="<?php esc_attr_e( 'RSS', 'clariwell' ) ?>"><i class="fa fa-rss"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_skype') != "") { ?>
					<li><a href="<?php echo esc_attr(insignia_option('social_skype')); ?>" target="_blank" title="<?php esc_attr_e( 'Skype', 'clariwell' ) ?>"><i class="fa fa-skype"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_soundcloud') != "") { ?>
					<li><a href="<?php echo esc_attr(insignia_option('social_soundcloud')); ?>" target="_blank" title="<?php esc_attr_e( 'Soundcloud', 'clariwell' ) ?>"><i class="fa fa-soundcloud"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_stackoverflow') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_stackoverflow')); ?>" target="_blank" title="<?php esc_attr_e( 'Stack Overflow', 'clariwell' ) ?>"><i class="fa fa-stack-overflow"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_twitter') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_twitter')); ?>" target="_blank" title="<?php esc_attr_e( 'Twitter', 'clariwell' ) ?>"><i class="fa fa-twitter"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_tumblr') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_tumblr')); ?>" target="_blank" title="<?php esc_attr_e( 'Tumblr', 'clariwell' ) ?>"><i class="fa fa-tumblr"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_vimeo') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_vimeo')); ?>" target="_blank" title="<?php esc_attr_e( 'Vimeo', 'clariwell' ) ?>"><i class="fa fa-vimeo-square"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_vk') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_vk')); ?>" target="_blank" title="<?php esc_attr_e( 'VK', 'clariwell' ) ?>"><i class="fa fa-vk"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_weibo') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_weibo')); ?>" target="_blank" title="<?php esc_attr_e( 'Weibo', 'clariwell' ) ?>"><i class="fa fa-weibo"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_xing') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_xing')); ?>" target="_blank" title="<?php esc_attr_e( 'Xing', 'clariwell' ) ?>"><i class="fa fa-xing"></i></a></li>
				<?php } ?>
				<?php if(insignia_option('social_youtube') != "") { ?>
					<li><a href="<?php echo esc_url(insignia_option('social_youtube')); ?>" target="_blank" title="<?php esc_attr_e( 'YouTube', 'clariwell' ) ?>"><i class="fa fa-youtube-play"></i></a></li>
				<?php } ?>
			</ul>
		</div>

<?php
	}
} 

if (class_exists('Vc_Manager')) {

	/*** insignia tabs layout ***/

	if( !function_exists( 'insignia_vc_update_defaults' ) ) {
		function insignia_vc_update_defaults() {

		// Add VC Tabs styles
			
			$param = WPBMap::getParam( 'vc_tta_tabs', 'style' );
			$param['value'][esc_html__( 'Insignia layout 1', "clariwell" )] = "insignia_tab_layout1 title-font";
			$param['value'][esc_html__( 'Insignia layout 2', "clariwell" )] = "insignia_tab_layout2 title-font";
			$param['value'][esc_html__( 'Insignia layout 3', "clariwell" )] = "insignia_tab_layout3 title-font";
			
			vc_update_shortcode_param( 'vc_tta_tabs', $param );

		// Add VC Tour styles

			$param = WPBMap::getParam( 'vc_tta_tour', 'style' );
				$param['value'][esc_html__( 'Insignia layout 1', "clariwell" )] = "insignia_tour_layout1 title-font";
		
			vc_update_shortcode_param( 'vc_tta_tour', $param );
			
		// Add VC Accordion styles
			
			$param = WPBMap::getParam( 'vc_tta_accordion', 'style' );
				$param['value'][esc_html__( 'Insignia layout 1', "clariwell" )] = "insignia_accordion_layout1";
			

			vc_update_shortcode_param( 'vc_tta_accordion', $param );
		
		}
	}
	add_action( 'init', 'insignia_vc_update_defaults', 100 ); // Visual Composer Defaults


	/*** VC Row Styling ***/

	/** Background Image Overlay **/

	function insignia_overlay_array( $accent = null ) {
		$bg_overlay_arr = array(
			esc_html__( "None", "clariwell" ) => "none",
			esc_html__( "Dark 10%", "clariwell" ) => "dark10",
			esc_html__( "Dark 20%", "clariwell" ) => "dark20",
			esc_html__( "Dark 30%", "clariwell" ) => "dark30",
			esc_html__( "Dark 40%", "clariwell" ) => "dark40",
			esc_html__( "Dark 50%", "clariwell" ) => "dark50",
			esc_html__( "Dark 60%", "clariwell" ) => "dark60",
			esc_html__( "Dark 70%", "clariwell" ) => "dark70",
			esc_html__( "Dark 80%", "clariwell" ) => "dark80",
			esc_html__( "Dark 90%", "clariwell" ) => "dark90",
			esc_html__( "Light 20%", "clariwell" ) => "light20",
			esc_html__( "Light 40%", "clariwell" ) => "light40",
			esc_html__( "Light 60%", "clariwell" ) => "light60",
			esc_html__( "Light 80%", "clariwell" ) => "light80",
		);
		
		return $bg_overlay_arr;
	}

	/** Gradient row background **/


	function insignia_vc_gradient_color1( $group_name = 'Styling' ) {
		return array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Background Gradient Color 1', "clariwell" ),
			'param_name' => 'bg_gradient1',
			"class" => "hidden-label",
			'value' => '', // default video url
			'description' => esc_html__( 'Choose a first (top) color for the background gradient. Leave blank to disable.', "clariwell" ),
			'group' => $group_name,
			'edit_field_class' => 'vc_col-sm-6',
		);
	}

	function insignia_vc_gradient_color2( $group_name = 'Styling' ) {
		return array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Background Gradient Color 2', "clariwell" ),
			'param_name' => 'bg_gradient2',
			"class" => "hidden-label",
			'value' => '', // default video url
			'description' => esc_html__( 'Choose a second (bottom) color for the background gradient.', "clariwell" ),
			'group' => $group_name,
			'edit_field_class' => 'vc_col-sm-6',
		);
	}


	// VC Row

	/** Row Text Color Scheme **/


	vc_add_param( "vc_row", array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Text Color Scheme", "clariwell" ),
		"param_name" => "color_scheme",
		"value" => array(
			esc_html__( "Default", 'clariwell' ) => "",
			esc_html__( "Light Scheme", 'clariwell' ) => "white",
			esc_html__( "Dark Scheme", 'clariwell' ) => "dark"
		),
		"description" => esc_html__( "White Scheme - all text styled to white color, recommended for dark backgrounds. Suitable for rows with a dark background image or color.", "clariwell" ),
		"group" => esc_html__( "Styling", 'clariwell' )
	) );

	vc_add_param( "vc_row", array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Background Image Overlay", 'clariwell' ),
		"param_name" => "bg_overlay",
		"value" => insignia_overlay_array( true ),
		"description" => esc_html__( "Enable the row's background overlay to darken or lighten the background image.", "clariwell" ),
		"group" => esc_html__( "Styling", 'clariwell' )
	) );

	vc_add_param( "vc_row", insignia_vc_gradient_color1() );
	vc_add_param( "vc_row", insignia_vc_gradient_color2() );


	if ( !function_exists( 'insignia_css_gradient' ) ) {
		function insignia_css_gradient( $color_start, $color_end, $angle = -32, $full = true ) {
		
			$return = 'linear-gradient( ' . str_replace( 'deg', '', $angle ) . 'deg,' . esc_attr( $color_end ) . ',' . esc_attr( $color_start ) . ' )';
			
			if ( $full == true ) {
				return 'background:' . $color_start . ';background:' . $return . ';';
			}
			
			return $return;
		}
	}

	vc_add_param( "vc_column", array(
		"type" => "checkbox",
		"class" => "",
		"heading" => esc_html__( "Enable Shadow", "clariwell" ),
		"param_name" => "enable_shadow",
			"value" => array(
					esc_html__( "Yes", "clariwell" ) => "true",
				),
		"description" => esc_html__( "Enable column shadow", "clariwell" ) 
	) );

}
/****** Woocommerce custom column ******/

add_filter('loop_shop_columns', 'insignia_loop_columns');
if (!function_exists('insignia_loop_columns')) {
	function insignia_loop_columns() {
		return 999; // 3 products per row
	}
}

add_filter( 'post_class', 'prefix_post_class', 21, 3 ); //woocommerce use priority 20, so if you want to do something after they finish be more lazy
function prefix_post_class( $classes ) {
    if (class_exists( 'WooCommerce' ) && is_shop()){
		if ( 'product' == get_post_type() ) {
			$classes = array_diff( $classes, array( 'last','first' ) );
		}
}
	return $classes;
} 