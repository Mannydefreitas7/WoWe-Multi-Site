<?php 
function wowe_enqueue() {

    wp_register_style('components', get_template_directory_uri() . '/css/component.css');

    wp_register_style('font_awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
    wp_register_style('font_icons', get_template_directory_uri() . '/css/font-icons.css');
    wp_register_style('owl_carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');

    wp_register_style('owl_carousel_theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
  
    wp_enqueue_style('owl_carousel');
    wp_enqueue_style('owl_carousel_theme');
    wp_enqueue_style('font_awesome');
    wp_enqueue_style('font_icons');

    wp_register_script('scripts' , get_template_directory_uri() . '/js/scripts.js' , array(), false, true);
    wp_register_script('owl_carousel_js' , get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true);
    wp_register_script('owl_carousel_thumbs', get_template_directory_uri() . '/js/owl.carousel.thumb.min.js', array(), false, true);
    wp_register_script('scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
    wp_enqueue_script('owl_carousel_js');
    wp_enqueue_script('owl_carousel_thumbs');
    wp_enqueue_script('scrollax');


}