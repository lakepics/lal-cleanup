<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="<?php if (the_field('meta_description')) { get_the_field('meta_description'); } ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php wp_head(); ?>
      <style>
        .header__heading {
          margin-top: 0 !important;
        }
      </style>
    <?php include_once("analytics-tracking.php") ?>
    <link rel="preload">
    <link rel="stylesheet" href="https://use.typekit.net/vmh7sdb.css">
    <style>
    /* @import must be at top of file, otherwise CSS will not work */
    @import url("//hello.myfonts.net/count/4383ff");

    @font-face {
        font-family: "HaarlemDeco";
        src: url('/wp-content/themes/LACC-sage-theme-master/dist/fonts/HaarlemDeco/font.woff2') format('woff2'), url('/lal/wp-content/themes/LACC-sage-theme-master/dist/fonts/HaarlemDeco/font.woff') format('woff');
    }
    :root {
      --lacc-color-ink: #51534a;
      --lacc-color-accent: #9e7156;
      --lacc-color-gold: #d4a441;
      --lacc-color-gold-soft: #946E29;
      --lacc-color-gold-bright: #f5b62b;
      --lacc-color-gold-ink: #1f221d;
      --lacc-color-cream: #f6f3ed;
      --lacc-color-white: #ffffff;
      --lacc-color-sky: #8dc5db;
      --lacc-color-brand-blue: #6383a8;
      --lacc-color-brand-blue-border: #7495b4;
    }
    h1,h2,h3 {
      font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
      letter-spacing: 0.1275rem;
      text-transform: none;
    }
    p, body {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: 400;
      font-style: normal;
      font-size: 16px;
      line-height: 1.6em;
    }
    </style>
</head>
