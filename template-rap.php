<?php
/**
 * Template Name: RAP Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>

<div class="container">
<div class="row">
    <div class="col-md-12">

        <?php

gravity_form( 2, false, false, false, '', false );

?>

    </div></div></div>

<?php endwhile; ?>
