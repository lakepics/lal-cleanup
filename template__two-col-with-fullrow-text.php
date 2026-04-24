<?php
/**
 * Template Name: Two-Col-Img_Fullrow_text - Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
<?php get_template_part('components/_two-col-img');?>



<?php endwhile; ?>
