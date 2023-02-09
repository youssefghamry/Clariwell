<?php
    $footer_id =  insignia_option('ins-opt-footer-page'); 
?>
<div class="container upper-footer">
	<div class="row">
    	<div class="footer-bg col-md-12">
        	<?php
        		$post = get_post($footer_id); 
        		$content = $post->post_content;
        		echo do_shortcode( $content );
        	?>
    	</div>
	</div>
</div>