<?php

/**
 * Template Name: Landing Page 2023
 */
?>
<?php
$offer_heading_h1 = get_field('offer_heading_h1');
$offer_copy = get_field('offer_copy');
$offer_button_label = get_field('offer_button_label');
$offer_link = get_field('offer_link');
$offer_image = get_field('offer_image');
$offer_copy_right = get_field('offer_copy_right');
$accommodations_background = get_field('accommodations_background');
$accommodations_heading = get_field('accommodations_heading');
$accommodations_copy = get_field('accommodations_copy');
$activities_heading = get_field('activities_heading');
$activities_md_col_value = get_field('activities_md_col_value');
$accommodations_md_col_value = get_field('accommodations_md_col_value');
$accommodations_md_col_offset = get_field('accommodations_md_col_offset');
$activities_copy = get_field('activities_copy');
$activities_form_ID = get_field('activites_form_ID');
$activities_image = get_field('activities_image');
$dining_background = get_field('dining_background');
$dining_md_col_value = get_field('dining_md_col_value');
$dining_md_col_offset = get_field('dining_md_col_offset');
$dining_heading = get_field('dining_heading');
$dining_copy = get_field('dining_copy');
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
        letter-spacing: .0625em;
        text-transform: lowercase;
    }

    .landing-container em {
        font-style: italic;
    }
    .landing-container img {
        margin: 0 auto;
    }

    .landing-container h1 {
        font-size: 3.5em!important;

        line-height: 1em;
        margin: .5em auto 0.25em;
        text-align: center;
        color: #0c3b5d;
    }

    span.gold {
        color: #F5b62b;
    }

    .landing-container h2 {
        font-size: 2em!important;
    }

    .landing-container h3 {
        font-size: 1.25em!important;
        font-weight: bold;
    }

    .landing-container p,
    .landing-container ul,
    .landing-container ul li,
    .landing-container span.gform_description {
        margin: 1em auto;
        color: #777777;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px!important;
        font-weight: 100;
        line-height: 1.7em;
        hyphens: none;
    }
    .landing-container ul li {
        margin-bottom: 0;
        padding-bottom: 0;
        line-height: 1.5em;
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
        background-image: url('<?php echo $accommodations_background; ?>');
        background-position: center;
        background-size: cover;
    }

    .cuisine {
        background-image: url('<?php echo $dining_background; ?>');
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

        .activities .mb-50 {
            margin-bottom: 10px;
            margin-top: 30px;
        }
    }

    @media only screen and (min-width: 600px) {
        .banner {
            display: block;
        }
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

    <div class="left-scrollwork pb-50">
        <div class="container landing-container">
            <div class="row">
                <div class="col-md-5 col-xs-10 col-xs-offset-1 mt-50 mb-50 text-center">
                    <h1 class="mb-30"><?php echo $offer_heading_h1 ?></h1>
                    <?php echo $offer_copy ?>
                    <?php if($offer_link) {
                        echo '<p class="text-center mb-50 pb-50 pt-25"><a class="btn lg" href="' . $offer_link . '">' . $offer_button_label . '</a></p>';
                    } ?>
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-12 pt-51 mt-50">
                    <img class="img-responsive" src="<?php echo $offer_image['url']; ?>" alt="<?php echo $offer_image['alt']; ?>">
                    <?php if($offer_copy_right) {
                        echo $offer_copy_right;
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- accommodations -->
    <div class="container-fluid landing-container accommodation pt-50 pb-50">
        <div class="row mbg">
            <div class="col-md-<?php if($accommodations_md_col_value) { echo $accommodations_md_col_value; } else { echo '4';}?> col-md-offset-<?php if($accommodations_md_col_offset) { echo $accommodations_md_col_offset; } else { echo '6';}?> mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2><?php echo $accommodations_heading; ?></h2>
                <?php echo $accommodations_copy ?>
            </div>
        </div>
    </div>
    <!-- activities -->
    <div class="right-scrollwork pt-50 pb-50">
        <div class="container landing-container activities">
            <div class="row">
                <div class="col-md-<?php if($activities_md_col_value) { echo $activities_md_col_value; } ?> col-xs-10 col-xs-offset-1 mt-50 mb-50 text-center">
                    <div>
                        <h2><?php echo $activities_heading; ?></h2>
                        <?php echo $activities_copy; ?>
                        <?php if ($activities_form_ID) { gravity_form( $activities_form_ID, false, false, false, '', false ); }?>
                    </div>
                </div>
                <div class="col-md-<?php if($activities_md_col_value) { echo (10 - $activities_md_col_value); } ?> col-md-offset-1 mt-50 pt-51">
                    <img class="img-responsive" src="<?php echo $activities_image['url'] ?>" alt="<?php echo $activities_image['alt'] ?>">
                </div>
            </div>
        </div>
    </div>
    <!-- dining -->
    <?php
    if (get_field('show_dining_section')) {
        echo '    <div class="container-fluid landing-container cuisine pt-50 pb-50">
        <div class="row mbg">
        <div class="col-md-';
         if($dining_md_col_value) { echo $dining_md_col_value; } else { echo '4';}
        echo ' col-md-offset-'; 
        if($dining_md_col_offset) { echo $dining_md_col_offset; } else { echo '6';}
        echo ' mt-50 mb-50 p-50" style="background: #FFFFFF">
                <h2>'; ?>
                <?php echo $dining_heading ?></h2>
                <?php echo $dining_copy ?>
        <?php echo '</div>
        </div>';
    }?>
    </div>

<?php endwhile; ?>