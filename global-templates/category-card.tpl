						    	<!-- BLOG CARD -->
<div class="col-sm-12 col-lg-4 col-md-4">
	<a href="<?php the_permalink(); ?>" class="link">
		<div class="blog-card">
	    	<!-- image -->
	    	<div class="blog-card__img">
	    		<?php if ( has_post_thumbnail() ) {
		    		echo "<img src=\"" . get_the_post_thumbnail_url() . "\">";
	    		}?>
		    </div><!--end image -->
		    
	    	<!-- icon -->
	    	<div class="blog-card__icon">
			<?php $category = get_the_category();
				if(!empty($category)) {
					$firstCategory = $category[0]->slug;
				}
			?>
		    	<img src="<?php echo get_template_directory_uri()?>/assets/img/blogicon-<?php echo $firstCategory; ?>.svg" alt="blog icon">
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
