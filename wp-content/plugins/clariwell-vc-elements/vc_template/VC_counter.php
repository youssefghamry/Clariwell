<?php
/**
 *
 * Counter custom field
 *
 */

/*Counter Element*/

add_action( 'vc_before_init', 'VC_counter' );
function VC_counter() {
   vc_map( array(
      "name" => __( "Counter-Box", "clariwell" ),
      "base" => "counter",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
     	"class" => "font-awesome",
	"icon" => "fa fa-sort-numeric-asc",
      "params" => array(
          

  array(
			"type" => "textfield",
			"heading" => esc_html__( "Counter Title", "clariwell" ),
			"param_name" => "title",
                        "group" => "General",
                        "description" => esc_html__( "Your Counter title.", "clariwell" ),
			"value" => "Days"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Number value", "clariwell" ),
			"param_name" => "number",
                        "group" => "General",
			"description" => esc_html__( "Value of the counter number.", "clariwell" ),
			"value" => "100"
		),
		
		array(
            "type" => "textarea",
            "class" => "",
			"heading" => __( "Content", "clariwell" ),
            "param_name" => "icon_text",
            "group" => "General",
             "description" => __( "Description text of the counter box.", "clariwell" ),
             "value" => 'Counter text content, feel free to change it!' ,
		

         ),

		array(
			'type' => 'checkbox',
			'param_name' => 'add_icon',
                        "group" => "General",
                         'save_always' => true,
                    "value"         => array('Enable icon'   => '1' ),
          		'heading' => __( 'Enable icon?', 'clariwell' ),
			'description' => __( 'Enable icon in the counter.', 'clariwell' ),
		),

 array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Select Icon", "clariwell" ),
            "param_name" => "icon_layout",
            "group" => "General",
              "description" => __( "Select Counter Box Icon layout you would like to use", "clariwell" ),
             "value"       => array(
         'Select' => 'select',
        'Icon'   => 'ins-count-icon',
         'Custom Icon'   => 'ins-count-custom-icon',
        

         ),
      "std"         => '',
            'dependency' => array(
				'element' =>'add_icon',
				'value' => array('1')

			),   
         ),

                 array(
      "type" => "attach_image",
      "class" => "",
      "heading" => __( "Add Custom Icon", "clariwell" ),
      "param_name" => "custom_icon",
      "group" => "General",
       "value" => '',
       "description" => __( "Select Custom icon of your Counter box.", "clariwell" ),
        'dependency' => array(
				'element' =>'icon_layout',
				'value' => array('ins-count-custom-icon')

			),   
          ),
                
		 array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Select Layout", "clariwell" ),
            "param_name" => "count_layout",
            "group" => "General",
              "description" => __( "Select Counter Box layout you would like to use", "clariwell" ),
             "value"       => array(
         'Select' => 'select',
        'Default'   => 'default',
         'icon floated left'   => 'ins-counter-icon-align-left',
        

         ),
      "std"         => '',
            'dependency' => array(
				'element' =>'add_icon',
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
    			'dependency' => array(
    					'element' =>'icon_layout',
    					'value' => array('ins-count-icon')
                            ), 
            			   ),
		
 array(
            "type" => "dropdown",
            "class" => "",
              "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Alignment", "clariwell" ),
            "param_name" => "align",
            "group" => "General",
              "description" => __( "Specify alignment of the counter section.", "clariwell" ),
             "value"       => array(
         'Select' => 'select',
        'Left'   => 'text-left',
         'Right'   => 'text-right',
          'Center'   => 'text-center'
         ),
      "std"         => '',
         ),
         
		  array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __( "Text Transform", "clariwell" ),
           "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

            "param_name" => "text_transform",
            "group" => "General",
              "description" => __( "Title text transform.", "clariwell" ),
             "value"       => array(
       
       'Select' => '',
        'Uppercase'   => 'text-uppercase',
        'None'   => 'text-transform-none'
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
			"type" => "textfield",
			 "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"heading" => esc_html__( "Icon Font-size", "clariwell" ),
			"param_name" => "icon_size",
                        "group" => "Advanced",
                        "description" => esc_html__( "Your Counter icon font-size. Example:30", "clariwell" ),
			"value" => "",
                         'dependency' => array(
				'element' => 'icon_layout',
			      'value' => array('ins-count-icon')
               						
                ),

		),

       array(
			"type" => "textfield",
			 "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"heading" => esc_html__( "Number Font-size", "clariwell" ),
			"param_name" => "num_size",
                        "group" => "Advanced",
                        "description" => esc_html__( "Your Counter number font-size. Example:30", "clariwell" ),
			"value" => ""
		),
 array(
			"type" => "textfield",
			 "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"heading" => esc_html__( "Title Font-size", "clariwell" ),
			"param_name" => "title_size",
                        "group" => "Advanced",
                        "description" => esc_html__( "Your Counter title font-size. Example:20", "clariwell" ),
			"value" => ""
		),
		
 array(
			"type" => "dropdown",
			 "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"heading" => esc_html__( "Number Font-weight", "clariwell" ),
			"param_name" => "number_font_weight",
                        "group" => "Advanced",
                        "description" => esc_html__( "Select Counter number font-weight." , "clariwell" ),
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

			"heading" => esc_html__( "Title Font-weight", "clariwell" ),
			"param_name" => "title_font_weight",
                        "group" => "Advanced",
                        "description" => esc_html__( "Select Counter title font-weight.", "clariwell" ),
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
            "value" => __( "", "clariwell" ),
            "description" => __( " Choose a color for your counter.", "clariwell" ),
              'dependency' => array(
				'element' => 'icon_layout',
			      'value' => array('ins-count-icon')
               						
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
              "description" => __( " Choose a custom number color.", "clariwell" ),
              
               						
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
            'type' => 'css_editor',
            'heading' => __( 'Css', 'clariwell' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'clariwell' ),
        )
       
       )
   ) );
}

add_shortcode( 'counter', 'counter_shortcode' );
function counter_shortcode( $atts ) {

 extract( shortcode_atts( array(
      'title' => 'Days',
      'number' =>'100',
      'add_icon' => '',
      'icon_type'=>  '',
       'icon_iconsmind' => '',
       'extra_class'=>'',
       'css'=> '',
       'icon_size' => '34',
      'num_size' => '40',
      'title_size' => '20',
       'align' => '',
       'icon_color' => '',
       'num_color' => '',
       'title_color' => '',
       'text_transform' => '',
       'count_layout' => '',
       'icon_layout' => '',
       'custom_icon' => '' ,
       'number_font_weight' => '',
       'title_font_weight' => '',
       'title_letter_spacing' => 'no-letter-spacing',
		'css_animation'  => '',
        'ib_animation_delay'=> '',
		'icon_text' => '',
		'text_color' => ''
             
 ), $atts ) );


$title1= ${'title'};
$number1=${'number'};
$add_icon1=${'add_icon'};
$icon_type1=${'icon_type'};
$icon_iconsmind1=${'icon_iconsmind'};
$extra_class1=${'extra_class'};
$icon_size1=${'icon_size'};
$num_size1=${'num_size'};
$title_size1=${'title_size'};
$align1=${'align'};
$icon_color1=${'icon_color'};
$num_color1=${'num_color'};
$title_color1=${'title_color'};
$text_transform1=${'text_transform'};
$count_layout1=${'count_layout'};
$icon_layout1=${'icon_layout'};
$custom_icon1=${'custom_icon'};
$number_font_weight1=${'number_font_weight'};
$title_font_weight1=${'title_font_weight'};
$title_letter_spacing1=${'title_letter_spacing'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};
$icon_text1 = ${'icon_text'};
$text_color1 =${'text_color'};

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



$extra_classes = '';

$uniqid = uniqid('counter-');
	
		
$counter_css = '';

$line_height = $num_size1 + 5;
$line_height1 = $title_size1 + 5;
$line_height2 = $icon_size1 + 5;


if($num_size1 != '')
$counter_css .= '#' . $uniqid . ' .ins-counter-number{font-size: '.$num_size1.'px; line-height: '.$line_height.'px;}';

if($title_size1 != '')
$counter_css .= '#' . $uniqid . ' .ins-counter-title{font-size: '.$title_size1.'px; line-height: '.$line_height1.'px;}';

if($icon_size1!= '')
$counter_css .= '#' . $uniqid . ' .ins-counter-icon{font-size: '.$icon_size1.'px; line-height: '.$line_height2.'px;}';

if($num_color1!= '')
$counter_css .= '#' . $uniqid . ' .ins-counter-number{color: '.$num_color1.';}';

if($title_color1!= '')
$counter_css .= '#' . $uniqid . ' .ins-counter-title{color: '.$title_color1.';}';

if($icon_color1!= '')
$counter_css .= '#' . $uniqid . ' .ins-counter-icon{color: '.$icon_color1.'; }';

if($text_color1!= '')
$counter_css .= '#' . $uniqid . ' .ins-counter-box-text{color: '.$text_color1.'; }';


		
                   if($icon_layout1=="ins-count-icon"){
		
			
			
			$extra_classes = ' counter-with-icon';
		}
		
		// End Icon related
		
		$extra_style = '';
		
		
		$return = '<div id="' . $uniqid . '" class="ins-counter-element '.$align1.'  '. $extra_classes . ' '.$count_layout1.' '.$extra_class1.' '.$css1.' '.$css_animation1.'" '.$animation_delay.' data-perc="' . esc_attr( $number ) . '">';
                   if($icon_layout1=="ins-count-icon"){
			$return .= '<div class="ins-counter-icon margin-10px-bottom"><i class="' . $icon_iconsmind1 . '"></i></div>';
		}
                   if($icon_layout1=="ins-count-custom-icon"){

                   $return .= '<div class="ins-counter-icon margin-15px-bottom"><img src="'.wp_get_attachment_url($custom_icon1,'large').'"></div>';

                    }
		$return .= '<div class="ins-counter-content">';
		$return .= '<div class="ins-counter ins-counter-number title-font margin-10px-bottom '.$number_font_weight1.'">' . esc_html( $number1 ) . '</div>';
		if(!empty($title1 )) {

		$return .= '<div class="ins-counter-title margin-15px-bottom title-font '.$text_transform1.' '.$title_font_weight1.' '.$title_letter_spacing1.'">' . esc_html( $title1 ) . '</div>';
		}
		if(!empty($icon_text1 )) {
		$return.="<p class='ins-counter-box-text'>".$icon_text1."</p>";
		}
		$return .= '</div>';
		$return .= '</div>';

		$return.=	'<script type="text/javascript">
		(function(jQuery) {';

		if($counter_css != '') {
					$return.= 'jQuery("head").append("<style>'.$counter_css.'</style>")';
						}

					$return.=	'
					})(jQuery);
						</script>';

		
		return $return;
} 