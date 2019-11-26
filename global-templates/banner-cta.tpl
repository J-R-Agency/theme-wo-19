<?php
/**
 * Hero Banner.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$banner_cta_title = get_field('banner_cta_title'); 
$banner_cta_button = get_field('banner_cta_button'); 
$banner_cta_link = get_field('banner_cta_link'); 

?>

<section class="banner_cta">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-10 col-lg-8">
				<h2><?php the_field('banner_cta_title'); ?></h2>
				<a class="wo-btn <?php echo $theme_colour; ?> wo-btn--standard-content" href="<?php echo esc_url($banner_cta_link); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($banner_cta_button); ?></a>
			</div>
		</div> 
	</div>

</section>

