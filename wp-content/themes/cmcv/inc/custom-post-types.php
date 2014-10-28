<?php

// Register Custom Post Type
function cmcv_custom_front() {

	$labels = array(
		'name'                => _x( 'Custom_fronts', 'Post Type General Name', 'cmcv' ),
		'singular_name'       => _x( 'Custom_front', 'Post Type Singular Name', 'cmcv' ),
		'menu_name'           => __( 'Custom_front', 'cmcv' ),
		'parent_item_colon'   => __( 'Parent Item:', 'cmcv' ),
		'all_items'           => __( 'All Items', 'cmcv' ),
		'view_item'           => __( 'View Item', 'cmcv' ),
		'add_new_item'        => __( 'Add New Item', 'cmcv' ),
		'add_new'             => __( 'Add New', 'cmcv' ),
		'edit_item'           => __( 'Edit Item', 'cmcv' ),
		'update_item'         => __( 'Update Item', 'cmcv' ),
		'search_items'        => __( 'Search Item', 'cmcv' ),
		'not_found'           => __( 'Not found', 'cmcv' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'cmcv' ),
	);
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'Custom_front', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cmcv_custom_front', 0 );

/*
// Register Custom Post Type
function ucs_custom_post_type() {

	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'ullacarinstiftelse' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'ullacarinstiftelse' ),
		'menu_name'           => __( 'Projects', 'ullacarinstiftelse' ),
		'parent_item_colon'   => __( 'Parent Item:', 'ullacarinstiftelse' ),
		'all_items'           => __( 'All Items', 'ullacarinstiftelse' ),
		'view_item'           => __( 'View Item', 'ullacarinstiftelse' ),
		'add_new_item'        => __( 'Add New Item', 'ullacarinstiftelse' ),
		'add_new'             => __( 'Add New', 'ullacarinstiftelse' ),
		'edit_item'           => __( 'Edit Item', 'ullacarinstiftelse' ),
		'update_item'         => __( 'Update Item', 'ullacarinstiftelse' ),
		'search_items'        => __( 'Search Item', 'ullacarinstiftelse' ),
		'not_found'           => __( 'Not found', 'ullacarinstiftelse' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'ullacarinstiftelse' ),
	);
	$rewrite = array(
		'slug'                => 'project',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'project', $args );

}

// Hook into the 'init' action
add_action( 'init', 'ucs_custom_post_type', 0 );
*/