<?php
/**
 * Template Name: Family Holidays Final Details & Waiver Form
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<div class="container">
<div class="col-md-12">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>

