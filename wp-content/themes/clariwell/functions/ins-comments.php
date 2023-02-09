<?php  function insignia_better_comments($comment, $args, $depth) {
	$add_below = 'comment';
?>
		
	<li <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?> id="comment-<?php comment_ID(); ?>">
		<div id="div-comment-<?php comment_ID(); ?>" class="comment-body allcomments-text-box">
		    <div class="comment-inner <?php echo esc_html($depth == 1 ? 'default-background' : 'bordered-box'); ?>">
			    <div class="comment-header clearfix">
				    <div class="comment-author vcard allcomments-img-box">
					    <?php if(0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
				    </div>

				    <div class="comment-meta-header">
					    <?php printf(wp_kses(__('<div class="fn inv-title-h6">%s</div>', 'clariwell'), array('div' => array('class' => array()))), get_comment_author_link()); ?>
					   <div class="comment-meta commentmetadata date-color allcomments-text-time-day"><a href="<?php echo esc_url(get_comment_link($comment->comment_ID, $args)); ?>">
						<?php
							/* translators: 1: date, 2: time */
							printf(esc_html__('%1$s at %2$s', 'clariwell'), get_comment_date(),  get_comment_time()); ?></a><?php edit_comment_link(esc_html__('(Edit)', 'clariwell'), '&nbsp;&nbsp;', '');
						?>
					</div> 
				</div>
			</div>
			<?php if('0' == $comment->comment_approved) : ?>
			    <div class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'clariwell') ?></div>
			<?php endif; ?>

			<div class="comment-content entry clr allcomments-text-sub-text"><?php comment_text(get_comment_id(), array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
				<div class="reply comment-reply-link ins_comment_rpl">
					<?php echo str_replace('comment-reply-link', 'comment-reply-link ensign-button ensign-button-style-outline ensign-button-size-tiny', get_comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'])))); ?>
				</div>
			</div>
		</div>
	</div>	
<?php
}
