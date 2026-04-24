<?php
/**
 * Template Name: VideoTour - Template
 */
?>
 
<?php while (have_posts()) : the_post(); ?>

<div class="header__heading">
    <div class="container">
        <h1 class="header__heading--subheading">Video Tour</h1>
    </div>
    </div>
    <div class="subheader-title">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h2 class="header__heading--text">Watch a Video Tour of Our Property</h2>
            <iframe width="100%" height="720" src="https://www.youtube.com/embed/cC8HWB7q7lY?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            </div>
        </div>
    </div>
    </div>

            <?php endwhile; ?>
