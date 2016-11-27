<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */


// Register Custom Montessori Staff
function montessori_staff() {

	$labels = array(
		'name'                  => _x( 'Montessori Staff', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Montessori Staff', 'text_domain' ),
		'name_admin_bar'        => __( 'Add Staff', 'text_domain' ),
		'archives'              => __( 'content Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent content:', 'text_domain' ),
		'all_items'             => __( 'All contents', 'text_domain' ),
		'add_new_item'          => __( 'Add New content', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New content', 'text_domain' ),
		'edit_item'             => __( 'Edit content', 'text_domain' ),
		'update_item'           => __( 'Update content', 'text_domain' ),
		'view_item'             => __( 'View content', 'text_domain' ),
		'search_items'          => __( 'Search content', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into content', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this content', 'text_domain' ),
		'items_list'            => __( 'contents list', 'text_domain' ),
		'items_list_navigation' => __( 'contents list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter contents list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Staff', 'text_domain' ),
		'description'           => __( 'School Teachers and Members', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail',  ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 2,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'staff', $args );

}
add_action( 'init', 'montessori_staff', 0 );


// Register Custom School
function school_post_type() {

	$labels = array(
		'name'                  => 'Schools',
		'singular_name'         => 'School',
		'menu_name'             => 'Schools',
		'name_admin_bar'        => 'School',
		'archives'              => 'Schools Archives',
		'parent_item_colon'     => 'Parent School:',
		'all_items'             => 'All Schools',
		'add_new_item'          => 'Add New School',
		'add_new'               => 'Add New School',
		'new_item'              => 'New School',
		'edit_item'             => 'Edit School',
		'update_item'           => 'Update School',
		'view_item'             => 'View School',
		'search_items'          => 'Search School',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into School',
		'uploaded_to_this_item' => 'Uploaded to this School',
		'items_list'            => 'Schools list',
		'items_list_navigation' => 'Schools list navigation',
		'filter_items_list'     => 'Filter Schools list',
	);
	$args = array(
		'label'                 => 'School',
		'description'           => 'montesori school',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 3,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'school', $args );

}
add_action( 'init', 'school_post_type', 0 );
