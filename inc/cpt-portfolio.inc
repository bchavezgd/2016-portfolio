<?php

// Register Custom Post Type
function bchavez_portfolio_cpt() {

	$labels = array(
		'name'                  => _x( 'Portfolio Items', 'Post Type General Name', 'bchavez_portfolio' ),
		'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'bchavez_portfolio' ),
		'menu_name'             => __( 'Portfolio', 'bchavez_portfolio' ),
		'name_admin_bar'        => __( 'Portfolio', 'bchavez_portfolio' ),
		'archives'              => __( 'Item Archives', 'bchavez_portfolio' ),
		'parent_item_colon'     => __( 'Parent Item:', 'bchavez_portfolio' ),
		'all_items'             => __( 'All Items', 'bchavez_portfolio' ),
		'add_new_item'          => __( 'Add New Item', 'bchavez_portfolio' ),
		'add_new'               => __( 'Add New', 'bchavez_portfolio' ),
		'new_item'              => __( 'New Item', 'bchavez_portfolio' ),
		'edit_item'             => __( 'Edit Item', 'bchavez_portfolio' ),
		'update_item'           => __( 'Update Item', 'bchavez_portfolio' ),
		'view_item'             => __( 'View Item', 'bchavez_portfolio' ),
		'search_items'          => __( 'Search Item', 'bchavez_portfolio' ),
		'not_found'             => __( 'Not found', 'bchavez_portfolio' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bchavez_portfolio' ),
		'featured_image'        => __( 'Featured Image', 'bchavez_portfolio' ),
		'set_featured_image'    => __( 'Set featured image', 'bchavez_portfolio' ),
		'remove_featured_image' => __( 'Remove featured image', 'bchavez_portfolio' ),
		'use_featured_image'    => __( 'Use as featured image', 'bchavez_portfolio' ),
		'insert_into_item'      => __( 'Insert into item', 'bchavez_portfolio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'bchavez_portfolio' ),
		'items_list'            => __( 'Items list', 'bchavez_portfolio' ),
		'items_list_navigation' => __( 'Items list navigation', 'bchavez_portfolio' ),
		'filter_items_list'     => __( 'Filter items list', 'bchavez_portfolio' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio Item', 'bchavez_portfolio' ),
		'description'           => __( 'Portfolio items', 'bchavez_portfolio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'bchavez_portfolio',
		'capability_type'       => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'bchavez_portfolio_cpt', 0 );
