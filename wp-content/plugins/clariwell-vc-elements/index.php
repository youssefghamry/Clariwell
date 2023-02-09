<?php
/*
 * Plugin Name: Clariwell VC-Elements
 * Plugin URI: http://themes.insigniats.in/
 * Description: This plugin adds several elements in your Visual Composer. Each of content element has been carefully created by web design professionals and offers multiple options. It extends and adds more power to your Visual Composer.
 * Version: 1.0 
 * Author: Insignia Technolabs
 * Author URI: http://insigniatechnolabs.com/
 * Text Domain: clariwell
 * License:  GPL12
 */

/****** Start :: Visual Composer custom Element testimonial ***************/

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( is_plugin_active( 'js_composer/js_composer.php' ) ) {

		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_counter.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_News-Blog.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_Pricing-box.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_icon-box.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_simple-icon-list.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_social-icons.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_image-box.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_section-heading.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_Image-Gallery.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_Button.php' ;
		require_once plugin_dir_path( __FILE__)  .'/clariwell-widgets/custom_widgets.php' ;
		require_once plugin_dir_path( __FILE__)  .'/clariwell-widgets/contact.php' ;
		require_once plugin_dir_path( __FILE__)  .'/clariwell-widgets/recent-post-widget.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_video_lightbox.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_google-map.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_clients-logos.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_call-to-action.php' ; 
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_interactive-banner.php' ; 
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_number-box.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_flip-box.php' ; 
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_Message-box.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_Custom-icon-with-text.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_table.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_toggle.php' ;
        require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_blockquotes.php' ;
		require_once plugin_dir_path( __FILE__)  .'/shortcodes/shortcodes-config.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_testimonial.php' ; 
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_team.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_Portfolio.php' ;
		require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_icon-with-image-box.php' ;
	    require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_custom-menu.php' ;
        require_once plugin_dir_path( __FILE__)  .'/vc_template/VC_working_hours.php' ;
}

		require_once plugin_dir_path( __FILE__)  .'social-sharing/socials-sharing.php' ;

    define('META_PLUGIN_PATH', plugin_dir_path( __FILE__ ));

    add_action( 'after_setup_theme', 'clariwell_meta_includes' );
    function clariwell_meta_includes() {
    	require_once (META_PLUGIN_PATH . 'cmb-functions.php');
    	require_once (META_PLUGIN_PATH . 'insignia-custom-post-type.php');
    	require_once (META_PLUGIN_PATH . 'insignia-iconpicker-iconsmind.php');
    }

    // Menu item meta fields
	    require_once plugin_dir_path( __FILE__) .'/plugins/nav-menu-custom-fields/nav-menu-custom-fields.php' ;

    /****** End :: Visual Composer custom Element ***************/


/****** Start :: Custom Image Sizes  - Team Element ***************/

    function insignia_element_script() {
        require_once plugin_dir_path( __FILE__)  .'/script.php' ; 
    }
    add_action( 'wp_footer', 'insignia_element_script' );


   	if ( !function_exists( 'ensign_build_link' ) ) {
 		function ensign_build_link( $label, $link, $classes ) {
 			
 			$link = vc_build_link( $link );
 			
 			if ( is_array( $link ) ) {
 				$url = $link['url'];
 			} else {
 				$url = $link;
 			}
 			
 			$anchor = '<a href="' . $url . '"';
 			
 			if ( is_array( $link ) ) {
 				if ( $link['target'] != '' ) $anchor .= ' target="' . $link['target'] . '"';
 				if ( $link['title'] != '' ) $anchor .= ' title="' . $link['title'] . '"';
 			}
 			
 			$anchor .= ' class="' . esc_attr( $classes ) . '">' . esc_html( $label ) . '</a>';
 			
 			return $anchor;
 			
 		}
    }



function ensign_taxonomies_array( $taxonomy_name = null ){

	if( $taxonomy_name != null ) {
	
		$taxonomies = get_categories( 'taxonomy=' . $taxonomy_name );
		
		if ( is_array( $taxonomies ) ) {
			
			$taxonomy_array = array();
			
			foreach ( $taxonomies as $taxonomy ) {
				if ( is_object( $taxonomy ) ) {
					$taxonomy_array[$taxonomy->name] = $taxonomy->slug;
				}
			}
			return $taxonomy_array;
		}
	
	}
	
	return null;
}


	/**
	 * Estimate time required to read the article
	 *
	 * @since   1.0
	 */
		function insignia_reading_time() {
			$content = get_post_field( 'post_content');
			$word_count = str_word_count( strip_tags( $content ) );
			$readingtime = ceil($word_count / 200);

			if ($readingtime == 1) {
			  $timer = " Min Read";
			} else {
			  $timer = " Min Read";
			}
			$totalreadingtime = $readingtime . $timer;

			return $totalreadingtime;
		}
		
	/*	Load plugin textdomain. */
	add_action( 'plugins_loaded', 'clariwell_addon_load_textdomain' );
	function clariwell_addon_load_textdomain() {
		load_plugin_textdomain( 'clariwell', false, basename( dirname( __FILE__ ) ) . '/languages' );
	}

add_filter( 'vc_iconpicker-type-themify', 'vc_addon_icon_themify' );

function vc_addon_icon_themify( $icons ) {
	$themify = array(
		array( "ti-wand" => __( "wand", "clariwell" ) ),
        array( "ti-volume" => __( "volume", "clariwell" ) ),
		array( "ti-user" => __( "user", "clariwell" ) ),
		array( "ti-unlock" => __( "unlock", "clariwell" ) ),
		array( "ti-unlink" => __( "unlink", "clariwell" ) ),
		array( "ti-trash" => __( "trash", "clariwell" ) ),
		array( "ti-thought" => __( "thought", "clariwell" ) ),
		array( "ti-target" => __( "target", "clariwell" ) ),
		array( "ti-tag" => __( "tag", "clariwell" ) ),
		array( "ti-tablet" => __( "tablet", "clariwell" ) ),
		array( "ti-star" => __( "star", "clariwell" ) ),
		array( "ti-spray" => __( "spray", "clariwell" ) ),
		array( "ti-signal" => __( "signal", "clariwell" ) ),
		array( "ti-shopping-cart" => __( "shopping-cart", "clariwell" ) ),
		array( "ti-shopping-cart-full" => __( "shopping-cart-full", "clariwell" ) ),
		array( "ti-settings" => __( "settings", "clariwell" ) ),
		array( "ti-search" => __( "search", "clariwell" ) ),
		array( "ti-zoom-in" => __( "zoom-in", "clariwell" ) ),
		array( "ti-zoom-out" => __( "zoom-out", "clariwell" ) ),
		array( "ti-cut" => __( "cut", "clariwell" ) ),
		array( "ti-ruler" => __( "ruler", "clariwell" ) ),
		array( "ti-ruler-pencil" => __( "ruler-pencil", "clariwell" ) ),
		array( "ti-ruler-alt" => __( "ruler-alt", "clariwell" ) ),
		array( "ti-bookmark" => __( "bookmark", "clariwell" ) ),
		array( "ti-bookmark-alt" => __( "bookmark-alt", "clariwell" ) ),
		array( "ti-reload" => __( "reload", "clariwell" ) ),
		array( "ti-plus" => __( "plus", "clariwell" ) ),
		array( "ti-pin" => __( "pin", "clariwell" ) ),
		array( "ti-pencil" => __( "pencil", "clariwell" ) ),
		array( "ti-pencil-alt" => __( "pencil-alt", "clariwell" ) ),
		array( "ti-paint-roller" => __( "paint-roller", "clariwell" ) ),
		array( "ti-paint-bucket" => __( "paint-bucket", "clariwell" ) ),
		array( "ti-na" => __( "na", "clariwell" ) ),
		array( "ti-mobile" => __( "mobile", "clariwell" ) ),
		array( "ti-minus" => __( "minus", "clariwell" ) ),
		array( "ti-medall" => __( "medall", "clariwell" ) ),
		array( "ti-medall-alt" => __( "medall-alt", "clariwell" ) ),
		array( "ti-marker" => __( "marker", "clariwell" ) ),
		array( "ti-marker-alt" => __( "marker-alt", "clariwell" ) ),
		array( "ti-arrow-up" => __( "arrow-up", "clariwell" ) ),
		array( "ti-arrow-right" => __( "arrow-right", "clariwell" ) ),
		array( "ti-arrow-left" => __( "arrow-left", "clariwell" ) ),
		array( "ti-arrow-down" => __( "arrow-down", "clariwell" ) ),
		array( "ti-lock" => __( "lock", "clariwell" ) ),
		array( "ti-location-arrow" => __( "location-arrow", "clariwell" ) ),
		array( "ti-link" => __( "link", "clariwell" ) ),
		array( "ti-layout" => __( "layout", "clariwell" ) ),
		array( "ti-layers" => __( "layers", "clariwell" ) ),
		array( "ti-layers-alt" => __( "layers-alt", "clariwell" ) ),
		array( "ti-key" => __( "key", "clariwell" ) ),
		array( "ti-import" => __( "import", "clariwell" ) ),
		array( "ti-image" => __( "image", "clariwell" ) ),
		array( "ti-heart" => __( "heart", "clariwell" ) ),
		array( "ti-heart-broken" => __( "heart-broken", "clariwell" ) ),
		array( "ti-hand-stop" => __( "hand-stop", "clariwell" ) ),
		array( "ti-hand-open" => __( "hand-open", "clariwell" ) ),
		array( "ti-hand-drag" => __( "hand-drag", "clariwell" ) ),
		array( "ti-folder" => __( "folder", "clariwell" ) ),
		array( "ti-flag" => __( "flag", "clariwell" ) ),
		array( "ti-flag-alt" => __( "flag-alt", "clariwell" ) ),
		array( "ti-flag-alt-2" => __( "flag-alt-2", "clariwell" ) ),
		array( "ti-eye" => __( "eye", "clariwell" ) ),
		array( "ti-export" => __( "export", "clariwell" ) ),
		array( "ti-exchange-vertical" => __( "exchange-vertical", "clariwell" ) ),
		array( "ti-desktop" => __( "desktop", "clariwell" ) ),
		array( "ti-cup" => __( "cup", "clariwell" ) ),
		array( "ti-crown" => __( "crown", "clariwell" ) ),
		array( "ti-comments" => __( "comments", "clariwell" ) ),
		array( "ti-comment" => __( "comment", "clariwell" ) ),
		array( "ti-comment-alt" => __( "comment-alt", "clariwell" ) ),
		array( "ti-close" => __( "close", "clariwell" ) ),
		array( "ti-clip" => __( "clip", "clariwell" ) ),
		array( "ti-angle-up" => __( "angle-up", "clariwell" ) ),
		array( "ti-angle-right" => __( "angle-right", "clariwell" ) ),
		array( "ti-angle-left" => __( "angle-left", "clariwell" ) ),
		array( "ti-angle-down" => __( "angle-down", "clariwell" ) ),
		array( "ti-check" => __( "check", "clariwell" ) ),
		array( "ti-check-box" => __( "check-box", "clariwell" ) ),
		array( "ti-camera" => __( "camera", "clariwell" ) ),
		array( "ti-announcement" => __( "announcement", "clariwell" ) ),
		array( "ti-brush" => __( "brush", "clariwell" ) ),
		array( "ti-briefcase" => __( "briefcase", "clariwell" ) ),
		array( "ti-bolt" => __( "bolt", "clariwell" ) ),
		array( "ti-bolt-alt" => __( "bolt-alt", "clariwell" ) ),
		array( "ti-blackboard" => __( "blackboard", "clariwell" ) ),
		array( "ti-bag" => __( "bag", "clariwell" ) ),
		array( "ti-move" => __( "move", "clariwell" ) ),
		array( "ti-arrows-vertical" => __( "arrows-vertical	", "clariwell" ) ),
		array( "ti-arrows-horizontal" => __( "arrows-horizontal", "clariwell" ) ),
		array( "ti-arrow-top-right" => __( "arrow-top-right", "clariwell" ) ),
	        array( "ti-arrow-top-left" => __( "arrow-top-left", "clariwell" ) ),
		array( "ti-arrow-circle-up" => __( "arrow-circle-up", "clariwell" ) ),
		array( "ti-arrow-circle-right" => __( "arrow-circle-right", "clariwell" ) ),
		array( "ti-arrow-circle-left" => __( "arrow-circle-left", "clariwell" ) ),
		array( "ti-arrow-circle-down" => __( "arrow-circle-down", "clariwell" ) ),
		array( "ti-angle-double-up" => __( "angle-double-up", "clariwell" ) ),
		array( "ti-angle-double-right" => __( "angle-double-right", "clariwell" ) ),
		array( "ti-angle-double-left" => __( "angle-double-left", "clariwell" ) ),
		array( "ti-angle-double-down" => __( "angle-double-down", "clariwell" ) ),
		array( "ti-zip" => __( "zip", "clariwell" ) ),
		array( "ti-world" => __( "world", "clariwell" ) ),
		array( "ti-wheelchair" => __( "wheelchair", "clariwell" ) ),
		array( "ti-view-list" => __( "view-list", "clariwell" ) ),
		array( "ti-view-list-alt" => __( "view-list-alt", "clariwell" ) ),
		array( "ti-view-grid" => __( "view-grid", "clariwell" ) ),
		array( "ti-uppercase" => __( "uppercase", "clariwell" ) ),
		array( "ti-upload" => __( "upload", "clariwell" ) ),
		array( "ti-underline" => __( "underline", "clariwell" ) ),
		array( "ti-truck" => __( "truck", "clariwell" ) ),
		array( "ti-timer" => __( "timer", "clariwell" ) ),
		array( "ti-ticket" => __( "ticket", "clariwell" ) ),
		array( "ti-thumb-up" => __( "thumb-up", "clariwell" ) ),
		array( "ti-thumb-down" => __( "thumb-down", "clariwell" ) ),
		array( "ti-text" => __( "text", "clariwell" ) ),
		array( "ti-stats-up" => __( "stats-up", "clariwell" ) ),
		array( "ti-stats-down" => __( "stats-down", "clariwell" ) ),
		array( "ti-split-v" => __( "split-v", "clariwell" ) ),
		array( "ti-split-h" => __( "split-h", "clariwell" ) ),
		array( "ti-smallcap" => __( "smallcap", "clariwell" ) ),
		array( "ti-shine" => __( "shine", "clariwell" ) ),
		array( "ti-shift-right" => __( "shift-right", "clariwell" ) ),
		array( "ti-shift-left" => __( "shift-left", "clariwell" ) ),
		array( "ti-shield" => __( "shield", "clariwell" ) ),
		array( "ti-notepad" => __( "notepad", "clariwell" ) ),
		array( "ti-server" => __( "server", "clariwell" ) ),
		array( "ti-quote-right" => __( "quote-right", "clariwell" ) ),
		array( "ti-quote-left" => __( "quote-left", "clariwell" ) ),
		array( "ti-pulse" => __( "pulse", "clariwell" ) ),
		array( "ti-printer" => __( "printer", "clariwell" ) ),
		array( "ti-power-off" => __( "power-off", "clariwell" ) ),
		array( "ti-plug" => __( "plug", "clariwell" ) ),
		array( "ti-pie-chart" => __( "pie-chart", "clariwell" ) ),
		array( "ti-paragraph" => __( "paragraph", "clariwell" ) ),
		array( "ti-panel" => __( "panel", "clariwell" ) ),
		array( "ti-package" => __( "package", "clariwell" ) ),
		array( "ti-music" => __( "music", "clariwell" ) ),
		array( "ti-mouse" => __( "mouse", "clariwell" ) ),
		array( "ti-mouse-alt" => __( "mouse-alt", "clariwell" ) ),
		array( "ti-money" => __( "money", "clariwell" ) ),
		array( "ti-microphone" => __( "microphone", "clariwell" ) ),
		array( "ti-menu" => __( "menu", "clariwell" ) ),
		array( "ti-menu-alt" => __( "menu-alt", "clariwell" ) ),
		array( "ti-map" => __( "map", "clariwell" ) ),
		array( "ti-map-alt" => __( "map-alt", "clariwell" ) ),
		array( "ti-loop" => __( "loop", "clariwell" ) ),
		array( "ti-location-pin" => __( "location-pin", "clariwell" ) ),
		array( "ti-list" => __( "list", "clariwell" ) ),
		array( "ti-light-bulb" => __( "light-bulb", "clariwell" ) ),
		array( "ti-Italic" => __( "Italic", "clariwell" ) ),
		array( "ti-info" => __( "info", "clariwell" ) ),
		array( "ti-infinite" => __( "infinite", "clariwell" ) ),
		array( "ti-id-badge" => __( "id-badge", "clariwell" ) ),
		array( "ti-hummer" => __( "hummer", "clariwell" ) ),
		array( "ti-home" => __( "home", "clariwell" ) ),
		array( "ti-help" => __( "help", "clariwell" ) ),
		array( "ti-headphone" => __( "headphone", "clariwell" ) ),
		array( "ti-harddrives" => __( "harddrives", "clariwell" ) ),
		array( "ti-harddrive" => __( "harddrive", "clariwell" ) ),
		array( "ti-gift" => __( "gift", "clariwell" ) ),
		array( "ti-game" => __( "game", "clariwell" ) ),
		array( "ti-filter" => __( "filter", "clariwell" ) ),
		array( "ti-files" => __( "files", "clariwell" ) ),
		array( "ti-file" => __( "file", "clariwell" ) ),
		array( "ti-eraser" => __( "eraser", "clariwell" ) ),
		array( "ti-envelope" => __( "envelope", "clariwell" ) ),
		array( "ti-download" => __( "download", "clariwell" ) ),
		array( "ti-direction" => __( "direction", "clariwell" ) ),
		array( "ti-direction-alt" => __( "direction-alt", "clariwell" ) ),
		array( "ti-dashboard" => __( "dashboard", "clariwell" ) ),
		array( "ti-control-stop" => __( "control-stop", "clariwell" ) ),
		array( "ti-control-shuffle" => __( "control-shuffle", "clariwell" ) ),
		array( "ti-control-play" => __( "control-play", "clariwell" ) ),
		array( "ti-control-pause" => __( "control-pause", "clariwell" ) ),
		array( "ti-control-forward" => __( "control-forward", "clariwell" ) ),
		array( "ti-control-backward" => __( "control-backward", "clariwell" ) ),
		array( "ti-cloud" => __( "cloud", "clariwell" ) ),
		array( "ti-cloud-up" => __( "cloud-up", "clariwell" ) ),
		array( "ti-cloud-down" => __( "cloud-down", "clariwell" ) ),
		array( "ti-clipboard" => __( "clipboard", "clariwell" ) ),
		array( "ti-car" => __( "car", "clariwell" ) ),
		array( "ti-calendar" => __( "calendar", "clariwell" ) ),
		array( "ti-bell" => __( "bell", "clariwell" ) ),
		array( "ti-basketball" => __( "basketball", "clariwell" ) ),
		array( "ti-bar-chart" => __( "bar-chart", "clariwell" ) ),
		array( "ti-bar-chart-alt" => __( "bar-chart-alt", "clariwell" ) ),
		array( "ti-back-right" => __( "back-right", "clariwell" ) ),
		array( "ti-back-left" => __( "back-left", "clariwell" ) ),
		array( "ti-arrows-corner" => __( "arrows-corner", "clariwell" ) ),
		array( "ti-archive" => __( "archive", "clariwell" ) ),
		array( "ti-anchor" => __( "anchor", "clariwell" ) ),
		array( "ti-align-right" => __( "align-right", "clariwell" ) ),
		array( "ti-align-left" => __( "align-left", "clariwell" ) ),
		array( "ti-align-justify" => __( "align-justify", "clariwell" ) ),
		array( "ti-align-center" => __( "align-center", "clariwell" ) ),
		array( "ti-alert" => __( "alert", "clariwell" ) ),
		array( "ti-alarm-clock" => __( "alarm-clock", "clariwell" ) ),
		array( "ti-agenda" => __( "agenda", "clariwell" ) ),
		array( "ti-write" => __( "write", "clariwell" ) ),
		array( "ti-window" => __( "window", "clariwell" ) ),
		array( "ti-widgetized" => __( "widgetized", "clariwell" ) ),
		array( "ti-widget" => __( "widget", "clariwell" ) ),
		array( "ti-widget-alt" => __( "widget-alt", "clariwell" ) ),
		array( "ti-wallet" => __( "wallet", "clariwell" ) ),
		array( "ti-video-clapper" => __( "video-clapper", "clariwell" ) ),
		array( "ti-video-camera" => __( "video-camera", "clariwell" ) ),
		array( "ti-vector" => __( "vector", "clariwell" ) ),
		array( "ti-themify-logo" => __( "themify-logo", "clariwell" ) ),
		array( "ti-themify-favicon" => __( "themify-favicon", "clariwell" ) ),
		array( "ti-themify-favicon-alt" => __( "themify-favicon-alt", "clariwell" ) ),
		array( "ti-support" => __( "support", "clariwell" ) ),
		array( "ti-stamp" => __( "stamp", "clariwell" ) ),
		array( "ti-split-v-alt" => __( "split-v-alt", "clariwell" ) ),
		array( "ti-slice" => __( "slice", "clariwell" ) ),
		array( "ti-shortcode" => __( "shortcode", "clariwell" ) ),
		array( "ti-shift-right-alt" => __( "shift-right-alt", "clariwell" ) ),
		array( "ti-shift-left-alt" => __( "shift-left-alt", "clariwell" ) ),
		array( "ti-ruler-alt-2" => __( "ruler-alt-2", "clariwell" ) ),
		array( "ti-receipt" => __( "receipt", "clariwell" ) ),
		array( "ti-pin2" => __( "pin2", "clariwell" ) ),
		array( "ti-pin-alt" => __( "pin-alt", "clariwell" ) ),
		array( "ti-pencil-alt2" => __( "pencil-alt2", "clariwell" ) ),
		array( "ti-palette" => __( "palette", "clariwell" ) ),
		array( "ti-more" => __( "more", "clariwell" ) ),
		array( "ti-more-alt" => __( "more-alt", "clariwell" ) ),
		array( "ti-microphone-alt" => __( "microphone-alt", "clariwell" ) ),
		array( "ti-magnet" => __( "magnet", "clariwell" ) ),
		array( "ti-line-double" => __( "line-double", "clariwell" ) ),
		array( "ti-line-dotted" => __( "line-dotted", "clariwell" ) ),
		array( "ti-line-dashed" => __( "line-dashed", "clariwell" ) ),
		array( "ti-layout-width-full" => __( "layout-width-full", "clariwell" ) ),
		array( "ti-layout-width-default" => __( "layout-width-default", "clariwell" ) ),
		array( "ti-layout-width-default-alt" => __( "layout-width-default-alt", "clariwell" ) ),
		array( "ti-layout-tab" => __( "layout-tab", "clariwell" ) ),
		array( "ti-layout-tab-window" => __( "layout-tab-window", "clariwell" ) ),
		array( "ti-layout-tab-v" => __( "layout-tab-v", "clariwell" ) ),
		array( "ti-layout-tab-min" => __( "layout-tab-min", "clariwell" ) ),
		array( "ti-layout-slider" => __( "layout-slider", "clariwell" ) ),
		array( "ti-layout-slider-alt" => __( "layout-slider-alt", "clariwell" ) ),
		array( "ti-layout-sidebar-right" => __( "layout-sidebar-right", "clariwell" ) ),
		array( "ti-layout-sidebar-none" => __( "layout-sidebar-none", "clariwell" ) ),
		array( "ti-layout-sidebar-left" => __( "layout-sidebar-left", "clariwell" ) ),
		array( "ti-layout-placeholder" => __( "layout-placeholder", "clariwell" ) ),
		array( "ti-layout-menu" => __( "layout-menu", "clariwell" ) ),
		array( "ti-layout-menu-v" => __( "layout-menu-v", "clariwell" ) ),
		array( "ti-layout-menu-separated" => __( "layout-menu-separated", "clariwell" ) ),
		array( "ti-layout-menu-full" => __( "layout-menu-full", "clariwell" ) ),
		array( "ti-layout-media-right-alt" => __( "layout-media-right-alt", "clariwell" ) ),
		array( "ti-layout-media-right" => __( "layout-media-right", "clariwell" ) ),
		array( "ti-layout-media-overlay" => __( "layout-media-overlay", "clariwell" ) ),
		array( "ti-layout-media-overlay-alt" => __( "layout-media-overlay-alt", "clariwell" ) ),
		array( "ti-layout-media-overlay-alt-2" => __( "layout-media-overlay-alt-2", "clariwell" ) ),
		array( "ti-layout-media-left-alt" => __( "layout-media-left-alt", "clariwell" ) ),
		array( "ti-layout-media-left" => __( "layout-media-left", "clariwell" ) ),
		array( "ti-layout-media-center-alt" => __( "layout-media-center-alt", "clariwell" ) ),
		array( "ti-layout-media-center" => __( "layout-media-center", "clariwell" ) ),
		array( "ti-layout-list-thumb" => __( "layout-list-thumb", "clariwell" ) ),
		array( "ti-layout-list-thumb-alt" => __( "layout-list-thumb-alt", "clariwell" ) ),
		array( "ti-layout-list-post" => __( "layout-list-post", "clariwell" ) ),
		array( "ti-layout-list-large-image" => __( "layout-list-large-image", "clariwell" ) ),
		array( "ti-layout-line-solid" => __( "layout-line-solid", "clariwell" ) ),
		array( "ti-layout-grid4" => __( "layout-grid4", "clariwell" ) ),
		array( "ti-layout-grid3" => __( "layout-grid3", "clariwell" ) ),
		array( "ti-layout-grid2" => __( "layout-grid2", "clariwell" ) ),
		array( "ti-layout-grid2-thumb" => __( "layout-grid2-thumb", "clariwell" ) ),
		array( "ti-layout-cta-right" => __( "layout-cta-right", "clariwell" ) ),
		array( "ti-layout-cta-left" => __( "layout-cta-left", "clariwell" ) ),
		array( "ti-layout-cta-center" => __( "layout-cta-center", "clariwell" ) ),
		array( "ti-layout-cta-btn-right" => __( "layout-cta-btn-right", "clariwell" ) ),
		array( "ti-layout-cta-btn-left" => __( "layout-cta-btn-left", "clariwell" ) ),
		array( "ti-layout-column4" => __( "layout-column4", "clariwell" ) ),
		array( "ti-layout-column3" => __( "layout-column3", "clariwell" ) ),
		array( "ti-layout-column2" => __( "layout-column2", "clariwell" ) ),
		array( "ti-layout-accordion-separated" => __( "layout-accordion-separated	", "clariwell" ) ),
		array( "ti-layout-accordion-merged" => __( "layout-accordion-merged", "clariwell" ) ),
		array( "ti-layout-accordion-list" => __( "layout-accordion-list", "clariwell" ) ),
		array( "ti-ink-pen" => __( "ink-pen", "clariwell" ) ),
		array( "ti-info-alt" => __( "info-alt", "clariwell" ) ),
		array( "ti-help-alt" => __( "help-alt", "clariwell" ) ),
		array( "ti-headphone-alt" => __( "headphone-alt", "clariwell" ) ),
		array( "ti-hand-point-up" => __( "hand-point-up", "clariwell" ) ),
		array( "ti-hand-point-right" => __( "hand-point-right", "clariwell" ) ),
		array( "ti-hand-point-left" => __( "hand-point-left", "clariwell" ) ),
		array( "ti-hand-point-down" => __( "hand-point-down", "clariwell" ) ),
		array( "ti-gallery" => __( "gallery", "clariwell" ) ),
		array( "ti-face-smile" => __( "face-smile", "clariwell" ) ),
		array( "ti-face-sad" => __( "face-sad", "clariwell" ) ),
		array( "ti-credit-card" => __( "credit-card", "clariwell" ) ),
		array( "ti-control-skip-forward" => __( "control-skip-forward", "clariwell" ) ),
		array( "ti-control-skip-backward" => __( "control-skip-backward", "clariwell" ) ),
		array( "ti-control-record" => __( "control-record", "clariwell" ) ),
		array( "ti-control-eject" => __( "control-eject", "clariwell" ) ),
		array( "ti-comments-smiley" => __( "comments-smiley", "clariwell" ) ),
		array( "ti-brush-alt" => __( "brush-alt", "clariwell" ) ),
		array( "ti-youtube" => __( "youtube", "clariwell" ) ),
		array( "ti-vimeo" => __( "vimeo", "clariwell" ) ),
		array( "ti-twitter" => __( "twitter", "clariwell" ) ),
		array( "ti-time" => __( "time", "clariwell" ) ),
		array( "ti-tumblr" => __( "tumblr", "clariwell" ) ),
		array( "ti-skype" => __( "skype", "clariwell" ) ),
		array( "ti-share-alt" => __( "share-alt", "clariwell" ) ),
		array( "ti-rocket" => __( "rocket", "clariwell" ) ),
		array( "ti-pinterest" => __( "pinterest", "clariwell" ) ),
		array( "ti-new-window" => __( "new-window", "clariwell" ) ),
		array( "ti-microsoft" => __( "microsoft", "clariwell" ) ),
		array( "ti-list-ol" => __( "list-ol", "clariwell" ) ),
		array( "ti-linkedin" => __( "linkedin", "clariwell" ) ),
		array( "ti-layout-sidebar-2" => __( "layout-sidebar-2", "clariwell" ) ),
		array( "ti-layout-grid4-alt" => __( "layout-grid4-alt", "clariwell" ) ),
		array( "ti-layout-grid3-alt" => __( "layout-grid3-alt", "clariwell" ) ),
		array( "ti-layout-grid2-alt" => __( "layout-grid2-alt", "clariwell" ) ),
		array( "ti-layout-column4-alt" => __( "layout-column4-alt", "clariwell" ) ),
		array( "ti-layout-column3-alt" => __( "layout-column3-alt", "clariwell" ) ),
		array( "ti-layout-column2-alt" => __( "layout-column2-alt", "clariwell" ) ),
		array( "ti-instagram" => __( "instagram", "clariwell" ) ),
		array( "ti-google" => __( "google", "clariwell" ) ),
		array( "ti-github" => __( "github", "clariwell" ) ),
		array( "ti-flickr" => __( "flickr", "clariwell" ) ),
		array( "ti-facebook" => __( "facebook", "clariwell" ) ),
		array( "ti-dropbox" => __( "dropbox", "clariwell" ) ),
		array( "ti-dribbble" => __( "dribbble", "clariwell" ) ),
		array( "ti-apple" => __( "apple", "clariwell" ) ),
		array( "ti-android" => __( "android", "clariwell" ) ),
		array( "ti-save" => __( "save", "clariwell" ) ),
		array( "ti-yahoo" => __( "yahoo", "clariwell" ) ),
		array( "ti-wordpress" => __( "wordpress", "clariwell" ) ),
		array( "ti-vimeo-alt" => __( "vimeo-alt", "clariwell" ) ),
		array( "ti-twitter-alt" => __( "twitter-alt", "clariwell" ) ),
		array( "ti-tumblr-alt" => __( "tumblr-alt", "clariwell" ) ),
		array( "ti-trello" => __( "trello", "clariwell" ) ),
		array( "ti-stack-overflow" => __( "stack-overflow", "clariwell" ) ),
		array( "ti-soundcloud" => __( "soundcloud", "clariwell" ) ),
		array( "ti-sharethis" => __( "sharethis", "clariwell" ) ),
		array( "ti-sharethis-alt" => __( "sharethis-alt", "clariwell" ) ),
		array( "ti-reddit" => __( "reddit", "clariwell" ) ),
		array( "ti-pinterest-alt" => __( "pinterest-alt", "clariwell" ) ),
		array( "ti-microsoft-alt" => __( "microsoft-alt", "clariwell" ) ),
		array( "ti-linux" => __( "linux", "clariwell" ) ),
		array( "ti-jsfiddle" => __( "jsfiddle", "clariwell" ) ),
		array( "ti-joomla" => __( "joomla", "clariwell" ) ),
		array( "ti-html5" => __( "html5", "clariwell" ) ),
		array( "ti-flickr-alt" => __( "flickr-alt", "clariwell" ) ),
		array( "ti-email" => __( "email", "clariwell" ) ),
		array( "ti-drupal" => __( "drupal", "clariwell" ) ),
		array( "ti-dropbox-alt" => __( "dropbox-alt", "clariwell" ) ),
		array( "ti-css3" => __( "css3", "clariwell" ) ),
		array( "ti-rss" => __( "rss", "clariwell" ) ),
		array( "ti-rss-alt" => __( "rss-alt", "clariwell" ) ),
		
	);
	return array_merge( $icons, $themify );
}