<?php
/**
 * Template Name: Blog & Media
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    
    <div class="container">    
	    
		<?php include_once (get_template_directory() . '/global-templates/category-tabs.tpl'); ?>
    
    </div><!-- end container -->
</div><!-- end site -->

<?php get_footer();
