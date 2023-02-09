<div class = "post-gallery-wrapper">
	<?php $post_custom_gallery = get_post_meta(get_the_ID(), "_ins_gallery_for_post", true ); ?>
	<?php if (!empty($post_custom_gallery )): ?>
    <div class="post-image-gallery slider">
        <?php
            foreach ( (array) $post_custom_gallery as $attachment_id => $attachment_url ) { ?>
            <div> <?php echo wp_get_attachment_image( $attachment_id,array('700', '600'));?> </div>
       <?php } ?>
    </div>
    <?php endif; ?>
</div>