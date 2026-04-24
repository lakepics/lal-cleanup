<?php

/**
 * Template Name: Spring Holiday Landing Page 
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
    background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/accommodation-crop.jpg');
    background-position: center;
    background-size: cover;
  }

  .cuisine {
    background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/cuisine.jpg');
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
  .pt-50 {
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
        <div class="col-md-6 mb-50 text-center">
          <h1 class="mb-30">It's a Spring <span style="color: #FFd100;">Break</span> Thing!</h1>
          <h2 class="light mt-0">All-inclusive Weekend Package<br>
            Apr. 6–9, 2023<br>(3 nights)</h2>
          <h3>Arrival: <strong>Thursday, Apr. 6, 2023 (4pm)</strong><br>
            Departure: <strong>Sunday, Apr. 9, 2023 (after lunch)</strong></h3>
          <h3 class="mt-50">Your holiday stay includes:</h3>
          <ul>
            <li style="list-style: none;">Cozy accommodations</li>
            <li style="list-style: none;">Gourmet meals served in our dining room</li>
            <li style="list-style: none;">Family-focused programming</li>
          </ul>
        </div>
        <div class="col-md-5 col-md-offset-1 pt-50">
          <h3>Pricing for meals & activities (per guest):</h3>
          <p class="mb-0">Adults: <strong>$345</strong></p>
          <p class="mb-0">3 years old – 10<sup>th</sup> grade: <strong>$144</strong></p>
          <p class="mb-0">2 and under: <strong>Free</strong></p>
          <p>Above per person price is for all meals starting with dinner on night of arrival and ending with lunch on day of departure, as well as family-focused activities.</p>
          <a class="btn rev" href="https://lakearrowheadlodge.com/assets/pdf/ucla-lake-arrowhead-lodge-spring-2023-family-holiday-tentative-charts.pdf">See detailed activity schedule</a>

          <h3 class="mt-30">3 Nights Accommodation:</h3>
          <p class="mb-0">Vintage Single: <strong>$540  (Sleeps 1-2)</strong></p>
          <p class="mb-0">Chalet 1 Bath: <strong>$840 (Sleeps 3-4)</strong></p>
          <p class="mb-0">Open Chalet: <strong>$900 (Sleeps up to 5)</strong></p>
          <p class="mb-0">Deluxe Chalet: <strong>$960 (Sleeps up to 6)</strong></p>
          <p class="sm mt-20">All meal, activity, and accommodation rates above are plus tax.</p>
        </div>
        <div class="col-md-12">
          <p class="text-center pb-50"><a class="btn lg" href="#book">Book Your Stay</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid landing-container accommodation">
    <div class="row">
      <div class="col-md-4 col-md-offset-2 mt-50 mb-50 p-50" style="background: #FFFFFF">
        <h2><a href="/accommodations">Comfortable Accommodation</a></h2>
        <p>There is nothing quite like settling into one of our two-story chalets. The views are incredible, the beds are cozy and it just feels like home but better! There are many options to choose from depending on your budget and the size of your family.</p>
      </div>
    </div>
  </div>
  <div class="right-scrollwork">
    <div class="container landing-container">
      <div class="row">
        <div class="col-md-6 pr-50">
          <a href="/gallery/"><img src="/wp-content/themes/LACC-sage-theme-master/assets/images/gallery-collage.jpg" alt="View our Photo Gallery"></a>
        </div>
        <div class="col-md-6 p-50 pt-100">
          <p>With roots dating back a century, the Lake Arrowhead Lodge has a rich history and unmatched natural beauty. So much so that the property actually starred as Camp David in the 1995 romantic comedy-drama <em><a href="https://www.imdb.com/title/tt0112346/">The American President</a></em>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid landing-container cuisine">
    <div class="row">
      <div class="col-md-4 col-md-offset-6 mt-50 mb-50 p-50" style="background: #FFFFFF">
        <h2><a href="/dining/">Delicious Food</a></h2>
        <p>The food at the Lake Arrowhead Lodge is incredible! Our award-winning culinary team thoughtfully prepares three delicious buffet meals daily with options to satisfy all tastes and preferences. Or team uses fresh, local ingredients to keep you and your family fueled throughout your time with us.</p>
      </div>
    </div>
  </div>
  <div class="left-scrollwork">
    <div class="container landing-container" id="book">
      <div class="row">
        <div class="col-md-12 mt-50 text-center">
          <h2>How to Book Your Family Holiday Stay</h2>
        </div>
        <div class="col-md-4 p-50">
          <h3>Step 1: Complete your overnight accommodation reservation</h3>
          <p>Choose your room type based on number of total guests.</p>
        </div>
        <div class="col-md-4 p-50">
          <h3>Step 2: Check your email</h3>
          <p>Once your overnight accommodation reservation is completed, you will receive an email with a link to complete your registration. The registration form will list all guests in your party and any dietary needs.</p>
        </div>
        <div class="col-md-4 p-50">
          <h3>Step 3: Finalize your reservation</h3>
          <p>Final confirmation of your reservation will be processed within 24-48 hours of receiving the registration form. A $500 non-refundable deposit will be collected at this time.
        </div>
        <div class="col-md-12">
          <p class="text-center p-50"><a class="btn lg" href="http://bookings.ihotelier.com/bookings.jsp?groupID=3418191&hotelID=112652">Book Your Stay</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid landing-container activities">
    <div class="row">
      <div class="col-md-4 col-md-offset-2 mt-50 mb-50 p-50" style="background: #FFFFFF">
        <h2>Fun Family Activities</h2>
        <p>A full schedule of family-friendly activities, plus access to our fitness center, jacuzzi and swimming pool await you. There is also a lot to see and do outdoors for those who like to hike, bird-watch and immerse themselves in the surrounding beauty. With 50 acres of space to play, there is something for everyone.</p>
      </div>
    </div>
  </div>
<?php endwhile; ?>