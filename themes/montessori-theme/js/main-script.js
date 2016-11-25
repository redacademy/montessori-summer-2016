

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

  if $('.target').toggle('slow');
  else if ($()) {

  }
});

// --------------------------------------------------------------
// hover class for img

// ----------------------------------------------------------------
if ( $(".b1") ) {
       $('.b1').append('<p>B1 is there</p>')};
       else if  ($(".b2") ) {
       $('.b2').append('<p>B2 is there</p>');
       alert("b2");}
