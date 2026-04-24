<?php

/**
 * Template Name: Wedding Template 2026
 */
?>

<style>
  /* New Styles */


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

  .location {
    background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/lal-map-usgs-1926-40q-2100x936-alpha60.jpg');
    background-position: top -10px right -200px;
    background-size: cover;
  }

  footer {
    margin-top: 0;
  }

  .hero {
    max-height: none;
    display: grid;
    grid-template-columns: 10vw auto;
    grid-template-rows: 120px 1fr 100px;
  }

  .hero .hero__image {
    overflow: hidden;
    min-width: 100%;
    grid-column: 1/-1;
    grid-row: 1/-1;
  }

  .hero .callout__wrapper {
    grid-column-start: 2;
    grid-row: 1/2;
    z-index: 50;
  }

  .hero::before {
    background-color: transparent;
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

  .wedding-container .gform_legacy_markup_wrapper h3.gform_title {
    letter-spacing: .125em !important;
  }

  h3.gform_title {
    font-size: 30px !important;
  }

  /* restyles the gravity forms submit button */
  input[type="button"],
  .gform_wrapper .gform_footer input.button,
  .gform_wrapper .gform_footer input[type=submit],
  .gform_wrapper .gform_page_footer input.button,
  .gform_wrapper .gform_page_footer input[type=submit] {
    padding: 8px 8px !important;
    color: #FFFFFF !important;
    width: 180px !important;
    height: 50px;
    display: inline;
    cursor: pointer;
    font-weight: normal !important;
    text-transform: uppercase;
    background-color: #51534a !important;
    background-image: none;
    border: 0 !important;
    outline: 0 !important;
    font-size: 24px;
    text-align: center;
    -webkit-appearance: none;
    -webkit-border-radius: 0;
    border-radius: 0;
  }

  body .gform_wrapper .top_label div.ginput_container,
  .gform_wrapper.gf_browser_chrome select,
  .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {
    width: 100% !important;
  }

  body img.gform_ajax_spinner {
    display: none !important;
  }

  .weddings-2026-video-hero {
    height: 60vh;
    overflow: hidden;
    position: relative;
  }

  .weddings-2026-video-hero .vid-container-overflow,
  .weddings-2026-video-hero .background-video-vimeo-wrapper,
  .weddings-2026-video-hero .video-hero-text-background-overlay {
    height: 60vh;
  }

  .weddings-2026-video-hero .video-container {
    padding-bottom: 60vh;
  }

  .weddings-2026-video-hero .background-video-toggle {
    bottom: 50px;
    right: 50px;
  }
</style>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('components/templates', 'header'); ?>
  <div class="weddings-2026-video-hero">
    <?php get_template_part('components/components', 'video-hero-vimeo'); ?>
  </div>

  <div class="right-scrollwork">
    <div class="container wedding-container">
      <div class="row">
        <div class="col-md-6">
          <h1><?php echo esc_html( get_field('intro_heading') ?: 'A Historic, Storybook Wedding Destination in Beautiful Lake Arrowhead' ); ?></h1>
          <h2 class="alt-heading"><?php echo esc_html( get_field('intro_subheading') ?: 'rustic charm, delightful cuisine and fantastic memories' ); ?></h2>
          <div class="intro-copy">
            <?php echo get_field('intro_copy') ?: '<p>As you ascend the San Bernardino Mountains, winding your way up the hill with the clouds at your eyeline and the vast expanse of the pine-filled valley below, it\'s impossible to ignore the majestic natural beauty that surrounds you. It\'s an awe-filled experience, especially for those who rarely leave the city, the crisp clean air flooded with silence and the night sky beaded with stars. As you look to the south shore of the water and the surrounding peaks, you\'ll breathe in deeply, think of the person you\'re about to marry and wonder how in the world you got so lucky. <b>We\'ve created the unique opportunity for to have your wedding at the beautiful UCLA Lake Arrowhead Lodge!</b></p>'; ?>
          </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
          <?php if ( $video = get_field('intro_video_embed') ) : ?>
            <?php echo $video; ?>
          <?php else : ?>
            <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/1115571207?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="LAL Wedding Video Fix-FINAL"></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
          <?php endif; ?>
          <p class="text-center"><a style="padding: 8px 12px; font-weight: normal; text-align: center;" class="row__gold-buttons--single" href="<?php echo esc_url( get_field('intro_button_url') ?: 'https://ucla.box.com/s/k5brxkcne6bflymwf2kit5j86m8n601w' ); ?>"><?php echo esc_html( get_field('intro_button_label') ?: 'Download Look Book' ); ?></a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid wedding-container location">
    <div class="row">
      <div class="col-md-6 col-md-offset-2 mt-50 mb-50 p-50" style="background: #FFFFFF">
        <h2><?php echo esc_html( get_field('location_section_heading') ?: 'Location is Key' ); ?></h2>
        <div class="location-content">
          <?php echo get_field('location_section_content') ?: '<p>Just 90 minutes from Los Angeles, and situated on 50 acres, the <a href="https://g.page/uclalakearrowhead?share">UCLA Lake Arrowhead Lodge</a> is a much-desired wedding site. The picturesque lake just steps away, and on-site Zen Deck, are ideal settings for gorgeous wedding photos.</p>'; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="left-scrollwork">
    <div class="container wedding-container">
      <div class="row">
        <div class="col-md-6">
          <?php $spaces_image = get_field('spaces_image'); if ( $spaces_image ) : ?>
            <img class="img-responsive" src="<?php echo esc_url( $spaces_image['url'] ); ?>" alt="<?php echo esc_attr( $spaces_image['alt'] ); ?>">
          <?php else : ?>
            <img class="img-responsive" src="/wp-content/themes/LACC-sage-theme-master/assets/images/spaces3.jpg">
          <?php endif; ?>
        </div>
        <div class="col-md-6 mt-50 p-50">
          <h2><?php echo esc_html( get_field('spaces_section_heading')); ?></h2>
          <div class="spaces-section-content">
            <?php echo get_field('spaces_section_content') ; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid wedding-container cuisine" style="background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/cuisine.jpg'); background-position: center; background-size: cover;">
    <div class="row">
      <div class="col-md-6 col-md-offset-4 mt-50 mb-50 p-50" style="background: #FFFFFF">
        <h2><?php echo esc_html( get_field('dining_section_heading') ?: 'World-Class Dining' ); ?></h2>
        <div class="dining-section-content">
          <?php echo get_field('dining_section_content') ?: '<p>Our award-winning culinary team will prepare a four-course dinner service that will leave your guests in awe. In consultation with you, we will custom-design a jaw-dropping dining experience to remember. In addition, dazzling desserts are designed on-site daily by our on-site pastry chef.</p>'; ?>
        </div>
      </div>
    </div>
  </div> 

  <div class="container wedding-container mt-50 mb-50">
    <div class="row">
      <div class="col-md-6 mb-50">
        <h2><?php echo esc_html( get_field('wedding_info_heading') ?: 'UCLA Lake Arrowhead Lodge Weddings' ); ?></h2>
        <div class="wedding-info-content">
          <?php echo get_field('wedding_info_content') ?: '<p>Plan your event at UCLA\'s historic mountain top retreat. From April to June and September to October, we are a destination wedding location. For the best experience, we require a property buyout. The minimum expenditure for hosting such an extraordinary weekend event starts at $165,000. This covers a 2-night stay from Friday at 4 p.m. until Sunday at 11 a.m.</p>'; ?>
        </div>
        <h3><?php echo esc_html( get_field('wedding_indoor_heading') ?: 'Indoor Weddings' ); ?></h3>
        <div><?php echo get_field('wedding_indoor_content') ?: '<p>Enjoy your wedding inside our beautiful property with its unique alpine design and decor.</p>'; ?></div>
        <h3><?php echo esc_html( get_field('wedding_outdoor_heading') ?: 'Outdoor Weddings' ); ?></h3>
        <div><?php echo get_field('wedding_outdoor_content') ?: '<p>"I do" beneath the backdrop of the beautiful San Bernardino Mountains in Southern California.</p>'; ?></div>
        <h3><?php echo esc_html( get_field('wedding_accommodations_heading') ?: 'Accommodations' ); ?></h3>
        <div><?php echo get_field('wedding_accommodations_content') ?: '<p>Retreat to one of our cozy accommodations after your big day. We offer an array of comfortable arrangements.</p>'; ?></div>
        <h3><?php echo esc_html( get_field('wedding_packages_heading') ?: 'Versatile Packages' ); ?></h3>
        <div><?php echo get_field('wedding_packages_content') ?: '<p>Your guests will be treated to a delightful array of culinary experiences with packages for nearly every budget.</p>'; ?></div>
      </div>
      <div class="col-md-4 col-md-offset-1">
        <?php echo do_shortcode( get_field('wedding_form_shortcode') ?: '[gravityform id="29" title="true" description="false" ajax="true"]' ); ?>
      </div>
    </div>
  </div>


  <div class="wave"></div>
<?php endwhile; ?>