<?php

/**
 * Template Name: Veloz Pickleball
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
        font-size: 2em;
    }

    .landing-container h2 span {
        font-size: .6em;
        font-family: Arial, Helvetica, sans-serif;
        font-style: italic;
        letter-spacing: 0;
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
        background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/pickleball-mid-page2.jpg');
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
                <div class="col-md-5 mb-50 pt-51">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/pickleball-top-asset.webp" alt="Lake Arrowhead Lodge offers amazing mountain vibes, great accommodations, fun activities and award-winning dining">
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 pt-50 text-center">
                    <h1 class="mb-30">Unleash your inner pickleball pro!</h1>
                    <h2>November 10-12, 2023</h2>
                    <p>Pickleball enthusiasts and newcomers, join us for the weekend at the UCLA Lake Arrowhead Lodge <strong>Friday, Nov. 10 to Sunday, Nov. 12</strong> for an exhilarating pickleball clinic that will take your game to the next level. Presented by VELOZ USA Pickleball, this will be an unforgettable weekend of skill-building, camaraderie and fun. Package includes a two-night stay, meals (starting with dinner on Friday and ending with lunch on Sunday), parking, clinic registration fees and free internet. Participants will also receive a custom-designed water bottle and t-shirt.</p>
                    <h2>Full Weekend -<br>All Inclusive Package Rates<br><span>(save more when you bring the whole team)</span></h2>
                    <ul class="text-center">
                        <li style="list-style-type: none;">One Person – $997.00 ($1,058.14 with tax)
                        <li style="list-style-type: none;">Two People – $1,344.00 ($1,420.82 with tax)<br>
                                <strong>*$672.00 ($710.41 with tax) – Per Guest*</strong></li>
                        <li style="list-style-type: none;">Three People – $1,691.00 ($1,783.46 with tax)<br>
                            <strong>*$563.66 ($594.49 with tax) – Per Guest*</strong>
                        </li>
                        <li style="list-style-type: none;">Four People – $2,038.00 ($2,146.14 with tax)<br>
                            <strong>*BEST VALUE: $509.50 ($536.54 with tax) – Per Guest*</strong>
                        </li>
                        <p class="text-center pb-50 pt-25"><a class="btn lg" href="http://bookings.ihotelier.com/bookings.jsp?groupID=3999754&hotelID=112652">Book Your Stay</a></p>
                        <p class="mb-50 pb-50">Booking is a two step process. By clicking the “Book Now” button you will be directed to book your over night accommodations, once this step is complete you will receive a email with a link to compete your full registration. Once your registration is submitted your reservation will be updated within 24 hours and a final confirmation with your total will be emailed to you (this will reflect the same prices listed above). </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing-container accommodation pt-50 pb-50">
        <div class="row mbg">
            <div class="col-md-4 col-md-offset-1 mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2 class="text-center"><a href="/accommodations/">Included in Your Stay</a></h2>
                <ul>
                    <li>Expert instruction from Mason Wei and Carl Mazzie, professional pickleball coaches who work at the renowned Tennis & Pickleball Club in Newport Beach</li>
                    <li>Comprehensive lessons covering fundamental techniques and advanced strategies</li>


                    <li>Engaging drills and interactive gameplay to sharpen your skills</li>
                    <li>Opportunity to connect with fellow players and build lasting friendships</li>
                    <li>Personalized feedback to fine-tune your gameplay</li>
                    <li>Plus, meet VELOZ Founder Mitch Junkins and demo VELOZ performance paddles.</li>
                </ul>

                <p>Fees include overnight lodging, meals, parking, Internet and clinic registration fees. Participants will also receive a custom-designed water bottle and t-shirt.</p>
                <p>Our <a href="/stay-at-ucla-lake-arrowhead-conference-center/">chalets are perfect to sleep the whole team</a>! They are two bedroom/two bathroom units with an additional queen sofa pullout located in the living room (max capacity is 6 people per chalet).</p>
            </div>
        </div>
    </div>
    <div class="left-scrollwork pt-50 pb-50">
        <div class="container landing-container rooms">
            <div class="row">
                <div class="col-md-6 mb-50 pt-50">
                    <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/pickleball-midpage-short.webp" alt="Explore all the activities that our Lodge and Lake Arrowhead have to offer.">
                </div>
                <div class="col-md-6 col-xs-10 pt-50 text-center accommodation-copy">
                    <div>
                        <h2 class="text-center"><a href="#"></a>Keep Calm and Dink On!</h2>
                        <p>Pickleball is a dynamic and fast-growing paddle sport that combines elements of tennis, badminton and table tennis. Played on a rectangular court with a lowered net, participants use solid paddles to hit a perforated plastic ball over the net. The game can be enjoyed in singles or doubles, making it adaptable for various skill levels and ages. The objective is to score points by landing the ball in the opponent's court, using strategic shots and teamwork. Known for its accessibility and social aspect, pickleball's popularity is fueled by its easy-to-learn nature and the excitement of quick rallies. It's a game that promotes physical activity and friendly competition, making it a favorite choice for recreational and competitive players alike.</p>
                        <p>Whether you're a beginner looking to learn the ropes or an experienced player aiming to enhance your performance, this clinic caters to all skill levels. Don't miss out on this chance to improve your pickleball prowess while having a blast! Space is limited, so secure your spot today. Get ready to smash, volley and ace your way to pickleball excellence!</p>
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