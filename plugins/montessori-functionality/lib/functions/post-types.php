<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
if ( ! function_exists('school_post_type') ) {

// Register Custom Post Type
function school_post_type() {

	$labels = array(
		'name'                  => 'Schools',
		'singular_name'         => 'School',
		'menu_name'             => 'Schools',
		'name_admin_bar'        => 'School',
		'archives'              => 'School Archives',
		'parent_item_colon'     => 'Parent School:',
		'all_items'             => 'All Schools',
		'add_new_item'          => 'Add New School',
		'add_new'               => 'New School',
		'new_item'              => 'New School',
		'edit_item'             => 'Edit School',
		'update_item'           => 'Update School',
		'view_item'             => 'View School',
		'search_items'          => 'Search Schools',
		'not_found'             => 'No Schools found',
		'not_found_in_trash'    => 'No Schools found in Trash',
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
		'description'           => 'information about the school',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
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
		'capability_type'       => 'page',
	);
	register_post_type( 'school', $args );

}
add_action( 'init', 'school_post_type', 0 );

}
// Register Custom Post Type
function teachers_post_type() {

	$labels = array(
		'name'                  => 'Teachers',
		'singular_name'         => 'Teacher',
		'menu_name'             => 'Teachers',
		'name_admin_bar'        => 'Teacher',
		'archives'              => 'Teacher Archives',
		'parent_item_colon'     => 'Parent Teacher:',
		'all_items'             => 'All Teachers',
		'add_new_item'          => 'Add New Teacher',
		'add_new'               => 'New Teacher',
		'new_item'              => 'New Teacher',
		'edit_item'             => 'Edit Teacher',
		'update_item'           => 'Update Teacher',
		'view_item'             => 'View Teacher',
		'search_items'          => 'Search Teachers',
		'not_found'             => 'No Teachers found',
		'not_found_in_trash'    => 'No Teachers found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Teacher',
		'uploaded_to_this_item' => 'Uploaded to this Teacher',
		'items_list'            => 'Teachers list',
		'items_list_navigation' => 'Teachers list navigation',
		'filter_items_list'     => 'Filter Teachers list',
	);
	$args = array(
		'label'                 => 'Teacher',
		'description'           => 'teacher information pages.',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'teacher', $args );

}
add_action( 'init', 'teachers_post_type', 0 );