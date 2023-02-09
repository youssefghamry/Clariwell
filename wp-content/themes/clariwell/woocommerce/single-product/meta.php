<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
        <span class="details-container">
		    <span class="sku_wrapper inv-details-wrapper"><?php _e( 'SKU:', 'clariwell' ); ?> <span class="sku" itemprop="sku"><?php echo esc_html( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'clariwell' ); ?></span></span>
        </span>
    <?php endif; ?>
        
    <span class="details-container">
        <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in inv-details-wrapper">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'clariwell' ) . ' ', '</span>' ); ?>
    </span>

    <span class="details-container">
        <?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as inv-details-wrapper">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'clariwell' ) . ' ', '</span>' ); ?>
    </span>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>
	
</div>