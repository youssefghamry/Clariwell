<?php

define('insignia_SHORTCODES', plugin_dir_path( __FILE__ ));


// Add TinyMCE Button

add_action('init', 'insignia_add_tinymce_button');

function insignia_add_tinymce_button() {
	//if(strstr($_SERVER['REQUEST_URI'], 'wp-admin/post-new.php') || strstr($_SERVER['REQUEST_URI'], 'wp-admin/post.php')) {
			add_filter('mce_external_plugins', 'insignia_add_tinymce_plugin');  
			add_filter('mce_buttons', 'insignia_register_tinymce_button');  
	//}
}    

function insignia_register_tinymce_button($buttons) {
   array_push($buttons, 'separator', "insignia_shortcodes_button"); 
   //array_push($buttons, "waxom_visual_button"); 
   return $buttons;
}  

function insignia_add_tinymce_plugin($plugin_array) {  
   $plugin_array['insignia_shortcodes_button'] = plugins_url() . '/clariwell-vc-elements/shortcodes/tinymce/tinymce-quick-shortcodes.js';
   return $plugin_array;  
}

// - - -
// Function removing extra br and p tags
// - - -

function insignia_do_shortcode($content) {
    $array = array('<p>[' => '[','<br />[' => '[', '<br>[' => '[', ']</p>' => ']', ']<br />' => ']', ']<br>' => ']');
    $content = strtr($content, $array);
    return do_shortcode($content);
}

// - - - - - - - - - -
// Typography
// - - - - - - - - - -

function insignia_highlight( $atts, $content=null ) {
	extract( shortcode_atts( array( "color" => '', "bgcolor" => 'pc-bg' ), $atts ) );
	
	$color_css = '';
	
	if ( $color || $bgcolor ) {
		if ( strpos( $bgcolor, '#' ) !== false ) {
			$color_css .= 'background-color:' . esc_attr( $bgcolor ) . ';';
			$bgcolor = 'custom';
		}
		if ( strpos( $color, '#' ) !== false ) {
			$color_css .= 'color:' . esc_attr( $color ) . ';';
		}
		if ( $color_css != '' ) $color_css = 'style="' . $color_css . '"';
	}	
	
	return '<span class="insignia-highlight ' . esc_attr( $bgcolor ) . '"' . $color_css . '>' . $content . '</span>';
}

function insignia_dropcap1( $atts, $content=null ) {
	extract( shortcode_atts( array( "color" => '', "style" => '1', "size" => 'normal' ), $atts ) );
	
	$color_css = '';
	
	if ( $color && $color != 'pc-bg' ) {
		
		if ( $style == '1' ) {
			$color_css = 'style="color:' . esc_attr( $color ) . '"';
		} else if ( $style == 'circle' ) {
			$color_css = 'style="background-color:' . esc_attr( $color ) . '"';
		}
		$color = 'dropcap-custom';
	}
	
	return '<span class="dropcap insignia-dropcap dropcap-' . esc_attr( $style ) . ' ' . esc_attr( $color ) . ' dropcap-' . esc_attr( $size ) . '"' . $color_css . '>' . $content . '</span>';
}


remove_shortcode('highlight');
remove_shortcode('dropcap');

add_shortcode('dropcap', 'insignia_dropcap1');;
add_shortcode('highlight', 'insignia_highlight');