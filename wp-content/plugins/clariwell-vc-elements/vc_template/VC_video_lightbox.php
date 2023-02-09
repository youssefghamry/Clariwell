<?php
/**
 *
 * Video Light Box
 *
 */

/*Video model Element*/

add_action( 'vc_before_init', 'VC_video_lightbox' );
function VC_video_lightbox() {

vc_map( array(
      "name" => __( "Video Lightbox", "clariwell" ),
      "base" => "vc_video_box",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
      "class" => "font-awesome",
	  "icon" => "fa fa-play-circle",
      "params" => array(

       	array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Video link', "clariwell" ),
			'param_name' => 'link',
			"group" => "General",
			'admin_label' => true,
			'description' => sprintf( esc_html__( 'Link to the video. More about supported formats at %s.', "clariwell" ), '<a href="http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">WordPress codex page</a>' ) 
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Style", "clariwell" ),
			"param_name" => "style",
			"group" => "General",
			"value" => array(
				esc_html__( "Text and Icon", "clariwell" ) => "text",
				esc_html__( "Image and Icon", "clariwell" ) => "img" 
			),
			"description" => esc_html__( "White Scheme - all text styled to white color, recommended for dark backgrounds. Custom - choose your own heading and text color.", "clariwell" ) 
		),
			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Placeholder Image', "clariwell" ),
				'param_name' => 'img',
				"group" => "General",
				'value' => '',
				'description' => esc_html__( 'Select a video placeholder image.', "clariwell" ),
				'dependency' => Array(
					"element" => "style",
					'value' => array(
						"img" 
					) 
				) 
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Border Radius", "clariwell" ),
				"param_name" => "border",
				"group" => "General",
				"value" => array(
					esc_html__( "Theme Defaults", "clariwell" ) => "",
					esc_html__( "Square", "clariwell" ) => "square",
					esc_html__( "Round", "clariwell" ) => "round"
				),
				"description" => esc_html__( "Select a border radius for the cover image.", "clariwell" ) 
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Box Shadow", "clariwell" ),
				"group" => "General",
				"param_name" => "shadow",
				"value" => array(
					esc_html__( "Yes", "clariwell" ) => "yes",
					esc_html__( "No", "clariwell" ) => "no"
				),
				"description" => esc_html__( "Enable or disable a box shadow around the cover image.", "clariwell" ) 
			),
		array(
			"type" => "textfield",
			"class" => "hidden-label",
			"heading" => esc_html__( "Title", "clariwell" ),
			"param_name" => "title",
			"group" => "General",

			"value" => "Our video",
			"desc" => esc_html__( 'Title of the element.', "clariwell" ),
			'dependency' => Array(
				"element" => "style",
				'value' => array(
					"text" 
				) 
			) 
		),
		array(
			"type" => "textfield",
			"class" => "hidden-label",
			"heading" => esc_html__( "Description", "clariwell" ),
			"param_name" => "description",
			 "group" => "General",

			"value" => "This is our video!",
			"desc" => esc_html__( 'Description of the lightbox video.', "clariwell" ),
			'dependency' => Array(
				"element" => "style",
				'value' => array(
					"text" 
				) 
			)
		),
		
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Text Color Scheme", "clariwell" ),
			"group" => "General",
                       "param_name" => "color_scheme",
			"value" => array(
				esc_html__( "White Scheme", "clariwell" ) => "white",
				esc_html__( "Dark Scheme", "clariwell" ) => "dark" 
			),
			"description" => esc_html__( "White Scheme - all text styled to white color, recommended for dark backgrounds. Custom - choose your own heading and text color.", "clariwell" ),
			'dependency' => Array(
				"element" => "style",
				'value' => array(
					"text" 
				) 
			)
		),
		
		
			 array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("CSS Animation", "clariwell"),
                            "group" => "General",
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
                            "group" => "General",
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
            "param_name" => "video_extra_class",
            "group" => "General",
             "description" => __( "Style particular content element differently - add a class name and refer to it in custom CSS.", "clariwell" )
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

add_shortcode( 'vc_video_box', 'vc_video_shortcode' );
function vc_video_shortcode( $atts ) {
$css = '';
 extract( shortcode_atts( array(
        "link" => '',
        "description" => 'This is our video!',
	"title" => "Our Video",
	"color_scheme" => 'white',
        'img' => '',
	'style' => 'text',
	'shadow' => 'yes',
	'border' => '',
        'video_extra_class' => '',
        'css'=> '',
        'css_animation'  => '',
        'ib_animation_delay'=> ''
       
             
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


$css1=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );

$output = '<div class="video-lightbox color-scheme-' . esc_attr( $color_scheme ) . ' video-lightbox-' . esc_attr( $style ) . ' '.$video_extra_class.' '.$css1.' '.$css_animation.'" '.$animation_delay.'><div class="video-lightbox-inner"><a href="' . $link . '" class="video-link mp-video inv-video-lightbox-element margin-40px-bottom">';
		
		if ( $style == 'img' ) { 
			
			if ( $img == '' ) {
				$output .= esc_html__( 'Please select a cover image.', 'clariwell' );
			} else {
				$img_url = wp_get_attachment_image_src( $img, 'full' );
				$img_url = $img_url[0];
				
				$extra_classes = '';
				
				if ( $shadow == 'no' ) $extra_classes .= ' video-lightbox-no-shadow';
				if ( $border == 'round' ) $extra_classes .= ' video-lightbox-round';
				
				$output .= '<div class="video-lightbox-image-holder' . $extra_classes . '" style="background-image:url(' . esc_url( $img_url ) . ')"><div class="bg-overlay bg-overlay-dark20"></div><div class="video-lightbox-image-icon"><i class="inv-video-lightbox-play-icon ti-control-play"></i></div></div>';
			}
			
			$output .= '</a>'; // Close lightbox link
			
		} else {
			$output .= '<i class="inv-video-lightbox-play-icon ti-control-play"></i></a>';
			
			if ( $title ) {
				$output .= '<h2 class="video-lightbox-title margin-20px-bottom">' . $title . '</h2>';
			}
			
			if ( $description ) {
				$output .= '<p class="video-lightbox-description margin-20px-bottom margin-15px-top">' . $description . '</p>';
			}
		  }
		$output .= '</div></div>';
	
		return $output;
} 