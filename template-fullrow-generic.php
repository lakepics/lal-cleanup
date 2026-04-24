<?php
/**
 * Template Name: Generic Fullrow with Heading - template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
<?php endwhile; ?>
