<?php
/**
 * Template Name: Opportunity page (Child)
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

<div class="site">
	
    <section class="opportunities generic bk-white">
        <div class="container">
	        
            <div class="row">
	            <div class="col-12">
		            <h1><?php the_title(); ?></h1>
	            </div>
            </div>
            
            <div class="row">
	            <div class="col-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
	            </div>
            </div>
            
        </div>
    </section>
    
    <section class="opportunities generic bk-grey">
	    <div class="container">
            <div class="row">
	            <div class="col-12">
					<?php
						$full_job_description_link = get_field('full_job_description');
						$equal_opportunities_form_link = get_field('equal_opportunities_form');
						$application_form_link = get_field('application_form');
					?>
					
	                <div class="d-block job-links">
		                
		                <?php if($full_job_description_link): ?>
	                    <a href="<?php echo $full_job_description_link['url']; ?>" class="wo-btn white-orange">
		                    FULL JOB DESCRIPTION
		                </a>
		                <?php endif; ?>
		                
		                <?php if($equal_opportunities_form_link): ?>
	                    <a href="<?php echo $equal_opportunities_form_link['url']; ?>" class="wo-btn white-orange">
		                    EQUAL OPPORTUNITIES FORM
		                </a>
		                <?php endif; ?>
		                
		                <?php if($application_form_link): ?>
	                    <a href="<?php echo $application_form_link['url']; ?>" class="wo-btn orange">
		                    APPLICATION FORM
		                </a>
		                <?php endif; ?>
		                
        			</div>
        		</div>
         	</div>
            

			<?php if( have_rows('sponsor_logos') ): ?>
	            <div class="row">
		            <div class="col-12">            
						<h5 class="job">This job opportunity is part funded by</h5>
		                                    
		                <div class="row">						
					<?php while( have_rows('sponsor_logos') ): the_row(); 
						// vars
						$sponsor_logo = get_sub_field('sponsor_logo');
						?>
				
						<div class="col-sm-6 col-md-3 job-img">
							<img src="<?php echo $sponsor_logo['url']; ?>" alt="<?php echo $sponsor_logo['alt'] ?>" />
						</div>
				
					<?php endwhile; ?>
		                </div><!-- end sponsors logo row -->
		            </div>
	            </div>     							
			<?php endif; ?>                            
   
                    
        </div>
    </section>
    <?php include_once (get_template_directory() . '/global-templates/related-links.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/banner-cta.tpl'); ?>
</div>

<?php get_footer();
