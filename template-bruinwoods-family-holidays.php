<?php
/**
 * Template Name: BW — Family Holidays
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
    <div class="row" style="display: block; padding: 20px 25px 30px; background: rgb(246, 243, 237);">
        <div class="upcoming-info">
           <div class="col-md-12" style="padding-bottom: 10px;"><h3><?php echo get_field('family_holiday_info_header'); ?></h3></div>
           <div class="col-md-6"><?php echo get_field('family_holiday_info'); ?></div>
           <div class="col-md-6"><?php echo get_field('family_holiday_info_buttons'); ?></div>         
        </div>
    </div>   
</div>

<?php endwhile; ?>
