<?php
$section_featured_article_override = isset( $GLOBALS['section_featured_article_override'] ) && is_array( $GLOBALS['section_featured_article_override'] )
    ? $GLOBALS['section_featured_article_override']
    : array();

$get_featured_article_field = static function ( $key ) use ( $section_featured_article_override ) {
    if ( array_key_exists( $key, $section_featured_article_override ) ) {
        return $section_featured_article_override[ $key ];
    }

    return function_exists( 'get_sub_field' ) ? get_sub_field( $key ) : null;
};

$section_anchor_id = strtolower( trim( (string) $get_featured_article_field('section_anchor_id') ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$featured_article = $get_featured_article_field('featured_article');
$override_image = $get_featured_article_field('override_image');
$override_title = trim( (string) $get_featured_article_field('override_title') );
$custom_excerpt = trim( (string) $get_featured_article_field('custom_excerpt') );
$button_url_override = trim( (string) $get_featured_article_field('button_url_override') );
$section_eyebrow = trim( (string) $get_featured_article_field('section_eyebrow') );
$image_position = strtolower( trim( (string) $get_featured_article_field('image_position') ) );
$button_label = trim( (string) $get_featured_article_field('button_label') );
$button_style = strtolower( trim( (string) $get_featured_article_field('button_style') ) );
$button_size = strtolower( trim( (string) $get_featured_article_field('button_size') ) );
$layout_variant = strtolower( trim( (string) $get_featured_article_field('layout_variant') ) );
$background_color = trim( (string) $get_featured_article_field('background_color') );
$card_background_color = trim( (string) $get_featured_article_field('card_background_color') );
$eyebrow_color = trim( (string) $get_featured_article_field('eyebrow_color') );
$eyebrow_text_transform = strtolower( trim( (string) $get_featured_article_field('eyebrow_text_transform') ) );
$eyebrow_preset = strtolower( trim( (string) $get_featured_article_field('eyebrow_preset') ) );
$title_color = trim( (string) $get_featured_article_field('title_color') );
$body_color = trim( (string) $get_featured_article_field('body_color') );
$heading_font_family = strtolower( trim( (string) $get_featured_article_field('heading_font_family') ) );
$heading_font_weight = trim( (string) $get_featured_article_field('heading_font_weight') );
$heading_text_transform = strtolower( trim( (string) $get_featured_article_field('heading_text_transform') ) );
$section_keyline_position = strtolower( trim( (string) $get_featured_article_field('section_keyline_position') ) );
$section_keyline_color = trim( (string) $get_featured_article_field('section_keyline_color') );
$padding_top = trim( (string) $get_featured_article_field('padding_top') );
$padding_bottom = trim( (string) $get_featured_article_field('padding_bottom') );
$supports_rich_title = (bool) $get_featured_article_field('supports_rich_title');

if ( ! in_array( $image_position, array( 'left', 'right' ), true ) ) {
    $image_position = 'left';
}

if ( ! in_array( $layout_variant, array( 'contained', 'full-width' ), true ) ) {
    $layout_variant = 'contained';
}

$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold', 'white' );
if ( ! in_array( $button_style, $allowed_button_styles, true ) ) {
    $button_style = 'outline-dark';
}

$post_id = 0;
if ( is_object( $featured_article ) && isset( $featured_article->ID ) ) {
    $post_id = (int) $featured_article->ID;
} else {
    $post_id = (int) $featured_article;
}

if ( ! $post_id && ! $override_title && ! $custom_excerpt && ( ! is_array( $override_image ) || empty( $override_image['url'] ) ) ) {
    return;
}

$section_id = $section_anchor_id ?: 'section-featured-article-' . uniqid();
$title = $override_title ?: ( $post_id ? get_the_title( $post_id ) : '' );
$permalink = $button_url_override ?: ( $post_id ? get_permalink( $post_id ) : '' );
$image_url = '';
$image_alt = '';

if ( is_array( $override_image ) && ! empty( $override_image['url'] ) ) {
    $image_url = $override_image['url'];
    $image_alt = ! empty( $override_image['alt'] ) ? $override_image['alt'] : $title;
} elseif ( $post_id && has_post_thumbnail( $post_id ) ) {
    $image_url = get_the_post_thumbnail_url( $post_id, 'large' );
    $thumb_id = get_post_thumbnail_id( $post_id );
    $image_alt = $thumb_id ? get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) : '';
}

$excerpt = $custom_excerpt ?: ( $post_id ? trim( (string) get_the_excerpt( $post_id ) ) : '' );
if ( '' === $excerpt && $post_id ) {
    $excerpt = wp_trim_words( wp_strip_all_tags( (string) get_post_field( 'post_content', $post_id ) ), 38 );
}

$allowed_heading_html = array(
    'b' => array(),
    'strong' => array(),
    'i' => array(),
    'em' => array(),
    'br' => array(),
    'span' => array( 'class' => array() ),
);

$allowed_heading_weights = array( '300', '400', '500', '600', '700' );
if ( ! in_array( $heading_font_weight, $allowed_heading_weights, true ) ) {
    $heading_font_weight = '300';
}

$heading_font_css = 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)';
if ( 'freight-big-pro' === $heading_font_family ) {
    $heading_font_css = 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)';
}

$section_keyline_position = in_array( $section_keyline_position, array( 'top', 'bottom' ), true ) ? $section_keyline_position : '';
$button_label = $button_label ?: 'Read Article';
$background_color = $background_color ?: '#ffffff';
$card_background_color = $card_background_color ?: '#f6f3ed';
$eyebrow_color = $eyebrow_color ?: '#946E29';
if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $eyebrow_text_transform = 'uppercase';
}

$eyebrow_preset_map = array(
    'pill'  => array( 'color' => '#946E29', 'transform' => 'uppercase' ),
    'plain' => array( 'color' => '#946E29', 'transform' => 'uppercase' ),
    'ink'   => array( 'color' => '#51534a', 'transform' => 'uppercase' ),
);
if ( isset( $eyebrow_preset_map[ $eyebrow_preset ] ) ) {
    $eyebrow_color          = $eyebrow_preset_map[ $eyebrow_preset ]['color'];
    $eyebrow_text_transform = $eyebrow_preset_map[ $eyebrow_preset ]['transform'];
}
if ( ! in_array( $heading_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $heading_text_transform = 'capitalize';
}
$title_color = $title_color ?: '#51534a';
$body_color = $body_color ?: '#51534a';
$section_keyline_color = $section_keyline_color ?: $title_color;
$padding_top = $padding_top ?: '60px';
$padding_bottom = $padding_bottom ?: '60px';
$allowed_button_sizes = array( 'large', 'normal', 'small' );
if ( ! in_array( $button_size, $allowed_button_sizes, true ) ) {
    $button_size = 'normal';
}
$button_size_map = array(
    'large' => array(
        'font_size' => '20px',
        'padding' => '1em 1.8em',
        'letter_spacing' => '.06em',
    ),
    'normal' => array(
        'font_size' => '16px',
        'padding' => '.85em 1.45em',
        'letter_spacing' => '.04em',
    ),
    'small' => array(
        'font_size' => '12px',
        'padding' => '.7em 1.2em',
        'letter_spacing' => '.08em',
    ),
);
$resolved_button_size = $button_size_map[ $button_size ];

$section_styles = array(
    'background-color:' . $background_color,
    'padding-top:' . $padding_top,
    'padding-bottom:' . $padding_bottom,
    '--sfa-scrollwork-width:var(--lacc-scrollwork-width, 78px)',
    '--sfa-card-bg:' . $card_background_color,
    '--sfa-eyebrow-color:' . $eyebrow_color,
    '--sfa-eyebrow-transform:' . $eyebrow_text_transform,
    '--sfa-title-color:' . $title_color,
    '--sfa-body-color:' . $body_color,
    '--sfa-heading-font:' . $heading_font_css,
    '--sfa-heading-weight:' . $heading_font_weight,
    '--sfa-heading-transform:' . $heading_text_transform,
    '--sfa-cta-font-size:' . $resolved_button_size['font_size'],
    '--sfa-cta-padding:' . $resolved_button_size['padding'],
    '--sfa-cta-letter-spacing:' . $resolved_button_size['letter_spacing'],
);

if ( 'top' === $section_keyline_position ) {
    $section_styles[] = 'border-top:1px solid ' . $section_keyline_color;
}

if ( 'bottom' === $section_keyline_position ) {
    $section_styles[] = 'border-bottom:1px solid ' . $section_keyline_color;
}

$section_style_attr = implode( ';', $section_styles );
?>

<style>
.section-featured-article {
    position: relative;
}

.section-featured-article--full-width .section-featured-article__inner {
    width: 100%;
    max-width: none;
    padding-left: 0;
    padding-right: 0;
}

.section-featured-article__inner {
    width: min(100%, 1200px);
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
}

.section-featured-article--full-width .section-featured-article__panel {
    max-width: none;
}

.section-featured-article__panel {
    position: relative;
    overflow: visible;
}

.section-featured-article__panel::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: var(--sfa-scrollwork-width, 78px);
    height: 160px;
    background-color: var(--sfa-eyebrow-color, #946E29);
    pointer-events: none;
    transform: translate(-50%, -50%);
    z-index: 3;
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-position: center center;
    mask-position: center center;
    -webkit-mask-size: var(--sfa-scrollwork-width, 78px) auto;
    mask-size: var(--sfa-scrollwork-width, 78px) auto;
}

.section-featured-article__row {
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    margin-left: 0;
    margin-right: 0;
}

.section-featured-article__media-column,
.section-featured-article__content-column {
    display: flex;
    flex: 0 0 50%;
    max-width: 50%;
    padding-left: 0;
    padding-right: 0;
}

.section-featured-article--image-right .section-featured-article__media-column {
    order: 2;
}

.section-featured-article--image-right .section-featured-article__content-column {
    order: 1;
}

.section-featured-article__image-wrap {
    position: relative;
    z-index: 1;
    width: 100%;
    min-height: 320px;
    background: #d9d2c4;
}

.section-featured-article__image {
    display: block;
    width: 100%;
    height: 100%;
    min-height: 320px;
    object-fit: cover;
}

.section-featured-article__content {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: clamp(28px, 4vw, 54px);
    background: var(--sfa-card-bg, #f6f3ed);
}

.section-featured-article__eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    color: var(--sfa-eyebrow-color, #946E29);
    font-family: var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    line-height: 1.2;
    text-transform: var(--sfa-eyebrow-transform, uppercase);
}

.section-featured-article__title {
    margin: 0 0 16px;
    color: var(--sfa-title-color, #51534a);
    font-family: var(--sfa-heading-font, var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif));
    font-size: clamp(32px, 4vw, 54px);
    font-weight: var(--sfa-heading-weight, 300);
    line-height: 1.02;
    text-transform: var(--sfa-heading-transform, capitalize);
}

.section-featured-article__excerpt,
.section-featured-article__excerpt p {
    color: var(--sfa-body-color, #51534a);
    font-size: 17px;
    line-height: 1.7;
    hyphens: none;
    -webkit-hyphens: none;
    -ms-hyphens: none;
}

.section-featured-article__excerpt p:last-child {
    margin-bottom: 0;
}

.section-featured-article__cta {
    margin-top: 26px;
}

.section-featured-article .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 0;
    min-height: 0;
    width: auto;
    font-size: var(--sfa-cta-font-size, 16px);
    padding: var(--sfa-cta-padding, .85em 1.45em);
    letter-spacing: var(--sfa-cta-letter-spacing, .04em);
    border: 1px solid transparent;
    border-radius: 0;
    font-weight: 700;
    line-height: 1.2;
    text-transform: uppercase;
    text-decoration: none;
    box-shadow: none;
    transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease;
}

.section-featured-article .hero-button:focus-visible {
    outline: 2px solid var(--lacc-color-action-primary, #3f5f85);
    outline-offset: 2px;
}

.section-featured-article .hero-button--primary {
    background: var(--lacc-color-action-primary, #3f5f85);
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: var(--lacc-color-action-on-primary, #ffffff) !important;
}

.section-featured-article .hero-button--secondary {
    background: var(--lacc-color-accent-old-gold, #7a5a1f);
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-featured-article .hero-button--outline {
    background: transparent;
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: var(--lacc-color-action-primary, #3f5f85) !important;
}

.section-featured-article .hero-button--outline-gold {
    background: transparent;
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
}

.section-featured-article .hero-button--brown,
.section-featured-article .hero-button--gold-text {
    background: transparent;
    border-color: #7c5542;
    color: #7c5542 !important;
}

.section-featured-article .hero-button--ink {
    background: var(--lacc-color-ink, #51534a);
    border-color: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-featured-article .hero-button--outline-dark,
.section-featured-article .hero-button--outline-ink {
    background: transparent;
    border-color: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-ink, #51534a) !important;
}

.section-featured-article .hero-button--light {
    background: var(--lacc-color-cream, #f6f3ed);
    border-color: #ddd4c8;
    color: var(--lacc-color-ink, #51534a) !important;
}

.section-featured-article .hero-button--primary:hover,
.section-featured-article .hero-button--primary:focus {
    background: var(--lacc-color-action-primary-hover, #324c6a);
    border-color: var(--lacc-color-action-primary-hover, #324c6a);
    color: var(--lacc-color-action-on-primary, #ffffff) !important;
}

.section-featured-article .hero-button--secondary:hover,
.section-featured-article .hero-button--secondary:focus {
    background: var(--lacc-color-accent-old-gold-hover, #563f15);
    border-color: var(--lacc-color-accent-old-gold-hover, #563f15);
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-featured-article .hero-button--outline:hover,
.section-featured-article .hero-button--outline:focus {
    background: var(--lacc-color-action-primary, #3f5f85);
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: var(--lacc-color-action-on-primary, #ffffff) !important;
}

.section-featured-article .hero-button--outline-gold:hover,
.section-featured-article .hero-button--outline-gold:focus {
    background: var(--lacc-color-accent-old-gold, #7a5a1f);
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-featured-article .hero-button--brown:hover,
.section-featured-article .hero-button--brown:focus,
.section-featured-article .hero-button--gold-text:hover,
.section-featured-article .hero-button--gold-text:focus {
    background: #7c5542;
    border-color: #7c5542;
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-featured-article .hero-button--ink:hover,
.section-featured-article .hero-button--ink:focus {
    background: var(--lacc-color-ink-deep, #1f221d);
    border-color: var(--lacc-color-ink-deep, #1f221d);
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-featured-article .hero-button--outline-dark:hover,
.section-featured-article .hero-button--outline-dark:focus {
    background: var(--lacc-color-ink, #51534a);
    border-color: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-featured-article .hero-button--outline-ink:hover,
.section-featured-article .hero-button--outline-ink:focus {
    background: rgba(81, 83, 74, 0.08);
    border-color: var(--lacc-color-ink, #51534a);
    color: #3b3d37 !important;
}

.section-featured-article .hero-button--light:hover,
.section-featured-article .hero-button--light:focus {
    background: #ebe2d5;
    border-color: #ddd4c8;
    color: var(--lacc-color-ink, #51534a) !important;
}

@media (max-width: 991px) {
    .section-featured-article__panel::after {
        top: 260px;
        left: 50%;
        width: 84px;
        height: 84px;
        transform: translate(-50%, -50%) rotate(90deg);
        -webkit-mask-size: 84px auto;
        mask-size: 84px auto;
    }

    .section-featured-article__image-wrap,
    .section-featured-article__image {
        min-height: 260px;
    }

    .section-featured-article__media-column,
    .section-featured-article__content-column {
        flex-basis: 100%;
        max-width: 100%;
    }
}
</style>

<section id="<?php echo esc_attr( $section_id ); ?>" class="section-featured-article section-featured-article--image-<?php echo esc_attr( $image_position ); ?> section-featured-article--<?php echo esc_attr( $layout_variant ); ?>" style="<?php echo esc_attr( $section_style_attr ); ?>">
    <div class="section-featured-article__inner">
        <div class="section-featured-article__panel">
            <div class="section-featured-article__row">
                <div class="section-featured-article__media-column">
                    <div class="section-featured-article__image-wrap">
                        <?php if ( $image_url ) : ?>
                            <img class="section-featured-article__image" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ?: $title ); ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="section-featured-article__content-column">
                    <div class="section-featured-article__content">
                        <?php if ( $section_eyebrow ) : ?>
                            <span class="section-featured-article__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                        <?php endif; ?>

                        <?php if ( $title ) : ?>
                            <h2 class="section-featured-article__title"><?php echo $supports_rich_title ? wp_kses( $title, $allowed_heading_html ) : esc_html( $title ); ?></h2>
                        <?php endif; ?>

                        <?php if ( $excerpt ) : ?>
                            <div class="section-featured-article__excerpt"><?php echo wpautop( wp_kses_post( $excerpt ) ); ?></div>
                        <?php endif; ?>

                        <?php if ( $permalink ) : ?>
                            <div class="section-featured-article__cta">
                                <a class="hero-button hero-button--<?php echo esc_attr( $button_style ); ?>" href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $button_label ); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
