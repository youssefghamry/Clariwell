<?php

$sidebar_id = "default_sidebar";

	if ( is_page() ) {
		$sidebar_id = "page_sidebar";
	}
	else if ( is_singular($post_types = 'portfolio') || is_post_type_archive($post_types = 'portfolio') ) {
		$sidebar_id = "portfolio_sidebar";
	}
	else if ( is_search() ) {
		$sidebar_id = "default_sidebar";
	}
	else if ( class_exists( 'Woocommerce' ) ) {
		if( ( is_shop() || is_product_category() || is_product_tag() ) && is_active_sidebar( 'shop_sidebar' ) ) {
			$sidebar_id = "shop_sidebar";
		}
	}
?>

	<div id="sidebar" class="sidebar sidebar-primary">
		<div class="sidebar-wrapper">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( $sidebar_id ) ) ?>
		</div>
	</div>