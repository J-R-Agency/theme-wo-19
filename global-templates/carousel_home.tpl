<?php
/**
 * Homepage Carousel.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<section class="carousel_home grey-w-icon capped-width">
    <div class="container">
        <div class="row align-items-center text-center justify-content-center">
            <div class="col-sm-12">
                <h4>Why we do, what we do</h4>
            </div>
            <?php  if( have_rows('carousel_item') ): ?>
            <div id="carousel_home" class="carousel slide col-sm-12 col-md-10 col-lg-8" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $count = 0; ?>
                    <?php while ( have_rows('carousel_item') ) : the_row(); ?>
                        <?php $class = ($count != 0) ?: 'active'; ?>
                        <div class="carousel-item <?php echo $class; ?>">
                            <div class="h3"><?php the_sub_field('ch_tagline');?></div>
                        </div>
                        <?php $count = $count + 1; ?>
                    <?php endwhile; ?>
                </div>
                <ol class="carousel-indicators">
                    <?php $count = 0; ?>
                    <?php while ( have_rows('carousel_item') ) : the_row(); ?>
                        <?php $class = ($count != 0) ?: 'class="active"'; ?>
                        <li data-target="#carousel_home" data-slide-to="<?php echo $count; ?>" <?php echo $class; ?>></li>
                        <?php $count = $count + 1; ?>
                    <?php endwhile; ?>
                </ol>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>