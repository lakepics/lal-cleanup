<?php
/**
 * Template Name: Bruin Woods Gallery Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<span class="bruin-woods">
<?php get_template_part('components/component-gallery');?>
</span>

<?php endwhile; ?>
