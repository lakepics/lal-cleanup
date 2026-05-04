<?php
$section_split_media_override = isset( $GLOBALS['section_split_media_override'] ) && is_array( $GLOBALS['section_split_media_override'] )
    ? $GLOBALS['section_split_media_override']
    : array();

$get_split_media_field = static function ( $key ) use ( $section_split_media_override ) {
    if ( array_key_exists( $key, $section_split_media_override ) ) {
        return $section_split_media_override[ $key ];
    }

    return function_exists( 'get_sub_field' ) ? get_sub_field( $key ) : null;
};

$media_mode = strtolower( trim( (string) $get_split_media_field( 'media_mode' ) ) );
$content_source = strtolower( trim( (string) $get_split_media_field( 'content_source' ) ) );
$linked_article = $get_split_media_field( 'linked_article' );
$use_article_title = (bool) $get_split_media_field( 'use_article_title' );
$use_article_excerpt = (bool) $get_split_media_field( 'use_article_excerpt' );
$use_article_featured_image = (bool) $get_split_media_field( 'use_article_featured_image' );

$section_anchor_id = strtolower( trim( (string) $get_split_media_field( 'section_anchor_id' ) ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$section_eyebrow = trim( (string) $get_split_media_field( 'section_eyebrow' ) );
$section_heading = $get_split_media_field( 'section_heading' );
$section_intro = $get_split_media_field( 'section_intro' );
$section_image = $get_split_media_field( 'section_image' );
$button_label = trim( (string) $get_split_media_field( 'button_label' ) );
$button_url = trim( (string) $get_split_media_field( 'button_url' ) );
$button_style = strtolower( trim( (string) $get_split_media_field( 'button_style' ) ) );
$image_position = strtolower( trim( (string) $get_split_media_field( 'image_position' ) ) );
$container_type = trim( (string) $get_split_media_field( 'container_type' ) );
$background_color = trim( (string) $get_split_media_field( 'background_color' ) );
$content_background_color = trim( (string) $get_split_media_field( 'content_background_color' ) );
$eyebrow_color = trim( (string) $get_split_media_field( 'eyebrow_color' ) );
$eyebrow_text_transform = strtolower( trim( (string) $get_split_media_field( 'eyebrow_text_transform' ) ) );
$eyebrow_preset = strtolower( trim( (string) $get_split_media_field( 'eyebrow_preset' ) ) );
$title_color = trim( (string) $get_split_media_field( 'title_color' ) );
$body_color = trim( (string) $get_split_media_field( 'body_color' ) );
$heading_font_family = strtolower( trim( (string) $get_split_media_field( 'heading_font_family' ) ) );
$heading_font_weight = trim( (string) $get_split_media_field( 'heading_font_weight' ) );
$padding_top = trim( (string) $get_split_media_field( 'padding_top' ) );
$padding_bottom = trim( (string) $get_split_media_field( 'padding_bottom' ) );
$media_min_height = trim( (string) $get_split_media_field( 'media_min_height' ) );
$section_classes = trim( (string) $get_split_media_field( 'section_classes' ) );

$use_scrollwork = $get_split_media_field( 'use_scrollwork' );
$scrollwork_color = trim( (string) $get_split_media_field( 'scrollwork_color' ) );
$seam_enabled = null !== $get_split_media_field( 'seam_enabled' ) ? (bool) $get_split_media_field( 'seam_enabled' ) : (bool) $use_scrollwork;
$seam_color = trim( (string) $get_split_media_field( 'seam_color' ) );
$seam_opacity = trim( (string) $get_split_media_field( 'seam_opacity' ) );
$seam_width = trim( (string) $get_split_media_field( 'seam_width' ) );

if ( ! in_array( $media_mode, array( 'single_image', 'collage' ), true ) ) {
    $media_mode = 'single_image';
}
if ( ! in_array( $content_source, array( 'manual', 'linked_article' ), true ) ) {
    $content_source = 'manual';
}
if ( ! in_array( $image_position, array( 'left', 'right' ), true ) ) {
    $image_position = 'left';
}
if ( ! in_array( $container_type, array( 'container', 'container-fluid' ), true ) ) {
    $container_type = 'container';
}
if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $eyebrow_text_transform = 'uppercase';
}

$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
if ( ! in_array( $button_style, $allowed_button_styles, true ) ) {
    $button_style = 'outline-dark';
}

$heading_font_css = 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)';
if ( 'freight-big-pro' === $heading_font_family ) {
    $heading_font_css = 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)';
}

$allowed_heading_weights = array( '300', '400', '500', '600', '700' );
if ( ! in_array( $heading_font_weight, $allowed_heading_weights, true ) ) {
    $heading_font_weight = '400';
}

$background_color = $background_color ?: '#ffffff';
$content_background_color = $content_background_color ?: '#f6f3ed';
$eyebrow_color = $eyebrow_color ?: '#946E29';
$title_color = $title_color ?: '#51534a';
$body_color = $body_color ?: '#51534a';
$padding_top = $padding_top ?: '60px';
$padding_bottom = $padding_bottom ?: '60px';
$media_min_height = $media_min_height ?: 'clamp(420px, 45vw, 760px)';
$seam_color = $seam_color ?: ( $scrollwork_color ?: $eyebrow_color );
$seam_opacity = '' !== $seam_opacity ? $seam_opacity : '0.3';
$seam_width = $seam_width ?: '78px';

if ( ! $seam_enabled ) {
    $seam_opacity = '0';
}

if ( 'collage' === $media_mode ) {
    $override = array(
        'section_anchor_id' => $section_anchor_id,
        'section_eyebrow' => $section_eyebrow,
        'section_heading' => $section_heading,
        'section_intro' => $section_intro,
        'content_alignment' => 'left',
        'container_type' => $container_type,
        'background_color' => $background_color,
        'background_image' => $get_split_media_field( 'background_image' ),
        'background_gradient' => $get_split_media_field( 'background_gradient' ),
        'background_vertical_position' => $get_split_media_field( 'background_vertical_position' ),
        'background_parallax' => $get_split_media_field( 'background_parallax' ),
        'use_scrollwork' => $use_scrollwork,
        'scrollwork_side' => $get_split_media_field( 'scrollwork_side' ),
        'scrollwork_color' => $scrollwork_color,
        'padding_top' => $padding_top,
        'padding_bottom' => $padding_bottom,
        'image_position' => $image_position,
        'collage_variant' => $get_split_media_field( 'collage_variant' ),
        'collage_preset' => $get_split_media_field( 'collage_preset' ),
        'media_min_height' => $media_min_height,
        'button_label' => $button_label,
        'button_url' => $button_url,
        'button_style' => $button_style,
        'section_classes' => trim( 'section-split-media section-split-media--mode-collage ' . $section_classes ),
        'collage_items' => $get_split_media_field( 'collage_items' ),
    );

    $GLOBALS['section_split_collage_override'] = $override;
    get_template_part( 'components/components', 'section-split-collage' );
    unset( $GLOBALS['section_split_collage_override'] );
    return;
}

$post_id = 0;
if ( is_object( $linked_article ) && isset( $linked_article->ID ) ) {
    $post_id = (int) $linked_article->ID;
} else {
    $post_id = (int) $linked_article;
}

$title = $section_heading;
if ( ( ! $title || '' === trim( wp_strip_all_tags( (string) $title ) ) ) && 'linked_article' === $content_source && $use_article_title && $post_id ) {
    $title = get_the_title( $post_id );
}

$intro = $section_intro;
if ( ( ! $intro || '' === trim( wp_strip_all_tags( (string) $intro ) ) ) && 'linked_article' === $content_source && $use_article_excerpt && $post_id ) {
    $intro = trim( (string) get_the_excerpt( $post_id ) );
    if ( '' === $intro ) {
        $intro = wp_trim_words( wp_strip_all_tags( (string) get_post_field( 'post_content', $post_id ) ), 38 );
    }
}

$image_url = '';
$image_alt = '';
if ( is_array( $section_image ) && ! empty( $section_image['url'] ) ) {
    $image_url = (string) $section_image['url'];
    $image_alt = trim( (string) ( $section_image['alt'] ?? '' ) );
} elseif ( is_numeric( $section_image ) && (int) $section_image > 0 ) {
    $section_image_id = (int) $section_image;
    $image_url = (string) wp_get_attachment_image_url( $section_image_id, 'large' );
    $image_alt = trim( (string) get_post_meta( $section_image_id, '_wp_attachment_image_alt', true ) );
} elseif ( 'linked_article' === $content_source && $use_article_featured_image && $post_id && has_post_thumbnail( $post_id ) ) {
    $thumb_id = (int) get_post_thumbnail_id( $post_id );
    $image_url = (string) get_the_post_thumbnail_url( $post_id, 'large' );
    $image_alt = trim( (string) get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) );
}

if ( '' === $button_url && 'linked_article' === $content_source && $post_id ) {
    $button_url = (string) get_permalink( $post_id );
}
if ( '' === $button_label ) {
    $button_label = ( 'linked_article' === $content_source ) ? 'Read Article' : 'Learn More';
}

if ( ! $title && ! $intro && ! $image_url ) {
    return;
}

$section_id = $section_anchor_id ?: 'section-split-media-' . uniqid();
$section_class_list = array(
    'section-split-media',
    'section-split-media--mode-single-image',
    'section-split-media--image-' . $image_position,
    'container' === $container_type ? 'section-split-media--contained' : 'section-split-media--full-width',
);
if ( $section_classes ) {
    $section_class_list[] = $section_classes;
}

$section_styles = array(
    'background-color:' . $background_color,
    'padding-top:' . $padding_top,
    'padding-bottom:' . $padding_bottom,
    '--ssm-content-bg:' . $content_background_color,
    '--ssm-eyebrow-color:' . $eyebrow_color,
    '--ssm-eyebrow-transform:' . $eyebrow_text_transform,
    '--ssm-title-color:' . $title_color,
    '--ssm-body-color:' . $body_color,
    '--ssm-heading-font:' . $heading_font_css,
    '--ssm-heading-weight:' . $heading_font_weight,
    '--ssm-media-min-height:' . $media_min_height,
    '--ssm-seam-color:' . $seam_color,
    '--ssm-seam-opacity:' . $seam_opacity,
    '--ssm-seam-width:' . $seam_width,
);

$allowed_heading_html = array(
    'b' => array(),
    'strong' => array(),
    'i' => array(),
    'em' => array(),
    'br' => array(),
    'span' => array( 'class' => array() ),
);

$intro_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $intro ) : $intro;
?>

<style>
.section-split-media {
    position: relative;
}

.section-split-media__inner {
    width: min(100%, 1200px);
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
}

.section-split-media--full-width .section-split-media__inner {
    width: 100%;
    max-width: none;
    padding-left: 0;
    padding-right: 0;
}

.section-split-media__panel {
    position: relative;
    overflow: visible;
}

.section-split-media__row {
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
}

.section-split-media__media-column,
.section-split-media__content-column {
    display: flex;
    flex: 0 0 50%;
    max-width: 50%;
}

.section-split-media--image-right .section-split-media__media-column {
    order: 2;
}

.section-split-media--image-right .section-split-media__content-column {
    order: 1;
}

.section-split-media__media-column {
    position: relative;
}

.section-split-media__media-column::after {
    content: '';
    position: absolute;
    top: 0;
    right: calc(var(--ssm-seam-width, 78px) / -2);
    bottom: 0;
    width: var(--ssm-seam-width, 78px);
    background-color: #ffffff;
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: repeat-y;
    mask-repeat: repeat-y;
    -webkit-mask-position: center;
    mask-position: center;
    -webkit-mask-size: var(--ssm-seam-width, 78px) var(--lacc-scrollwork-tile-h, 450px);
    mask-size: var(--ssm-seam-width, 78px) var(--lacc-scrollwork-tile-h, 450px);
    clip-path: inset(0 50% 0 0);
    pointer-events: none;
    z-index: 2;
}

.section-split-media--image-right .section-split-media__media-column::after {
    right: auto;
    left: calc(var(--ssm-seam-width, 78px) / -2);
    clip-path: inset(0 0 0 50%);
}

.section-split-media__content-column {
    position: relative;
}

.section-split-media__content-column::after {
    content: '';
    position: absolute;
    top: 0;
    left: calc(var(--ssm-seam-width, 78px) / -2);
    bottom: 0;
    width: var(--ssm-seam-width, 78px);
    background-color: var(--ssm-seam-color, #946E29);
    opacity: var(--ssm-seam-opacity, 0.3);
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: repeat-y;
    mask-repeat: repeat-y;
    -webkit-mask-position: center;
    mask-position: center;
    -webkit-mask-size: var(--ssm-seam-width, 78px) var(--lacc-scrollwork-tile-h, 450px);
    mask-size: var(--ssm-seam-width, 78px) var(--lacc-scrollwork-tile-h, 450px);
    clip-path: inset(0 0 0 50%);
    pointer-events: none;
    z-index: 2;
}

.section-split-media--image-right .section-split-media__content-column::after {
    left: auto;
    right: calc(var(--ssm-seam-width, 78px) / -2);
    clip-path: inset(0 50% 0 0);
}

.section-split-media__image-wrap {
    width: 100%;
    min-height: var(--ssm-media-min-height, clamp(420px, 45vw, 760px));
    background: #d9d2c4;
}

.section-split-media__image {
    display: block;
    width: 100%;
    height: 100%;
    min-height: var(--ssm-media-min-height, clamp(420px, 45vw, 760px));
    object-fit: cover;
}

.section-split-media__content {
    width: 100%;
    min-height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: clamp(44px, 5.8vw, 98px) clamp(34px, 5.2vw, 84px);
    background: var(--ssm-content-bg, #f6f3ed);
}

.section-split-media__content > * {
    max-width: 34rem;
}

.section-split-media__eyebrow {
    display: inline-block;
    margin-bottom: 16px;
    color: var(--ssm-eyebrow-color, #946E29);
    font-family: var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    line-height: 1.2;
    text-transform: var(--ssm-eyebrow-transform, uppercase);
}

.section-split-media__title {
    margin: 0;
    color: var(--ssm-title-color, #51534a);
    font-family: var(--ssm-heading-font, var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif));
    font-size: clamp(48px, 4.9vw, 72px);
    font-weight: var(--ssm-heading-weight, 400);
    line-height: 1.02;
    letter-spacing: .01em;
}

.section-split-media__copy,
.section-split-media__copy p {
    color: var(--ssm-body-color, #51534a);
    font-family: var(--lacc-type-family-ui, Helvetica, Arial, sans-serif);
    font-size: clamp(18px, 1.45vw, 36px);
    line-height: 1.45;
}

.section-split-media__copy {
    margin-top: 24px;
}

.section-split-media__copy p:last-child {
    margin-bottom: 0;
}

.section-split-media__cta {
    margin-top: 28px;
}

.section-split-media .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: .85em 1.6em;
    border: 1px solid transparent;
    border-radius: 0;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: .06em;
    line-height: 1;
    text-decoration: none !important;
    transition: background .25s ease, border-color .25s ease, color .25s ease;
}

.section-split-media .hero-button--outline-ink,
.section-split-media .hero-button--outline-dark {
    background: transparent;
    border-color: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-ink, #51534a) !important;
}

.section-split-media .hero-button--outline-ink:hover,
.section-split-media .hero-button--outline-ink:focus,
.section-split-media .hero-button--outline-dark:hover,
.section-split-media .hero-button--outline-dark:focus {
    background: rgba(81, 83, 74, 0.08);
    border-color: var(--lacc-color-ink, #51534a);
    color: #3b3d37 !important;
}

.section-split-media .hero-button--secondary {
    background: var(--lacc-color-accent-old-gold, #7a5a1f);
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: #ffffff !important;
}

.section-split-media .hero-button--secondary:hover,
.section-split-media .hero-button--secondary:focus {
    background: var(--lacc-color-accent-old-gold-hover, #563f15);
    border-color: var(--lacc-color-accent-old-gold-hover, #563f15);
    color: #ffffff !important;
}

@media (max-width: 991px) {
    .section-split-media__media-column,
    .section-split-media__content-column {
        flex-basis: 100%;
        max-width: 100%;
    }

    .section-split-media__media-column::after,
    .section-split-media__content-column::after,
    .section-split-media--image-right .section-split-media__media-column::after,
    .section-split-media--image-right .section-split-media__content-column::after {
        display: none;
    }
}
</style>

<section id="<?php echo esc_attr( $section_id ); ?>" class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>" style="<?php echo esc_attr( implode( ';', $section_styles ) ); ?>">
    <div class="section-split-media__inner">
        <div class="section-split-media__panel">
            <div class="section-split-media__row">
                <div class="section-split-media__media-column">
                    <div class="section-split-media__image-wrap">
                        <?php if ( $image_url ) : ?>
                            <img class="section-split-media__image" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ?: trim( wp_strip_all_tags( (string) $title ) ) ); ?>">
                        <?php endif; ?>
                    </div>
                </div>

                <div class="section-split-media__content-column">
                    <div class="section-split-media__content">
                        <?php if ( $section_eyebrow ) : ?>
                            <span class="section-split-media__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                        <?php endif; ?>

                        <?php if ( $title ) : ?>
                            <h2 class="section-split-media__title"><?php echo wp_kses( $title, $allowed_heading_html ); ?></h2>
                        <?php endif; ?>

                        <?php if ( $intro ) : ?>
                            <div class="section-split-media__copy"><?php echo wp_kses_post( $intro_output ); ?></div>
                        <?php endif; ?>

                        <?php if ( $button_label && $button_url ) : ?>
                            <div class="section-split-media__cta">
                                <a class="hero-button hero-button--<?php echo esc_attr( $button_style ); ?>" href="<?php echo esc_url( $button_url ); ?>"><?php echo esc_html( $button_label ); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
