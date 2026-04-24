<?php
/**
 * Template Name: Jobs
 */
?>

<?php while (have_posts()) : the_post(); ?>


<?php get_template_part('components/_subheader');?>


<div class="container">
        <div class="row">

<div class="col-md-12">
<?php the_content();?>
    </div>
    </div>
    </div>

<?php endwhile; ?>
