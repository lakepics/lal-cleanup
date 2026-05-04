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
            <?php elseif ( 'section_featured_article' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-featured-article' ); ?>
            <?php elseif ( 'section_split_feature' === $current_layout ) : ?>
                <?php get_template_part( 'components/components', 'section-split-feature' ); ?>
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
