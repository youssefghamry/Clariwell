<?php
/**
 *
 * Button VC element by INSIGNIA
 *
 */
 
/*Button Element*/

add_action( 'vc_before_init', 'VC_button' );

function VC_button() {
  vc_map (

 array(
      "name" => __( "Buttons", "clariwell" ),
      "base" => "insignia_button",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
	"class" => "font-awesome",
	"icon" => "fa fa-square-o",        
       
      "params" => array(
      
     
          array(
            "type" => "textfield",
            "class" => "",
             
            "heading" => __( "Button Label", "clariwell" ),
            "param_name" => "btn_text",
            "group" => "General",
            "value" => 'Button Text' ,
           
            "description" => __( "Text on the button.", "clariwell" ),

            ),
             array(
            "type" => "vc_link",

            "class" => "",
            "heading" => __( "Button Link (url)", "clariwell" ),
            "param_name" => "btn_link",
            "group" => "General",
            "description" => __( "Button link", "clariwell" ),
             "value" => __( "", "clariwell" ),
  
            ),
            
             array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Button Size", "clariwell" ),
            "param_name" => "button_size",
            "group" => "General",
              "description" => __( "Select Button Size you would like to use", "clariwell" ),
             "value"       => array(
       
       'Select Size' => '',
        'Small'   => 'btn-small',
        'Medium'   => 'btn-medium',
        'Large'   => 'btn-large',
        'Extra large full width'   => 'btn-extra-large'
        
         ),
      "std"         => '',
            
         ),

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Border Radius", "clariwell" ),
            "param_name" => "border_radius",
            "group" => "General",
              "description" => __( "Button border radius. Rounded corners.", "clariwell" ),
             "value"       => array(
       
       'Select' => '',
        'Default'   => 'btn-radius-default',
        'Circle'   => 'btn-circle',
        'Square (no-radius)'   => 'btn-square'
        
         ),
      "std"         => '',
            
         ),
        
          array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Button Alignment", "clariwell" ),
            "param_name" => "button_align",
            "group" => "General",
             "value"       => array(
       
       'Select' => '',
        'Left'   => 'text-left',
         'Center'   => 'text-center',
          'Right'   => 'text-right'
        
         ),
      "std"         => '',
     'dependency' => array(
				'element' => 'button_size',
				'value' => array('btn-small' ,'btn-medium', 'btn-large')
			),
            
         ),
            
          array(
                "type"        => "checkbox",
                "param_name" => "enable_icon",
                "class" => "",
                "heading" => __( "Icon?", "clariwell" ),
                "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
                "group" => "General",
                'save_always' => true,
                "value"         => array('Enable icon'   => '1' ),
              ),
              
         array(
	'type' => 'dropdown',
	'heading' => __( 'Icon library', 'clariwell' ),
	'value' => array(      __( 'Font Awesome', 'clariwell' ) => 'fontawesome',
				__( 'Open Iconic', 'clariwell' ) => 'openiconic',
				__( 'Typicons', 'clariwell' ) => 'typicons',
				__( 'Entypo', 'clariwell' ) => 'entypo',
				__( 'Linecons', 'clariwell' ) => 'linecons',
				__( 'Mono Social', 'clariwell' ) => 'monosocial',
				__( 'Material', 'clariwell' ) => 'material',
				__( 'Themify', 'clariwell' ) => 'themify',

			),
	'param_name' => 'icon_type',
            "group" => "General",

	'description' => __( 'Select icon library.', 'clariwell' ),
	 'dependency' => array(
						'element' => 'enable_icon',
						'value' => array('1')
						
                ),
	),
		
	array(
	'type' => 'iconpicker',
	'heading' => __( 'Icon', 'clariwell' ),
	'param_name' => 'icon_fontawesome',
            "group" => "General",

			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
			),
			'dependency' => array(
				'element' =>'icon_type',
				'value' => 'fontawesome',
			),
			'description' => __( 'Select icon from library.', 'clariwell' ),
    ),
         
	array(
	'type' => 'iconpicker',
	'heading' => __( 'Icon', 'clariwell' ),
	'param_name' => 'icon_openiconic',
	'value' => 'vc-oi vc-oi-dial',
            "group" => "General",

			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'openiconic',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'openiconic',
			),
			'description' => __( 'Select icon from library.', 'clariwell' ),
			
	),
		
	array(
	'type' => 'iconpicker',
	'heading' => __( 'Icon', 'clariwell' ),
	'param_name' => 'icon_typicons',
	'value' => 'typcn typcn-adjust-brightness',
            "group" => "General",

			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'typicons',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'typicons',
			),
			'description' => __( 'Select icon from library.', 'clariwell' ),
			
	),
	array(
	'type' => 'iconpicker',
	'heading' => __( 'Icon', 'clariwell' ),
	'param_name' => 'icon_entypo',
	'value' => 'entypo-icon entypo-icon-note',
            "group" => "General",

			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'entypo',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'entypo',
			),
			
	),
	array(
	'type' => 'iconpicker',
	'heading' => __( 'Icon', 'clariwell' ),
	'param_name' => 'icon_linecons',
	'value' => 'vc_li vc_li-heart',
            "group" => "General",

			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'linecons',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'linecons',
			),
			'description' => __( 'Select icon from library.', 'clariwell' ),
			
	),
	array(
	'type' => 'iconpicker',
	'heading' => __( 'Icon', 'clariwell' ),
	'param_name' => 'icon_monosocial',
	'value' => 'vc-mono vc-mono-fivehundredpx',
            "group" => "General",

			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'monosocial',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'monosocial',
			),
			'description' => __( 'Select icon from library.', 'clariwell' ),
			
	),
	array(
	'type' => 'iconpicker',
	'heading' => __( 'Icon', 'clariwell' ),
	'param_name' => 'icon_material',
	'value' => 'vc-material vc-material-cake',
            "group" => "General",

			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'material',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'material',
			),
			'description' => __( 'Select icon from library.', 'clariwell' ),
	),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'clariwell' ),
			'param_name' => 'icon_themify',
                        	'value' => 'ti-wand',
            "group" => "General",

			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				'type' => 'themify' ,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
			),
			'dependency' => array(
				'element' =>'icon_type',
				'value' => 'themify',
			),
			'description' => __( 'Select icon from library.', 'clariwell' ),
			
		),

             array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Icon Style", "clariwell" ),
            "param_name" => "icon_style",
            "group" => "General",
              "description" => __( "Choose a display style for your button's icon.", "clariwell" ),
             "value"       => array(
                                    'Select' => '',
                                    'Right side'   => 'icon-side',
                                    'Slide from right on hover'   => 'icon-right-on-hover'
                                ),
            "std"         => '',
           'dependency' => array(
						'element' => 'enable_icon',
						'value' => array('1')
                ),
         ),
		
		  array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Text Transform", "clariwell" ),
            "param_name" => "text_transform",
            "group" => "General",
            "description" => __( "Button label text transform.", "clariwell" ),
            "value"       => array(
                        'Select' => '',
                        'Uppercase'   => 'text-uppercase',
                        'None'   => 'text-transform-none'
                        ),
            "std"         => '',
         ),
      array(
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Margin Top", "clariwell" ),
            "param_name" => "margin_top",
            "group" => "General",
            "value" => __( "", "clariwell" ),
             "description" => __( "Change button's top margin value. Default value: 20px", "clariwell" )
         ),
           array(
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Margin Bottom", "clariwell" ),
            "param_name" => "margin_bottom",
            "group" => "General",
            "value" => __( "", "clariwell" ),
            "description" => __( "Change button's bottom margin value. Default value: 20px", "clariwell" )
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
             "description" => __( "Style particular content element differently - add a class name and refer to it in custom CSS.", "clariwell" )
         ),

          array(
			"type" => "dropdown",
			 "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Text Font-weight", "clariwell" ),
			"param_name" => "text_font_weight",
                        "group" => "Advanced",
                        "description" => esc_html__( "Select Button text font-weight.", "clariwell" ),
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
            "heading" => __( "Text Color", "clariwell" ),
            "param_name" => "text_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose Text Color.If you leave it empty, It will set default color", "clariwell" )
             ),
            array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Hover Text Color", "clariwell" ),
            "param_name" => "hover_text_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose Hover Text Color.If you leave it empty, It will set default color", "clariwell" )
             ),
             
             array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Background Color", "clariwell" ),
            "param_name" => "btn_bg_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose Background Color.If you leave it empty, It will set default color", "clariwell" )
             ),
             
            array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Hover Background Color", "clariwell" ),
            "param_name" => "hover_bg_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
            "description" => __( " Choose Hover Background Color.If you leave it empty, It will set default color", "clariwell" )
             ),
             
             array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Border Color", "clariwell" ),
            "param_name" => "border_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
            "description" => __( " Choose Background Color.If you leave it empty, It will set default color", "clariwell" )
             ),

             array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Hover Border Color", "clariwell" ),
            "param_name" => "hover_border_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose Hover Border Color.If you leave it empty, It will set default color", "clariwell" )
           
             )

   ) ));
}

add_shortcode( 'insignia_button', 'insignia_button_shortcode' );
function insignia_button_shortcode( $atts,$content) {
$defaultFont      = 'fontawesome';

	$defaultIconClass = 'fa fa-user-o';

 extract( shortcode_atts( array(
      
     'btn_text' => esc_html__( 'Button Text', "clariwell" ),
     'btn_link' => '',
     'extra_class'=>'',
     'button_size' => '',
     'text_color' => '',
     'btn_bg_color' => '',
     'border_color' => '',
     'hover_text_color' => '',
     'hover_bg_color' => '',
     'hover_border_color' => '',
     'button_align' => '',
     'enable_icon' =>'',
     'icon_type'=> $defaultFont,
     'icon_fontawesome'=> $defaultIconClass,
      'icon_openiconic'=> '', 
      'icon_typicons'=> '', 
      'icon_entypo'=> '', 
      'icon_linecons'=> '', 
      'icon_monosocial'=> '', 
      'icon_material'=> '',   
      'icon_themify'=> '',
      'text_transform' =>'',
      'margin_top'=>'',
      'margin_bottom'=>'',
      'border_radius' =>'',
      'icon_style' => '',
      'text_font_weight' => '',
      'css_animation'  => '',
      'ib_animation_delay'=> ''

   ), $atts ) );

global $extra_class1,$btn_text1,$btn_link1,$button_size1,$text_color1,$btn_bg_color1,$border_color1,$hover_text_color1,$hover_bg_color1,$hover_border_color1,$button_align1,$enable_icon1,$icon_type1,$icon_fontawesome1,$icon_openiconic1,$icon_typicons1,$icon_entypo1,$icon_linecons1,$icon_monosocial1,$icon_material1,$icon_themify1,$text_transform1,$border_radius1,$icon_style1,$text_font_weight1;

$extra_class1=${'extra_class'};
$btn_text1=${'btn_text'};
$btn_link1=${'btn_link'};
$button_size1=${'button_size'};
$text_color1=${'text_color'};
$btn_bg_color1=${'btn_bg_color'};
$border_color1=${'border_color'};
$hover_text_color1=${'hover_text_color'};
$hover_bg_color1=${'hover_bg_color'};
$hover_border_color1=${'hover_border_color'};
$button_align1=${'button_align'};
$enable_icon1=${'enable_icon'};
$icon_type1=${'icon_type'};
$icon_fontawesome1=${'icon_fontawesome'};
$icon_openiconic1=${'icon_openiconic'};
$icon_typicons1=${'icon_typicons'};
$icon_entypo1=${'icon_entypo'};
$icon_linecons1=${'icon_linecons'};
$icon_monosocial1=${'icon_monosocial'};
$icon_material1=${'icon_material'};
$icon_themify1=${'icon_themify'};
$text_transform1=${'text_transform'};
$margin_top1=${'margin_top'};
$margin_bottom1=${'margin_bottom'};
$border_radius1=${'border_radius'};
$icon_style1=${'icon_style'};
$text_font_weight1=${'text_font_weight'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};


$icon = str_replace( 'fa-', '', '' );
	vc_icon_element_fonts_enqueue( $icon_type1 );
	
	$iconClass = isset( ${"icon_" . $icon_type1} ) ? ${"icon_" . $icon_type1}: $defaultIconClass;

$btn_link1= vc_build_link($btn_link1);


  //CSS Animation
            if ($css_animation1 == "no_animation") {
                $css_animation1 = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay1) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay1;
            }

$uniqid = uniqid('ins-button-');
$css_rules = '';
if($text_color1 != '')
$css_rules .= '#' . $uniqid . ' .ins-button {color: '.$text_color1.';}';

if($hover_text_color1!= '')
$css_rules .= '#' . $uniqid . ' .ins-button:hover {color: '.$hover_text_color1.';}';

if($btn_bg_color1 != '')
$css_rules .= '#' . $uniqid . ' .ins-button {background-color: '.$btn_bg_color1.';}';

if($hover_bg_color1!= '')
$css_rules .= '#' . $uniqid . ' .ins-button:hover {background-color: '.$hover_bg_color1.';}';

if($border_color1!= '')
$css_rules .= '#' . $uniqid . ' .ins-button {border-color: '.$border_color1.';}';

if($hover_border_color1!= '')
$css_rules .= '#' . $uniqid . ' .ins-button:hover {border-color: '.$hover_border_color1.';}';


if($margin_top!= '')
$css_rules .= '#' . $uniqid .'.ins-button-wrapper {margin-top: '.$margin_top.';}';

if($margin_bottom!= '')
$css_rules .= '#' . $uniqid .'.ins-button-wrapper {margin-bottom: '.$margin_bottom.';}';

if(!empty($btn_link1['target'])) {
    $target= $btn_link1['target'];
}else{
   $target= '_self'; 
}
    
    
$return="<div id='".$uniqid."' class='ins-button-wrapper ".$button_align1." ".$margin_top1." ".$margin_bottom1." ".$extra_class1." ".$css_animation1."' ".$animation_delay.">";
$return.="<a class='ins-button title-font letter-spacing-1 text-white pc-border pc-bg ".$border_radius1." ".$text_font_weight1." ".$button_size1." ".$text_transform1." ".$icon_style1."' href='".$btn_link1['url']."'  target='".$target."'>";
$return.="<span>".$btn_text1."</span>";

if(!empty($enable_icon)) {
$return.="<i class='ins-button-icon ".$iconClass."'></i>";
}
$return.="</a>";

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