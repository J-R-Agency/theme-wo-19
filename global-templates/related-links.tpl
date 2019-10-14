<?php
/**
 * Related links banner and repeater
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
 
 <section class="related-links capped-width">
    <div class="container">
        <div class="row">
            <?php if(get_field('related_links_title')){
                echo '<div class="col-sm-12 text-center"><div class="h1">'. get_field('related_links_title') .'</div><br><br></div>';
            }
            ?>
            <?php  if( have_rows('related_links_repeater') ): ?>
                <?php 
                $count = count(get_field('related_links_repeater')); 
                if($count <= 2){
                    $class = "col-md-6";
                }else{
                    $class = "col-md-4";
                }
                ?>

                <?php while ( have_rows('related_links_repeater') ) : the_row(); ?>
                    <?php $image = get_sub_field('rl_image'); ?>
                    <div class="col-sm-12 related-links__card <?php echo $class; ?>">
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