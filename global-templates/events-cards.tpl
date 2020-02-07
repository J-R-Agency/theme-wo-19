<?php

	$args = array(
	        'category__in'   => wp_get_post_categories( $post->ID ),
	        'post__not_in'   => array( $post->ID )
	 );
	 
	$categories = get_categories($args); ?>


  
  
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
						    	$cat_name = $category->name; 
						    ?>
						    	<!-- BLOG CARD -->
						    	<div class="col-sm-12 col-lg-4 col-md-4">
							    	<div class="blog-card">
								    	<!-- image -->
								    	<div class="blog-card__img">
									    	<img src="<?php the_post_thumbnail_url(); ?>">
									    </div><!--end image -->
									    
								    	<!-- icon -->
								    	<div class="blog-card__icon">
									    	<img src="<?php echo get_template_directory_uri()?>/assets/img/blogicon-<?php foreach((get_the_category()) as $category) { echo $category->slug; } ?>.svg" alt="blog icon">
								    	</div><!-- end icon -->
								    	
								    	<!-- category -->
								    	<div class="blog-card__category">
									    	<?php the_category(', '); ?>
									    </div><!-- end category-->
									    
								    	<!-- title -->
							        	<div class="blog-card__title">
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
				
				<?php foreach($categories as $category) { 			
					echo
					'<div class="tab-pane fade show" id="category_'.$category->slug.'" role="tabpanel">
						<div class="container">
							<div class="row">';
					
							// THE QUERY
							$wpb_query = new WP_Query(array(
								'post_type'=>'post',
								'post_status'=>'publish',
								'posts_per_page'=>-1,	
								'category_name' => $category->slug	
							));				
				?>  		
							<!-- WHILE LOOP -->
						    <?php while ( $wpb_query->have_posts() ) : $wpb_query->the_post(); ?>
						    	
						    	<!-- BLOG CARD -->
						    	<div class="col-sm-12 col-lg-4 col-md-4">
							    	<div class="blog-card">
								    	<!-- image -->
								    	<div class="blog-card__img">
									    	<img src="<?php the_post_thumbnail_url(); ?>">
									    </div><!--end image -->
									    
								    	<!-- icon -->
								    	<div class="blog-card__icon">
									    	<img src="<?php echo get_template_directory_uri()?>/assets/img/blogicon-<?php echo $category->slug; ?>.svg" alt="blog icon">
								    	</div><!-- end icon -->
								    	
								    	<!-- category -->
								    	<div class="blog-card__category">
									    	<?php the_category(', '); ?>
									    </div><!-- end category-->
									    
								    	<!-- title -->
							        	<div class="blog-card__title">
								        	<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
								        </div><!-- end title -->
								        
							    	</div><!-- end blog card -->
						        </div><!-- end col -->
			        
						    <?php endwhile; ?>
						    <?php wp_reset_postdata(); ?>
						</div><!-- end row -->
					</div><!-- end container -->
	        	</div><!-- end tab pane -->
			<?php
				
			} ?> <!-- end foreach loop -->
				
	        </div><!-- end section -->
		</section>
		
        <?php wp_reset_query(); ?>	