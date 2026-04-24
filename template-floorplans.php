<?php
/**
 * Template Name: Floorplans - Page Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/components-subheader');?>
<?php get_template_part('templates/components-two-goldbuttons');?>
<div class="container"><div class="divider-border"></div></div>
<?php get_template_part('templates/components-five-seven-img-col');?>


<?php endwhile; ?>

