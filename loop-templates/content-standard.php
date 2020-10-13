<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php $post_content = get_the_content(); ?>
		<?php echo apply_filters ( 'the_content', $post_content ) ; ?>
		<?php get_template_part( 'loop-templates/content', 'standard-cta' ); ?>
		<?php get_template_part( 'loop-templates/download', 'file-cta' ); ?>
		<?php get_template_part( 'loop-templates/downloads', 'panel' ); ?>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
