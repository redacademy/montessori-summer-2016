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
  <div class="main-history">

<?php $fields = CFS()->get( 'history' );?>
<?php foreach ( $fields as $field )  { ?>

  <div class= "history-img" >
<?php
$src = wp_get_attachment_image_src($field['history_img'], 'small');

echo '<img src="'.$src[0].'" />';} ?>
</div>
<div class="history-title" >

<?php
              $history = CFS()->get('history_title');
              if( !empty($history) ){
                echo $history; };
            ?>
            </div>
            <div class="history-content">
<?php
              $histor = CFS()->get('history_content');
              if( !empty($histor) ){
                echo $histor; };
            ?>

 </div>
</div>
             </section>

<!-- Philosophy Section  -->

<section id="philosophy" class="philosophys-section  mobile-container">

 <h1>Philosophy</h1>

 <div class="main-philosophy">



 <?php $fields = CFS()->get( 'philosophy' );?>
<?php foreach ( $fields as $field )  { ?>
<div class="philosophy-grid ">

<h2 ><?php echo $field['philosophy_title'];?></h2>

<p><?php echo $field['philosophy_content'];?></p>



<div class= "philosophy-img" >

<?php
$src = wp_get_attachment_image_src($field['philosophy_img'], 'small');?>
<a href="#"> <?echo '<img src="'.$src[0].'" />';
?></a>
</div>
</div>
 <?php }?>
 </div>


        </section>

<!-- Start our Benefits -->


<section id="benefits-of-montessori" class="benefits-section mobile-container">
                  <!-- <ul class="main-benefits"> -->

                   <h1>Benefits of Montessori</h1>
<?php $fields = CFS()->get( 'benefits' );?>
<?php foreach ( $fields as $field )  { ?>

  <div class= "benefits-img" >
<?php
$src = wp_get_attachment_image_src($field['benefits_img'], 'small');

echo '<img src="'.$src[0].'" />';} ?>
</div>

            <div class="benefits-content">
<?php
              $benefit = CFS()->get('benefits_content');
              if( !empty($benefit) ){
                echo $benefit; };
            ?>

 </div>
</div>

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


<?php get_footer();?>
