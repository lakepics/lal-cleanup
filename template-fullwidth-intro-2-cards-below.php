<?php
/**
 * Template Name: Fullwidth Intro with 2 Column Cards Below
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
<?php get_template_part('components/components-card-repeater');?>

<?php endwhile; ?>