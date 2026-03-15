<?php
/*
Plugin Name: Musketier Plugin
Description: Erstes Plugin für Musketier-Daten
Version: 1.0
Author: Philipp Schnake
*/

require_once plugin_dir_path(__FILE__) . 'includes/database.php';

register_activation_hook(__FILE__, 'musketierPluginDatabase');

function musketierPluginDefaultInsert(){
    global $wpdb;
    $roles = [
        [
            'role_name' => 'Admin'
        ],
        [
            'role_name' => 'Vorstand'
        ],
        [
            'role_name' => 'Mitglied'
        ],
    ];

    foreach ($roles as $role){
        $wpdb->insert(
            $wpdb->prefix . 'roles',
            $role
        );
    }

    $wpdb->insert(
        $wpdb->prefix . 'musketier_user',
        array(
            'first_name' => 'Philipp',
            'last_name' => 'Schnake',
            'email' => 'philipp.schnake@gmail.com',
            'role_id' => '1'
        )
    );
}

register_activation_hook(__FILE__, 'musketierPluginDefaultInsert');
?>