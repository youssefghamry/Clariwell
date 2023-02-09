<?php
/**
 *
 * script template
 *
 */
    global $insignia_blog_arrow, $insignia_blog_dots, $insignia_blog_slidetoshow, $insignia_blog_speed, $insignia_blog_autoplay;
    global $insignia_portfolio_autoplay, $insignia_portfolio_speed, $insignia_portfolio_slidetoshow, $insignia_portfolio_dots, $insignia_portfolio_arrows;

?>

<script type="text/javascript">
    if ( jQuery( '.blog-element-main-archive').length ) {
    jQuery('.ensign-carousel-slider').slick({
        
        <?php if ( !empty( $insignia_blog_dots) ) {?>
        dots: <?php echo esc_html($insignia_blog_dots); ?>,<?php }?>
        
        <?php if ( !empty( $insignia_blog_arrow) ) {?>
        arrows: <?php echo esc_html($insignia_blog_arrow); ?>,<?php }?>
        
        <?php if ( !empty( $insignia_blog_slidetoshow) ) {?>
        slidesToShow: <?php echo esc_html($insignia_blog_slidetoshow); ?>,<?php }?>
        
    	swipeToSlide: true,
    	
    	<?php if ( !empty( $insignia_blog_autoplay) ) {?>
    	autoplay: <?php echo esc_html($insignia_blog_autoplay); ?>,<?php }?>
    	
    	<?php if ( !empty( $insignia_blog_speed) ) {?>
    	speed: <?php echo esc_html($insignia_blog_speed); ?>,<?php }?>
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
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
    }
</script>


<script type="text/javascript">
    if ( jQuery( '.inv-portfolio-carousel-slider').length ) {
    jQuery('.inv-portfolio-carousel-slider').slick({
        
        
        <?php if ( !empty( $insignia_portfolio_dots) ) {?>
        dots: <?php echo esc_html($insignia_portfolio_dots); ?>,<?php }?>
        
        <?php if ( !empty( $insignia_portfolio_arrows) ) {?>
        arrows: <?php echo esc_html($insignia_portfolio_arrows); ?>,<?php }?>
        
        <?php if ( !empty( $insignia_portfolio_slidetoshow) ) {?>
        slidesToShow: <?php echo esc_html($insignia_portfolio_slidetoshow); ?>,<?php }?>
    	
    	swipeToSlide: true,
    	
    	<?php if ( !empty( $insignia_portfolio_autoplay) ) {?>
    	autoplay: <?php echo esc_html($insignia_portfolio_autoplay); ?>,<?php }?>
    	
    	<?php if ( !empty( $insignia_portfolio_speed) ) {?>
    	speed: <?php echo esc_html($insignia_portfolio_speed); ?>,<?php }?>
        
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
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
    }
</script>


