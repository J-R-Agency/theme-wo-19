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
 
if ( $parent->have_posts() ) { 

    $subcontent_title = get_field('subcontent_title')

    ?>
 

<section class="related-links content capped-width">
    <div class="container">
        <?php 
        if ( $subcontent_title != "" ) { 
            ?>
	    <div class="row">
		    <div class="col-12">
			    <h1><?php echo $subcontent_title ; ?></h1>
		    </div>
	    </div>
        <?php 
        } 
        ?>
        <div class="row">
            <?php

            if( $parent->have_posts() ){

                $count = count($parent->have_posts()); 
                $pages = get_pages( array( 'child_of' => $post->ID, 'post_type' => 'property'));
                $count = count($pages);
                
                if($count <= 0){
                    $class = "col-md-6";
                }else{
                    $class = "col-md-4";
                }

                while ( $parent->have_posts() ) : $parent->the_post(); ?>

                    <div class="col-sm-12 related-links__card <?php echo $class; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <div 
                                class="related-links__img theme_overlay d-flex align-items-center"
                                style="background-image:url('<?php echo get_the_post_thumbnail_url(  $post->ID, 'medium_large' ) ;?>');">
                                <div class="related-links__title"><?php the_title(); ?></div>
                            </div>
                        </a>
                    </div>
                    <?php 
                    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
                endwhile; 
            } ?>
        </div>
    </div>
</section>


<?php
} 
wp_reset_query(); 
?>


