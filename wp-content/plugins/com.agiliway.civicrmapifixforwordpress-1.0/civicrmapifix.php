<?php
/*
Plugin Name: Civi CRM Api Fix.
Description: Fixes problem with rest API for CiviCRM. Removes slashes from URL parameters.
Version: 1.0.0
Author: Agiliway civicrm@agiliway.com
Author URI: https://agiliway.com/
*/
add_action( 'init', 'CiviCRMApiFix_wp_init' );

function CiviCRMApiFix_wp_init() {
	$url  = parse_url( $_SERVER['REQUEST_URI'] );
	$path = explode( '/', $url['path'] );

	if ( end( $path ) == 'rest.php' ) {
		CiviCRM_For_WordPress::singleton()->remove_wp_magic_quotes();
	}
}
