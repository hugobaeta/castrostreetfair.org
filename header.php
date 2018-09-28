<?php
/**
 * @package CastroStreetFair
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#433f80" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'castrostreetfair' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-header-wrapper">

			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->

			<div class="cover-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/csf-2018-cover.jpg" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'castrostreetfair' ); ?></button>
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id' => 'header-menu',
					'fallback_cb' => 'false' ) ); ?>
			</nav><!-- #site-navigation -->

		</div><!-- .header-wrapper -->

	</header><!-- #masthead -->

	<?php if ( is_active_sidebar( 'header-message' ) ) : ?>
		<section class="header-message">
			<?php dynamic_sidebar( 'header-message' ); ?>
		</section>
  <?php endif; ?>

	<div id="content" class="site-content">
