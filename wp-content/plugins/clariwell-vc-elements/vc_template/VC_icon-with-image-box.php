<?php
/**
 *
 * Icon With Image Box VC element by INSIGNIA
 *
 */

/*Icon With Image Box Element*/


add_action( 'vc_before_init', 'VC_icon_with_image_box' );

function VC_icon_with_image_box() {

  vc_map (

		array(
			"name" => __( "Icon With Image Box", "clariwell" ),
			"base" => "insignia_icon_with_image_box",
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
              "description" => __( "Select layout you would like to use", "clariwell" ),
             "value"       => array(
				'Select Layout'   => 'first',
				'Layout 1'   => 'ins-icon-with-image-layout1',
				'Layout 2'   => 'ins-icon-with-image-layout2',
				'Layout 3'   => 'ins-icon-with-image-layout3',
			),
			"std"         => '',
         
         ),

		array(
			"type" => "attach_image",
			"class" => "",
			"heading" => __( "Add Image", "clariwell" ),
			"param_name" => "custom_image",
			"group" => "General",
			"value" => '',
			"description" => __( "Select image of your icon with image box.", "clariwell" )
          ),

        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "clariwell" ),
            "param_name" => "title",
            "group" => "General",
            "value" => 'Icon Image Box' ,
			"description" => __( "The title of your icon with image box.", "clariwell" ),

            ),
          
        array(
            "type" => "textarea",
            "class" => "",
             
            "heading" => __( "Text Content", "clariwell" ),
            "param_name" => "text_content",
            "group" => "General",
             "description" => __( "Description text of the icon with image box.", "clariwell" ),
             "value" => 'icon with image box text content, feel free to change it!' 

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
			"description" => __( "Button title of your icon with image box.", "clariwell" ),
            'dependency' => array(
						'element' => 'enable_button',
						'value' => array('1')
						
                ),
				'dependency' => array(
						'element' =>'layout_style',
						'value' => array('ins-icon-with-image-layout1', 'ins-icon-with-image-layout2')
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
                "0 ms"   	 => "",
                "200 ms"     => "200",
                "400 ms"     => "400",
                "600 ms"     => "600",
                "800 ms"     => "800",
                "1 s"        => "1000",
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
			'dependency' => array(
						'element' =>'layout_style',
						'value' => array('ins-icon-with-image-layout1', 'ins-icon-with-image-layout3')
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
			'dependency' => array(
						'element' =>'layout_style',
						'value' => array('ins-icon-with-image-layout1', 'ins-icon-with-image-layout3')
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
			'dependency' => array(
						'element' =>'layout_style',
						'value' => array('ins-icon-with-image-layout1', 'ins-icon-with-image-layout3')
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
			'dependency' => array(
						'element' =>'layout_style',
						'value' => array('ins-icon-with-image-layout1', 'ins-icon-with-image-layout3')
				), 	

             ),
				
		array(
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Title font size", "clariwell" ),
            "param_name" => "title_font",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
             "description" => __( "Select title font-size(in pixels).Enter Number only, do not add 'px'.", "clariwell" )
            
         ),
		 
		array(
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Title letter spacing", "clariwell" ),
            "param_name" => "title_letter_spacing",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
             "description" => __( "Select title line-height(in pixels).Enter Number only, do not add 'px'.", "clariwell" )
            
         ), 
		 
		 array(
			"type" => "dropdown",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Title Font-weight", "clariwell" ),
			"param_name" => "title_font_weight",
                        "group" => "Advanced",
                        "description" => esc_html__( "Select Image box title font-weight.", "clariwell" ),
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
            "heading" => __( "Icon Color", "clariwell" ),
            "param_name" => "icon_color",
            "group" => "Advanced",
            "value" => __( "#fff", "clariwell" ),
            "description" => __( " Choose a color for your icon box.", "clariwell" ),
              
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
               						
                ),

		array(
		
			"type" => "colorpicker",
			"class" => "hidden-label",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Icon hover color", "clariwell" ),
			"param_name" => "icon_hover_color",
			"value" => __( "#fff", "clariwell" ),
			'description' => esc_html__( 'Select Icon hover color.', 'clariwell' ),
			'group' => esc_html__( "Advanced", "clariwell" ),
			'dependency' => array(
						'element' =>'layout_style',
						'value' => array('ins-icon-with-image-layout1', 'ins-icon-with-image-layout2')
				),
          
		),   
		
        array(
			"type" => "colorpicker",
			"class" => "hidden-label",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Icon Background hover color", "clariwell" ),
			"param_name" => "icon_bg_hover_color",
			"value" => __( "", "clariwell" ),
			'description' => esc_html__( 'Select Icon Background hover color.', 'clariwell' ),
			'group' => esc_html__( "Advanced", "clariwell" ),
			'dependency' => array(
						'element' =>'layout_style',
						'value' => array('ins-icon-with-image-layout1', 'ins-icon-with-image-layout2')
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

add_shortcode( 'insignia_icon_with_image_box', 'insignia_icon_with_image_box_shortcode' );
function insignia_icon_with_image_box_shortcode( $atts,$content) {

 extract( shortcode_atts( array(
 
	 'layout_style' => '',
     'extra_class'=>'',
     'css'=> '',
	 'custom_image'=>'',
	 'title'=>'',
	 'text_content'=>'',
	 'enable_button'=>'',
	 'btn_text'=>'',
	 'btn_link'=>'',
	 'icon_iconsmind'=>'',
	 'css_animation'  => '',
     'ib_animation_delay'=> '',
	 'btn_hover_color' => '',
     'btn_bg_color' => '',
     'btn_bg_hover_color' => '',
	 'btn_color' => '',
	 'icon_color' => '',
	 'icon_bg_color' => '',
	 'icon_hover_color' => '',
     'icon_bg_hover_color' => '',
	 'title_font' => '',
	 'title_font_weight' => '',
	 'title_letter_spacing' => ''

	 
   ), $atts ) );


$layout_style1= ${'layout_style'};
$extra_class1=${'extra_class'};
$icon_iconsmind1=${'icon_iconsmind'};
$custom_image1=${'custom_image'};
$title1=${'title'};
$text_content1=${'text_content'};
$enable_button1=${'enable_button'};
$btn_text1=${'btn_text'};
$btn_link1=${'btn_link'};
$btn_color1=${'btn_color'};
$btn_hover_color1=${'btn_hover_color'};
$btn_bg_color1=${'btn_bg_color'};
$btn_bg_hover_color1=${'btn_bg_hover_color'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};
$icon_color1=${'icon_color'};
$icon_bg_color1=${'icon_bg_color'};
$icon_hover_color1=${'icon_hover_color'};
$icon_bg_hover_color1=${'icon_bg_hover_color'};
$title_font1=${'title_font'};
$title_font_weight1=${'title_font_weight'};
$title_letter_spacing1=${'title_letter_spacing'};


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

			$btn_link1= vc_build_link($btn_link1);
			
$line_height= $title_font1 + 10;

			
if($title_font1 != '')
$icon_css .= '#' . $uniqid . ' .icon-with-image-title {font-size: '.$title_font1.'px; line-height:'.$line_height.'px;}';
	
if($title_letter_spacing1 != '')
$icon_css .= '#' . $uniqid . ' .icon-with-image-title {letter-spacing: '.$title_letter_spacing1.'px;}';	
			
if($icon_color1 != '')
$icon_css .= '#' . $uniqid . ' .icon-with-image-icon-box-layout1 .icon-with-image-icon, #' . $uniqid . ' .icon-with-image-layout2-icon .icon-with-image-icon, #' . $uniqid . ' .icon-with-image-layout3-icon-inner, #' . $uniqid . ' .icon-with-image-layout3-text-inner {color: '.$icon_color1.';}';

if($icon_hover_color1 != '')
$icon_css .= '#' . $uniqid .'.ins-icon-with-image-layout1:hover .icon-with-image-icon-layout1 .icon-with-image-icon, #' . $uniqid .'.ins-icon-with-image-layout2:hover .icon-with-image-layout2-icon .icon-with-image-icon {color: '.$icon_hover_color1.';}';

if($icon_bg_color1 != '')
$icon_css .= '#' . $uniqid . ' .icon-with-image-icon-box-layout1, #' . $uniqid . ' .icon-with-image-layout2-icon, #' . $uniqid . '.ins-icon-with-image-layout3:hover .icon-with-image-layout3-overlay-inner, #' . $uniqid .' .icon-with-image-layout3-icon:before {background: '.$icon_bg_color1.';}';

if($icon_bg_hover_color1 != '')
$icon_css .= '#' . $uniqid .'.ins-icon-with-image-layout1:hover .icon-with-image-icon-box-layout1, #' . $uniqid .'.ins-icon-with-image-layout2:hover .icon-with-image-layout2-icon {background: '.$icon_bg_hover_color1.';}';
			
if($btn_color1!= '')
$icon_css .= '#' . $uniqid . ' .ins-image-box-btn, #' . $uniqid . ' .icon-with-image-layout3-arrow-box {color: '.$btn_color1.';}';

if($btn_hover_color1!= '')
$icon_css .= '#' . $uniqid . ' .ins-image-box-btn:hover, #' . $uniqid .'.ins-icon-with-image-layout1:hover .ins-image-box-btn, #' . $uniqid .'.ins-icon-with-image-layout3:hover .icon-with-image-layout3-arrow-box {color: '.$btn_hover_color1.';}';

if($btn_bg_color1!= '')
$icon_css .= '#' . $uniqid . ' .ins-image-box-btn, #' . $uniqid . ' .icon-with-image-layout3-arrow-box {background: '.$btn_bg_color1.';}';

if($btn_bg_hover_color1!= '')
$icon_css .= '#' . $uniqid . ' .ins-image-box-btn:hover, #' . $uniqid .'.ins-icon-with-image-layout1:hover .ins-image-box-btn, #' . $uniqid .'.ins-icon-with-image-layout3:hover .icon-with-image-layout3-arrow-box {background: '.$btn_bg_hover_color1.';}';

			
			
if($layout_style1== "ins-icon-with-image-layout1"){

$return="<div id='".$uniqid."' class='icon-with-image-wrapper ins-icon-with-image-layout1 text-center ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";

if(!empty($custom_image1)){
$return.="<div class='icon-with-image-layout1'>";
$return.="<img src='".wp_get_attachment_url($custom_image1,'large')."' alt='Awesome-Image'>";
$return.="</div>";
}
if(!empty($icon_iconsmind1)){
$return.="<div class='icon-with-image-icon-layout1 position-relative'>";
$return.="<div class='icon-with-image-icon-box-layout1 position-relative border-radius-50 display-inline-block pc-bg sc-bg-hover'>";
$return.="<i class='icon-with-image-icon ".$icon_iconsmind1."'></i>";
$return.="</div>";
$return.="</div>";
}

$return.="<div class='icon-with-image-content-layout1 padding-30px-all'>";
if(!empty($title1)) {
$return.="<h4 class='icon-with-image-title margin-10px-top ".$title_font_weight1."'>".$title1."</h4>";
}
if(!empty($text_content1)) {
$return.="<p class='icon-with-image-text'>".$text_content1."</p>";
}
if(!empty($btn_text1)) {
$return.="<div class='margin-25px-top margin-20px-bottom'>";
$return.="<a class='ins-image-box-btn btn-circle title-font pc-bg sc-bg-hover' href='".$btn_link1['url']."'  target='".$target."'>";
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


}elseif($layout_style1== "ins-icon-with-image-layout2"){

$return="<div id='".$uniqid."' class='icon-with-image-wrapper ins-icon-with-image-layout2 ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='icon-with-image-inner'>";

$return.="<div class='icon-with-image-layout2-title-holder text-center'>";
if(!empty($icon_iconsmind1)){
$return.="<div class='icon-with-image-layout2-icon'>";
$return.="<div class='icon-with-image-layout2-icon-inner'>";
$return.="<i class='icon-with-image-icon ".$icon_iconsmind1."'></i>";
$return.="</div>";
$return.="</div>";

}
if(!empty($title1)) {
$return.="<div class='icon-with-image-layout2-title'>";
$return.="<h4 class='icon-with-image-title ".$title_font_weight1."'>".$title1."</h4>";
$return.="</div>";
}
$return.="</div>";

$return.="<div class='icon-with-image-layout2-img-holder'>";
if(!empty($custom_image1)){
$return.="<img src='".wp_get_attachment_url($custom_image1,'large')."' alt='Awesome-Image'>";
}


$return.="<div class='icon-with-image-layout2-overlay'>";
$return.="<div class='icon-with-image-layout2-box'>";
$return.="<div class='icon-with-image-layout2-button'>";
if(!empty($btn_text1)) {
$return.="<a href='".$btn_link1['url']."'  target='".$target."'>";
$return.="$btn_text1 <span class='iconsmind-Right-3'></span>";
$return.="</a>";
}
$return.="</div>";
$return.="</div>";
$return.="</div>";
$return.="</div>";

if(!empty($text_content1)) {
$return.="<div class='icon-with-image-layout2-text-holder last-paragraph-no-margin'>";
$return.="<p>".$text_content1."</p>";
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
	
$return="<div id='".$uniqid."' class='icon-with-image-wrapper ins-icon-with-image-layout3 ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='icon-with-image-inner-layout3'>";	

$return.="<div class='icon-with-image-layout3-img-holder'>";
$return.="<div class='icon-with-image-layout3-icon'><span class='icon-with-image-layout3-icon-inner ".$icon_iconsmind1."'></span></div>";
if(!empty($custom_image1)){
$return.="<img src='".wp_get_attachment_url($custom_image1,'large')."' alt='Awesome-Image'>";
}                
$return.="<div class='icon-with-image-layout3-overlay'>";
$return.="<div class='icon-with-image-layout3-overlay-inner'>";
$return.="<div class='icon-with-image-layout3-text-holder'>";
if(!empty($text_content1)) {
$return.="<div class='icon-with-image-layout3-text-inner'>".$text_content1."</div>";
}
 $return.="</div>";
$return.="</div>";
$return.="</div>";
$return.="</div>";

$return.="<div class='icon-with-image-layout3-lower-box'>";
$return.="<div class='icon-with-image-layout3-lower-title'>";
if(!empty($title1)) {
$return.="<h4 class='icon-with-image-title margin-0px-bottom ".$title_font_weight1."'>".$title1."</h4>";
}

if(!empty($enable_button1)) {
$return.="<a class='icon-with-image-layout3-arrow-box pc-bg sc-bg-hover' href='".$btn_link1['url']."'  target='".$target."'><span class='iconsmind-Right-3'></span></a>";
}
$return.="</div>";
$return.="</div>";

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