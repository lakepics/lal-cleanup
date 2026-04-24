<?php
/**
 * Template Name: Audio Visual - Page Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('components/_subheader'); ?>
    <?php get_template_part('components/_fullrow__content');?>
    <div class="container">
        <div class="row">
            <?php get_template_part('components/components-card-repeater'); ?>
        </div>
    </div>
    <!-- end of container -->
<?php endwhile; ?>