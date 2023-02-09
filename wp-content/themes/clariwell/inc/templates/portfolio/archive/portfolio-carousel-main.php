<?php
		if($GLOBALS['insignia_port_on_hover1'] == "layout_2"){
			$inv_port_wrapper_class = "inv-portfolio-hover-2-wrapper";  
		}
		elseif($GLOBALS['insignia_port_on_hover1'] == "layout_3")
		{
			$inv_port_wrapper_class = "inv-portfolio-hover-3-wrapper";
		}
		elseif($GLOBALS['insignia_port_on_hover1'] == "layout_4")
		{
			$inv_port_wrapper_class = "inv-portfolio-hover-4-wrapper";
		}
		elseif($GLOBALS['insignia_port_on_hover1'] == "layout_5")
		{
			$inv_port_wrapper_class = "inv-portfolio-hover-5-wrapper";
		}
		else{
			$inv_port_wrapper_class = "inv-portfolio-hover-1-wrapper";
		}
?>

<div class="clearfix inv-portfolio-element-main-wrapper <?php echo esc_attr($inv_port_wrapper_class); ?> <?php echo esc_attr($GLOBALS['insignia_css1']);?> <?php echo esc_attr($GLOBALS['insignia_portfolio_extra_class1']);?>">
    <div class="clearfix portfolio-multi-column inv-portfolio-carousel-slider slider">
        <?php
        	if ( $posts -> have_posts() ) :
        	while($posts->have_posts()) {
        	$posts->the_post(); 
        ?>
    	<?php	get_template_part( 'inc/templates/portfolio/archive/portfolio','grid-content'); ?>
    	<?php } ?>
    	<?php endif; ?>
    	<?php wp_reset_postdata(); ?>
    </div>
</div>