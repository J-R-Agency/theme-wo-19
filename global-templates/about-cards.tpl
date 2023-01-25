<?php
/**
 * About banner and leadership repeater
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<section class="generic capped-width">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="h1">Our Leadership</div>
                <p class="strapline">&nbsp;</p>
            </div>
        </div>
        <div class="row row-eq-height">
            <?php  if( have_rows('leadership_repeater') ): ?>
                <div class="leader-card-container">
                <?php $count = 0; ?>
                <?php while ( have_rows('leadership_repeater') ) : the_row(); ?>
                    <?php $class = ($count != 0) ?: 'first'; ?>
                    <?php $image = get_sub_field('image'); ?>
                    <div class="col-sm-12 col-md-4">
                        <div class="leader-card <?php echo $class; ?>">
                            <div class="leader-card__img theme_overlay"><img src="<?php echo $image['url']; ?>" alt="leadership image"></div>
                            <div class="leader-card__name theme"><?php the_sub_field('name');?></div>
                            <div class="leader-card__category"><?php the_sub_field('role');?></div>
                            <p><?php the_sub_field('summary');?></p>
                        </div>
                    </div>
                    <?php $count = $count + 1; ?>
                <?php endwhile; ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>