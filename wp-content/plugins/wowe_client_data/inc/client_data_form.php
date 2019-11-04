<?php 

function client_data_form_display() { 
    include 'arrays.php'; 
    ?>
    
    <div class="wrap client_data">
    
        <h1 class="wp-heading-inline">
            <span class="dashicons dashicons-admin-users"></span>
        <?php esc_attr_e( 'Client Data' ); ?></h1>
    
        <hr class="wp-header-end">
    
        <h3>Enter Here the Client Information form the form we received :)</h3>
    
        <form method="post" action="<?php $_SERVER['PHP_SELEF']?>">	
       
        <div class="alert alert-danger display-success" style="display: none">
        <h3>Client Data was successfully saved</h3>
            <p>You can now use the shortcodes ;)</p>
        </div>
            <h3><?php esc_attr_e( 'Name' ); ?></h3>
            <input id="name" type="text" name="client_name" placeholder="<?php esc_attr_e( 'Enter Name Here' ); ?>" class="regular-text" required/>
            <br>
            <h3><?php esc_attr_e( 'Business Name' ); ?></h3>
            <input id="businessname" type="text" name="client_business_name" placeholder="<?php esc_attr_e( 'Enter Business Name' ); ?>" class="regular-text" required/>
           <br>
            <h3><?php esc_attr_e( 'Phone Number' ); ?></h3>
            <input id="phone" type="text" name="client_phone" placeholder="<?php esc_attr_e( 'Enter Phone Number' ); ?>" class="regular-text" required/>
            <br>
            <h3><?php esc_attr_e( 'Email' ); ?></h3>
            <input id="email" type="text" name="client_email" placeholder="<?php esc_attr_e( 'Enter Email Address' ); ?>" class="regular-text" />
           <br>
            <h3><?php esc_attr_e( 'Address' ); ?></h3>
            <input id="street" type="text" class="all-options" name="street" placeholder="Street"/><br>
            <input type="text" class="all-options" name="city" placeholder="City"/><br><br>
            <select id="state" name="state" id="">
                <option selected="selected" value=""><?php esc_attr_e( 'Select State' ); ?></option>
                <?php foreach ($states as $state) { ?>
                <option value=""><?php echo $state ?></option>
                <?php } ?>
            </select>
            <input id="zip" type="text" name="client_zip" class="small-text" placeholder="ZIP" />
            <br>
            <br>
            <label for="profession"><h3><?php esc_attr_e( 'Select Client Profession' ); ?></h3></label>
            <select id="job" name="client_job" id="">
                <option selected="selected" value=""><?php esc_attr_e( 'Select Profession' ); ?></option>
                <?php foreach ($professions as $profession) { ?>
                <option value=""><?php echo $profession ?></option>
                <?php } ?>
            </select> <br>
          
            <input id="submit" type="submit" value="Submit" name="submit" class="button-primary" />
        </form>
    </div>
    <?php 
      global $wpdb;   
       
      $name = $_POST['client_name'];
      $email = $_POST['client_email'];
      $phone = $_POST['client_phone'];
      $businessname = $_POST['client_business_name'];
      $street = $_POST['street'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['client_zip'];
      $job = $_POST['client_job'];
  
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
          'job' => $job
      );
      global $datum;
        $datum = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'client_data WHERE id = 1');
    
    
    if (isset($_POST['submit'])) {
        if($wpdb->num_rows > 0) {
            $dataUpdated = $wpdb->update( $table, $data, array('id' => 1)  );
        }
        else {
            $dataInserted = $wpdb->insert( $table, $data );
        }
    }

    if ($dataInserted) {
        echo '
        <script>  
        jQuery(document).ready(function(){
            jQuery(\'.display-success\').fadeToggle();
            });
         </script>
        ';
    } else if ($dataUpdated) {
        echo '
        <script>  
        jQuery(document).ready(function(){
            jQuery(\'.display-success\').fadeToggle();
            });
         </script>
        ';
    }
}
    ?>