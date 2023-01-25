<?php
/**
 * Subsection cards banner and repeater
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
 
 <section class="related-links capped-width">
    <div class="container">
        <div class="row">
            <?php if(get_field('title_for_subcontent')){
                echo '<div class="col-sm-12 text-center"><div class="h1">'. get_field('title_for_subcontent') .'</div><br><br></div>';
            }
            ?>
            <?php  if( have_rows('subcontent_cards') ): ?>
                <?php 
                $count = count(get_field('subcontent_cards')); 
                if($count <= 2){
                    $class = "col-md-6";
                }else{
                    $class = "col-md-4";
                }
                ?>

                <?php while ( have_rows('subcontent_cards') ) : the_row(); ?>

                    <?php
                    $post_object = get_sub_field('subcontent_card');
                    if( $post_object ): 
                        // override $post
                        $post = $post_object;
                        setup_postdata( $post ); 
                        $post_bg_image = get_the_post_thumbnail_url( $post->ID, 'medium_large' );
                        ?>
                        <div class="col-sm-12 related-links__card <?php echo $class; ?>">
                            <a href="<?php the_permalink(); ?>">
                                <div 
                                    class="related-links__img theme_overlay d-flex align-items-center"
                                    style="background-image:url('<?php echo $post_bg_image ?>');">
                                    <div class="related-links__title"><?php the_title(); ?></div>
                                </div>
                            </a>
                        </div>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>

                    
                <?php endwhile; ?>
            <?php endif ?>
        </div>
    </div>
</section>