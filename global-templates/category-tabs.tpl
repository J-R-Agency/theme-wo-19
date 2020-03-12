<?php

	$args = array(
	        'category__in'   => wp_get_post_categories( $post->ID ),
	        'post__not_in'   => array( $post->ID )
	 );
	 
	$categories = get_categories($args); ?>
	
		<!--CATEGORY TABS -->
		<section class="category_grey_tabs content capped-width">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs" id="nav-tab" role="tablist">	
							<li>
								<a class="nav-item nav-link" href="<?php echo site_url(); ?>/blog-media#nav-tab">All</a>
							</li>
							<?php
								foreach($categories as $category) {
									$cat_name = $category->name;
									if($cat_name != 'Policy'):	
										echo
										'<li><a class="nav-item nav-link" href="'.get_category_link($category->term_id).'#nav-tab">'
											.$cat_name.
										'</a></li>';
									endif;
								}
							?>
						</ul>
					</div>
				</div>
			</div>																		
		</section>
	