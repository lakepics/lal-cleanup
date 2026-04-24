<?php
/**
 * Template Name: Accommodations Room Types Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-one-goldbutton');?>
<div class="container">
    <div class="single-divider-border"></div>
</div>
<?php get_template_part('components/components-two-col-lists');?>
<?php get_template_part('components/components-two-img-col-roomtypes');?>

<?php endwhile; ?>
