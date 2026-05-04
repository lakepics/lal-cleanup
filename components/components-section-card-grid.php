<?php
$section_card_grid_override = isset( $section_card_grid_override ) && is_array( $section_card_grid_override ) ? $section_card_grid_override : get_query_var( 'lacc_card_grid_test_data', array() );
$section_card_grid_override = is_array( $section_card_grid_override ) ? $section_card_grid_override : array();
$get_card_grid_field = static function ( $key ) use ( $section_card_grid_override ) {
    if ( array_key_exists( $key, $section_card_grid_override ) ) {
        return $section_card_grid_override[ $key ];
    }

    return get_sub_field( $key );
};

$section_eyebrow = $get_card_grid_field( 'section_eyebrow' );
$section_heading = $get_card_grid_field( 'section_heading' );
$section_intro = $get_card_grid_field( 'section_intro' );
$section_anchor_id = strtolower( trim( (string) $get_card_grid_field( 'section_anchor_id' ) ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$content_alignment = $get_card_grid_field( 'content_alignment' ) ?: 'left';
$header_column_width = trim( (string) $get_card_grid_field( 'header_column_width' ) );
$container_type = $get_card_grid_field( 'container_type' ) ?: 'container';
$background_color = $get_card_grid_field( 'background_color' );
$background_image = $get_card_grid_field( 'background_image' );
$background_gradient = trim( (string) $get_card_grid_field( 'background_gradient' ) );
$background_vertical_position = trim( (string) $get_card_grid_field( 'background_vertical_position' ) );
$background_parallax = $get_card_grid_field( 'background_parallax' );
$use_scrollwork = $get_card_grid_field( 'use_scrollwork' );
$scrollwork_side = $get_card_grid_field( 'scrollwork_side' ) ?: 'left';
$scrollwork_color = trim( (string) $get_card_grid_field( 'scrollwork_color' ) );
$section_classes = trim( (string) $get_card_grid_field( 'section_classes' ) );
$padding_top = trim( (string) $get_card_grid_field( 'padding_top' ) );
$padding_bottom = trim( (string) $get_card_grid_field( 'padding_bottom' ) );
$section_keyline_position = strtolower( trim( (string) $get_card_grid_field( 'section_keyline_position' ) ) );
$section_keyline_color = trim( (string) $get_card_grid_field( 'section_keyline_color' ) );
$section_intro_max_width = trim( (string) $get_card_grid_field( 'section_intro_max_width' ) );
$section_intro_spacing_bottom = trim( (string) $get_card_grid_field( 'section_intro_spacing_bottom' ) );
$heading_max_width = trim( (string) $get_card_grid_field( 'heading_max_width' ) );
$card_padding = trim( (string) $get_card_grid_field( 'card_padding' ) );
$card_padding_top = trim( (string) $get_card_grid_field( 'card_padding_top' ) );
$card_padding_bottom = trim( (string) $get_card_grid_field( 'card_padding_bottom' ) );
$card_gutter = trim( (string) $get_card_grid_field( 'card_gutter' ) );
$card_column_gap = trim( (string) $get_card_grid_field( 'card_column_gap' ) );
$card_row_gap = trim( (string) $get_card_grid_field( 'card_row_gap' ) );
$card_render_width = trim( (string) $get_card_grid_field( 'card_render_width' ) );
$card_background_gradient = trim( (string) $get_card_grid_field( 'card_background_gradient' ) );
$card_border_color = trim( (string) $get_card_grid_field( 'card_border_color' ) );
$card_badge_variant = strtolower( trim( (string) $get_card_grid_field( 'card_badge_variant' ) ) );
$card_badge_alignment = strtolower( trim( (string) $get_card_grid_field( 'card_badge_alignment' ) ) );
$card_visual_system = strtolower( trim( (string) $get_card_grid_field( 'card_visual_system' ) ) );
$card_badge_type_color = trim( (string) $get_card_grid_field( 'card_badge_type_color' ) );
$card_badge_fill_color = trim( (string) $get_card_grid_field( 'card_badge_fill_color' ) );
$card_badge_border_color = trim( (string) $get_card_grid_field( 'card_badge_border_color' ) );
$card_badge_border_width = trim( (string) $get_card_grid_field( 'card_badge_border_width' ) );
$card_badge_border_radius = trim( (string) $get_card_grid_field( 'card_badge_border_radius' ) );
$equalize_card_bottoms = $get_card_grid_field( 'equalize_card_bottoms' );
$enable_card_hover_effect = $get_card_grid_field( 'enable_card_hover_effect' );
$is_full_width = $get_card_grid_field( 'is_full_width' );
$card_button_spacing = trim( (string) $get_card_grid_field( 'card_button_spacing' ) );
$card_button_alignment = strtolower( trim( (string) $get_card_grid_field( 'card_button_alignment' ) ) );
$section_heading_color = trim( (string) $get_card_grid_field( 'section_heading_color' ) );
$card_heading_font_size = trim( (string) $get_card_grid_field( 'card_heading_font_size' ) );
$card_heading_color = trim( (string) $get_card_grid_field( 'card_heading_color' ) );
$section_button_label = trim( (string) $get_card_grid_field( 'section_button_label' ) );
$section_button_url_field = $get_card_grid_field( 'section_button_url' );
$section_button_url = is_array( $section_button_url_field ) ? trim( (string) ( $section_button_url_field['url'] ?? '' ) ) : trim( (string) $section_button_url_field );
$section_button_style = strtolower( str_replace( '_', '-', trim( (string) $get_card_grid_field( 'section_button_style' ) ) ) );
$section_button_alignment = strtolower( trim( (string) $get_card_grid_field( 'section_button_alignment' ) ) );
$section_bottom_button_label = trim( (string) $get_card_grid_field( 'section_bottom_button_label' ) );
$section_bottom_button_url_field = $get_card_grid_field( 'section_bottom_button_url' );
$section_bottom_button_url = is_array( $section_bottom_button_url_field ) ? trim( (string) ( $section_bottom_button_url_field['url'] ?? '' ) ) : trim( (string) $section_bottom_button_url_field );
$section_bottom_button_style = strtolower( str_replace( '_', '-', trim( (string) $get_card_grid_field( 'section_bottom_button_style' ) ) ) );
$section_bottom_button_alignment = strtolower( trim( (string) $get_card_grid_field( 'section_bottom_button_alignment' ) ) );
$button_size = strtolower( trim( (string) $get_card_grid_field( 'button_size' ) ) );
$cta_text_size = trim( (string) $get_card_grid_field( 'cta_text_size' ) );
$cta_padding = trim( (string) $get_card_grid_field( 'cta_padding' ) );
$cta_letter_spacing = trim( (string) $get_card_grid_field( 'cta_letter_spacing' ) );
$post_grid_content = $get_card_grid_field( 'post_grid_content' );
$post_content_max_width = trim( (string) $get_card_grid_field( 'post_content_max_width' ) );
$cards_data = $get_card_grid_field( 'cards' );
$has_card_badges = false;
if ( is_array( $cards_data ) ) {
    foreach ( $cards_data as $card_item ) {
        if ( ! empty( $card_item['card_badge'] ) ) {
            $has_card_badges = true;
            break;
        }
    }
}
$header_background_color = trim( (string) $get_card_grid_field( 'header_background_color' ) );
$header_width = trim( (string) $get_card_grid_field( 'header_width' ) );
$header_max_width = trim( (string) $get_card_grid_field( 'header_max_width' ) );
$header_padding_top = trim( (string) $get_card_grid_field( 'header_padding_top' ) );
$header_padding_right = trim( (string) $get_card_grid_field( 'header_padding_right' ) );
$header_padding_bottom = trim( (string) $get_card_grid_field( 'header_padding_bottom' ) );
$header_padding_left = trim( (string) $get_card_grid_field( 'header_padding_left' ) );
$heading_font_family = strtolower( trim( (string) $get_card_grid_field( 'heading_font_family' ) ) );
$heading_font_weight = trim( (string) $get_card_grid_field( 'heading_font_weight' ) );
$heading_size = strtolower( trim( (string) $get_card_grid_field( 'heading_size' ) ) );
$heading_text_transform = strtolower( trim( (string) $get_card_grid_field( 'heading_text_transform' ) ) );
$subheading_font_family = strtolower( trim( (string) $get_card_grid_field( 'subheading_font_family' ) ) );
$subheading_font_weight = trim( (string) $get_card_grid_field( 'subheading_font_weight' ) );
$card_heading_font_family = strtolower( trim( (string) $get_card_grid_field( 'card_heading_font_family' ) ) );
$card_heading_font_weight = trim( (string) $get_card_grid_field( 'card_heading_font_weight' ) );
$eyebrow_color = trim( (string) $get_card_grid_field( 'eyebrow_color' ) );
$eyebrow_font_family = strtolower( trim( (string) $get_card_grid_field( 'eyebrow_font_family' ) ) );
$eyebrow_font_weight = trim( (string) $get_card_grid_field( 'eyebrow_font_weight' ) );
$eyebrow_font_size = trim( (string) $get_card_grid_field( 'eyebrow_font_size' ) );
$eyebrow_text_transform = strtolower( trim( (string) $get_card_grid_field( 'eyebrow_text_transform' ) ) );
$eyebrow_background_color = trim( (string) $get_card_grid_field( 'eyebrow_background_color' ) );
$eyebrow_border = trim( (string) $get_card_grid_field( 'eyebrow_border' ) );
$eyebrow_padding = trim( (string) $get_card_grid_field( 'eyebrow_padding' ) );
$eyebrow_border_radius = trim( (string) $get_card_grid_field( 'eyebrow_border_radius' ) );
$eyebrow_preset = strtolower( trim( (string) $get_card_grid_field( 'eyebrow_preset' ) ) );

if ( ! in_array( $heading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $heading_font_family = 'haarlem';
}

if ( ! in_array( $heading_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $heading_font_weight = 'freight-big-pro' === $heading_font_family ? '400' : '600';
}

if ( ! in_array( $heading_size, array( 'default', 'xxl' ), true ) ) {
    $heading_size = 'default';
}

if ( ! in_array( $heading_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $heading_text_transform = 'uppercase';
}

if ( ! in_array( $subheading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $subheading_font_family = $heading_font_family;
}

if ( ! in_array( $subheading_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $subheading_font_weight = 'freight-big-pro' === $subheading_font_family ? '400' : $heading_font_weight;
}

if ( ! in_array( $card_heading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $card_heading_font_family = $heading_font_family;
}

if ( ! in_array( $card_heading_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $card_heading_font_weight = 'freight-big-pro' === $card_heading_font_family ? '400' : $heading_font_weight;
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

if ( ! in_array( $header_column_width, array( '4', '5', '6', '7', '8', '9', '10', '11', '12' ), true ) ) {
    $header_column_width = '12';
}

if ( ! in_array( $card_badge_variant, array( 'pill', 'featured', 'flag' ), true ) ) {
    $card_badge_variant = 'pill';
}

if ( ! in_array( $card_badge_alignment, array( 'left', 'center', 'right' ), true ) ) {
    $card_badge_alignment = 'center';
}

if ( ! in_array( $card_visual_system, array( 'generic', 'locked-density' ), true ) ) {
    $card_visual_system = 'locked-density';
}

$heading_font_stack = 'freight-big-pro' === $heading_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)';
$subheading_font_stack = 'freight-big-pro' === $subheading_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)';
$card_heading_font_stack = 'freight-big-pro' === $card_heading_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)';
$eyebrow_font_stack = 'freight-big-pro' === $eyebrow_font_family
    ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
    : ( 'haarlem' === $eyebrow_font_family ? 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)' : 'inherit' );
$heading_letter_spacing = 'freight-big-pro' === $heading_font_family ? '.03em' : '0.1275rem';
$subheading_letter_spacing = 'freight-big-pro' === $subheading_font_family ? '.03em' : '0.1275rem';
$card_heading_letter_spacing = 'freight-big-pro' === $card_heading_font_family ? '.03em' : '0.1275rem';

if ( is_page( 'flex' ) && 'freight-big-pro' === $heading_font_family ) {
    $heading_font_weight = '400';
}

if ( is_page( 'flex' ) && 'freight-big-pro' === $card_heading_font_family ) {
    $card_heading_font_weight = '400';
}

if ( is_page( 'flex' ) && 'freight-big-pro' === $subheading_font_family ) {
    $subheading_font_weight = '400';
}

$default_surface_gradient = function_exists( 'lacc_get_default_surface_gradient' ) ? lacc_get_default_surface_gradient() : 'linear-gradient(180deg, rgba(246,243,237,0.92) 0%, rgba(255,255,255,0.92) 100%)';
$section_intro_max_width = $section_intro_max_width ?: '100%';
$heading_max_width = $heading_max_width ?: '100%';
$heading_size_value = 'xxl' === $heading_size ? 'clamp(36px, 4.8vw, 68px)' : 'clamp(40px, 4.8vw, 58px)';
$heading_line_height_value = 'xxl' === $heading_size ? '.98' : '1.05';
$eyebrow_color = $eyebrow_color ?: '#b58a2d';
$eyebrow_background_color = $eyebrow_background_color ?: 'rgba(246,243,237,0.92)';
$eyebrow_border = $eyebrow_border ?: '1px solid rgba(181,138,45,0.32)';
$eyebrow_padding = $eyebrow_padding ?: '0.42em 1.17em';
$eyebrow_font_size = $eyebrow_font_size ?: '12px';
$eyebrow_border_radius = $eyebrow_border_radius ?: '999px';

$eyebrow_preset_map = array(
    'pill'  => array(
        'font_family' => 'haarlem',
        'font_weight' => '600',
        'font_size'   => '12px',
        'transform'   => 'uppercase',
        'color'       => '#946E29',
        'bg'          => 'transparent',
        'border'      => '1px solid rgba(181,138,45,0.32)',
        'padding'     => '0.42em 1.17em',
        'radius'      => '999px',
    ),
    'plain' => array(
        'font_family' => 'haarlem',
        'font_weight' => '600',
        'font_size'   => '12px',
        'transform'   => 'uppercase',
        'color'       => '#946E29',
        'bg'          => 'transparent',
        'border'      => 'none',
        'padding'     => '0',
        'radius'      => '0',
    ),
    'ink'   => array(
        'font_family' => 'haarlem',
        'font_weight' => '600',
        'font_size'   => '12px',
        'transform'   => 'uppercase',
        'color'       => '#f6f3ed',
        'bg'          => '#51534a',
        'border'      => 'none',
        'padding'     => '0.42em 1.17em',
        'radius'      => '999px',
    ),
);
if ( isset( $eyebrow_preset_map[ $eyebrow_preset ] ) ) {
    $p                        = $eyebrow_preset_map[ $eyebrow_preset ];
    $eyebrow_font_family      = $p['font_family'];
    $eyebrow_font_weight      = $p['font_weight'];
    $eyebrow_font_size        = $p['font_size'];
    $eyebrow_text_transform   = $p['transform'];
    $eyebrow_color            = $p['color'];
    $eyebrow_background_color = $p['bg'];
    $eyebrow_border           = $p['border'];
    $eyebrow_padding          = $p['padding'];
    $eyebrow_border_radius    = $p['radius'];
    $eyebrow_font_stack       = 'haarlem' === $eyebrow_font_family
        ? 'var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)'
        : ( 'freight-big-pro' === $eyebrow_font_family
            ? 'var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif)'
            : 'inherit' );
}
$section_intro_spacing_bottom = $section_intro_spacing_bottom ?: '40px';
$card_padding = $card_padding ?: '24px';
$card_padding_top = $card_padding_top ?: $card_padding;
$card_padding_bottom = $card_padding_bottom ?: $card_padding;
$card_gutter = $card_gutter ?: '30px';
$card_column_gap = $card_column_gap ?: $card_gutter;
$card_row_gap = $card_row_gap ?: $card_gutter;
$card_background_gradient = $card_background_gradient ?: $default_surface_gradient;
$card_border_color = $card_border_color ?: '';
$card_border = $card_border_color ? '1px solid ' . $card_border_color : '0';
$card_badge_type_color = $card_badge_type_color ?: '';
$card_badge_fill_color = $card_badge_fill_color ?: '';
$card_badge_border_color = $card_badge_border_color ?: 'transparent';
$card_badge_border_width = $card_badge_border_width ?: '0';
$card_badge_border_radius = $card_badge_border_radius ?: ( 'pill' === $card_badge_variant ? '999px' : ( 'featured' === $card_badge_variant ? '0' : '0' ) );
$card_button_spacing = $card_button_spacing ?: '24px';
$card_button_alignment = in_array( $card_button_alignment, array( 'left', 'center', 'right' ), true ) ? $card_button_alignment : 'left';
$card_button_justify = 'center' === $card_button_alignment ? 'center' : ( 'right' === $card_button_alignment ? 'flex-end' : 'flex-start' );
$card_badge_justify = 'center' === $card_badge_alignment ? 'center' : ( 'right' === $card_badge_alignment ? 'flex-end' : 'flex-start' );
$enable_card_hover_effect = ( null === $enable_card_hover_effect || '' === $enable_card_hover_effect ) ? 1 : $enable_card_hover_effect;
$section_heading_color = $section_heading_color ?: 'var(--lacc-color-ink)';
$card_heading_font_size = $card_heading_font_size ?: 'inherit';
$card_heading_color = $card_heading_color ?: $section_heading_color;
$section_keyline_position = in_array( $section_keyline_position, array( 'top', 'bottom' ), true ) ? $section_keyline_position : '';
$section_keyline_color = $section_keyline_color ?: $section_heading_color;
$scrollwork_color = $scrollwork_color ?: '#8DC5DB';
$allowed_button_sizes = array( 'large', 'normal', 'small' );
if ( ! in_array( $button_size, $allowed_button_sizes, true ) ) {
    $button_size = 'normal';
}
$button_size_map = array(
    'large' => array(
        'font_size' => '20px',
        'padding' => '1em 1.8em',
        'letter_spacing' => '.06em',
        'pricing_min_height' => '64px',
    ),
    'normal' => array(
        'font_size' => '16px',
        'padding' => '.85em 1.45em',
        'letter_spacing' => '.04em',
        'pricing_min_height' => '54px',
    ),
    'small' => array(
        'font_size' => '12px',
        'padding' => '.7em 1.2em',
        'letter_spacing' => '.08em',
        'pricing_min_height' => '46px',
    ),
);
$resolved_button_size = $button_size_map[ $button_size ];
$cta_text_size = $cta_text_size ?: $resolved_button_size['font_size'];
$cta_padding = $cta_padding ?: $resolved_button_size['padding'];
$cta_letter_spacing = $cta_letter_spacing ?: $resolved_button_size['letter_spacing'];
$post_content_max_width = $post_content_max_width ?: '100%';
$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
$allowed_card_heading_tags = array( 'h2', 'h3', 'h4', 'h5', 'h6' );
$allowed_card_style_presets = array( 'auto', 'generic', 'carousel-card', 'specials-card', 'editorial-card', 'utility-card', 'offer-card', 'prompt-card', 'pricing-tier' );
$allowed_card_label_treatments = array( 'auto', 'none', 'eyebrow', 'flag' );
$allowed_heading_html = array(
    'b' => array(),
    'strong' => array(),
    'i' => array(),
    'em' => array(),
    'br' => array(),
    'span' => array( 'class' => array() ),
);
$section_button_style = in_array( $section_button_style, $allowed_button_styles, true ) ? $section_button_style : 'primary';
$section_bottom_button_style = in_array( $section_bottom_button_style, $allowed_button_styles, true ) ? $section_bottom_button_style : 'secondary';
$background_vertical_position = $background_vertical_position ?: 'center';
$header_width = $header_width ?: '100%';
$header_max_width = $header_max_width ?: '100%';
$header_padding_top = $header_padding_top ?: '0';
$header_padding_right = $header_padding_right ?: '0';
$header_padding_bottom = $header_padding_bottom ?: '0';
$header_padding_left = $header_padding_left ?: '0';
$resolved_header_padding_bottom = $header_padding_bottom;
if ( $section_intro_spacing_bottom ) {
    $resolved_header_padding_bottom = ( '0' !== $header_padding_bottom && '' !== $header_padding_bottom )
        ? 'calc(' . $header_padding_bottom . ' + ' . $section_intro_spacing_bottom . ')'
        : $section_intro_spacing_bottom;
}
$section_button_alignment = in_array( $section_button_alignment, array( 'left', 'center', 'right' ), true ) ? $section_button_alignment : $content_alignment;
$section_bottom_button_alignment = in_array( $section_bottom_button_alignment, array( 'left', 'center', 'right' ), true ) ? $section_bottom_button_alignment : $content_alignment;
$section_intro_margin = 'center' === $content_alignment ? '0 auto' : ( 'right' === $content_alignment ? '0 0 0 auto' : '0 auto 0 0' );
$heading_margin = 'center' === $content_alignment ? '0 auto 12px' : ( 'right' === $content_alignment ? '0 0 12px auto' : '0 auto 12px 0' );
$header_margin = 'center' === $content_alignment ? '0 auto' : ( 'right' === $content_alignment ? '0 0 0 auto' : '0 auto 0 0' );
$intro_cta_justify = 'center' === $section_button_alignment ? 'center' : ( 'right' === $section_button_alignment ? 'flex-end' : 'flex-start' );
$bottom_cta_justify = 'center' === $section_bottom_button_alignment ? 'center' : ( 'right' === $section_bottom_button_alignment ? 'flex-end' : 'flex-start' );
$header_style_attr = implode( '; ', array(
    'text-align:' . $content_alignment,
    'width:' . $header_width,
    'max-width:' . $header_max_width,
    'margin:' . $header_margin,
    'background-color:' . ( $header_background_color ?: 'transparent' ),
    'padding:' . $header_padding_top . ' ' . $header_padding_right . ' ' . $resolved_header_padding_bottom . ' ' . $header_padding_left,
    'box-sizing:border-box'
) );

$section_class_list = array( 'section-card-grid' );
if ( $section_classes ) {
    $section_class_list[] = $section_classes;
}
if ( $use_scrollwork ) {
    $section_class_list[] = 'section-card-grid--scrollwork-' . $scrollwork_side;
}
if ( $equalize_card_bottoms ) {
    $section_class_list[] = 'section-card-grid--equalize-buttons';
}
if ( $enable_card_hover_effect ) {
    $section_class_list[] = 'section-card-grid--hover-cards';
}
if ( $has_card_badges ) {
    $section_class_list[] = 'section-card-grid--has-badges';
}
if ( $is_full_width ) {
    $section_class_list[] = 'section-card-grid--full-width';
}
if ( 'locked-density' === $card_visual_system ) {
    $section_class_list[] = 'section-card-grid--visual-locked-density';
}
$section_class_list[] = 'section-card-grid--button-size-' . $button_size;

$layout_class = 'section-card-grid__layout section-card-grid__layout--full';
if ( 'container' === $container_type ) {
    $layout_class = 'section-card-grid__layout section-card-grid__layout--contained';
}

$resolve_card_style_preset = static function ( $preset, $card_width, $card_index, $visual_system ) {
    if ( 'auto' !== $preset ) {
        return $preset;
    }

    if ( 'locked-density' !== $visual_system ) {
        return 'generic';
    }

    if ( '6' === (string) $card_width ) {
        return 0 === (int) $card_index ? 'carousel-card' : 'specials-card';
    }

    if ( '4' === (string) $card_width ) {
        return 0 === (int) $card_index ? 'carousel-card' : ( 1 === (int) $card_index ? 'utility-card' : 'pricing-tier' );
    }

    if ( '3' === (string) $card_width ) {
        if ( 0 === (int) $card_index ) {
            return 'carousel-card';
        }
        if ( 1 === (int) $card_index ) {
            return 'utility-card';
        }
        if ( 2 === (int) $card_index ) {
            return 'offer-card';
        }
        if ( 3 === (int) $card_index ) {
            return 'prompt-card';
        }
    }

    return 'generic';
};

$resolve_card_label_treatment = static function ( $treatment, $has_badge, $visual_system, $resolved_style_preset ) {
    if ( ! $has_badge ) {
        return 'none';
    }

    if ( 'auto' !== $treatment ) {
        return $treatment;
    }

    if ( 'locked-density' !== $visual_system ) {
        return 'flag';
    }

    if ( in_array( $resolved_style_preset, array( 'editorial-card', 'offer-card', 'prompt-card' ), true ) ) {
        return 'flag';
    }

    if ( in_array( $resolved_style_preset, array( 'utility-card', 'pricing-tier' ), true ) ) {
        return 'eyebrow';
    }

    return 'none';
};

$section_styles = array(
    '--scg-heading-font:' . $heading_font_stack,
    '--scg-heading-weight:' . $heading_font_weight,
    '--scg-heading-letter-spacing:' . $heading_letter_spacing,
    '--scg-subheading-font:' . $subheading_font_stack,
    '--scg-subheading-weight:' . $subheading_font_weight,
    '--scg-subheading-letter-spacing:' . $subheading_letter_spacing,
    '--scg-card-heading-font:' . $card_heading_font_stack,
    '--scg-card-heading-weight:' . $card_heading_font_weight,
    '--scg-card-heading-letter-spacing:' . $card_heading_letter_spacing,
    '--scg-card-heading-size:' . $card_heading_font_size,
    '--scg-card-heading-color:' . $card_heading_color,
    '--scg-heading-color:' . $section_heading_color,
    '--scg-scrollwork-color:' . $scrollwork_color,
    '--scg-heading-size:' . $heading_size_value,
    '--scg-heading-line-height:' . $heading_line_height_value,
    '--scg-heading-max-width:' . $heading_max_width,
    '--scg-heading-transform:' . $heading_text_transform,
    '--scg-heading-margin:' . $heading_margin,
    '--scg-intro-max-width:' . $section_intro_max_width,
    '--scg-intro-margin:' . $section_intro_margin,
    '--scg-intro-cta-justify:' . $intro_cta_justify,
    '--scg-bottom-cta-justify:' . $bottom_cta_justify,
    '--scg-bottom-cta-align:' . $section_bottom_button_alignment,
    '--scg-cta-font-size:' . $cta_text_size,
    '--scg-cta-padding:' . $cta_padding,
    '--scg-cta-letter-spacing:' . $cta_letter_spacing,
    '--scg-card-cta-font-size:' . $cta_text_size,
    '--scg-card-cta-padding:' . $cta_padding,
    '--scg-card-cta-letter-spacing:' . $cta_letter_spacing,
    '--scg-pricing-button-min-height:' . $resolved_button_size['pricing_min_height'],
    '--scg-post-content-max-width:' . $post_content_max_width,
    '--scg-eyebrow-color:' . $eyebrow_color,
    '--scg-eyebrow-font:' . $eyebrow_font_stack,
    '--scg-eyebrow-weight:' . $eyebrow_font_weight,
    '--scg-eyebrow-size:' . $eyebrow_font_size,
    '--scg-eyebrow-transform:' . $eyebrow_text_transform,
    '--scg-eyebrow-bg:' . $eyebrow_background_color,
    '--scg-eyebrow-border:' . $eyebrow_border,
    '--scg-eyebrow-padding:' . $eyebrow_padding,
    '--scg-eyebrow-radius:' . $eyebrow_border_radius,
    '--scg-card-background:' . $card_background_gradient,
    '--scg-card-border:' . $card_border,
    '--scg-card-badge-border-color:' . $card_badge_border_color,
    '--scg-card-badge-border-width:' . $card_badge_border_width,
    '--scg-card-badge-radius:' . $card_badge_border_radius,
    '--scg-card-badge-justify:' . $card_badge_justify,
    '--scg-card-padding:' . $card_padding,
    '--scg-card-padding-top:' . $card_padding_top,
    '--scg-card-padding-bottom:' . $card_padding_bottom,
    '--scg-card-gutter:' . $card_gutter,
    '--scg-card-column-gap:' . $card_column_gap,
    '--scg-card-row-gap:' . $card_row_gap,
    '--scg-card-button-spacing:' . $card_button_spacing,
    '--scg-card-button-justify:' . $card_button_justify,
    '--scg-card-button-align:' . $card_button_alignment
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
    $section_styles[] = 'background-position:center ' . $background_vertical_position;
    if ( $background_parallax ) {
        $section_styles[] = 'background-attachment:fixed';
    }
} elseif ( $background_gradient ) {
    $section_styles[] = 'background-image:' . $background_gradient;
} elseif ( ! empty( $background_image['url'] ) ) {
    $section_styles[] = 'background-image:url(' . esc_url( $background_image['url'] ) . ')';
    $section_styles[] = 'background-size:cover';
    $section_styles[] = 'background-position:center ' . $background_vertical_position;
    if ( $background_parallax ) {
        $section_styles[] = 'background-attachment:fixed';
    }
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
.section-card-grid {
    position: relative;
    --scg-scrollwork-width: var(--lacc-scrollwork-width, 78px);
    --scg-scrollwork-opacity: var(--lacc-scrollwork-opacity, 0.4);
    padding: 60px 0;
}

.section-card-grid__layout {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
}

.section-card-grid__layout--contained {
    max-width: 1200px;
}

.section-card-grid__layout--full {
    max-width: none;
}

.section-card-grid--scrollwork-left,
.section-card-grid--scrollwork-right {
    position: relative;
}

.section-card-grid--scrollwork-left::before,
.section-card-grid--scrollwork-right::before {
    content: '';
    position: absolute;
    top: 0;
    width: var(--scg-scrollwork-width, 78px);
    height: 100%;
    background-color: var(--scg-scrollwork-color, #8DC5DB);
    opacity: var(--scg-scrollwork-opacity, 0.4);
    pointer-events: none;
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: repeat-y;
    mask-repeat: repeat-y;
    -webkit-mask-position: top center;
    mask-position: top center;
    -webkit-mask-size: var(--scg-scrollwork-width, 78px) auto;
    mask-size: var(--scg-scrollwork-width, 78px) auto;
}

.section-card-grid--scrollwork-left::before {
    left: calc(50% - 500px);
}

.section-card-grid--scrollwork-right::before {
    right: calc(50% - 500px);
}

.section-card-grid .section-card-grid__inner {
    max-width: 1176px;
    margin-left: auto;
    margin-right: auto;
}

.section-card-grid--full-width .section-card-grid__inner {
    max-width: none;
}

.section-card-grid .section-card-grid__cards-row {
    display: flex;
    flex-wrap: wrap;
    row-gap: var(--scg-card-row-gap, var(--scg-card-gutter, 30px));
    margin-left: calc(-1 * var(--scg-card-column-gap, var(--scg-card-gutter, 30px)) / 2);
    margin-right: calc(-1 * var(--scg-card-column-gap, var(--scg-card-gutter, 30px)) / 2);
}

.section-card-grid .section-card-grid__card-column {
    flex: 0 0 var(--scg-col-width, 33.3333%);
    max-width: var(--scg-col-width, 33.3333%);
    box-sizing: border-box;
    margin-left: var(--scg-col-offset, 0);
    padding-left: calc(var(--scg-card-column-gap, var(--scg-card-gutter, 30px)) / 2);
    padding-right: calc(var(--scg-card-column-gap, var(--scg-card-gutter, 30px)) / 2);
}

@media (max-width: 767px) {
    .section-card-grid .section-card-grid__card-column {
        flex: 0 0 100%;
        max-width: 100%;
        margin-left: 0;
        padding-left: 20px;
        padding-right: 20px;
    }
}

.section-card-grid__header {
    margin-bottom: 0;
}

.section-card-grid__intro hr {
    width: min(300px, 100%);
    margin: .5em auto;
    border: 0;
    border-top: 1px solid rgba(81, 83, 74, 0.12);
}

.section-card-grid--intro-pattern .section-card-grid__intro,
.section-card-grid--intro-pattern .section-card-grid__intro p {
    max-width: 40em;
    font-family: var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif);
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 1.72;
}

.section-card-grid--intro-helvetica .section-card-grid__intro,
.section-card-grid--intro-helvetica .section-card-grid__intro p {
    font-family: var(--lacc-type-family-ui, Helvetica, Arial, sans-serif);
    font-weight: 400;
}

.section-card-grid--intro-pattern .section-card-grid__card {
    background: var(--lacc-color-white, #ffffff);
    border: 1px solid rgba(81, 83, 74, 0.16);
    box-shadow: none;
}

.section-card-grid--intro-pattern .section-card-grid__card-title,
.section-card-grid--intro-pattern .section-card-grid__card-title a {
    margin-bottom: 10px;
    font-size: 24px !important;
    line-height: 1.08;
}

.section-card-grid--intro-pattern .section-card-grid__card-body {
    padding: 26px 24px;
}

.section-card-grid h2 {
    width: 100%;
    max-width: var(--scg-heading-max-width, 100%);
    margin: var(--scg-heading-margin, 0 0 12px);
    font-family: var(--scg-heading-font, var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)) !important;
    font-weight: var(--scg-heading-weight, 600) !important;
    letter-spacing: var(--scg-heading-letter-spacing, 0.1275rem);
    font-size: var(--scg-heading-size, clamp(40px, 4.8vw, 58px));
    line-height: var(--scg-heading-line-height, 1.05);
    color: var(--scg-heading-color, var(--lacc-color-ink)) !important;
    text-transform: var(--scg-heading-transform, uppercase);
}

.section-card-grid__header h3,
.section-card-grid__header h4,
.section-card-grid__header h5,
.section-card-grid__header h6 {
    font-family: var(--scg-subheading-font, var(--scg-heading-font, var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif))) !important;
    font-weight: var(--scg-subheading-weight, var(--scg-heading-weight, 600)) !important;
    letter-spacing: var(--scg-subheading-letter-spacing, 0.1275rem);
    color: var(--scg-heading-color, var(--lacc-color-ink)) !important;
    text-transform: capitalize;
}

.section-card-grid__card-body h2,
.section-card-grid__card-body h3,
.section-card-grid__card-body h4,
.section-card-grid__card-body h5,
.section-card-grid__card-body h6 {
    font-family: var(--scg-card-heading-font, var(--scg-subheading-font, var(--scg-heading-font, var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif)))) !important;
    font-weight: var(--scg-card-heading-weight, var(--scg-subheading-weight, var(--scg-heading-weight, 600))) !important;
    color: var(--scg-card-heading-color, var(--scg-heading-color, var(--lacc-color-ink))) !important;
    letter-spacing: var(--scg-card-heading-letter-spacing, 0.1275rem);
    text-transform: capitalize;
}

.section-card-grid h2 em,
.section-card-grid h2 i,
.section-card-grid h3 em,
.section-card-grid h3 i,
.section-card-grid h4 em,
.section-card-grid h4 i,
.section-card-grid h5 em,
.section-card-grid h5 i,
.section-card-grid h6 em,
.section-card-grid h6 i,
.section-card-grid__intro em,
.section-card-grid__intro i {
    font-style: italic !important;
}

.section-card-grid__intro {
    width: 100%;
    max-width: var(--scg-intro-max-width, 100%);
    margin: var(--scg-intro-margin, 0 auto 0 0);
    hyphens: none;
    -webkit-hyphens: none;
    -ms-hyphens: none;
}

.section-card-grid__intro-cta {
    display: flex;
    justify-content: var(--scg-intro-cta-justify, flex-start);
    margin-top: 3em;
}

.section-card-grid__bottom-cta {
    display: flex;
    justify-content: var(--scg-bottom-cta-justify, flex-start);
    margin-top: 3em;
    text-align: var(--scg-bottom-cta-align, left);
}

.section-card-grid__post-content {
    width: 100%;
    max-width: var(--scg-post-content-max-width, 100%);
    margin: 3em auto 0;
}

.section-card-grid .season-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    margin-top: 24px;
}

.section-card-grid .season-tag {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    padding: 8px 20px;
    opacity: 0.7;
    border: 1px solid rgba(81, 83, 74, 0.22);
}

.section-card-grid .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 0;
    min-height: 0;
    width: auto;
    padding: var(--scg-cta-padding, .85em 1.45em);
    border: 1px solid transparent;
    border-radius: 0;
    background-image: none !important;
    text-transform: uppercase;
    letter-spacing: var(--scg-cta-letter-spacing, .04em);
    font-size: var(--scg-cta-font-size, 16px);
    font-weight: 700;
    line-height: 1.2;
    text-decoration: none !important;
    box-shadow: none;
    transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease;
}

.section-card-grid .hero-button:focus-visible {
    outline: 2px solid var(--lacc-color-action-primary, #3f5f85);
    outline-offset: 2px;
}

.section-card-grid .hero-button--primary {
    background: var(--lacc-color-action-primary, #3f5f85) !important;
    border-color: var(--lacc-color-action-primary, #3f5f85) !important;
    color: var(--lacc-color-action-on-primary, #ffffff) !important;
}

.section-card-grid .hero-button--secondary {
    background: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-card-grid .hero-button--gold-text,
.section-card-grid .hero-button--brown {
    background: transparent !important;
    border-color: #7c5542 !important;
    color: #7c5542 !important;
}

.section-card-grid .hero-button--ink {
    background: var(--lacc-color-ink, #51534a) !important;
    border-color: var(--lacc-color-ink, #51534a) !important;
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-card-grid .hero-button--outline-ink,
.section-card-grid .hero-button--outline-dark {
    background: transparent !important;
    border-color: var(--lacc-color-ink, #51534a) !important;
    color: var(--lacc-color-ink, #51534a) !important;
}

.section-card-grid .hero-button--light {
    background: var(--lacc-color-cream, #f6f3ed) !important;
    border-color: #ddd4c8 !important;
    color: var(--lacc-color-ink, #51534a) !important;
}

.section-card-grid .hero-button--outline {
    background: transparent !important;
    border-color: var(--lacc-color-action-primary, #3f5f85) !important;
    color: var(--lacc-color-action-primary, #3f5f85) !important;
}

.section-card-grid .hero-button--outline-gold {
    background: transparent !important;
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
    color: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
}

.section-card-grid .hero-button--primary:hover,
.section-card-grid .hero-button--primary:focus {
    background: var(--lacc-color-action-primary-hover, #324c6a) !important;
    border-color: var(--lacc-color-action-primary-hover, #324c6a) !important;
    color: var(--lacc-color-action-on-primary, #ffffff) !important;
}

.section-card-grid .hero-button--secondary:hover,
.section-card-grid .hero-button--secondary:focus {
    background: var(--lacc-color-accent-old-gold-hover, #624818) !important;
    border-color: var(--lacc-color-accent-old-gold-hover, #624818) !important;
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-card-grid .hero-button--gold-text:hover,
.section-card-grid .hero-button--gold-text:focus,
.section-card-grid .hero-button--brown:hover,
.section-card-grid .hero-button--brown:focus {
    background: #7c5542 !important;
    border-color: #7c5542 !important;
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-card-grid .hero-button--ink:hover,
.section-card-grid .hero-button--ink:focus {
    background: var(--lacc-color-ink-deep, #1f221d) !important;
    border-color: var(--lacc-color-ink-deep, #1f221d) !important;
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-card-grid .hero-button--outline-ink:hover,
.section-card-grid .hero-button--outline-ink:focus {
    background: rgba(81,83,74,.08) !important;
    border-color: var(--lacc-color-ink, #51534a) !important;
    color: #3b3d37 !important;
}

.section-card-grid .hero-button--outline-dark:hover,
.section-card-grid .hero-button--outline-dark:focus {
    background: var(--lacc-color-ink, #51534a) !important;
    border-color: var(--lacc-color-ink, #51534a) !important;
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-card-grid .hero-button--light:hover,
.section-card-grid .hero-button--light:focus {
    background: #ebe2d5 !important;
    border-color: #ddd4c8 !important;
    color: var(--lacc-color-ink, #51534a) !important;
}

.section-card-grid .hero-button--outline:hover,
.section-card-grid .hero-button--outline:focus {
    background: var(--lacc-color-action-primary, #3f5f85) !important;
    border-color: var(--lacc-color-action-primary, #3f5f85) !important;
    color: var(--lacc-color-action-on-primary, #ffffff) !important;
}

.section-card-grid .hero-button--outline-gold:hover,
.section-card-grid .hero-button--outline-gold:focus {
    background: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
    color: var(--lacc-color-white, #ffffff) !important;
}

.section-card-grid__eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    letter-spacing: .11em;
    font-size: var(--scg-eyebrow-size, 12px);
    line-height: 1.2;
    color: var(--scg-eyebrow-color, var(--lacc-color-text-primary));
    font-family: var(--scg-eyebrow-font, inherit);
    font-weight: var(--scg-eyebrow-weight, 700);
    text-transform: var(--scg-eyebrow-transform, uppercase);
    background: var(--scg-eyebrow-bg, transparent);
    border: var(--scg-eyebrow-border, 1px solid rgba(181,138,45,0.32));
    padding: var(--scg-eyebrow-padding, 0.42em 1.17em);
    border-radius: var(--scg-eyebrow-radius, 999px);
}

.section-card-grid__card {
    position: relative;
    background: var(--scg-card-background, rgba(255,255,255,0.96));
    border: var(--scg-card-border, 0);
    height: 100%;
    margin-bottom: 0;
    overflow: hidden;
}

.section-card-grid--hover-cards .section-card-grid__card {
    top: 0;
    box-shadow: 0 27px 32px -29px rgba(51, 51, 51, 0.5);
    transition: top .2s ease, box-shadow .2s ease;
}

.section-card-grid--hover-cards .section-card-grid__card:hover,
.section-card-grid--hover-cards .section-card-grid__card:focus-within {
    top: -2px;
    box-shadow: 0 30px 33px -29px rgba(51, 51, 51, 0.45);
}

.section-card-grid--equalize-buttons .section-card-grid__cards-row {
    display: flex;
    flex-wrap: wrap;
}

.section-card-grid--equalize-buttons .section-card-grid__card-column {
    display: flex;
}

.section-card-grid--equalize-buttons .section-card-grid__card {
    display: flex;
    flex-direction: column;
    width: 100%;
}

.section-card-grid--equalize-buttons .section-card-grid__card-body {
    display: flex;
    flex-direction: column;
    flex: 1 1 auto;
}

.section-card-grid--equalize-buttons .section-card-grid__card-copy {
    flex: 1 1 auto;
    margin-bottom: var(--scg-card-button-spacing, 24px);
}

.section-card-grid__card-badge-wrap {
    position: absolute;
    top: 0;
    left: 24px;
    right: 24px;
    display: flex;
    justify-content: var(--scg-card-badge-justify, center);
    z-index: 2;
    text-align: center;
    padding-top: 0;
    pointer-events: none;
}

.section-card-grid__card-badge {
    --scg-badge-bg: var(--lacc-color-gold-soft, #946E29);
    --scg-badge-text: var(--lacc-color-white, #ffffff);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: auto;
    max-width: 100%;
    background: var(--scg-badge-bg);
    color: var(--scg-badge-text);
    padding: 8px 16px;
    border: var(--scg-card-badge-border-width, 0) solid var(--scg-card-badge-border-color, transparent);
    border-radius: var(--scg-card-badge-radius, 999px);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .11em;
    line-height: 1;
    text-transform: uppercase;
}

.section-card-grid__card-badge--featured {
    font-size: 12px;
    letter-spacing: .11em;
}

.section-card-grid__card-badge--flag {
    width: auto;
    border-radius: 0;
    padding: 12px 24px 12px 20px;
    letter-spacing: .16em;
    clip-path: polygon(0 0, 100% 0, calc(100% - 16px) 50%, 100% 100%, 0 100%);
}

/* Flag badges always lock to the left card edge, ignoring the justify var */
.section-card-grid__card-badge-wrap:has(.section-card-grid__card-badge--flag) {
    top: 14px;
    justify-content: flex-start;
    left: 0;
    right: auto;
}

.section-card-grid__card-eyebrow {
    display: inline-flex;
    align-items: center;
    align-self: var(--scg-eyebrow-align, flex-start);
    width: fit-content;
    max-width: 100%;
    min-height: 30px;
    margin: 0 0 12px;
    padding: 6px 12px;
    border: var(--scg-eyebrow-border, 1px solid rgba(81,83,74,0.28));
    background: var(--scg-eyebrow-bg, transparent);
    color: var(--scg-eyebrow-color, var(--lacc-color-text-primary));
    font-family: var(--scg-eyebrow-font, inherit);
    font-size: var(--scg-eyebrow-size, 12px);
    font-weight: var(--scg-eyebrow-weight, 700);
    letter-spacing: .11em;
    line-height: 1.1;
    text-transform: var(--scg-eyebrow-transform, uppercase);
    border-radius: var(--scg-eyebrow-radius, 0);
}

.section-card-grid__card-image img {
    width: 100%;
    height: auto;
    display: block;
}

.section-card-grid__card-body {
    padding: var(--scg-card-padding, 24px);
    padding-top: var(--scg-card-padding-top, var(--scg-card-padding, 24px));
    padding-bottom: var(--scg-card-padding-bottom, var(--scg-card-padding, 24px));
    hyphens: none;
    -webkit-hyphens: none;
    -ms-hyphens: none;
}

.section-card-grid__card--pricing .section-card-grid__card-body {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    gap: 14px;
    padding: 24px 24px 32px;
    overflow: hidden;
}

.section-card-grid__card--pricing {
    --scg-card-border: 1px solid rgba(122,90,31,0.28);
    isolation: isolate;
    background:
        radial-gradient(circle at top center, rgba(255,255,255,0.92), rgba(255,255,255,0) 42%),
        linear-gradient(180deg, rgba(246,243,237,0.98), rgba(255,255,255,0.96));
}

.section-card-grid__card--pricing::after {
    content: '';
    position: absolute;
    inset: 7px;
    border: 1px solid rgba(122,90,31,0.14);
    pointer-events: none;
    z-index: 0;
}

[data-scg-col="4"] .section-card-grid__card--pricing {
    --scg-card-heading-size: clamp(24px, 2.2vw, 34px);
}

.section-card-grid__card--pricing .section-card-grid__card-body > * {
    position: relative;
    z-index: 1;
}

/* Pricing-tier: tier badge (featured pill) and spacer */
.section-card-grid__card-tier-lane {
    position: relative;
    isolation: isolate;
    align-self: center;
    display: flex;
    align-items: center;
    justify-content: center;
    width: calc(100% + 48px);
    margin-left: -24px;
    margin-right: -24px;
    margin-top: -28px;
    margin-bottom: 14px;
    min-height: 42px;
}

.section-card-grid__card--pricing.section-card-grid__card--has-badge .section-card-grid__card-tier-lane {
    margin-top: -32px;
}

.section-card-grid__card-tier-lane::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 60px;
    transform: translate(-50%, -50%);
    background-image: url('/wp-content/themes/LACC-sage-theme-master/brand/scrollwork-horizontal.svg');
    background-repeat: no-repeat;
    background-position: center center;
    background-size: auto 60px;
    opacity: 0.26;
    pointer-events: none;
    z-index: 0;
}

.section-card-grid__card-tier-badge,
.section-card-grid__card-tier-badge-spacer {
    position: relative;
    z-index: 1;
    align-self: center;
    margin-top: 0;
    margin-bottom: 0;
    min-height: 28px;
}

.section-card-grid__card-tier-badge-spacer {
    visibility: visible;
    pointer-events: none;
}

.section-card-grid__card-tier-badge {
    position: relative;
    isolation: isolate;
    z-index: 1;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 20px;
    border-radius: 999px;
    border: 1px solid rgba(212,164,65,0.34);
    background: linear-gradient(180deg, #31332c, #1f221d);
    color: var(--lacc-color-gold-decorative, #d4a441);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    line-height: 1;
    text-transform: uppercase;
    text-shadow: 0 1px 0 rgba(31,34,29,0.28);
    box-shadow: 0 12px 24px rgba(31,34,29,0.08);
}

.section-card-grid__card-tier-badge::before {
    content: none;
    position: absolute;
    inset: 3px;
    z-index: -1;
    border-radius: 999px;
    border: 0;
    pointer-events: none;
}

/* Pricing-tier: capacity, kicker, subprice typography helpers */
.section-card-grid__card--pricing .section-card-grid__card-copy .lacc-pricing-tier__capacity {
    margin: 0;
    color: #946E29;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.section-card-grid__card--pricing .section-card-grid__card-copy .lacc-pricing-tier__kicker {
    margin: 0;
    color: rgba(81,83,74,0.72);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.section-card-grid__card--pricing .section-card-grid__card-copy .lacc-pricing-tier__subprice {
    margin: 0;
    color: rgba(81,83,74,0.82);
    font-size: 15px;
    line-height: 1.5;
}

/* Pricing-tier: price overrides — larger size, gold color, 400 weight */
.section-card-grid__card--pricing .section-card-grid__card-copy .lacc-pkg-price,
.section-card-grid__card--pricing .section-card-grid__card-copy .pkg-price,
.section-card-grid__card--pricing .section-card-grid__card-copy .lacc-pricing-price {
    font-size: clamp(42px, 3.2vw, 56px) !important;
    font-weight: 400 !important;
    color: var(--lacc-color-gold-soft, #946E29) !important;
}

/* Pricing-tier: price-row remove legacy box */
.section-card-grid__card--pricing .section-card-grid__card-copy .lacc-pkg-price-row {
    display: flex;
    flex-direction: column;
    gap: 2px;
    margin: 0;
    padding: 0;
    border: 0;
    background: transparent;
}

/* Pricing-tier: price-label (period) */
.section-card-grid__card--pricing .section-card-grid__card-copy .lacc-pkg-price-label {
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: rgba(81,83,74,0.7);
    opacity: 1;
}

.section-card-grid--has-badges .section-card-grid__card-body {
    padding-top: calc(var(--scg-card-padding-top, var(--scg-card-padding, 24px)) + 44px);
}

.section-card-grid__card-body p,
.section-card-grid__card-body li,
.section-card-grid__card-copy,
.section-card-grid__card-title {
    hyphens: none;
    -webkit-hyphens: none;
    -ms-hyphens: none;
    word-break: normal;
    overflow-wrap: normal;
}

.section-card-grid__card-title,
.section-card-grid__card-copy,
.section-card-grid__card-copy p,
.section-card-grid__card-copy li {
    text-align: inherit;
}

.section-card-grid__card--align-left {
    text-align: left;
}

.section-card-grid__card--align-center {
    text-align: center;
}

.section-card-grid__card--align-right {
    text-align: right;
}

.section-card-grid__card-copy .lacc-pkg-kicker,
.section-card-grid__card-copy .pkg-kicker,
.section-card-grid__card-copy .lacc-pricing-kicker {
    margin: 0 0 1em;
    font-size: 12px;
    font-weight: 700;
    line-height: 1.2;
    letter-spacing: .16em;
    text-transform: uppercase;
    color: var(--lacc-color-gold-soft, #946E29);
}

.section-card-grid__card-copy .lacc-pkg-price-label,
.section-card-grid__card-copy .pkg-price-label,
.section-card-grid__card-copy .lacc-pricing-price-label {
    margin: 0 0 .35em;
    font-size: 12px;
    font-weight: 600;
    line-height: 1.2;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: inherit;
    opacity: .8;
}

.section-card-grid__card-copy .lacc-pkg-price-row,
.section-card-grid__card-copy .pkg-price-row,
.section-card-grid__card-copy .lacc-pricing-price-row {
    margin: 1.25em 0 .35em;
}

.section-card-grid__card-copy .lacc-pkg-price,
.section-card-grid__card-copy .pkg-price,
.section-card-grid__card-copy .lacc-pricing-price {
    margin: 0 0 .3em;
    font-family: var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif) !important;
    font-weight: 500;
    font-style: italic;
    letter-spacing: .03em;
    font-size: clamp(30px, 2.4vw, 42px);
    line-height: 1;
    color: var(--scg-card-heading-color, var(--scg-heading-color, var(--lacc-color-ink))) !important;
}

.section-card-grid__card-copy .lacc-pkg-note,
.section-card-grid__card-copy .pkg-note,
.section-card-grid__card-copy .pkg-price-note,
.section-card-grid__card-copy .lacc-pricing-note {
    margin: 0 0 1.25em;
    font-size: 14px;
    line-height: 1.5;
    opacity: .88;
}

.section-card-grid__card-copy .lacc-pkg-divider,
.section-card-grid__card-copy .pkg-divider,
.section-card-grid__card-copy .lacc-pricing-divider {
    display: block;
    width: 100%;
    height: 0;
    margin: 1.25em 0;
    border: 0;
    border-top: 1px solid var(--lacc-list-line-color, rgba(148, 110, 41, 0.28));
}

.section-card-grid__card-copy .enhance-item {
    font-size: .75em;
}

.section-card-grid__card-copy ul.lacc-keyline-list,
.section-card-grid__card-copy ul.lacc-keyline-list--plain,
.section-card-grid__card-copy ul.lacc-pricing-list,
.section-card-grid__card-copy ul.lacc-pricing-list--plain {
    --lacc-list-line-color: rgba(148, 110, 41, 0.28);
    --lacc-list-bullet-color: var(--lacc-color-gold-soft);
    padding: 0 !important;
    padding-left: 0 !important;
    padding-inline-start: 0 !important;
    margin-left: 0 !important;
}

.section-card-grid__card-copy ul.lacc-keyline-list > li,
.section-card-grid__card-copy ul.lacc-keyline-list--plain > li,
.section-card-grid__card-copy ul.lacc-pricing-list > li,
.section-card-grid__card-copy ul.lacc-pricing-list--plain > li {
    position: relative;
    list-style: none !important;
    padding-top: .5em;
    padding-bottom: .5em;
    border-bottom: 1px solid var(--lacc-list-line-color) !important;
}

.section-card-grid__card-copy ul.lacc-keyline-list > li:first-child,
.section-card-grid__card-copy ul.lacc-keyline-list--plain > li:first-child,
.section-card-grid__card-copy ul.lacc-pricing-list > li:first-child,
.section-card-grid__card-copy ul.lacc-pricing-list--plain > li:first-child {
    border-top: 1px solid var(--lacc-list-line-color) !important;
}

.section-card-grid__card-copy ul.lacc-keyline-list > li {
    padding-left: 1.25em;
}

.section-card-grid__card-copy ul.lacc-pricing-list > li {
    padding-left: 1.25em;
}

.section-card-grid__card-copy ul.lacc-keyline-list--plain > li,
.section-card-grid__card-copy ul.lacc-pricing-list--plain > li {
    padding-left: 0;
}

.section-card-grid__card-copy ul.lacc-keyline-list > li::before,
.section-card-grid__card-copy ul.lacc-pricing-list > li::before {
    content: '✦' !important;
    position: absolute;
    left: 0;
    top: .8em;
    transform: none;
    width: .75em;
    line-height: 1;
    color: var(--lacc-list-bullet-color) !important;
}

.section-card-grid__card-copy ul.lacc-keyline-list--plain > li::before,
.section-card-grid__card-copy ul.lacc-pricing-list--plain > li::before {
    content: none !important;
    margin-right: 0;
}

.section-card-grid__card--pricing .section-card-grid__card-button-wrap {
    margin-top: auto;
    padding-top: 8px;
}

.section-card-grid__card--pricing .section-card-grid__card-button {
    width: 100%;
}

.section-card-grid__card-title,
.section-card-grid__card-title a {
    margin-top: 0;
    margin-bottom: 12px;
    font-family: var(--scg-card-heading-font, var(--scg-heading-font, var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif))) !important;
    font-weight: var(--scg-card-heading-weight, var(--scg-heading-weight, 600)) !important;
    font-size: var(--scg-card-heading-size, inherit) !important;
    color: var(--scg-card-heading-color, var(--scg-heading-color, var(--lacc-color-ink))) !important;
}

/* Width-responsive card typography: 2-up -> 3-up -> 4-up -> 5-up */
.section-card-grid__card-column[data-scg-col="6"] .section-card-grid__card {
    --scg-card-heading-size: clamp(32px, 2.8vw, 38px);
    --scg-card-body-size: 16px;
}

.section-card-grid__card-column[data-scg-col="4"] .section-card-grid__card {
    --scg-card-heading-size: clamp(28px, 2.4vw, 34px);
    --scg-card-body-size: 16px;
}

.section-card-grid__card-column[data-scg-col="3"] .section-card-grid__card {
    --scg-card-heading-size: clamp(24px, 2vw, 30px);
    --scg-card-body-size: 16px;
}

.section-card-grid__card-column[data-scg-col="15"] .section-card-grid__card {
    --scg-card-heading-size: clamp(20px, 1.6vw, 24px);
    --scg-card-body-size: 12px;
}

.section-card-grid__card .section-card-grid__card-copy p:not(.lacc-pkg-price):not(.pkg-price):not(.lacc-pricing-price):not(.lacc-pricing-pattern__title):not(.lacc-pricing-pattern__price):not(.lacc-pricing-pattern__lede),
.section-card-grid__card .section-card-grid__card-copy li {
    font-family: Arial, Helvetica, sans-serif !important;
    font-size: var(--scg-card-body-size, 16px);
    line-height: 1.55;
}

@media (max-width: 767px) {
    .section-card-grid__card-column .section-card-grid__card {
        --scg-card-heading-size: clamp(24px, 7vw, 32px);
        --scg-card-body-size: 16px;
    }
}

.section-card-grid__card--preset-carousel-card {
    /* Token layer: override these on the section wrapper or via col-width rules below */
    --scg-carousel-title-size: clamp(32px, 3.6vw, 44px);
    --scg-carousel-title-lh: 1.02;
    --scg-carousel-body-padding: 36px 36px 44px;
    background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(246,243,237,0.94));
}

/* Carousel-card flag always uses brand green — direct property override beats inline style vars */
.section-card-grid__card--preset-carousel-card .section-card-grid__card-badge--flag {
    background: var(--lacc-color-brand-green, #60a57d) !important;
    color: var(--lacc-color-white, #ffffff) !important;
    border: 1px solid rgba(75, 135, 103, 0.22) !important;
}

.section-card-grid__card--preset-carousel-card .section-card-grid__card-image {
    position: relative;
}

.section-card-grid__card--preset-carousel-card .section-card-grid__card-image::after {
    content: '';
    position: absolute;
    inset: auto 0 0 0;
    height: 44%;
    background: linear-gradient(180deg, rgba(31,34,29,0), rgba(31,34,29,0.44));
    pointer-events: none;
}

.section-card-grid__card--preset-carousel-card .section-card-grid__card-image img {
    aspect-ratio: 4 / 3;
    object-fit: cover;
    display: block;
}

.section-card-grid__card--preset-carousel-card .section-card-grid__card-title,
.section-card-grid__card--preset-carousel-card .section-card-grid__card-title a {
    font-size: var(--scg-carousel-title-size) !important;
    text-transform: uppercase;
    letter-spacing: .012em;
    line-height: var(--scg-carousel-title-lh, 1.02);
}

.section-card-grid__card--preset-carousel-card .section-card-grid__card-body {
    padding: var(--scg-carousel-body-padding, 36px 36px 44px);
}

/* Narrower column overrides — token-driven via data-scg-col on the column wrapper */
[data-scg-col="4"] .section-card-grid__card--preset-carousel-card {
    --scg-carousel-title-size: clamp(22px, 2.6vw, 30px);
    --scg-carousel-title-lh: 1.06;
    --scg-carousel-body-padding: 24px 24px 32px;
}

[data-scg-col="3"] .section-card-grid__card--preset-carousel-card {
    --scg-carousel-title-size: clamp(18px, 2.1vw, 24px);
    --scg-carousel-title-lh: 1.08;
    --scg-carousel-body-padding: 20px 20px 28px;
}

/* Amenity pills — warm cream pill row inside carousel-card */
.section-card-grid__card--preset-carousel-card .section-card-grid__card-amenity-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 10px;
    margin-bottom: 14px;
}

.section-card-grid__card--preset-carousel-card .section-card-grid__card-amenity-pill {
    display: inline-flex;
    align-items: center;
    padding: 7px 12px;
    border: 1px solid rgba(122,90,31,0.16);
    border-radius: 999px;
    background: #f4efe6;
    color: #51534a;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
}

/* Stay-facts grid — 3-col metadata row below body copy */
.section-card-grid__card--preset-carousel-card .section-card-grid__card-stay-facts {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 10px;
    padding-top: 14px;
    margin-top: 4px;
    border-top: 1px solid rgba(81,83,74,0.1);
}

.section-card-grid__card--preset-carousel-card .section-card-grid__card-stay-fact span {
    display: block;
    color: rgba(81,83,74,0.68);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.section-card-grid__card--preset-carousel-card .section-card-grid__card-stay-fact strong {
    display: block;
    margin-top: 4px;
    color: #51534a;
    font-family: var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif);
    font-size: 16px;
    font-weight: 500;
    line-height: 1.3;
}

/* ── Card image carousel ───────────────────────────────────────────── */
.section-card-grid__card-carousel {
    position: relative;
    overflow: hidden;
}

.section-card-grid__card-carousel-slides {
    position: relative;
    width: 100%;
}

.section-card-grid__card-carousel-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity .28s ease;
    pointer-events: none;
}

.section-card-grid__card-carousel-slide.is-active {
    position: relative;
    opacity: 1;
    pointer-events: auto;
}

.section-card-grid__card-carousel-slide img {
    width: 100%;
    aspect-ratio: 4 / 3;
    display: block;
    object-fit: cover;
}

/* Bottom gradient overlay on carousel */
.section-card-grid__card-carousel::after {
    content: '';
    position: absolute;
    inset: auto 0 0 0;
    height: 44%;
    background: linear-gradient(180deg, rgba(31,34,29,0), rgba(31,34,29,0.44));
    pointer-events: none;
    z-index: 1;
}

/* Controls bar — prev / dots+count / next */
.section-card-grid__card-carousel-controls {
    position: absolute;
    inset: auto 14px 14px 14px;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
}

.section-card-grid__card-carousel-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border: 1px solid rgba(31,34,29,0.72);
    border-radius: 12px;
    background: rgba(31,34,29,0.72);
    color: #ffffff;
    cursor: pointer;
    appearance: none;
    -webkit-appearance: none;
    flex-shrink: 0;
}

.section-card-grid__card-carousel-btn svg {
    width: 22px;
    height: 22px;
    stroke: currentColor;
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
    overflow: visible;
}

.section-card-grid__card-carousel-btn--next svg {
    transform: scaleX(-1);
}

.section-card-grid__card-carousel-meta {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 7px 10px;
    border-radius: 999px;
    background: rgba(31,34,29,0.72);
    color: #ffffff;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    line-height: 1;
}

.section-card-grid__card-carousel-dots {
    display: inline-flex;
    gap: 5px;
}

.section-card-grid__card-carousel-dot {
    width: 8px;
    height: 8px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.7);
    background: transparent;
    transition: background .18s ease;
}

.section-card-grid__card-carousel-dot.is-active {
    background: #ffffff;
    border-color: #ffffff;
}

.section-card-grid__card--preset-specials-card {
    --scg-specials-title-size: var(--scg-heading-size, clamp(40px, 4.8vw, 58px));
    --scg-specials-body-padding: 28px 28px 34px;
    --scg-specials-lede-size: clamp(20px, 2.3vw, 40px);
    --scg-specials-price-size: clamp(22px, 2.3vw, 40px);
    --scg-specials-copy-size: 16px;
    --scg-specials-subcopy-lede-size: clamp(16px, 1.4vw, 20px);
    --scg-specials-list-spacing: 1em;
    background: rgba(255,255,255,0.97);
}

.section-card-grid__card--preset-specials-card .section-card-grid__card-image {
    position: relative;
    overflow: hidden;
}

.section-card-grid__card--preset-specials-card .section-card-grid__card-image::before {
    content: '';
    position: absolute;
    inset: auto 0 0 0;
    height: 34%;
    background: linear-gradient(180deg, rgba(22,26,18,0) 0%, rgba(22,26,18,0.76) 100%);
    pointer-events: none;
    z-index: 1;
}

.section-card-grid__card--preset-specials-card .section-card-grid__card-image img {
    aspect-ratio: 4 / 3;
    object-fit: cover;
    display: block;
}

.section-card-grid__card--preset-specials-card .section-card-grid__card-image-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 18px 24px 22px;
    text-align: center;
    z-index: 2;
}

.section-card-grid__card--preset-specials-card .section-card-grid__card-title,
.section-card-grid__card--preset-specials-card .section-card-grid__card-title a {
    color: #ffffff !important;
    font-size: var(--scg-specials-title-size) !important;
    line-height: 1.06;
    letter-spacing: .015em;
    text-transform: uppercase;
    margin: 0;
    text-shadow: 0 1px 4px rgba(0,0,0,0.35);
}

.section-card-grid__card--preset-specials-card .section-card-grid__card-body {
    padding: var(--scg-specials-body-padding, 28px 28px 34px);
}

.section-card-grid__card--preset-specials-card .lacc-pricing-pattern {
    gap: 10px;
}

.section-card-grid__card--preset-specials-card .section-card-grid__card-copy .lacc-pricing-pattern__lede {
    font-size: var(--scg-specials-lede-size) !important;
    line-height: 1.12;
    color: var(--lacc-color-ink, #51534a);
    text-transform: none;
}

.section-card-grid__card--preset-specials-card .lacc-pricing-pattern__price {
    font-size: var(--scg-specials-price-size) !important;
}

.section-card-grid__card--preset-specials-card .section-card-grid__card-copy,
.section-card-grid__card--preset-specials-card .section-card-grid__card-copy p:not(.lacc-pricing-pattern__lede):not(.lacc-pricing-pattern__price):not(.lacc-pricing-pattern__title),
.section-card-grid__card--preset-specials-card .section-card-grid__card-copy li {
    font-size: var(--scg-specials-copy-size);
}

.section-card-grid__card--preset-specials-card .section-card-grid__card-copy > p {
    font-size: var(--scg-specials-subcopy-lede-size, clamp(16px, 1.4vw, 20px));
    font-style: italic;
}

.section-card-grid__card--preset-specials-card ul.lacc-pricing-list,
.section-card-grid__card--preset-specials-card ul.lacc-pricing-list--plain {
    margin-top: var(--scg-specials-list-spacing);
}

.section-card-grid__card--preset-specials-card ul.lacc-pricing-list > li,
.section-card-grid__card--preset-specials-card ul.lacc-pricing-list--plain > li {
    min-height: 0;
    padding-top: .4em;
    padding-bottom: .4em;
}

[data-scg-col="4"] .section-card-grid__card--preset-specials-card {
    --scg-specials-title-size: clamp(28px, 3vw, 38px);
    --scg-specials-body-padding: 24px 24px 30px;
    --scg-specials-lede-size: clamp(16px, 1.67vw, 30px);
    --scg-specials-price-size: clamp(18px, 1.67vw, 30px);
    --scg-specials-copy-size: 15px;
    --scg-specials-subcopy-lede-size: clamp(14px, 1.2vw, 17px);
    --scg-specials-list-spacing: .75em;
}

[data-scg-col="3"] .section-card-grid__card--preset-specials-card {
    --scg-specials-title-size: clamp(17px, 1.45vw, 22px);
    --scg-specials-body-padding: 20px 20px 26px;
    --scg-specials-lede-size: clamp(14px, 1.41vw, 26px);
    --scg-specials-price-size: clamp(16px, 1.41vw, 26px);
    --scg-specials-copy-size: 14px;
    --scg-specials-subcopy-lede-size: clamp(13px, 1.1vw, 16px);
    --scg-specials-list-spacing: .6em;
}

.section-card-grid__card--preset-editorial-card {
    background: var(--lacc-gradient-ink, linear-gradient(180deg, #51534a, #1f221d));
    color: var(--lacc-color-white, #ffffff);
}

.section-card-grid__card--preset-editorial-card .section-card-grid__card-title,
.section-card-grid__card--preset-editorial-card .section-card-grid__card-title a,
.section-card-grid__card--preset-editorial-card .section-card-grid__card-copy,
.section-card-grid__card--preset-editorial-card .section-card-grid__card-copy p,
.section-card-grid__card--preset-editorial-card .section-card-grid__card-copy li {
    color: var(--lacc-color-white, #ffffff) !important;
}

.section-card-grid__card--preset-editorial-card .section-card-grid__card-eyebrow {
    border-color: rgba(255,255,255,0.35);
    background: rgba(255,255,255,0.1);
    color: var(--lacc-color-white, #ffffff);
}

.section-card-grid__card--preset-utility-card {
    background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(246,243,237,0.92));
}

.section-card-grid__card--preset-offer-card {
    border-color: rgba(122,90,31,0.18);
    background: linear-gradient(180deg, rgba(246,243,237,0.98), rgba(255,255,255,0.96));
}

.section-card-grid__card--preset-prompt-card {
    background: linear-gradient(180deg, rgba(81,83,74,0.98), rgba(60,62,56,0.98));
    color: var(--lacc-color-white, #ffffff);
}

.section-card-grid__card--preset-prompt-card .section-card-grid__card-title,
.section-card-grid__card--preset-prompt-card .section-card-grid__card-title a,
.section-card-grid__card--preset-prompt-card .section-card-grid__card-copy,
.section-card-grid__card--preset-prompt-card .section-card-grid__card-copy p,
.section-card-grid__card--preset-prompt-card .section-card-grid__card-copy li {
    color: var(--lacc-color-white, #ffffff) !important;
}

.section-card-grid__card--preset-prompt-card .section-card-grid__card-eyebrow {
    border-color: rgba(255,255,255,0.35);
    background: rgba(255,255,255,0.1);
    color: var(--lacc-color-white, #ffffff);
}

.section-card-grid__card-copy .lacc-pricing-pattern {
    display: grid;
    gap: 10px;
}

.section-card-grid__card-copy .lacc-pricing-pattern__title {
    margin: 0;
    color: inherit;
    font-family: var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: clamp(40px, 4.8vw, 66px);
    line-height: .98;
    text-transform: uppercase;
}

.section-card-grid__card-copy .lacc-pricing-pattern__price {
    margin: 0;
    color: var(--lacc-color-accent-gold, #d4a441);
    font-family: var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif);
    font-size: clamp(30px, 2.6vw, 40px);
    font-style: italic;
    font-weight: 500;
    line-height: 1;
}

.section-card-grid__card-copy .lacc-pricing-pattern__period {
    margin-left: 10px;
    color: rgba(81,83,74,0.65);
    font-family: var(--lacc-type-family-ui, Helvetica, Arial, sans-serif);
    font-size: 12px;
    font-style: normal;
    font-weight: 700;
    letter-spacing: .18em;
    text-transform: uppercase;
}

.section-card-grid__card-copy .lacc-pricing-pattern__lede {
    margin: 0;
    color: rgba(81,83,74,0.92);
    font-family: var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif);
    font-size: clamp(28px, 2.8vw, 50px);
    font-style: italic;
    line-height: 1.18;
}

.section-card-grid--freight-italic-medium h2,
.section-card-grid--freight-italic-medium .section-card-grid__header h3,
.section-card-grid--freight-italic-medium .section-card-grid__header h4,
.section-card-grid--freight-italic-medium .section-card-grid__card-title,
.section-card-grid--freight-italic-medium .section-card-grid__card-title a,
.section-card-grid--freight-italic-medium .section-card-grid__intro,
.section-card-grid--freight-italic-medium .section-card-grid__intro p {
    font-family: var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif) !important;
    font-weight: 500 !important;
    font-style: italic;
    letter-spacing: .02em;
}

.section-card-grid__card-form {
    margin-top: 1.5em;
}

.section-card-grid__card-form .gform_wrapper {
    max-width: 560px;
    margin: 0 auto !important;
}

.section-card-grid__card-form .gform_body,
.section-card-grid__card-form .gform_fields,
.section-card-grid__card-form .gfield {
    width: 100%;
}

.section-card-grid__card-form .gform_body,
.section-card-grid__card-form .gform_fields {
    max-width: 560px;
    margin: 0 auto !important;
    padding: 0 !important;
}

.section-card-grid__card-form .gfield {
    margin-left: auto;
    margin-right: auto;
    padding-right: 0 !important;
}

.section-card-grid__card-form .ginput_container {
    width: 100%;
}

.section-card-grid__card-form .gfield_label,
.section-card-grid__card-form .gfield_label span,
.section-card-grid__card-form legend {
    display: block !important;
    width: 100% !important;
    margin: 0 auto 10px !important;
    text-align: center !important;
    font-family: var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif) !important;
    font-size: 24px !important;
    line-height: 1.2 !important;
    font-weight: 600 !important;
    letter-spacing: .02em !important;
}

.section-card-grid__card-form input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]),
.section-card-grid__card-form select,
.section-card-grid__card-form textarea {
    display: block;
    width: 100% !important;
    height: 48px;
    min-height: 48px;
    margin: 0 auto;
    padding: 12px 16px !important;
    border: 1px solid rgba(81, 83, 74, 0.24);
    border-radius: 0;
    background-color: rgba(255, 255, 255, 0.96);
    color: var(--lacc-color-ink, #51534a);
    box-sizing: border-box;
}

.section-card-grid__card-form select {
    height: 48px;
    line-height: 1.2;
    padding-right: 42px !important;
    background-position: right 16px center;
}

.section-card-grid__card-form input::placeholder,
.section-card-grid__card-form textarea::placeholder {
    text-align: inherit;
}

.section-card-grid__card-form .datepicker,
.section-card-grid__card-form input[name*="date"],
.section-card-grid__card-form input[placeholder*="mm/dd/yyyy"],
.section-card-grid__card-form input[placeholder*="MM/DD/YYYY"] {
    text-align: center;
}

.section-card-grid__card-form .datepicker::placeholder,
.section-card-grid__card-form input[name*="date"]::placeholder,
.section-card-grid__card-form input[placeholder*="mm/dd/yyyy"]::placeholder,
.section-card-grid__card-form input[placeholder*="MM/DD/YYYY"]::placeholder {
    text-align: center;
}

.section-card-grid__card-form textarea {
    min-height: 140px;
}

.section-card-grid__card-form .gform_footer {
    display: flex;
    justify-content: center;
    padding: 0 !important;
    margin: 24px 0 0 !important;
}

.section-card-grid__card-form .gform_button,
.section-card-grid__card-form .gform_footer input[type="submit"],
.section-card-grid__card-form .gform_page_footer input[type="submit"] {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 0;
    width: auto;
    height: auto;
    margin: 0 auto !important;
    padding: .75em 1.5em !important;
    border: 1px solid var(--lacc-color-ink, #51534a) !important;
    border-radius: 0 !important;
    background: var(--lacc-color-ink, #51534a) !important;
    background-color: var(--lacc-color-ink, #51534a) !important;
    color: var(--lacc-color-white, #ffffff) !important;
    font-size: 16px !important;
    font-weight: 600 !important;
    line-height: 1 !important;
    letter-spacing: .04em !important;
    text-decoration: none !important;
    box-shadow: none !important;
    transition: all .2s ease;
    cursor: pointer;
    appearance: none;
    -webkit-appearance: none;
}

.section-card-grid__card-form .gform_button:hover,
.section-card-grid__card-form .gform_button:focus,
.section-card-grid__card-form .gform_footer input[type="submit"]:hover,
.section-card-grid__card-form .gform_footer input[type="submit"]:focus,
.section-card-grid__card-form .gform_page_footer input[type="submit"]:hover,
.section-card-grid__card-form .gform_page_footer input[type="submit"]:focus {
    background: #35372f !important;
    background-color: #35372f !important;
    border-color: var(--lacc-color-gold-bright, #f5b62b) !important;
    color: var(--lacc-color-white, #ffffff) !important;
    text-decoration: none !important;
}

.section-card-grid__card-button-wrap {
    display: flex;
    justify-content: var(--scg-card-button-justify, flex-start);
    text-align: var(--scg-card-button-align, left);
    margin-top: 2em;
}

.section-card-grid .section-card-grid__card-button {
    display: inline-flex;
    justify-content: center;
    text-align: center;
    width: auto;
    max-width: 100%;
    min-width: 0;
    margin-top: 0;
    font-size: var(--scg-card-cta-font-size, var(--scg-cta-font-size, 16px));
    padding: var(--scg-card-cta-padding, var(--scg-cta-padding, .85em 1.45em));
    letter-spacing: var(--scg-card-cta-letter-spacing, var(--scg-cta-letter-spacing, .04em));
}

.section-card-grid .section-card-grid__card--pricing .section-card-grid__card-button-wrap {
    width: 100%;
}

.section-card-grid .section-card-grid__card--pricing .section-card-grid__card-button {
    display: flex !important;
    flex: 1 1 100%;
    width: 100% !important;
    max-width: none;
    min-height: var(--scg-pricing-button-min-height, 54px);
}

.section-card-grid .section-card-grid__card--preset-pricing-tier.section-card-grid__card--pricing .section-card-grid__card-button {
    font-size: 16px;
    padding: .85em 1.45em;
    letter-spacing: .04em;
    min-height: 0;
}
</style>

<?php $section_intro_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $section_intro ) : $section_intro; ?>
<script>
(function(){
    function initCarousel(wrap) {
        var slides = wrap.querySelectorAll('.section-card-grid__card-carousel-slide');
        var dots   = wrap.querySelectorAll('.section-card-grid__card-carousel-dot');
        var prev   = wrap.querySelector('[data-scg-carousel-prev]');
        var next   = wrap.querySelector('[data-scg-carousel-next]');
        if (!slides.length) return;
        var current = 0;
        function go(n) {
            slides[current].classList.remove('is-active');
            if (dots[current]) dots[current].classList.remove('is-active');
            current = (n + slides.length) % slides.length;
            slides[current].classList.add('is-active');
            if (dots[current]) dots[current].classList.add('is-active');
        }
        if (prev) prev.addEventListener('click', function(){ go(current - 1); });
        if (next) next.addEventListener('click', function(){ go(current + 1); });
    }
    function init() {
        document.querySelectorAll('[data-scg-carousel]').forEach(function(w){ initCarousel(w); });
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
</script>


<section<?php echo $section_anchor_id ? ' id="' . esc_attr( $section_anchor_id ) . '"' : ''; ?> class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>"<?php echo $section_styles ? ' style="' . esc_attr( implode( ';', $section_styles ) ) . '"' : ''; ?>>
    <div class="<?php echo esc_attr( $layout_class ); ?>">
        <div class="section-card-grid__inner">
        <?php if ( $section_eyebrow || $section_heading || $section_intro || ( $section_button_label && $section_button_url ) ) : ?>
            <div class="section-card-grid__header" style="<?php echo esc_attr( $header_style_attr ); ?>;"
                <?php if ( $section_eyebrow ) : ?>
                    <span class="section-card-grid__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                <?php endif; ?>
                <?php if ( $section_heading ) : ?>
                    <h2><?php echo wp_kses( $section_heading, $allowed_heading_html ); ?></h2>
                <?php endif; ?>
                <?php if ( $section_intro ) : ?>
                    <div class="section-card-grid__intro"><?php echo $section_intro_output; ?></div>
                <?php endif; ?>
                <?php if ( $section_button_label && $section_button_url ) : ?>
                    <div class="section-card-grid__intro-cta">
                        <a class="hero-button hero-button--<?php echo esc_attr( $section_button_style ); ?>" href="<?php echo esc_url( $section_button_url ); ?>"><?php echo esc_html( $section_button_label ); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ( is_array( $cards_data ) && ! empty( $cards_data ) ) : ?>
            <div class="section-card-grid__cards-row">
                <?php foreach ( $cards_data as $card_index => $card_item ) : ?>
                    <?php
                    $card_width = $card_item['card_desktop_width'] ?? '4';
                    if ( $card_render_width ) {
                        $card_width = $card_render_width;
                    }
                    $card_offset = $card_item['card_desktop_offset'] ?? '';
                    $card_heading = $card_item['card_heading'] ?? '';
                    $card_heading_tag = strtolower( trim( (string) ( $card_item['card_heading_tag'] ?? 'h3' ) ) );
                    $card_heading_tag = in_array( $card_heading_tag, $allowed_card_heading_tags, true ) ? $card_heading_tag : 'h3';
                    $card_badge = trim( (string) ( $card_item['card_badge'] ?? '' ) );
                    $card_heading_align = $card_item['card_heading_align'] ?? 'left';
                    $card_body = $card_item['card_body'] ?? '';
                    $card_gravity_form_id = absint( $card_item['card_gravity_form_id'] ?? 0 );
                    $card_image = $card_item['card_image'] ?? null;
                    $card_images = isset( $card_item['card_images'] ) && is_array( $card_item['card_images'] ) ? $card_item['card_images'] : array();
                    $card_button_label = $card_item['card_button_label'] ?? '';
                    $card_button_url = $card_item['card_button_url'] ?? '';
                    $card_button_style = strtolower( str_replace( '_', '-', trim( (string) ( $card_item['card_button_style'] ?? '' ) ) ) );
                    $card_button_style = in_array( $card_button_style, $allowed_button_styles, true ) ? $card_button_style : 'primary';
                    $card_style_preset = strtolower( trim( (string) ( $card_item['card_style_preset'] ?? 'auto' ) ) );
                    $card_style_preset = in_array( $card_style_preset, $allowed_card_style_presets, true ) ? $card_style_preset : 'auto';
                    $card_style_preset = $resolve_card_style_preset( $card_style_preset, $card_width, $card_index, $card_visual_system );
                    $card_label_treatment = strtolower( trim( (string) ( $card_item['card_label_treatment'] ?? 'auto' ) ) );
                    $card_label_treatment = in_array( $card_label_treatment, $allowed_card_label_treatments, true ) ? $card_label_treatment : 'auto';
                    $card_label_treatment = $resolve_card_label_treatment( $card_label_treatment, '' !== $card_badge, $card_visual_system, $card_style_preset );
                    $is_pricing_card = false !== stripos( (string) $card_body, 'lacc-pkg-price' )
                        || false !== stripos( (string) $card_body, 'pkg-price' )
                        || false !== stripos( (string) $card_body, 'lacc-pricing-price' )
                        || false !== stripos( (string) $card_body, 'lacc-pricing-tier' )
                        || 'pricing-tier' === $card_style_preset;
                    $card_badge_color_map = array(
                        'primary' => 'var(--lacc-color-ink, #51534a)',
                        'secondary' => 'var(--lacc-color-action-primary, #3f5f85)',
                        'gold-text' => 'var(--lacc-color-accent-old-gold, #7a5a1f)',
                        'ink' => 'var(--lacc-color-ink, #51534a)',
                        'outline-ink' => 'var(--lacc-color-ink, #51534a)',
                        'brown' => 'var(--lacc-color-accent-old-gold, #7a5a1f)',
                        'light' => 'var(--lacc-color-cream, #f6f3ed)',
                        'outline' => 'var(--lacc-color-white, #ffffff)',
                        'outline-dark' => 'var(--lacc-color-ink, #51534a)',
                        'outline-gold' => 'var(--lacc-color-accent-gold, #d4a441)'
                    );
                    $card_badge_bg = isset( $card_badge_color_map[ $card_button_style ] ) ? $card_badge_color_map[ $card_button_style ] : 'var(--lacc-color-gold-soft, #946E29)';
                    $card_badge_text_color = 'light' === $card_button_style ? 'var(--lacc-color-ink, #51534a)' : 'var(--lacc-color-white, #ffffff)';
                    $resolved_card_badge_bg = $card_badge_fill_color ?: $card_badge_bg;
                    $resolved_card_badge_text = $card_badge_type_color ?: $card_badge_text_color;
                    $col_num = '15' === (string) $card_width ? '15' : preg_replace( '/[^0-9]/', '', (string) $card_width );
                    $col_percent = '15' === $col_num ? '20%' : round( (int) $col_num / 12 * 100, 4 ) . '%';
                    $col_offset_num = ( $card_offset && '15' !== $col_num ) ? preg_replace( '/[^0-9]/', '', (string) $card_offset ) : '';
                    $col_inline = '--scg-col-width:' . $col_percent . ';' . ( $col_offset_num ? '--scg-col-offset:' . round( (int) $col_offset_num / 12 * 100, 4 ) . '%;' : '' );
                    $card_class_list = array(
                        'section-card-grid__card',
                        'section-card-grid__card--align-' . $card_heading_align,
                        'section-card-grid__card--preset-' . sanitize_html_class( $card_style_preset ),
                    );
                    if ( $is_pricing_card ) {
                        $card_class_list[] = 'section-card-grid__card--pricing';
                    }
                    $has_flag_badge = $card_badge && 'flag' === $card_label_treatment && ! $is_pricing_card;
                    $has_pricing_tier_badge = $is_pricing_card && ! empty( $card_badge );
                    $card_class_list[] = ( $has_flag_badge || $has_pricing_tier_badge ) ? 'section-card-grid__card--has-badge' : 'section-card-grid__card--no-badge';
                    $card_copy_class = $is_pricing_card ? 'section-card-grid__card-copy section-card-grid__card-copy--pricing' : 'section-card-grid__card-copy';
                    $card_body_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $card_body ) : $card_body;
                    ?>
                    <div class="section-card-grid__card-column" data-scg-col="<?php echo esc_attr( $col_num ); ?>" style="<?php echo esc_attr( $col_inline ); ?>">
                        <div class="<?php echo esc_attr( implode( ' ', $card_class_list ) ); ?>">
                            <?php if ( $has_flag_badge ) : ?>
                                <div class="section-card-grid__card-badge-wrap">
                                    <span class="section-card-grid__card-badge section-card-grid__card-badge--flag" style="--scg-badge-bg: <?php echo esc_attr( $resolved_card_badge_bg ); ?>; --scg-badge-text: <?php echo esc_attr( $resolved_card_badge_text ); ?>;"><?php echo esc_html( $card_badge ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php
                            $use_carousel = count( $card_images ) > 1;
                            $carousel_id  = 'scg-carousel-' . $card_index . '-' . absint( get_the_ID() );
                            if ( $use_carousel ) : ?>
                                <div class="section-card-grid__card-carousel" id="<?php echo esc_attr( $carousel_id ); ?>" data-scg-carousel>
                                    <div class="section-card-grid__card-carousel-slides">
                                        <?php foreach ( $card_images as $ci => $ci_item ) :
                                            $ci_img = $ci_item['image'] ?? $ci_item;
                                            $ci_url = is_array( $ci_img ) ? ( $ci_img['url'] ?? '' ) : (string) $ci_img;
                                            $ci_alt = $ci_item['alt'] ?? ( is_array( $ci_img ) ? ( $ci_img['alt'] ?? '' ) : '' );
                                            if ( ! $ci_url ) continue;
                                        ?>
                                            <div class="section-card-grid__card-carousel-slide<?php echo 0 === $ci ? ' is-active' : ''; ?>">
                                                <img src="<?php echo esc_url( $ci_url ); ?>" alt="<?php echo esc_attr( $ci_alt ); ?>" loading="<?php echo 0 === $ci ? 'eager' : 'lazy'; ?>" class="skip-lazy" data-no-lazy="1">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="section-card-grid__card-carousel-controls">
                                        <button type="button" class="section-card-grid__card-carousel-btn section-card-grid__card-carousel-btn--prev" data-scg-carousel-prev aria-label="Previous image">
                                            <svg viewBox="0 0 40 40" aria-hidden="true"><path d="M8 20 H28"/><path d="M17 11 L8 20 L17 29"/><path d="M26 11 L17 20 L26 29"/></svg>
                                        </button>
                                        <div class="section-card-grid__card-carousel-meta">
                                            <div class="section-card-grid__card-carousel-dots">
                                                <?php foreach ( $card_images as $ci => $_ ) : ?>
                                                    <span class="section-card-grid__card-carousel-dot<?php echo 0 === $ci ? ' is-active' : ''; ?>"></span>
                                                <?php endforeach; ?>
                                            </div>
                                            <span><?php echo count( $card_images ); ?> views</span>
                                        </div>
                                        <button type="button" class="section-card-grid__card-carousel-btn section-card-grid__card-carousel-btn--next" data-scg-carousel-next aria-label="Next image">
                                            <svg viewBox="0 0 40 40" aria-hidden="true"><path d="M8 20 H28"/><path d="M17 11 L8 20 L17 29"/><path d="M26 11 L17 20 L26 29"/></svg>
                                        </button>
                                    </div>
                                </div>
                            <?php elseif ( ! empty( $card_image['url'] ) ) : ?>
                                <div class="section-card-grid__card-image">
                                    <img src="<?php echo esc_url( $card_image['url'] ); ?>" alt="<?php echo esc_attr( $card_image['alt'] ); ?>" class="skip-lazy" data-no-lazy="1">
                                    <?php if ( 'specials-card' === $card_style_preset && $card_heading ) : ?>
                                        <div class="section-card-grid__card-image-overlay">
                                            <<?php echo esc_attr( $card_heading_tag ); ?> class="section-card-grid__card-title"><?php echo esc_html( $card_heading ); ?></<?php echo esc_attr( $card_heading_tag ); ?>>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="section-card-grid__card-body">
                                <?php if ( $is_pricing_card ) : ?>
                                    <div class="section-card-grid__card-tier-lane" aria-hidden="true">
                                        <?php if ( $has_pricing_tier_badge ) : ?>
                                            <div class="section-card-grid__card-tier-badge section-card-grid__card-badge--featured"><?php echo esc_html( $card_badge ); ?></div>
                                        <?php else : ?>
                                            <div class="section-card-grid__card-tier-badge-spacer"></div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $card_badge && 'eyebrow' === $card_label_treatment && ! $is_pricing_card ) : ?>
                                    <span class="section-card-grid__card-eyebrow"><?php echo esc_html( $card_badge ); ?></span>
                                <?php endif; ?>
                                <?php if ( $card_heading && 'specials-card' !== $card_style_preset ) : ?>
                                    <<?php echo esc_attr( $card_heading_tag ); ?> class="section-card-grid__card-title"><?php echo esc_html( $card_heading ); ?></<?php echo esc_attr( $card_heading_tag ); ?>>
                                <?php endif; ?>
                                <?php if ( $card_body ) : ?>
                                    <div class="<?php echo esc_attr( $card_copy_class ); ?>"><?php echo $card_body_output; ?></div>
                                <?php endif; ?>
                                <?php if ( $card_gravity_form_id && function_exists( 'gravity_form' ) ) : ?>
                                    <div class="section-card-grid__card-form">
                                        <?php gravity_form( $card_gravity_form_id, false, false, false, null, true ); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $card_button_label && $card_button_url ) : ?>
                                    <div class="section-card-grid__card-button-wrap">
                                        <a class="hero-button hero-button--<?php echo esc_attr( $card_button_style ); ?> section-card-grid__card-button" href="<?php echo esc_url( $card_button_url ); ?>"><?php echo esc_html( $card_button_label ); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php elseif ( have_rows( 'cards' ) ) : ?>
            <div class="section-card-grid__cards-row">
                <?php $card_index = 0; ?>
                <?php while ( have_rows( 'cards' ) ) : the_row(); ?>
                    <?php
                    $card_width = get_sub_field( 'card_desktop_width' ) ?: '4';
                    if ( $card_render_width ) {
                        $card_width = $card_render_width;
                    }
                    $card_offset = get_sub_field( 'card_desktop_offset' );
                    $card_heading = get_sub_field( 'card_heading' );
                    $card_heading_tag = strtolower( trim( (string) get_sub_field( 'card_heading_tag' ) ) );
                    $card_heading_tag = in_array( $card_heading_tag, $allowed_card_heading_tags, true ) ? $card_heading_tag : 'h3';
                    $card_badge = trim( (string) get_sub_field( 'card_badge' ) );
                    $card_heading_align = get_sub_field( 'card_heading_align' ) ?: 'left';
                    $card_body = get_sub_field( 'card_body' );
                    $card_gravity_form_id = absint( get_sub_field( 'card_gravity_form_id' ) );
                    $card_image = get_sub_field( 'card_image' );
                    $card_images_raw = get_sub_field( 'card_images' );
                    $card_images = is_array( $card_images_raw ) ? $card_images_raw : array();
                    $card_button_label = get_sub_field( 'card_button_label' );
                    $card_button_url = get_sub_field( 'card_button_url' );
                    $card_button_style = strtolower( str_replace( '_', '-', trim( (string) get_sub_field( 'card_button_style' ) ) ) );
                    $card_button_style = in_array( $card_button_style, $allowed_button_styles, true ) ? $card_button_style : 'primary';
                    $card_style_preset = strtolower( trim( (string) get_sub_field( 'card_style_preset' ) ) );
                    $card_style_preset = in_array( $card_style_preset, $allowed_card_style_presets, true ) ? $card_style_preset : 'auto';
                    $card_style_preset = $resolve_card_style_preset( $card_style_preset, $card_width, $card_index, $card_visual_system );
                    $card_label_treatment = strtolower( trim( (string) get_sub_field( 'card_label_treatment' ) ) );
                    $card_label_treatment = in_array( $card_label_treatment, $allowed_card_label_treatments, true ) ? $card_label_treatment : 'auto';
                    $card_label_treatment = $resolve_card_label_treatment( $card_label_treatment, '' !== $card_badge, $card_visual_system, $card_style_preset );
                    $is_pricing_card = false !== stripos( (string) $card_body, 'lacc-pkg-price' )
                        || false !== stripos( (string) $card_body, 'pkg-price' )
                        || false !== stripos( (string) $card_body, 'lacc-pricing-price' )
                        || false !== stripos( (string) $card_body, 'lacc-pricing-tier' )
                        || 'pricing-tier' === $card_style_preset;
                    $card_badge_color_map = array(
                        'primary' => 'var(--lacc-color-ink, #51534a)',
                        'secondary' => 'var(--lacc-color-action-primary, #3f5f85)',
                        'gold-text' => 'var(--lacc-color-accent-old-gold, #7a5a1f)',
                        'ink' => 'var(--lacc-color-ink, #51534a)',
                        'outline-ink' => 'var(--lacc-color-ink, #51534a)',
                        'brown' => 'var(--lacc-color-accent-old-gold, #7a5a1f)',
                        'light' => 'var(--lacc-color-cream, #f6f3ed)',
                        'outline' => 'var(--lacc-color-white, #ffffff)',
                        'outline-dark' => 'var(--lacc-color-ink, #51534a)',
                        'outline-gold' => 'var(--lacc-color-accent-gold, #d4a441)'
                    );
                    $card_badge_bg = isset( $card_badge_color_map[ $card_button_style ] ) ? $card_badge_color_map[ $card_button_style ] : 'var(--lacc-color-gold-soft, #946E29)';
                    $card_badge_text_color = 'light' === $card_button_style ? 'var(--lacc-color-ink, #51534a)' : 'var(--lacc-color-white, #ffffff)';
                    $resolved_card_badge_bg = $card_badge_fill_color ?: $card_badge_bg;
                    $resolved_card_badge_text = $card_badge_type_color ?: $card_badge_text_color;
                    $col_num = '15' === (string) $card_width ? '15' : preg_replace( '/[^0-9]/', '', (string) $card_width );
                    $col_percent = '15' === $col_num ? '20%' : round( (int) $col_num / 12 * 100, 4 ) . '%';
                    $col_offset_num = ( $card_offset && '15' !== $col_num ) ? preg_replace( '/[^0-9]/', '', (string) $card_offset ) : '';
                    $col_inline = '--scg-col-width:' . $col_percent . ';' . ( $col_offset_num ? '--scg-col-offset:' . round( (int) $col_offset_num / 12 * 100, 4 ) . '%;' : '' );
                    $card_class_list = array(
                        'section-card-grid__card',
                        'section-card-grid__card--align-' . $card_heading_align,
                        'section-card-grid__card--preset-' . sanitize_html_class( $card_style_preset ),
                    );
                    if ( $is_pricing_card ) {
                        $card_class_list[] = 'section-card-grid__card--pricing';
                    }
                    $has_flag_badge = $card_badge && 'flag' === $card_label_treatment && ! $is_pricing_card;
                    $has_pricing_tier_badge = $is_pricing_card && ! empty( $card_badge );
                    $card_class_list[] = ( $has_flag_badge || $has_pricing_tier_badge ) ? 'section-card-grid__card--has-badge' : 'section-card-grid__card--no-badge';
                    $card_copy_class = $is_pricing_card ? 'section-card-grid__card-copy section-card-grid__card-copy--pricing' : 'section-card-grid__card-copy';
                    $card_body_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $card_body ) : $card_body;
                    $use_carousel = count( $card_images ) > 1;
                    $carousel_id = 'scg-carousel-' . $card_index . '-' . absint( get_the_ID() );
                    ?>
                    <div class="section-card-grid__card-column" data-scg-col="<?php echo esc_attr( $col_num ); ?>" style="<?php echo esc_attr( $col_inline ); ?>">
                        <div class="<?php echo esc_attr( implode( ' ', $card_class_list ) ); ?>">
                            <?php if ( $has_flag_badge ) : ?>
                                <div class="section-card-grid__card-badge-wrap">
                                    <span class="section-card-grid__card-badge section-card-grid__card-badge--flag" style="--scg-badge-bg: <?php echo esc_attr( $resolved_card_badge_bg ); ?>; --scg-badge-text: <?php echo esc_attr( $resolved_card_badge_text ); ?>;"><?php echo esc_html( $card_badge ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ( $use_carousel ) : ?>
                                <div class="section-card-grid__card-carousel" id="<?php echo esc_attr( $carousel_id ); ?>" data-scg-carousel>
                                    <div class="section-card-grid__card-carousel-slides">
                                        <?php foreach ( $card_images as $ci => $ci_item ) :
                                            $ci_img = $ci_item['image'] ?? $ci_item;
                                            $ci_url = is_array( $ci_img ) ? ( $ci_img['url'] ?? '' ) : (string) $ci_img;
                                            $ci_alt = $ci_item['alt'] ?? ( is_array( $ci_img ) ? ( $ci_img['alt'] ?? '' ) : '' );
                                            if ( ! $ci_url ) continue;
                                        ?>
                                            <div class="section-card-grid__card-carousel-slide<?php echo 0 === $ci ? ' is-active' : ''; ?>">
                                                <img src="<?php echo esc_url( $ci_url ); ?>" alt="<?php echo esc_attr( $ci_alt ); ?>" loading="<?php echo 0 === $ci ? 'eager' : 'lazy'; ?>" class="skip-lazy" data-no-lazy="1">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="section-card-grid__card-carousel-controls">
                                        <button type="button" class="section-card-grid__card-carousel-btn section-card-grid__card-carousel-btn--prev" data-scg-carousel-prev aria-label="Previous image">
                                            <svg viewBox="0 0 40 40" aria-hidden="true"><path d="M8 20 H28"/><path d="M17 11 L8 20 L17 29"/><path d="M26 11 L17 20 L26 29"/></svg>
                                        </button>
                                        <div class="section-card-grid__card-carousel-meta">
                                            <div class="section-card-grid__card-carousel-dots">
                                                <?php foreach ( $card_images as $ci => $_ ) : ?>
                                                    <span class="section-card-grid__card-carousel-dot<?php echo 0 === $ci ? ' is-active' : ''; ?>"></span>
                                                <?php endforeach; ?>
                                            </div>
                                            <span><?php echo count( $card_images ); ?> views</span>
                                        </div>
                                        <button type="button" class="section-card-grid__card-carousel-btn section-card-grid__card-carousel-btn--next" data-scg-carousel-next aria-label="Next image">
                                            <svg viewBox="0 0 40 40" aria-hidden="true"><path d="M8 20 H28"/><path d="M17 11 L8 20 L17 29"/><path d="M26 11 L17 20 L26 29"/></svg>
                                        </button>
                                    </div>
                                </div>
                            <?php elseif ( ! empty( $card_image['url'] ) ) : ?>
                                <div class="section-card-grid__card-image">
                                    <img src="<?php echo esc_url( $card_image['url'] ); ?>" alt="<?php echo esc_attr( $card_image['alt'] ); ?>" class="skip-lazy" data-no-lazy="1">
                                    <?php if ( 'specials-card' === $card_style_preset && $card_heading ) : ?>
                                        <div class="section-card-grid__card-image-overlay">
                                            <<?php echo esc_attr( $card_heading_tag ); ?> class="section-card-grid__card-title"><?php echo esc_html( $card_heading ); ?></<?php echo esc_attr( $card_heading_tag ); ?>>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="section-card-grid__card-body">
                                <?php if ( $is_pricing_card ) : ?>
                                    <div class="section-card-grid__card-tier-lane" aria-hidden="true">
                                        <?php if ( $has_pricing_tier_badge ) : ?>
                                            <div class="section-card-grid__card-tier-badge section-card-grid__card-badge--featured"><?php echo esc_html( $card_badge ); ?></div>
                                        <?php else : ?>
                                            <div class="section-card-grid__card-tier-badge-spacer"></div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $card_badge && 'eyebrow' === $card_label_treatment && ! $is_pricing_card ) : ?>
                                    <span class="section-card-grid__card-eyebrow"><?php echo esc_html( $card_badge ); ?></span>
                                <?php endif; ?>
                                <?php if ( $card_heading && 'specials-card' !== $card_style_preset ) : ?>
                                    <<?php echo esc_attr( $card_heading_tag ); ?> class="section-card-grid__card-title"><?php echo esc_html( $card_heading ); ?></<?php echo esc_attr( $card_heading_tag ); ?>>
                                <?php endif; ?>
                                <?php if ( $card_body ) : ?>
                                    <div class="<?php echo esc_attr( $card_copy_class ); ?>"><?php echo $card_body_output; ?></div>
                                <?php endif; ?>
                                <?php
                                $card_amenity_pills = get_sub_field( 'card_amenity_pills' );
                                if ( is_array( $card_amenity_pills ) && ! empty( $card_amenity_pills ) ) :
                                ?>
                                    <div class="section-card-grid__card-amenity-pills">
                                        <?php foreach ( $card_amenity_pills as $pill_item ) :
                                            $pill_text = trim( (string) ( $pill_item['pill_text'] ?? '' ) );
                                            if ( ! $pill_text ) continue;
                                        ?>
                                            <span class="section-card-grid__card-amenity-pill"><?php echo esc_html( $pill_text ); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $card_gravity_form_id && function_exists( 'gravity_form' ) ) : ?>
                                    <div class="section-card-grid__card-form">
                                        <?php gravity_form( $card_gravity_form_id, false, false, false, null, true ); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $card_button_label && $card_button_url ) : ?>
                                    <div class="section-card-grid__card-button-wrap">
                                        <a class="hero-button hero-button--<?php echo esc_attr( $card_button_style ); ?> section-card-grid__card-button" href="<?php echo esc_url( $card_button_url ); ?>"><?php echo esc_html( $card_button_label ); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $card_index++; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if ( $section_bottom_button_label && $section_bottom_button_url ) : ?>
            <div class="section-card-grid__bottom-cta">
                <a class="hero-button hero-button--<?php echo esc_attr( $section_bottom_button_style ); ?>" href="<?php echo esc_url( $section_bottom_button_url ); ?>"><?php echo esc_html( $section_bottom_button_label ); ?></a>
            </div>
        <?php endif; ?>

        <?php if ( $post_grid_content ) : ?>
            <div class="section-card-grid__post-content">
                <?php echo $post_grid_content; ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>
