<?php


function client_data_capture() {
        
        global $wpdb;   
       
        $name = $_POST['client_name'];
        $email = $_POST['client_email'];
        $phone = $_POST['client_phone'];
        $businessname = $_POST['client_business_name'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['client_zip'];
        $zip = $_POST['client_job'];
    
        $table = $wpdb->prefix . 'client_data';
        $data = array(
            'client_name' => $name, 
            'businessname' => $businessname, 
            'phone' => $phone,  
            'email' => $email, 
            'street' => $street, 
            'city' => $city,  
            'state' => $state, 
            'zip' => $zip, 
            'job' => $job
        );

    $dataInserted = $wpdb->insert( $table, $data );
    

}?>