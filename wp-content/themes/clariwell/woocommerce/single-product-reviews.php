<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( ! comments_open() ) {
	return;
}

?>
<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<h2 class="woocommerce-Reviews-title inv-woocoomerce-tabs-title"><?php
			if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' && ( $count = $product->get_review_count() ) )
				printf( _n( '%s review for %s%s%s', '%s reviews for %s%s%s', $count, 'clariwell' ), $count, '<span>', get_the_title(), '</span>' );
			else
				_e( 'Reviews', 'clariwell' );
		?></h2>

		<?php if ( have_comments() ) : ?>

			<ol class="commentlist inv-woocommerece-comment-list">
				<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
			</ol>

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				echo '<nav class="woocommerce-pagination">';
				paginate_comments_links( apply_filters( 'woocommerce_comment_pagination_args', array(
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
					'type'      => 'list',
				) ) );
				echo '</nav>';
			endif; ?>

		<?php else : ?>

			<p class="woocommerce-noreviews"><?php _e( 'There are no reviews yet.', 'clariwell' ); ?></p>

		<?php endif; ?>
	</div>

	<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->id ) ) : ?>

		<div id="review_form_wrapper">
			<div id="review_form">
				<?php
					$commenter = wp_get_current_commenter();

					$comment_form = array(
						'title_reply'          => have_comments() ? __( 'Add a review', 'clariwell' ) : sprintf( __( 'Be the first to review &ldquo;%s&rdquo;', 'clariwell' ), get_the_title() ),
						'title_reply_to'       => __( 'Leave a Reply to %s', 'clariwell' ),
						'comment_notes_after'  => '',
						'fields'               => array(
							'author' => '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ensign-review-author"><p class="comment-form-author inv-product-review">' .
				'<input class="inv-woocommerce-author-field" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" placeholder="' . esc_attr__('Name*', 'clariwell') . '" aria-required="true" required /></p></div>',
							'email'  => '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ensign-review-email"><p class="comment-form-email inv-product-review">' .
				'<input class="inv-woocommerce-author-field" id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true" placeholder="' . esc_attr__('Email*', 'clariwell') . '" required /></p></div>',
						),
						'label_submit'  => __( 'Submit', 'clariwell' ),
						'logged_in_as'  => '',
						'comment_field' => ''
					);

					if ( $account_page_url = wc_get_page_permalink( 'myaccount' ) ) {
						$comment_form['must_log_in'] = '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a review.', 'clariwell' ), esc_url( $account_page_url ) ) . '</p>';
					}

					if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
						$comment_form['comment_field'] = '<p class="comment-form-rating"><label for="rating">' . __( 'Your Rating', 'clariwell' ) .'</label><select name="rating" id="rating" aria-required="true" required>
							<option value="">' . __( 'Rate&hellip;', 'clariwell' ) . '</option>
							<option value="5">' . __( 'Perfect', 'clariwell' ) . '</option>
							<option value="4">' . __( 'Good', 'clariwell' ) . '</option>
							<option value="3">' . __( 'Average', 'clariwell' ) . '</option>
							<option value="2">' . __( 'Not that bad', 'clariwell' ) . '</option>
							<option value="1">' . __( 'Very Poor', 'clariwell' ) . '</option>
						</select></p>';
					}

					$comment_form['comment_field'] .= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ensign-review-main"><p class="comment-form-comment ins-product-review"><label for="comment">' . __( 'Your Review', 'clariwell' ) . ' <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p></div>';

					comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
				?>
			</div>
		</div>

	<?php else : ?>

		<p class="woocommerce-verification-required"><?php _e( 'Only logged in customers who have purchased this product may leave a review.', 'clariwell' ); ?></p>

	<?php endif; ?>

	<div class="clear"></div>
</div>
