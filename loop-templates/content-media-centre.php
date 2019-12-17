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

	<div class="entry-content entry-content--media-centre">

        <h2><?php the_title(); ?></h2>
        <h3><?php the_field('bh_subtitle'); ?></h3>
        <?php the_content(); ?>

	</div><!-- .entry-content -->

	    <?php get_template_part( 'loop-templates/media-centre', 'press-articles' ); ?>
        <?php get_template_part( 'loop-templates/media-centre', 'social' ); ?>
        <?php get_template_part( 'loop-templates/media-centre', 'assets-guidelines' ); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>
		<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
