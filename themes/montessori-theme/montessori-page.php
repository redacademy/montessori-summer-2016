<?php
/**
 * The header for our theme.
 *Template Name:motessori
 * @package Montessori_Theme
 */
 get_header();

?>

        <main id="main" class="site-main mobile-container  " role="main">

<!-- Our History Section  -->
          <section id="history" class="history-section ">

                            
<?php $fields = CFS()->get( 'history' );?>
<?php foreach ( $fields as $field )  { ?>
    <div class="main-history">
<div class="history-title" > 
<h1><?php echo $field['history_title'];?></h1>
  
  </div>
  <div class= "history-img" >
<?php
$src = wp_get_attachment_image_src($field['history_img'], 'small');

echo '<img src="'.$src[0].'" />';


?>
 </div>
     <div class="history-content">
         <p><?php echo $field['history_content'];}?></p>

    </div>
</div>
             </section>

<!-- Philosophy Section  -->

<section id="philosophy" class="philosophys-section  mobile-container">
 
  <h1>Philosophy</h1>
<?php $fields = CFS()->get( 'philosophy' );?>
<?php foreach ( $fields as $field )  { ?>
    
<div class="philosophy" > 
<div><h1><?php echo $field['philosophy_title'];?></h1>
  <p>  <?php echo $field['philosophy_content'];?></p>
  <div>
<?php
$src = wp_get_attachment_image_src($field['philosophy_img'], 'small');

echo '<img src="'.$src[0].'" />';

}
?>
 </div>

				</section>

<!-- Start our Benefits -->


<section id="benefits-of-montessori" class="benefits-section mobile-container">
                  <!-- <ul class="main-benefits"> -->
  
                   <h1>Benefits of Montessori</h1>
<?php $fields = CFS()->get( 'benefits' );?>
<?php foreach ( $fields as $field )  { ?>
    
<div class="benefits" > 
<div><h1><?php echo $field['benefits_title'];?></h1>
  
  <div>
<?php
$src = wp_get_attachment_image_src($field['benefits_img'], 'small');

echo '<img src="'.$src[0].'" />'; ?>
<p>  <?php echo $field['benefits_content'];?></p>
<?php
}
?>
<!--  here is a deferent section -->

<?php $fields = CFS()->get( 'benefits_details' );?>
<?php foreach ( $fields as $field )  { ?>
    
<div class="benefits" > 

  
  
 <p> <?php echo $field['benefits_parts'];?></p>
<?php
}
?>

  
  

 </div>




</section>


<!-- End our Benefits -->


<!-- Start Materials Section  -->

<section id="materials" class="materials-section mobile-container">
                  <ul class="main-materials">
                   
<?php $fields = CFS()->get( 'materials' );?>
<?php foreach ( $fields as $field )  { ?>
    
<div class="materials" > 
<div><h1><?php echo $field['materials_title'];?></h1>
  
  <div>
<?php
$src = wp_get_attachment_image_src($field['materials_img'], 'small');

echo '<img src="'.$src[0].'" />'; ?>
<p>  <?php echo $field['materials_content'];?></p>

<?php
}
?>
<p>  <?php echo $field['materials_content'];?></p>

 </div>
                  </ul>

</section>
<!-- Resources Section  -->
<section id= "resources">
<div class="title-resources">
              <h1 id="resources" >Resources</h1>
</section>


 <!-- <a href="#<?php the_title();?>" class="">
                            <img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$post->post_name.".svg"?>">
                          </a> -->
                           <!--       <?php the_title( sprintf( '<h2 class="journal-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <a href="<?php echo esc_url( get_permalink() );?>"><button class="read-entry">Read Entry</button></a> -->

<?php get_footer();?>
