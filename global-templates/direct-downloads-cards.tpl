<?php
/**
 * Direct downloads cards repeater
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$theme_colour = get_field('theme_colour');

$lp_downloads_title = get_field('lp_subcontent_title');
$downloads_description = get_field('downloads_description');

// check if the repeater field has rows of data
if( have_rows('lp_downloads_repeater') ):

    echo "<section class=\"direct-downloads\">";
        echo "<div class=\"container\">";
        
        if ( $lp_downloads_title ) { echo "<h2 class=\"downloads__title\">" . $lp_downloads_title . "</h2>"; }
        if ( $lp_downloads_description ) { echo "<div class=\"downloads__description\">" . $lp_downloads_description . "</div>"; }

        echo "<div class=\"direct-downloads__container\">";

            // loop through the rows of data
            while ( have_rows('lp_downloads_repeater') ) : the_row();        

                $lp_downloads_cta = get_sub_field('lp_downloads_cta');
                $lp_downloads_file = get_sub_field('lp_downloads_file');
                $lp_downloads_image = get_sub_field('lp_downloads_image');
                
                if( $lp_downloads_file ): 

                    $link_url = $lp_downloads_file['url'];
                    $link_title = $lp_downloads_cta;
                    $image_url = $lp_downloads_image['url'];

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

                unset($lp_downloads_cta);
                unset($lp_downloads_file);
                unset($lp_downloads_image);

            endwhile;
    
           echo "</div>";

        echo "</div>";
    echo "</section>";

else :

    // no rows found

endif;

?>
