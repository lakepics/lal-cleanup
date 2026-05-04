<?php
/**
 * Template Name: Flexible Builder Reference
 */

while ( have_posts() ) : the_post();
    ?>

    <style>
    .builder-reference-hero {
        padding: 72px 0 44px;
        background: linear-gradient(180deg, rgba(246,243,237,0.92), rgba(255,255,255,0.98));
        border-bottom: 1px solid rgba(81,83,74,0.12);
    }

    .builder-reference-hero__eyebrow {
        display: inline-block;
        margin-bottom: 14px;
        color: #946e29;
        font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .16em;
        text-transform: uppercase;
    }

    .builder-reference-hero h1 {
        margin: 0 0 16px;
        color: #51534a;
        font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
        font-size: clamp(40px, 5vw, 70px);
        font-weight: 400;
        line-height: 1;
        text-transform: uppercase;
    }

    .builder-reference-hero p,
    .builder-reference-hero li {
        color: #51534a;
        font-size: 16px;
        line-height: 1.65;
    }

    .builder-reference-nav {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 26px;
    }

    .builder-reference-nav a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 14px;
        border: 1px solid rgba(81,83,74,0.18);
        color: #51534a;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .08em;
        text-decoration: none;
        text-transform: uppercase;
    }
    </style>

    <section class="builder-reference-hero">
        <div class="container">
            <span class="builder-reference-hero__eyebrow">Flexible Builder Inventory</span>
            <h1>Reference page for the layouts already in the builder</h1>
            <p>This page renders live flexible-builder components with DB-seeded content so visual review is grounded in production output and editable fields. Split Collage 1-up through 6-up is now the canonical collage audit lane for lock and promotion decisions.</p>
            <div class="builder-reference-nav">
                <a href="#reference-video-hero">Video Hero</a>
                <a href="#reference-card-grid-2-up">Card Grid</a>
                <a href="#reference-scroller-variant-1">Scroller Variant 1</a>
                <a href="#reference-scroller-variant-2">Scroller Variant 2</a>
                <a href="#reference-scroller-variant-3">Scroller Variant 3</a>
                <a href="#reference-split-collage-1up">Split Collage 1-up</a>
                <a href="#reference-split-collage-2up">Split Collage 2-up</a>
                <a href="#reference-split-collage-a">Split Collage 3-up A</a>
                <a href="#reference-split-collage-b">Split Collage 3-up B</a>
                <a href="#reference-split-collage-4up">Split Collage 4-up</a>
                <a href="#reference-split-collage-5up">Split Collage 5-up</a>
                <a href="#reference-split-collage-6up">Split Collage 6-up</a>
                <a href="#reference-featured-article">Featured Article</a>
                <a href="#reference-split-feature">Split Feature</a>
                <a href="#reference-faq">FAQ</a>
                <a href="#reference-two-column">Two Column</a>
            </div>
        </div>
    </section>

    <?php if ( have_rows( 'page_sections' ) ) : ?>
        <?php while ( have_rows( 'page_sections' ) ) : the_row(); ?>
            <?php $current_layout = get_row_layout(); ?>
            <?php if ( 'section_video_hero' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-video-hero' ); ?>
            <?php elseif ( 'section_card_grid' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-card-grid' ); ?>
            <?php elseif ( 'section_image_scroller' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-image-scroller' ); ?>
            <?php elseif ( 'section_image_collage' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-image-collage' ); ?>
            <?php elseif ( 'section_split_media' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-split-media' ); ?>
            <?php elseif ( 'section_featured_article' === $current_layout ) : ?>
                <?php
                $legacy_featured_container = 'contained' === strtolower( trim( (string) get_sub_field( 'layout_variant' ) ) ) ? 'container' : 'container-fluid';
                $GLOBALS['section_split_media_override'] = array(
                    'media_mode' => 'single_image',
                    'content_source' => 'linked_article',
                    'linked_article' => get_sub_field( 'featured_article' ),
                    'use_article_title' => 1,
                    'use_article_excerpt' => 1,
                    'use_article_featured_image' => 1,
                    'section_anchor_id' => get_sub_field( 'section_anchor_id' ),
                    'section_eyebrow' => get_sub_field( 'section_eyebrow' ),
                    'section_heading' => get_sub_field( 'override_title' ),
                    'section_intro' => get_sub_field( 'custom_excerpt' ),
                    'section_image' => get_sub_field( 'override_image' ),
                    'button_label' => get_sub_field( 'button_label' ),
                    'button_url' => get_sub_field( 'button_url_override' ),
                    'button_style' => get_sub_field( 'button_style' ),
                    'image_position' => get_sub_field( 'image_position' ),
                    'container_type' => $legacy_featured_container,
                    'background_color' => get_sub_field( 'background_color' ),
                    'content_background_color' => get_sub_field( 'card_background_color' ),
                    'eyebrow_color' => get_sub_field( 'eyebrow_color' ),
                    'eyebrow_text_transform' => get_sub_field( 'eyebrow_text_transform' ),
                    'eyebrow_preset' => get_sub_field( 'eyebrow_preset' ),
                    'title_color' => get_sub_field( 'title_color' ),
                    'body_color' => get_sub_field( 'body_color' ),
                    'heading_font_family' => get_sub_field( 'heading_font_family' ),
                    'heading_font_weight' => get_sub_field( 'heading_font_weight' ),
                    'padding_top' => get_sub_field( 'padding_top' ),
                    'padding_bottom' => get_sub_field( 'padding_bottom' ),
                    'seam_enabled' => 1,
                    'seam_color' => get_sub_field( 'eyebrow_color' ),
                );
                get_template_part( 'components/components', 'section-split-media' );
                unset( $GLOBALS['section_split_media_override'] );
                ?>
            <?php elseif ( 'section_split_feature' === $current_layout ) : ?>
                <?php
                $GLOBALS['section_split_media_override'] = array(
                    'media_mode' => 'single_image',
                    'content_source' => 'manual',
                    'section_anchor_id' => get_sub_field( 'section_anchor_id' ),
                    'section_eyebrow' => get_sub_field( 'section_eyebrow' ),
                    'section_heading' => get_sub_field( 'section_heading' ),
                    'section_intro' => get_sub_field( 'section_copy' ),
                    'section_image' => get_sub_field( 'section_image' ),
                    'button_label' => get_sub_field( 'button_label' ),
                    'button_url' => get_sub_field( 'button_url' ),
                    'button_style' => get_sub_field( 'button_style' ),
                    'image_position' => get_sub_field( 'image_position' ),
                    'container_type' => 'container',
                    'background_color' => get_sub_field( 'background_color' ),
                    'content_background_color' => get_sub_field( 'content_background_color' ),
                    'eyebrow_color' => get_sub_field( 'eyebrow_color' ),
                    'eyebrow_text_transform' => get_sub_field( 'eyebrow_text_transform' ),
                    'eyebrow_preset' => get_sub_field( 'eyebrow_preset' ),
                    'title_color' => get_sub_field( 'title_color' ),
                    'body_color' => get_sub_field( 'body_color' ),
                    'heading_font_family' => get_sub_field( 'heading_font_family' ),
                    'heading_font_weight' => get_sub_field( 'heading_font_weight' ),
                    'padding_top' => get_sub_field( 'padding_top' ),
                    'padding_bottom' => get_sub_field( 'padding_bottom' ),
                    'media_min_height' => get_sub_field( 'image_min_height' ),
                    'seam_enabled' => 1,
                    'seam_color' => get_sub_field( 'eyebrow_color' ),
                );
                get_template_part( 'components/components', 'section-split-media' );
                unset( $GLOBALS['section_split_media_override'] );
                ?>
            <?php elseif ( 'section_faq_accordion' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-faq-accordion' ); ?>
            <?php elseif ( 'section_split_collage' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-split-collage' ); ?>
            <?php elseif ( 'section_two_column' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-two-column' ); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <section style="padding:60px 0;">
            <div class="container">
                <p>No ACF `page_sections` rows found for this page. Run `bash scripts/wp-local.sh eval-file scripts/seed-reference-builder-sections.php` to seed reference data.</p>
            </div>
        </section>
    <?php endif; ?>

<?php endwhile; ?>
