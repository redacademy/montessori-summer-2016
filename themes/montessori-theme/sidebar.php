<?php
/**
 * The sidebar containing the main widget area.s
 *
<<<<<<< HEAD
 * @package montessori_Theme
=======
 * @package Montessori_Theme
>>>>>>> d47e8ff1f2ad0ba21f083a78de23017f6f2358ad
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
