<?php
/**
 * Template Name: Landing Page Template
 */
?>
<?php while ( have_posts() ) : the_post(); ?>

    <style>
    .section-video-hero,
    .section-video-hero *,
    .section-card-grid,
    .section-card-grid *,
    .section-image-scroller,
    .section-image-scroller *,
    .section-split-media,
    .section-split-media *,
    .section-faq-accordion,
    .section-faq-accordion *,
    .section-split-collage,
    .section-split-collage * {
        -webkit-hyphens: none;
        hyphens: none;
    }
    </style>

    <?php get_template_part( 'components/components-background-video' ); ?>

    <?php if ( have_rows( 'page_sections' ) ) : ?>
        <?php while ( have_rows( 'page_sections' ) ) : the_row(); ?>
            <?php $current_layout = get_row_layout(); ?>
            <?php if ( 'section_video_hero' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-video-hero' ); ?>
            <?php elseif ( 'section_card_grid' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-card-grid' ); ?>
            <?php elseif ( 'section_image_scroller' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-image-scroller' ); ?>
            <?php elseif ( 'section_split_media' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-split-media' ); ?>
            <?php elseif ( 'section_faq_accordion' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-faq-accordion' ); ?>
            <?php elseif ( 'section_split_collage' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-split-collage' ); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

<?php endwhile; ?>