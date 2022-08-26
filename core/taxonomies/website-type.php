<?php
function register_type_of_website_taxonomy() {
	// Part
	$labels = array(
		'name'              => __('Types of Website'),
		'singular_name'     => __('Type of Website'),
		'search_items'      => __('Search Types of Website'),
		'all_items'         => __('All Types of Website'),
		'edit_item'         => __('Edit Type of Website'),
		'update_item'       => __('Update Type of Website'),
		'add_new_item'      => __('Add New Type of Website'),
		'new_item_name'     => __('New Type of Website'),
		'menu_name'         => __('Type of Website'),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'sort'              => true,
		'args'              => array( 'orderby' => 'term_order' ),
		'rewrite'           => array( 'slug' => 'type' ),
		'show_admin_column' => true,
		'show_in_rest'      => true,
	);

	register_taxonomy( 'type-of-website', array( 'projects' ), $args );
}