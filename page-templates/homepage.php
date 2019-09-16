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
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <section class="carousel_home">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                <div class="col-sm-12">
                    <h4>Why we do, what we do</h4>
                </div>
                <div id="carousel_home" class="carousel slide col-sm-12 col-md-10 col-lg-8" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="h3">Women in full-time work currently earn  an average of 15% less per hour than men</div>
                        </div>
                        <div class="carousel-item">
                            <div class="h3">Women in full-time work currently earn  an average of 15% less per hour than men</div>
                        </div>
                        <div class="carousel-item">
                            <div class="h3">Women in full-time work currently earn  an average of 15% less per hour than men</div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel_home" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel_home" data-slide-to="1"></li>
                        <li data-target="#carousel_home" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();
