<div class = "archive_quotes-text-wrapper">
	<?php $post_custom_author_name = get_post_meta(get_the_ID(), "_ins_quote_author", true );
	      $post_custom_quote_text = get_post_meta(get_the_ID(), "_ins_quote_text", true ); 
	      $quote_author_clr = get_post_meta(get_the_ID(), "_ins_quote_text_color", true );
    ?>
	<?php if (!empty($post_custom_quote_text)): ?>
			<div class="archive_quote-text" style="color:<?php echo esc_attr($quote_author_clr); ?>"><?php echo esc_html($post_custom_quote_text); ?></div>
	<?php endif; ?>

	<?php if (!empty($post_custom_author_name)): ?>
			<h5 style="color:<?php echo esc_attr($quote_author_clr); ?>" class="archive_quote-author"><?php echo esc_html($post_custom_author_name); ?></h5>
	<?php endif; ?>
<div class="archive_quote-link"><a href="<?php echo esc_url(get_permalink()); ?>"></a></div>
</div>