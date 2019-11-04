<?php

global $wpdb;

$sc_rows = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'client_data');

foreach ($sc_rows as $sc_row) {

	$sc_name = $sc_row->name;
    $sc_email = $sc_row->email;
    $sc_phone = $sc_row->phone;
    $sc_businessname = $sc_row->businessname;
    $sc_street = $sc_row->street;
    $sc_city = $sc_row->city;
    $sc_state = $sc_row->state;
    $sc_zip = $sc_row->zip;
	$sc_job = $sc_row->job;
}

// Client Name ShortCode
function client_name(){
	global $sc_name;
	return $sc_name;
}
// Client Phone Shortcode
function client_phone(){
	global $sc_phone;
	return $sc_phone;
}
// Client Phone Shortcode
function client_email(){
	global $sc_email;
	return $sc_email;
}
// Client Business Name Shortcode
function client_business_name(){
	global $sc_businessname;
	return $sc_businessname;
}
// Client Street Shortcode
function client_street(){
	global $sc_street;
	return $sc_street;
}
// Client City Shortcode
function client_city(){
	global $sc_city;
	return $sc_city;
}
// Client State Shortcode
function client_state(){
	global $sc_state;
	return $sc_state;
}
// Client Zip Shortcode
function client_zip(){
	global $sc_zip;
	return $sc_zip;
}
// Client Job Shortcode
function client_job(){
	global $sc_job;
	return $sc_job;
}


add_shortcode( 'client-name', 'client_name' );
add_shortcode( 'client-phone', 'client_phone' );
add_shortcode( 'client-email', 'client_email' );
add_shortcode( 'client-business-name', 'client_business_name' );
add_shortcode( 'client-street', 'client_street' );
add_shortcode( 'client-city', 'client_city' );
add_shortcode( 'client-state', 'client_state' );
add_shortcode( 'client-zip', 'client_zip' );
add_shortcode( 'client-job', 'client_job' );
