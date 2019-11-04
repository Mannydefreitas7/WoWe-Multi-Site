<?php

function wowe_create_table() {
    
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'client_data';

    if ( $wpdb->get_var('SHOW TABLES LIKE ' . $table_name) != $table_name) {
    /*$sql = "CREATE TABLE $table_name ( 
    id mediumint(9) NOT NULL AUTO_INCREMENT, 
    time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
    name text NOT NULL, 
    businessname text NOT NULL, 
    email text NOT NULL, 
    phone int(10) NOT NULL, 
    street text NOT NULL, 
    city text NOT NULL, 
    state tinytext(2) NOT NULL, 
    zip int(5) NOT NULL, 
    job varchar(20) NOT NULL, 
    PRIMARY KEY  (id)
    ) $charset_collate;"; */

    $sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		text text NOT NULL,
		url varchar(55) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";


    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
        }
    }


register_activation_hook( __FILE__, 'wowe_create_table' );

/* function on_activate( $network_wide ) {
    global $wpdb;
    if ( is_multisite() && $network_wide ) {
        // Get all blogs in the network and activate plugin on each one
        $dbblogs = $wpdb->blogs;
    $blog_ids = $wpdb->get_col( 'SELECT `blog_id` FROM  ' . $dbblogs . '');
        foreach ( $blog_ids as $blog_id ) {
            switch_to_blog( $blog_id );
            wowe_create_table();
            restore_current_blog();
        }
    } else {
        wowe_create_table();
    }
} */
// register_activation_hook( __FILE__, 'on_activate' );

// Creating table whenever a new blog is created
/*
function on_create_blog( $blog_id, $user_id, $domain, $path, $site_id, $meta ) {
    if ( is_plugin_active_for_network( 'wowe_client_data/wowe_client_data.php' ) ) {
        switch_to_blog( $blog_id );
        wowe_create_table();
        restore_current_blog();
    }
} */
//register_activation_hook( __FILE__, 'on_create_blog' );
//register_activation_hook( __FILE__, 'on_activate' );

?>