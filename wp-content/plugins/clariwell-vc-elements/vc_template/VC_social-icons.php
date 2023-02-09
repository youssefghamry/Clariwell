<?php
/**
 *
 * Social Icons VC element by INSIGNIA
 *
 */

/*Social Icons Element*/

add_action( 'vc_before_init', 'VC_social_icons' );

function VC_social_icons() {
 
 // Social Icons
	
	$social_icons_params_arr = array();
	
	$social_icons_params_arr[] = array(
		"type" => "dropdown",
		"heading" => esc_html__( "Color Style", "clariwell" ),
		"param_name" => "color",
		"class" => "hidden-label",
		"value" => array(
			esc_html__( "Theme Defaults", "clariwell" ) => "",
			esc_html__( "Outline", "clariwell" ) => "outline",
			esc_html__( "Grey", "clariwell" ) => "grey",
			esc_html__( "Dark", "clariwell" ) => "dark",
			esc_html__( "Colorful", "clariwell" ) => "colorful"  
		),
		"description" => esc_html__( "Choose a color style for your icons.", "clariwell" ) 
	);
	
	$social_icons_params_arr[] = array(
		"type" => "dropdown",
		"heading" => esc_html__( "Border Radius", "clariwell" ),
		"param_name" => "border_radius",
		"class" => "hidden-label",
		"value" => array(
			esc_html__( "Select", "clariwell" ) => "",
			esc_html__( "Round", "clariwell" ) => "round",
			esc_html__( "Circle", "clariwell" ) => "circle",
			esc_html__( "Square", "clariwell" ) => "square" 
		),
		"description" => esc_html__( "Choose a border radius of your icons.", "clariwell" ) 
	);
	
	$social_icons_params_arr[] = array(
		"type" => "dropdown",
		"heading" => esc_html__( "Size", "clariwell" ),
		"param_name" => "icon_size",
		"class" => "hidden-label",
		"value" => array(
			esc_html__( "Select size", "clariwell" ) => "",
			esc_html__( "Small", "clariwell" ) => "small",
			esc_html__( "Regular", "clariwell" ) => "regular",
			esc_html__( "Large", "clariwell" ) => "large" 
		),
		"description" => esc_html__( "Social icons size.", "clariwell" ) 
	);
	
	$social_icons_params_arr[] = array(
		"type" => "dropdown",
		"heading" => esc_html__( "Hover Effect", "clariwell" ),
		"param_name" => "hover_effect",
		"class" => "hidden-label",
		"value" => array(
			esc_html__( "Select", "clariwell" ) => "",
			esc_html__( "Slide Up", "clariwell" ) => "slideup",
			esc_html__( "None", "clariwell" ) => "none" 
		),
		"description" => esc_html__( "Choose a hover effect for your icons.", "clariwell" ) 
	);
	
	$social_icons_params_arr[] = array(
		"type" => "dropdown",
		"heading" => esc_html__( "Icons Alignment", "clariwell" ),
		"param_name" => "icon_align",
		"class" => "hidden-label",
		"value" => array(
			esc_html__( "Select", "clariwell" ) => "",
			esc_html__( "Left", "clariwell" ) => "left",
			esc_html__( "Center", "clariwell" ) => "center",
			esc_html__( "Right", "clariwell" ) => "right" 
		),
		"description" => esc_html__( "Choose the alignment of social icons.", "clariwell" ) 
	);
	
	   	$social_icons_params_arr[] = array(
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
                        );

                      $social_icons_params_arr[] = array(
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
                        );
	
	//$social_icons_param = array();
	
	$social_icons = ensign_social_sites_array();
	
	$icon_key = '';
	
	foreach ( $social_icons as $social_icon_key => $social_icon_name ) {
		
		$icon_key = $social_icon_key;
		
		if ( is_numeric( $social_icon_key ) ) {
			$icon_key = $social_icon_name;
		}
		
		$social_icons_params_arr[] = array(
			"type" => "textfield",
			"heading" => ucfirst( $social_icon_name ),
			"param_name" => $icon_key,
			"description" => ucfirst( $social_icon_name ) . ' social site URL.' 
		);
	}
	
	$social_icons_params_arr[] = array(
		'type' => 'css_editor',
		'heading' => __( 'CSS box', "clariwell" ),
		'param_name' => 'css',
		'group' => __( 'Design Options', "clariwell" ) 
	);
	
	vc_map( array(
		 "name" => __( "Social Icons", "clariwell" ),
      "base" => "insignia_social_icons",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
	"class" => "font-awesome",
	"icon" => "fa fa-facebook",    
		"params" => $social_icons_params_arr 
	) );
	
}

function ensign_social_sites_array() {
	$social_sites = array(
		'twitter' => 'Twitter',
		'facebook' => 'Facebook',
		'linkedin' => 'LinkedIn',
		'behance' => 'Behance',
		'codepen' => 'Codepen',
		'bitbucket' => 'Bitbucket',
		'deviantart' => 'Deviant Art',
		'digg' => 'Digg',
		'dribbble' => 'Dribbble',
		'dropbox' => 'Dropbox',
		'flickr' => 'Flickr',
		'git' => 'Git',
		'github' => 'Github',
		'google' => 'Google',
		'google-plus' => 'Google Plus',
		'instagram' => 'Instagram',
		'pinterest' => 'Pinterest',
		'quora' => 'Quora',
		'reddit' => 'Reddit',
		'skype' => 'Skype',
		'snapchat' => 'Snapchat',
		'soundcloud' => 'Soundcloud',
		'stack-exchange' => 'Stack Exchange',
		'stack-overflow' => 'Stack Overflow',
		'spotify' => 'Spotify',
		'steam' => 'Steam',
		'tripadvisor' => 'Trip Advisor',
		'tumblr' => 'Tumblr',
		'twitch' => 'Twitch',
		'vimeo' => 'Vimeo',
		'whatsapp' => 'Whatsapp',
		'yelp' => 'Yelp',
		'youtube' => 'YouTube'
	);
	
	return $social_sites;
}

 add_shortcode( 'insignia_social_icons', 'insignia_social_icons_shortcode' );
function insignia_social_icons_shortcode( $atts,$content) {


 extract( shortcode_atts( array(
      
     'extra_class'=>'',
     'icon_size' => '',
      'icon_align' => '',
      'border_radius' =>'',
      'color' => '',
     'hover_effect' =>'',
     'css'=> '',
     'css_animation'  => '',
     'ib_animation_delay'=> ''
                              
   ), $atts ) );


global $extra_class1,$icon_align1,$border_radius1,$icon_size1,$color1,$hover_effect1,$css1;

$extra_class1=${'extra_class'};
$icon_size1=${'icon_size'};
$icon_align1=${'icon_align'};
$color1=${'color'};
$hover_effect1=${'hover_effect'};
$border_radius1=${'border_radius'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};

$css1=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


  //CSS Animation
            if ($css_animation1 == "no_animation") {
                $css_animation1 = "";
            }
 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay1) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay1;
            }

$icon_class = '';
	
	if( $hover_effect1 != 'none' ) {
		$icon_class = ' icon-hover-' . esc_attr( $hover_effect1);
	}
	
	if( $color == 'colorful' ) {
		$color = 'colorful icon-colored social-icons-colored';
	}

// Icons Loop
	
	$icons = '';
	$icon_arr = array( 'facebook', 'twitter', 'google', 'tumblr', 'linkedin', 'vimeo', 'pinterest', 'instagram','dribbble', 'skype','flickr', 'dropbox', 'youtube','mail', 'dribbble', 'soundcloud', 'rss' );


if ( function_exists( 'ensign_social_sites_array' ) ) {
		$icon_arr = ensign_social_sites_array();
	}

foreach( $icon_arr as $icon_name => $icon_title ) {	
		if( array_key_exists( $icon_name, $atts ) ) {			
			$icons .= '<a href="' . $atts[$icon_name] . '" class="social icon-' . $icon_name . $icon_class . '" target="_blank">';
			if ( $icon_name == 'mail' ) $icon_name = 'envelope';
			$icons .= '<i class="fa fa-' . $icon_name . ' icon-primary"></i>';
			if( $hover_effect1 == 'slideup' ) $icons .= '<i class="fa fa-' . $icon_name . ' icon-secondary"></i>';
			$icons .= '</a>';
		}
	}	

$custom_css = '';
	
	if( function_exists( 'vc_shortcode_custom_css_class' ) ) {
		$custom_css = vc_shortcode_custom_css_class( $css );
	}
			
	return '<div class="ins-social-icons social-icons-' . esc_attr( $icon_size1 ) . ' social-icons-' . esc_attr( $color ) . ' social-icons-' . esc_attr( $border_radius1) . ' social-icons-effect-' . esc_attr( $hover_effect1) . ' icons-align-' . esc_attr( $icon_align1) . ' ' . $custom_css . ' '.$css_animation1.'" '.$animation_delay.'>' . $icons . '</div>';
}