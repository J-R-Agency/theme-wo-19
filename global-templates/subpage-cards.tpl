<?php
/**
 * Subsection cards banner and repeater
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
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'post__not_in' => array( $post->ID ),
 );
 
 
$parent = new WP_Query( $args );
 
if ( $parent->have_posts() ) : ?>
 

<section class="related-links content capped-width">
    <div class="container">
	    <div class="row">
		    <div class="col-12">
			    <h1><?php the_field('subcontent_title')?></h1>
		    </div>
	    </div>
        <div class="row">
            <?php  if( $parent->have_posts() ): ?>
                <?php 
                $count = count($parent->have_posts()); 
                $pages = get_pages( array( 'child_of' => $post->ID, 'post_type' => 'property'));
                $count = count($pages);
                
                if($count <= 0){
                    $class = "col-md-6";
                }else{
                    $class = "col-md-4";
                }
                ?>

                <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

                    <div class="col-sm-12 related-links__card <?php echo $class; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <div 
                                class="related-links__img theme_overlay d-flex align-items-center"
                                style="background-image:url('<?php echo get_the_post_thumbnail_url(  $post->ID, 'medium_large' ) ;?>');">
                                <div class="related-links__title"><?php the_title(); ?></div>
                            </div>
                        </a>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    
                <?php endwhile; ?>
            <?php endif ?>
        </div>
    </div>
</section>


<?php endif; wp_reset_query(); ?>

