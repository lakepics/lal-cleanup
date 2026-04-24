<?php
/**
* Template Name: 84 Two Column Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
    <div class="content-wrapper">
        <div class="col-md-8 col-xs-12">
            <?php echo get_field('left_column'); ?>
        </div>
        <div class="col-md-4 col-xs-12">
            <?php echo get_field('right_column'); ?>
        </div>
    </div>
<?php endwhile; ?>
