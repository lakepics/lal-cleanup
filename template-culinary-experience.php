
<?php
/**
 * Template Name: Culinary Experience - Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-two-goldbuttons');?>
<?php get_template_part('components/components-two-col-lists');?>
<?php get_template_part('components/menu-items');?>

    <div class="container">
        <div class="divider-border"></div>
    </div>

<?php endwhile; ?>

