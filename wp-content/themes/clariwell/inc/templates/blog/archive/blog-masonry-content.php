<?php	
$image_size = 'full';

		if($GLOBALS['insignia_blog_out'] == "4Columns"){
			$inv_blog_column_classes = "inv-post-article inv-post-masonry-item-holder inv-post-masonry-one-main-wrapper col-md-3 col-lg-3 col-sm-6 col-xs-12" . ' ' .$GLOBALS['css_animation1'];  
		}
		elseif($GLOBALS['insignia_blog_out'] == "3Columns")
		{
			$inv_blog_column_classes = "inv-post-article inv-post-masonry-item-holder inv-post-masonry-one-main-wrapper col-md-4 col-lg-4 col-sm-6 col-xs-12" . ' ' .$GLOBALS['css_animation1'];
		}
		else{
			$inv_blog_column_classes = "inv-post-article inv-post-masonry-item-holder inv-post-masonry-one-main-wrapper col-md-6 col-lg-6 col-sm-6 col-xs-12" . ' ' .$GLOBALS['css_animation1'];
		}
	?>

<article style="padding: 0 <?php echo esc_attr($GLOBALS['insignia_blog_gap1']/2); ?>px; margin-bottom:<?php echo esc_attr($GLOBALS['insignia_blog_gap1']); ?>px;" <?php post_class( $inv_blog_column_classes);?> <?php echo esc_attr($GLOBALS['animation_delay']); ?>>
	<div class="inv-post-grid-one-inner">

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
		<a href="<?php echo esc_url(get_permalink()); ?>" class="display-block"><div class="thumbnail-image entry-thumb-wrap position-relative"> <?php echo get_the_post_thumbnail($post->ID,$image_size); ?></div></a>
		<?php }
	}

	if (!has_post_format('quote', $post->ID)) { ?>
		<div class="inv-post-grid-one-content-wrap">
			<div class="inv-post-grid-one-meta display-inline-block margin-5px-bottom"><span class="inv-post-grid-one-author-text"><span><?php echo the_time( get_option( 'date_format' ) ); ?></span></div>
			<div class="title entry-post-title inv-post-grid-one-title margin-10px-bottom"><a href="<?php echo esc_url(get_permalink()); ?>" class="title-font text-large font-weight-500 text-extra-dark-gray"><?php the_title(); ?></a></div>
		</div>
    <?php } ?>
    </div>
</article>