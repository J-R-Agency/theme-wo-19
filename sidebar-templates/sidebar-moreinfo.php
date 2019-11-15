<?php
/**
 * Sidebar - hero setup.
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
 
<section class="related-container">
   <h4>More Info</h4>
    <ul class="related-list">
 
   <?php while ( $parent->have_posts() ) : $parent->the_post();
        // Featured image
         $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
   ?>
        <li class="related-child">
            <a href="<?php the_permalink()?>" class="theme"><?php the_title(); ?></a>
        </li><!-- /.child -->
  <?php endwhile; ?>
 </ul>
</section><!-- /.child-grid -->
 
<?php endif; wp_reset_query(); ?>