<?php
/**
 * Hero Banner.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$bh_bkimg = get_the_post_thumbnail_url();
$blog_img = "http://192.168.33.10/womens-organization/wp-content/uploads/2019/12/Letterbox_38_Blog_and_Media_D4A6423.jpg"
?>

<section class="hero_banner" style="background-image: url('<?php if (is_category('business') || is_category('culture') || is_category('research')) { echo $blog_img; } else { echo $bh_bkimg; }?>'">
	
	<div class="container">
	<?php if (! is_front_page() ) {	
		if (function_exists('the_breadcrumb')) the_breadcrumb();
	}?>
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-10 col-lg-8">
			
				<?php if ( is_category('policy') ){
					echo "<h1>Research and policy</h1><h2>Duis consectetur neque non sem dictum, et laoreet massa mollis.</h2>";
				}
				elseif (is_category('business') || is_category('culture') || is_category('research')){
					echo"<h1>Blog & Media</h1><h2>Observations, press and opinion from The Women's Organisation.</h2>";
				} else { ?>
				<h1><?php the_title(); ?></h1>
				<h2><?php the_field('bh_subtitle'); ?></h2>
			<?php } ?>
			</div>
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

