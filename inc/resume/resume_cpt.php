<?php

// resume CPT
// Register Custom Post Type
function bchavez_resume() {

	$labels = array(
		'name'                  => 'Resume',
		'singular_name'         => 'Resume',
		'menu_name'             => 'Resume',
		'name_admin_bar'        => 'Resume',
		'archives'              => 'resume',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Resume Items',
		'add_new_item'          => 'Add New Resume Item',
		'add_new'               => 'Add Job',
		'new_item'              => 'New Job',
		'edit_item'             => 'Edit Job',
		'update_item'           => 'Update Job',
		'view_item'             => 'View Job',
		'search_items'          => 'Search Jobs',
		'not_found'             => 'Job Not found',
		'not_found_in_trash'    => 'Job Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Job item',
		'uploaded_to_this_item' => 'Uploaded to this Job',
		'items_list'            => 'Jobs list',
		'items_list_navigation' => 'Jobs list navigation',
		'filter_items_list'     => 'Filter Jobs list',
	);
	$rewrite = array(
		'slug'                  => 'resume',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => 'Resume',
		'description'           => 'Resume Entries.',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'resume',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'resume', $args );
// $resume_query = new WP_Query('post_type' => array( 'resume' ));
}
add_action( 'init', 'bchavez_resume', 0 );
