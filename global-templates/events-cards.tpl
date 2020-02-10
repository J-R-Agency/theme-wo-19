		<!-- DISPLAY POSTS -->
		<section class="content">
			<div class="tab-content">
				<div class="tab-pane fade show active" id="category_all" role="tabpanel">
					<div class="container">
						<div class="row">
							
							<?php
								// QUERY ALL
								$wpb_query = new WP_Query(array(
									'post_type'=>'tribe_events',
									'post_status'=>'publish',
									'posts_per_page'=>-1,	
								));
															
							?>
							<!-- WHILE LOOP -->
						    <?php while ( $wpb_query->have_posts() ) : $wpb_query->the_post();
						    ?>
						    	<!-- BLOG CARD -->
						    	<div class="col-sm-12 col-lg-4 col-md-4">
							    	<div class="events-card">
								    	<!-- image -->
								    	<div class="events-card__img">
								    		<?php if ( has_post_thumbnail() ) {
									    		echo "<img src=\"" . get_the_post_thumbnail_url() . "\">";
								    		}?>
									    </div><!--end image -->
								    	

									    
								    	<!-- title -->
							        	<div class="events-card__title">
								        	<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
								        </div><!-- end title -->
								        
							    	</div><!-- end blog card -->
						        </div><!-- end col -->
			        
						    <?php endwhile; ?>
						    <div class="wo-btn orange loadmore">Show More</div>
						    <?php wp_reset_postdata(); ?>
						</div>
						
					</div>	
				</div>
				
				
	        </div><!-- end section -->
		</section>
		
        <?php wp_reset_query(); ?>	