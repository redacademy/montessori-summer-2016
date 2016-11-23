<?php
/**
 * Montesorri
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 * @package Montessori_Theme
 */

if ( ! function_exists( 'montessori_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function montessori_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
		'about' => esc_html( 'about secondary Menu' ),
		'montessori' => esc_html( 'motessori Menu' ),
    'program' => esc_html( 'program Menu' ),
		'get-involved' => esc_html( 'get involved Menu' ),
		'contact' => esc_html( 'contact Menu' ),
	) );



	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // montessori_setup
add_action( 'after_setup_theme', 'montessori_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function montessori_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'montessori_content_width', 640 );
}
add_action( 'after_setup_theme', 'montessori_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function montessori_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'montessori_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function montessori_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'montessori_minified_css', 10, 2 );

function output_image($custom_field_slug, $size = 'medium'){
	$img = CFS()->get($custom_field_slug);
  $image_attributes = wp_get_attachment_image_src( $img , $size );
  $src = $image_attributes[0]; ?>
  <img src="<?php echo $src;?>" />
<?php
}

/**
 * Enqueue scripts and styles.
 */
function montessori_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'montessori-style', get_stylesheet_uri() );
	wp_enqueue_script('montessori-main-script',get_template_directory_uri().'/build/js/main-script.min.js' ,array('jquery'),false,true);

	  wp_enqueue_script( 'montessori-font-awesome', 'https://use.fontawesome.com/d45ec2d9ad.js', array(), '4.6.3', false);
		wp_enqueue_style( 'montessori-style', get_stylesheet_uri() );
	wp_enqueue_script( 'montessori-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'montessori_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
