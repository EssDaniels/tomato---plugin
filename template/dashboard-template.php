<?php

/*
Template Name: Dashboard page
*/


get_header(); ?>
<div class="container">
  <?php
  if (!is_user_logged_in()) {
    // Wyświetl formularz logowania
    ess_tomato_login_form();
  } else {
    // Wyświetl zawartość panelu użytkownika
    // ...
  }
  ?>
</div>
<?php get_footer(); ?>