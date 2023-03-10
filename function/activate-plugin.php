<?php


function ess_tomato_plugin_create_database_table()
{
  global $wpdb;

  $table_name = $wpdb->prefix . 'ess_tomato_mailbox';

  $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        sender_id mediumint(9) NOT NULL,
        recipient_id mediumint(9) NOT NULL,
        message_text text NOT NULL,
        message_status varchar(20) NOT NULL,
        message_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        PRIMARY KEY (id)
    );";

  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($sql);
}
