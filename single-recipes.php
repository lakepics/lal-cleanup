<?php
/*
Template Name: Recipes
Template Post Type: recipes
*/
?>


<style>
  * {
    box-sizing: border-box;
  }

  /* Create two equal columns that floats next to each other */
  .column50 {
    float: left;
    width: 50%;
    padding: 10px;

  }

  .column30 {
    float: left;
    width: 30%;
    padding: 10px;

  }

  .column70 {
    float: left;
    width: 60%;
    padding: 10px;

  }


  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {

    .column50,
    .column70,
    .column30 {
      width: 100%;
    }
  }
</style>

<style>
  a.button {
    background-color: #ad8a5f;
    max-width: 290px;
    background-position: 100%;
    background-repeat: no-repeat;
    color: #fff !important;
    display: inline-block;
    font-size: 1em;
    min-height: 40px;
    font-weight: 600;
    letter-spacing: .05em;
    line-height: 24px;
    margin: 0;
    padding: 10px 20px 10px 20px;
    zoom: 1;
  }
</style>

<style>
  .sidemenu {
    display: none !important;
  }

  <style>@media screen and (max-width: 600px) {
    div[class="sidemenu"] {
      display: none !important;
    }
  }
</style>

<style>
  .thumbnail,
  .wp-caption {
    border: 0px #fff solid !important;
    margin-bottom: -20px !important;
  }

  .wp-caption-text {
    font-size: 13px;
    font-style: italic;
    text-align: right;
  }
</style>


<style>
  @media screen and (max-width: 600px) {
    div[class="featuredimage"] {
      display: none;
    }
  }
</style>


<style>
  .content-area {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
    margin-top: 35px;
  }

  .content-area {
    line-height: 1.5em;
    font-size: 16px;
  }

  .content-area p {
    padding-top: 10px;
    line-height: 1.5em;
  }

  ol {
    list-style-type: numbered;
    padding-left: 20px;
    margin-bottom: 1.5em;
  }

  em {
    font-style: italic;
  }

  @media (min-width: 0px) and (max-width: 767px) {

    p,
    ol li {
      font-size: .875em !important;
    }
  }

  @media(min-width:601px) {
    ol {
      padding-left: 30px;
    }
  }
</style>


<style>
  h4 {
    color: #000;
    font-size: 18px;
  }
</style>

<style>
  aside[class="sidebar"] {
    display: none !important;
  }
</style>

<style>
  @media screen and (max-width: 600px) {
    div[id="main-content"] {
      min-width: 100% !important;
      padding-left: 5px;
      padding-right: 5px;
    }
  }
</style>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('./components/components-subheader'); ?>




  <div class="header__heading" style=" background-color: #6383a8; width: 100%;">
    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <h1 class="header__heading--subheading">Recipes</h1>
        </div>
      </div>
    </div>
  </div>


  <style>
    div[id="contentmain"] p {
      font-family: Proxima Nova Regular, Helvetica Neue, Helvetia, Arial, sans-serif;
      line-height: 1.3;
      letter-spacing: .03em;
      text-align: left;
      color: #3f3f3f;
      margin-bottom: 1em;
    }
  </style>

  <?php add_filter('the_content', 'wpautop'); ?>

  <div class="container"">
<div class=" row">

    <div class="content-area" style="width: 100%;">
      <div id="main-content" role="main" style="width: 100%; float: left; object-fit: contain;">

        <div class="featuredimage">
          <?php
          if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
          }
          ?>
        </div>


        <div class="container">
          <div class="row">
            <div class="column30" style="background-color:#fff; padding-top: 25px;">
              <img src="<?php the_field('image'); ?>" style="width: 100%;">
            </div>
            <div class="column70" style="background-color:#fff;">
              <h2><?php the_title(); ?></h2>
              <h3 style="color: #337ab7;"><?php the_field('subheading'); ?></h3>
              <?php the_content(); ?>

              <?php if (get_field('travelclick_url')) : ?>
                <a href="<?php the_field('travelclick_url'); ?>" class="button">Download Recipe (PDF)</a>
              <?php endif; ?>


            </div>
          </div>
        </div>
        <div style="clear: both;"></div>



      </div>
      <div style="float: right; width: 32%;" class="sidemenu">
        <h3>Recent Articles</h3>
        <ul style="list-style: none !important; padding-left: 0px;">
          <?php
          $recent_posts = wp_get_recent_posts(array('post_type' => 'articles'));
          foreach ($recent_posts as $recent) {
            echo '<li style="margin-bottom: 5px; list-style-type: none; list-style-position: inside;"><a href="' . get_permalink($recent["ID"]) . '" title="Look ' . esc_attr($recent["post_title"]) . '" >' .   $recent["post_title"] . '</a> </li> ';
          }
          ?>
        </ul>

        <div style="display: none;">
          <?php dynamic_sidebar('articles-side-bar'); ?>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  <div style="clear:both;"></div>
<?php endwhile; ?>