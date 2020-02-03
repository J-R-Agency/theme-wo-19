<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/custom-fields.php',						// Add custom fields.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

// custom nav for footer links

function wpb_custom_new_menu() {
	register_nav_menu('footer-links',__( 'Footer links' ));
	register_nav_menu('top-menu',__( 'Top menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

// Add search icon to top menu
add_filter( 'wp_nav_menu_items', 'add_search_icon', 10, 2 );
function add_search_icon ( $items, $args ) {
    if( $args->theme_location == 'top-menu' ) {
        $items .=
        '
        <li>'.
        	get_template_part( 'searchform' )
        .'</li>
        <li>
        	<a href="#">
        		<img id="search-icon" src="'. get_template_directory_uri() .'/assets/img/search.svg" alt="search">
        	</a>
        </li>';
    }
    return $items;
}

 
// Add Excerpt support for Page post type

add_post_type_support( 'page', 'excerpt' );



add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}

// Google Maps API
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyDegn4MHKzgyeN8rFNPXi30NFLPPf6VZ8M');
}

add_action('acf/init', 'my_acf_init');

// Enqueue search script
function myprefix_enqueue_scripts() {
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/search.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );

// Trim excerpt
function trim_excerpt($text) {
	$string = "[...]";
     $text = str_replace( $string, '...', $text);
     return $text;
    }
add_filter('get_the_excerpt', 'trim_excerpt', 99);

// Limit posts per page

add_action( 'pre_get_posts',  'set_posts_per_page'  );
function set_posts_per_page( $query ) {

  global $wp_the_query;

  if ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_search() ) ) {
    $query->set( 'posts_per_page', 5 );
  }
  elseif ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_archive() ) ){
    $query->set( 'posts_per_page', 5 );
  }  

  return $query;
}

