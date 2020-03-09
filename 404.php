<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">

							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'understrap' ); ?></p>

							<?php get_search_form(); ?>

							<h2>From Our Blog</h2>
								<div class="container-fluid">
									<div class="row align-items-center">
								        <?php
											
											$policy = get_cat_ID('policy');
											
											// QUERY ALL EXCEPT POLICIES 
											$wp_query = new WP_Query(array(
												'post_type'=>'post',
												'post_status'=>'publish',
												'posts_per_page'=>3,
												'category__not_in' => $policy,
												'paged' => ( get_query_var('paged') ? get_query_var('paged') : 0)
											));															
										?>
										<!-- WHILE LOOP -->
									    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
									    
											<?php include (get_template_directory() . '/global-templates/category-card.tpl'); ?>
								    
										<?php endwhile; ?>
																	    
										<?php wp_reset_postdata(); ?>
							        </div>
								</div>
							
							<h2>Our Events</h2>
							<div class="container-fluid">
								<div class="row events-posts">
									<?php
									
									// Ensure the global $post variable is in scope
									global $post;
									
									if (isset($_GET['category'])) {
										$event_category = $_GET['category'];
										$events = tribe_get_events( [
											'start_date'     => 'now',
											'eventDisplay'   => 'list',
											'posts_per_page' => 3,
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
											'posts_per_page' => 3
										] );
									}
									
									 
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
									
									?>
								</div>							
							</div>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer();
