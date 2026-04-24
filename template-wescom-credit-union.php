<?php

/**
 * Template Name: Wescom Credit Union
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
        font-size: 4.75em;
        line-height: 1em;
        margin: 1em auto 0.25em;
        text-align: center;
        color: #8dc5db;
    }
    span.gold {
        color: #F5b62b;
}
    .landing-container h2 {
        font-size: 3.25em;
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
        background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/wescom-midpage.jpg');
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
    ul.activities-list {
        text-align: left;
    line-height: 1.4em;
    }
    .activities-list b {
        font-weight: bold;
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
        margin-top: 45px;
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
                <div class="col-md-5 mb-50 pt-51">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/ucla-lake-arrowhead-fall-offer-tall-450x1000r1.webp" alt="Lake Arrowhead Lodge offers amazing mountain vibes, great accommodations, fun activities and award-winning dining">
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 pt-50 text-center">
                <h1 class="mb-30">Calm on up!</h1>
                    <h2>Wescom Credit Union Members<br>Exclusive Rate</h2>
                    <p>Wescom Credit Union has teamed up with the UCLA Lake Arrowhead Lodge to offer a special rate to all Wescom members! </p>
                    <ul class="text-left">
                        <li>20% off our best available room rate</li>
                        <li>Includes daily breakfast for up to two people</li>
                        <li>Waived resort fee ($30 per night savings)</li>
                    </ul>
                    <p class="text-center"><img src="/wp-content/themes/LACC-sage-theme-master/assets/images/show-off-your-bruin-pride-ucla-bruin-wescom-creditcard.jpg" alt="Show off your Bruin Pride with a Wescom UCLA Bruin Credit Card!"></p>
                    <p>Plus, use your Wescom UCLA Bruin Credit Card for an extra $25 food and beverage credit to use in the dining room (alcohol excluded).</p>
                    <p class="text-center mb-50 pb-50 pt-25"><a class="btn lg" href="https://bookings.travelclick.com/112652?RatePlanId=7885262#/guestsandrooms">Book Your Stay</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing-container accommodation pt-50 pb-50">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center"><a href="/accommodations/">Get Away From It All!</a></h2>
                <p>Get away and relax for a few nights (or longer!) in one of our spacious chalets or go big and enjoy one of our thoughtfully updated vintage cabins. Free WiFi is available throughout the property, and most accommodations have their own deck and wood-burning fireplaces. Three-night stays required on some weekends and holidays.</p>
            </div>
        </div>
    </div>
    <div class="left-scrollwork pt-50 pb-50">
        <div class="container landing-container rooms">
            <div class="row">
                <div class="col-md-6 mb-50 pt-50">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/ucla-lake-arrowhead-fall-offer-450x600r1.webp" alt="Explore all the activities that our Lodge and Lake Arrowhead have to offer.">
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 pt-50 text-center accommodation-copy">
                    <div>
                        <h2 class="text-center"><a href="#">Play at your own pace!</a></h2>
                        <h3>Included activities:</h3>
                        <p>Self-Guided Hiking, Swimming Pool, Indoor Hot Tub, Fitness Center, Putting Green, Board Games, Tennis, Pickleball, Volleyball, Shuffleboard, Morning Coffee on the Zen Deck, Lawn Games, Softball Field</p>

                        <h3>Supplemental activities<br>(fees required, please <a href="mailto:aturner@ha.ucla.edu?subject=Activity availability inquiry">email Anna Turner</a> to check on availability):</h3>
                        <ul class="activities-list">
                            <li><b>Private Pontoon Cruise:</b> $250 per hour (accommodates 12)</li>

<li><b>Mountain Biking:</b> $35 per person, minimum of 6 paid for to book</li> 

<li><b>Kayak Tours:</b> $40 per person, minimum of 4 paid for to book</li>

<li><b>Buin Chef:</b> $70 per person, minimum of 12 paid for to book</li>

<li><b>Ropes Course:</b> $75 per person, minimum of 20 paid for to book 2.5 hour session</li> 

<li><b>Craft Chocolate Tasting & Education Experience:</b> $35 per person, minimum of 20 paid for to book</li>

<li><b>Guided Mindfulness:</b> $250 flat fee, up to 25 participants</li>

<li><b>Yoga, Cardio Classes, Pilates, Boot Camp:</b> $150 flat fee, up to 35 guests</li>

<li><b>Frontier Village Campfire Private Session:</b> $550, add in s'mores for $5.50 per person</li>

<li><b>Guided Hike:</b> $35 per person, minimum of 8 paid for to book</li>
                        </ul>
                    </div>
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

<?php endwhile; ?>