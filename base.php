<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <?php
    $lacc_body_classes = array();
    if ( function_exists('get_field') && get_field('flush_last_section_to_footer') ) {
      $lacc_body_classes[] = 'lacc-flush-footer';
    }
  ?>
  <body <?php body_class($lacc_body_classes); ?>>
  <!-- Google Tag Manager (noscript) new gtm container 2306 LK -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTC33KP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
          <?php include Wrapper\template_path(); ?>
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
    <footer>
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>
    </footer>
  </body>
</html>
