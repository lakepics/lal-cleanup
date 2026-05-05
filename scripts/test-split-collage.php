<?php
$default_page_id = 8297;
$page_id = $default_page_id;

if ( isset( $args ) && is_array( $args ) && isset( $args[0] ) ) {
    $candidate_page_id = absint( $args[0] );
    if ( $candidate_page_id > 0 ) {
        $page_id = $candidate_page_id;
    }
}

if ( get_post( $page_id ) instanceof WP_Post === false ) {
    WP_CLI::error( 'Target page does not exist. page_id=' . $page_id );
}

if ( ! function_exists( 'update_field' ) || ! function_exists( 'get_field' ) ) {
    WP_CLI::error( 'ACF functions are unavailable.' );
}

$upload = wp_upload_dir();
$base   = trailingslashit( $upload['baseurl'] ?? '' );

// Simple test: just split_collage sections
$rows = array(
    array(
        'acf_fc_layout' => 'section_split_collage',
        'section_anchor_id' => 'test-split-collage-a',
        'section_eyebrow' => 'Test Split Collage',
        'section_heading' => 'Test heading',
        'section_intro' => '<p>Test intro</p>',
        'image_position' => 'right',
        'collage_variant' => 'overlap-trio',
        'button_label' => 'Test Button',
        'button_url' => 'http://test.com',
        'button_style' => 'outline-ink',
        'content_alignment' => 'left',
        'background_color' => '#f6f3ed',
        'padding_top' => '72px',
        'padding_bottom' => '72px',
        'collage_items' => array(
            array( 
                'url' => $base . '2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6604-1.jpg', 
                'alt' => 'Test image 1',
            ),
            array( 
                'url' => $base . '2024/08/LAL-Wedding-Leah-Rachel-Photography-0114Lucy_Mike__PF-1.jpg', 
                'alt' => 'Test image 2',
            ),
        ),
    ),
);

$ok = update_field( 'field_tsb_page_sections', $rows, $page_id );
if ( false === $ok ) {
    WP_CLI::error( 'Failed to update page_sections.' );
}

WP_CLI::success( 'Test passed!' );
