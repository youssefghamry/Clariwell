<?php
/**
 *
 * Custom Menu field
 *
 */
	function rt_get_menu() {
		$custom_menus = array();
		if ( 'vc_edit_form' === vc_post_param( 'action' ) && vc_verify_admin_nonce() ) {
			$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
			if ( is_array( $menus ) && ! empty( $menus ) ) {
				foreach ( $menus as $single_menu ) {
					if ( is_object( $single_menu ) && isset( $single_menu->name, $single_menu->term_id ) ) {
						$custom_menus[ $single_menu->name ] = $single_menu->term_id;
					}
				}
			}
		}
		return $custom_menus;
	}

add_action( 'vc_before_init', 'VC_custom_menu' );
function VC_custom_menu() {
   vc_map( array(
      "name" => __( "Custom-menu", "clariwell" ),
      "base" => "custom_menu",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
     	"class" => "font-awesome",
	"icon" => "fa fa-sort-numeric-asc",
'controls'    => 'full',
      "params" => array(
          
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Menu', 'clariwell' ),
			'param_name'  => 'nav_menu',
			'value'       => array_flip( rt_get_menu() ),
			"description" => esc_html__( "select menu", "clariwell" ),
			'save_always' => true,
			"group" => "General",

			),


		 array(

            "type" => "textfield",
            "class" => "",
             
            "heading" => __( "Extra Class Name", "clariwell" ),
            "param_name" => "extra_class",
            "group" => "General",
            "value" => __( "", "clariwell" ),
             "description" => __( "Style particular content element differently - add a class name and refer to it in custom CSS.", "clariwell" ),
         ),

  array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'clariwell' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'clariwell' ),
        )
       
       )
   ) );
}

add_shortcode( 'custom_menu', 'custom_menu_shortcode' );
function custom_menu_shortcode( $atts ) {


 extract( shortcode_atts( array(

       'extra_class'=>'',
       'css'=> '',

		'nav_menu' => ''

       
             
 ), $atts ) );

$extra_class1=${'extra_class'};
$css1=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


$args    = array(
	'theme_location'  => '',
	'menu'            => ${'nav_menu'},
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => false,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
);


			$output = '<div class="ins-custom-menu-wrapper '.$extra_class1.' '.$css1.'">';
			   $output .= wp_nav_menu( $args );
			$output .= '</div>' . "\r";
			return $output;



}