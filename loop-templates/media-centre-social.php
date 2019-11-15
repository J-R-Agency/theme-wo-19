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
if( have_rows('social_media_accounts') ):

 	// loop through the rows of data
    while ( have_rows('social_media_accounts') ) : the_row();

    	echo "<div class=\"container-media-centre bk-grey\">";

        // display a sub field value
        the_sub_field('social_media_account');
        // display a sub field value
        the_sub_field('social_media_handle');
        // display a sub field value
        the_sub_field('social_media_description');
        // display a sub field value
        the_sub_field('social_media_link');

        echo "</div>";

    endwhile;

else :

    // no rows found

endif;

?>
