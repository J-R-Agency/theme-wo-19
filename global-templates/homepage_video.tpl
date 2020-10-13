<?php
/**
 * Homepage Video Banner.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!--

<section class="homepage-video_banner">
	
	<?php if ( get_field('homepage_video_embed') ) {

		$video = get_field('homepage_video_embed');?>

		<div class="homepage-video__video">
    		<?php the_field('homepage_video_embed'); ?>
		</div>

	<?php } elseif ( get_field('homepage_video_file') ) {

		$video = get_field('homepage_video_file');?>

		<div class="homepage-video__video">
			<video id="homepage-video-video" autoplay muted playsinline loop class="archive">
				<source src="<?php echo $video['url']?>" type="video/mp4">
			</video>
		</div>

	<?php } ?>

</section>
-->