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
		'taxonomies'            => array( 'project_type', 'roles' ),
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

// Register Custom Post Type
function bchavez_portfolio_static() {

	$labels = array(
		'name'                  => _x( 'Static Pages', 'Post Type General Name', 'bchavez_portfolio' ),
		'singular_name'         => _x( 'Static Page', 'Post Type Singular Name', 'bchavez_portfolio' ),
		'menu_name'             => __( 'Static Page', 'bchavez_portfolio' ),
		'name_admin_bar'        => __( 'Static Page', 'bchavez_portfolio' ),
		'archives'              => __( 'Static Page Archives', 'bchavez_portfolio' ),
		'parent_item_colon'     => __( 'Parent Static Page:', 'bchavez_portfolio' ),
		'all_items'             => __( 'All Static Pages', 'bchavez_portfolio' ),
		'add_new_item'          => __( 'Add New Static Page', 'bchavez_portfolio' ),
		'add_new'               => __( 'Add Static Page', 'bchavez_portfolio' ),
		'new_item'              => __( 'New Static Page', 'bchavez_portfolio' ),
		'edit_item'             => __( 'Edit Static Page', 'bchavez_portfolio' ),
		'update_item'           => __( 'Update Static Page', 'bchavez_portfolio' ),
		'view_item'             => __( 'View Static Page', 'bchavez_portfolio' ),
		'search_items'          => __( 'Search Static Page', 'bchavez_portfolio' ),
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
		'label'                 => __( 'Static Page', 'bchavez_portfolio' ),
		'description'           => __( 'Static Pages', 'bchavez_portfolio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'project_type', 'roles' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'static',
		'capability_type'       => 'page',
	);
	register_post_type( 'static_page', $args );

}
add_action( 'init', 'bchavez_portfolio_static', 0 );


// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Roles', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Role', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Role', 'text_domain' ),
		'all_items'                  => __( 'All Roles', 'text_domain' ),
		'parent_item'                => __( 'Parent Role', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Role:', 'text_domain' ),
		'new_item_name'              => __( 'New Role Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Role', 'text_domain' ),
		'edit_item'                  => __( 'Edit Role', 'text_domain' ),
		'update_item'                => __( 'Update Role', 'text_domain' ),
		'view_item'                  => __( 'View Role', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Roles with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Roles', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Roles', 'text_domain' ),
		'search_items'               => __( 'Search Roles', 'text_domain' ),
		'not_found'                  => __( 'Role Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Roles list', 'text_domain' ),
		'items_list_navigation'      => __( 'Roles list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'roles', array( 'portfolio' ), $args );


	$labels = array(
		'name'                       => _x( 'Project Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Project Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Project Type', 'text_domain' ),
		'all_items'                  => __( 'All Project Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Project Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Project Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Project Type Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Project Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Project Type', 'text_domain' ),
		'update_item'                => __( 'Update Project Type', 'text_domain' ),
		'view_item'                  => __( 'View Project Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Project Types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Project Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Project Types', 'text_domain' ),
		'search_items'               => __( 'Search Project Types', 'text_domain' ),
		'not_found'                  => __( 'Project Type Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Project Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Project Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'project_type', array( 'portfolio' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

// Add Shortcode
function project_description( $atts , $content = null ) {

	return '<section class="project-description">' . do_shortcode($content) . '</section>';

}
function project_gallery( $atts , $content = null ) {

	return '<section class="project-gallery">' . do_shortcode($content) . '</section>';

}
add_shortcode( 'project-gallery', 'project_gallery' );
add_shortcode( 'project-description', 'project_description' );
