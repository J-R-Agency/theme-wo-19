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

// Remove excerpt "read more" button
function understrap_all_excerpts_get_more_link( $post_excerpt ) {

	return $post_excerpt;
}

add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );


// Limit posts per page

add_action( 'pre_get_posts',  'set_posts_per_page'  );
function set_posts_per_page( $query ) {

  global $wp_the_query;

  if ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_search() ) ) {
    $query->set( 'posts_per_page', 5 );
  }
  elseif ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_archive() ) ){
    $query->set( 'posts_per_page', 6 );
  }  

  return $query;
}


/*=============================================
                BREADCRUMBS
=============================================*/
function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '>'; // delimiter between crumbs
    $home = '<img src="'.get_template_directory_uri().'/assets/img/home.png" alt="home icon">'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
        }
    } else {
        echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            // echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
            echo $before . single_cat_title('', false) . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $cats;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</div>';
    }
} // end the_breadcrumb()



/*
    TRIBE EVENTS
*/
/**
 * Add a list of clickable category links below the event
 * search bar.
 *
 * Can be easily styled using the following selector:
 *
 * .the-events-calendar-category-list
 */
add_action( 'tribe_events_bar_after_template', function() {
  $terms = get_terms( [
    'taxonomy' => Tribe__Events__Main::TAXONOMY
  ] );
 
  if ( empty( $terms ) || is_wp_error( $terms ) ) {
    return;
  }
 
  echo '<div class="the-events-calendar-category-list"><ol>';
 
  foreach ( $terms as $single_term ) {
    $url = esc_url( get_term_link( $single_term ) );
    $name = esc_html( get_term_field( 'name', $single_term ) );
 
    echo "<li><a href='$url'>$name</a> </li>";
  }
 
  echo '</ol></div>';
} );


/*
    ADD SUPPORT FOR EDITOR STYLE
*/

function theme_wo_19__setup() {
    add_editor_style();
}
add_action( 'after_setup_theme', 'theme_wo_19__setup' );

