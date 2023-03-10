<?php

add_shortcode('ess_custom_login_form', 'ess_custom_login_form_shortcode');
function ess_custom_login_form_shortcode()
{
    ob_start();
    wp_login_form(array(
        'redirect' => home_url(), // przekierowanie po zalogowaniu
        'form_id' => 'ess_login_form', // id formularza
        'label_username' => __('Nazwa użytkownika'), // etykieta pola użytkownika
        'label_password' => __('Hasło'), // etykieta pola hasła
        'label_log_in' => __('Zaloguj się'), // etykieta przycisku zaloguj
    ));
    return ob_get_clean();
}
