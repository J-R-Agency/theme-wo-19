<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$theme_colour = get_field('theme_colour');

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    
<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

												    	
						    	<!-- BLOG CARD -->
						    	<div class="col-sm-12 col-lg-4 col-md-4">
						    		<a href="<?php the_permalink(); ?>" class="link">
								    	<div class="blog-card">
									    	<!-- image -->
									    	<div class="blog-card__img">
									    		<?php if ( has_post_thumbnail() ) {
										    		echo "<img src=\"" . get_the_post_thumbnail_url() . "\">";
									    		}?>
										    </div><!--end image -->
										    
									    	<!-- icon -->
									    	<div class="blog-card__icon">
										    	<img src="<?php echo get_template_directory_uri()?>/assets/img/blogicon-<?php echo $category->slug; ?>.svg" alt="blog icon">
									    	</div><!-- end icon -->
									    	
									    	<!-- category -->
									    	<div class="blog-card__category">
										    	<?php the_category(', '); ?>
										    </div><!-- end category-->
										    
									    	<!-- title -->
								        	<div class="blog-card__title">
									        	<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
									        </div><!-- end title -->
									        
								    	</div><!-- end blog card -->
								    </a>
						        </div><!-- end col -->

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>


		</div> <!-- .row -->

	</div><!-- #content -->

	</div><!-- #archive-wrapper -->
</div>

<?php get_footer();
