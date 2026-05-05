<?php
/**
 * Seed Card Grid default-state matrix on the Flexible Builder Reference page.
 *
 * Usage:
 *   bash scripts/wp-local.sh eval-file scripts/seed-card-default-state-matrix.php
 *
 * Purpose:
 * - Add 2-up / 3-up / 4-up sample rows that intentionally avoid explicit
 *   card preset/treatment styling controls so rendered output reflects the
 *   current live ACF-backed default behavior.
 */

$page_id = 8297;

if ( ! function_exists( 'update_field' ) || ! function_exists( 'get_field' ) ) {
    WP_CLI::error( 'ACF functions are unavailable.' );
}

$sample_url = home_url( '/contact-us/' );

$base_cards = static function ( $widths ) use ( $sample_url ) {
    $cards = array();
    foreach ( $widths as $i => $width ) {
        $index = (int) $i + 1;
        $cards[] = array(
            'card_desktop_width' => (string) $width,
            'card_badge' => 'Default Sample ' . $index,
            'card_heading' => 'Default State Card ' . $index,
            'card_body' => '<p>Seeded with minimal card fields so style preset and label treatment resolve from active default behavior.</p>',
            'card_button_label' => 'Learn More',
            'card_button_url' => $sample_url,
        );
    }

    return $cards;
};

$default_sections = array(
    array(
        'acf_fc_layout' => 'section_card_grid',
        'section_anchor_id' => 'reference-card-grid-defaults-2-up',
        'section_eyebrow' => 'Default States / 2-up',
        'section_heading' => 'Card Grid defaults: 2-up',
        'section_intro' => '<p>These cards intentionally leave preset/treatment style controls unset so current default behavior is visible.</p>',
        'cards' => $base_cards( array( 6, 6 ) ),
    ),
    array(
        'acf_fc_layout' => 'section_card_grid',
        'section_anchor_id' => 'reference-card-grid-defaults-3-up',
        'section_eyebrow' => 'Default States / 3-up',
        'section_heading' => 'Card Grid defaults: 3-up',
        'section_intro' => '<p>Three-up default-state sample using only core content fields.</p>',
        'cards' => $base_cards( array( 4, 4, 4 ) ),
    ),
    array(
        'acf_fc_layout' => 'section_card_grid',
        'section_anchor_id' => 'reference-card-grid-defaults-4-up',
        'section_eyebrow' => 'Default States / 4-up',
        'section_heading' => 'Card Grid defaults: 4-up',
        'section_intro' => '<p>Four-up default-state sample to confirm density mapping and spacing from current defaults.</p>',
        'cards' => $base_cards( array( 3, 3, 3, 3 ) ),
    ),
);

$sections = get_field( 'page_sections', $page_id );
if ( ! is_array( $sections ) ) {
    $sections = array();
}

$anchors_to_replace = array(
    'reference-card-grid-defaults-2-up',
    'reference-card-grid-defaults-3-up',
    'reference-card-grid-defaults-4-up',
);

$sections = array_values(
    array_filter(
        $sections,
        static function ( $row ) use ( $anchors_to_replace ) {
            $anchor = isset( $row['section_anchor_id'] ) ? (string) $row['section_anchor_id'] : '';
            return ! in_array( $anchor, $anchors_to_replace, true );
        }
    )
);

foreach ( $default_sections as $row ) {
    $sections[] = $row;
}

$ok = update_field( 'field_tsb_page_sections', $sections, $page_id );
if ( ! $ok ) {
    WP_CLI::error( 'update_field failed for page_sections.' );
}

WP_CLI::success( 'Seeded card-grid default-state matrix (2-up/3-up/4-up) on reference page ' . $page_id . '.' );
