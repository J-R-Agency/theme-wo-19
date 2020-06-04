<?php
/**
 * Direct downloads cards repeater
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$theme_colour = get_field('theme_colour');

$downloads_title = get_field('subcontent_title');
$downloads_description = get_field('downloads_description');

// check if the repeater field has rows of data
if( have_rows('downloads_repeater') ):

    echo "<section class=\"direct-downloads\">";
        echo "<div class=\"container\">";
        
        if ( $downloads_title ) { echo "<h2 class=\"downloads__title\">" . $downloads_title . "</h2>"; }
        if ( $downloads_description ) { echo "<div class=\"downloads__description\">" . $downloads_description . "</div>"; }

        echo "<div class=\"direct-downloads__container\">";

            // loop through the rows of data
            while ( have_rows('downloads_repeater') ) : the_row();        

                $downloads_cta = get_sub_field('downloads_cta');
                $downloads_file = get_sub_field('downloads_file');
                $downloads_image = get_sub_field('downloads_image');
                
                if( $downloads_file ): 

                    $link_url = $downloads_file['url'];
                    $link_title = $downloads_cta;
                    $image_url = $downloads_image['url'];

                    echo "
                <a href=\"" . $link_url . "\" target=\"_blank\">
                    <div class=\"direct-downloads__card\">
                        <div class=\"direct-downloads__img\" style=\"background-image: url('" . $image_url . "');\">
                        </div>
                        <h3 class=\"direct-downloads__title\">" . $link_title . "</h3>
                    </div>
                </a>
                "
                ;

                endif;

                unset($downloads_cta);
                unset($downloads_file);
                unset($downloads_image);

            endwhile;
    
           echo "</div>";

        echo "</div>";
    echo "</section>";

else :

    // no rows found

endif;

?>
