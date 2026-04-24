<?php

/**
 * Template Name: Directions Revised - Template
 */
?>
<style>
    .transportation-services,
    .large-vehicles,
    .route-table {
        margin-top: 60px;
    }
    .transportation-services .card {
        margin-bottom: 24px;
    }
    .card h3 {
        border-top: 1px solid #CCCCCC;
        padding-top: 16px;
        font-size: 1.25em;
    }
    .transportation-services p {
        margin-bottom: .5em;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th {
        text-align: left;
        padding: 8px;
        background-color: #6a4426 !important;
        color: #fff !important;
        font-weight: 400 !important;
        text-align: center !important;
        width: 300px !important;
        font-size: 16px !important;
    }
    th.column-4 {
        max-width: 6ch;
    }
    th.column-5 {
        max-width: 11ch;
    }
    td {
        text-align: left;
        padding: 8px;
    }
    td.column-6 {
        width: 29%;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .clearfix {
        clear: both;
    }
</style>
<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('components/_subheader'); ?>
    <?php get_template_part('components/full-col-img-6-6'); ?>
    <?php get_template_part('components/4-col-trans-cards'); ?>

<?php endwhile; ?>