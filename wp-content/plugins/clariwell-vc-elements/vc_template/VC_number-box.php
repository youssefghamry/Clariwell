<?php
/**
 *
 * Number Box VC element by INSIGNIA
 *
 */

add_action( 'vc_before_init', 'VC_number_box' );

function VC_number_box() {
  vc_map (

 array(
		"name" => __( "Number Box", "clariwell" ),
		"base" => "insignia_number_box",
		"class" => "",
		"category" => __( "Insignia", "clariwell"),
		"class" => "font-awesome",
		"icon" => "fa fa-check-circle-o",
		"params" => array(
      
		array(
			"type" => "dropdown",
			"class" => "",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => __( "Select Layouts", "clariwell" ),
			"param_name" => "layout_style",
			"group" => "General",
			"description" => __( "Select Number Box layout you would like to use", "clariwell" ),
			"value"       => array(
				'Select Layout'   => 'first',
				'Top Number Basic'   => 'ins-top-icon-basic',
                'Aligned Left Basic'   => 'ins-icon-box-align-left-basic',
				'Number Near The Title' => 'ins-number-box-number-near-title',
				'Small Number Near The Title' => 'ins-number-box-small-number-near-title'
				),
			"std"         => '',
			),
		array(
			"type" => "dropdown",
			"class" => "",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => __( "Alignment", "clariwell" ),
			"param_name" => "num_align",
			"group" => "General",
			"description" => __( "Specify alignment of the number box.", "clariwell" ),
			"value"       => array(
				'Select' => 'select',
				'Left'   => 'text-left',
				'Right'   => 'text-right',
				'Center'   => 'text-center'
			),
			"std"         => '',
			'dependency' => array(
				'element' =>'layout_style',
				'value' => array('ins-top-icon-basic')
			),   
		),

		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __( "Enter Number", "clariwell" ),
			"param_name" => "number",
			"group" => "General",
			"description" => __( "Enter Number of your number box.", "clariwell" ),
			"value" => '01' 
		),

               
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __( "Subtitle", "clariwell" ),
			"param_name" => "sub_title",
			"group" => "General",
			"description" => __( "The subtitle of your number box.", "clariwell" ),
			"value" => 'Number Box Subtitle',
			'dependency' => array(
				'element' =>'layout_style',
				'value' => array('ins-number-box-number-near-title')
			), 
		),
      
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __( "Title", "clariwell" ),
			"param_name" => "num_title",
			"group" => "General",
			"description" => __( "The title of your number box.", "clariwell" ),
			"value" => 'Number Box Title' 
		),

		array(
			"type" => "textarea",
			"class" => "",
			"heading" => __( "Text Content", "clariwell" ),
			"param_name" => "num_text",
			"group" => "General",
			"description" => __( "Description text of the number box.", "clariwell" ),
			"value" => 'Number Box text content, feel free to change it!' 
		),

		array(
			"type"        => "checkbox",
			"param_name" => "btn_check",
			"class" => "",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"group" => "General",
			'save_always' => true,
			"value"         => array('Enable Button'   => '1' ),		
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __( "Button Text", "clariwell" ),
			"param_name" => "btn_text",
			"group" => "General",
			"value" => __( "", "clariwell" ),
			"description" => __( "Button title of your number box.", "clariwell" ),
			'dependency' => array(
			'element' => 'btn_check',
			'value' => array('1')
			),
		),
		
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __( "Button Link", "clariwell" ),
			"param_name" => "btn_link",
			"group" => "General",
			"value" => __( "", "clariwell" ),
			"description" => __( "Optional number link.", "clariwell" ),
			'dependency' => array(
			'element' => 'btn_check',
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
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Number Font-size", "clariwell" ),
			"param_name" => "number_size",
			"group" => "Advanced",
			"description" => esc_html__( "Enter Number font-size. Example:30", "clariwell" ),
			"value" => "",
			'dependency' => array(
				'element' =>'layout_style',
				'value' => array('ins-top-icon-basic')
			),
		),

		array(
			"type" => "textfield",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Title Font-size", "clariwell" ),
			"param_name" => "title_size",
			"group" => "Advanced",
			"description" => esc_html__( "Enter title font-size. Example:20", "clariwell" ),
			"value" => "",
			'dependency' => array(
				'element' =>'layout_style',
				'value' => array('ins-top-icon-basic')
			),
		),
		 
		array(
			"type" => "dropdown",
			"class" => "",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => __( "Title Font Size", "clariwell" ),
			"param_name" => "title_font",
			"group" => "Advanced",
			"description" => __( "Select title font size.", "clariwell" ),
			"value"       => array(
				'Select' => '',
				'Theme Default'   => 'text-large',
				'Extra Small'   => 'text-extra-small',
				'Small'   => 'text-small',
				'Medium'   => 'text-medium',        
				'Large'   => 'text-large',
				'Extra Large'   => 'text-extra-large'
			),
			"std"         => '',
			'dependency' => array(
				'element' =>'layout_style',
				'value' => array('ins-icon-box-align-left-basic', 'ins-number-box-small-number-near-title')
			),   
		),
         
		array(
			"type" => "dropdown",
			"class" => "",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => __( "Text Font Size", "clariwell" ),
			"param_name" => "text_font",
			"group" => "Advanced",
			"description" => __( "Select text font size.", "clariwell" ),
			"value"       => array(
				'Select' => '',
				'Extra Small'   => 'text-extra-small',
				'Small'   => 'text-small',
				'Medium'   => 'text-medium',        
				'Large'   => 'text-large',
				'Extra Large'   => 'text-extra-large'
			),
			"std"         => '',
			'dependency' => array(
				'element' =>'layout_style',
				'value' => array('ins-top-icon-basic', 'ins-icon-box-align-left-basic')
			),       
		),

		array(
			"type" => "dropdown",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Number Font-weight", "clariwell" ),
			"param_name" => "number_font_weight",
			"group" => "Advanced",
			"description" => esc_html__( "Select number font-weight." , "clariwell" ),
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

                       	"std"         => 'font-weight-100',

		),
		
		array(
			"type" => "dropdown",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Title Font-weight", "clariwell" ),
			"param_name" => "title_font_weight",
			"group" => "Advanced",
			"description" => esc_html__( "Select Title font-weight." , "clariwell" ),
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
			"heading" => __( "Number Color", "clariwell" ),
			"param_name" => "num_color",
			"group" => "Advanced",
			"value" => __( "", "clariwell" ),
			"description" => __( " Choose a color for your number box.", "clariwell" ),
		),
       
      array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Title Custom Color", "clariwell" ),
            "param_name" => "title_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose a custom title color.", "clariwell" ),						
                ),
                
		array(
			"type" => "colorpicker",
			"class" => "",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => __( "Subtitle Custom Color", "clariwell" ),
			"param_name" => "sub_title_color",
			"group" => "Advanced",
			"value" => __( "", "clariwell" ),
			"description" => __( " Choose a custom subtitle color.", "clariwell" ),
			'dependency' => array(
			'element' =>'layout_style',
			'value' => array('ins-number-box-number-near-title')
		),  
               						
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
            "heading" => __( "Button Custom Color", "clariwell" ),
            "param_name" => "btn_color",
            "group" => "Button Style",
            "value" => __( "#fff", "clariwell" ),
              "description" => __( " Choose a custom button color.", "clariwell" ),
                'dependency' => array(
						'element' => 'btn_check',
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
						'element' => 'btn_check',
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
						'element' => 'btn_check',
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
						'element' => 'btn_check',
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

add_shortcode( 'insignia_number_box', 'insignia_number_box_shortcode' );
function insignia_number_box_shortcode( $atts,$content) {

 extract( shortcode_atts( array(

		'layout_style' => '',
		'extra_class'=>'',
		'css'=> '',
		'num_align'=> '',
		'num_title'=> esc_html__( 'Number Box Title', "clariwell" ),
		'num_text'=> esc_html__( 'Number Box text content, feel free to change it!', "clariwell" ),
		'btn_check' => '',        
		'btn_text' => '',        
		'btn_link' => '',
		'num_color' => '',
		'text_color' => '',
		'title_color' => '',
		'title_font' => '',
		'text_font' => '',
		'btn_color' => '',
		'number' => '01',
		'number_size' => '',
		'title_size' => '',
		'number_font_weight' => 'font-weight-500',
		'title_font_weight' => 'font-weight-400',
		'sub_title' => esc_html__( 'Number Box Subtitle', "clariwell" ),
		'sub_title_color' => '',
		'btn_hover_color' => '',
        'btn_bg_color' => '',
        'btn_bg_hover_color' => '',
		'css_animation'  => '',
        'ib_animation_delay'=> ''

   ), $atts ) );

		$layout_style1= ${'layout_style'};
		$extra_class1=${'extra_class'};
		$num_align1=${'num_align'};
		$num_title1=${'num_title'};
		$num_text1=${'num_text'};
		$btn_check1=${'btn_check'};
		$btn_text1=${'btn_text'};
		$btn_link1=${'btn_link'};
		$text_color1=${'text_color'};
		$title_color1=${'title_color'};
		$num_color1=${'num_color'};
		$title_font1=${'title_font'};
		$text_font1=${'text_font'};
		$btn_color1=${'btn_color'};
		$number1=${'number'};
		$sub_title1=${'sub_title'};
		$sub_title_color1=${'sub_title_color'};
		$number_font_weight1=${'number_font_weight'};
        $btn_hover_color1=${'btn_hover_color'};
		$btn_bg_color1=${'btn_bg_color'};
		$btn_bg_hover_color1=${'btn_bg_hover_color'};
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

if(empty($title_font1)){
   $title_font1= 'text-large';
}


$uniqid = uniqid('ins-icon-');
$icon_css = '';
if($number_size !=''){
$number_line_height = $number_size + 10;
}
if($title_size !=''){
$title_line_height = $title_size + 10;
}

if($num_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-icon i, #' . $uniqid . ' .number-box-num {color: '.$num_color1.';}';


if($title_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-title, #' . $uniqid . ' .ins-float-icon-box-title {color: '.$title_color1.';}';

if($sub_title_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-sub-title {color: '.$sub_title_color1.';}';

if($text_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-text, #' . $uniqid . ' .ins-float-icon-box-text {color: '.$text_color1.';}';

if($number_size !='')
$icon_css .= '#' . $uniqid . ' .number-box-num {font-size: '.$number_size.'px; line-height: '. $number_line_height .'px;}';

if($title_size !='')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-title {font-size: '.$title_size.'px; line-height: '. $title_line_height .'px;}';





if($btn_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-image-box-btn {color: '.$btn_color1.';}';

if($btn_hover_color1 != '')
$icon_css .= '#' . $uniqid .'.ins-icon-wrapper:hover .ins-image-box-btn, #' . $uniqid .'.ins-float-icon-wrapper:hover .ins-image-box-btn {color: '.$btn_hover_color1.';}';

if($btn_bg_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-image-box-btn {background: '.$btn_bg_color1.';}';

if($btn_bg_hover_color1 != '')
$icon_css .= '#' . $uniqid .'.ins-icon-wrapper:hover .ins-image-box-btn, #' . $uniqid .'.ins-float-icon-wrapper:hover .ins-image-box-btn {background: '.$btn_bg_hover_color1.';}';


if($layout_style1== "ins-icon-box-align-left-basic"){

$return="<div id='".$uniqid."' class='ins-float-icon-wrapper margin-20px-bottom ".$layout_style1." ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='position-relative'>";

$return.="<p class='number-box-num ".$number_font_weight1." title-font ins-float-icon-inner link-icon text-medium-gray icon-medium'>".$number1."</p>";
$return.="</div>";

$return.="<div class='ins-float-icon-box-content'>";
if(!empty($num_title1)) {
$return.="<div class='ins-float-icon-box-title text-extra-dark-gray margin-5px-bottom title-font font-weight-600 ".$title_font1." ".$title_font_weight."'>".$num_title1."</div>";
}
if(!empty($num_text1)) {
$return.="<div class='last-paragraph-no-margin'>";
$return.="<p class='ins-float-icon-box-text ".$text_font1."'>".$num_text1."</p>";
$return.="</div>";
}
if(!empty($btn_text1)) {
$return.="<div class='margin-25px-top'>";
$return.="<a class='ins-image-box-btn btn-circle title-font pc-bg sc-bg-hover' href='".$btn_link1."'>";
$return.=$btn_text1;
$return.="</a>";
$return.="</div>";
}

$return.="</div>";
$return.="</div>";

$return.=	'<script type="text/javascript">
		(function(jQuery) {';

		if($icon_css != '') {
					$return.= 'jQuery("head").append("<style>'.$icon_css.'</style>")';
						}

					$return.=	'
					})(jQuery);
						</script>';

    return $return;


}elseif($layout_style1== "ins-number-box-number-near-title") {

$return="<div id='".$uniqid."' class='ins-icon-wrapper margin-30px-bottom ".$extra_class1." ".$css1." ".$num_align1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-icon-box-icon margin-20px-bottom ".$layout_style1."'>";
$return.="<p class='number-box-num ".$number_font_weight1." title-font icon-large'>".$number1."</p>";
$return.="<span class='ins-icon-box-sub-title text-small title-font'>".$sub_title1."</span>";

if(!empty($num_title1)) {
$return.="<p class='ins-icon-box-title title-font ".$title_font1." ".$title_font_weight."'>".$num_title1."</p>";
}
$return.="</div>";
$return.="<div class='ins-icon-box-content'>";

if(!empty($num_text1)) {
$return.="<p class='ins-icon-box-text ".$text_font1."'>".$num_text1."</p>";
}
if(!empty($btn_text1)) {
$return.="<div class='margin-25px-top'>";
$return.="<a class='ins-image-box-btn btn-circle title-font pc-bg sc-bg-hover' href='".$btn_link1."'>";
$return.=$btn_text1;
$return.="</a>";
$return.="</div>";
}
$return.="</div>";
$return.="</div>";



$return.=	'<script type="text/javascript">
		(function(jQuery) {';

		if($icon_css != '') {
					$return.= 'jQuery("head").append("<style>'.$icon_css.'</style>")';
						}

					$return.=	'
					})(jQuery);
						</script>';


    return $return;

}elseif($layout_style1== "ins-number-box-small-number-near-title") {

$return="<div id='".$uniqid."' class='ins-icon-wrapper margin-30px-bottom ".$extra_class1." ".$css1." ".$num_align1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-icon-box-icon margin-15px-bottom ".$layout_style1."'>";
$return.="<span class='number-box-num ".$number_font_weight1." title-font ".$title_font." padding-10px-right font-weight-600 title-font'>".$number1."</span>";
if(!empty($num_title1)) {

$return.="<span class='ins-icon-box-title title-font ".$title_font." ".$title_font_weight."'>".$num_title1."</span>";
}
$return.="</div>";
$return.="<div class='ins-icon-box-content'>";

if(!empty($num_text1)) {
$return.="<p class='ins-icon-box-text margin-5px-bottom ".$text_font1."'>".$num_text1."</p>";
}
if(!empty($btn_text1)) {
$return.="<div class='margin-25px-top'>";
$return.="<a class='ins-image-box-btn btn-circle title-font pc-bg sc-bg-hover' href='".$btn_link1."'>";
$return.=$btn_text1;
$return.="</a>";
$return.="</div>";
}
$return.="</div>";
$return.="</div>";



$return.=	'<script type="text/javascript">
		(function(jQuery) {';

		if($icon_css != '') {
					$return.= 'jQuery("head").append("<style>'.$icon_css.'</style>")';
						}

					$return.=	'
					})(jQuery);
						</script>';


    return $return;

}else{

$return="<div id='".$uniqid."' class='ins-icon-wrapper margin-30px-bottom ".$extra_class1." ".$css1." ".$num_align1." ".$css_animation1."' ".$animation_delay.">";
if($number1 != ''){
$return.="<div class='ins-icon-box-icon margin-15px-bottom ".$layout_style1."'>";
$return.="<span class='number-box-num ".$number_font_weight1." title-font'>".$number1."</span>";
$return.="</div>";
}
$return.="<div class='ins-icon-box-content'>";
if(!empty($num_title1)) {
$return.="<div class='ins-icon-box-title title-font margin-10px-bottom sm-margin-5px-bottom ".$title_font_weight." ".$title_font1."'>".$num_title1."</div>";
}
if(!empty($num_text1)) {
$return.="<p class='ins-icon-box-text ".$text_font1."'>".$num_text1."</p>";
}
if(!empty($btn_text1)) {
$return.="<div class='margin-25px-top'>";
$return.="<a class='ins-image-box-btn btn-circle title-font pc-bg sc-bg-hover' href='".$btn_link1."'>";
$return.=$btn_text1;
$return.="</a>";
$return.="</div>";
}
$return.="</div>";
$return.="</div>";



$return.=	'<script type="text/javascript">
		(function(jQuery) {';

		if($icon_css != '') {
					$return.= 'jQuery("head").append("<style>'.$icon_css.'</style>")';
						}

					$return.=	'
					})(jQuery);
						</script>';


    return $return;

}
}
