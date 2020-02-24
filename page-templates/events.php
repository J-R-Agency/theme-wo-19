<?php
/**
 * Template Name: Events
 *
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
    <section class="generic">
    	<div class="container">    
			
			<!-- DISPLAY POSTS -->

					<div class="row events-posts">
					<?php
						
						$policy = get_cat_ID('policy');
						
						// QUERY ALL EXCEPT POLICIES
						$wp_query = new WP_Query(array(
							'post_type'=>'tribe_events',
							'post_status'=>'publish',
							'posts_per_page'=>6,
							'category__not_in' => $policy,
							'paged' => ( get_query_var('paged') ? get_query_var('paged') : 0)
						));															
					?>
					<!-- WHILE LOOP -->
				    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				    
						<?php include (get_template_directory() . '/global-templates/events-cards.tpl'); ?>
		        
					<?php endwhile; ?>
												    
					<?php wp_reset_postdata(); ?>
					
					</div> <!-- end blog cards row -->
					
					<!-- Pagination -->
					<div class="row">
						<div class="col-12">
							<?php understrap_pagination(); ?>
						</div>
					</div>
						
				</div>
			</section>
    
    	</div><!-- end container -->
    </section><!-- end generic section -->
</div><!-- end site -->

<?php get_footer();
