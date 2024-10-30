<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
    
    //if uninstall not called from WordPress exit
    if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ){
        exit();
    }    
    
    global $wpdb;

    $table = $wpdb->prefix . "ctl_arcade_lite_games";
    if($wpdb->get_var("SHOW TABLES LIKE '$table'") == $table) {
        $wpdb->query( "DELETE FROM " . $wpdb->prefix .
            "ctl_arcade_lite_games WHERE game_plugin_dir = 'ctl-playful-kitty-c2-lite'"); 
    }
    

    delete_option('ctl-playful-kitty-c2-lite_do_activation_redirect');