	<?php	
		if($GLOBALS['insignia_port_out'] == "port_grid4"){
			$inv_port_column_classes = "col-md-3 col-lg-3 col-sm-6 col-xs-12" . ' ' .$GLOBALS['css_animation1'];  
		}
		elseif($GLOBALS['insignia_port_out'] == "port_grid3")
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
<article style="padding: 0 <?php echo esc_attr($GLOBALS['insignia_port_gap1']/2); ?>px; margin-bottom:<?php echo esc_attr($GLOBALS['insignia_port_gap1']); ?>px;" class="<?php echo esc_attr($inv_port_column_classes); ?> inv-portfolio-hover-3 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?>" <?php echo esc_attr($GLOBALS['animation_delay']);?>>
	<div class="inv-portfolio-hover-3-content">
	    <div class="inv-portfolio-hover-3-thumb" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>');"></div>
		
    	<div class="inv-portfolio-hover-3-overlay-wrapper" style="background-color:<?php echo esc_attr($overlay_color); ?>">
    		<div class="inv-portfolio-hover-3-overlay-inner">
    			<div class="inv-portfolio-hover-3-entry-header">
    			<span class="inv-portfolio-hover-3-title display-block"><a href="<?php echo esc_url(get_permalink()); ?>" class="text-black line-height-normal title-font display-block font-weight-500 <?php echo esc_attr($GLOBALS['insignia_title_text_transform1']); ?>"  style="font-size: <?php echo esc_attr($GLOBALS['insignia_title_size1']);?>px; line-height: <?php echo esc_attr($GLOBALS['insignia_title_line_height1']);?>px; color: <?php echo esc_attr($GLOBALS['insignia_title_color1']); ?>"><?php the_title(); ?></a></span> 
    			<span class="inv-portfolio-hover-3-cats display-block"  style=" color: <?php echo esc_attr($GLOBALS['insignia_category_color1']); ?>"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
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
<article style="padding: 0 <?php echo esc_attr($GLOBALS['insignia_port_gap1']/2); ?>px; margin-bottom:<?php echo esc_attr($GLOBALS['insignia_port_gap1']); ?>px;" class="<?php echo esc_attr($inv_port_column_classes); ?> inv-portfolio-hover-6 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> ">
	<div class="inv-portfolio-hover-6-content"> 	
		<div class="inv-portfolio-hover-1-thumb position-relative" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>');"></div>
		<div class="inv-portfolio-hover-6-entry-header padding-30px-all padding-10px-bottom bg-white">
			<span class="inv-portfolio-hover-6-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
			if ( !empty( $terms ) ){
				foreach ( $terms as $term ) { ?>
						<a href=<?php echo esc_url(get_term_link($term)) ?>><span class="pc <?php echo esc_attr($GLOBALS['insignia_category_text_transform1']); ?>" style="font-size: <?php echo esc_attr($GLOBALS['insignia_category_size1']);?>px; line-height: <?php echo esc_attr($GLOBALS['insignia_category_line_height1']);?>px;"> <?php echo esc_html($term->name) ?> </span></a>
				<?php  }
				} ?></span>
				<h5 class="inv-portfolio-hover-6-title display-block"><a href="<?php echo esc_url(get_permalink()); ?>" class="title-font margin-5px-bottom display-block font-weight-500 <?php echo esc_attr($GLOBALS['insignia_title_text_transform1']); ?>"  style="font-size: <?php echo esc_attr($GLOBALS['insignia_title_size1']);?>px; line-height: <?php echo esc_attr($GLOBALS['insignia_title_line_height1']);?>px"><?php the_title(); ?></a></h5>
		</div>
	</div>
</article>
<?php } ?>
