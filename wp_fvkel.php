<?php
/*
 * Plugin Name: WP FVKEL
 * Plugin URI: 
 * Description: Boilertemplate for WP plugins
 * Version: 0.1
 * Author: Florian Valois
 * Author URI: https://florian-valois.com
 * Licence: GPLv2 or later
 *
 * Text Domain: wp_fvkel
 * Domain Path: /languages
 */

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');


/**
 * Define constants
 *
 * @since 0.1
 * @author Florian Valois
 */

define( 'WP_FVKEL_VERSION',                  '0.1' );
define( 'WP_FVKEL_NAME',                     'fvkel' );
define( 'WP_FVKEL_SLUG',                     'wp-fvkel' );
define( 'WP_FVKEL_FILE',                     __FILE__ );
define( 'WP_FVKEL_PATH',                     realpath( plugin_dir_path( WP_FVKEL_FILE ) ) . '/' );

define( 'WP_FVKEL_PATH_INC',                 realpath( WP_FVKEL_PATH . 'inc/' ) . '/' );
define( 'WP_FVKEL_PATH_INC_ADMIN',           realpath( WP_FVKEL_PATH_INC . 'admin/' ) . '/' );
define( 'WP_FVKEL_PATH_INC_ADMIN_UI',        realpath( WP_FVKEL_PATH_INC_ADMIN . 'ui/' ) . '/' );
define( 'WP_FVKEL_PATH_INC_FUNC',            realpath( WP_FVKEL_PATH_INC . 'functions/' ) . '/' );
define( 'WP_FVKEL_PATH_VIEWS',               realpath( WP_FVKEL_PATH . 'views/' ) . '/' );

define( 'WP_FVKEL_URL',                      plugin_dir_url( WP_FVKEL_FILE ) );
define( 'WP_FVKEL_URL_ASSETS',               WP_FVKEL_URL . 'assets/' );


require_once WP_FVKEL_PATH . 'settings.php';