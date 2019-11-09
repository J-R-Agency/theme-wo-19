<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$address = get_field('address', 'option');
$phone_display_number = get_field('phone_display_number', 'option');
$phone_number = get_field('phone_number', 'option');
$twitter_url = get_field('twitter_url', 'option');
$linkedin_url = get_field('linkedin_url', 'option');
$facebook_url = get_field('facebook_url', 'option');
$instagram_url = get_field('instagram_url', 'option');

?>



<footer class="main-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<h3>Contact Us</h3>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<p><?php echo $address; ?></p>
					</div>
					<div class="col-md-6 col-sm-12">
						<p>
							Call Us: <a href="tel:+<?php echo $phone_number;?>"><?php echo $phone_display_number;?></a> <br>
							CONTACT US ONLINE
							<div class="social">
								<a href="<?php echo $twitter_url;?>" class="social__icons twitter"><i class="fa fa-twitter"></i></a>
								<a href="<?php echo $linkedin_url;?>" class="social__icons linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="<?php echo $facebook_url;?>" class="social__icons facebook"><i class="fa fa-facebook-f"></i></a>
								<a href="<?php echo $instagram_url;?>" class="social__icons instagram"><i class="fa fa-instagram"></i></a>
							</div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-5 d-none d-md-block d-lg-block d-xl-block">
				<h3>Explore</h3>
				
				<!-- footer links go here -->
				<?php
					wp_nav_menu( array( 
						'theme_location' => 'footer-links', 
						'container_class' => 'footer-links' ) ); 
					?>
			</div>

			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

