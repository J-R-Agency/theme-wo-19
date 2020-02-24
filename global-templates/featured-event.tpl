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
	            <div class="col-12 col-md-4">
		            <h2>Featured Events:</h2>
	            </div>
	            <div class="col-12 col-md-4">
					<?php
						$events = tribe_get_events( [ 'posts_per_page' => 3 ] );
						
						foreach ( $events as $event ) {
						   echo '<h4>' . $event->post_title . '</h4>';
						}																			
					?>
					
	            </div>
	            <div class="col-12 col-md-4">
		            <a>More Info</a>
		            <a>View All Events</a>
	            </div>                        
	        </div>
	    </div>
	</div>
</section>