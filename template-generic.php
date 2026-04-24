
<?php
/**
 * Template Name: Generic Empty -  Template
 */
?>
<style>
     .hero {
        max-height: 500px;
        overflow: hidden;
    }

    .hero img {
        width: 100%;
    }

    .hero::before {
        background-color: transparent;
    }
</style>
<?php while (have_posts()) : the_post(); ?>
<div class="hero">
        <?php
        $image = get_field('hero_image');
        if ($image) :
            // Image variables.
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $description = $image['description'];
            // Begin caption wrap.
            if ($caption) : ?>
                <div class="wp-caption">
                <?php endif; ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php
                // End caption wrap.
                if ($caption) : ?>
                    <p class="wp-caption-text"><?php echo esc_html($description); ?></p>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>

<?php endwhile; ?>

