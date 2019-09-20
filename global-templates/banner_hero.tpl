<?php
/**
 * Hero Banner.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$bh_bkimg = get_field('bh_bkimg');

?>

<section class="hero_banner" style="background-image: url('<?php echo $bh_bkimg['url']; ?>">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-10 col-lg-8">
				<h1><?php the_field('bh_title'); ?></h1>
				<h2><?php the_field('bh_subtitle'); ?></h2>
			</div>
		</div> 
	</div>
	<div class="hero_banner__video">
	<video id="hero-video" autoplay muted playsinline loop class="archive">
		<source src="<?php echo get_template_directory_uri()?>/assets/img/Meeting.mp4" type="video/mp4">
	</video>
</div>
</section>

