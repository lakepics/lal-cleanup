<?php 

    // check for rows (parent repeater)
    if( have_rows('listboxes') ): ?>
        <div class="list-boxes">
            <div class="container">
    <?php 

    // loop through rows (parent repeater)
    while( have_rows('listboxes') ): the_row(); ?>
        <div class="main-heading"><?php the_sub_field('main-heading'); ?></div>
    <?php 

    // check for rows (sub repeater)
    if( have_rows('rows') ): ?>
    <?php 

    // loop through rows (sub repeater)
    while( have_rows('rows') ): the_row();

    // display each item as a list - with a class of completed ( if completed )
    ?>                              
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_sub_field('heading'); ?></h3>
                        <p><?php the_sub_field('paragraph'); ?></p>
                    </div>
                </div>

        <?php endwhile; ?>
        <?php endif; //if( get_sub_field('items') ): ?>
        <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
        <?php endif; // if( get_field('to-do_lists') ): ?>
            </div><!-- #content -->
        </div><!-- #primary -->



