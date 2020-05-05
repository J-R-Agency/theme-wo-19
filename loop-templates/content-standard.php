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

		<?php the_content(); ?>
		<?php get_template_part( 'loop-templates/content', 'standard-cta' ); ?>
		<?php get_template_part( 'loop-templates/download', 'file-cta' ); ?>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
