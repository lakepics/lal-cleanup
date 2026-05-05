<?php
/**
 * Seed all card preset showcase on reference page.
 * 
 * Usage:
 *   bash scripts/wp-local.sh eval-file scripts/seed-all-card-presets-showcase.php
 * 
 * Adds a section showcasing all 9 card preset types to demonstrate visual and functional differences.
 */

$page_id = 8297; // reference page
if ( ! function_exists( 'update_field' ) || ! function_exists( 'get_field' ) ) {
    WP_CLI::error( 'ACF functions are unavailable.' );
}

$upload = wp_upload_dir();
$base   = trailingslashit( $upload['baseurl'] ?? '' );

$image_map = array(
    'img_0' => '2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6604-1.jpg',
    'img_1' => '2024/08/LAL-Wedding-Leah-Rachel-Photography-0114Lucy_Mike__PF-1.jpg',
    'img_2' => '2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6490-1.jpg',
    'img_3' => '2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6980-1.jpg',
    'img_4' => '2024/08/LAL-Wedding-Leah-Rachel-Photography-0055Lucy_Mike__PF-1.jpg',
);

$img = array();
foreach ( $image_map as $key => $rel_path ) {
    $id = (int) attachment_url_to_postid( $base . $rel_path );
    if ( $id <= 0 ) {
        WP_CLI::error( 'Could not resolve attachment ID for ' . $rel_path );
    }
    $img[ $key ] = $id;
}

$preset_showcase = array(
    'acf_fc_layout'               => 'section_card_grid',
    'section_anchor_id'           => 'reference-card-presets-all-9',
    'section_eyebrow'             => 'All 9 Card Presets',
    'section_heading'             => 'Complete card preset reference',
    'section_intro'               => '<p>Visual and structural comparison of all card preset types: auto, generic, carousel-card, specials-card, editorial-card, utility-card, offer-card, prompt-card, and pricing-tier. Use the "Override Card Width" control above to adjust the layout.</p>',
    'content_alignment'           => 'left',
    'container_type'              => 'container',
    'heading_font_family'         => 'haarlem',
    'heading_font_weight'         => '400',
    'heading_text_transform'      => 'uppercase',
    'card_heading_font_family'    => 'haarlem',
    'card_heading_font_weight'    => '400',
    'equalize_card_bottoms'       => 0,
    'enable_card_hover_effect'    => 1,
    'card_button_alignment'       => 'left',
    'card_gutter'                 => '30px',
    'card_render_width'           => '4',
    'card_padding'                => '24px',
    'card_badge_variant'          => 'pill',
    'card_visual_system'          => 'generic',
    'eyebrow_font_family'         => 'haarlem',
    'eyebrow_font_weight'         => '600',
    'eyebrow_font_size'           => '12px',
    'eyebrow_padding'             => '0.42em 1.17em',
    'eyebrow_border'              => '1px solid rgba(181,138,45,0.32)',
    'eyebrow_border_radius'       => '999px',
    'padding_top'                 => '48px',
    'padding_bottom'              => '48px',
    'button_size'                 => 'normal',
    'cards'                       => array(
        // 1. Auto preset (shows resolution based on visual system)
        array(
            'card_desktop_width'   => '4',
            'card_image'           => $img['img_0'],
            'card_badge'           => 'Auto',
            'card_style_preset'    => 'auto',
            'card_label_treatment' => 'none',
            'card_heading'         => 'Auto Preset',
            'card_body'            => '<p>Resolves based on visual system (generic) and card width (2 col). Falls back to generic.</p>',
            'card_button_label'    => 'View',
            'card_button_url'      => home_url( '/' ),
            'card_button_style'    => 'outline-dark',
        ),
        // 2. Generic preset (fallback)
        array(
            'card_desktop_width'   => '4',
            'card_image'           => $img['img_1'],
            'card_badge'           => 'Generic',
            'card_style_preset'    => 'generic',
            'card_label_treatment' => 'none',
            'card_heading'         => 'Generic Preset',
            'card_body'            => '<p>Default/fallback card style with no special visual treatment. Simple and flexible.</p>',
            'card_button_label'    => 'View',
            'card_button_url'      => home_url( '/' ),
            'card_button_style'    => 'outline-dark',
        ),
        // 3. Carousel card (with carousel images + pricing)
        array(
            'card_desktop_width'   => '4',
            'card_image'           => $img['img_2'],
            'card_badge'           => 'Carousel Card',
            'card_style_preset'    => 'carousel-card',
            'card_label_treatment' => 'flag',
            'card_images'          => array(
                array( 'image' => $img['img_2'], 'alt' => 'Property view 1' ),
                array( 'image' => $img['img_3'], 'alt' => 'Property view 2' ),
            ),
            'card_heading'         => 'Carousel Card',
            'card_body'            => '<div class="lacc-pricing-pattern"><p class="lacc-pricing-pattern__price">from $329 <span class="lacc-pricing-pattern__period">Per night</span></p></div><p>Multi-image carousel with pricing display.</p>',
            'card_amenity_pills'   => array(
                array( 'pill_text' => '4 Beds' ),
                array( 'pill_text' => '3 Baths' ),
                array( 'pill_text' => 'Kitchen' ),
            ),
            'card_button_label'    => 'Check Rates',
            'card_button_url'      => home_url( '/accommodations/' ),
            'card_button_style'    => 'gold-text',
        ),
        // 4. Specials card (promotional/pricing variant)
        array(
            'card_desktop_width'   => '4',
            'card_image'           => $img['img_3'],
            'card_badge'           => 'Specials Card',
            'card_style_preset'    => 'specials-card',
            'card_label_treatment' => 'none',
            'card_heading'         => 'Specials Card',
            'card_body'            => '<div class="lacc-pricing-pattern"><p class="lacc-pricing-pattern__price">from $199 <span class="lacc-pricing-pattern__period">Limited Time</span></p></div><p>Promotional pricing display variant.</p>',
            'card_button_label'    => 'Book Now',
            'card_button_url'      => home_url( '/specials/' ),
            'card_button_style'    => 'gold-text',
        ),
        // 5. Editorial card (content-focused)
        array(
            'card_desktop_width'   => '4',
            'card_image'           => $img['img_4'],
            'card_badge'           => 'Editorial Card',
            'card_style_preset'    => 'editorial-card',
            'card_label_treatment' => 'flag',
            'card_heading'         => 'Editorial Card',
            'card_body'            => '<p>Feature article or story-focused card. Emphasizes narrative content over transactions.</p>',
            'card_button_label'    => 'Read Story',
            'card_button_url'      => home_url( '/articles/' ),
            'card_button_style'    => 'outline-dark',
        ),
        // 6. Utility card (compact info/guides)
        array(
            'card_desktop_width'   => '4',
            'card_image'           => $img['img_0'],
            'card_badge'           => 'Utility Card',
            'card_style_preset'    => 'utility-card',
            'card_label_treatment' => 'eyebrow',
            'card_heading'         => 'Utility Card',
            'card_body'            => '<p>Compact card for guides, checklists, planning tools, and utility information.</p>',
            'card_button_label'    => 'Get Guide',
            'card_button_url'      => home_url( '/' ),
            'card_button_style'    => 'outline-dark',
        ),
        // 7. Offer card (special promotion/deal)
        array(
            'card_desktop_width'   => '4',
            'card_image'           => $img['img_1'],
            'card_badge'           => 'Offer Card',
            'card_style_preset'    => 'offer-card',
            'card_label_treatment' => 'flag',
            'card_heading'         => 'Offer Card',
            'card_body'            => '<p>Designed for promotional offers, seasonal deals, and package bundles.</p>',
            'card_button_label'    => 'Claim Offer',
            'card_button_url'      => home_url( '/specials/' ),
            'card_button_style'    => 'outline-dark',
        ),
        // 8. Prompt card (CTA/call-to-action)
        array(
            'card_desktop_width'   => '4',
            'card_image'           => $img['img_2'],
            'card_badge'           => 'Prompt Card',
            'card_style_preset'    => 'prompt-card',
            'card_label_treatment' => 'flag',
            'card_heading'         => 'Prompt Card',
            'card_body'            => '<p>Call-to-action focused card. Encourages user engagement and next steps.</p>',
            'card_button_label'    => 'Get Started',
            'card_button_url'      => home_url( '/contact-us/' ),
            'card_button_style'    => 'outline-dark',
        ),
        // 9. Pricing tier (pricing-tier preset)
        array(
            'card_desktop_width'   => '4',
            'card_image'           => $img['img_3'],
            'card_badge'           => 'Pricing Tier',
            'card_style_preset'    => 'pricing-tier',
            'card_label_treatment' => 'eyebrow',
            'card_heading'         => 'Pricing Tier',
            'card_body'            => '<div class="lacc-pricing-pattern"><p class="lacc-pricing-pattern__price">$149</p></div><p>Explicit pricing tier or product variant display.</p>',
            'card_button_label'    => 'Select',
            'card_button_url'      => home_url( '/' ),
            'card_button_style'    => 'outline-dark',
        ),
    ),
);

$sections = get_field( 'page_sections', $page_id );
if ( ! is_array( $sections ) ) {
    $sections = array();
}

$replaced = false;
foreach ( $sections as $i => $row ) {
    if ( ( $row['acf_fc_layout'] ?? '' ) === 'section_card_grid' && ( $row['section_anchor_id'] ?? '' ) === 'reference-card-presets-all-9' ) {
        $sections[ $i ] = $preset_showcase;
        $replaced       = true;
        break;
    }
}

if ( ! $replaced ) {
    $sections[] = $preset_showcase;
}

$ok = update_field( 'field_tsb_page_sections', $sections, $page_id );
if ( ! $ok ) {
    WP_CLI::error( 'update_field failed for page_sections' );
}

WP_CLI::success( "Seeded all-9-presets showcase on reference page {$page_id}." );
