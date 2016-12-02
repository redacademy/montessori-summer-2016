

jQuery(document).ready(function( $ ) {

// --------------------------------------------------------------
//  TO HOVER ACTIVE THE ACTIVE LINK :
// --------------------------------------------------------------


  $('.secondary li a').click(function(){
      $(this).parent().addClass('active').siblings().removeClass('active');
  });

// --------------------------------------------------------------
//  SMOOTH SCROL:
// --------------------------------------------------------------
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
  ///------ Toogle the Archive contents and flib the arrow-----///
  $('.toggle').click(function() {
  $('#target').slideToggle('1000');
   $(".arrow").click(function () {
      $(this).toggleClass("rotate");
  });
  });
  ///--------------///
  $(document).ready(function(){
      // On scroll pages on mobile size
          window.onscroll = function() {
                var  $mainNav = $(".sub-menu-wrapper "),
                  $navWrapper = $(".main-menu-wrapper")
                  that = this;
var $screenWidth = $( document ).width()
              if (window.pageYOffset > 230 && $screenWidth <768) {
                  $navWrapper.addClass("transparent-menu");
              }
              else {
                  $navWrapper.removeClass("transparent-menu");
              }};
})

});

//contact comments

$('.wpcf7-form-control-wrap').submit(function(event){
         if ($('.wpcf7-form-control-wrap').valid()) {
             alert('Your message has been sent, thank you!');
         } else {
             event.preventDefault();
         }
     });
}(jQuery));
