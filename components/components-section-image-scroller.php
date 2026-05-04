<?php
$section_image_scroller_override = isset( $GLOBALS['section_image_scroller_override'] ) && is_array( $GLOBALS['section_image_scroller_override'] )
    ? $GLOBALS['section_image_scroller_override']
    : array();

$get_image_scroller_field = static function ( $key ) use ( $section_image_scroller_override ) {
    if ( array_key_exists( $key, $section_image_scroller_override ) ) {
        return $section_image_scroller_override[ $key ];
    }

    return function_exists( 'get_sub_field' ) ? get_sub_field( $key ) : null;
};

$section_eyebrow = $get_image_scroller_field('section_eyebrow');
$section_heading = $get_image_scroller_field('section_heading');
$section_intro = $get_image_scroller_field('section_intro');
$section_anchor_id = strtolower( trim( (string) $get_image_scroller_field('section_anchor_id') ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$content_alignment = $get_image_scroller_field('content_alignment') ?: 'left';
$container_type = $get_image_scroller_field('container_type') ?: 'container-fluid';
$background_color = $get_image_scroller_field('background_color');
$background_image = $get_image_scroller_field('background_image');
$background_gradient = trim( (string) $get_image_scroller_field('background_gradient') );
$use_scrollwork = $get_image_scroller_field('use_scrollwork');
$scrollwork_side = $get_image_scroller_field('scrollwork_side') ?: 'left';
$scrollwork_color = trim( (string) $get_image_scroller_field('scrollwork_color') );
$section_classes = trim( (string) $get_image_scroller_field('section_classes') );
$padding_top = trim( (string) $get_image_scroller_field('padding_top') );
$padding_bottom = trim( (string) $get_image_scroller_field('padding_bottom') );
$section_keyline_position = strtolower( trim( (string) $get_image_scroller_field('section_keyline_position') ) );
$section_keyline_color = trim( (string) $get_image_scroller_field('section_keyline_color') );
$section_intro_max_width = trim( (string) $get_image_scroller_field('section_intro_max_width') );
$heading_max_width = trim( (string) $get_image_scroller_field('heading_max_width') );
$section_heading_color = trim( (string) $get_image_scroller_field('section_heading_color') );
$section_button_label = trim( (string) $get_image_scroller_field('section_button_label') );
$section_button_url = trim( (string) $get_image_scroller_field('section_button_url') );
$section_button_style = strtolower( trim( (string) $get_image_scroller_field('section_button_style') ) );
$section_button_alignment = strtolower( trim( (string) $get_image_scroller_field('section_button_alignment') ) );
$button_size = strtolower( trim( (string) $get_image_scroller_field('button_size') ) );
$cta_text_size = trim( (string) $get_image_scroller_field('cta_text_size') );
$cta_padding = trim( (string) $get_image_scroller_field('cta_padding') );
$cta_letter_spacing = trim( (string) $get_image_scroller_field('cta_letter_spacing') );
$scroll_speed = (int) $get_image_scroller_field('scroll_speed_seconds');
$pause_on_hover = $get_image_scroller_field('pause_on_hover');
$heading_font_family = strtolower( trim( (string) $get_image_scroller_field('heading_font_family') ) );
$heading_font_weight = trim( (string) $get_image_scroller_field('heading_font_weight') );
$heading_text_transform = strtolower( trim( (string) $get_image_scroller_field('heading_text_transform') ) );
$subheading_font_family = strtolower( trim( (string) $get_image_scroller_field('subheading_font_family') ) );
$subheading_font_weight = trim( (string) $get_image_scroller_field('subheading_font_weight') );
$eyebrow_font_size = trim( (string) $get_image_scroller_field('eyebrow_font_size') );
$eyebrow_text_transform = strtolower( trim( (string) $get_image_scroller_field('eyebrow_text_transform') ) );
$eyebrow_preset = strtolower( trim( (string) $get_image_scroller_field('eyebrow_preset') ) );
$scroller_image_height = trim( (string) $get_image_scroller_field('scroller_image_height') );
$scroller_image_ratio_raw = trim( (string) $get_image_scroller_field('scroller_image_ratio') );
$scroller_image_gap = trim( (string) $get_image_scroller_field('scroller_image_gap') );
$scroller_row_gap = trim( (string) $get_image_scroller_field('scroller_row_gap') );
$scroller_column_gap = trim( (string) $get_image_scroller_field('scroller_column_gap') );
$masonry_row_offset = trim( (string) $get_image_scroller_field('masonry_row_offset') );
$scroller_variant = strtolower( trim( (string) $get_image_scroller_field('scroller_variant') ) );
$uniform_item_size = $get_image_scroller_field( 'uniform_item_size' );
$show_captions = $get_image_scroller_field( 'show_captions' );
$caption_font_family = strtolower( trim( (string) $get_image_scroller_field( 'caption_font_family' ) ) );
$caption_font_weight = trim( (string) $get_image_scroller_field( 'caption_font_weight' ) );

if ( ! in_array( $heading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $heading_font_family = 'haarlem';
}

if ( ! in_array( $heading_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $heading_font_weight = 'freight-big-pro' === $heading_font_family ? '400' : '600';
}

if ( ! in_array( $heading_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $heading_text_transform = 'capitalize';
}

if ( ! in_array( $subheading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $subheading_font_family = $heading_font_family;
}

if ( ! in_array( $subheading_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $subheading_font_weight = 'freight-big-pro' === $subheading_font_family ? '400' : $heading_font_weight;
}

if ( ! in_array( $caption_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $caption_font_family = 'freight-big-pro';
}

if ( ! in_array( $caption_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $caption_font_weight = '400';
}

if ( ! in_array( $scroller_variant, array( 'variant-1-marquee', 'variant-2-masonry', 'variant-3-framed' ), true ) ) {
    $scroller_variant = 'variant-1-marquee';
}

$heading_font_stack = 'freight-big-pro' === $heading_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)';
$subheading_font_stack = 'freight-big-pro' === $subheading_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)';
$heading_letter_spacing = 'freight-big-pro' === $heading_font_family ? '.03em' : '0.1275rem';
$subheading_letter_spacing = 'freight-big-pro' === $subheading_font_family ? '.03em' : '0.1275rem';

if ( is_page( 'flex' ) && 'freight-big-pro' === $heading_font_family ) {
    $heading_font_weight = '400';
}

if ( is_page( 'flex' ) && 'freight-big-pro' === $subheading_font_family ) {
    $subheading_font_weight = '400';
}

$default_surface_gradient = function_exists( 'lacc_get_default_surface_gradient' ) ? lacc_get_default_surface_gradient() : 'linear-gradient(180deg, rgba(246,243,237,0.92) 0%, rgba(255,255,255,0.92) 100%)';
$section_intro_max_width = $section_intro_max_width ?: '100%';
$heading_max_width = $heading_max_width ?: '100%';
$section_heading_color = $section_heading_color ?: 'var(--lacc-color-ink)';
$section_keyline_position = in_array( $section_keyline_position, array( 'top', 'bottom' ), true ) ? $section_keyline_position : '';
$section_keyline_color = $section_keyline_color ?: $section_heading_color;
$scrollwork_color = $scrollwork_color ?: '#8DC5DB';
$eyebrow_font_size = $eyebrow_font_size ?: '12px';
if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $eyebrow_text_transform = 'capitalize';
}
$eyebrow_color     = '';
$eyebrow_bg        = '';
$eyebrow_border    = '';
$eyebrow_padding   = '';
$eyebrow_radius    = '';

$eyebrow_preset_map = array(
    'pill'  => array(
        'size'      => '12px',
        'transform' => 'uppercase',
        'color'     => '#946E29',
        'bg'        => 'transparent',
        'border'    => '1px solid rgba(181,138,45,0.32)',
        'padding'   => '0.42em 1.17em',
        'radius'    => '999px',
    ),
    'plain' => array(
        'size'      => '12px',
        'transform' => 'uppercase',
        'color'     => '#946E29',
        'bg'        => 'transparent',
        'border'    => 'none',
        'padding'   => '0',
        'radius'    => '0',
    ),
    'ink'   => array(
        'size'      => '12px',
        'transform' => 'uppercase',
        'color'     => '#f6f3ed',
        'bg'        => '#51534a',
        'border'    => 'none',
        'padding'   => '0.42em 1.17em',
        'radius'    => '999px',
    ),
);
if ( isset( $eyebrow_preset_map[ $eyebrow_preset ] ) ) {
    $p                      = $eyebrow_preset_map[ $eyebrow_preset ];
    $eyebrow_font_size      = $p['size'];
    $eyebrow_text_transform = $p['transform'];
    $eyebrow_color          = $p['color'];
    $eyebrow_bg             = $p['bg'];
    $eyebrow_border         = $p['border'];
    $eyebrow_padding        = $p['padding'];
    $eyebrow_radius         = $p['radius'];
}
$scroller_image_height = $scroller_image_height ?: '220px';
$scroller_image_gap = $scroller_image_gap ?: '18px';
$scroller_row_gap = $scroller_row_gap ?: $scroller_image_gap;
$scroller_column_gap = $scroller_column_gap ?: $scroller_image_gap;
$masonry_row_offset = $masonry_row_offset ?: '120px';
$uniform_item_size = ( null === $uniform_item_size || '' === $uniform_item_size ) ? 1 : $uniform_item_size;
$show_captions = ( null === $show_captions || '' === $show_captions ) ? 1 : $show_captions;
$scroller_image_ratio = '';
$scroller_image_width = '220px';
if ( preg_match( '/^\s*(\d+(?:\.\d+)?)\s*[:\/]\s*(\d+(?:\.\d+)?)\s*$/', $scroller_image_ratio_raw, $ratio_matches ) ) {
    $ratio_width = (float) $ratio_matches[1];
    $ratio_height = (float) $ratio_matches[2];
    if ( $ratio_width > 0 && $ratio_height > 0 ) {
        $scroller_image_ratio = $ratio_width . ' / ' . $ratio_height;
        $ratio_multiplier = rtrim( rtrim( number_format( $ratio_width / $ratio_height, 4, '.', '' ), '0' ), '.' );
        $scroller_image_width = 'calc(' . $scroller_image_height . ' * ' . $ratio_multiplier . ')';
    }
}
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
$cta_text_size = $cta_text_size ?: $resolved_button_size['font_size'];
$cta_padding = $cta_padding ?: $resolved_button_size['padding'];
$cta_letter_spacing = $cta_letter_spacing ?: $resolved_button_size['letter_spacing'];
$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
$section_button_style = in_array( $section_button_style, $allowed_button_styles, true ) ? $section_button_style : 'outline-ink';
$section_button_alignment = in_array( $section_button_alignment, array( 'left', 'center', 'right' ), true ) ? $section_button_alignment : $content_alignment;
$section_intro_margin = 'center' === $content_alignment ? '0 auto' : ( 'right' === $content_alignment ? '0 0 0 auto' : '0 auto 0 0' );
$heading_margin = 'center' === $content_alignment ? '0 auto 12px' : ( 'right' === $content_alignment ? '0 0 12px auto' : '0 auto 12px 0' );
$cta_justify = 'center' === $section_button_alignment ? 'center' : ( 'right' === $section_button_alignment ? 'flex-end' : 'flex-start' );
$allowed_heading_html = array(
    'b' => array(),
    'strong' => array(),
    'i' => array(),
    'em' => array(),
    'br' => array(),
    'span' => array( 'class' => array() ),
);

if ( $scroll_speed <= 0 ) {
    $scroll_speed = 30;
}

$layout_class = 'section-image-scroller__layout section-image-scroller__layout--full';
if ( 'container' === $container_type ) {
    $layout_class = 'section-image-scroller__layout section-image-scroller__layout--contained';
}

$section_class_list = array( 'section-image-scroller' );
if ( $uniform_item_size ) {
    $section_class_list[] = 'section-image-scroller--uniform';
} else {
    $section_class_list[] = 'section-image-scroller--non-uniform';
}
if ( ! $show_captions ) {
    $section_class_list[] = 'section-image-scroller--captions-off';
}
if ( 'variant-2-masonry' === $scroller_variant ) {
    $section_class_list[] = 'section-image-scroller--variant-masonry';
} elseif ( 'variant-3-framed' === $scroller_variant ) {
    $section_class_list[] = 'section-image-scroller--variant-framed';
} else {
    $section_class_list[] = 'section-image-scroller--variant-marquee';
}
if ( $section_classes ) {
    $section_class_list[] = $section_classes;
}
if ( $use_scrollwork ) {
    $section_class_list[] = 'section-image-scroller--scrollwork-' . $scrollwork_side;
}
if ( $pause_on_hover ) {
    $section_class_list[] = 'section-image-scroller--pause-on-hover';
}

$section_styles = array(
    '--sis-heading-font:' . $heading_font_stack,
    '--sis-heading-weight:' . $heading_font_weight,
    '--sis-heading-letter-spacing:' . $heading_letter_spacing,
    '--sis-subheading-font:' . $subheading_font_stack,
    '--sis-subheading-weight:' . $subheading_font_weight,
    '--sis-subheading-letter-spacing:' . $subheading_letter_spacing,
    '--sis-caption-font:' . ( 'freight-big-pro' === $caption_font_family
        ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
        : 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)' ),
    '--sis-caption-weight:' . $caption_font_weight,
    '--sis-heading-color:' . $section_heading_color,
    '--sis-scrollwork-color:' . $scrollwork_color,
    '--sis-heading-max-width:' . $heading_max_width,
    '--sis-heading-margin:' . $heading_margin,
    '--sis-heading-transform:' . $heading_text_transform,
    '--sis-eyebrow-size:' . $eyebrow_font_size,
    '--sis-eyebrow-transform:' . $eyebrow_text_transform,
    '--sis-eyebrow-color:' . ( $eyebrow_color ?: 'var(--lacc-color-sky)' ),
    '--sis-eyebrow-bg:' . ( $eyebrow_bg ?: 'transparent' ),
    '--sis-eyebrow-border:' . ( $eyebrow_border ?: 'none' ),
    '--sis-eyebrow-padding:' . ( $eyebrow_padding ?: '0' ),
    '--sis-eyebrow-radius:' . ( $eyebrow_radius ?: '0' ),
    '--sis-intro-max-width:' . $section_intro_max_width,
    '--sis-intro-margin:' . $section_intro_margin,
    '--sis-cta-justify:' . $cta_justify,
    '--sis-cta-align:' . $section_button_alignment,
    '--sis-cta-font-size:' . $cta_text_size,
    '--sis-cta-padding:' . $cta_padding,
    '--sis-cta-letter-spacing:' . $cta_letter_spacing,
    '--sis-image-height:' . $scroller_image_height,
    '--sis-image-width:' . $scroller_image_width,
    '--sis-image-ratio:' . ( $scroller_image_ratio ?: 'auto' ),
    '--sis-image-gap:' . $scroller_image_gap,
    '--sis-row-gap:' . $scroller_row_gap,
    '--sis-column-gap:' . $scroller_column_gap,
    '--sis-masonry-offset:' . $masonry_row_offset
);
if ( $background_color ) {
    $section_styles[] = 'background-color:' . $background_color;
}
if ( ! $background_gradient && empty( $background_image['url'] ) && ! $background_color ) {
    $background_gradient = $default_surface_gradient;
}
if ( $background_gradient && ! empty( $background_image['url'] ) ) {
    $section_styles[] = 'background-image:' . $background_gradient . ', url(' . esc_url( $background_image['url'] ) . ')';
    $section_styles[] = 'background-size:cover';
    $section_styles[] = 'background-position:center center';
} elseif ( $background_gradient ) {
    $section_styles[] = 'background-image:' . $background_gradient;
} elseif ( ! empty( $background_image['url'] ) ) {
    $section_styles[] = 'background-image:url(' . esc_url( $background_image['url'] ) . ')';
    $section_styles[] = 'background-size:cover';
    $section_styles[] = 'background-position:center center';
}
if ( $padding_top ) {
    $section_styles[] = 'padding-top:' . $padding_top;
}
if ( $padding_bottom ) {
    $section_styles[] = 'padding-bottom:' . $padding_bottom;
}
if ( 'top' === $section_keyline_position ) {
    $section_styles[] = 'border-top:1px solid ' . $section_keyline_color;
}
if ( 'bottom' === $section_keyline_position ) {
    $section_styles[] = 'border-bottom:1px solid ' . $section_keyline_color;
}
?>

<style>
.section-image-scroller {
    position: relative;
    --sis-scrollwork-width: var(--lacc-scrollwork-width, 78px);
    --sis-scrollwork-opacity: var(--lacc-scrollwork-opacity, 0.4);
    padding: 60px 0;
    overflow: visible;
    max-width: 100%;
}

.section-image-scroller--scrollwork-left,
.section-image-scroller--scrollwork-right {
    position: relative;
}

.section-image-scroller--scrollwork-left::before,
.section-image-scroller--scrollwork-right::before {
    content: '';
    position: absolute;
    top: 0;
    width: var(--sis-scrollwork-width, 78px);
    height: 100%;
    background-color: var(--sis-scrollwork-color, #8DC5DB);
    opacity: var(--sis-scrollwork-opacity, 0.4);
    pointer-events: none;
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-position: top center;
    mask-position: top center;
    -webkit-mask-size: var(--sis-scrollwork-width, 78px) auto;
    mask-size: var(--sis-scrollwork-width, 78px) auto;
}

.section-image-scroller--scrollwork-left::before {
    left: calc(50% - 500px);
}

.section-image-scroller--scrollwork-right::before {
    right: calc(50% - 500px);
}

.section-image-scroller__header {
    margin-bottom: 48px;
}

.section-image-scroller__layout {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
}

.section-image-scroller__layout--contained {
    max-width: 1200px;
}

.section-image-scroller__layout--full {
    max-width: none;
}

.section-image-scroller h2 {
    width: 100%;
    max-width: var(--sis-heading-max-width, 100%);
    margin: var(--sis-heading-margin, 0 0 12px);
    font-family: var(--sis-heading-font, var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)) !important;
    font-weight: var(--sis-heading-weight, 600) !important;
    letter-spacing: var(--sis-heading-letter-spacing, 0.1275rem);
    color: var(--sis-heading-color, var(--lacc-color-ink)) !important;
    text-transform: var(--sis-heading-transform, capitalize);
}

.section-image-scroller h3,
.section-image-scroller h4,
.section-image-scroller h5,
.section-image-scroller h6 {
    font-family: var(--sis-subheading-font, var(--sis-heading-font, var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif))) !important;
    font-weight: var(--sis-subheading-weight, var(--sis-heading-weight, 600)) !important;
    letter-spacing: var(--sis-subheading-letter-spacing, 0.1275rem);
    color: var(--sis-heading-color, var(--lacc-color-ink)) !important;
    text-transform: capitalize;
}

.section-image-scroller h2 em,
.section-image-scroller h2 i,
.section-image-scroller h3 em,
.section-image-scroller h3 i,
.section-image-scroller h4 em,
.section-image-scroller h4 i,
.section-image-scroller h5 em,
.section-image-scroller h5 i,
.section-image-scroller h6 em,
.section-image-scroller h6 i,
.section-image-scroller__intro em,
.section-image-scroller__intro i {
    font-style: italic !important;
}

.section-image-scroller__intro {
    width: 100%;
    max-width: var(--sis-intro-max-width, 100%);
    margin: var(--sis-intro-margin, 0 auto 0 0);
}

.section-image-scroller__eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    letter-spacing: .2em;
    font-size: var(--sis-eyebrow-size, 12px);
    color: var(--sis-eyebrow-color, var(--lacc-color-sky));
    background: var(--sis-eyebrow-bg, transparent);
    border: var(--sis-eyebrow-border, none);
    padding: var(--sis-eyebrow-padding, 0);
    border-radius: var(--sis-eyebrow-radius, 0);
    text-transform: var(--sis-eyebrow-transform, capitalize);
}

.section-image-scroller__viewport {
    width: 100vw;
    max-width: 100vw;
    margin-left: calc(50% - 50vw);
    margin-right: calc(50% - 50vw);
    overflow-x: hidden;
    overflow-y: visible;
}

.section-image-scroller__track {
    display: flex;
    gap: var(--sis-column-gap, var(--sis-image-gap, 18px));
    width: max-content;
    max-width: none;
    animation: section-image-scroller-marquee linear infinite;
}

.section-image-scroller--variant-marquee .section-image-scroller__track {
    align-items: center;
}

.section-image-scroller--pause-on-hover .section-image-scroller__track:hover {
    animation-play-state: paused;
}

.section-image-scroller__item {
    width: var(--sis-image-width, 220px);
    margin-right: 0;
    flex: 0 0 auto;
    overflow: hidden;
}

.section-image-scroller--non-uniform .section-image-scroller__item {
    width: var(--sis-item-width, var(--sis-image-width, 220px));
}

.section-image-scroller__link,
.section-image-scroller__frame {
    display: block;
    width: var(--sis-item-width, var(--sis-image-width, 220px));
    height: var(--sis-item-height, var(--sis-image-height, 220px));
    aspect-ratio: var(--sis-image-ratio, auto);
    overflow: hidden;
    background: var(--lacc-color-cream);
}

.section-image-scroller__frame img,
.section-image-scroller__link img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.section-image-scroller__caption {
    margin-top: 10px;
    font-size: 14px;
    line-height: 1.45;
    text-align: center;
    font-family: var(--sis-caption-font, var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif));
    font-weight: var(--sis-caption-weight, 400);
}

.section-image-scroller--captions-off .section-image-scroller__caption {
    display: none;
}

.section-image-scroller--variant-masonry .section-image-scroller__track {
    display: flex;
    align-items: stretch;
    gap: var(--sis-column-gap, var(--sis-image-gap, 12px));
    width: max-content;
}

.section-image-scroller--variant-masonry .section-image-scroller__masonry {
    display: grid;
    gap: var(--sis-row-gap, var(--sis-image-gap, 12px));
    padding: 0 12px;
}

.section-image-scroller--variant-masonry .section-image-scroller__masonry-row--two {
    margin-left: var(--sis-masonry-offset, 120px);
}

.section-image-scroller--variant-masonry .section-image-scroller__item {
    width: auto;
    display: flex;
    flex-direction: column;
}

.section-image-scroller--variant-masonry .section-image-scroller__link,
.section-image-scroller--variant-masonry .section-image-scroller__frame {
    width: var(--sis-item-width, var(--sis-image-width, 220px));
    height: var(--sis-item-height, var(--sis-image-height, 220px));
}

/* ---- VARIANT 3: FRAMED GALLERY GROUPS ---- */

.section-image-scroller--variant-framed .section-image-scroller__track {
    gap: var(--sis-column-gap, 14px);
    padding: 0 22px;
    align-items: center;
    min-height: 650px;
}

.sis-gallery-group {
    --sis-frame-inset: 8px;
    --sis-frame-corner-w: 64px;
    --sis-frame-corner-h: 64px;
    --sis-frame-stroke: #51534a;
    --sis-frame-stroke-w: 1.08px;
    position: relative;
    box-sizing: border-box;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    grid-template-rows: .95fr 1.42fr .95fr;
    gap: 12px;
    height: clamp(380px, 39vh, 50vh);
    max-height: 50vh;
    width: clamp(370px, 30vw, 560px);
    padding: 28px;
    background: transparent;
    flex: 0 0 auto;
}

.sis-gallery-group--compact { grid-template-rows: .96fr 1.42fr .96fr; height: clamp(380px, 40vh, 48vh); }
.sis-gallery-group--short   { grid-template-rows: .82fr 1.08fr .82fr; height: clamp(300px, 31vh, 39vh); }
.sis-gallery-group--mid     { grid-template-rows: .9fr 1.24fr .9fr;   height: clamp(340px, 35vh, 43vh); }
.sis-gallery-group--tall    { grid-template-rows: 1fr 1.58fr 1fr;     height: clamp(430px, 46vh, 50vh); }

/* Frame lines via ::before */
.sis-gallery-group::before {
    content: '';
    position: absolute;
    inset: 0;
    pointer-events: none;
    background:
        linear-gradient(var(--sis-frame-stroke), var(--sis-frame-stroke)) top var(--sis-frame-inset) left calc(var(--sis-frame-inset) + var(--sis-frame-corner-w)) / calc(100% - (2 * var(--sis-frame-inset)) - (2 * var(--sis-frame-corner-w))) var(--sis-frame-stroke-w) no-repeat,
        linear-gradient(var(--sis-frame-stroke), var(--sis-frame-stroke)) bottom var(--sis-frame-inset) left calc(var(--sis-frame-inset) + var(--sis-frame-corner-w)) / calc(100% - (2 * var(--sis-frame-inset)) - (2 * var(--sis-frame-corner-w))) var(--sis-frame-stroke-w) no-repeat,
        linear-gradient(var(--sis-frame-stroke), var(--sis-frame-stroke)) top calc(var(--sis-frame-inset) + var(--sis-frame-corner-h)) left var(--sis-frame-inset) / var(--sis-frame-stroke-w) calc(100% - (2 * var(--sis-frame-inset)) - (2 * var(--sis-frame-corner-h))) no-repeat,
        linear-gradient(var(--sis-frame-stroke), var(--sis-frame-stroke)) top calc(var(--sis-frame-inset) + var(--sis-frame-corner-h)) right var(--sis-frame-inset) / var(--sis-frame-stroke-w) calc(100% - (2 * var(--sis-frame-inset)) - (2 * var(--sis-frame-corner-h))) no-repeat;
}

/* Scrollwork corners */
.sis-gallery-corner {
    position: absolute;
    width: var(--sis-frame-corner-w);
    height: var(--sis-frame-corner-h);
    background: url('/wp-content/themes/LACC-sage-theme-master/brand/scrollwork-brand-gray.svg') center / 100% 100% no-repeat;
    pointer-events: none;
    z-index: 2;
}

.sis-gallery-corner--top-left    { top: var(--sis-frame-inset); left: var(--sis-frame-inset); }
.sis-gallery-corner--top-right   { top: var(--sis-frame-inset); right: var(--sis-frame-inset); transform: scaleX(-1); }
.sis-gallery-corner--bottom-left { bottom: var(--sis-frame-inset); left: var(--sis-frame-inset); transform: scaleY(-1); }
.sis-gallery-corner--bottom-right{ right: var(--sis-frame-inset); bottom: var(--sis-frame-inset); transform: scale(-1); }

/* Alternating vertical stagger */
.sis-gallery-group:nth-child(4n + 1) { transform: translateY(10px); }
.sis-gallery-group:nth-child(4n + 2) { transform: translateY(-14px); }
.sis-gallery-group:nth-child(4n + 3) { transform: translateY(6px); }
.sis-gallery-group:nth-child(4n)     { transform: translateY(-20px); }

/* Image cells */
.sis-gallery-item {
    position: relative;
    overflow: hidden;
    background: rgba(81, 83, 74, 0.08);
    border: 2px solid rgba(93, 71, 39, 0.5);
    box-shadow: inset 0 0 0 1px rgba(247, 240, 226, 0.62);
}

.sis-gallery-item::after {
    content: '';
    position: absolute;
    inset: 7px;
    border: 1px solid rgba(248, 240, 227, 0.34);
    pointer-events: none;
}

/* Left-feature layout */
.sis-gallery-group--left-feature .sis-gallery-item:nth-of-type(1) { grid-column: 1 / span 3; grid-row: 1 / span 2; }
.sis-gallery-group--left-feature .sis-gallery-item:nth-of-type(2) { grid-column: 4; grid-row: 1; }
.sis-gallery-group--left-feature .sis-gallery-item:nth-of-type(3) { grid-column: 4; grid-row: 2; }
.sis-gallery-group--left-feature .sis-gallery-item:nth-of-type(4) { grid-column: 1 / -1; grid-row: 3; }

/* Right-feature layout */
.sis-gallery-group--right-feature .sis-gallery-item:nth-of-type(1) { grid-column: 1; grid-row: 1; }
.sis-gallery-group--right-feature .sis-gallery-item:nth-of-type(2) { grid-column: 1; grid-row: 2; }
.sis-gallery-group--right-feature .sis-gallery-item:nth-of-type(3) { grid-column: 2 / -1; grid-row: 1 / span 2; }
.sis-gallery-group--right-feature .sis-gallery-item:nth-of-type(4) { grid-column: 1 / -1; grid-row: 3; }

.sis-gallery-item img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .55s ease;
}

.sis-gallery-item:hover img {
    transform: scale(1.04);
}

@media (max-width: 767px) {
    .section-image-scroller--variant-masonry .section-image-scroller__track {
        gap: var(--sis-column-gap, 12px);
    }

    .section-image-scroller--variant-masonry .section-image-scroller__masonry-row--two {
        margin-left: min(var(--sis-masonry-offset, 120px), 24vw);
    }

    .section-image-scroller--variant-masonry .section-image-scroller__link,
    .section-image-scroller--variant-masonry .section-image-scroller__frame {
        width: 100%;
        height: clamp(180px, 48vw, 300px);
    }

    .sis-gallery-group {
        width: clamp(280px, 80vw, 380px);
        height: auto;
        grid-template-columns: 1fr 1fr;
        padding: 20px;
    }

    .sis-gallery-group--left-feature .sis-gallery-item:nth-of-type(1),
    .sis-gallery-group--right-feature .sis-gallery-item:nth-of-type(3) {
        grid-column: 1 / -1;
        grid-row: auto;
        min-height: 160px;
    }

    .sis-gallery-group--left-feature .sis-gallery-item:nth-of-type(2),
    .sis-gallery-group--left-feature .sis-gallery-item:nth-of-type(3),
    .sis-gallery-group--right-feature .sis-gallery-item:nth-of-type(1),
    .sis-gallery-group--right-feature .sis-gallery-item:nth-of-type(2) {
        grid-column: auto;
        grid-row: auto;
        min-height: 100px;
    }

    .sis-gallery-group--left-feature .sis-gallery-item:nth-of-type(4),
    .sis-gallery-group--right-feature .sis-gallery-item:nth-of-type(4) {
        grid-column: 1 / -1;
        grid-row: auto;
        min-height: 100px;
    }
}

.section-image-scroller__footer {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 16px;
    margin-top: 48px;
}

.section-image-scroller__cta {
    display: flex;
    flex: 0 0 auto;
    width: auto;
    justify-content: center;
    margin-top: 0;
    text-align: center;
}

.section-image-scroller__controls {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 0;
}

@media (max-width: 767px) {
    .section-image-scroller__footer {
        flex-direction: row;
        justify-content: center;
    }

    .section-image-scroller__controls {
        justify-content: center;
        width: auto;
    }
}

.section-image-scroller__toggle {
    appearance: none;
    cursor: pointer;
}

.section-image-scroller__toggle:hover,
.section-image-scroller__toggle:focus {
    outline: none;
}

.section-image-scroller .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 0;
    min-height: 0;
    width: auto;
    padding: var(--sis-cta-padding, .75em 1.5em);
    border: 1px solid transparent;
    border-radius: 0;
    letter-spacing: var(--sis-cta-letter-spacing, .04em);
    font-size: var(--sis-cta-font-size, 16px);
    font-weight: 600;
    line-height: 1;
    text-decoration: none !important;
    box-shadow: none;
    transform: translateY(0);
    transition: background .25s ease, border-color .25s ease, color .25s ease;
}

.section-image-scroller .hero-button--primary {
    background: var(--lacc-color-action-primary, #3f5f85);
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: #ffffff !important;
}
.section-image-scroller .hero-button--primary:hover,
.section-image-scroller .hero-button--primary:focus {
    background: var(--lacc-color-action-primary-hover, #324c6a);
    border-color: var(--lacc-color-action-primary-hover, #324c6a);
    color: #ffffff !important;
}

.section-image-scroller .hero-button--secondary {
    background: var(--lacc-color-accent-old-gold, #7a5a1f);
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: #ffffff !important;
}
.section-image-scroller .hero-button--secondary:hover,
.section-image-scroller .hero-button--secondary:focus {
    background: var(--lacc-color-accent-old-gold-hover, #563f15);
    border-color: var(--lacc-color-accent-old-gold-hover, #563f15);
    color: #ffffff !important;
}

.section-image-scroller .hero-button--ink {
    background: var(--lacc-color-ink, #51534a);
    border-color: var(--lacc-color-ink, #51534a);
    color: #ffffff !important;
}
.section-image-scroller .hero-button--ink:hover,
.section-image-scroller .hero-button--ink:focus {
    background: var(--lacc-color-ink-deep, #1f221d);
    border-color: var(--lacc-color-ink-deep, #1f221d);
    color: #ffffff !important;
}

.section-image-scroller .hero-button--outline-dark,
.section-image-scroller .hero-button--outline-ink {
    background: transparent;
    border-color: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-ink, #51534a) !important;
}
.section-image-scroller .hero-button--outline-dark:hover,
.section-image-scroller .hero-button--outline-dark:focus,
.section-image-scroller .hero-button--outline-ink:hover,
.section-image-scroller .hero-button--outline-ink:focus {
    background: rgba(81, 83, 74, 0.08);
    border-color: var(--lacc-color-ink, #51534a);
    color: #3b3d37 !important;
}

.section-image-scroller .hero-button--outline {
    background: transparent;
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: var(--lacc-color-action-primary, #3f5f85) !important;
}
.section-image-scroller .hero-button--outline:hover,
.section-image-scroller .hero-button--outline:focus {
    background: var(--lacc-color-action-primary, #3f5f85);
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: #ffffff !important;
}

.section-image-scroller .hero-button--outline-gold {
    background: transparent;
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
}
.section-image-scroller .hero-button--outline-gold:hover,
.section-image-scroller .hero-button--outline-gold:focus {
    background: var(--lacc-color-accent-old-gold, #7a5a1f);
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: #ffffff !important;
}

.section-image-scroller .hero-button--light {
    background: var(--lacc-color-cream, #f6f3ed);
    border-color: #ddd4c8;
    color: var(--lacc-color-ink, #51534a) !important;
}
.section-image-scroller .hero-button--light:hover,
.section-image-scroller .hero-button--light:focus {
    background: #ebe2d5;
    border-color: #ddd4c8;
    color: var(--lacc-color-ink, #51534a) !important;
}

.section-image-scroller .hero-button--brown,
.section-image-scroller .hero-button--gold-text {
    background: transparent;
    border-color: #7c5542;
    color: #7c5542 !important;
}
.section-image-scroller .hero-button--brown:hover,
.section-image-scroller .hero-button--brown:focus,
.section-image-scroller .hero-button--gold-text:hover,
.section-image-scroller .hero-button--gold-text:focus {
    background: #7c5542;
    border-color: #7c5542;
    color: #ffffff !important;
}

@keyframes section-image-scroller-marquee {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}
</style>

<?php $section_intro_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $section_intro ) : $section_intro; ?>
<?php $items = array(); ?>

<section<?php echo $section_anchor_id ? ' id="' . esc_attr( $section_anchor_id ) . '"' : ''; ?> class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>"<?php echo $section_styles ? ' style="' . esc_attr( implode( ';', $section_styles ) ) . '"' : ''; ?>>
    <div class="<?php echo esc_attr( $layout_class ); ?>">
        <?php if ( $section_eyebrow || $section_heading || $section_intro ) : ?>
            <div class="section-image-scroller__header" style="text-align: <?php echo esc_attr( $content_alignment ); ?>;">
                <?php if ( $section_eyebrow ) : ?>
                    <span class="section-image-scroller__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                <?php endif; ?>
                <?php if ( $section_heading ) : ?>
                    <h2><?php echo wp_kses( $section_heading, $allowed_heading_html ); ?></h2>
                <?php endif; ?>
                <?php if ( $section_intro ) : ?>
                    <div class="section-image-scroller__intro"><?php echo $section_intro_output; ?></div>
                <?php endif; ?>
                </div>
        <?php endif; ?>

        <?php $items = $get_image_scroller_field( 'scroller_items' ); ?>
        <?php if ( ! is_array( $items ) ) : ?>
            <?php $items = array(); ?>
        <?php endif; ?>
        <?php if ( empty( $items ) && have_rows( 'scroller_items' ) ) : ?>
            <?php while ( have_rows( 'scroller_items' ) ) : the_row(); ?>
                <?php
                $items[] = array(
                    'image' => get_sub_field( 'image' ),
                    'caption' => get_sub_field( 'caption' ),
                    'link_url' => get_sub_field( 'link_url' ),
                    'item_width' => get_sub_field( 'item_width' ),
                    'item_height' => get_sub_field( 'item_height' ),
                );
                ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php
        $normalized_items = array();
        foreach ( $items as $index => $item ) {
            if ( empty( $item['image']['url'] ) ) {
                continue;
            }

            $item_width = trim( (string) ( $item['item_width'] ?? '' ) );
            $item_height = trim( (string) ( $item['item_height'] ?? '' ) );
            if ( ! $uniform_item_size ) {
                $item_width = $item_width ?: '';
                $item_height = $item_height ?: '';
            } else {
                $item_width = '';
                $item_height = '';
            }

            if ( 'variant-2-masonry' === $scroller_variant && ! $item_width ) {
                $masonry_widths = array( '227px', '470px', '470px', '470px', '227px' );
                $item_width = $masonry_widths[ $index % count( $masonry_widths ) ];
            }

            if ( 'variant-2-masonry' === $scroller_variant && ! $item_height ) {
                $item_height = '300px';
            }

            $normalized_items[] = array(
                'image' => $item['image'],
                'caption' => trim( (string) ( $item['caption'] ?? '' ) ),
                'link_url' => trim( (string) ( $item['link_url'] ?? '' ) ),
                'item_width' => $item_width,
                'item_height' => $item_height,
                'grid_row' => ( $index % 2 ) ? 2 : 1,
            );
        }

        $mosaic_groups = array();
        $masonry_row_one = array();
        $masonry_row_two = array();

        if ( 'variant-2-masonry' === $scroller_variant && ! empty( $normalized_items ) ) {
            foreach ( $normalized_items as $index => $item ) {
                if ( $index % 2 === 0 ) {
                    $masonry_row_one[] = $item;
                } else {
                    $masonry_row_two[] = $item;
                }
            }

            if ( empty( $masonry_row_two ) ) {
                $masonry_row_two = $masonry_row_one;
            }
        }

        if ( 'variant-3-framed' === $scroller_variant && ! empty( $normalized_items ) ) {
            $mosaic_groups = array_chunk( $normalized_items, 4 );
        }
        ?>
        <?php if ( ! empty( $normalized_items ) ) : ?>
            <div class="section-image-scroller__viewport">
                <?php if ( 'variant-2-masonry' === $scroller_variant ) : ?>
                    <div class="section-image-scroller__masonry">
                        <div class="section-image-scroller__masonry-row section-image-scroller__masonry-row--one section-image-scroller__track" style="animation-duration: <?php echo esc_attr( $scroll_speed ); ?>s;">
                            <?php for ( $loop = 0; $loop < 2; $loop++ ) : ?>
                                <?php foreach ( $masonry_row_one as $item ) : ?>
                                    <?php
                                    $item_style = array();
                                    if ( $item['item_width'] ) {
                                        $item_style[] = '--sis-item-width:' . $item['item_width'];
                                    }
                                    if ( $item['item_height'] ) {
                                        $item_style[] = '--sis-item-height:' . $item['item_height'];
                                    }
                                    ?>
                                    <div class="section-image-scroller__item"<?php echo $item_style ? ' style="' . esc_attr( implode( ';', $item_style ) ) . '"' : ''; ?>>
                                        <?php if ( $item['link_url'] ) : ?>
                                            <a class="section-image-scroller__link" href="<?php echo esc_url( $item['link_url'] ); ?>">
                                                <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ?? '' ); ?>">
                                            </a>
                                        <?php else : ?>
                                            <span class="section-image-scroller__frame">
                                                <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ?? '' ); ?>">
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endfor; ?>
                        </div>

                        <div class="section-image-scroller__masonry-row section-image-scroller__masonry-row--two section-image-scroller__track" style="animation-duration: <?php echo esc_attr( $scroll_speed ); ?>s;">
                            <?php for ( $loop = 0; $loop < 2; $loop++ ) : ?>
                                <?php foreach ( $masonry_row_two as $item ) : ?>
                                    <?php
                                    $item_style = array();
                                    if ( $item['item_width'] ) {
                                        $item_style[] = '--sis-item-width:' . $item['item_width'];
                                    }
                                    if ( $item['item_height'] ) {
                                        $item_style[] = '--sis-item-height:' . $item['item_height'];
                                    }
                                    ?>
                                    <div class="section-image-scroller__item"<?php echo $item_style ? ' style="' . esc_attr( implode( ';', $item_style ) ) . '"' : ''; ?>>
                                        <?php if ( $item['link_url'] ) : ?>
                                            <a class="section-image-scroller__link" href="<?php echo esc_url( $item['link_url'] ); ?>">
                                                <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ?? '' ); ?>">
                                            </a>
                                        <?php else : ?>
                                            <span class="section-image-scroller__frame">
                                                <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ?? '' ); ?>">
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="section-image-scroller__track" style="animation-duration: <?php echo esc_attr( $scroll_speed ); ?>s;">
                        <?php for ( $loop = 0; $loop < 2; $loop++ ) : ?>
                            <?php if ( 'variant-3-framed' === $scroller_variant ) : ?>
                            <?php
                            $group_sizes    = array( 'short', 'compact', 'mid', 'tall' );
                            foreach ( $mosaic_groups as $gi => $group ) :
                                if ( empty( $group[0]['image']['url'] ) ) { continue; }
                                $feature_side = ( $gi % 2 === 0 ) ? 'left' : 'right';
                                $size_mod     = $group_sizes[ $gi % 4 ];
                                // Pad group to exactly 4 items for the grid layout
                                $group = array_pad( $group, 4, $group[0] );
                            ?>
                                <div class="sis-gallery-group sis-gallery-group--<?php echo esc_attr( $feature_side ); ?>-feature sis-gallery-group--<?php echo esc_attr( $size_mod ); ?>">
                                    <div class="sis-gallery-corner sis-gallery-corner--top-left" aria-hidden="true"></div>
                                    <div class="sis-gallery-corner sis-gallery-corner--top-right" aria-hidden="true"></div>
                                    <div class="sis-gallery-corner sis-gallery-corner--bottom-left" aria-hidden="true"></div>
                                    <div class="sis-gallery-corner sis-gallery-corner--bottom-right" aria-hidden="true"></div>
                                    <?php foreach ( $group as $item ) : ?>
                                        <?php if ( empty( $item['image']['url'] ) ) { continue; } ?>
                                        <?php if ( $item['link_url'] ) : ?>
                                            <a class="sis-gallery-item" href="<?php echo esc_url( $item['link_url'] ); ?>">
                                                <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ?? '' ); ?>">
                                            </a>
                                        <?php else : ?>
                                            <div class="sis-gallery-item">
                                                <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ?? '' ); ?>">
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                            <?php else : ?>
                                <?php foreach ( $normalized_items as $item ) : ?>
                                <?php
                                $item_style = array();
                                if ( $item['item_width'] ) {
                                    $item_style[] = '--sis-item-width:' . $item['item_width'];
                                }
                                if ( $item['item_height'] ) {
                                    $item_style[] = '--sis-item-height:' . $item['item_height'];
                                }
                                ?>
                                <div class="section-image-scroller__item"<?php echo $item_style ? ' style="' . esc_attr( implode( ';', $item_style ) ) . '"' : ''; ?>>
                                    <?php if ( $item['link_url'] ) : ?>
                                        <a class="section-image-scroller__link" href="<?php echo esc_url( $item['link_url'] ); ?>">
                                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ?? '' ); ?>">
                                        </a>
                                    <?php else : ?>
                                        <span class="section-image-scroller__frame">
                                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ?? '' ); ?>">
                                        </span>
                                    <?php endif; ?>
                                    <?php if ( $show_captions && $item['caption'] ) : ?>
                                        <div class="section-image-scroller__caption"><?php echo esc_html( $item['caption'] ); ?></div>
                                    <?php endif; ?>
                                </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ( ( $section_button_label && $section_button_url ) || ! empty( $normalized_items ) ) : ?>
            <div class="section-image-scroller__footer">
                <?php if ( $section_button_label && $section_button_url ) : ?>
                    <div class="section-image-scroller__cta">
                        <a class="hero-button hero-button--<?php echo esc_attr( $section_button_style ); ?>" href="<?php echo esc_url( $section_button_url ); ?>"><?php echo esc_html( $section_button_label ); ?></a>
                    </div>
                <?php endif; ?>

                <?php if ( ! empty( $normalized_items ) ) : ?>
                    <div class="section-image-scroller__controls">
                        <button type="button" class="section-image-scroller__toggle hero-button hero-button--<?php echo esc_attr( $section_button_style ); ?>" data-scroller-toggle="pause" aria-pressed="false" aria-label="Pause image scroller">❚❚ Pause</button>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
<script>
(function() {
    if (window.__laccImageScrollerToggleInit) {
        return;
    }
    window.__laccImageScrollerToggleInit = true;

    document.addEventListener('click', function(event) {
        var toggle = event.target.closest('[data-scroller-toggle]');
        if (!toggle) {
            return;
        }

        var section = toggle.closest('.section-image-scroller');
        var tracks = section ? section.querySelectorAll('.section-image-scroller__track') : [];
        if (!tracks.length) {
            return;
        }

        var isPaused = toggle.getAttribute('data-scroller-toggle') === 'play';
        tracks.forEach(function(track) {
            track.style.animationPlayState = isPaused ? 'running' : 'paused';
        });
        toggle.setAttribute('data-scroller-toggle', isPaused ? 'pause' : 'play');
        toggle.setAttribute('aria-pressed', isPaused ? 'false' : 'true');
        toggle.setAttribute('aria-label', isPaused ? 'Pause image scroller' : 'Play image scroller');
        toggle.textContent = isPaused ? '❚❚ Pause' : '▶ Play';
    });
})();
</script>
