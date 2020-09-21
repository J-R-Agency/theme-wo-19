<?php
/**
 * Template Name: Location
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

    <!-- Logo, Copy & CTA link -->
    <section class="generic bk-white">
        <div class="container">
	        <div class="row">
	            <div class="col-sm-12">
	                <?php echo apply_filters ( 'the_content', $post->post_content ) ; ?>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-sm-12">
	                <?php 
	                $content_cta_link = get_field('content_cta_url'); 
	                $content_cta_url = $content_cta_link['url'];
	                ?>
					<a href=" <?php echo $content_cta_url; ?> " target="_blank" title="<?php the_field('content_cta_text'); ?>">
			        	<div class="wo-btn <?php echo $theme_colour; ?> wo-btn--standard-content">
				        	<?php the_field('content_cta_text'); ?>
				        </div>
			        </a>
	            </div>
	        </div> 
    	</div> <!-- end container -->      
	</section>
    
    <!-- Map -->
    <section class="standard-content map-container">
	    <div class="container">
		    <div class="row">
		        <div class="col-12 col-md-6 col-lg-6" style="padding:0;">
			        <div class="location-map">
						<?php the_field('map_banner_google_details') ?>
			        </div>            
		        </div>
		        <div class="col-12 col-md-6 col-lg-6">
		            <div class="map-banner-cta">
			            <h1><?php the_field('map_banner_title');?></h1>
			            <p><?php the_field('map_banner_copy');?></p>
		            </div>
		        </div>	            
		    </div> <!-- end map row -->
	    </div>
    </section>
    
    <!-- CTA Banner -->
	<?php include_once (get_template_directory() . '/global-templates/banner-cta.tpl'); ?>            
</div> <!-- end site -->

<?php get_footer();
