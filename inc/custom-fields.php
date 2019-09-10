<?php

// add options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
	));	
} 

// to add custom post types to the sites menu
add_action( 'init', 'create_post_type' );

function create_post_type() {
	// example post
	// register_post_type( 'how_do_i_use',
	// 	array(
	// 		'labels' => array(
	// 			'name' => __( 'How do I use' ),
	// 			'singular_name' => __( 'How do I use' )
	// 		),
	// 	'public' => true,
	// 	'show_in_nav_menus' => true,
	// 	'has_archive' => true,
	// 	'menu_icon' => get_template_directory_uri() . '/assets/images/theme/admin-icons/icon-howtouse.svg',
	// 	'capability_type' => 'post',
	// 	'capabilities' => array(
	// 			'create_posts' => 'do_not_allow',
	// 		),
	// 	'map_meta_cap' => true,
	// 	)
	// );
}