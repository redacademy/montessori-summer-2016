<?php
/**
 * The template for displaying all pages.
 * Template Name: about
 * @package montessori_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		 <?php while ( have_posts() ) : the_post(); ?>
		<section class="">
		<main id="main" class="site-main" role="main">
<?php echo '<h1 class="">'.CFS()->get( 'title' ).'</h1>'; ?>
<?php echo '<p class="">'.CFS()->get( 'paragraph' ).'</p>'; ?>
<?php echo '<div class="">'.CFS()->get( 'describtion' ).'</div>'; ?>
     <section>
		<?php endwhile; // End of the loop. ?>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>
