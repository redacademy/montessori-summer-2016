<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function teachers_post_type() {

	$labels = array(
		'name'                  => 'Teachers',
		'singular_name'         => 'Teacher',
		'menu_name'             => 'Teacher',
		'name_admin_bar'        => 'Teacher',
		'archives'              => 'Teachers Archives',
		'parent_item_colon'     => 'Parent Teacher:',
		'all_items'             => 'All Teachers',
		'add_new_item'          => 'Add New Teacher',
		'add_new'               => 'Add New',
		'new_item'              => 'New Teacher',
		'edit_item'             => 'Edit Teacher',
		'update_item'           => 'Update Teacher',
		'view_item'             => 'View Teacher',
		'search_items'          => 'Search Teacher',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
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
		'description'           => 'This is the Teachers Post Type',
		'labels'                => $labels,
		'supports'              => array( 'title', 'author', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
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
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'teachers_post_type', 0 );
