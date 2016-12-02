

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
});

// --------------------------------------------------------------

//  "Get Involved": Function for displaying post id

// ----------------------------------------------------------------
  // hide all content initially except first child
  $(document).ready(function(){
    var interviewButton = jQuery('#involved-interview');
    jQuery('#124 p:last-child').append(interviewButton);

    $("div.post-content").each(function(){
       $(this).hide();
          if($(this).is(':first-child')) {
              $(this).show();
          }
    });

    // Green buttons on the main involved file showing title.
    $('div.involved-title-box').on( "click", function(e) {
      e.preventDefault();
      var id = $(this).attr('data-related');
      $("div.post-content").each(function(){
        if ($(this).attr('data-id') == id) {
          // Display content under buttons
          $(this).show();
          // adjust css to match content of post
          var divHeight = $(this).height();
          $('#involved-titles-container').css('min-height', divHeight+'px');
        } else {
          $(this).hide();
        }
      });
    });
  });
});
