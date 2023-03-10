<?php
/*
Plugin Name: Tomato -  Membership forum.
Description: A plugin for the platform will enable users to access all paid and free content. After subscribing, users will have access to a full database of tomatoes, articles, recipes, entomology, and forums. The plugin will also allow for user profile editing and the ability to add favorite tomatoes, articles, recipes, and insects. The free version allows access to a simplified version of the table with the ability to save only three tomatoes, articles, and recipes.
Version: 1.0
Author: Dawid Skibiński
*/

header('Content-Type: text/html; charset=utf-8');


define('ESS12_TOMATO_PLUGIN', __FILE__);

define('ESS12_TOMATO_PLUGIN_DIR', untrailingslashit(dirname(ESS12_TOMATO_PLUGIN)));

define('ESS12_TOMATO_PLUGIN_FUNCTIONS_DIR', ESS12_TOMATO_PLUGIN_DIR . '/function');

define('ESS12_TOMATO_PLUGIN_CRON_DIR', ESS12_TOMATO_PLUGIN_DIR . '/cron');

define('ESS12_TOMATO_PLUGIN_TEMPLATE_DIR', ESS12_TOMATO_PLUGIN_DIR . '/template');

define('ESS12_TOMATO_PLUGIN_SHORTCODE_DIR', ESS12_TOMATO_PLUGIN_DIR . '/shortcode');

define('ESS12_TOMATO_PLUGIN_DASHBOARD_DIR', ESS12_TOMATO_PLUGIN_DIR . '/dashboard');

define('ESS12_TOMATO_PLUGIN_STYLE_DIR', ESS12_TOMATO_PLUGIN_DIR . '/style');



require_once ESS12_TOMATO_PLUGIN_DIR . '/load.php';

register_activation_hook(ESS12_TOMATO_PLUGIN, 'ess_create_dashboard_page');
register_activation_hook(ESS12_TOMATO_PLUGIN, 'ess_create_login_page');

register_activation_hook(ESS12_TOMATO_PLUGIN, 'ess_tomato_plugin_create_database_table');
register_deactivation_hook(ESS12_TOMATO_PLUGIN, 'ess_tomato_plugin_drop_database_table');
