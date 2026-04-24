
<?php
/**
 * Template Name: Getaways2
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-bullet-list-header');?>
<?php get_template_part('components/components-full-img-col-7-5');?>
 <?php get_template_part('components/full-img-col-6-6'); ?>
 <?php get_template_part('components/components-full-width-row');?>
 <?php get_template_part('components/components-tablepress-id2');?>


<?php endwhile; ?>

