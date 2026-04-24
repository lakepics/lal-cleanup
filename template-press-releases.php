<?php
/**
 * Template Name: Press Release Template
 */
?>
 
<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
<?php 
$rows = get_field('press_releases');
if( $rows ) {
    echo '<div class="container"><div class="col-md-12"><ul class="press-release-list">';
    foreach( $rows as $row ) {
        $date = $row['press_release_date'];
        $title = $row['press_release_title'];
        $link = $row['press_release_link'];
        echo '<li>';
            echo $date . ' &mdash; ';
            echo '<a href="' . $link . '">' . $title . '</a>';
        echo '</li>';
    }
    echo '</ul></div></div>';
}
?>
<style>
    .press-release-list li {
        list-style: none;
        border-bottom: 1px solid #e1e1e1;
        margin: 10px auto;
    }
    .press-release-list li:last-of-type {
        border-bottom: none;
    }
</style>
<?php endwhile; ?>
