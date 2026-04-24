<?php

/**
 * Template Name: Main Dining Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('components/component-hero'); ?>
    <?php get_template_part('components/components-card-repeater'); ?>

    <!-- <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="row">
        <div class="col-md-12" style="margin-bottom: 48px;"><h2 class="text-center">In the Mood for World-Class Food?</h2></div>
            <div class="col-md-6" style="margin-bottom: 50px;">
                
               <?php the_content(); ?>
                                
            </div>
    
            <div class="col-md-6" >
              <?php  get_template_part('components/_menu_calendar');  ?>
            </div>
        </div> -->



    <?php /* get_template_part('components/component-inline-carousel'); */ ?>

<?php endwhile; ?>