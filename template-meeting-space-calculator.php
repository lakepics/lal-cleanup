
<?php
/**
 * Template Name: Meeting Space Calculator - Page Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-meeting-space-calculator');?>


<?php endwhile; ?>

