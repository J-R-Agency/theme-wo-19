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

    echo "<h2>Official social accounts</h2>";

 	// loop through the rows of data
    while ( have_rows('social_media_accounts') ) : the_row();

        // display a sub field value
        $social_media_account = get_sub_field('social_media_account');
        // display a sub field value
        $social_media_handle = get_sub_field('social_media_handle');
        // display a sub field value
        $social_media_description = get_sub_field('social_media_description');
        // display a sub field value
        $social_media_link = get_sub_field('social_media_link');

    	echo "<div class=\"container-media-centre bk-grey " . $social_media_account . "\">";

    	switch ( $social_media_account ){

    		case "social-twitter":
    			$social_title = "Twitter";
       		break;

    		case "social-facebook":
    			$social_title = "Facebook";
       		break;

    		case "social-linkedin":
    			$social_title = "LinkedIn";
       		break;

    		case "social-instagram":
    			$social_title = "Instagram";
       		break;

    		default :
    			$social_title = "Social";
       		break;
    	}


        if( $social_media_link ):
            echo "<span class=\"media-centre__title\"><a href=\"" . $social_media_link['url'] . "\" title=\"$press_article_title\">$social_title</a></span><p>$social_media_handle</p>";
        endif;


        echo "</div>";

        unset($social_media_account);
        unset($social_media_handle);
        unset($social_media_description);
        unset($social_media_link);
        unset($social_title);

    endwhile;

else :

    // no rows found

endif;

?>
