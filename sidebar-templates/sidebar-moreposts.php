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
  ?>
 
<section class="related-container">
	<h4>More from the blog</h4>
		<ul class="related-list">
	
		<?php
			$categories = get_categories();
			
			foreach($categories as $category) {
				if($category->name !== 'Uncategorized'):
					echo
					'<div class="col-md-8"><a href="' . get_category_link($category->term_id) . '/#nav-tab">' . $category->name . ' >' . '</a></div>';
				endif;
		}?>	 
			
			
 
   <!--<?php while ( $related->have_posts() ) : $related->the_post();   ?>
        <li class="related-child">
            <a href="<?php the_permalink()?>" class="theme"><?php the_title(); ?></a>
        </li><!-- /.child -->
	<!--<?php endwhile; ?>-->
 </ul>
</section><!-- /.child-grid -->
 
<?php wp_reset_query(); ?>