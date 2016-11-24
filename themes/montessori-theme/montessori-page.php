<?php
/**
 * The header for our theme.
 *Template Name:motessori
 * @package Montessori_Theme
 */
 get_header();

?>

        <main id="main" class="site-main " role="main">

<!-- Our History Section  -->
          <section id="history" class="history-section mob-container">
  <div class="main-history ">

<div class="history-title" >
         <h1><?php
              $history = CFS()->get('history_title');
              if( !empty($history) ){
                echo $history; };
            ?></h1>
            </div>
            <div class= "history-img" >
           <?php output_image('history_img'); ?>
          </div>
            <div class="history-content">
          <p><?php
              $histor = CFS()->get('history_content');
              if( !empty($histor) ){
                echo $histor; };
            ?></p>

 </div>
</div>
    </section>

<!-- Philosophy Section  -->

<section id="philosophy" class="philosophys-section ">

 
 <div class="main-philosophy ">
 <div class=""><h1>Philosophy</h1></div>

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

<section id="benefits-of-montessori" class="benefits-section mob-container">

     <h1>Benefits of Montessori</h1>
      <div class="main-benefits mob-container">
  <div class= "benefits-img" >
  <?php output_image('benefits_img'); ?>
</div>
            <div class="benefits-content">
<?php
              $benefit = CFS()->get('benefits_content');
              if( !empty($benefit) ){
                echo $benefit; };
            ?>
 </div>
</div>
<!--  here is the meta data of the benefits section -->
<ul>
<?php $fields = CFS()->get( 'benefits_details' );?>
<?php foreach ( $fields as $field )  { ?>
<div class="benefits">
<li>  <?php echo $field['benefits_parts'];?></li>
<?php
}
?>
 </div>
 </ul>
</section>


<!-- End our Benefits -->


<!-- Start Materials Section  -->

<section id="materials" class="materials-section mob-container">

  <div class="main-materials">

<?php $fields = CFS()->get( 'materials' );?>
<?php foreach ( $fields as $field )  { ?>
<div class="materials" >
<div><h1><?php echo $field['materials_title'];?></h1>
  <div>
<?php
$src = wp_get_attachment_image_src($field['materials_img'], 'small');
echo '<img src="'.$src[0].'" />'; ?>
<p>  <?php echo $field['materials_content'];?></p>
<?php } ?>
 </div>
</div>
</section>
<!-- Resources Section  -->
<section id= "resources" class="container mob-container">
  <div class="main-resources ">
<div class="title-resources">
              <h1 id="resources" >Resources</h1>


<button class="green-btn"> NW Montessori Program</button>
</div>
</div>
</section>



<?php get_footer();?>
