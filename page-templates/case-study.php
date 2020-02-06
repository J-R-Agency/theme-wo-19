<?php
/**
 * Template Name: Case Study
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
    <?php include_once (get_template_directory() . '/global-templates/feature-standfirst.tpl'); ?>
    
    <section class="story-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="case-study-content">
	                    <?php
							if (have_posts()):
							  while (have_posts()) : the_post();
							    the_content();
							  endwhile;
							else:
							  echo '<p>Sorry, no posts matched your criteria.</p>';
							endif;		                    
	                     ?>
	                </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once (get_template_directory() . '/global-templates/subsection-cards--stories.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/banner-cta.tpl'); ?>
</div>

<?php get_footer();
