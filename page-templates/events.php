<?php
/**
 * Template Name: Events
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <section class="generic">
    	<div class="container">    
			<div class="row">
			<?php
				include ( get_template_directory() . '/global-templates/events-tabs.tpl')  ;  
			?>
			</div>

			<!-- DISPLAY POSTS -->

					<div class="row events-posts">

<?php

// Ensure the global $post variable is in scope
global $post;

if (isset($_GET['category'])) {
	$event_category = $_GET['category'];
	
	$events = tribe_get_events( [
		'start_date'     => 'now',
		'eventDisplay'   => 'list',
		'posts_per_page' => 6,
		'tax_query'=> array(
			array(
				'taxonomy' => 'tribe_events_cat',
				'field' => 'slug',
				'terms' => $event_category
			)
		)
	] );
	
} else {
  //Handle the case where there is no parameter
	$events = tribe_get_events( [
		'start_date'     => 'now',
		'eventDisplay'   => 'list',
		'posts_per_page' => 12
	] );
}

if (empty($events)) {
	echo "<span class='notice'>No events found</span>";
} else {
	// Retrieve the next 5 upcoming events
	// Grab the 5 next "party" events (by tag)
	
	// Loop through the events: set up each one as
	// the current post then use template tags to
	// display the title and content
	foreach ( $events as $post ) {
		setup_postdata( $post );
	
		// This time, let's throw in an event-specific
		// template tag to show the date after the title!
		
		include ( get_template_directory() . '/global-templates/events-cards.tpl')  ;
	
	}
}

?>
					</div> <!-- end blog cards row -->
					
					<!-- Pagination -->
					<div class="row">
						<div class="col-12">
							<?php understrap_pagination(); ?>
						</div>
					</div>
						
				</div>
    
    	</div><!-- end container -->
    </section><!-- end generic section -->
</div><!-- end site -->

<?php get_footer();
