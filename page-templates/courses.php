<?php
/**
 * Template Name: Courses & Training
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
    			$banner_title = get_field('banner_title');

    			if ( $banner_title ) {
    				echo "<div class=\"training-banner\">";
    				echo "<h1>" . $banner_title . "</h1>";


					// Check value exists.
					if( have_rows('training_audience_repeater') ){
						
						echo "<div class=\"audience-container\">";

					    // Loop through rows.
					    while ( have_rows('training_audience_repeater') ) : the_row();
					    
							$audience_title = get_sub_field('audience_title');
							$audience_link = get_sub_field('audience_link');
							
								if($audience_title){
									echo "
									<div class=\"audience-item\">
										<div class=\"audience-item__icon\"><img src=\"" . get_template_directory_uri() . "/assets/img/training-tick.png\" alt=\"Training tick\"></div>
										<div class=\"audience-item__title\">" . $audience_title . "</div>
									</div>" ;
								}

						endwhile;
						
						echo "</div>";
					
					}

					echo "</div>";

				}

?>

    		</div>
			
			<div class="row courses-title">
				<h1><?php the_title(); ?></h1>
			</div>

			<!-- DISPLAY POSTS -->

					<div class="row courses-posts">





<?php


// Ensure the global $post variable is in scope
global $post;

$events = tribe_get_events( [
	'start_date'     => 'now',
	'eventDisplay'   => 'list',
	'posts_per_page' => 6,
	'tax_query'=> array(
		array(
			'taxonomy' => 'tribe_events_cat',
			'field' => 'slug',
			'terms' => 'course'
		)
	)
] );


 
// Retrieve the next 5 upcoming events
// Grab the 5 next "party" events (by tag)

// Loop through the events: set up each one as
// the current post then use template tags to
// display the title and content
foreach ( $events as $post ) {
	setup_postdata( $post );

	// This time, let's throw in an event-specific
	// template tag to show the date after the title!
	include ( get_template_directory() . '/global-templates/courses-cards.tpl')  ;

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
