<?php
/**
 *
 * Image Gallery VC element by INSIGNIA
 *
 */

/*Carousel Gallery Element*/


add_action( 'vc_before_init', 'VC_image_gallery' );

function VC_image_gallery() {
  vc_map (

	array(
	"name" => __( "Image Gallery", "clariwell" ),
	"base" => "insignia_image_gallery",
	"class" => "",
	"category" => __( "Insignia", "clariwell"),
	"class" => "font-awesome",
	"icon" => "fa fa-picture-o",

	"params" => array(

		array(
		"type" => "dropdown",
		"class" => "",
		"heading" => __( "Select Design Style", "clariwell" ),
		"param_name" => "design_style",
		"group" => "General",
		"description" => __( "Select Gallery design you would like to use", "clariwell" ),
		"value"       => array(
		'full width gallery' => 'full_width',
		'Grid 2 columns'   => 'grid_2x',
		'Grid 3 columns'   => 'grid_3x',
		'Grid 4 columns'   => 'grid_4x',
		'Masonry 2 columns'   => 'masonry_2x',
		'Masonry 3 columns'   => 'masonry_3x',
		'Masonry 4 columns'   => 'masonry_4x',
		'Carousel Gallery '   => 'carousel'         

		),
		"std"         => '',

		),
		array(
		"type" => "attach_images",
		"class" => "",
		"heading" => __( "Select Multiple Images", "clariwell" ),
		"param_name" => "attach_images",
		"group" => "General",
		"value" => __( "", "clariwell" )

		),
		array(
		"type"        => "checkbox",
		"param_name" => "hover_text",
		"class" => "",
		"group" => "General",
		'save_always' => true,
		"value"         => array('Show Caption on Hover'   => '1' ),
	     'dependency' => array(
			'element' => 'design_style',
			'value' => array('full_width' ,'grid_2x', 'grid_3x', 'grid_4x', 'masonry_2x', 'masonry_3x', 'masonry_4x')
		),
				
		),

		array(
		"type" => "textfield",
		"class" => "",
		"heading" => __( "Gap", "clariwell" ),
		"param_name" => "gallery_gap",
		"group" => "General",
		"value" => __( "", "clariwell" ),
		"description" => __( "Select gap between grid columns(in pixels).Enter Number only, do not add 'px'.", "clariwell" )

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
		"type"        => "checkbox",
		"param_name" => "variable_width",
		"class" => "",
		"group" => "Carousel setting",
		'save_always' => true,
		"value"         => array('Disable Variable Width'   => '1' ),
	   "dependency" =>	array(
                "element" => "design_style",
                "value" => array("carousel")
        ),
				
		),

		array(
		"type" => "dropdown",
		"heading" => esc_html__( "Columns", 'clariwell' ),
		"param_name" => "slidetoshow",
		"value" => array("Select Number of Columns", "6", "5", "4", "3", "2", "1" ),
		"group" => "Carousel setting",
		"description" => esc_html__( "Number of columns", 'clariwell' ),
	    'dependency' => array(
						'element' => 'variable_width','design_style',
						'value' => array('1')
		),

		),

		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Dots", "clariwell" ),
		"param_name" => "navigation_dots",
		"group" => "Carousel setting",
		"value"       => array(

		'True'   => 'true',
		'False'   => 'false'

		),
		"std"         => '',
		"description" => __( "Dots for navigation.", "clariwell" ),
		"dependency" =>	array(
                "element" => "design_style",
                "value" => array("carousel")
        ),

		),
		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Arrows", "clariwell" ),
		"param_name" => "navigation_arrows",
		"group" => "Carousel setting",
		"value"       => array(

		'True'   => 'true',
		'False'   => 'false'

		),
		"std"         => '',
		"description" => __( "Arrows for navigation.", "clariwell" ),
		"dependency" =>	array(
                "element" => "design_style",
                "value" => array("carousel")
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


add_shortcode( 'insignia_image_gallery', 'insignia_image_gallery_shortcode' );
function insignia_image_gallery_shortcode( $atts,$content) {
extract( shortcode_atts( array(

	'design_style' => 'grid_3x',
	'attach_images' => '',
	'extra_class' => '',
	'gallery_gap' => '30',
	'navigation_arrows' => 'True',
	'navigation_dots' => 'True',
	'slidetoshow' => '4',
	'title' => '',
	'css' => '',
	'hover_text' => '',
	'variable_width' => '',
        'css_animation'  => '',
        'ib_animation_delay'=> '',
	), $atts ) );


$design_style1= ${'design_style'};
$extra_class1= ${'extra_class'};
$hover_text1= ${'hover_text'};
$gallery_gap1= ${'gallery_gap'};
$variable_width1= ${'variable_width'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};

$css1=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


$attach_images1= $atts['attach_images'];
$attach_images1= explode( ',', $attach_images1);

//CSS Animation
            if ($css_animation1 == "no_animation") {
                $css_animation1 = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay1) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay1;
            }


$uniqid = uniqid('ins-gallery-');

if($design_style1 == "carousel")
{

 
$return="<div id='".$uniqid."' class='".$extra_class1." ".$css1." inv-carousel-gallery inv-gallery-element-main-wrapper ".$css_animation1."' ".$animation_delay." style='margin: 0 -".$gallery_gap1/2 ."px;'>";

$return.="<div class='inv-grid-imgs-inner inv-carousel-imgs-inner clearfix' style='margin: 0 -".$gallery_gap1/2 ."px;'>";

foreach ($attach_images1 as $id) {

$attachment_caption = get_the_excerpt($id);

   $return.="<div class='inv-gallery-main inv-gallery-masonry-item-holder' style='padding: 0 ".$gallery_gap1/2 ."px; margin-bottom:".$gallery_gap1."px;'>";
   $return.="<div class='inv-gallery-imgs  inv-default-img-hover-wrapper'>";
$return.= wp_get_attachment_image($id,'full');

$return.="<a href='".wp_get_attachment_image_url($id,'full')."' class='inv-grid-gallery-link inv-popup-gallery'>";
$return.="</a>";

$return.="</div>";
$return.="</div>";

}
$return.="</div>";


$return.="</div>";


$return.=	'<script type="text/javascript">';
                      

$return.= 'jQuery("#'.$uniqid.' .inv-carousel-imgs-inner").slick({';
    
    $return.= " dots: $navigation_dots,";
    $return.= " arrows: $navigation_arrows,";
    if(!empty($variable_width1)) {
     $return.= " slidesToShow: $slidetoshow,";
    }
    $return.= " swipeToSlide: true,";
    if(empty($variable_width1)) {
    $return.= " variableWidth: true,";
    }
    $return.= " responsive: [";
    $return.= " {";
       $return.= " breakpoint: 1024,";
       $return.= " settings: {";
        if(!empty($variable_width1)) {
         $return.= " slidesToShow: 1,";
        }
        if(empty($variable_width1)) {
         $return.= " variableWidth: true,";
        }
       $return.= " }";
    $return.= "  },";
    $return.= "{";
       $return.= " breakpoint: 600,";
       $return.= " settings: {";
        if(!empty($variable_width1)) {
         $return.= " slidesToShow: 1,";
        }
        if(empty($variable_width1)) {
         $return.= " variableWidth: true,";
        }
       $return.= " }";
    $return.= "  },";
    $return.= "{";
       $return.= " breakpoint: 400,";
       $return.= " settings: {";
        if(!empty($variable_width1)) {
         $return.= " slidesToShow: 1,";
        }
        if(empty($variable_width1)) {
         $return.= " variableWidth: true,";
        }
       $return.= " }";
    $return.= "  }";
   
  $return.= "]";

  $return.= "});";
						$return.= "</script>";


    return $return;
    

}elseif( $design_style1 == "full_width" || $design_style1 == "grid_2x" || $design_style1 == "grid_3x" || $design_style1 == "grid_4x"){
$column_class = '';
if($design_style1 == "full_width"){
	$column_class = 'col-md-12 col-lg-12 col-sm-12 col-xs-12';
}elseif($design_style1 == "grid_2x"){
	$column_class = 'col-md-6 col-lg-6 col-sm-6 col-xs-12';
}elseif($design_style1 == "grid_3x"){
	$column_class = 'col-md-4 col-lg-4 col-sm-4 col-xs-12';
}elseif($design_style1 == "grid_4x"){
	$column_class = 'col-md-3 col-lg-3 col-sm-3 col-xs-12';
}

$return="<div id='".$uniqid."' class='".$extra_class1." ".$css1." inv-gallery-element-main-wrapper ".$css_animation1."' ".$animation_delay." style='margin: 0 -".$gallery_gap1/2 ."px;'>";

$return.="<div class='inv-grid-imgs-inner clearfix' style='margin: 0 -".$gallery_gap1/2 ."px;'>";


foreach ($attach_images1 as $id) {

$attachment_caption = get_the_excerpt($id);

   $return.="<div class='inv-gallery-main no-padding ".$column_class."'>";
    $return.="<div class='inv-gallery-grid-gap-wrapper' style='margin: 0 ".$gallery_gap1/2 ."px; margin-bottom:".$gallery_gap1."px;'>";
   $return.="<div class='inv-gallery-imgs inv-gallery-grid-imgs  inv-grid-img-hover-wrapper' style='background-image:url(".wp_get_attachment_image_url($id,'full').")'>";
$return.="<a href='".wp_get_attachment_image_url($id,'full')."' class='inv-grid-gallery-link inv-popup-gallery'>";
$return.="</a>";
$return.="</div>";

$return.='<div class="ins-gallery-overlay">';
	$return.='<div class="display-table width-100 height-100">';
	$return.='<div class="display-table-cell width-100 height-100 vertical-align-bottom position-relative overflow-hidden text-left padding-20px-tb padding-25px-lr">';
if(!empty($hover_text1)){
	if(!empty($attachment_caption)){
		$return.='<h4 class="text-white text-medium no-margin">'.$attachment_caption.'</h4>';
			}
		}		
	$return.='<div class="ins-gallery-icon"></div>';
	$return.='</div></div></div>';

$return.="</div>";
$return.="</div>";

}
$return.="</div>";


$return.="</div>";
    return $return;


}elseif($design_style1 == "masonry_2x" || $design_style1 == "masonry_3x" || $design_style1 == "masonry_4x"){

if($design_style1 == "masonry_2x"){
	$column_class = 'col-md-6 col-sm-6 col-xs-12';
}elseif($design_style1 == "masonry_3x"){
	$column_class = 'col-md-4 col-sm-4 col-xs-12';
}elseif($design_style1 == "masonry_4x"){
	$column_class = 'col-md-3 col-sm-3 col-xs-12';
}
 
$return="<div id='".$uniqid."' class='".$extra_class1." ".$css1." inv-gallery-element-main-wrapper ".$css_animation1."' ".$animation_delay." style='margin: 0 -".$gallery_gap1/2 ."px;'>";

$return.="<div class='inv-grid-imgs-inner clearfix' id='ms-container' style='margin: 0 -".$gallery_gap1/2 ."px;'>";

foreach ($attach_images1 as $id) {

$attachment_caption = get_the_excerpt($id);

   $return.="<div class='inv-gallery-main inv-gallery-masonry-item-holder ".$column_class." ms-item' style='padding: 0 ".$gallery_gap1/2 ."px; margin-bottom:".$gallery_gap1."px;'>";
   $return.="<div class='inv-gallery-imgs  inv-default-img-hover-wrapper'>";
$return.= wp_get_attachment_image($id,'full');


$return.='<div class="ins-gallery-overlay">';
$return.="<a href='".wp_get_attachment_image_url($id,'full')."' class='inv-grid-gallery-link inv-popup-gallery'>";
$return.="</a>";
	$return.='<div class="display-table width-100 height-100">';
	$return.='<div class="display-table-cell width-100 height-100 vertical-align-bottom position-relative overflow-hidden text-left padding-20px-tb padding-25px-lr">';
if(!empty($hover_text1)){
	if(!empty($attachment_caption)){
		$return.='<h4 class="text-white text-medium no-margin">'.$attachment_caption.'</h4>';
			}
		}		
	$return.='<div class="ins-gallery-icon"></div>';
	$return.='</div></div></div>';
$return.="</div>";
$return.="</div>";

}
$return.="</div>";


$return.="</div>";
    return $return;
}
}