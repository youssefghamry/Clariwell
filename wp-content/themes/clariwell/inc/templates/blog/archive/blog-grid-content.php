<?php	
   if($GLOBALS['insignia_blog_out'] == "4Columns"){
   	$inv_blog_column_classes = "inv-post-article inv-post-blog-item-holder inv-post-grid-one-main-wrapper col-md-3 col-lg-3 col-sm-6 col-xs-12 inv-post_".$GLOBALS['insignia_blog_style1']  
   . ' ' .$GLOBALS['css_animation1'];  
   }
   elseif($GLOBALS['insignia_blog_out'] == "3Columns"){
   	$inv_blog_column_classes = "inv-post-article inv-post-blog-item-holder inv-post-grid-one-main-wrapper col-md-4 col-lg-4 col-sm-6 col-xs-12 inv-post_".$GLOBALS['insignia_blog_style1'] . ' ' .$GLOBALS['css_animation1'];
   }
   else{
   	$inv_blog_column_classes = "inv-post-article inv-post-blog-item-holder inv-post-grid-one-main-wrapper col-md-6 col-lg-6 col-sm-6 col-xs-12 inv-post_".$GLOBALS['insignia_blog_style1'] . ' ' .$GLOBALS['css_animation1'];
   }
   
   	$inv_blog_column_classes_2 = "inv-post-article margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray width-100 inv-post-blog-item-holder inv-post_".$GLOBALS['insignia_blog_style1']. ' ' .$GLOBALS['css_animation1'];
   
   $image_size = 'full';
   ?>
<?php if($GLOBALS['insignia_blog_style1'] == 'blog_grid' || $GLOBALS['insignia_blog_style1'] == 'layout_0'){ ?>
<article style="padding: 0 <?php echo esc_attr($GLOBALS['insignia_blog_gap1']/2); ?>px; margin-bottom:<?php echo esc_attr($GLOBALS['insignia_blog_gap1']); ?>px;" <?php post_class( $inv_blog_column_classes);?> <?php echo esc_attr($GLOBALS['animation_delay']); ?>>
   <div class="inv-post-grid-one-inner inv-post-grid-custom-layout-inner">
      <?php
         if (has_post_format('video', $post->ID)) {
         	get_template_part( 'inc/templates/blog/post','video'); 
         }
         elseif (has_post_format('audio', $post->ID)) {
         	get_template_part( 'inc/templates/blog/post','audio'); 
         }
         elseif (has_post_format('quote', $post->ID)) {
         	get_template_part( 'inc/templates/blog/post','quote'); 
         }
         elseif (has_post_format('gallery', $post->ID)) {
         	get_template_part( 'inc/templates/blog/post','gallery'); 
         }else{
         if ( has_post_thumbnail($post) ) { ?>
      <a href="<?php echo esc_url(get_permalink()); ?>" class="display-block">
         <div class="thumbnail-image-bg entry-thumb-wrap position-relative" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>');"></div>
      </a>
      <?php }
         }
         
         if (!has_post_format('quote', $post->ID)) { ?>
      <div class="inv-post-grid-one-content-wrap">
         <div class="inv-post-grid-one-meta display-inline-block margin-5px-bottom"><span class="inv-post-grid-one-author-text"><span><?php echo the_time( get_option( 'date_format' ) ); ?></span></span></div>
         <div class="title entry-post-title inv-post-grid-one-title margin-10px-bottom"><a href="<?php echo esc_url(get_permalink()); ?>" class="title-font text-large font-weight-600"><?php the_title(); ?></a></div>
      </div>
      <?php } ?>
   </div>
</article>
<?php } elseif($GLOBALS['insignia_blog_style1'] == 'blog_image'){ ?>
<article style="padding: 0 <?php echo esc_attr($GLOBALS['insignia_blog_gap1']/2); ?>px; margin-bottom:<?php echo esc_attr($GLOBALS['insignia_blog_gap1']); ?>px;" <?php post_class( $inv_blog_column_classes);?>>
   <?php if ( has_post_thumbnail() ) { ?>
   <div class="blog-style-4-inner position-relative">
   <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo the_post_thumbnail('full', array('class' => 'blog-style-4-thumb')); ?></a>
   <?php }else{ ?>
   <div class=" blog-style-4-inner position-relative bolg-style-4-no-thumb">
      <a class="bolg-style-4-no-thumb-link" href="<?php echo esc_url(get_permalink()); ?>"></a>
      <?php } ?>
      <div class="blog-style-4-img-overlay text-center">
         <?php if($GLOBALS['insignia_hide_date1'] != 'yes' || $GLOBALS['insignia_hide_author1'] != 'yes'){?>
         <p class="blog-style-4-meta title-font font-weight-600 text-small letter-spacing-2 text-uppercase"><?php if($GLOBALS['insignia_hide_date1'] != 'yes') {?><span class="blog-style-4-date"><?php echo the_time( get_option( 'date_format' ) ); ?></span><?php } ?> <?php if($GLOBALS['insignia_hide_date1'] != 'yes' && $GLOBALS['insignia_hide_author1'] != 'yes'){?><span class="blog-separator">-</span><?php } ?><?php if($GLOBALS['insignia_hide_author1'] != 'yes') {?><span class="blog-style-4-author"><?php echo esc_html__('by','clariwell'); ?> <?php the_author_posts_link(); ?></span><?php } ?></p>
         <?php } ?>
         <h3 class="blog-style-4-title margin-15px-top"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
      </div>
      <!-- /.blog-style-4-img-overlay -->
   </div>
</article>
<?php } elseif($GLOBALS['insignia_blog_style1'] == 'blog_list'){ ?>
<article <?php post_class('inv-post-list-main-wrapper');?> <?php echo esc_attr($GLOBALS['animation_delay']); ?>>
   <div class="post-list-item-wrap">
      <?php
         if (has_post_format('video', $post->ID)) {
         	get_template_part( 'blog/post','video'); 
         }
         elseif (has_post_format('audio', $post->ID)) {
         	get_template_part( 'blog/post','audio'); 
         }
         elseif (has_post_format('quote', $post->ID)) {
         	get_template_part( 'blog/post','quote'); 
         }
         elseif (has_post_format('gallery', $post->ID)) {
         	get_template_part( 'blog/post','gallery'); 
         }else{
         	
         if ( has_post_thumbnail($post) ) { ?>
      <div class="post-list-feature post-list-thumbnail">
         <a href="<?php echo esc_url(get_permalink()); ?>">
         <?php echo get_the_post_thumbnail($post->ID,'thumbnail'); ?>                   
         </a>
      </div>
      <?php }
         } ?>
      <div class="post-list-info">
         <h3 class="post-list-title text-large margin-10px-bottom">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
         </h3>
         <div class="post-list-date"><span class="inv-post-grid-one-author-text"><span><?php echo the_time( get_option( 'date_format' ) ); ?></span></span></div>
      </div>
   </div>
</article>
<?php } else{ ?>
<article <?php post_class( 'inv-post-blog-item-holder inv-post-grid-one-main-wrapper col-md-12 col-lg-12 col-sm-12 col-xs-12 inv-post_full-width-img');?>>
   <div class="inv-post-grid-one-inner">
   <?php
      if (has_post_format('video', $post->ID)) {
      	get_template_part( 'inc/templates/blog/post','video'); 
      }
      elseif (has_post_format('audio', $post->ID)) {
      	get_template_part( 'inc/templates/blog/post','audio'); 
      }
      elseif (has_post_format('quote', $post->ID)) {
      	get_template_part( 'inc/templates/blog/post','quote'); 
      }
      elseif (has_post_format('gallery', $post->ID)) {
      	get_template_part( 'inc/templates/blog/post','gallery'); 
      }else{
      if ( has_post_thumbnail($post) ) { ?>
   <a href="<?php echo esc_url(get_permalink()); ?>" class="display-block bg-light-gray">
      <div class="thumbnail-image entry-thumb-wrap position-relative inv-post-classic-layout-image-inner">
         <?php echo get_the_post_thumbnail( $post->ID,$image_size); ?> 
         <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
      </div>
   </a>
   <?php }
      }
      ?>
   <?php if ( has_post_thumbnail() ) { ?>
   <div class="inv-post-grid-one-content-wrap padding-40px-all border-all no-border-top">
      <?php }else{?>
      <div class="inv-post-grid-one-content-wrap padding-40px-all border-all">
         <?php } ?>
         <div class="post-categories title-font text-uppercase font-weight-700 letter-spacing-3 margin-10px-bottom"><?php  the_category(', '); ?></div>
         <h4 class="title entry-post-title inv-post-grid-one-title margin-10px-bottom"><a href="<?php echo esc_url(get_permalink()); ?>" class="pc-hover"><?php the_title(); ?></a></h4>
         <?php if($GLOBALS['insignia_hide_date1'] != 'yes') {?>
         <div class="inv-post-grid-one-meta text-small display-inline-block text-uppercase text-medium-gray margin-15px-bottom"><span class="inv-post-grid-one-author-text"><span><?php echo the_time( get_option( 'date_format' ) ); ?></span></span></div>
         <?php } ?>
         <div class="entry-excerpt inv-post-grid-one-excerpt">
            <?php the_excerpt(); ?>
         </div>
         <?php if($GLOBALS['insignia_hide_author1'] != 'yes') {?>
         <div class="blog-author-box">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 50); ?> <?php echo esc_html__('by','clariwell'); ?> <?php the_author_posts_link(); ?>
         </div>
         <?php } ?>
      </div>
   </div>
</article>
<?php } ?>