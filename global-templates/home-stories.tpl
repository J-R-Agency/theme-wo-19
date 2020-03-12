<section class="stories capped-width">
    <div class="stories__content container">
        <h4>stories</h4>
        <div class="row align-items-center">
           

			<?php
				wp_reset_query();
				$query = new WP_Query( array(
					'posts_per_page' => 1,
				    'post_type'  => 'any',
				    'meta_key'   => '_wp_page_template',
				    'meta_value' => 'page-templates/case-study.php'
				) );
				
				if ( $query->have_posts() ) {
				    while ( $query->have_posts() ) : $query->the_post(); ?>
			            <div class="col-sm-12 col-md-6 order-md-2 d-flex justify-content-center">
			                <div class="stories__circleimg">
			                    <img src="<?php echo get_the_post_thumbnail_url(  $post->ID, 'medium_large' ) ;?>" alt="stories image">
			                </div>
			            </div>
			            <div class="col-sm-12 col-md-6">				    
					    	<h3><?php echo the_title(); ?></h3>
					    	<?php echo the_excerpt();?>
					    	<a class="wo-btn white-pink" href="<?php echo the_permalink();?>">Hear her story</a>
			<?php
				    endwhile; // end of the loop.
				} else { // in case there are no pages with this template
				    echo 'No Pages with this template';
				}
				wp_reset_query();
			?>	            
<!--
                <h3>Hardeep's Story</h3>
                <p>We helped Hardeep start her own business using her passion for design to fill a gap in the greetings card market.</p>
-->
                <a href="<?php echo site_url();?>/how-we-help/case-studies/" class="white-link">see all stories</a>
            </div>
        </div>
    </div>
</section>