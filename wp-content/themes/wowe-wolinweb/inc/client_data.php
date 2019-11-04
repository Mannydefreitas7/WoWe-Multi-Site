<?php 
function wowe_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'client_data';

    if( $wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name ) {

    $sql = "CREATE TABLE $table_name (
        client_id int(11) NOT NULL AUTO_INCREMENT,
        client_name text NOT NULL,
        client_email text NOT NULL,
        client_phone text NOT NULL,
        client_email text NOT NULL,
        client_street text NOT NULL,
        client_city text NOT NULL,
        client_state text NOT NULL,
        client_state text(5) NOT NULL,
        PRIMARY KEY  (client_id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    }
}
function wowe_on_activate( $network_wide ){

    global $wpdb;
    if ( is_multisite() && $network_wide ) {
            // Get all blogs in the network and activate plugin on each one
            $blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
            foreach ( $blog_ids as $blog_id ) {
                switch_to_blog( $blog_id );
                wowe_create_table();
            }
        } else {
            wowe_create_table();
        }
    }
    
register_activation_hook( __FILE__, 'wowe_on_activate' );

add_action('admin_init', 'wowe_create_table' );

function client_data_form_display() {

    global $wpdb; 
    $states = array('AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY', 'AE', 'AA', 'AP');

    $professions = array('dentist', 'doctor', 'lawyer', 'accountant', 'car shop', 'barbershop', 'real estate');
    ?>

    <style>
    .client_data form {
        margin-top: 20px;
    }
    .client_data .dashicons-admin-users {
        width: 30px;
        height: 30px;
        font-size: 30px;
    }
    .client_data h3 {
    margin: 0;
    }
    .client_data .regular-text {
    margin-bottom: 20px;
    }
    .client_data .small-text {
    padding: 10px;
    width: 10%;
}
    .client_data .regular-text, 
    .client_data .all-options {
    padding: 10px;
    }
    .client_data .button-primary {
    padding: 5px 10px;
    height: auto;
    font-size: 20px;
    margin-top: 20px;
}
    </style>
<div class="wrap client_data">
    <h1 class="wp-heading-inline"><span class="dashicons dashicons-admin-users"></span>
<?php esc_attr_e( 'Client Data' ); ?></h1>
    <hr class="wp-header-end">
    <p>Enter Here the Client Information form the form we received :)</p>
    <form method="post">
        <h3><?php esc_attr_e( 'Name' ); ?></h3>
        <input type="text" name="client_name" placeholder="<?php esc_attr_e( 'Enter Name Here' ); ?>" class="regular-text" />
        <br>
        <h3><?php esc_attr_e( 'Business Name' ); ?></h3>
        <input type="text" name="client_business_name" placeholder="<?php esc_attr_e( 'Enter Business Name' ); ?>" class="regular-text" />
       <br>
        <h3><?php esc_attr_e( 'Phone Number' ); ?></h3>
        <input type="text" name="client_phone" placeholder="<?php esc_attr_e( 'Enter Phone Number' ); ?>" class="regular-text" />
        <br>
        <h3><?php esc_attr_e( 'Email' ); ?></h3>
        <input type="text" name="client_email" placeholder="<?php esc_attr_e( 'Enter Email Address' ); ?>" class="regular-text" />
       <br>
        <h3><?php esc_attr_e( 'Address' ); ?></h3>
        <input type="text" class="all-options" name="street" placeholder="Street"/><br>
        <input type="text" class="all-options" name="city" placeholder="City"/><br><br>
        <select name="state" id="">
            <option selected="selected" value=""><?php esc_attr_e( 'Select State' ); ?></option>
            <?php foreach ($states as $state) { ?>
            <option value=""><?php echo $state ?></option>
            <?php } ?>
        </select><input type="text" name="client_zip" class="small-text" placeholder="ZIP" />
        <br>
        <br>
        <label for="profession"><h3><?php esc_attr_e( 'Select Client Profession' ); ?></h3></label>
        <select name="profession" id="">
            <option selected="selected" value=""><?php esc_attr_e( 'Select Profession' ); ?></option>
            <?php foreach ($professions as $profession) { ?>
            <option value=""><?php echo $profession ?></option>
            <?php } ?>
        </select> <br>
        <input type="button" name="client-submit" id="submitted" value="Submit :)" class="button-primary"/>
    </form>
</div>
<?php } 
add_action('admin_init', 'client_data_form_display' );

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
    
        $table = $wpdb->prefix . 'client_data';
        $data = array(
            'name' => $name, 
            'businessname' => $businessname, 
            'phone' => $phone,  
            'email' => $email, 
            'street' => $street, 
            'city' => $city,  
            'state' => $state, 
            'zip' => $zip, 
        );
        
        if(isset($_POST['client-submit'])) {
        $success=$wpdb->insert( $table, $data );

        if($success){
          echo 'data has been save' ; 
            } else {
                echo '<h2>Didnt work :(</h2>';
            }
        }   
} 
add_action('admin_init', 'client_data_capture' );
add_action('admin_menu', 'client_data_menu_admin');
?>