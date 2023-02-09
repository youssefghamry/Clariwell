<?php
/*Testimonial Element*/

add_action( 'vc_before_init', 'your_name_integrateWithVC' );
function your_name_integrateWithVC() {

	vc_map( array(
	"name" => __( "Testimonials", "clariwell" ),
	"base" => "testimonial",
	"class" => "",
	'icon' => 'my_bartag',
	"category" => __( "Insignia", "clariwell"),
	"class" => "font-awesome",
	"icon" => "fa fa-quote-right",
	"params" => array(
		array(
		"type" => "dropdown",
		"class" => "",
		"heading" => __( "Select Testimonial Layout", "clariwell" ),
		"param_name" => "testimonial_layout",
		"value"       => array(
		'Layout 1'   => 'style-1',
		'Layout 2'   => 'style-2'
		),
		"std"         => 'Layout 1',
		),

		array(
		"type" => "dropdown",
		"heading" => esc_html__( "Content Alignment", 'clariwell' ),
		"param_name" => "alignment",
		"value"       => array(
		    "Left"   => "text-left",
	    	"Center"   => "text-center"
		),
		'dependency' => array(
			'element' =>'testimonial_layout',
			'value' => array('style-2')
			),   
		),

		array(
		"type" => "checkbox",
		"class" => "",
		"value" => ensign_taxonomies_array( 'testimonial_category' ),
		"heading" => esc_html__( "Testimonial Categories", "clariwell" ),
		"param_name" => "cats",
		"admin_label" => true,
		"description" => esc_html__( "Select testimonial categories to be displayed. Leave blank for all.", "clariwell" ) 
		),
		array(	      
		"type" => "textfield",
		"class" => "hidden-label",
		"heading" => esc_html__( "Number of posts to show", 'clariwell' ),
		"param_name" => "posts_nr",
		"value" => "8"
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
		"type" => "textfield",
		"class" => "",

		"heading" => __( "Extra Class Name", "clariwell" ),
		"param_name" => "extra_class",
		"value" => __( "", "clariwell" ),
		  "description" => __( "Style particular content element differently - add a class name and refer to it in custom CSS.", "clariwell" )

		),

		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Autoplay", "clariwell" ),
		"param_name" => "autoplay",
		"group" => "Carousel setting",
		"value"       => array(

		'True'   => 'true',
		'False'   => 'false'

		),
		"std"         => 'True',

		"description" => __( "Enable/Disable Autoplay.", "clariwell" )

		),
		array(
		"type" => "textfield",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Speed", "clariwell" ),
		"param_name" => "speed",
		"group" => "Carousel setting",
		"value" => __( "3000", "clariwell" ),

		"description" => __( "Choose speed for carousel transition in milliseconds (Example:300).", "clariwell" )

		),
		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => esc_html__( "Columns", 'clariwell' ),
		"param_name" => "slidetoshow",
		"value" => array("Select Number of Columns", "4", "3", "2", "1" ),
		"group" => "Carousel setting",
		"description" => esc_html__( "Number of columns", 'clariwell' ),
		),

		array(
		"type" => "dropdown",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Dots", "clariwell" ),
		"param_name" => "testimonial_navigation_dots",
		"group" => "Carousel setting",
		"value"       => array(

		'True'   => 'true',
		'False'   => 'false'

		),
		"std"         => '',
		"description" => __( "Dots for navigation.", "clariwell" )

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
		"type" => "colorpicker",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Testimonial Font Color", "clariwell" ),
		"param_name" => "font_color",
		"group" => "Style",
		"value" => __( "", "clariwell" ),
		  "description" => __( " Choose Testimonial Font Color.If you leave it empty, It will set theme color", "clariwell" )
			

		 ),
		array(
		"type" => "colorpicker",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Title Font Color", "clariwell" ),
		"param_name" => "title_font_color",
		"group" => "Style",
		"value" => __( "", "clariwell" ),
		  "description" => __( " Choose Title Font Color.If you leave it empty, It will set theme color", "clariwell" )
			
		 ),


		array(
		"type" => "colorpicker",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Designation Font Color", "clariwell" ),
		"param_name" => "position_font_color",
		"group" => "Style",
		"value" => __( "", "clariwell" ),
		  "description" => __( " Choose Designation Font Color.If you leave it empty, It will set theme color", "clariwell" )
		 ),
		array(
		"type" => "colorpicker",
		"class" => "",
		"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
		"heading" => __( "Content Background Color", "clariwell" ),
		"param_name" => "test_bg_color",
		"group" => "Style",
		"value" => __( "", "clariwell" ),
		"description" => __( " Choose Background Color.If you leave it empty, It will set default color", "clariwell" ),
		 ),
		 
          array(
			"type" => "textfield",
			"heading" => esc_html__( "Testimonial Text Font Size", "clariwell" ),
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"param_name" => "text_font",
			"description" => esc_html__( "Enter text font-size (example:20)", "clariwell" ),
                        
			'group' => esc_html__( "Style", "clariwell" ) 

		),
		
		          array(
			"type" => "textfield",
			"heading" => esc_html__( "Testimonial Text Line-Height", "clariwell" ),
			"edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",

			"param_name" => "text_line_height",
			"description" => esc_html__( "Enter text line-height (example:20)", "clariwell" ),
                        
			'group' => esc_html__( "Style", "clariwell" ) 

		),
		
		array(
                  "type"        => "checkbox",
                  "param_name" => "italic_font",
                  "class" => "",
                  "heading" => __( "Enable Testimonial Text Italic", "clariwell" ),
                  "edit_field_class" => "vc_col-xs-6 vc_edit_form_elements vc_column-with-padding vc_column",
               	  "group" => esc_html__( "Style", "clariwell" ), 
                  'save_always' => true,
                  "value"         => array('Enable Testimonial Text Italic'   => '1' ),
              ),


		array(
			'type' => 'css_editor',
			'heading' => __( 'Css', 'clariwell' ),
			'param_name' => 'css',
			'group' => __( 'Design options', 'clariwell' ),
		),

		)
	) );
}

add_shortcode( 'testimonial', 'bartag_func' );
function bartag_func( $atts ) {
		extract( shortcode_atts( array(
		'testimonial_layout' => '',
		'testimonial_navigation_dots' => 'true',
		'slidetoshow' => '4',
		'speed' => '1000',
		'autoplay' => '',
		'extra_class' =>'',
		'font_color'=>'#6f6f6f',
		'title_font_color'=>'#232323',
		'alignment' => 'text-left',
		'cats' =>'',
		'posts_nr' => '',
		'orderby' => '',
		'order' => '',
		'position_font_color'=>'#6f6f6f',
		 'css' => '',
		'test_bg_color'=>'transparent',
		 'text_font' => '',
        'css_animation'  => '',
        'ib_animation_delay'=> '',
        'text_line_height' => '',
        'italic_font'=> ''
   ), $atts ) );
   
global $post;   

$css=apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );    


//CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

 $animation_delay = "";

            // Animation delay
            if ($ib_animation_delay) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay;
		}

if(!isset($extra_class1))
    $extra_class1='';
$uniqid = uniqid('ins-testimonial-');
$custom_css = '';

if($test_bg_color != '')
$custom_css .= '#' . $uniqid . ' .insignia-testimonial-style-3-content:after {border-top-color: '.$test_bg_color.';}';

if($text_font != '')
$custom_css .= '#' . $uniqid . ' .insignia-testimonial-text {font-size: '.$text_font.'px;}';

if($text_line_height != '')
$custom_css .= '#' . $uniqid . ' .insignia-testimonial-text {line-height:'.$text_line_height.'px;}';


	// Output
	
	ob_start();		
	
	echo '<div id="'.$uniqid.'" class="insignia-testimonial-wrapper insignia-testimonial-'.$testimonial_layout.' clearfix '.$css.'">';
			
	echo '<div class="insignia-testimonial-inner insignia-testimonial-carousel '.$alignment.' ">';
	
	wp_reset_postdata();
	
	// The query
	$args = array(
		'posts_per_page' => $posts_nr,
		'testimonial_category' => $cats,
		'post_type' => 'testimonial_post',
		'orderby' => $orderby,
		'order' => $order 
	);
	
	$the_query = new WP_Query( $args );
	
	// The Loop
	
	if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ): $the_query->the_post(); 
	$test_author = get_post_meta($post->ID, "_ins_author", true);
	$test_position = get_post_meta($post->ID, "_ins_position", true);
	$testimonial_img_src = get_the_post_thumbnail( $post->ID, array( 300, 300), array( 'class' => 'border-radius-50') );
	$post_id = get_the_ID();
	
	?>
<?php if($testimonial_layout == 'style-1'){ ?>
		<div class="insignia-testimonial-content-wrapper <?php echo $css_animation; ?>" <?php echo $animation_delay; ?>>
		    		    <div class="insignia-testimonial-bg-inner ins-testimonial1-inner-content" style= "background-color:<?php echo $test_bg_color; ?>">
          <?php  if(!empty($italic_font)) { ?>
	        <div style= 'color: <?php echo $font_color; ?>' class="insignia-testimonial-text italic-font padding-25px-bottom"><?php echo get_the_content(); ?></div>
	      <?php  }else{ ?>
			<div style= 'color: <?php echo $font_color; ?>' class="insignia-testimonial-text padding-25px-bottom"><?php echo get_the_content(); ?></div>
		 <?php	} ?>
			<div class="insignia-testimonial-meta-wrapper clearfix"> 
			<?php if(!empty($testimonial_img_src)){ ?>
				<div class="insignia-testimonial-image float-left"><?php echo $testimonial_img_src; ?></div> <?php } ?>
				<div class="insignia-testimonial-meta"> 
				<?php if(!empty($test_author)){ ?>
				<div class="insignia-testimonial-title margin-0px-bottom title-font font-weight-500 text-medium text-extra-dark-gray line-height-16" style= 'color: <?php echo $title_font_color; ?>'><?php echo $test_author; ?></div> <?php } ?>
				<?php if(!empty($test_position)){ ?>
				<span class="insignia-testimonial-position text-uppercase text-small" style= 'color: <?php echo $position_font_color; ?>'><?php echo $test_position; ?></span><?php } ?></div>
			</div>
		</div>
	</div>	
<?php }elseif($testimonial_layout == 'style-2') { 
		?>
		<div class="insignia-testimonial-content-wrapper" >
		    <div class="insignia-testimonial-bg-inner" style= "background-color:<?php echo $test_bg_color; ?>">
		<?php if(!empty($testimonial_img_src)){ ?>
		<div class="insignia-testimonial-image padding-30px-bottom"><?php echo $testimonial_img_src; ?></div> <?php } ?>
		 <?php  if(!empty($italic_font)) { ?>
			<div style= 'color: <?php echo $font_color; ?>' class="insignia-testimonial-text italic-font padding-25px-bottom"><?php echo get_the_content(); ?></div>
		    <?php  }else{ ?>
		    <div style= 'color: <?php echo $font_color; ?>' class="insignia-testimonial-text padding-25px-bottom"><?php echo get_the_content(); ?></div>
		   <?php	} ?>
        <div class="insignia-testimonial-meta-wrapper clearfix"> 
				<div class="insignia-testimonial-meta"> 
				<?php if(!empty($test_author)){ ?>
				<div class="insignia-testimonial-title margin-0px-bottom title-font font-weight-500 text-medium text-extra-dark-gray line-height-16" style= 'color: <?php echo $title_font_color; ?>'><?php echo $test_author; ?></div> <?php } ?>
				<?php if(!empty($test_position)){ ?>
				<span style= 'color: <?php echo $position_font_color; ?>' class="insignia-testimonial-position text-uppercase text-small"><?php echo $test_position; ?></span><?php } ?></div>
			</div>
		  </div>
		</div>
<?php 
	
}
	endwhile; 
	
	else :
	
		echo '<div class="insignia-no-posts alert alert-warning"><p>Looks like you don\'t have any testimonial posts created. You may add new <a href="' . admin_url( 'edit.php?post_type=testimonial_post' ) . '" target="_blank">here</a>.</p></div>';
	
	endif; // End The Loop

	echo '</div></div>'; ?>
	
			 <script type="text/javascript">
                      

jQuery('#<?php echo $uniqid;?> .insignia-testimonial-carousel').slick({
    
    arrows: false,
    autoplay: <?php echo esc_html($autoplay); ?>,
    dots: <?php echo esc_html($testimonial_navigation_dots); ?>,
    slidesToShow: <?php echo esc_html($slidetoshow); ?>,
	swipeToSlide: true,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
   
  ]

  });
</script>
						
						
<script type="text/javascript">
		(function(jQuery) {

	<?php 	if($custom_css != '') { ?>
				 jQuery("head").append("<style><?php echo $custom_css ?></style>");
					<?php } ?>
 
					})(jQuery);
						</script>
	
<?php	
	$content = ob_get_contents();
	ob_end_clean();
	
	return $content;

}