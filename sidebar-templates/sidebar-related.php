<?php
/**
 * Sidebar - Related links cards setup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php
global $post;
$direct_parent = $post->post_parent;
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $direct_parent, // Get this pages id and find the children
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'post__not_in' => array( $post->ID ),
 );
 
 
$parent = new WP_Query( $args );
 
if ( $parent->have_posts() && $direct_parent !=0) : ?>
 

<section class="related-links capped-width">
    <div class="container">
        <div class="row">
            <?php  if( $parent->have_posts() ): ?>
                <?php 
                //$count = count($parent->have_posts()); 
                $pages = get_pages( array( 'child_of' => $post->ID, 'post_type' => 'property'));
                $count = count($pages);
                if($count <= 2){
                    $class = "col-md-6";
                }else{
                    $class = "col-md-4";
                }
                ?>

                <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

                        <div class="col-sm-12 related-links__card <?php echo $class; ?>">
                            <a href="<?php the_permalink(); ?>">
                                <div class="related-links__img"><img src="<?php get_the_post_thumbnail_url( $post->ID, 'medium_large' ) ;?>"></div>
                                <h3><?php the_title(); ?></h3>
                                <div class="related-links__excerpt"><?php the_excerpt(); ?></div>
                                <a class="wo-btn <?php echo $theme_colour; ?> wo-btn--cards" href="<?php the_permalink()?>">Hear her story</a>
                            </a>
                        </div>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    
                <?php endwhile; ?>
            <?php endif ?>
        </div>
    </div>
</section>


<?php endif; wp_reset_query(); ?>