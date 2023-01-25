<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

$downloads_title = get_field('downloads_title');
$downloads_description = get_field('downloads_description');

// check if the repeater field has rows of data
if( have_rows('downloads_repeater') ):

    echo "<div class=\"container-downloads downloads bk-grey\">";
    
    if ( $downloads_title ) { echo "<h2 class=\"downloads__title\">" . $downloads_title . "</h2>"; }
    if ( $downloads_description ) { echo "<div class=\"downloads__description\">" . $downloads_description . "</div>"; }

   	// loop through the rows of data
    while ( have_rows('downloads_repeater') ) : the_row();        

		$downloads_cta = get_sub_field('downloads_cta');
		$downloads_file = get_sub_field('downloads_file');
		
		if( $downloads_file ): 
			$link_url = $downloads_file['url'];
			$link_title = $downloads_cta;
			echo "<a class=\"wo-btn " . $theme_colour . " wo-btn--standard-content wo-btn--downloads\" href=\"" . esc_url ( $link_url ) . "\" target=\"_blank\">" . esc_html ( $downloads_cta ) . "</a>" ;
		endif;

		unset($downloads_file);

    endwhile;

    echo "</div>";

else :

    // no rows found

endif;

?>