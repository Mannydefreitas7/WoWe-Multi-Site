<?php
//add_action('admin_head', 'client_data_capture');
add_action('admin_menu', 'client_data_menu_admin');
add_action( 'wpmu_new_blog', 'on_create_blog', 10, 6 );
wp_register_style('client_data_style', plugins_url( 'css/admin.css', dirname(__FILE__) ));
wp_enqueue_style('client_data_style');

?>