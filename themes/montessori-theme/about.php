<?php
/**
 * The template for displaying all pages.
 * Template Name: about
 * @package montessori_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="about-wrapper">


			<!-- **********///////////////// about NW School Section ///////////////********** -->
			<section class="about-school">
				<?php
			$fields = CFS()->get( 'content_group' );

			foreach ( $fields as $field ) {

				echo '<h1 >'.$field['content_group_title'].'</h1>';
				echo '<div class="about-content">'.$field['content_group_paragragh'].'</div>';
			  echo '<div class="red-border-container">'.$field['content_group_description'].'</div>';
			}
			  ?>
		</section>
			<!-- **********///////////////// Members List Section ///////////////********** -->
			<section>
				<!-- Custom Post Loop To Call Members List  -->
				<?php
			query_posts(array( 'post_type' => 'staff','staff-category' => 'members' ));
			?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					<div class="flip-container">
						<div class="flip-wrap">
					<div class="flipper">
						<div class="front">
							<?php the_post_thumbnail('members->ID','thumbnail');?>
						</div>
						<div class="back">
							<p class="teacher_title">
								<?php echo CFS()->get('member_vision'); ?>
							</p>
						</div>
						</div><!-- #flippre -->
					</div><!-- #flippre -->
						</div><!-- #flip-container -->
						<div class="member_det">
							<p class="teacher_name">
								<?php echo CFS()->get('member_name'); ?>
							</p>
							<p class="teacher_title">
								<?php echo CFS()->get('member_title'); ?>
							</p>
						</div>
						<?php endwhile; else: ?>
							<p>Sorry, no posts matched your criteria.</p>
							<?php endif; ?>
								<?php wp_reset_query(); ?>
			</section>
			<!-- **********///////////////// Members at Large Section ///////////////********** -->
     <section class="members_at_large">
			 <h1>Members at Large</h1>
	  	<?php
			$fields = CFS()->get( 'members_at_large' );

			foreach ( $fields as $field ) {
			echo '<div class="">'.'</p>'.$field['members_at_large_name'].'</p>'.'</div>';
			}
			?>
    </section>

		<!-- **********///////////////// Meeting Minutes Section ///////////////********** -->
		<section class="meeting-minutes">
			<h1>Meeting Minutes</h1>
			<img src="<?php bloginfo('template_directory'); ?>/images/" alt="Meeting Minutes Section" />
			<?php
			$fields = CFS()->get( 'meeting_minutes_date' );
			$fields = CFS()->get( 'meeting_minutes' );

			// foreach ( $fields as $field ) {
			// echo	'<input type="checkbox"  value="1"'.$field['options'].'/>');
			// }
			?>
		</section>


			<!-- **********///////////////// Archive Section ///////////////********** -->

			<section class="archive">
			<label class="toggle">
				<?php the_archive_title( '<h1>', '</h1>' ) ;?>
				<i class="fa fa-angle-down fa-3x" aria-hidden="true"></i>
			 </label>
			<div class="target" <?php get_sidebar(); ?> </div>
			</section>

			<!-- **********///////////////// newsLetter Section ///////////////********** -->
			<section class="newsLetter">
					<h1>NewsLetter</h1>
					<p>exciting time of the year! </p>
					<?php echo '<h3>'.CFS()->get( 'date' ).'</h3>'; ?>
						<?php echo '<p>'.CFS()->get( 'details' ).'</p>'; ?>
			</section>
			<!-- **********///////////////// newsLetter Section ///////////////********** -->

		    </div>
		<!-- #about-page -->
		</main>
		<!-- #main -->
</div>
	  <!-- #primary -->
	<?php get_footer(); ?>
