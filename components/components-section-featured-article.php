<?php
$section_anchor_id = strtolower( trim( (string) get_sub_field('section_anchor_id') ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$featured_article = get_sub_field('featured_article');
$override_image = get_sub_field('override_image');
$override_title = trim( (string) get_sub_field('override_title') );
$custom_excerpt = trim( (string) get_sub_field('custom_excerpt') );
$section_eyebrow = trim( (string) get_sub_field('section_eyebrow') );
$image_position = strtolower( trim( (string) get_sub_field('image_position') ) );
$button_label = trim( (string) get_sub_field('button_label') );
$button_style = strtolower( trim( (string) get_sub_field('button_style') ) );
$background_color = trim( (string) get_sub_field('background_color') );
$card_background_color = trim( (string) get_sub_field('card_background_color') );
$eyebrow_color = trim( (string) get_sub_field('eyebrow_color') );
$eyebrow_text_transform = strtolower( trim( (string) get_sub_field('eyebrow_text_transform') ) );
$title_color = trim( (string) get_sub_field('title_color') );
$body_color = trim( (string) get_sub_field('body_color') );
$heading_font_family = strtolower( trim( (string) get_sub_field('heading_font_family') ) );
$heading_font_weight = trim( (string) get_sub_field('heading_font_weight') );
$section_keyline_position = strtolower( trim( (string) get_sub_field('section_keyline_position') ) );
$section_keyline_color = trim( (string) get_sub_field('section_keyline_color') );
$padding_top = trim( (string) get_sub_field('padding_top') );
$padding_bottom = trim( (string) get_sub_field('padding_bottom') );

if ( ! in_array( $image_position, array( 'left', 'right' ), true ) ) {
    $image_position = 'left';
}

$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
if ( ! in_array( $button_style, $allowed_button_styles, true ) ) {
    $button_style = 'outline-dark';
}

$post_id = 0;
if ( is_object( $featured_article ) && isset( $featured_article->ID ) ) {
    $post_id = (int) $featured_article->ID;
} else {
    $post_id = (int) $featured_article;
}

if ( ! $post_id ) {
    return;
}

$section_id = $section_anchor_id ?: 'section-featured-article-' . uniqid();
$title = $override_title ?: get_the_title( $post_id );
$permalink = get_permalink( $post_id );
$image_url = '';
$image_alt = '';

if ( is_array( $override_image ) && ! empty( $override_image['url'] ) ) {
    $image_url = $override_image['url'];
    $image_alt = ! empty( $override_image['alt'] ) ? $override_image['alt'] : $title;
} elseif ( has_post_thumbnail( $post_id ) ) {
    $image_url = get_the_post_thumbnail_url( $post_id, 'large' );
    $thumb_id = get_post_thumbnail_id( $post_id );
    $image_alt = $thumb_id ? get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) : '';
}

$excerpt = $custom_excerpt ?: trim( (string) get_the_excerpt( $post_id ) );
if ( '' === $excerpt ) {
    $excerpt = wp_trim_words( wp_strip_all_tags( (string) get_post_field( 'post_content', $post_id ) ), 38 );
}

$allowed_heading_weights = array( '300', '400', '500', '600', '700' );
if ( ! in_array( $heading_font_weight, $allowed_heading_weights, true ) ) {
    $heading_font_weight = '300';
}

$heading_font_css = 'HaarlemDeco, Arial, Helvetica, sans-serif';
if ( 'freight-big-pro' === $heading_font_family ) {
    $heading_font_css = '"Freight Big Pro", Georgia, serif';
}

$section_keyline_position = in_array( $section_keyline_position, array( 'top', 'bottom' ), true ) ? $section_keyline_position : '';
$button_label = $button_label ?: 'Read Article';
$background_color = $background_color ?: '#ffffff';
$card_background_color = $card_background_color ?: '#f6f3ed';
$eyebrow_color = $eyebrow_color ?: '#946E29';
if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $eyebrow_text_transform = 'uppercase';
}
$title_color = $title_color ?: '#51534a';
$body_color = $body_color ?: '#51534a';
$section_keyline_color = $section_keyline_color ?: $title_color;
$padding_top = $padding_top ?: '60px';
$padding_bottom = $padding_bottom ?: '60px';

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
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    line-height: 1.2;
    text-transform: var(--sfa-eyebrow-transform, uppercase);
}

.section-featured-article__title {
    margin: 0 0 16px;
    color: var(--sfa-title-color, #51534a);
    font-family: var(--sfa-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: clamp(32px, 4vw, 54px);
    font-weight: var(--sfa-heading-weight, 300);
    line-height: 1.02;
    text-transform: capitalize;
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
}
</style>

<section id="<?php echo esc_attr( $section_id ); ?>" class="section-featured-article section-featured-article--image-<?php echo esc_attr( $image_position ); ?>" style="<?php echo esc_attr( $section_style_attr ); ?>">
    <div class="container">
        <div class="section-featured-article__panel">
            <div class="row section-featured-article__row">
                <div class="col-md-6 section-featured-article__media-column">
                    <div class="section-featured-article__image-wrap">
                        <?php if ( $image_url ) : ?>
                            <img class="section-featured-article__image" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ?: $title ); ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 section-featured-article__content-column">
                    <div class="section-featured-article__content">
                        <?php if ( $section_eyebrow ) : ?>
                            <span class="section-featured-article__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                        <?php endif; ?>

                        <?php if ( $title ) : ?>
                            <h2 class="section-featured-article__title"><?php echo esc_html( $title ); ?></h2>
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
