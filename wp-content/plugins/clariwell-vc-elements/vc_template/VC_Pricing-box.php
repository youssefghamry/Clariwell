<?php
/**
 *
 * Pricing Table VC element by INSIGNIA
 *
 */

add_action( 'vc_before_init', 'VC_ins_pricing_box' );

function VC_ins_pricing_box() {
	
	vc_map( array(
	"name" => esc_html__( "Pricing Box", "clariwell" ),
	"base" => "pricing_box",
	"class" => "font-awesome",
	"icon" => "fa fa-usd",
        "category" => __( "Insignia", "clariwell"),
	"description" => esc_html__( "Product box with prices", "clariwell" ),
	"params" => array(
	
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Style", "clariwell" ),
			"param_name" => "style",
			"value" => array(
				esc_html__( "Default", "clariwell" ) => "",
				esc_html__( "Style1", "clariwell" ) => "style1",
				esc_html__( "Style2", "clariwell" ) => "style2",
			),
			"description" => esc_html__( "Choose style for your pricing boxes.", "clariwell" )
		),
		
		array(
			"type" => "attach_image",
			"class" => "",
			"heading" => __( "Add Image", "clariwell" ),
			"param_name" => "custom_image",
			"value" => '',
			"description" => __( "Select image of your image box.", "clariwell" ),
			'dependency' => array(
			'element' => 'style',
			'value' => array('style1')
				
			),

		),

		 array(
			"type" => "textfield",
			"heading" => esc_html__( "Box Title", "clariwell" ),
			"param_name" => "title",
			"description" => esc_html__( "Your Pricing Box title", "clariwell" ),
			"value" => "Standard",
			"admin_label" => true 
		),
		 array(
			"type" => "textfield",
			"heading" => esc_html__( "Box Subtitle", "clariwell" ),
			"param_name" => "subtitle",
			"description" => esc_html__( "Your Pricing Box subtitle", "clariwell" ),
			"value" => "Most Popular",
			"admin_label" => true,
		),
		
		array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Price Value", "clariwell" ),
            "param_name" => "price_value",
            "value" => __( "$", "clariwell" ),
             "description" => __( "Currency or other value prices. e.g. $", "clariwell" )
         
         ),


		array(
			"type" => "textfield",
			"heading" => esc_html__( "Price", "clariwell" ),
			"param_name" => "price",
			"description" => esc_html__( "Pricing Box price", "clariwell" ),
			"value" => "99",
			"admin_label" => true 
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Period", "clariwell" ),
			"param_name" => "period",
			"description" => esc_html__( "Pricing Box period", "clariwell" ),
			"value" => "Month" 
		),
		array(
			"type" => "exploded_textarea",
			"heading" => esc_html__( "Features", "clariwell" ),
			"param_name" => "features",
			"value" => "Feature 1,Feature 2,Feature 3",
			"description" => esc_html__( 'Enter features here. Divide each feature with linebreaks (Enter). You can also use FontAwesome icons like fa-close for red cross icon or fa-check for green check icon!', "clariwell" ) 
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__( "Add Icon?", "clariwell" ),
			"param_name" => "add_icon",
			"class" => "hidden-label",
			"value" => array(
				esc_html__( "Yes", "clariwell" ) => "true",
			),
			"description" => esc_html__( "Display an icon before each feature.", "clariwell" ) 
		),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Icon before list item', "clariwell" ),
				'param_name' => 'icon_fontawesome',
				'value' => 'fa fa-info-circle',
				'settings' => array(
					'emptyIcon' => false, // default true, display an "EMPTY" icon?
					'iconsPerPage' => 200 // default 100, how many icons per/page to display
				),
				'dependency' => array(
					"element" => 'add_icon',
					'value' => 'true',
				),
				'description' => esc_html__( 'Select icon from library.', "clariwell" ) 
			),
		array(
			"type" => "dropdown",
			"class" => "hidden-label",
			"value" => array(
				esc_html__( "Not Featured", "clariwell" ) => 'no',
				esc_html__( "Featured", "clariwell" ) => 'yes' 
			),
			"heading" => esc_html__( "Featured?", "clariwell" ),
			"description" => esc_html__( 'Make the box stand out from the crew.', "clariwell" ),
			"param_name" => "featured" 
		),
		
				array(
			"type" => "dropdown",
			"heading" => esc_html__( "Content Alignment", "clariwell" ),
			"param_name" => "content_alignment",
			"value" => array(
				esc_html__( "Left", "clariwell" ) => "text-left",
				esc_html__( "Center", "clariwell" ) => "text-center",
				esc_html__( "Right", "clariwell" ) => "text-right",
			),
		
			"description" => esc_html__( "Choose content alignment position", "clariwell" )
		),	
		
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button Label", "clariwell" ),
			"param_name" => "button_label",
			"description" => esc_html__( "Text visible on the box button", "clariwell" ),
			"value" => "Buy Now" 
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button URL", "clariwell" ),
			"param_name" => "button_url",
			"description" => esc_html__( "Button URL, start with http://", "clariwell" ),
			"value" => "#",
			'dependency' => Array(
				"element" => "button_label",
				'not_empty' => true 
			) 
		),

                
          array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Button Border Radius", "clariwell" ),
            "param_name" => "btn_border_radius",

              "description" => __( "Button border radius. Rounded corners.", "clariwell" ),
             "value"       => array(
       
       'Select' => '',
        'Default'   => 'btn-radius-default',
        'Circle'   => 'btn-circle',
        'Square (no-radius)'   => 'btn-square'
        
         ),
         'dependency' => Array(
				"element" => "button_label",
				'not_empty' => true 
			),
      "std"         => '',
            
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
            "type" => "textfield",
            "class" => "",
             
            "heading" => __( "Extra Class Name", "clariwell" ),
            "param_name" => "extra_class",
            "value" => __( "", "clariwell" ),
             "description" => __( "Style particular content element differently - add a class name and refer to it in custom CSS.", "clariwell" ),
            
         ),
		
	) )
);
	
}


function insignia_pricing_box( $atts, $content )
{

	$icon_type = 'fontawesome';
	$defaultIconClass = 'fa fa-info-circle';
	
	extract( shortcode_atts( array(
		"featured" => 'no',
		"title" => esc_html__( 'Standard', 'clariwell'),
		"subtitle" => esc_html__( 'Most Popular', 'clariwell'),
		"features" => 'Feature 1,Feature 2,Feature 3',
		"button_label" => esc_html__( 'Buy Now', 'clariwell'),
		"period" => esc_html__( 'Month', 'clariwell'),
		"price" => '99',
		"button_url" => '#',
		"animation_delay" => '100',
		"border_radius" => 'default',
	
		"add_icon" => 'false',
		"content_alignment" => 'text_center',
		"icon_fontawesome" => $defaultIconClass,
		"price_value" => '$',
		'extra_class' => '',
		'css_animation'  => '',
        'ib_animation_delay'=> '',
        'btn_border_radius'=>'',
		'custom_image'=>'',
		'style' => 'style2'
		
	), $atts ) );
	
	$animated_data = '';
	
	//CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay;
            }
	
	$css_classes = array();
	
	if ( $featured == 'yes' ) {
		$css_classes[] = "pricing-box-featured";
		$css_classes[] = ' border-color-accent';
	}
	

	
		$css_classes[] = $content_alignment;


	// Add icon
	
	$icon = '';
	
	if ( $add_icon != "false" ) {
	
		$icon = str_replace( 'fa-', '', $icon );
		vc_icon_element_fonts_enqueue( $icon_type );		
		$iconClass = isset( ${"icon_" . $icon_type} ) ? ${"icon_" . $icon_type} : $defaultIconClass;
		
		$css_classes[] = 'pricing-box-with-icons';
		$icon = '<span class="pricing-box-icon"><i class="' . $iconClass . '"></i></span> ';
		
	}
	$uniqid = uniqid('ins-pricing-');
	// Output

    if ( $style == 'style1' ) {
	$output = '<div id="'.$uniqid.'" class="pricing-style-1 insignia-pricing-box-wrapper border-all  ' . implode( ' ', $css_classes ) . ' '.$extra_class.' '.$css_animation.'" '.$animation_delay.'>';
	$output.="<div class='ins-pricing-box-image-upper'>";
	$output.="<div class='ins-pricing-box-image' style='background-image: url(".wp_get_attachment_url($custom_image,'large').");'>";
	$output .= '</div>';
	
	$output .= '<div class="pricing margin-20px-bottom margin-20px-top"><p class="price"><strong>' . esc_html( $price_value ) . '</strong>' . esc_html( $price ) . '</p><p class="pricing-period text-medium title-font margin-10px-top">' . esc_html( $period ) . '</p></div>';

	$output .= '</div>';
	$output .= '<div class="insignia-pricing-box-inner padding-40px-all">';
	
	$output .= '<div class="insignia-pricing-box-header">';
	$output .= '<h3 class="pricing-price-box margin-15px-bottom">';
	if ($title != '') {
	$output .= '<span class="pricing-title title-font text-extra-large font-weight-500 letter-spacing-05">' . esc_html( $title ) . '</span>';
	}
	if ($subtitle != '') {
	$output .= '<p class="pricing-sub-title letter-spacing-05 margin-5px-bottom">' . esc_html( $subtitle ) . '</p>';
	}

	$output .= '</h3>';
	$output .= '</div>';
	
	$output .= '<div class="pricing-features"><ul class="price-list-style list-style-none no-padding">';
	
	// features loop
	
	$features_arr = explode( ',', $features );
	
	foreach ( $features_arr as $single_feature ) {
		if ( strpos( $single_feature, 'fa-' ) !== false ) {
			$single_feature = '<i class="fa ' . $single_feature . '"></i>';
		}
		$output .= '<li>' . $icon . esc_textarea( $single_feature ) . '</li>';
	}
	
	// end loop
	
	$output .= '</ul>';
	
	// button
	
	if ( $button_label ) {
	
		$btn_color = 'btn-grey';
		if( $featured == 'yes' ) {
			$btn_color = 'btn-accent';
		}
		
		$output .= '<div class="pricing-button margin-35px-top"><a href="' . esc_url( $button_url ) . '" class="btn pricing-box-button btn-hover-dark '.$btn_border_radius.' ' . $btn_color . '">' . esc_html( $button_label ) . '</a></div>';
		
	}
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	return $output;
	
    }else{
        
    $output = '<div id="'.$uniqid.'" class="pricing-style-2 insignia-pricing-box-wrapper border-all  ' . implode( ' ', $css_classes ) . ' '.$extra_class.' '.$css_animation.'" '.$animation_delay.'>';

	$output .= '<div class="insignia-pricing-box-inner padding-40px-all">';
	
		$output.="<div class='ins-pricing-box-border-upper'>";

	
	$output .= '<div class="pricing-border-inner margin-20px-top"><h3 class="price-style-2"><strong>' . esc_html( $price_value ) . '</strong>' . esc_html( $price ) . '</h3><h4 class="pricing-period-style-2 text-medium title-font">' . esc_html( $period ) . '</h4></div>';

	$output .= '</div>';
	
	$output .= '<div class="insignia-pricing-box-header">';
	$output .= '<h3 class="pricing-price-box">';
	if ($title != '') {
	$output .= '<span class="pricing-title title-font text-extra-large font-weight-500 letter-spacing-05">' . esc_html( $title ) . '</span>';
	}
	if ($subtitle != '') {
	$output .= '<p class="pricing-sub-title letter-spacing-05">' . esc_html( $subtitle ) . '</p>';
	}

	$output .= '</h3>';
	$output .= '</div>';
	
	$output .= '<div class="pricing-features"><ul class="price-list-style list-style-none no-padding">';
	
	// features loop
	
	$features_arr = explode( ',', $features );
	
	foreach ( $features_arr as $single_feature ) {
		if ( strpos( $single_feature, 'fa-' ) !== false ) {
			$single_feature = '<i class="fa ' . $single_feature . '"></i>';
		}
		$output .= '<li>' . $icon . esc_textarea( $single_feature ) . '</li>';
	}
	
	// end loop
	
	$output .= '</ul>';
	
	// button
	
	if ( $button_label ) {
	
		$btn_color = 'btn-grey';
		if( $featured == 'yes' ) {
			$btn_color = 'btn-accent';
		}
		
		$output .= '<div class="pricing-button margin-35px-top"><a href="' . esc_url( $button_url ) . '" class="btn pricing-box-button btn-hover-dark '.$btn_border_radius.' ' . $btn_color . '">' . esc_html( $button_label ) . '</a></div>';
		
	}
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	return $output;  
    }
}

remove_shortcode( 'pricing_box' );
add_shortcode( 'pricing_box', 'insignia_pricing_box' );
