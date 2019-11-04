<?php

  // ---------- Functions ----------------- //
function wowe_theme_setup(){
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
  }

function set_excerpt_length(){
  return 45;
}

function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="nav-dropdown" /',$menu);  
  return $menu;  
}  

function myplugin_settings() {  
  register_taxonomy_for_object_type('post_tag', 'page'); 
  register_taxonomy_for_object_type('category', 'page');  
}

function page_excerpt_length( $length ) {
  global $post;
  if ($post->post_type == 'page')
   return 10;
   elseif ($post->post_type == 'post')
   return 30;
}

function page_excerpt_more($more) {
  global $post;
  if ($post->post_type == 'page')
  return '';
  elseif ($post->post_type == 'post')
  return '<a class="btn btn-outline" href="'. get_permalink($post->ID) . '">'. __('Read More') .'</a>';
}

// ------------- Widgets ------------------ //
require get_template_directory(). '/inc/widgets.php';

// ------------- Enqueue ------------------ //
include get_template_directory(). '/inc/enqueue.php';

// ------------- Customizer File ---------- //
require get_template_directory(). '/inc/customizer.php';

// ------------- Banner Options ---------- //
require get_template_directory(). '/inc/banner.php';

// ------------- Services Post Type ------------- //
require get_template_directory(). '/inc/services_post_type.php';

// ------------- Hooks -------------------- //

add_action('after_setup_theme','wowe_theme_setup');
add_filter('excerpt_length', 'set_excerpt_length');
add_action('widgets_init', 'wpb_init_widgets');
add_filter('wp_nav_menu','change_submenu_class');  
add_filter( 'excerpt_length', 'page_excerpt_length', 999 );
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'wowe_services' ) );
add_action( 'init', 'myplugin_settings' );
add_filter('excerpt_more', 'page_excerpt_more');
add_post_type_support( 'page', 'excerpt' );
add_action( 'init', 'create_post_type' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );
add_action( 'init', 'wowe_enqueue' );
?>