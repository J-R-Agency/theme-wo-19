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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-light navbar-expand-md">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
							<div id="site-logo">
							<img class="d-none d-md-block" src="<?php echo get_template_directory_uri()?>/assets/img/wo-logo.svg" alt="The Womens Organisation">
							<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="The Womens Organisation" itemprop="url">The Womens Organisation</a>
						</div>

						<div id="desktop-nav" class="d-none d-md-block">
							<ul class="top-links">
								<li><a href="#">54 James Street</a></li>
								<li><a href="#">Blog &amp; Media</a></li>
								<li><a href="#">Contact</a></li>
								<li><a><i class="fa fa-search"></i></a></li>
							</ul>
						</div>

						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<!-- memnu-icon hidden on mobile -->
							<span class="c-hamburger">
								<span></span>
							</span>
						</button>

						<div id="navbarNavDropdown" class="collapse navbar-collapse">
							<input type="text" class="search d-md-none"><i class="fa fa-search"></i>

							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'menu_class'      => 'navbar-nav ml-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									// 'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
						</div>
					</div>
				</div>
			</div><!-- .container -->
		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->
