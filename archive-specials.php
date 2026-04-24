<?php
/*
Template Name: General Specials Archive
Template Post Type: general
*/
?>

<style>
    .pt-25 {
        padding-top: 25px;
    }

    .pb-25 {
        padding-bottom: 25px;
    }
</style>

<div class="header__heading">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <h1 class="header__heading--subheading">Specials</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">

        <?php
        $loop = $query = new WP_Query(array('post_type' => 'general'));
        if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="row pt-25 pb-25">
                <div class="col-md-4">
                    <img class="img-responsive" src="<?php the_field('image'); ?>">
                </div>

                <div class="col-md-8">
                    <h2> <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                    <h3><?php the_field('subheading'); ?></h3>

                    <p><?php the_excerpt(); ?></p>
                    <div class="master-blue-button">
                        <div class="master-blue-button-text"></div>
                        <a href="<?php the_permalink(); ?>" class="button">See Special</a>
                    </div>
                </div>
    </div>
    <?php endwhile;
            if ($loop->max_num_pages > 1) : ?>

    </div>
    <div id="nav-below" class="navigation">
        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Previous', 'domain')); ?></div>
        <div class="nav-next"><?php previous_posts_link(__('Next <span class="meta-nav">&rarr;</span>', 'domain')); ?></div>
    </div>
<?php endif;
        endif;
        wp_reset_postdata();
?>

