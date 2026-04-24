<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php /* no title so commenting this out get_template_part('components/page', 'header'); */ ?>
<?php get_template_part('components/component', 'slides'); ?>
<?php get_template_part('components/component', 'quick-link'); ?>
<div class="home-content">
    <div class="content-wrapper">
        <div class="col-md-8 left-column">
            <?php echo '<h2>' . get_field('left_column_header') . '</h2>';
                echo get_field('left_column_content');
            ?>
        </div>
        <div class="col-md-4 right-column">
            <?php echo '<img class="img-responsive" src="' . get_field('right_column_image') . '"/>';
              echo '<h2>' . get_field('right_column_heading') . '</h2>';
              echo get_field('right_column_content');
            cool?>
        </div>
    </div>
</div>

<?php endwhile; ?>
