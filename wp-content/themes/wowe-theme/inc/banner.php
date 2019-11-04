<?php
function wowe_banner_type() {

      if ( get_theme_mod('homepage_slider') == true ) {

        $nav_type = get_theme_mod( 'homepage_slider_nav_type');
        $sliderplay = get_theme_mod( 'homepage_slider_play');
        $dots = 'false';
        $nav = 'true';
        $autoplay = 'true';
        $thumb = 'false';
    
        if ( $nav_type == 'arrows') { 
          $nav = 'true';
        } 
        elseif ( $nav_type == 'dots') { 
          $dots = 'true';
          $nav = 'false';
        } 
        elseif ( $nav_type == 'thumbs') { 
          $thumb = 'true';
          $nav = 'false';
        }
        elseif ( $nav_type == 'none') { 
          $dots = 'false';
          $nav = 'false';
          $thumb = 'false';
        }        
        elseif ( $sliderplay == true) { 
          $autoplay = 'true';
        }  

        echo ' <script>
          $(document).ready(function(){
          $("#slider-home").owlCarousel(
            {
              nav: ' . $nav . ',
              navText: ["<i class=\'fa fa-angle-left fa-2x\'></i>","<i class=\'fa fa-angle-right fa-2x\'></i>"],
              items: 1,
              dots: ' . $dots . ',        
              touchDrag: true,
              autoplay: ' . $autoplay .',
              autoplayTimeout: 3000,        
              loop: true,
              autoWidth: true,
              center: true,
              thumbs: ' . $thumb . ',
              thumbImage: true
            }
          );     
        });     
      </script>';
  } 
   elseif ( get_theme_mod('is_parallax') == true) {
      echo '<script> 
      \'use strict\';
      $.Scrollax();
      </script>';
    }
}
?>
