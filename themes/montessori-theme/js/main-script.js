

jQuery(document).ready(function( $ ) {

// --------------------------------------------------------------

//  TO HOVER ACTIVE THE ACTIVE LINK :

// ----------------------------------------------------------------


  $('.secondary li a').click(function(){
      $(this).parent().addClass('active').siblings().removeClass('active');
  });

// --------------------------------------------------------------

//  SMOOTH SCROL:

// SMOOTH SCROL:

// ----------------------------------------------------------------
  $(document).ready(function(){
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 800);
            return false;
          }
        }
      });
    });
  });

// --------------------------------------------------------------
// Add Slide Down to Preschools List:

// ----------------------------------------------------------------

$('.toggle').click(function() {
    $('.target').toggle('slow');
});

// --------------------------------------------------------------
// hover class for img

// ----------------------------------------------------------------

// $('.switch').hover(function() {
//         $(this).find('.teacher-img').hide();
//         $(this).find('.teacher_vision').show();
//     }, function() {
//         $(this).find('teacher_vision').hide();
//         $(this).find('.teacher-img').show();
// });



});
