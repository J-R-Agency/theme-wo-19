<?php
/**
 * Template Name: Contact
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

<!-- 	
	<section class="subsection content">		
		<div class="container">
	        <div class="row">
	            <div class="col-sm-12">
	                <h1><?php the_title() ?></h1>
	                <h2>Get in touch with the Women's Organisation</h2>
	            </div>
	        </div>
		</div>
	</section>
 -->
    <!-- CONTACT CARDS -->
    <section class="generic content bk-white">
        <div class="container-fluid">
            <div class="row contact-cards-wrapper">
					<?php if( have_rows('contact_card') ): ?>
					
						<?php while( have_rows('contact_card') ): the_row(); 
					
							// vars
							$contact_card_title = get_sub_field('contact_card_title');
							$contact_card_body = get_sub_field('contact_card_body');
							$contact_card_cta = get_sub_field('contact_card_cta');
							$contact_card_cta_link = get_sub_field('contact_card_cta_link');
							$contact_card_colour = get_sub_field('contact_card_colour');
							?>
					
							<div class="col-12 col-md-4 col-lg-4">
								<div class="contact-card <?php echo $contact_card_colour; ?>">
									<h2><?php echo $contact_card_title; ?></h2>
									<p><?php echo $contact_card_body; ?></p>
									<a href=" <?php echo $contact_card_cta_link['url']; ?> ">
							        	<div class="contact_card_cta_link"> <?php echo $contact_card_cta; ?></div>
							        </a>								
								</div>
							</div>
					
						<?php endwhile; ?>
					
					<?php endif; ?>	            
            </div> <!-- end contact card row -->
        </div>
    </section>
    
    <!-- Split Panel CTA -->
    <section class="fullimg-cta contact left capped-width split-panel-container">
	    <div class="container-fluid">
		    <div class="row align-items-center">
			    <!-- image -->
			    <?php 
				    $image = get_field('split_panel_image');
			    ?>
		        <div class="col-12 col-md-6 col-lg-6 d-none d-md-block stretch-left fullimg-cta__bkimg theme_overlay" style="background-image: url(<?php echo esc_url($image['url']); ?>);">
		        </div>
				
				<!-- content -->
		        <div class="col-12 col-md-6 col-lg-6">
			        <div class="split-panel-content">
			            <h1><?php the_field('split_panel_title');?></h1>
			            <div class="row">
				            <div class="col-12 col-md-6 col-lg-6">
					            <?php the_field('split_panel_address_1'); ?>
				            </div>
				            <div class="col-12 col-md-6 col-lg-6">
					            <?php the_field('split_panel_address_2'); ?>
				            </div>
			            </div>
					    <div class="row">
						    <div class="col">
								<p><?php the_field('split_panel_body_content');?></p>
						    </div>
					    </div>
			        </div>
		        </div>	            
		    </div> <!-- end map row -->
	    </div>
    </section>  
    
    <section class="generic content bk-white">
	    <div class="container">
		    <?php
			    $map_banner_google_details = get_field('map_banner_google_details');
				$map_banner_cta_link = get_field('map_banner_cta_link');
				$map_banner_title = get_field('map_banner_title');
				$map_banner_copy = get_field('map_banner_copy');				 
			?>
			
		    <div class="row">
			    
			    <div class='col-12 col-md-6 col-lg-6'>
				    
				    <?php if($map_banner_title): ?>
			    		<h1 class="float-left"><?php echo the_field('map_banner_title'); ?></h1>
			    	<?php endif; ?>
			    	
			    </div>
			    
			    <div class='col-12 col-md-6 col-lg-6'>
				    
				    <?php if($map_banner_cta_link): ?>
						<a href=" <?php echo $map_banner_cta_link['url']; ?> " class="wo-btn orange float-md-right" target="<?php echo $map_banner_cta_link['target']; ?> ">
							<?php echo $map_banner_cta_link['title']; ?>
			        	</a>
			        <?php endif; ?>
			        
			    </div>				    
		    </div>
		    
		    <?php if ($map_banner_copy): ?>
		    <div class='row'>
			    <div class='col-12'>
				    <?php echo $map_banner_copy; ?>
			    </div>
		    </div>
			<?php endif; ?>
		    
		    <div class="row">
			    <div class="col-12">
				    <div class="contact-map">
						<?php echo $map_banner_google_details;  ?>
				    </div>	    
			    </div>
		    </div>
	    </div>
    </section>              

</div>

<?php get_footer();
