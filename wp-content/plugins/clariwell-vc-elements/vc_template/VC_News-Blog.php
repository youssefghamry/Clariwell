<?php
/**
 *
 * News & Blog VC element by INSIGNIA
 *
 */



/*News & Blog*/

add_action( 'vc_before_init', 'insignia_blog' );

function insignia_blog() {
 $terms = get_terms('category', array('hide_empty' => false));
    $categories = array();
    foreach ($terms as $term) {
        $categories[$term->slug] = $term->slug;
    }

  vc_map (

 array(
      "name" => __( "News & Blog", "clariwell" ),
      "base" => "blog_news",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
       "class" => "font-awesome",
	"icon" => "fa fa-file-text",
       
      
      "params" => array(

          array(
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "group" => "General",
            "heading" => __( "Select Blog/News Style", "clariwell" ),
            "param_name" => "blog_style",
            "value"       => array(
	'Select Style'   => 'layout_0',       
	'Blog Grid'   => 'blog_grid',
	'Blog Image'  => 'blog_image',
	'Blog Masonry'  => 'blog_masonry',
	'Blog Classic'  => 'blog_classic',
	'Blog List'  => 'blog_list'
      ),
      ),

          array(
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "group" => "General",
            "heading" => __( "Blog/News Layout", "clariwell" ),
            "param_name" => "blog_layout",
             "admin_label" => true,
            "value"       => array(
	'Select Layout'   => 'Grid',       
	'2 Columns'   => '2Columns',
	'3 Columns'   => '3Columns',
	'4 Columns'   => '4Columns',
    'Blog Carousel' => 'Carousel'
      ),
      'dependency' => array(
				'element' => 'blog_style',
				'value' => array('blog_grid','blog_image','blog_masonry')
						
                ),
      ),
        
          array(
            "type" => "checkbox",
            "class" => "",
            "edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Select Category", "clariwell" ),
            "param_name" => "post_cat",
            "group" => "General",
	        'save_always' => true,
            "value"       => $categories,
            "description" => __( "Select Categories. You can choose multiple categories", "clariwell" )
            

      ),
          
  array(
            "type" => "textfield",
            "class" => "",
      "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Number of Posts to display.", "clariwell" ),
            "param_name" => "blog_no_posts",
            "group" => "General",
            "value" => __( "", "clariwell" ),
             "admin_label" => true,            
              "description" => __( "You can choose limited number of posts to display on page.", "clariwell" )
            
         ),
          
          array(
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "group" => "General",
            "heading" => __( "Pagination Options", "clariwell" ),
            "param_name" => "blog_load_more",
            "value"       => array(
       
        'None'   => 'none',
        'Numeric Pagination'  => 'pagination'
        
        
      ),


   ) ,

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
      'dependency' => array(
				'element' => 'blog_style',
				'value' => array('blog_grid','blog_image','blog_masonry','blog_list')
						
                ),
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
                            "description" => esc_html__("Enter animation delay in ms", "clariwell"),
      'dependency' => array(
				'element' => 'blog_style',
				'value' => array('blog_grid','blog_image','blog_masonry','blog_list')
						
                ),
                        ),

		array(
			"type" => "textfield",
			"class" => "",
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
			"heading" => __( "Gap", "clariwell" ),
			"param_name" => "blog_gap",
			"group" => "General",
			"value" => __( "", "clariwell" ),
			"description" => __( "Select gap between grid columns(in pixels).Enter Number only, do not add 'px'.", "clariwell" ),
			'dependency' => array(
			'element' => 'blog_style',
			'value' => array('blog_grid','blog_image','blog_masonry')
		),
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
            "type" => "checkbox",
            "class" => "",
            "edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Hide Date", "clariwell" ),
            "param_name" => "hide_date",
            "group" => "General",
            "value" => array(
                esc_html__( "Yes", "clariwell") => "yes",
            ),
      ),
          
          array(
            "type" => "checkbox",
            "class" => "",
            "edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Hide Author", "clariwell" ),
            "param_name" => "hide_author",
            "group" => "General",
            "value" => array(
                esc_html__( "Yes", "clariwell") => "yes",
            ),
      ),     

   		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Autoplay", "clariwell" ),
		"param_name" => "blog_autoplay",
		"group" => "Carousel setting",
		"value"       => array(
		'True'   => 'true',
		'False'   => 'false'
		),
		"std"         => 'True',
		"description" => __( "Enable/Disable Autoplay.", "clariwell" ),
		"dependency"		=> array(
			'element' => "blog_layout",
			'value' => array("Carousel")
		),

		),
		array(
		"type" => "textfield",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Speed", "clariwell" ),
		"param_name" => "blog_speed",
		"group" => "Carousel setting",
		"value" => __( "3000", "clariwell" ),
		"description" => __( "Choose speed for carousel transition in milliseconds (Example:300).", "clariwell" ),
		"dependency"		=> array(
			'element' => "blog_layout",
			'value' => array("Carousel")
		),

		),
		array(
		"type" => "dropdown",
		"heading" => esc_html__( "Columns", 'clariwell' ),
		"param_name" => "blog_slidetoshow",
		"value" => array("Select Number of Columns", "4", "3", "2", "1" ),
		"group" => "Carousel setting",
		"description" => esc_html__( "Number of columns", 'clariwell' ),
		"dependency"		=> array(
			'element' => "blog_layout",
			'value' => array("Carousel")
		),
		),

		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Dots", "clariwell" ),
		"param_name" => "blog_navigation_dots",
		"group" => "Carousel setting",
		"value"       => array(
		'True'   => 'true',
		'False'   => 'false'
		),
		"std"         => '',
		"description" => __( "Dots for navigation.", "clariwell" ),
		"dependency"		=> array(
			'element' => "blog_layout",
			'value' => array("Carousel")
		),

		),
		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Arrows", "clariwell" ),
		"param_name" => "blog_navigation_arrows",
		"group" => "Carousel setting",
		"value"       => array(

		'True'   => 'true',
		'False'   => 'false'

		),
		"std"         => '',
		"description" => __( "Arrows for navigation.", "clariwell" ),
		"dependency"		=> array(
			'element' => "blog_layout",
			'value' => array("Carousel")
		),

		),

         
		array(
		"type" => "dropdown",
		"description" => esc_html__( "Sort/order your posts by a certain value.", 'clariwell' ),
		"class" => "hidden-label",
		"heading" => esc_html__( "Order posts by", "clariwell" ),
		"param_name" => "orderby",
		"value" => array(
			esc_html__( "Date", 'clariwell' ) => "date",
			esc_html__( "None - no order", 'clariwell' ) => "none",
			esc_html__( "Post ID", 'clariwell' ) => "ID",
			esc_html__( "Author", 'clariwell' ) => "author",
			esc_html__( "Title", 'clariwell' ) => "title",
			esc_html__( "Name (slug)", 'clariwell' ) => "name",
			esc_html__( "Menu Order", 'clariwell' ) => "menu_order" 
		),
		"group" => esc_html__( "Order Settings", "clariwell" ) 
		),
		array(
			"type" => "dropdown",
			"description" => esc_html__( "Posts order.", 'clariwell' ),
			"class" => "hidden-label",
			"heading" => esc_html__( "Posts order", "clariwell" ),
			"param_name" => "order",
			"value" => array(
				esc_html__( "Descending (DESC)", 'clariwell' ) => "DESC",
				esc_html__( "Ascending (ASC)", 'clariwell' ) => "ASC" 
			),
			"group" => esc_html__( "Order Settings", "clariwell" ) 
		),
		
         
        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'clariwell' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'clariwell' ),
        ),
   
   )));
}

add_shortcode( 'blog_news', 'blog_news' );


function blog_news( $atts ) {
$css = '';
extract( shortcode_atts( array(
	'blog_layout' => '3Columns',
	'blog_style' => 'blog_grid',
	'blog_gap' => '30',
	'hide_author' => '',
	'hide_date' => '',
	'post_appear_effects' => '',
	'blog_no_posts' => '',
	'post_cat' => '',
	'blog_load_more' => '',
	'fieldName' => '',
	'blog_layout' => '',
	'blog_navigation_arrows' => 'true',
	'blog_navigation_dots' => 'true',
	'blog_slidetoshow' => '4',
	'blog_speed' => '1000',
	'blog_autoplay' => '',
	'orderby' => '',
	'order' => '',
    'css' => '',
    'extra_class' => '',
        'css_animation'  => '',
        'ib_animation_delay'=> ''

   ), $atts ) );

global $post,$post_count, $insignia_blog_no_posts1, $insignia_blog_out, $insignia_blog_style1, $insignia_post_cat1, $insignia_post_appear_effects1, $insignia_blog_load_more1, $insignia_css1, $insignia_blog_extra_class1, $insignia_hide_author1, $insignia_blog_gap1, $insignia_hide_date1, $insignia_orderby1, $insignia_order1, $insignia_paged, $insignia_count, $insignia_blog_arrow, $insignia_blog_dots, $insignia_blog_slidetoshow, $insignia_blog_speed, $insignia_blog_autoplay, $css_animation1;

	$insignia_blog_out = ${'blog_layout'};
	$insignia_blog_style1 = ${'blog_style'};
	$insignia_blog_no_posts1 = ${'blog_no_posts'}; 
	$insignia_post_cat1 = ${'post_cat'};
	$insignia_post_appear_effects1 = ${'post_appear_effects'};
	$insignia_blog_load_more1 = ${'blog_load_more'};
	$insignia_blog_gap1= ${'blog_gap'};
	$insignia_hide_author1= ${'hide_author'};
	$insignia_hide_date1= ${'hide_date'};
	$insignia_orderby1= ${'order'};
	$insignia_order1= ${'orderby'};
    $insignia_blog_extra_class1=${'extra_class'};
	$insignia_blog_arrow = ${'blog_navigation_arrows'};
	$insignia_blog_dots = ${'blog_navigation_dots'};
	$insignia_blog_slidetoshow = ${'blog_slidetoshow'};
	$insignia_blog_speed = ${'blog_speed'};
	$insignia_blog_autoplay = ${'blog_autoplay'};
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

      if(!isset($insignia_blog_extra_class1)){
      $insignia_blog_extra_class1=''; }

      if(empty($insignia_blog_no_posts1)){
      $insignia_blog_no_posts1='-1'; }


$insignia_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

if(empty($insignia_post_cat1)){

$args = array(
	'post_type' => 'post',
	'orderby' => $orderby,
	'order' => $order, 
	'posts_per_page' => $insignia_blog_no_posts1,
    'paged' => $insignia_paged
	); 
} else{

$args = array(
	'post_type' => 'post',
	'orderby' => $orderby,
	'order' => $order,
	'posts_per_page' => $insignia_blog_no_posts1,
	'category_name' => $insignia_post_cat1,
    'paged' => $insignia_paged
	);
}
$lmb = array(
	'post_type' => 'post',
	'orderby' => $orderby,
	'order' => $order,
	
	'category_name' => $insignia_post_cat1,
    'paged' => $insignia_paged
	);

		$posts = new WP_Query($args);
		$post_count = new WP_Query($lmb);


if ( $posts->have_posts() || $post_count->have_posts() )  {
if($blog_layout == "Carousel"){

    ob_start();
	include(locate_template('inc/templates/blog/archive/blog-carousel.php'));
	$return_html = trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));
	return $return_html;

}

elseif($blog_style == "blog_masonry")  {
	ob_start();
	include(locate_template('inc/templates/blog/archive/blog-masonry-main.php'));
	$return_html = trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));
	return $return_html;
}

elseif($blog_style == "blog_grid" || $blog_style == "blog_image" || $blog_style == "blog_classic" || $blog_style == "blog_list" && $blog_layout != "Carousel" )
{
	ob_start();
	include(locate_template('inc/templates/blog/archive/blog-grid-main.php'));
	$return_html = trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));
	return $return_html;
}
else{
	ob_start();
	include(locate_template('inc/templates/blog/archive/blog-masonry-main.php'));
	$return_html = trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));
	return $return_html;
}
}else{
	echo "<p class='alert alert-danger border-all'>No Post found.</p>";
}
}
    function insignia_global_vars() 
    {        
       global $post,$post_count, $insignia_blog_no_posts1, $insignia_blog_out, $insignia_blog_style1, $insignia_post_cat1, $insignia_post_appear_effects1, $insignia_blog_load_more1, $insignia_blog_auto1, $insignia_blog_speed1, $insignia_blog_slidetoshow1, $insignia_blog_slidetoscroll1, $insignia_blog_dots, $insignia_blog_arrows, $insignia_blog_rows1, $insignia_blog_slidesperrow1, $insignia_blog_infinite1, $insignia_css1, $insignia_blog_extra_class1, $insignia_blog_gap1, $insignia_orderby1, $insignia_order1, $insignia_paged, $insignia_count, $css_animation1, $animation_delay;  
    }

    add_action( 'parse_query', 'insignia_global_vars' );
