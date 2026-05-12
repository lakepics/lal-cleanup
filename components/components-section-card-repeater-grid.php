<?php
$section_card_repeater_override = isset( $section_card_repeater_override ) && is_array( $section_card_repeater_override ) ? $section_card_repeater_override : array();
$card_repeater_classes = trim( 'section-card-repeater-grid ' . ( $section_card_repeater_override['section_classes'] ?? '' ) );

$section_card_grid_override = array_merge(
    $section_card_repeater_override,
    array(
        'section_classes' => $card_repeater_classes,
        'post_grid_content' => '',
    )
);

include locate_template( 'components/components-section-card-grid.php', false, false );