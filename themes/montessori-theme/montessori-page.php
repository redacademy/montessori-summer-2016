

<?php
/**
 * The header for our theme.
 *Template Name:motessori
 * @package Montessori_Theme
 */
get_header();
?>
        <main id="main back-to-top" class="site-main " role="main">
<!-- Our History Section  -->

          <section id="history" class="history-section ">
  <div class="main-history content-wrapper">
            <div class= "history-img" >
           <?php
output_image('history_img'); ?>
          </div>
          <div class="history-title" >
         <h1><?php
$history = CFS()->get('history_title');
if (!empty($history))
  {
  echo $history;
  };
?>
  <div class= "history-img1" >
           <?php
output_image('history_img'); ?>
          </div>
</h1>
<div class="history-content">
<?php
$histor = CFS()->get('history_content');
if (!empty($histor))
{
echo $histor;
};
?>
</div>
  </div>
</div>
    </section>

<!-- Philosophy Section  -->

<section id="philosophy" class="philosophys-section ">
 <div class="main-philosophy content-wrapper">
   <div><h1>Philosophy</h1></div>
 <?php
$fields = CFS()->get('philosophy'); ?>
<?php
foreach($fields as $field)
  { ?>
<div class="philosophy-grid">
  <h2><a href="#" onclick="return showImage()";><?php
    echo $field['philosophy_title']; ?></a></h2>
  <p id="ph-paragraph"><?php
  echo $field['philosophy_content']; ?></p>
<div class= "philosophy-img" >
<?php
  $src = wp_get_attachment_image_src($field['philosophy_img'], 'medium'); ?>
<a onclick="return showParagraph()"; > <?php
  echo '<img src="' . $src[0] . '" />';
?></a>
</div>
</div>
 <?php
  } ?>
 </div>
   </section>

<!-- Start our Benefits -->

<section id="benefits-of-montessori" class="benefits-section ">
<div class="main-benefits content-wrapper">
<h1>Benefits of Montessori</h1>
<div class="first-benefits-section">
  <?php
output_image('benefits_img'); ?>
  <div class="benefits-content">
      <?php
$benefit = CFS()->get('benefits_content');
if (!empty($benefit))
{
echo $benefit;
}; ?>
</div>
        </div>

<!--  here is the meta data of the benefits loop section -->
<div>
        <ul>
        <?php
$fields = CFS()->get('benefits_details'); ?>
        <?php
foreach($fields as $field)
  { ?>
    <div class="benefits">
       <li>
        <?php
  echo $field['benefits_parts']; ?>
        </li>
        <?php
  }
?>
    </div>
        </ul>
 </div>
 </div>
</section>
<!-- End our Benefits -->

<!-- Start Materials Section  -->

<section id="materials" class="materials-section ">
  <div class="main-materials content-wrapper">
<?php
$fields = CFS()->get('materials'); ?>
<?php
foreach($fields as $field)
  { ?>
<div class="materials materials-grid">
<div class="materials-contents">
  <h1><?php
    echo $field['materials_title']; ?></h1>
      <?php
  echo $field['materials_content']; ?>
</div>
<div><?php
  $src = wp_get_attachment_image_src($field['materials_img'], 'small');
  echo '<img src="' . $src[0] . '" />'; ?></div>
</div>
<?php
  } ?>
  <!-- Archive Title -->
  <div class="montessori-archive">
    <h3>archives<span class=""><i class="fa fa-angle-down " aria-hidden="true"></i></span></h3>
    <div id="#"><a href=""></a></div>
  </div>
  </div>

</section>
<!-- Resources Section  -->
<section id= "resources" class="container ">
  <div class="main-resources content-wrapper">
    <div class="title-resources">
                  <h1 id="resources">Resources</h1>
</div>
<div class="montessori-archive">
  <h3>archives<span class="toggle"><i class="fa fa-angle-down arrow" aria-hidden="true"></i></span></h3>
  <div id="target" class="the-archive">
    <ul>
      learn more about montessori history
      <div class="">
    <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="<?php the_permalink(); ?>">Montessori FAQ</a></li>
<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="<?php the_permalink(); ?>">Montessori education</a></li>
<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="<?php the_permalink(); ?>">Maria Montessori A Brief Biography</a></li></div>
</ul>
<ul>
  Learn more about Montessory Materials
  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="<?php the_permalink(); ?>">A look at the binomial cube</a></li>
</ul>
<ul>
  Learn more about Montessory Philosophy
  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="<?php the_permalink(); ?>">Montessori Philosophy</a></li>
</ul>
</div>
<div class="montessori-archive">
  <div class="">
  <h3>videos<span class=""><i class="fa fa-angle-down" aria-hidden="true"></i></span></h3>
  <div class="#"></div></div>
</div>
<div class="montessori-archive">
  <div class="">
  <h3>other<span class=""><i class="fa fa-angle-down" aria-hidden="true"></i></span></h3>
  <div class="#"></div></div>
  </div>
  </div>
</div>

  <!--the button-->
<div>
<button class="green-bt"><a href="<?php the_permalink(15); ?>">NW Montessori Program</a></button>
</div>

</section>
<?php
get_footer(); ?> 
