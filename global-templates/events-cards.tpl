<!-- events CARD -->
<a href="<?php the_permalink(); ?>">
	<div class="events-item">

	<?php if ( has_post_thumbnail() ) {
		// echo "<img src=\"" . get_the_post_thumbnail_url() . "\">";
	}?>
	<div class="events-item__img" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>') ;">

    </div><!--end image -->

	<!-- category -->
	<div class="events-item__category">
    	<?php the_category(', '); ?> EVENT
    </div><!-- end category-->
    
	<!-- title -->
	<div class="events-item__title">
    	<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
    </div><!-- end title -->

	<!-- date -->
	<div class="events-item__date">
    	<?php 

    	echo tribe_get_start_date( null, false, 'jS M Y' );

    	?>
    </div><!-- end date-->


</div>
</a>