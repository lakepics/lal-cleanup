<?php

/**
 * Template Name: DEV Summer 23 UCLA Affiliates
 */
?>

<style>
    /* @import must be at top of file, otherwise CSS will not work */
    @import url("//hello.myfonts.net/count/4383ff");

    @font-face {
        font-family: "HaarlemDeco";
        src: url('/wp-content/themes/LACC-sage-theme-master/dist/fonts/HaarlemDeco/font.woff2') format('woff2'), url('/wp-content/themes/LACC-sage-theme-master/dist/fonts/HaarlemDeco/font.woff') format('woff');
    }

    /* Fix navbar */
    .navbar-brand {
        height: 70px;
    }

    @media screen and (max-width: 1200px) {
        .navbar-brand {
            height: 54px;
        }

        .navbar-nav {
            margin-right: 8px;
            margin-top: 4px;
        }
    }

    @media screen and (min-width: 1024px) {
        .navbar-nav {
            margin-top: 8px;
            margin-right: 16px;
        }


    }

    @media screen and (max-width: 1024px) {
        .navbar-brand {
            padding: 0;
            padding-left: 10px;
        }

        .navbar-brand .navbar-logo {
            width: 270px;
        }
    }

    @media screen and (max-width: 767px) {
        .navbar-brand .navbar-logo {
            width: 250px;
        }
    }

    /* New Styles */

    .landing-container h1,
    .landing-container h2,
    .landing-container h3 {
        font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
        color: #51534a;
        letter-spacing: .125em;
    }

    .landing-container em {
        font-style: italic;
    }

    .landing-container h1 {
        font-size: 5.25em;
        line-height: 1em;
        margin: 1em auto 0.25em;
        text-align: center;
        color: #8dc5db;
    }

    span.gold {
        color: #F5b62b;
    }

    .landing-container h2 {
        font-size: 2.25em;
    }

    .landing-container h3 {
        font-size: 1.5em;
    }

    .landing-container h3 {
        font-weight: bold;
    }

    .landing-container h2.light {
        font-weight: normal;
        color: #8dc5db;
    }

    .landing-container p,
    .landing-container ul,
    .landing-container span.gform_description {
        margin: 1em auto;
        color: #777777;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;
        font-weight: 100;
        line-height: 2em;
        hyphens: none;
    }

    .landing-container p.sm {
        font-size: .825em;
    }

    h2.alt-heading {
        font-family: helvetica, arial, sans-serif;
        font-weight: normal;
        font-style: italic;
        color: #8dc5db;
        margin-bottom: 50px;
        text-align: center;
        line-height: 1.5em;
    }

    .right-scrollwork,
    .left-scrollwork {
        background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
        background-repeat: repeat-y;
        background-size: 70px;
    }

    .left-scrollwork {
        background-position: top 0 left calc(50% - 650px);
    }

    .right-scrollwork {
        background-position: top 0 right calc(50% - 650px);
    }

    .accommodation {
        background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/front-lawn-sunset.jpg');
        background-position: center;
        background-size: cover;
    }

    .cuisine {
        background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/cuisine-breakfast.jpg');
        background-position: center;
        background-size: cover;
    }

    .activities {
        background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/activities-crop2.jpg');
        background-position: center;
        background-size: cover;
    }

    footer {
        margin-top: 0;
    }

    .hero {
        max-height: none;
    }

    .hero img {
        width: 100%;
    }

    .hero::before {
        background-color: transparent;
    }

    ul {
        font-family: Arial, Arial, Helvetica, sans-serif;
        font-size: 16px;
    }

    .accommodation-copy {
        margin-top: 95px;
    }

    /* Margin & Padding Classes */
    .mt-50 {
        margin-top: 50px;
    }

    .landing-container p.mb-0,
    .mb-0 {
        margin: 0;
    }

    .mt-0 {
        margin-top: 0;
    }

    .mt-20 {
        margin-top: 20px !important;
    }

    .mt-30 {
        margin-top: 30px !important;
    }

    .mt-50 {
        margin-top: 50px;
    }

    .mb-30 {
        margin-bottom: 30px;
    }

    .mb-50 {
        margin-bottom: 50px;
    }

    .pb-50 {
        padding-bottom: 50px;
    }

    .pr-50 {
        padding-right: 50px;
    }

    .pt-25 {
        padding-top: 25px;
    }

    .pt-50,
    .pt-51 {
        padding-top: 50px;
    }

    .pt-100 {
        padding-top: 100px;
    }

    .p-50 {
        padding: 50px;
    }

    @media only screen and (max-width: 600px) {

        div[class="column left-column column-entry"],
        div[class="column right-column column-entry"],
        .contain {
            width: 100% !important;
            clear: both !important;
            padding: 0px 5px 20px 5px;
        }

        .accommodation-copy {
            margin-top: 0;
            margin-bottom: 50px;
        }

        .hero {
            display: none;
        }

        .pt-50 {
            padding-top: 0;
        }

        .mbg {
            padding: 30px;
        }

        .mbg .p-50 {
            margin-bottom: 50px !important;
            padding: 10px 30px 30px;
        }

        .rooms .mb-50 {
            margin-bottom: 10px;
            margin-top: 30px;
        }
    }

    @media only screen and (min-width: 600px) {
        .banner {
            display: block;
        }
    }

    .gform_button {
        text-align: center !important;
    }

    /*  span.gform_description,
  h3.gform_title {
    text-align: center !important;
  } */

    div.gform_page_footer {
        text-align: center !important;
    }

    .landing-container .gform_legacy_markup_wrapper h3.gform_title {
        letter-spacing: .125em !important;
    }

    h3.gform_title {
        font-size: 30px !important;
    }

    .btn {
        padding: .5em 1.25em;
        font-size: 16px;
        color: #FFFFFF;
        background-color: #51534a;
        letter-spacing: .125em;
        text-transform: uppercase;
        border: 2px solid #51534a;
        transition: all .5s ease-in-out;
        border-radius: 0;
    }

    .btn.lg {
        font-size: 1.15em;
    }

    .btn:hover {
        color: #51534a;
        background-color: #FFFFFF;
    }

    .btn.rev {
        color: #51534a;
        background-color: #FFFFFF;
    }

    .btn.rev:hover {
        color: #FFFFFF;
        background-color: #51534a;
    }

    body .gform_wrapper .top_label div.ginput_container,
    .gform_wrapper.gf_browser_chrome select,
    .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {
        width: 100% !important;
    }

    body img.gform_ajax_spinner {
        display: none !important;
    }

    /* hide the main nav book your stay button */
    #menu-item-4294 {
        display: none;
    }


    /* splide content styles */
    .splide__slide {
        display: grid;
        grid-template-columns: 1fr 40px 1fr;
        grid-template-rows: auto;
    }

    .splide__slide img {
        grid-column: 1/2;
        grid-row: 1/2;
    }

    .splide__slide .slide-content {
        grid-column: 3/4;
        grid-row: 1/2;
        background: #FFFFFF;
        border: 1px solid #BCBEC0;
        padding: 36px;
        text-align: left;
        align-self: center;
    }
    .splide__arrow svg {
        fill: #BCBEC0;
    }
    .splide__arrow--prev svg {
        transform: rotate(180deg);
    }
    .splide .splide__arrow {
        background: none;
        border: 0;
    }
    .splide__pagination {
        padding-left: 0;
        gap: 8px;
    }
    .splide__pagination__page {
        height: 16px;
        width: 16px;
        background: #FFFFFF;
        border: 1px solid #BCBEC0;
        border-radius: 8px;
    }
    .splide__pagination__page.is-active {
        background: #51534a;
    }
</style>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('components/templates', 'header'); ?>
    <div class="hero">
        <?php
        $image = get_field('hero_image');
        if ($image) :
            // Image variables.
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $description = $image['description'];
            // Begin caption wrap.
            if ($caption) : ?>
                <div class="wp-caption">
                <?php endif; ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php
                // End caption wrap.
                if ($caption) : ?>
                    <p class="wp-caption-text"><?php echo esc_html($description); ?></p>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <div class="right-scrollwork pb-50">
        <div class="container landing-container">
            <div class="row">
                <div class="col-md-5 mb-50 pt-51">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/leisure-collage.jpg" alt="Lake Arrowhead Lodge offers amazing summer vibes, great accommodations, fun activities and award-winning dining">
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 pt-50 text-center">
                    <h1 class="mb-30">Let there be de<span class="gold">light</span>!</h1>
                    <h2>A special summer offer for the UCLA community</h2>
                    <p>This summer, the UCLA Lake Arrowhead Lodge is inviting UCLA faculty, staff, alumni, retirees and other affiliates to the mountains for a relaxing stay filled with award-winning food and gorgeous surroundings. Join other Bruins and guests from throughout the other nine University of California campuses for exclusive access to one of UCLA’s most treasured locations and explore every one of its glorious 50 acres.</p>
                    <p>Watch the sun rise from the Zen Deck; eat delicious food at the Main Lodge; enjoy time at the pool; play tennis, sand volleyball, basketball, and other games; take a serene walk in the woods; savor gooey smores by the campfire; and take part in a variety of other fantastic activities, all without leaving the property.</p>
                    <p><em>Reservations are now open! Bruins enjoy 10% off best available rate. Meals included. Minimum two-night reservation required.</em></p>
                    <p class="text-center mb-50 pb-50 pt-25"><a class="btn lg" href="https://reservations.travelclick.com/112652?RatePlanId=7630306">Book Your Stay</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing-container accommodation pt-50 pb-50">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center"><a href="/accommodations/">Get Away From It All!</a></h2>
                <p>Get away and relax for a few nights (or longer!) in one of our spacious chalets or go big and enjoy one of our thoughtfully updated vintage cabins. Free WiFi is available throughout the property, and most accommodations have their own deck and wood-burning fireplaces. Three-night stays required on weekend and holidays.</p>
            </div>
        </div>
    </div>
    <div class="left-scrollwork pt-50 pb-50">
        <div class="container landing-container rooms">
            <div class="row">
                <div class="col col-md-12 text-center">
                    <h2>Endless Summer Fun!</h2>
                    <?php if (have_rows('inline_slides')) : ?>
                        <section class="splide" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php while (have_rows('inline_slides')) : the_row();
                                        $heading = get_sub_field('heading');
                                        $copy = get_sub_field('copy');
                                        if (the_sub_field('button_label')) : {
                                                $button_label = get_sub_field('button_label');
                                                $button_link = get_sub_field('button_link');
                                            }
                                        endif;
                                        $image = get_sub_field('image'); ?>
                                        <li class="splide__slide">
                                            <div class="slide-content">
                                                <h3><?php echo $heading; ?></h3>
                                                <p><?php echo $copy; ?></p>
                                                <p><?php echo '<a href="' . $button_link . '">' . $button_label . '</a>'; ?>
                                            </div>
                                            <?php echo '<img src="' . $image["url"] . '" alt="' . $image["alt"] . '">' ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <div class="splide__arrows"></div>
                        </section>
                    <?php endif; ?>
                </div>
                <div class="col col-md-12">
                <p class="text-center pb-50"><a class="btn lg" href="https://lakearrowheadlodge.com/assets/pdf/ucla-lake-arrowhead-lodge-summer-2023-activity-offerings.pdf">View Schedule of Activities</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing-container cuisine pt-50 pb-50">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center"><a href="/dine">Award-Winning Cuisine!</a></h2>
                <p>You’re in for a treat! As multi-year winners of the OpenTable Diners' Choice award and the prestigious Taste of Lake Arrowhead Award, our culinary team takes pride in preparing delicious, family-friendly meals for all ages, palates and preferences.</p>
            </div>
        </div>
    </div>
    <div class="right-scrollwork pt-50 pb-50">
        <div class="container landing-container">
            <div class="row">
                <div class="col-md-9 pt-51">
                    <h2>Too good to keep it a secret!</h2>
                    <p>Share the Lodge with your UC campus affiliated group - it's the perfect setting for conferences, meetings, retreats, reunions, team-building events, and any other kind of gathering for 10-200 participants.</p>
                </div>
                <div class="col-md-6">
                    <p class="pb-50 pt-25"><a class="btn lg" href="/summer/uc-groups">UC Groups</a></p>
                </div>

            </div>
        </div>
    </div>

<?php endwhile; ?>

<script src="<?php echo get_theme_file_uri(); ?>/dist/scripts/splide.min.js"></script>
<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/dist/styles/splide-core.min.css">
<script type="text/javascript">
    new Splide('.splide', {
        arrowPath: 'M39.2,19.8L12.7,4.6v6.9L0.7,4.6v9.2l10.6,6L0.7,26.1v9.3l11.9-7v7L39.2,19.8z M14.7,8l20.6,11.8L14.7,31.9v-4.7l12.6-7.5l-12.6-7.2V8z M2.7,27.3l12.6-7.4L2.7,12.7V8l20.5,11.8L2.7,31.9V27.3z',
        type   : 'loop'
    } ).mount();
</script>