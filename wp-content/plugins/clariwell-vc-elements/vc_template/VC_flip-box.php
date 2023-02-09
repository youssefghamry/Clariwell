<?php
/**
 *
 * Flip Box VC element by INSIGNIA
 *
 */

/*Flip Box Element*/


add_action( 'vc_before_init', 'VC_flip_box' );

function VC_flip_box() {
  vc_map (

 array(
      "name" => __( "Flip Box", "clariwell" ),
      "base" => "insignia_flip_box",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
        "class" => "font-awesome",
	"icon" => "fa fa-repeat",
       
      "params" => array(
            
        array(
		'type' => 'attach_image',
		'heading' => __( 'Background Image', 'clariwell' ),
		'param_name' => 'image',
		'value' =>'',
		'description' => __( 'Select image from media library.', 'clariwell' ),
	),
	array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Background Image Overlay", 'clariwell' ),
		"param_name" => "bg_overlay",
		"value" =>  array(
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
	),		
                'dependency' => array(
			'element' => 'image',
			'not_empty' => true,
		),
		"description" => esc_html__( "Set a background overlay to darken or lighten the background image and improve the text visibility.", "clariwell" ) 
	),
	
	array(
		'type' => 'colorpicker',
		'heading' => __( 'Custom Background Color', 'clariwell' ),
		'param_name' => 'main_bg_color_custom',
		'description' => __( 'Select a custom box background color.', 'clariwell' ),
		
	),
	array(
		'type' => 'textfield',
		'heading' => __( 'Primary title', 'clariwell' ),
		'param_name' => 'primary_title',
		'value' => __( 'Hover Box Element', 'clariwell' ),
		'description' => __( 'Enter text for heading line.', 'clariwell' ),
		'edit_field_class' => 'vc_col-sm-9',
	),

       array(
		'type' => 'textarea',
		'heading' => __( 'Primary text', 'clariwell' ),
		'param_name' => 'primary_content',
		'value' => __( 'Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'clariwell' ),
		'description' => __( 'Primary part text.', 'clariwell' ),
	), 
	
	array(
		'type' => 'textfield',
		'heading' => __( 'Hover title', 'clariwell' ),
		'param_name' => 'hover_title',
		'value' => 'Hover Box Element',
		'description' => __( 'Hover Box Element', 'clariwell' ),
		'group' => __( 'Hover Block', 'clariwell' ),
		'edit_field_class' => 'vc_col-sm-9',
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Hover title alignment', 'clariwell' ),
		'param_name' => 'hover_align',
		'value' => getVcShared( 'text align' ),
		'std' => 'center',
		'group' => __( 'Hover Block', 'clariwell' ),
		'description' => __( 'Select text alignment for hovered title.', 'clariwell' ),
	),
	array(
		'type' => 'textarea',
		'heading' => __( 'Hover text', 'clariwell' ),
		'param_name' => 'hover_content',
		'value' => __( 'Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'clariwell' ),
		'group' => __( 'Hover Block', 'clariwell' ),
		'description' => __( 'Hover part text.', 'clariwell' ),
	),
	
	array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Front Box Color Scheme", "clariwell" ),
		"param_name" => "color_scheme",
		"value" => array(
			esc_html__( "Theme Defaults", 'clariwell' ) => "",
			esc_html__( "White Scheme", 'clariwell' ) => "white",
			esc_html__( "Dark Scheme", 'clariwell' ) => "dark"
		),
		"description" => esc_html__( "White Scheme - all text styled to white color, recommended for dark backgrounds.", "clariwell" ),
		"group" => esc_html__( "Front Styling", 'clariwell' )
	),
	
	
      
      array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Hover State Color Scheme", "clariwell" ),
		"param_name" => "hover_color_scheme",
		"value" => array(
			esc_html__( "Theme Defaults", 'clariwell' ) => "",
			esc_html__( "White Scheme", 'clariwell' ) => "white",
			esc_html__( "Dark Scheme", 'clariwell' ) => "dark"
		),
		"description" => esc_html__( "White Scheme - all text styled to white color, recommended for dark backgrounds.", "clariwell" ),
		"group" => esc_html__( "Hover Styling", 'clariwell' )
	),
	
	
       array(
		'type' => 'attach_image',
		'heading' => __( 'Hover Background Image', 'clariwell' ),
		'param_name' => 'hover_image',
		'value' => '',
		'group' => __( 'Hover Block', 'clariwell' ),

		'description' => __( 'Select image from media library.', 'clariwell' ),
	),
	array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Hover Background Image Overlay", 'clariwell' ),
		"param_name" => "hover_bg_overlay",
		"value" =>  array(
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
	),
		'group' => __( 'Hover Block', 'clariwell' ),

		'dependency' => array(
			'element' => 'hover_image',
			'not_empty' => true,
		),
		"description" => esc_html__( "Set a background overlay to darken or lighten the background image and improve the text visibility.", "clariwell" ) 
	),

	array(
		'type' => 'colorpicker',
		'heading' => __( 'Background color', 'clariwell' ),
		'param_name' => 'hover_custom_background',
		'description' => __( 'Select custom background color.', 'clariwell' ),
		'group' => __( 'Hover Block', 'clariwell' ),
		
		'edit_field_class' => 'vc_col-sm-6',
	),
		array(
		'type' => 'dropdown',
		'heading' => __( 'Alignment', 'clariwell' ),
		'param_name' => 'align',
		'description' => __( 'Select block alignment.', 'clariwell' ),
		'value' => array(
			__( 'Left', 'clariwell' ) => 'text-left',
			__( 'Right', 'clariwell' ) => 'text-right',
			__( 'Center', 'clariwell' ) => 'text-center',
		),
		'std' => 'text-center',
	),
	array(
		"type" => "checkbox",
		"heading" => esc_html__( "Add Icon?", "clariwell" ),
		"param_name" => "add_icon",
		"class" => "hidden-label",
		"value" => array(
			esc_html__( "Yes", "clariwell" ) => "true",
		),
		"description" => esc_html__( "Display icon above the special heading.", "clariwell" ) 
	),

      array(
        "type" => "iconpicker",
        "heading" => esc_html__( "Icon", "clariwell" ),
        "param_name" => "icon_type",
       
        "settings" => array(
            "type" => "iconsmind",
			"iconsPerPage" => 50,
             ),
	"description" => esc_html__( "Select icon from library.", "clariwell" ),
        'dependency' => array(
		'element' => 'add_icon',
		'value' => array('true')
						
           ),
    ),


     
      array(
		"type" => "checkbox",
		"heading" => esc_html__( "Add Icon?", "clariwell" ),
		"param_name" => "hover_add_icon",
		"class" => "hidden-label",
		'group' => __( 'Hover Block', 'clariwell' ),

		"value" => array(
			esc_html__( "Yes", "clariwell" ) => "true",
		),
		"description" => esc_html__( "Display icon above the special heading.", "clariwell" ) 
	),

            array(
        "type" => "iconpicker",
        "heading" => esc_html__( "Icon", "clariwell" ),
        "param_name" => "hover_icon_type",
    'group' => __( 'Hover Block', 'clariwell' ),

        "settings" => array(
            "type" => "iconsmind",
			"iconsPerPage" => 50,
             ),
	"description" => esc_html__( "Select icon from library.", "clariwell" ),
        'dependency' => array(
						'element' => 'hover_add_icon',
						'value' => array('true')
						
                ),
	),	

		
	array(
		'type' => 'el_id',
		'heading' => __( 'Element ID', 'clariwell' ),
		'param_name' => 'el_id',
		'description' => sprintf( __( 'Enter element ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'clariwell' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
	),
	array(
		'type' => 'textfield',
		'heading' => __( 'Extra class name', 'clariwell' ),
		'param_name' => 'el_class',
		'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'clariwell' ),
	),
	
	                       array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("CSS Animation", "clariwell"),
                            "param_name" => "css_animation",
                            "value" => array(
                                "No"              => "no_animation",
                                "Fade In"         => "ins-animated fadeIn",
                                "Fade In Down"    => "ins-animated fadeInDown",
                                "Fade In Left"    => "ins-animated fadeInLeft",
                                "Fade In Right"   => "ins-animated fadeInRight",
                                "Fade In Up"      => "ins-animated fadeInUp",
                                "Zoom In"         => "ins-animated zoomIn",
                            ),
                            "description" => esc_html__("Select type of animation for element to be animated when it enters the browsers viewport (Note: works only in modern browsers).", "clariwell"),
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Animation Delay", "clariwell"),
                            "param_name" => "ib_animation_delay",
                            "value" => array(
                                "0 ms"              => "",
                                "200 ms"            => "200",
                                "400 ms"            => "400",
                                "600 ms"            => "600",
                                "800 ms"            => "800",
                                "1 s"            => "1000",
                            ),
                            "dependency" =>	array(
                                "element" => "css_animation",
                                "value" => array("ins-animated fadeIn", "ins-animated fadeInDown", "ins-animated fadeInLeft", "ins-animated fadeInRight", "ins-animated fadeInUp", "ins-animated zoomIn")
                            ),
                            "description" => esc_html__("Enter animation delay in ms", "clariwell")
                        ),

	
	
	array(
		'type' => 'css_editor',
		'heading' => __( 'CSS box', 'clariwell' ),
		'param_name' => 'css',
		'group' => __( 'Design Options', 'clariwell' ),
	),
      
   ) ));
}


add_shortcode( 'insignia_flip_box', 'insignia_flip_box_shortcode' );
function insignia_flip_box_shortcode( $atts,$content) {

 extract( shortcode_atts( array(
           "image" => '',
	    "url" => '',
	     "bg_overlay" => '',
	     "main_bg_color_custom" => '',
	    "primary_title" => 'Flip Box Element',
	    "use_custom_fonts_primary_title" => '',
	    "primary_align" => 'center',
	    "primary_title_font_container" => '',
	    "hover_title" => 'Hover Title',
	    "use_custom_fonts_hover_title" => '',
	    "hover_align" => 'center',
	    "hover_title_font_container" => '',
	    "hover_custom_background" => '',
	    "align" => 'text-center',
	    "hover_add_button" => '',
	    "hover_btn_title" => 'Text on the button',
	    "el_id" => '',
	    "el_class" => '',
	    "css" => '',
	    "add_icon" => 'false',
	    'icon_type'=>  '',
            
            "hover_add_icon" => 'false',
	    'hover_icon_type'=>  '',
            
	    "color_scheme" => '',
	    "hover_color_scheme" => '',
            "hover_image" => '',
	    "hover_bg_overlay" => '',
	   'css_animation'  => '',
        'ib_animation_delay'=> '',
            "primary_content" => 'Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.',
            "hover_content" => 'Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.'
 
    ), $atts ) );
    
    
    //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay;
            }
    
    
    $image_data = $image_src = '';
	
	if ( strpos( $image, 'unsplash') !== false ) {
		$image_src = $image;
	} elseif ( $image != '' ) {
		$image = intval( $image );
		$image_data = wp_get_attachment_image_src( $image, 'large' );
		$image_src = $image_data[0];
	}
	
	$image_src = esc_url( $image_src );



 $hover_image_data = $hover_image_src = '';
	
	if ( strpos( $hover_image, 'unsplash') !== false ) {
		$hover_image_src = $hover_image;
	} elseif ( $hover_image != '' ) {
		$hover_image = intval( $hover_image );
		$hover_image_data = wp_get_attachment_image_src( $hover_image, 'large' );
		$hover_image_src = $hover_image_data[0];
	}
	
	$hover_image_src = esc_url( $hover_image_src );

	$id = '';
	if ( ! empty( $el_id ) ) {
		$id = 'id="' . esc_attr( $el_id ) . '"';
	}
	
	$class_to_filter = vc_shortcode_custom_css_class( $css, ' ' );
	
	$el_css = array();
	
	$el_css[] = vc_shortcode_custom_css_class( $css );
	
	// Icon
	
	$icon_output = $icon = '';
	
	if ( $add_icon != "false" ) {
	
	
		
		$el_css[] = 'flipbox-with-icon';
		$icon_output = '<div class="flipbox-icon"><i class="icon-medium ' . $icon_type . '"></i></div>';
		
	}

     	$hover_icon_output = $hover_icon = '';


       if ( $hover_add_icon != "false" ) {
	
		
		$el_css[] = 'flipbox-with-icon';
		$hover_icon_output = '<div class="flipbox-icon-hover"><i class="icon-medium ' . $hover_icon_type . '"></i></div>';
		
	}
	
	// Front Background
	
	$front_bg = false;
	
	$front_box_css = $front_box_inline_css = '';
	
	
  	

	if(!empty($main_bg_color_custom)) {
		$front_box_inline_css .= 'background-color:' . $main_bg_color_custom . ';';
	}else{
	    $front_box_inline_css .= 'background-color: transparent;';
	}
		$front_bg = true;

	if ( $image_src != '' ) {
		$front_bg = true;
		$front_box_inline_css .= 'background-image: url(' . $image_src . ');';
		if ( $bg_overlay != '' ) $front_box_css .= ' bg-overlay bg-overlay-' . $bg_overlay;
	}
	
	if ( $front_bg == true && $color_scheme == '' ) $front_box_css .= ' color-scheme-white no-border';
	
	if ( $color_scheme != '' ) $front_box_css .= ' color-scheme-' . $color_scheme;
	
	// Hover Background color
	
	$hover_bg = false;
	$hover_box_inline_css = $hover_box_css = '';

	   if(!empty($hover_custom_background)) {
		$hover_box_inline_css .= 'background-color:' . $hover_custom_background . ';';
	   }else{
	       $hover_box_inline_css .= 'background-color:transparent;';
	   }
		$hover_bg = true;


	if ( $hover_bg == true && $hover_color_scheme == '' ) $hover_box_css .= ' color-scheme-white no-border';
	if ( $hover_color_scheme != '' ) $hover_box_css .= ' color-scheme-' . $hover_color_scheme;

       if ( $hover_image_src != '' ) {
		$hover_bg = true;
		$hover_box_inline_css .= 'background-image: url(' . $hover_image_src . ');';
		if ( $hover_bg_overlay != '' ) $hover_box_css .= ' hover-bg-overlay hover-bg-overlay-' . $hover_bg_overlay;
	}
	

	// Titles
	
	$primary_title = '<h5 class="flipbox-front-title margin-10px-top padding-10px-bottom">' . $primary_title . '</h5>';
	$hover_title = '<h5 class="flipbox-hover-title padding-10px-bottom">' . $hover_title . '</h5>';
	//$hover_title = $this->getHeading( 'hover_title', $atts, $atts['hover_align'] );
	
	
	$button = '';
	
	if ( $hover_add_button ) {
		$button = $this->renderButton( $atts );
	}
	
	$template = '<div class="ins-flipbox vc-hoverbox-wrapper vc-hoverbox-direction--default ' . implode( ' ', $el_css ) . '  '.$css_animation.'" '.$animation_delay.' ' . $id . '>
	  <div class="vc-hoverbox">
	    <div class="vc-hoverbox-inner ' . $align . '">
	      <div class="ins-flipbox-front vc-hoverbox-block vc-hoverbox-front' . $front_box_css . '"  style="' . $front_box_inline_css . '">
	        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
   '.$icon_output.'
   '. $primary_title.'
   '. $primary_content .'
    </div>
	      </div>
	      <div class="ensign-flipbox-hover vc-hoverbox-block vc-hoverbox-back ' . $hover_box_css . '"  style="' . $hover_box_inline_css . '">
	        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    '. $hover_icon_output .'
	            ' . $hover_title . '
	            ' . $hover_content . '
	            ' . $button . '
	        </div>
	      </div>
	    </div>
	  </div>
	</div>';
	
	return $template;
}