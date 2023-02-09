body{
    display:block;
}

<?php if ( ( $value = insignia_pagetitle_meta('pagetitle_color') ) != '' ) { ?>
	.ins-breadcrumbs a, .ins-breadcrumbs i,.ins-breadcrumbs .current, #ins-page-title .blog-meta li, #ins-page-title .blog-meta li a, .ins-page-title-inner .ins-page-title-txt .post-meta-wrap .post-author .author-wrap, .ins-page-title-inner .ins-page-title-txt .post-meta-wrap .date-wrap { 
	    color: <?php echo esc_attr( $value ); ?> !important;
    }
    .ins-page-title-inner .ins-page-title-txt .post-meta-wrap .date-wrap:before{
	    background: <?php echo esc_attr( $value ); ?> !important;
    }
<?php } ?>

<?php if( insignia_option( 'header_height' ) != ''){ ?>
    #main-navigation, #main-navigation .main-menu > ul > li > a, #main-navigation .nav-tools li a, #main-navigation.bottom-nav .main-nav-wrapper {
        height: <?php echo esc_attr( insignia_option( 'header_height' ) ); ?>px;
    }
<?php } ?>

<?php if( insignia_option( 'sticky-header-color' ) != ''){ ?>
    .header-scroll-full #header #main-menu > ul > li > a, .header-scroll-full #header .nav-tools > li > a > span > i {
        color: <?php echo esc_attr( insignia_option( 'sticky-header-color' ) ); ?> !important;
    }
<?php } ?>

.vc_tta-style-insignia_tab_layout3 li.vc_tta-tab.vc_active a{
  border-color:  <?php echo esc_attr( insignia_option( 'ins-opt-pc' ) ); ?> !important;
}

.vc_tta-style-insignia_tab_layout2 li.vc_tta-tab.vc_active a:before, .vc_tta-style-insignia_tab_layout2 h4.vc_tta-panel-title a:before{
  background:  <?php echo esc_attr( insignia_option( 'ins-opt-pc' ) ); ?> !important;
}

.vc_tta-style-insignia_tab_layout2 li.vc_tta-tab.vc_active a, .vc_tta-style-insignia_tab_layout2 li.vc_tta-tab.vc_active a i{
  color:  <?php echo esc_attr( insignia_option( 'ins-opt-pc' ) ); ?> !important;
}

<?php
if ( insignia_option( 'custom_css' ) != '' ) {
	echo insignia_option( 'custom_css' );
}
?>

.hover_solid_primary:hover {
   background: <?php if (!empty(insignia_option('ins-opt-pc'))) { echo esc_attr(insignia_option('ins-opt-pc')); } ?>!important;
   border-color: <?php if (!empty(insignia_option('ins-opt-pc'))) { echo esc_attr(insignia_option('ins-opt-pc')); } ?>!important;
   color: #fff!important;
}

.hover_solid_secondary:hover {
   background: <?php if (!empty(insignia_option('ins-opt-sc'))) { echo esc_attr(insignia_option('ins-opt-sc')); } ?>!important;
   border-color: <?php if (!empty(insignia_option('ins-opt-sc'))) { echo esc_attr(insignia_option('ins-opt-sc')); } ?>!important;
   color: #fff!important;
}

.hover_outline_primary:hover {
   color: <?php if (!empty(insignia_option('ins-opt-pc'))) { echo esc_attr(insignia_option('ins-opt-pc')); } ?>!important;
   border-color: <?php if (!empty(insignia_option('ins-opt-pc'))) { echo esc_attr(insignia_option('ins-opt-pc')); } ?>!important;
   background: transparent!important;
}

.hover_outline_secondary:hover {
   color: <?php if (!empty(insignia_option('ins-opt-sc'))) { echo esc_attr(insignia_option('ins-opt-sc')); } ?>!important;
   border-color: <?php if (!empty(insignia_option('ins-opt-sc'))) { echo esc_attr(insignia_option('ins-opt-sc')); } ?>!important;
   background: transparent!important;
}

.pricing-style-3.pricing-box-featured, .pricing-style-3.insignia-pricing-box-wrapper:hover{
  box-shadow: inset 0 0 0 2px <?php if (!empty(insignia_option('ins-opt-pc'))) { echo esc_attr(insignia_option('ins-opt-pc')); } ?>;
}

.vc_tta-style-insignia_tour_layout1 .vc_tta-tabs-container{
   background: <?php if (!empty(insignia_option('ins-opt-pc'))) { echo esc_attr(insignia_option('ins-opt-pc')); } ?>!important;
}