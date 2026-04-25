<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>
    <header class="navbar-static-top" role="banner">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="container">
                    <div class="col-md-4">
                        <div class="row">
                            <a href="<?= esc_url(home_url('/')); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/dist/images/logo_top.svg" alt="<?php bloginfo('name'); ?>"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-5">
                        <a href="#">
                            <div class="rfp-button">
                                <div class="rfp">
                                    <p class="rfp-text">Submit an RFP Online<i id="space" class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/images/logo_top.svg" alt="<?php bloginfo('name'); ?>"></a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav container">
                        <li class="dropdown">
                            <a href="meetings.html" class="dropdown-toggle">Meetings</a>
                            <ul class="dropdown-menu">
                                <li><a href="meetings.html">Complete Meeting Package(CMP)</a></li>
                                <li><a href="#">Capacity Chart</a></li>
                                <li><a href="#">Floorplans</a></li>
                                <li><a href="#">Audio Visual</a></li>
                                <li><a href="#">Conference PLanner Toolkit</a></li>
                                <li><a href="#">Meeting Space Calculator</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Accommodations</a>
                            <ul class="dropdown-menu">
                                <li><a href="accommodations.html">Guest Room Types</a></li>
                                <li><a href="#">Guest Room Floor Plans</a></li>
                                <li><a href="#">On-Site Amenities</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Recreation</a>
                            <ul class="dropdown-menu">
                                <li><a href="team-building.html">Team Building</a></li>
                                <li><a href="leisure.html">Leisure</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Dining</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Culinary Experience</a></li>
                                <li><a href="#">Menus</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Photo Gallery</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Specials</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Conferences</a></li>
                                <li><a href="#">Getaways</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Bruin Woods</a>
                            <ul class="dropdown-menu">
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Sales Kit</a></li>
                                <li><a href="#">Virtual Tour</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Directions</a></li>
                                <li><a href="#">Sustainability Efforts</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>