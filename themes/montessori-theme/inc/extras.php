<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Montessori_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function montessori_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'montessori_body_classes' );

//remove submenus
function montessori_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'montessori_remove_submenus', 102 );

//*change WordPress logo to custom logo*/
function montessori_login_logo() {
  echo '<style type="text/css">
  h1 a { background-image: url('.get_bloginfo('template_directory').'/images/logos/montessori-logo-text-dark.svg) !important; }
  </style>';
}
add_action('login_head', 'montessori_login_logo');

//custom login for theme
function montessori_custom_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/build/css/customlogin.css" >';
}

add_action('login_head', 'montessori_custom_login');

// add function that removes "powered by wordpress"
function montessori_login_caption(){
	return 'Return to home page';
}
add_filter( 'login_headertitle', 'montessori_login_caption');


//change the url linked on the log-in logo to home page instead of WordPress site
function montessori_login_url( $url ){
	return home_url();
}
add_filter( 'login_headerurl', 'montessori_login_url' );

//custom function for "about page header"
function montessori_about_header() {

		if(!is_page_template( 'about.php' )){
			return;
}
        $imageUrl= CFS()->get('montessori_image');
        $custom_css = "
              .about-header{
                        background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
												url('$imageUrl') no-repeat center bottom;
												background-size: cover;
                }";
        wp_add_inline_style( 'montessori-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'montessori_about_header' );

// show more than 10products and in alphabetical order (default: 10, list by date)
function montessori_filter_product_query( $query ) {

    if ( (is_post_type_archive('product') || is_tax('product_type') ) && !is_admin() && $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
        $query->set( 'posts_per_page', 16 );
    }
}

add_action( 'pre_get_posts', 'montessori_filter_product_query' );



