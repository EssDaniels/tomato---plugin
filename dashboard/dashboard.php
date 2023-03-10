<?php


function add_my_menu()
{
  add_menu_page('Moja Wtyczka', 'Moja Wtyczka', 'manage_options', 'moja-wtyczka', 'render_my_page', 'dashicons-admin-generic');
}

function render_my_page()
{
  echo '<h2>Witaj w Mojej Wtyczce!</h2>';
}

add_action('admin_menu', 'add_my_menu');
