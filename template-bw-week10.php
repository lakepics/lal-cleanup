<?php
/**
 * Template Name: BW: Week 10 Package
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/bw-week10');?>

<?php endwhile; ?>

