<?php 
function form_submissions_display() {
    global $wpdb;

    $s = esc_sql( $_POST['s']);
    $id = $wpdb->get_results( 'SELECT `form_id` FROM ' . $wpdb->prefix . 'db7_forms');

    $messages = $wpdb->get_results( 'SELECT `form_value` FROM ' . $wpdb->prefix . 'db7_forms`');

    $fullname = $wpdb->get_results( 'SELECT `form_value` FROM ' . $wpdb->prefix . 'db7_forms`');
    $email = $wpdb->get_results( 'SELECT `email` FROM ' . $wpdb->prefix . 'db7_forms');
    $phone = $wpdb->get_results( 'SELECT `phone` FROM ' . $wpdb->prefix . 'db7_forms');
    $message = $wpdb->get_results( 'SELECT `message` FROM ' . $wpdb->prefix . 'db7_forms');
  
    $db_rows = $wpdb->get_results( 'SELECT * FROM ' . $wpdb->prefix . 'db7_forms');
    ?>
    <style>
      .form_submissions_admin tr:nth-child(1) {
        background: #d5ebff !important;
      }
      .form_submissions_admin tr:nth-child(1) > th {
        font-weight: bold;
      }
      .form_submissions_admin tr:nth-child(odd) {
        background: #f1f1f1;
      }
    </style>
      <div class="wrap">
        <h2>Form Submissions</h2>
  <br>
  <br>
  <table class="widefat form_submissions_admin">

      <tr>
          <th class="row-title"><?php esc_attr_e( 'ID'); ?></th>
      <th><?php esc_attr_e( 'Name' ); ?></th>
      <th><?php esc_attr_e( 'Email' ); ?></th>
      <th><?php esc_attr_e( 'Phone' ); ?></th>
      <th><?php esc_attr_e( 'Message' ); ?></th>
    </tr>
    <?php 
     $i = 001;
      foreach ($messages as $message ) { ?>
       <tr>
        <td class="row-title"><label for="tablecell"><?php echo $i++ ?></label></td>
        <?php $values = unserialize($message->form_value);
            unset($values['cfdb7_status']);
                    foreach ($values as $key => $value) { ?>
                <td><?php echo $value ?></td>
        <?php } ?>
            </tr>
     <?php }
    ?>
  </table>
    </div>
  
    <?php
  }
  add_action('admin_menu', 'form_submissions_menu_admin');
  ?>