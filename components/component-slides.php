

<?php

/* Hero Slider
/*
/**/

   $slides = get_field("slides");
if ($slides) {
echo '<section class="section-hero-slider"><div class="hero-slider">';
        echo '<div class="hero-slider">';

    foreach ( $slides as $slide ) {
        echo '<article class="hero" data-background="light"><div class="hero-slider-image" style="background-image: URl(' . $slide['image'] . ');"></div><div class="hero-slider-container"><div class="black-box"><div class="hero-slider-content"><h1 class="hero-slider-title" data-animation="animated">' . $slide['overlay-h1'] . '</h1><h2 class="hero-slider-subheading" data-animation="animated">' . $slide['overlay-h2'] . '</h2><a href="' . $slide['overlay-redirect'] . '" class="hero-slider-btn" data-animation="animated"><p class="hero-btn">Learn More<i id="space" class="fa fa-arrow-circle-right" aria-hidden="true"></i></p></a></div></div></div></article>';
        }
    echo '</section>';
    echo '</div>';
    ?>
