<?php
/**
 * The template for displaying all pages.
 * Template Name: about
 * @package montessori_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main back-to-top" class="site-main" role="main">
			<div class="about-wrapper">
			<!-- **********///////////////// about NW School Section ///////////////********** -->
<section id="our-history" class="about" >
<?php
$fields = CFS()->get( 'content_group' );
foreach ( $fields as $field ) {?>
		<div class="about-school">
<?php	echo '<h1 >'.$field['content_group_title'].'</h1>';
      echo '<div class="about-content">'.$field['content_group_paragragh'].'</div>';
      echo '<div class="red-border-container">'.$field['content_group_description'].'</div>';?>
	 </div>
<?php	}
			?>
</section>
			<!-- **********///////////////// Members List Section ///////////////********** -->
<section id="board-members" class="members-list">
				<    h1>Board Members<h1>
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
			    	<p class="bold"><?php echo CFS()->get('member_title'); ?></p>
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
	        <div class="meeting-img"><?php
	$src = wp_get_attachment_image_src($field['meeting_menutes_img'], 'small');
  echo '<img src="' . $src[0] . '" />'; ?></div>
          <div class="event-date">
  <?php echo '<p>'.CFS()->get( 'date_event' ).'</p>'; ?>
         </div>
  <?php
  $fields = CFS()->get('the_event'); ?>
  <?php
  foreach($fields as $field)
  { ?>
         <form action="event-checkbox" method="get">
           <input type="checkbox"checked>
	<?php
  echo $field['plans']; ?>
        </form>
  <?php
  } ?>
		  	<div class="red-more">
		        <button class="green-btn"href="<?php echo esc_url(the_permalink()); ?>/nw-program/">Read More</button>
				</div>
</section>
			<!-- **********///////////////// newsLetter Section ///////////////********** -->
<section id="newsletter" class="newsLetter">
				  	<h1>NewsLetter</h1>
				  	<h2>exciting time of the year! </h2>
<?php echo '<p style="font-size:1.68rem;margin-top:3rem">'.CFS()->get( 'date' ).'</p>'; ?>
<?php echo '<p>'.CFS()->get( 'details' ).'</p>'; ?>
</section>
		    <div class="archive-sec">
			  <div class="arch-btn">
    	     <button class="green-btn">Read More</button>
	  	  </div>
        <div class="arch-block">
	        <h1>Archives<span class="toggle"><i class="fa fa-angle-down arrow" aria-hidden="true"></i></span></h1>
          <a href="#" class="target"><?php get_sidebar(); ?></a>
       </div>
	     </div>
			<!-- **********///////////////////////////////////////////////////********** -->
<?php get_footer(); ?>
		  </div>
		  <!-- #about-page -->
	 </main>
	 <!-- #main -->
</div>
<!-- #primary -->
