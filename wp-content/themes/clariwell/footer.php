<?php
	$footer_style_option = !empty(insignia_option('footer-variant')) ? insignia_option('footer-variant') : '';
	$footer_style = !empty($footer_style_option) ? $footer_style_option : '1';
	$footer_class = 'footer-style-'.$footer_style;
	global $post;
?>
<?php
	$template = get_page_template_slug( $post );

	if( $template !== "no-header-footer.php"){
?>
		</div>
	</section>
</div>
	
	<footer id="footer" class="<?php echo esc_attr($footer_class); ?> <?php if (!empty(insignia_option('ins-footer-fixed'))) { if (insignia_option('ins-footer-fixed') == '1') { echo esc_html('fixed-footer'); } else { echo esc_html('classic-footer');} } ?>">
	
		<?php if($footer_style != '3') { 
			get_template_part('inc/templates/footer/style', $footer_style); 
		} ?>

	<!-- BEGIN COPYRIGHT -->

		<?php if(insignia_option('switch_copyright') == 1 ) {	?>
	
			<div id="copyright" class="clearfix">
				
				<div class="container">
					
					<div class="row">
					
						<div class="col-md-12">
						<?php if(insignia_option('select_copyright') != 'leave_empty') { ?>
						
							<div class="copyright-text col-md-6 no-padding">
								<?php if(insignia_option('textarea_copyright') != "") { ?>
									<?php echo wp_kses_post(insignia_option('textarea_copyright')); ?>
								<?php } else { ?>
									&copy; <?php esc_html_e('Copyright', 'clariwell') ?> <?php echo esc_html(date("Y ")); esc_html(bloginfo('name')); ?>
								<?php } ?>
							</div>
						
							<div class="copyright-right col-md-6 no-padding">
								<?php if(insignia_option('select_copyright') == 'navigation') { ?>
									<?php if(has_nav_menu('footer')) { ?>
									   <div class="copyright-menu"> 
										<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
									   </div>
									 <?php } ?>
								<?php } elseif(insignia_option('select_copyright') == 'social_media') { ?>
									<?php echo insignia_print_social_icons(); ?>
								<?php } elseif(insignia_option('select_copyright') == 'leave_empty') { } ?>
							</div>
						
						<?php }else{ ?>
				
							<div class="copyright-text text-center">
								<?php if(insignia_option('textarea_copyright') != "") { ?>
								<?php echo wp_kses_post(insignia_option('textarea_copyright')); ?>
								<?php } else { ?>
									&copy; <?php esc_html_e('Copyright', 'clariwell') ?> <?php echo esc_html(date("Y ")); esc_html(bloginfo('name')); ?>
								<?php } ?>
							</div>
				
				<?php } ?>
						</div>
					</div>
				</div>
			</div>
	<?php } ?>
	
	<!-- END COPYRIGHT -->		
	
	</footer>
<?php } ?>

<!-- BEGIN BACK TO TOP BUTTON-->

<?php $back_to_top = insignia_option('ins-opt-back-to-top');
	if($back_to_top == '1'){ ?>
		<a href="#top" id="smoothup" class="pc-bg" title="<?php echo esc_attr__('Back to top','clariwell'); ?>"></a>
	<?php } ?>

<!-- END BACK TO TOP BUTTON -->

<?php 

// Custom PHP

if ( insignia_option( 'custom_html' ) != '' ) {
	add_action( 'wp_footer', 'insignia_custom_html' );
}
?>

<?php wp_footer(); ?>

</body>
</html>