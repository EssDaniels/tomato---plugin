<?php

// Dodaje link do menu

function ess_tomato_custom_menu()
{
  register_nav_menu('ess-tomato-custom-menu', __('Tomato Menu'));
}
add_action('init', 'ess_tomato_custom_menu');


function ess_tomato_add_custom_menu_item($items)
{
  $menu_item = '<li><a href="' . esc_url(home_url('/tomato-dashboard/')) . '">Panel</a></li>';
  $items .= $menu_item;
  return $items;
}

add_filter('wp_nav_menu_items', 'ess_tomato_add_custom_menu_item');
