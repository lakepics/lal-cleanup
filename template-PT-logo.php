<?php
/**
 * Template Name: PT - Logo - Page Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
<style>
    .logo {
        max-height: 100px;
        padding-right: 50px;
    }
    .logo-section {
        padding-bottom: 50px;
    }
</style>
<?php get_template_part('components/_subheader');?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h2><?php echo get_field('overview_heading'); ?></h2>
            <?php echo get_field('overview_content'); ?>
        </div>
    </div>
        <?php
                if( have_rows('logo_sections') ): ?>
                    <div class="row">
                        <div class="col-md-12"><h2>Logos</h2></div>
                    </div>
                    <?php
                    // loop through rows (parent repeater)
                    while( have_rows('logo_sections') ): the_row(); ?>
                    <div class="row">
                       <div class="col-md-12">
                            <h3><?php the_sub_field('heading'); ?></h3>
                        </div>
                    </div>
                    <div class="row logo-section">
                            <?php 
                            // check for rows (sub repeater)
                            if( have_rows('logos') ): ?>
                                <?php 
                                // loop through rows (sub repeater)
                                while( have_rows('logos') ): the_row();
                                    // display each item as a list - with a class of completed ( if completed )
                                    $image = get_sub_field('image'); ?>
                                    <div class="col-md-4"><?php if ( $image ) { echo '<a href="' . $image['link'] . '"><img class="img-responsive logo" src="' . $image['url'] . '" alt="' . $image['alt'] . '"></a>'; } ?></div>
                                <?php endwhile; ?>
                            <?php endif; //if( get_sub_field('logo_sections') ): ?>
                        </div>    

                    <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
                    </div>
                <?php endif; // if( get_field('to-do_lists') ): ?>
            <?php endwhile; // end of the loop. ?>
    </div>
</div>


