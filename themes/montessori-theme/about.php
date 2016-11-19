<?php
/**
 * The template for displaying all pages.
 * Template Name: about
 * @package montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">

	<?php
		$fields = CFS()->get( 'content_group' );
		$i=0;
     foreach ( $fields as $field ) {$i++;
			 if ($i > 1) { echo '<div class="border">'.$i.'</div>';}
 echo '<h1 class="">'.$field['content_group_title'].'</h1>';
 echo '<p class="">'.$field['content_group_paragragh'].'</p>';
 echo '<div class="">'.$field['content_group_description'].'</div>';

}
?>

<div class="newsLetter">
	 <?php echo '<h2>'.CFS()->get( 'newsletter_title' ).'</h2>'; ?>
	 <?php echo '<h2>'.CFS()->get( 'date' ).'</h2>'; ?>
	 <?php echo '<p>'.CFS()->get( 'details' ).'</p>'; ?>
</div>

		</main><!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>
