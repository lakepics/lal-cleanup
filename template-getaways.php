
<?php
/**
 * Template Name: Getaways
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php the_content();?>


<?php endwhile; ?>

