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
      src: url('/wp-content/themes/LACC-sage-theme-master/dist/fonts/HaarlemDeco/font.woff2') format('woff2'),
         url('/wp-content/themes/LACC-sage-theme-master/dist/fonts/HaarlemDeco/font.woff') format('woff');
    }
    :root {
      --lacc-color-ink: #51534a;
      --lacc-color-accent: #9e7156;
      --lacc-color-gold: #d4a441;
      --lacc-color-gold-soft: #946E29;
      --lacc-color-gold-bright: #fad94a;
      --lacc-color-gold-ink: #1f221d;
      --lacc-color-cream: #f6f3ed;
      --lacc-color-white: #ffffff;
      --lacc-color-sky: #8dc5db;
      --lacc-color-brand-blue: #3f5f85;
      --lacc-color-brand-blue-deep: #324c6a;
      --lacc-color-brand-blue-border: #4c6d93;
      --lacc-color-brand-green: #60a57d;
      --lacc-color-brand-green-deep: #4b8767;
      --lacc-color-ink-deep: #1f221d;
      --lacc-color-gold-deep: #7a5a1f;
      --lacc-color-border-subtle: rgba(81, 83, 74, 0.14);

      /* Shared gradient tokens (04-color lock draft) */
      --lacc-gradient-brand: linear-gradient(180deg, #3f5f85, #324c6a);
      --lacc-gradient-neutral: linear-gradient(180deg, #ffffff, #f6f3ed);
      --lacc-gradient-ink: linear-gradient(180deg, #51534a, #1f221d);
      --lacc-gradient-gold: linear-gradient(180deg, #d4a441, #7a5a1f);
      --lacc-gradient-green: linear-gradient(180deg, #60a57d, #4b8767);
      
      /* Semantic token aliases (2026-04-27 lock) */
      --lacc-color-bg-page: #ffffff;
      --lacc-color-bg-soft: #f6f3ed;
      --lacc-color-bg-brand: #3f5f85;
      --lacc-color-text-primary: #51534a;
      --lacc-color-text-strong: #1f221d;
      --lacc-color-text-inverse: #ffffff;
      --lacc-color-text-brand: #324c6a;
      --lacc-color-border-brand: #4c6d93;
      --lacc-color-border-subtle: rgba(81, 83, 74, 0.14);
      --lacc-color-action-primary: #3f5f85;
      --lacc-color-action-primary-hover: #324c6a;
      --lacc-color-action-on-primary: #ffffff;
      --lacc-color-accent-gold: #946E29;
      --lacc-color-accent-old-gold: #7a5a1f;
      --lacc-color-accent-old-gold-hover: #563f15;
      --lacc-color-accent-green: #60a57d;
      --lacc-color-accent-green-deep: #4b8767;
      --lacc-color-accent-gold-deep: #7a5a1f;
      --lacc-color-accent-gold-support: #c6922e;
      --lacc-color-bg-brand-deep: #324c6a;

      /* Typography tokens (Foundations Audit lock alignment) */
      --lacc-type-family-display: HaarlemDeco, Arial, Helvetica, sans-serif;
      --lacc-type-family-editorial: "Freight Big Pro", Georgia, serif;
      --lacc-type-family-ui: Helvetica, Arial, sans-serif;
      --lacc-type-family-body-fallback: Arial, Helvetica, sans-serif;

      /* Legacy bridge aliases mapped to locked semantic tokens */
      --lacc-color-action-gold-text: var(--lacc-color-accent-old-gold);
      --lacc-color-accent: var(--lacc-color-accent-old-gold);
    }
    h1,h2,h3 {
      font-family: var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif);
      letter-spacing: 0.1275rem;
      text-transform: none;
    }
    p, body {
      font-family: var(--lacc-type-family-body-fallback, Arial, Helvetica, sans-serif);
      font-weight: 400;
      font-style: normal;
      font-size: 16px;
      line-height: 1.6em;
    }
    </style>
</head>
