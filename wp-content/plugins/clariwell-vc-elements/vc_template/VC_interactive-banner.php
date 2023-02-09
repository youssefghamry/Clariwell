<?php
/**
 *
 * Interactive banner VC element by INSIGNIA
 *
 */

/*Interactive banner Element*/

add_action( 'vc_before_init', 'VC_interactive_banner' );

function VC_interactive_banner() {
  vc_map (

 array(
      "name" => __( "Interactive Banner", "clariwell" ),
      "base" => "insignia_interactive_banner",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
        "class" => "font-awesome",
	"icon" => "fa fa-id-card-o ",
       
      "params" => array(
      

	array(
		'type' => 'attach_image',
		'heading' => esc_html__( 'Banner Image', "clariwell" ),
		'param_name' => 'img',
		'group' => 'General',
                'value' => '',
		'description' => esc_html__( 'Select a banner image.', "clariwell" ),
	),

     		
      array(
		"type" => "textfield",
		"class" => "hidden-label",
		"heading" => esc_html__( "Title", "clariwell" ),
		"param_name" => "title",
		"group" => "General",

		"value" => '',
		"description" => esc_html__( "Intreractive banner title", "clariwell" ) 
	),

array(
                  "type"        => "checkbox",
                  "param_name" => "enable_button",
                  "class" => "",
                  "heading" => __( "Enable Button", "clariwell" ),
                  "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
                  "group" => "General",
                  'save_always' => true,
                  "value"         => array('Enable button'   => '1' ),
              ),

     
        array(
            "type" => "textfield",
            "class" => "",
             
            "heading" => __( "Button Text", "clariwell" ),
            "param_name" => "btn_text",
            "group" => "General",
            "value" => __( "", "clariwell" ),
           
            "description" => __( "Button title of your icon box.", "clariwell" ),
            'dependency' => array(
						'element' => 'enable_button',
						'value' => array('1')
						
                ),
				 

            ),
        array(
            "type" => "vc_link",

            "class" => "",
            "heading" => __( "Button Link (url)", "clariwell" ),
            "param_name" => "btn_link",
            "group" => "General",
            "description" => __( "Button link", "clariwell" ),
            "value" => __( "", "clariwell" ),
            'dependency' => array(
						'element' => 'enable_button',
						'value' => array('1')
						
                ),

         
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
            "param_name" => "extra_class",
            "group" => "General",
            "value" => __( "", "clariwell" ),
             "description" => __( "Style particular content element differently - add a class name and refer to it in custom CSS.", "clariwell" ),
            
         ),

                  
         array(
			"type" => "textfield",
			"heading" => esc_html__( "Title Font-size", "clariwell" ),
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"param_name" => "title_font_size",
			"description" => esc_html__( "Enter custom title font-size (example:20)", "clariwell" ),
                        "value" => __( "19", "clariwell" ),
			'group' => esc_html__( "Advanced", "clariwell" ) 

		),
		
		         array(
			"type" => "textfield",
			"heading" => esc_html__( "Title line-Height", "clariwell" ),
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"param_name" => "title_line_height",
			"description" => esc_html__( "Enter custom title font-size (example:20)", "clariwell" ),
                        "value" => __( "25", "clariwell" ),
			'group' => esc_html__( "Advanced", "clariwell" ) 

		),
		
		
		array(
			"type" => "dropdown",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"heading" => esc_html__( "Title Font-weight", "clariwell" ),
			"param_name" => "title_font_weight",
            "group" => "Advanced",
            "description" => esc_html__( "Select title font-weight.", "clariwell" ),
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
                         
		),
		
		 array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Title letter-spacing", "clariwell" ),
            "param_name" => "title_letter_spacing",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"group" => "Advanced",
            "description" => __( "Specify letter-spacing of the title", "clariwell" ),
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
      "std"         => 'letter-spacing-05',
       
           
         ),
  	
 array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Button Border Radius", "clariwell" ),
            "param_name" => "btn_border_radius",
            "group" => "Button Style",
              "description" => __( "Button border radius. Rounded corners.", "clariwell" ),
             "value"       => array(
       
       'Select' => '',
        'Default'   => 'btn-radius-default',
        'Circle'   => 'btn-circle',
        'Square (no-radius)'   => 'btn-square'
        
         ),
'dependency' => array(
						'element' => 'enable_button',
						'value' => array('1')
						
                ),
      "std"         => '',
            
         ),

             
			 
		array(
			"type" => "dropdown",
			 "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"heading" => esc_html__( "Button Font-weight", "clariwell" ),
			"param_name" => "btn_font_weight",
                        "group" => "Button Style",
                        "description" => esc_html__( "Select Image box Button Text font-weight.", "clariwell" ),
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
			
			
                         
		),
			 
			 	array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button Custom Color", "clariwell" ),
            "param_name" => "btn_color",
            "group" => "Button Style",
            "value" => __( "#fff", "clariwell" ),
            "description" => __( " Choose a custom button color.", "clariwell" ),
            'dependency' => array(
						'element' => 'enable_button',
						'value' => array('1')
						
                ),
				
                ), 
                
        array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button Custom Hover Color", "clariwell" ),
            "param_name" => "btn_hover_color",
            "group" => "Button Style",
            "value" => __( "#fff", "clariwell" ),
            "description" => __( " Choose a custom button hover color.", "clariwell" ),
            'dependency' => array(
						'element' => 'enable_button',
						'value' => array('1')
						
                ),

             ), 
                
        array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button Background Color", "clariwell" ),
            "param_name" => "btn_bg_color",
            "group" => "Button Style",
            "value" => __( "", "clariwell" ),
            "description" => __( " Choose a custom button background color.", "clariwell" ),
            'dependency' => array(
						'element' => 'enable_button',
						'value' => array('1')
						
                ),


             ), 
        array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button Background Hover Color", "clariwell" ),
            "param_name" => "btn_bg_hover_color",
            "group" => "Button Style",
            "value" => __( "", "clariwell" ),
            "description" => __( " Choose a custom button background hover color.", "clariwell" ),
            'dependency' => array(
						'element' => 'enable_button',
						'value' => array('1')
						
                ),


            ),
	
array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'clariwell' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'clariwell' ),
        ),



       ) ));
}

add_shortcode( 'insignia_interactive_banner', 'insignia_interactive_banner_shortcode' );
function insignia_interactive_banner_shortcode( $atts,$content) {

 extract( shortcode_atts( array(

        'title'=> '',
        'enable_button' => '',
        'btn_text' => '',
         'btn_link' => '',
        'css' => '',
        'extra_class' => '',
        'img'=> '',
		'title_font_size' => '19',
		'css_animation'  => '',
        'ib_animation_delay'=> '',
		'title_font_weight'=> '',
		'title_letter_spacing' => '',
		'btn_hover_color' => '',
        'btn_bg_color' => '',
        'btn_bg_hover_color' => '',
        'btn_color' => '',
        'btn_border_radius' => '',
        'title_line_height' => '25',
        'btn_font_weight' => ''

         ), $atts ) );


$css=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );    
         
    $uniqid = uniqid('ins-banner');

$css_rules = '';

//CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay;
            }

			


if($title_font_size != '')
$css_rules .= '#' . $uniqid . ' .ins-feature-box-title {font-size: '.$title_font_size.'px;}';

if($title_line_height != '')
$css_rules .= '#' . $uniqid . ' .ins-feature-box-title {line-height:'.$title_line_height.'px;}';


$btn_link= vc_build_link($btn_link);

if(!empty($btn_link['target'])) {
    $target= $btn_link['target'];
}else{
   $target= '_self'; 
}


if($btn_color!= '')
$css_rules .= '#' . $uniqid . ' .ins-feature-box-btn {color: '.$btn_color.';}';

if($btn_hover_color!= '')
$css_rules .= '#' . $uniqid .'.ins-feature-box-wrapper:hover .ins-feature-box-btn {color: '.$btn_hover_color.';}';

if($btn_bg_color!= '')
$css_rules .= '#' . $uniqid . ' .ins-feature-box-btn {background: '.$btn_bg_color.';}';

if($btn_bg_hover_color!= '')
$css_rules .= '#' . $uniqid .'.ins-feature-box-wrapper:hover .ins-feature-box-btn {background: '.$btn_bg_hover_color.';}';


	$return="<div id='".$uniqid."' class='ins-feature-box-wrapper ".$extra_class." ".$css." ".$css_animation."' ".$animation_delay.">";
	$return.="<div class='ins-feature-box-inner'>";
	$return.="<div class='ins-feature-box-content-wrap'>";
	$return.="<div class='ins-feature-box-image' style='background-image: url(".wp_get_attachment_url($img,'large').");'>";
	$return.="<div class='ins-feature-box-content'>";
	$return.="<h6 class='ins-feature-box-title'>".$title."</h6>";
	if(!empty($btn_text)) {
	$return.="<div class='ins-feature-box-btn-main'>";
	$return.="<a class='ins-feature-box-btn ".$btn_border_radius." title-font pc-bg sc-bg-hover ".$btn_font_weight."' href='".$btn_link['url']."' target='".$target."'>";
	$return.=$btn_text;
	$return.="</a>";
	$return.="</div>"; 
	}
	$return.="</div>"; 
	$return.="</div>"; 
	$return.="</div>"; 
	$return.="</div>"; 
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