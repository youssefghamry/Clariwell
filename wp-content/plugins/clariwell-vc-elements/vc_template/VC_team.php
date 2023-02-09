<?php
/**
 *
 * Team VC element by INSIGNIA
 *
 */

/*Team Element*/

add_action( 'vc_before_init', 'VC_team' );

function VC_team() {
 
 // Social Icons
	
	$team_params_arr = array();
	
	$team_params_arr[] = array(
		"type" => "textfield",
		"class" => "hidden-label",
		"heading" => esc_html__( "Person Name", "clariwell" ),
		"param_name" => "name",
		"value" => '',
		"description" => esc_html__( "Full name of the person.", "clariwell" ) 
	);
	
	$team_params_arr[] = array(
		"type" => "textfield",
		"class" => "hidden-label",
		"heading" => esc_html__( "Position", "clariwell" ),
		"param_name" => "position",
		"value" => '',
		"description" => esc_html__( "Enter person position i.e. Designer.", "clariwell" ) 
	);
		
	$team_params_arr[] = array(
		'type' => 'attach_image',
		'heading' => esc_html__( 'Person Image', "clariwell" ),
		'param_name' => 'img',
		'value' => '',
		'description' => esc_html__( 'Select a person image.', "clariwell" ),
	);
	


        $team_params_arr[] = array(
            "type" => "textfield",
            "class" => "",
             "heading" => __( "Extra Class Name", "clariwell" ),
            "param_name" => "extra_class",
            "value" => __( "", "clariwell" ),
             "description" => __( "Style particular content element differently - add a class name and refer to it in custom CSS.", "clariwell" ),
            
         );

       $team_params_arr[] = array(
                   "type"        => "checkbox",
                  "param_name" => "enable_popup",
                  "class" => "",
                  "heading" => __( "Enable Popup?", "clariwell" ),
                  "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
                     'save_always' => true,
                    "value"         => array('Enable popup'   => '1' ),
              );
              
        $team_params_arr[] = array(
		"type" => "textarea",
		"class" => "hidden-label",
		"heading" => esc_html__( "Popup Biography", "clariwell" ),
		"param_name" => "popup_bio",
		"value" => '',
		"description" => esc_html__( "Popup short biography.", "clariwell" ),
                'dependency' => array(
						'element' => 'enable_popup',
						'value' => array('1')
						
                ),
	);

	  $team_params_arr[] =array(
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

            $team_params_arr[] = array(
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
	
	
	$social_icons = ensign_team_social_sites_array();
	
	$icon_key = '';
	
	foreach ( $social_icons as $social_icon_key => $social_icon_name ) {
		
		$icon_key = $social_icon_key;
		
		if ( is_numeric( $social_icon_key ) ) {
			$icon_key = $social_icon_name;
		}
		
		$team_params_arr[] = array(
			"type" => "textfield",
			"heading" => ucfirst( $social_icon_name ),
			"param_name" => $icon_key,
			'group' => __( 'Social Profile', "clariwell" ), 

			"description" => ucfirst( $social_icon_name ) . ' social site URL.' 
		);
	}
	
	$team_params_arr[] = array(
		'type' => 'css_editor',
		'heading' => __( 'CSS box', "clariwell" ),
		'param_name' => 'css',
		'group' => __( 'Design Options', "clariwell" ) 
	);
	
	vc_map ( array(
      "name" => __( "Team Members", "clariwell" ),
      "base" => "insignia_team",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
	"class" => "font-awesome",
	"icon" => "fa fa-user",     

       	"params" => $team_params_arr

)
);
}

function ensign_team_social_sites_array() {
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

 add_shortcode( 'insignia_team', 'insignia_team_shortcode' );
function insignia_team_shortcode( $atts,$content) {
 extract( shortcode_atts( array(
      
        "name" => '',
		"position" => '',
		"img" => '',
        "css" => '',
        "extra_class" => '',
        "enable_popup" => '',
        "popup_bio" => '',
		"css_animation" => '',
		"ib_animation_delay" =>''
			   
   ), $atts ) );

if(!empty($enable_popup)) {
   $model="modal";
   $model_class= "team-member-popup-main";
}else{
    $model="";
    $model_class= "";
}

  //CSS Animation
    if ($css_animation == "no_animation") {
        $css_animation = "";
    }

 $animation_delay = "";
    // Animation delay
        if ($ib_animation_delay) {
            $animation_delay = 'data-animation-delay='.$ib_animation_delay;
        }

$uniqid = uniqid('ins-team-popup');

// Social Profiles
	
// Icons Loop
	
	$icons = '';
	$icon_arr = array( 'facebook', 'twitter', 'google', 'tumblr', 'linkedin', 'vimeo', 'pinterest', 'instagram','dribbble', 'skype','flickr', 'dropbox', 'youtube','mail', 'dribbble', 'soundcloud', 'rss' );


if ( function_exists( 'ensign_social_sites_array' ) ) {
		$icon_arr = ensign_social_sites_array();
	}

foreach( $icon_arr as $icon_name => $icon_title ) {	
		if( array_key_exists( $icon_name, $atts ) ) {			
			$icons .= '<a href="' . $atts[$icon_name] . '" class="social icon-' . $icon_name .  '" target="_blank">';
			$icons .= '<i class="fa fa-' . $icon_name . ' icon-primary"></i>';
			$icons .= '</a>';
		}
	}	

$custom_css = '';
	
	if( function_exists( 'vc_shortcode_custom_css_class' ) ) {
		$custom_css = vc_shortcode_custom_css_class( $css );
	}
      
return '<div data-target="#'.$uniqid.'" class="insignia-team-member-wrapper insignia-team-overlay width-100 '.$custom_css.' '.$extra_class.' '.$model_class.' '.$css_animation.'" '.$animation_delay.' data-toggle="'.$model.'">
<div class="insignia-team-inner-wrapper">
<article class="insignia-team-content-wrapper">
<div class="insignia-team-content-inner">
<div class="insignia-team-image-box">
<span class="insignia-team-item-thumbnail">
<span class="insignia-team-item-thumbnail-inner">
'.wp_get_attachment_image($img,'full').'
</span>
</span>
 <div class="insignia-team-overlay">
 <a href="#" tabindex="0">
 <i class="tm-tectxon-icon-plus"></i> 
 </a>
 </div>
 </div>
 <div class="insignia-team-box-content">
 <div class="insignia-team-box-desc">
 <div class="insignia-team-box-title">
 <h4>' . esc_html( $name ) . '</h4>
 </div>
 <div class="insignia-team-box-subtitle">' . esc_html( $position ) . '</div>
 <div class="insignia-team-box-social-links">
 <div class="insignia-team-social-links-wrapper">
 <div class="margin-18px-top ins-social-icons social-icons-small social-icons-colorful icon-colored social-icons-colored social-icons-square social-icons-effect-none icons-align-center ">' . $icons . '</div>
 </div> 
 </div>
 </div>
 </div>
 </div>
 </article>
 </div>
 </div>

<div class="ins-team-popup-main modal fade" id="'.$uniqid.'" role="dialog">
    <div class="ins-team-popup-wrapper modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content col-md-12 col-sm-12">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="ins-popup-modal-content col-md-12 col-sm-12">
      <div class="col-md-6 col-sm-12 ins-popup-image">
       '.wp_get_attachment_image($img,'full').'

       </div>
        <div class="col-md-6 col-sm-12 ins-popup-content">
                        <div class="ins-popup-content-inner">

      <h2 class="insignia-team-title popup-title text-capitalize">' . esc_html( $name ) . '</h2>
          <h6 class="insignia-team-subtitle popup-subtitle text-uppercase">' . esc_html( $position ) . '</h6>

     <p class="description popup-description margin-20px-top">' . $popup_bio . '</p>
       <div class="insignia-team-content-inner">
<div class="margin-15px-top ins-social-icons social-icons-small social-icons-colorful icon-colored social-icons-colored social-icons-square social-icons-effect-none icons-align-left ">' . $icons . '</div>

</div>
       </div>
      </div>
            </div>
</div>
    </div>
  </div>';

}