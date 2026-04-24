<?php
/**
 * Template Name: Mainpage - Bullet List
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__bullets-list');?>
<?php get_template_part('components/components-grid-nav-squares');?>

<?php endwhile; ?>
