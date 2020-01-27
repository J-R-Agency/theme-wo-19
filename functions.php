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
    if (is_single() && $args->theme_location == 'top-menu') {
        $items .= '<li><a><img id="search-icon" src="<?php echo get_template_directory_uri()?>/assets/img/search.svg" alt="search"></a></li>';
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