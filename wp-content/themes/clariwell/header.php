<?php
/**
 * The Header for our theme.
 *
 * @package chefry
 * @author insignia Technolabs
 * @link http://insigniatechnolabs.com/
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		  <meta charset="<?php bloginfo( 'charset' ); ?>">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <link rel="profile" href="http://gmpg.org/xfn/11">
		  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php

		if(isset(insignia_option('insignia-favicon')['url'])){  
			$name = insignia_option('insignia-favicon')['url'];
			if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) {
			?>
			<link rel="shortcut icon" href="<?php echo esc_url($name); ?>">
		<?php } } ?>

	<?php wp_head(); ?>

	</head>

<body <?php body_class(); ?>>

	<?php 
		if ( insignia_option( 'page_loader' ) == true ) {
			insignia_page_loader();
		}
	?>

	<?php if(insignia_option('header_sidearea') != false){ ?>
		<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
				<div class="insignia-sidearea insignia-sidearea-vertical insignia-sidearea-right" id="insignia-sidearea">
					<button class="close-button-menu sidearea-menu-close" id="close-sidearea-menu"></button>
					<div class="display-table padding-twelve-all height-100 width-100">
						<div class="display-table-cell vertical-align-top padding-70px-top position-relative">
							<div class="insignia-sidearea-content"><?php dynamic_sidebar( 'sidebar-5' ); ?></div>
						</div>
					</div>
				</div>
		<?php endif; ?>
	<?php } ?>

    <!-- Contact Modal Window -->
	<?php
		if (!empty(insignia_option('ins-header-button'))) {
			if (insignia_option('ins-header-button') && (insignia_option('ins-header-button-action') == '1')) {
				insignia_model_window();
        }
      }
	?>
      <!-- END Contact Modal Window -->


	<div id="wrapper" class="<?php insignia_wrapper_classes(); ?>">
		<?php
			$template = get_page_template_slug( $post );
			if(!is_404() || $template !== "no-header-footer.php" ){
				$header_position = insignia_header_position();
			
			if ( $header_position == 'aside' ) { 
				$aside_nav_classes = array();
					if ( insignia_option( 'sideh_skin' ) == 'dark' ) {
						$aside_nav_classes[] = 'header-dark';
					} else {
						$aside_nav_classes[] = 'header-light';
					}
		?>

		<!-- BEGIN LATERAL NAVIGATION -->
	
	<aside id="aside-nav" class="aside-nav text-align-left <?php echo esc_attr( implode( ' ', $aside_nav_classes ) ); ?>">
		<div id="main-aside-navigation">
			<div class="main-nav-wrapper">
				<div class="aside-nav-top">
					<div class="container">
						<div id="aside-logo" class="aside-logo">
						 	<?php insignia_site_logo( 'lateral' ); ?>
						</div>
						
						<div id="mobile-menu-toggle" class="toggle-menu toggle-menu-mobile" data-toggle="mobile-menu" data-effect="hover"><div class="btn-inner"><span></span></div></div>
						
					</div>
				
				</div>
				
				<div class="aside-nav-main">
					<div class="container">
						<nav id="main-aside-menu">
							<?php insignia_nav_menu(); ?>
						</nav>
						
						<?php
						// Social Icons
						
						if ( insignia_option( 'sideh_icons' ) != false ) {
							echo '<div class="aside-social-icons">';
							insignia_print_social_icons();
							echo '</div>';
						}

						// copyright text
						
						if ( insignia_option( 'sideh_copyright' ) != '') {
							echo '<div class="aside-copyright-text"><div class="aside-copyright-inner">';
							echo insignia_option( 'sideh_copyright' );
							echo '</div></div>';
						}
						
						?>
					</div>
				</div>
			</div>
		</div>  
	</aside>
	<?php  
	// END LATERAL NAVIGATION 
	} ?>

	<?php 
	
	if ( $header_position == 'top' ) {
	
		$header_style = insignia_header_style();

        // Scroll after style
        
	?>

	<!-- start of Header !-->
	<div class="header-sidearea-body-style"></div>
	<header id="header" class="<?php insignia_header_classes(); ?>" data-scroll-height="<?php insignia_header_scroll_height(); ?>" data-scroll-animation="<?php insignia_header_scroll_animation(); ?>" data-skin="<?php echo esc_attr( insignia_header_skin() ); ?>" data-scroll-skin="<?php echo esc_attr( insignia_header_scroll_skin() ); ?>">

	<?php
	
	$container_classes = '';
	
	if ( insignia_header_container() == 'fullwidth' ) {
		$container_classes .= '-fluid';
	}
	
	// Top Bar
	
	if ( insignia_option('topbar') && $header_position != 'left' && $header_position != 'right' ) {
	
		insignia_print_topbar( $container_classes );
	} 
	
	// Header itself
	
	if ( $header_style == 'top-logo' || $header_style == 'top-logo-center' ) {
		?>
		
		<div id="main-navigation" class="main-nav bottom-nav">
			<div class="main-nav-wrapper upper-nav-wrapper">
				<div class="container<?php echo esc_attr( $container_classes ); ?>">
					<div class="nav-left">
						<div id="logo">
							<?php insignia_site_logo(); ?>
						</div>
					</div>
					
					<div id="mobile-menu-toggle" class="toggle-menu toggle-menu-mobile" data-toggle="mobile-menu"><div class="btn-inner"><span></span></div></div>
					
					<?php
					
					if ( $header_style == 'top-logo' ) {
						echo '<div class="nav-right">';
						insignia_header_top_content();
						echo '</div>';
					}
					
					?>
				</div>
			</div>
			
			<div class="bottom-nav-wrapper">
				<div class="container<?php echo esc_attr( $container_classes ); ?>">
					<nav id="main-menu" class="main-menu">
						<?php 
							insignia_nav_menu(); 
							insignia_nav_tools(); 
							insignia_header_button();
						?> 
					</nav>
				</div>
			</div>
		
		</div>
		
		<?php
		
		
	} else {
	
		// Classic Header
		$nav_position = 'right';
		if ( $header_style == 'overlay-fullscreen' ) {
			insignia_print_fullscreen_menu();
		}
		?>
	
		<div id="main-navigation" class="main-nav">
		
			<div class="main-nav-wrapper">
				<div class="container<?php echo esc_attr( $container_classes ); ?>">
					<?php 
					echo '<div class="nav-left">'; 
					if ( $header_style == 'split-menu' ) {
					?>
						<nav class="main-menu">
							<?php insignia_nav_menu( 'split-nav' ); ?>
						</nav>
					</div>
					<div class="nav-center">
					<?php } ?>
					
						<div id="logo">
							<?php insignia_site_logo(); ?>
						</div>
						
						<?php if ( $header_style == 'top-left' ) { ?>
							<nav id="main-menu">
								<?php insignia_nav_menu(); ?>
							</nav>
						<?php } ?>
						
					<?php echo '</div>'; ?>
					
					<div class="nav-<?php echo esc_attr( $nav_position ); ?>">
					
						<?php if ( $header_style != 'top-left' && $header_style != 'overlay-fullscreen' ) { ?>
							<nav id="main-menu" class="main-menu">
								<?php insignia_nav_menu(); ?>
							</nav>
						<?php } ?>
						
						<?php 
						
						insignia_nav_tools(); 
						insignia_header_button();
						?>
						
					</div>
				</div>
			</div>
		</div>
	
	<?php
	}
	?>
	
	<nav id="mobile-nav" class="mobile-nav">
		<div class="container">
			<?php insignia_mobile_nav_menu(); ?>
		</div>
	</nav>
 
</header>
	<?php 
	
	}

	?>
<!-- end of Header demo five html !-->

	<?php 
	
	$page_title = "page-with-no-title";
	if ( insignia_option( 'header_title' ) != 0 && get_post_meta( insignia_get_id(), "_ins_custom_pagetitle", TRUE ) != 'disable' || insignia_option( 'header_title' ) == null ) {		
		get_template_part( 'page-title' );
		$page_title = "page-with-title";
	}
       $inline_css = '';

	if ( get_post_meta( insignia_get_id(), '_ins_page_content_padding-top', true ) != '' ) {
		$padding_top = get_post_meta( insignia_get_id(), '_ins_page_content_padding-top', true );
		$inline_css .= 'padding-top: ' . esc_attr( $padding_top ) . 'px;';
	}
	if ( get_post_meta( insignia_get_id(), '_ins_page_content_padding-bottom', true ) != '' ) {
		$padding_bottom = get_post_meta( insignia_get_id(), '_ins_page_content_padding-bottom', true );
		$inline_css .= 'padding-bottom: ' . esc_attr( $padding_bottom ) . 'px;';
	}

	$page_padding_css = 'style=" ' . esc_attr($inline_css ) . '"';
	?>
	<section id="main-content-wrapper" class="<?php echo esc_attr($page_title);?>"  style="<?php echo esc_attr($inline_css); ?>">
	<?php  } ?>