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
  return '';
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

Class Wowe_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
		if( $r->have_posts() ) :
			
			echo $before_widget;
			if( $title ) echo $before_title . $title . $after_title; ?>
			<ul>
				<?php while( $r->have_posts() ) : $r->the_post(); ?>				
			<li class="wowe_recent">
                    <div class="img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="content">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    <br>
                    <?php the_time( 'F d'); ?> 
                </div>
            </li>
				<?php endwhile; ?>
			</ul>
			 
			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}
function wowe_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('Wowe_Recent_Posts_Widget');
}
add_action('widgets_init', 'wowe_recent_widget_registration');
add_theme_support( 'yoast-seo-breadcrumbs' );

?>