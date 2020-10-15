<?php
/**
 * Template Name: Impact & Expertise
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
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <section class="generic bk-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php echo apply_filters ( 'the_content', $post->post_content ) ; ?>
                </div>
            </div>
        </div>
    </section>
    <?php include_once (get_template_directory() . '/global-templates/subsection-cards.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/related-links.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/banner-cta.tpl'); ?>
</div>

<?php get_footer();
