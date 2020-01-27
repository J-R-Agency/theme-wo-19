<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="site">
    <!--<?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>-->
    <section class="post-container generic bk-white">
        <div class="container">
            <div class="row">
	            <div class="col-sm-12 col-md-7 col-lg-8 text-left">
					
					<section class="post-header">
				        <!-- Title -->
			            <div class="row">
			                <div class="col-sm-12 col-md-12 col-lg-12 text-left">
				            	<h1><?php the_title();?></h1>
			                </div>
			            </div>
			            
			            <!-- Date and social media sharing -->
			            <div class="row">
				            <div class="col-sm-12 col-md-7 col-lg-7 text-left">
				            	<h2><?php echo get_the_date( 'd M Y' );?></h2>
				            </div>
				            <div class="col-sm-12 col-md-5 col-lg-5 text-left">
				            	<p>Share this article</p>
				            </div>	            
			            </div>
					</section>
					
					<section class="post-content">		
		                <?php while ( have_posts() ) : the_post(); ?>
		
		                    <?php get_template_part( 'loop-templates/content', 'standard' ); ?>
		
		                <?php endwhile; // end of the loop. ?>
					</section>
					
					<!-- VIDEO -->
					<?php
						$video_embed = get_field('video_embed');
						$video_caption = get_field('video_caption');
						
						if (!empty($video_embed)): ?>
						<div class="embed-container">
							<div class="row">
								<div class="col-12">
									<?php echo $video_embed ?>
								</div>
							</div>
							<div class="video-caption">
								<div class="row">
									<div class="col-12">
										<p><?php echo $video_caption ?></p>
									</div>
								</div>
							</div>
						</div>	
					<?php endif; ?>				

					<!-- POST CTA -->
					<?php
						$post_cta_title = get_field('post_cta_title');
						$post_cta_content = get_field('post_cta_content');
						$post_cta_link = get_field('post_cta_link');
						
						if (!empty($post_cta_content)): ?>
						<div class="post-cta-container">
							<div class="row">
								<div class="col-12">
									<h2><?php echo $post_cta_title ?></h2>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p><?php echo $post_cta_content ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<a href=" <?php echo $post_cta_link['url'] ?> ">
							        	<div class="post-cta-link"> <?php echo $post_cta_link['title'] ?></div>
							        </a>
	        					</div>
							</div>								
						</div>	
					<?php endif; ?>	

                </div>
                
                
                <div class="col-md-4 col-lg-4 d-none d-md-block more-info-sidebar">

                <?php include_once (get_template_directory() . '/sidebar-templates/sidebar-moreposts.php'); ?>

                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();
