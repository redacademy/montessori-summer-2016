<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register staff categories
function staff_category() {

	$labels = array(
		'name'                       => _x( 'staff categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Taxonomystaff category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'staff categores', 'text_domain' ),
		'all_items'                  => __( 'All staff categories', 'text_domain' ),
		'parent_item'                => __( 'Parent staff category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent staff category:', 'text_domain' ),
		'new_item_name'              => __( 'New staff category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New staff category', 'text_domain' ),
		'edit_item'                  => __( 'Edit staff category', 'text_domain' ),
		'update_item'                => __( 'Update staff category', 'text_domain' ),
		'view_item'                  => __( 'View staff category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate staff categoris with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove staff categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular staff categoris', 'text_domain' ),
		'search_items'               => __( 'Search staff categoris', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No staff categoris', 'text_domain' ),
		'items_list'                 => __( 'staff categories list', 'text_domain' ),
		'items_list_navigation'      => __( 'staff categories list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'staff_categories', array( 'staff' ), $args );

}
add_action( 'init', 'staff_category', 0 );



// Register Custom school categories
function school_categories() {

	$labels = array(
		'name'                       => _x( 'school categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'school category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'school categories', 'text_domain' ),
		'all_items'                  => __( 'All School categories', 'text_domain' ),
		'parent_item'                => __( 'Parent School categories', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent School category:', 'text_domain' ),
		'new_item_name'              => __( 'New School category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New School category', 'text_domain' ),
		'edit_item'                  => __( 'Edit School category', 'text_domain' ),
		'update_item'                => __( 'Update School category', 'text_domain' ),
		'view_item'                  => __( 'View School category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate school categories with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove school categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular School categories', 'text_domain' ),
		'search_items'               => __( 'Search School categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No school categories', 'text_domain' ),
		'items_list'                 => __( 'School categories list', 'text_domain' ),
		'items_list_navigation'      => __( 'School categories list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'school categories', array( 'school' ), $args );

}
add_action( 'init', 'school_categories', 0 );
