<?php
/**
 *
 * Section Heading VC element by INSIGNIA
 *
 */

/*Section Heading Element*/

add_action( 'vc_before_init', 'VC_section_heading' );

function VC_section_heading() {
 
 vc_map (

 array(
      "name" => __( "Section Heading", "clariwell" ),
      "base" => "insignia_section_heading",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
	"class" => "font-awesome",
	"icon" => "fa fa-header",        
       
      "params" => array(
       			array(
				"type" => "textarea",
				"heading" => esc_html__( "Title", "clariwell" ),
				"param_name" => "title",
				"description" => esc_html__( "Main heading text.", "clariwell" ),
				"value" => "This is a Special Heading" 
			),
			array(
				"type" => "textarea",
				"heading" => esc_html__( "Subtitle", "clariwell" ),
				"param_name" => "subtitle",
				"description" => esc_html__( "Smaller text visible below the Title.", "clariwell" ),
				"value" => "This is a subtitle, feel free to change it!" 
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Alignment", "clariwell" ),
				"param_name" => "align",
				"description" => esc_html__( "Set alignment for the special heading texts.", "clariwell" ),
				'value' => array(
					esc_html__( 'Select', "clariwell" ) => 'default',
					esc_html__( 'Left', "clariwell" ) => 'text-left',
					esc_html__( 'Center', "clariwell" ) => 'text-center',
					esc_html__( 'Right', "clariwell" ) => 'text-right',
				),
			),
			
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Subtitle Position", "clariwell" ),
				"param_name" => "sub_position",
				"description" => esc_html__( "Select Subtitle on top or bottom", "clariwell" ),
				'value' => array(
					esc_html__( 'Select', "clariwell" ) => 'default',
					esc_html__( 'subtitle on top', "clariwell" ) => 'subtitle-top',
					esc_html__( 'subtitle on bottom', "clariwell" ) => 'subtitle-bottom',
				),
			),
			
                          array(
				"type" => "dropdown",
				"heading" => esc_html__( "Border", "clariwell" ),
				"param_name" => "border",
				"description" => esc_html__( "Border for the special heading. Below - displayed below the heading. Inline - line is displayed next to the heading.", "clariwell" ),
				'value' => array(
					esc_html__( 'Select', "clariwell" ) => 'default',
					esc_html__( 'Below the heading', "clariwell" ) => 'heading-below-border',
					esc_html__( 'Inline border - next to the heading', "clariwell" ) => 'heading-inline-border',
					esc_html__( 'Inline Double border - next to the heading', "clariwell" ) => 'heading-inline-double-border',
                                        esc_html__( 'Disable', "clariwell" ) => 'disable',
				),
			),

                        array(
				"type" => "dropdown",
				"heading" => esc_html__( "Border Style", "clariwell" ),
				"param_name" => "border_style",
				"description" => esc_html__( "Select border style", "clariwell" ),
				'value' => array(
					esc_html__( 'Select', "clariwell" ) => 'default',
					esc_html__( 'Solid', "clariwell" ) => 'ins-border-solid',
					esc_html__( 'dashed', "clariwell" ) => 'ins-border-dashed',
				),
                         'dependency' => array(
				'element' => 'border',
				'value' => array('default', 'heading-below-border', 'heading-inline-border')
			),
            
         ),
			
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Margin Top", "clariwell" ),
				"param_name" => "c_margin_top",
				"description" => esc_html__( "Special heading top margin. Leave blank for defaults.", "clariwell" ),
				"value" => "" 
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Margin Bottom", "clariwell" ),
				"param_name" => "c_margin_bottom",
				"description" => esc_html__( "Special heading bottom margin. Leave blank for defaults", "clariwell" ),
				"value" => "" 
			),
			
                        
                         array(
                  "type"        => "checkbox",
                  "param_name" => "add_icon",
                  "class" => "",
                  "heading" => __( "Icon?", "clariwell" ),
                  "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
                     'save_always' => true,
                    "value"         => array('Enable icon'   => '1' ),
              ),
                        			
		
			array(
              			"type" => "iconpicker",
              			"heading" => esc_html__( "Icon", "clariwell" ),
              			"param_name" => "icon_iconsmind",
                                "settings" => array(
                        		"type" => "iconsmind",
                        		"iconsPerPage" => 50,
                        	),
              						
              			"description" => esc_html__( "Select icon from library.", "clariwell" ),
                               'dependency' => array(
						'element' => 'add_icon',
						'value' => array('1')
						
                                 ),

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
				'type' => 'textfield',
				'heading' => __( 'Extra class name', "clariwell" ),
				'param_name' => 'extra_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', "clariwell" ) 
			),

                        array(
				"type" => "dropdown",
				"class" => "hidden-label",
				"heading" => esc_html__( "Heading HTML Tag", "clariwell" ),
				"param_name" => "heading_tag",
				"value" => array(
					esc_html__( 'Theme defaults' , 'clariwell' ) => 'default',
					'h1' => 'h1',
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',  
					'h6' => 'h6',  
				),
				'description' => esc_html__( 'Select a HTML tag for the main heading.', 'clariwell' ),
				'group' => esc_html__( "Advanced", "clariwell" ) 
			),      
				
			array(
				"type" => "dropdown",
				"class" => "hidden-label",
				"heading" => esc_html__( "Heading Font Weight", "clariwell" ),
				"param_name" => "font_weight",
				"value" => array(
					esc_html__( 'Theme defaults', 'clariwell' ) => 'default',
					esc_html__( '100', 'clariwell' ) => 'font-weight-100',
					esc_html__( '200', 'clariwell' ) => 'font-weight-200',
					esc_html__( '300', 'clariwell' ) => 'font-weight-300',
					esc_html__( '400', 'clariwell' ) => 'font-weight-400',
					esc_html__( '500', 'clariwell' ) => 'font-weight-500',
					esc_html__( '600', 'clariwell' ) => 'font-weight-600',
					esc_html__( '700', 'clariwell' ) => 'font-weight-700',
					esc_html__( '900', 'clariwell' ) => 'font-weight-900'

				),
				'description' => esc_html__( 'Font weight of the Title.', 'clariwell' ),
				'group' => esc_html__( "Advanced", "clariwell" ),
				'dependency' => array(
					'element' => 'font_family',
					'value_not_equal_to' => 'custom',
				),
			),
			array(
				"type" => "dropdown",
				"class" => "hidden-label",
				"heading" => esc_html__( "Heading Font Transform", "clariwell" ),
				"param_name" => "text_transform",
				"value" => array(
					esc_html__( 'Theme defaults', 'clariwell' ) => 'default',
					esc_html__( 'None', 'clariwell' ) => 'none',
					esc_html__( 'Uppercase', 'clariwell' ) => 'text-uppercase' 
				),
				'description' => esc_html__( 'Text transform attribute for the Title.', 'clariwell' ),
				'group' => esc_html__( "Advanced", "clariwell" ) 
			),
			
			 array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Heading letter-spacing", "clariwell" ),
            "param_name" => "heading_letter_spacing",
              "group" => "Advanced",
              "description" => __( "Specify letter-spacing of the heading", "clariwell" ),
             "value"       => array(
         'Select' => 'select',
        'No-letter-spacing' => 'no-letter-spacing',
        '0.5' => 'letter-spacing-05',
         '1' => 'letter-spacing-1',
        '2'   => 'letter-spacing-2',
         '3'   => 'letter-spacing-3',
         '4'   =>'letter-spacing-4',
 	'5'   => 'letter-spacing-5',
 	'6'   => 'letter-spacing-6',
 	'7'   => 'letter-spacing-7',
 	'8'   => 'letter-spacing-8',
 	'9'   => 'letter-spacing-9',
 	'10'   => 'letter-spacing-10'

         ),
      "std"         => 'select',
       
           
         ),
  	
			array(
				"type" => "colorpicker",
				"class" => "hidden-label",
				"heading" => esc_html__( "Heading Color", "clariwell" ),
				"param_name" => "heading_color",
				 "value" => __( "", "clariwell" ),
				'description' => esc_html__( 'Select the heading text color.', 'clariwell' ),
				'group' => esc_html__( "Advanced", "clariwell" ) 
			),
			
			array(
				"type" => "dropdown",
				"class" => "hidden-label",
				"heading" => esc_html__( "Subtitle Font Size", "clariwell" ),
				"param_name" => "subtitle_fs",
				"value" => array(
					esc_html__( 'Theme defaults' , 'clariwell' ) => 'default',
					'Extra Small' => 'text-extra-small',
					'Small' => 'text-small',
					'medium' => 'text-medium',
					'Extra Medium' => 'extra-medium',
					'large' => 'text-large',
					'extra-large' => 'text-extra-large'
					
				),
				'description' => esc_html__( 'Size of the subtitle font.', 'clariwell' ),
				'group' => esc_html__( "Advanced", "clariwell" ) 
			),
			
				 array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Subtitle letter-spacing", "clariwell" ),
            "param_name" => "subtitle_letter_spacing",
              "group" => "Advanced",
              "description" => __( "Specify letter-spacing of the subtitle", "clariwell" ),
             "value"       => array(
         'Select' => 'select',
        'No-letter-spacing' => 'no-letter-spacing',
        '0.5' => 'letter-spacing-05',
         '1' => 'letter-spacing-1',
        '2'   => 'letter-spacing-2',
         '3'   => 'letter-spacing-3',
         '4'   =>'letter-spacing-4',
 	'5'   => 'letter-spacing-5',
 	'6'   => 'letter-spacing-6',
 	'7'   => 'letter-spacing-7',
 	'8'   => 'letter-spacing-8',
 	'9'   => 'letter-spacing-9',
 	'10'   => 'letter-spacing-10'

         ),
      "std"         => 'select',
       
           
         ),
         
         	array(
				"type" => "dropdown",
				"class" => "hidden-label",
				"heading" => esc_html__( "Subtitle Font Weight", "clariwell" ),
				"param_name" => "sub_font_weight",
				"value" => array(
					esc_html__( 'Theme defaults', 'clariwell' ) => 'default',
					esc_html__( '100', 'clariwell' ) => 'font-weight-100',
					esc_html__( '200', 'clariwell' ) => 'font-weight-200',
					esc_html__( '300', 'clariwell' ) => 'font-weight-300',
					esc_html__( '400', 'clariwell' ) => 'font-weight-400',
					esc_html__( '500', 'clariwell' ) => 'font-weight-500',
					esc_html__( '600', 'clariwell' ) => 'font-weight-600',
					esc_html__( '700', 'clariwell' ) => 'font-weight-700',
					esc_html__( '900', 'clariwell' ) => 'font-weight-900'

				),
				'description' => esc_html__( 'Font weight of the Subtitle.', 'clariwell' ),
				'group' => esc_html__( "Advanced", "clariwell" ),
			
			),
			
			array(
				"type" => "colorpicker",
				"class" => "hidden-label",
				"heading" => esc_html__( "Subtitle Color", "clariwell" ),
				"param_name" => "subtitle_color",
				 "value" => __( "", "clariwell" ),
				'description' => esc_html__( 'Select the subtitle text color.', 'clariwell' ),
				'group' => esc_html__( "Advanced", "clariwell" ) 
			),
			
			array(
				"type" => "colorpicker",
				"class" => "hidden-label",
				"heading" => esc_html__( "Border Color", "clariwell" ),
				"param_name" => "border_color",
				 "value" => __( "", "clariwell" ),
				'description' => esc_html__( 'Select the border color.', 'clariwell' ),
				'group' => esc_html__( "Advanced", "clariwell" ) 
			),

                        array(
            "type" => "dropdown",
            "class" => "",
              "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Icon Size", "clariwell" ),
            "param_name" => "icon_size",
	   'group' => esc_html__( "Advanced", "clariwell" ),
              "description" => __( "Select size of the icon.", "clariwell" ),
             "value"       => array(
         'Select' => 'select',
         'Very Small' => 'icon-very-small',
        'Small'   => 'icon-small',
         'Medium'   => 'icon-medium',
         'Extra Medium'   =>'icon-extra-medium',
 	'Large'   => 'icon-large',
 	'Extra Large'   => 'icon-extra-large',

         ),
      "std"         => 'icon-medium',
         
           
         ),
			
			array(
				"type" => "colorpicker",
				"class" => "hidden-label",
				"heading" => esc_html__( "Icon Color", "clariwell" ),
				"param_name" => "icon_color",
				 "value" => __( "", "clariwell" ),
				'description' => esc_html__( 'Select the icon color.', 'clariwell' ),
				'group' => esc_html__( "Advanced", "clariwell" ) 
			),
			
			   array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'clariwell' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'clariwell' ),
        ),

		)
   ));

}

 add_shortcode( 'insignia_section_heading', 'insignia_section_heading_shortcode' );
function insignia_section_heading_shortcode( $atts,$content) {
	
	$title = $subtitle = $icon_output = $border = $align = $heading_fs = $heading_fw = $heading_transform = $add_icon = '';
 extract( shortcode_atts( array(
       
        "title" => 'This is a Special Heading',
		"subtitle" => 'This is a subtitle, feel free to change it!',
		"align" => 'default',
		"border" => 'default',
		"add_icon" => 'false',
		'icon_iconsmind'=> '',
        "border_style"=> '',
		"font_weight" => 'font-weight-600',
		"text_transform" => '',
		"subtitle_fs" => '',
		"subtitle_color" => '',
		"extra_class" => '',
		"c_margin_top" => '0',
		"c_margin_bottom" => '0',
		"heading_tag" => 'h3',
		"heading_color" => '',
		"css"=> '',
		"sub_position" => '',
		"border_color" => '',
		"icon_color" => '',
        "icon_size" => 'icon-medium',
        "heading_letter_spacing" => '',
        "subtitle_letter_spacing" => '',
        "sub_font_weight" => '',
        "css_animation"  => '',
        'ib_animation_delay'=> ''
 
   ), $atts ) );

global $extra_class1;

$extra_class1=${'extra_class'};
$title1=${'title'};
$subtitle1=${'subtitle'};
$align1=${'align'};
$border1=${'border'};
$icon_iconsmind1=${'icon_iconsmind'};
$font_weight1=${'font_weight'};
$text_transform1=${'text_transform'};
$subtitle_fs1=${'subtitle_fs'};
$subtitle_color1=${'subtitle_color'};
$extra_class1=${'extra_class'};
$c_margin_top1=${'c_margin_top'};
$c_margin_bottom1=${'c_margin_bottom'};
$heading_tag1=${'heading_tag'};
$heading_color1=${'heading_color'};
$border_style1=${'border_style'};
$sub_position1=${'sub_position'};
$add_icon1=${'add_icon'};
$border_color1=${'border_color'};
$icon_color1=${'icon_color'};
$icon_size1=${'icon_size'};
$heading_letter_spacing1=${'heading_letter_spacing'};
$subtitle_letter_spacing1=${'subtitle_letter_spacing'};
$sub_font_weight1=${'sub_font_weight'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};


  //CSS Animation
            if ($css_animation1 == "no_animation") {
                $css_animation1 = "";
            }
 $animation_delay = "";
            // Animation delay
            if ($ib_animation_delay1) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay1;
                
            }

if(empty($sub_position1)) {
   $sub_position1='subtitle-bottom';
}

$css1=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );

$uniqid = uniqid('ins-heading-');
$css_rules = '';
if($heading_color1!= '')
$css_rules .= '#' . $uniqid . ' '.$heading_tag.' {color: '.$heading_color1.';}';

if($subtitle_color1!= '')
$css_rules .= '#' . $uniqid . ' .section-heading-subtitle {color: '.$subtitle_color1.';}';

if($border_color1!= '')
$css_rules .= '#' . $uniqid .'.heading-below-border:after, #' . $uniqid .'.heading-inline-border .section-heading-title:before, #' . $uniqid . '.heading-inline-border .section-heading-title:after, #' . $uniqid . '.heading-inline-double-border .section-heading-title:before, #' . $uniqid .'.heading-inline-double-border .section-heading-title:after {border-color: '.$border_color1.';}';


if($icon_color1!= '')
$css_rules .= '#' . $uniqid . ' .section-heading-icon .link-icon {color: '.$icon_color1.';}';

$return="<div id='".$uniqid."' class='section-heading ins-heading ".$align1." ".$border1." ".$border_style1." ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay." style='margin-top:".$c_margin_top1."; margin-bottom:".$c_margin_bottom1."'>";
if(!empty($add_icon1)) {
$return.="<div class='section-heading-icon colored margin-10px-bottom'>";
$return.="<i class='link-icon text-medium-gray ".$icon_size1." ".$icon_iconsmind1."'></i>";
$return.="</div>";
}
if($sub_position1== "subtitle-top"){
if(!empty($subtitle1)) {

$return.="<h6 class='section-heading-subtitle margin-0px-bottom ".$subtitle_fs1." ".$subtitle_letter_spacing1." ".$sub_font_weight1."'>".$subtitle1."</h6>";
}
}
$return.="<".$heading_tag." class='section-heading-title margin-10px-top ".$text_transform1." ".$font_weight1." ".$heading_letter_spacing1."'>".$title1."</".$heading_tag.">";
if($sub_position1== "subtitle-bottom"){
if(!empty($subtitle1)) {
$return.="<h6 class='section-heading-subtitle title-font ".$subtitle_fs1." ".$sub_font_weight1." ".$subtitle_letter_spacing1."'>".$subtitle1."</h6>";
}
}
$return.="</div>";

$return.=	'<script type="text/javascript">
		(function(jQuery) {';

		if($css_rules != '') {
					$return.= 'jQuery("head").append("<style>'.$css_rules.'</style>")';
						}

					$return.=	'
					})(jQuery);
						</script>';

    return $return;

}