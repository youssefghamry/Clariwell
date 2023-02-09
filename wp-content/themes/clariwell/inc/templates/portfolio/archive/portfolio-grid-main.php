<?php
$filter_style = $GLOBALS['insignia_filter_layout1'];

		if($GLOBALS['insignia_port_on_hover1'] == "layout_2"){
			$inv_port_wrapper_class = "inv-portfolio-wapper inv-portfolio-hover-2-wrapper";  
		}
		elseif($GLOBALS['insignia_port_on_hover1'] == "layout_3")
		{
			$inv_port_wrapper_class = "inv-portfolio-wapper inv-portfolio-hover-3-wrapper";
		}
		elseif($GLOBALS['insignia_port_on_hover1'] == "layout_4")
		{
			$inv_port_wrapper_class = "inv-portfolio-wapper inv-portfolio-hover-4-wrapper";
		}
		elseif($GLOBALS['insignia_port_on_hover1'] == "layout_5")
		{
			$inv_port_wrapper_class = "inv-portfolio-tilt-wapper inv-portfolio-hover-5-wrapper";
		}
		else{
			$inv_port_wrapper_class = "inv-portfolio-wapper inv-portfolio-hover-1-wrapper";
		}

?>

<div class="inv-portfolio-element-main-wrapper clearfix <?php echo esc_attr($inv_port_wrapper_class); ?> clearfix <?php echo esc_attr($GLOBALS['insignia_css1']);?> <?php echo esc_attr($GLOBALS['insignia_portfolio_extra_class1']);?>" style="margin: 0 -<?php echo esc_attr($GLOBALS['insignia_port_gap1']/2); ?>px;">

	<?php if($GLOBALS['insignia_port_filter1'] == 'filter_on'){ 
	    $filter_class = 'inv-portfolio-filter-enabled';
	?>
	<div class="inv-portfolio-filter-button-holder margin-40px-top margin-50px-bottom  text-center">
		<button class="inv-portfolio-filter-button-inner inv-portfolio-filter-button<?php echo esc_attr($GLOBALS['insignia_filter_layout1']); ?> active-filter-button title-font" data-filter="*"><?php echo esc_html__('show all','clariwell'); ?></button>
		<?php $GLOBALS['insignia_port_cat1'] = explode(",",$GLOBALS['insignia_port_cat1']);
			foreach ($GLOBALS['insignia_port_cat1'] as $str) {
			    echo "<button class='inv-portfolio-filter-button-inner inv-portfolio-filter-button$filter_style title-font' data-filter=.$str>$str</button> ";
		    } ?>
	</div>
	<?php }else{$filter_class = 'inv-portfolio-filter-disabled';} ?>

	<div class="inv-portfolio-element-holder <?php echo esc_attr($filter_class); ?>">
		<div class="portfolio-article-holder portfolio-grid-inner-holder clearfix">
	        <div class="grid-sizer"></div>
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
		
		<div class="invictus-pagination-wrapper col-md-12 text-center">
			<?php 
			if($GLOBALS['insignia_port_filter1'] != "filter_on" ){
				if($GLOBALS['insignia_port_load_more1'] == "pagination"){
					if (function_exists("insignia_pagination")) {
						insignia_pagination($posts->max_num_pages);
					} 
				} 
			}
			?>
		</div> 
	</div>
</div>