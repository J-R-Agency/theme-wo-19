<!-- events CARD -->
<a href="<?php the_permalink(); ?>">
	<div class="courses-item">

	<!-- category -->
	<div class="courses-item__category">
    	<?php the_category(); ?> COURSE
    </div><!-- end category-->
    
	<!-- title -->
	<div class="courses-item__title">
    	<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
    </div><!-- end title -->

	<!-- date -->
	<div class="courses-item__date">
    	<?php 

    	echo tribe_get_start_date( null, false, 'jS M Y' );

    	?>
    </div><!-- end date-->


</div>
</a>