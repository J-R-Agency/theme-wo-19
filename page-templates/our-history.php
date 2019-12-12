<?php
/**
 * Template Name: Our History
 *
 * Template for displaying Our History timeline page
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/subsection.tpl'); ?>
    <section class="generic bk-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php echo $post->post_content; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();
