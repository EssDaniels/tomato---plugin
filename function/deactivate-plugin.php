<?php


function ess_tomato_plugin_drop_database_table()
{
  global $wpdb;

  $table_name = $wpdb->prefix . 'ess_tomato_mailbox';

  $sql = "DROP TABLE IF EXISTS $table_name";

  $wpdb->query($sql);
}
