<?php
/**
 * Template Name: Our History
 *
 * Template for displaying Our History timeline page
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <?php include_once (get_template_directory() . '/global-templates/subsection.tpl'); ?>
    <section class="generic bk-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
	                <div class=" "><?php //echo the_content(); ?></div>
	                

					
					<?php

					// Check value exists.
					if( have_rows('timelines') ):
					
					    // Loop through rows.
					    while ( have_rows('timelines') ) : the_row();
					    
							$decade = get_sub_field('decade');
							$style = get_sub_field ('timeline_style');
												
					        // Case: Repeater
					        if( get_row_layout() == 'timeline' ): ?>
								<?php if( have_rows('timeline_content') ):
								?>
						
				                <!-- Timeline -->
								<div class="container timeline <?php echo $style; ?>">
									<div class="row timeline-row">
										<div class="col-12">
											<!-- Timeline header -->
											<div class="timeline-header <?php echo $style; ?>">
												<?php echo $decade; ?>
											</div>
										</div>
									</div>
							
								<?php while( have_rows('timeline_content') ): the_row(); 
							
									// vars
									$image = get_sub_field('timeline_image');
									$copy = get_sub_field('timeline_copy');
									$pullout = get_sub_field('timeline_pullout');
							
									?>
									
								<?php if( get_row_index() % 2 == 0 ){ ?>
								
								<div class="row timeline-row" data-aos="fade-up" data-aos-duration="1000">
									
									<!-- Content -->
									<div class="col-12 col-md-6">						
									  <div class="timeline-container timeline-right  <?php echo $style; ?>">
									    <div class="timeline-content">
									      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
									      <p><?php echo $copy; ?></p>
									    </div>
									  </div>
									</div><!-- end content -->
									
									<!-- Pullout -->
									<?php if (!empty($pullout)) { ?>
									<div class="col-12 col-md-6 order-first order-md-last">	
									  <div class="pullout-left <?php echo $style; ?>">
									    <div class="timeline-content">
									      <p><?php echo $pullout; ?></p>
									    </div>
									  </div>
									</div><!-- end pullout -->
									<?php } ?>	
								</div>
									
								<?php } else { ?>
								
								<div class="row timeline-row" data-aos="fade-up" data-aos-duration="1000">
									
									<!-- Pullout -->
									<?php if (!empty($pullout)) { ?>
									<div class="col-12 col-md-6 order-first order-md-last">	
									  <div class="pullout-right <?php echo $style; ?>">
									    <div class="timeline-content">
									      <p><?php echo $pullout; ?></p>
									    </div>
									  </div>
									</div><!-- end pullout -->
									<?php } ?>								
									
									<!-- Content -->
									<div class="col-12 col-md-6">						
									  <div class="timeline-container timeline-left <?php echo $style; ?>">
									    <div class="timeline-content">
									      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
									      <p><?php echo $copy; ?></p>
									    </div>
									  </div>
									</div><!-- end content -->
																
								</div>						
								<?php } ?>		
		
							
								<?php endwhile; ?>
							
								</div> <!-- end repeater -->
					
					<?php endif; ?>
					
					<?php   endif;
					
					    // End loop.
					    endwhile;
					
					// No value.
					else :
					    // Do something...
					endif;
					?>
					              
				</div>
            </div>
        </div>
    </section>
    <?php include_once (get_template_directory() . '/global-templates/related-links.tpl'); ?>
</div>

<?php get_footer();
