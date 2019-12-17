<?php
/**
 * Sidebar - More info setup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php
global $post;
$args = array(
        'category__in'   => wp_get_post_categories( $post->ID ),
        'posts_per_page' => 5,
        'post__not_in'   => array( $post->ID )
 );
 
 
$related = new WP_Query( $args );
 
if ( $related->have_posts()) : ?>
 
<section class="related-container">
   <h4>Related Posts</h4>
    <ul class="related-list">
 
   <?php while ( $related->have_posts() ) : $related->the_post();   ?>
        <li class="related-child">
            <a href="<?php the_permalink()?>" class="theme"><?php the_title(); ?></a>
        </li><!-- /.child -->
  <?php endwhile; ?>
 </ul>
</section><!-- /.child-grid -->
 
<?php endif; wp_reset_query(); ?>