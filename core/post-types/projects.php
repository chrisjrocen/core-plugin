<?php
/**
 * Add Custom Post Type.
 *
 * @package coreplugin.
 */

/*****************************************************************************
Register an extra post type for content with taxonomy
 *****************************************************************************/

function register_projects_post_type() {
	// Project 
	$labels = array(
		'name'               => __( 'Projects', 'core-plugin' ),
		'singular_name'      => __( 'Project', 'core-plugin' ),
		'add_new'            => __( 'New Project', 'core-plugin' ),
		'add_new_item'       => __( 'Add New Project', 'core-plugin' ),
		'edit_item'          => __( 'Edit Project', 'core-plugin' ),
		'new_item'           => __( 'New Project', 'core-plugin' ),
		'view_item'          => __( 'View Project', 'core-plugin' ),
		'search_items'       => __( 'Search Projects', 'core-plugin' ),
		'not_found'          => __( 'No Project Found', 'core-plugin' ),
		'not_found_in_trash' => __( 'No Project found in Trash', 'core-plugin' ),
	);
	$args = array(
		'label'               => __( 'Projects', 'core-plugin' ),
		'labels'              => $labels,
		'description'         => __( 'Projects you have worked on', 'core-plugin'),
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'public'              => true,
		'publicly_queryable'  => true,
		'can_export'          => true,
		'show_in_rest'        => true,
		'exclude_from_search' => false,
		'hierarchical'        => false,
		'menu_icon'           => 'dashicons-analytics',
		'capability_type'     => 'post',
		'taxonomies'          => array( '' ),
		'rewrite'             => array( 'slug' => 'projects' ),
		'supports'            => array( 
			'title',
			'custom-fields',
			'thumbnail',
			'editor'
		),

	);
	register_post_type( 'projects', $args );
}
