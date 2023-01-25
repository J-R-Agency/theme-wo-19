<?php
/**
 * Template Name: Opportunities page
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
    
    <section class="opportunities generic bk-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-8 text-left">
                	<?php 

                	$content = apply_filters('the_content', $post->post_content);
                	echo $content;

                	?>
			<!-- Query -->
			<?php
			global $post;
			$direct_parent = $post->post_parent;
			$args = array(
			    'post_type'      => 'page',
			    'posts_per_page' => -1,
			    'post_parent'    => $post->ID,
			    'order'          => 'ASC',
			    'orderby'        => 'menu_order',
			    'post__not_in' => array( $post->ID ),
			 );
			 
			$parent = new WP_Query( $args );
			 
			if ( $parent->have_posts() ) : ?>
					
				<div class="accordion" id="accordionExample">
					
	            <?php  if( $parent->have_posts() ): ?>
	                <?php 
	                $count = count($parent->have_posts()); 
	                $pages = get_pages( array( 'child_of' => $post->ID, 'post_type' => 'property'));
	                $count = count($pages);
	                $counter = 1;
	                ?>
	
	                <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
	                				
					<!-- Jobs Accordion -->
                    
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $counter; ?>">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter; ?>">
                                    <div class="card-title"><?php the_title(); ?></div>
                                </button>
                            </div>

                            <div id="collapse<?php echo $counter; ?>" class="collapse" aria-labelledby="heading<?php echo $counter; ?>" data-parent="#accordionExample">
                                <div class="card-body">
	                                
                                    <?php the_content(); ?>
									
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

									<?php if( have_rows('sponsor_logos') ): ?>
	                                    <hr>
	
	                                    <h5 class="job">This job opportunity is part funded by</h5>
	                                    
	                                    <div class="row">										
										<?php while( have_rows('sponsor_logos') ): the_row(); 
											// vars
											$sponsor_logo = get_sub_field('sponsor_logo');
											?>
									
											<div class="col-sm-6 col-lg-4 job-img">
												<img src="<?php echo $sponsor_logo['url']; ?>" alt="<?php echo $sponsor_logo['alt'] ?>" />
											</div>
									
										<?php endwhile; ?>
										</div><!-- end sponsors logo row -->
									<?php endif; ?>                            
                                    
                                    
                                </div><!-- end card body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                        <?php $counter += 1; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    
						<?php endwhile; ?>
					<?php endif ?>
				</div> <!-- end accordion -->	
					
				<?php
					else:
				?>
					<div class="msg-no-vacancies">
						<p>There are currently no vacancies to join our team. Please check back for updates. </p>
						<p>You can also stay up-to-date via our social media channels where new vacancies will be shared as they become available.</p>
					</div>
				<?php endif; wp_reset_query(); ?> 
				
                </div> <!-- end col -->
                
                <div class="col-md-4 col-lg-3 d-none d-md-block more-info-sidebar">

                <?php include_once (get_template_directory() . '/sidebar-templates/sidebar-moreinfo.php'); ?>

                </div>
            </div>
        </div>
    </section>
    <?php include_once (get_template_directory() . '/global-templates/related-links.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/banner-cta.tpl'); ?>
</div>

<?php get_footer();
