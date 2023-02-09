<?php
/**
 *
 * Image Box VC element by INSIGNIA
 *
 */

/*Image Box Element*/


add_action( 'vc_before_init', 'VC_image_box' );

function VC_image_box() {
  vc_map (

 array(
      "name" => __( "Image Box", "clariwell" ),
      "base" => "insignia_image_box",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
	"class" => "font-awesome",
	"icon" => "fa fa-file-image-o",        
       
      "params" => array(

        array(
			"type" => "attach_image",
			"class" => "",
			"heading" => __( "Add Image", "clariwell" ),
			"param_name" => "custom_image",
			"group" => "General",
			"value" => '',
			"description" => __( "Select image of your image box.", "clariwell" )
          ),

        array(
            "type" => "textfield",
            "class" => "",
             
            "heading" => __( "Title", "clariwell" ),
            "param_name" => "image_title",
            "group" => "General",
            "value" => 'Image Box Title ' ,
           
            "description" => __( "The title of your image box.", "clariwell" ),

            ),

        array(
            "type" => "textfield",
            "class" => "",
             
            "heading" => __( "Number Before Title", "clariwell" ),
            "param_name" => "number_box",
            "group" => "General",
            "value" => __( "", "clariwell" ),
           
            "description" => __( "Number before title of your image box.", "clariwell" ),

            ),
          
        array(
            "type" => "textarea",
            "class" => "",
             
            "heading" => __( "Text Content", "clariwell" ),
            "param_name" => "image_text",
            "group" => "General",
            "description" => __( "Description text of the icon box.", "clariwell" ),
            "value" => 'Image Box text content, feel free to change it!' 

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
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Alignment", "clariwell" ),
            "param_name" => "box_align",
            "group" => "General",
            "description" => __( "Specify alignment of the image box.", "clariwell" ),
            "value"       => array(
			'Select' => 'select',
			'Left'   => 'text-left',
			'Right'   => 'text-right',
			'Center'   => 'text-center',
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
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Title Font Size", "clariwell" ),
            "param_name" => "title_font",
            "group" => "Advanced",
            "description" => __( "Select title font size.", "clariwell" ),
            "value"       => array(
       
					'Select' => '',
					'Theme Default'   => 'text-extra-large',
					'Extra Small'   => 'text-extra-small',
					'Small'   => 'text-small',
					'Medium'   => 'text-medium',        
					'Large'   => 'text-large',
					'Extra Large'   => 'text-extra-large'
					),
					
					"std"         => '',
            
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
            "heading" => __( "Title Color", "clariwell" ),
            "param_name" => "title_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
            "description" => __( " Choose Title Color.If you leave it empty, It will set default color", "clariwell" ),

 ),
 array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Number Color", "clariwell" ),
            "param_name" => "number_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
            "description" => __( " Choose Number Color.If you leave it empty, It will set default color", "clariwell" ),
 ),
             
        array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Text Color", "clariwell" ),
            "param_name" => "text_color",
            "group" => "Advanced",
            "value" => __( "", "clariwell" ),
            "description" => __( " Choose Text Color.If you leave it empty, It will set default color", "clariwell" ),
		
           
             ),

            array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'clariwell' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'clariwell' ),
        ),

   ) ));
}

add_shortcode( 'insignia_image_box', 'insignia_image_box_shortcode' );
function insignia_image_box_shortcode( $atts,$content) {

 extract( shortcode_atts( array(
     'custom_image' => '',
     'image_title' => esc_html__( 'Image Box Title', "clariwell" ),
     'image_text' => esc_html__( 'Image Box text content, feel free to change it!', "clariwell" ),
     'enable_button' => '',
     'btn_text' => '',
     'extra_class'=>'',
     'css' => '',
     'title_color' => '',
     'text_color' => '',
     'title_font' => '',
     'text_font' => '',
     'title_font_weight' => '',
     'btn_font_weight' =>'',
     'number_box' => '',
     'number_color' => '' ,
     'btn_link' => '',
     'css_animation'  => '',
     'ib_animation_delay'=> '',
     'box_align'=> '' 

                                
   ), $atts ) );


global $extra_class1,$layout_style1,$custom_image1,$image_title1,$image_text1,$enable_button1,$btn_text1,$btn_link1,$css1,$title_color1,$text_color1,$btn_color1,$title_font1,$text_font1,$ins_bg_color1,$box_align1,$title_font_weight1,$btn_font_weight1,$number_box1,$number_color1;

$extra_class1=${'extra_class'};
$custom_image1=${'custom_image'};
$image_title1=${'image_title'};
$image_text1=${'image_text'};
$enable_button=${'enable_button'};
$btn_text1=${'btn_text'};
$btn_link1=${'btn_link'};
$title_color1=${'title_color'};
$text_color1=${'text_color'};
$title_font1=${'title_font'};
$text_font1=${'text_font'};
$title_font_weight1=${'title_font_weight'};
$btn_font_weight1=${'btn_font_weight'};
$number_box1=${'number_box'};
$number_color1=${'number_color'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};
$box_align1=${'box_align'};

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


$btn_link1= vc_build_link($btn_link1);

if(!empty($btn_link1['target'])) {
    $target= $btn_link1['target'];
}else{
   $target= '_self'; 
}



$uniqid = uniqid('ins-image-box');
$css_rules = '';
if($title_color1 != '')
$css_rules .= '#' . $uniqid . ' .ins-image-box-title-inner {color: '.$title_color1.';}';

if($text_color1!= '')
$css_rules .= '#' . $uniqid . ' .ins-image-box-text, #' . $uniqid . ' .ins-image-box-5-text, , #' . $uniqid . ' .ins-image-box-6-text {color: '.$text_color1.';}';



if($number_color1 != '')
$css_rules .= '#' . $uniqid . ' .ins-image-box-number {color: '.$number_color1.';}';

if(empty($title_font1)){
   $title_font1= 'text-extra-large';
}

if(empty($ins_bg_color1)){
   $ins_bg_color1= 'transparent';
}

$return="<div id='".$uniqid."' class='ins-image-box-wrapper ins-image-box-style-1 ".$box_align1." ".$extra_class1." ".$css1." ".$css_animation1."' ".$animation_delay.">";
$return.="<div class='ins-image-box-inner'>";

if(!empty($custom_image1)){
$return.="<div class='ins-image-box-img text-center'>";
$return.="<a class='ins-image-box-img-link' href='".$btn_link1['url']."' target='".$target."'>";
$return.="<img src='".wp_get_attachment_url($custom_image1,'large')."' alt='image-box'>";
$return.="</a>";
$return.="</div>";
}
$return.="<div class='ins-image-content-wrapper last-paragraph-no-margin'>";
$return.="<div class='ins-image-box-content-inner'>";
if(!empty($image_title1)){
$return.="<div class='ins-image-box-title margin-10px-bottom'>";
$return.="<h6 class='ins-image-box-title-inner letter-spacing-05 title-font font-weight-500 display-block margin-0px-bottom  ".$title_font1." ".$title_font_weight1."'><span class='ins-image-box-number'>".$number_box1."</span> ".$image_title1."</h6>";
$return.="</div>";
}
if(!empty($image_text1)){
$return.="<p class='ins-image-box-text ".$text_font1."'>".$image_text1."</p>";
}
if(!empty($btn_text1)) {
$return.="<div class='ins-icon-box-btn-wrap margin-15px-top'>";
$return.="<a class='ins-image-box-btn  title-font pc' href='".$btn_link1['url']."' target='".$target."'>";
$return.=$btn_text1;
$return.="</a>";
$return.="</div>";

}
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