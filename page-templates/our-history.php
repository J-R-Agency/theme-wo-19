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
	                
	                <!-- Timeline (Orange) -->
					<div class="container timeline orange">
						<div class="row timeline-row">
							<div class="col-12">
								<!-- Timeline header -->
								<div class="timeline-header orange">
									1990
								</div>
							</div>
						</div>

						<div class="row timeline-row">					
							
							<div class="col-12 col-md-6">						
							  <div class="timeline-container orange timeline-left">
							    <div class="content">
							      <img src="http://192.168.33.10/womens-organization/wp-content/uploads/2019/12/09_Business_Start-up_Support_D4A7727.jpg">
							      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
							    </div>
							  </div>
							</div>
							
							<div class="col-12 col-md-6 order-first order-md-last">	
							  <div class="orange pullout-right">
							    <div class="content">
							      <p>1996</p>
							    </div>
							  </div>
							</div>		
							
						</div>							  

						<div class="row timeline-row">
							<div class="col-12 col-md-6"></div>
							<div class="col-12 col-md-6">						  						  
							  <div class="timeline-container orange timeline-right">
							    <div class="content">
							      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
							    </div>
							  </div>
							</div>
							
							
						</div>

						<div class="row timeline-row">
							<div class="col-12 col-md-6">							  
							  <div class="timeline-container orange timeline-left">
							    <div class="content">
							      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
							    </div>
							  </div>
							</div>
							<div class="col-12 col-md-6"></div>
						</div>
						  
						</div>
					</div><!-- end timeline -->

	                <!-- Timeline (Aqua) -->
					<div class="timeline aqua">
						
						<!-- Timeline header -->
						<div class="row timeline-row">
							<div class="col-12">						
								<div class="timeline-header aqua">
									2000
								</div>
							</div>
						</div>
						
						<div class="row timeline-row">
							<div class="col-12 col-md-6">					
							  <div class="timeline-container aqua timeline-left">
							    <div class="content">
							      <img src="http://192.168.33.10/womens-organization/wp-content/uploads/2019/12/09_Business_Start-up_Support_D4A7727.jpg">
							      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
							    </div>
							  </div>
							</div>
							 
							<div class="col-12 col-md-6 order-first order-md-last">	
							  <div class="aqua pullout-right">
							    <div class="content">
							      <p>2002</p>
							    </div>
							  </div>
							</div>
						</div>

						<div class="row timeline-row">
							
							<div class="col-12 col-md-6">	
							  <div class="aqua pullout-left">
							    <div class="content">
							      <p>2004</p>
							    </div>
							  </div>
							</div>
							
							<div class="col-12 col-md-6">								  
							  <div class="timeline-container aqua timeline-right">
							    <div class="content">
							      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
							    </div>
							  </div>
							</div>				  
						</div>
						
					</div><!-- end timeline -->

					<!-- Timeline (Purple) -->
					<div class="timeline purple">
						
						<!-- Timeline header -->
						<div class="row timeline-row">
							<div class="col-12">						
								<div class="timeline-header purple">
									2010
								</div>
							</div>
						</div>
						
						<div class="row timeline-row">
							<div class="col-12 col-md-6">					
							  <div class="timeline-container purple timeline-left">
							    <div class="content">
							      <img src="http://192.168.33.10/womens-organization/wp-content/uploads/2019/12/09_Business_Start-up_Support_D4A7727.jpg">
							      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
							    </div>
							  </div>
							</div>
							 
							<div class="col-12 col-md-6 order-first order-md-last">	
							  <div class="purple pullout-right">
							    <div class="content">
							      <p>Today</p>
							    </div>
							  </div>
							</div>
						</div>
					</div><!-- end timeline -->
					              
				</div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();
