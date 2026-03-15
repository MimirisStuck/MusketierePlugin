<?php

function musketierPluginDatabase(){
    global $wpdb;
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    
    $table_name = $wpdb->prefix . 'musketier_user';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
            id INTEGER(11) NOT NULL AUTO_INCREMENT,
            first_name VARCHAR(40) NOT NULL,
            last_name VARCHAR(40) NOT NULL,
            email VARCHAR(100) NOT NULL,
            role_id INTEGER(2) NOT NULL,
            PRIMARY KEY (id),
            KEY roles (role_id)
    ) $charset_collate;";
    
    dbDelte($sql);
    
    $table_name = $wpdb->prefix . 'roles';
    
    $sql = "CREATE TABLE $table_name(
            id INTEGER(2) NOT NULL AUTO_INCREMENT,
            role_name VARCHAR(40) NOT NULL,
            PRIMARY KEY (id)
    ) $charset_collate;";
    
    dbDelte($sql);
}
?>
