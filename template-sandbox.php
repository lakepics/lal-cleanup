<?php
/**
 * Template Name: Sandbox Template
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'components/_subheader' ); ?>
<?php
$sandbox_content = get_field( 'content' );
$flex_demo_page = get_page_by_path( 'flex' );
$landing_page_source_id = (int) get_option( 'page_on_front' );
$landing_featured_article = $landing_page_source_id ? get_field( 'homepage_featured_article', $landing_page_source_id ) : null;
$rendered_split_feature = false;
$rendered_video_hero = false;
$sandbox_theme_uri = trailingslashit( get_stylesheet_directory_uri() );
$sandbox_brand_assets = array(
    'logo_arrowhead' => $sandbox_theme_uri . 'brand/logos/LAL_Logo_Arrowhead_Horiz_Green.svg',
    'logo_ccfr' => $sandbox_theme_uri . 'brand/logos/LAL_Logo_CCFR_Horiz_Color+White.svg',
    'logo_tavern' => $sandbox_theme_uri . 'brand/logos/north-shore-tavern-at-ucla-lake-arrowhead-lodge-logo-brown.svg',
);
$sandbox_card_assets = array(
    'chalet_exterior' => 'https://lal.local/wp-content/uploads/2024/07/Chalet-Deck-Breakfast-1.jpg',
    'chalet_room' => 'https://lal.local/wp-content/uploads/2024/07/Chalet-Living-Room-Wine-1.jpg',
    'chalet_bath' => 'https://lal.local/wp-content/uploads/2024/07/Deluxe-Chalet-Bathroom-1.jpg',
    'chalet_lounge' => 'https://lal.local/wp-content/uploads/2024/07/Chalet-Deck-Breakfast-1.jpg',
    'special_book_early' => 'https://lal.local/wp-content/uploads/2025/09/book-early-and-save-home.jpg',
    'special_first_responder' => 'https://lal.local/wp-content/uploads/2020/07/LACC_Specials_Conf2-1.jpg',
);
$sandbox_gallery_images = get_field( 'images', 116 );

if ( ! empty( $sandbox_gallery_images ) && is_array( $sandbox_gallery_images ) ) {
    $sandbox_gallery_matches = array();

    foreach ( $sandbox_gallery_images as $sandbox_gallery_image ) {
        if ( empty( $sandbox_gallery_image['image']['id'] ) ) {
            continue;
        }

        $sandbox_gallery_category = isset( $sandbox_gallery_image['category'] ) ? strtolower( (string) $sandbox_gallery_image['category'] ) : '';
        $sandbox_gallery_caption = isset( $sandbox_gallery_image['caption'] ) ? strtolower( (string) $sandbox_gallery_image['caption'] ) : '';
        $sandbox_gallery_css_class = isset( $sandbox_gallery_image['css_class'] ) ? strtolower( (string) $sandbox_gallery_image['css_class'] ) : '';

        if ( false === strpos( $sandbox_gallery_category, 'accommodation' ) && false === strpos( $sandbox_gallery_caption, 'chalet' ) && false === strpos( $sandbox_gallery_css_class, 'accommodation' ) ) {
            continue;
        }

        $sandbox_gallery_image_url = '';

        if ( ! empty( $sandbox_gallery_image['large_image']['url'] ) ) {
            $sandbox_gallery_image_url = (string) $sandbox_gallery_image['large_image']['url'];
        } else {
            $sandbox_gallery_image_src = wp_get_attachment_image_src( $sandbox_gallery_image['image']['id'], 'full' );
            if ( ! empty( $sandbox_gallery_image_src[0] ) ) {
                $sandbox_gallery_image_url = (string) $sandbox_gallery_image_src[0];
            }
        }

        if ( '' !== $sandbox_gallery_image_url ) {
            $sandbox_gallery_matches[] = $sandbox_gallery_image_url;
        }

        if ( count( $sandbox_gallery_matches ) >= 4 ) {
            break;
        }
    }

    if ( count( $sandbox_gallery_matches ) >= 3 ) {
        $sandbox_card_assets['chalet_exterior'] = $sandbox_gallery_matches[0];
        $sandbox_card_assets['chalet_room'] = $sandbox_gallery_matches[1];
        $sandbox_card_assets['chalet_bath'] = $sandbox_gallery_matches[2];
    }

    if ( count( $sandbox_gallery_matches ) >= 4 ) {
        $sandbox_card_assets['chalet_lounge'] = $sandbox_gallery_matches[3];
    }
}
$sandbox_illustration_files = glob( get_stylesheet_directory() . '/brand/illustrations/*.{svg,png,jpg,jpeg,webp}', GLOB_BRACE );
$sandbox_illustration_assets = array();

if ( ! empty( $sandbox_illustration_files ) ) {
    natcasesort( $sandbox_illustration_files );

    foreach ( $sandbox_illustration_files as $sandbox_illustration_file ) {
        if ( ! is_file( $sandbox_illustration_file ) ) {
            continue;
        }

        $sandbox_illustration_basename = wp_basename( $sandbox_illustration_file );
        $sandbox_illustration_extension = strtolower( pathinfo( $sandbox_illustration_basename, PATHINFO_EXTENSION ) );
        $sandbox_illustration_slug = sanitize_title( pathinfo( $sandbox_illustration_basename, PATHINFO_FILENAME ) );
        $sandbox_illustration_dimensions = '';
        $sandbox_illustration_recommendation = 'Review for decorative background use.';
        $sandbox_illustration_status = 'Needs review';

        if ( in_array( $sandbox_illustration_slug, array( 'branch', 'fern', 'fungi', 'pine', 'vine' ), true ) ) {
            $sandbox_illustration_recommendation = 'Strong candidate for oversized, low-opacity background treatment.';
            $sandbox_illustration_status = 'Strong candidate';
        } elseif ( in_array( $sandbox_illustration_slug, array( 'flower-1', 'flower-2', 'flower-3' ), true ) ) {
            $sandbox_illustration_recommendation = 'Good supporting motif; best as a smaller offset background accent.';
            $sandbox_illustration_status = 'Secondary motif';
        } elseif ( in_array( $sandbox_illustration_slug, array( 'chipmunk', 'jay', 'lizard', 'sparrow' ), true ) ) {
            $sandbox_illustration_recommendation = 'Use sparingly as a character accent so it does not overpower utility content.';
            $sandbox_illustration_status = 'Accent only';
        } elseif ( 'mountains' === $sandbox_illustration_slug ) {
            $sandbox_illustration_recommendation = 'Most complex scene; likely better for hero or large panel use than small container backgrounds.';
            $sandbox_illustration_status = 'Complex scene';
        }

        if ( in_array( $sandbox_illustration_extension, array( 'png', 'jpg', 'jpeg', 'webp' ), true ) ) {
            $sandbox_illustration_size = @getimagesize( $sandbox_illustration_file );

            if ( ! empty( $sandbox_illustration_size[0] ) && ! empty( $sandbox_illustration_size[1] ) ) {
                $sandbox_illustration_dimensions = $sandbox_illustration_size[0] . ' x ' . $sandbox_illustration_size[1];
            }
        }

        $sandbox_illustration_assets[] = array(
            'label' => preg_replace( '/[-_]+/', ' ', pathinfo( $sandbox_illustration_basename, PATHINFO_FILENAME ) ),
            'slug' => $sandbox_illustration_slug,
            'format' => strtoupper( $sandbox_illustration_extension ),
            'dimensions' => $sandbox_illustration_dimensions,
            'filesize' => size_format( filesize( $sandbox_illustration_file ), 1 ),
            'recommendation' => $sandbox_illustration_recommendation,
            'status' => $sandbox_illustration_status,
            'src' => trailingslashit( get_stylesheet_directory_uri() ) . 'brand/illustrations/' . rawurlencode( $sandbox_illustration_basename ),
        );
    }
}

if ( ! $landing_featured_article ) {
    $landing_page_candidates = get_posts(
        array(
            'post_type' => 'page',
            'post_status' => 'publish',
            'posts_per_page' => 1,
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    'key' => '_wp_page_template',
                    'value' => 'template-landing-page.php',
                ),
                array(
                    'key' => '_wp_page_template',
                    'value' => 'template-landing-page-video.php',
                ),
            ),
        )
    );

    if ( ! empty( $landing_page_candidates ) ) {
        $landing_page_source_id = (int) $landing_page_candidates[0]->ID;
        $landing_featured_article = get_field( 'homepage_featured_article', $landing_page_source_id );
    }
}
?>

<style>
.lacc-sandbox {
    --lacc-sandbox-blue: #3f5f85;
    --lacc-sandbox-blue-deep: #324c6a;
    --lacc-sandbox-cream: #f6f3ed;
    --lacc-sandbox-green-rgb: 58, 104, 78;
    --lacc-sandbox-green: rgb(var(--lacc-sandbox-green-rgb));
    --lacc-sandbox-ink: #51534a;
    --lacc-sandbox-ink-deep: #1f221d;
    --lacc-sandbox-gold: #d4a441;
    --lacc-sandbox-gold-accent: #c6922e;
    --lacc-sandbox-gold-decorative: #b58a2d;
    --lacc-sandbox-mist: #d9ddd6;
    --lacc-sandbox-taupe: #5a4f47;
    --lacc-sandbox-gradient-blue: linear-gradient(180deg, var(--lacc-sandbox-blue-deep), var(--lacc-sandbox-blue));
    --lacc-sandbox-gradient-cream: linear-gradient(180deg, var(--lacc-sandbox-cream), #ffffff);
    --lacc-sandbox-gradient-ink: linear-gradient(180deg, var(--lacc-sandbox-ink-deep), var(--lacc-sandbox-ink));
    padding: 36px 0 80px;
    background: linear-gradient(180deg, rgba(246,243,237,0.94), rgba(255,255,255,0.96));
}

.lacc-sandbox__intro {
    max-width: 1440px;
    margin: 0 auto 30px;
    padding: 0 15px;
}

.lacc-sandbox__panel {
    padding: 24px 28px;
    border: 1px solid rgba(81,83,74,0.14);
    background: rgba(255,255,255,0.88);
    box-shadow: 0 18px 42px rgba(31,34,29,0.06);
}

.lacc-sandbox__eyebrow {
    display: inline-block;
    margin-bottom: 10px;
    color: var(--lacc-sandbox-gold-accent);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.lacc-sandbox__title {
    margin: 0;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(36px, 4vw, 56px);
    line-height: .98;
}

.lacc-sandbox__copy,
.lacc-sandbox__copy p {
    margin-top: 16px;
    color: #51534a;
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(18px, 2vw, 22px);
    line-height: 1.6;
}

.lacc-sandbox__copy p:last-child {
    margin-bottom: 0;
}

.lacc-sandbox__lane {
    max-width: 1440px;
    margin: 0 auto 30px;
    padding: 0 15px;
}

.lacc-sandbox__lane:last-child {
    margin-bottom: 0;
}

.lacc-sandbox__lane-card {
    padding: 24px 28px;
    border: 1px solid rgba(81,83,74,0.14);
    background: rgba(255,255,255,0.84);
    box-shadow: 0 16px 34px rgba(31,34,29,0.05);
}

.lacc-sandbox__lane-label {
    display: inline-block;
    margin-bottom: 8px;
    color: var(--lacc-sandbox-blue);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .18em;
    text-transform: uppercase;
}

.lacc-sandbox__lane-title {
    margin: 0;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(28px, 3.4vw, 42px);
    line-height: 1;
}

.lacc-sandbox__lane-copy,
.lacc-sandbox__lane-copy p,
.lacc-sandbox__lane-copy li {
    margin-top: 14px;
    color: #51534a;
    font-size: 15px;
    line-height: 1.7;
}

.lacc-sandbox__lane-copy ul {
    margin: 14px 0 0;
    padding-left: 18px;
}

.lacc-sandbox__mockup-wrap {
    overflow: hidden;
    border: 1px solid rgba(81,83,74,0.12);
    background: rgba(255,255,255,0.94);
    box-shadow: 0 20px 46px rgba(31,34,29,0.08);
}

.lacc-sandbox__lane-head {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
}

.lacc-sandbox__lane-statuses {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.lacc-sandbox__status {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 30px;
    padding: 6px 12px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1;
    text-transform: uppercase;
}

.lacc-sandbox__status--exploratory {
    background: rgba(148,110,41,0.12);
    color: var(--lacc-sandbox-gold-accent);
}

.lacc-sandbox__status--builder {
    background: rgba(63,95,133,0.12);
    color: var(--lacc-sandbox-blue);
}

.lacc-sandbox__status--approved {
    background: rgba(var(--lacc-sandbox-green-rgb), 0.16);
    color: var(--lacc-sandbox-green);
}

.lacc-sandbox__status--criteria {
    background: rgba(81,83,74,0.1);
    color: #51534a;
}

.lacc-sandbox__criteria-grid,
.lacc-sandbox__primitives-grid,
.lacc-sandbox__details-grid,
.lacc-sandbox__cards-grid,
.lacc-sandbox__illustration-grid {
    display: grid;
    gap: 18px;
    margin-top: 18px;
}

.lacc-sandbox__criteria-grid,
.lacc-sandbox__details-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.lacc-sandbox__primitives-grid {
    grid-template-columns: 1fr;
}

.lacc-sandbox__cards-grid {
    grid-template-columns: 1fr;
}

.lacc-sandbox__cards-row {
    display: grid;
    gap: 18px;
    margin-top: 18px;
}

.lacc-sandbox__cards-row-notes {
    display: grid;
    gap: 18px;
    margin-top: 10px;
}

.lacc-sandbox__cards-row-notes--3up {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.lacc-sandbox__cards-cell {
    display: grid;
    gap: 10px;
    align-content: start;
}

.lacc-sandbox__cards-cell-note {
    margin: 0;
}

.lacc-sandbox__cards-cell-note ul {
    margin: 0;
    padding-left: 18px;
}

.lacc-sandbox__cards-cell-note li {
    margin-top: 10px;
}

.lacc-sandbox__cards-row--2up {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.lacc-sandbox__cards-row--2up .lacc-sandbox__audit-card {
    display: flex;
    flex-direction: column;
    min-height: 100%;
}

.lacc-sandbox__cards-row--3up {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.lacc-sandbox__cards-row--3up:not(.lacc-sandbox__cards-row--pricing) > .lacc-sandbox__audit-card {
    display: flex;
    flex-direction: column;
    min-height: 100%;
}

.lacc-sandbox__cards-row--4up {
    grid-template-columns: repeat(4, minmax(0, 1fr));
}

.lacc-sandbox__cards-row--5up {
    grid-template-columns: repeat(5, minmax(0, 1fr));
}

.lacc-sandbox__cards-row-head {
    display: flex;
    flex-wrap: wrap;
    align-items: baseline;
    justify-content: space-between;
    gap: 12px;
    margin-top: 24px;
}

.lacc-sandbox__cards-row-head:first-child {
    margin-top: 0;
}

.lacc-sandbox__cards-row-title {
    margin: 0;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(24px, 2.2vw, 30px);
    line-height: 1;
}

.lacc-sandbox__cards-row-note {
    margin: 0;
    color: rgba(81,83,74,0.76);
    font-size: 13px;
    line-height: 1.55;
}

.lacc-sandbox__illustration-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.lacc-sandbox__specimen,
.lacc-sandbox__audit-card {
    border: 1px solid rgba(81,83,74,0.12);
    background: rgba(255,255,255,0.92);
    box-shadow: 0 14px 30px rgba(31,34,29,0.05);
}

.lacc-sandbox__list-study {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
}

.lacc-sandbox__list-card {
    display: grid;
    gap: 14px;
    min-height: 100%;
    padding: 18px;
    border: 1px solid rgba(81,83,74,0.12);
    background: rgba(255,255,255,0.84);
}

.lacc-sandbox__list-card--editorial {
    background: linear-gradient(180deg, rgba(246,243,237,0.96), rgba(255,255,255,0.96));
}

.lacc-sandbox__list-card--utility {
    background: rgba(255,255,255,0.94);
}

.lacc-sandbox__list-card--tables {
    grid-column: 1 / -1;
    background: linear-gradient(180deg, rgba(63,95,133,0.07), rgba(255,255,255,0.94));
}

.lacc-sandbox__list-card-title {
    margin: 0;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(22px, 2vw, 28px);
    line-height: 1;
}

.lacc-sandbox__editorial-list,
.lacc-sandbox__utility-list {
    display: grid;
    gap: 10px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.lacc-sandbox__editorial-list li,
.lacc-sandbox__utility-list li,
.lacc-sandbox__table-preview-note {
    color: #51534a;
    font-size: 14px;
    line-height: 1.6;
}

.lacc-sandbox__editorial-list li,
.lacc-sandbox__utility-list li {
    list-style: none;
}

.lacc-sandbox__editorial-list li {
    position: relative;
    padding-left: 18px;
}

.lacc-sandbox__editorial-list li::before {
    content: '✦';
    position: absolute;
    top: .1em;
    left: 0;
    color: var(--lacc-sandbox-gold-accent);
    font-size: .9em;
}

.lacc-sandbox__utility-list li {
    padding: 0 0 12px;
    border-bottom: 1px solid rgba(81,83,74,0.14);
}

.lacc-sandbox__utility-list li:last-child {
    padding-bottom: 0;
    border-bottom: 0;
}

.lacc-sandbox__table-preview-note {
    display: grid;
    gap: 12px;
    margin: 0;
    padding: 14px 0 0;
    border-top: 1px solid rgba(81,83,74,0.1);
}

.lacc-sandbox__table-study {
    display: grid;
    grid-template-columns: minmax(0, 1.5fr) minmax(320px, .85fr);
    gap: 18px;
    padding-top: 8px;
}

.lacc-sandbox__table-card {
    display: grid;
    gap: 12px;
}

.lacc-sandbox__table-card-label {
    display: inline-flex;
    align-items: center;
    min-height: 26px;
    width: fit-content;
    padding: 6px 10px;
    border-radius: 999px;
    background: rgba(81,83,74,0.08);
    color: rgba(81,83,74,0.78);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__table-card-title {
    margin: 0;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(20px, 1.8vw, 26px);
    line-height: 1;
}

.lacc-sandbox__table-card-copy {
    margin: 0;
    color: #51534a;
    font-size: 14px;
    line-height: 1.6;
}

.lacc-sandbox__table-wrap {
    overflow-x: auto;
    border: 1px solid rgba(81,83,74,0.12);
    background: rgba(255,255,255,0.96);
}

.lacc-sandbox__table {
    width: 100%;
    border-collapse: collapse;
    color: #51534a;
    font-size: 12px;
    line-height: 1.45;
}

.lacc-sandbox__table--comparison {
    min-width: 780px;
}

.lacc-sandbox__table th,
.lacc-sandbox__table td {
    padding: 10px 12px;
    border-bottom: 1px solid rgba(81,83,74,0.1);
    text-align: left;
    vertical-align: top;
}

.lacc-sandbox__table thead th {
    background: var(--lacc-sandbox-gold);
    color: #ffffff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .04em;
}

.lacc-sandbox__table tbody tr:nth-child(even) {
    background: rgba(81,83,74,0.045);
}

.lacc-sandbox__table tbody tr:last-child td {
    border-bottom: 0;
}

.lacc-sandbox__table--specs thead th {
    background: #51534a;
}

.lacc-sandbox__table--specs td:first-child {
    width: 34%;
    color: rgba(81,83,74,0.78);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
}

.lacc-sandbox__specimen {
    padding: 22px;
}

.lacc-sandbox__specimen--row {
    display: grid;
    grid-template-columns: minmax(170px, .28fr) minmax(0, 1fr);
    gap: 22px;
    align-items: start;
}

.lacc-sandbox__specimen--row .lacc-sandbox__specimen-label {
    margin-bottom: 0;
}

.lacc-sandbox__specimen-intro {
    padding-top: 2px;
}

.lacc-sandbox__specimen-main {
    min-width: 0;
}

.lacc-sandbox__specimen-label,
.lacc-sandbox__audit-card-kicker {
    display: inline-block;
    margin-bottom: 10px;
    color: rgba(81,83,74,0.72);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.lacc-sandbox__specimen-title,
.lacc-sandbox__audit-card-title {
    margin: 0;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(24px, 2.6vw, 34px);
    line-height: 1.02;
}

.lacc-sandbox__specimen-copy,
.lacc-sandbox__specimen-copy p,
.lacc-sandbox__specimen-copy li,
.lacc-sandbox__audit-card-copy,
.lacc-sandbox__audit-card-copy p,
.lacc-sandbox__audit-card-copy li {
    color: #51534a;
    font-size: 16px;
    line-height: 1.65;
}

.lacc-sandbox__display-line {
    margin: 0;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(34px, 4vw, 50px);
    line-height: .96;
}

.lacc-sandbox__type-stack {
    display: grid;
    gap: 14px;
}

.lacc-sandbox__type-row {
    display: grid;
    grid-template-columns: 64px minmax(0, 1fr);
    gap: 16px;
    align-items: start;
    padding-top: 14px;
    border-top: 1px solid rgba(81,83,74,0.1);
}

.lacc-sandbox__type-row:first-child {
    padding-top: 0;
    border-top: 0;
}

.lacc-sandbox__type-label {
    color: rgba(81,83,74,0.72);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.lacc-sandbox__type-label small {
    display: block;
    margin-top: 6px;
    color: rgba(81,83,74,0.58);
    font-size: 10px;
    font-weight: 600;
    letter-spacing: .08em;
    line-height: 1.35;
    text-transform: none;
}

.lacc-sandbox__type-sample {
    margin: 0;
    color: #51534a;
}

.lacc-sandbox__type-sample--xl {
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(50px, 7vw, 92px);
    font-weight: 400;
    line-height: .96;
}

.lacc-sandbox__type-sample--h1,
.lacc-sandbox__type-sample--h2,
.lacc-sandbox__type-sample--h3 {
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-weight: 400;
}

.lacc-sandbox__type-sample--h1 {
    font-size: clamp(48px, 6vw, 76px);
    letter-spacing: .015em;
    line-height: .94;
}

.lacc-sandbox__type-sample--h2 {
    font-size: clamp(40px, 4.8vw, 58px);
    letter-spacing: .012em;
    line-height: .98;
}

.lacc-sandbox__type-sample--h3 {
    font-size: clamp(32px, 3.6vw, 44px);
    line-height: 1.02;
}

.lacc-sandbox__type-sample--h4,
.lacc-sandbox__type-sample--h5 {
    font-family: "Freight Big Pro", Georgia, serif;
    font-weight: 500;
    font-style: italic;
    letter-spacing: .015em;
}

.lacc-sandbox__type-sample--h4 {
    font-size: clamp(28px, 3vw, 34px);
    line-height: 1.08;
}

.lacc-sandbox__type-sample--h5 {
    font-size: clamp(22px, 2.4vw, 28px);
    line-height: 1.14;
}

.lacc-sandbox__type-sample--h6 {
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1.2;
    text-transform: uppercase;
}

.lacc-sandbox__type-sample--h6-helvetica {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1.2;
    text-transform: uppercase;
}

.lacc-sandbox__type-sample--lede {
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(21px, 2.1vw, 26px);
    font-weight: 400;
    font-style: italic;
    line-height: 1.58;
}

.lacc-sandbox__type-sample--body {
    font-size: 16px;
    line-height: 1.72;
}

.lacc-sandbox__freight-line {
    margin: 12px 0 0;
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(26px, 3vw, 34px);
    font-weight: 500;
    letter-spacing: .03em;
    line-height: 1.1;
}

.lacc-sandbox__utility-line {
    margin: 12px 0 0;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__button-row,
.lacc-sandbox__link-row,
.lacc-sandbox__badge-row {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 16px;
}

.lacc-sandbox__button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: .85em 1.45em;
    border: 1px solid transparent;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: .08em;
    line-height: 1.2;
    text-decoration: none;
    text-transform: uppercase;
    transition: background-color .2s ease, border-color .2s ease, color .2s ease, transform .2s ease;
}

.lacc-sandbox__button:hover,
.lacc-sandbox__button:focus {
    transform: translateY(-1px);
    text-decoration: none;
}

.lacc-sandbox__button--primary { background: #3f5f85; border-color: #3f5f85; }
.lacc-sandbox__button--primary { background: var(--lacc-sandbox-blue); border-color: var(--lacc-sandbox-blue); }
.lacc-sandbox__button--primary:hover,
.lacc-sandbox__button--primary:focus { background: var(--lacc-sandbox-blue-deep); border-color: var(--lacc-sandbox-blue-deep); color: #ffffff; }

.lacc-sandbox__button--ink { background: #51534a; border-color: #51534a; }
.lacc-sandbox__button--ink:hover,
.lacc-sandbox__button--ink:focus { background: #3c3e38; border-color: #3c3e38; color: #ffffff; }

.lacc-sandbox__button--gold { background: var(--lacc-sandbox-gold); border-color: var(--lacc-sandbox-gold); color: #ffffff; }
.lacc-sandbox__button--gold:hover,
.lacc-sandbox__button--gold:focus { background: #644a19; border-color: #644a19; color: #ffffff; }

.lacc-sandbox__inline-link {
    color: var(--lacc-sandbox-blue);
    font-weight: 700;
    text-decoration: none;
    text-underline-offset: .18em;
}

.lacc-sandbox__inline-link:hover,
.lacc-sandbox__inline-link:focus {
    color: var(--lacc-sandbox-blue-deep);
    text-decoration: underline;
}

.lacc-sandbox__inline-link--gold { color: var(--lacc-sandbox-gold-accent); }

.lacc-sandbox__inline-link--gold:hover,
.lacc-sandbox__inline-link--gold:focus { color: #7b5a22; }

.lacc-sandbox__badge {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 30px;
    padding: 6px 12px;
    border: 1px solid transparent;
    border-radius: 999px;
    background: rgba(63,95,133,0.12);
    color: var(--lacc-sandbox-blue);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1;
    text-transform: uppercase;
}

.lacc-sandbox__badge--featured {
    isolation: isolate;
    z-index: 2;
    min-height: 48px;
    padding: 10px 20px;
    border-color: rgba(212,164,65,0.34);
    background: linear-gradient(180deg, var(--lacc-sandbox-ink), var(--lacc-sandbox-ink-deep));
    color: var(--lacc-sandbox-gold-decorative);
    font-size: 13px;
    letter-spacing: .16em;
    text-shadow: 0 1px 0 rgba(31,34,29,0.28);
    box-shadow: 0 0 0 3px rgba(246,243,237,0.96), 0 12px 24px rgba(31,34,29,0.08);
}

.lacc-sandbox__badge--featured::before {
    content: '';
    position: absolute;
    inset: 3px;
    z-index: -1;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.08);
    pointer-events: none;
}

.lacc-sandbox__form-stack {
    display: grid;
    gap: 12px;
    margin-top: 16px;
}

.lacc-sandbox__field,
.lacc-sandbox__select,
.lacc-sandbox__textarea {
    width: 100%;
    padding: 14px 16px;
    border: 1px solid rgba(81,83,74,0.18);
    background: #ffffff;
    color: #51534a;
    font-size: 15px;
}

.lacc-sandbox__textarea {
    min-height: 120px;
    resize: vertical;
}

.lacc-sandbox__select {
    padding-right: 50px;
    appearance: none;
    background-image: linear-gradient(45deg, transparent 50%, #51534a 50%), linear-gradient(135deg, #51534a 50%, transparent 50%);
    background-position: calc(100% - 24px) calc(50% - 3px), calc(100% - 18px) calc(50% - 3px);
    background-size: 6px 6px, 6px 6px;
    background-repeat: no-repeat;
}

.lacc-sandbox__choice-grid {
    display: grid;
    gap: 10px;
    margin-top: 2px;
}

.lacc-sandbox__choice {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #51534a;
    font-size: 15px;
}

.lacc-sandbox__choice input {
    width: 18px;
    height: 18px;
    margin: 0;
    accent-color: var(--lacc-sandbox-blue);
}

.lacc-sandbox__eyebrow-sample {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 34px;
    padding: 8px 16px;
    border: 1px solid rgba(181,138,45,0.28);
    color: var(--lacc-sandbox-gold-decorative);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    width: fit-content;
    max-width: 100%;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: .12em;
    line-height: 1.1;
    text-transform: uppercase;
}

.lacc-sandbox__eyebrow-sample--pill {
    border-radius: 999px;
    background: rgba(246,243,237,0.92);
}

.lacc-sandbox__eyebrow-sample--plain {
    border-color: transparent;
    background: transparent;
}

.lacc-sandbox__eyebrow-sample--ink {
    border-color: var(--lacc-sandbox-gold);
    color: var(--lacc-sandbox-gold);
    border-radius: 999px;
    background: var(--lacc-sandbox-ink);
}

.lacc-sandbox__eyebrow-sample--borderless {
    border-color: transparent;
}

.lacc-sandbox__eyebrow-sample--fill {
    border-radius: 999px;
    background: rgba(246,243,237,0.92);
}

.lacc-sandbox__eyebrow-sample--helvetica {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: .16em;
}

.lacc-sandbox__eyebrow-grid {
    display: grid;
    gap: 18px;
}

.lacc-sandbox__eyebrow-family {
    display: grid;
    gap: 12px;
}

.lacc-sandbox__eyebrow-family-title {
    margin: 0;
    color: #51534a;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1.2;
    text-transform: uppercase;
}

.lacc-sandbox__eyebrow-family-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 14px;
    align-items: start;
}

.lacc-sandbox__eyebrow-variant {
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: flex-start;
}

.lacc-sandbox__eyebrow-caption {
    color: rgba(81,83,74,0.62);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__cue-study {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
}

.lacc-sandbox__cue-study-card {
    position: relative;
    display: grid;
    align-content: end;
    min-height: 132px;
    padding: 18px;
    border: 1px solid rgba(81,83,74,0.1);
    background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(246,243,237,0.96));
    overflow: hidden;
}

.lacc-sandbox__cue-study-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(255,255,255,0.9), transparent 52%);
    pointer-events: none;
}

.lacc-sandbox__cue-study-card--blue {
    background: linear-gradient(180deg, rgba(228,236,246,0.96), rgba(241,245,250,0.98));
}

.lacc-sandbox__cue-study-card--gold {
    background: linear-gradient(180deg, rgba(247,242,232,0.98), rgba(255,255,255,0.96));
}

.lacc-sandbox__cue-study-card .lacc-sandbox__arrow-banner {
    position: absolute;
    top: 16px;
    left: 16px;
    box-shadow: 0 10px 18px -12px rgba(31,34,29,0.32);
}

.lacc-sandbox__cue-study-meta {
    position: relative;
    display: grid;
    gap: 6px;
    margin-top: 36px;
}

.lacc-sandbox__cue-study-label {
    color: rgba(81,83,74,0.6);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__cue-study-copy {
    margin: 0;
    color: #51534a;
    font-size: 14px;
    line-height: 1.55;
}

.lacc-sandbox__graphic-stack {
    display: grid;
    gap: 16px;
    justify-items: start;
}

.lacc-sandbox__utility-stack {
    display: grid;
    gap: 18px;
    margin-top: 18px;
}

.lacc-sandbox__graphic-swatch {
    width: 78px;
    height: 120px;
    background-color: var(--lacc-sandbox-gold-accent);
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-position: center;
    mask-position: center;
    -webkit-mask-size: 78px auto;
    mask-size: 78px auto;
}

.lacc-sandbox__graphic-divider {
    width: 220px;
    height: 1px;
    background: rgba(81,83,74,0.18);
}

.lacc-sandbox__graphic-arrow {
    width: 54px;
    height: 54px;
    clip-path: polygon(50% 0, 100% 100%, 0 100%);
    background: var(--lacc-sandbox-blue);
    opacity: .78;
}

.lacc-sandbox__logo-gallery,
.lacc-sandbox__control-showcase,
.lacc-sandbox__media-control-showcase {
    display: grid;
    gap: 14px;
}

.lacc-sandbox__logo-gallery {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.lacc-sandbox__logo-card,
.lacc-sandbox__control-card,
.lacc-sandbox__media-card {
    border: 1px solid rgba(81,83,74,0.12);
    background: rgba(255,255,255,0.94);
    box-shadow: 0 12px 28px rgba(31,34,29,0.04);
}

.lacc-sandbox__logo-card {
    display: grid;
    gap: 14px;
    align-items: center;
    min-height: 146px;
    padding: 18px 20px;
}

.lacc-sandbox__logo-card--dark {
    background: #51534a;
}

.lacc-sandbox__logo-card--blue {
    background: var(--lacc-sandbox-blue);
}

.lacc-sandbox__logo-card--tall {
    grid-column: 1 / -1;
    width: calc(50% - 7px);
    justify-self: center;
}

.lacc-sandbox__logo-card--tall img {
    max-width: 78%;
    justify-self: center;
}

.lacc-sandbox__logo-card img {
    display: block;
    width: 100%;
    height: auto;
    max-height: none;
    object-fit: fill;
    object-position: left center;
}

.lacc-sandbox__logo-card--reverse img {
    filter: brightness(0) invert(1);
}

.lacc-sandbox__logo-meta {
    display: grid;
    gap: 6px;
}

.lacc-sandbox__logo-name {
    color: #51534a;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .08em;
    line-height: 1.3;
    text-transform: uppercase;
}

.lacc-sandbox__logo-card--dark .lacc-sandbox__logo-name,
.lacc-sandbox__logo-card--blue .lacc-sandbox__logo-name {
    color: rgba(255,255,255,0.92);
}

.lacc-sandbox__logo-note {
    color: rgba(81,83,74,0.76);
    font-size: 13px;
    line-height: 1.45;
}

.lacc-sandbox__logo-card--dark .lacc-sandbox__logo-note,
.lacc-sandbox__logo-card--blue .lacc-sandbox__logo-note {
    color: rgba(255,255,255,0.7);
}

.lacc-sandbox__control-showcase {
    grid-template-columns: minmax(0, 1.15fr) minmax(240px, .85fr);
}

.lacc-sandbox__arrow-study-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
}

.lacc-sandbox__arrow-study {
    display: grid;
    gap: 14px;
    min-height: 100%;
    padding: 18px 20px 20px;
    border: 1px solid rgba(81,83,74,0.12);
    background: rgba(255,255,255,0.94);
    box-shadow: 0 12px 28px rgba(31,34,29,0.04);
}

.lacc-sandbox__arrow-study--linework {
    background:
    var(--lacc-sandbox-gradient-cream),
        radial-gradient(circle at top left, rgba(148,110,41,0.08), transparent 48%);
}

.lacc-sandbox__arrow-study--symbol {
    background:
        linear-gradient(180deg, rgba(81,83,74,0.04), rgba(81,83,74,0.1)),
        linear-gradient(135deg, rgba(246,243,237,0.98), rgba(255,255,255,0.96));
}

.lacc-sandbox__arrow-study--symbol .lacc-sandbox__arrow-study-preview {
    padding: 18px;
    background: var(--lacc-sandbox-gradient-cream);
}

.lacc-sandbox__arrow-study-head {
    display: grid;
    gap: 8px;
}

.lacc-sandbox__arrow-study-label {
    display: inline-flex;
    align-items: center;
    width: fit-content;
    min-height: 26px;
    padding: 4px 10px;
    border-radius: 999px;
    background: rgba(63,95,133,0.1);
    color: var(--lacc-sandbox-blue);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1;
    text-transform: uppercase;
}

.lacc-sandbox__arrow-study-title {
    margin: 0;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(22px, 2.2vw, 28px);
    line-height: 1.02;
}

.lacc-sandbox__arrow-study-copy {
    margin: 0;
    color: rgba(81,83,74,0.84);
    font-size: 14px;
    line-height: 1.6;
}

.lacc-sandbox__arrow-study-preview {
    display: grid;
    gap: 12px;
    padding: 14px;
    border: 1px solid rgba(81,83,74,0.1);
    background: rgba(255,255,255,0.78);
}

.lacc-sandbox__arrow-study-preview--dark {
    background: linear-gradient(135deg, var(--lacc-sandbox-ink), var(--lacc-sandbox-ink-deep));
    border-color: rgba(255,255,255,0.12);
}

.lacc-sandbox__arrow-study-preview--dark .lacc-sandbox__arrow-study-note,
.lacc-sandbox__arrow-study-preview--dark .lacc-sandbox__page-count {
    color: rgba(255,255,255,0.86);
}

.lacc-sandbox__arrow-study-preview--dark .lacc-sandbox__page-dot {
    border-color: rgba(255,255,255,0.7);
    background: transparent;
}

.lacc-sandbox__arrow-study-preview--dark .lacc-sandbox__page-dot.is-active {
    background: #ffffff;
    border-color: #ffffff;
}

.lacc-sandbox__arrow-study-note {
    margin: 0;
    color: rgba(81,83,74,0.72);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .12em;
    line-height: 1.4;
    text-transform: uppercase;
}

.lacc-sandbox__arrow-study-controls,
.lacc-sandbox__arrow-study-indicators,
.lacc-sandbox__arrow-study-banner-row {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: center;
}

.lacc-sandbox__arrow-study-banner-row {
    gap: 14px;
}

.lacc-sandbox__arrow-study-controls--medallion {
    gap: 18px;
}

.lacc-sandbox__arrow-control {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 74px;
    height: 74px;
    padding: 0;
    border: 1px solid rgba(81,83,74,0.12);
    background: #ffffff;
    color: #51534a;
}

.lacc-sandbox__arrow-control--linework {
    border-radius: 18px;
}

.lacc-sandbox__arrow-control--symbol {
    width: 88px;
    height: 88px;
    border-radius: 999px;
    background: var(--lacc-sandbox-ink);
    border-color: var(--lacc-sandbox-ink);
    color: #ffffff;
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.1), 0 10px 20px rgba(81,83,74,0.08);
}

.lacc-sandbox__arrow-control--logo-arrow {
    width: auto;
    height: auto;
    padding: 0;
    border: 0;
    background: transparent;
    border-radius: 0;
    color: var(--lacc-sandbox-ink);
}

.lacc-sandbox__arrow-control svg {
    display: block;
}

.lacc-sandbox__arrow-control--linework svg {
    width: 38px;
    height: 38px;
    stroke: currentColor;
    fill: none;
    stroke-width: 1.6;
    stroke-linecap: square;
    stroke-linejoin: miter;
    vector-effect: non-scaling-stroke;
}

.lacc-sandbox__arrow-control--linework.is-reverse svg {
    transform: scaleX(-1);
}

.lacc-sandbox__arrow-control--symbol svg {
    width: 58px;
    height: 58px;
}

.lacc-sandbox__arrow-control--logo-arrow svg {
    width: 52px;
    height: 64px;
}

.lacc-sandbox__gradient-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
    margin-top: 16px;
}

.lacc-sandbox__gradient-card {
    overflow: hidden;
    border: 1px solid rgba(81,83,74,0.12);
    background: rgba(255,255,255,0.92);
}

.lacc-sandbox__gradient-swatch {
    min-height: 132px;
    background: var(--gradient-fill);
}

.lacc-sandbox__gradient-card-body {
    display: grid;
    gap: 6px;
    padding: 16px 18px 18px;
}

.lacc-sandbox__gradient-name {
    margin: 0;
    color: var(--lacc-sandbox-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 24px;
    line-height: 1;
}

.lacc-sandbox__gradient-spec {
    color: rgba(81,83,74,0.76);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
}

.lacc-sandbox__gradient-note {
    margin: 0;
    color: rgba(81,83,74,0.84);
    font-size: 14px;
    line-height: 1.55;
}

.lacc-sandbox__page-dot--line {
    width: 26px;
    border-radius: 999px;
}

.lacc-sandbox__page-dot--symbol {
    width: 14px;
    height: 14px;
    border-color: rgba(90,79,71,0.42);
}

.lacc-sandbox__page-dot--symbol.is-active {
    background: var(--lacc-sandbox-taupe);
    border-color: var(--lacc-sandbox-taupe);
}

.lacc-sandbox__arrow-banner {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 40px;
    padding: 0 22px 0 18px;
    border: 1px solid rgba(var(--lacc-sandbox-green-rgb), 0.24);
    background: var(--lacc-sandbox-green);
    color: #ffffff;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .12em;
    line-height: 1;
    text-transform: uppercase;
    clip-path: polygon(0 0, 100% 0, calc(100% - 14px) 50%, 100% 100%, 0 100%);
}

.lacc-sandbox__arrow-banner--blue {
    background: var(--lacc-sandbox-blue);
    border-color: rgba(63,95,133,0.22);
    color: #ffffff;
}

.lacc-sandbox__arrow-banner--gold {
    background: var(--lacc-sandbox-gold);
    border-color: rgba(122,90,31,0.22);
    color: #ffffff;
}

.lacc-sandbox__arrow-study-list {
    margin: 0;
    padding-left: 18px;
    color: #51534a;
    font-size: 14px;
    line-height: 1.6;
}

.lacc-sandbox__control-card,
.lacc-sandbox__media-card {
    padding: 20px;
}

.lacc-sandbox__control-card--atmospheric {
    background:
        linear-gradient(180deg, rgba(31,34,29,0.22), rgba(31,34,29,0.58)),
        linear-gradient(120deg, #8ea5bb, #4f6981 40%, #2c3e4d 100%);
    border-color: rgba(255,255,255,0.16);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.12), 0 16px 36px rgba(31,34,29,0.12);
}

.lacc-sandbox__carousel-toolbar,
.lacc-sandbox__page-indicator-set,
.lacc-sandbox__media-button-row,
.lacc-sandbox__media-toggle-row {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: center;
}

.lacc-sandbox__carousel-toolbar {
    margin-bottom: 16px;
    justify-content: space-between;
}

.lacc-sandbox__page-indicator-set {
    gap: 10px;
}

.lacc-sandbox__control-button,
.lacc-sandbox__media-control {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.lacc-sandbox__control-button {
    width: 82px;
    height: 82px;
    padding: 0;
    border-radius: 999px;
    border-width: 1.5px;
    background: rgba(255,255,255,0.04);
    color: #ffffff;
    box-shadow: inset 0 0 0 1px rgba(255,255,255,0.08);
}

.lacc-sandbox__control-button:hover,
.lacc-sandbox__control-button:focus {
    background: rgba(255,255,255,0.08);
    color: #ffffff;
}

.lacc-sandbox__media-control {
    min-height: 46px;
}

.lacc-sandbox__arrow-icon {
    position: relative;
    display: inline-block;
    width: 28px;
    height: 14px;
}

.lacc-sandbox__arrow-icon::before,
.lacc-sandbox__arrow-icon::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    background: currentColor;
    transform-origin: left center;
}

.lacc-sandbox__arrow-icon::before {
    width: 100%;
    height: 1.5px;
    transform: translateY(-50%);
}

.lacc-sandbox__arrow-icon::after {
    width: 12px;
    height: 1.5px;
    transform: translateY(-50%) rotate(38deg);
    top: calc(50% - 4px);
    left: 0;
}

.lacc-sandbox__arrow-icon--left {
    transform: scaleX(-1);
}

.lacc-sandbox__page-dot {
    width: 12px;
    height: 12px;
    border-radius: 999px;
    border: 1px solid rgba(81,83,74,0.26);
    background: transparent;
}

.lacc-sandbox__page-dot.is-active {
    background: #51534a;
    border-color: #51534a;
}

.lacc-sandbox__control-card--atmospheric .lacc-sandbox__control-note,
.lacc-sandbox__control-card--atmospheric .lacc-sandbox__page-count {
    color: rgba(255,255,255,0.84);
}

.lacc-sandbox__control-card--atmospheric .lacc-sandbox__page-dot {
    border-color: rgba(255,255,255,0.5);
}

.lacc-sandbox__control-card--atmospheric .lacc-sandbox__page-dot.is-active {
    background: rgba(255,255,255,0.94);
    border-color: rgba(255,255,255,0.94);
}

.lacc-sandbox__control-card--atmospheric .lacc-sandbox__page-count {
    background: rgba(255,255,255,0.08);
}

.lacc-sandbox__page-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 30px;
    padding: 6px 12px;
    border-radius: 999px;
    background: rgba(81,83,74,0.08);
    color: #51534a;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__control-note,
.lacc-sandbox__media-note {
    margin: 0;
    color: rgba(81,83,74,0.78);
    font-size: 14px;
    line-height: 1.55;
}

.lacc-sandbox__play-icon {
    width: 0;
    height: 0;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-left: 12px solid currentColor;
}

.lacc-sandbox__pause-icon {
    position: relative;
    width: 12px;
    height: 16px;
}

.lacc-sandbox__pause-icon::before,
.lacc-sandbox__pause-icon::after {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 4px;
    background: currentColor;
}

.lacc-sandbox__pause-icon::before {
    left: 0;
}

.lacc-sandbox__pause-icon::after {
    right: 0;
}

.lacc-sandbox__play-icon--dark {
    border-left-color: #1f221d;
}

.lacc-sandbox__pauseplay-label {
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card {
    display: flex;
    flex-direction: column;
    min-height: 100%;
    overflow: hidden;
}

.lacc-sandbox__audit-card--stay,
.lacc-sandbox__audit-card--special {
    background: rgba(255,255,255,0.97);
}

.lacc-sandbox__audit-card--special {
    align-self: start;
    min-height: 0;
}

.lacc-sandbox__audit-card--stay {
    background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(246,243,237,0.94));
}

.lacc-sandbox__audit-card--editorial {
    border-color: rgba(63,95,133,0.16);
    background: var(--lacc-sandbox-gradient-ink);
    color: #ffffff;
}

.lacc-sandbox__audit-card--utility {
    background: linear-gradient(180deg, rgba(255,255,255,0.96), rgba(246,243,237,0.9));
}

.lacc-sandbox__audit-card--package {
    border-color: rgba(122,90,31,0.18);
    background: linear-gradient(180deg, rgba(246,243,237,0.98), rgba(255,255,255,0.94));
}

.lacc-sandbox__audit-card--pricing-tier {
    position: relative;
    isolation: isolate;
    border-color: rgba(122,90,31,0.28);
    background:
        radial-gradient(circle at top center, rgba(255,255,255,0.92), rgba(255,255,255,0) 42%),
        linear-gradient(180deg, rgba(246,243,237,0.98), rgba(255,255,255,0.96));
}

.lacc-sandbox__audit-card--cta {
    background: linear-gradient(180deg, rgba(81,83,74,0.98), rgba(60,62,56,0.98));
    color: #ffffff;
}

.lacc-sandbox__illustration-card {
    display: flex;
    flex-direction: column;
    min-height: 100%;
    border: 1px solid rgba(81,83,74,0.12);
    background: rgba(255,255,255,0.94);
    box-shadow: 0 14px 30px rgba(31,34,29,0.05);
    overflow: hidden;
}

.lacc-sandbox__illustration-preview {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 220px;
    padding: 26px;
    background:
        radial-gradient(circle at top left, rgba(212,164,65,0.12), transparent 36%),
        linear-gradient(180deg, rgba(246,243,237,0.9), rgba(255,255,255,0.96));
}

.lacc-sandbox__illustration-preview--cream {
    background:
        radial-gradient(circle at top left, rgba(212,164,65,0.12), transparent 36%),
        linear-gradient(180deg, rgba(246,243,237,0.94), rgba(255,255,255,0.96));
}

.lacc-sandbox__illustration-preview--white {
    background:
        radial-gradient(circle at top left, rgba(212,164,65,0.08), transparent 32%),
        linear-gradient(180deg, rgba(255,255,255,0.98), rgba(246,243,237,0.72));
}

.lacc-sandbox__illustration-preview--mist {
    background:
        radial-gradient(circle at top left, rgba(255,255,255,0.32), transparent 36%),
        linear-gradient(180deg, rgba(63,95,133,0.14), rgba(255,255,255,0.92));
}

.lacc-sandbox__illustration-preview::after {
    content: '';
    position: absolute;
    inset: 14px;
    border: 1px dashed rgba(81,83,74,0.12);
    pointer-events: none;
}

.lacc-sandbox__illustration-preview img {
    position: relative;
    z-index: 1;
    display: block;
    width: 100%;
    max-width: 260px;
    max-height: 220px;
    object-fit: contain;
}

.lacc-sandbox__illustration-preview-state {
    position: absolute;
    top: 16px;
    left: 16px;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    min-height: 28px;
    padding: 6px 10px;
    border-radius: 999px;
    background: rgba(255,255,255,0.72);
    color: #51534a;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1;
    text-transform: uppercase;
}

.lacc-sandbox__illustration-surfaces {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 10px;
}

.lacc-sandbox__illustration-surface {
    position: relative;
    min-height: 92px;
    overflow: hidden;
    border: 1px solid rgba(81,83,74,0.12);
    cursor: pointer;
    transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
}

.lacc-sandbox__illustration-surface:hover,
.lacc-sandbox__illustration-surface:focus-visible {
    transform: translateY(-2px);
    border-color: rgba(81,83,74,0.22);
    box-shadow: 0 10px 18px rgba(31,34,29,0.08);
}

.lacc-sandbox__illustration-surface::before {
    content: '';
    position: absolute;
    inset: 12px 10px 10px auto;
    width: 72%;
    background-image: var(--illustration-url);
    background-repeat: no-repeat;
    background-position: right bottom;
    background-size: contain;
    opacity: .16;
    pointer-events: none;
}

.lacc-sandbox__illustration-surface--cream {
    background: #f6f3ed;
}

.lacc-sandbox__illustration-surface--white {
    background: #ffffff;
}

.lacc-sandbox__illustration-surface--mist {
    background: rgba(63,95,133,0.08);
}

.lacc-sandbox__illustration-surface-label {
    position: relative;
    z-index: 1;
    display: inline-block;
    padding: 10px;
    color: rgba(81,83,74,0.72);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1;
    text-transform: uppercase;
}

.lacc-sandbox__illustration-body {
    display: grid;
    gap: 10px;
    padding: 18px 20px 20px;
}

.lacc-sandbox__illustration-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    align-items: center;
}

.lacc-sandbox__illustration-format,
.lacc-sandbox__illustration-state {
    display: inline-flex;
    align-items: center;
    min-height: 26px;
    padding: 4px 10px;
    border-radius: 999px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1;
    text-transform: uppercase;
}

.lacc-sandbox__illustration-format {
    background: rgba(63,95,133,0.1);
    color: #3f5f85;
}

.lacc-sandbox__illustration-state {
    background: rgba(148,110,41,0.12);
    color: #946E29;
}

.lacc-sandbox__illustration-state--strong-candidate {
    background: rgba(var(--lacc-sandbox-green-rgb), 0.16);
    color: var(--lacc-sandbox-green);
}

.lacc-sandbox__arrow-study-preview .lacc-sandbox__arrow-banner {
    box-shadow: 0 8px 14px -8px rgba(31,34,29,0.22);
}

.lacc-sandbox__illustration-state--secondary-motif {
    background: rgba(63,95,133,0.12);
    color: #3f5f85;
}

.lacc-sandbox__illustration-state--accent-only,
.lacc-sandbox__illustration-state--complex-scene {
    background: rgba(148,110,41,0.12);
    color: #946E29;
}

.lacc-sandbox__illustration-name {
    margin: 0;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(22px, 2.3vw, 30px);
    line-height: 1;
    text-transform: capitalize;
}

.lacc-sandbox__illustration-note {
    margin: 0;
    color: #51534a;
    font-size: 14px;
    line-height: 1.65;
}

.lacc-sandbox__illustration-specs {
    color: rgba(81,83,74,0.72);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .04em;
}

.lacc-sandbox__audit-card-media {
    aspect-ratio: 1 / .72;
    background: linear-gradient(135deg, rgba(63,95,133,0.14), rgba(148,110,41,0.12));
}

.lacc-sandbox__audit-card-media-kicker {
    position: absolute;
    top: 18px;
    left: 18px;
    z-index: 3;
    display: inline-flex;
    align-items: center;
    min-height: 28px;
    padding: 6px 12px 6px 16px;
    border-radius: 999px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card-media-kicker--light {
    background: rgba(255,255,255,0.16);
    color: #ffffff;
}

.lacc-sandbox__audit-card-media-kicker--ink {
    background: #1f221d;
    color: #d4a441;
}

.lacc-sandbox__audit-card-media-badge {
    position: absolute;
    top: 18px;
    left: 18px;
    z-index: 3;
}

.lacc-sandbox__audit-card-media-badge.lacc-sandbox__badge--featured {
    min-height: 38px;
    padding: 8px 16px;
    font-size: 11px;
    letter-spacing: .14em;
    box-shadow: 0 0 0 2px rgba(246,243,237,0.92), 0 10px 22px rgba(31,34,29,0.12);
}

.lacc-sandbox__audit-card-media-badge.lacc-sandbox__badge--featured::before {
    inset: 2px;
}

.lacc-sandbox__audit-card-media-banner {
    position: absolute;
    top: 18px;
    left: 0;
    z-index: 3;
    box-shadow: 0 8px 14px -8px rgba(31,34,29,0.28);
}

.lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-media {
    position: relative;
    aspect-ratio: 1 / .88;
    background:
        linear-gradient(180deg, rgba(31,34,29,0.12), rgba(31,34,29,0.76)),
    var(--lacc-sandbox-gradient-ink);
}

.lacc-sandbox__audit-card--stay .lacc-sandbox__audit-card-media,
.lacc-sandbox__audit-card--special .lacc-sandbox__audit-card-media {
    position: relative;
    aspect-ratio: 1 / .72;
    min-height: 0;
    padding: 0;
    background: linear-gradient(180deg, rgba(246,243,237,0.9), rgba(255,255,255,0.92));
}

.lacc-sandbox__audit-card-carousel {
    position: relative;
    min-height: 100%;
    aspect-ratio: inherit;
}

.lacc-sandbox__audit-card-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity .24s ease;
}

.lacc-sandbox__audit-card-slide.is-active {
    opacity: 1;
}

.lacc-sandbox__audit-card-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.lacc-sandbox__audit-card-carousel::after,
.lacc-sandbox__audit-card-special-hero::after {
    content: '';
    position: absolute;
    inset: auto 0 0 0;
    height: 36%;
    background: linear-gradient(180deg, rgba(31,34,29,0), rgba(31,34,29,0.48));
    pointer-events: none;
}

.lacc-sandbox__audit-card--stay .lacc-sandbox__audit-card-carousel::after {
    height: 44%;
}

.lacc-sandbox__audit-card-carousel-controls {
    position: absolute;
    inset: auto 16px 16px 16px;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
}

.lacc-sandbox__audit-card-carousel-controls .lacc-sandbox__arrow-control--linework {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: rgba(31,34,29,0.75);
    border-color: rgba(31,34,29,0.75);
    color: #ffffff;
    mix-blend-mode: multiply;
    box-shadow: 0 10px 20px rgba(31,34,29,0.14);
}

.lacc-sandbox__audit-card-carousel-controls .lacc-sandbox__arrow-control--linework svg {
    width: 24px;
    height: 24px;
    stroke: currentColor;
}

.lacc-sandbox__audit-card-carousel-count {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 8px 10px;
    border-radius: 999px;
    background: rgba(31,34,29,0.75);
    color: #ffffff;
    mix-blend-mode: multiply;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card-carousel-dots {
    display: inline-flex;
    gap: 5px;
}

.lacc-sandbox__audit-card-carousel-dot {
    width: 9px;
    height: 9px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.72);
    background: transparent;
}

.lacc-sandbox__audit-card-carousel-dot.is-active {
    background: #ffffff;
    border-color: #ffffff;
}

.lacc-sandbox__audit-card-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.lacc-sandbox__audit-card--stay .lacc-sandbox__audit-card-pills {
    gap: 10px;
    margin-bottom: 10px;
}

.lacc-sandbox__audit-card-pill.lacc-sandbox__audit-card-pill--amenity {
    padding: 7px 12px;
    border: 1px solid rgba(122,90,31,0.16);
    background: #f4efe6;
    color: #51534a;
    font-size: 11px;
    letter-spacing: .1em;
}

.lacc-sandbox__audit-card-stay-price {
    display: inline-flex;
    flex-wrap: wrap;
    align-items: baseline;
    gap: 10px;
}

.lacc-sandbox__audit-card-stay-price strong {
    color: var(--lacc-sandbox-gold);
    font-family: "freight-big-pro", "Freight Big Pro", Georgia, serif;
    font-size: clamp(30px, 2.6vw, 40px);
    font-style: italic;
    font-weight: 600 !important;
    letter-spacing: .008em;
    line-height: 1;
}

.lacc-sandbox__audit-card-stay-price span {
    color: rgba(81,83,74,0.72);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card-stay-facts {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 10px;
    padding-top: 14px;
    border-top: 1px solid rgba(81,83,74,0.1);
}

.lacc-sandbox__audit-card-stay-facts span {
    display: block;
    color: rgba(81,83,74,0.68);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card-stay-facts strong {
    display: block;
    margin-top: 4px;
    color: #51534a;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.3;
}

.lacc-sandbox__audit-card--stay .lacc-sandbox__audit-card-button {
    align-self: flex-start;
    margin-top: 10px;
}

.lacc-sandbox__audit-card-special-hero {
    position: relative;
    height: 100%;
    min-height: 0;
    overflow: hidden;
    isolation: isolate;
}

.lacc-sandbox__audit-card-special-hero::after {
    content: '';
    position: absolute;
    inset: 64% 0 0 0;
    z-index: 1;
    background: linear-gradient(180deg, rgba(31,34,29,0), rgba(31,34,29,0.22) 32%, rgba(31,34,29,0.82));
    pointer-events: none;
}

.lacc-sandbox__audit-card-special-hero img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.lacc-sandbox__audit-card-special-band {
    position: absolute;
    inset: auto 0 0 0;
    z-index: 2;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    min-height: 38%;
    padding: 22px 24px 24px;
    text-align: center;
}

.lacc-sandbox__audit-card-special-title {
    margin: 0;
    color: #ffffff;
    opacity: 1;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(40px, 4.8vw, 58px);
    font-weight: 400;
    line-height: .98;
    letter-spacing: .012em;
    text-transform: uppercase;
    text-wrap: balance;
    text-shadow: 0 2px 10px rgba(31,34,29,0.28);
    max-width: none;
}

.lacc-sandbox__audit-card-special-rule {
    display: none;
}

.lacc-sandbox__audit-card-special-rule::before,
.lacc-sandbox__audit-card-special-rule::after {
    display: none;
}

.lacc-sandbox__audit-card-special-rule::before {
    left: 24px;
}

.lacc-sandbox__audit-card-special-rule::after {
    right: 24px;
}

.lacc-sandbox__audit-card-special-subtitle {
    margin: 0;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(32px, 3.6vw, 44px);
    font-weight: 400;
    font-style: normal;
    line-height: 1.02;
    letter-spacing: 0;
    text-transform: none;
}

.lacc-sandbox__cards-row--2up .lacc-sandbox__audit-card-title {
    font-size: clamp(32px, 3.6vw, 44px);
    line-height: 1.02;
}

.lacc-sandbox__cards-row--2up .lacc-sandbox__audit-card-body {
    padding: 36px 36px 44px;
}

.lacc-sandbox__cards-row--3up .lacc-sandbox__audit-card-body {
    padding: 24px 24px 32px;
}

.lacc-sandbox__cards-row--4up .lacc-sandbox__audit-card-body {
    padding: 20px 20px 28px;
}

.lacc-sandbox__cards-row--2up .lacc-sandbox__audit-card-button {
    margin-top: auto;
}

.lacc-sandbox__audit-card--special .lacc-sandbox__audit-card-body {
    gap: 14px;
    background: #ffffff;
    border-top: 1px solid rgba(81,83,74,0.08);
}

.lacc-sandbox__audit-card--special .lacc-sandbox__audit-card-copy {
    max-width: none;
    font-size: 16px;
    line-height: 1.65;
}

.lacc-sandbox__audit-card--special .lacc-sandbox__editorial-list {
    gap: 0;
}

.lacc-sandbox__audit-card--special p.lacc-sandbox__audit-card-copy strong {
    font-family: "Freight Big Pro", Georgia, serif;
    font-weight: 500 !important;
    font-style: italic;
}

.lacc-sandbox__audit-card--special .lacc-sandbox__editorial-list li {
    padding: 14px 0 14px 18px;
    font-size: 16px;
    line-height: 1.65;
}

.lacc-sandbox__audit-card--special .lacc-sandbox__editorial-list li + li {
    border-top: 1px solid rgba(81,83,74,0.12);
}

.lacc-sandbox__audit-card--special .lacc-sandbox__editorial-list li:first-child {
    border-top: 0;
}

.lacc-sandbox__audit-card--special .lacc-sandbox__editorial-list li::before {
    top: 14px;
}

.lacc-sandbox__audit-card--special .lacc-sandbox__audit-card-list li {
    padding-left: 0;
    color: #444746;
}

.lacc-sandbox__audit-card--special .lacc-sandbox__audit-card-list li::before {
    display: none;
}

.lacc-sandbox__audit-card--special .lacc-sandbox__audit-card-button {
    align-self: flex-start;
    margin-top: 10px;
}

.lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-media::before {
    content: 'Carousel Hero';
    position: absolute;
    top: 18px;
    left: 18px;
    min-height: 26px;
    padding: 6px 10px;
    border-radius: 999px;
    background: rgba(255,255,255,0.16);
    color: #ffffff;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-media::after {
    content: '';
    position: absolute;
    inset: auto 18px 18px 18px;
    height: 12px;
    border-radius: 999px;
    background:
        radial-gradient(circle, rgba(255,255,255,0.96) 0 4px, transparent 5px) left center / 33% 12px no-repeat,
        radial-gradient(circle, rgba(255,255,255,0.45) 0 4px, transparent 5px) center center / 33% 12px no-repeat,
        radial-gradient(circle, rgba(255,255,255,0.45) 0 4px, transparent 5px) right center / 33% 12px no-repeat;
}

.lacc-sandbox__cards-row--3up .lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-media::before,
.lacc-sandbox__cards-row--3up .lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-media::after {
    display: none;
}

.lacc-sandbox__cards-row--3up .lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-carousel {
    height: 100%;
    aspect-ratio: 1 / .88;
}

.lacc-sandbox__cards-row--3up:not(.lacc-sandbox__cards-row--pricing) .lacc-sandbox__audit-card-button {
    align-self: flex-start;
    margin-top: auto;
}

.lacc-sandbox__cards-row--4up .lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-media::before,
.lacc-sandbox__cards-row--4up .lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-media::after {
    display: none;
}

.lacc-sandbox__cards-row--4up .lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-carousel {
    height: 100%;
    aspect-ratio: 1 / .88;
}

.lacc-sandbox__audit-card--utility .lacc-sandbox__audit-card-media {
    position: relative;
    display: grid;
    gap: 12px;
    aspect-ratio: auto;
    min-height: 0;
    padding: 18px 20px 0;
    background: transparent;
}

.lacc-sandbox__audit-card--utility .lacc-sandbox__audit-card-media img {
    display: block;
    width: 100%;
    aspect-ratio: 1 / .72;
    object-fit: cover;
}

.lacc-sandbox__audit-card--utility .lacc-sandbox__audit-card-media::before {
    content: 'Planning Checklist';
    display: inline-flex;
    align-items: center;
    min-height: 28px;
    padding: 6px 12px 6px 16px;
    border-radius: 999px;
    background: #1f221d;
    color: #d4a441;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__cards-row--3up .lacc-sandbox__audit-card--utility .lacc-sandbox__audit-card-media {
    padding: 0;
}

.lacc-sandbox__cards-row--3up .lacc-sandbox__audit-card--utility .lacc-sandbox__audit-card-media::before {
    display: none;
}

.lacc-sandbox__audit-card--package .lacc-sandbox__audit-card-media {
    position: relative;
    display: grid;
    place-items: start start;
    padding: 18px;
    overflow: hidden;
    background:
        linear-gradient(180deg, rgba(255,255,255,0), rgba(255,255,255,0.14)),
        linear-gradient(135deg, rgba(122,90,31,0.18), rgba(246,243,237,0.96));
}

.lacc-sandbox__audit-card--package .lacc-sandbox__audit-card-media img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.lacc-sandbox__audit-card--package .lacc-sandbox__audit-card-media::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(31,34,29,0.08), rgba(31,34,29,0.36));
}

.lacc-sandbox__audit-card-price {
    position: relative;
    z-index: 1;
    display: inline-flex;
    flex-direction: column;
    gap: 4px;
    padding: 14px 16px;
    border: 1px solid rgba(122,90,31,0.16);
    background: rgba(255,255,255,0.78);
}

.lacc-sandbox__audit-card-price strong {
    color: var(--lacc-sandbox-gold);
    font-family: "freight-big-pro", "Freight Big Pro", Georgia, serif;
    font-size: clamp(34px, 3vw, 44px);
    font-weight: 600 !important;
    font-style: italic;
    letter-spacing: .008em;
    line-height: 1;
}

.lacc-sandbox__audit-card-price span {
    color: rgba(81,83,74,0.7);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card--pricing-tier .lacc-sandbox__audit-card-body {
    position: relative;
    z-index: 1;
    gap: 14px;
    padding: 24px 24px 32px;
    overflow: hidden;
}

.lacc-sandbox__audit-card--pricing-tier .lacc-sandbox__audit-card-body::before {
    content: '';
    position: absolute;
    top: 22px;
    left: 50%;
    width: 100%;
    height: 60px;
    transform: translateX(-50%);
    background-image: url('/wp-content/themes/LACC-sage-theme-master/brand/scrollwork-horizontal.svg');
    background-repeat: no-repeat;
    background-position: center center;
    background-size: auto 60px;
    opacity: 0.4;
    pointer-events: none;
}

.lacc-sandbox__audit-card--pricing-tier .lacc-sandbox__audit-card-body:has(.lacc-sandbox__audit-card-tier-badge)::before {
    opacity: 0.25;
}

.lacc-sandbox__audit-card--pricing-tier .lacc-sandbox__audit-card-body > * {
    position: relative;
    z-index: 1;
}

.lacc-sandbox__audit-card-tier-badge {
    align-self: center;
    position: relative;
    z-index: 1;
    margin-top: 4px;
    margin-bottom: 2px;
}

.lacc-sandbox__audit-card-tier-badge-spacer {
    min-height: 50px;
    margin-bottom: 2px;
    visibility: hidden;
    pointer-events: none;
}

.lacc-sandbox__audit-card-tier-badge.lacc-sandbox__badge--featured {
    color: var(--lacc-sandbox-gold);
}

.lacc-sandbox__audit-card-tier-badge {
    min-height: 48px;
}

.lacc-sandbox__audit-card-tier-capacity,
.lacc-sandbox__audit-card-tier-subprice,
.lacc-sandbox__audit-card-tier-kicker {
    margin: 0;
}

.lacc-sandbox__audit-card-tier-capacity,
.lacc-sandbox__audit-card-tier-kicker {
    color: #946E29;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .18em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card-tier-kicker {
    color: rgba(81,83,74,0.72);
}

.lacc-sandbox__audit-card--pricing-tier .lacc-sandbox__audit-card-price {
    align-self: flex-start;
    padding: 0;
    border: 0;
    background: transparent;
}

.lacc-sandbox__audit-card--pricing-tier .lacc-sandbox__audit-card-price strong {
    font-size: clamp(42px, 3.2vw, 56px);
}

.lacc-sandbox__audit-card--pricing-tier .lacc-sandbox__audit-card-price span {
    font-size: 12px;
}

.lacc-sandbox__audit-card-tier-subprice {
    color: rgba(81,83,74,0.82);
    font-size: 15px;
    line-height: 1.5;
}

.lacc-sandbox__cards-row--pricing .lacc-sandbox__audit-card-title {
    font-size: clamp(24px, 2.2vw, 34px);
    line-height: .98;
    letter-spacing: .01em;
}

.lacc-sandbox__cards-row--pricing .lacc-sandbox__audit-card-button {
    min-width: 0;
    width: 100%;
}

.lacc-sandbox__audit-card-tier-list {
    display: grid;
    gap: 0;
    margin: 2px 0 24px;
    padding: 0;
    list-style: none;
}

.lacc-sandbox__audit-card-tier-list li {
    position: relative;
    padding: 12px 0 12px 18px;
    border-top: 1px solid rgba(122,90,31,0.18);
    color: #51534a;
    font-size: 16px;
    line-height: 1.55;
    list-style: none;
}

.lacc-sandbox__audit-card-tier-list li::before {
    content: '✦';
    position: absolute;
    top: 12px;
    left: 0;
    color: var(--lacc-sandbox-gold-accent);
    font-size: .78em;
}

.lacc-sandbox__audit-card-tier-list li:first-child {
    padding-top: 0;
    border-top: 0;
}

.lacc-sandbox__audit-card-tier-list li:first-child::before {
    top: 2px;
}

.lacc-sandbox__audit-card-tier-list li:last-child {
    padding-bottom: 0;
}

.lacc-sandbox__audit-card--pricing-tier .lacc-sandbox__audit-card-button {
    align-self: center;
    margin-top: auto;
    min-width: 210px;
}

.lacc-sandbox__audit-card--cta .lacc-sandbox__audit-card-media {
    position: relative;
    overflow: hidden;
    aspect-ratio: auto;
    min-height: 136px;
    background:
        radial-gradient(circle at top left, rgba(255,255,255,0.12), transparent 36%),
        linear-gradient(135deg, rgba(63,95,133,0.34), rgba(81,83,74,0));
}

.lacc-sandbox__audit-card--cta .lacc-sandbox__audit-card-media img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.lacc-sandbox__audit-card--cta .lacc-sandbox__audit-card-media::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(31,34,29,0.18), rgba(31,34,29,0.56));
}

.lacc-sandbox__audit-card--cta .lacc-sandbox__audit-card-media::after {
    content: '';
    position: absolute;
    right: 22px;
    bottom: 22px;
    width: 54px;
    height: 54px;
    border: 1px solid rgba(255,255,255,0.24);
    border-radius: 999px;
    box-shadow: inset 0 0 0 10px rgba(255,255,255,0.04);
}

.lacc-sandbox__audit-card-body {
    display: flex;
    flex: 1 1 auto;
    flex-direction: column;
    gap: 12px;
    padding: 20px 20px 28px;
}

.lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-body,
.lacc-sandbox__audit-card--cta .lacc-sandbox__audit-card-body {
    color: #ffffff;
}

.lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-kicker,
.lacc-sandbox__audit-card--cta .lacc-sandbox__audit-card-kicker,
.lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-copy,
.lacc-sandbox__audit-card--cta .lacc-sandbox__audit-card-copy,
.lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-meta,
.lacc-sandbox__audit-card--cta .lacc-sandbox__audit-card-meta {
    color: rgba(255,255,255,0.82);
}

.lacc-sandbox__audit-card--editorial .lacc-sandbox__audit-card-title,
.lacc-sandbox__audit-card--cta .lacc-sandbox__audit-card-title {
    color: #ffffff;
}

.lacc-sandbox__audit-card-list {
    display: grid;
    gap: 0;
    margin: 0;
    padding: 0;
    list-style: none;
}

.lacc-sandbox__audit-card-list li {
    list-style: none;
    position: relative;
    padding: 12px 0 12px 18px;
    border-top: 1px solid rgba(81,83,74,0.14);
    color: #51534a;
    font-size: 16px;
    line-height: 1.55;
}

.lacc-sandbox__audit-card-list li:first-child {
    padding-top: 0;
    border-top: 0;
}

.lacc-sandbox__audit-card-list li:last-child {
    padding-bottom: 0;
}

.lacc-sandbox__audit-card-list li::before {
    content: '✦';
    position: absolute;
    top: 12px;
    left: 0;
    color: var(--lacc-sandbox-gold-accent);
    font-size: .9em;
}

.lacc-sandbox__audit-card-list li:first-child::before {
    top: 0;
}

.lacc-sandbox__audit-card-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 44px;
    padding: 10px 18px;
    border: 1px solid rgba(255,255,255,0.18);
    background: rgba(255,255,255,0.12);
    color: #ffffff;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .1em;
    line-height: 1.2;
    text-decoration: none;
    text-transform: uppercase;
    transition: background-color .2s ease, border-color .2s ease, color .2s ease, transform .2s ease;
}

.lacc-sandbox__audit-card-button:hover,
.lacc-sandbox__audit-card-button:focus {
    transform: translateY(-1px);
    text-decoration: none;
}

.lacc-sandbox__audit-card-button:not(.lacc-sandbox__audit-card-button--gold):hover,
.lacc-sandbox__audit-card-button:not(.lacc-sandbox__audit-card-button--gold):focus {
    background: #3c3e38;
    border-color: #3c3e38;
    color: #ffffff;
}

.lacc-sandbox__audit-card-button--gold {
    border-color: rgba(122,90,31,0.22);
    background: var(--lacc-sandbox-gold);
    color: #ffffff;
}

.lacc-sandbox__audit-card-button--gold:hover,
.lacc-sandbox__audit-card-button--gold:focus {
    background: #644a19;
    border-color: #644a19;
    color: #ffffff;
}

.lacc-sandbox__cards-row--3up .lacc-sandbox__audit-card--package .lacc-sandbox__audit-card-button {
    align-self: flex-start;
}

.lacc-sandbox__audit-card-rule {
    width: 72px;
    height: 1px;
    background: rgba(255,255,255,0.3);
}

.lacc-sandbox__audit-card-copy {
    margin: 0;
}

.lacc-sandbox__audit-card-meta {
    margin-top: auto;
    color: #946E29;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card-meta-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
}

.lacc-sandbox__audit-card--list-column {
    background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(246,243,237,0.92));
}

.lacc-sandbox__audit-card--list-column .lacc-sandbox__audit-card-body {
    gap: 18px;
    align-items: stretch;
    text-align: center;
}

.lacc-sandbox__cards-row--5up .lacc-sandbox__audit-card-title {
    font-size: clamp(20px, 1.8vw, 24px);
    line-height: 1.06;
}

.lacc-sandbox__cards-row--5up .lacc-sandbox__audit-card-body {
    gap: 10px;
    padding: 20px 20px 28px;
}

.lacc-sandbox__cards-row--5up .lacc-sandbox__audit-card-button {
    min-height: 40px;
    padding: 10px 14px;
    font-size: 11px;
    letter-spacing: .12em;
}

.lacc-sandbox__cards-row--5up .lacc-sandbox__audit-card-price {
    padding: 12px 14px;
}

.lacc-sandbox__cards-row--5up .lacc-sandbox__audit-card-price strong {
    font-size: clamp(28px, 2.4vw, 34px);
}

.lacc-sandbox__audit-card--5up-offer,
.lacc-sandbox__audit-card--5up-guide,
.lacc-sandbox__audit-card--5up-rate,
.lacc-sandbox__audit-card--5up-action {
    min-height: 100%;
}

.lacc-sandbox__audit-card--5up-offer {
    border-color: rgba(122,90,31,0.18);
    background: linear-gradient(180deg, rgba(246,243,237,0.98), rgba(255,255,255,0.96));
}

.lacc-sandbox__audit-card--5up-offer .lacc-sandbox__audit-card-media,
.lacc-sandbox__audit-card--5up-action .lacc-sandbox__audit-card-media {
    position: relative;
    aspect-ratio: 4 / 3;
    min-height: 0;
    overflow: hidden;
}

.lacc-sandbox__audit-card--5up-offer .lacc-sandbox__audit-card-media img,
.lacc-sandbox__audit-card--5up-action .lacc-sandbox__audit-card-media img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.lacc-sandbox__audit-card--5up-offer .lacc-sandbox__audit-card-media::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(255,255,255,0.08), rgba(31,34,29,0.36));
}

.lacc-sandbox__audit-card--5up-offer .lacc-sandbox__audit-card-body {
    gap: 8px;
}

.lacc-sandbox__audit-card--5up-offer .lacc-sandbox__audit-card-meta {
    margin-top: 0;
    color: rgba(81,83,74,0.68);
    font-size: 10px;
}

.lacc-sandbox__audit-card--5up-guide {
    background:
        radial-gradient(circle at top right, rgba(212,164,65,0.12), transparent 34%),
        linear-gradient(180deg, rgba(255,255,255,0.98), rgba(246,243,237,0.92));
}

.lacc-sandbox__audit-card--5up-guide .lacc-sandbox__audit-card-body {
    gap: 14px;
}

.lacc-sandbox__audit-card-list--utility li {
    padding: 11px 0;
    border-top-color: rgba(81,83,74,0.12);
    padding-left: 0;
}

.lacc-sandbox__audit-card-list--utility li::before {
    display: none;
}

.lacc-sandbox__audit-card--5up-rate {
    border-color: rgba(122,90,31,0.18);
    background:
        linear-gradient(180deg, rgba(246,243,237,0.98), rgba(255,255,255,0.96));
}

.lacc-sandbox__audit-card--5up-rate .lacc-sandbox__audit-card-body {
    justify-content: flex-start;
}

.lacc-sandbox__audit-card--5up-rate .lacc-sandbox__audit-card-price {
    align-self: flex-start;
    background: rgba(255,255,255,0.86);
}

.lacc-sandbox__audit-card--5up-rate .lacc-sandbox__audit-card-copy {
    max-width: none;
}

.lacc-sandbox__audit-card--5up-rate .lacc-sandbox__audit-card-meta-row {
    gap: 8px;
}

.lacc-sandbox__audit-card--5up-action {
    background: linear-gradient(180deg, rgba(81,83,74,0.98), rgba(60,62,56,0.98));
    color: #ffffff;
}

.lacc-sandbox__audit-card--5up-action .lacc-sandbox__audit-card-media::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(31,34,29,0.16), rgba(31,34,29,0.62));
}

.lacc-sandbox__audit-card--5up-action .lacc-sandbox__audit-card-body,
.lacc-sandbox__audit-card--5up-action .lacc-sandbox__audit-card-title,
.lacc-sandbox__audit-card--5up-action .lacc-sandbox__audit-card-copy,
.lacc-sandbox__audit-card--5up-action .lacc-sandbox__audit-card-meta {
    color: #ffffff;
}

.lacc-sandbox__audit-card--5up-action .lacc-sandbox__audit-card-meta {
    margin-top: 0;
    color: rgba(255,255,255,0.76);
    font-size: 10px;
}

.lacc-sandbox__audit-card--5up-action .lacc-sandbox__audit-card-button {
    align-self: flex-start;
}

.lacc-sandbox__audit-card-list-column-title {
    margin: 0;
    color: var(--lacc-sandbox-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(20px, 1.8vw, 24px);
    line-height: 1;
    letter-spacing: .08em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card-list-column-items {
    display: grid;
    gap: 0;
    margin: 0;
    padding: 0;
    list-style: none;
}

.lacc-sandbox__audit-card-list-column-items li {
    padding: 14px 0;
    border-top: 1px solid rgba(122,90,31,0.22);
    color: #51534a;
    font-size: 14px;
    line-height: 1.55;
    list-style: none;
}

.lacc-sandbox__audit-card-list-column-items li:first-child {
    padding-top: 0;
    border-top: 0;
}

.lacc-sandbox__audit-card-list-column-items li:last-child {
    padding-bottom: 0;
}

.lacc-sandbox__audit-card-pill {
    display: inline-flex;
    align-items: center;
    min-height: 28px;
    padding: 6px 10px;
    border-radius: 999px;
    background: rgba(255,255,255,0.08);
    color: #ffffff;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.lacc-sandbox__audit-card--package .lacc-sandbox__audit-card-pill {
    background: rgba(122,90,31,0.12);
    color: #946E29;
}

.lacc-sandbox__audit-card--utility .lacc-sandbox__audit-card-pill {
    background: rgba(81,83,74,0.08);
    color: #51534a;
}

.lacc-sandbox__nav-active-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 16px;
}

.lacc-sandbox__nav-active-card {
    border: 1px solid rgba(81,83,74,0.16);
    background: rgba(255,255,255,0.94);
}

.lacc-sandbox__nav-dropdown-card {
    margin-bottom: 104px;
}

.lacc-sandbox__nav-dropdown-card:last-child {
    margin-bottom: 0;
}

.lacc-sandbox__nav-active-head {
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    gap: 12px;
    padding: 12px 14px;
    border-bottom: 1px solid rgba(81,83,74,0.12);
}

.lacc-sandbox__nav-active-label {
    margin: 0;
    color: var(--lacc-sandbox-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 18px;
    line-height: 1.1;
}

.lacc-sandbox__nav-active-note {
    margin: 0;
    color: rgba(81,83,74,0.8);
    font-size: 12px;
    line-height: 1.5;
}

.lacc-sandbox__nav-active-shell {
    padding: 14px;
    background: var(--lacc-sandbox-gradient-blue);
}

.lacc-sandbox__nav-active-menu {
    display: flex;
    align-items: center;
    gap: 16px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.lacc-sandbox__nav-active-menu li,
.lacc-sandbox__nav-active-menu a {
    list-style: none;
}

.lacc-sandbox__nav-active-menu > li {
    position: relative;
}

.lacc-sandbox__nav-dropdown-card .lacc-sandbox__nav-active-shell {
    position: relative;
    overflow: visible;
}

.lacc-sandbox__nav-active-link {
    display: inline-flex;
    align-items: center;
    min-height: 44px;
    padding: 11px 16px;
    color: #ffffff;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .11em;
    line-height: 1.2;
    text-decoration: none;
    text-transform: uppercase;
    transition: all .18s ease;
}

.lacc-sandbox__nav-active-link.is-active {
    background: rgba(255,255,255,0.14);
}

.lacc-sandbox__nav-active-card--opt-1 .lacc-sandbox__nav-active-link.is-active {
    background: transparent;
    border-bottom: 3px solid rgba(255,255,255,0.84);
    padding-bottom: 8px;
}

.lacc-sandbox__nav-active-card--opt-2 .lacc-sandbox__nav-active-link.is-active {
    background: rgba(255,255,255,0.22);
    border: 1px solid rgba(255,255,255,0.38);
}

.lacc-sandbox__nav-active-card--opt-3 .lacc-sandbox__nav-active-link.is-active {
    border-left: 4px solid rgba(255,255,255,0.84);
    padding-left: 12px;
    background: rgba(255,255,255,0.08);
}

.lacc-sandbox__nav-active-card--opt-4 .lacc-sandbox__nav-active-link.is-active {
    border: 1px solid rgba(255,255,255,0.84);
    background: transparent;
}

.lacc-sandbox__nav-active-card--opt-5 .lacc-sandbox__nav-active-link.is-active {
    background: rgba(255,255,255,0.14);
    box-shadow: inset 0 0 16px rgba(255,255,255,0.12);
}

.lacc-sandbox__nav-dropdown-menu {
    display: flex;
    flex-direction: column;
    gap: 0;
    margin: 0;
    padding: 0;
    min-width: 220px;
    list-style: none;
}

.lacc-sandbox__nav-dropdown-menu > li {
    display: flex;
    align-items: center;
    min-height: 42px;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.lacc-sandbox__nav-dropdown-link {
    display: flex;
    align-items: center;
    position: relative;
    width: 100%;
    min-height: 100%;
    padding: 0 16px;
    color: rgba(255,255,255,0.84);
    font-family: Helvetica, Arial, sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1em;
    line-height: 1;
    text-decoration: none;
    text-transform: uppercase;
    transition: all .18s ease;
    border: none;
    background: transparent;
    box-sizing: border-box;
    transform: translateY(1px);
}

.lacc-sandbox__nav-dropdown-link:hover,
.lacc-sandbox__nav-dropdown-link:focus {
    text-decoration: none;
}

.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-menu {
    position: absolute;
    top: calc(100% + 14px);
    left: 0;
    z-index: 10;
}

.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-menu {
    animation: lacc-sandbox-dropdown-enter .34s cubic-bezier(0.16, 1, 0.3, 1);
}

@keyframes lacc-sandbox-dropdown-enter {
    from {
        opacity: 0;
        transform: translateY(-6px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Dropdown Option 5: Accent Reveal */
.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-menu {
    background: #ffffff;
    border: 1px solid rgba(81,83,74,0.16);
    border-top: 3px solid rgba(212,164,65,0.54);
    box-shadow: 0 12px 28px rgba(31,34,29,0.14);
}

.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-link {
    color: #324c6a;
    font-size: 11px;
}

.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-link:visited {
    color: #324c6a;
}

.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-menu > li + li {
    border-top: 1px solid rgba(81,83,74,0.25);
}

.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-menu > li:hover,
.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-menu > li:focus-within {
    background: var(--lacc-sandbox-gradient-cream);
}

.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-link:hover,
.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-link:focus {
    color: #1f3552;
}

.lacc-sandbox__nav-dropdown-card--opt-5 .lacc-sandbox__nav-dropdown-link:focus-visible {
    color: #1f3552;
}

@media (max-width: 1080px) {
    .lacc-sandbox__criteria-grid,
    .lacc-sandbox__details-grid,
    .lacc-sandbox__illustration-grid {
        grid-template-columns: 1fr 1fr;
    }

    .lacc-sandbox__cards-row--4up,
    .lacc-sandbox__cards-row--5up {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .lacc-sandbox__cards-row--2up,
    .lacc-sandbox__cards-row--3up,
    .lacc-sandbox__cards-row-notes--3up,
    .lacc-sandbox__cue-study,
    .lacc-sandbox__eyebrow-family-grid,
    .lacc-sandbox__table-study,
    .lacc-sandbox__logo-gallery,
    .lacc-sandbox__control-showcase,
    .lacc-sandbox__arrow-study-grid,
    .lacc-sandbox__list-study {
        grid-template-columns: 1fr;
    }

    .lacc-sandbox__audit-card-stay-facts {
        grid-template-columns: 1fr;
    }

    .lacc-sandbox__logo-card--tall {
        width: 100%;
    }
}

@media (max-width: 720px) {
    .lacc-sandbox__lane-head {
        align-items: flex-start;
    }

    .lacc-sandbox__illustration-grid,
    .lacc-sandbox__illustration-surfaces,
    .lacc-sandbox__cards-row--4up,
    .lacc-sandbox__cards-row--5up,
    .lacc-sandbox__cue-study,
    .lacc-sandbox__eyebrow-family-grid,
    .lacc-sandbox__logo-gallery,
    .lacc-sandbox__list-study,
    .lacc-sandbox__specimen--row,
    .lacc-sandbox__type-row {
        grid-template-columns: 1fr;
    }

    .lacc-sandbox__arrow-control--symbol {
        width: 74px;
        height: 74px;
    }

    .lacc-sandbox__arrow-control--logo-arrow {
        width: auto;
        height: auto;
    }
}
</style>

<div class="lacc-sandbox">
    <div class="lacc-sandbox__intro">
        <div class="lacc-sandbox__panel">
            <span class="lacc-sandbox__eyebrow">Design Sandbox</span>
            <h1 class="lacc-sandbox__title">Pattern staging area for flex demos and pre-library sections</h1>
            <div class="lacc-sandbox__copy">
                <?php if ( $sandbox_content ) : ?>
                    <?php echo apply_filters( 'the_content', $sandbox_content ); ?>
                <?php else : ?>
                    <p>Use this page to stage new patterns, compare adjacent directions, and only promote the pieces that feel stable enough to standardize.</p>
                <?php endif; ?>
            </div>
            <div class="lacc-sandbox__utility-stack">
                <article class="lacc-sandbox__specimen">
                    <span class="lacc-sandbox__specimen-label">Builder-ready candidate</span>
                    <h3 class="lacc-sandbox__specimen-title">Close to production</h3>
                    <div class="lacc-sandbox__specimen-copy">
                        <p>Patterns in this lane should be visually resolved enough to map cleanly to fields, flexible sections, and reusable content rules.</p>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen">
                    <span class="lacc-sandbox__specimen-label">Field-ready</span>
                    <h3 class="lacc-sandbox__specimen-title">Configuration is clear</h3>
                    <div class="lacc-sandbox__specimen-copy">
                        <p>Promote to this state when the visual language is stable and the ACF field model feels obvious enough to standardize.</p>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen">
                    <span class="lacc-sandbox__specimen-label">Approved reference</span>
                    <h3 class="lacc-sandbox__specimen-title">Ready for the library</h3>
                    <div class="lacc-sandbox__specimen-copy">
                        <p>Move only the strongest, named, stable patterns into the design system below. Everything else stays here until it earns that promotion.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Foundations Audit</span>
                    <h2 class="lacc-sandbox__lane-title">Type, links, buttons, badges, and form controls</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--approved">Approved reference</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p>These are the primitives that should settle first. If these drift, every section will keep speaking in slightly different dialects.</p>
            </div>
            <div class="lacc-sandbox__primitives-grid">
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Type</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>Give the system enough room to see the actual hierarchy. This row now shows display, editorial, utility, body, and inline-link behavior together.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                        <div class="lacc-sandbox__type-stack">
                            <div class="lacc-sandbox__type-row">
                                <span class="lacc-sandbox__type-label">XL H1<small>Wireframe hero, video hero / clamp(50px, 7vw, 92px)</small></span>
                                <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--xl">Get Away.<br>Get Inspired.</p>
                            </div>
                            <div class="lacc-sandbox__type-row">
                                <span class="lacc-sandbox__type-label">H1<small>Primary display / clamp(48px, 6vw, 76px)</small></span>
                                <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--h1">A mountain stay with room to breathe</p>
                            </div>
                            <div class="lacc-sandbox__type-row">
                                <span class="lacc-sandbox__type-label">H2<small>Section display / clamp(40px, 4.8vw, 58px)</small></span>
                                <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--h2">A place to gather, not just dine</p>
                            </div>
                            <div class="lacc-sandbox__type-row">
                                <span class="lacc-sandbox__type-label">H3<small>Supporting display / clamp(32px, 3.6vw, 44px)</small></span>
                                <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--h3">Find your kind of mountain time</p>
                            </div>
                            <div class="lacc-sandbox__type-row">
                                <span class="lacc-sandbox__type-label">H4<small>Freight italic / clamp(28px, 3vw, 34px)</small></span>
                                <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--h4">Freight Big Pro section heading</p>
                            </div>
                            <div class="lacc-sandbox__type-row">
                                <span class="lacc-sandbox__type-label">H5<small>Freight italic / clamp(22px, 2.4vw, 28px)</small></span>
                                <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--h5">Freight Big Pro supporting line</p>
                            </div>
                            <div class="lacc-sandbox__type-row">
                                <span class="lacc-sandbox__type-label">H6<small>Haarlem 16px / Helvetica 14px</small></span>
                                <div>
                                    <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--h6">Haarlem utility heading</p>
                                    <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--h6-helvetica" style="margin-top:8px;">Helvetica utility heading</p>
                                </div>
                            </div>
                            <div class="lacc-sandbox__type-row">
                                <span class="lacc-sandbox__type-label">Lede<small>Editorial intro / clamp(21px, 2.1vw, 26px)</small></span>
                                <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--lede">A slower, editorial opening line that adds warmth without taking over from the display heading.</p>
                            </div>
                            <div class="lacc-sandbox__type-row">
                                <span class="lacc-sandbox__type-label">Body<small>System copy / 16px</small></span>
                                <p class="lacc-sandbox__type-sample lacc-sandbox__type-sample--body">Use the body style for the bulk of hospitality copy, then let an <a href="#" class="lacc-sandbox__inline-link">inline editorial link</a> or <a href="#" class="lacc-sandbox__inline-link lacc-sandbox__inline-link--gold">gold hospitality link</a> carry emphasis without turning the paragraph into a button row.</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Actions</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>Keep the live button set tight: one primary action, one ink utility fill, and one accessible gold fill using the darker old-gold tone.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                    <div class="lacc-sandbox__button-row">
                        <a href="#" class="lacc-sandbox__button lacc-sandbox__button--primary">Primary</a>
                        <a href="#" class="lacc-sandbox__button lacc-sandbox__button--ink">Ink Fill</a>
                        <a href="#" class="lacc-sandbox__button lacc-sandbox__button--gold">Gold Fill</a>
                    </div>
                    <div class="lacc-sandbox__link-row">
                        <a href="#" class="lacc-sandbox__inline-link">Editorial link</a>
                        <a href="#" class="lacc-sandbox__inline-link lacc-sandbox__inline-link--gold">Hospitality link</a>
                    </div>
                    <div class="lacc-sandbox__badge-row">
                        <span class="lacc-sandbox__badge">ACF+</span>
                        <span class="lacc-sandbox__badge">New</span>
                    </div>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Gradients</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>Keep gradients locked to three approved transitions only so depth feels intentional rather than decorative improvisation.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                        <div class="lacc-sandbox__gradient-grid">
                            <article class="lacc-sandbox__gradient-card">
                                <div class="lacc-sandbox__gradient-swatch" style="--gradient-fill: var(--lacc-sandbox-gradient-blue);"></div>
                                <div class="lacc-sandbox__gradient-card-body">
                                    <h3 class="lacc-sandbox__gradient-name">Blue To Deep Blue</h3>
                                    <div class="lacc-sandbox__gradient-spec">#3F5F85 to #324C6A</div>
                                    <p class="lacc-sandbox__gradient-note">Use for atmospheric panels, image overlays, and blue-led feature surfaces where a flat fill feels too abrupt.</p>
                                </div>
                            </article>
                            <article class="lacc-sandbox__gradient-card">
                                <div class="lacc-sandbox__gradient-swatch" style="--gradient-fill: var(--lacc-sandbox-gradient-cream);"></div>
                                <div class="lacc-sandbox__gradient-card-body">
                                    <h3 class="lacc-sandbox__gradient-name">White To Cream</h3>
                                    <div class="lacc-sandbox__gradient-spec">#FFFFFF to #F6F3ED</div>
                                    <p class="lacc-sandbox__gradient-note">Use for elevated content surfaces, foundations panels, and quiet depth where the hospitality tone should stay soft.</p>
                                </div>
                            </article>
                            <article class="lacc-sandbox__gradient-card">
                                <div class="lacc-sandbox__gradient-swatch" style="--gradient-fill: var(--lacc-sandbox-gradient-ink);"></div>
                                <div class="lacc-sandbox__gradient-card-body">
                                    <h3 class="lacc-sandbox__gradient-name">Deep Ink To Ink</h3>
                                    <div class="lacc-sandbox__gradient-spec">#3C3E38 to #51534A</div>
                                    <p class="lacc-sandbox__gradient-note">Use for dramatic editorial surfaces, dark atmospheric cards, and ink-led panels that need depth without shifting blue.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">List Styles</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>List language is down to two approved directions, and the open table slot now holds the next comparison surfaces to tune before they are documented more formally.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                        <div class="lacc-sandbox__list-study">
                            <article class="lacc-sandbox__list-card lacc-sandbox__list-card--editorial">
                                <span class="lacc-sandbox__specimen-label">Editorial</span>
                                <h3 class="lacc-sandbox__list-card-title">Gold-star editorial list</h3>
                                <ul class="lacc-sandbox__editorial-list">
                                    <li>Pair with ledes, split features, and article-adjacent copy.</li>
                                    <li>Use the gold star marker we have already been carrying elsewhere in the system.</li>
                                    <li>Best when each item reads like a complete sentence.</li>
                                </ul>
                            </article>
                            <article class="lacc-sandbox__list-card lacc-sandbox__list-card--utility">
                                <span class="lacc-sandbox__specimen-label">Utility</span>
                                <h3 class="lacc-sandbox__list-card-title">Keyline utility list</h3>
                                <ul class="lacc-sandbox__utility-list">
                                    <li>Arrival windows and parking instructions</li>
                                    <li>Conference planning requirements</li>
                                    <li>Family stay preparation notes</li>
                                </ul>
                            </article>
                            <article class="lacc-sandbox__list-card lacc-sandbox__list-card--tables">
                                <span class="lacc-sandbox__specimen-label">Tables</span>
                                <h3 class="lacc-sandbox__list-card-title">Comparison and specs table study</h3>
                                <div class="lacc-sandbox__table-study">
                                    <article class="lacc-sandbox__table-card">
                                        <span class="lacc-sandbox__table-card-label">Wide Comparison</span>
                                        <h4 class="lacc-sandbox__table-card-title">Meeting space capacity table</h4>
                                        <p class="lacc-sandbox__table-card-copy">Lead with a dense brown header row, quiet alternating bands, and enough breathing room for the room name to stay readable before the numbers begin.</p>
                                        <div class="lacc-sandbox__table-wrap">
                                            <table class="lacc-sandbox__table lacc-sandbox__table--comparison">
                                                <thead>
                                                    <tr>
                                                        <th>Meeting Room</th>
                                                        <th>Square Feet</th>
                                                        <th>Theater</th>
                                                        <th>Classroom</th>
                                                        <th>Conference</th>
                                                        <th>Social</th>
                                                        <th>Fireplace</th>
                                                        <th>Deck / Patio</th>
                                                        <th>ADA</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Pineview</td>
                                                        <td>1,512</td>
                                                        <td>200</td>
                                                        <td>102</td>
                                                        <td>36</td>
                                                        <td>175</td>
                                                        <td>Yes</td>
                                                        <td>Yes</td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Iris</td>
                                                        <td>1,080</td>
                                                        <td>90</td>
                                                        <td>66</td>
                                                        <td>30</td>
                                                        <td>150</td>
                                                        <td>Yes</td>
                                                        <td>Yes</td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lakeview</td>
                                                        <td>943</td>
                                                        <td>90</td>
                                                        <td>54</td>
                                                        <td>30</td>
                                                        <td>90</td>
                                                        <td>No</td>
                                                        <td>Yes</td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Skyview</td>
                                                        <td>460</td>
                                                        <td>30</td>
                                                        <td>21</td>
                                                        <td>15</td>
                                                        <td>20</td>
                                                        <td>Yes</td>
                                                        <td>Yes</td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Outdoor Amphitheater</td>
                                                        <td>3,408</td>
                                                        <td>350</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>Yes</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </article>
                                    <article class="lacc-sandbox__table-card">
                                        <span class="lacc-sandbox__table-card-label">Compact Specs</span>
                                        <h4 class="lacc-sandbox__table-card-title">Room package amenities</h4>
                                        <p class="lacc-sandbox__table-card-copy">The smaller table should still feel like hospitality content, not backend software: stronger labels, tighter spacing, and enough contrast for quick comparison.</p>
                                        <div class="lacc-sandbox__table-wrap">
                                            <table class="lacc-sandbox__table lacc-sandbox__table--specs">
                                                <thead>
                                                    <tr>
                                                        <th>Amenity</th>
                                                        <th>Standard Stay</th>
                                                        <th>Package Upgrade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Breakfast</td>
                                                        <td>Optional add-on</td>
                                                        <td>Included for two guests</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Welcome beverage</td>
                                                        <td>Lobby coffee service</td>
                                                        <td>In-room hospitality setup</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Late checkout</td>
                                                        <td>Based on availability</td>
                                                        <td>Guaranteed 1pm departure</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Parking</td>
                                                        <td>Included</td>
                                                        <td>Included</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </article>
                                </div>
                            </article>
                        </div>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Form Fields</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>Text fields are in a good place. This row expands the audit to the controls that usually drift last: select carets, radios, and checkboxes.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                    <div class="lacc-sandbox__form-stack">
                        <input class="lacc-sandbox__field" type="text" value="Guest name">
                        <select class="lacc-sandbox__select">
                            <option>Choose a stay type</option>
                        </select>
                        <textarea class="lacc-sandbox__textarea">A field tone check for forms and inquiries.</textarea>
                        <div class="lacc-sandbox__choice-grid">
                            <label class="lacc-sandbox__choice"><input type="checkbox" checked> Receive lodge updates</label>
                            <label class="lacc-sandbox__choice"><input type="checkbox"> Include dining offers</label>
                        </div>
                        <div class="lacc-sandbox__choice-grid">
                            <label class="lacc-sandbox__choice"><input type="radio" name="sandbox-stay" checked> Leisure stay</label>
                            <label class="lacc-sandbox__choice"><input type="radio" name="sandbox-stay"> Event planning</label>
                        </div>
                    </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- Component Specimens: Button (Locked 2026-04-27) -->
    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Component: Button</span>
                    <h2 class="lacc-sandbox__lane-title">Button Variants (Locked 2026-04-27)</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--approved">approved</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p><strong>Purpose:</strong> Primary interactive element carrying brand intent through color, typography, and state feedback.</p>
                <p><strong>Tokens:</strong> color-action-primary, color-action-primary-hover, color-action-on-primary, type-family-ui</p>
                <p><strong>Status:</strong> Contract locked in docs/design-system/components/button.md. Sandbox specimens ready for visual QA. Ready for promotion gate validation.</p>
            </div>
        </div>
        <div class="lacc-sandbox__specimen-main" style="padding: 24px 28px; border: 1px solid rgba(81,83,74,0.14); background: rgba(255,255,255,0.88);">
            <h3 style="margin: 0 0 16px; font-size: 18px; font-weight: 700;">Variant: Primary (Default)</h3>
            <div class="lacc-sandbox__button-row">
                <a href="#" class="lacc-sandbox__button lacc-sandbox__button--primary">Standard</a>
                <a href="#" class="lacc-sandbox__button lacc-sandbox__button--primary" style="font-size: 16px; padding: 1em 1.8em;">Large</a>
                <a href="#" class="lacc-sandbox__button lacc-sandbox__button--primary" style="font-size: 12px; padding: 0.7em 1.2em;">Small</a>
            </div>

            <h3 style="margin: 24px 0 16px; font-size: 18px; font-weight: 700;">Variant: Secondary (Outlined)</h3>
            <div class="lacc-sandbox__button-row">
                <a href="#" class="lacc-sandbox__button" style="border: 1px solid #3f5f85; color: #3f5f85; background: transparent;">Standard</a>
                <a href="#" class="lacc-sandbox__button" style="font-size: 16px; padding: 1em 1.8em; border: 1px solid #3f5f85; color: #3f5f85; background: transparent;">Large</a>
                <a href="#" class="lacc-sandbox__button" style="font-size: 12px; padding: 0.7em 1.2em; border: 1px solid #3f5f85; color: #3f5f85; background: transparent;">Small</a>
            </div>

            <h3 style="margin: 24px 0 16px; font-size: 18px; font-weight: 700;">Variant: Tertiary (Text Only)</h3>
            <div class="lacc-sandbox__button-row">
                <a href="#" class="lacc-sandbox__button" style="border: none; color: #3f5f85; background: transparent; text-decoration: underline;">Standard</a>
                <a href="#" class="lacc-sandbox__button" style="font-size: 16px; padding: 1em 1.8em; border: none; color: #3f5f85; background: transparent; text-decoration: underline;">Large</a>
                <a href="#" class="lacc-sandbox__button" style="font-size: 12px; padding: 0.7em 1.2em; border: none; color: #3f5f85; background: transparent; text-decoration: underline;">Small</a>
            </div>

            <h3 style="margin: 24px 0 16px; font-size: 18px; font-weight: 700;">State: Hover/Focus</h3>
            <div class="lacc-sandbox__button-row">
                <a href="#" class="lacc-sandbox__button lacc-sandbox__button--primary" style="background: #324c6a; cursor: pointer;">Primary Hover</a>
                <a href="#" class="lacc-sandbox__button" style="border: 1px solid #324c6a; color: #324c6a; background: #f6f3ed; cursor: pointer;">Secondary Hover</a>
                <a href="#" class="lacc-sandbox__button" style="border: none; color: #324c6a; background: transparent; text-decoration: underline; cursor: pointer;">Tertiary Hover</a>
            </div>
        </div>
    </div>

    <!-- Component Specimens: Navigation (Locked 2026-04-27) -->
    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Component: Navigation</span>
                    <h2 class="lacc-sandbox__lane-title">Navigation Component (Locked 2026-04-27)</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--approved">contract locked</span>
                    <span class="lacc-sandbox__status lacc-sandbox__status--criteria">accessibility pending</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p><strong>Purpose:</strong> Primary site navigation with desktop horizontal menu, mobile collapsible panel, and submenu support.</p>
                <p><strong>File:</strong> components/components-primary-nav.php</p>
                <p><strong>Tokens:</strong> color-brand-primary, color-brand-primary-deep, color-bg-soft, color-text-inverse, type-family-ui</p>
                <p><strong>Status:</strong> Contract documented in docs/design-system/components/navigation.md. Desktop/mobile behavior implemented. Next: accessibility full pass (keyboard, screen reader, focus management).</p>
            </div>
        </div>
        <div class="lacc-sandbox__specimen-main" style="padding: 24px 28px; border: 1px solid rgba(81,83,74,0.14); background: rgba(255,255,255,0.88);">
            <h3 style="margin: 0 0 16px; font-size: 18px; font-weight: 700;">Specimen: Desktop Navigation Preview</h3>
            <p style="margin: 0 0 16px; color: #51534a; font-size: 14px;">Current implementation at lal.local/ - scroll to top. Shows: fixed gradient bar, brand logo, horizontal menu items, white text, hover states with cream background on secondary items.</p>
            <iframe src="<?php echo esc_url( home_url( '/' ) ); ?>" style="width: 100%; height: 180px; border: 1px solid #ddd; border-radius: 2px; display: block;" title="Desktop Navigation Preview"></iframe>

            <h3 style="margin: 24px 0 16px; font-size: 18px; font-weight: 700;">Specimen: Mobile Navigation States</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                <div style="border: 1px solid #ddd; border-radius: 2px; overflow: hidden; background: #f9f9f9;">
                    <div style="padding: 12px; background: linear-gradient(180deg, #3f5f85, #324c6a); color: #fff; font-size: 12px; font-weight: 700; text-transform: uppercase;">
                        Mobile: Closed
                    </div>
                    <div style="padding: 16px; text-align: center; font-size: 14px; color: #51534a;">
                        Hamburger menu visible, panel hidden, call CTA in panel (hidden)
                    </div>
                </div>
                <div style="border: 1px solid #ddd; border-radius: 2px; overflow: hidden; background: #f9f9f9;">
                    <div style="padding: 12px; background: linear-gradient(180deg, #3f5f85, #324c6a); color: #fff; font-size: 12px; font-weight: 700; text-transform: uppercase;">
                        Mobile: Expanded Menu
                    </div>
                    <div style="padding: 16px; font-size: 13px; color: #51534a; max-height: 200px; overflow-y: auto;">
                        <div style="padding: 12px; background: rgba(241,239,233,0.98); margin-bottom: 8px; font-size: 22px; font-weight: 600; letter-spacing: .03em;">Menu Item</div>
                        <div style="padding: 8px 12px; color: #324c6a; font-size: 17px; font-weight: 500;">Submenu Item</div>
                        <div style="padding: 12px; background: linear-gradient(180deg, #3f5f85, #324c6a); color: #fff; font-size: 14px; font-weight: 700; letter-spacing: .1em; text-align: center; margin-top: 16px;">Call 909-337-2478</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Utility Details</span>
                    <h2 class="lacc-sandbox__lane-title">Utility details before we get to cards</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--approved">Shared details</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p>These sit between pure primitives and larger components. They are small, but they change the voice of the whole system, so it helps to review them one family at a time before card families start compounding the variation.</p>
            </div>
            <div class="lacc-sandbox__utility-stack">
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Eyebrows</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>These should stay utility-first and never compete with the display line. The comparison only gets clearer when each eyebrow family has its own full row.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                        <div class="lacc-sandbox__eyebrow-grid">
                            <section class="lacc-sandbox__eyebrow-family" aria-label="Haarlem eyebrow family">
                                <h3 class="lacc-sandbox__eyebrow-family-title">Haarlem Family</h3>
                                <div class="lacc-sandbox__eyebrow-family-grid">
                                    <div class="lacc-sandbox__eyebrow-variant">
                                        <span class="lacc-sandbox__eyebrow-caption">Plain</span>
                                        <span class="lacc-sandbox__eyebrow-sample lacc-sandbox__eyebrow-sample--plain">From The Journal</span>
                                    </div>
                                    <div class="lacc-sandbox__eyebrow-variant">
                                        <span class="lacc-sandbox__eyebrow-caption">Pill</span>
                                        <span class="lacc-sandbox__eyebrow-sample lacc-sandbox__eyebrow-sample--pill">Lake Arrowhead</span>
                                    </div>
                                    <div class="lacc-sandbox__eyebrow-variant">
                                        <span class="lacc-sandbox__eyebrow-caption">Ink</span>
                                        <span class="lacc-sandbox__eyebrow-sample lacc-sandbox__eyebrow-sample--ink">Rooms And Rates</span>
                                    </div>
                                    <div class="lacc-sandbox__eyebrow-variant">
                                        <span class="lacc-sandbox__eyebrow-caption">Fill / No Border</span>
                                        <span class="lacc-sandbox__eyebrow-sample lacc-sandbox__eyebrow-sample--fill lacc-sandbox__eyebrow-sample--borderless">Gather In The Pines</span>
                                    </div>
                                </div>
                            </section>
                            <section class="lacc-sandbox__eyebrow-family" aria-label="Helvetica eyebrow family">
                                <h3 class="lacc-sandbox__eyebrow-family-title">Helvetica Family</h3>
                                <div class="lacc-sandbox__eyebrow-family-grid">
                                    <div class="lacc-sandbox__eyebrow-variant">
                                        <span class="lacc-sandbox__eyebrow-caption">Plain</span>
                                        <span class="lacc-sandbox__eyebrow-sample lacc-sandbox__eyebrow-sample--plain lacc-sandbox__eyebrow-sample--helvetica">Event Guide</span>
                                    </div>
                                    <div class="lacc-sandbox__eyebrow-variant">
                                        <span class="lacc-sandbox__eyebrow-caption">Pill</span>
                                        <span class="lacc-sandbox__eyebrow-sample lacc-sandbox__eyebrow-sample--pill lacc-sandbox__eyebrow-sample--helvetica">North Shore Tavern</span>
                                    </div>
                                    <div class="lacc-sandbox__eyebrow-variant">
                                        <span class="lacc-sandbox__eyebrow-caption">Ink</span>
                                        <span class="lacc-sandbox__eyebrow-sample lacc-sandbox__eyebrow-sample--ink lacc-sandbox__eyebrow-sample--helvetica">Plan Your Stay</span>
                                    </div>
                                    <div class="lacc-sandbox__eyebrow-variant">
                                        <span class="lacc-sandbox__eyebrow-caption">Fill / No Border</span>
                                        <span class="lacc-sandbox__eyebrow-sample lacc-sandbox__eyebrow-sample--fill lacc-sandbox__eyebrow-sample--borderless lacc-sandbox__eyebrow-sample--helvetica">Weddings &amp; Events</span>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row lacc-sandbox__specimen--cue-row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Badge And Banner Cues</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>Keep these as a distinct cue system rather than letting them hide inside carousel controls. The default banner stays brand green, with blue and old-gold variants reserved for supporting use.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                        <div class="lacc-sandbox__cue-study">
                            <article class="lacc-sandbox__cue-study-card">
                                <span class="lacc-sandbox__arrow-banner">Take Away</span>
                                <div class="lacc-sandbox__cue-study-meta">
                                    <span class="lacc-sandbox__cue-study-label">Default Green Flag</span>
                                    <p class="lacc-sandbox__cue-study-copy">Use this as the primary cue for takeaways, overlays, and feature callouts.</p>
                                </div>
                            </article>
                            <article class="lacc-sandbox__cue-study-card lacc-sandbox__cue-study-card--blue">
                                <span class="lacc-sandbox__arrow-banner lacc-sandbox__arrow-banner--blue">Welcome</span>
                                <div class="lacc-sandbox__cue-study-meta">
                                    <span class="lacc-sandbox__cue-study-label">Supporting Blue</span>
                                    <p class="lacc-sandbox__cue-study-copy">Reserve blue for softer welcomes, orientation, and adjacent wayfinding moments.</p>
                                </div>
                            </article>
                            <article class="lacc-sandbox__cue-study-card lacc-sandbox__cue-study-card--gold">
                                <span class="lacc-sandbox__arrow-banner lacc-sandbox__arrow-banner--gold">Explore</span>
                                <div class="lacc-sandbox__cue-study-meta">
                                    <span class="lacc-sandbox__cue-study-label">Supporting Old Gold</span>
                                    <p class="lacc-sandbox__cue-study-copy">Keep gold for selective emphasis when a warmer supporting accent helps the sequence.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Graphic Language</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>Scrollwork, dividers, and arrow cues should separate, frame, or punctuate. If any one of them starts to behave like a headline, it is doing too much.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                        <div class="lacc-sandbox__graphic-stack">
                            <span class="lacc-sandbox__graphic-swatch" aria-hidden="true"></span>
                            <span class="lacc-sandbox__graphic-divider" aria-hidden="true"></span>
                            <span class="lacc-sandbox__graphic-arrow" aria-hidden="true"></span>
                        </div>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Logos</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>Keep the logo system constrained to approved lockups and surface pairings so brand marks do not drift across page families.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                        <div class="lacc-sandbox__logo-gallery">
                            <div class="lacc-sandbox__logo-card lacc-sandbox__logo-card--blue">
                                <img src="<?php echo esc_url( $sandbox_brand_assets['logo_ccfr'] ); ?>" alt="Lake Arrowhead CCFR color and white logo preview">
                                <div class="lacc-sandbox__logo-meta">
                                    <span class="lacc-sandbox__logo-name">CCFR Color + White</span>
                                    <span class="lacc-sandbox__logo-note">Lead with the color-and-white lockup on the blue field so the multi-tone brand treatment reads first.</span>
                                </div>
                            </div>
                            <div class="lacc-sandbox__logo-card lacc-sandbox__logo-card--dark lacc-sandbox__logo-card--reverse">
                                <img src="<?php echo esc_url( $sandbox_brand_assets['logo_arrowhead'] ); ?>" alt="Lake Arrowhead Arrowhead green logo preview filtered to white">
                                <div class="lacc-sandbox__logo-meta">
                                    <span class="lacc-sandbox__logo-name">Arrowhead Green To White</span>
                                    <span class="lacc-sandbox__logo-note">Use the Arrowhead export on ink by filtering it to white so the silhouette stays clean on dense dark surfaces.</span>
                                </div>
                            </div>
                            <div class="lacc-sandbox__logo-card lacc-sandbox__logo-card--tall">
                                <img src="<?php echo esc_url( $sandbox_brand_assets['logo_tavern'] ); ?>" alt="North Shore Tavern logo preview">
                                <div class="lacc-sandbox__logo-meta">
                                    <span class="lacc-sandbox__logo-name">North Shore Tavern</span>
                                    <span class="lacc-sandbox__logo-note">Scale the sub-brand mark wider so it reads as a full lockup rather than a small badge inside the card.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Carousel Controls</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>There is room for both if they stay in distinct roles: a quieter control family derived from the existing scrollwork linework for editorial utility, and a bolder symbol family that borrows the same arrowhead geometry for storytelling, wayfinding, and branded moments.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                        <div class="lacc-sandbox__arrow-study-grid">
                            <article class="lacc-sandbox__arrow-study lacc-sandbox__arrow-study--linework">
                                <div class="lacc-sandbox__arrow-study-head">
                                    <span class="lacc-sandbox__arrow-study-label">Pulled From Scrollwork</span>
                                    <h3 class="lacc-sandbox__arrow-study-title">Linework navigation family</h3>
                                    <p class="lacc-sandbox__arrow-study-copy">This stays closest to the existing ornament language: open chevrons, stems, and stacked movement cues. It fits editorial sliders, room-detail galleries, supporting navigation, and any moment where the controls should guide the eye without becoming the story.</p>
                                </div>
                                <div class="lacc-sandbox__arrow-study-preview">
                                    <p class="lacc-sandbox__arrow-study-note">Arrow buttons</p>
                                    <div class="lacc-sandbox__arrow-study-controls">
                                        <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--linework" aria-label="Previous slide linework arrow study">
                                            <svg viewBox="0 0 40 40" aria-hidden="true">
                                                <path d="M8 20 H28" />
                                                <path d="M17 11 L8 20 L17 29" />
                                                <path d="M26 11 L17 20 L26 29" />
                                            </svg>
                                        </button>
                                        <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--linework is-reverse" aria-label="Next slide linework arrow study">
                                            <svg viewBox="0 0 40 40" aria-hidden="true">
                                                <path d="M8 20 H28" />
                                                <path d="M17 11 L8 20 L17 29" />
                                                <path d="M26 11 L17 20 L26 29" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="lacc-sandbox__arrow-study-preview lacc-sandbox__arrow-study-preview--dark">
                                    <p class="lacc-sandbox__arrow-study-note">Page indicators</p>
                                    <div class="lacc-sandbox__arrow-study-indicators">
                                        <span class="lacc-sandbox__page-dot lacc-sandbox__page-dot--line is-active" aria-hidden="true"></span>
                                        <span class="lacc-sandbox__page-dot lacc-sandbox__page-dot--line" aria-hidden="true"></span>
                                        <span class="lacc-sandbox__page-dot lacc-sandbox__page-dot--line" aria-hidden="true"></span>
                                        <span class="lacc-sandbox__page-count">01 / 04</span>
                                    </div>
                                </div>
                                <ul class="lacc-sandbox__arrow-study-list">
                                    <li>Strongest brand fit of the two directions.</li>
                                    <li>Best for editorial utility, image browsing, and quieter supporting navigation.</li>
                                </ul>
                            </article>
                            <article class="lacc-sandbox__arrow-study lacc-sandbox__arrow-study--symbol">
                                <div class="lacc-sandbox__arrow-study-head">
                                    <span class="lacc-sandbox__arrow-study-label">New Symbol Family</span>
                                    <h3 class="lacc-sandbox__arrow-study-title">Graphic medallions and signage cues</h3>
                                    <p class="lacc-sandbox__arrow-study-copy">This is the more assertive lane. It is not a literal crop from the scrollwork, but it keeps the arrowhead geometry and warm taupe tone while moving toward storytelling, wayfinding, badges, and promotional moments.</p>
                                </div>
                                <div class="lacc-sandbox__arrow-study-preview">
                                    <p class="lacc-sandbox__arrow-study-note">Medallion arrows</p>
                                    <div class="lacc-sandbox__arrow-study-controls lacc-sandbox__arrow-study-controls--medallion">
                                        <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--symbol" aria-label="Previous slide medallion arrow study">
                                            <svg viewBox="0 0 64 64" aria-hidden="true">
                                                <path d="M45 32 H20" stroke="#ffffff" stroke-width="4"></path>
                                                <path d="M31 17 L17 32 L31 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                            </svg>
                                        </button>
                                        <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--symbol" aria-label="Next slide medallion arrow study">
                                            <svg viewBox="0 0 64 64" aria-hidden="true">
                                                <path d="M19 32 H44" stroke="#ffffff" stroke-width="4"></path>
                                                <path d="M33 17 L47 32 L33 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                            </svg>
                                        </button>
                                        <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--logo-arrow" aria-label="Simplified logo arrow study">
                                            <svg viewBox="0 0 44 54" aria-hidden="true">
                                                <path d="M16.2 45.6L9 31.4L13.4 22.9L17 30L20.6 37.1L16.2 45.6ZM20.7 32.9L18.1 27.8L14.5 20.7L20.7 8.5V32.9ZM22.7 8.4L28.9 20.6L25.3 27.7L22.7 32.8V8.4ZM22.8 37L26.4 29.9L30 22.8L34.4 31.3L27.2 45.5L22.8 37Z" fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <ul class="lacc-sandbox__arrow-study-list">
                                    <li>Best for storytelling modules, campaign moments, feature callouts, and directional signage.</li>
                                    <li>Useful as a secondary brand language when we want the control itself to carry character.</li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </article>
                <article class="lacc-sandbox__specimen lacc-sandbox__specimen--row">
                    <div class="lacc-sandbox__specimen-intro">
                        <span class="lacc-sandbox__specimen-label">Pause / Play</span>
                        <div class="lacc-sandbox__specimen-copy">
                            <p>Media controls should inherit our button language rather than introducing a new anonymous control family. The icon changes, but the shell stays in-system.</p>
                        </div>
                    </div>
                    <div class="lacc-sandbox__specimen-main">
                        <div class="lacc-sandbox__media-control-showcase">
                            <div class="lacc-sandbox__media-card">
                                <div class="lacc-sandbox__media-button-row">
                                    <button type="button" class="lacc-sandbox__button lacc-sandbox__button--primary lacc-sandbox__media-control" aria-label="Play media preview">
                                        <span class="lacc-sandbox__play-icon" aria-hidden="true"></span>
                                        <span class="lacc-sandbox__pauseplay-label">Play</span>
                                    </button>
                                    <button type="button" class="lacc-sandbox__button lacc-sandbox__button--ink lacc-sandbox__media-control" aria-label="Pause media preview">
                                        <span class="lacc-sandbox__pause-icon" aria-hidden="true"></span>
                                        <span class="lacc-sandbox__pauseplay-label">Pause</span>
                                    </button>
                                    <button type="button" class="lacc-sandbox__button lacc-sandbox__button--gold lacc-sandbox__media-control" aria-label="Resume autoplay preview">
                                        <span class="lacc-sandbox__play-icon" aria-hidden="true"></span>
                                        <span class="lacc-sandbox__pauseplay-label">Autoplay</span>
                                    </button>
                                </div>
                                <p class="lacc-sandbox__media-note">Use the same button shells as the rest of the system so pause and play feel native to the page rather than like third-party video chrome.</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Card Audit</span>
                    <h2 class="lacc-sandbox__lane-title">Compare card roles before multiplying variants</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--builder">Builder-ready candidates</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p>This lane is now testing both role and density. The same family has to survive at 50%, then 3-up, 4-up, and even 5-up without turning into a new dialect every time the grid changes.</p>
            </div>
            <div class="lacc-sandbox__cards-grid">
                <div class="lacc-sandbox__cards-row-head">
                    <h3 class="lacc-sandbox__cards-row-title">2-up / 50% width studies</h3>
                    <p class="lacc-sandbox__cards-row-note">Use this row for stronger destination and promo cards that need room for media, hierarchy, and richer metadata.</p>
                </div>
                <div class="lacc-sandbox__cards-row lacc-sandbox__cards-row--2up">
                    <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--stay">
                        <div class="lacc-sandbox__audit-card-media">
                            <div class="lacc-sandbox__audit-card-carousel" data-sandbox-card-carousel>
                                <div class="lacc-sandbox__audit-card-slide is-active">
                                    <img src="<?php echo esc_url( $sandbox_card_assets['chalet_exterior'] ); ?>" alt="Open Chalet exterior view">
                                </div>
                                <div class="lacc-sandbox__audit-card-slide">
                                    <img src="<?php echo esc_url( $sandbox_card_assets['chalet_room'] ); ?>" alt="Open Chalet living and bedroom view">
                                </div>
                                <div class="lacc-sandbox__audit-card-slide">
                                    <img src="<?php echo esc_url( $sandbox_card_assets['chalet_bath'] ); ?>" alt="Open Chalet bath and robe view">
                                </div>
                                <div class="lacc-sandbox__audit-card-carousel-controls">
                                    <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--linework" data-sandbox-card-prev aria-label="Previous chalet image">
                                        <svg viewBox="0 0 40 40" aria-hidden="true">
                                            <path d="M8 20 H28"></path>
                                            <path d="M17 11 L8 20 L17 29"></path>
                                            <path d="M26 11 L17 20 L26 29"></path>
                                        </svg>
                                    </button>
                                    <div class="lacc-sandbox__audit-card-carousel-count" aria-hidden="true">
                                        <div class="lacc-sandbox__audit-card-carousel-dots">
                                            <span class="lacc-sandbox__audit-card-carousel-dot is-active"></span>
                                            <span class="lacc-sandbox__audit-card-carousel-dot"></span>
                                            <span class="lacc-sandbox__audit-card-carousel-dot"></span>
                                        </div>
                                        <span>3 views</span>
                                    </div>
                                    <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--linework is-reverse" data-sandbox-card-next aria-label="Next chalet image">
                                        <svg viewBox="0 0 40 40" aria-hidden="true">
                                            <path d="M8 20 H28"></path>
                                            <path d="M17 11 L8 20 L17 29"></path>
                                            <path d="M26 11 L17 20 L26 29"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="lacc-sandbox__audit-card-body">
                            <h3 class="lacc-sandbox__audit-card-title">Open Chalet</h3>
                            <div class="lacc-sandbox__audit-card-stay-price">
                                <strong>from $329</strong>
                                <span>Per night</span>
                            </div>
                            <p class="lacc-sandbox__audit-card-copy">Escape to nature with friends or family in a two-bedroom open-concept chalet. The first floor pairs a queen bed with a studio-style living room and fireplace, while the upper level gives the stay a quieter private retreat.</p>
                            <div class="lacc-sandbox__audit-card-pills">
                                <span class="lacc-sandbox__audit-card-pill lacc-sandbox__audit-card-pill--amenity">2 Beds</span>
                                <span class="lacc-sandbox__audit-card-pill lacc-sandbox__audit-card-pill--amenity">2 Baths</span>
                                <span class="lacc-sandbox__audit-card-pill lacc-sandbox__audit-card-pill--amenity">Fireplace</span>
                                <span class="lacc-sandbox__audit-card-pill lacc-sandbox__audit-card-pill--amenity">Deck</span>
                            </div>
                            <div class="lacc-sandbox__audit-card-stay-facts">
                                <div>
                                    <span>Sleeps</span>
                                    <strong>Up to 5</strong>
                                </div>
                                <div>
                                    <span>Best For</span>
                                    <strong>Families</strong>
                                </div>
                                <div>
                                    <span>View</span>
                                    <strong>Forest + deck</strong>
                                </div>
                            </div>
                            <a href="#" class="lacc-sandbox__audit-card-button lacc-sandbox__audit-card-button--gold">Check Availability</a>
                        </div>
                    </article>
                    <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--special">
                        <div class="lacc-sandbox__audit-card-media">
                            <div class="lacc-sandbox__audit-card-special-hero">
                                <img src="<?php echo esc_url( $sandbox_card_assets['special_book_early'] ); ?>" alt="Book Early and Save special card study">
                                <div class="lacc-sandbox__audit-card-special-rule"></div>
                                <div class="lacc-sandbox__audit-card-special-band">
                                    <h3 class="lacc-sandbox__audit-card-special-title">Book Early &amp; Save</h3>
                                </div>
                            </div>
                        </div>
                        <div class="lacc-sandbox__audit-card-body">
                            <h3 class="lacc-sandbox__audit-card-special-subtitle">Plan Now, Relax Later</h3>
                            <div class="lacc-sandbox__audit-card-stay-price">
                                <strong>from $245</strong>
                                <span>Per night</span>
                            </div>
                            <p class="lacc-sandbox__audit-card-copy"><strong>Book at least 14 days in advance to receive:</strong></p>
                            <ul class="lacc-sandbox__editorial-list">
                                <li>20% off the best available rate</li>
                                <li>$50 resort credit</li>
                                <li>Time away to enjoy quiet tranquility</li>
                            </ul>
                            <a href="#" class="lacc-sandbox__audit-card-button lacc-sandbox__audit-card-button--gold">Book Now</a>
                        </div>
                    </article>
                </div>
                <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                    <ul>
                        <li>Stay / 50%.</li>
                        <li>Stay gallery.</li>
                        <li>Open Chalet stay card uses editorial media treatment with booking-oriented body content.</li>
                    </ul>
                </div>

                <div class="lacc-sandbox__cards-row-head">
                    <h3 class="lacc-sandbox__cards-row-title">3-up row</h3>
                    <p class="lacc-sandbox__cards-row-note">Three-up is a good middle density for editorial, utility, and package roles living together without feeling crushed.</p>
                </div>
                <div class="lacc-sandbox__cards-row lacc-sandbox__cards-row--3up">
                    <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--editorial">
                        <div class="lacc-sandbox__audit-card-media">
                            <span class="lacc-sandbox__arrow-banner lacc-sandbox__audit-card-media-banner">Seasonal Story</span>
                            <div class="lacc-sandbox__audit-card-carousel" data-sandbox-card-carousel>
                                <div class="lacc-sandbox__audit-card-slide is-active">
                                    <img src="<?php echo esc_url( $sandbox_card_assets['chalet_exterior'] ); ?>" alt="Editorial card chalet deck view">
                                </div>
                                <div class="lacc-sandbox__audit-card-slide">
                                    <img src="<?php echo esc_url( $sandbox_card_assets['chalet_room'] ); ?>" alt="Editorial card chalet interior view">
                                </div>
                                <div class="lacc-sandbox__audit-card-slide">
                                    <img src="<?php echo esc_url( $sandbox_card_assets['chalet_bath'] ); ?>" alt="Editorial card chalet bath view">
                                </div>
                                <div class="lacc-sandbox__audit-card-carousel-controls">
                                    <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--linework" data-sandbox-card-prev aria-label="Previous editorial image">
                                        <svg viewBox="0 0 40 40" aria-hidden="true">
                                            <path d="M8 20 H28"></path>
                                            <path d="M17 11 L8 20 L17 29"></path>
                                            <path d="M26 11 L17 20 L26 29"></path>
                                        </svg>
                                    </button>
                                    <div class="lacc-sandbox__audit-card-carousel-count" aria-hidden="true">
                                        <div class="lacc-sandbox__audit-card-carousel-dots">
                                            <span class="lacc-sandbox__audit-card-carousel-dot is-active"></span>
                                            <span class="lacc-sandbox__audit-card-carousel-dot"></span>
                                            <span class="lacc-sandbox__audit-card-carousel-dot"></span>
                                        </div>
                                        <span>3 views</span>
                                    </div>
                                    <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--linework is-reverse" data-sandbox-card-next aria-label="Next editorial image">
                                        <svg viewBox="0 0 40 40" aria-hidden="true">
                                            <path d="M8 20 H28"></path>
                                            <path d="M17 11 L8 20 L17 29"></path>
                                            <path d="M26 11 L17 20 L26 29"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="lacc-sandbox__audit-card-body">
                            <h3 class="lacc-sandbox__audit-card-title">Narrative feature card with a carousel-led hero</h3>
                            <p class="lacc-sandbox__audit-card-copy">Use when the image needs to establish mood first and the card is selling atmosphere as much as information.</p>
                            <div class="lacc-sandbox__audit-card-meta-row">
                                <span class="lacc-sandbox__audit-card-pill">3-image set</span>
                            </div>
                            <a href="#" class="lacc-sandbox__audit-card-button">Explore the Story</a>
                        </div>
                    </article>
                    <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--utility">
                        <div class="lacc-sandbox__audit-card-media">
                            <span class="lacc-sandbox__arrow-banner lacc-sandbox__audit-card-media-banner">Planning Checklist</span>
                            <img src="<?php echo esc_url( $sandbox_card_assets['chalet_bath'] ); ?>" alt="Utility card planning image from gallery">
                        </div>
                        <div class="lacc-sandbox__audit-card-body">
                            <h3 class="lacc-sandbox__audit-card-title">Informational support card</h3>
                            <p class="lacc-sandbox__audit-card-copy">Use for structured guidance, lists, and planning cues when clarity matters more than image drama.</p>
                            <ul class="lacc-sandbox__audit-card-list">
                                <li>Arrival check-in steps</li>
                                <li>What to bring for family weekends</li>
                                <li>Pre-event planning reminders</li>
                            </ul>
                        </div>
                    </article>
                    <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--pricing-tier lacc-sandbox__audit-card--pricing-tier-featured">
                        <div class="lacc-sandbox__audit-card-body">
                            <div class="lacc-sandbox__badge lacc-sandbox__badge--featured lacc-sandbox__audit-card-tier-badge">Most Popular</div>
                            <h3 class="lacc-sandbox__audit-card-title">Pineview</h3>
                            <p class="lacc-sandbox__audit-card-tier-capacity">Up to 100 guests</p>
                            <p class="lacc-sandbox__audit-card-tier-kicker">Fri-Sat from</p>
                            <div class="lacc-sandbox__audit-card-price">
                                <strong>$16,500</strong>
                                <span>Package Rate</span>
                            </div>
                            <p class="lacc-sandbox__audit-card-tier-subprice">Sun-Thu from $13,500</p>
                            <p class="lacc-sandbox__audit-card-copy">Extra guests from $150/pp</p>
                            <ul class="lacc-sandbox__audit-card-tier-list">
                                <li>Ceremony in the Pineview Room</li>
                                <li>Cocktail hour in the Lakeview Room</li>
                                <li>Reception in Pineview &amp; Lakeview</li>
                                <li>Buffet dinner with 2 entrees, 2 sides, soup, salad &amp; bread</li>
                                <li>Non-alcoholic beverages, coffee &amp; tea</li>
                                <li>6 rooms + 2 houses included</li>
                                <li>9am-10pm full-day access</li>
                            </ul>
                            <a href="#" class="lacc-sandbox__audit-card-button lacc-sandbox__audit-card-button--gold">Inquire About Pineview</a>
                        </div>
                    </article>
                </div>
                <div class="lacc-sandbox__cards-row-notes lacc-sandbox__cards-row-notes--3up">
                    <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                        <ul>
                            <li>Editorial.</li>
                            <li>High drama.</li>
                        </ul>
                    </div>
                    <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                        <ul>
                            <li>Utility.</li>
                            <li>The eyebrow frames the card as a planning checklist before the headline and image do the heavier lifting.</li>
                        </ul>
                    </div>
                    <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                        <ul>
                            <li>Pricing tier.</li>
                            <li>Comparison-column replacement for the 3-up package slot.</li>
                        </ul>
                    </div>
                </div>

                <div class="lacc-sandbox__cards-row-head">
                    <h3 class="lacc-sandbox__cards-row-title">3-up pricing row</h3>
                    <p class="lacc-sandbox__cards-row-note">A dedicated comparison row can share the card shell while swapping the image-led package slot for a full pricing-tier family.</p>
                </div>
                <div class="lacc-sandbox__cards-row lacc-sandbox__cards-row--3up lacc-sandbox__cards-row--pricing">
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--pricing-tier lacc-sandbox__audit-card--pricing-tier-featured">
                            <div class="lacc-sandbox__audit-card-body">
                                <div class="lacc-sandbox__audit-card-tier-badge-spacer" aria-hidden="true"></div>
                                <h3 class="lacc-sandbox__audit-card-title">Iris</h3>
                                <p class="lacc-sandbox__audit-card-tier-capacity">Up to 50 guests</p>
                                <p class="lacc-sandbox__audit-card-tier-kicker">Fri-Sat from</p>
                                <div class="lacc-sandbox__audit-card-price">
                                    <strong>$10,000</strong>
                                    <span>Package Rate</span>
                                </div>
                                <p class="lacc-sandbox__audit-card-tier-subprice">Sun-Thu from $8,000</p>
                                <p class="lacc-sandbox__audit-card-copy">Extra guests from $150/pp</p>
                                <ul class="lacc-sandbox__audit-card-tier-list">
                                    <li>Ceremony in the Iris Room</li>
                                    <li>Cocktail hour on North Shore Tavern &amp; Patio</li>
                                    <li>Reception in the Iris Room</li>
                                    <li>Buffet dinner with 2 entrees, 2 sides, soup, salad &amp; bread</li>
                                    <li>Non-alcoholic beverages, coffee &amp; tea</li>
                                    <li>6 rooms included</li>
                                    <li>9am-10pm full-day access</li>
                                </ul>
                                <a href="#" class="lacc-sandbox__audit-card-button lacc-sandbox__audit-card-button--gold">Inquire About Iris</a>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Pricing tier.</li>
                                <li>Smallest capacity column.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--pricing-tier">
                            <div class="lacc-sandbox__audit-card-body">
                                <div class="lacc-sandbox__badge lacc-sandbox__badge--featured lacc-sandbox__audit-card-tier-badge">Most Popular</div>
                                <h3 class="lacc-sandbox__audit-card-title">Pineview</h3>
                                <p class="lacc-sandbox__audit-card-tier-capacity">Up to 100 guests</p>
                                <p class="lacc-sandbox__audit-card-tier-kicker">Fri-Sat from</p>
                                <div class="lacc-sandbox__audit-card-price">
                                    <strong>$16,500</strong>
                                    <span>Package Rate</span>
                                </div>
                                <p class="lacc-sandbox__audit-card-tier-subprice">Sun-Thu from $13,500</p>
                                <p class="lacc-sandbox__audit-card-copy">Extra guests from $150/pp</p>
                                <ul class="lacc-sandbox__audit-card-tier-list">
                                    <li>Ceremony in the Pineview Room</li>
                                    <li>Cocktail hour in the Lakeview Room</li>
                                    <li>Reception in Pineview &amp; Lakeview</li>
                                    <li>Buffet dinner with 2 entrees, 2 sides, soup, salad &amp; bread</li>
                                    <li>Non-alcoholic beverages, coffee &amp; tea</li>
                                    <li>6 rooms + 2 houses included</li>
                                    <li>9am-10pm full-day access</li>
                                </ul>
                                <a href="#" class="lacc-sandbox__audit-card-button lacc-sandbox__audit-card-button--gold">Inquire About Pineview</a>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Pricing tier.</li>
                                <li>Centered comparison anchor with badge.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--pricing-tier">
                            <div class="lacc-sandbox__audit-card-body">
                                <div class="lacc-sandbox__audit-card-tier-badge-spacer" aria-hidden="true"></div>
                                <h3 class="lacc-sandbox__audit-card-title">Grand Pineview</h3>
                                <p class="lacc-sandbox__audit-card-tier-capacity">Up to 150 guests</p>
                                <p class="lacc-sandbox__audit-card-tier-kicker">Fri-Sat from</p>
                                <div class="lacc-sandbox__audit-card-price">
                                    <strong>$32,500</strong>
                                    <span>Package Rate</span>
                                </div>
                                <p class="lacc-sandbox__audit-card-tier-subprice">Sun-Thu from $26,000</p>
                                <p class="lacc-sandbox__audit-card-copy">Extra guests from $150/pp</p>
                                <ul class="lacc-sandbox__audit-card-tier-list">
                                    <li>Ceremony in the Pineview Room</li>
                                    <li>Cocktail hour in Lakeview &amp; Library</li>
                                    <li>Reception across Pineview, Lakeview &amp; Library</li>
                                    <li>Buffet dinner with 2 entrees, 2 sides, soup, salad &amp; bread</li>
                                    <li>Non-alcoholic beverages, coffee &amp; tea</li>
                                    <li>6 rooms + 2 deluxe chalets + 2 houses included</li>
                                    <li>9am-10pm full-day access</li>
                                </ul>
                                <a href="#" class="lacc-sandbox__audit-card-button lacc-sandbox__audit-card-button--gold">Inquire About Grand Pineview</a>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Pricing tier.</li>
                                <li>Largest capacity column.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="lacc-sandbox__cards-row-head">
                    <h3 class="lacc-sandbox__cards-row-title">4-up row</h3>
                    <p class="lacc-sandbox__cards-row-note">This is still the default system density for mixed card families.</p>
                </div>
                <div class="lacc-sandbox__cards-row lacc-sandbox__cards-row--4up">
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--editorial">
                            <div class="lacc-sandbox__audit-card-media">
                                <div class="lacc-sandbox__audit-card-carousel" data-sandbox-card-carousel>
                                    <div class="lacc-sandbox__audit-card-slide is-active">
                                        <img src="<?php echo esc_url( $sandbox_card_assets['chalet_exterior'] ); ?>" alt="4-up editorial card chalet exterior view">
                                    </div>
                                    <div class="lacc-sandbox__audit-card-slide">
                                        <img src="<?php echo esc_url( $sandbox_card_assets['chalet_room'] ); ?>" alt="4-up editorial card chalet room view">
                                    </div>
                                    <div class="lacc-sandbox__audit-card-slide">
                                        <img src="<?php echo esc_url( $sandbox_card_assets['chalet_bath'] ); ?>" alt="4-up editorial card chalet bath view">
                                    </div>
                                    <div class="lacc-sandbox__audit-card-carousel-controls">
                                        <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--linework" data-sandbox-card-prev aria-label="Previous 4-up editorial image">
                                            <svg viewBox="0 0 40 40" aria-hidden="true">
                                                <path d="M8 20 H28"></path>
                                                <path d="M17 11 L8 20 L17 29"></path>
                                                <path d="M26 11 L17 20 L26 29"></path>
                                            </svg>
                                        </button>
                                        <div class="lacc-sandbox__audit-card-carousel-count" aria-hidden="true">
                                            <div class="lacc-sandbox__audit-card-carousel-dots">
                                                <span class="lacc-sandbox__audit-card-carousel-dot is-active"></span>
                                                <span class="lacc-sandbox__audit-card-carousel-dot"></span>
                                                <span class="lacc-sandbox__audit-card-carousel-dot"></span>
                                            </div>
                                            <span>3 views</span>
                                        </div>
                                        <button type="button" class="lacc-sandbox__arrow-control lacc-sandbox__arrow-control--linework is-reverse" data-sandbox-card-next aria-label="Next 4-up editorial image">
                                            <svg viewBox="0 0 40 40" aria-hidden="true">
                                                <path d="M8 20 H28"></path>
                                                <path d="M17 11 L8 20 L17 29"></path>
                                                <path d="M26 11 L17 20 L26 29"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="lacc-sandbox__audit-card-body">
                                <h3 class="lacc-sandbox__audit-card-title">Atmospheric card</h3>
                                <p class="lacc-sandbox__audit-card-copy">Best when the image needs to carry the mood.</p>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Editorial.</li>
                                <li>Image-led.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--utility">
                            <div class="lacc-sandbox__audit-card-media">
                                <img src="<?php echo esc_url( $sandbox_card_assets['chalet_bath'] ); ?>" alt="4-up utility card planning image from gallery">
                            </div>
                            <div class="lacc-sandbox__audit-card-body">
                                <h3 class="lacc-sandbox__audit-card-title">Guide card</h3>
                                <p class="lacc-sandbox__audit-card-copy">Tighter informational support for planning lanes.</p>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Utility.</li>
                                <li>Supportive.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--package">
                            <div class="lacc-sandbox__audit-card-media">
                                <img src="<?php echo esc_url( $sandbox_card_assets['chalet_room'] ); ?>" alt="4-up package card offer image from gallery">
                                <div class="lacc-sandbox__audit-card-price">
                                    <strong>$245</strong>
                                    <span>Starting Rate</span>
                                </div>
                            </div>
                            <div class="lacc-sandbox__audit-card-body">
                                <h3 class="lacc-sandbox__audit-card-title">Offer card</h3>
                                <p class="lacc-sandbox__audit-card-copy">Shorter package read for grouped promotions.</p>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Package.</li>
                                <li>Conversion.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--cta">
                            <div class="lacc-sandbox__audit-card-media">
                                <img src="<?php echo esc_url( $sandbox_card_assets['chalet_lounge'] ); ?>" alt="4-up CTA card image from gallery">
                            </div>
                            <div class="lacc-sandbox__audit-card-body">
                                <h3 class="lacc-sandbox__audit-card-title">Prompt card</h3>
                                <p class="lacc-sandbox__audit-card-copy">Short next-step prompt with a stronger call to action.</p>
                                <a href="#" class="lacc-sandbox__audit-card-button">Start Planning</a>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>CTA.</li>
                                <li>Action-first.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="lacc-sandbox__cards-row-head">
                    <h3 class="lacc-sandbox__cards-row-title">5-up row</h3>
                    <p class="lacc-sandbox__cards-row-note">At five-up the cards have to become simpler and faster to scan, which is a good stress test for how much decoration each family can carry.</p>
                </div>
                <div class="lacc-sandbox__cards-row lacc-sandbox__cards-row--5up">
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--list-column">
                            <div class="lacc-sandbox__audit-card-body">
                                <h3 class="lacc-sandbox__audit-card-list-column-title">Additional Events</h3>
                                <ul class="lacc-sandbox__audit-card-list-column-items">
                                    <li>Private rehearsal dinner (up to 40)</li>
                                    <li>Day-after breakfast (up to 40)</li>
                                    <li>Continental breakfast for wedding party</li>
                                    <li>Gift bag delivery</li>
                                </ul>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>List-led 5-up card.</li>
                                <li>Single-column add-ons translation of the wedding reference.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--5up-offer">
                            <div class="lacc-sandbox__audit-card-media">
                                <img src="<?php echo esc_url( $sandbox_card_assets['special_book_early'] ); ?>" alt="Book early 5-up offer study image">
                            </div>
                            <div class="lacc-sandbox__audit-card-body">
                                <div class="lacc-sandbox__audit-card-meta">Midweek offer</div>
                                <h3 class="lacc-sandbox__audit-card-title">Book Early</h3>
                                <p class="lacc-sandbox__audit-card-copy">Save 15% on select Sunday through Thursday stays.</p>
                                <a href="#" class="lacc-sandbox__audit-card-button lacc-sandbox__audit-card-button--gold">See Dates</a>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Promo-led compact offer.</li>
                                <li>Image, single hook, short CTA.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--5up-guide">
                            <div class="lacc-sandbox__audit-card-body">
                                <div class="lacc-sandbox__audit-card-meta">Planning guide</div>
                                <h3 class="lacc-sandbox__audit-card-title">Before You Arrive</h3>
                                <ul class="lacc-sandbox__audit-card-list lacc-sandbox__audit-card-list--utility">
                                    <li>Confirm rooming list</li>
                                    <li>Finalize AV needs</li>
                                    <li>Share arrival timing</li>
                                </ul>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Utility-led compact guide.</li>
                                <li>Checklist scan pattern.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--5up-rate">
                            <div class="lacc-sandbox__audit-card-body">
                                <div class="lacc-sandbox__audit-card-price">
                                    <strong>$245</strong>
                                    <span>from / night</span>
                                </div>
                                <h3 class="lacc-sandbox__audit-card-title">Chalet Rate</h3>
                                <p class="lacc-sandbox__audit-card-copy">Best when pricing needs to land before the details do.</p>
                                <div class="lacc-sandbox__audit-card-meta-row">
                                    <span class="lacc-sandbox__audit-card-pill">2-night stay</span>
                                    <span class="lacc-sandbox__audit-card-pill">Flexible dates</span>
                                </div>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Price-led compact rate.</li>
                                <li>Number first, detail second.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="lacc-sandbox__cards-cell">
                        <article class="lacc-sandbox__audit-card lacc-sandbox__audit-card--5up-action">
                            <div class="lacc-sandbox__audit-card-media">
                                <img src="<?php echo esc_url( $sandbox_card_assets['chalet_lounge'] ); ?>" alt="Start planning 5-up CTA study image">
                            </div>
                            <div class="lacc-sandbox__audit-card-body">
                                <div class="lacc-sandbox__audit-card-meta">Start here</div>
                                <h3 class="lacc-sandbox__audit-card-title">Start Planning</h3>
                                <p class="lacc-sandbox__audit-card-copy">Talk through dates, lodging, and weekend flow with our team.</p>
                                <a href="#" class="lacc-sandbox__audit-card-button">Contact Sales</a>
                            </div>
                        </article>
                        <div class="lacc-sandbox__lane-copy lacc-sandbox__cards-cell-note">
                            <ul>
                                <li>Action-led compact CTA.</li>
                                <li>Short headline and button.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Illustration Staging</span>
                    <h2 class="lacc-sandbox__lane-title">Review exports before they become background utilities</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--exploratory">In review</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p>Keep illustration exports here until they prove they can hold their texture, scale cleanly, and stay decorative when screened into a container background. Only promote the strongest motifs into the reference library after the source format and usage rules are settled.</p>
            </div>
            <?php if ( ! empty( $sandbox_illustration_assets ) ) : ?>
                <div class="lacc-sandbox__illustration-grid">
                    <?php foreach ( $sandbox_illustration_assets as $sandbox_illustration_asset ) : ?>
                        <article class="lacc-sandbox__illustration-card">
                            <div class="lacc-sandbox__illustration-preview lacc-sandbox__illustration-preview--cream" data-illustration-preview>
                                <span class="lacc-sandbox__illustration-preview-state" data-illustration-preview-state>Cream</span>
                                <img src="<?php echo esc_url( $sandbox_illustration_asset['src'] ); ?>" alt="<?php echo esc_attr( $sandbox_illustration_asset['label'] ); ?> illustration export preview">
                            </div>
                            <div class="lacc-sandbox__illustration-body">
                                <div class="lacc-sandbox__illustration-meta">
                                    <span class="lacc-sandbox__illustration-format"><?php echo esc_html( $sandbox_illustration_asset['format'] ); ?></span>
                                    <span class="lacc-sandbox__illustration-state lacc-sandbox__illustration-state--<?php echo esc_attr( sanitize_title( $sandbox_illustration_asset['status'] ) ); ?>"><?php echo esc_html( $sandbox_illustration_asset['status'] ); ?></span>
                                </div>
                                <h3 class="lacc-sandbox__illustration-name"><?php echo esc_html( $sandbox_illustration_asset['label'] ); ?></h3>
                                <div class="lacc-sandbox__illustration-specs"><?php echo esc_html( trim( $sandbox_illustration_asset['dimensions'] . ' • ' . $sandbox_illustration_asset['filesize'], ' •' ) ); ?></div>
                                <p class="lacc-sandbox__illustration-note"><?php echo esc_html( $sandbox_illustration_asset['recommendation'] ); ?></p>
                                <div class="lacc-sandbox__illustration-surfaces">
                                    <div class="lacc-sandbox__illustration-surface lacc-sandbox__illustration-surface--cream" data-preview-surface="cream" tabindex="0" style="--illustration-url:url('<?php echo esc_url( $sandbox_illustration_asset['src'] ); ?>');">
                                        <span class="lacc-sandbox__illustration-surface-label">Cream</span>
                                    </div>
                                    <div class="lacc-sandbox__illustration-surface lacc-sandbox__illustration-surface--white" data-preview-surface="white" tabindex="0" style="--illustration-url:url('<?php echo esc_url( $sandbox_illustration_asset['src'] ); ?>');">
                                        <span class="lacc-sandbox__illustration-surface-label">White</span>
                                    </div>
                                    <div class="lacc-sandbox__illustration-surface lacc-sandbox__illustration-surface--mist" data-preview-surface="mist" tabindex="0" style="--illustration-url:url('<?php echo esc_url( $sandbox_illustration_asset['src'] ); ?>');">
                                        <span class="lacc-sandbox__illustration-surface-label">Mist</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <article class="lacc-sandbox__specimen">
                    <span class="lacc-sandbox__specimen-label">Waiting On Exports</span>
                    <div class="lacc-sandbox__specimen-copy">
                        <p>Drop files into <code>/brand/illustrations</code> and they will appear here automatically for review.</p>
                    </div>
                </article>
            <?php endif; ?>
        </div>
    </div>

    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Wireframe Pattern Audit</span>
                    <h2 class="lacc-sandbox__lane-title">Preserved explorations from the mockup page</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--exploratory">Exploratory</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p>This lane keeps the full mockup exploration set intact so we can audit section language without losing variants during refactors.</p>
                <ul>
                    <li>Hero and intro pattern direction</li>
                    <li>North Shore Tavern split treatment</li>
                    <li>Stay cards, gallery wall, experiences, about band, FAQ, and CTA band</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="lacc-sandbox__mockup-wrap">
        <?php get_template_part( 'components/components', 'wireframe-mockup-preview' ); ?>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var cardCarousels = document.querySelectorAll('[data-sandbox-card-carousel]');

        cardCarousels.forEach(function (carousel) {
            var slides = carousel.querySelectorAll('.lacc-sandbox__audit-card-slide');
            var dots = carousel.querySelectorAll('.lacc-sandbox__audit-card-carousel-dot');
            var prevButton = carousel.querySelector('[data-sandbox-card-prev]');
            var nextButton = carousel.querySelector('[data-sandbox-card-next]');
            var currentIndex = 0;

            if (!slides.length) {
                return;
            }

            var setActiveSlide = function (index) {
                currentIndex = (index + slides.length) % slides.length;

                slides.forEach(function (slide, slideIndex) {
                    slide.classList.toggle('is-active', slideIndex === currentIndex);
                });

                dots.forEach(function (dot, dotIndex) {
                    dot.classList.toggle('is-active', dotIndex === currentIndex);
                });
            };

            if (prevButton) {
                prevButton.addEventListener('click', function () {
                    setActiveSlide(currentIndex - 1);
                });
            }

            if (nextButton) {
                nextButton.addEventListener('click', function () {
                    setActiveSlide(currentIndex + 1);
                });
            }

            setActiveSlide(0);
        });

        var illustrationCards = document.querySelectorAll('.lacc-sandbox__illustration-card');

        illustrationCards.forEach(function (card) {
            var preview = card.querySelector('[data-illustration-preview]');
            var previewState = card.querySelector('[data-illustration-preview-state]');
            var surfaces = card.querySelectorAll('[data-preview-surface]');

            if (!preview || !previewState || !surfaces.length) {
                return;
            }

            var setPreviewSurface = function (surfaceName) {
                preview.classList.remove('lacc-sandbox__illustration-preview--cream', 'lacc-sandbox__illustration-preview--white', 'lacc-sandbox__illustration-preview--mist');
                preview.classList.add('lacc-sandbox__illustration-preview--' + surfaceName);
                previewState.textContent = surfaceName.charAt(0).toUpperCase() + surfaceName.slice(1);
            };

            surfaces.forEach(function (surface) {
                var surfaceName = surface.getAttribute('data-preview-surface');

                surface.addEventListener('mouseenter', function () {
                    setPreviewSurface(surfaceName);
                });

                surface.addEventListener('focus', function () {
                    setPreviewSurface(surfaceName);
                });
            });
        });
    });
    </script>

    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Builder Pattern Audit</span>
                    <h2 class="lacc-sandbox__lane-title">ACF-backed and builder-adjacent section work</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--builder">Builder-ready</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p>This lane is for patterns that already exist in the flexible builder or are close to being field-driven. Refine these here before promoting the stable rules into the design system reference.</p>
            </div>
        </div>
    </div>

    <?php if ( $flex_demo_page && have_rows( 'page_sections', $flex_demo_page->ID ) ) : ?>
        <?php while ( have_rows( 'page_sections', $flex_demo_page->ID ) ) : the_row(); ?>
            <?php if ( ! $rendered_video_hero && 'section_video_hero' === get_row_layout() ) : ?>
                <?php $rendered_video_hero = true; ?>
                <?php get_template_part( 'components/components', 'section-video-hero' ); ?>
            <?php endif; ?>
            <?php if ( ! $rendered_split_feature && 'section_split_feature' === get_row_layout() ) : ?>
                <?php get_template_part( 'components/components', 'section-split-feature' ); ?>
                <?php $rendered_split_feature = true; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( $landing_featured_article && $landing_page_source_id ) : ?>
        <div class="lacc-sandbox__lane">
            <div class="lacc-sandbox__lane-card">
                <div class="lacc-sandbox__lane-head">
                    <div>
                        <span class="lacc-sandbox__lane-label">Landing Page Pattern</span>
                        <h2 class="lacc-sandbox__lane-title">Homepage featured article specimen</h2>
                    </div>
                    <div class="lacc-sandbox__lane-statuses">
                        <span class="lacc-sandbox__status lacc-sandbox__status--builder">Builder-ready candidate</span>
                    </div>
                </div>
                <div class="lacc-sandbox__lane-copy">
                    <p>This pulls the live landing-page featured article so we can compare its panel, scrollwork seam, and editorial tone against the builder version and decide whether it should stay separate or collapse into a shared family.</p>
                </div>
            </div>
        </div>
        <?php set_query_var( 'lacc_featured_article_source_post_id', $landing_page_source_id ); ?>
        <?php get_template_part( 'components/component-featured-article' ); ?>
        <?php set_query_var( 'lacc_featured_article_source_post_id', 0 ); ?>
    <?php endif; ?>

    <?php get_template_part( 'components/components', 'section-image-collage' ); ?>
    <?php get_template_part( 'components/components', 'section-split-collage' ); ?>
    <?php get_template_part( 'components/components', 'section-faq-accordion' ); ?>

    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Primary Navbar Active States</span>
                    <h2 class="lacc-sandbox__lane-title">Staged parent-menu active treatments</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--builder">Variant review</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p>These are the five active-state directions staged side by side. The active parent item is <strong>Explore</strong> in each specimen to keep comparison clean. <strong>Option 5 (Subtle Glow with cream color shift) is approved for the live primary navbar.</strong></p>
            </div>
            <div class="lacc-sandbox__nav-active-grid">
                <article class="lacc-sandbox__nav-active-card lacc-sandbox__nav-active-card--opt-1">
                    <div class="lacc-sandbox__nav-active-head">
                        <h3 class="lacc-sandbox__nav-active-label">Option 1: Bottom Border Accent</h3>
                        <p class="lacc-sandbox__nav-active-note">Minimal, directional indicator.</p>
                    </div>
                    <div class="lacc-sandbox__nav-active-shell">
                        <ul class="lacc-sandbox__nav-active-menu">
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Rooms</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link is-active">Explore</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Meet</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Experience</a></li>
                        </ul>
                    </div>
                </article>

                <article class="lacc-sandbox__nav-active-card lacc-sandbox__nav-active-card--opt-2">
                    <div class="lacc-sandbox__nav-active-head">
                        <h3 class="lacc-sandbox__nav-active-label">Option 2: Elevated Fill + Border</h3>
                        <p class="lacc-sandbox__nav-active-note">Stronger contrast and pressed state.</p>
                    </div>
                    <div class="lacc-sandbox__nav-active-shell">
                        <ul class="lacc-sandbox__nav-active-menu">
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Rooms</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link is-active">Explore</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Meet</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Experience</a></li>
                        </ul>
                    </div>
                </article>

                <article class="lacc-sandbox__nav-active-card lacc-sandbox__nav-active-card--opt-3">
                    <div class="lacc-sandbox__nav-active-head">
                        <h3 class="lacc-sandbox__nav-active-label">Option 3: Left Border Accent</h3>
                        <p class="lacc-sandbox__nav-active-note">Structured category marker.</p>
                    </div>
                    <div class="lacc-sandbox__nav-active-shell">
                        <ul class="lacc-sandbox__nav-active-menu">
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Rooms</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link is-active">Explore</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Meet</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Experience</a></li>
                        </ul>
                    </div>
                </article>

                <article class="lacc-sandbox__nav-active-card lacc-sandbox__nav-active-card--opt-4">
                    <div class="lacc-sandbox__nav-active-head">
                        <h3 class="lacc-sandbox__nav-active-label">Option 4: Outline Only</h3>
                        <p class="lacc-sandbox__nav-active-note">Minimal and lightweight.</p>
                    </div>
                    <div class="lacc-sandbox__nav-active-shell">
                        <ul class="lacc-sandbox__nav-active-menu">
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Rooms</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link is-active">Explore</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Meet</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Experience</a></li>
                        </ul>
                    </div>
                </article>

                <article class="lacc-sandbox__nav-active-card lacc-sandbox__nav-active-card--opt-5">
                    <div class="lacc-sandbox__nav-active-head">
                        <h3 class="lacc-sandbox__nav-active-label">Option 5: Subtle Glow</h3>
                        <p class="lacc-sandbox__nav-active-note">Soft depth without heavy edges.</p>
                    </div>
                    <div class="lacc-sandbox__nav-active-shell">
                        <ul class="lacc-sandbox__nav-active-menu">
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Rooms</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link is-active">Explore</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Meet</a></li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Experience</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Primary Navbar Dropdown Presentations</span>
                    <h2 class="lacc-sandbox__lane-title">Alternate child-item dropdown styles</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--approved">Production candidate</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p>This stage now locks a single dropdown direction beneath the <strong>Explore</strong> parent as the production candidate.</p>
            </div>
            <div class="lacc-sandbox__nav-active-grid">
                <article class="lacc-sandbox__nav-active-card lacc-sandbox__nav-dropdown-card lacc-sandbox__nav-dropdown-card--opt-5">
                    <div class="lacc-sandbox__nav-active-head">
                        <h3 class="lacc-sandbox__nav-active-label">Dropdown 5: Accent Reveal (Production)</h3>
                        <p class="lacc-sandbox__nav-active-note">Cream-gradient hover, ink hairlines, and balanced child-link centering.</p>
                    </div>
                    <div class="lacc-sandbox__nav-active-shell">
                        <ul class="lacc-sandbox__nav-active-menu">
                            <li>
                                <a href="#" class="lacc-sandbox__nav-active-link is-active">Explore</a>
                                <ul class="lacc-sandbox__nav-dropdown-menu">
                                    <li><a href="#" class="lacc-sandbox__nav-dropdown-link">getaways</a></li>
                                    <li><a href="#" class="lacc-sandbox__nav-dropdown-link">nature trails</a></li>
                                    <li><a href="#" class="lacc-sandbox__nav-dropdown-link">seasonal activities</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="lacc-sandbox__nav-active-link">Meet</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div class="lacc-sandbox__lane">
        <div class="lacc-sandbox__lane-card">
            <div class="lacc-sandbox__lane-head">
                <div>
                    <span class="lacc-sandbox__lane-label">Reference Library</span>
                    <h2 class="lacc-sandbox__lane-title">Promoted inventory</h2>
                </div>
                <div class="lacc-sandbox__lane-statuses">
                    <span class="lacc-sandbox__status lacc-sandbox__status--approved">Approved reference</span>
                </div>
            </div>
            <div class="lacc-sandbox__lane-copy">
                <p>The design system below should only contain patterns we think are named correctly, visually consistent, and stable enough to standardize. Illustration exports stay in the staging lane above until the source format and usage guidance are stable.</p>
            </div>
        </div>
    </div>

    <?php get_template_part( 'components/components', 'design-system-library' ); ?>
</div>
<?php endwhile; ?>
