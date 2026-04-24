<?php
$section_anchor_id = strtolower( trim( (string) get_sub_field('section_anchor_id') ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$section_eyebrow = trim( (string) get_sub_field('section_eyebrow') );
$eyebrow_text_transform = strtolower( trim( (string) get_sub_field('eyebrow_text_transform') ) );
$section_heading = get_sub_field('section_heading');
$section_copy = get_sub_field('section_copy');
$section_image = get_sub_field('section_image');
$image_position = strtolower( trim( (string) get_sub_field('image_position') ) );
$button_label = trim( (string) get_sub_field('button_label') );
$button_url = trim( (string) get_sub_field('button_url') );
$button_style = strtolower( trim( (string) get_sub_field('button_style') ) );
$background_color = trim( (string) get_sub_field('background_color') );
$content_background_color = trim( (string) get_sub_field('content_background_color') );
$eyebrow_color = trim( (string) get_sub_field('eyebrow_color') );
$title_color = trim( (string) get_sub_field('title_color') );
$body_color = trim( (string) get_sub_field('body_color') );
$heading_font_family = strtolower( trim( (string) get_sub_field('heading_font_family') ) );
$heading_font_weight = trim( (string) get_sub_field('heading_font_weight') );
$section_keyline_position = strtolower( trim( (string) get_sub_field('section_keyline_position') ) );
$section_keyline_color = trim( (string) get_sub_field('section_keyline_color') );
$padding_top = trim( (string) get_sub_field('padding_top') );
$padding_bottom = trim( (string) get_sub_field('padding_bottom') );
$image_min_height = trim( (string) get_sub_field('image_min_height') );

if ( ! is_array( $section_image ) || empty( $section_image['url'] ) ) {
    $section_image = array();
}

if ( ! $section_heading && empty( $section_copy ) && empty( $section_image ) ) {
    return;
}

if ( ! in_array( $image_position, array( 'left', 'right' ), true ) ) {
    $image_position = 'left';
}

if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $eyebrow_text_transform = 'uppercase';
}

$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
if ( ! in_array( $button_style, $allowed_button_styles, true ) ) {
    $button_style = 'outline-dark';
}

$allowed_heading_weights = array( '300', '400', '500', '600', '700' );
if ( ! in_array( $heading_font_weight, $allowed_heading_weights, true ) ) {
    $heading_font_weight = '400';
}

$heading_font_css = 'HaarlemDeco, Arial, Helvetica, sans-serif';
if ( 'freight-big-pro' === $heading_font_family ) {
    $heading_font_css = '"Freight Big Pro", Georgia, serif';
}

$section_keyline_position = in_array( $section_keyline_position, array( 'top', 'bottom' ), true ) ? $section_keyline_position : '';
$background_color = $background_color ?: '#ffffff';
$content_background_color = $content_background_color ?: '#f6f3ed';
$eyebrow_color = $eyebrow_color ?: '#946E29';
$title_color = $title_color ?: '#51534a';
$body_color = $body_color ?: '#51534a';
$section_keyline_color = $section_keyline_color ?: $title_color;
$padding_top = $padding_top ?: '60px';
$padding_bottom = $padding_bottom ?: '60px';
$image_min_height = $image_min_height ?: '648px';

$section_id = $section_anchor_id ?: 'section-split-feature-' . uniqid();
$image_url = ! empty( $section_image['url'] ) ? $section_image['url'] : '';
$image_alt = ! empty( $section_image['alt'] ) ? $section_image['alt'] : trim( wp_strip_all_tags( (string) $section_heading ) );
$button_label = $button_label ?: 'Learn More';

$allowed_heading_html = array(
    'b' => array(),
    'strong' => array(),
    'i' => array(),
    'em' => array(),
    'br' => array(),
    'span' => array( 'class' => array() ),
);

$section_styles = array(
    'background-color:' . $background_color,
    'padding-top:' . $padding_top,
    'padding-bottom:' . $padding_bottom,
    '--ssf-content-bg:' . $content_background_color,
    '--ssf-eyebrow-color:' . $eyebrow_color,
    '--ssf-eyebrow-transform:' . $eyebrow_text_transform,
    '--ssf-title-color:' . $title_color,
    '--ssf-body-color:' . $body_color,
    '--ssf-heading-font:' . $heading_font_css,
    '--ssf-heading-weight:' . $heading_font_weight,
    '--ssf-image-min-height:' . $image_min_height,
    '--ssf-scrollwork-width:var(--lacc-scrollwork-width, 78px)',
    '--ssf-scrollwork-opacity:var(--lacc-scrollwork-opacity, 0.25)'
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
.section-split-feature {
    position: relative;
}

.section-split-feature__grid {
    display: grid;
    grid-template-columns: minmax(0, .92fr) minmax(0, 1.08fr);
    align-items: stretch;
}

.section-split-feature--image-right .section-split-feature__media {
    order: 2;
}

.section-split-feature--image-right .section-split-feature__content-wrap {
    order: 1;
}

.section-split-feature__media {
    position: relative;
    min-height: var(--ssf-image-min-height, 648px);
    background: #d9d2c4;
}

.section-split-feature__media::after {
    content: '';
    position: absolute;
    top: 0;
    right: calc(var(--ssf-scrollwork-width, 78px) / -2);
    bottom: 0;
    width: var(--ssf-scrollwork-width, 78px);
    background-color: var(--lacc-color-white, #ffffff);
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: repeat-y;
    mask-repeat: repeat-y;
    -webkit-mask-position: center;
    mask-position: center;
    -webkit-mask-size: var(--ssf-scrollwork-width, 78px) auto;
    mask-size: var(--ssf-scrollwork-width, 78px) auto;
    clip-path: inset(0 50% 0 0);
    pointer-events: none;
    z-index: 2;
}

.section-split-feature--image-right .section-split-feature__media::after {
    right: auto;
    left: calc(var(--ssf-scrollwork-width, 78px) / -2);
    clip-path: inset(0 0 0 50%);
}

.section-split-feature__image {
    display: block;
    width: 100%;
    height: 100%;
    min-height: var(--ssf-image-min-height, 648px);
    object-fit: cover;
}

.section-split-feature__content-wrap {
    position: relative;
    background: var(--ssf-content-bg, #f6f3ed);
    color: var(--ssf-body-color, #51534a);
}

.section-split-feature__content-wrap::after {
    content: '';
    position: absolute;
    top: 0;
    left: calc(var(--ssf-scrollwork-width, 78px) / -2);
    bottom: 0;
    width: var(--ssf-scrollwork-width, 78px);
    background-color: var(--ssf-eyebrow-color, #946E29);
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: repeat-y;
    mask-repeat: repeat-y;
    -webkit-mask-position: center;
    mask-position: center;
    -webkit-mask-size: var(--ssf-scrollwork-width, 78px) auto;
    mask-size: var(--ssf-scrollwork-width, 78px) auto;
    clip-path: inset(0 0 0 50%);
    opacity: var(--ssf-scrollwork-opacity, 0.25);
    pointer-events: none;
    z-index: 2;
}

.section-split-feature--image-right .section-split-feature__content-wrap::after {
    left: auto;
    right: calc(var(--ssf-scrollwork-width, 78px) / -2);
    clip-path: inset(0 50% 0 0);
}

.section-split-feature__content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 100%;
    padding: clamp(44px, 7vw, 92px);
}

.section-split-feature__copy-block {
    max-width: 40em;
}

.section-split-feature__eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    color: var(--ssf-eyebrow-color, #946E29);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: .16em;
    line-height: 1.2;
    text-transform: var(--ssf-eyebrow-transform, uppercase);
}

.section-split-feature__title {
    margin: 0;
    color: var(--ssf-title-color, #51534a);
    font-family: var(--ssf-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: clamp(40px, 4.6vw, 68px);
    font-weight: var(--ssf-heading-weight, 400);
    line-height: .98;
}

.section-split-feature__title em,
.section-split-feature__title i,
.section-split-feature__copy em,
.section-split-feature__copy i {
    font-style: italic !important;
}

.section-split-feature__copy,
.section-split-feature__copy p {
    color: var(--ssf-body-color, #51534a);
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(20px, 2vw, 24px);
    font-weight: 400;
    line-height: 1.55;
}

.section-split-feature__copy {
    margin-top: 22px;
}

.section-split-feature__copy p:last-child {
    margin-bottom: 0;
}

.section-split-feature__cta {
    margin-top: 28px;
}

@media (max-width: 991px) {
    .section-split-feature__grid {
        grid-template-columns: 1fr;
    }

    .section-split-feature--image-right .section-split-feature__media,
    .section-split-feature--image-right .section-split-feature__content-wrap {
        order: initial;
    }

    .section-split-feature__media,
    .section-split-feature__image {
        min-height: 260px;
    }

    .section-split-feature__media::after,
    .section-split-feature__content-wrap::after,
    .section-split-feature--image-right .section-split-feature__media::after,
    .section-split-feature--image-right .section-split-feature__content-wrap::after {
        top: auto;
        left: 50%;
        right: auto;
        bottom: calc(var(--ssf-scrollwork-width, 78px) / -2);
        width: 84px;
        height: 84px;
        transform: translateX(-50%) rotate(90deg);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-size: 84px auto;
        mask-size: 84px auto;
        clip-path: none;
    }

    .section-split-feature__content-wrap::after,
    .section-split-feature--image-right .section-split-feature__content-wrap::after {
        top: calc(var(--ssf-scrollwork-width, 78px) / -2);
        bottom: auto;
    }
}
</style>

<?php $section_copy_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $section_copy ) : $section_copy; ?>

<section id="<?php echo esc_attr( $section_id ); ?>" class="section-split-feature section-split-feature--image-<?php echo esc_attr( $image_position ); ?>" style="<?php echo esc_attr( $section_style_attr ); ?>">
    <div class="container">
        <div class="section-split-feature__grid">
            <div class="section-split-feature__media">
                <?php if ( $image_url ) : ?>
                    <img class="section-split-feature__image" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ?: 'Split feature image' ); ?>">
                <?php endif; ?>
            </div>
            <div class="section-split-feature__content-wrap">
                <div class="section-split-feature__content">
                    <div class="section-split-feature__copy-block">
                        <?php if ( $section_eyebrow ) : ?>
                            <span class="section-split-feature__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                        <?php endif; ?>

                        <?php if ( $section_heading ) : ?>
                            <h2 class="section-split-feature__title"><?php echo wp_kses( $section_heading, $allowed_heading_html ); ?></h2>
                        <?php endif; ?>

                        <?php if ( $section_copy ) : ?>
                            <div class="section-split-feature__copy"><?php echo wp_kses_post( $section_copy_output ); ?></div>
                        <?php endif; ?>

                        <?php if ( $button_label && $button_url ) : ?>
                            <div class="section-split-feature__cta">
                                <a class="hero-button hero-button--<?php echo esc_attr( $button_style ); ?>" href="<?php echo esc_url( $button_url ); ?>"><?php echo esc_html( $button_label ); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>