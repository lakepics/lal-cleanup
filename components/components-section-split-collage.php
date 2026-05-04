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
$container_type = trim( (string) $get_split_collage_field( 'container_type' ) );
$background_color = trim( (string) $get_split_collage_field( 'background_color' ) );
$background_image = $get_split_collage_field( 'background_image' );
$background_gradient = trim( (string) $get_split_collage_field( 'background_gradient' ) );
$background_vertical_position = trim( (string) $get_split_collage_field( 'background_vertical_position' ) );
$background_parallax = $get_split_collage_field( 'background_parallax' );
$use_scrollwork = $get_split_collage_field( 'use_scrollwork' );
$scrollwork_side = trim( (string) $get_split_collage_field( 'scrollwork_side' ) );
$scrollwork_color = trim( (string) $get_split_collage_field( 'scrollwork_color' ) );
$padding_top = trim( (string) $get_split_collage_field( 'padding_top' ) );
$padding_bottom = trim( (string) $get_split_collage_field( 'padding_bottom' ) );
$image_position = strtolower( trim( (string) $get_split_collage_field( 'image_position' ) ) );
$collage_variant = strtolower( trim( (string) $get_split_collage_field( 'collage_variant' ) ) );
$collage_preset = strtolower( trim( (string) $get_split_collage_field( 'collage_preset' ) ) );
$media_min_height = trim( (string) $get_split_collage_field( 'media_min_height' ) );
$button_label = trim( (string) $get_split_collage_field( 'button_label' ) );
$button_url = trim( (string) $get_split_collage_field( 'button_url' ) );
$button_style = strtolower( trim( (string) $get_split_collage_field( 'button_style' ) ) );
$section_classes = trim( (string) $get_split_collage_field( 'section_classes' ) );

if ( ! in_array( $content_alignment, array( 'left', 'center', 'right' ), true ) ) {
    $content_alignment = 'left';
}

if ( ! in_array( $container_type, array( 'container', 'container-fluid' ), true ) ) {
    $container_type = 'container-fluid';
}

if ( ! in_array( $scrollwork_side, array( 'left', 'right' ), true ) ) {
    $scrollwork_side = 'left';
}

if ( ! in_array( $image_position, array( 'left', 'right' ), true ) ) {
    $image_position = 'right';
}

if ( ! in_array( $collage_variant, array( 'overlap-trio', 'portrait-stack' ), true ) ) {
    $collage_variant = 'overlap-trio';
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
$background_vertical_position = $background_vertical_position ?: 'center';
$scrollwork_color = $scrollwork_color ?: '#8DC5DB';
$media_min_height = $media_min_height ?: 'clamp(460px, 52vw, 760px)';
$button_label = $button_label ?: 'Explore Gallery Direction';
$button_url = $button_url ?: home_url( '/gallery/' );

if ( $is_library_demo ) {
    $section_eyebrow = $section_eyebrow ?: 'New Section Pattern';
    $section_heading = $section_heading ?: ( 'left' === $image_position
        ? 'Photography on the left — overlapping collage with reversible layout'
        : 'Photography on the right — overlapping collage with reversible layout'
    );
    $section_intro = $section_intro ?: '<p>This pattern merges the clearer content structure from the split-feature sections with the more atmospheric image treatment from the collage demo. The left side holds eyebrow, heading, copy, and CTA. The right side becomes a framed collage stage that can be flipped via the image_position setting.</p>';
}

if ( ! $section_heading ) {
    return;
}

$section_id = $section_anchor_id ?: 'section-split-collage-' . uniqid();
$section_class_list = array(
    'section-split-collage',
    'section-split-collage--media-' . $image_position,
    'section-split-collage--align-' . $content_alignment,
    'section-split-collage--variant-' . $collage_variant,
    'section-split-collage--preset-' . $collage_preset,
);

if ( $section_classes ) {
    $section_class_list[] = $section_classes;
}

if ( $use_scrollwork ) {
    $section_class_list[] = 'section-split-collage--scrollwork-' . $scrollwork_side;
}

$section_styles = array(
    '--ssc-surface: ' . $background_color,
    '--ssc-pad-top: ' . $padding_top,
    '--ssc-pad-bottom: ' . $padding_bottom,
    '--ssc-section-pad-top: ' . $padding_top,
    '--ssc-section-pad-bottom: ' . $padding_bottom,
    '--ssc-container-max: 1170px',
    '--ssc-content-max: 585px',
    '--ssc-media-min-height: ' . $media_min_height,
    '--ssc-scrollwork-color: ' . $scrollwork_color,
);

if ( $background_gradient ) {
    $section_styles[] = 'background-image: ' . $background_gradient;
    $section_styles[] = '--ssc-stage-bg: transparent';
}

if ( ! empty( $background_image['url'] ) ) {
    $section_styles[] = 'background-image: url(' . esc_url( $background_image['url'] ) . ')';
    $section_styles[] = 'background-size: cover';
    $section_styles[] = 'background-position: center ' . $background_vertical_position;
    if ( $background_parallax ) {
        $section_styles[] = 'background-attachment: fixed';
    }
}

$collage_items = $get_split_collage_field( 'collage_items' );
if ( ! is_array( $collage_items ) || empty( $collage_items ) ) {
    // Demo: three overlapping frames using CSS classes for positioning.
    $collage_items = array(
        array(
            'url' => 'https://lal.local/wp-content/uploads/2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6604-1.jpg',
            'alt' => 'Wedding guests and reception details at the lodge',
        ),
        array(
            'url' => 'https://lal.local/wp-content/uploads/2024/08/LAL-Wedding-Leah-Rachel-Photography-0114Lucy_Mike__PF-1.jpg',
            'alt' => 'Wedding couple with floral details at the lodge',
        ),
        array(
            'url' => 'https://lal.local/wp-content/uploads/2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6490-1.jpg',
            'alt' => 'Wedding portrait details from the image scroller',
        ),
    );
}

$collage_item_count = count( $collage_items );
if ( $collage_item_count < 1 ) {
    $collage_item_count = 1;
}
if ( $collage_item_count > 6 ) {
    $collage_item_count = 6;
}

$legacy_recipe_map = array(
    'balanced' => 'a',
    'tight' => 'b',
    'dramatic' => 'c',
);

if ( isset( $legacy_recipe_map[ $collage_preset ] ) ) {
    $collage_preset = $collage_item_count . '-' . $legacy_recipe_map[ $collage_preset ];
}

$default_recipe = $collage_item_count . '-a';

$valid_recipes = array(
    'auto',
    '1-a', '1-b', '1-c',
    '2-a', '2-b', '2-c',
    '3-a', '3-b', '3-c',
    '4-a', '4-b', '4-c',
    '5-a', '5-b', '5-c',
    '6-a', '6-b', '6-c',
);

if ( '' === $collage_preset || ! in_array( $collage_preset, $valid_recipes, true ) ) {
    $collage_preset = 'auto';
}

$active_recipe = 'auto' === $collage_preset ? $default_recipe : $collage_preset;
if ( preg_match( '/^([1-6])-[abc]$/', $active_recipe, $recipe_match ) ) {
    if ( (int) $recipe_match[1] !== $collage_item_count ) {
        $active_recipe = $default_recipe;
    }
}

$collage_layout_defaults = array(
    '1-a' => array(
        array( 'grid_column' => '1 / span 11', 'grid_row' => '1 / span 12', 'offset_x' => '10px', 'offset_y' => '-2px', 'z_index' => '2', 'object_position' => '52% 48%' ),
    ),
    '1-b' => array(
        array( 'grid_column' => '2 / span 10', 'grid_row' => '1 / span 12', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '50% 46%' ),
    ),
    '1-c' => array(
        array( 'grid_column' => '1 / span 11', 'grid_row' => '2 / span 10', 'offset_x' => '-4px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '48% 50%' ),
    ),
    '2-a' => array(
        array( 'grid_column' => '1 / span 8', 'grid_row' => '1 / span 11', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '49% 50%' ),
        array( 'grid_column' => '6 / span 7', 'grid_row' => '3 / span 9', 'offset_x' => '-8px', 'offset_y' => '-2px', 'z_index' => '4', 'object_position' => '54% 48%' ),
    ),
    '2-b' => array(
        array( 'grid_column' => '2 / span 7', 'grid_row' => '1 / span 11', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '48% 50%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '2 / span 10', 'offset_x' => '4px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '52% 50%' ),
    ),
    '2-c' => array(
        array( 'grid_column' => '1 / span 8', 'grid_row' => '2 / span 10', 'offset_x' => '-4px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '46% 50%' ),
        array( 'grid_column' => '6 / span 7', 'grid_row' => '1 / span 9', 'offset_x' => '4px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '54% 46%' ),
    ),
    '3-a' => array(
        array( 'grid_column' => '1 / span 8', 'grid_row' => '1 / span 6', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '50% 42%' ),
        array( 'grid_column' => '4 / span 7', 'grid_row' => '5 / span 5', 'offset_x' => '-4px', 'offset_y' => '-4px', 'z_index' => '2', 'object_position' => '50% 50%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '8 / span 5', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '50% 50%' ),
    ),
    '3-b' => array(
        array( 'grid_column' => '2 / span 7', 'grid_row' => '1 / span 6', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '50% 40%' ),
        array( 'grid_column' => '6 / span 7', 'grid_row' => '4 / span 5', 'offset_x' => '-6px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '50% 50%' ),
        array( 'grid_column' => '3 / span 7', 'grid_row' => '8 / span 5', 'offset_x' => '8px', 'offset_y' => '-2px', 'z_index' => '3', 'object_position' => '52% 50%' ),
    ),
    '3-c' => array(
        array( 'grid_column' => '1 / span 7', 'grid_row' => '2 / span 9', 'offset_x' => '-6px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '48% 46%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '1 / span 5', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '50% 45%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '8 / span 5', 'offset_x' => '10px', 'offset_y' => '0px', 'z_index' => '5', 'object_position' => '52% 52%' ),
    ),
    '4-a' => array(
        array( 'grid_column' => '1 / span 8', 'grid_row' => '1 / span 5', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '50% 42%' ),
        array( 'grid_column' => '4 / span 7', 'grid_row' => '5 / span 4', 'offset_x' => '-6px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '50% 50%' ),
        array( 'grid_column' => '1 / span 6', 'grid_row' => '8 / span 4', 'offset_x' => '0px', 'offset_y' => '-4px', 'z_index' => '4', 'object_position' => '50% 50%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '8 / span 4', 'offset_x' => '4px', 'offset_y' => '0px', 'z_index' => '5', 'object_position' => '50% 50%' ),
    ),
    '4-b' => array(
        array( 'grid_column' => '1 / span 7', 'grid_row' => '1 / span 5', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '45% 45%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '2 / span 5', 'offset_x' => '-12px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '52% 48%' ),
        array( 'grid_column' => '2 / span 7', 'grid_row' => '6 / span 5', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '50% 50%' ),
        array( 'grid_column' => '8 / span 5', 'grid_row' => '8 / span 4', 'offset_x' => '6px', 'offset_y' => '-4px', 'z_index' => '5', 'object_position' => '54% 52%' ),
    ),
    '4-c' => array(
        array( 'grid_column' => '1 / span 9', 'grid_row' => '1 / span 5', 'offset_x' => '-8px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '45% 45%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '3 / span 5', 'offset_x' => '0px', 'offset_y' => '-8px', 'z_index' => '4', 'object_position' => '52% 45%' ),
        array( 'grid_column' => '1 / span 6', 'grid_row' => '7 / span 5', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '50% 52%' ),
        array( 'grid_column' => '6 / span 7', 'grid_row' => '8 / span 5', 'offset_x' => '12px', 'offset_y' => '0px', 'z_index' => '5', 'object_position' => '56% 52%' ),
    ),
    '5-a' => array(
        array( 'grid_column' => '1 / span 9', 'grid_row' => '1 / span 5', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '50% 40%' ),
        array( 'grid_column' => '2 / span 6', 'grid_row' => '5 / span 4', 'offset_x' => '-8px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '50% 50%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '5 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '52% 50%' ),
        array( 'grid_column' => '3 / span 7', 'grid_row' => '8 / span 4', 'offset_x' => '0px', 'offset_y' => '-2px', 'z_index' => '5', 'object_position' => '50% 52%' ),
        array( 'grid_column' => '1 / span 5', 'grid_row' => '10 / span 3', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '6', 'object_position' => '48% 52%' ),
    ),
    '5-b' => array(
        array( 'grid_column' => '2 / span 7', 'grid_row' => '1 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '50% 42%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '2 / span 5', 'offset_x' => '-8px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '50% 45%' ),
        array( 'grid_column' => '1 / span 8', 'grid_row' => '5 / span 5', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '50% 50%' ),
        array( 'grid_column' => '6 / span 7', 'grid_row' => '8 / span 4', 'offset_x' => '8px', 'offset_y' => '0px', 'z_index' => '5', 'object_position' => '55% 52%' ),
        array( 'grid_column' => '2 / span 5', 'grid_row' => '10 / span 3', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '6', 'object_position' => '50% 52%' ),
    ),
    '5-c' => array(
        array( 'grid_column' => '1 / span 8', 'grid_row' => '1 / span 5', 'offset_x' => '-10px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '45% 40%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '2 / span 4', 'offset_x' => '0px', 'offset_y' => '-6px', 'z_index' => '5', 'object_position' => '52% 45%' ),
        array( 'grid_column' => '2 / span 8', 'grid_row' => '5 / span 5', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '50% 50%' ),
        array( 'grid_column' => '8 / span 5', 'grid_row' => '7 / span 5', 'offset_x' => '14px', 'offset_y' => '0px', 'z_index' => '6', 'object_position' => '56% 52%' ),
        array( 'grid_column' => '1 / span 6', 'grid_row' => '10 / span 3', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '7', 'object_position' => '48% 52%' ),
    ),
    '6-a' => array(
        array( 'grid_column' => '1 / span 8', 'grid_row' => '1 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '50% 40%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '3 / span 4', 'offset_x' => '-8px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '50% 45%' ),
        array( 'grid_column' => '2 / span 7', 'grid_row' => '5 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '50% 50%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '7 / span 4', 'offset_x' => '8px', 'offset_y' => '0px', 'z_index' => '5', 'object_position' => '56% 52%' ),
        array( 'grid_column' => '1 / span 6', 'grid_row' => '9 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '50% 52%' ),
        array( 'grid_column' => '6 / span 6', 'grid_row' => '10 / span 3', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '6', 'object_position' => '52% 52%' ),
    ),
    '6-b' => array(
        array( 'grid_column' => '2 / span 7', 'grid_row' => '1 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '48% 42%' ),
        array( 'grid_column' => '8 / span 5', 'grid_row' => '2 / span 4', 'offset_x' => '0px', 'offset_y' => '-4px', 'z_index' => '4', 'object_position' => '52% 45%' ),
        array( 'grid_column' => '1 / span 8', 'grid_row' => '4 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '3', 'object_position' => '50% 48%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '6 / span 4', 'offset_x' => '10px', 'offset_y' => '0px', 'z_index' => '5', 'object_position' => '55% 52%' ),
        array( 'grid_column' => '2 / span 6', 'grid_row' => '8 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '50% 52%' ),
        array( 'grid_column' => '6 / span 6', 'grid_row' => '10 / span 3', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '6', 'object_position' => '52% 52%' ),
    ),
    '6-c' => array(
        array( 'grid_column' => '1 / span 8', 'grid_row' => '1 / span 4', 'offset_x' => '-10px', 'offset_y' => '0px', 'z_index' => '2', 'object_position' => '44% 42%' ),
        array( 'grid_column' => '7 / span 6', 'grid_row' => '2 / span 4', 'offset_x' => '-6px', 'offset_y' => '-8px', 'z_index' => '5', 'object_position' => '52% 44%' ),
        array( 'grid_column' => '2 / span 8', 'grid_row' => '4 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '4', 'object_position' => '50% 48%' ),
        array( 'grid_column' => '8 / span 5', 'grid_row' => '6 / span 4', 'offset_x' => '14px', 'offset_y' => '0px', 'z_index' => '6', 'object_position' => '56% 50%' ),
        array( 'grid_column' => '1 / span 6', 'grid_row' => '9 / span 4', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '5', 'object_position' => '48% 52%' ),
        array( 'grid_column' => '6 / span 6', 'grid_row' => '10 / span 3', 'offset_x' => '0px', 'offset_y' => '0px', 'z_index' => '7', 'object_position' => '54% 52%' ),
    ),
);

$active_preset_layout = $collage_layout_defaults[ $active_recipe ] ?? $collage_layout_defaults[ $default_recipe ];
$section_class_list[] = 'section-split-collage--recipe-' . $active_recipe;
?>

<style>
.section-split-collage {
    position: relative;
    overflow: hidden;
    background: var(--ssc-surface, #f6f3ed);
    padding-top: max(48px, var(--ssc-section-pad-top, 0px));
    padding-bottom: max(48px, var(--ssc-section-pad-bottom, 0px));
}

.section-split-collage--scrollwork-left,
.section-split-collage--scrollwork-right {
    position: relative;
}

.section-split-collage--scrollwork-left::before,
.section-split-collage--scrollwork-right::before {
    content: '';
    position: absolute;
    top: 0;
    width: var(--lacc-scrollwork-width, 78px);
    height: 100%;
    background-color: var(--ssc-scrollwork-color, #8DC5DB);
    opacity: var(--lacc-scrollwork-opacity, 0.4);
    pointer-events: none;
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: repeat-y;
    mask-repeat: repeat-y;
    -webkit-mask-position: top center;
    mask-position: top center;
    -webkit-mask-size: var(--lacc-scrollwork-width, 78px) var(--lacc-scrollwork-tile-h, 450px);
    mask-size: var(--lacc-scrollwork-width, 78px) var(--lacc-scrollwork-tile-h, 450px);
}

.section-split-collage--scrollwork-left::before {
    left: calc(50% - 500px);
}

.section-split-collage--scrollwork-right::before {
    right: calc(50% - 500px);
}

/* ── Layout: container anchors content column, media bleeds full-width ── */
.section-split-collage__inner {
    display: grid;
    grid-template-columns: minmax(0, 1fr);
    width: 100%;
}

.section-split-collage__grid {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
    align-items: center;
    width: 100%;
    max-width: 100%;
}

.section-split-collage--media-left .section-split-collage__content-wrap {
    order: 2;
}

.section-split-collage--media-left .section-split-collage__media-wrap {
    order: 1;
}

/* Content column: padded so text reads as though inside 1170px container */
.section-split-collage__content-wrap {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: min(100%, var(--ssc-content-max, 585px));
    min-height: var(--ssc-media-min-height, clamp(460px, 52vw, 760px));
    margin-left: max(20px, calc((100vw - var(--ssc-container-max, 1170px)) / 2));
    margin-right: clamp(48px, 5vw, 84px);
    padding-top: var(--ssc-pad-top, 72px);
    padding-bottom: var(--ssc-pad-bottom, 72px);
    padding-left: 0;
    padding-right: 0;
}

/* On media-left, padding flips to keep readable margin on right side */
.section-split-collage--media-left .section-split-collage__content-wrap {
    margin-left: clamp(48px, 5vw, 84px);
    margin-right: max(20px, calc((100vw - var(--ssc-container-max, 1170px)) / 2));
}

.section-split-collage__eyebrow {
    display: inline-flex;
    align-self: flex-start;
    align-items: center;
    width: fit-content;
    max-width: max-content;
    margin-bottom: 14px;
    padding: 8px 18px;
    border: 2px solid #c9973a;
    border-radius: 32px;
    background: rgba(81, 83, 74, 0.94);
    color: #f5b62b;
    font-family: var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif);
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
    font-family: var(--lacc-type-family-display, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: clamp(40px, 4.8vw, 66px);
    font-weight: 400;
    line-height: .98;
}

.section-split-collage__copy,
.section-split-collage__copy p {
    margin: 18px 0 0;
    max-width: 36rem;
    color: #51534a;
    font-family: var(--lacc-type-family-editorial, "Freight Big Pro", Georgia, serif);
    font-size: clamp(19px, 2vw, 23px);
    line-height: 1.62;
}

.section-split-collage__actions {
    margin-top: 28px;
}

/* ── Button styles (scoped, no Bootstrap) ── */
.section-split-collage .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: .85em 1.6em;
    border: 1px solid transparent;
    border-radius: 0;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: .04em;
    line-height: 1;
    text-decoration: none !important;
    transition: background .25s ease, border-color .25s ease, color .25s ease;
}
.section-split-collage .hero-button--outline-ink,
.section-split-collage .hero-button--outline-dark {
    background: transparent;
    border-color: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-ink, #51534a) !important;
}
.section-split-collage .hero-button--outline-ink:hover,
.section-split-collage .hero-button--outline-ink:focus,
.section-split-collage .hero-button--outline-dark:hover,
.section-split-collage .hero-button--outline-dark:focus {
    background: rgba(81, 83, 74, 0.08);
    border-color: var(--lacc-color-ink, #51534a);
    color: #3b3d37 !important;
}
.section-split-collage .hero-button--ink {
    background: var(--lacc-color-ink, #51534a);
    border-color: var(--lacc-color-ink, #51534a);
    color: #ffffff !important;
}
.section-split-collage .hero-button--ink:hover,
.section-split-collage .hero-button--ink:focus {
    background: var(--lacc-color-ink-deep, #1f221d);
    border-color: var(--lacc-color-ink-deep, #1f221d);
    color: #ffffff !important;
}
.section-split-collage .hero-button--secondary {
    background: var(--lacc-color-accent-old-gold, #7a5a1f);
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: #ffffff !important;
}
.section-split-collage .hero-button--secondary:hover,
.section-split-collage .hero-button--secondary:focus {
    background: var(--lacc-color-accent-old-gold-hover, #563f15);
    border-color: var(--lacc-color-accent-old-gold-hover, #563f15);
    color: #ffffff !important;
}
.section-split-collage .hero-button--primary {
    background: var(--lacc-color-action-primary, #3f5f85);
    border-color: var(--lacc-color-action-primary, #3f5f85);
    color: #ffffff !important;
}
.section-split-collage .hero-button--primary:hover,
.section-split-collage .hero-button--primary:focus {
    background: var(--lacc-color-action-primary-hover, #324c6a);
    border-color: var(--lacc-color-action-primary-hover, #324c6a);
    color: #ffffff !important;
}
.section-split-collage .hero-button--light {
    background: var(--lacc-color-cream, #f6f3ed);
    border-color: #ddd4c8;
    color: var(--lacc-color-ink, #51534a) !important;
}
.section-split-collage .hero-button--light:hover,
.section-split-collage .hero-button--light:focus {
    background: #ebe2d5;
    border-color: #ddd4c8;
    color: var(--lacc-color-ink, #51534a) !important;
}
.section-split-collage .hero-button--outline-gold {
    background: transparent;
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: var(--lacc-color-accent-old-gold, #7a5a1f) !important;
}
.section-split-collage .hero-button--outline-gold:hover,
.section-split-collage .hero-button--outline-gold:focus {
    background: var(--lacc-color-accent-old-gold, #7a5a1f);
    border-color: var(--lacc-color-accent-old-gold, #7a5a1f);
    color: #ffffff !important;
}

/* ── Media column: full-bleed, stretches to section edge ── */
.section-split-collage__media-wrap {
    position: relative;
    align-self: stretch;
    min-height: var(--ssc-media-min-height, clamp(460px, 52vw, 760px));
    padding-left: var(--ssc-column-gap, clamp(48px, 5vw, 84px));
    overflow: visible;
}

.section-split-collage--media-left .section-split-collage__media-wrap {
    padding-left: 0;
    padding-right: var(--ssc-column-gap, clamp(48px, 5vw, 84px));
}

/* ── Stage: full-height within media column, clean overlapping grid ── */
.section-split-collage__stage {
    position: relative;
    height: 100%;
    min-height: inherit;
    padding: 24px;
    background: var(--ssc-stage-bg, var(--ssc-surface, #f6f3ed));
    overflow: visible;
}

/* ── Overlapping frames grid ── */
.section-split-collage__frames {
    position: relative;
    display: grid;
    grid-template-columns: repeat(12, minmax(0, 1fr));
    grid-template-rows: repeat(12, minmax(24px, 1fr));
    min-height: inherit;
    gap: var(--ssc-frame-gap, 6px);
    isolation: isolate;
}

.section-split-collage__frame {
    position: relative;
    grid-column: var(--ssc-frame-col, auto);
    grid-row: var(--ssc-frame-row, auto);
    transform: translate(
        calc(var(--ssc-frame-tx, 0px) * var(--ssc-overlap-scale, 0.35)),
        calc((var(--ssc-frame-ty, 0px) * var(--ssc-overlap-scale, 0.35)) + var(--ssc-frame-hover-y, 0px))
    );
    z-index: var(--ssc-frame-z, 1);
    mix-blend-mode: var(--ssc-frame-blend-mode, multiply);
    overflow: hidden;
    background: rgba(214, 204, 185, 0.6);
    box-shadow: 0 16px 30px rgba(31, 34, 29, 0.08);
    transition: transform .56s ease-in-out, box-shadow .56s ease-in-out;
}

.section-split-collage__frame::before {
    content: '';
    position: absolute;
    inset: 0;
    z-index: 0;
    background: #ffffff;
    opacity: var(--ssc-frame-hover-overlay, 0);
    transition: opacity .44s ease-in-out;
}

.section-split-collage__frame img {
    position: relative;
    z-index: 1;
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: var(--ssc-frame-object-position, 50% 50%);
    transform: scale(var(--ssc-image-hover-scale, 1));
    transition: transform .62s ease-in-out;
}

@media (hover: hover) and (pointer: fine) {
    .section-split-collage__frame:hover {
        --ssc-frame-hover-y: -6px;
        --ssc-frame-hover-overlay: 1;
        --ssc-frame-blend-mode: normal;
        z-index: calc(var(--ssc-frame-z, 1) + 20);
        box-shadow: 0 24px 40px rgba(31, 34, 29, 0.14);
    }

    .section-split-collage__frame:hover img {
        --ssc-image-hover-scale: 1.035;
    }
}

@media (prefers-reduced-motion: reduce) {
    .section-split-collage__frame,
    .section-split-collage__frame::before,
    .section-split-collage__frame img {
        transition: none;
    }
}



/* ── Center-aligned content ── */
.section-split-collage--align-center .section-split-collage__content-wrap {
    text-align: center;
}

.section-split-collage--align-center .section-split-collage__eyebrow {
    align-self: center;
}

.section-split-collage--align-right .section-split-collage__content-wrap {
    text-align: right;
}

.section-split-collage--align-right .section-split-collage__eyebrow {
    align-self: flex-end;
}

.section-split-collage--align-center .section-split-collage__copy,
.section-split-collage--align-center .section-split-collage__copy p,
.section-split-collage--align-center .section-split-collage__title {
    margin-left: auto;
    margin-right: auto;
}

/* ── Responsive ── */
@media (max-width: 991px) {
    .section-split-collage__grid,
    .section-split-collage--media-left .section-split-collage__grid {
        grid-template-columns: 1fr;
    }

    .section-split-collage--media-left .section-split-collage__content-wrap,
    .section-split-collage--media-left .section-split-collage__media-wrap {
        order: initial;
    }

    .section-split-collage__title {
        max-width: none;
    }

    .section-split-collage__content-wrap {
        display: block;
        min-height: 0;
        padding-top: 48px;
        margin-left: clamp(20px, 5vw, 40px);
        margin-right: clamp(20px, 5vw, 40px);
        width: auto;
        padding-bottom: 0;
    }

    .section-split-collage__media-wrap {
        padding-left: 0;
        padding-right: 0;
        min-height: 420px;
    }

    .section-split-collage__stage {
        min-height: inherit;
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
    .section-split-collage__frame--item-0,
    .section-split-collage__frame--item-1,
    .section-split-collage__frame--item-2 {
        grid-column: auto;
        grid-row: auto;
        transform: none;
        min-height: 180px;
    }


}
</style>

<section id="<?php echo esc_attr( $section_id ); ?>" class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>" style="<?php echo esc_attr( implode( '; ', $section_styles ) ); ?>;">
    <div class="section-split-collage__inner">
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
                    <div class="section-split-collage__frames">
                        <?php foreach ( $collage_items as $index => $collage_item ) : ?>
                            <?php
                            $frame_defaults = $active_preset_layout[ $index ] ?? $collage_layout_defaults[ $default_recipe ][ $index ] ?? array(
                                'grid_column' => 'auto',
                                'grid_row' => 'auto',
                                'offset_x' => '0px',
                                'offset_y' => '0px',
                                'z_index' => '1',
                                'object_position' => '50% 50%',
                            );

                            $frame_column = trim( (string) ( $collage_item['grid_column'] ?? '' ) );
                            $frame_row = trim( (string) ( $collage_item['grid_row'] ?? '' ) );
                            $frame_offset_x = trim( (string) ( $collage_item['offset_x'] ?? '' ) );
                            $frame_offset_y = trim( (string) ( $collage_item['offset_y'] ?? '' ) );
                            $frame_z_index = trim( (string) ( $collage_item['z_index'] ?? '' ) );
                            $frame_object_position = trim( (string) ( $collage_item['object_position'] ?? '' ) );

                            $frame_column = '' !== $frame_column ? $frame_column : $frame_defaults['grid_column'];
                            $frame_row = '' !== $frame_row ? $frame_row : $frame_defaults['grid_row'];
                            $frame_offset_x = '' !== $frame_offset_x ? $frame_offset_x : $frame_defaults['offset_x'];
                            $frame_offset_y = '' !== $frame_offset_y ? $frame_offset_y : $frame_defaults['offset_y'];
                            $frame_z_index = '' !== $frame_z_index ? $frame_z_index : $frame_defaults['z_index'];
                            $frame_object_position = '' !== $frame_object_position ? $frame_object_position : $frame_defaults['object_position'];
                            ?>
                            <figure class="section-split-collage__frame section-split-collage__frame--item-<?php echo esc_attr( $index ); ?>" style="--ssc-frame-col: <?php echo esc_attr( $frame_column ); ?>; --ssc-frame-row: <?php echo esc_attr( $frame_row ); ?>; --ssc-frame-tx: <?php echo esc_attr( $frame_offset_x ); ?>; --ssc-frame-ty: <?php echo esc_attr( $frame_offset_y ); ?>; --ssc-frame-z: <?php echo esc_attr( $frame_z_index ); ?>; --ssc-frame-object-position: <?php echo esc_attr( $frame_object_position ); ?>;">
                                <img src="<?php echo esc_url( $collage_item['url'] ?? '' ); ?>" alt="<?php echo esc_attr( $collage_item['alt'] ?? '' ); ?>">
                            </figure>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>