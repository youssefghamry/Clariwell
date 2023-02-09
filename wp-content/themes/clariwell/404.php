<?php 
    get_header();
    $layout = 'no_sidebar';
    $url = home_url();
?>
<section class="section-page page-layout-<?php echo esc_attr( $layout ); ?>">
   <div class="container">
      <div class="row">
         <div id="page-content" class="page-content page-content-404 text-center">
            <div class="error-404 title-extra-large font-weight-600 margin-40px-bottom letter-spacing-6 pc"><?php esc_html_e('404','clariwell'); ?></div>
            <div class="error-404-wrapper">
               <h2 class="error-404-title margin-20px-bottom"><?php esc_html_e('Oops! That page can\'t be found.','clariwell'); ?></h2>
               <p class="error-404-description text-extra-large line-height-30 width-55 margin-auto sm-width-100"><?php esc_html_e('It seems we could not find the page you are looking for. Please check to make sure you have typed the URL correctly.','clariwell'); ?></p>
               <a class="error-404-button btn margin-40px-top margin-30px-bottom pc-bg" href="<?php echo esc_url( $url ); ?>"><?php esc_html_e('Back to home','clariwell'); ?></a>
            </div>
         </div>
         <?php
            // Page Sidebar
            if($layout != "no_sidebar") {
            	get_sidebar();    
            }
            ?>
      </div>
   </div>
</section>
<?php get_footer(); ?>