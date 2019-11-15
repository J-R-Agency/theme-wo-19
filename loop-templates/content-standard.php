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
		<?php
$content_cta_text = get_field('content_cta_text');
$content_cta_link = get_field('content_cta_url');
if( $content_cta_link ): 
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a class="wo-btn <?php echo $theme_colour; ?> wo-btn--standard-content" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($content_cta_text); ?></a>
<?php endif;
unset($content_cta_link);

		?>

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
