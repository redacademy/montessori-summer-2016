jQuery(document).ready(function( $ ) {
  $('.secondary li a').click(function(){
      $(this).parent().addClass('active').siblings().removeClass('active');
  });
});
