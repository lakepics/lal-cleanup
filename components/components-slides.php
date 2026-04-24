<?php
   $slides = get_field("slides");
if ($slides) {
echo '<section class="section-hero-slider"><div class="hero-slider">';
        echo '<div class="hero-slider">';

    foreach ( $slides as $slide ) {
        echo 	'<article class="hero" data-background="light">
    <div class="hero-slider-image" style="background-image: URl(' . $slide['image'] . ');">
    </div>
    <div class="hero-slider-container">
        <div class="black-box">
            <div class="hero-slider-content">
                <h1 class="hero-slider-title" data-animation="animated">' . $slide['overlay-h1'] . '
                                </h1>
                <h2 class="hero-slider-subheading" data-animation="animated">' . $slide['overlay-h2'] . '
                                </h2>
                <div class="hero-slider-btn">
                    <div class="heros-btn"></div>
                    <a href="' . $slide['overlay-redirect'] . '">' . $slide['button-text'] . '<i id="space" class="fa fa-arrow-circle-right" aria-hidden="true">
                                                </i>
                                        </a>
                </div>
                <div class="gold-absolute-wrapper-container">
                <div class="gold-button-container">
                <div class="gold-buttons-mobile-center">
                    <div class="phone-slider-box">
                         <a href="https://lakearrowheadconferencecenter.ucla.edu//meetings/"><div class="phone-slider-box--text">Meetings & Conferences
                        </div></a>
                    </div>
                    <div class="phone-slider-box">
                        <a href="https://lakearrowheadconferencecenter.ucla.edu/accommodations/"> <div class="phone-slider-box--text">Accommodations
                        </div> </a>
                    </div>
                    <div class="phone-slider-box">
                         <a href="https://lakearrowheadconferencecenter.ucla.edu/meetings/room-capacities-floor-plans/"><div class="phone-slider-box--text">Property Maps
                        </div></a>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</article>
';
        }
    echo '</section>';
    echo '</div>';
}
    ?>
