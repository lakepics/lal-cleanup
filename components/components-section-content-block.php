<?php
$section_content_block_override = isset( $section_content_block_override ) && is_array( $section_content_block_override ) ? $section_content_block_override : array();
$content_block_classes = trim( 'section-content-block ' . ( $section_content_block_override['section_classes'] ?? '' ) );

$section_card_grid_override = array_merge(
    $section_content_block_override,
    array(
        'section_classes' => $content_block_classes,
        'cards' => array(),
        'equalize_card_bottoms' => 0,
        'enable_card_hover_effect' => 0,
        'card_button_spacing' => '0',
        'card_gutter' => '0',
        'card_column_gap' => '0',
        'card_row_gap' => '0',
        'card_padding' => '0',
        'card_padding_top' => '0',
        'card_padding_bottom' => '0',
        'card_background_gradient' => 'transparent',
        'card_border_color' => 'transparent',
        'card_visual_system' => 'generic',
        'card_render_width' => '',
        'card_badge_variant' => 'pill',
        'card_badge_alignment' => 'center',
    )
);

include locate_template( 'components/components-section-card-grid.php', false, false );