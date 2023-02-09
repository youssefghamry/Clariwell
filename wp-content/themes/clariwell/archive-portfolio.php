<?php get_header();
   $layout = 'full_width';
?>
<div id="content" class="page-layout-<?php echo esc_attr( $layout ); ?>">
   <div class="blog-main-archive">
      <div class="container">
         <div class="row">
            <div id="page-content" class="portfolio-container page-content-wrapper">
               <div class="inv-portfolio-element-main-wrapper clearfix inv-portfolio-wapper inv-portfolio-hover-1-wrapper">
                  <?php
                     $port_filter = insignia_option('portfolio_filter');
                      if($port_filter == 'yes'){ 
                     $filter_class = 'inv-portfolio-filter-enabled';
                     ?>
                  <div class="inv-portfolio-filter-button-holder margin-40px-tb <?php echo esc_attr(insignia_option('portfolio_filter_align')); ?>">
                     <button class="inv-portfolio-filter-button-inner inv-portfolio-filter-button_simple active-filter-button" data-filter="*"><?php echo esc_html__('show all','clariwell'); ?></button>
                     <?php
                        $terms = get_terms([
                           'taxonomy' => 'portfolio_category',
                           'hide_empty' => false,
                        ]);
                           $port_categories = array();
                           foreach ($terms as $term) {
                               $port_categories[$term->slug] = $term->slug;
                           }
                        
                        $port_cat2 = implode(" ",$port_categories);
                        foreach ($port_categories as $str) {
                           echo "<button class='inv-portfolio-filter-button-inner inv-portfolio-filter-button_simple' data-filter=.".$str.">".$str."</button> ";
                        } ?>
                  </div>
                  <?php }else{$filter_class = 'inv-portfolio-filter-disabled';} ?>
                  <div class="inv-portfolio-element-holder <?php echo esc_attr($filter_class); ?>">
                     <div class="portfolio-article-holder clearfix <?php echo esc_attr(insignia_option('portfolio_layout')); ?> portfolio-col-3">
                        <div class="grid-sizer"></div>
                        <?php
                           $query = array(
                           'post_type' => 'portfolio',
                           'paged'=>$paged,
                           'orderby' => insignia_option('portfolio_orderby'),
                           'order' => insignia_option('portfolio_order')
                           );
                           $loop = new WP_Query($query);
                           
                           if ($loop -> have_posts()) : while ($loop -> have_posts()) : $loop -> the_post();
                           
                           	insignia_portfolio_post();
                           
                           endwhile;
                           
                           // Archive doesn't exist:
                           else :
                           
                           	echo '<div class="insignia-nothing-found"><p>' . esc_html__('Nothing found, sorry.','clariwell') . '</p></div>';
                           
                           endif;
                           wp_reset_postdata(); ?>
                     </div>
                     <div class="invictus-pagination-wrapper col-md-12">
                        <?php 
                           if(insignia_option('portfolio_pagination') == "enable" && $port_filter == 'no' ){
                           	if (function_exists("insignia_pagination")) {
                           		insignia_pagination();
                           	} 
                           } 
                           ?>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               // Page Sidebar
               if ( $layout != "full_width" ) {
               	get_sidebar();    
               }
               ?>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>