<?php
/**
 * Template Name: Mainpage - Fullwidth content
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
<?php get_template_part('components/components-grid-nav-squares');?>

<?php endwhile; ?>