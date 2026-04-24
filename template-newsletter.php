<?php
/**
 * Template Name: Email Newsletter Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>

<?php get_template_part('components/newsletter-fullrow-content');?>
<?php endwhile; ?>
