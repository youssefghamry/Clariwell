<?php
/**
 *
 * Blockquotes VC element by INSIGNIA
 *
 */

add_action( 'vc_before_init', 'VC_ins_blockquotes' );

function VC_ins_blockquotes() {
	
	vc_map( array(
	"name" => esc_html__( "Blockquotes", "clariwell" ),
	"base" => "blockquotes",
	"class" => "font-awesome",
	"icon" => "fa fa-quote-right",
	"category" => __( "Insignia", "clariwell"),
	"params" => array(

		 array(
			"type" => "textfield",
			"heading" => esc_html__( "Cite", "clariwell" ),
			"param_name" => "cite",
			"value" => "John Doe",
			"admin_label" => true 
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Role", "clariwell" ),
			"param_name" => "role",
			"value" => "Businessman",
			"admin_label" => true 
		),
		 array(
			"type" => "textarea",
			"heading" => esc_html__( "Quote", "clariwell" ),
			"param_name" => "quote",
			"value" => "Great things in business are never done by one person. They are done by a team of people.",
			"admin_label" => true
		),
		
		 array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__("CSS Animation", "clariwell"),
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
			"type" => "dropdown",
			"heading" => esc_html__( "Content Alignment", "clariwell" ),
			"param_name" => "alignment",
			"value" => array(
				esc_html__( "Left", "clariwell" ) => "text-left",
				esc_html__( "Center", "clariwell" ) => "text-center",
				esc_html__( "Right", "clariwell" ) => "text-right",
			),
			"group" => esc_html__( "Design", "clariwell" )
		),	

		array(
			"type" => "colorpicker",
			"edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Text Color", "clariwell" ),
			"param_name" => "text_color",
			"group" => esc_html__( "Design", "clariwell" ),
			"value" => esc_html__( "#6f6f6f", "clariwell" ),
			"description" => esc_html__( " Choose Text Color.If you leave it empty, It will set default color", "clariwell" )
		 ),

		array(
			"type" => "colorpicker",
			"edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Cite Color", "clariwell" ),
			"param_name" => "cite_color",
			"group" => esc_html__( "Design", "clariwell" ),
			"value" => esc_html__( "#6f6f6f", "clariwell" ),
			"description" => esc_html__( " Choose Text Color.If you leave it empty, It will set default color", "clariwell" )
		 ),
		 
		array(
			"type" => "colorpicker",
			"edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => esc_html__( "Background Color", "clariwell" ),
			"param_name" => "bg",
			"group" => esc_html__( "Design", "clariwell" ),
			"value" => esc_html__( "#f7f7f7", "clariwell" ),
			"description" => esc_html__( " Choose Background Color.If you leave it empty, It will set default color", "clariwell" )
		 ),
				
		
	) )
);
	
}


function insignia_blockquotes( $atts, $content )
{
	extract( shortcode_atts( array(
		"cite" => esc_html__( 'John Doe','clariwell'),
		"role" => esc_html__( 'Businessman', 'clariwell'),
		"quote" => esc_html__( 'Great things in business are never done by one person. They are done by a team of people.', 'clariwell'),
		"alignment" => 'text-left',
		"text_color" => '#6f6f6f',
		"cite_color" => '#6f6f6f',
		'css_animation'  => '',
        'ib_animation_delay'=> '',
		"bg" => '#f7f7f7',
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
	
	
	$css_classes = array();
	
		$css_classes[] = 'ins-blockquotes';
		$css_classes[] = $alignment;
			
		
			$css_classes[] = 'pc-border';

	
	// Add icon
	
	$uniqid = uniqid('ins-blockquotes-');

		$css_rules = '';


		if($bg != '')
		$css_rules .= '#' . $uniqid .'.ins-blockquotes {background-color: '.$bg.';}';

	// Output
	
	$output = '<blockquote id="'.$uniqid.'" class="ins-blockquotes ' . implode( ' ', $css_classes ) . ' '.$css_animation.'" '.$animation_delay.'>';
	$output .= '<q style="color: '. $text_color .'">';
	$output .= $quote;
	$output .= '</q>';
	if(!empty($cite) || !empty($role)) {
	$output .= '<cite style="color: '. $cite_color .'" class="text-large display-block padding-20px-top">';
	$output .= $cite;
	$output .= '<span class="text-small display-block">';
	$output .= $role;
	$output .= '</span>';	
	$output .= '</cite>';
	}
	$output .= '</blockquote>';

$output .=	'<script type="text/javascript">
		(function(jQuery) {';

		if($css_rules != '') {
					$output .= 'jQuery("head").append("<style>'.$css_rules.'</style>")';
						}

					$output.=	'
					})(jQuery);
						</script>';
	return $output;
}

remove_shortcode( 'blockquotes' );
add_shortcode( 'blockquotes', 'insignia_blockquotes' );
