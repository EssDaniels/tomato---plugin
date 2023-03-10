<?php


function process_contact_form()
{
  global $wpdb, $current_user;
  wp_get_current_user();

  if (isset($_POST['submit'])) {
    $user_id = $current_user->ID;
    $email = sanitize_email($_POST['email']);
    $recipient = get_user_by('email', $email);
    $recipient_id = $recipient->ID;
    $message = sanitize_textarea_field($_POST['message']);

    $data = array(
      'sender_id' => $user_id,
      'recipient_id' => $recipient_id,
      'message' => $message,
      'status' => 'unread'
    );

    $table_name = $wpdb->prefix . 'ess_tomato_mailbox';
    $wpdb->insert($table_name, $data);

    echo 'Wiadomość została wysłana!';
  }
}
