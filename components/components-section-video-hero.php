<?php
$section_video_hero_override = isset( $GLOBALS['section_video_hero_override'] ) && is_array( $GLOBALS['section_video_hero_override'] )
    ? $GLOBALS['section_video_hero_override']
    : array();

$get_video_hero_field = static function ( $key ) use ( $section_video_hero_override ) {
    if ( array_key_exists( $key, $section_video_hero_override ) ) {
        return $section_video_hero_override[ $key ];
    }

    return function_exists( 'get_sub_field' ) ? get_sub_field( $key ) : null;
};

$hero_media_type = strtolower( trim( (string) $get_video_hero_field('hero_media_type') ) );
$background_video_url = trim( $get_video_hero_field('background_video_url') ?: '' );
$background_video_library_url = trim( $get_video_hero_field('background_video_library_url') ?: '' );
$hero_background_image = $get_video_hero_field('background_image');
$hero_background_image_url = is_array( $hero_background_image ) && ! empty( $hero_background_image['url'] ) ? $hero_background_image['url'] : '';
$section_eyebrow = $get_video_hero_field('section_eyebrow');
$background_video_h1 = $get_video_hero_field('background_video_h1');
$background_video_h2 = $get_video_hero_field('background_video_h2');
$background_video_button_url = $get_video_hero_field('background_video_button_url');
$background_video_button_label = $get_video_hero_field('background_video_button_label');
$background_video_button_style = strtolower( trim( (string) $get_video_hero_field('background_video_button_style') ) );
$background_video_closure_notice_show = $get_video_hero_field('background_video_closure_notice_show');
$background_video_closure_notice = $get_video_hero_field('background_video_closure_notice');
$hero_height = trim( (string) $get_video_hero_field('hero_height') );
$section_anchor_id = strtolower( trim( (string) $get_video_hero_field('section_anchor_id') ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$subheading_font_family = strtolower( trim( (string) $get_video_hero_field('heading_font_family') ) );
$subheading_font_weight = trim( (string) $get_video_hero_field('heading_font_weight') );
$heading_text_transform = strtolower( trim( (string) $get_video_hero_field('heading_text_transform') ) );
$heading_alignment = strtolower( trim( (string) $get_video_hero_field('heading_alignment') ) );
$heading_max_width = trim( (string) $get_video_hero_field('heading_max_width') );
$overlay_content_max_width = trim( (string) $get_video_hero_field('overlay_content_max_width') );
$hero_heading_color = trim( (string) $get_video_hero_field('hero_heading_color') );
$hero_subheading_color = trim( (string) $get_video_hero_field('hero_subheading_color') );
$eyebrow_color = trim( (string) $get_video_hero_field('eyebrow_color') );
$eyebrow_font_family = strtolower( trim( (string) $get_video_hero_field('eyebrow_font_family') ) );
$eyebrow_font_weight = trim( (string) $get_video_hero_field('eyebrow_font_weight') );
$eyebrow_font_size = trim( (string) $get_video_hero_field('eyebrow_font_size') );
$eyebrow_text_transform = strtolower( trim( (string) $get_video_hero_field('eyebrow_text_transform') ) );
$eyebrow_background_color = trim( (string) $get_video_hero_field('eyebrow_background_color') );
$eyebrow_border = trim( (string) $get_video_hero_field('eyebrow_border') );
$eyebrow_padding = trim( (string) $get_video_hero_field('eyebrow_padding') );
$eyebrow_border_radius = trim( (string) $get_video_hero_field('eyebrow_border_radius') );
$eyebrow_preset = strtolower( trim( (string) $get_video_hero_field('eyebrow_preset') ) );
$eyebrow_font_size_override = $eyebrow_font_size;
$factoid_value_font_family = strtolower( trim( (string) $get_video_hero_field('factoid_value_font_family') ) );
$factoid_value_font_weight = trim( (string) $get_video_hero_field('factoid_value_font_weight') );
$factoid_value_color = trim( (string) $get_video_hero_field('factoid_value_color') );
$factoid_label_font_family = strtolower( trim( (string) $get_video_hero_field('factoid_label_font_family') ) );
$factoid_label_font_weight = trim( (string) $get_video_hero_field('factoid_label_font_weight') );
$factoid_label_color = trim( (string) $get_video_hero_field('factoid_label_color') );
$button_size = strtolower( trim( (string) $get_video_hero_field('button_size') ) );
$cta_text_size = trim( (string) $get_video_hero_field('cta_text_size') );
$cta_padding = trim( (string) $get_video_hero_field('cta_padding') );
$cta_letter_spacing = trim( (string) $get_video_hero_field('cta_letter_spacing') );
$section_video_hero_id = $section_anchor_id ?: 'section-video-hero-' . uniqid();

if ( ! in_array( $hero_media_type, array( 'video', 'image' ), true ) ) {
    $hero_media_type = 'video';
}

if ( 'image' === $hero_media_type && ! $hero_background_image_url ) {
    $hero_media_type = 'video';
}
$hero_factoids = array();
$hero_cta_buttons = array();

if ( ! in_array( $subheading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $subheading_font_family = 'freight-big-pro';
}

if ( ! in_array( $subheading_font_weight, array( '300', '400', '500', '600', '700' ), true ) ) {
    $subheading_font_weight = '400';
}

if ( ! in_array( $heading_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $heading_text_transform = 'uppercase';
}

if ( ! in_array( $heading_alignment, array( 'left', 'center', 'right' ), true ) ) {
    $heading_alignment = 'center';
}

if ( ! in_array( $factoid_value_font_family, array( 'default', 'haarlem', 'freight-big-pro' ), true ) ) {
    $factoid_value_font_family = 'freight-big-pro';
}

if ( ! in_array( $factoid_value_font_weight, array( '300', '400', '500', '600', '700' ), true ) ) {
    $factoid_value_font_weight = '500';
}

if ( ! in_array( $factoid_label_font_family, array( 'default', 'haarlem', 'freight-big-pro' ), true ) ) {
    $factoid_label_font_family = 'haarlem';
}

if ( ! in_array( $factoid_label_font_weight, array( '300', '400', '500', '600', '700' ), true ) ) {
    $factoid_label_font_weight = '600';
}

if ( ! in_array( $eyebrow_font_family, array( 'default', 'haarlem', 'freight-big-pro' ), true ) ) {
    $eyebrow_font_family = 'default';
}

if ( ! in_array( $eyebrow_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $eyebrow_font_weight = '600';
}

if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $eyebrow_text_transform = 'uppercase';
}

$subheading_font_stack = 'freight-big-pro' === $subheading_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)';
$factoid_value_font_stack = 'freight-big-pro' === $factoid_value_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)';
$factoid_label_font_stack = 'freight-big-pro' === $factoid_label_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : ( 'haarlem' === $factoid_label_font_family ? 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)' : 'inherit' );
$eyebrow_font_stack = 'freight-big-pro' === $eyebrow_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : ( 'haarlem' === $eyebrow_font_family ? 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)' : 'inherit' );
$hero_heading_color = $hero_heading_color ?: 'var(--lacc-color-cream)';
$hero_subheading_color = $hero_subheading_color ?: 'rgba(246,243,237,0.82)';
$eyebrow_color = $eyebrow_color ?: 'var(--lacc-color-gold-soft)';
$eyebrow_background_color = $eyebrow_background_color ?: 'transparent';
$eyebrow_border = $eyebrow_border ?: '1px solid rgba(181,138,45,0.32)';
$eyebrow_padding = $eyebrow_padding ?: '0.42em 1.17em';
$eyebrow_font_size = $eyebrow_font_size ?: '12px';
$eyebrow_border_radius = $eyebrow_border_radius ?: '999px';

$eyebrow_preset_map = array(
    'pill'  => array(
        'font_family'   => 'haarlem',
        'font_weight'   => '600',
        'font_size'     => '12px',
        'transform'     => 'uppercase',
        'color'         => '#946E29',
        'bg'            => 'transparent',
        'border'        => '1px solid rgba(181,138,45,0.32)',
        'padding'       => '0.42em 1.17em',
        'radius'        => '999px',
    ),
    'plain' => array(
        'font_family'   => 'haarlem',
        'font_weight'   => '600',
        'font_size'     => '12px',
        'transform'     => 'uppercase',
        'color'         => '#946E29',
        'bg'            => 'transparent',
        'border'        => 'none',
        'padding'       => '0',
        'radius'        => '0',
    ),
    'ink'   => array(
        'font_family'   => 'haarlem',
        'font_weight'   => '600',
        'font_size'     => '12px',
        'transform'     => 'uppercase',
        'color'         => '#f6f3ed',
        'bg'            => '#51534a',
        'border'        => 'none',
        'padding'       => '0.42em 1.17em',
        'radius'        => '999px',
    ),
);
if ( isset( $eyebrow_preset_map[ $eyebrow_preset ] ) ) {
    $p                      = $eyebrow_preset_map[ $eyebrow_preset ];
    $eyebrow_font_family    = $p['font_family'];
    $eyebrow_font_weight    = $p['font_weight'];
    $eyebrow_font_size      = $p['font_size'];
    $eyebrow_text_transform = $p['transform'];
    $eyebrow_color          = $p['color'];
    $eyebrow_background_color = $p['bg'];
    $eyebrow_border         = $p['border'];
    $eyebrow_padding        = $p['padding'];
    $eyebrow_border_radius  = $p['radius'];
    $eyebrow_font_stack     = 'haarlem' === $eyebrow_font_family
        ? 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)'
        : ( 'freight-big-pro' === $eyebrow_font_family
            ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
            : 'inherit' );
    if ( $eyebrow_font_size_override ) {
        $eyebrow_font_size = $eyebrow_font_size_override;
    }
}
$factoid_value_color = $factoid_value_color ?: 'var(--lacc-color-gold-soft)';
$factoid_label_color = $factoid_label_color ?: 'rgba(246,243,237,0.78)';
$heading_max_width = $heading_max_width ?: '100%';
$overlay_content_max_width = $overlay_content_max_width ?: '980px';
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

    if ( ! in_array( $background_video_button_style, array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold', 'white', 'outline-white' ), true ) ) {
        $background_video_button_style = 'primary';
    }

if ( is_array( $get_video_hero_field( 'hero_factoids' ) ) ) {
    foreach ( $get_video_hero_field( 'hero_factoids' ) as $factoid_item ) {
        $factoid_value = trim( (string) ( $factoid_item['factoid_value'] ?? '' ) );
        $factoid_label = trim( (string) ( $factoid_item['factoid_label'] ?? '' ) );

        if ( '' !== $factoid_value || '' !== $factoid_label ) {
            $hero_factoids[] = array(
                'value' => $factoid_value,
                'label' => $factoid_label,
            );
        }
    }
} elseif ( have_rows( 'hero_factoids' ) ) {
    while ( have_rows( 'hero_factoids' ) ) {
        the_row();
        $factoid_value = trim( (string) get_sub_field( 'factoid_value' ) );
        $factoid_label = trim( (string) get_sub_field( 'factoid_label' ) );

        if ( '' !== $factoid_value || '' !== $factoid_label ) {
            $hero_factoids[] = array(
                'value' => $factoid_value,
                'label' => $factoid_label,
            );
        }
    }
}

if ( is_array( $get_video_hero_field( 'hero_cta_buttons' ) ) ) {
    foreach ( $get_video_hero_field( 'hero_cta_buttons' ) as $button_item ) {
        $button_label = trim( (string) ( $button_item['button_label'] ?? '' ) );
        $button_url = trim( (string) ( $button_item['button_url'] ?? '' ) );
        $button_style = strtolower( trim( (string) ( $button_item['button_style'] ?? '' ) ) );

        if ( $button_label && $button_url ) {
            if ( ! in_array( $button_style, array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold', 'white', 'outline-white' ), true ) ) {
                $button_style = 'primary';
            }

            $hero_cta_buttons[] = array(
                'label' => $button_label,
                'url' => $button_url,
                'style' => $button_style,
            );
        }
    }
} elseif ( have_rows( 'hero_cta_buttons' ) ) {
    while ( have_rows( 'hero_cta_buttons' ) ) {
        the_row();
        $button_label = trim( (string) get_sub_field( 'button_label' ) );
        $button_url = trim( (string) get_sub_field( 'button_url' ) );
        $button_style = strtolower( trim( (string) get_sub_field( 'button_style' ) ) );

        if ( $button_label && $button_url ) {
            if ( ! in_array( $button_style, array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' ), true ) ) {
                $button_style = 'primary';
            }

            $hero_cta_buttons[] = array(
                'label' => $button_label,
                'url' => $button_url,
                'style' => $button_style,
            );
        }
    }
}

if ( empty( $hero_cta_buttons ) && $background_video_button_url && $background_video_button_label ) {
    $hero_cta_buttons[] = array(
        'label' => $background_video_button_label,
        'url' => $background_video_button_url,
        'style' => $background_video_button_style,
    );
}

if ( ! $hero_height ) {
    $hero_height = '70vh';
}

$resolved_vimeo_url = '';
if ( $background_video_url ) {
    if ( preg_match( '/vimeo\.com\/(?:video\/)?([0-9]+)/i', $background_video_url, $matches ) ) {
        $resolved_vimeo_url = 'https://player.vimeo.com/video/' . $matches[1];
    } elseif ( false !== stripos( $background_video_url, 'player.vimeo.com/video/' ) ) {
        $resolved_vimeo_url = $background_video_url;
    }
}

$has_vimeo_video = '' !== $resolved_vimeo_url;
if ( 'video' === $hero_media_type && ! $has_vimeo_video ) {
    $hero_media_type = 'image';
}

$vimeo_src = add_query_arg(
    array(
        'badge' => 0,
        'autopause' => 0,
        'player_id' => 0,
        'app_id' => 58479,
        'autoplay' => 1,
        'muted' => 1,
        'loop' => 1,
        'background' => 1,
        'playsinline' => 1,
        'controls' => 0,
        'title' => 0,
        'byline' => 0,
        'portrait' => 0,
    ),
    $resolved_vimeo_url ?: 'https://player.vimeo.com/video/0'
);

$section_video_hero_styles = array(
    'height:' . $hero_height,
    '--svh-overlay-fill:rgba(81, 83, 74, 0.5)',
    '--svh-title-color:' . $hero_heading_color,
    '--svh-title-max-width:' . $heading_max_width,
    '--svh-title-transform:' . $heading_text_transform,
    '--svh-title-align:' . $heading_alignment,
    '--svh-content-max-width:' . $overlay_content_max_width,
    '--svh-subheading-color:' . $hero_subheading_color,
    '--svh-subheading-font:' . $subheading_font_stack,
    '--svh-subheading-weight:' . $subheading_font_weight,
    '--svh-eyebrow-color:' . $eyebrow_color,
    '--svh-eyebrow-font:' . $eyebrow_font_stack,
    '--svh-eyebrow-weight:' . $eyebrow_font_weight,
    '--svh-eyebrow-size:' . $eyebrow_font_size,
    '--svh-eyebrow-transform:' . $eyebrow_text_transform,
    '--svh-eyebrow-bg:' . $eyebrow_background_color,
    '--svh-eyebrow-border:' . $eyebrow_border,
    '--svh-eyebrow-padding:' . $eyebrow_padding,
    '--svh-eyebrow-radius:' . $eyebrow_border_radius,
    '--svh-cta-font-size:' . $cta_text_size,
    '--svh-cta-padding:' . $cta_padding,
    '--svh-cta-letter-spacing:' . $cta_letter_spacing,
    '--svh-factoid-value-font:' . $factoid_value_font_stack,
    '--svh-factoid-value-weight:' . $factoid_value_font_weight,
    '--svh-factoid-value-color:' . $factoid_value_color,
    '--svh-factoid-label-font:' . $factoid_label_font_stack,
    '--svh-factoid-label-weight:' . $factoid_label_font_weight,
    '--svh-factoid-label-color:' . $factoid_label_color
);

if ( $hero_background_image_url ) {
    $section_video_hero_styles[] = '--svh-media-image:url(' . esc_url_raw( $hero_background_image_url ) . ')';
}

$section_video_hero_classes = array( 'section-video-hero', 'section-video-hero--' . $hero_media_type );
if ( 'freight-big-pro' === $subheading_font_family ) {
    $section_video_hero_classes[] = 'section-video-hero--heading-freight';
}
?>

<style>
.section-video-hero {
    position: relative;
    height: auto;
    min-height: 320px;
    overflow: hidden;
    background: var(--lacc-color-ink);
}

.section-video-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    z-index: 1;
    background: var(--svh-overlay-fill, rgba(81, 83, 74, 0.5));
    mix-blend-mode: multiply;
}

.section-video-hero::after {
    content: none;
}

.section-video-hero .vid-container-overflow,
.section-video-hero .video-container,
.section-video-hero .background-video-vimeo-wrapper,
.section-video-hero .video-hero-text-background-overlay {
    height: 100%;
}

.section-video-hero .vid-container-overflow {
    position: absolute;
    inset: 0;
    z-index: 0;
    overflow: hidden;
}

.section-video-hero__media--image {
    position: absolute;
    inset: 0;
    background-image: var(--svh-media-image);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.section-video-hero .video-container {
    position: absolute;
    inset: 0;
    padding: 0 !important;
    height: 100% !important;
    overflow: hidden;
}

.section-video-hero.section-video-hero--video-stalled .video-container {
    opacity: 0;
    pointer-events: none;
}

.section-video-hero .background-video-vimeo-wrapper {
    position: absolute !important;
    inset: 0;
    width: 100% !important;
    height: 100% !important;
    padding: 0 !important;
    overflow: hidden;
}

.section-video-hero .background-video-vimeo {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100vw;
    height: 56.25vw;
    min-width: 100%;
    min-height: 100%;
    max-width: none;
    border: 0;
    display: block;
    transform: translate(-50%, -50%);
}

@media only screen and (max-aspect-ratio: 16/9) {
    .section-video-hero .background-video-vimeo {
        width: 177.78vh;
        height: 100vh;
    }
}

.section-video-hero .video-hero-text-background-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100% !important;
    max-width: none !important;
    min-height: auto;
    height: auto !important;
    padding: 110px 24px 70px;
    box-sizing: border-box;
    background: none;
    text-align: center;
}

.section-video-hero .video-hero-text-container {
    position: relative;
    z-index: 3;
    top: auto;
    left: auto;
    width: 100% !important;
    max-width: 1120px !important;
    padding-top: 0;
    margin: 0 auto;
    transform: none;
    -webkit-transform: none;
}

.section-video-hero .hero-slider-content {
    width: 100%;
    max-width: var(--svh-content-max-width, 980px);
    margin: 0 auto;
}

.section-video-hero .hero-slider-title {
    width: 100%;
    max-width: var(--svh-title-max-width, 100%);
    color: var(--svh-title-color, var(--lacc-color-cream));
    font-family: var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: clamp(48px, 5.6vw, 82px);
    font-weight: 400;
    line-height: 1.04;
    letter-spacing: -.015em;
    margin: 0 auto 20px;
    text-align: var(--svh-title-align, center);
    text-transform: var(--svh-title-transform, uppercase);
}

.section-video-hero .hero-slider-subheading {
    margin: 0 auto 28px;
    max-width: var(--svh-content-max-width, 980px);
    text-align: center;
}

.section-video-hero .hero-slider-subheading,
.section-video-hero .hero-slider-subheading p,
.section-video-hero .hero-slider-subheading li {
    color: var(--svh-subheading-color, rgba(246,243,237,0.82));
    font-family: var(--svh-subheading-font, var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)) !important;
    font-size: clamp(20px, 2.4vw, 34px);
    font-weight: var(--svh-subheading-weight, 500) !important;
    line-height: 1.35;
    text-align: center;
}

.section-video-hero .hero-slider-subheading p:last-child {
    margin-bottom: 0;
}

.section-video-hero .hero-slider-subheading em,
.section-video-hero .hero-slider-subheading i {
    font-style: italic !important;
}

.section-video-hero .hero-slider-subheading strong,
.section-video-hero .hero-slider-subheading b {
    font-weight: 700 !important;
}

.section-video-hero .hero-factoids {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 14px 20px;
    margin: 22px auto 26px;
    max-width: var(--svh-content-max-width, 980px);
}

.section-video-hero .hero-factoid {
    min-width: 108px;
    padding: 0 6px;
}

.section-video-hero .hero-factoid__value {
    display: block;
    margin-bottom: 2px;
    color: var(--svh-factoid-value-color, var(--lacc-color-gold-soft));
    font-family: var(--svh-factoid-value-font, var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)) !important;
    font-size: clamp(34px, 3.7vw, 52px);
    font-weight: var(--svh-factoid-value-weight, 500) !important;
    font-style: italic;
    letter-spacing: .01em;
    line-height: 1;
    text-transform: none;
}

.section-video-hero .hero-factoid__label {
    display: block;
    color: var(--svh-factoid-label-color, rgba(246,243,237,0.78));
    font-family: var(--svh-factoid-label-font, var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)) !important;
    font-weight: var(--svh-factoid-label-weight, 600) !important;
    letter-spacing: .16em;
    font-size: 16px;
    line-height: 1.15;
    text-transform: uppercase;
    margin-top: 4px;
}

.section-video-hero .hero-button-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 18px 24px;
    margin-top: 6px;
}

.section-video-hero .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 0;
    min-height: 0;
    width: auto;
    padding: var(--svh-cta-padding, .85em 1.45em);
    border: 1px solid transparent;
    border-radius: 0;
    letter-spacing: var(--svh-cta-letter-spacing, .04em);
    font-size: var(--svh-cta-font-size, 16px);
    font-weight: 700;
    line-height: 1.2;
    text-transform: uppercase;
    text-decoration: none;
    box-shadow: none;
    transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease;
}

.section-video-hero__closure-notice {
    margin-top: 25px;
    margin-bottom: 12px;
    max-width: 600px;
    padding: 15px 20px;
    background: #1a1a1a9e;
    opacity: .9;
    text-align: left;
}

.section-video-hero .hero-button:focus-visible {
    outline: 2px solid var(--lacc-color-action-primary, #3f5f85);
    outline-offset: 2px;
}

.section-video-hero .hero-button--primary {
    background: var(--lacc-color-action-primary, #3f5f85);
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: var(--lacc-color-action-on-primary, #ffffff);
}

.section-video-hero .hero-button--secondary {
    background: var(--lacc-color-accent-old-gold, #7a5a1f);
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: var(--lacc-color-text-inverse, #ffffff);
}

.section-video-hero .hero-button--outline {
    background: transparent;
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: var(--lacc-color-action-primary, #3f5f85);
}

.section-video-hero .hero-button--gold-text,
.section-video-hero .hero-button--brown {
    background: transparent;
    border-color: #7c5542;
    color: #7c5542;
}

.section-video-hero .hero-button--outline-gold {
    background: transparent;
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: var(--lacc-color-accent-old-gold, #7a5a1f);
}

.section-video-hero .hero-button--ink {
    background: var(--lacc-color-ink, #51534a);
    border-color: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-text-inverse, #ffffff);
}

.section-video-hero .hero-button--outline-ink,
.section-video-hero .hero-button--outline-dark {
    background: transparent;
    border-color: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-ink, #51534a);
}

.section-video-hero .hero-button--light {
    background: var(--lacc-color-cream, #f6f3ed);
    border-color: #ddd4c8;
    color: var(--lacc-color-ink, #51534a);
}

.section-video-hero .hero-button--outline-white {
    background: transparent;
    border-color: rgba(255,255,255,0.75);
    color: var(--lacc-color-white, #ffffff);
}

.section-video-hero .hero-button--outline-white:hover,
.section-video-hero .hero-button--outline-white:focus {
    background: rgba(255,255,255,0.12);
    border-color: #ffffff;
    color: #ffffff;
}

.section-video-hero .hero-button--white {
    background: var(--lacc-color-white, #ffffff);
    border-color: var(--lacc-color-white, #ffffff);
    color: var(--lacc-color-ink, #51534a);
}

.section-video-hero .hero-button--white:hover,
.section-video-hero .hero-button--white:focus {
    background: #f0f0f0;
    border-color: #f0f0f0;
    color: var(--lacc-color-ink-deep, #1f221d);
}

.section-video-hero .hero-button--primary:hover,
.section-video-hero .hero-button--primary:focus {
    background: var(--lacc-color-action-primary-hover, #324c6a);
    border-color: var(--lacc-color-action-primary-hover, #324c6a);
    color: var(--lacc-color-action-on-primary, #ffffff);
}

.section-video-hero .hero-button--secondary:hover,
.section-video-hero .hero-button--secondary:focus {
    background: var(--lacc-color-accent-old-gold-hover, #624818);
    border-color: var(--lacc-color-accent-old-gold-hover, #624818);
    color: var(--lacc-color-text-inverse, #ffffff);
}

.section-video-hero .hero-button--outline-gold:hover,
.section-video-hero .hero-button--outline-gold:focus {
    background: var(--lacc-color-accent-old-gold, #7a5a1f);
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: var(--lacc-color-text-inverse, #ffffff);
}

.section-video-hero .hero-button--outline:hover,
.section-video-hero .hero-button--outline:focus {
    background: var(--lacc-color-action-primary, #3f5f85);
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: var(--lacc-color-action-on-primary, #ffffff);
}

.section-video-hero .hero-button--gold-text:hover,
.section-video-hero .hero-button--gold-text:focus,
.section-video-hero .hero-button--brown:hover,
.section-video-hero .hero-button--brown:focus {
    background: #7c5542;
    border-color: #7c5542;
    color: var(--lacc-color-text-inverse, #ffffff);
}

.section-video-hero .hero-button--ink:hover,
.section-video-hero .hero-button--ink:focus {
    background: var(--lacc-color-ink-deep, #1f221d);
    border-color: var(--lacc-color-ink-deep, #1f221d);
    color: var(--lacc-color-text-inverse, #ffffff);
}

.section-video-hero .hero-button--outline-ink:hover,
.section-video-hero .hero-button--outline-ink:focus {
    background: rgba(81,83,74,.08);
    border-color: var(--lacc-color-ink, #51534a);
    color: #3b3d37;
}

.section-video-hero .hero-button--outline-dark:hover,
.section-video-hero .hero-button--outline-dark:focus {
    background: var(--lacc-color-ink, #51534a);
    border-color: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-text-inverse, #ffffff);
}

.section-video-hero .hero-button--light:hover,
.section-video-hero .hero-button--light:focus {
    background: #ebe2d5;
    border-color: #ddd4c8;
    color: var(--lacc-color-ink, #51534a);
}

.section-video-hero .background-video-toggle {
    position: relative;
    z-index: 3;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 0;
    min-height: 0;
    width: auto;
    padding: .85em 1.45em;
    margin: 28px auto 0;
    border: 1px solid rgba(255,255,255,0.75);
    border-radius: 0;
    background: transparent;
    cursor: pointer;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .08em;
    line-height: 1.1;
    text-transform: uppercase;
    color: var(--lacc-color-white, #ffffff);
    transition: background-color .2s ease, border-color .2s ease, color .2s ease;
}

.section-video-hero .background-video-toggle:hover,
.section-video-hero .background-video-toggle:focus {
    background: rgba(255,255,255,0.12);
    border-color: #ffffff;
    color: #ffffff;
}

.section-video-hero .background-video-toggle:focus-visible {
    outline: 2px solid #ffffff;
    outline-offset: 2px;
}

.section-video-hero .background-video-toggle__label {
    display: inline-block;
}

.section-video-hero.section-video-hero--video-stalled .background-video-toggle {
    display: none;
}

.section-video-hero__eyebrow {
    display: inline-block;
    margin-bottom: 28px;
    padding: var(--svh-eyebrow-padding, 8px 16px);
    border: var(--svh-eyebrow-border, 1px solid rgba(201,151,58,0.35));
    border-radius: var(--svh-eyebrow-radius, 3px);
    letter-spacing: .12em;
    font-size: var(--svh-eyebrow-size, 12px);
    line-height: 1.2;
    font-family: var(--svh-eyebrow-font, inherit);
    font-weight: var(--svh-eyebrow-weight, 700);
    text-transform: var(--svh-eyebrow-transform, uppercase);
    color: var(--svh-eyebrow-color, var(--lacc-color-gold-soft));
    background: var(--svh-eyebrow-bg, transparent);
}

@media only screen and (max-width: 767px) {
    .section-video-hero .video-hero-text-background-overlay {
        align-items: center;
        justify-content: center;
        width: 100% !important;
        max-width: none !important;
        height: 100% !important;
        padding: 72px 18px 72px;
    }

    .section-video-hero .video-hero-text-container,
    .section-video-hero .hero-slider-content {
        width: 100%;
        max-width: 680px;
    }

    .section-video-hero .video-hero-text-container {
        margin-bottom: 60px;
    }

    .section-video-hero .hero-slider-title {
        font-size: 36px !important;
        line-height: 1.05 !important;
        margin-bottom: 14px;
    }

    .section-video-hero .hero-slider-subheading {
        font-size: 24px !important;
        line-height: 1.3 !important;
        margin-bottom: 22px;
    }

    .section-video-hero .hero-factoids {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 14px 0;
        margin: 22px auto 24px;
        max-width: 360px;
    }

    .section-video-hero .hero-factoid {
        width: 50%;
        min-width: 0;
        padding: 0 8px;
    }

    .section-video-hero .hero-factoid__value {
        font-size: 28px;
    }
}
<?php if ( ! is_admin() ) : ?>
.section-video-hero--heading-freight .hero-slider-subheading,
.section-video-hero--heading-freight .hero-slider-subheading p,
.section-video-hero--heading-freight .hero-slider-subheading li {
    font-style: italic;
}
<?php endif; ?>
</style>

<div id="<?php echo esc_attr( $section_video_hero_id ); ?>" class="<?php echo esc_attr( implode( ' ', $section_video_hero_classes ) ); ?>" style="<?php echo esc_attr( implode( ';', $section_video_hero_styles ) ); ?>;">
    <div class="vid-container-overflow">
        <?php if ( 'image' === $hero_media_type ) : ?>
            <div class="section-video-hero__media--image" aria-hidden="true"></div>
        <?php elseif ( $has_vimeo_video ) : ?>
        <div class="video-container">
            <div class="background-video-vimeo-wrapper">
                <iframe
                    class="background-video-vimeo"
                    src="<?php echo esc_url( $vimeo_src ); ?>"
                    frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    title="Background Video Hero"
                ></iframe>
            </div>
            <script src="<?php echo esc_url( $background_video_library_url ?: 'https://player.vimeo.com/api/player.js' ); ?>"></script>
        </div>
        <?php endif; ?>
    </div>

    <div class="video-hero-text-background-overlay">
        <div class="video-hero-text-container">
            <div class="hero-slider-content">
                <?php if ( $section_eyebrow ) : ?>
                    <span class="section-video-hero__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                <?php endif; ?>
                <?php if ( $background_video_h1 ) : ?>
                    <h1 class="hero-slider-title" data-animation="animated"><?php echo wp_kses( $background_video_h1, array( 'b' => array(), 'strong' => array(), 'i' => array(), 'em' => array(), 'br' => array(), 'span' => array( 'class' => array() ) ) ); ?></h1>
                <?php endif; ?>
                <?php if ( $background_video_h2 ) : ?>
                    <div class="hero-slider-subheading" data-animation="animated"><?php echo function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $background_video_h2 ) : $background_video_h2; ?></div>
                <?php endif; ?>
                <?php if ( $background_video_closure_notice_show && $background_video_closure_notice ) : ?>
                    <div class="closure-notice-container section-video-hero__closure-notice">
                        <?php echo function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $background_video_closure_notice ) : $background_video_closure_notice; ?>
                    </div>
                <?php endif; ?>

                <?php if ( ! empty( $hero_factoids ) ) : ?>
                    <div class="hero-factoids">
                        <?php foreach ( $hero_factoids as $factoid ) : ?>
                            <div class="hero-factoid">
                                <?php if ( '' !== $factoid['value'] ) : ?>
                                    <span class="hero-factoid__value"><?php echo esc_html( $factoid['value'] ); ?></span>
                                <?php endif; ?>
                                <?php if ( '' !== $factoid['label'] ) : ?>
                                    <span class="hero-factoid__label"><?php echo esc_html( $factoid['label'] ); ?></span>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if ( ! empty( $hero_cta_buttons ) ) : ?>
                    <div class="hero-button-group">
                        <?php foreach ( $hero_cta_buttons as $button ) : ?>
                            <a class="hero-button hero-button--<?php echo esc_attr( $button['style'] ); ?>" href="<?php echo esc_url( $button['url'] ); ?>" tabindex="0"><?php echo esc_html( $button['label'] ); ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if ( 'video' === $hero_media_type ) : ?>
                    <button
                        class="background-video-toggle is-playing"
                        aria-label="Pause background video"
                        title="Pause background video"
                        type="button"
                    >
                        <span class="background-video-toggle__icon background-video-toggle__icon--play" aria-hidden="true"></span>
                        <span class="background-video-toggle__icon background-video-toggle__icon--pause" aria-hidden="true"></span>
                        <span class="background-video-toggle__label">Pause</span>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php if ( 'video' === $hero_media_type ) : ?>
<script>
(function() {
    var section = document.getElementById('<?php echo esc_js( $section_video_hero_id ); ?>');
    var vimeoIframe = section ? section.querySelector('.background-video-vimeo') : null;
    var button = section ? section.querySelector('.background-video-toggle') : null;

    if (!vimeoIframe || !window.Vimeo || vimeoIframe.src.indexOf('vimeo.com') === -1) {
        return;
    }

    try {
        var vimeoPlayer = new Vimeo.Player(vimeoIframe);
        var playStateResolved = false;
        var stallTimer = null;

        function setVideoStalled() {
            if (!section || playStateResolved) {
                return;
            }
            section.classList.add('section-video-hero--video-stalled');
            updateButton('paused');
        }

        function clearVideoStalled() {
            playStateResolved = true;
            if (stallTimer) {
                window.clearTimeout(stallTimer);
                stallTimer = null;
            }
            if (section) {
                section.classList.remove('section-video-hero--video-stalled');
            }
        }

        stallTimer = window.setTimeout(function() {
            vimeoPlayer.getPaused().then(function(paused) {
                if (paused) {
                    setVideoStalled();
                } else {
                    clearVideoStalled();
                }
            }).catch(function() {
                setVideoStalled();
            });
        }, 3200);

        vimeoPlayer.setVolume(0).then(function() {
            return vimeoPlayer.play();
        }).then(function() {
            clearVideoStalled();
        }).catch(function() {
            setVideoStalled();
        });

        function updateButton(state) {
            if (!button) {
                return;
            }
            var playing = state === 'playing';
            button.classList.toggle('is-playing', playing);
            button.classList.toggle('is-paused', !playing);
            var labelNode = button.querySelector('.background-video-toggle__label');
            if (labelNode) {
                labelNode.textContent = playing ? 'Pause' : 'Play';
            }
            var label = playing ? 'Pause background video' : 'Play background video';
            button.setAttribute('aria-label', label);
            button.setAttribute('title', label);
        }

        if (button) {
            vimeoPlayer.getPaused().then(function(paused) {
                updateButton(paused ? 'paused' : 'playing');
                if (!paused) {
                    clearVideoStalled();
                }
            }).catch(function() {
                setVideoStalled();
            });
            vimeoPlayer.on('play', function() {
                clearVideoStalled();
                updateButton('playing');
            });
            vimeoPlayer.on('pause', function() {
                updateButton('paused');
            });
            button.addEventListener('click', function() {
                vimeoPlayer.getPaused().then(function(paused) {
                    if (paused) {
                        vimeoPlayer.play().then(function() {
                            clearVideoStalled();
                        }).catch(function() {
                            setVideoStalled();
                        });
                    } else {
                        vimeoPlayer.pause();
                    }
                }).catch(function() {
                    setVideoStalled();
                });
            });
        }
    } catch (e) {
        setVideoStalled();
        console.warn('Vimeo player init failed:', e);
    }
})();
</script>
<?php endif; ?>
