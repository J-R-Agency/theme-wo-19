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



<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<?php 
echo $address;
echo $phone_display_number;
echo $phone_number;
echo $twitter_url;
echo $linkedin_url;
echo $facebook_url;
echo $instagram_url;
	?>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

