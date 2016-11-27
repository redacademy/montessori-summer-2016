<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package montessori_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found container">

				<h1 class="title">Ooops, this page does not exist on Montissori Society Website</h1>
			
				<a href="<?php echo get_home_url(); ?>" class="btn-return"> </a>

				 <h2 class="enter"> Tap circle to Return to Home Page </h2>
				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>