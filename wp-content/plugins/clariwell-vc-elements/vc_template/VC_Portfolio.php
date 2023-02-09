<?php
/**
 *
 * Portfolio VC element by INSIGNIA
 *
 */

/*portfolio*/

add_action( 'vc_before_init', 'insignia_portfolio' );

function insignia_portfolio() {
 $terms = get_terms([
    'taxonomy' => 'portfolio_category',
    'hide_empty' => false,
]);
    $port_categories = array();
    foreach ($terms as $term) {
        $port_categories[$term->slug] = $term->slug;
    }


  vc_map (

 array(
      "name" => __( "Portfolio", "clariwell" ),
      "base" => "portfolio",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
	"class" => "font-awesome",
	"icon" => "fa fa-th",
       
      
      "params" => array(
          array(
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "group" => "General",
            "heading" => __( "Portfolio Layout", "clariwell" ),
            "param_name" => "port_layout",
            "admin_label" => true,
            "value"       => array(
	'Select Layout'   => 'Grid',       
	'Grid 2 Columns'   => 'port_grid2',
	'Grid 3 Columns'   => 'port_grid3',
	'Grid 4 Columns' => 'port_grid4',
	'Masonry 2 Columns'  => 'port_masonry2',
	'Masonry 3 Columns'  => 'port_masonry3',
	'Masonry 4 Columns'  => 'port_masonry4',
        'Portfolio Carousel' => 'port_carousel'
      ),
      ),

          array(
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "group" => "General",
            "heading" => __( "Animation on hover", "clariwell" ),
            "param_name" => "port_on_hover",
            "value"       => array(
	'Select Layout'   => 'default',       
	'Layout 1'   => 'layout_1',
	'Layout 2'   => 'layout_2'
      ),
      ),

          array(
            "type" => "checkbox",
            "class" => "",
            "edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Show Excerpt", "clariwell" ),
            "param_name" => "port_excerpt",
            "group" => "General",
	        'save_always' => true,
            "value"       =>  array('Yes'   => 'excerpt_on'),    
            'dependency' => array(
				'element' => 'port_on_hover',
				'value' => array('layout_5')
                ),     
      ),

          array(
            "type" => "checkbox",
            "class" => "",
            "edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Disable Item Image Hover", "clariwell" ),
            "param_name" => "disable_link",
            "group" => "General",
    	    'save_always' => true,
            "value"       =>  array('Yes'   => 'link_disable'),    
             'dependency' => array(
				'element' => 'port_on_hover',
				'value' => array('layout_5')
                ),     

      ),
        
          array(
            "type" => "checkbox",
            "class" => "",
            "edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Select Category", "clariwell" ),
            "param_name" => "port_cat",
            "group" => "General",
        	'save_always' => true,
            "value"       => $port_categories,
            "description" => __( "Select Categories. You can choose multiple categories", "clariwell" )

      ),

          array(
            "type" => "checkbox",
            "class" => "",
            "edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Show filter", "clariwell" ),
            "param_name" => "port_filter",
            "group" => "General",
	        'save_always' => true,
            "value"       =>  array('Yes'   => 'filter_on'),   
            'dependency' => array(
				'element' => 'port_layout',
				'value' => array('port_grid2', 'port_grid3', 'port_grid4', 'port_masonry2', 'port_masonry3', 'port_masonry4')
                ), 

      ),
          
          
          array(
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
            "group" => "General",
            "heading" => __( "Filter Button Layout", "clariwell" ),
            "param_name" => "filter_layout",
            "value"       => array(
        	'Select Layout'   => 'filter_default',       
        	'Simple'   => '_simple',
        	'Bordered'   => '_bordered',
        	'Solid Background' => '_solid_bg'
             ),
            'dependency' => array(
				'element' => 'port_filter',
				'value' => array('filter_on')				
                ),
      ),
      

          
  array(
            "type" => "textfield",
            "class" => "",
             "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Number of Posts to display.", "clariwell" ),
            "param_name" => "port_no_posts",
            "group" => "General",
            "value" => __( "", "clariwell" ),
              "description" => __( "You can choose limited number of posts to display on page.", "clariwell" )
            
         ),
          
          array(
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "group" => "General",
            "heading" => __( "Load More Options", "clariwell" ),
            "param_name" => "port_load_more",
            "value"       => array(
       
        'None'   => 'none',
        'Ajax Load more'   => 'ajax_button',
        'Numeric Pagination'  => 'pagination'
      ),
      'dependency' => array(
						'element' => 'port_layout',
						'value' => array('Grid','port_grid2','port_grid3','port_grid4','port_masonry2','port_masonry3','port_masonry4')
						
                ),

   ),

  array(
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Gap", "clariwell" ),
            "param_name" => "port_gap",
            "group" => "General",
            "value" => __( "", "clariwell" ),
            "description" => __( "Select gap between grid columns(in pixels).Enter Number only, do not add 'px'.", "clariwell" )
            
         ),

         array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Color to overlay image on hover", "clariwell" ),
            "param_name" => "port_overlay_color",
            "group" => "General",
            "value" => __( "", "clariwell" )
            
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
'dependency' => array(
						'element' => 'port_layout',
						'value' => array('Grid','port_grid2','port_grid3','port_grid4','port_masonry2','port_masonry3','port_masonry4')
						
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

                        ),



      array(
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-12 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Extra Class Name", "clariwell" ),
            "param_name" => "extra_class",
            "group" => "General",
            "value" => __( "", "clariwell" ),
              "description" => __( "Style particular content element differently - add a class name and refer to it in custom CSS.", "clariwell" )
            
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
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Title font size", "clariwell" ),
            "param_name" => "title_size",
            "group" => "Typography",
            "value" => __( "", "clariwell" ),
            "description" => __( "Select Portfolio title font-size(in pixels).Enter Number only, do not add 'px'.", "clariwell" )  
         ),
      array(
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Title Line Height", "clariwell" ),
            "param_name" => "title_line_height",
            "group" => "Typography",
            "value" => __( "", "clariwell" ),
            "description" => __( "Select Portfolio title line-height(in pixels).Enter Number only, do not add 'px'.", "clariwell" )  
         ),

          array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Title font color", "clariwell" ),
            "param_name" => "title_color",
            "group" => "Typography",
            "value" => __( "", "clariwell" ),
            "description" => __( "Select Portfolio title font color", "clariwell" )
            
         ),

          array(
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "group" => "Typography",
            "heading" => __( "Title text transform", "clariwell" ),
            "param_name" => "title_text_transform",
            "value"       => array(
				'None'   => 'default',       
				'Uppercase'   => 'text-uppercase',
				'Capitalize'   => 'text-capitalize',
				'Lowercase' => 'text-lowercase'
			  ),
      ),


      array(
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Category font size", "clariwell" ),
            "param_name" => "category_size",
            "group" => "Typography",
            "value" => __( "", "clariwell" ),
            "description" => __( "Select Portfolio category font-size(in pixels).Enter Number only, do not add 'px'.", "clariwell" ) 
         ),
      array(
            "type" => "textfield",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Category Line height", "clariwell" ),
            "param_name" => "category_line_height",
            "group" => "Typography",
            "value" => __( "", "clariwell" ),
            "description" => __( "Select Portfolio category line-height(in pixels).Enter Number only, do not add 'px'.", "clariwell" ) 
         ),

         array(
            "type" => "colorpicker",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "heading" => __( "Category font color", "clariwell" ),
            "param_name" => "category_color",
            "group" => "Typography",
            "value" => __( "", "clariwell" ),
            "description" => __( "Select Portfolio category font color", "clariwell" )
            
         ),
          array(
            "type" => "dropdown",
            "class" => "",
            "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
            "group" => "Typography",
            "heading" => __( "Category text transform", "clariwell" ),
            "param_name" => "category_text_transform",
            "value"       => array(
				'None'   => 'default',       
				'Uppercase'   => 'text-uppercase',
				'Capitalize'   => 'text-capitalize',
				'Lowercase' => 'text-lowercase'
			),
      ),

		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Autoplay", "clariwell" ),
		"param_name" => "portfolio_autoplay",
		"group" => "Carousel setting",
		"value"       => array(
		'True'   => 'true',
		'False'   => 'false'
		),
		"std"         => 'True',
		"description" => __( "Enable/Disable Autoplay.", "clariwell" ),
		"dependency" => array(
			'element' => 'port_layout',
			'value' => array('port_carousel')	
		),

		),
		array(
		"type" => "textfield",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Speed", "clariwell" ),
		"param_name" => "portfolio_speed",
		"group" => "Carousel setting",
		"value" => __( "3000", "clariwell" ),
		"description" => __( "Choose speed for carousel transition in milliseconds (Example:300).", "clariwell" ),
		"dependency" => array(
			'element' => 'port_layout',
			'value' => array('port_carousel')	
		),

		),
		array(
		"type" => "dropdown",
		"heading" => esc_html__( "Columns", 'clariwell' ),
		"param_name" => "portfolio_slidetoshow",
		"value" => array("Select Number of Columns", "4", "3", "2", "1" ),
		"group" => "Carousel setting",
		"description" => esc_html__( "Number of columns", 'clariwell' ),
		"dependency" => array(
			'element' => 'port_layout',
			'value' => array('port_carousel')	
		),
		),

		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Dots", "clariwell" ),
		"param_name" => "portfolio_navigation_dots",
		"group" => "Carousel setting",
		"value"       => array(
		'True'   => 'true',
		'False'   => 'false'
		),
		"std"         => '',
		"description" => __( "Dots for navigation.", "clariwell" ),
		"dependency" => array(
			'element' => 'port_layout',
			'value' => array('port_carousel')	
		),
		),
		
		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Arrows", "clariwell" ),
		"param_name" => "portfolio_navigation_arrows",
		"group" => "Carousel setting",
		"value"       => array(
		'True'   => 'true',
		'False'   => 'false'

		),
		"std"         => '',
		"description" => __( "Arrows for navigation.", "clariwell" ),
		"dependency" => array(
			'element' => 'port_layout',
			'value' => array('port_carousel')	
		),
		),
		
      array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'clariwell' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'clariwell' ),
        )


    )));
}



add_shortcode( 'portfolio', 'portfolio_shortcode' );


function portfolio_shortcode( $atts ) {
$css = '';
 extract( shortcode_atts( array(
 'port_layout' => 'port_grid3',
 'port_on_hover' => 'layout_1',
 'appear_effects' => '',
 'port_no_posts' => '',
 'port_cat' => '',
 'port_filter' => '',
 'port_excerpt' => '',
 'disable_link' => '',
 'filter_layout' => '',
 'filter_transitions' => '',
 'port_load_more' => '',
 'port_gap' => '30',
 'port_overlay_color' =>'',
 'portfolio_autoplay' => '',
 'portfolio_speed' => '1000',
 'portfolio_slidetoshow' => '4',
 'portfolio_navigation_dots' => 'true',
 'portfolio_navigation_arrows' => 'true',
 'css' => '',
 'orderby' => '',
 'order' => '',
 'extra_class' => '',
 'title_size' => '20',
 'title_line_height' => '30',
 'title_color' => '#2f353e',
 'title_text_transform' => '',
 'category_size' => '13',
 'category_line_height' => '20',
 'category_color' => '#2f353e',
 'category_text_transform' => '',
 'fieldName' => '',
 'css_animation'  => '',
 'ib_animation_delay'=> ''
   ), $atts ) );

global $post, $insignia_port_no_posts1, $insignia_port_out, $insignia_port_on_hover1, $insignia_appear_effects1, $insignia_port_filter1, $insignia_filter_layout1, $insignia_filter_transitions1, $insignia_port_cat1, $insignia_port_load_more1, $insignia_port_gap1, $insignia_port_overlay_color1, $insignia_css1, $portfolio_extra_class1, $insignia_title_size1, $insignia_title_line_height1, $insignia_title_color1, $insignia_title_text_transform1, $insignia_category_size1, $insignia_category_line_height1, $insignia_category_color1, $insignia_category_text_transform1, $insignia_port_excerpt1, $insignia_disable_link1, $insignia_orderby1, $insignia_order1, $insignia_portfolio_extra_class1, $insignia_portfolio_autoplay, $insignia_portfolio_speed, $insignia_portfolio_slidetoshow, $insignia_portfolio_dots, $insignia_portfolio_arrows, $css_animation1, $animation_delay;

        $insignia_port_out = ${'port_layout'};
        $insignia_port_on_hover1 = ${'port_on_hover'};
        $insignia_appear_effects1 = ${'appear_effects'};
        $insignia_port_no_posts1 = ${'port_no_posts'}; 
        $insignia_port_cat1 = ${'port_cat'};
        $insignia_port_load_more1 = ${'port_load_more'};
        $insignia_port_gap1  = ${'port_gap'};
        $insignia_port_overlay_color1 = ${'port_overlay_color'};
        $insignia_port_filter1 = ${'port_filter'};
        $insignia_port_excerpt1 = ${'port_excerpt'};
        $insignia_disable_link1 = ${'disable_link'};
        $insignia_filter_layout1 = ${'filter_layout'};
        $insignia_filter_transitions1 = ${'filter_transitions'};
        $insignia_portfolio_autoplay = ${'portfolio_autoplay'};
        $insignia_portfolio_speed = ${'portfolio_speed'};
        $insignia_portfolio_slidetoshow = ${'portfolio_slidetoshow'};
        $insignia_portfolio_dots = ${'portfolio_navigation_dots'};
        $insignia_portfolio_arrows = ${'portfolio_navigation_arrows'};
        $insignia_css1=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );
        $insignia_portfolio_extra_class1=${'extra_class'};
        $insignia_orderby1= ${'order'};
        $insignia_order1= ${'orderby'};
        $insignia_title_size1 = ${'title_size'};
        $insignia_title_line_height1 = ${'title_line_height'};
        $insignia_title_color1 = ${'title_color'};
        $insignia_title_text_transform1 = ${'title_text_transform'};
        $insignia_category_size1 = ${'category_size'};
        $insignia_category_line_height1 = ${'category_line_height'};
        $insignia_category_color1 = ${'category_color'};
        $insignia_category_text_transform1 = ${'category_text_transform'};
        $css_animation1=${'css_animation'};
       $ib_animation_delay1=${'ib_animation_delay'};


      //CSS Animation
            if ($css_animation1 == "no_animation") {
                $css_animation1 = "";
            }

          $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay1) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay1;
            }

      
       if(!isset($insignia_portfolio_extra_class1))
        $insignia_portfolio_extra_class1='';

       if(empty($insignia_port_no_posts1)){
        $insignia_port_no_posts1='-1'; }


$selected_cat = explode(',', $insignia_port_cat1);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	if(empty($insignia_port_cat1)){

	$args = array(
	'post_type' => 'portfolio',
	'orderby' => $orderby,
	'order' => $order, 
	'posts_per_page' => $insignia_port_no_posts1,
	'paged'=>$paged
);
} else{

	$args = array(
	'post_type' => 'portfolio',
	'orderby' => $orderby,
	'order' => $order, 
	'posts_per_page' => $insignia_port_no_posts1,
	'tax_query' => array(
		array(
			'taxonomy' => 'portfolio_category',
			'field'    => 'slug',
		 'terms' => $selected_cat
		),
	),
       'paged'=>$paged
	
);
}
	
	
		$posts = new WP_Query($args);
if ( $posts->have_posts() ) {
if($port_layout == "port_grid2" || $port_layout == "port_grid3" || $port_layout == "port_grid4")
{
	ob_start();
	include(locate_template('inc/templates/portfolio/archive/portfolio-grid-main.php'));
	$return_html = trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));
	return $return_html;
}

elseif($port_layout == "port_masonry2" || $port_layout == "port_masonry3" || $port_layout == "port_masonry4")  {
	ob_start();
	include(locate_template('inc/templates/portfolio/archive/portfolio-masonry-main.php'));
	$return_html = trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));
	return $return_html;
}

elseif($port_layout == "port_carousel")  {
	ob_start();
	include(locate_template('inc/templates/portfolio/archive/portfolio-carousel-main.php'));
	$return_html = trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));
	return $return_html;
}

else{
	ob_start();
	include(locate_template('inc/templates/portfolio/archive/portfolio-grid-main.php'));
	$return_html = trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));
	return $return_html;
}
}else{
	echo "<p class='alert alert-danger border-all '>No Portfolio found.</p>";
}
}