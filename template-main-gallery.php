<?php
/**
 * Template Name: Gallery Main Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/component-gallery');?>

<?php endwhile; ?>
