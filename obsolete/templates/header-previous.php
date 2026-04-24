

<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>
    <header class="navbar navbar-default navbar-fixed-top" role="banner">


<style>

#dabar{
background: #3f3f3f;
color: #fff;
font-size:16px;
top: 0px;
left: 0px;
width: 100% !important;
padding: 10px 10px 10px 10px;
text-align: center;}
#dabar a {color: #ffffff; border-bottom: 1px dotted;}
</style>

<div id="dabar" class="hide_on_mobile"><a href="/coronavirus/" target="_blank">COVID-19 Update Travel Advisory</a> | <a href="/articles/closure-notice/">Temporary Closure Notice</a></div>

        <div class="container">



            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="<?= esc_url(home_url('/')); ?>"><img class="navbar__logo" src="<?php bloginfo('template_directory'); ?>/dist/images/logo_v3.svg" alt="<?php bloginfo('name'); ?>"></a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- parent: main-button -->
                    <div class="navbar__RFP">
                        <!-- child: main-button -->
                        <div class="navbar__RFP--text"></div>
                        <a href="/request-a-proposal/">Plan Your Event</a>
                    </div>
                     <div class="navbar__news">
                        <!-- child: main-button -->
                        <div class="navbar__news--text"></div>
                        <a href="https://reservations.travelclick.com/112652#/guestsandrooms" target="_blank">Book Your Stay
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar-default">
            <div class="container navconstainer">
                <div class="navbar-header">


                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
                    </button>
                    <div class="navbar-header__logo"><a href="<?= esc_url(home_url('/')); ?>"><img style="height:25px; width:220px;" src="<?php bloginfo('template_directory'); ?>/dist/images/logo_top.svg" alt="<?php bloginfo('name'); ?>"></a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <?php wp_nav_menu( array(
                //(int|string|WP_Term) Desired menu. Accepts (matching in order) id, slug, name, menu object.
                'menu' => 'primary-nav', 

                //(string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container' => '', 

                // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'container_class' => '',

                //(int|string|WP_Term) Desired menu. Accepts (matching in order) id, slug, name, menu object.
                'menu_id' => '', 

                //(string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                'menu_class' => 'nav navbar-nav',
                'link_before' => '<span>', 
                'link_after' => '</span>' ) ); ?>
                </div>
            </div>
        </nav>
    </header>
<!--
<div id="signupConfirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="signupConfirmation">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      Thank you for joingin our email list!
    </div>
  </div>
</div> -->
