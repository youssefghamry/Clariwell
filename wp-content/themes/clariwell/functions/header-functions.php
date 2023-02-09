<?php

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
//
// 		Header related functions
//
// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-


//
// Main site logo
//

if ( !function_exists( 'insignia_site_logo' ) ) {
	function insignia_site_logo( $header_style = null ) {
	
		$logo_img = $logo_img_secondary = $inline_css = '';

		$logo_img_dark = $logo_img_white = insignia_option( 'site_logo', 'url' );
		
		if ( insignia_option( 'site_logo_white', 'url' ) ) {
			$logo_img_white = insignia_option( 'site_logo_white', 'url' );
		}
		
		if ( ( $height = insignia_option( 'logo_height' ) ) ) {
			$margin_top = 0 - ( $height / 2 );
			$inline_css .= 'height:' . esc_attr( $height ) . 'px;margin-top:' . esc_attr( $margin_top ) . 'px';
		}
		
		if ( $inline_css ) $inline_css = ' style="' . $inline_css . '"';
		
		if ( $logo_img_dark == null ) {
			$logo_img_dark = get_template_directory_uri() . '/assets/img/logo-dark.png';
			$logo_img_white = get_template_directory_uri() . '/assets/img/logo-light.png';
		}
		
		echo '<a href="' . esc_url( insignia_logo_url() ) . '" class="logo-link">';
		if (insignia_option('ins-logo-style') == '1'){
			echo '<img src="' . esc_url( $logo_img_dark ) . '" alt="' . esc_attr__( "logo" , "clariwell") . '" class="logo-dark"' . $inline_css . '>';
			
			echo '<img src="' . esc_url( $logo_img_white ) . '" alt="' . esc_attr__( "logo" , "clariwell") . '" class="logo-white"' . $inline_css . '>';
			
			if ( insignia_option( 'logo_mobile', 'url' ) ) {
				echo '<img src="' . esc_url( insignia_option( 'logo_mobile', 'url' ) ) . '" alt="' . esc_attr__( "logo" , "clariwell") . '" class="logo-mobile"' . $inline_css . '>';
			}
		}
		elseif(insignia_option('ins-logo-style') == '2'){
		
		echo '<span class="ins-text-logo">'.esc_html(insignia_option('ins-text-logo')). '</span>';
		    
		}else{
		    echo '<span class="ins-text-logo">'.esc_html("clariwell"). '</span>';
		}
		echo '</a>';
	}
}

// LOGO URL

if ( !function_exists( 'insignia_logo_url' ) ) {
	function insignia_logo_url() {
		
		return site_url();

	}
} 

// Insignia custom _kses

if ( !function_exists( 'insignia_kses' ) ) {
	function insignia_kses() {
		
		$allowed = array(
			'a' => array(
				'href' => array(),
				'alt' => array(),
				'text' => array()
			),
			'strong' => array(),
			'span' => array(
			    'class' => array(),
			    'style' => array()
			),
            'br' => array()
		);
		
		return $allowed;
		
	}
}

// Header Style

if ( !function_exists( 'insignia_header_style' ) ) {
	function insignia_header_style() {
		global $post;
		
		$style = 'classic';
		
		$style = insignia_option( 'header_style' );
		
		return $style;
	}
}

if ( !function_exists( 'insignia_header_position' ) ) {
	function insignia_header_position() {
		
		$position = 'top';
		
		if ( insignia_option( 'header_position' ) == 'left' || insignia_option( 'header_position' ) == 'right' ) {
			$position = 'aside';
		}
		
		return $position;
	}
}

// Header Skin

if ( !function_exists( 'insignia_header_skin' ) ) {
	function insignia_header_skin() {
		
		$header_skin = 'light';

		if ( insignia_option( 'header_skin' ) == 'dark' ) {
			$header_skin = 'dark';
		}
		
		return $header_skin;
		
	}
}

// Header Skin Color

if ( !function_exists( 'insignia_header_scroll_skin' ) ) {
	function insignia_header_scroll_skin() {
		
		$header_skin = insignia_option( 'header_skin' );
		$scroll_header = insignia_option( 'header_scroll_skin' );
		
		if ( $scroll_header == '' || $scroll_header == 'same' ) {
			return $header_skin;
		} elseif ( $scroll_header == 'dark' ) {
			return 'dark';
		} else {
			return 'light';
		}
		
	}
}

// Height of the header after scroll

if ( !function_exists( 'insignia_header_scroll_height' ) ) {
	function insignia_header_scroll_height() {
	
		if ( ( $header_scroll_height = insignia_option( 'header_scroll_height' ) ) != '' ) {
			echo esc_attr( $header_scroll_height );
		} else {
			echo 60;
		}
		
	}
}

if ( !function_exists( 'insignia_header_scroll_animation' ) ) {
	function insignia_header_scroll_animation() {
	
		echo 'default';
		
	}
}

if ( !function_exists( 'insignia_header_container' ) ) {
	function insignia_header_container() {
		
		if ( insignia_option( 'header_container' ) == 'fullwidth' ) {
			return 'fullwidth';
		}
		
		return false;
	}
}

// Header Color

if ( !function_exists( 'insignia_header_color' ) ) {
	function insignia_header_color() {
		
		$header_color = '#fff';
		
		if ( insignia_header_skin() == 'dark' ) {
			$header_color = '#202020';
		}	
		
		if ( insignia_option( 'header_color' ) != '' ) {
			$header_color = insignia_option( 'header_color' )['rgba'];
		}
		
		return $header_color;
		
	}
}

// Header Classes

if ( !function_exists( "insignia_header_classes" ) ) {
	function insignia_header_classes(){
	
		$header_style = insignia_header_style();
		$classes = array();
		
		$classes[] = 'site-header';

		// Header Skin
		
		$classes[] = 'header-' . insignia_header_skin();
		
		// Header Scroll Skin
		
		$classes[] = 'header-scroll-' . insignia_header_scroll_skin();
		
		// Topbar
		
		if (insignia_option( 'topbar' )) {
			$classes[] = 'with-topbar';
		}
		
		if ( $header_style == 'top-center-logo' ) {
			$classes[] = 'top-logo-center';
		} elseif ( $header_style == 'top-center' ) {
			$classes[] = 'nav-logo-center';
		} elseif ( $header_style == 'classic-subtitles' ) {
			$classes[] = 'menu-subtitle';
		}
		
		// Logos
		
		if ( insignia_option( 'logo_mobile', 'url' ) ) {
			$classes[] = 'has-mobile-logo';
		}
        
        // Mobile header classes
        
        if ( insignia_option( 'mobileh_layout' ) == 'logo_center' ) {
            $classes[] = 'm-layout-center';
        }
        
        if ( insignia_option( 'mobileh_sticky' ) == 'yes' ) {
            $classes[] = 'm-sticky';
        } else {
            $classes[] = 'm-not-sticky';
        }
        
		// Mobile behaviour
			
		if ( insignia_option( 'mobile_dropdown' ) == 'arrow' ) {
			$classes[] = 'mobile-dropdown-arrow';
		} else {
			$classes[] = 'mobile-dropdown-parent';
		}
		
		// Header Styling
			
		if ( insignia_header_position() == 'top' ) {
				
			if ( insignia_option( 'header_sticky' ) == 'not-sticky') {
				$classes[] = 'header-' . insignia_option( 'header_sticky' );
			} else {
				$classes[] = 'header-sticky';
			}
				
		}
		
		if ( insignia_option( 'dropdown_skin' ) == 'white' ) {
				$classes[] = 'dropdown-white';
			} else {
				$classes[] = 'dropdown-dark';
			}
		
		// Header Separator
		
		// Default: 
		// Box shadow for not transparent
		// Border for transparent
		
		$header_separator = 'shadow';
		
		if ( ( $value = insignia_option( 'header_separator' ) ) != '' ) {
			$header_separator = $value;
		}
		
		$classes[] = 'header-separator-' . esc_attr( $header_separator );
		
		echo esc_attr( implode( ' ', $classes ) );
		
	}
}

//
// Top Bar
//

if ( !function_exists( 'insignia_print_topbar' ) ) {
	function insignia_print_topbar( $container_class = null ) {
	
		$topbar_skin = 'light';
		
		if ( insignia_option( 'topbar_skin' ) == 'dark' || insignia_header_skin() == 'dark' && insignia_option( 'topbar_skin' ) == ''  ) {
			$topbar_skin = 'dark';
		}
		
		$topbar_class = 'white-pagetop';
		
		if ( insignia_header_style() == 'style-transparent' ) {
			$topbar_class = 'transparent-pagetop';
		}
		
		?>
		
		<!-- BEGIN TOPBAR -->
		<div id="topbar" class="topbar topbar-<?php echo esc_attr( $topbar_skin ); ?>">
		  <div class="container<?php if ( $container_class ) echo esc_attr( $container_class ); ?>">
			<div class="topbar-left">
				<?php insignia_topbar_content( 'left' ); ?>
			</div>
			<div class="topbar-right">
				<?php insignia_topbar_content( 'right' ); ?>
			</div>
		  </div>
		</div>
		<!-- END TOPBAR -->
	<?php
	}
}

// Topbar Content

if ( !function_exists( 'insignia_topbar_content' ) ) {
	function insignia_topbar_content( $side ) {
		
		$type = insignia_option( 'topbar_' . $side );
		
		$top_bar_text = insignia_option( 'topbar_text_' . $side );
		
		$bar_text = do_shortcode( $top_bar_text );
		
		// If more than 1 WPML language, display switcher
		
		if ( function_exists( 'icl_get_languages' ) && sizeof( icl_get_languages( 'skip_missing=0' ) ) > 1 && $side == 'right' && insignia_option( 'topbar_wpml' ) ) {
			insignia_topbar_langs();
		}
		
		// Switch content type
			
		if ( $type == 'social' ) {
		
			echo '<div class="topbar-section topbar-social">';
			
			insignia_print_social_icons();
			
			echo '</div>';
		
		} elseif ( $type == 'menu' ) {
		
			echo '<div class="topbar-section topbar-menu">';
		
			wp_nav_menu( array( 'theme_location' => 'topbar' ) );
			
			echo '</div>';
		
		} elseif ( $type == 'textsocial' ) {
		
			echo '<p class="topbar-section topbar-text topbar-text-socials">' . $bar_text . '</p>';
			echo '<div class="topbar-section topbar-social">';
			
			insignia_print_social_icons();
			
			echo '</div>';
			
		} else {
			echo '<div class="topbar-section topbar-text"><p>' . $bar_text . '</p></div>';	
		}
	
	}
}

//top content for 'top-logo' header style

if ( !function_exists( 'insignia_header_top_content' ) ) {
	function insignia_header_top_content() {
		
		echo '<div class="header-extra-content">';
		
		if ( insignia_option( 'header_top_text' ) ) {
			echo '<div class="header-extra-text">';
			
			echo wp_kses( insignia_option( 'header_top_text' ), insignia_kses() );
			
			echo '</div>';
		}
		
		if ( insignia_option( 'header_top_social' ) == true ) {
			echo '<div class="header-extra-social">';
			insignia_print_social_icons();
			echo '</div>';
		}
		
		echo '</div>';
		
	}
}

// Navigation Menu

if ( !function_exists( 'insignia_nav_menu' ) ) {
	function insignia_nav_menu( $location = null ) {
		global $post;
		
		$style = 'default';
		$menu_location = 'primary';
		
		if ( $location == 'split-nav' ) {
		
			if ( insignia_option( 'header_split_nav' ) != '' ) {
				
				wp_nav_menu( array(
					'menu' 		=> insignia_option( 'header_split_nav' ),
					'container' 	=> false,
					'menu_class' 	=> 'nav',
					'walker' 	=> new insignia_Custom_Menu_Class()
				)); 
				
				return;
				
			} else {
				echo '<p class="insignia-no-nav">' . esc_html__( 'No secondary menu found.', 'clariwell' ) . '</p>';
				
				return;
			}
			
		}
		
		if ( has_nav_menu( 'primary' ) ) {
			
				wp_nav_menu( array(
					'theme_location'	=> $menu_location,
					'menu_id' 		=> 'menu-main-navigation',
					'container' 		=> false,
					'menu_class' 		=> 'nav',
					'walker' 		=> new insignia_Custom_Menu_Class()
				));  
			
		} else {
			
		}
	}
}

//Header button

if ( !function_exists( "insignia_header_button" ) ) {
	function insignia_header_button(){

		/* Button style and color scheme */
		$button_style_class = '';
		if (!empty(insignia_option('ins-header-button-style'))) {
			if (insignia_option('ins-header-button-style') == 'solid-button') {
				$button_style_class .= 'ins_solid_button';
			} elseif (insignia_option('ins-header-button-style') == 'outline-button') {
				$button_style_class .= 'ins_outline_button';
			} else {
				$button_style_class .= 'ins_solid_button';
			}
		}

		if (!empty(insignia_option('ins-header-button-color'))) {
			if (insignia_option('ins-header-button-color') == 'primary-color') {
				$button_style_class .= ' btn_primary_color ';
			} elseif (insignia_option('ins-header-button-color') == 'secondary-color') {
				$button_style_class .= ' btn_secondary_color ';
			} else {
				$button_style_class .= ' btn_primary_color ';
			}
		}

		if (!empty(insignia_option('ins-header-button-hover-style'))) {
			$button_style_class .= insignia_option('ins-header-button-hover-style');
		}

		if (insignia_option('ins-header-button') && (insignia_option('ins-header-button-action') == '1')) : ?>
			<div class="header-menu-button"><a class="modal-menu-item menu-item ins_header_button <?php echo esc_html($button_style_class); ?>" data-toggle="modal" data-target="#popup-modal"><?php echo esc_html(insignia_option('ins-header-button-text'));?></a></div>
			<?php elseif (insignia_option('ins-header-button') && (insignia_option('ins-header-button-action') == '2')) : ?>
				<?php if (!empty(insignia_option('ins-scroll-id')) && insignia_option('ins-scroll-id') != '' ) : ?>
					<div class="header-menu-button"><a class="modal-menu-item menu-item scroll-section ins_header_button <?php echo esc_html($button_style_class); ?>" href="<?php if( is_page('Home')) { echo esc_html(insignia_option('ins-scroll-id')); } else { echo esc_url(site_url()) . esc_html(insignia_option('ins-scroll-id'));} ?>"><?php echo esc_html(insignia_option('ins-header-button-text'));?></a></div>
				<?php endif; ?>
			<?php elseif (insignia_option('ins-header-button') && (insignia_option('ins-header-button-action') == '3')) : ?>
				<?php if (!empty(insignia_option('ins-button-new-page')) && insignia_option('ins-button-new-page') != '' ) : ?>
					<div class="header-menu-button"><a class="modal-menu-item menu-item ins_header_button <?php echo esc_html($button_style_class); ?>" <?php echo (!empty(insignia_option('ins-button-target')) &&  insignia_option('ins-button-target') == 'new-page') ? 'target="_blank"' : 'target="_self"'; ?> href="<?php echo esc_url(insignia_option('ins-button-new-page')); ?>"><?php echo esc_html(insignia_option('ins-header-button-text'));?></a></div>
			<?php endif; ?>
		<?php endif; ?>
	<?php
	}
}

// Mobile Navigation Menu

if ( !function_exists( 'insignia_mobile_nav_menu' ) ) {
	function insignia_mobile_nav_menu( $location = null ) {
		global $post;
		
		$style = 'default';
		$menu_location = 'primary';
		
		if ( $location == 'split-nav' ) {
		
			if ( insignia_option( 'header_split_nav' ) != '' ) {
				
				wp_nav_menu( array(
					'menu' 		=> insignia_option( 'header_split_nav' ),
					'container' 	=> false,
					'menu_class' 	=> 'nav',
					'walker' 	=> new insignia_Custom_Menu_Class()
				)); 
				
				return;
				
			} else {
				echo '<p class="insignia-no-nav">' . esc_html__( 'No secondary menu found.', 'clariwell' ) . '</p>';
				
				return;
			}
			
		}
		
		if ( has_nav_menu( 'primary' ) ) {
			
				wp_nav_menu( array(
					'theme_location'	=> $menu_location,
					'menu_id' 		=> 'menu-main-mobile-navigation',
					'container' 		=> false,
					'menu_class' 		=> 'nav',
					'walker' 		=> new insignia_Custom_Menu_Class()
				));   
			
		} else {
			
		}
		insignia_header_button();
		
	}
}

// Extra navigation tools

if ( !function_exists( 'insignia_nav_tools' ) ) {

	function insignia_nav_tools() {
	
		$header_style = insignia_header_style();
		
		$wrap  = '<ul class="nav-tools">';


		// Shopping Cart
		
		if ( class_exists( 'Woocommerce' ) && insignia_option( 'header_woocommerce' ) != false ) {
			$wrap .= insignia_woo_nav_cart();
		}

		// Search
		
		if ( insignia_option( 'header_search' ) && $header_style != 'overlay-simple' ) {
		
			$wrap .= '<li class="search-tool">
					<a href="#" class="tools-btn" data-toggle-search="fullscreen">
						<span class="tools-btn-icon">
							<i class="ti-search header-search-icon"></i>
							<i class="ti-close search-close"></i>
						</span>
					</a>
				<div class="ins-header-search-main">
					<div class="ins-header-search">
						<div class="ins-search-wrap">
							<form action="'.esc_url( home_url() ).'">
							<input type="text" name="s" value="" autocomplete="off" placeholder="'.esc_attr__( 'Search for...', 'clariwell' ).'">
							<button type="submit" id="search-submit"><i class="ti-search fullscreen-search-icon"></i></button>
							</form>
						</div>
					</div>
				</div>
			</li>';
		
		}

		// Header Side Area
	
		if ( insignia_option( 'header_sidearea' ) != false && is_active_sidebar( 'sidebar-5' ) ){
		
			$wrap .= '<li class="sidearea-tool"><a href="#" class="sidearea-toggle tools-btn"><span class="tools-btn-icon"><i class="ti-menu header-sidearea-icon"></i></span></a></li>';
		
		}
		
		// Mobile Menu Button 
		
		if ( $header_style == 'overlay-fullscreen' ) {
			
			$data_toggle = 'fullscreen-menu';
			$wrap .= '<li class="off-menu-btn"><button class="toggle-menu" data-toggle="' . $data_toggle . '"><span></span></button></li>';
			
		} else {
			$wrap .= '<li class="mobile-menu-btn" id="mobile-menu-btn">';
			$wrap .= '<div id="mobile-menu-toggle" class="toggle-menu toggle-menu-mobile" data-toggle="mobile-menu" data-effect="hover"><div class="btn-inner"><span></span></div></div>';
			$wrap .= '</li>';
			
		}
		
		$wrap .= '</ul>';
		
		if ( $wrap != '<ul class="nav-tools"></ul>' ) {
			// Everything already sanitised within the variable
			echo '' . $wrap;
		}
	}
}


//
// Header Cart icon
//

if ( !function_exists( 'insignia_woo_nav_cart' ) ) {
	function insignia_woo_nav_cart() {
		
		global $woocommerce;
 
		$inactive = 'header-cart-empty';
		$cart_count = $woocommerce->cart->get_cart_contents_count();
		if ( $cart_count > 0 ) $inactive = ' header-cart-active';
		
		$cart_url = wc_get_cart_url();
		
		ob_start();
		woocommerce_mini_cart();
		$minicart = ob_get_clean();
		
		return '<li id="woo-header-cart" class="crt-tool header-cart menu-item menu-item-cart ' . esc_attr( $inactive ) . '"><a href="' . esc_url( $cart_url ) . '" class="tools-btn minicart-menu-link"><span class="tools-btn-icon"><i class="ti-shopping-cart header-cart-icon"></i></span><span id="woo-cart-count" class="woo-cart-count">' . esc_attr( $cart_count ) . '</span></a><ul class="sub-menu minicart"><div class="ins_cart_content">'.$minicart.'</div> </ul></li>';
	}
}

//
// Fullscreen Menu
//

if ( !function_exists( 'insignia_print_fullscreen_menu' ) ) {
	function insignia_print_fullscreen_menu() {
		
		?>
		
		<div id="off-fullscreen-menu">
		
			<button class="toggle-menu" data-toggle="fullscreen-menu">
			  <i class="ti-close"></i>
			</button>
			
			<div class="brand">
				<img width="145" height="36" src="<?php echo esc_url( insignia_option( 'site_logo_white', 'url' ) ); ?>" alt="<?php echo esc_attr__( 'logo' , 'clariwell'); ?> ">
			</div>
			
			<nav>
				<?php insignia_nav_menu(); ?>

				<?php if ( insignia_option( 'header_overlay_social' ) == true ) {
						echo '<div class="header-overlay-social">';
						insignia_print_social_icons();
						echo '</div>';
					} ?>
			</nav>
		
		</div>
		
		<?php
		
	}
}

//
// Model window
//

if ( !function_exists( 'insignia_model_window' ) ) {
	function insignia_model_window() {
		
		?>
		<div class="modal popup-modal" id="popup-modal" role="dialog">
		<div class="ins-modal-wrapper">
			<div class="row">
				  <div class="col-md-6 col-sm-12 ins-modal-contact  clearfix">
				  <?php if (!empty(insignia_option('ins-modal-title')) && insignia_option('ins-modal-title') != '' ) : ?>
					  <h2 class="margin-25px-bottom"><?php echo esc_html(insignia_option('ins-modal-title')); ?></h2>
				  <?php endif; ?>
				  <?php if (!empty(insignia_option('ins-modal-subtitle')) && insignia_option('ins-modal-subtitle') != '' ) : ?>
					  <p class="margin-40px-bottom"><?php echo wp_kses_post(insignia_option('ins-modal-subtitle')); ?></p>
				  <?php endif; ?>
				  <?php if(insignia_option('ins-model-contact-info') == true){ ?>
					  <?php if (!empty(insignia_option('ins-business-phone')) && insignia_option('ins-business-phone') != '' ) : ?>
						  <div class="ins-model-icon-box margin-20px-top">
							  <i class="iconsmind-Phone ins-model-icon pc"></i>
							  <h5 class="ins-model-contact-heading"><a href="tel:<?php echo esc_attr(insignia_option('ins-business-phone')); ?>"><?php echo esc_html(insignia_option('ins-business-phone')); ?></a></h5>
						  </div>
					  <?php endif; ?>
					  <?php if (!empty(insignia_option('ins-business-email')) && insignia_option('ins-business-email') != '' ) : ?>
						  <div class="ins-model-icon-box margin-20px-top">
							  <i class="iconsmind-Mail ins-model-icon pc"></i>
							  <h5 class="ins-model-contact-heading"><a href="mailto:<?php echo esc_attr(insignia_option('ins-business-email')); ?>"><?php echo esc_html(insignia_option('ins-business-email')); ?></a></h5>
						  </div>
					  <?php endif; ?>
					  <?php if (!empty(insignia_option('ins-business-address')) && insignia_option('ins-business-address') != '' ) : ?>
						  <div class="ins-model-icon-box margin-20px-top">
							  <i class="iconsmind-Location-2 ins-model-icon pc"></i>
							  <h5 class="ins-model-contact-heading"><?php echo esc_html(insignia_option('ins-business-address')); ?></h5>
						  </div>
					  <?php endif; ?>
				  <?php } ?>
				  </div>
				  <div class="col-md-6 col-sm-12 ins-modal-form clearfix" style="background-image: url('<?php if (!empty(insignia_option('ins-modal-bg-image')) && insignia_option('ins-modal-bg-image') != '' ) { echo esc_url(insignia_option('ins-modal-bg-image')['url']); } ?>')">
					  <?php if (!empty(insignia_option('ins-modal-form-select')) && insignia_option('ins-modal-form-select') != '' ) : ?>
						   <?php if (insignia_option('ins-modal-form-select') == '1' && insignia_option('ins-modal-contactf7-formid') != '') : ?>
								<?php echo do_shortcode('[contact-form-7 id="'. esc_attr(insignia_option('ins-modal-contactf7-formid')).'"]'); ?>
						   <?php elseif (insignia_option('ins-modal-form-select') == '2' && insignia_option('ins-modal-ninja-formid') != '') : ?>
								<?php echo do_shortcode('[ninja_form id="'. esc_attr(insignia_option('ins-modal-ninja-formid')).'"]'); ?>
						   <?php elseif (insignia_option('ins-modal-form-select') == '3' && insignia_option('ins-modal-gravity-formid') != '') : ?>
								<?php echo do_shortcode('[gravityform id="'. esc_attr(insignia_option('ins-modal-gravity-formid')).'"]'); ?>
						   <?php elseif (insignia_option('ins-modal-form-select') == '4' && insignia_option('ins-modal-wp-formid') != '') : ?>
								<?php echo do_shortcode('[wpforms id="'. esc_attr(insignia_option('ins-modal-wp-formid')).'"]'); ?>
						   <?php endif; ?>
					  <?php endif; ?>
				  </div>
				</div>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>
		</div>
<?php
	}
}