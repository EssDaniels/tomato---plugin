<?php

/**
 * Template Name: Login Page
 */

get_header(); ?>
<div class="container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <div class="login-form">
          <?php wp_login_form(); ?>
        </div>

      <?php endwhile; // End of the loop. 
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php get_footer(); ?>