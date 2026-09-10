<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script
	  src="https://code.jquery.com/jquery-3.5.0.min.js"
	  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
	  crossorigin="anonymous"></script>
	<script
	  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
	  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
	  crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo.svg"> <span>Slovan Progres</span></a>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo.svg"><span>Slovan Progres</span></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
		<?php dynamic_sidebar( 'slideshow-widgets' ); ?>
	</header>
