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
			<section id="our-history" class="about-school">
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
			<section id="board-members" class="members-list">
				<h1>Board Members<h1>
				<!-- Custom Post Loop To Call Members List  -->
				<?php
				query_posts(array( 'post_type' => 'staff','taxonomy' => 'staff_categories','staff_categories' =>'members' ));
			?>
			<div class="members-grid">
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="members-block">
			<div class="flip-container">
			<div class="flip-wrap">
			<div class="flipper">
				      <div class="front">
							      	<?php if ( has_post_thumbnail() ) : ?>
			                <?php the_post_thumbnail( 'large' ); ?>
											<?php endif; ?>
							</div>
						<div class="back"><p ><?php echo CFS()->get('member_vision'); ?></p></div>
					</div><!-- #flippre -->
				</div><!-- #flippre -->
					</div><!-- #flip-container -->
					<div class="members_det">
			      <p><?php echo CFS()->get('member_name'); ?></p>
			    	<p><?php echo CFS()->get('member_title'); ?></p>
					</div><!-- #member_det -->
				</div><!-- #members_block -->
						<?php endwhile; else: ?>
							<p>Sorry, no posts matched your criteria.</p>
							<?php endif; ?>
								<?php wp_reset_query(); ?>
			</section>
			<!-- **********///////////////// Members at Large Section ///////////////********** -->
     <section  class="members_at_large">
			 <h1>Members at Large</h1>
			 <div class="members_at_large-grid">
	  	<?php
			$fields = CFS()->get( 'members_at_large' );
			foreach ( $fields as $field ) {
			echo '<div class="members_at_large-name">'.'</p>'.$field['members_at_large_name'].'</p>'.'</div>';
			}
			?>
		</div>
    </section>
		<!-- **********///////////////// Meeting Minutes Section ///////////////********** -->
		<section id="meetings" class="meeting-minutes">
			<h1>Meeting Minutes</h1>
<div class="event-date">
			  <?php echo '<p>'.CFS()->get( 'date_event' ).'</p>'; ?>
</div>
	<div class="event-grid">
			<?php
			query_posts(array( 'post_type' => 'school','taxonomy' => 'school_categories','school_categories' =>'news' ));
		  ?>
	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="news-img">
										<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'large' ); ?>
								  	<?php endif; ?>
									</div>
		  <?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
			<form action="event-checkbox" method="get">
				  <input type="checkbox" ></br>
				  <input type="checkbox"checked></br>
					<input type="checkbox" ></br>
	    </form>
				<?php wp_reset_query(); ?>
				</div><!-- #event-grid -->
			<div class="archive-sec">

	<a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>/nw-program/">Read More</a>
	<div class="archive-block">
	<label class="archive" ><h1>Archives</h1></lable>
  <div class="toggle"><?php get_sidebar(); ?></div>
	</div>
			</section>
			<!-- **********///////////////// newsLetter Section ///////////////********** -->
			<section id="newsletter" class="newsLetter">
					<h1>NewsLetter</h1>
					<h3>exciting time of the year! </h3>
					<?php echo '<h4>'.CFS()->get( 'date' ).'</h4>'; ?>
						<?php echo '<p>'.CFS()->get( 'details' ).'</p>'; ?>
						<div class="red-more">
						<a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>/nw-program/">Read More</a>
				  	</div>
			</section>
			<!-- **********///////////////////////////////////////////////////********** -->
		</div>
		<!-- #about-page -->
			<?php get_footer(); ?>
		</main>
		<!-- #main -->
		</div>
		<!-- #primary -->
