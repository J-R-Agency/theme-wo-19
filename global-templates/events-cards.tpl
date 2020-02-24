						    	<!-- events CARD -->
<div class="col-sm-12 col-lg-4 col-md-4">
	<a href="<?php the_permalink(); ?>" class="link">
    	<div class="events-card">
	    	<!-- image -->
	    	<div class="events-card__img">
	    		<?php if ( has_post_thumbnail() ) {
		    		echo "<img src=\"" . get_the_post_thumbnail_url() . "\">";
	    		}?>
		    </div><!--end image -->

	    	<!-- category -->
	    	<div class="events-card__category">
		    	<?php the_category(', '); ?> EVENT
		    </div><!-- end category-->
		    
	    	<!-- title -->
        	<div class="events-card__title">
	        	<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
	        </div><!-- end title -->

	    	<!-- date -->
	    	<div class="events-card__date">
		    	<?php 

		    	echo tribe_get_start_date( null, false, 'dS M Y' );

		    	?>
		    </div><!-- end date-->

    	</div><!-- end events card -->
    </a>
</div><!-- end col -->
