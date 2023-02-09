<?php

add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3;
    }
}

/*** related products ***/

add_filter( 'woocommerce_output_related_products_args', 'insignia_related_products_args' );
if(!function_exists('insignia_related_products_args')) {
    function insignia_related_products_args( $args ) {
        $args['posts_per_page'] = 3; // 4 related products
        $args['columns'] = 3; // arranged in 2 columns
        return $args;
    }
}

function insignia_custom_product_searchform( $form ) {
	$form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
		<div>
			<input type="text" class="ins_search_input" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_attr__( 'Search Products', 'clariwell' ) . '" />
			<button type="submit" class="ins_submit_btn"  id="searchsubmit" value="'. esc_attr__( 'Search', 'clariwell' ) .'" ><i class="fa fa-search" aria-hidden="true"></i></button>
			<input type="hidden" name="post_type" value="product" /> 
		</div>
	</form>';
	return $form;
}
add_filter( 'get_product_search_form', 'insignia_custom_product_searchform');

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );
    if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
        function woocommerce_output_upsells() {
            woocommerce_upsell_display( 3 ); // Display 3 products in 1 row
        }   
    }
/** Change number of upsells in single prodict posts
*  Set the first number to how many total and the second number to how many rows.
*/
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );
 
    if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
        function woocommerce_output_upsells() {
            woocommerce_upsell_display( 3 ); // Display 3 products in 1 row
        }
    }

    if ( ! function_exists( 'insignia_before_shop_loop_wr_start' ) ) {
    	function insignia_before_shop_loop_wr_start() {
    		$html = '<div class="woocommerce_before_shop_loop">';
	    	echo wp_kses_post($html);
    	}
    }

add_action( 'woocommerce_before_shop_loop', 'insignia_before_shop_loop_wr_start', 15 );

if ( ! function_exists( 'insignia_before_shop_loop_wr_end' ) ) {
	function insignia_before_shop_loop_wr_end() {
		$html = '</div>';
		echo wp_kses_post($html);
	}
}

add_action( 'woocommerce_before_shop_loop', 'insignia_before_shop_loop_wr_end', 40 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
?>