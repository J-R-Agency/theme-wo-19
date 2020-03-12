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
			<?php include (get_template_directory() . '/global-templates/category-tabs.tpl'); ?>	        
			<section class="blog-cards-content">
				<div class="row blog-posts">

					<?php if ( have_posts() ) : ?>

						<?php
							$query = new WP_Query(array(
							    'posts_per_page'   => 6,
							    'category_name' => 'research'
							));
							
							while ($query->have_posts()): $query->the_post();
						?>
							<?php include (get_template_directory() . '/global-templates/category-card.tpl'); ?>					
						<?php endwhile; ?>
	
					<?php else : ?>
	
						<?php get_template_part( 'loop-templates/content', 'none' ); ?>
	
					<?php endif; ?>
				</div>
            </section>
        </div>
</div>

<?php get_footer();
