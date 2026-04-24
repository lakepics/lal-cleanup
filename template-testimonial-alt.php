
<?php
/**
 * Template Name: Testimonials - Alt -  Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
<?php get_template_part('components/components-testimonial');?>

<?php endwhile; ?>

