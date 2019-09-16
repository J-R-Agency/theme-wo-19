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
</section>
