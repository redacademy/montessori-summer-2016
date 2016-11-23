<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */




// Register Staff Taxonomy
// Register Custom Taxonomy
function staff() {

	$labels = array(
		'name'                       => 'Staff',
		'singular_name'              => 'Staff Member',
		'menu_name'                  => 'Staff',
		'all_items'                  => 'All Staff',
		'parent_item'                => 'Parent Staff',
		'parent_item_colon'          => 'Parent Staff:',
		'new_item_name'              => 'New Staff Name',
		'add_new_item'               => 'Add New Staff',
		'edit_item'                  => 'Edit Staff',
		'update_item'                => 'Update Staff',
		'view_item'                  => 'View Staff',
		'separate_items_with_commas' => 'Separate Staff with commas',
		'add_or_remove_items'        => 'Add or remove staff',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Staff',
		'search_items'               => 'Search Staff',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No staff',
		'items_list'                 => 'Staff list',
		'items_list_navigation'      => 'Staff list navigation',
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
	register_taxonomy( 'Staff', array( 'staff' ), $args );

}
add_action( 'init', 'staff', 0 );
