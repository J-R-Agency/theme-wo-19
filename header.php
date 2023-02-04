<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Analytics -->
	<?php the_field('google_analytics', 'option'); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">

 	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<!-- *** TEMPLATE *** -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="container navbar-expand-md">
			<div class="row align-items-start">
				<div class="col-md-3 col-lg-3">
					<div id="site-logo">
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="The Womens Organisation" itemprop="url">
							<img class="d-md-block" src="<?php echo wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0];?>" alt="The Womens Organisation">
						</a>
					</div>
				</div>
				<div class="col-md-9 col-lg-9">
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<!-- menu-icon hidden on mobile -->
						<span class="c-hamburger">
							<span></span>
						</span>
					</button>
					
					<div id="desktop-nav" class="d-none d-md-block">
						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'top-menu',
								'menu_class'      => 'top-links ml-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'top-menu',
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
						
					</div>
					
					<div id="navbarNavDropdown" class="collapse navbar-collapse">
						<?php get_template_part( 'searchform' ); ?>

						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
					</div>
				</div>
			</div><!-- .container -->
		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->
