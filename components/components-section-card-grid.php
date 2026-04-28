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
$card_background_gradient = trim( (string) $get_card_grid_field( 'card_background_gradient' ) );
$card_border_color = trim( (string) $get_card_grid_field( 'card_border_color' ) );
$card_badge_variant = strtolower( trim( (string) $get_card_grid_field( 'card_badge_variant' ) ) );
$card_badge_alignment = strtolower( trim( (string) $get_card_grid_field( 'card_badge_alignment' ) ) );
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

if ( ! in_array( $heading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $heading_font_family = 'haarlem';
}

if ( ! in_array( $heading_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $heading_font_weight = 'freight-big-pro' === $heading_font_family ? '400' : '600';
}

if ( ! in_array( $heading_size, array( 'default', 'xxl' ), true ) ) {
    $heading_size = 'default';
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

$heading_font_stack = 'freight-big-pro' === $heading_font_family ? '"Freight Big Pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$subheading_font_stack = 'freight-big-pro' === $subheading_font_family ? '"Freight Big Pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$card_heading_font_stack = 'freight-big-pro' === $card_heading_font_family ? '"Freight Big Pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$eyebrow_font_stack = 'freight-big-pro' === $eyebrow_font_family ? '"Freight Big Pro", Georgia, serif' : ( 'haarlem' === $eyebrow_font_family ? 'HaarlemDeco, Arial, Helvetica, sans-serif' : 'inherit' );
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
$eyebrow_color = $eyebrow_color ?: 'var(--lacc-color-sky)';
$eyebrow_background_color = $eyebrow_background_color ?: 'transparent';
$eyebrow_border = $eyebrow_border ?: '0';
$eyebrow_padding = $eyebrow_padding ?: '0';
$eyebrow_font_size = $eyebrow_font_size ?: '12px';
$eyebrow_border_radius = $eyebrow_border_radius ?: '0';
$section_intro_spacing_bottom = $section_intro_spacing_bottom ?: '40px';
$card_padding = $card_padding ?: '24px';
$card_padding_top = $card_padding_top ?: $card_padding;
$card_padding_bottom = $card_padding_bottom ?: $card_padding;
$card_gutter = $card_gutter ?: '30px';
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
$cta_text_size = $cta_text_size ?: '13px';
$cta_padding = $cta_padding ?: '.85em 1.45em';
$cta_letter_spacing = $cta_letter_spacing ?: '.08em';
$post_content_max_width = $post_content_max_width ?: '100%';
$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
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
$header_column_class = 'col-md-' . $header_column_width;
$header_column_offset = 0;
if ( (int) $header_column_width < 12 ) {
    if ( 'center' === $content_alignment ) {
        $header_column_offset = (int) floor( ( 12 - (int) $header_column_width ) / 2 );
    } elseif ( 'right' === $content_alignment ) {
        $header_column_offset = 12 - (int) $header_column_width;
    }
}
if ( $header_column_offset > 0 ) {
    $header_column_class .= ' col-md-offset-' . $header_column_offset;
}
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
    '--scg-heading-margin:' . $heading_margin,
    '--scg-intro-max-width:' . $section_intro_max_width,
    '--scg-intro-margin:' . $section_intro_margin,
    '--scg-intro-cta-justify:' . $intro_cta_justify,
    '--scg-bottom-cta-justify:' . $bottom_cta_justify,
    '--scg-bottom-cta-align:' . $section_bottom_button_alignment,
    '--scg-cta-font-size:' . $cta_text_size,
    '--scg-cta-padding:' . $cta_padding,
    '--scg-cta-letter-spacing:' . $cta_letter_spacing,
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
    margin-left: calc(-1 * var(--scg-card-gutter, 30px) / 2);
    margin-right: calc(-1 * var(--scg-card-gutter, 30px) / 2);
}

.section-card-grid .section-card-grid__card-column {
    flex: 0 0 var(--scg-col-width, 33.3333%);
    max-width: var(--scg-col-width, 33.3333%);
    box-sizing: border-box;
    margin-left: var(--scg-col-offset, 0);
    padding-left: calc(var(--scg-card-gutter, 30px) / 2);
    padding-right: calc(var(--scg-card-gutter, 30px) / 2);
}

@media (max-width: 767px) {
    .section-card-grid .section-card-grid__card-column {
        flex: 0 0 100%;
        max-width: 100%;
        margin-left: 0;
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
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 1.72;
}

.section-card-grid--intro-helvetica .section-card-grid__intro,
.section-card-grid--intro-helvetica .section-card-grid__intro p {
    font-family: Arial, Helvetica, sans-serif;
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
    font-family: var(--scg-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif) !important;
    font-weight: var(--scg-heading-weight, 600) !important;
    letter-spacing: var(--scg-heading-letter-spacing, 0.1275rem);
    font-size: var(--scg-heading-size, clamp(40px, 4.8vw, 58px));
    line-height: var(--scg-heading-line-height, 1.05);
    color: var(--scg-heading-color, var(--lacc-color-ink)) !important;
    text-transform: uppercase;
}

.section-card-grid__header h3,
.section-card-grid__header h4,
.section-card-grid__header h5,
.section-card-grid__header h6 {
    font-family: var(--scg-subheading-font, var(--scg-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif)) !important;
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
    font-family: var(--scg-card-heading-font, var(--scg-subheading-font, var(--scg-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif))) !important;
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
    padding: .85em 1.45em;
    border: 1px solid transparent;
    border-radius: 0;
    background-image: none !important;
    text-transform: uppercase;
    letter-spacing: .08em;
    font-size: 13px;
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

.section-card-grid .hero-button--primary:hover,
.section-card-grid .hero-button--primary:focus {
    background: var(--lacc-color-action-primary-hover, #324c6a) !important;
    border-color: var(--lacc-color-action-primary-hover, #324c6a) !important;
    color: var(--lacc-color-action-on-primary, #ffffff) !important;
}

.section-card-grid .hero-button--secondary:hover,
.section-card-grid .hero-button--secondary:focus {
    background: var(--lacc-color-bg-soft, #f6f3ed) !important;
    border-color: var(--lacc-color-action-primary, #3f5f85) !important;
    color: var(--lacc-color-action-primary, #3f5f85) !important;
}

.section-card-grid .hero-button--gold-text:hover,
.section-card-grid .hero-button--gold-text:focus,
.section-card-grid .hero-button--brown:hover,
.section-card-grid .hero-button--brown:focus {
    background: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-card-grid .hero-button--ink:hover,
.section-card-grid .hero-button--ink:focus {
    background: var(--lacc-color-text-strong, #1f221d) !important;
    border-color: var(--lacc-color-text-strong, #1f221d) !important;
    color: var(--lacc-color-text-inverse, #ffffff) !important;
}

.section-card-grid__eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    letter-spacing: .11em;
    font-size: 11px;
    line-height: 1.2;
    color: var(--scg-eyebrow-color, var(--lacc-color-text-primary));
    font-family: var(--scg-eyebrow-font, inherit);
    font-weight: 700;
    text-transform: uppercase;
    background: var(--scg-eyebrow-bg, transparent);
    border: var(--scg-eyebrow-border, 1px solid rgba(81,83,74,0.28));
    padding: 6px 12px;
    border-radius: 0;
}

.section-card-grid__card {
    position: relative;
    background: var(--scg-card-background, rgba(255,255,255,0.96));
    border: var(--scg-card-border, 0);
    height: 100%;
    margin-bottom: 30px;
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
    padding: 12px 18px 12px 22px;
    letter-spacing: .16em;
    clip-path: polygon(0 0, 100% 0, calc(100% - 16px) 50%, 100% 100%, 0 100%);
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

.section-card-grid__card--pricing .section-card-grid__card-body::before {
    content: '';
    position: absolute;
    top: 22px;
    left: 50%;
    width: 100%;
    height: 60px;
    transform: translateX(-50%);
    background-image: url('/wp-content/themes/LACC-sage-theme-master/brand/scrollwork-horizontal.svg');
    background-repeat: no-repeat;
    background-position: center center;
    background-size: auto 60px;
    opacity: 0.35;
    pointer-events: none;
}

.section-card-grid__card--pricing.section-card-grid__card--has-badge .section-card-grid__card-body::before {
    opacity: 0.25;
}

.section-card-grid__card--pricing .section-card-grid__card-body > * {
    position: relative;
    z-index: 1;
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
    font-family: "Freight Big Pro", Georgia, serif !important;
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
    list-style: none !important;
    min-height: 36px;
    padding-top: .5em;
    padding-bottom: .5em;
    border-bottom: 1px solid var(--lacc-list-line-color) !important;
}

.section-card-grid__card-copy ul.lacc-keyline-list > li {
    position: relative;
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
    font-family: var(--scg-card-heading-font, var(--scg-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif)) !important;
    font-weight: var(--scg-card-heading-weight, var(--scg-heading-weight, 600)) !important;
    font-size: var(--scg-card-heading-size, inherit) !important;
    color: var(--scg-card-heading-color, var(--scg-heading-color, var(--lacc-color-ink))) !important;
}

.section-card-grid--freight-italic-medium h2,
.section-card-grid--freight-italic-medium .section-card-grid__header h3,
.section-card-grid--freight-italic-medium .section-card-grid__header h4,
.section-card-grid--freight-italic-medium .section-card-grid__card-title,
.section-card-grid--freight-italic-medium .section-card-grid__card-title a,
.section-card-grid--freight-italic-medium .section-card-grid__intro,
.section-card-grid--freight-italic-medium .section-card-grid__intro p {
    font-family: "Freight Big Pro", Georgia, serif !important;
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
    font-family: "Freight Big Pro", Georgia, serif !important;
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
    font-size: 16px;
    padding: .75em 1.5em;
    letter-spacing: .04em;
}

.section-card-grid .section-card-grid__card--pricing .section-card-grid__card-button-wrap {
    width: 100%;
}

.section-card-grid .section-card-grid__card--pricing .section-card-grid__card-button {
    display: flex !important;
    flex: 1 1 100%;
    width: 100% !important;
    max-width: none;
    min-height: 54px;
    background: var(--lacc-color-accent-gold, #d4a441) !important;
    border-color: var(--lacc-color-accent-gold, #d4a441) !important;
    color: var(--lacc-color-white, #ffffff) !important;
    font-size: 13px;
    letter-spacing: .12em;
}

.section-card-grid .section-card-grid__card--pricing .section-card-grid__card-button:hover,
.section-card-grid .section-card-grid__card--pricing .section-card-grid__card-button:focus {
    background: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
    color: var(--lacc-color-white, #ffffff) !important;
}
</style>

<?php $section_intro_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $section_intro ) : $section_intro; ?>

<section<?php echo $section_anchor_id ? ' id="' . esc_attr( $section_anchor_id ) . '"' : ''; ?> class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>"<?php echo $section_styles ? ' style="' . esc_attr( implode( ';', $section_styles ) ) . '"' : ''; ?>>
    <div class="<?php echo esc_attr( $container_type ); ?>">
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
                <?php foreach ( $cards_data as $card_item ) : ?>
                    <?php
                    $card_width = $card_item['card_desktop_width'] ?? '4';
                    $card_offset = $card_item['card_desktop_offset'] ?? '';
                    $card_heading = $card_item['card_heading'] ?? '';
                    $card_badge = trim( (string) ( $card_item['card_badge'] ?? '' ) );
                    $card_heading_align = $card_item['card_heading_align'] ?? 'left';
                    $card_body = $card_item['card_body'] ?? '';
                    $card_gravity_form_id = absint( $card_item['card_gravity_form_id'] ?? 0 );
                    $card_image = $card_item['card_image'] ?? null;
                    $card_button_label = $card_item['card_button_label'] ?? '';
                    $card_button_url = $card_item['card_button_url'] ?? '';
                    $card_button_style = strtolower( str_replace( '_', '-', trim( (string) ( $card_item['card_button_style'] ?? '' ) ) ) );
                    $card_button_style = in_array( $card_button_style, $allowed_button_styles, true ) ? $card_button_style : 'primary';
                    $is_pricing_card = false !== stripos( (string) $card_body, 'lacc-pkg-price' )
                        || false !== stripos( (string) $card_body, 'pkg-price' )
                        || false !== stripos( (string) $card_body, 'lacc-pricing-price' )
                        || false !== stripos( (string) $card_body, 'lacc-pricing-tier' );
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
                    $card_class_list = array( 'section-card-grid__card', 'section-card-grid__card--align-' . $card_heading_align );
                    if ( $is_pricing_card ) {
                        $card_class_list[] = 'section-card-grid__card--pricing';
                    }
                    $card_class_list[] = $card_badge ? 'section-card-grid__card--has-badge' : 'section-card-grid__card--no-badge';
                    $card_copy_class = $is_pricing_card ? 'section-card-grid__card-copy section-card-grid__card-copy--pricing' : 'section-card-grid__card-copy';
                    $card_body_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $card_body ) : $card_body;
                    ?>
                    <div class="section-card-grid__card-column" style="<?php echo esc_attr( $col_inline ); ?>">
                        <div class="<?php echo esc_attr( implode( ' ', $card_class_list ) ); ?>">
                            <?php if ( $card_badge ) : ?>
                                <div class="section-card-grid__card-badge-wrap">
                                    <span class="section-card-grid__card-badge section-card-grid__card-badge--<?php echo esc_attr( $card_badge_variant ); ?>" style="--scg-badge-bg: <?php echo esc_attr( $resolved_card_badge_bg ); ?>; --scg-badge-text: <?php echo esc_attr( $resolved_card_badge_text ); ?>;"><?php echo esc_html( $card_badge ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $card_image['url'] ) ) : ?>
                                <div class="section-card-grid__card-image">
                                    <img class="img-responsive" src="<?php echo esc_url( $card_image['url'] ); ?>" alt="<?php echo esc_attr( $card_image['alt'] ); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="section-card-grid__card-body">
                                <?php if ( $card_heading ) : ?>
                                    <h3 class="section-card-grid__card-title"><?php echo esc_html( $card_heading ); ?></h3>
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
                <?php while ( have_rows( 'cards' ) ) : the_row(); ?>
                    <?php
                    $card_width = get_sub_field( 'card_desktop_width' ) ?: '4';
                    $card_offset = get_sub_field( 'card_desktop_offset' );
                    $card_heading = get_sub_field( 'card_heading' );
                    $card_badge = trim( (string) get_sub_field( 'card_badge' ) );
                    $card_heading_align = get_sub_field( 'card_heading_align' ) ?: 'left';
                    $card_body = get_sub_field( 'card_body' );
                    $card_gravity_form_id = absint( get_sub_field( 'card_gravity_form_id' ) );
                    $card_image = get_sub_field( 'card_image' );
                    $card_button_label = get_sub_field( 'card_button_label' );
                    $card_button_url = get_sub_field( 'card_button_url' );
                    $card_button_style = strtolower( str_replace( '_', '-', trim( (string) get_sub_field( 'card_button_style' ) ) ) );
                    $card_button_style = in_array( $card_button_style, $allowed_button_styles, true ) ? $card_button_style : 'primary';
                    $is_pricing_card = false !== stripos( (string) $card_body, 'lacc-pkg-price' )
                        || false !== stripos( (string) $card_body, 'pkg-price' )
                        || false !== stripos( (string) $card_body, 'lacc-pricing-price' )
                        || false !== stripos( (string) $card_body, 'lacc-pricing-tier' );
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
                    $card_class_list = array( 'section-card-grid__card', 'section-card-grid__card--align-' . $card_heading_align );
                    if ( $is_pricing_card ) {
                        $card_class_list[] = 'section-card-grid__card--pricing';
                    }
                    $card_class_list[] = $card_badge ? 'section-card-grid__card--has-badge' : 'section-card-grid__card--no-badge';
                    $card_copy_class = $is_pricing_card ? 'section-card-grid__card-copy section-card-grid__card-copy--pricing' : 'section-card-grid__card-copy';
                    $card_body_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $card_body ) : $card_body;
                    ?>
                    <div class="section-card-grid__card-column" style="<?php echo esc_attr( $col_inline ); ?>">
                        <div class="<?php echo esc_attr( implode( ' ', $card_class_list ) ); ?>">
                            <?php if ( $card_badge ) : ?>
                                <div class="section-card-grid__card-badge-wrap">
                                    <span class="section-card-grid__card-badge section-card-grid__card-badge--<?php echo esc_attr( $card_badge_variant ); ?>" style="--scg-badge-bg: <?php echo esc_attr( $resolved_card_badge_bg ); ?>; --scg-badge-text: <?php echo esc_attr( $resolved_card_badge_text ); ?>;"><?php echo esc_html( $card_badge ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $card_image['url'] ) ) : ?>
                                <div class="section-card-grid__card-image">
                                    <img class="img-responsive" src="<?php echo esc_url( $card_image['url'] ); ?>" alt="<?php echo esc_attr( $card_image['alt'] ); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="section-card-grid__card-body">
                                <?php if ( $card_heading ) : ?>
                                    <h3 class="section-card-grid__card-title"><?php echo esc_html( $card_heading ); ?></h3>
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
