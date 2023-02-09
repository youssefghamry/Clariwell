	<?php	
		if($GLOBALS['insignia_port_out'] == "port_masonry4"){
			$inv_port_column_classes = "col-md-3 col-lg-3 col-sm-6 col-xs-12" . ' ' .$GLOBALS['css_animation1'];  
		}
		elseif($GLOBALS['insignia_port_out'] == "port_masonry3")
		{
			$inv_port_column_classes = "col-md-4 col-lg-4 col-sm-6 col-xs-12" . ' ' .$GLOBALS['css_animation1'];
		}
		else{
			$inv_port_column_classes = "col-md-6 col-lg-6 col-sm-6 col-xs-12" . ' ' .$GLOBALS['css_animation1'];
		}
	?>

<?php
	global $post;

	$terms = get_the_terms( $post->ID, 'portfolio_category' );
	if ( !empty( $terms ) ){
		$output = array();
		foreach ( $terms as $term ) { $output[] = $term->slug; } 
	} 

	if ( !empty( $GLOBALS['insignia_port_overlay_color1'] ) ){
		$overlay_color = $GLOBALS['insignia_port_overlay_color1'];
	} else{
		$overlay_color = '#fff';
	}

?>

<?php 
	$image_size = 'large';
?>

<?php if($GLOBALS['insignia_port_on_hover1'] == 'layout_1'){ ?>
<article style="padding: 0 <?php echo esc_attr($GLOBALS['insignia_port_gap1']/2); ?>px; margin-bottom:<?php echo esc_attr($GLOBALS['insignia_port_gap1']); ?>px;"  class="inv-portfolio-hover-3 item item--width2 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> <?php echo esc_attr($inv_port_column_classes); ?>" <?php echo esc_attr($GLOBALS['animation_delay']);?>
>
	<div class="inv-portfolio-hover-3-content">
		<div class="inv-portfolio-hover-3-thumb-masonry"><img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>" alt="<?php echo esc_attr__('portfolio-thumb' , 'clariwell') ?>"></div>
			<div class="inv-portfolio-hover-3-overlay-wrapper"  style="background-color:<?php echo esc_attr($overlay_color); ?>">
				<div class="inv-portfolio-hover-3-overlay-inner">
					<div class="inv-portfolio-hover-3-entry-header">
						<span class="inv-portfolio-hover-3-title display-block"><a href="<?php echo esc_url(get_permalink()); ?>" class="text-black line-height-normal title-font display-block font-weight-500 <?php echo esc_attr($GLOBALS['insignia_title_text_transform1']); ?>"  style="font-size: <?php echo esc_attr($GLOBALS['insignia_title_size1']);?>px; line-height: <?php echo esc_attr($GLOBALS['insignia_title_line_height1']);?>px; color: <?php echo esc_attr($GLOBALS['insignia_title_color1']); ?>"><?php the_title(); ?></a></span> 
						<span class="inv-portfolio-hover-3-cats" style="color: <?php echo esc_attr($GLOBALS['insignia_category_color1']); ?>"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
						if ( !empty( $terms ) ){
							foreach ( $terms as $term ) { ?>
								<a href=<?php echo esc_url(get_term_link($term)) ?> class="position-relative"><span class="<?php echo esc_attr($GLOBALS['insignia_category_text_transform1']); ?>" style="font-size: <?php echo esc_attr($GLOBALS['insignia_category_size1']);?>px; line-height: <?php echo esc_attr($GLOBALS['insignia_category_line_height1']);?>px; color: <?php echo esc_attr($GLOBALS['insignia_category_color1']); ?>"> <?php echo esc_html($term->name) ?> </span></a>
							<?php  }
						} ?></span>
				</div>
			</div>
		</div>
	</div>
</article>
<?php } elseif($GLOBALS['insignia_port_on_hover1'] == 'layout_2'){ ?>
	<article style="padding: 0 <?php echo esc_attr($GLOBALS['insignia_port_gap1']/2); ?>px; margin-bottom:<?php echo esc_attr($GLOBALS['insignia_port_gap1']); ?>px;" class="<?php echo esc_attr($inv_port_column_classes); ?> item item--width2 inv-portfolio-hover-6 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> aos-init" data-aos-once="true" data-aos="<?php echo esc_attr($GLOBALS['insignia_appear_effects1']); ?>" data-aos-delay="0">
		<div class="inv-portfolio-hover-6-content"> 	
			<div class="inv-portfolio-hover-1-thumb-masonry position-relative"><img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>" alt="<?php echo esc_attr__('portfolio-thumb' , 'clariwell') ?>"></div>
				<div class="inv-portfolio-hover-6-entry-header padding-30px-all bg-white">
					<span class="inv-portfolio-hover-6-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
						if ( !empty( $terms ) ){
							foreach ( $terms as $term ) { ?>
							<a href=<?php echo esc_url(get_term_link($term)) ?>><span class="<?php 	echo esc_attr($GLOBALS['insignia_category_text_transform1']); ?>" style="font-size: <?php echo esc_attr($GLOBALS['insignia_category_size1']);?>px; line-height: <?php echo esc_attr($GLOBALS['insignia_category_line_height1']);?>px; color: <?php echo esc_attr($GLOBALS['insignia_category_color1']); ?>"> <?php echo esc_html($term->name) ?> </span></a>
						<?php  }
					} ?></span>
					<span class="inv-portfolio-hover-6-title display-block"><a href="<?php echo esc_url(get_permalink()); ?>" class="text-black line-height-normal title-font margin-5px-bottom display-block font-weight-500 <?php echo esc_attr($GLOBALS['insignia_title_text_transform1']); ?>"  style="font-size: <?php echo esc_attr($GLOBALS['insignia_title_size1']);?>px; line-height: <?php echo esc_attr($GLOBALS['insignia_title_line_height1']);?>px; color: <?php echo esc_attr($GLOBALS['insignia_title_color1']); ?>"><?php the_title(); ?></a></span>
			</div>
		</div>
	</article>
<?php } ?>