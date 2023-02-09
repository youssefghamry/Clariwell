<?php
if( !function_exists( 'insignia_socials_sharing' ) ) {
	function insignia_socials_sharing() {
		?>
		<div class="ins-socials-sharing-wrapper clearfix">
		<div class="socials-sharing socials padding-45px-tb">
			<a class="socials-item __facebook" target="_blank" href="<?php echo esc_url('https://www.facebook.com/sharer/sharer.php?u='.urlencode(get_permalink())); ?>" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <?php echo esc_html__( 'Facebook', 'clariwell' ); ?></a>
			<a class="socials-item __twitter" target="_blank" href="<?php echo esc_url('https://twitter.com/intent/tweet?text='.urlencode(get_the_title()).'&amp;url='.urlencode(get_permalink())); ?>" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i> <?php echo esc_html__( 'Twitter', 'clariwell' ); ?></a>
			<a class="socials-item __google_plus" target="_blank" href="<?php echo esc_url('https://plus.google.com/share?url='.urlencode(get_permalink())); ?>" title="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i> <?php echo esc_html__( 'Google Plus', 'clariwell' ); ?></a>
			<a class="socials-item __pintrest" target="_blank" href="<?php echo esc_url('https://www.pinterest.com/pin/create/button/?url='.urlencode(get_permalink()).'&amp;description='.urlencode(get_the_title())); ?>" title="Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i> <?php echo esc_html__( 'Pinterest', 'clariwell' ); ?></a>
			<a class="socials-item __linkedin" target="_blank" href="<?php echo esc_url('https://www.linkedin.com/shareArticle?mini=true&url='.urlencode(get_permalink()).'&amp;title='.urlencode(get_the_title())); ?>&amp;summary=<?php echo urlencode(get_the_excerpt()); ?>" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i> <?php echo esc_html__( 'Linkedin', 'clariwell' ); ?> </a>
		</div>
		</div>
		<?php
	}
}
?>