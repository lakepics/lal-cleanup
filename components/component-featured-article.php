<?php
$featured_article_source_post_id = (int) get_query_var( 'lacc_featured_article_source_post_id', 0 );
$field_context_id = $featured_article_source_post_id ?: get_the_ID();

$featured_article = get_field( 'homepage_featured_article', $field_context_id );
$section_eyebrow = trim( (string) get_field( 'homepage_featured_article_eyebrow', $field_context_id ) );
$button_label = trim( (string) get_field( 'homepage_featured_article_button_text', $field_context_id ) );
$button_style = strtolower( trim( (string) get_field( 'homepage_featured_article_button_style', $field_context_id ) ) );
$image_position = strtolower( trim( (string) get_field( 'homepage_featured_article_image_position', $field_context_id ) ) );
$background_color = trim( (string) get_field( 'homepage_featured_article_background_color', $field_context_id ) );
$panel_background_color = trim( (string) get_field( 'homepage_featured_article_panel_background_color', $field_context_id ) );
$eyebrow_color = trim( (string) get_field( 'homepage_featured_article_eyebrow_color', $field_context_id ) );
$title_color = trim( (string) get_field( 'homepage_featured_article_title_color', $field_context_id ) );
$body_color = trim( (string) get_field( 'homepage_featured_article_body_color', $field_context_id ) );
$image_scrollwork_color = trim( (string) get_field( 'homepage_featured_article_image_scrollwork_color', $field_context_id ) );
$panel_scrollwork_color = trim( (string) get_field( 'homepage_featured_article_panel_scrollwork_color', $field_context_id ) );
$enable_rollover_effect = get_field( 'homepage_featured_article_enable_rollover_effect', $field_context_id );
$heading_font_family = strtolower( trim( (string) get_field( 'homepage_featured_article_heading_font_family', $field_context_id ) ) );
$heading_font_weight = trim( (string) get_field( 'homepage_featured_article_heading_font_weight', $field_context_id ) );
$keyline_position = strtolower( trim( (string) get_field( 'homepage_featured_article_keyline_position', $field_context_id ) ) );
$keyline_color = trim( (string) get_field( 'homepage_featured_article_keyline_color', $field_context_id ) );
$padding_top = trim( (string) get_field( 'homepage_featured_article_padding_top', $field_context_id ) );
$padding_bottom = trim( (string) get_field( 'homepage_featured_article_padding_bottom', $field_context_id ) );

$post_id = 0;
if ( is_object( $featured_article ) && isset( $featured_article->ID ) ) {
    $post_id = (int) $featured_article->ID;
} else {
    $post_id = (int) $featured_article;
}

if ( ! $post_id ) {
    return;
}

if ( ! in_array( $image_position, array( 'left', 'right' ), true ) ) {
    $image_position = 'left';
}

$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
if ( ! in_array( $button_style, $allowed_button_styles, true ) ) {
    $button_style = 'outline-dark';
}

$allowed_heading_weights = array( '300', '400', '500', '600', '700' );
if ( ! in_array( $heading_font_weight, $allowed_heading_weights, true ) ) {
    $heading_font_weight = '300';
}

$heading_font_css = 'HaarlemDeco, Arial, Helvetica, sans-serif';
if ( 'freight-big-pro' === $heading_font_family ) {
    $heading_font_css = '"Freight Big Pro", Georgia, serif';
}

$keyline_position = in_array( $keyline_position, array( 'top', 'bottom' ), true ) ? $keyline_position : '';
$button_label = $button_label ?: 'Read More';
$background_color = $background_color ?: '#ffffff';
$panel_background_color = $panel_background_color ?: '#f6f3ed';
$eyebrow_color = $eyebrow_color ?: '#946E29';
$title_color = $title_color ?: '#51534a';
$body_color = $body_color ?: '#51534a';
$image_scrollwork_color = $image_scrollwork_color ?: '#ffffff';
$panel_scrollwork_color = $panel_scrollwork_color ?: $eyebrow_color;
$enable_rollover_effect = ( null === $enable_rollover_effect || '' === $enable_rollover_effect ) ? 1 : $enable_rollover_effect;
$keyline_color = $keyline_color ?: $title_color;
$padding_top = $padding_top ?: '60px';
$padding_bottom = $padding_bottom ?: '60px';

$title = get_the_title( $post_id );
$permalink = get_permalink( $post_id );
$image_url = has_post_thumbnail( $post_id ) ? get_the_post_thumbnail_url( $post_id, 'large' ) : '';
$thumb_id = get_post_thumbnail_id( $post_id );
$image_alt = $thumb_id ? get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) : '';
$excerpt = trim( (string) get_the_excerpt( $post_id ) );

if ( '' === $excerpt ) {
    $excerpt = wp_trim_words( wp_strip_all_tags( (string) get_post_field( 'post_content', $post_id ) ), 38 );
}

$excerpt = trim( wp_strip_all_tags( $excerpt ) );
$excerpt = trim( preg_replace( '/\s+Continued\.?$/i', '', $excerpt ) );

if ( ! $title || ! $permalink ) {
    return;
}

$section_styles = array(
    'background-color:' . $background_color,
    'padding-top:' . $padding_top,
    'padding-bottom:' . $padding_bottom,
    '--cfa-panel-bg:' . $panel_background_color,
    '--cfa-eyebrow-color:' . $eyebrow_color,
    '--cfa-title-color:' . $title_color,
    '--cfa-body-color:' . $body_color,
    '--cfa-heading-font:' . $heading_font_css,
    '--cfa-heading-weight:' . $heading_font_weight,
    '--cfa-scrollwork-image:' . $image_scrollwork_color,
    '--cfa-scrollwork-panel:' . $panel_scrollwork_color,
);

if ( 'top' === $keyline_position ) {
    $section_styles[] = 'border-top:1px solid ' . $keyline_color;
}

if ( 'bottom' === $keyline_position ) {
    $section_styles[] = 'border-bottom:1px solid ' . $keyline_color;
}
?>

<style>
.component-featured-article {
    position: relative;
}

.component-featured-article__panel {
    position: relative;
    overflow: visible;
}

.component-featured-article--hover-enabled .component-featured-article__panel {
    box-shadow: 0 27px 32px -29px rgba(51, 51, 51, 0.5);
    transition: transform .2s ease, box-shadow .2s ease;
}

.component-featured-article--hover-enabled .component-featured-article__panel:hover,
.component-featured-article--hover-enabled .component-featured-article__panel:focus-within {
    transform: translateY(-2px);
    box-shadow: 0 30px 33px -29px rgba(51, 51, 51, 0.45);
}

.component-featured-article__row {
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    margin-left: 0;
    margin-right: 0;
}

.component-featured-article__media-column,
.component-featured-article__content-column {
    position: relative;
    display: flex;
    overflow: hidden;
    padding-left: 0;
    padding-right: 0;
}

.component-featured-article__media-column::after,
.component-featured-article__content-column::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 100%;
    width: 78px;
    pointer-events: none;
    transform: translateX(-50%);
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: repeat-y;
    mask-repeat: repeat-y;
    -webkit-mask-position: top center;
    mask-position: top center;
    -webkit-mask-size: 78px auto;
    mask-size: 78px auto;
}

.component-featured-article__media-column::after {
    background-color: var(--cfa-scrollwork-image, #ffffff);
    opacity: .75;
    z-index: 3;
}

.component-featured-article__content-column::before {
    left: 0;
    background-color: var(--cfa-scrollwork-panel, #946E29);
    opacity: .35;
    z-index: 1;
    transform: translateX(-50%);
}

.component-featured-article--image-right .component-featured-article__media-column {
    order: 2;
}

.component-featured-article--image-right .component-featured-article__content-column {
    order: 1;
}

.component-featured-article--image-right .component-featured-article__media-column::after {
    left: 0;
}

.component-featured-article--image-right .component-featured-article__content-column::before {
    right: 0;
    left: auto;
    transform: translateX(50%);
}

.component-featured-article__image-wrap {
    position: relative;
    z-index: 1;
    overflow: hidden;
    width: 100%;
    min-height: 320px;
    background: #d9d2c4;
}

.component-featured-article__image {
    display: block;
    width: 100%;
    height: 100%;
    min-height: 320px;
    object-fit: cover;
}

.component-featured-article__content {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    width: 100%;
    min-height: 100%;
    padding: clamp(32px, 4vw, 54px);
    padding-left: clamp(76px, 7vw, 118px);
    background: var(--cfa-panel-bg, #f6f3ed);
}

.component-featured-article__content > * {
    position: relative;
    z-index: 1;
}

.component-featured-article--image-right .component-featured-article__content {
    padding-left: clamp(32px, 4vw, 54px);
    padding-right: clamp(76px, 7vw, 118px);
}

.component-featured-article__eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    color: var(--cfa-eyebrow-color, #946E29);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    line-height: 1.2;
    text-transform: uppercase;
}

.component-featured-article__title {
    margin: 0 0 16px;
    color: var(--cfa-title-color, #51534a);
    font-family: var(--cfa-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: clamp(32px, 4vw, 54px);
    font-weight: var(--cfa-heading-weight, 300);
    line-height: 1.02;
    text-transform: capitalize;
}

.component-featured-article__excerpt,
.component-featured-article__excerpt p {
    color: var(--cfa-body-color, #51534a);
    font-size: 17px;
    line-height: 1.7;
    hyphens: none;
    -webkit-hyphens: none;
    -ms-hyphens: none;
}

.component-featured-article__excerpt p:last-child {
    margin-bottom: 0;
}

.component-featured-article__cta {
    margin-top: 26px;
}

.component-featured-article .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: .85em 1.45em;
    border: 1px solid transparent;
    border-radius: 0;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: .08em;
    line-height: 1.2;
    text-decoration: none !important;
    text-transform: uppercase;
    transition: background-color .2s ease, color .2s ease, border-color .2s ease, transform .2s ease, box-shadow .2s ease;
}

.component-featured-article .hero-button:hover,
.component-featured-article .hero-button:focus {
    transform: translateY(-1px);
    box-shadow: 0 10px 20px rgba(0,0,0,.12);
}

.component-featured-article .hero-button--primary {
    background: #946E29;
    border-color: #946E29;
    color: #fff !important;
}

.component-featured-article .hero-button--primary:hover,
.component-featured-article .hero-button--primary:focus {
    background: #7b5a20;
    border-color: #7b5a20;
}

.component-featured-article .hero-button--secondary,
.component-featured-article .hero-button--outline-gold {
    background: transparent;
    border-color: #946E29;
    color: #946E29 !important;
}

.component-featured-article .hero-button--secondary:hover,
.component-featured-article .hero-button--secondary:focus,
.component-featured-article .hero-button--outline-gold:hover,
.component-featured-article .hero-button--outline-gold:focus {
    background: rgba(245,182,43,0.12) !important;
    border-color: #d8b15a !important;
    color: #7b5a20 !important;
}

.component-featured-article .hero-button--brown,
.component-featured-article .hero-button--outline-dark,
.component-featured-article .hero-button--outline {
    background: transparent;
    border-color: #51534a;
    color: #51534a !important;
}

.component-featured-article .hero-button--brown:hover,
.component-featured-article .hero-button--brown:focus,
.component-featured-article .hero-button--outline-dark:hover,
.component-featured-article .hero-button--outline-dark:focus,
.component-featured-article .hero-button--outline:hover,
.component-featured-article .hero-button--outline:focus {
    background: rgba(81, 83, 74, 0.08);
    border-color: #946E29;
}

.component-featured-article .hero-button--light {
    background: #fff;
    border-color: #fff;
    color: #51534a !important;
}

.component-featured-article .hero-button--light:hover,
.component-featured-article .hero-button--light:focus {
    background: #f6f3ed;
    border-color: #f6f3ed;
}

@media (max-width: 991px) {
    .component-featured-article__image-wrap,
    .component-featured-article__image {
        min-height: 260px;
    }
}

@media (max-width: 767px) {
    .component-featured-article__eyebrow {
        margin-bottom: 10px;
    }

    .component-featured-article__title {
        font-size: clamp(38px, 10vw, 48px);
        line-height: .98;
        margin-bottom: 20px;
    }

    .component-featured-article__excerpt,
    .component-featured-article__excerpt p {
        font-size: 18px;
        line-height: 1.65;
    }

    .component-featured-article__cta {
        margin-top: 30px;
    }

    .component-featured-article__media-column::after,
    .component-featured-article__content-column::before {
        content: none;
    }

    .component-featured-article__image-wrap::after,
    .component-featured-article__content::before {
        content: '';
        top: auto;
        bottom: -28px;
        position: absolute;
        left: 0;
        right: auto;
        width: calc(100% + 220px);
        height: 56px;
        pointer-events: none;
        transform: none;
        -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork-horizontal.svg');
        mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork-horizontal.svg');
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center center;
        mask-position: center center;
        -webkit-mask-size: auto 56px;
        mask-size: auto 56px;
    }

    .component-featured-article__image-wrap::after {
        background-color: var(--cfa-scrollwork-image, #ffffff);
        opacity: .75;
        z-index: 2;
    }

    .component-featured-article__content::before {
        top: -28px;
        bottom: auto;
        background-color: var(--cfa-scrollwork-panel, #946E29);
        opacity: .35;
        z-index: 0;
    }

    .component-featured-article--image-right .component-featured-article__image-wrap::after,
    .component-featured-article--image-right .component-featured-article__content::before {
        left: auto;
        right: 0;
    }

    .component-featured-article__content,
    .component-featured-article--image-right .component-featured-article__content {
        padding: clamp(28px, 7vw, 40px);
        padding-top: 88px;
    }
}
</style>

<section class="component-featured-article component-featured-article--image-<?php echo esc_attr( $image_position ); ?><?php echo $enable_rollover_effect ? ' component-featured-article--hover-enabled' : ''; ?>" style="<?php echo esc_attr( implode( ';', $section_styles ) ); ?>">
    <div class="container">
        <div class="component-featured-article__panel">
            <div class="row component-featured-article__row">
                <div class="col-md-6 component-featured-article__media-column">
                    <div class="component-featured-article__image-wrap">
                        <?php if ( $image_url ) : ?>
                            <img class="component-featured-article__image" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ?: $title ); ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 component-featured-article__content-column">
                    <div class="component-featured-article__content">
                        <?php if ( $section_eyebrow ) : ?>
                            <span class="component-featured-article__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                        <?php endif; ?>

                        <h2 class="component-featured-article__title"><?php echo esc_html( $title ); ?></h2>

                        <?php if ( $excerpt ) : ?>
                            <div class="component-featured-article__excerpt"><?php echo wpautop( esc_html( $excerpt ) ); ?></div>
                        <?php endif; ?>

                        <div class="component-featured-article__cta">
                            <a class="hero-button hero-button--<?php echo esc_attr( $button_style ); ?>" href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $button_label ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
