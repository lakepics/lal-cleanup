<?php

/**
 * Template Name: Cyber 30 Group
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
    .link-button {
        border: 0;
        background: transparent;
        padding: 0;
        font-weight: bold;        
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

    .section-two {
        background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/landing-page-midpage-background-50.jpg');
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

                <div class="col-md-6 pt-50 text-center">
                    <h1 class="mb-30">cyber month teamscape deals</h1>
                    <h2 style="letter-spacing: .06em;">elevated savings and an elevated group experience</h2>
                    <p>Discover the perfect blend of state-of-the-art meeting facilities and the tranquil, mountain environment at Lake Arrowhead Lodge.</p>
                    <p>Save 30% off your meeting when you book by Nov. 27 for select stays starting Dec.3 – March 28.</p>
                    <p class="text-center mb-50 pb-50 pt-25"><a class="btn lg" href="/request-a-proposal-cyber/">Request for Proposal</a></p>
                </div>
                <div class="col-md-5 col-md-offset-1 mt-50 mb-50 pt-51">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/landing-page-offer-collage-cyber-group-50.webp" alt="Lake Arrowhead Lodge offers amazing mountain vibes, great accommodations, fun activities and award-winning dining">
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid landing-container section-two pt-50 pb-50">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-5 col-sm-10 col-sm-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center" style="letter-spacing: .06em;">offer includes</h2>
                <ul class="text-left">
                    <li><strong>Lowest Rate of the Season:</strong> Rates as low as $245.00 per chalet/per night.</li>
                    <li><strong>Waived Resort Fee:</strong> Savings of $30.00 per night.</li>
                    <li><strong>Harmonious Meetings:</strong> Dive into our spacious, pillar-less meeting rooms that let creativity flow.</li>
                    <li><strong>Tech Ready:</strong> Advanced audiovisual facilities for smooth presentations and team interactions.</li>
                    <li><strong>Dine Together:</strong> Strengthen bonds over delicious meals at our on-site dining venues.</li>
                    <li><strong>Nature’s Touch:</strong> Let the serene surroundings of Lake Arrowhead inspire and rejuvenate your team.</li>
                </ul>
                <h3 class="text-center" style="letter-spacing: .06em;">additional group savings</h3>
                <ul class="text-left">
                    <li><strong>No Service Charge or Gratuity:</strong> Save over 24% off your final bill! Most hotels and resorts charge 24% or more as a customary taxable service charge. However, at the UCLA Lake Arrowhead Lodge, we do not charge these additional fees to our groups!</li>
                    <li><strong>All Inclusive Packages:</strong> Save with our meeting package that includes meals, meeting room rental, audiovisual, internet, parking & coffee break.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="left-scrollwork pt-50 pb-50">
        <div class="container landing-container rooms">
            <div class="row">
                <div class="col-md-6 pt-50 text-center accommodation-copy">
                    <div>
                        <h2 class="text-center" style="letter-spacing: .06em;">on-site winter team building activities</h2>
                        <ul class="text-left">
                            <li><strong>Mindfulness Courses:</strong> Our serene mountain environment is the ideal location to experience mental relaxation and rejuvenation under the guidance of a skilled mindfulness instructor.</li>
                            <li><strong>Craft Chocolate-Making Experience:</strong> In this chocolate-making class, your group will create their very own bars of chocolate from scratch!</li>
                            <li><strong>Bruin Chef Challenge:</strong> Unite over the culinary arts, where teams cook, learn, and savor their creations.</li>
                            <li><strong>Art & Wine Experiences:</strong> Collaborate and create, each member contributing to a classic mountain scene or a modern art piece.</li>
                        </ul>
                        <ul class="text-left">
                            <h2 class="text-center">off-site winter team building activities</h2>
                            <h3>at snow valley mountain</h3>
                            <ul class="text-left">
                                <li>Engage in friendly competition with skiing and snowboarding across 240 acres featuring 23 trails suitable for all skill levels.</li>
                                <li>Enhance teamwork in the snowshoeing trails or challenge one another in cross-country skiing.</li>
                                <li>Partake in a snow tubing tournament on the dedicated hill.</li>
                                <li>Enjoy the panoramic views with a scenic gondola ride, perfect for strategizing or simply bonding.</li>
                                <li>Refuel and network at the lodge restaurant after a day of snowy adventures.</li>
                            </ul>
                            <h3>at SkyPark</h3>
                            <ul>
                                <li>Race against time in the Snowshoeing team-building challenge.</li>
                                <li>Experience the thrill of a cross-country skiing race or indulge in the fun of a snow tubing tournament.</li>
                                <li>The gondola scavenger hunt offers the perfect balance for those looking to combine fun with strategy.</li>
                                <li>Push the boundaries with an indoor rock-climbing competition, test your precision in ax throwing, or an archery tournament.</li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 mb-50 pt-50">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/landing-page-midpage-collage-cyber-group-50.webp" alt="Explore all the activities that our Lodge and Lake Arrowhead have to offer.">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing-container cuisine pt-50 pb-50">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-5 col-sm-10 col-sm-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center" style="letter-spacing: .06em;">experience a peak meeting</h2>
                <p>Lake Arrowhead Lodge offers more than just a meeting venue—it's an experience. It's the harmony of state-of-the-art amenities with nature's serene backdrop. And in winter, it transforms into a majestic snowy playground that guarantees successful meetings and memories that last a lifetime.</p>

                <p>Bring your next business meeting or event to Lake Arrowhead Lodge this winter and witness a seamless blend of work, wonder, and winter sports!</p>

                <p>Act now and take advantage of our limited-time Group Cyber Sale! Contact us today for exclusive offers tailor-made for your next group event!</p>

                <p class="text-center mb-50 pb-50 pt-25"><a class="btn lg" href="/request-a-proposal-cyber/">Request for Proposal</a></p>

                <h3 class="text-center" style="letter-spacing: .06em;">restrictions</h3>
                <ul class="text-left">
                    <li>Offer may not be used in conjunction with any other offer</li>
                    <li>Promotion must be referenced at the start of the negotiation process</li>
                    <li>Valid only for listed dates</li>
                    <li>Minimum room block on peak is 10 rooms per night for this promotion</li>
                    <li>An eligible stay is defined as two or more consecutive nights</li>
                </ul>
            </div>
        </div>
    </div>

<?php endwhile; ?>