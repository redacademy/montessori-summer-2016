<?php
/**
 * The template for displaying all pages.
 * Template Name: about
 * @package montessori_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
				</div>
				<section class="">
					<?php the_title( '<h1 class="">', '</h1>' ); ?>
						<?php the_content(); ?>
							<p class="">
								<?php echo CFS()->get('description'); ?>
							</p>
				</section>
				<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>
