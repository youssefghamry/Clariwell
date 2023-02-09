<?php
function testimonial_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'clariwell' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'clariwell' ),
		'menu_name'             => __( 'Testimonial', 'clariwell' ),
		'name_admin_bar'        => __( 'Testimonial', 'clariwell' ),
		'archives'              => __( 'Testimonial Archives', 'clariwell' ),
		'attributes'            => __( 'Item Attributes', 'clariwell' ),
		'parent_item_colon'     => __( 'Parent Item:', 'clariwell' ),
		'all_items'             => __( 'All Testimonials', 'clariwell' ),
		'add_new_item'          => __( 'Add New Testimonial', 'clariwell' ),
		'add_new'               => __( 'Add New Testimonial', 'clariwell' ),
		'new_item'              => __( 'New Item', 'clariwell' ),
		'edit_item'             => __( 'Edit Testimonial', 'clariwell' ),
		'update_item'           => __( 'Update Testimonial', 'clariwell' ),
		'view_item'             => __( 'View Testimonial', 'clariwell' ),
		'view_items'            => __( 'View Testimonials', 'clariwell' ),
		'search_items'          => __( 'Search Testimonial', 'clariwell' ),
		'not_found'             => __( 'Not found', 'clariwell' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'clariwell' ),
		'featured_image'        => __( 'Featured Image', 'clariwell' ),
		'set_featured_image'    => __( 'Set featured image', 'clariwell' ),
		'remove_featured_image' => __( 'Remove featured image', 'clariwell' ),
		'use_featured_image'    => __( 'Use as featured image', 'clariwell' ),
		'insert_into_item'      => __( 'Insert into Testimonial', 'clariwell' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'clariwell' ),
		'items_list'            => __( 'Testimonials list', 'clariwell' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'clariwell' ),
		'filter_items_list'     => __( 'Filter Testimonials list', 'clariwell' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'clariwell' ),
		'labels'                => $labels,
        'menu_icon'             => 'dashicons-format-quote',
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonial_post', $args );
}
add_action( 'init', 'testimonial_post_type', 1);

add_action( 'init', 'create_testimonial_tax',0 );

function create_testimonial_tax() {
	register_taxonomy(
		'testimonial_category',
		'testimonial_post',
		array(
			'label' => __( 'Testimonial Category' ),
			'rewrite' => array( 'slug' => 'testimonial_category' ),
			'hierarchical' => true,
		)
	);
}

/*
End Testimonial custom post field
*/

// Register Portfolio Custom Post Type

function wp_portfolio() {
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => ( 'Portfolio' ),
				'singular_name' => ( 'Portfolio' ),
				'add_new' => ( 'Add New ' ),
				'add_new_item' => ( 'Add New Portfolio' ),
				'edit_item' => ( 'Edit Portfolio Item' ),
				'new_item' => ( 'Add New Portfolio Item' ),
				'view_item' => ( 'View Portfolio Item' ),
				'search_items' => ( 'Search Portfolio Item' ),
				'not_found' => ( 'No Portfolio Item found' ),
				'not_found_in_trash' => ( 'No Portfolio Item found in trash' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'comments' ),
			'taxonomies' => array('portfolio_category'),
			'capability_type' => 'post',
			'rewrite' => array("slug" => "portfolio"), // Permalinks format
			'menu_position' => 5,
            'has_archive'   => true,	
            'menu_icon' => 'dashicons-screenoptions'
		)
	);
}

add_action( 'init', 'wp_portfolio' );

add_action( 'init', 'create_portfolio_tax',0 );

function create_portfolio_tax() {
	register_taxonomy(
		'portfolio_category',
		'portfolio',
		array(
			'label' => __( 'Portfolio Category' ),
			'rewrite' => array( 'slug' => 'portfolio_category' ),
			'hierarchical' => true,
		)
	);
}