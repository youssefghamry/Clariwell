<?php
/**
 *
 * Message box VC element by INSIGNIA
 *
 */

add_action( 'vc_before_init', 'VC_ins_message_box' );

function VC_ins_message_box() {
	
	vc_map( array(
	"name" => esc_html__( "Message Box", "clariwell" ),
	"base" => "message_box",
	"class" => "font-awesome",
	"icon" => "fa fa-exclamation-circle",
	"category" => __( "Insignia", "clariwell"),
	"params" => array(
		array(
			"type" => "dropdown",
			"class" => "hidden-label",
			"value" => array(
				esc_html__( "Success", "clariwell" ) => 'alert-success',
				esc_html__( "Info", "clariwell" ) => 'alert-info', 
				esc_html__( "Warning", "clariwell" ) => 'alert-warning', 
				esc_html__( "Danger", "clariwell" ) => 'alert-danger' 
			),
			"heading" => esc_html__( "Message Type", "clariwell" ),
			"param_name" => "message_type" 
		),	
		 array(
			"type" => "textfield",
			"heading" => esc_html__( "Box Title", "clariwell" ),
			"param_name" => "title",
			"description" => esc_html__( "Your Message Box title", "clariwell" ),
			"value" => "Success!",
			"admin_label" => true 
		),
		 array(
			"type" => "textfield",
			"heading" => esc_html__( "Box Message", "clariwell" ),
			"param_name" => "message",
			"description" => esc_html__( "Your Message Box Message Text", "clariwell" ),
			"value" => "This alert box indicates a successful or positive action.",
			"admin_label" => true
		),
		array(
			"type" => "dropdown",
			"class" => "hidden-label",
			"value" => array(
				esc_html__( "Dismissible", "clariwell" ) => 'alert-dismissible',
				esc_html__( "Not Dismissible", "clariwell" ) => '' 
			),
			"heading" => esc_html__( "Dismissible?", "clariwell" ),
			"description" => esc_html__( 'To close the alert message Box.', "clariwell" ),
			"param_name" => "dismissible" 
		),


 
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Background Color", "clariwell" ),
				"param_name" => "bg",
				"value" => array(
					esc_html__( "Default", "clariwell" ) => "",
					esc_html__( "White", "clariwell" ) => "white",
					esc_html__( "None", "clariwell" ) => "transparent",
				),
				"group" => esc_html__( "Design", "clariwell" ),
				"description" => esc_html__( "Choose the Message box background color.", "clariwell" )
			),

			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Box Border", "clariwell" ),
				"param_name" => "border",
				"value" => array(
					esc_html__( "On", "clariwell" ) => "",
					esc_html__( "Off", "clariwell" ) => "border-none",
				),
				"group" => esc_html__( "Design", "clariwell" ),
				"description" => esc_html__( "Choose the message box border.", "clariwell" )
			),			
			
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Box Border Radius", "clariwell" ),
			"param_name" => "border_radius",
			"value" => array(
				esc_html__( "Theme Defaults", "clariwell" ) => "default",
				esc_html__( "None", "clariwell" ) => "border-radius-none",
			),
			"group" => esc_html__( "Design", "clariwell" )
		),		
		
	) )
);
	
}


function insignia_message_box( $atts, $content )
{

	$icon_type = 'fontawesome';
	$defaultIconClass = 'fa fa-info-circle';
	
	extract( shortcode_atts( array(
		"message_type" => 'alert-success',
		"dismissible" => 'alert-dismissible',
		"title" => esc_html__( 'Success!', 'clariwell'),
		"message" => esc_html__( 'This alert box indicates a successful or positive action.', 'clariwell'),
		"border_radius" => 'default',
		"bg" => 'gray',
		"border" => 'border-all',
     
	), $atts ) );
	
	$css_classes = array();
	
	if ( $border_radius && $border_radius != 'default' ) {
		$css_classes[] = 'border-radius-none';
	}
	
		$css_classes[] = 'bg-' . $bg;
		$css_classes[] = $border;
		$css_classes[] = $dismissible;
	
	// Add icon
	
	$uniqid = uniqid('ins-message-');
	// Output
	
	$output = '<div id="'.$uniqid.'" class="alert '. $message_type .' ' . implode( ' ', $css_classes ) . '">';
	if ( $dismissible == 'alert-dismissible' ) {
	$output .= '<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">';
	$output .= 'x';
	$output .= '</a>';
	}
	$output .= '<strong>';
	$output .= $title;
	$output .= '</strong>';
	$output .= ' ';
	$output .= $message;
	$output .= '</div>';
	return $output;
}

remove_shortcode( 'message_box' );
add_shortcode( 'message_box', 'insignia_message_box' );