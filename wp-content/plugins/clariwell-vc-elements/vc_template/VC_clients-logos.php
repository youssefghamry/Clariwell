<?php
/**
 *
 * Clients Logos VC element by INSIGNIA
 *
 */

/*Clients Logos Element*/

add_action( 'vc_before_init', 'VC_clients_logos' );

function VC_clients_logos() {
  vc_map (

 array(
      "name" => __( "Clients Logos", "clariwell" ),
      "base" => "insignia_clients_logos",
      "class" => "",
      "category" => __( "Insignia", "clariwell"),
        "class" => "font-awesome",
	"icon" => "fa fa-css3",
       
      "params" => array(
      
      array(
		'type' => 'attach_images',
		'heading' => esc_html__( 'Images', "clariwell" ),
		'param_name' => 'images',
		"group" => "General",

		'value' => '',
		'description' => esc_html__( 'Select images from media library.', "clariwell" ) 
	),
	array(
		'type' => 'dropdown',
		'heading' => esc_html__( 'On click', "clariwell" ),
		'param_name' => 'onclick',
		"group" => "General",

		'value' => array(
			esc_html__( 'Do nothing', "clariwell" ) => 'link_no',
			esc_html__( 'Open custom link', "clariwell" ) => 'custom_link'
		),
		'description' => esc_html__( 'Define action for onclick event if needed.', "clariwell" ) 
	),
	array(
		'type' => 'exploded_textarea',
		'heading' => esc_html__( 'Custom links', "clariwell" ),
		'param_name' => 'custom_links',
		"group" => "General",

		'description' => esc_html__( 'Enter links for each logo here. Divide links with linebreaks (Enter) . ', "clariwell" ),
		'dependency' => array(
			"element" => 'onclick',
			'value' => array(
				'custom_link' 
			) 
		) 
	),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Open link in a new tab?', "clariwell" ),
			'param_name' => 'link_target',
			"group" => "General",

			'value' => array(
				esc_html__( 'No', "clariwell" ) => 'no',
				esc_html__( 'Yes', "clariwell" ) => 'yes'
			),
			'description' => esc_html__( 'Select if you want the link to open in a new browser tab/window.', "clariwell" ),
			'dependency' => array(
				"element" => 'onclick',
				'value' => array(
					'custom_link' 
				) 
			) 
		),
	array(
		"type" => "dropdown",
		"class" => "hidden-label",
		"heading" => esc_html__( "Type", "clariwell" ),
		"param_name" => "type",
		"group" => "General",

		'value' => array(
			esc_html__( 'Carousel', "clariwell" ) => 'carousel',
			esc_html__( 'Static Grid', "clariwell" ) => 'grid' 
		),
		"description" => esc_html__( "Choose a type of displaying your logos.", "clariwell" ) 
	),
	array(
		"type" => "dropdown",
		"heading" => esc_html__( "Columns", "clariwell" ),
		"param_name" => "cols",
		"group" => "General",

		"value" => array(
			"7",
			"6",
			"5",
			"4",
			"3",
			"2"
		),
		'dependency' => array(
			"element" => 'type',
			'value' => array(
				'carousel' 
			) 
		),
		"std" => "4",
		"description" => esc_html__( "Number of columns", "clariwell" ) 
	),
	array(
		"type" => "dropdown",
		"heading" => esc_html__( "Columns", "clariwell" ),
		"param_name" => "cols_grid",
		"group" => "General",

		"value" => array(
			"5",
			"4",
			"3",
			"2"
		),
		'dependency' => array(
			"element" => 'type',
			'value' => array(
				'grid' 
			) 
		),
		"std" => "4",
		"description" => esc_html__( "Number of columns", "clariwell" ) 
	),
	
	array(
		"type" => "dropdown",
		"class" => "hidden-label",
		"heading" => esc_html__( "Bullet Navigation", "clariwell" ),
		"param_name" => "dots",
		"group" => "General",

		"value" => array(
			"True" => "true",
			"False" => "false" 
		),
		"description" => esc_html__( "Enable or disable the carousel bullet navigation", "clariwell" ) 
	),
	
  array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("CSS Animation", "clariwell"),
                            "param_name" => "css_animation",
                            		"group" => "General",

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
                            "group" => "General",
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

add_shortcode( 'insignia_clients_logos', 'insignia_clients_logos_shortcode' );
function insignia_clients_logos_shortcode( $atts,$content) {
		$item_class = $element_class = '';

 extract( shortcode_atts( array(
      
     'images' => '',
     'onclick' => '',
     'custom_links' => '',
     'link_target' => 'no',
     'type' => 'carousel',
     'cols' => '4',
     'dots' => 'true',
     'extra_class'=>'',
      'cols_grid' => '4',
      'odd_color' => '',
      'even_color' => '',
      "css_animation"  => '',
     'ib_animation_delay'=> '',

     'css'=> '',

   ), $atts ) );


global $images1,$onclick1,$custom_links1,$link_target1,$type1,$cols1,$dots1,$extra_class1,$css1,$cols_grid1;

$images1=${'images'};
$onclick1=${'onclick'};
$custom_links1=${'custom_links'};
$link_target1=${'link_target'};
$type1=${'type'};
$cols1=${'cols'};
$cols_grid1=${'cols_grid'};
$dots1=${'dots'};
$odd_color1=${'odd_color'};
$even_color1=${'even_color'};
$css_animation1=${'css_animation'};
$ib_animation_delay1=${'ib_animation_delay'};

$extra_class1=${'extra_class'};

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

$client_css = '';

if($odd_color1 != '')
$client_css .= '#' . $uniqid . ' .client-logo:nth-child(odd) {background-color: '.$odd_color1.';}';

if($even_color1 != '')
$client_css .= '#' . $uniqid . ' .client-logo:nth-child(even) {background-color: '.$even_color1.';}';

		if ( $type == 'grid' ) {
			$cols = $cols_grid1;
			$element_class = ' ins-clients-logo-grid ins-clients-logo-grid-' . esc_attr( $cols );
			$item_class = ' ins-clients-logo-grid-item';
		} else {
			
			$element_class = ' ins-logos-carousel logos-slick-carousel';
		}
	
		ob_start();	
		
		$link_href = '';
		
		if( $onclick == 'custom_link' ) {
			$custom_links = explode( ',', $custom_links );
			
			if ( $link_target == 'yes' ) {
				$link_target = '_blank';
			} else {
				$link_target = '_self';
			}
		}
					 			
		$images = explode( ',', $images );
		
		$i = -1;
		
		echo '<div class="ins-client-logos-holder ins-logo-carousel-holder">';
			
		echo '<div id="'.$uniqid.'" class="ins-client-logos client-logos-' . $type  .   $element_class . '  '.$extra_class1.' '.$css1.'  '.$css_animation1.'" '.$animation_delay.' data-cols="' . esc_attr( $cols ) . '" data-dots="' . esc_attr( $dots ) . '">';	
			
		foreach ( $images as $attach_id ) {
		
			$i++;
			$link_href = '';


			
			if ( $onclick == 'custom_link' ) {
			    
			    $logo_links = isset($custom_links[$i]) ? $custom_links[$i] : "";
			    
				$link_href = ' href="' . esc_url( $logo_links ) . '" target="' . $link_target .'"';
			}
            
            if ( strpos($attach_id, '.com') !== false) {
                $img_url = $attach_id;
            } else {
                $img = wp_get_attachment_image_src( $attach_id, 'full' );
                $img_url = $img[0];
            }
			
			
			?>
			<div class="client-logo<?php if( $type == 'grid' ) echo $item_class; ?>">
				<!-- Logo Link -->
				<a <?php if( $link_href ) echo $link_href; ?>>
					<!-- Logo Image SRC -->
					<img src="<?php echo esc_url( $img_url ); ?>" alt="clients-logo">
				</a>
			</div>	

			<?php
	
		} 

		echo '</div></div>';
		
		?>
		
		<script type="text/javascript">
		(function(jQuery) {

		<?php if($client_css != '') { ?>
				jQuery("head").append("<style><?php echo $client_css; ?></style>")
					<?php	} ?>

					
					})(jQuery);
						</script>

		 <script type="text/javascript">
                      

jQuery('#<?php echo $uniqid;?>.ins-logos-carousel').slick({
  arrows: false,
                 dots: <?php echo esc_html($dots1); ?>,
    slidesToShow: <?php echo esc_html($cols1); ?>,
      
        slidesToScroll: 3,

     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
     dots: <?php echo esc_html($dots1); ?>,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
   
  ]

  });
	</script>
		
		<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;

}