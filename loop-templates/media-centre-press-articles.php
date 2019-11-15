<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

?>

<?php

// check if the repeater field has rows of data
if( have_rows('press_articles') ):

 	// loop through the rows of data
    while ( have_rows('press_articles') ) : the_row();
        
        echo "<div class=\"container-media-centre bk-grey\">";

        // display a sub field value
        the_sub_field('press_article_title');
        // display a sub field value
        the_sub_field('press_article_link');

        echo "</div>";

    endwhile;

else :

    // no rows found

endif;

?>
