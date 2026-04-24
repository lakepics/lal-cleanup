<?php
/**
 * Template Name: Menu - Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/components-subheader');?>
<?php get_template_part('components/components-gold-buttons-header');?>
<?php get_template_part('components/components-menu');?>

<?php endwhile; ?>
