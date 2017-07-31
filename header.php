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
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'castrostreetfair' ); ?></button>
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id' => 'header-menu',
					'fallback_cb' => 'false' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .header-wrapper -->

		<?php
		$image_id = get_post_thumbnail_id();
		$url = wp_get_attachment_image_src( $image_id, 'castrostreetfair-full' );
		if ( is_singular() && has_post_thumbnail(  get_the_ID() ) ) :?>
		<div class="site-header-image-wrap">
			<div class="site-header-image" style="background-image: url(<?php echo esc_attr( $url[0] ); ?>);"></div>
		</div><!-- .site-header-image-wrap-->
		<?php elseif ( get_header_image() ) : ?>
		<div class="site-header-image-wrap">
			<div class="site-header-image" style="background-image: url(<?php header_image(); ?>);"></div>
		</div><!-- .site-header-image-wrap-->
		<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
