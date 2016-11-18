jQuery(document).ready(function( $ ) {
  $(' .menu-menu-1-container ul li a').on('click',function(){
      $(this).parent().addClass('active').siblings().removeClass('active');
  });
})();