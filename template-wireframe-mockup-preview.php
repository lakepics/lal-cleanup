<?php
/**
 * Template Name: Wireframe Mockup Preview
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'components/components', 'wireframe-mockup-preview' ); ?>
<?php endwhile; ?>