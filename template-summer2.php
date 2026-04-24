<?php

/**
 * Template Name: Summer 2
 */
?>

<style>
    /* @import must be at top of file, otherwise CSS will not work */
    @import url("//hello.myfonts.net/count/4383ff");

    @font-face {
        font-family: "HaarlemDeco";
        src: url('/wp-content/themes/LACC-sage-theme-master/dist/fonts/HaarlemDeco/font.woff2') format('woff2'), url('/wp-content/themes/LACC-sage-theme-master/dist/fonts/HaarlemDeco/font.woff') format('woff');
    }

    /* New Styles */

    .landing-container h1,
    .landing-container h2,
    .landing-container h3 {
        font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
        color: #51534a;
        letter-spacing: .125em;
    }

    .landing-container h1 {
        font-size: 3em;
        line-height: 1.25em;
        margin: 1em auto;
        text-align: center;
    }

    .landing-container h2 {
        font-size: 2.25em;
    }

    .landing-container h3 {
        font-size: 1.5em;
    }

    .landing-container h2,
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
        background-repeat: no-repeat;
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

    <div class="right-scrollwork">
        <div class="container landing-container">
            <div class="row">
                <div class="col-md-6 mb-50 pt-51">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/intro-collage.jpg" alt="Lake Arrowhead Lodge offers amazing summer vibes, great accommodations, fun activities and award-winning dining">
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 pt-50 text-center">
                    <h1 class="mb-30">Summer at the Lodge</h1>
                    <p>Join us at the UCLA Lake Arrowhead Lodge for a picture-perfect summer adventure in the mountains! With 50 wooded acres to explore, comfortable lodging, chef-prepared meals and no shortage of fun activities, your entire family is sure to have a great time and make lots of incredible memories.</p>
                    <p class="text-center pb-50 pt-25"><a class="btn lg" href="https://reservations.travelclick.com/112652?RatePlanId=7542474">Book Your Stay</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing-container accommodation">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center"><a href="/accommodations/">GET AWAY FROM IT ALL!</a></h2>
                <p>Get away and relax for a few nights (or longer!) in one of our spacious chalets or go big and enjoy one of our thoughtfully updated vintage cabins. Free WiFi is available throughout the property, and most accommodations have their own deck and wood-burning fireplaces. Three-night stays required on weekend and holidays.</p>
            </div>
        </div>
    </div>
    <div class="left-scrollwork">
        <div class="container landing-container rooms">
            <div class="row">
                <div class="col-md-6 mb-50 pt-50">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/activities-collage.jpg" alt="Explore all the activities that our Lodge and Lake Arrowhead have to offer.">
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 pt-50 text-center accommodation-copy">
                    <div>
                        <h2 class="text-center"><a href="#">Play at your own pace!</a></h2>
                        <h3>Included activities:</h3>
                        <p>Self-Guided Hiking, Movie Nights, Swimming Pool, Indoor Hot Tub, Fitness Center, Putting Green, Board Games, Tennis, Pickleball, Volleyball, Shuffleboard, Morning Coffee on the Zen Deck, Lawn Games, Softball Field</p>

                        <h3>Supplemental activities<br>(fees required):</h3>
                        <p>Arts & Crafts (Classes & Drop-in, price varies)<br>
                        Kayaking (UC Affiliates only, $20 per day)<br>
                        Pontoon Cruise (UC Affiliates only, $15)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing-container cuisine">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center"><a href="/dine">Award Winning Cuisine!</a></h2>
                <p>You’re in for a treat! As multi-year winners of the OpenTable Diners' Choice award and the prestigious Taste of Lake Arrowhead Award, our culinary team takes pride in preparing delicious, family-friendly meals for all ages, palates and preferences.</p>
            </div>
        </div>
    </div>

<?php endwhile; ?>