<?php
/**
 *
 * Custom Icon Box VC element by INSIGNIA
 *
 */
/*Custom Icon Box Element*/


add_action( 'vc_before_init', 'VC_custom_icon_box' );

function VC_custom_icon_box() {

  vc_map (

 array(
      "name" => __( "Custom Icon Box", "clariwell" ),
      "base" => "insignia_custom_icon_box",
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
              "description" => __( "Select Icon Box layout you would like to use", "clariwell" ),
             "value"       => array(
       
        'Select Layout'   => 'first',
         'Top Icon Basic'   => 'ins-top-icon-basic',
        'Aligned Left Basic'   => 'ins-icon-box-align-left-basic',
        'Aligned Right Basic'   => 'ins-icon-box-align-right-basic'
        ),
      "std"         => '',
         
         ),

            array(
      "type" => "attach_image",
      "class" => "",
      "heading" => __( "Add Custom Icon", "clariwell" ),
      "param_name" => "custom_icon",
      "group" => "General",
       "value" => '',
       "description" => __( "Select Custom icon of your Custom icon box.", "clariwell" )
          ),

          array(
            "type" => "dropdown",
            "class" => "",
              "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Icon Alignment", "clariwell" ),
            "param_name" => "icon_align",
            "group" => "General",
              "description" => __( "Specify alignment of the big icon.", "clariwell" ),
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
             
            "heading" => __( "Title", "clariwell" ),
            "param_name" => "icon_title",
            "group" => "General",
             "description" => __( "The title of your icon box.", "clariwell" ),
            "value" => 'Custom Icon Box Title' 

         ),
         
         array(
            "type" => "textfield",
            "class" => "",
             
            "heading" => __( "Subtitle", "clariwell" ),
            "param_name" => "sub_title",
            "group" => "General",
             "description" => __( "The subtitle of your icon box.", "clariwell" ),
            "value" => 'Custom Icon Box Subtitle',
            'dependency' => array(
				'element' =>'layout_style',
				'value' => array('ins-icon-box-icon-near-title')
			), 

         ),

       array(
            "type" => "textarea",
            "class" => "",
             
            "heading" => __( "Text Content", "clariwell" ),
            "param_name" => "icon_text",
            "group" => "General",
             "description" => __( "Description text of the icon box.", "clariwell" ),
             "value" => 'Custom Icon Box text content' 

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
             "description" => __( "Button title of your icon box.", "clariwell" ),
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
             "description" => __( "Optional icon link.", "clariwell" ),
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
			"heading" => esc_html__( "Title Font Size", "clariwell" ),
                         "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"param_name" => "title_font",
			"description" => esc_html__( "Enter Custom font-size(Example:20)", "clariwell" ),
			"value" => __( "", "clariwell" ),
			'group' => esc_html__( "Advanced", "clariwell" ),
                'dependency' => array(
				'element' =>'layout_style',
				'value' => array('ins-top-icon-basic' , 'ins-icon-box-align-left-basic', 'ins-icon-box-align-right-basic'),      
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
				'value' => array('ins-top-icon-basic' , 'ins-icon-box-align-left-basic', 'ins-icon-box-align-right-basic'),      
         ),
         ),

           array(
			"type" => "dropdown",
			 "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"heading" => esc_html__( "Title Font-weight", "clariwell" ),
			"param_name" => "title_font_weight",
                        "group" => "Advanced",
                        "description" => esc_html__( "Select Title font-weight.", "clariwell" ),
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

			"heading" => esc_html__( "Text Font-weight", "clariwell" ),
			"param_name" => "text_font_weight",
                        "group" => "Advanced",
                        "description" => esc_html__( "Select sun sub-heading font-weight.", "clariwell" ),
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
              "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Title letter-spacing", "clariwell" ),
            "param_name" => "title_letter_spacing",
              "group" => "Advanced",
              "description" => __( "Specify letter-spacing of the title", "clariwell" ),
             "value"       => array(
         'Select' => 'select',
        'No-letter-spacing' => 'no-letter-spacing',
        '0.5' => 'letter-spacing-0.5',
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
      "std"         => 'no-letter-spacing',
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
				'value' => array('ins-icon-box-icon-near-title')
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
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose a custom button color.", "clariwell" ),
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

add_shortcode( 'insignia_custom_icon_box', 'insignia_custom_icon_box_shortcode' );
function insignia_custom_icon_box_shortcode( $atts,$content) {

 extract( shortcode_atts( array(

     'layout_style' => '',
      'extra_class'=>'',
       'css'=> '',
        'icon_align'=> '',
        'icon_title'=> esc_html__( 'Custom Icon Box Title', "clariwell" ),
        'icon_text'=> esc_html__( 'Custom Icon Box text content', "clariwell" ),
        'btn_check' => '',        
        'btn_text' => '',        
        'btn_link' => '',
        'text_color' => '',
        'title_color' => '',
        'title_font' => '',
         'text_font' => '',
         'btn_color' => '',
        'sub_title' => esc_html__( 'Custom Icon Box Subtitle', "clariwell" ),
         'sub_title_color' => '',
         'custom_icon' =>'',
        'text_font_weight' =>'',
        'title_font_weight' =>'',
        'title_letter_spacing' => 'no-letter-spacing'  ,
		'css_animation'  => '',
        'ib_animation_delay'=> '',

   ), $atts ) );


$layout_style1= ${'layout_style'};
$extra_class1=${'extra_class'};
$icon_align1=${'icon_align'};
$icon_title1=${'icon_title'};
$icon_text1=${'icon_text'};
$btn_check1=${'btn_check'};
$btn_text1=${'btn_text'};
$btn_link1=${'btn_link'};
$text_color1=${'text_color'};
$title_color1=${'title_color'};
$title_font1=${'title_font'};
$text_font1=${'text_font'};

$btn_color1=${'btn_color'};
$sub_title1=${'sub_title'};
$sub_title_color1=${'sub_title_color'};

$custom_icon1=${'custom_icon'};
$title_font_weight1=${'title_font_weight'};
$text_font_weight1=${'text_font_weight'};
$title_letter_spacing1=${'title_letter_spacing'};

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



	
$uniqid = uniqid('ins-icon-');
$icon_css = '';


if($title_font1 != ''){
$line_height= $title_font1 + 10;
}

if($title_font1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-title, #' . $uniqid . ' .ins-float-icon-box-title {font-size: '.$title_font1.'px; line-height:'.$line_height.'px;}';

if($title_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-title, #' . $uniqid . ' .ins-float-icon-box-title {color: '.$title_color1.';}';

if($text_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-text, #' . $uniqid . ' .ins-float-icon-box-text {color: '.$text_color1.';}';

if($btn_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-image-box-btn {color: '.$btn_color1.';}';



if($layout_style1== "ins-icon-box-align-left-basic"){

$return="<div id='".$uniqid."' class='ins-float-icon-wrapper margin-20px-bottom ".$layout_style1." ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-float-icon-inner custom-icon-box-img-main position-relative'>";

$return.="<img src='".wp_get_attachment_url($custom_icon1,'large')."' alt='custom-icon'>";
$return.="</div>";

$return.="<div class='ins-float-icon-box-content ins-float-custom-icon-box-content'>";
if(!empty($icon_title1)) {
$return.="<h6 class='ins-float-icon-box-title text-extra-dark-gray margin-5px-bottom title-font ".$title_font_weight1." ".$title_letter_spacing1."'>".$icon_title1."</h6>";
}
if(!empty($icon_text1)) {
$return.="<div class='last-paragraph-no-margin'>";
$return.="<p class='ins-float-icon-box-text ".$text_font1." ".$text_font_weight1."'>".$icon_text1."</p>";
$return.="</div>";
}
if(!empty($btn_text1)) {
$return.="<div class='ins-icon-box-btn-wrap'>";
$return.="<a class='ins-image-box-btn  title-font pc' href='".$btn_link1."'>";
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


}elseif($layout_style1== "ins-icon-box-align-right-basic"){

$return="<div id='".$uniqid."' class='ins-float-icon-wrapper margin-20px-bottom ".$layout_style1." ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-float-right-icon-inner custom-icon-box-img-main position-relative'>";

$return.="<img src='".wp_get_attachment_url($custom_icon1,'large')."' alt='custom-icon'>";
$return.="</div>";

$return.="<div class='ins-float-icon-box-content ins-float-custom-icon-box-content'>";
if(!empty($icon_title1)) {
$return.="<h6 class='ins-float-icon-box-title text-extra-dark-gray margin-5px-bottom title-font ".$title_font_weight1." ".$title_letter_spacing1."'>".$icon_title1."</h6>";
}
if(!empty($icon_text1)) {
$return.="<div class='last-paragraph-no-margin'>";
$return.="<p class='ins-float-icon-box-text ".$text_font1." ".$text_font_weight1."'>".$icon_text1."</p>";
$return.="</div>";
}
if(!empty($btn_text1)) {
$return.="<div class='ins-icon-box-btn-wrap'>";
$return.="<a class='ins-image-box-btn title-font pc' href='".$btn_link1."'>";
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

$return="<div id='".$uniqid."' class='ins-icon-wrapper margin-20px-bottom ".$extra_class1." ".$css1." ".$icon_align1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-icon-box-icon custom-icon-box-img-main margin-20px-bottom ".$layout_style1."'>";
$return.="<img src='".wp_get_attachment_url($custom_icon1,'large')."' alt='custom-icon'>";
$return.="</div>";
$return.="<div class='ins-icon-box-content'>";
if(!empty($icon_title1)) {
$return.="<h6 class='ins-icon-box-title title-font margin-10px-bottom sm-margin-5px-bottom  ".$title_font_weight1." ".$title_letter_spacing1."'>".$icon_title1."</h6>";
}

if($icon_text1 != '') {
$return.="<p class='ins-icon-box-text ".$text_font1." ".$text_font_weight1."'>".$icon_text1."</p>";
}
if(!empty($btn_text1)) {
$return.="<div class='ins-icon-box-btn-wrap'>";
$return.="<a class='ins-image-box-btn title-font pc' href='".$btn_link1."'>";
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