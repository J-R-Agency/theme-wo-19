<?php
/**
 * Template Name: Standard page
 *
 * Template for displaying a standard page just with the header and footer area and a "naked" content area in between.
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
    <section class="standard-content generic bk-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-8 text-left">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content', 'standard' ); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

                </div>
                
                <div class="col-md-4 col-lg-3 d-none d-md-block more-info-sidebar">

                <?php include_once (get_template_directory() . '/sidebar-templates/sidebar-moreinfo.php'); ?>

                </div>
            </div>
        </div>
    </section>
    <?php include_once (get_template_directory() . '/global-templates/related-links.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/banner-cta.tpl'); ?>
</div>

<?php get_footer();
