
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