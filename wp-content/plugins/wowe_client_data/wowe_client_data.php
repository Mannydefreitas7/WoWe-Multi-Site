<?php 
/*
Plugin Name:  WolinWeb Client Data
Plugin URI:   https://wolinweb.com
Description:  WolinWeb Client Data Capture and shortcodes
Version:      1.0
Author:       Wolin
Author URI:   https://wolinweb.com
Text Domain:  wolinweb
*/

defined( 'ABSPATH') or die( 'Hey, what are you doing here? You silly Human!');
define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
/* -------- FUNCTIONS ----------- */

// Client Data Form Display Function 

include( MY_PLUGIN_PATH . 'inc/client_data_form.php' );

// Client Data Capture Functions 

//include 'inc/client_data_capture.php';

// Client Data Shortcodes

include( MY_PLUGIN_PATH . 'inc/shortcodes.php' );

// Client Data Menu Admin

include( MY_PLUGIN_PATH . 'inc/menu_admin.php' );

// Client Data Menu Admin

include( MY_PLUGIN_PATH . 'inc/meta_boxes.php' );

// Client Data Create Table 

//include 'inc/client_create_table.php';

function wowe_create_table() {
    
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'client_data';

    if ( $wpdb->get_var('SHOW TABLES LIKE ' . $table_name) != $table_name) {

    $sql = "CREATE TABLE $table_name ( 
    id mediumint(9) NOT NULL AUTO_INCREMENT, 
    time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
    name tinytext NOT NULL, 
    `businessname` text NOT NULL, 
    `email` text NOT NULL, 
    `phone` int(10) NOT NULL, 
    `street` text NOT NULL, 
    `city` text NOT NULL, 
    state varchar(2) NOT NULL, 
    `zip` int(5) NOT NULL, 
    `job` varchar(20) NOT NULL, 
    PRIMARY KEY  (id)
    ) $charset_collate;"; 

   /* $sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		text text NOT NULL,
		url varchar(55) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;"; */
 

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
        }
    }

function on_create_blog( $blog_id, $user_id, $domain, $path, $site_id, $meta ) {
        if ( is_plugin_active_for_network( 'wowe_client_data/wowe_client_data.php' ) ) {
            switch_to_blog( $blog_id );
            wowe_create_table();
            restore_current_blog();
        }
    }
register_activation_hook( __FILE__, 'wowe_create_table' );
register_activation_hook( __FILE__, 'on_create_blog' );

/* -------- HOOKS ----------- */

include( MY_PLUGIN_PATH . 'inc/hooks.php' );

