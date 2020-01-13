<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheaterDesigner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theaterdesigner' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'theaterdesigner' ); ?></button>
			<?php
			the_custom_logo();
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<?php dynamic_sidebar('nav-widget-1'); ?>
			<button class="sidebar-toggle" id="sidebarButton" onclick="toggleSidebar()">Sidebar</button>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) :
				?>		
				<?php the_header_image_tag(); ?>
				<h1 class="site-title-home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				else :
				?>
				<div class="header-image-page"><?php the_header_image_tag(); ?></div>

				<h2 class="site-title-page"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<?php
			endif;
			$theaterdesigner_description = get_bloginfo( 'description', 'display' );
			if ( $theaterdesigner_description || is_customize_preview() ) :
				if (is_front_page() && is_home()):
				?>
				<p class="site-description"><?php echo $theaterdesigner_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>			
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
