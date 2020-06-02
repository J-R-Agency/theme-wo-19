<?php
$post_object = get_field('case_study_post');
if( $post_object ): 
    // override $post
    $post = $post_object;
    setup_postdata( $post ); 
    $post_bg_image = get_the_post_thumbnail_url( $post->ID, 'medium_large' );
    ?>

	<section class="stories capped-width">
	    <div class="stories__content container">
	        <h4>Stories</h4>
	        <div class="row align-items-center">
	            <div class="col-sm-12 col-md-6 order-md-2 d-flex justify-content-center">
	                <div class="stories__circleimg">
	                    <img src="<?php echo $post_bg_image ;?>" alt="stories image">
	                </div>
	            </div>
	            <div class="col-sm-12 col-md-6">				    
			    	<h3><?php echo the_title(); ?></h3>
			    	<?php echo the_excerpt();?>
			    	<a class="wo-btn white-pink" href="<?php echo the_permalink();?>">Read their story</a>            
	                <a href="<?php echo site_url();?>/how-we-help/case-studies/" class="white-link">See all stories</a>
	            </div>
	        </div>
	    </div>
	</section>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>