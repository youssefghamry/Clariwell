<?php
/**
 *
 * Working Hours VC element by INSIGNIA
 *
 */

add_action( 'vc_before_init', 'VC_ins_working_hours' );

function VC_ins_working_hours() {
	
	vc_map( array(
	"name" => esc_html__( "Working Hours", "clariwell" ),
	"base" => "working_hours",
	"class" => "font-awesome",
	"icon" => "fa fa-usd",
    "category" => __( "Insignia", "clariwell"),
	"description" => esc_html__( "Working Hours", "clariwell" ),
	"params" => array(
	    
	        array(
                "type"          => "param_group",
                "class"         => "",
                "heading"       => esc_html__("Opening hours schedule", "clariwell"),
                "value" => urlencode( json_encode ( array(
								array(
									"map_schedule_day"       => "",
									"map_schedule_day_info"  => "",																		)
                                )	)	),
                            "param_name"    => "map_business_schedule",
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
                        
                        	array(
							"type" => "colorpicker",
							"class" => "",
							"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
							"heading" => __( "Text Color", "clariwell" ),
							"param_name" => "text_color",
							"value" => __( "", "clariwell" ),
							"description" => __( " Choose a text color for your working hours.", "clariwell" ),
              
               				),
               				
               				array(
							"type" => "colorpicker",
							"class" => "",
							"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
							"heading" => __( "Border Color", "clariwell" ),
							"param_name" => "border_color",
							"value" => __( "", "clariwell" ),
							"description" => __( " Choose a border color for your working hours.", "clariwell" ),
              
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
                              "heading" => esc_html__("Extra class name", "clariwell"),
                              "param_name" => "extra_class",
                              "value" => "",
                              "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "clariwell"),
                          ),
                          
                          	 array(
							'type' => 'css_editor',
							'heading' => __( 'Css', 'clariwell' ),
							'param_name' => 'css',
							'group' => __( 'Design options', 'clariwell' ),
							),
	) )
);
	
}

function insignia_working_hours( $atts, $content )
{
	extract( shortcode_atts( array(
        'map_business_schedule' => '',
		'extra_class' => '',
		'css_animation'  => '',
        'ib_animation_delay'=> '',
        'css' => '',
        'text_color' => '',
        'border_color' => ''

	), $atts ) );
	ob_start();
	$css=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );  
	
	//CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay;
            }
            
			$uniqid = uniqid('working-hours-');
			$working_css = '';
			
			if($border_color != '')
			$working_css .= '#' . $uniqid . ' span.working-hours-day-name:before {border-color: '.$border_color.';}';

            $map_business_schedule = json_decode( urldecode( $map_business_schedule ), true );
            
            if( isset( $map_business_schedule ) ) {
                
                ?>
                <div id="<?php echo $uniqid; ?>" class="working-hours-wrapper  <?php echo $css; ?> <?php echo $extra_class; ?> <?php echo $css_animation; ?>" <?php echo $animation_delay; ?>>
                      			<?php	foreach ( $map_business_schedule as $business_data ){ ?>
                      					<div class="working-hours-day" style="color:<?php echo esc_attr( $text_color ); ?>;">
                      					    <div class="working-hours-day-left">
                                  <?php if ( isset( $business_data["map_schedule_day_name"] ) ){ ?>
                                    <span class="working-hours-day-name title-font"> <?php echo $business_data["map_schedule_day_name"]; ?></span>
                                <?php  } ?>
                                </div>
                              <?php    if ( isset( $business_data["map_schedule_day_hours"] ) ){ ?>
                                  <span class="working-hours-day-hours title-font"> <?php echo $business_data["map_schedule_day_hours"]; ?></span>
                                <?php  } ?>
                      			
								</div>
                      			 <?php	} ?>
                      			 
                      			 </div>
                      			 
                      			<?php } ?>
      
      <script type="text/javascript">
		(function(jQuery) {

		<?php if($working_css != '') { ?>
					jQuery("head").append("<style><?php echo $working_css; ?></style>")
					<?php	} ?>

					})(jQuery)
						</script>
	  
	<?php
	$content = ob_get_contents();
	ob_end_clean();
	return $content;      
}
remove_shortcode( 'working_hours' );
add_shortcode( 'working_hours', 'insignia_working_hours' );