<style>
    .pt-25 {
        padding-top: 25px;
    }
    .pb-25 {
        padding-bottom: 25px;
    }
    .offer-details {
        margin-bottom: 1em;
    }
    .offer-button {
        display: inline-block;
        margin: 16px auto;
        margin-top: 0;
        padding: 5px 15px;
        font-size: 16px;
        font-weight: bold;
        border: 2px solid #6a4426;
        color: #6a4426;
        transition: all .25s ease-in-out;
    }
    .offer-button:hover {
        background: #6a4426;
        color: #ffffff;
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
        echo '<div class="row pt-25">';
        while ($loop->have_posts()) : $loop->the_post(); ?>
            <?php $image = get_field('image'); ?>
            <div class="col-md-5 pb-25">
                <img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <div style="padding: .5em 2em; border: 1px solid #cdcdcd;">
                    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                    <h3><?php the_field('subheading'); ?></h3>

                    <p class="offer-details"><?php the_excerpt(); ?></p>

                    <a href="<?php the_permalink(); ?>" class="offer-button">Book Now</a>

                </div>
            </div>

        <?php endwhile;
        echo '</div>';
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