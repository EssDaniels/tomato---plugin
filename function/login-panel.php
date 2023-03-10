<?php

function ess_tomato_login_form()
{
  // Sprawdź, czy użytkownik jest zalogowany
  if (is_user_logged_in()) {
    wp_redirect(home_url('/tomato-dashboard/')); // przekieruj na stronę Tomato - Dashboard
    exit();
  } else {
    // Wyświetl formularz logowania
    $args = array(
      'echo' => true,
      'redirect' => home_url('/tomato-dashboard/'), // ustaw link docelowy po zalogowaniu
      'form_id' => 'loginform',
      'label_username' => __('Email'),
      'label_password' => __('Hasło'),
      'label_remember' => __('Zapamiętaj mnie'),
      'label_log_in' => __('Zaloguj się'),
      'remember' => true
    );
    wp_login_form($args);
  }
}

add_action('wp_authenticate', 'my_custom_login_fail', 99999999999999999999);

function my_custom_login_fail($username)
{
  if (is_wp_error($username)) {
    $referrer = $_SERVER['HTTP_REFERER'];
    if (!empty($referrer) && !strstr($referrer, 'wp-login') && !strstr($referrer, 'wp-admin')) {
      wp_redirect(home_url('/my-custom-login-page/?login=failed'));
      exit;
    }
  }
}
