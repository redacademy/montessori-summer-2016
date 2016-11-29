
<?php
/**
 * The header for our theme.
 *
 * @package Montessori_Theme
 */
?><!DOCTYPE html>
<html <?php
language_attributes(); ?>>
    <head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11"> 
        <link rel="pingback" href="<?php
bloginfo('pingback_url'); ?>">
<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo/favicon.png" />
    <?php
wp_head(); ?>
    </head>
    <body <?php
body_class(); ?>>
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content"><?php
esc_html('Skip to content'); ?></a>
            <header id="masthead" class="site-header" role="banner">
<div class="main-menu-wrapper" >

                    <div class="site-branding montessori-logo ">
                        <a href="<?php
echo esc_url(home_url('/')); ?>"><img src="<?php
echo esc_url(get_template_directory_uri()); ?>/images/logo/montessori-logo.svg" alt="montessori logo"/>
                    </a>
          </div><!-- .site-branding -->

                  <div class="site-main-menu">
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                                    <?php
wp_nav_menu(array(
  'theme_location' => 'primary',
  'menu_id' => 'primary-menu'
)); ?>

                                </nav>
                    </div><!-- .site-main-menu -->
     </div>
<nav>
                    <?php

if (is_page_template('about.php')): ?>
                        <?php
  wp_nav_menu(array(
    'theme_location' => 'about',
    'menu_id' => 'about',
    'menu_class' => 'secondary'
  ));
?>

                    <?php
elseif (is_page_template('montessori-page.php')): ?>
                        <?php
  wp_nav_menu(array(
    'theme_location' => 'montessori',
    'menu_id' => 'montessori',
    'menu_class' => 'secondary'
  ));
?>
                      <?php
elseif (is_page_template('contact.php')): ?>
                          <?php
  wp_nav_menu(array(
    'theme_location' => 'contact',
    'menu_id' => 'contact',
    'menu_class' => 'secondary'
  ));
?>
<?php
elseif (is_page_template('involved.php')): ?>
    <?php
wp_nav_menu(array(
'theme_location' => 'get-involved',
'menu_id' => 'get-involved',
'menu_class' => 'secondary'
));
?>
                          <?php
elseif (is_page_template('nw-program.php')): ?>
                              <?php
  wp_nav_menu(array(
    'theme_location' => 'program',
    'menu_id' => 'program',
    'menu_class' => 'secondary'
  ));
?>

                    <?php

endif; ?>
                </div>
            </div>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->
            <div id="content" class="site-content">
