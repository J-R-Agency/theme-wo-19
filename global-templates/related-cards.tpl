<?php
/**
 * Related links banner and repeater
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>



<section class="related-cards capped-width">

<?php 
if( get_field('related_links_title' ) ) {
    echo "<h3 class=\"related-cards__title\">". get_field('related_links_title') . "ABOUT</h3>" ;
}

if( have_rows('related_links_repeater') ){ ?>

    <div class="related-cards__container">

<?php 
    while ( have_rows('related_links_repeater') ) : the_row();
        unset($rl_image);
        unset($rl_link);
        unset($rl_title);
        $rl_image = get_sub_field('rl_image'); 
        $rl_link = get_sub_field('rl_link');
        $rl_title = get_sub_field('rl_title');
    ?>
        <div class="related-cards__card <?php echo $class; ?>">
            <a href="<?php echo $rl_link;?>">
                <div 
                    class="related-cards__img theme_overlay"
                    style="background-image:url('<?php echo $rl_image['url']; ?>');"
                    >
                    <div class="related-cards__card-title"><?php echo $rl_title; ?></div>
                </div>
            </a>
        </div>

    <?php endwhile; ?>

    </div>
<?php
} // End if cards exist
?>
</section>