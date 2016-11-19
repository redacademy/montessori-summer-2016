<?php
/**
 * The template for displaying all pages.
 * Template Name: ABOUT
 * @package montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">

	<?php
		$fields = CFS()->get( 'content_group' );
     foreach ( $fields as $field ) {
 echo '<h2 class="">'.$field['content_group_title'].'</h2>';
 echo '<p class="">'.$field['content_group_paragragh'].'</p>';
 echo '<div class="">'.$field['content_group_description'].'</div>';

}
?>
		</main><!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>
