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
if( have_rows('assets_guidelines') ):

 	// loop through the rows of data
    while ( have_rows('press_articles') ) : the_row();
        
        echo "<h2>Press articles</h2>";
        echo "<div class=\"container-media-centre bk-grey\">";

        $press_article_title = get_sub_field('press_article_title');
        $press_article_link = get_sub_field('press_article_link');

        if( $press_article_link ):
            echo "<span class=\"media-centre__title\"><a href=\"" . $press_article_link['url'] . "\" title=\"$press_article_title\">$press_article_title</a></span>";
        endif;

        echo "</div><p>&nbsp;</p>";

    endwhile;

else :

    // no rows found

endif;

?>
