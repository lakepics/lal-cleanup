<?php

/**
 * Template Name: Westways
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
        font-size: 4.5em;
        line-height: 1em;
        margin: 1em auto 0.25em;
        text-align: center;
        color: #8dc5db;
    }

    span.gold {
        color: #F5b62b;
    }

    .landing-container h2 {
        font-size: 3.15em;
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
        font-size: 16px;
        font-weight: 100;
        line-height: 1.7em;
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
        background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/chalets-midpage-ai-fill.webp');
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
        margin-top: 35px;
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

    <div class="right-scrollwork pb-50">
        <div class="container landing-container">
            <div class="row">
                <div class="col-md-4 mt-50 mb-50 pt-51">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/westways-landing-1550.jpg" alt="Lake Arrowhead Lodge offers amazing mountain vibes, great accommodations, fun activities and award-winning dining">
                </div>
                <div class="col-md-6 col-md-offset-1 col-xs-10 col-xs-offset-1 pt-50 text-center">
                    <h1 class="mb-30">a little more altitude, a lot more gratitude</h1>
                    <h2 style="letter-spacing: .06em;">A special offer for <em>San Diego Westways</em> readers</h2>
                    <p>We are thrilled to be <a href="https://lakearrowheadlodge.com/wp-content/uploads/2023/10/1123_WSD_16OutAbout.pdf">featured in the winter issue of San Diego Westways</a> magazine. So much so that we decided we really wanted to meet some of its readers before 2023 draws to a close.</p>

                    <p>There are a few ways to drive from San Diego County to Lake Arrowhead, each offering an incredible look at the natural beauty of Southern California. While the songs on your favorite road trip playlist punctuate each mile traveled, you edge closer to one of the most beautiful spots our tiny part of the planet offers – the San Bernardino Mountains – and one of its hidden gems – the UCLA Lake Arrowhead Lodge.</p>

                    <p>Our question is: Are you ready?</p>

                    <p>Are you ready to relax and unwind among white fir, incense cedar, oak and pine trees and enjoy simple moments of wonder as birds harmonize nearby?</p>

                    <p>Are you ready for endless outdoor activities that will be the source of special moments? </p>

                    <p>Are you ready to dig into the mouth-watering multi-course meals that our award-winning chefs have planned for you?</p>

                    <p>And most importantly: Are you ready to save?</p>

                    <p>Book your stay in October, November or December and receive 20% off our best available rate, plus enjoy a $50 food and beverage credit to be used at the Lodge (not redeemable for alcohol) and a daily, complimentary grab-and-go breakfast in our lobby.</p>

                    <p>Call your family, text your friends, reach out to people you have been promising to get together with for the last year, and let us know when you’re coming. Your rooms—and our chefs—are waiting!
                    </p>

                    <p class="text-center mb-50 pb-50 pt-25"><a class="btn lg" href="https://bookings.travelclick.com/112652?RatePlanId=7917873">Book Your Stay</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing-container accommodation pt-50 pb-50">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center" style="letter-spacing: .06em;">a higher standard of comfort</h2>
                <p>Modern amenities meet timeless charm at the UCLA Lake Arrowhead Lodge. Book your unique two-story chalet, featuring comfy beds, plush bedding, ample amenities and a variety of floorplans to suit your needs. Most of our rooms include a fireplace and deck offering beautiful mountain or lake views. Bring your device to stay connected with complimentary Wi-Fi, or unplug entirely. Our mountain atmosphere is enhanced when you leave the workaday world completely behind.</p>
                <p class="text-center mb-50 pb-50 pt-25"><a class="btn lg" href="https://lakearrowheadlodge.com/stay-at-ucla-lake-arrowhead-conference-center/">View Our Rooms & Cabins</a></p>
            </div>
        </div>
    </div>
    <div class="left-scrollwork pt-50 pb-50">
        <div class="container landing-container rooms">
            <div class="row">
                <div class="col-md-6 mb-50 pt-50">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/westways-midpage.webp" alt="Explore all the activities that our Lodge and Lake Arrowhead have to offer.">
                </div>
                <div class="col-md-6 col-xs-10 pt-50 text-center accommodation-copy">
                    <div>
                        <h2 class="text-center" style="letter-spacing: .06em;">Play at your own pace!</h2>
                        <h3>Included activities:</h3>
                        <p>Self-Guided Hiking, Swimming Pool, Indoor Hot Tub, Fitness Center, Putting Green, Board Games, Tennis, Pickleball, Volleyball, Shuffleboard, Lawn Games, Softball Field</p>

                        <h3>Supplemental activities<br>(fees required):</h3>
                        <ul class="text-left">
                            <li>Mountain Bike Rentals (hardtail suspension): $50.00 per bike /per day</li>
                            <li>Private Yoga (60 Min Session): $150.00 Flat Fee</li>
                            <li>Guided Mountain Bike Tour (120 Min Event): $215.00 Flat Fee (groups up to 6 - $35.00 per person for additional participants)</li>
                            <li>Popup Picnic in the Woods: $250.00 (2 people + $50.00 for each additional person)</li>
                            <li>Customizable Mindfulness Session with Wellness Coach (60 Min Session): $250.00 Flat Fee</li>
                            <li>Facilitated Game Night (90 to 120 Min Event): $350.00 Flat Fee</li>
                            <li>Family Scavenger Hunt (65 Min Event): $350.00 Flat Fee (groups up to 15)</li>
                            <li>Guided Hiking (120 Min Hike): $350.00 Flat Fee (groups of 2-6)</li>
                            <li>Craft Chocolate Tasting & Education (90 Min Event): $350.00 Flat Fee (groups up to 10)</li>
                            <li>Private Camp Fire Experience at Frontier Village or Grey Oak Campground (8pm-10pm): $550.00 Flat Fee</li>
                        </ul>
                        <p>Please contact Anna Stalzer Turner, Guest Experience Manager at <a href="mailto:aturner@ha.ucla.edu?subject=Supplemental Activity Inquiry">aturner@ha.ucla.edu</a> or call (909) 336-7050, to schedule supplemental activities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing-container cuisine pt-50 pb-50">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center" style="letter-spacing: .06em;">In the Mood for World-Class Food?</h2>
                <p>When you come to the UCLA Lake Arrowhead Lodge, you have a unique opportunity to indulge in a one-of-a-kind culinary experience from our award-winning kitchen. Our warmly rustic dining room is an ideal place to connect with friends, family and other guests, and celebrate everyday special occasions with masterful dishes crafted by our renowned culinary team.</p>
                <p class="text-center mb-50 pb-50 pt-25"><a class="btn lg" href="https://lakearrowheadlodge.com/dine/">Reserve Your Table!</a></p>
            </div>
        </div>
    </div>

<?php endwhile; ?>