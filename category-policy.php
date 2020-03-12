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

// get the current taxonomy term
$term = get_queried_object();

// vars
$theme_colour = get_field('theme_colour', $term);
$category_feature_image = get_field('feature_image', $term);

// $theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?> ">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
 	<section class="generic">
        <h1>Current policies</h1>
        <div class="container">
			<section class="blog-cards-content">
				<div class="row blog-posts">

					<?php if ( have_posts() ) : ?>
						<?php
							$query = new WP_Query(array(
							    'posts_per_page'   => 6,
							    'category_name' => 'business'
							));
							
							while ($query->have_posts()): $query->the_post();
						?>
							<?php include (get_template_directory() . '/global-templates/category-card--plain.tpl'); ?>					
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
