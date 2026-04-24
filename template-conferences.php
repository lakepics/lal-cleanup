
<?php
/**
 * Template Name: Conferences - Page Template
 */
?><?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>

<?php get_template_part('components/full-col-3-5-4');?>


<?php endwhile; ?>

