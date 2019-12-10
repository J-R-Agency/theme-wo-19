<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


            <div class="col-sm-12 col-md-4">
                <div class="blog-card">
                    <div class="blog-card__img"><img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/09/blog-image1.png" alt="blog image"></div>
                    <div class="blog-card__icon"><img src="<?php echo get_template_directory_uri()?>/assets/img/blogicon-culture.svg" alt="blog icon"></div>
                    <div class="blog-card__category">culture</div>
                    <p>#balanceforbetter international women's day 2019.</p>
                </div>
            </div>
            

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_excerpt(); ?>

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

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
