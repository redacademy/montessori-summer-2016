<?php
/**
 * The template for displaying all pages.
 * Template Name: about
 * @package montessori_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<section class="">
		<main id="main" class="site-main" role="main">
<?php echo '<h1 class="price">'.CFS()->get( 'Our History' ).'</h1>'; ?>
<?php echo '<p class="price">'.CFS()->get( 'paragraph1' ).'</p>'; ?>
<?php echo '<div class="price">'.CFS()->get( 'describtion1' ).'</div>'; ?>
<section>
	<section class="">
	<main id="main" class="site-main" role="main">
<?php echo '<h1 class="price">'.CFS()->get( 'our_role' ).'</h1>'; ?>
<?php echo '<p class="price">'.CFS()->get( 'paragraph2' ).'</p>'; ?>
<?php echo '<div class="cfsborder">'.CFS()->get( 'describtion2' ).'</div>'; ?>
<section>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>
