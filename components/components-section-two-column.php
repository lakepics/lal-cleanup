<?php
// Optional sandbox test payload support.
$stc_test_data = get_query_var( 'lacc_two_column_test_data' );
$stc_get_field = function ( $field_name ) use ( $stc_test_data ) {
    if ( is_array( $stc_test_data ) && array_key_exists( $field_name, $stc_test_data ) ) {
        return $stc_test_data[ $field_name ];
    }

    return function_exists( 'get_sub_field' ) ? get_sub_field( $field_name ) : null;
};

// ─── Field reads ─────────────────────────────────────────────────────────────
$section_anchor_id        = strtolower( trim( (string) $stc_get_field( 'section_anchor_id' ) ) );
$section_anchor_id        = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id        = trim( (string) $section_anchor_id, '-' );
$section_eyebrow          = trim( (string) $stc_get_field( 'section_eyebrow' ) );
$section_heading          = $stc_get_field( 'section_heading' );
$section_intro            = $stc_get_field( 'section_intro' );
$container_type           = $stc_get_field( 'container_type' ) ?: 'container-fluid';
$column_ratio             = $stc_get_field( 'column_ratio' ) ?: '50-50';
$column_gap               = trim( (string) $stc_get_field( 'column_gap' ) );
$col_min_height           = trim( (string) $stc_get_field( 'col_min_height' ) );
$content_alignment        = strtolower( trim( (string) $stc_get_field( 'content_alignment' ) ) );
$heading_font_family      = strtolower( trim( (string) $stc_get_field( 'heading_font_family' ) ) );
$heading_font_weight      = trim( (string) $stc_get_field( 'heading_font_weight' ) );
$eyebrow_color            = trim( (string) $stc_get_field( 'eyebrow_color' ) );
$eyebrow_text_transform   = strtolower( trim( (string) $stc_get_field( 'eyebrow_text_transform' ) ) );
$eyebrow_variant          = strtolower( trim( (string) $stc_get_field( 'eyebrow_variant' ) ) );
$eyebrow_font_family      = strtolower( trim( (string) $stc_get_field( 'eyebrow_font_family' ) ) );
$eyebrow_alignment        = strtolower( trim( (string) $stc_get_field( 'eyebrow_alignment' ) ) );
$eyebrow_fill_color       = trim( (string) $stc_get_field( 'eyebrow_fill_color' ) );
$eyebrow_border_color     = trim( (string) $stc_get_field( 'eyebrow_border_color' ) );
$eyebrow_border_width     = trim( (string) $stc_get_field( 'eyebrow_border_width' ) );
$section_heading_color    = trim( (string) $stc_get_field( 'section_heading_color' ) );
$background_color         = trim( (string) $stc_get_field( 'background_color' ) );
$section_keyline_position = strtolower( trim( (string) $stc_get_field( 'section_keyline_position' ) ) );
$section_keyline_color    = trim( (string) $stc_get_field( 'section_keyline_color' ) );
$padding_top              = trim( (string) $stc_get_field( 'padding_top' ) );
$padding_bottom           = trim( (string) $stc_get_field( 'padding_bottom' ) );
$section_classes          = trim( (string) $stc_get_field( 'section_classes' ) );

// Column A
$col_a_image         = $stc_get_field( 'col_a_image' );
$col_a_heading       = $stc_get_field( 'col_a_heading' );
$col_a_copy          = $stc_get_field( 'col_a_copy' );
$col_a_button_label  = trim( (string) $stc_get_field( 'col_a_button_label' ) );
$col_a_button_url_f  = $stc_get_field( 'col_a_button_url' );
$col_a_button_url    = is_array( $col_a_button_url_f ) ? trim( (string) ( $col_a_button_url_f['url'] ?? '' ) ) : trim( (string) $col_a_button_url_f );
$col_a_button_style  = strtolower( str_replace( '_', '-', trim( (string) $stc_get_field( 'col_a_button_style' ) ) ) );
$col_a_bg_color      = trim( (string) $stc_get_field( 'col_a_background_color' ) );
$col_a_text_color    = trim( (string) $stc_get_field( 'col_a_text_color' ) );

// Column B
$col_b_image         = $stc_get_field( 'col_b_image' );
$col_b_heading       = $stc_get_field( 'col_b_heading' );
$col_b_copy          = $stc_get_field( 'col_b_copy' );
$col_b_button_label  = trim( (string) $stc_get_field( 'col_b_button_label' ) );
$col_b_button_url_f  = $stc_get_field( 'col_b_button_url' );
$col_b_button_url    = is_array( $col_b_button_url_f ) ? trim( (string) ( $col_b_button_url_f['url'] ?? '' ) ) : trim( (string) $col_b_button_url_f );
$col_b_button_style  = strtolower( str_replace( '_', '-', trim( (string) $stc_get_field( 'col_b_button_style' ) ) ) );
$col_b_bg_color      = trim( (string) $stc_get_field( 'col_b_background_color' ) );
$col_b_text_color    = trim( (string) $stc_get_field( 'col_b_text_color' ) );

// ─── Guard ────────────────────────────────────────────────────────────────────
$col_a_has_content = $col_a_heading || $col_a_copy || ! empty( $col_a_image['url'] );
$col_b_has_content = $col_b_heading || $col_b_copy || ! empty( $col_b_image['url'] );

if ( ! $col_a_has_content && ! $col_b_has_content ) {
	return;
}

// ─── Validate ─────────────────────────────────────────────────────────────────
if ( ! in_array( $content_alignment, array( 'left', 'center', 'right' ), true ) ) {
	$content_alignment = 'left';
}

if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
	$eyebrow_text_transform = 'uppercase';
}

if ( ! in_array( $eyebrow_variant, array( 'plain', 'pill', 'ink' ), true ) ) {
    $eyebrow_variant = 'plain';
}

if ( ! in_array( $eyebrow_font_family, array( 'haarlem', 'helvetica' ), true ) ) {
    $eyebrow_font_family = 'haarlem';
}

if ( ! in_array( $eyebrow_alignment, array( 'left', 'center', 'right' ), true ) ) {
    $eyebrow_alignment = $content_alignment;
}

if ( ! in_array( $heading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
	$heading_font_family = 'haarlem';
}

if ( ! in_array( $heading_font_weight, array( '300', '400', '500', '600', '700' ), true ) ) {
	$heading_font_weight = 'freight-big-pro' === $heading_font_family ? '400' : '600';
}

$section_keyline_position = in_array( $section_keyline_position, array( 'top', 'bottom' ), true ) ? $section_keyline_position : '';

$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
if ( ! in_array( $col_a_button_style, $allowed_button_styles, true ) ) {
	$col_a_button_style = 'outline-dark';
}
if ( ! in_array( $col_b_button_style, $allowed_button_styles, true ) ) {
	$col_b_button_style = 'outline-dark';
}

// ─── Column ratio → fr values ─────────────────────────────────────────────────
$ratio_map = array(
	'50-50' => array( '1fr', '1fr' ),
	'60-40' => array( '1.5fr', '1fr' ),
	'40-60' => array( '1fr', '1.5fr' ),
	'67-33' => array( '2fr', '1fr' ),
	'33-67' => array( '1fr', '2fr' ),
);
$col_frs = isset( $ratio_map[ $column_ratio ] ) ? $ratio_map[ $column_ratio ] : $ratio_map['50-50'];

// ─── Font stack ───────────────────────────────────────────────────────────────
$heading_font_css = 'freight-big-pro' === $heading_font_family
	? '"Freight Big Pro", Georgia, serif'
	: 'HaarlemDeco, Arial, Helvetica, sans-serif';
$eyebrow_font_css = 'helvetica' === $eyebrow_font_family ? 'Helvetica, Arial, sans-serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$eyebrow_font_size = 'helvetica' === $eyebrow_font_family ? '14px' : '12px';
$eyebrow_font_weight = 'helvetica' === $eyebrow_font_family ? '700' : '800';

// ─── Defaults ─────────────────────────────────────────────────────────────────
$eyebrow_color         = $eyebrow_color ?: '#946E29';
$eyebrow_fill_color    = $eyebrow_fill_color ?: '#f6f3ed';
$eyebrow_border_color  = $eyebrow_border_color ?: '#b58a2d';
$eyebrow_border_width  = $eyebrow_border_width ?: '1px';
$section_heading_color = $section_heading_color ?: '#51534a';
$background_color      = $background_color ?: 'transparent';
$section_keyline_color = $section_keyline_color ?: $section_heading_color;
$column_gap            = $column_gap ?: '0';
$col_min_height        = $col_min_height ?: '480px';
$col_a_bg_color        = $col_a_bg_color ?: '#f6f3ed';
$col_b_bg_color        = $col_b_bg_color ?: '#ffffff';
$col_a_text_color      = $col_a_text_color ?: '#51534a';
$col_b_text_color      = $col_b_text_color ?: '#51534a';
$padding_top           = $padding_top ?: '0';
$padding_bottom        = $padding_bottom ?: '0';

$section_id = $section_anchor_id ?: 'section-two-column-' . uniqid();

// ─── Section-level CSS vars ───────────────────────────────────────────────────
$section_styles = array(
	'background-color:' . $background_color,
	'padding-top:' . $padding_top,
	'padding-bottom:' . $padding_bottom,
	'--stc-col-a-fr:' . $col_frs[0],
	'--stc-col-b-fr:' . $col_frs[1],
	'--stc-gap:' . $column_gap,
	'--stc-col-min-height:' . $col_min_height,
	'--stc-col-a-bg:' . $col_a_bg_color,
	'--stc-col-b-bg:' . $col_b_bg_color,
	'--stc-col-a-text:' . $col_a_text_color,
	'--stc-col-b-text:' . $col_b_text_color,
	'--stc-eyebrow-color:' . $eyebrow_color,
    '--stc-eyebrow-fill:' . $eyebrow_fill_color,
    '--stc-eyebrow-border-color:' . $eyebrow_border_color,
    '--stc-eyebrow-border-width:' . $eyebrow_border_width,
	'--stc-eyebrow-transform:' . $eyebrow_text_transform,
    '--stc-eyebrow-align:' . $eyebrow_alignment,
    '--stc-eyebrow-font:' . $eyebrow_font_css,
    '--stc-eyebrow-size:' . $eyebrow_font_size,
    '--stc-eyebrow-weight:' . $eyebrow_font_weight,
	'--stc-heading-color:' . $section_heading_color,
	'--stc-heading-font:' . $heading_font_css,
	'--stc-heading-weight:' . $heading_font_weight,
	'--stc-align:' . $content_alignment,
);

if ( 'top' === $section_keyline_position ) {
	$section_styles[] = 'border-top:1px solid ' . $section_keyline_color;
}
if ( 'bottom' === $section_keyline_position ) {
	$section_styles[] = 'border-bottom:1px solid ' . $section_keyline_color;
}

$section_style_attr = implode( ';', $section_styles );

// ─── Section-class list ───────────────────────────────────────────────────────
$section_class_list = array( 'section-two-column' );
if ( $section_classes ) {
	$section_class_list[] = $section_classes;
}

// ─── Image helpers ────────────────────────────────────────────────────────────
$col_a_image_url = ! empty( $col_a_image['url'] ) ? $col_a_image['url'] : '';
$col_a_image_alt = ! empty( $col_a_image['alt'] ) ? $col_a_image['alt'] : trim( wp_strip_all_tags( (string) $col_a_heading ) );
$col_b_image_url = ! empty( $col_b_image['url'] ) ? $col_b_image['url'] : '';
$col_b_image_alt = ! empty( $col_b_image['alt'] ) ? $col_b_image['alt'] : trim( wp_strip_all_tags( (string) $col_b_heading ) );

// ─── WYSIWYG content strip ────────────────────────────────────────────────────
$col_a_copy_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $col_a_copy ) : $col_a_copy;
$col_b_copy_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $col_b_copy ) : $col_b_copy;
$section_intro_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $section_intro ) : $section_intro;

$allowed_heading_html = array(
	'b'    => array(),
	'strong' => array(),
	'i'    => array(),
	'em'   => array(),
	'br'   => array(),
	'span' => array( 'class' => array() ),
);
?>

<style>
.section-two-column {
    overflow: hidden;
}

.section-two-column__header {
    padding-top: 60px;
    padding-bottom: 40px;
    text-align: var(--stc-align, left);
}

.section-two-column__header-eyebrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: fit-content;
    max-width: 100%;
    min-height: 34px;
    padding: 8px 16px;
    margin-bottom: 10px;
    color: var(--stc-eyebrow-color, #946E29);
    border: var(--stc-eyebrow-border-width, 1px) solid var(--stc-eyebrow-border-color, #b58a2d);
    background: var(--stc-eyebrow-fill, #f6f3ed);
    font-family: var(--stc-eyebrow-font, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: var(--stc-eyebrow-size, 12px);
    font-weight: var(--stc-eyebrow-weight, 800);
    letter-spacing: .16em;
    line-height: 1.2;
    text-transform: var(--stc-eyebrow-transform, uppercase);
}

.section-two-column__header-eyebrow-wrap,
.section-two-column__col-eyebrow-wrap {
    text-align: var(--stc-eyebrow-align, left);
}

.section-two-column__header-eyebrow.section-two-column__eyebrow--plain,
.section-two-column__col-eyebrow.section-two-column__eyebrow--plain {
    border-color: transparent;
    background: transparent;
    border-radius: 0;
}

.section-two-column__header-eyebrow.section-two-column__eyebrow--pill,
.section-two-column__col-eyebrow.section-two-column__eyebrow--pill {
    border-radius: 999px;
}

.section-two-column__header-eyebrow.section-two-column__eyebrow--ink,
.section-two-column__col-eyebrow.section-two-column__eyebrow--ink {
    border-radius: 999px;
}

.section-two-column__header-heading {
    margin: 0 0 16px;
    color: var(--stc-heading-color, #51534a);
    font-family: var(--stc-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: clamp(32px, 3.6vw, 52px);
    font-weight: var(--stc-heading-weight, 400);
    line-height: 1.02;
}

.section-two-column__header-heading em,
.section-two-column__header-heading i {
    font-style: italic !important;
}

.section-two-column__header-intro,
.section-two-column__header-intro p {
    color: var(--stc-heading-color, #51534a);
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(18px, 1.8vw, 22px);
    font-weight: 400;
    line-height: 1.6;
    margin: 0 0 1em;
}

.section-two-column__header-intro p:last-child {
    margin-bottom: 0;
}

.section-two-column__grid {
    display: grid;
    grid-template-columns: var(--stc-col-a-fr, 1fr) var(--stc-col-b-fr, 1fr);
    gap: var(--stc-gap, 0);
    align-items: stretch;
}

.section-two-column__col {
    position: relative;
    min-height: var(--stc-col-min-height, 480px);
    display: flex;
    flex-direction: column;
}

.section-two-column__col--a {
    background-color: var(--stc-col-a-bg, #f6f3ed);
    color: var(--stc-col-a-text, #51534a);
}

.section-two-column__col--b {
    background-color: var(--stc-col-b-bg, #ffffff);
    color: var(--stc-col-b-text, #51534a);
}

/* Full-cover image layer — absolute, does not affect column height flow */
.section-two-column__col-media {
    position: absolute;
    inset: 0;
    overflow: hidden;
}

.section-two-column__col-media img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Content sits in normal flow on top of the image */
.section-two-column__col-content {
    position: relative;
    z-index: 1;
    padding: clamp(40px, 5vw, 72px);
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: var(--stc-align, left);
}

/* When image is present, push content to bottom with gradient scrim */
.section-two-column__col--has-image .section-two-column__col-content {
    justify-content: flex-end;
    margin-top: auto;
    flex: 0 0 auto;
    padding-top: 80px;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.68) 0%, transparent 100%);
    color: #fff;
}

/* Eyebrow */
.section-two-column__col-eyebrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: fit-content;
    max-width: 100%;
    min-height: 34px;
    padding: 8px 16px;
    margin-bottom: 10px;
    color: var(--stc-eyebrow-color, #946E29);
    border: var(--stc-eyebrow-border-width, 1px) solid var(--stc-eyebrow-border-color, #b58a2d);
    background: var(--stc-eyebrow-fill, #f6f3ed);
    font-family: var(--stc-eyebrow-font, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: var(--stc-eyebrow-size, 12px);
    font-weight: var(--stc-eyebrow-weight, 800);
    letter-spacing: .16em;
    line-height: 1.2;
    text-transform: var(--stc-eyebrow-transform, uppercase);
}

/* Column heading */
.section-two-column__col-heading {
    margin: 0 0 14px;
    color: inherit;
    font-family: var(--stc-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: clamp(26px, 2.8vw, 44px);
    font-weight: var(--stc-heading-weight, 400);
    line-height: 1.02;
}

.section-two-column__col-heading em,
.section-two-column__col-heading i {
    font-style: italic !important;
}

.section-two-column--freight-italic-medium .section-two-column__header-heading,
.section-two-column--freight-italic-medium .section-two-column__col-heading {
    font-family: "Freight Big Pro", Georgia, serif !important;
    font-weight: 500 !important;
    font-style: italic;
    letter-spacing: .02em;
}

/* Copy */
.section-two-column__col-copy,
.section-two-column__col-copy p {
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(17px, 1.6vw, 20px);
    font-weight: 400;
    line-height: 1.6;
    margin: 0 0 1em;
}

.section-two-column__col-copy p:last-child {
    margin-bottom: 0;
}

.section-two-column__col-copy em,
.section-two-column__col-copy i {
    font-style: italic !important;
}

/* CTA */
.section-two-column__col-cta {
    margin-top: 24px;
}

/* Mobile: stack columns */
@media (max-width: 767px) {
    .section-two-column__grid {
        grid-template-columns: 1fr;
    }

    .section-two-column__col {
        min-height: 320px;
    }

    .section-two-column__col-content {
        min-height: 0;
    }

    .section-two-column__col--has-image .section-two-column__col-content {
        padding-top: 60px;
    }
}
</style>

<section id="<?php echo esc_attr( $section_id ); ?>" class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>" style="<?php echo esc_attr( $section_style_attr ); ?>">

    <?php if ( $section_eyebrow || $section_heading || $section_intro ) : ?>
        <div class="container">
            <div class="section-two-column__header">
                <?php if ( $section_eyebrow ) : ?>
                    <div class="section-two-column__header-eyebrow-wrap">
                        <span class="section-two-column__header-eyebrow section-two-column__eyebrow--<?php echo esc_attr( $eyebrow_variant ); ?>"><?php echo esc_html( $section_eyebrow ); ?></span>
                    </div>
                <?php endif; ?>
                <?php if ( $section_heading ) : ?>
                    <h2 class="section-two-column__header-heading"><?php echo wp_kses( $section_heading, $allowed_heading_html ); ?></h2>
                <?php endif; ?>
                <?php if ( $section_intro ) : ?>
                    <div class="section-two-column__header-intro"><?php echo wp_kses_post( $section_intro_output ); ?></div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php $grid_open = 'container' === $container_type ? '<div class="container"><div class="section-two-column__grid">' : '<div class="section-two-column__grid">'; ?>
    <?php $grid_close = 'container' === $container_type ? '</div></div>' : '</div>'; ?>

    <?php echo $grid_open; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

        <?php // ── Column A ──────────────────────────────────────────────────── ?>
        <?php $col_a_classes = 'section-two-column__col section-two-column__col--a' . ( $col_a_image_url ? ' section-two-column__col--has-image' : '' ); ?>
        <div class="<?php echo esc_attr( $col_a_classes ); ?>">

            <?php if ( $col_a_image_url ) : ?>
                <div class="section-two-column__col-media">
                    <img src="<?php echo esc_url( $col_a_image_url ); ?>" alt="<?php echo esc_attr( $col_a_image_alt ); ?>">
                </div>
            <?php endif; ?>

            <?php if ( $col_a_heading || $col_a_copy || ( $col_a_button_label && $col_a_button_url ) ) : ?>
                <div class="section-two-column__col-content">
                    <?php if ( $section_eyebrow && ! $section_heading ) : ?>
                        <div class="section-two-column__col-eyebrow-wrap">
                            <span class="section-two-column__col-eyebrow section-two-column__eyebrow--<?php echo esc_attr( $eyebrow_variant ); ?>"><?php echo esc_html( $section_eyebrow ); ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if ( $col_a_heading ) : ?>
                        <h3 class="section-two-column__col-heading"><?php echo wp_kses( $col_a_heading, $allowed_heading_html ); ?></h3>
                    <?php endif; ?>
                    <?php if ( $col_a_copy ) : ?>
                        <div class="section-two-column__col-copy"><?php echo wp_kses_post( $col_a_copy_output ); ?></div>
                    <?php endif; ?>
                    <?php if ( $col_a_button_label && $col_a_button_url ) : ?>
                        <div class="section-two-column__col-cta">
                            <a class="hero-button hero-button--<?php echo esc_attr( $col_a_button_style ); ?>" href="<?php echo esc_url( $col_a_button_url ); ?>"><?php echo esc_html( $col_a_button_label ); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>

        <?php // ── Column B ──────────────────────────────────────────────────── ?>
        <?php $col_b_classes = 'section-two-column__col section-two-column__col--b' . ( $col_b_image_url ? ' section-two-column__col--has-image' : '' ); ?>
        <div class="<?php echo esc_attr( $col_b_classes ); ?>">

            <?php if ( $col_b_image_url ) : ?>
                <div class="section-two-column__col-media">
                    <img src="<?php echo esc_url( $col_b_image_url ); ?>" alt="<?php echo esc_attr( $col_b_image_alt ); ?>">
                </div>
            <?php endif; ?>

            <?php if ( $col_b_heading || $col_b_copy || ( $col_b_button_label && $col_b_button_url ) ) : ?>
                <div class="section-two-column__col-content">
                    <?php if ( $col_b_heading ) : ?>
                        <h3 class="section-two-column__col-heading"><?php echo wp_kses( $col_b_heading, $allowed_heading_html ); ?></h3>
                    <?php endif; ?>
                    <?php if ( $col_b_copy ) : ?>
                        <div class="section-two-column__col-copy"><?php echo wp_kses_post( $col_b_copy_output ); ?></div>
                    <?php endif; ?>
                    <?php if ( $col_b_button_label && $col_b_button_url ) : ?>
                        <div class="section-two-column__col-cta">
                            <a class="hero-button hero-button--<?php echo esc_attr( $col_b_button_style ); ?>" href="<?php echo esc_url( $col_b_button_url ); ?>"><?php echo esc_html( $col_b_button_label ); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>

    <?php echo $grid_close; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

</section>
