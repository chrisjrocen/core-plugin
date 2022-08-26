<?php
/**
 * Plugin Name: Core Plugin
 * Plugin URI:  https://ocenchris.com
 * Description: Core Plugin
 * Author:      Ocen Chris
 * Author URI:  https://ocenchris.com
 * Version:     1.0.0
 * License:     1.0.0
 * text-domain: core-plugin
 *
 * @package coreplugin.
 */

// If this file is called directly, abort!!!
defined( 'ABSPATH' ) || die( 'No Access!' );

if ( 'PLUGIN_URL' ) {
	define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

//includes
require_once( plugin_dir_path( __FILE__ ) . '/core/post-types/projects.php' );
require_once( plugin_dir_path( __FILE__ ) . '/core/taxonomies/website-type.php' );


//Hooks and Filters
add_action( 'init', 'register_projects_post_type' );
add_action( 'init', 'register_type_of_website_taxonomy' );


//Shortcodes



