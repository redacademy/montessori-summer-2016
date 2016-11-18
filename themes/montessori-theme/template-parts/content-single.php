<?php
/**
 * Template part for displaying single posts.
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
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php montessori_posted_on(); ?> / <?php montessori_comment_count(); ?> / <?php montessori_posted_by(); ?>
		</div><!-- .entry-meta -->
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

	<footer class="entry-footer">
<<<<<<< HEAD
		<?php montessori_entry_footer(); ?>
=======
		<?php Montessori_entry_footer(); ?>
>>>>>>> d47e8ff1f2ad0ba21f083a78de23017f6f2358ad
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
