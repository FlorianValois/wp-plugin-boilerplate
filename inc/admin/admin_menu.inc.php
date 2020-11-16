<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Display a link in dashboard and call enqueue only on options page
 *
 * @since 0.1
 * @author Florian Valois
 */
if ( !function_exists( 'fvkel__add_plugin_in_dashbord_menu' ) ) 
{
  add_action('admin_menu','fvkel__add_plugin_in_dashbord_menu');
  function fvkel__add_plugin_in_dashbord_menu()
  {
    $fvkel__admin_page = array(
      
      // Main plugin page
      add_menu_page(
        __( 'WP FVKEL', 'wp_fvkel' ), 
        __( 'WP FVKEL', 'wp_fvkel' ), 
        'manage_options', 
        'wp_fvkel', 
        'fvkel__views__dashboard', 
        'dashicons-admin-plugins',  
        99 
      ),

      // Dashboard
      add_submenu_page( 
        'wp_fvkel', 
        __( 'Dashboard', 'wp_fvkel' ), 
        __( 'Dashboard', 'wp_fvkel' ),
        'manage_options', 
        'wp_fvkel',
        'fvkel__views__dashboard'
      )
      
    );
    

    // Load CSS and JS only on plugin page
    foreach($fvkel__admin_page as $key){ 
      add_action('load-'.$key, 'fvkel__load_enqueue_admin');
    }
    
  }
}
