<?php
/**
 * Related links banner and repeater
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
 
 <section class="related-links">
    <div class="container">
        <div class="row">
            <?php  if( have_rows('related_links_repeater') ): ?>
                <?php while ( have_rows('related_links_repeater') ) : the_row(); ?>
                    <?php $image = get_sub_field('rl_image'); ?>
                    <div class="col-sm-12 col-md-6 related-links__card">
                        <a href="<?php the_sub_field('rl_link');?>">
                            <div 
                                class="related-links__img theme_overlay d-flex align-items-center"
                                style="background-image:url('<?php echo $image['url']; ?>');">
                                <div class="related-links__title"><?php the_sub_field('rl_title');?></div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif ?>
        </div>
    </div>
</section>