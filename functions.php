<?php

	// Add RSS links to <head> section
	automatic_feed_links();

	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'title-tag' );

	/**
* Add support for Gutenberg.
*
* @link https://wordpress.org/gutenberg/handbook/reference/theme-support/
*/
function mytheme_setup_theme_supported_features() {
		
	// Theme supports wide images, galleries and videos.
	add_theme_support( 'align-wide' );
	
	// Make specific theme colors available in the editor.
 add_theme_support( 'editor-color-palette',
	  array(
			'name' => 'dark blue',
			'color' => '#1767ef',
	  ),
	  array(
			'name' => 'light gray',
			'color' => '#eee',
	  ),
	  array(
			'name' => 'dark gray',
			'color' => '#444',
	  )
 );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

?>
