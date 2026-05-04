<?php
$default_page_id = 8297;
$page_id = $default_page_id;

if ( isset( $args ) && is_array( $args ) && isset( $args[0] ) ) {
    $candidate_page_id = absint( $args[0] );
    if ( $candidate_page_id > 0 ) {
        $page_id = $candidate_page_id;
    }
}

if ( isset( $assoc_args ) && is_array( $assoc_args ) && isset( $assoc_args['page_id'] ) ) {
    $candidate_page_id = absint( $assoc_args['page_id'] );
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

$collage_fallback_urls = array(
    $base . '2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6604-1.jpg',
    $base . '2024/08/LAL-Wedding-Leah-Rachel-Photography-0114Lucy_Mike__PF-1.jpg',
    $base . '2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6490-1.jpg',
    $base . '2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6980-1.jpg',
    $base . '2024/08/LAL-Wedding-Leah-Rachel-Photography-0055Lucy_Mike__PF-1.jpg',
    $base . '2024/07/Yoga.jpg',
    $base . '2024/07/Ropes-Course.jpg',
    $base . '2024/07/Family-Treehouse-Picnic-3.jpg',
    $base . '2024/07/Chalet-Deck-Wine.jpg',
);

$gallery_seed_urls = array();
$gallery_response = wp_remote_get(
    home_url( '/gallery/' ),
    array(
        'timeout' => 20,
        'sslverify' => false,
    )
);

if ( ! is_wp_error( $gallery_response ) && 200 === (int) wp_remote_retrieve_response_code( $gallery_response ) ) {
    $gallery_html = (string) wp_remote_retrieve_body( $gallery_response );
    $gallery_matches = array();

    preg_match_all( '/href=["\'](https?:\/\/[^"\']+\.(?:jpe?g|png|webp))["\']/i', $gallery_html, $gallery_matches );

    if ( ! empty( $gallery_matches[1] ) && is_array( $gallery_matches[1] ) ) {
        $normalized = array();
        foreach ( $gallery_matches[1] as $candidate_url ) {
            if ( false === strpos( $candidate_url, '/wp-content/uploads/' ) ) {
                continue;
            }

            $path = (string) wp_parse_url( $candidate_url, PHP_URL_PATH );
            $filename = strtolower( (string) wp_basename( $path ) );

            if ( preg_match( '/(^tn-|_sm\.|favicon)/i', $filename ) ) {
                continue;
            }

            $normalized_key = preg_replace( '/-1(?=\.[a-z0-9]+$)/i', '', $candidate_url );
            if ( ! isset( $normalized[ $normalized_key ] ) ) {
                $normalized[ $normalized_key ] = $candidate_url;
                continue;
            }

            // Prefer canonical filename without -1 suffix when both exist.
            if ( false !== strpos( $normalized[ $normalized_key ], '-1.' ) && false === strpos( $candidate_url, '-1.' ) ) {
                $normalized[ $normalized_key ] = $candidate_url;
            }
        }

        $gallery_seed_urls = array_values( $normalized );
    }
}

if ( count( $gallery_seed_urls ) < 24 ) {
    $gallery_seed_urls = array_merge( $gallery_seed_urls, $collage_fallback_urls );
}

$pick_gallery_urls = static function ( $start, $count ) use ( $gallery_seed_urls, $collage_fallback_urls ) {
    $picked = array();
    $pool_count = count( $gallery_seed_urls );
    $fallback_count = count( $collage_fallback_urls );

    for ( $i = 0; $i < $count; $i++ ) {
        if ( $pool_count > 0 ) {
            $picked[] = $gallery_seed_urls[ ( $start + $i ) % $pool_count ];
            continue;
        }

        if ( $fallback_count > 0 ) {
            $picked[] = $collage_fallback_urls[ ( $start + $i ) % $fallback_count ];
        }
    }

    return $picked;
};

$split_collage_seed_1a = $pick_gallery_urls( 0, 1 );
$split_collage_seed_2a = $pick_gallery_urls( 3, 2 );
$split_collage_seed_3a = $pick_gallery_urls( 8, 3 );
$split_collage_seed_3c = $pick_gallery_urls( 7, 3 );
$split_collage_seed_4a = $pick_gallery_urls( 14, 4 );
$split_collage_seed_5b = $pick_gallery_urls( 24, 5 );
$split_collage_seed_6c = $pick_gallery_urls( 36, 6 );

$resolve_gallery_image = static function ( $url ) {
    $attachment_id = (int) attachment_url_to_postid( (string) $url );
    if ( $attachment_id > 0 ) {
        return $attachment_id;
    }

    return 0;
};

$split_collage_seed_1a_images = array_map( $resolve_gallery_image, $split_collage_seed_1a );
$split_collage_seed_2a_images = array_map( $resolve_gallery_image, $split_collage_seed_2a );
$split_collage_seed_3a_images = array_map( $resolve_gallery_image, $split_collage_seed_3a );
$split_collage_seed_3c_images = array_map( $resolve_gallery_image, $split_collage_seed_3c );
$split_collage_seed_4a_images = array_map( $resolve_gallery_image, $split_collage_seed_4a );
$split_collage_seed_5b_images = array_map( $resolve_gallery_image, $split_collage_seed_5b );
$split_collage_seed_6c_images = array_map( $resolve_gallery_image, $split_collage_seed_6c );

$featured_posts = get_posts(
    array(
        'post_type'      => array( 'articles', 'post', 'general' ),
        'posts_per_page' => 1,
        'post_status'    => 'publish',
    )
);
$featured_post_id = ! empty( $featured_posts ) ? (int) $featured_posts[0]->ID : 0;

$card_section_base = array(
    'content_alignment'         => 'left',
    'container_type'            => 'container',
    'heading_font_family'       => 'haarlem',
    'heading_font_weight'       => '400',
    'heading_text_transform'    => 'uppercase',
    'card_heading_font_family'  => 'haarlem',
    'card_heading_font_weight'  => '400',
    'equalize_card_bottoms'     => 1,
    'enable_card_hover_effect'  => 1,
    'card_button_alignment'     => 'left',
    'card_gutter'               => '30px',
    'card_padding'              => '24px',
    'card_badge_variant'        => 'pill',
    'card_visual_system'        => 'locked-density',
    'eyebrow_font_family'       => 'haarlem',
    'eyebrow_font_weight'       => '700',
    'eyebrow_font_size'         => '12px',
    'eyebrow_padding'           => '0.42em 1.17em',
    'eyebrow_border'            => '1px solid rgba(181,138,45,0.32)',
    'eyebrow_border_radius'     => '999px',
    'padding_top'               => '48px',
    'padding_bottom'            => '48px',
    'button_size'               => 'normal',
);

$rows = array(
    array(
        'acf_fc_layout'                    => 'section_video_hero',
        'hero_media_type'                  => 'image',
        'background_image'                 => $img['img_0'],
        'section_anchor_id'                => 'reference-video-hero',
        'section_eyebrow'                  => 'Video Hero Layout',
        'background_video_h1'              => 'Flexible builder hero specimen using the live component',
        'background_video_h2'              => '<p>Use this to verify overlay typography, eyebrow treatment, factoids, and CTA rhythm without relying on the homepage template.</p>',
        'hero_cta_buttons'                 => array(
            array(
                'button_label' => 'Plan Your Stay',
                'button_url'   => home_url( '/contact-us/' ),
                'button_style' => 'outline-gold',
            ),
            array(
                'button_label' => 'Browse Rooms',
                'button_url'   => home_url( '/lake-arrowhead-accommodations/' ),
                'button_style' => 'outline',
            ),
        ),
        'hero_factoids'                    => array(
            array( 'factoid_value' => '50', 'factoid_label' => 'Guest Rooms' ),
            array( 'factoid_value' => '4', 'factoid_label' => 'Density Variants' ),
            array( 'factoid_value' => '1170', 'factoid_label' => 'Content Width' ),
        ),
        'button_size'                      => 'normal',
        'hero_height'                      => '68vh',
        'background_video_closure_notice_show' => 0,
    ),
    array_merge(
        $card_section_base,
        array(
            'acf_fc_layout'    => 'section_card_grid',
            'section_anchor_id' => 'reference-card-grid-2-up',
            'section_eyebrow'   => '2-up / Carousel Card + Specials Card',
            'section_heading'   => 'Two-up locked specimen',
            'section_intro'     => '<p>This row now maps directly to the locked carousel-card and specials-card looks from the sandbox studies.</p>',
            'cards'             => array(
                array(
                    'card_desktop_width' => '6',
                    'card_image'         => $img['img_0'],
                    'card_badge'         => 'Carousel Card',
                    'card_style_preset'  => 'carousel-card',
                    'card_label_treatment' => 'flag',
                    'card_images'        => array(
                        array( 'image' => $img['img_0'], 'alt' => 'Open Chalet exterior view' ),
                        array( 'image' => $img['img_2'], 'alt' => 'Open Chalet grounds' ),
                        array( 'image' => $img['img_3'], 'alt' => 'Open Chalet gathering space' ),
                    ),
                    'card_heading'       => 'Open Chalet',
                    'card_body'          => '<div class="lacc-pricing-pattern"><p class="lacc-pricing-pattern__price">from $329 <span class="lacc-pricing-pattern__period">Per night</span></p></div><p>Escape to nature with friends or family in a two-bedroom open-concept chalet with deck access and flexible gathering space.</p><div class="section-card-grid__card-amenity-pills"><span class="section-card-grid__card-amenity-pill">2 Beds</span><span class="section-card-grid__card-amenity-pill">2 Baths</span><span class="section-card-grid__card-amenity-pill">Fireplace</span><span class="section-card-grid__card-amenity-pill">Deck</span></div><div class="section-card-grid__card-stay-facts"><div class="section-card-grid__card-stay-fact"><span>Sleeps</span><strong>Up to 5</strong></div><div class="section-card-grid__card-stay-fact"><span>Best For</span><strong>Families</strong></div><div class="section-card-grid__card-stay-fact"><span>View</span><strong>Forest + deck</strong></div></div>',
                    'card_button_label' => 'Check Availability',
                    'card_button_url'   => home_url( '/lake-arrowhead-accommodations/' ),
                    'card_button_style' => 'gold-text',
                ),
                array(
                    'card_desktop_width' => '6',
                    'card_image'         => $img['img_1'],
                    'card_badge'         => 'Specials Card',
                    'card_style_preset'  => 'specials-card',
                    'card_label_treatment' => 'none',
                    'card_heading'       => 'Book Early & Save',
                    'card_body'          => '<div class="lacc-pricing-pattern"><p class="lacc-pricing-pattern__lede">Plan Now, Relax Later</p><p class="lacc-pricing-pattern__price">from $245 <span class="lacc-pricing-pattern__period">Per night</span></p></div><p>Book at least 14 days in advance to receive:</p><ul class="lacc-pricing-list"><li>20% off the best available rate</li><li>$50 resort credit</li><li>Time away to enjoy quiet tranquility</li></ul>',
                    'card_button_label' => 'Book Now',
                    'card_button_url'   => home_url( '/specials/' ),
                    'card_button_style' => 'gold-text',
                ),
            ),
        )
    ),
    array_merge(
        $card_section_base,
        array(
            'acf_fc_layout' => 'section_card_grid',
            'section_anchor_id' => 'reference-card-grid-3-up',
            'section_eyebrow' => '3-up / 33.33% width',
            'section_heading' => 'Three-up card grid',
            'section_intro' => '<p>This is the current default density and the strongest candidate for a lock-first production variant.</p>',
            'cards' => array(
                array(
                    'card_desktop_width' => '4',
                    'card_image' => $img['img_2'],
                    'card_badge' => 'Seasonal Story',
                    'card_label_treatment' => 'flag',
                    'card_style_preset' => 'carousel-card',
                    'card_images' => array(
                        array( 'image' => $img['img_2'], 'alt' => 'Open Chalet grounds' ),
                        array( 'image' => $img['img_3'], 'alt' => 'Open Chalet gathering space' ),
                    ),
                    'card_heading' => 'Rooms and accommodations',
                    'card_body' => '<p>Use this lane for the homepage quick-link pattern or grouped content families.</p>',
                    'card_button_label' => 'Browse Rooms',
                    'card_button_url' => home_url( '/lake-arrowhead-accommodations/' ),
                    'card_button_style' => 'outline-dark',
                ),
                array(
                    'card_desktop_width' => '4',
                    'card_image' => $img['img_3'],
                    'card_badge' => 'Specials Card',
                    'card_label_treatment' => 'none',
                    'card_style_preset' => 'specials-card',
                    'card_heading' => 'Book Early & Save',
                    'card_body' => '<div class="lacc-pricing-pattern"><p class="lacc-pricing-pattern__lede">Plan Now, Relax Later</p><p class="lacc-pricing-pattern__price">from $245 <span class="lacc-pricing-pattern__period">Per night</span></p></div><p>Seasonal offer for shared stays.</p><ul class="lacc-pricing-list"><li>Best available midweek pricing</li><li>Dining credit included</li></ul>',
                    'card_button_label' => 'Explore Dining',
                    'card_button_url' => home_url( '/dining/' ),
                    'card_button_style' => 'outline-dark',
                ),
                array(
                    'card_desktop_width' => '4',
                    'card_image' => $img['img_4'],
                    'card_badge' => 'Most Popular',
                    'card_label_treatment' => 'eyebrow',
                    'card_style_preset' => 'pricing-tier',
                    'card_heading' => 'Activities and property moments',
                    'card_body' => '<p>This is the density that already feels closest to production-ready across the current builder.</p>',
                    'card_button_label' => 'See More',
                    'card_button_url' => home_url( '/gallery/' ),
                    'card_button_style' => 'outline-dark',
                ),
            ),
        )
    ),
    array_merge(
        $card_section_base,
        array(
            'acf_fc_layout' => 'section_card_grid',
            'section_anchor_id' => 'reference-card-grid-pricing-tier-3up',
            'section_eyebrow' => 'Pricing Tier / 3-up',
            'section_heading' => 'Pricing-tier card variant',
            'section_intro' => '<p>Three-up row exercising the pricing-tier preset: heading, badge/spacer, capacity, kicker, price, subprice, list, and CTA at 33% width.</p>',
            'cards' => array(
                array(
                    'card_desktop_width' => '4',
                    'card_badge' => '',
                    'card_label_treatment' => 'eyebrow',
                    'card_style_preset' => 'pricing-tier',
                    'card_heading' => 'Iris',
                    'card_body' => '<p class="lacc-pricing-tier__capacity">Up to 50 guests</p><p class="lacc-pricing-tier__kicker">Fri-Sat from</p><div class="lacc-pkg-price-row"><strong class="lacc-pkg-price">$10,000</strong><span class="lacc-pkg-price-label">Package Rate</span></div><p class="lacc-pricing-tier__subprice">Sun-Thu from $8,000</p><p>Extra guests from $150/pp</p><ul class="lacc-pricing-list"><li>Ceremony in the Iris Room</li><li>Cocktail hour on North Shore Tavern &amp; Patio</li><li>Reception in the Iris Room</li><li>Buffet dinner with 2 entrees, 2 sides, soup, salad &amp; bread</li><li>Non-alcoholic beverages, coffee &amp; tea</li><li>6 rooms included</li><li>9am-10pm full-day access</li></ul>',
                    'card_button_label' => 'Inquire About Iris',
                    'card_button_url' => home_url( '/contact-us/' ),
                    'card_button_style' => 'brown',
                ),
                array(
                    'card_desktop_width' => '4',
                    'card_badge' => 'Most Popular',
                    'card_label_treatment' => 'eyebrow',
                    'card_style_preset' => 'pricing-tier',
                    'card_heading' => 'Pineview',
                    'card_body' => '<p class="lacc-pricing-tier__capacity">Up to 100 guests</p><p class="lacc-pricing-tier__kicker">Fri-Sat from</p><div class="lacc-pkg-price-row"><strong class="lacc-pkg-price">$16,500</strong><span class="lacc-pkg-price-label">Package Rate</span></div><p class="lacc-pricing-tier__subprice">Sun-Thu from $13,500</p><p>Extra guests from $150/pp</p><ul class="lacc-pricing-list"><li>Ceremony in the Pineview Room</li><li>Cocktail hour in the Lakeview Room</li><li>Reception in Pineview &amp; Lakeview</li><li>Buffet dinner with 2 entrees, 2 sides, soup, salad &amp; bread</li><li>Non-alcoholic beverages, coffee &amp; tea</li><li>6 rooms + 2 houses included</li><li>9am-10pm full-day access</li></ul>',
                    'card_button_label' => 'Inquire About Pineview',
                    'card_button_url' => home_url( '/contact-us/' ),
                    'card_button_style' => 'brown',
                ),
                array(
                    'card_desktop_width' => '4',
                    'card_badge' => '',
                    'card_label_treatment' => 'eyebrow',
                    'card_style_preset' => 'pricing-tier',
                    'card_heading' => 'Grand Pineview',
                    'card_body' => '<p class="lacc-pricing-tier__capacity">Up to 150 guests</p><p class="lacc-pricing-tier__kicker">Fri-Sat from</p><div class="lacc-pkg-price-row"><strong class="lacc-pkg-price">$32,500</strong><span class="lacc-pkg-price-label">Package Rate</span></div><p class="lacc-pricing-tier__subprice">Sun-Thu from $26,000</p><p>Extra guests from $150/pp</p><ul class="lacc-pricing-list"><li>Ceremony in the Pineview Room</li><li>Cocktail hour in Lakeview &amp; Library</li><li>Reception across Pineview, Lakeview &amp; Library</li><li>Buffet dinner with 2 entrees, 2 sides, soup, salad &amp; bread</li><li>Non-alcoholic beverages, coffee &amp; tea</li><li>6 rooms + 2 deluxe chalets + 2 houses included</li><li>9am-10pm full-day access</li></ul>',
                    'card_button_label' => 'Inquire About Grand Pineview',
                    'card_button_url' => home_url( '/contact-us/' ),
                    'card_button_style' => 'brown',
                ),
            ),
        )
    ),
    array_merge(
        $card_section_base,
        array(
            'acf_fc_layout' => 'section_card_grid',
            'section_anchor_id' => 'reference-card-grid-4-up',
            'section_eyebrow' => '4-up / 25% width',
            'section_heading' => 'Four-up card grid',
            'section_intro' => '<p>This is the density that still needs the most visual scrutiny before lock because the cards get tighter quickly.</p>',
            'cards' => array(
                array( 'card_desktop_width' => '3', 'card_image' => $img['img_0'], 'card_badge' => 'Seasonal Story', 'card_label_treatment' => 'flag', 'card_style_preset' => 'carousel-card', 'card_images' => array( array( 'image' => $img['img_0'], 'alt' => 'Property exterior' ), array( 'image' => $img['img_4'], 'alt' => 'Property grounds' ) ), 'card_heading' => 'Atmospheric card', 'card_body' => '<p>Test tighter copy rhythm.</p>', 'card_button_label' => 'Open', 'card_button_url' => home_url( '/lake-arrowhead-accommodations/' ), 'card_button_style' => 'outline-dark' ),
                array( 'card_desktop_width' => '3', 'card_image' => $img['img_1'], 'card_badge' => 'Specials Card', 'card_label_treatment' => 'none', 'card_style_preset' => 'specials-card', 'card_heading' => 'Book Early & Save', 'card_body' => '<div class="lacc-pricing-pattern"><p class="lacc-pricing-pattern__lede">Midweek Stay</p><p class="lacc-pricing-pattern__price">from $199 <span class="lacc-pricing-pattern__period">Limited time</span></p></div><p>Offer snapshot for tighter widths.</p><ul class="lacc-pricing-list"><li>Offer-first hierarchy</li><li>Compact pricing rhythm</li></ul>', 'card_button_label' => 'Open', 'card_button_url' => home_url( '/specials/' ), 'card_button_style' => 'outline-dark' ),
                array( 'card_desktop_width' => '3', 'card_badge' => 'Offer', 'card_label_treatment' => 'flag', 'card_style_preset' => 'offer-card', 'card_heading' => 'Offer card', 'card_body' => '<p>Watch the button and body spacing here.</p>', 'card_button_label' => 'Open', 'card_button_url' => home_url( '/specials/' ), 'card_button_style' => 'outline-dark' ),
                array( 'card_desktop_width' => '3', 'card_badge' => 'Start Here', 'card_label_treatment' => 'flag', 'card_style_preset' => 'prompt-card', 'card_heading' => 'Prompt card', 'card_body' => '<p>This is the lane to iterate before promotion.</p>', 'card_button_label' => 'Open', 'card_button_url' => home_url( '/contact-us/' ), 'card_button_style' => 'outline-dark' ),
            ),
        )
    ),
    array_merge(
        $card_section_base,
        array(
            'acf_fc_layout' => 'section_card_grid',
            'section_anchor_id' => 'reference-card-grid-5-up',
            'section_eyebrow' => '5-up / Amenities',
            'section_heading' => 'Five-up amenities grid',
            'section_intro' => '<p>This mirrors the denser amenities use case and exercises the current 20% width path.</p>',
            'cards' => array(
                array( 'card_desktop_width' => '15', 'card_heading' => 'Lake Views', 'card_body' => '<p>Visual access to the shoreline and mountain atmosphere.</p>' ),
                array( 'card_desktop_width' => '15', 'card_heading' => 'Dining', 'card_body' => '<p>Flexible dining and gathering spaces across the property.</p>' ),
                array( 'card_desktop_width' => '15', 'card_heading' => 'Trails', 'card_body' => '<p>Immediate access to outdoor exploration and quiet walks.</p>' ),
                array( 'card_desktop_width' => '15', 'card_heading' => 'Events', 'card_body' => '<p>Group-ready spaces for celebrations and retreats.</p>' ),
                array( 'card_desktop_width' => '15', 'card_heading' => 'Guest Rooms', 'card_body' => '<p>Simple overnight inventory for stay-and-gather weekends.</p>' ),
            ),
        )
    ),
    array(
        'acf_fc_layout' => 'section_image_scroller',
        'section_anchor_id' => 'reference-scroller-variant-1',
        'section_eyebrow' => 'Image Scroller Variant 1',
        'section_heading' => 'Variant 1 - Marquee with uniform and non-uniform item sizing',
        'section_intro' => '<p>This variant keeps the classic marquee behavior and demonstrates per-item width and height controls with centered captions.</p>',
        'container_type' => 'container',
        'scroller_variant' => 'variant-1-marquee',
        'uniform_item_size' => 0,
        'show_captions' => 1,
        'caption_font_family' => 'freight-big-pro',
        'caption_font_weight' => '500',
        'scroller_row_gap' => '18px',
        'scroller_column_gap' => '18px',
        'section_button_label' => 'View Full Gallery',
        'section_button_url' => home_url( '/gallery/' ),
        'section_button_style' => 'outline-dark',
        'button_size' => 'normal',
        'scroller_items' => array(
            array( 'image' => $img['img_0'], 'caption' => 'Gathering details', 'link_url' => home_url( '/gallery/' ), 'item_width' => '260px', 'item_height' => '220px' ),
            array( 'image' => $img['img_1'], 'caption' => 'Wedding portrait', 'link_url' => home_url( '/gallery/' ), 'item_width' => '330px', 'item_height' => '260px' ),
            array( 'image' => $img['img_2'], 'caption' => 'Hospitality moment', 'link_url' => home_url( '/gallery/' ), 'item_width' => '240px', 'item_height' => '210px' ),
            array( 'image' => $img['img_3'], 'caption' => 'Dining atmosphere', 'link_url' => home_url( '/gallery/' ), 'item_width' => '300px', 'item_height' => '240px' ),
            array( 'image' => $img['img_4'], 'caption' => 'Lodge interior', 'link_url' => home_url( '/gallery/' ), 'item_width' => '290px', 'item_height' => '230px' ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_image_scroller',
        'section_anchor_id' => 'reference-scroller-variant-2',
        'section_eyebrow' => 'Image Scroller Variant 2',
        'section_heading' => 'Variant 2 - Masonry ribbon inspired by homepage gallery rhythm',
        'section_intro' => '<p>This variant follows the small-wide-wide-wide-small cadence from the production homepage gallery treatment.</p>',
        'container_type' => 'container',
        'scroller_variant' => 'variant-2-masonry',
        'uniform_item_size' => 0,
        'show_captions' => 0,
        'scroller_row_gap' => '26px',
        'scroller_column_gap' => '14px',
        'masonry_row_offset' => '140px',
        'section_button_label' => 'View Full Gallery',
        'section_button_url' => home_url( '/gallery/' ),
        'section_button_style' => 'outline-dark',
        'button_size' => 'normal',
        'scroller_items' => array(
            array( 'image' => $img['img_0'], 'caption' => 'Masonry item 1', 'link_url' => home_url( '/gallery/' ), 'item_width' => '227px', 'item_height' => '300px' ),
            array( 'image' => $img['img_1'], 'caption' => 'Masonry item 2', 'link_url' => home_url( '/gallery/' ), 'item_width' => '470px', 'item_height' => '300px' ),
            array( 'image' => $img['img_2'], 'caption' => 'Masonry item 3', 'link_url' => home_url( '/gallery/' ), 'item_width' => '470px', 'item_height' => '300px' ),
            array( 'image' => $img['img_3'], 'caption' => 'Masonry item 4', 'link_url' => home_url( '/gallery/' ), 'item_width' => '470px', 'item_height' => '300px' ),
            array( 'image' => $img['img_4'], 'caption' => 'Masonry item 5', 'link_url' => home_url( '/gallery/' ), 'item_width' => '227px', 'item_height' => '300px' ),
            array( 'image' => $img['img_2'], 'caption' => 'Masonry item 6', 'link_url' => home_url( '/gallery/' ), 'item_width' => '470px', 'item_height' => '300px' ),
            array( 'image' => $img['img_1'], 'caption' => 'Masonry item 7', 'link_url' => home_url( '/gallery/' ), 'item_width' => '227px', 'item_height' => '300px' ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_image_scroller',
        'section_anchor_id' => 'reference-scroller-variant-3',
        'section_eyebrow' => 'Image Scroller Variant 3',
        'section_heading' => 'A PLACE PEOPLE COME BACK TO',
        'section_intro' => '<p>Variant 3 supports the framed complex gallery style from design sandbox while preserving builder controls and shared footer actions.</p>',
        'container_type' => 'container',
        'scroller_variant' => 'variant-3-framed',
        'uniform_item_size' => 0,
        'show_captions' => 1,
        'caption_font_family' => 'haarlem',
        'caption_font_weight' => '600',
        'scroller_row_gap' => '18px',
        'scroller_column_gap' => '20px',
        'section_button_label' => 'View Full Gallery',
        'section_button_url' => home_url( '/gallery/' ),
        'section_button_style' => 'outline-dark',
        'button_size' => 'normal',
        'scroller_items' => array(
            array( 'image' => $img['img_0'], 'caption' => 'Forest edges and warm interiors', 'link_url' => home_url( '/gallery/' ) ),
            array( 'image' => $img['img_1'], 'caption' => 'Ceremony and gathering moments', 'link_url' => home_url( '/gallery/' ) ),
            array( 'image' => $img['img_2'], 'caption' => 'Lakeside and grounds', 'link_url' => home_url( '/gallery/' ) ),
            array( 'image' => $img['img_3'], 'caption' => 'Dining and social spaces', 'link_url' => home_url( '/gallery/' ) ),
            array( 'image' => $img['img_4'], 'caption' => 'Return-worthy atmosphere', 'link_url' => home_url( '/gallery/' ) ),
            array( 'image' => $img['img_2'], 'caption' => 'Natural light and lake views', 'link_url' => home_url( '/gallery/' ) ),
            array( 'image' => $img['img_1'], 'caption' => 'Conversations and celebration', 'link_url' => home_url( '/gallery/' ) ),
            array( 'image' => $img['img_0'], 'caption' => 'Mountain textures and details', 'link_url' => home_url( '/gallery/' ) ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_featured_article',
        'section_anchor_id' => 'reference-featured-article',
        'featured_article' => $featured_post_id,
        'section_eyebrow' => 'Featured Article Layout',
        'button_label' => 'Read Article',
        'button_style' => 'outline-dark',
        'button_size' => 'normal',
    ),
    array(
        'acf_fc_layout' => 'section_featured_article',
        'section_anchor_id' => 'reference-featured-article-full-width',
        'layout_variant' => 'full-width',
        'featured_article' => $featured_post_id,
        'override_image' => $img['img_4'],
        'section_eyebrow' => 'North Shore Tavern',
        'override_title' => 'A place to gather, not just dine',
        'custom_excerpt' => 'Whether you linger over dinner, settle in for a second round, or use it as a simple meeting point, the tavern gives the stay a reliable social center.',
        'button_label' => 'Explore the Tavern',
        'button_url_override' => home_url( '/dining/' ),
        'button_style' => 'secondary',
        'button_size' => 'normal',
        'image_position' => 'left',
        'padding_top' => '0px',
        'padding_bottom' => '0px',
        'card_background_color' => '#f6f3ed',
    ),
    array(
        'acf_fc_layout' => 'section_split_feature',
        'section_anchor_id' => 'reference-split-feature',
        'section_eyebrow' => 'Split Feature Layout',
        'section_heading' => 'Editorial two-column storytelling section',
        'section_copy' => '<p>This specimen uses the real split-feature component and a site image so you can review the actual production surface instead of a sandbox approximation.</p><p>It is the right lane for warmer editorial storytelling that needs more presence than a card grid.</p>',
        'section_image' => $img['img_4'],
        'button_label' => 'Plan an Event',
        'button_url' => home_url( '/contact-us/' ),
        'button_style' => 'outline-dark',
        'button_size' => 'normal',
        'image_position' => 'right',
    ),
    array(
        'acf_fc_layout' => 'section_faq_accordion',
        'section_anchor_id' => 'reference-faq',
        'section_eyebrow' => 'FAQ Accordion',
        'section_heading' => 'Builder FAQ specimen',
        'section_intro' => '<p>This FAQ section is now DB-seeded so grouped questions and answers can be tuned directly in ACF.</p>',
        'categories_heading' => 'Categories:',
        'categories_intro' => '<p>Use this section for grouped questions, quick jump links, and expandable answers.</p>',
        'accordion_heading_font_family' => 'freight-big-pro',
        'heading_font_family' => 'haarlem',
        'heading_font_weight' => '400',
        'content_alignment' => 'left',
        'container_type' => 'container',
        'background_color' => '#ffffff',
        'padding_top' => '60px',
        'padding_bottom' => '60px',
        'faq_groups' => array(
            array(
                'faq_section' => 'Reservation & Arrival',
                'faq_section_anchor_id' => 'reference-faq-reservation-arrival',
                'faq_section_summary' => 'Check-in timing, access expectations, and basics before arrival.',
                'include_in_category_block' => 1,
                'faqs' => array(
                    array( 'question' => 'What time is check-in?', 'answer' => '<p>Guest check-in begins at 4 p.m.</p>' ),
                    array( 'question' => 'Can I bring my pet?', 'answer' => '<p>Only service animals are permitted on property.</p>' ),
                ),
            ),
            array(
                'faq_section' => 'Activities & Events',
                'faq_section_anchor_id' => 'reference-faq-activities-events',
                'faq_section_summary' => 'Weddings, on-property experiences, and how guests use the site.',
                'include_in_category_block' => 1,
                'faqs' => array(
                    array( 'question' => 'Do you host weddings?', 'answer' => '<p>Yes. The flexible builder includes dedicated wedding-focused section patterns.</p>' ),
                    array( 'question' => 'What can guests do on property?', 'answer' => '<p>Depending on season, guests can enjoy trails, lake views, and gathering spaces.</p>' ),
                ),
            ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_two_column',
        'section_anchor_id' => 'reference-two-column',
        'section_eyebrow' => 'Two Column Layout',
        'section_heading' => 'Two-column builder section using seeded content',
        'section_intro' => '<p>This demonstrates the real two-column component with a safer builder-ready data shape.</p>',
        'container_type' => 'container',
        'column_ratio' => '60-40',
        'column_gap' => '24px',
        'eyebrow_variant' => 'pill',
        'col_a_image' => $img['img_0'],
        'col_a_heading' => 'Image-led column',
        'col_a_copy' => '<p>Use the larger column for imagery or richer editorial content.</p>',
        'col_a_button_label' => 'Explore Gallery',
        'col_a_button_url' => home_url( '/gallery/' ),
        'col_a_button_style' => 'outline-dark',
        'col_b_heading' => 'Support column',
        'col_b_copy' => '<p>The narrower support column is useful for guidance, planning notes, or a lighter CTA lane.</p>',
        'col_b_button_label' => 'Contact Us',
        'col_b_button_url' => home_url( '/contact-us/' ),
        'col_b_button_style' => 'outline-dark',
    ),
    array(
        'acf_fc_layout' => 'section_split_collage',
        'section_anchor_id' => 'reference-split-collage-1up',
        'section_eyebrow' => 'Split Collage — 1-up Option A',
        'section_heading' => 'Single-image collage specimen',
        'section_intro' => '<p>One-image split collage specimen for hero-scale editorial storytelling with full-bleed media and contained copy.</p>',
        'container_type' => 'container-fluid',
        'image_position' => 'right',
        'collage_variant' => 'overlap-trio',
        'collage_preset' => '1-a',
        'media_min_height' => 'clamp(540px, 58vw, 900px)',
        'button_label' => 'Learn More',
        'button_url' => home_url( '/gallery/' ),
        'button_style' => 'outline-ink',
        'content_alignment' => 'left',
        'background_color' => '#c5b9aa',
        'background_gradient' => 'linear-gradient(145deg, #d4c8b8 0%, #b8aa98 100%)',
        'use_scrollwork' => 1,
        'scrollwork_side' => 'right',
        'scrollwork_color' => '#8DC5DB',
        'padding_top' => '72px',
        'padding_bottom' => '72px',
        'collage_items' => array(
            array(
                'url' => $split_collage_seed_1a_images[0] ?: $img['img_0'],
                'alt' => 'Gallery image one',
            ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_split_collage',
        'section_anchor_id' => 'reference-split-collage-2up',
        'section_eyebrow' => 'Split Collage — 2-up Option A',
        'section_heading' => 'Two-image collage specimen',
        'section_intro' => '<p>Two-image split collage specimen with light overlap and balanced focal spacing between media and copy lanes.</p>',
        'image_position' => 'left',
        'collage_variant' => 'overlap-trio',
        'collage_preset' => '2-a',
        'media_min_height' => 'clamp(560px, 60vw, 920px)',
        'button_label' => 'Learn More',
        'button_url' => home_url( '/gallery/' ),
        'button_style' => 'outline-ink',
        'content_alignment' => 'left',
        'background_color' => '#efede8',
        'padding_top' => '72px',
        'padding_bottom' => '72px',
        'collage_items' => array(
            array(
                'url' => $split_collage_seed_2a_images[0] ?: $img['img_1'],
                'alt' => 'Gallery image one',
            ),
            array(
                'url' => $split_collage_seed_2a_images[1] ?: $img['img_2'],
                'alt' => 'Gallery image two',
            ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_split_collage',
        'section_anchor_id' => 'reference-split-collage-a',
        'section_eyebrow' => 'Split Collage — Option A',
        'section_heading' => 'Photography on the right — overlapping collage treatment',
        'section_intro' => '<p>Three overlapping wedding photographs staged in the media column with overlapping grid positioning and transforms. Content column is capped at container width; images bleed full-width to the section edge.</p>',
        'image_position' => 'right',
        'collage_variant' => 'overlap-trio',
        'collage_preset' => '3-a',
        'button_label' => 'Learn More',
        'button_url' => home_url( '/gallery/' ),
        'button_style' => 'outline-ink',
        'content_alignment' => 'left',
        'background_color' => '#f6f3ed',
        'padding_top' => '72px',
        'padding_bottom' => '72px',
        'collage_items' => array(
            array( 
                'url' => $split_collage_seed_3a_images[0] ?: $img['img_0'],
                'alt' => 'Gallery image one',
            ),
            array( 
                'url' => $split_collage_seed_3a_images[1] ?: $img['img_1'],
                'alt' => 'Gallery image two',
            ),
            array( 
                'url' => $split_collage_seed_3a_images[2] ?: $img['img_2'],
                'alt' => 'Gallery image three',
            ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_split_collage',
        'section_anchor_id' => 'reference-split-collage-b',
        'section_eyebrow' => 'Split Collage — Option B',
        'section_heading' => 'Photography on the left — same overlapping treatment reversed',
        'section_intro' => '<p>The same three-frame overlap treatment flipped to the left side, with the content column anchored on the right.</p>',
        'image_position' => 'left',
        'collage_variant' => 'portrait-stack',
        'collage_preset' => '3-c',
        'media_min_height' => 'clamp(620px, 62vw, 980px)',
        'button_label' => 'Learn More',
        'button_url' => home_url( '/gallery/' ),
        'button_style' => 'outline-ink',
        'content_alignment' => 'left',
        'background_color' => '#efede8',
        'padding_top' => '72px',
        'padding_bottom' => '72px',
        'collage_items' => array(
            array( 
                'url' => $split_collage_seed_3c_images[0] ?: $img['img_2'],
                'alt' => 'Gallery image one',
            ),
            array( 
                'url' => $split_collage_seed_3c_images[1] ?: $img['img_3'],
                'alt' => 'Gallery image two',
            ),
            array( 
                'url' => $split_collage_seed_3c_images[2] ?: $img['img_4'],
                'alt' => 'Gallery image three',
            ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_split_collage',
        'section_anchor_id' => 'reference-split-collage-4up',
        'section_eyebrow' => 'Split Collage — 4-up Option A',
        'section_heading' => 'Four-image overlap recipe specimen',
        'section_intro' => '<p>This seeded specimen uses 4-up Option A so overlap rhythm, blend edges, and section height can be evaluated quickly.</p>',
        'image_position' => 'right',
        'collage_variant' => 'overlap-trio',
        'collage_preset' => '4-a',
        'media_min_height' => 'clamp(520px, 56vw, 860px)',
        'button_label' => 'Learn More',
        'button_url' => home_url( '/gallery/' ),
        'button_style' => 'outline-ink',
        'content_alignment' => 'left',
        'background_color' => '#ffffff',
        'padding_top' => '72px',
        'padding_bottom' => '72px',
        'collage_items' => array(
            array( 'url' => $split_collage_seed_4a_images[0] ?: $img['img_0'], 'alt' => 'Gallery image one' ),
            array( 'url' => $split_collage_seed_4a_images[1] ?: $img['img_1'], 'alt' => 'Gallery image two' ),
            array( 'url' => $split_collage_seed_4a_images[2] ?: $img['img_2'], 'alt' => 'Gallery image three' ),
            array( 'url' => $split_collage_seed_4a_images[3] ?: $img['img_3'], 'alt' => 'Gallery image four' ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_split_collage',
        'section_anchor_id' => 'reference-split-collage-5up',
        'section_eyebrow' => 'Split Collage — 5-up Option B',
        'section_heading' => 'Five-image overlap recipe specimen',
        'section_intro' => '<p>This specimen uses 5-up Option B to test denser overlap while keeping the text lane fully constrained.</p>',
        'image_position' => 'left',
        'collage_variant' => 'overlap-trio',
        'collage_preset' => '5-b',
        'media_min_height' => 'clamp(560px, 58vw, 920px)',
        'button_label' => 'Learn More',
        'button_url' => home_url( '/gallery/' ),
        'button_style' => 'outline-ink',
        'content_alignment' => 'left',
        'background_color' => '#ece8df',
        'padding_top' => '72px',
        'padding_bottom' => '72px',
        'collage_items' => array(
            array( 'url' => $split_collage_seed_5b_images[0] ?: $img['img_0'], 'alt' => 'Gallery image one' ),
            array( 'url' => $split_collage_seed_5b_images[1] ?: $img['img_1'], 'alt' => 'Gallery image two' ),
            array( 'url' => $split_collage_seed_5b_images[2] ?: $img['img_2'], 'alt' => 'Gallery image three' ),
            array( 'url' => $split_collage_seed_5b_images[3] ?: $img['img_3'], 'alt' => 'Gallery image four' ),
            array( 'url' => $split_collage_seed_5b_images[4] ?: $img['img_4'], 'alt' => 'Gallery image five' ),
        ),
    ),
    array(
        'acf_fc_layout' => 'section_split_collage',
        'section_anchor_id' => 'reference-split-collage-6up',
        'section_eyebrow' => 'Split Collage — 6-up Option C',
        'section_heading' => 'Six-image overlap recipe specimen',
        'section_intro' => '<p>This specimen pushes the densest recipe (6-up Option C) and is intended to stress-test overlap depth and blend treatment.</p>',
        'image_position' => 'right',
        'collage_variant' => 'overlap-trio',
        'collage_preset' => '6-c',
        'media_min_height' => 'clamp(620px, 62vw, 980px)',
        'button_label' => 'Learn More',
        'button_url' => home_url( '/gallery/' ),
        'button_style' => 'outline-ink',
        'content_alignment' => 'left',
        'background_color' => '#e9e4d8',
        'padding_top' => '72px',
        'padding_bottom' => '72px',
        'collage_items' => array(
            array( 'url' => $split_collage_seed_6c_images[0] ?: $img['img_0'], 'alt' => 'Gallery image one' ),
            array( 'url' => $split_collage_seed_6c_images[1] ?: $img['img_1'], 'alt' => 'Gallery image two' ),
            array( 'url' => $split_collage_seed_6c_images[2] ?: $img['img_2'], 'alt' => 'Gallery image three' ),
            array( 'url' => $split_collage_seed_6c_images[3] ?: $img['img_3'], 'alt' => 'Gallery image four' ),
            array( 'url' => $split_collage_seed_6c_images[4] ?: $img['img_4'], 'alt' => 'Gallery image five' ),
            array( 'url' => $split_collage_seed_6c_images[5] ?: $img['img_0'], 'alt' => 'Gallery image six' ),
        ),
    ),
);

$ok = update_field( 'field_tsb_page_sections', $rows, $page_id );

$saved = get_field( 'page_sections', $page_id );
$count = is_array( $saved ) ? count( $saved ) : 0;

if ( false === $ok && 0 === $count ) {
    WP_CLI::error( 'Failed to update page_sections.' );
}

$page_title = get_the_title( $page_id );
$status = false === $ok
    ? 'No changes detected in page_sections.'
    : 'Seeded page_sections.';

WP_CLI::success( $status . ' page_id=' . $page_id . ' title="' . $page_title . '" rows=' . $count );
