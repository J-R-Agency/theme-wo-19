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

$theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <!--<?php include_once (get_template_directory() . '/global-templates/subsection.tpl'); ?>-->
    <div class="container">
	    
	    
	    <!-- CATEGORY TABS -->
	    <div class="row">
		    <div class="col-sm-12">
			    <section class="grey_tabs capped-width">
				    <div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link" role="tab" aria-controls="nav-home" href="#">All</a>
						<a class="nav-item nav-link" role="tab" aria-controls="nav-home" href="#">Press Articles</a>
						<a class="nav-item nav-link" role="tab" aria-controls="nav-home" href="#">Business</a>
						<a class="nav-item nav-link" role="tab" aria-controls="nav-home" href="#">Policy</a>
						<a class="nav-item nav-link" role="tab" aria-controls="nav-home" href="#">Culture</a>
						<a class="nav-item nav-link" role="tab" aria-controls="nav-home" href="#">Research</a>
					</div>													
			    </section>
		    </div>
	    </div>
	    <!-- DISPLAY POSTS -->
        <div class="row">

			<?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
            $counter = 0; 
            $numOfCols = 3;
            	
			?>
			 
			<?php if ( $wpb_all_query->have_posts() ) : ?>
			 
			    <!-- the loop -->
			    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			    	<?php
				    	$category = get_the_category();
				    	$cat_name = $category[0]->name;
			    	?>
			    	<div class="col-sm-12 col-lg-4 col-md-4">
				    	<div class="blog-card">
					    	<div class="blog-card__img"><img src="<?php the_post_thumbnail_url(); ?>"></div>
					    	<div class="blog-card__icon">
						    	
						    	<img src="<?php echo get_template_directory_uri()?>/assets/img/blogicon-<?php echo $cat_name; ?>.svg" alt="blog icon">
					    	</div>
					    	<div class="blog-card__category"><?php the_category(', '); ?></div>
				        	<div class="blog-card__title"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></div>
				    	</div>
			        </div>
			        <?php $counter += 1; ?>
				    <?php
						if($counter % $numOfCols == 0) {
							echo '</div><div class="row">';
						}	   
					?>			        
			    <?php endwhile; ?>

			    <!-- end of the loop -->
			 
			    <?php wp_reset_postdata(); ?>
			 
			<?php else : ?>
			    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

        </div> <!-- end DISPLAY POSTS -->
        
    </div>
    <?php include_once (get_template_directory() . '/global-templates/related-links.tpl'); ?>
</div>

<?php get_footer();
