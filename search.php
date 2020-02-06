<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="search-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main
				class="site-main"
				id="main"
				data-page = "<? get_query_var('paged') ? get_query_var('paged') : 1;?>"
				data-max="<?= $wp_query->max_num_pages; ?>"
			>

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<span>
							<?php
							printf(
								/* translators: %s: query term */
								esc_html__( 'Search result: %s', 'understrap' ),
								'<span>' . get_search_query() . '</span>'
							);
							?>						
						</span>
						
						<h1 class="page-title">
							<?php
							printf(
								/* translators: %s: query term */
								esc_html__( 'You searched for "%s"', 'understrap' ),
								'<span>' . get_search_query() . '</span>'
							);
							?>
						</h1>
						<div class="search-results-number">
							<h2>
							<?php
								global $wp_query;
								echo 'We found '.$wp_query->found_posts.' results';						
							?>
							</h2>						
						</div>

					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						 //get_template_part( 'loop-templates/content', 'search' );
						?>
						<a href="<?php the_permalink(); ?>">						
							<div class="container search-post-results">
								
								<!-- Title and Category -->
								<div class="row">
									<div class="col-12">
						            	<h2 class="search-post-title"><?php the_title(); ?></h2>
									</div>
								</div>
									
								<!-- Excerpt -->
								<div class="row">
									<div class="col-12">
										<span class="search-post-excerpt"><?php the_excerpt(); ?></span>
									</div>
								</div>
								
								<!-- Horizontal Line -->
								<div class="row">
									<div class="col-12">
										<hr>
									</div>
								</div>
									
							</div><!-- end container -->
						</a>
						

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!--<?php
						global $wp_query; // you can remove this line if everything works for you
						 
						// don't display the button if there are not enough posts
						if (  $wp_query->max_num_pages > 1 )
							echo '<div class="wo-btn orange loadmore">Show More</div>'; // you can use <a> as well
						?>-->
			
						<!-- Do the right sidebar check -->
						<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>						
					</div>
				</div>
			</div>


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php get_footer();
