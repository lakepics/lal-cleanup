<?php
/**
 * Template Name: Planner Toolkit - Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
<?php get_template_part('components/components-4-col-grid');?>
<?php endwhile; ?>
