<?php
/**
 * The template used for displaying post content in single.php
 *
 * @package Insignia Themes
 * @subpackage Insignia
 * @since Insignia 0.1
 */
?>

<?php 
$post = $wp_query->post;
get_header(); 
$post_id = get_the_ID();
$layout = insignia_page_layout( $post_id );
?>

<div id="content" class="page-layout-<?php echo esc_attr( $layout ); ?>">
	<div class="container">
		<div class="row">
			<div id="page-content" class="page-content-wrapper">
		
			<?php
			
			// Post Content Loop
			
			if (have_posts()) : while (have_posts()) : the_post(); 
				$extra_classes = array();
				$extra_classes[] = 'post-holder margin-35px-bottom clearfix';
				?>
				
				<div <?php post_class( $extra_classes ); ?>>

					<?php
					
					// Post Media
					
					$post_format = get_post_format( get_the_ID() );
					
					if ( insignia_option( 'blog_single_media' ) != false && get_post_meta( get_the_ID(), '_ins_post_media', true) != 'hide' ) {
						if( $post_format != '' || $post_format == '' && has_post_thumbnail() ) {
							echo '<div class="ins-single-post-media margin-30px-bottom display-block">';
							$img_size = 'full';
							insignia_post_media( get_the_ID(), $post_format, $img_size );
							echo '</div>';
						}
					}
					
					?>
					
					<?php the_content(); ?>
				
				</div>
				
				<div class="after-blog-post">
				
					<?php
					
					// Trackbacks
					
					if( $post->ping_status == 'open' && insignia_option('blog_trackback') != false ) {
						echo '<div class="post-trackbacks"><p class="post-trackback"><i class="fa fa-chain"></i> ' . esc_html__( 'Trackback URL', 'clariwell' ) . ': <a href="' . get_trackback_url() . '">' . get_trackback_url() . '</a></p></div>';
					}
					
					wp_link_pages();
					
					// Post Tags
					
					if ( class_exists('ReduxFrameworkPlugin') ) {
						if(insignia_option( 'blog_post_tags' ) != false){
							insignia_blog_post_tags();
						}
					}else{
						insignia_blog_post_tags();
					}
					
					// Post Author

					$authordesc = get_the_author_meta( 'description' );

					if ( insignia_option( 'blog_post_author' ) != false && !empty ( $authordesc ) ) {
						insignia_blog_post_author();
					}

					// Post social sharing

					if ( insignia_option( 'blog_post_social_sharing' ) != false && function_exists( 'insignia_socials_sharing' ) ) {
						insignia_socials_sharing();
					}

					// Post Navigation
					
					if( insignia_option('blog_post_nav') != false ) {
						insignia_blog_post_nav();
					}
					
					// Comments
					
					if ( ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						echo '<div class="post-comments">';
						comments_template();
						echo '</div>';
					}
					
					?>
				
				</div>
				
				<?php
				
			// End The Loop
			          
			endwhile; endif; 
			
			?>
			
			</div>
			
			<?php
			
			// Page Sidebar
			if( $layout != "full_width" ) {
				get_sidebar();    
			}
			
			?>
		
		</div>
	</div>
<?php get_footer(); ?>