	<?php

	$args = array(
	        'category__in'   => wp_get_post_categories( $post->ID ),
	        'post__not_in'   => array( $post->ID )
	 );
	 
	$categories = get_categories($args); ?>

		<!--CATEGORY TABS -->
		<section class="grey_tabs capped-width">
			<div class="container">
			    <div class="row">
					<div class="col-sm-12">
							<div class="nav nav-tabs" id="nav-tab" role="tablist">	
								<a class="nav-item nav-link active" id="category_All" role="tab" data-toggle="tab" aria-controls="nav-home"  href="#grey-tabs-content_all">All</a>
								<?php
									foreach($categories as $category) {
										$cat_name = $category->name;
										if($cat_name !== 'Uncategorized'):	
											echo
											'<a class="nav-item nav-link" id="grey-tabs_'.$cat_name.' role="tab" data-toggle="tab" aria-controls="nav-home"  href="#category_'.$cat_name.'">'
												.$cat_name.
											'</a>';
										endif;
									}
								?>
							</div>
						</div>	    
			    	</div>
			</div>																		
		</section>

  
  
		<!-- DISPLAY POSTS -->
		<section>		 
			<?php foreach($categories as $category) { 
				echo
				'<div class="tab-pane fade show" id="category_'.$category->slug.'" role="tabpanel">';
				
				// THE QUERY
				$wpb_query = new WP_Query(array(
					'post_type'=>'post',
					'post_status'=>'publish',
					'posts_per_page'=>-1,	
					'category_name' => $category->slug	
				));				
			?>

				<div class="container">
	        		<div class="row">
		        		
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
								    	<img src="<?php echo get_template_directory_uri()?>/assets/img/blogicon-<?php echo $cat_name; ?>.svg" alt="blog icon">
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
		<?php } ?> <!-- end foreach loop -->
			
					
			
        </section><!-- end section -->
        
        <?php wp_reset_query(); ?>	