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
      --lacc-color-brand-blue: #3f5f85;
      --lacc-color-brand-blue-deep: #324c6a;
      --lacc-color-brand-blue-border: #4c6d93;
      
      /* Semantic token aliases (2026-04-27 lock) */
      --lacc-color-bg-page: #ffffff;
      --lacc-color-bg-soft: #f6f3ed;
      --lacc-color-bg-brand: #3f5f85;
      --lacc-color-text-primary: #51534a;
      --lacc-color-text-strong: #1f221d;
      --lacc-color-text-inverse: #ffffff;
      --lacc-color-text-brand: #324c6a;
      --lacc-color-border-brand: #4c6d93;
      --lacc-color-action-primary: #3f5f85;
      --lacc-color-action-primary-hover: #324c6a;
      --lacc-color-action-on-primary: #ffffff;
      --lacc-color-accent-gold: #d4a441;
      --lacc-color-accent-old-gold: #7a5a1f;
      --lacc-color-accent-green: #60a57d;
      --lacc-color-accent-green-deep: #4b8767;
      --lacc-color-accent-gold-support: #c6922e;
      --lacc-color-bg-brand-deep: #324c6a;

      /* Legacy bridge aliases mapped to locked semantic tokens */
      --lacc-color-action-gold-text: var(--lacc-color-accent-old-gold);
      --lacc-color-accent: var(--lacc-color-accent-old-gold);
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
