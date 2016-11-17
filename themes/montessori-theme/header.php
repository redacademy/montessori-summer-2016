<?php
/**
 * The header for our theme.
 *
 * @package Montessori_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
				 <h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div>


				<nav id="site-navigation" class="main-navigation" role="navigation">

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					<?php if ( is_page_template( 'about.php' )):?>
							<h4><h4>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'about',
							'menu_id' => 'about',
							'menu_class'=> 'secondary'
						) );
						?>

					<?php endif; ?>

					<?php if ( is_page_template( 'montessori-page.php' )):?>
							<h4><h4>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'montessori',
							'menu_id' => 'montessori',
							'menu_class'=> 'secondary'
						) );
						?>

					<?php endif; ?>

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
