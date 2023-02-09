<?php
    $post_custom_author_name = get_post_meta(get_the_ID(), "_ins_quote_author", true );
    $post_custom_quote_text = get_post_meta(get_the_ID(), "_ins_quote_text", true ); 
    $post_quote_bg = get_post_meta(get_the_ID(), "_ins_quote_background_color", true );
	$post_quote_color = get_post_meta(get_the_ID(), "_ins_quote_text_color", true ); 
?>

	<?php if (!empty($post_custom_quote_text)): ?>
        <div class = "quotes-text-wrapper padding-30px-all" style= background-color:<?php echo esc_attr($post_quote_bg);?>>
			<div class="quote-text text-medium" style= color:<?php echo esc_attr($post_quote_color); ?>;><?php echo esc_html($post_custom_quote_text); ?></div>
        	<?php if (!empty($post_custom_author_name)): ?>
	    		<h5 class="quote-author margin-15px-top" style= color:<?php echo esc_attr($post_quote_color); ?>;> - <?php echo esc_html($post_custom_author_name); ?></h5>
	        <?php endif; ?>
        </div>
	<?php endif; ?>