jQuery(document).ready(function( jQuery ) {
// --------------------------------------------------------------
//  TO HOVER ACTIVE THE ACTIVE LINK :
// --------------------------------------------------------------
  jQuery('.secondary li a').click(function(){
      jQuery(this).parent().addClass('active').siblings().removeClass('active');
  });
// --------------------------------------------------------------
//  SMOOTH SCROL:
// --------------------------------------------------------------
  jQuery(document).ready(function(){
    jQuery(function() {
      jQuery('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = jQuery(this.hash);
          target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            jQuery('html, body').animate({
              scrollTop: target.offset().top
            }, 800);
            return false;
          }
        }
      });
    });
    });
  ///------ Toogle the Archive contents and flib the arrow-----///
  jQuery('.toggle').click(function() {
  jQuery('#target').slideToggle('1000');
   jQuery(".arrow").click(function () {
      jQuery(this).toggleClass("rotate");
  });
  });
  ///--------------///
  jQuery(document).ready(function(){
      // On scroll pages on mobile size
          window.onscroll = function() {
                var  jQuerymainNav = jQuery(".sub-menu-wrapper "),
                  jQuerynavWrapper = jQuery(".main-menu-wrapper")
                  that = this;
var jQueryscreenWidth = jQuery( document ).width()
              if (window.pageYOffset > 230 && jQueryscreenWidth <768) {
                  jQuerynavWrapper.addClass("transparent-menu");
              }
              else {
                  jQuerynavWrapper.removeClass("transparent-menu");
              }};
});
// --------------------------------------------------------------
//  "Get Involved": Function for displaying post id

// Montessori Schedule for mobile size
jQuery('.showSingle').on('click', function () {
    jQuery(this).addClass('selected').siblings().removeClass('selected');
    jQuery('.targetDiv').hide();
    jQuery('#div' + jQuery(this).data('target')).show();
});
jQuery('.showSingle').first().click();
// ----------------------------------------------------------------
  // hide all content initially except first child
  jQuery(document).ready(function(){
    var interviewButton = jQuery('#involved-interview');
    jQuery('#124 p:last-child').append(interviewButton);
    jQuery("div.post-content").each(function(){
       jQuery(this).hide();
          if(jQuery(this).is(':first-child')) {
              jQuery(this).show();
          }
    });
    // Green buttons on the main involved file showing title.
    jQuery('div.involved-title-box').on( "click", function(e) {
      e.preventDefault();
      var id = jQuery(this).attr('data-related');
      jQuery("div.post-content").each(function(){
        if (jQuery(this).attr('data-id') == id) {
          // Display content under buttons
          jQuery(this).show();
          // adjust css to match content of post
          var divHeight = jQuery(this).height();
          jQuery('#involved-titles-container').css('min-height', divHeight+'px');
        } else {
          jQuery(this).hide();
        }
      });
    });
});

}(jQuery));
 // last Green buttons on the main involved file showing three option.
 (function(){
     //show and hide functions for volunteer and donations
     var donationBox = jQuery('.involved-options-donations ');
     var volunteerBox = jQuery('.involved-options-volunteer ');
     jQuery('.pink-btn').on("click", function(e){
       e.preventDefault();
       if (donationBox.css('display') == 'none' && volunteerBox.css('display') == 'none') {
         donationBox.show();
       } else if (donationBox.css('display') == 'none' && volunteerBox.css('display') == 'block') {
         volunteerBox.hide();
         donationBox.show();
       } else {
         return;
       }
     });
     jQuery('.re-btn').on("click", function(e){
       e.preventDefault();
       if (donationBox.css('display') == 'none' && volunteerBox.css('display') == 'none') {
         volunteerBox.show();
       } else if (volunteerBox.css('display') == 'none' && donationBox.css('display') == 'block') {
         donationBox.hide();
         volunteerBox.show();
       } else {
         return;
         }
     });
   })();
