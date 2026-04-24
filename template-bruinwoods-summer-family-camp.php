<?php
/**
 * Template Name: BW — Summer Family Camp
 */
?>

<?php while (have_posts()) : the_post(); ?>


<?php get_template_part('components/_subheader');?>

<div class="container bruin-woods">
    <div class="row">
        <div class="col-md-6">
            <?php
            if (the_field('left_column')) {
                echo get_field('left_column');
            }
            ?>
        </div>
        <div class="col-md-6">
            <?php
            if (the_field('right_column')) {
                echo get_field('right_column');
            }
            ?>
        </div>
    </div>
</div>
            <div class="container">
        <div class="single-divider-border"></div>
    </div>
    <div class="container">
        <div class="row">

<div class="col-md-12">
<h3 class="zero-margin-top">Eligibility Requirements</h3>
<ul>
<li>Weeks 1–8 are limited to enrollment by UCLA alumnus/alumna or current faculty or staff of UCLA only. UCLA alumnus/alumna or current UCLA faculty or staff are welcome to attend any of the ten weeks.</li>
<li style="margin-top: 5px;"><strong>Weeks 9–10 are open to all UC system alumni or current UC system staff or faculty</strong> from any of the nine affiliated campuses.
<ul style="margin-bottom: 0px; margin-top: 5px;">
<li>One person per sleeping room must be a UC system alumnus/alumna or current UC system staff or faculty.</li>
<li>UC affiliates are grandfathered into their spot for their chosen week (9 or 10) but may not move to Weeks 1–8.</li>
</ul>
</li>
<li>By applying to attend Bruin Woods, attendees agree to accept the eligibility conditions of the program.</li>
</ul>
    </div>
    </div>
    </div>

<?php endwhile; ?>
