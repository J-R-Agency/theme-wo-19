						    	<!-- BLOG CARD -->
<div class="col-sm-12 col-lg-4 col-md-4">
	<a href="<?php the_permalink(); ?>" class="link">
		<div class="blog-card blog-card--plain">
	    	<!-- image -->
	    	<div class="blog-card__img blog-card__img--plain">
	    		<?php if ( has_post_thumbnail() ) {
		    		echo "<img src=\"" . get_the_post_thumbnail_url() . "\">";
	    		}?>
		    </div><!--end image -->
	    	
	    	<!-- category -->
	    	<div class="blog-card__category blog-card__category--plain">
		    	<?php $term = get_queried_object(); 
		    		echo $term->name ;
		    	?>
		    </div><!-- end category-->
		    
	    	<!-- title -->
        	<div class="blog-card__title blog-card__title--plain">
	        	<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
	        </div><!-- end title -->
	        
    	</div><!-- end blog card -->
    </a>
</div><!-- end col -->
