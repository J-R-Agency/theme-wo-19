<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">

    <h1 class="theme"><?php the_title();?></h1>

</div>

<?php get_footer();
