<?php
/**
 * Template part for displaying page content in page.php.
 *
<<<<<<< HEAD
 * @package montessori_Theme
=======
 * @package Montessori_Theme
>>>>>>> d47e8ff1f2ad0ba21f083a78de23017f6f2358ad
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
