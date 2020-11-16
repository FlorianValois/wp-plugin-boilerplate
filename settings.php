<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Init WP FVKEL in WP
 *
 * @since 0.1
 */
if ( !function_exists( 'fvkel__init' ) ) {
  add_action( 'after_setup_theme', 'fvkel__init' );
  function fvkel__init() {
    
    // ADMIN
    require WP_FVKEL_PATH_INC_ADMIN . 'admin_menu.inc.php';
    
    // ADMIN UI
    require WP_FVKEL_PATH_INC_ADMIN_UI . 'enqueue.inc.php';
    
    // VIEWS
    require WP_FVKEL_PATH_VIEWS . 'dashboard.inc.php';

  }
}