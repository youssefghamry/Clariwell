<?php
/**
 *
 * Icon Box VC element by INSIGNIA
 *
 */
 
/*Icon Box Element*/

add_action( 'vc_before_init', 'VC_icon_box' );

function VC_icon_box() {

  vc_map (

 array(
      "name" => __( "Icon Box", "clariwell" ),
      "base" => "insignia_icon_box",
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
        'Aligned Right Basic'   => 'ins-icon-box-align-right-basic',
        'Icon Near The Title' => 'ins-icon-box-icon-near-title'

        ),
      "std"         => '',
         
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
              							"type" => "iconpicker",
              							"heading" => esc_html__( "Icon", "clariwell" ),
              							"param_name" => "icon_iconsmind",
              								"group" => "General",
                            "settings" => array(
                        				"type" => "iconsmind",
                        				"iconsPerPage" => 50,
                        		),
              						
              							"description" => esc_html__( "Select icon from library.", "clariwell" ),
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
         'Select' => 'select',
        'Small'   => 'icon-small',
         'Medium'   => 'icon-medium',
 	'Large'   => 'icon-large',
         ),
      "std"         => 'icon-medium',
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
            "value" => 'Icon Box Title' 

         ),
           

       array(
            "type" => "textarea",
            "class" => "",
             
            "heading" => __( "Text Content", "clariwell" ),
            "param_name" => "icon_text",
            "group" => "General",
             "description" => __( "Description text of the icon box.", "clariwell" ),
             "value" => 'Icon Box text content, feel free to change it!' 

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
                        "value"       => array(
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
      "std"         => 'no-letter-spacing',
       
         ),
  	
        array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Icon Color", "clariwell" ),
            "param_name" => "icon_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
              "description" => __( " Choose a color for your icon box.", "clariwell" ),
              
               						
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
			"type" => "colorpicker",
			"class" => "hidden-label",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Icon hover color", "clariwell" ),
			"param_name" => "icon_hover_color",
			"value" => __( "", "clariwell" ),
			'description' => esc_html__( 'Select Icon hover color.', 'clariwell' ),
			'group' => esc_html__( "Advanced", "clariwell" ),
          
		),   

        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'clariwell' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'clariwell' ),
        ),
   ) ));
}

add_shortcode( 'insignia_icon_box', 'insignia_icon_box_shortcode' );
function insignia_icon_box_shortcode( $atts,$content) {

 extract( shortcode_atts( array(
 	
     'layout_style' => '',
      'extra_class'=>'',
       'css'=> '',
        'icon_iconsmind'=> '', 
        'icon_align'=> '',
        'icon_title'=> esc_html__( 'Icon Box Title', "clariwell" ),
        'icon_text'=> esc_html__( 'Icon Box text content, feel free to change it!', "clariwell" ),
        'btn_check' => '',        
        'btn_text' => '',        
        'btn_link' => '',
        'icon_size' => 'icon-medium',
        'icon_color' => '',
        'text_color' => '',
        'title_color' => '',
        'title_font' => '',
         'text_font' => '',
        'btn_color' => '',
        'text_font_weight' =>'',
         'title_font_weight' =>'',
        'title_letter_spacing' => 'no-letter-spacing',
        'icon_hover_color' => '',
        'icon_bg_hover_color' => '',
        'css_animation'  => '',
        'ib_animation_delay'=> '',
        'btn_border_radius'=> ''

   ), $atts ) );


$layout_style1= ${'layout_style'};
$extra_class1=${'extra_class'};
$icon_iconsmind1=${'icon_iconsmind'};
$icon_align1=${'icon_align'};
$icon_title1=${'icon_title'};
$icon_text1=${'icon_text'};
$btn_check1=${'btn_check'};
$btn_text1=${'btn_text'};
$btn_link1=${'btn_link'};
$icon_size1=${'icon_size'};
$text_color1=${'text_color'};
$title_color1=${'title_color'};
$icon_color1=${'icon_color'};
$title_font1=${'title_font'};
$text_font1=${'text_font'};
$btn_color1=${'btn_color'};
$title_font_weight1=${'title_font_weight'};
$text_font_weight1=${'text_font_weight'};
$title_letter_spacing1=${'title_letter_spacing'};
$icon_hover_color1=${'icon_hover_color'};
$icon_bg_hover_color1=${'icon_bg_hover_color'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};
$btn_border_radius1=${'btn_border_radius'};


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

if($icon_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-icon i, #' . $uniqid . ' .ins-float-icon-inner i, #' . $uniqid . ' .ins-float-right-icon-inner i {color: '.$icon_color1.';}';


if($title_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-title, #' . $uniqid . ' .ins-float-icon-box-title {color: '.$title_color1.';}';

if($text_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-text, #' . $uniqid . ' .ins-float-icon-box-text {color: '.$text_color1.';}';


if($btn_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-image-box-btn {color: '.$btn_color1.';}';

if($btn_color1 != '')
$icon_css .= '#' . $uniqid . ' .ins-icon-box-btn-wrap:hover:after {background-color: '.$btn_color1.';}';

if($icon_hover_color1!= '')
$icon_css .= '#' . $uniqid .'.ins-icon-wrapper:hover i,  #' . $uniqid .'.ins-icon-box-align-left-circle-outline:hover .link-icon,  #' . $uniqid .'.ins-icon-box-align-left-circle-background:hover .link-icon,  #' . $uniqid .'.ins-icon-box-align-right-circle-outline:hover .link-icon,  #' . $uniqid .'.ins-icon-box-align-right-circle-background:hover .link-icon, #' . $uniqid .'.ins-float-icon-wrapper:hover .ins-float-icon-inner i, #' . $uniqid .'.ins-float-icon-wrapper:hover .ins-float-right-icon-inner i {color: '.$icon_hover_color1.';}';


if($layout_style1== "ins-icon-box-align-left-basic"){

	if($layout_style1== "ins-icon-box-align-left-basic"){
		$align_icon_size = "icon-medium";
	}


$return="<div id='".$uniqid."' class='ins-float-icon-wrapper margin-20px-bottom ".$layout_style1." ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-float-icon-inner position-relative'>";

$return.="<i class='link-icon text-medium-gray ".$align_icon_size." ".$icon_iconsmind1."'></i>";
$return.="</div>";

$return.="<div class='ins-float-icon-box-content'>";
if(!empty($icon_title1)) {
$return.="<h6 class='ins-float-icon-box-title margin-5px-bottom title-font ".$title_font_weight1." ".$title_font1." ".$title_letter_spacing1."'>".$icon_title1."</h6>";
}

if(!empty($icon_text1)) {
$return.="<div class='last-paragraph-no-margin'>";
$return.="<p class='ins-float-icon-box-text ".$text_font1." ".$text_font_weight1."'>".$icon_text1."</p>";
$return.="</div>";
}
if(!empty($btn_text1)) {
$return.="<div class='ins-icon-box-btn-wrap margin-20px-top'>";
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


}elseif($layout_style1== "ins-icon-box-align-right-basic"){

	if($layout_style1== "ins-icon-box-align-right-basic"){
		$align_icon_size = "icon-medium";
	}


$return="<div id='".$uniqid."' class='ins-float-icon-wrapper margin-20px-bottom ".$layout_style1." ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-float-right-icon-inner position-relative'>";

$return.="<i class='link-icon text-medium-gray ".$align_icon_size." ".$icon_iconsmind1."'></i>";
$return.="</div>";

$return.="<div class='ins-float-icon-box-content'>";
if(!empty($icon_title1)) {
$return.="<h6 class='ins-float-icon-box-title margin-5px-bottom title-font ".$title_font_weight1." ".$title_font1." ".$title_font_weight1." ".$title_letter_spacing1."'>".$icon_title1."</h6>";
}

if(!empty($icon_text1)) {
$return.="<div class='last-paragraph-no-margin'>";
$return.="<p class='ins-float-icon-box-text ".$text_font1." ".$text_font_weight1."'>".$icon_text1."</p>";
$return.="</div>";
}
if(!empty($btn_text1)) {
$return.="<div class='ins-icon-box-btn-wrap margin-15px-top'>";
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


}elseif($layout_style1== "ins-icon-box-icon-near-title") {

$return="<div id='".$uniqid."' class='ins-icon-wrapper last-paragraph-no-margin margin-20px-bottom ".$extra_class1." ".$css1." ".$icon_align1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-icon-box-icon margin-15px-bottom ".$layout_style1."'>";
$return.="<i class='icon-box-icon icon-small ".$icon_iconsmind1."'></i>";

if(!empty($icon_title1)) {
$return.="<h6 class='ins-icon-box-title title-font ".$title_font1." ".$title_font_weight1." ".$title_letter_spacing1."'>".$icon_title1."</h6>";
}

$return.="</div>";
$return.="<div class='ins-icon-box-content'>"; 

if(!empty($icon_text1)) {
$return.="<p class='ins-icon-box-text ".$text_font1." ".$text_font_weight1."'>".$icon_text1."</p>";
}
if(!empty($btn_text1)) {
$return.="<div class='ins-icon-box-btn-wrap margin-15px-top'>";
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
    
    

$return="<div id='".$uniqid."' class='ins-icon-wrapper last-paragraph-no-margin margin-20px-bottom ".$extra_class1." ".$css1." ".$icon_align1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-icon-box-icon margin-20px-bottom ".$layout_style1." ".$icon_size1."'>";
$return.="<i class='".$icon_iconsmind1."'></i>";
$return.="</div>";
$return.="<div class='ins-icon-box-content'>";
if(!empty($icon_title1)) {
$return.="<h6 class='ins-icon-box-title title-font margin-15px-bottom sm-margin-5px-bottom ".$title_font1." ".$title_font_weight1." ".$title_letter_spacing1."'>".$icon_title1."</h6>";
}

if(!empty($icon_text1)) {
$return.="<p class='ins-icon-box-text ".$text_font1." ".$text_font_weight1."'>".$icon_text1."</p>";
}
if(!empty($btn_text1)) {
$return.="<div class='ins-icon-box-btn-wrap margin-15px-top'>";
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
