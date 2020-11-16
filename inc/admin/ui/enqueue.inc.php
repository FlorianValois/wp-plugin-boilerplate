<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Add CSS and JS files for settings page
 *
 * @since 0.1
 * @author Florian Valois
 */
if ( !function_exists( 'fvkel__enqueue_admin' ) ) {
  function fvkel__enqueue_admin() {
    // Call of CSS and JS files of plugin theme
    wp_enqueue_style( 'fvkel', WP_FVKEL_URL . 'admin.min.css', null, null );
    wp_enqueue_script( 'fvkel', WP_FVKEL_URL . 'admin.min.js', array('jquery', 'jquery-ui-core'), null, true );
    
    // Translations
//    require WP_FVKEL_PATH_INC_ADMIN_UI . 'translations.inc.php';
//    wp_localize_script( 'fvkel', 'fvkel_ajax', $translations );
    
    // Google Fonts
    wp_enqueue_style( 'fvkel-google-font', 'https://fonts.googleapis.com/css?family=Poppins:400,400i,600,600i,700,700i,800,800i,900,900i&display=swap', null, '');
    
    // FontAwesome
    wp_enqueue_style( 'fvkel-font-awesome', 'https://use.fontawesome.com/releases/v5.15.0/css/all.css', null, null );

  }
}

/**
 * Function to call CSS and JS only on options page
 *
 * @since 0.1
 * @author Florian Valois
 */
if ( !function_exists( 'fvkel__load_enqueue_admin' ) ) {
  function fvkel__load_enqueue_admin(){
    add_action( 'admin_print_styles', 'fvkel__enqueue_admin' );
  }
}


if ( !function_exists( 'fvkel__load_enqueue_public' ) ) {
  add_action( 'wp_enqueue_scripts', 'fvkel__load_enqueue_public' );
  function fvkel__load_enqueue_public() {
	
   // Call of CSS and JS files of plugin theme
    wp_enqueue_style( 'fvkel', WP_FVKEL_URL . 'public.min.css', null, null );
    wp_enqueue_script( 'fvkel', WP_FVKEL_URL . 'public.min.js', array('jquery', 'jquery-ui-core'), null, true );
    
    // Translations
//    require WP_FVKEL_PATH_INC_ADMIN_UI . 'translations.inc.php';
//    wp_localize_script( 'fvkel', 'fvkel_ajax', $translations );
    
    // Google Fonts
    wp_enqueue_style( 'fvkel-google-font', 'https://fonts.googleapis.com/css?family=Poppins:400,400i,600,600i,700,700i,800,800i,900,900i&display=swap', null, '');
    
    // FontAwesome
    wp_enqueue_style( 'fvkel-font-awesome', 'https://use.fontawesome.com/releases/v5.15.0/css/all.css', null, null );
		
  }
}