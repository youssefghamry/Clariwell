<?php if ( have_comments() || comments_open() )  { ?>
	<section id="comments" class="clearfix comments-area">
	<?php } ?>
		<?php 
		if ( have_comments() ) : 
			global $comments_by_type;
			$comments_by_type = separate_comments( $comments );
			if ( ! empty( $comments_by_type['comment'] ) ) : 
			?>
    			<?php  if ( !post_password_required() ) { ?>
    			<section id="comments-list" class="comments">
    				<h3 class="comments-title no-margin"><?php comments_number(); ?></h3>
    				<?php if ( get_comment_pages_count() > 1 ) : ?>
    					<nav id="comments-nav-above" class="comments-navigation" role="navigation">
    						<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
    					</nav>
    				<?php endif; ?>
    				<ul class="insignia_comment_list">
    					<?php  wp_list_comments( array(
    					'short_ping' => true,
    					'avatar_size'=> 70,
    					'callback' => 'insignia_better_comments'
    					) );
    					?>
    				</ul>
    				<?php if ( get_comment_pages_count() > 1 ) : ?>
    					<nav id="comments-nav-below" class="comments-navigation" role="navigation">
    						<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
    					</nav>
    				<?php endif; ?>
    			</section>
    		<?php 
    		}
		endif; 
		endif;
		  
	if ( comments_open() ) {	 
		$consent = empty( $commenter['comment_author_email'] ) ?  : 'checked="checked"';
		$comments_form_args = array(
								'fields' => apply_filters( 'comment_form_default_fields', array(

								'author' 	=> '<div class="row comment-name-email"><div class="col-md-6"><input id="author" name="author" placeholder="' . esc_attr__('Name*', 'clariwell') . '" type="text" required="required" class="input-lg form-control"></div>',

								'email' 	=> '<div class="col-md-6"><input id="email" name="email" type="email" placeholder="' . esc_attr__('Email*', 'clariwell') . '" required="required" class="input-lg form-control"></div></div>',
								'cookies' => '<div class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
								'<label for="wp-comment-cookies-consent">' . esc_attr__( 'Save my name and email in this browser for the next time I comment.', 'clariwell' ) . '</label></div>',
								)),

								'comment_field' =>  '<div class="comment-form-text"><textarea name="comment" id="comment" placeholder="' . esc_attr__('Comment*', 'clariwell') . '" class="form-control" cols="45" rows="5" aria-required="true"></textarea></div>',
				);
		comment_form($comments_form_args);
		  
	} else{ 
			if ( have_comments() ){ ?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'clariwell' ); ?></p>
	   <?php } } ?>
			<?php if ( have_comments() || comments_open() )  { ?>
	</section>
<?php } ?>