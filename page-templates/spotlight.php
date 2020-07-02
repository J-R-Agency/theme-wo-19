<?php
/**
 * Template Name: Spotlight page
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



    <section class="spotlight-intro subsection bk-grey grey-w-icon capped-width">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <?php echo apply_filters ( 'the_content', $post->post_content ) ; ?>
                </div>
            </div>
        </div>
    </section>


<?php

// Check rows exists.
if( have_rows('spotlight_content') ):

    // Loop through rows.
    while( have_rows('spotlight_content') ) : the_row();

        // Load sub field value.

        $spotlight_panel = get_sub_field('spotlight_panel');
        $spotlight_style = get_sub_field('spotlight_style');
        $spotlight_alignment = get_sub_field('spotlight_alignment');

        // Do something...

        if ( $spotlight_style == "spotlight-intro") {

            $spotlight_class = $spotlight_style . " " . $spotlight_alignment . " subsection bk-grey grey-w-icon capped-width";

        } elseif ( $spotlight_style == "spotlight-grey") {

            $spotlight_class = $spotlight_style . " " . $spotlight_alignment . " subsection bk-grey capped-width";

        } elseif ( $spotlight_style == "spotlight-grey-full") {

            $spotlight_class = $spotlight_style . " " . $spotlight_alignment . " subsection bk-grey";

        } elseif ( $spotlight_style == "spotlight-white" ) {

            $spotlight_class = $spotlight_style . " " . $spotlight_alignment . " subsection capped-width";

        } else {

            $spotlight_class = $spotlight_style . " " . $spotlight_alignment . " subsection capped-width";

        }
?>
    <section class="<?php echo $spotlight_class ; ?>">
        <div class="container">
            <div class="row align-items-center <?php echo $spotlight_alignment ; ?> justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <?php echo apply_filters ( 'the_content', $spotlight_panel ) ; ?>
                </div>
            </div>
        </div>
    </section>
<?

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

?>


</div>

<?php get_footer();
