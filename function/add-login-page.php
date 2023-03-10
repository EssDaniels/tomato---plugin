<?php

function ess_create_login_page()
{

  // Sprawdź, czy strona już istnieje
  $page_check = get_page_by_title('Tomato - login');

  // Utwórz stronę, jeśli jeszcze nie istnieje
  if (empty($page_check)) {
    $page = array(
      'post_title'    => 'Tomato - login',
      'post_content'  => '',
      'post_status'   => 'publish',
      'post_author'   => get_current_user_id(),
      'post_type'     => 'page',
      'post_name'     => 'tomato-login'
    );

    $page_id = wp_insert_post($page);
    $page_template = ESS12_TOMATO_PLUGIN_TEMPLATE_DIR . '/login-template.php';
    update_post_meta($page_id, '_wp_page_template', $page_template);
  }
}

function tomato_login_template($page_template)
{
  if (is_page('Tomato - login')) {
    $page_template = ESS12_TOMATO_PLUGIN_TEMPLATE_DIR . '/login-template.php';
  }
  return $page_template;
}
add_filter('page_template', 'tomato_login_template');
