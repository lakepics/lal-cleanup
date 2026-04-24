<?php
/**
 * Template Name: Landing Page Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('components/components-background-video');?>
    <?php //get_template_part('components/components-slides');?>
    <?php // get_template_part('components/components-awards');?>
    <?php get_template_part('components/component-featured-article');?>
    <?php get_template_part('components/components-headings');?>
    <?php get_template_part('components/components-quicklinks');?>
    <?php get_template_part('components/components-gallery-toprow');?>
    <?php get_template_part('components/components-gallery-bottomrow');?>
    <?php get_template_part('components/components-amenities-toprow');?>
    <?php get_template_part('components/components-amenities-bottomrow');?>
<?php endwhile; ?>