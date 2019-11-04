/* $charset_collate = $wpdb->get_charset_collate();
$table_submission = $wpdb->prefix . $client_ID . '_form_submissions';
$create_submission_db = 'CREATE TABLE `db762985493`.`wp_1_form_submissions` ( `ID` INT NOT NULL AUTO_INCREMENT , `NAME` TEXT NOT NULL , `EMAIL` INT NOT NULL , `PHONE` VARCHAR(10) NOT NULL , `MESSAGE` INT NOT NULL , PRIMARY KEY (`ID`)), $charset_collate;';

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $create_submission_db ); */