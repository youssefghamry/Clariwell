<?php
/**
 *
 * Table VC element by INSIGNIA
 *
 */

add_action( 'vc_before_init', 'VC_table' );

function VC_table() {
  vc_map (

 array(
		"name" => __( "Table", "clariwell" ),
		"base" => "insignia_table",
		"class" => "",
		"category" => __( "Insignia", "clariwell"),
		"class" => "font-awesome",
		"icon" => "fa fa-table",
		"params" => array(
      
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __( "Table layout", "clariwell" ),
			"param_name" => "table_layout",
			"group" => "General",
			"description" => __( "Select table layout you would like to use", "clariwell" ),
			"value"       => array(
				'Select Layout'   => 'ins-table-style-1',
				'Style 1'   => 'ins-table-style-1',
				'Style 2'   => 'ins-table-style-2',
				'Style 3'   => 'ins-table-style-3'
				
				),
			"std"         => '',
			),

          array(
            "type" => "textarea_html",
            "class" => "",
            
            "heading" => __( "Table content", "clariwell" ),
            "param_name" => "content",
            "group" => "General",
             "value" => __( "<p class='xyz'>I am test text block. Click edit button to change this text.</p>", "clariwell" )
     
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
			'type' => 'css_editor',
			'heading' => __( 'Css', 'clariwell' ),
			'param_name' => 'css',
			'group' => __( 'Design options', 'clariwell' ),
		),

         ) ));
    }

add_shortcode( 'insignia_table', 'insignia_table_shortcode' );
function insignia_table_shortcode( $atts,$content) {

extract( shortcode_atts( array(

		'table_layout' => '',
		'extra_class'=>'',
		'css'=> '',
        'content' => $content,
        'css_animation'  => '',
        'ib_animation_delay'=> ''

   ), $atts ) );
   
 //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay;
            }  
   

$css1=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );

if(!empty($content)) {

$return="<div class='ins-table-wrapper ".$table_layout." ".$extra_class." ".$css1." ".$css_animation."' ".$animation_delay.">";

$return.="<p>".$content."</p>";

$return.="</div>";

return $return;

}
}