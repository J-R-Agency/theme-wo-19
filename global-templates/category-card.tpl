<!-- BLOG CARD -->
<div class="col-sm-12 col-lg-4 col-md-4">
	<a href="<?php the_permalink(); ?>" class="link">
		<div class="blog-card">
	    	<!-- image -->
	    	<div class="blog-card__img">
	    		<?php
	    		$blog_card_placeholder_image = get_field('blog_card_placeholder_image', 'option');
	    		
	    		if ( has_post_thumbnail() ) {
		    		echo "<img src=\"" . get_the_post_thumbnail_url() . "\">";
	    		} else {
		    		echo "<img src=\"" . $blog_card_placeholder_image['url'] . "\">";
		    	}
	    		
	    		?>
		    </div><!--end image -->
		    
	    	<!-- icon -->
	    	<div class="blog-card__icon">
			<?php
				$terms = get_the_terms( get_the_ID(), 'category');
				
				if( !empty($terms) ) {
				
				    $term = array_pop($terms);
				
				    $card_icon = get_field('card_icon', $term );
				    $icon = $card_icon['url'];
				    
				    if (empty($card_icon)) {
					    $icon = get_template_directory_uri()."/assets/img/blogicon-uncategorized.svg";
					}
				    		
				} else {
					$icon = get_template_directory_uri()."/assets/img/blogicon-uncategorized.svg";	
				}
				
			?>
		    	<img src="<?php echo $icon; ?>" alt="blog icon">
	    	</div><!-- end icon -->
	    	
	    	<!-- category -->
	    	<div class="blog-card__category">
		    	<?php the_category(', '); ?>
		    </div><!-- end category-->
		    
	    	<!-- title -->
        	<div class="blog-card__title">
	        	<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
	        </div><!-- end title -->
	        
    	</div><!-- end blog card -->
    </a>
</div><!-- end col -->