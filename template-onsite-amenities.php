
<?php
/**
 * Template Name: On-Site Amenities - Page Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>


<?php get_template_part('components/components-onsite-amenities');?>
<?php get_template_part('components/components-one-col-img-buttons');?>


<?php endwhile; ?>

