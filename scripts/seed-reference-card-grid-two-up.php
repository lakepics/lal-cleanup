<?php
$page_id = 8297;

if ( ! function_exists( 'update_field' ) || ! function_exists( 'get_field' ) ) {
    WP_CLI::error( 'ACF functions are unavailable.' );
}

$target_row = array(
    'acf_fc_layout' => 'section_card_grid',
    'section_anchor_id' => 'reference-card-grid-2-up',
    'section_eyebrow' => '2-up / Carousel Card + Specials Card',
    'section_heading' => 'Two-up locked specimen',
    'section_intro' => '<p>This row now maps directly to the locked carousel-card and specials-card looks from the sandbox studies.</p>',
    'content_alignment' => 'left',
    'container_type' => 'container',
    'heading_font_family' => 'haarlem',
    'heading_font_weight' => '400',
    'heading_text_transform' => 'uppercase',
    'card_heading_font_family' => 'haarlem',
    'card_heading_font_weight' => '400',
    'equalize_card_bottoms' => 1,
    'enable_card_hover_effect' => 1,
    'card_button_alignment' => 'left',
    'card_gutter' => '30px',
    'card_padding' => '24px',
    'card_badge_variant' => 'pill',
    'card_visual_system' => 'locked-density',
    'eyebrow_font_family' => 'haarlem',
    'eyebrow_font_weight' => '700',
    'eyebrow_font_size' => '12px',
    'eyebrow_padding' => '0.42em 1.17em',
    'eyebrow_border' => '1px solid rgba(181,138,45,0.32)',
    'eyebrow_border_radius' => '999px',
    'padding_top' => '48px',
    'padding_bottom' => '48px',
    'button_size' => 'normal',
    'cards' => array(
        array(
            'card_desktop_width' => '6',
            'card_image' => 6453,
            'card_badge' => 'Carousel Card',
            'card_style_preset' => 'carousel-card',
            'card_label_treatment' => 'none',
            'card_images' => array(
                array( 'image' => 6453, 'alt' => 'Open Chalet exterior view' ),
                array( 'image' => 6452, 'alt' => 'Open Chalet grounds' ),
                array( 'image' => 6454, 'alt' => 'Open Chalet gathering space' ),
            ),
            'card_heading' => 'Open Chalet',
            'card_body' => '<div class="lacc-pricing-pattern"><p class="lacc-pricing-pattern__price">from $329 <span class="lacc-pricing-pattern__period">Per night</span></p></div><p>Escape to nature with friends or family in a two-bedroom open-concept chalet with deck access and flexible gathering space.</p><div class="section-card-grid__card-amenity-pills"><span class="section-card-grid__card-amenity-pill">2 Beds</span><span class="section-card-grid__card-amenity-pill">2 Baths</span><span class="section-card-grid__card-amenity-pill">Fireplace</span><span class="section-card-grid__card-amenity-pill">Deck</span></div><div class="section-card-grid__card-stay-facts"><div class="section-card-grid__card-stay-fact"><span>Sleeps</span><strong>Up to 5</strong></div><div class="section-card-grid__card-stay-fact"><span>Best For</span><strong>Families</strong></div><div class="section-card-grid__card-stay-fact"><span>View</span><strong>Forest + deck</strong></div></div>',
            'card_button_label' => 'Check Availability',
            'card_button_url' => home_url( '/lake-arrowhead-accommodations/' ),
            'card_button_style' => 'gold-text',
        ),
        array(
            'card_desktop_width' => '6',
            'card_image' => 6451,
            'card_badge' => 'Specials Card',
            'card_style_preset' => 'specials-card',
            'card_label_treatment' => 'none',
            'card_heading' => 'Plan Now, Relax Later',
            'card_body' => '<div class="lacc-pricing-pattern"><p class="lacc-pricing-pattern__price">from $245 <span class="lacc-pricing-pattern__period">Per night</span></p><p class="lacc-pricing-pattern__lede">Book at least 14 days in advance to receive:</p></div><ul class="lacc-pricing-list"><li>20% off the best available rate</li><li>$50 resort credit</li><li>Time away to enjoy quiet tranquility</li></ul>',
            'card_button_label' => 'Book Now',
            'card_button_url' => home_url( '/specials/' ),
            'card_button_style' => 'gold-text',
        ),
    ),
);

$sections = get_field( 'page_sections', $page_id );
if ( ! is_array( $sections ) ) {
    $sections = array();
}

$replaced = false;
foreach ( $sections as $i => $row ) {
    if ( ( $row['acf_fc_layout'] ?? '' ) === 'section_card_grid' && ( $row['section_anchor_id'] ?? '' ) === 'reference-card-grid-2-up' ) {
        $sections[ $i ] = $target_row;
        $replaced       = true;
        break;
    }
}

if ( ! $replaced ) {
    $sections[] = $target_row;
}

$ok = update_field( 'field_tsb_page_sections', $sections, $page_id );
if ( ! $ok ) {
    WP_CLI::error( 'update_field failed for page_sections' );
}

$saved  = get_field( 'page_sections', $page_id );
$rows   = is_array( $saved ) ? count( $saved ) : 0;
$slides = 0;

if ( is_array( $saved ) ) {
    foreach ( $saved as $row ) {
        if ( ( $row['acf_fc_layout'] ?? '' ) === 'section_card_grid' && ( $row['section_anchor_id'] ?? '' ) === 'reference-card-grid-2-up' ) {
            $slides = isset( $row['cards'][0]['card_images'] ) && is_array( $row['cards'][0]['card_images'] ) ? count( $row['cards'][0]['card_images'] ) : 0;
            break;
        }
    }
}

WP_CLI::success( "Seeded page_sections on page {$page_id}. Rows: {$rows}. Carousel slides in first card: {$slides}." );
