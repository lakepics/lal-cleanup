
<?php
/**
 * Template Name: Testimonials -  Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
    <div class="container">
        <div class="single-divider-border"></div>
    </div>
<?php get_template_part('components/components-testimonial');?>

<?php endwhile; ?>

