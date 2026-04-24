<?php
/**
 * Template Name: Mainpage - Full 2 btn
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-two-goldbuttons');?>
<?php get_template_part('components/components-grid-nav-squares');?>

<?php endwhile; ?>