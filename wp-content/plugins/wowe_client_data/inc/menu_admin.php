<?php
function client_data_menu_admin() {
    add_menu_page('Client Data', 'Client Data', 'manage_options', 'client_data_menu', 'client_data_form_display','
    dashicons-businessman', 10 );
  } 
?>