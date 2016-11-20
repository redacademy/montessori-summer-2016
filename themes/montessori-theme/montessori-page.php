<?php
/**
 * The header for our theme.
 *Template Name:motessori
 * @package Montessori_Theme
 */
 get_header();

?>
<div class="container2">
<section id="history" class="our-history">

  		<!-- <?php while ( have_posts() ) : the_post(); ?>
<div class="history">
  			<h3><?php echo CFS()->get( 'our_history_title' ); ?></h3>
      </div>
      <div class="cfsBorder">
  			<p><?php echo CFS()->get( 'our_history_description' ); ?></p>
      </div>
  			<h3><?php echo CFS()->get( 'our_history_content' ); ?></h3>



  		<?php endwhile; // End of the loop. ?> -->


  						</div>
              <h1>inhabitent journal</h1>
              				<ul>
              					<?php
              					   $args = array( 'post_type' => 'school', 'posts_per_page' => 1);
              					   $recent_posts = get_posts( $args ); // returns an array of posts
              					?>
              					<?php foreach ( $recent_posts as $post ) : setup_postdata( $post ); ?>
              					<li>
              						<div class="thumbnail-wrapper">
              							<?php if ( has_post_thumbnail() ) : ?>
              								<?php the_post_thumbnail( 'large' ); ?>
                              <?php the_title(); ?>
                              <?php the_author(); ?>

              							<?php endif; ?>

              						</div>
              					</li>
              						<?php endforeach; wp_reset_postdata(); ?>
              			 </ul>
</section>

</div>









<?php get_footer();?>
