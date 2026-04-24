<?php
/**
 * Template Name: Things to Know - Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow_content_with_heading');?>

<?php endwhile; ?>
