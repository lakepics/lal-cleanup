<?php
// This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
// somewhere in your theme.
?>

<header class="navbar navbar-default navbar-fixed-top" role="banner">
    <nav class="container-fluid">
        <div class="navbar-brand">
            <a href="<?= esc_url(home_url('/')); ?>"><img class="navbar-logo" src="<?php bloginfo('template_directory'); ?>/dist/images/LAL_Logo_Color_WhiteText_Horiz_CCFR.svg" alt="<?php bloginfo('name'); ?>"></a>
        </div>
        <!-- parent: main-button -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu(array(
                //(int|string|WP_Term) Desired menu. Accepts (matching in order) id, slug, name, menu object.
                'menu' => 'primary-nav',

                //(string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container' => '',

                // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'container_class' => '',

                //(int|string|WP_Term) Desired menu. Accepts (matching in order) id, slug, name, menu object.
                'menu_id' => '',

                //(string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                'menu_class' => 'nav navbar-nav navbar-right',
                'link_before' => '<span>',
                'link_after' => '</span>'
            ));
            ?>
        </div>
    </nav>
</header>