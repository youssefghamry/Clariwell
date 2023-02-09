<?php
$page_title = insignia_get_title();
$post_id = insignia_get_id();
$css_classes = array();

// Custom Page Title Styling

$custom_title = false;

if ( get_post_meta( get_the_ID(), 'custom_pagetitle', true ) == 'custom_title' ) {
	$custom_title = true;
}

// Text Alignment

$text_align = 'left';

if ( get_post_meta( $post_id, '_ins_pagetitle_align', true ) == '' && is_single() && get_post_type() == 'post' ) {
	$text_align = insignia_option('ins_blog_title_align');
} elseif ( get_post_meta( $post_id, '_ins_pagetitle_align', true ) == ''  ) {
	$text_align = insignia_option('ins_page_title_align');
} elseif ( get_post_meta( $post_id, '_ins_pagetitle_align', true ) != '' && get_post_meta( $post_id, '_ins_pagetitle_align', true ) != 'default' ) {
	$text_align = get_post_meta( $post_id, '_ins_pagetitle_align', true );
}

$css_classes[] = 'title-align-' . $text_align;

// Begin Custom Page Title Styling
$pagetitle_inline_color = '';
if ( ( $value = insignia_pagetitle_meta('pagetitle_color') ) != '' ) {
	$pagetitle_inline_color = 'style= color:' . esc_attr( $value ) . '';
}

// Page Subtitle

$page_subtitle = '';

if ( get_post_meta( get_the_ID(), '_ins_page_subtitle', true ) != '' ) {
	$page_subtitle = get_post_meta( get_the_ID(), '_ins_page_subtitle', true );
}


// Subtitle Color
$pagesubtitle_inline_css = "";
if ( ( $value = insignia_pagetitle_meta('pagetitle_subtitle_color') ) != '' ) {
	$pagesubtitle_inline_css = 'style= color:' . esc_attr( $value ) . '';
}

// End Custom Page Title Styling

// Inline CSS

$pagetitle_inline_css = '';
$pagetitle_wrapper_css = '';
$inline_css = array();
$title_bg_css = array();

// Background Color

$has_bg = false;

if ( ( $color1 = get_post_meta( $post_id, '_ins_pagetitle_bg_color', true ) ) != '' ) {
	$inline_css[] = 'background-color:' . esc_attr( $color1 ) . ';';
	$has_bg = true;
} 

// Background Image

$bg_image = $bg_img_url = '';

if ( insignia_pagetitle_meta( 'pagetitle_bg_image' ) != '' ) {

	$has_img = false;
	
	if ( ( $bg_image = get_post_meta( $post_id, '_ins_pagetitle_bg_image', true ) ) && $bg_image != '' ) {
		$bg_image = get_post_meta( $post_id, '_ins_pagetitle_bg_image', true );
		$has_bg = true;
		$has_img = true;
		$bg_img_url = $bg_image;
	} elseif ( ( $bg_image = insignia_option( 'pagetitle_bg_image' ) ) && $bg_image['url'] != '' && get_post_meta( $post_id, '_ins_pagetitle_bg_color', true ) == '' ) {
		$bg_image = insignia_option( 'pagetitle_bg_image' );
		$has_img = true;
		$bg_img_url = $bg_image['url'];
	}
	
	if ( $has_img && $bg_img_url != '' ) {

		$title_bg_css[] = 'background-image: url(' . esc_url( $bg_img_url ) . '); opacity: 1;';
		//$bg_img_url = $bg_image['url'];
		
		// Background Image Overlay
		
		$title_bg_overlay = '';
	
		if ( insignia_pagetitle_meta('pagetitle_bg_image_overlay') != 'none' ) {
			$title_bg_overlay .= ' bg-overlay';
			$title_bg_overlay .= ' bg-overlay-' . insignia_pagetitle_meta( 'pagetitle_bg_image_overlay' );
		}

		if ( get_post_meta( $post_id, '_ins_pagetitle_bg_size', true ) != '' ) {
			$bg_size = get_post_meta( $post_id, '_ins_pagetitle_bg_size', true );
			$title_bg_css[] = 'background-size:' .$bg_size. ';';
		}
		
		if ( get_post_meta( $post_id, '_ins_pagetitle_bg_position', true ) != '' ) {
			$bg_position = get_post_meta( $post_id, '_ins_pagetitle_bg_position', true );
			$title_bg_css[] = 'background-position:' .$bg_position. ';';
		}
		
		if ( get_post_meta( $post_id, '_ins_pagetitle_bg_repeat', true ) != '' ) {
			$bg_repeat = get_post_meta( $post_id, '_ins_pagetitle_bg_repeat', true );
			$title_bg_css[] = 'background-repeat:' .$bg_repeat. ';';
		}

		if ( get_post_meta( $post_id, '_ins_pagetitle_bg_attachment', true ) != '' ) {
			$bg_attachment = get_post_meta( $post_id, '_ins_pagetitle_bg_attachment', true );
			$title_bg_css[] = 'background-attachment:' .$bg_attachment. ';';
		}		
	}
		
}

if ( $has_bg == true ) {
	$css_classes[] = 'page-title-with-bg';
}

// Page Title Height

if ( get_post_meta( $post_id, '_ins_pagetitle_fullscreen', true ) == 'on' ) {
    
    $css_classes[] = 'page-title-fullscreen';
    
} else if ( get_post_meta( $post_id, '_ins_pagetitle_height', true ) != '' ) {
	$height = get_post_meta( $post_id, '_ins_pagetitle_height', true );

        $height = $height + 90;
        if ( insignia_option( 'topbar' ) ) {
            $height = $height + 45;
        }
	
	$inline_css[] = 'height: ' . esc_attr( $height ) . 'px;';
	$pagetitle_wrapper_css = 'style="height: ' . esc_attr( $height ) . 'px;"';
} elseif( insignia_option( 'pagetitle_height' ) != '' ) {
	$height = insignia_option( 'pagetitle_height' );
	
        $height = $height + 90;
        if ( insignia_option( 'topbar' ) ) {
            $height = $height + 45;
    }
	$inline_css[] = 'height: ' . esc_attr( $height ) . 'px;';
	$pagetitle_wrapper_css = 'style="height: ' . esc_attr( $height ) . 'px;"';
}

// Container Inline CSS

if ( $inline_css ) {
	$pagetitle_inline_css = 'style="' . implode( '', $inline_css ) . '"';
}
?>

<section id="ins-page-title" class="ins-page-title <?php echo esc_attr(implode(' ', $css_classes )); ?>" <?php echo '' . $pagetitle_inline_css; ?>> 
	<div class="ins-page-title-wrapper" <?php if ( $pagetitle_wrapper_css != '' ) echo '' . $pagetitle_wrapper_css; ?>>
		<?php if ( $title_bg_css ) { ?>
		<div class="ins-page-title-bg<?php echo esc_attr( $title_bg_overlay ); ?>" <?php echo 'style="' . implode( '', $title_bg_css ) . '"'; ?>></div>
		<?php } ?>
		<div class="ins-page-title-inner">
			<div class="container">
				<div class="ins-page-title-txt">
				    
				<?php
					// Single blog post
					
					if ( is_single() && get_post_type( get_the_ID() ) == 'post' ) {
					
						if ( insignia_option('blog_single_category') != false && get_post_meta( get_the_ID(), '_ins_page_title_blog_category', true ) != 'hide' ) {
							insignia_blog_post_title_category();
						}
					}
				?>
					
					<h1 class="no-margin padding-5px-tb" <?php echo esc_attr($pagetitle_inline_color); ?>><?php echo esc_html( $page_title ); ?></h1>
					
					<?php
					
					if ( !is_search() ) { 
					    if ( $page_subtitle != '' ) { ?>
					        <p class="ins-page-subtitle" <?php echo esc_attr($pagesubtitle_inline_css); ?>><?php echo esc_html( $page_subtitle ); ?></p>
					<?php  
						}
					}
					?>
                
				<?php
					// Single blog post
					
					if ( is_single() && get_post_type( get_the_ID() ) == 'post' ) {
					
						if ( insignia_option('blog_single_meta') != false && get_post_meta( get_the_ID(), '_ins_page_title_blog_meta', true ) != 'hide' ) {
							insignia_blog_post_title_meta();
						}
					}
				?>
	            </div>
	            
	            <?php
	            if ( is_single() && get_post_type( get_the_ID() ) == 'post' && insignia_option( 'breadcrumbs_blog' ) == 'yes' && get_post_meta( insignia_get_id(), '_ins_pagetitle_breadcrumbs', true ) != 'no' ) {
	            	insignia_breadcrumbs();
	            }else if( !is_single() && get_post_type( get_the_ID() ) != 'post' && insignia_option( 'breadcrumbs' ) == 'yes' && get_post_meta( insignia_get_id(), '_ins_pagetitle_breadcrumbs', true ) != 'no' ){
	            	insignia_breadcrumbs();
	            }
	            ?>

	        </div>
		</div>
	</div>
	<?php $scroll_button = insignia_option('ins-opt-scroll-button');
	if($scroll_button == '1'){	?>
		<div class="ins-pagetitle-scroll-wrapper container"><a class="ins-pagetitle-scroll-link" href="#main-content-wrapper"><i class="fa fa-angle-down"></i></a></div>
	<?php } ?>
</section>