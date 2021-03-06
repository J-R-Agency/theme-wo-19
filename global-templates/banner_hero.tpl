<?php
/**
 * Hero Banner.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$bh_bkimg = get_the_post_thumbnail_url();
$blog_img = "http://192.168.33.10/womens-organization/wp-content/uploads/2019/12/Letterbox_38_Blog_and_Media_D4A6423.jpg";


if( isset( $category_feature_image ) ) {
	$background_image = $category_feature_image['url'] ;
} else {
	$background_image = get_the_post_thumbnail_url();

	// Attempt to use Jetpack Photon CDN URL if available
	if ( function_exists('jetpack_photon_url') ) $background_image = jetpack_photon_url( get_the_post_thumbnail_url() );
}


$featured_image_position = get_field('featured_image_position');

if ( isset( $featured_image_position ) ) {
	$background_position = " background-position: " . $featured_image_position . ";";
} else {
	$background_position = " background-position: center;";
}


$funder_logo = get_field('funder_logo');
if( !empty( $funder_logo ) ) {
    $show_funder_logo = "
    <div class=\"funder_logo hero-contents__logo\">
	    <img src=\"" .  esc_url($funder_logo['url']) . "\" alt=\"" . esc_attr($funder_logo['alt']) . "\" />
	</div>
    " ;
	$show_funder_logo_mobile = "
    <div class=\"funder_logo_mobile hero-contents__logo\">
	    <img src=\"" .  esc_url($funder_logo['url']) . "\" alt=\"" . esc_attr($funder_logo['alt']) . "\" />
	</div>
    " ;
} else {
	$show_funder_logo = "";
	$show_funder_logo_mobile = "";
}



$mobile_alternative = get_field('mobile_alternative');
if( !empty( $mobile_alternative ) ) {

	// Attempt to use Jetpack Photon CDN URL if available
	if ( function_exists('jetpack_photon_url') ) $mobile_alternative_url = jetpack_photon_url( $mobile_alternative['url'] );

    $show_mobile_alternative = "
    <div class=\"mobile_alternative hero-contents__mobile_alternative\">
	    <img src=\"" .  esc_url($mobile_alternative_url) . "\" alt=\"" . esc_attr($mobile_alternative['alt']) . "\" />
	</div>
    " ;
} else {
	$show_mobile_alternative = "";
}

?>
<?php

if ( isset( $mobile_alternative['url'] ) ){
	$hero_banner__override = "" ;
	$mobile_alternative_background_image = $mobile_alternative['url'] ;
	
	// Attempt to use Jetpack Photon CDN URL if available
	if ( function_exists('jetpack_photon_url') ) $mobile_alternative_background_image = jetpack_photon_url( $mobile_alternative['url'] );


?>

<section class="hero_banner__mobile" style="background-image: url('<?php echo $mobile_alternative_background_image ; ?>');background-size: cover;">	
	<div class="container">
	<?php if (! is_front_page() ) {	
		if (function_exists('the_breadcrumb')) the_breadcrumb();
	}?>
		<div class="row align-items-center hero-contents">
			<div class="col-sm-12 col-md-10 col-lg-8 hero-contents__info">
			
				<?php if ( is_category('policy') ){
					echo "<h1>Research and policy</h1><h2></h2>";
				}
				elseif (is_category('business') || is_category('culture') || is_category('research')){
					echo"<h1>Blog & Media</h1><h2>Observations, press and opinion from The Women's Organisation.</h2>";
				} else { ?>
				<h1><?php the_title(); ?></h1>
				<h2><?php the_field('bh_subtitle'); ?></h2>
			<?php } ?>
			</div>
			<?php echo $show_funder_logo ;?>
		</div> 
	</div>
	<?php if(get_field('bh_video')){
		$video = get_field('bh_video');?>
		
		<div class="hero_banner__video">
			<video id="hero-video" autoplay muted playsinline loop class="archive">
				<source src="<?php echo $video['url']?>" type="video/mp4">
			</video>
		</div>

	<?php } ?>
</section>
<?php
} else {
	$hero_banner__override = "hero_banner__override" ;
}
?>


<section class="hero_banner <?php echo $hero_banner__override;?>" style="background-image: url('<?php echo $background_image ; ?>'); <?php echo $background_position ; ?>">	
	<div class="container">
	<?php if (! is_front_page() ) {	
		if (function_exists('the_breadcrumb')) the_breadcrumb();
	}?>
		<div class="row align-items-center hero-contents">
			<div class="col-sm-12 col-md-10 col-lg-8 hero-contents__info">
			
				<?php if ( is_category('policy') ){
					echo "<h1>Research and policy</h1><h2></h2>";
				}
				elseif (is_category('business') || is_category('culture') || is_category('research')){
					echo"<h1>Blog & Media</h1><h2>Observations, press and opinion from The Women's Organisation.</h2>";
				} else { ?>
				<h1><?php the_title(); ?></h1>
				<h2><?php the_field('bh_subtitle'); ?></h2>
			<?php } ?>
			</div>
			<?php echo $show_funder_logo ;?>
		</div> 
	</div>
	<?php if(get_field('bh_video')){
		$video = get_field('bh_video');?>
		
		<div class="hero_banner__video">
			<video id="hero-video" autoplay muted playsinline loop class="archive">
				<source src="<?php echo $video['url']?>" type="video/mp4">
			</video>
		</div>

	<?php } ?>
</section>
<?php echo $show_funder_logo_mobile ;?>
</div>