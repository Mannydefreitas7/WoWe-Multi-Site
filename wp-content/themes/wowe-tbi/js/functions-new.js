jQuery(document).ready(function($){
    'use strict';
    $.Scrollax();

      var menuToggle = jQuery('.nav-toggle');
      var mobileMenu = jQuery('.mobile-menu');
      
      menuToggle.click(function() {
            mobileMenu.children('.container').toggleClass("expanded");
            $(this).toggleClass("active");
      });
  });
 
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 400) {
        $("#header").addClass("sticky").fadeIn();
    } else {
      $("#header").removeClass("sticky");
    }
}); 
