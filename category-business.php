<?php
/**
 * Category Archive page: Business
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    
    <section class="generic">
        <div class="container">
			<?php include (get_template_directory() . '/global-templates/category-tabs.tpl'); ?>	        
			<section class="blog-cards-content">
				<div class="row blog-posts">

					<?php if ( have_posts() ) : ?>
					
					<?php
						// QUERY ALL
						$wp_query = new WP_Query(array(
							'post_type'=>'post',
							'post_status'=>'publish',
							'posts_per_page'=>3,
							'category_name'=>'business',
							'paged' => ( get_query_var('paged') ? get_query_var('paged') : 0)
						));							
					?>
						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
							<?php include (get_template_directory() . '/global-templates/category-card.tpl'); ?>					
						<?php endwhile; ?>
						
						<?php wp_reset_postdata(); ?>
						
					<?php endif; ?>
				</div>
					<!-- Pagination -->
					<div class="row">
						<div class="col-12">
							<?php understrap_pagination(); ?>
						</div>
					</div>
					
            </section>
        </div>
    </section>
    
</div>

<?php get_footer();
