<?php

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
}
?>