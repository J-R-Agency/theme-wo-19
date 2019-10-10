<?php
/**
 * Hero Banner.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$bh_bkimg = get_the_post_thumbnail_url();
?>

<section class="hero_banner" style="background-image: url('<?php echo $bh_bkimg; ?>">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-10 col-lg-8">
				<?php if (! is_front_page() ) {	
					echo'<p>breadcrumb</p>';
				}?>
				<h1><?php the_title(); ?></h1>
				<h2><?php the_field('bh_subtitle'); ?></h2>
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

