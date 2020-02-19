<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();
?>

<div class="site theme-pink">
	<section class="hero_banner" style="background-image: url('http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/12/36_Events_D4A7910.jpg')">
		
		<div class="container">
		<?php if (! is_front_page() ) {	
			if (function_exists('the_breadcrumb')) the_breadcrumb();
		}?>
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-10 col-lg-8">
					<h1><?php the_title(); ?></h1>
					<?php echo tribe_events_event_schedule_details( $event_id, '<h2>', '</h2>' ); ?>
				</div>
			</div> 
		</div>
	</section>
</div>

<div class="container">    
	<div id="tribe-events-content" class="tribe-events-single">
	
		<!-- Notices -->
		<?php tribe_the_notices() ?>
	
		<div class="tribe-events-schedule tribe-clearfix">
			<?php if ( tribe_get_cost() ) : ?>
				<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
			<?php endif; ?>
		</div>
	
		<?php while ( have_posts() ) :  the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- Event featured image, but exclude link -->
				<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
				<?php the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' ); ?>
				<!-- Event content -->
				<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
				<div class="tribe-events-single-event-description tribe-events-content">
					<?php the_content(); ?>
				</div>
				<!-- .tribe-events-single-event-description -->
				<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
	
			</div> <!-- #post-x -->
			<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
		<?php endwhile; ?>
	
	</div><!-- #tribe-events-content -->	
	
</div><!-- end container -->

<!-- POST CTA -->
<?php include_once (get_template_directory() . '/global-templates/banner-cta.tpl'); ?>
