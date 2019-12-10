<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="policy-item">
	<div class="policy-item__img"  style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>');">

	</div>
	<div class="policy-item__category">
		POLICY
	</div>
	<div class="policy-item__title">
			<?php
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?>
	</div>
</div>