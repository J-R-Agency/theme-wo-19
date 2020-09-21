<?php
/**
 * Template Name: Landing page (with subcards)
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landing pages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

get_header(); 

$landing_page__content = $post->post_content;


?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <?php if ( $landing_page__content != "" ) { ?>
    <section class="generic bk-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--div class="landing_page__content"><?php echo $landing_page__content ; ?></div-->
                    <?php echo apply_filters ( 'the_content', $landing_page__content ) ; ?>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php include_once (get_template_directory() . '/global-templates/subpage-cards.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/direct-downloads-cards.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/banner-cta.tpl'); ?>
</div>

<?php get_footer();
