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
$themes_path = get_template_directory_uri();
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

		</div>
	
		<?php while ( have_posts() ) :  the_post(); ?>
		<section class="post-container">
			<div class="row">
				
				<div class="col-12 col-md-8">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' ); ?>
						<!-- Event content -->
						<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
						<div class="tribe-events-single-event-description tribe-events-content">
							<?php the_content(); ?>
						</div>
						<!-- .tribe-events-single-event-description -->
						<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
			
					</div> <!-- #post-x -->
				</div> <!-- end col -->
				
				<div class="col-12 col-md-4">
					<div class="event-sidebar">
						<div class="event-sidebar-header">
							<p>Book this event:<p>
							<p class="event-date"><?php echo tribe_get_start_date( $post, false, 'jS F Y'); ?></p>
						</div>
						<div class="event-sidebar-content">
							<?php if ( tribe_get_cost() ) : ?>
								<p class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></p>
							<?php else: ?>
								<p class="tribe-events-cost">FREE</p>
							<?php endif; ?>
							<a class="wo-btn orange" href="<?php echo tribe_get_event_website_url(); ?>" target="_blank">Book Event</a>
							<img src="<?php echo $themes_path ?>/assets/img/eventbrite-logo.png" style="padding: 1rem;">
							<hr>
							<p>If you have questions about this event call us on <a href="tel:0151-706-8111">0151 706 8111</a> or <a href="<?php echo site_url(); ?>/contact/">contact us online</a></p>
						</div>
					</div>
					<div class="event-map">
						<iframe width="100%" height="300" frameborder="0" src="https://maps.google.com/maps?q=<?php echo tribe_get_venue(); ?>&output=embed"></iframe>
					</div>
				</div>
				
			</div> <!-- end row -->
		</section>
			<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
		<?php endwhile; ?>
	
	</div><!-- #tribe-events-content -->	
	
</div><!-- end container -->

<!-- BLOCKQUOTE -->
<?php
	$quote_image = get_field('quote_image'); 
	$quote_text = get_field('quote_text'); 
	$quote_attribution = get_field('quote_attribution');	
?>
<?php if (!empty ($quote_text)): ?>
<div class="post-content">
	<blockquote>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-2">
					<div class="quote-portrait"><img src="<?php echo $quote_image['url']; ?>"></div>
				</div>
				
				<div class="col-12 col-md-10">
					<div class="quote-content">
						<p><?php echo $quote_text; ?></p>
						<cite><?php echo $quote_attribution; ?></cite>
					</div>
				</div>
			</div>
		</div>
	</blockquote>
</div>
<?php endif; ?>

<!-- POST CTA -->
<?php
	$banner_cta_title = get_field('banner_cta_title'); 
	$banner_cta_button = get_field('banner_cta_button'); 
	$banner_cta_link = get_field('banner_cta_link');	
?>
<section class="banner_cta">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-6 col-lg-6">
				<h2>
					<?php
						if (!empty($banner_cta_title)) {
							echo $banner_cta_title;
						} else {
							echo "Have questions about this event?";
						}
					?>
				</h2>
			</div>
			<div class="col-12 col-md-6 col-lg-6">
				<a class="wo-btn float-md-right orange wo-btn--standard-content" href="<?php
					if (!empty($banner_cta_link)) {
						echo esc_url($banner_cta_link['url']);
					} else {
						echo site_url('contact');
					}
				?>" target="<?php echo esc_attr($banner_cta_link['target']); ?>">
				<?php if (!empty($banner_cta_title)) {
						echo esc_html($banner_cta_button);
					} else {
						echo "Speak to our team";
					}
					?>
				</a>
			</div>
		</div> 
	</div>

</section>
