<?php
/**
 *
 * Simple Icon List VC element by INSIGNIA
 *
 */

/*Simple Icon List Element*/

add_action( 'vc_before_init', 'VC_simple_icon_list' );

function VC_simple_icon_list() {
  vc_map (

 array(
      "name" => __( "Simple Icon List", "clariwell" ),
      "base" => "insignia_simple_icon_list",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
        "class" => "font-awesome",
	"icon" => "fa fa-list-ul",
       
      "params" => array(
      
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

			'description' => __( 'Select icon from library.', 'clariwell' ),
    ),

          array(
            "type" => "exploded_textarea",
            "class" => "",
             
            "heading" => __( "List Items", "clariwell" ),
            "param_name" => "list_items",
            "group" => "General",
             "description" => __( "Enter list items here. Divide each item with linebreaks (Enter).", "clariwell" ),
            "value" => 'List Item 1,List Item 2,List Item 3' 

         ),

     array(
            "type" => "dropdown",
            "class" => "",
              "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Icon Style", "clariwell" ),
            "param_name" => "icon_style",
            "group" => "General",
              "description" => __( "Choose a style of icons in the list.", "clariwell" ),
             "value"       => array(
       
        'Select Style'   => 'ins-icon-list-simple',
         'Simple'   => 'ins-icon-list-simple',
          'Circle'   => 'ins-icon-list-circle',
        'Outline'   => 'ins-icon-list-outline'
        

         ),
      "std"         => '',
         
         ),

         array(
            "type" => "dropdown",
            "class" => "",
              "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Icon Size", "clariwell" ),
            "param_name" => "icon_size",
            "group" => "General",
              "description" => __( "Specify size of the icon.", "clariwell" ),
             "value"       => array(
         'Select' => 'list-icon-small',
        'Small'   => 'list-icon-small',
         'Medium'   => 'list-icon-medium',
 	'Large'   => 'list-icon-large',
 	
         ),
      "std"         => '',
        
         ),

        array(
            "type" => "dropdown",
            "class" => "",
              "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Border", "clariwell" ),
            "param_name" => "border_bottom",
            "group" => "General",
              "description" => __( "Enable/disable 1px solid border between list elements.", "clariwell" ),
             "value"       => array(
           'Select' => 'select',
          'Off'   => 'list-icon-border-none',
         'On'   => 'list-icon-border',
 	
        ),

      "std"         => '',
       		
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
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Icon Color", "clariwell" ),
            "param_name" => "icon_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose a color for your list icon.", "clariwell" ),
              
               						
                ),
       
   array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Text Custom Color", "clariwell" ),
            "param_name" => "text_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose a custom text color.", "clariwell" ),
               						
                ),
               
      array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Icon Background Color", "clariwell" ),
            "param_name" => "icon_bg_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose a custom icon background color.", "clariwell" ),
              'dependency' => array(
						'element' => 'icon_style',
						'value' => array('ins-icon-list-circle')
						
                ),
               						
                ),
          
            array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Icon Outline Color", "clariwell" ),
            "param_name" => "icon_outline_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose a custom icon outline color.", "clariwell" ),
              'dependency' => array(
						'element' => 'icon_style',
						'value' => array('ins-icon-list-outline')
						
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

add_shortcode( 'insignia_simple_icon_list', 'insignia_simple_icon_list_shortcode' );
function insignia_simple_icon_list_shortcode( $atts,$content) {
 extract( shortcode_atts( array(
 
     'extra_class'=>'',
       'css'=> '',
        'icon_fontawesome'=>  '',
        'list_items'=> esc_html__( 'List Item 1,List Item 2,List Item 3', "clariwell" ),
        'icon_style' => '',
        'icon_size' => '',
        'border_bottom' => '',
        'icon_color' => '',
        'text_color' => '',
        'icon_bg_color' => '',
        'icon_outline_color' => '',
		'css_animation'  => '',
        'ib_animation_delay'=> ''

   ), $atts ) );

global $extra_class1,$css1,$icon_type1,$icon_fontawesome1,$icon_openiconic1,$icon_typicons1,$icon_entypo1,$icon_linecons1,$icon_monosocial1,$icon_material1,$icon_themify1,$list_items1,$icon_style1,$icon_size1,$border_bottom1,$icon_color1,$text_color1,$icon_bg_color1,$icon_outline_color1;

$extra_class1=${'extra_class'};
$list_items1=${'list_items'};
$icon_style1=${'icon_style'};
$icon_size1=${'icon_size'};
$border_bottom1=${'border_bottom'};
$icon_color1=${'icon_color'};
$text_color1=${'text_color'};
$icon_bg_color1=${'icon_bg_color'};
$icon_outline_color1=${'icon_outline_color'};
$icon_fontawesome1=${'icon_fontawesome'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};
$css1=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );

$items_arr = explode( ',',$list_items1);

//CSS Animation
            if ($css_animation1 == "no_animation") {
                $css_animation1 = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay1) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay1;
            }

$uniqid = uniqid('ins-list-icon-');
$list_css = '';

if($icon_color1 != '')
$list_css .= '#' . $uniqid . ' .ins-list-style .ins-icon-list-icon{color: '.$icon_color1.';}';

if($text_color1 != '')
$list_css .= '#' . $uniqid . ' .ins-list-style{color: '.$text_color1.';}';

if($icon_bg_color1 != '')
$list_css .= '#' . $uniqid .'.ins-icon-list-circle i{background: '.$icon_bg_color1.';}';

if($icon_outline_color1 != '')
$list_css .= '#' . $uniqid .'.ins-icon-list-outline i{border-color: '.$icon_outline_color1.';}';

$return="<div id='".$uniqid."' class='ins-simple-icon-list margin-20px-bottom ".$icon_style1." ".$icon_size1." ".$border_bottom1." ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";
$return.="<ul class='ins-simple-icon-list-inner list-style-none no-padding'>";
foreach ( $items_arr as $list_items1 ) {

		$return.="<li class='ins-list-style margin-15px-bottom position-relative'><i class='ins-icon-list-icon margin-10px-right display-inline-block position-absolute left-0 ". $icon_fontawesome1."'></i> ". $list_items1 ."</li>";
	}
	
$return.="</ul>";
$return.="</div>";

   $return.=	'<script type="text/javascript">
		(function(jQuery) {';

		if($list_css != '') {
					$return.= 'jQuery("head").append("<style>'.$list_css.'</style>")';
						}

					$return.=	'
					})(jQuery);
						</script>';

    return $return;

}
