<?php
$section_split_collage_override = isset( $GLOBALS['section_split_collage_override'] ) && is_array( $GLOBALS['section_split_collage_override'] )
    ? $GLOBALS['section_split_collage_override']
    : array();

$get_split_collage_field = static function ( $key ) use ( $section_split_collage_override ) {
    if ( array_key_exists( $key, $section_split_collage_override ) ) {
        return $section_split_collage_override[ $key ];
    }

    return function_exists( 'get_sub_field' ) ? get_sub_field( $key ) : null;
};

$section_eyebrow = trim( (string) $get_split_collage_field( 'section_eyebrow' ) );
$section_heading = $get_split_collage_field( 'section_heading' );
$section_intro = $get_split_collage_field( 'section_intro' );
$section_anchor_id = strtolower( trim( (string) $get_split_collage_field( 'section_anchor_id' ) ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$content_alignment = strtolower( trim( (string) $get_split_collage_field( 'content_alignment' ) ) );
$background_color = trim( (string) $get_split_collage_field( 'background_color' ) );
$padding_top = trim( (string) $get_split_collage_field( 'padding_top' ) );
$padding_bottom = trim( (string) $get_split_collage_field( 'padding_bottom' ) );
$image_position = strtolower( trim( (string) $get_split_collage_field( 'image_position' ) ) );
$button_label = trim( (string) $get_split_collage_field( 'button_label' ) );
$button_url = trim( (string) $get_split_collage_field( 'button_url' ) );
$button_style = strtolower( trim( (string) $get_split_collage_field( 'button_style' ) ) );
$section_classes = trim( (string) $get_split_collage_field( 'section_classes' ) );

if ( ! in_array( $content_alignment, array( 'left', 'center', 'right' ), true ) ) {
    $content_alignment = 'left';
}

if ( ! in_array( $image_position, array( 'left', 'right' ), true ) ) {
    $image_position = 'right';
}

$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
if ( ! in_array( $button_style, $allowed_button_styles, true ) ) {
    $button_style = 'secondary';
}

$is_library_demo = ! empty( $section_split_collage_override )
    || ( function_exists( 'lacc_is_component_demo_page' ) && lacc_is_component_demo_page() )
    || ( function_exists( 'lacc_is_design_system_test_strip_request' ) && lacc_is_design_system_test_strip_request() );

$padding_top = $padding_top ?: '72px';
$padding_bottom = $padding_bottom ?: '72px';
$background_color = $background_color ?: '#f6f3ed';
$button_label = $button_label ?: 'Explore Gallery Direction';
$button_url = $button_url ?: home_url( '/gallery/' );

if ( $is_library_demo ) {
    $section_eyebrow = $section_eyebrow ?: 'New Section Pattern';
    $section_heading = $section_heading ?: 'A collage-driven split section for immersive storytelling';
    $section_intro = $section_intro ?: '<p>This pattern merges the clearer content structure from the split-feature sections with the more atmospheric image treatment we started building in the mockup gallery. The left side holds eyebrow, heading, copy, and CTA. The right side becomes a framed collage stage that can evolve toward a more masonry-like gallery language.</p>';
}

if ( ! $section_heading ) {
    return;
}

$section_id = $section_anchor_id ?: 'section-split-collage-' . uniqid();
$section_class_list = array(
    'section-split-collage',
    'section-split-collage--media-' . $image_position,
    'section-split-collage--align-' . $content_alignment,
);

if ( $section_classes ) {
    $section_class_list[] = $section_classes;
}

$collage_items = $get_split_collage_field( 'collage_items' );
if ( ! is_array( $collage_items ) || empty( $collage_items ) ) {
    $collage_items = array(
        array(
            'url' => 'https://lal.local/wp-content/uploads/2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6604-1.jpg',
            'alt' => 'Wedding guests and reception details at the lodge',
            'class' => 'section-split-collage__frame--primary',
        ),
        array(
            'url' => 'https://lal.local/wp-content/uploads/2024/08/LAL-Wedding-Leah-Rachel-Photography-0114Lucy_Mike__PF-1.jpg',
            'alt' => 'Wedding couple with floral details at the lodge',
            'class' => 'section-split-collage__frame--secondary',
        ),
        array(
            'url' => 'https://lal.local/wp-content/uploads/2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6490-1.jpg',
            'alt' => 'Wedding portrait details from the image scroller',
            'class' => 'section-split-collage__frame--tertiary',
        ),
    );
}
?>

<style>
.section-split-collage {
    position: relative;
    overflow: hidden;
    background: var(--ssc-surface, #f6f3ed);
}

.section-split-collage__grid {
    display: grid;
    grid-template-columns: minmax(0, .92fr) minmax(0, 1.08fr);
    gap: clamp(28px, 4vw, 52px);
    align-items: center;
}

.section-split-collage--media-left .section-split-collage__content-wrap {
    order: 2;
}

.section-split-collage--media-left .section-split-collage__media-wrap {
    order: 1;
}

.section-split-collage__content-wrap {
    position: relative;
    z-index: 2;
}

.section-split-collage__eyebrow {
    display: inline-flex;
    align-items: center;
    margin-bottom: 14px;
    padding: 8px 18px;
    border: 2px solid #c9973a;
    border-radius: 32px;
    background: rgba(81, 83, 74, 0.94);
    color: #f5b62b;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 400;
    letter-spacing: .18em;
    line-height: 1.1;
    text-transform: capitalize;
}

.section-split-collage__title {
    margin: 0;
    max-width: 12ch;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(40px, 4.8vw, 66px);
    font-weight: 400;
    line-height: .98;
}

.section-split-collage__copy,
.section-split-collage__copy p {
    margin: 18px 0 0;
    max-width: 36rem;
    color: #51534a;
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(19px, 2vw, 23px);
    line-height: 1.62;
}

.section-split-collage__actions {
    margin-top: 28px;
}

.section-split-collage__media-wrap {
    position: relative;
}

.section-split-collage__stage {
    --ssc-frame-stroke: #51534a;
    --ssc-frame-stroke-width: 1.08px;
    --ssc-frame-inset: 8px;
    --ssc-corner-size: 58px;
    position: relative;
    min-height: clamp(420px, 50vw, 620px);
    padding: 32px;
    background: linear-gradient(180deg, rgba(255,255,255,0.84), rgba(246,243,237,0.92));
}

.section-split-collage__stage::before {
    content: '';
    position: absolute;
    inset: 0;
    pointer-events: none;
    background:
        linear-gradient(var(--ssc-frame-stroke), var(--ssc-frame-stroke)) top var(--ssc-frame-inset) left calc(var(--ssc-frame-inset) + var(--ssc-corner-size)) / calc(100% - (2 * var(--ssc-frame-inset)) - (2 * var(--ssc-corner-size))) var(--ssc-frame-stroke-width) no-repeat,
        linear-gradient(var(--ssc-frame-stroke), var(--ssc-frame-stroke)) bottom var(--ssc-frame-inset) left calc(var(--ssc-frame-inset) + var(--ssc-corner-size)) / calc(100% - (2 * var(--ssc-frame-inset)) - (2 * var(--ssc-corner-size))) var(--ssc-frame-stroke-width) no-repeat,
        linear-gradient(var(--ssc-frame-stroke), var(--ssc-frame-stroke)) top calc(var(--ssc-frame-inset) + var(--ssc-corner-size)) left var(--ssc-frame-inset) / var(--ssc-frame-stroke-width) calc(100% - (2 * var(--ssc-frame-inset)) - (2 * var(--ssc-corner-size))) no-repeat,
        linear-gradient(var(--ssc-frame-stroke), var(--ssc-frame-stroke)) top calc(var(--ssc-frame-inset) + var(--ssc-corner-size)) right var(--ssc-frame-inset) / var(--ssc-frame-stroke-width) calc(100% - (2 * var(--ssc-frame-inset)) - (2 * var(--ssc-corner-size))) no-repeat;
}

.section-split-collage__corner {
    position: absolute;
    width: var(--ssc-corner-size);
    height: var(--ssc-corner-size);
    background-image: url('/wp-content/themes/LACC-sage-theme-master/brand/scrollwork-brand-gray.svg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    pointer-events: none;
    z-index: 3;
}

.section-split-collage__corner--top-left {
    top: var(--ssc-frame-inset);
    left: var(--ssc-frame-inset);
}

.section-split-collage__corner--top-right {
    top: var(--ssc-frame-inset);
    right: var(--ssc-frame-inset);
    transform: rotate(90deg);
}

.section-split-collage__corner--bottom-right {
    right: var(--ssc-frame-inset);
    bottom: var(--ssc-frame-inset);
    transform: rotate(180deg);
}

.section-split-collage__corner--bottom-left {
    bottom: var(--ssc-frame-inset);
    left: var(--ssc-frame-inset);
    transform: rotate(270deg);
}

.section-split-collage__frames {
    position: relative;
    display: grid;
    grid-template-columns: repeat(12, minmax(0, 1fr));
    grid-template-rows: repeat(10, minmax(28px, 1fr));
    min-height: inherit;
    gap: 14px;
}

.section-split-collage__frame {
    position: relative;
    overflow: hidden;
    background: rgba(214, 204, 185, 0.6);
    box-shadow: 0 16px 30px rgba(31, 34, 29, 0.08);
}

.section-split-collage__frame::after {
    content: '';
    position: absolute;
    inset: 10px;
    border: 1.08px solid rgba(246,243,237,0.58);
    pointer-events: none;
}

.section-split-collage__frame--primary {
    grid-column: 1 / span 7;
    grid-row: 2 / span 6;
    transform: translateY(14px);
}

.section-split-collage__frame--secondary {
    grid-column: 7 / span 5;
    grid-row: 1 / span 4;
    transform: translate(-18px, -6px);
}

.section-split-collage__frame--tertiary {
    grid-column: 7 / span 5;
    grid-row: 6 / span 3;
    transform: translate(8px, 10px);
}

.section-split-collage__frame img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.section-split-collage--align-center .section-split-collage__content-wrap {
    text-align: center;
}

.section-split-collage--align-center .section-split-collage__copy,
.section-split-collage--align-center .section-split-collage__copy p,
.section-split-collage--align-center .section-split-collage__title {
    margin-left: auto;
    margin-right: auto;
}

@media (max-width: 991px) {
    .section-split-collage__grid {
        grid-template-columns: 1fr;
    }

    .section-split-collage--media-left .section-split-collage__content-wrap,
    .section-split-collage--media-left .section-split-collage__media-wrap {
        order: initial;
    }

    .section-split-collage__title {
        max-width: none;
    }

    .section-split-collage__stage {
        min-height: 420px;
        padding: 24px;
    }
}

@media (max-width: 767px) {
    .section-split-collage__frames {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto;
        min-height: 0;
    }

    .section-split-collage__frame,
    .section-split-collage__frame--primary,
    .section-split-collage__frame--secondary,
    .section-split-collage__frame--tertiary {
        grid-column: auto;
        grid-row: auto;
        transform: none;
        min-height: 180px;
    }
}
</style>

<section id="<?php echo esc_attr( $section_id ); ?>" class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>" style="--ssc-surface: <?php echo esc_attr( $background_color ); ?>; padding-top: <?php echo esc_attr( $padding_top ); ?>; padding-bottom: <?php echo esc_attr( $padding_bottom ); ?>;">
    <div class="container">
        <div class="section-split-collage__grid">
            <div class="section-split-collage__content-wrap">
                <?php if ( $section_eyebrow ) : ?>
                    <span class="section-split-collage__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                <?php endif; ?>
                <h2 class="section-split-collage__title"><?php echo wp_kses( $section_heading, array( 'br' => array(), 'em' => array(), 'i' => array(), 'strong' => array(), 'span' => array( 'class' => array() ) ) ); ?></h2>
                <?php if ( $section_intro ) : ?>
                    <div class="section-split-collage__copy"><?php echo wp_kses_post( $section_intro ); ?></div>
                <?php endif; ?>
                <?php if ( $button_label && $button_url ) : ?>
                    <div class="section-split-collage__actions">
                        <a class="hero-button hero-button--<?php echo esc_attr( $button_style ); ?>" href="<?php echo esc_url( $button_url ); ?>"><?php echo esc_html( $button_label ); ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="section-split-collage__media-wrap">
                <div class="section-split-collage__stage">
                    <span class="section-split-collage__corner section-split-collage__corner--top-left" aria-hidden="true"></span>
                    <span class="section-split-collage__corner section-split-collage__corner--top-right" aria-hidden="true"></span>
                    <span class="section-split-collage__corner section-split-collage__corner--bottom-right" aria-hidden="true"></span>
                    <span class="section-split-collage__corner section-split-collage__corner--bottom-left" aria-hidden="true"></span>
                    <div class="section-split-collage__frames">
                        <?php foreach ( $collage_items as $collage_item ) : ?>
                            <figure class="section-split-collage__frame <?php echo esc_attr( $collage_item['class'] ?? '' ); ?>">
                                <img src="<?php echo esc_url( $collage_item['url'] ?? '' ); ?>" alt="<?php echo esc_attr( $collage_item['alt'] ?? '' ); ?>">
                            </figure>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>