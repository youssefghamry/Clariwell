<?php 

// Ensign Image Slider

add_action( 'vc_before_init', 'VC_ins_call_to_action' );

function VC_ins_call_to_action() {
	
	vc_map( array(
	"name" => esc_html__( "Call to Action", "clariwell" ),
	"base" => "ins_cta",
	"class" => "",
	"icon" => "icon-wpb-call-to-action",
	"category" => 'Insignia',
	"description" => "Heading text with buttons",
	"params" => array(
		 array(
			"type" => "textarea",
			"heading" => esc_html__( "Heading", "clariwell" ),
			"param_name" => "heading",
			"value" => esc_html__( "This is the main heading.", 'clariwell' ),
			"description" => esc_html__( "Enter your Call to Action Heading", "clariwell" ),
		),
		array(
			"type" => "textarea",
			"heading" => esc_html__( "Subtitle", "clariwell" ),
			"param_name" => "subheading",
			"value" => esc_html__( "I'm a subtitle, feel free to change me!", 'clariwell' ),
			"description" => esc_html__( "A description text of your Call to Action element.", "clariwell" ),
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button Title", "clariwell" ),
			"param_name" => "button1_title",
			"description" => esc_html__( "Enter label for the button.", "clariwell" ),
			"value" => esc_html__( "Click me!", 'clariwell' ),
		),
		array(
			"type" => "vc_link",
			"heading" => esc_html__( "Button Link", "clariwell" ),
			"param_name" => "button1_url",
			"description" => esc_html__( "URL for the button.", "clariwell" ),
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button 2 Title", "clariwell" ),
			"param_name" => "button2_title",
			"description" => esc_html__( "Enter label for the secondary button.", "clariwell" ),
		),
		array(
			"type" => "vc_link",
			"heading" => esc_html__( "Button 2 Link", "clariwell" ),
			"param_name" => "button2_url",
			"description" => esc_html__( "URL for the button.", "clariwell" ),
		),
		array(
			"type" => "dropdown",
			"class" => "hidden-label",
			"value" => array(
				esc_html__( "Left", "clariwell" ) => 'left',
				esc_html__( "Center", "clariwell" ) => 'center',
			),
			"heading" => esc_html__( "Alignment", "clariwell" ),
			"param_name" => "align",
			"description" => esc_html__( "Choose the content alignment.", "clariwell" ),
			"group" => esc_html__( "Design", "clariwell" ) 
		),				
		
                  
       	 array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Button Border Radius", "clariwell" ),
            "param_name" => "btn_radius",
            "group" => "Design",
             "value"       => array(
       
       'Select' => '',
        'Default'   => 'btn-radius-default',
        'Circle'   => 'btn-circle',
        'Square (no-radius)'   => 'btn-square'
        
         ),
      "std"         => '',
            
         ),
		
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Heading Font-size", "clariwell" ),
			"param_name" => "heading_font_size",
			"description" => esc_html__( "Enter custom font-size (example:20)", "clariwell" ),
                        "value" => __( "", "clariwell" ),
			'group' => esc_html__( "Design", "clariwell" ) 

		),
		
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Sub-Heading Font-size", "clariwell" ),
			"param_name" => "sub_heading_font_size",
			"description" => esc_html__( "Enter custom font-size (example:20)", "clariwell" ),
                              "value" => __( "", "clariwell" ),
			'group' => esc_html__( "Design", "clariwell" ) 

		),

        array(
			"type" => "dropdown",
			 "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"heading" => esc_html__( "Heading Font-weight", "clariwell" ),
			"param_name" => "heading_font_weight",
			'group' => esc_html__( "Design", "clariwell" ), 
                        "description" => esc_html__( "Select Heading font-weight.", "clariwell" ),
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
			 "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"heading" => esc_html__( "Sub-Heading Font-weight", "clariwell" ),
			"param_name" => "sub_heading_font_weight",
			'group' => esc_html__( "Design", "clariwell" ), 
                        "description" => esc_html__( "Select Sub-Heading font-weight.", "clariwell" ),
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
            "heading" => __( "Heading Color", "clariwell" ),
            "param_name" => "heading_color",
            "group" => "Design",
            "value" => __( "", "clariwell" ),
              "description" => __( "Color of your Call to Action heading color.", "clariwell" )
             ),
		
		  array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Sub-heading 1 Color", "clariwell" ),
            "param_name" => "sub_heading_color",
            "group" => "Design",
            "value" => __( "", "clariwell" ),
              "description" => __( "Color of your Call to Action sub-heading color.", "clariwell" )
           
             ),

             array(
			"type" => "dropdown",
			"class" => "hidden-label",
			"value" => array(
			
				esc_html__( "Select", 'clariwell' ) => 'none',

				esc_html__( "None (you can set the background in the row settings)", 'clariwell' ) => 'none',
				esc_html__( "Custom - color picker", 'clariwell' ) => 'custom'
			),
			"heading" => esc_html__( "Background color", "clariwell" ),
			"param_name" => "cta_bg",
			"description" => esc_html__( "select call to action background color", "clariwell" ),
			"group" => esc_html__( "Design", "clariwell" ) 
		), 
		
		array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Custom Background Color", "clariwell" ),
				"param_name" => "cta_bg_color",
				"value" => '',
				"dependency" => Array( 'element' => "cta_bg", 'value' => array( "custom" ) ),
				"description" => esc_html__( "Select a custom color for your background.", "clariwell" ),
				"group" => esc_html__( "Design", "clariwell" ) 
			),

		  array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 1 Color", "clariwell" ),
            "param_name" => "button1_color",
            "group" => "Button 1",
            "value" => __( "", "clariwell" ),
              "description" => __( "Color of your Call to Action button.", "clariwell" )
           
             ),
             
              array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 1 Hover Color", "clariwell" ),
            "param_name" => "button1_hover_color",
            "group" => "Button 1",
            "value" => __( "", "clariwell" ),
              "description" => __( "Hover Color of your Call to Action button.", "clariwell" )
           
             ),
             
              array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 1 background Color", "clariwell" ),
            "param_name" => "button1_bg_color",
            "group" => "Button 1",
            "value" => __( "", "clariwell" ),
              "description" => __( "Color of your Call to Action button.", "clariwell" )
             ),
              array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 1 hover background Color", "clariwell" ),
            "param_name" => "button1_hover_bg_color",
            "group" => "Button 1",
            "value" => __( "", "clariwell" ),
              "description" => __( "Hover Background Color of your Call to Action button.", "clariwell" )
           
             ),
             
              array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 1 border Color", "clariwell" ),
            "param_name" => "button1_border_color",
            "group" => "Button 1",
            "value" => __( "", "clariwell" ),
              "description" => __( "Border color of your Call to Action button.", "clariwell" )
             ),

              array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 1 Hover border Color", "clariwell" ),
            "param_name" => "button1_hover_border_color",
            "group" => "Button 1",
            "value" => __( "", "clariwell" ),
              "description" => __( "Hover Border color of your Call to Action button.", "clariwell" )
             ),
          
	 array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Button 1 CSS Class', "clariwell" ),
			'param_name' => 'btn1_class',
			"dependency" => Array(
				"element" => "button1_title",
				'not_empty' => true 
			),
			"group" => esc_html__( "Button 1", "clariwell" ),
			"description" => esc_html__( "Optional: add a custom CSS class to the first button.", "clariwell" ) 
		),

	    array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 2 Color", "clariwell" ),
            "param_name" => "button2_color",
            "group" => "Button 2",
            "value" => __( "", "clariwell" ),
              "description" => __( "Color of your Call to Action secondary button.", "clariwell" )
           
             ),
             
               array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 2 Hover Color", "clariwell" ),
            "param_name" => "button2_hover_color",
            "group" => "Button 2",
            "value" => __( "", "clariwell" ),
              "description" => __( "Hover Color of your Call to Action secondary button.", "clariwell" )
           
             ), 
             
               array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 2 background Color", "clariwell" ),
            "param_name" => "button2_bg_color",
            "group" => "Button 2",
            "value" => __( "", "clariwell" ),
              "description" => __( "Color of your Call to Action secondary button.", "clariwell" )
           
             ),
              array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 2 hover background Color", "clariwell" ),
            "param_name" => "button2_hover_bg_color",
            "group" => "Button 2",
            "value" => __( "", "clariwell" ),
              "description" => __( "Hover Background Color of your Call to Action secondary button.", "clariwell" )
           
             ),
	              array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 2 border Color", "clariwell" ),
            "param_name" => "button2_border_color",
            "group" => "Button 2",
            "value" => __( "", "clariwell" ),
              "description" => __( "Border color of your Call to Action button.", "clariwell" )
             ),

              array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Button 2 Hover border Color", "clariwell" ),
            "param_name" => "button2_hover_border_color",
            "group" => "Button 2",
            "value" => __( "", "clariwell" ),
              "description" => __( "Hover Border color of your Call to Action button.", "clariwell" )
             ),
		
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Button 2 CSS Class', "clariwell" ),
			'param_name' => 'btn2_class',
			"dependency" => Array(
				"element" => "button1_title",
				'not_empty' => true 
			),
			"group" => esc_html__( "Button 2", "clariwell" ),
			"description" => esc_html__( "Optional: add a custom CSS class to the second button.", "clariwell" ) 
		), 
		
	)  
	) );
	
}

function ensign_cta( $atts, $content = null )
{
	extract( shortcode_atts( array(
		"button1_title" => 'Button Text',
		"button1_url" => '',
		"button2_title" => '',
		"button2_url" => '',
        "btn1_class" => '',
        "btn2_class" => '',
		"text_color" => 'white',
		"button1_color" => '',
		"button2_color" => '',
		"align" => 'left',
		"subheading" => esc_html__( "I'm a description text, feel free to change me!", "clariwell" ),
		"heading" => esc_html__( "This is the main heading.", "clariwell" ),
		"extra_class" => '',
		"btn_radius" => 'default',
		"button1_hover_color" => '',
		"button2_hover_color" => '',
		"button1_bg_color" =>'',
		"button1_hover_bg_color" => '',
		"button2_bg_color" =>'',
		"button2_hover_bg_color" => '',
		"button1_border_color" => '',
		"button1_hover_border_color" => '',
		"button2_border_color" => '',
		"button2_hover_border_color" => '',
		"heading_font_size" => '22',
		"sub_heading_font_size" => '16',
		"heading_color"=>'',
		"sub_heading_color"=>'',
		"cta_bg_color" =>'',
		"cta_bg" => '',
                "heading_font_weight" => '',
                "sub_heading_font_weight" => ''
		
	), $atts ) );
	
	$extra_style = $extra_style = $return = '';
	
	if ( $subheading )
		$extra_class = ' cta-with-subtitle';

	$css_classes = array();
	
	
	// Alignment
	
	$col1_class = ' col-md-8 col-sm-12';
	$col2_class = ' col-md-4 col-sm-12';
	
	if ( $align == 'center' ) {
		$col1_class = $col2_class = '';
	}
	$css_classes[] = 'ins-cta-align-' . $align;


        $uniqid = uniqid('ins-cta');
        
$css_rules = '';


$line_height= $heading_font_size + 10;
$line_height1= $sub_heading_font_size+ 10;



if($heading_font_size != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-heading {font-size: '.$heading_font_size.'px; line-height:'.$line_height.'px;}';

if($sub_heading_font_size != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-subtitle {font-size: '.$sub_heading_font_size.'px; line-height:'.$line_height1.'px;}';


if($heading_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-heading {color: '.$heading_color.';}';


if($sub_heading_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-subtitle {color: '.$sub_heading_color.';}';

if($button1_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn1 {color: '.$button1_color.';}';

if($button1_hover_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn1:hover {color: '.$button1_hover_color.';}';

if($button1_bg_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn1 {background: '.$button1_bg_color.';}';

if($button1_hover_bg_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn1:hover {background: '.$button1_hover_bg_color.';}';

if($button1_border_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn1 {border-color: '.$button1_border_color.';}';

if($button1_hover_border_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn1:hover {border-color: '.$button1_hover_border_color.';}';

if($button2_border_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn2 {border-color: '.$button2_border_color.';}';

if($button2_hover_border_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn2:hover {border-color: '.$button2_hover_border_color.';}';

if($button2_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn2 {color: '.$button2_color.';}';

if($button2_hover_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn2:hover {color: '.$button2_hover_color.';}';

if($button2_bg_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn2{background: '.$button2_bg_color.';}';

if($button2_hover_bg_color != '')
$css_rules .= '#' . $uniqid . ' .ins-cta-btn2:hover {background: '.$button2_hover_bg_color.';}';

if($cta_bg_color != '')
$css_rules .= '#' . $uniqid .'.ins-cta-wrapper {background: '.$cta_bg_color.';}';
	
	
	$return .= '<div id="'.$uniqid.'" class="ins-cta-wrapper insignia-cta ' . implode( ' ', $css_classes ) . '"' . $extra_style . '> <div class="insignia-cta-inner"><div class="ins-cta-texts' . $col1_class . '">';
	
	// Heading
	
	$return .= '<div class="text-extra-large letter-spacing-1 padding-5px-bottom title-font ins-cta-heading '.$heading_font_weight.'"><span>' . esc_html( $heading ) . '</span></div>';
	
	// Subtitle
	
	if ( $subheading ) {
		$return .= '<p class="ins-cta-subtitle margin-0px-bottom '.$sub_heading_font_weight.'">' . esc_html( $subheading ) . '</p>';
	}
	
	// Buttons
	
	if ( $button1_title || $button2_title ) {
	
		$btn_classes = '';
		
		if ( $btn_radius != 'default' ) {
			$btn_classes .= ' btn-' . esc_attr( $btn_radius );
		}
		
		$return .= '</div><div class="ins-cta-buttons' . $col2_class . '">';
		
		
            
            if ( $btn1_class != '' ) {
                $btn1_class .= ' ' ;
            }
			
			$return .= ensign_build_link( $button1_title, $button1_url, 'btn ins-cta-btn1 '  . $btn1_class   . $btn_radius );
		
		}
		
		if ( $button2_title ) {
		
			
			
           
            if ( $btn2_class != '' ) {
                $btn2_class.= ' ' ;
            }
			
			$return .= ensign_build_link( $button2_title, $button2_url, 'btn ins-cta-btn2 ' . $btn2_class   .  $btn_radius);
		
		}
		
		$return .= '</div>';
	
	
	
	$return .=  '</div></div>';
	
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
remove_shortcode( 'ins_cta' );
add_shortcode( 'ins_cta', 'ensign_cta' );