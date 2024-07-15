<?php
/**
 * Plugin Name: Mein Maintenance-Modus
 * Description: Maintenance-Modus einschalten
 */


defined( 'ABSPATH' ) || exit;



/**
 * Maintenance message when active
*/
function maintenance_mode()
{
  nocache_headers();
  if ( !is_user_logged_in() ) {
  wp_die( 
  	'<h1>Under Maintenance / Wartung</h1>', 
	  ['response' => '503']);
  }
}
add_action('parse_request', 'maintenance_mode');


