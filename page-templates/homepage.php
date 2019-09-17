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
$pcta_bkimg = get_field('pcta_bkimg');
echo $pcta_bkimg;
get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/carousel_home.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/grey_tabs.tpl'); ?>
    <section class="partner-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 partner-cta__content">
                    <div class="h1"><?php echo the_field('pcta_title');?></div>
                    <p><?php echo the_field('pcta_descriptor');?></p>
                    <a href="<?php echo the_field('pcta_btnlink');?>" class="wo-btn purple"><?php echo the_field('pcta_btntitle');?></a>
                </div>
                <div class="col-lg-6 d-none d-lg-block stretch-right partner-cta__bkimg" style="background-image:url('<?php echo $pcta_bkimg['url']; ?>');">
                    
                </div>
            </div>
        </div>
    </section>
    <section class="generic">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="h1">From The Blog</div>
                    <p>Lorem ipsum dolor si</p>
                    <a href="#" class="wo-btn orange">Visit the blog</a>
                </div>
            </div>
        </div>
    </section>
    <section class="conversation-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block stretch-left conversation-cta__bkimg" style="background-image:url('http://localhost:8888/WomensOrg/wp-content/uploads/2019/09/sustaining-your-business-tile.png');"></div>
                <div class="col-lg-6 col-md-12 conversation-cta__content">
                    <div class="h1">Start a conversation</div>
                    <p>Lorem ipsum dolor si Lorem ipsum dolor si</p>
                    <a href="<?php echo the_field('pcta_btnlink');?>" class="wo-btn purple"><?php echo the_field('pcta_btntitle');?></a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();
