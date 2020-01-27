<?php
/**
 * Template Name: Case Studies
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
    
    <section class="generic bk-white">
        <div class="container">
	        
		    <!-- Content CTA -->
		    <?php
			    $content_cta_link = get_field('content_cta_url');
			    $content_cta_text = get_field('content_cta_text');
		    ?>
		    <section class="content-cta">
		        <div class="container">
			        <div class="row content-cta-text">
				        <div class="col-sm-12 col-lg-6 col-md-6">
					        
					        	<h2><?php echo $content_cta_text; ?></h2>
					        
				        </div>
			            <div class="col-sm-12 col-lg-6 col-md-6">
							<a href=" <?php echo $content_cta_link['url']; ?> ">
					        	<div class="wo-btn white-orange wo-btn--standard-content">
						        	<?php echo $content_cta_link['title']; ?>
						        </div>
					        </a>
			            </div>
			        </div> 
		    	</div> <!-- end container -->      
			</section>
			
        </div>
    </section>
    

    
    <?php include_once (get_template_directory() . '/global-templates/subsection-cards--stories.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/banner-cta.tpl'); ?>
</div>

<?php get_footer();