 <?php
/**
 * Blog banner.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<section class="generic capped-width">
    <div class="container">

<?php
if ( get_field('blog_section_title') ) {
?>

        <div class="row">
            <div class="col-sm-12">
                <div class="h1"><?php the_field('blog_section_title'); ?></div>
                <?php
				if ( get_field('blog_section_intro') ) {
				?>
                <p class="strapline"><?php the_field('blog_section_intro'); ?></p>
                <?php
				}
				?> 
            </div>
        </div>

<?php
}
?>         
        <div class="row align-items-center">
	        <?php
				
				$policy = get_cat_ID('policy');
				
				// QUERY ALL EXCEPT POLICIES 
				$wp_query = new WP_Query(array(
					'post_type'=>'post',
					'post_status'=>'publish',
					'posts_per_page'=>3,
					'category__not_in' => $policy,
					'paged' => ( get_query_var('paged') ? get_query_var('paged') : 0)
				));															
			?>
			<!-- WHILE LOOP -->
		    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		    
				<?php include (get_template_directory() . '/global-templates/category-card.tpl'); ?>
	    
			<?php endwhile; ?>
										    
			<?php wp_reset_postdata(); ?>
        </div>
            <div class="col-sm-12">
                <a href="<?php echo site_url();?>/blog-media/" class="wo-btn orange">Visit the blog</a>
            </div>
        </div>
    </div>
</section>