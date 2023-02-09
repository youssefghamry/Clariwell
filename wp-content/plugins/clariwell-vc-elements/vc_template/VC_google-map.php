<?php
/**
 *
 * google map VC element by INSIGNIA
 *
 */

add_action( 'vc_before_init', 'VC_ins_google_map' );

function VC_ins_google_map() {
	
	vc_map( array(
	"name" => __( "Google Map", "clariwell" ),
    "base" => "insignia_google_map",
    "class" => "",
    "category" => __( "Insignia", "clariwell"),
	"class" => "font-awesome",
	"icon" => "fa fa-map-o",    
	"params" => array(
	    
		array(
			"type" => "textfield",
			"class" => "hidden-label",
			"heading" => esc_html__( "Map Address", "clariwell" ),
			"param_name" => "address",
			"value" => '',
			"description" => esc_html__( 'Enter the map address i.e. "Canal St, New York, NY 10013, USA". Or in lat,long format: 40.719175,-74.0015925', "clariwell" ) 
		),
		array(
			"type" => "textfield",
			"class" => "hidden-label",
			"heading" => esc_html__( "Map Height", "clariwell" ),
			"param_name" => "height",
			"value" => '550',
			"description" => esc_html__( "Height of the map element in pixels.", "clariwell" ) 
		),
		array(
			"type" => "textfield",
			"class" => "hidden-label",
			"heading" => esc_html__( "Map Zoom", "clariwell" ),
			"param_name" => "zoom",
			"value" => '14',
			"description" => esc_html__( "Choose the map zoom. Default value: 15", "clariwell" ) 
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Map Style', "clariwell" ),
			'admin_label' => true,
			'value' => array(
				esc_html__( 'Regular Colors', "clariwell" ) => 'regular',
				esc_html__( 'Dark', "clariwell" ) => 'dark',
				esc_html__( 'Light', "clariwell" ) => 'light',
				esc_html__( 'Grayscale', "clariwell" ) => 'grayscale',
				esc_html__( 'Dark Green', "clariwell" ) => 'dark_green',
				esc_html__( 'Light Dream', "clariwell" ) => 'light_dream'
			),
			'param_name' => 'map_style',
			'description' => esc_html__( 'Choose a style for your map.', "clariwell" ) 
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Mouse scroll for zoom', "clariwell" ),
			'value' => array(
				esc_html__( 'No', "clariwell" ) => 'false',
				esc_html__( 'Yes', "clariwell" ) => 'true' 
			),
			'param_name' => 'map_scroll',
			'description' => esc_html__( 'Choose a style for your map.', "clariwell" ) 
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

		
		                        array(
            								"type"			=>	"dropdown",
            								"class"			=>	"",
            								"heading"		=>	esc_html__("Map info panel settings", "clariwell"),
            								"param_name"	=>	"map_business_panel_settings",
                            "group"         => esc_html__("Business info", "clariwell"),
            								"value"			=>	array(
                                esc_html__( "Hide business info panel", "clariwell" ) => "hidden_info_panel",
            										esc_html__( "Left aligned", "clariwell" )	=> "left_info_panel",
                                esc_html__( "Right aligned", "clariwell" ) => "right_info_panel",
            									),
            								"save_always"	=>	true,
          							),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Panel title", "clariwell"),
                            "param_name"    => "map_business_name",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "clariwell"),
                            "description"   => esc_html__("Enter panel title.", "clariwell"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Address", "clariwell"),
                            "param_name"    => "map_business_address",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "clariwell"),
                            "description"   => esc_html__("Enter business address.", "clariwell"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Email", "clariwell"),
                            "param_name"    => "map_business_email",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "clariwell"),
                            "description"   => esc_html__("Enter business email.", "clariwell"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Phone", "clariwell"),
                            "param_name"    => "map_business_phone",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "clariwell"),
                            "description"   => esc_html__("Enter business phone.", "clariwell"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Opening hours title", "clariwell"),
                            "param_name"    => "map_business_opening_hours",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "clariwell"),
                            "description"   => esc_html__("Enter opening hours title text.", "clariwell"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "param_group",
                            "class"         => "",
                            "heading"       => esc_html__("Opening hours schedule", "clariwell"),
                            "value" => urlencode( json_encode ( array(
																		array(
																			"map_schedule_day"       => "",
																			"map_schedule_day_info"  => "",
																		)
                            )	)	),
                            "param_name"    => "map_business_schedule",
                            "group"         => esc_html__("Business info", "clariwell"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                            "params" => array(
        												array(
          													"type" => "textfield",
          													"heading" => __("Day name","clariwell"),
          													"param_name" => "map_schedule_day_name",
          													"description" => "",
          													"admin_label" => true,
        												),
        												array(
          													"type" => "textarea",
          													"heading" => __("Day opening/closing hours","clariwell"),
          													"param_name" => "map_schedule_day_hours",
          													"value" => "",
          													"description" => "",
        												),
          								),

                        ),
		
		
	)  
	) );
	
}
 
 // Google Map Shortcode

function insignia_gmap( $atts, $content = null )
{
	extract( shortcode_atts( array(
		"height" => '550',
		"zoom" => '14',
		"label" => '',
		"fullscreen" => 'no',
		"lat" => '40.7179907',
		"long" => '-74.0001119',
		"map_style" => 'regular',
		"map_scroll" => 'false',
		"address" => 'Canal St, New York, NY 10013, USA',
		'map_business_panel_settings' => '',
        'map_business_name' => '',
        'map_business_address' => '',
        'map_business_email' => '',
        'map_business_phone' => '',
		'map_business_opening_hours' => '',
        'map_business_schedule' => '',
		'extra_class' => '',
		'css_animation'  => '',
        'ib_animation_delay'=> ''
	), $atts ) );
	
	$style_class = '';
	
	//CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay;
            }
	
	
	$rand_id = rand( 1, 9999 );
	
	wp_enqueue_script( 'google-map-sensor', '', '', '', true );
	
 if ( $lat != '' || $lon != '' ) {
	
		$result = explode( ",", $address );  // Split the string by commas
		$lat = trim( $result[0] );         // Clean whitespace
		$lon = trim( $result[1] );
        
		
		if ( (is_numeric( $lat ) ) && ( is_numeric( $lon ) ) ) {
			// Proper coordinates
		} else { // Regular text address
		
			$address_new = $address;
            $address_safe = esc_attr( str_replace( ' ', '', $address_new ) );
            
				$url = "https://maps.google.com/maps/api/geocode/json?address={$address_new}";
				$request = wp_remote_get( $url );
				$response = wp_remote_retrieve_body( $request );
				$response = json_decode( $response, true );
				
				if ( $response['status'] == 'OK' ) {
					$lati = $response['results'][0]['geometry']['location']['lat'];
					$longi = $response['results'][0]['geometry']['location']['lng'];
					$address = $lati . ',' . $longi;
                    
				} else {
					return '<div class="alert alert-warning">' . esc_html__( 'There was an error geocoding your address location. Please insert address in a lat,lng format.', 'clariwell' ) . '</div>';
				}
	
			
			
		}
        		
		$map_center = $address;
		
	} else {
		if ( !$lat || !$long ) {
			return esc_html__( 'Error: no location lat and/or long data found', 'clariwell' );
		}
	
		$map_center = $lat . ',' . $long;
	}


	ob_start();
	
	?>
	
	 <?php if (!empty(insignia_option('ins-opt-google-api'))) { ?>
	 
	<script type="text/javascript">
	
	jQuery(document).ready(function() {
	
		'use strict';
		
		<?php
		
		$style_class = '';
		
		if ( $map_style == "grayscale" ) {
			$style_class = 'styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]';
		} elseif( $map_style == 'dark' ) { 
			$style_class = 'styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]';
		} elseif( $map_style == 'light' ) {
			$style_class = 'styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]';
		} elseif( $map_style == 'dark_green' ) {
			$style_class = 'styles: [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"all","elementType":"labels","stylers":[{"visibility":"off"},{"saturation":"-100"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40},{"visibility":"off"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#dedede"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#4d6059"}]},{"featureType":"landscape","elementType":"geometry.stroke","stylers":[{"color":"#4d6059"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"color":"#4d6059"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"lightness":21}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#4d6059"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#4d6059"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#7f8d89"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#7f8d89"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#7f8d89"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#7f8d89"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#7f8d89"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#7f8d89"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#7f8d89"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#7f8d89"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#2b3638"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2b3638"},{"lightness":17}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#24282b"}]},{"featureType":"water","elementType":"geometry.stroke","stylers":[{"color":"#24282b"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels.icon","stylers":[{"visibility":"off"}]}]';
		} elseif( $map_style == 'light_dream' ) {
			$style_class = 'styles: [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}]';
		}
	
		?>
		
		// Map Coordination
		
		var latlng = new google.maps.LatLng(<?php echo esc_attr( $map_center ); ?>);
		
		// Map Options

		var myOptions = {
			zoom: <?php echo esc_attr( $zoom ); ?>,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: false,
			mapTypeControl: false,
			scrollwheel: <?php echo esc_attr( $map_scroll ); ?>,
			<?php if ( $style_class ) echo $style_class; ?>
		};

		var map = new google.maps.Map( document.getElementById('google-map-<?php echo $rand_id; ?>' ), myOptions);
		
        var marker = new google.maps.Marker({
          position: latlng,
          map: map
        });

	});
	
	</script>
	
	<div class="insignia-gmap map-skin-<?php echo esc_attr( $map_style ); ?> <?php echo $map_business_panel_settings;?> <?php echo $extra_class; ?> <?php echo $css_animation; ?>" <?php echo $animation_delay; ?>>	
	<?php
	
	$height = str_replace( 'px', '', $height );
	
	if ( is_null( $height ) ) $height = 550;
	
	
	
	if ($map_business_panel_settings != "hidden_info_panel") { ?>
             <div class="business-info-wrapper">
                        <div class="business-info-header">
                         <?php   if ($map_business_name != '') { ?>
                               <h4><?php echo $map_business_name; ?></h4>
                          <?php  } ?>
                           <address>
                          <?php    if ($map_business_address != '') { ?>
                                <span class="business-address-row"><?php _e('Address:','clariwell'); ?> <span class="address-overflow"><?php echo $map_business_address; ?></span></span>
                              <?php }
                              if ($map_business_phone != '') { ?>
								<span class="business-phone-row"><?php _e('Phone:','clariwell'); ?> <a href="tel:<?php echo $map_business_phone; ?>"><?php echo $map_business_phone; ?></a></span>
                             <?php } 
                              if ($map_business_email != '') { ?>
                                 <span class="business-email-row"><?php _e('Email:','clariwell'); ?> <a href="mailto:<?php echo $map_business_email; ?>"><?php echo $map_business_email; ?></a></span>
                             <?php } ?>
                           </address>
                        </div>
                        <div class="business-info-schedule">
                            <h4><?php echo $map_business_opening_hours; ?> </h4>
                            <?php $map_business_schedule = json_decode( urldecode( $map_business_schedule ), true );

                            if( isset( $map_business_schedule ) ) {
                      				foreach ( $map_business_schedule as $business_data ){ ?>
                      					<div class="business-info-day">
                                  <?php if ( isset( $business_data["map_schedule_day_name"] ) ){ ?>
                                    <span class="business-info-day-name"> <?php echo $business_data["map_schedule_day_name"]; ?>: </span>
                                <?php  } 
                                  if ( isset( $business_data["map_schedule_day_hours"] ) ){ ?>
                                  <span class="business-info-day-hours"> <?php echo $business_data["map_schedule_day_hours"]; ?></span>
                                <?php  } ?>
                      			
								</div>
								
								
                      			 <?php	}
                      			} ?>

                       </div>
                    </div>
           <?php  } ?>

	<div id="google-map-<?php echo $rand_id; ?>" style="height:<?php echo esc_attr( $height ); ?>px;"></div>
	    
	</div>
	<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	
	return $content;
	 }else{
	 echo "<div class='alert alert-warning'>Create your Google Map <a href='https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key' target='_blank'>API KEY</a> and Paste it <a href=' ".admin_url('admin.php?page=Clariwell&tab=21')."' target='_blank'>here</a> . This is necessary for the Google Map to work on your website.</div>";
 }	
}
remove_shortcode( 'insignia_google_map' );
add_shortcode( 'insignia_google_map', 'insignia_gmap' );