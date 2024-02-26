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
    <?php include_once (get_template_directory() . '/global-templates/homepage_video.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <!-- ?php include_once (get_template_directory() . '/global-templates/featured-event.tpl'); ?-->
    <?php include_once (get_template_directory() . '/global-templates/carousel_home.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/grey_tabs.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/home-stories.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/fullimg-cta_partners.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/blog-home.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/fullimg-cta_conversation.tpl'); ?>
</div>

<?php get_footer();
