<?php
/**
 * Template Name: Sales Kit - Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-two-goldbuttons');?>
<div class="container"><div class="divider-border"></div></div>

<?php endwhile; ?>

