<?php

/**
 * Template Name: Film Location
 */
?>

<style>
    h1 {
        color: #1C4D71;
        font-size: 2.2em;
        line-height: 1.15;
        padding: 0;
    }

    .button {
        background: #1C4D71;
        color: #ffffff;
        margin-top: 15px;
        margin-bottom: 6px;
        line-height: 17px;
        text-decoration: none;
        padding: 12px 18px;
        font-size: 16px;
        letter-spacing: .0625em;
        display: inline-block;
        width: auto;
        -webkit-transition: padding .3s ease-out;
        transition: padding .3s ease-out;
    }

    .rfpbutton {
        padding: 12px 18px;
        color: #FFFFFF;
        font-size: 18px;
        max-width: 180px;
        height: 50px;
        cursor: pointer;
        font-weight: normal;
        text-transform: uppercase;
        background-color: #1C4D71;
        text-align: center;
    }
    a.rfpbutton:hover,
    a.button:hover {
        color: rgba(255, 255, 255, 0.75);
    }
    .rfpbutton-reverse {
        padding: 12px 18px;
        color: #FFFFFF;
        border: 1px solid #FFFFFF;
        font-size: 18px;
        max-width: 180px;
        height: 50px;
        cursor: pointer;
        font-weight: normal;
        text-transform: uppercase;
        background-color: transparent;
        text-align: center;
    }
    .rfpbutton-reverse:hover {
        color: #cdcdcd;
    }
    .reverse {
        color: #FFFFFF;
    }

    .lead {
        hyphens: none;
    }

    .film-hero {
        background: url('https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Hero-Alt3-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 105px;
        padding-bottom: 85px;
        height: 550px;
    }

    .film-hero .content-box {
        background: rgba(255, 255, 255, 0.9);
        padding: 50px;
    }

    .map-background {
        background-image: url('https://lakearrowheadlodge.com/wp-content/uploads/2024/07/lal-map-usgs-1926-40q-2100x936-opacity-25.jpg');
        background-position: top -10px right -200px;
        background-size: cover;
    }

    .value-props h2 {
        font-size: 1.5em;
    }

    .value-props img {
        max-width: 150px;
    }

    /* margin and padding helpers */
    .mt-25 {
        margin-top: 25px;
    }

    .mt-50 {
        margin-top: 50px;
    }

    .mb-25 {
        margin-bottom: 25px;
    }
    .mb-50 {
        margin-bottom: 50px;
    }

    .mtb-25 {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .mtb-50 {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .mtb-80 {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .pt-50 {
        padding-top: 50px;
    }

    .pb-50 {
        padding-bottom: 50px;
    }

    .ptb-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .plr-25 {
        padding-left: 25px;
        padding-right: 25px;
    }

    ul li {
        list-style-type: none !important;
    }

    .bghero {
        width: 100% !important;
        background: none !important;
        padding-top: 10px !important;
        height: 40px !important;

    }

    .onlymobileheader {
        display: none;
        margin-bottom: 55px;
        clear: both !important;
    }


    @media screen and (max-width: 768px) {
        .film-hero {
            background-size: contain;
            padding: 110px 0 0;
            height: 250px;
        }

        .film-hero .content-box {
            border-bottom: 1px solid #e4e4e4;
            padding: 10px 0 50px;
        }

        .lead {
            font-size: 1.5em !important;
            padding: 25px 50px;
        }

        .text-center-mobile {
            text-align: center;
        }

        .xs-mtb-25 {
            margin-top: 25px;
            margin-bottom: 25px;
        }
    }

    @media only screen and (min-width: 600px) {

        .onlymobileheader {
            display: none;
        }

        .banner {
            display: block;
        }
    }

    body {
        position: static !important;
    }

    footer {
        position: relative !important;
        display: none;
    }
</style>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('components/page', 'header'); ?>
    <div class="container-fluid film-hero">
        <div class="row">
            <div class="col-md-4 col-md-offset-6 text-center content-box">
                <h2 class="text-center">SoCal mountain lodge/camp/resort now available for filming! </h2>
                <p class="text-center">The UCLA Lake Arrowhead Lodge is ready for its close-up.</p>
                <p class="text-center"><a href="#cta" class="rfpbutton">Filming Request Form</a></p>
            </div>
        </div>
    </div>
    <div class="container mt-50">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center mtb-50">
                <h1>The UCLA Lake Arrowhead Lodge is ideal for any film or photo shoot.</h1>
                <h2>52 ACRES OF FORESTED LAKESIDE SCENERY WITH HISTORIC STRUCTURES, LODGING AND DINING JUST 90 MINUTES FROM DOWNTOWN L.A.</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid map-background">
        <div class="row white-screen">
            <div class="col-md-6 col-md-offset-3 ptb-50 mtb-50 ">
                <p class="lead text-center">Come to the San Bernardino National Forest to discover an extraordinary mountaintop setting to put your stories and characters in motion. The Lake Arrowhead Lodge is an exciting and convenient setting for your next production.</p>
            </div>
        </div>
    </div>
    <!-- section below is actually hooked up to ACF and can be edited via the backend -->
    <div class="container">
        <div class="row mt-50">
            <div class="col-md-5 col-md-push-6 pt-50">
                <?php if (get_field('right_column_photo')) : ?>
                    <img src="<?php the_field('right_column_photo'); ?>" class="img-responsive"><?php endif; ?>
                <?php if (get_field('captionyes')) : ?>
                    <p><?php
                        $caption = get_field('caption');
                        echo do_shortcode('[caption]' . $caption . '[/caption]'); ?>
                    </p>
                <?php endif; ?>
                
            </div>
            <div class="col-md-4 col-md-pull-3">
                <div class="col-xs-12 xs-mtb-25">
                    <h2 class="text-center-mobile"><?php the_field('bullet_one'); ?></h2>
                    <?php if (get_field('bullet_one_desc')) : ?>
                        <p class="text-center-mobile"><?php the_field('bullet_one_desc'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 xs-mtb-25">
                    <?php if (get_field('bullet_two')) : ?>
                        <h2 class="text-center-mobile"><?php the_field('bullet_two'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_field('bullet_two_desc')) : ?>
                        <p class="text-center-mobile"><?php the_field('bullet_two_desc'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 xs-mtb-25">
                    <?php if (get_field('bullet_three')) : ?>
                        <h2 class="text-center-mobile"><?php the_field('bullet_three'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_field('bullet_three_desc')) : ?>
                        <p class="text-center-mobile"><?php the_field('bullet_three_desc'); ?></p>
                    <?php endif; ?>
                    <p class="text-center"><a class="rfpbutton" href="#cta">Filming Request Form</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- end ACF editible section -->
    </div>
    <!-- Icon features -->
    <div class="container-fluid ptb-50 mtb-80" style="background: #1C4D71;">
        <div class="container value-props">
            <div class="row">
                <div class="col-md-4 text-center plr-25">
                    <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/Location_icon.png">
                    <h2 class="reverse">CONVENIENT ACCESS</h2>
                    <p class="reverse">Unwind on your downtime, with comfortable cottages and condolets that can accomodate families of various sizes.</p>
                </div>
                <div class="col-md-4 text-center plr-25">
                    <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/Scenery_icon.png">
                    <h2 class="reverse">SPECTACULAR SURROUNDINGS</h2>
                    <p class="reverse">Our extraordinary team of chefs is ready to provide you with meals as memorable as the experience of staying at the lodge itself.</p>
                </div>
                <div class="col-md-4 text-center plr-25">
                    <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/Dining_icon.png">
                    <h2 class="reverse">ON-SITE FOOD & LODGING</h2>
                    <p class="reverse">We offer a quiet environment where you can work and your children can study. Enjoy views of the lake or the scenic mountains while you work.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row mtb-80">
            <div class="col-md-6">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Lodging.jpg" class="img-responsive">
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h2>On-Site Lodging & Dining</h2>
                <h3>Ensure the comfort of your cast & crew</h3>
                <p>As a working lodge, we can accommodate your cast and crew in 82 comfortable and unique guest rooms. From cozy chalets to private cottages and guest houses, we have the space your team needs. Meal breaks will please one and all, as we serve deliciously innovative cuisine from our award-winning kitchen.</p>
                <p>
                    <a class="button" href="/stay-at-ucla-lake-arrowhead-conference-center/">Learn More about our Property</a>
                </p>
            </div>

        </div>
        <div class="row mtb-80">
            <div class="col-md-5">
                <h2>One Location, Many Settings</h2>
                <h3>EXPERIENCE AN OUTDOOR WONDERLAND AND HISTORIC LODGE JUST 90 MINUTES FROM LOS ANGELES</h3>
                <p>Save your travel budget by considering a flexible outdoor shooting location within driving distance of Hollywood. With 52 acres of property for your exclusive use, you're sure to find the perfect backdrop to your story.</p>

                <div class="panel-group wrap" id="bs-collapse">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#loc_opp">Location opportunities</a> </h4>
                        </div>
                        <div id="loc_opp" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul style="list-style-type: square !important;">
                                    <li style="list-style-type: square !important;">Forest and deep woods</li>
                                    <li style="list-style-type: square !important;">Thin woods and wooded clearings</li>
                                    <li style="list-style-type: square !important;">Natural lakeside and docks</li>
                                    <li style="list-style-type: square !important;">Manicured lawns and landscaping</li>
                                    <li style="list-style-type: square !important;">Woodsy cabins</li>
                                    <li style="list-style-type: square !important;">Western/frontier structures</li>
                                    <li style="list-style-type: square !important;">Vintage tavern</li>
                                    <li style="list-style-type: square !important;">Historic lodge</li>
                                    <li style="list-style-type: square !important;">Elegant dining room/country club</li>
                                    <li style="list-style-type: square !important;">Professional offices and conference rooms</li>
                                    <li style="list-style-type: square !important;">Outdoor amphitheater, ropes course, tree house</li>
                                    <li style="list-style-type: square !important;">Swimming pool, hot tub, athletic courts, baseball field</li>
                                    <li style="list-style-type: square !important;">Hotel-style rooms, private homes, cozy cottages</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#benefits">Unique Benefits of Filming at the Lodge</a> </h4>
                        </div>
                        <div id="benefits" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul style="list-style-type: square !important;">
                                    <li style="list-style-type: square !important;">Convenient space for staging base camp that won't interfere with principal photography</li>
                                    <li style="list-style-type: square !important;">Full control over her entire 52-acres during shooting</li>
                                    <li style="list-style-type: square !important;">World-class in-house catering</li>
                                    <li style="list-style-type: square !important;">Overnight accommodations to sleep cast and crew from 10-200</li>
                                    <li style="list-style-type: square !important;">Free Wi-fi throughout the property</li>
                                    <li style="list-style-type: square !important;">10 meeting rooms with high ceilings and lots of natural light (10,000 square feet total. Largest room is 1,512 square feet)</li>
                                    <li style="list-style-type: square !important;">Dedicated on-site liaison who has experience working with film and television industry professionals</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Winter.jpg" alt="Lake Arrowhead Southern California Filming Locations" class="img-responsive mb-50">
                <p class="text-center"><a class="rfpbutton" href="#cta">Filming Request Form</a></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Much more to explore</h2>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img alt="Lake Arrowhead Lodge and Hotel Accommodations" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Gallery_Cottages.jpg" class="img-responsive">
                <h3>COTTAGES & CHALETS</h3>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img alt="Lake Arrowhead Lodge is a great home base for Adventure Travel" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Gallery_ForestWilderness.jpg" class="img-responsive">
                <h3>FOREST & WILDERNESS</h3>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img alt="Guests enjoy stunning views at Lake Arrowhead Lodge" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Gallery_Lakeside.jpg" class="img-responsive">
                <h3>LAKESIDE PROPERTY</h3>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img alt="Lake Arrowhead Lodge is an award-winning dining destination" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Gallery_MainLodge.jpg" class="img-responsive">
                <h3>FULLY-FUNCTIONING LODGE</h3>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img alt="Book an Adventure here at the Lake Arrowhead Lodge" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Gallery_RopesCourse2.jpg" class="img-responsive">
                <h3>ROPES COURSE</h3>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/ZEN2.jpg" class="img-responsive">
                <h3>VISTA POINTS</h3>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Gallery_SwimmingPool.jpg" class="img-responsive">
                <h3>SWIMMING POOL</h3>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Gallery_Treehouse.jpg" class="img-responsive">
                <h3>TREEHOUSE</h3>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/DININGROOM2.jpg" class="img-responsive">
                <h3>DINING ROOM</h3>
            </div>
            <div class="col-md-6 mtb-25 ptb-25 text-center">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/TAVERN2.jpg" class="img-responsive">
                <h3>TAVERN</h3>
            </div>
        </div>

        <div class="row mtb-50 ptb-25">
            <div class="col-md-12 text-center">
                <h2>more attractions for your team to enjoy</h2>
            </div>
            <div class="col-md-4">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_ResortRooms.jpg" class="img-responsive">
                <h3><a href="/stay-at-ucla-lake-arrowhead-conference-center/">Resort amenities</a></h3>
                <p>Enjoy a resort experience while you work. Take five in a cozy chalet with deck and fireplace; relax and socialize in our charming Main Lodge; enjoy award-winning dining.</p>
            </div>
            <div class="col-md-4">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Recreation.jpg" class="img-responsive">
                <h3><a href="/recreation/" target="_blank">On-site recreation</a></h3>
                <p>We have a 24-hour fitness center, swimming pool, indoor hot tub, ropes course, tennis, pickleball and basketball courts — and much more — to stay active on set.</p>
            </div>
            <div class="col-md-4">
                <img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2021/01/LAL_Film_Outdoors.jpg" class="img-responsive">
                <h3><a href="https://lakearrowheadconferencecenter.ucla.edu/gallery/" target="_blank">The outdoors is all yours</a></h3>
                <p>Embark on a hike or mountain bike excursion directly from our property. Easily walk to our landmark Zen Deck, a popular spot for yoga and meditation, or brainstorm lakeside.</p>
            </div>
        </div>
    </div>
    <div style="background: #6a4426;" class="container-fluid" id="cta">
        <div class="row mtb-50 ptb-50" id="contactus">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="text-center reverse mb-50">Contact us to arrange a visit or learn more about staging your next production at Lake Arrowhead Lodge!</h2>
                <p class="text-center mt-50"><a class="rfpbutton-reverse" href="/film/filming-request-form/">Filming Request Form</a></p>
            </div>
        </div>
    </div>
<?php endwhile; ?>