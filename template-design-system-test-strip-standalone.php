<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part( 'templates/head' ); ?>
  <body <?php body_class( 'lacc-design-system-page' ); ?>>
    <?php wp_body_open(); ?>
    <main class="main lacc-design-system-main" style="width:100%; max-width:none; margin:0; padding:40px 0 0; background:#f6f3ed; min-height:100vh;">
      <?php get_template_part( 'components/components', 'design-system-library' ); ?>
    </main>
    <?php wp_footer(); ?>
  </body>
</html>