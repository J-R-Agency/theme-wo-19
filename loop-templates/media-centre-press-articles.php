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
    
    $press_articles_section_title = get_field('press_articles_section_title');

    echo "<h2>" . $press_articles_section_title . "</h2>";

 	// loop through the rows of data
    while ( have_rows('press_articles') ) : the_row();
        
        echo "<div class=\"container-media-centre press_articles bk-grey\">";

        $press_article_title = get_sub_field('press_article_title');
        $press_article_link = get_sub_field('press_article_link');

        if( $press_article_link ):
            echo "<span class=\"media-centre__title\"><a href=\"" . $press_article_link['url'] . "\" title=\"$press_article_title\" target=\"_blank\">$press_article_title</a></span>";
        endif;

        echo "</div>";

    endwhile;

else :

    // no rows found

endif;

?>
