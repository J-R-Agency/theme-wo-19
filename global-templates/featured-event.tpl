<?php
/**
 * Homepage Carousel.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<section class="featured-event-container">
	<div class="featured-event">
	    <div class="container">
	        <div class="row">
	            <div class="col-12 col-md-3">
		            <h2>Featured Events:</h2>
	            </div>
	            
	            <div class="col-12 col-md-6">

					<div id="carousel_events" class="carousel slide" data-ride="carousel">
					  
					  <div class="carousel-inner" role="listbox">
						<?php
							$events = tribe_get_events( [ 'posts_per_page' => 3,
														'orderby' => 'rand', ] );
							$count = 0;							
							
							foreach ( $events as $event ): ?>
						  		<div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
							  		<div class="featured-event-wrapper">	
										<div class="featured-event-date">
											<div class="featured-event-month"><?php echo tribe_get_start_date( $event, true, 'M'); ?> </div>
											<div class="featured-event-day"><?php echo tribe_get_start_date ($event, true, 'n'); ?> </div>
										</div>
										<div class="featured-event-info">
											<a href="<?php echo tribe_get_event_link($event) ?>"><p class="featured-event-title"><?php echo $event->post_title; ?></p></a>
											<p><?php echo tribe_get_venue($event); ?></p>
										</div>
							  		</div>
								</div>
						<?php
							$count++;
							endforeach;																			
						?>
					  </div> <!-- end carousel-inner -->

					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel_events" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel_events" data-slide-to="1"></li>
					    <li data-target="#carousel_events" data-slide-to="2"></li>
					  </ol>					  
					  
					</div> <!-- end carousel-home -->
	            </div> <!-- end col -->
	            
	            <div class="col-12 col-md-3">
		            <div class="featured-event-links">
			            <a>More Info</a>
			            <a>View All Events</a>
		            </div>
	            </div>                        
	        </div>
	    </div>
	</div>
</section>