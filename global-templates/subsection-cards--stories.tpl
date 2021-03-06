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
    'posts_per_page' => 3,
    'post_parent'    => $direct_parent, // Get this pages id and find the children
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'post__not_in' => array( $post->ID ),
 );
 
 
$parent = new WP_Query( $args );
 
if ( $parent->have_posts() ) : ?>
 

<section class="related-links capped-width">
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
					<a href="<?php the_permalink()?>">
                        <div class="col-sm-12 <?php echo $class; ?> related-links__card">
                            <div 
                                class="related-links__img d-flex align-items-center"
                                style="background-image:url('<?php echo get_the_post_thumbnail_url(  $post->ID, 'medium_large' ) ;?>');">
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <div class="related-links__excerpt"><?php echo $post->post_excerpt ;?></div>
                            <div class="related-links__button">
                            	<a class="wo-btn orange wo-btn--cards" href="<?php the_permalink()?>">
                                	Hear her story
                                </a>
                            </div>
                        </div>
					</a>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    
                <?php endwhile; ?>
            <?php endif ?>
        </div>
    </div>
</section>


<?php endif; wp_reset_query(); ?>

