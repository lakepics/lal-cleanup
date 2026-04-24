<?php

/**
 * Template Name: LAL Family Holidays
 */
?>
<style>
    /* Hide the book button on this page */
    li#menu-item-4294{
        display:none;
    }
    b {
        font-weight: 700;
    }

    .waitlist {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #6383a8;
        max-width: 45em;
        margin-left: auto;
        margin-right: auto;
    }

    .border-bottom {
        padding-bottom: 50px;
        border-bottom: 1px solid #cccccc;
    }

    .pt-3 {
        padding-top: 30px;
    }

    .pt-5 {
        padding-top: 50px;
    }

    .btn--blue {
        border: 1px solid #6383a8;
        background-color: #FFFFFF;
        padding: 10px 15px;
        font-size: 16px;
        transition: all .5s ease-in-out;
    }

    .btn--blue:hover {
        color: #ffffff;
        background-color: #6383a8;
        font-size: 16px;
    }

    .apply {
        display: flex;
        flex: auto;
        justify-content: space-around;
    }

    .btn--apply {}
</style>
<?php while (have_posts()) : the_post(); ?>


    <?php get_template_part('components/_subheader'); ?>

    <div class="container">
        <div class="row border-bottom">
            <div class="col-md-5">
                <?php
                if (the_field('left_column')) {
                    echo get_field('left_column');
                }
                ?>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <?php
                if (the_field('right_column')) {
                    echo get_field('right_column');
                }
                ?>
            </div>
        </div>
        <div class="row pt-3">
            <?php $how_to_book = get_field('how_to_book');
            if ($how_to_book) {
                echo '<div class="col-md-12"><h2>';
                echo $how_to_book['heading'];
                echo '</h2></div>';
            } ?>
        </div>
        <div class="row border-bottom">
            <?php
            $columns = $how_to_book['columns'];
            foreach ($columns as $column) {
                $width = $column['width'];
                $offset = $column['offset'];
                $content = $column['column'];
            echo '<div class="col-md-' . $width;
                    if ($offset) {
                        echo ' col-md-offset-' . $offset;
                    }
                    echo '">' . $content . '</div>';
                }
            ?>
        </div>

        <?php
        if (have_rows('family_holiday_section')) :
            while (have_rows('family_holiday_section')) : the_row();
                $visibility = get_sub_field("show");

                if ($visibility) {
                    $image = get_sub_field('holiday_image');
                    $waitlist = get_sub_field('waitlist_message');
                    echo '<div class="row pt-5">
            <div class="col-md-5"><img class="img-responsive" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '"></div>
            <div class="col-md-7">';
                    // Holiday Basic Info - title, dates, arrival & departure
                    echo '<h2>' . get_sub_field('holiday_name') . '</h2>';
                    echo '<h3>' . get_sub_field('holiday_dates') . '</h3>
            <p><b>Arrive:</b> ' . get_sub_field('arrival') . ' &nbsp; &nbsp; <b>Depart:</b> ' . get_sub_field('departure') . '</p>';
                    if ($waitlist) { echo '<p>' . $waitlist . '</p>'; }
                    echo '<div class="row" style="display: flex;">';
                    if (get_sub_field('rates_url')) {
                        echo '<div class="apply pt-3"><a class="btn--blue btn--apply" href="' . get_sub_field('rates_url') . '">' . get_sub_field('rates_label') . '</a></div>';
                    }
                    if (get_sub_field('program_schedule_url')) {
                        echo '<div class="apply pt-3"><a class="btn--blue btn--apply" href="' . get_sub_field('program_schedule_url') . '">' . get_sub_field('program_schedule_label') . '</a></div>';
                    }
                    if (get_sub_field('sample_menu_url')) {
                        echo '<div class="apply pt-3"><a class="btn--blue btn--apply" href="' . get_sub_field('sample_menu_url') . '">' . get_sub_field('sample_menu_label') . '</a></div>';
                    }
                    echo '</div>';
                    if (get_sub_field('booking_button_label')) {
                        echo '<div class="apply pt-3"><a class="btn--blue btn--apply" href="' . get_sub_field('booking_button_url') . '">' . get_sub_field('booking_button_label') . '</a></div>';
                    }
                    echo '</div>';
                    echo '</div>';
                    if (get_sub_field('holiday_full')) {
                        echo '<div class="row border-bottom pt-3"><div class="col-md-12"><!-- <div class="waitlist">' . get_sub_field('waitlist_message') . '</div> --></div></div>';
                    } 
      
                }
            endwhile;
        else :
        // no rows found
        endif; ?>
<div class="row">
<div class="col-md-12"><?php the_content(); ?></div>
</div>

    </div>
    </div>

<?php endwhile; ?>