<?php
/**
 * Template Name: Blog & Media
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    
    <section class="instagram-cta">
	    <div class="container-fluid">
		    <div class="row">
			    <div class="col-12">
				    The latest from Instagram
			    </div>
		    </div>
	    </div>
    </section>
    
    <div class="container-fluid">
		<div class="row">
		    <div class="col-12">
			    <?php
					if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
					   echo do_shortcode("[instagram-feed num=3]");
					}	
					else {
					   echo do_shortcode("[instagram-feed num=9]");
					}
			    ?>
			    
		    </div>
	    </div>
    </div>
    
	<div class="container">    
    	
		<?php include_once (get_template_directory() . '/global-templates/category-tabs.tpl'); ?>
		
		<!-- DISPLAY POSTS -->

		<div class="row blog-posts">
		<?php
			
			$policy = get_cat_ID('policy');
			
			// QUERY ALL EXCEPT POLICIES 
			$wp_query = new WP_Query(array(
				'post_type'=>'post',
				'post_status'=>'publish',
				'posts_per_page'=>6,
				'category__not_in' => $policy,
				'paged' => ( get_query_var('paged') ? get_query_var('paged') : 0)
			));															
		?>
		<!-- WHILE LOOP -->
	    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
	    
			<?php include (get_template_directory() . '/global-templates/category-card.tpl'); ?>
    
		<?php endwhile; ?>
									    
		<?php wp_reset_postdata(); ?>
		
		</div> <!-- end blog cards row -->
		
		<!-- Pagination -->
		<div class="row">
			<div class="col-12">
				<?php understrap_pagination(); ?>
			</div>
		</div>
					

    </div><!-- end container -->
</div><!-- end site -->

<?php get_footer();
