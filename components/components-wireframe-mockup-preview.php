<?php
$background_video_url = 'https://fast.wistia.com/embed/medias/4e2kjpftga.jsonp';
$background_video_library_url = 'https://fast.wistia.com/assets/external/E-v1.js';
$background_video_wistia_id = '4e2kjpftga';
$wistia_background_class_options = 'seo=false videoFoam=true autoPlay=true muted=true silentAutoPlay=true playsinline=true playbar=false playButton=false smallPlayButton=false fullscreenButton=false settingsControl=false volumeControl=false playbackRateControl=false qualityControl=false playPauseNotifier=false controlsVisibleOnLoad=false copyLinkAndThumbnailEnabled=false endVideoBehavior=loop';

$booking_url = 'https://reservations.travelclick.com/112652#/guestsandrooms';
$explore_url = home_url( '/accommodations/' );

$asset_lakeside = 'https://lal.local/wp-content/uploads/2026/04/ucla-lake-arrowhead-ldoge-lakeside.jpg';
$asset_wedding = 'https://lal.local/wp-content/uploads/2026/04/lal-wedding.jpg';
$asset_wedding_two = 'https://lal.local/wp-content/uploads/2026/04/lal-wedding-2.jpg';
$asset_firepit_group = get_template_directory_uri() . '/assets/images/mockup-firepit-group.jpg';
$gallery_images = array(
    'https://lal.local/wp-content/uploads/2017/05/entrance-to-the-conference-center.jpg',
    'https://lal.local/wp-content/uploads/2017/05/main-lodge-exterior.jpg',
    'https://lal.local/wp-content/uploads/2018/06/BreakfastBuffett5711-1.jpg',
    'https://lal.local/wp-content/uploads/2022/04/alumni-room-board-room-setup.jpg',
    'https://lal.local/wp-content/uploads/2019/01/LACC_Retreat1_LG.jpg',
    'https://lal.local/wp-content/uploads/2017/05/boat-ride-on-lake-arrowhead.jpg',
    'https://lal.local/wp-content/uploads/2022/04/iris-table-groups-setup.jpg',
    'https://lal.local/wp-content/uploads/2018/06/Cheese-Plate4636-1.jpg',
    'https://lal.local/wp-content/uploads/2017/05/briar-creek-chalet-sleeps-up-to-ten.jpg',
    'https://lal.local/wp-content/uploads/2018/06/Craby-Patties4759-1.jpg',
    'https://lal.local/wp-content/uploads/2018/06/CornChowder5625-1.jpg',
    'https://lal.local/wp-content/uploads/2019/01/LACC_Retreat2_LG.jpg',
    'https://lal.local/wp-content/uploads/2017/05/main-lodge-after-snowfall.jpg',
    'https://lal.local/wp-content/uploads/2022/03/a-magical-wedding-location-lake-arrowhead.jpg',
    'https://lal.local/wp-content/uploads/2017/05/double-occupancy-vintage-condolet.jpg',
    'https://lal.local/wp-content/uploads/2017/05/fitness-center-open-24-hours.jpg',
    'https://lal.local/wp-content/uploads/2017/05/indoor-hot-tub.jpg',
    'https://lal.local/wp-content/uploads/2018/06/LavaLemon4856-1.jpg',
    'https://lal.local/wp-content/uploads/2017/05/pool-03.jpg',
    'https://lal.local/wp-content/uploads/2019/01/LACC_New2_Kayaking_LG.jpg',
);

$stay_cards = array(
    array(
        'eyebrow' => 'Midweek',
        'title' => 'Weekday escape partner',
        'copy' => 'Quiet mornings, space to reset, and an easy basecamp for a few days in the mountains.',
        'image' => 'https://lal.local/wp-content/uploads/2024/07/Breakfast-Plate.jpg',
        'url' => home_url( '/specials/' ),
    ),
    array(
        'eyebrow' => 'Weekend',
        'title' => 'Weekend escape',
        'copy' => 'A shorter stay built around arrival, dinner, a slower pace, and time outdoors.',
        'image' => 'https://lal.local/wp-content/uploads/2024/08/Zen-Deck-View-1.jpg',
        'url' => home_url( '/gallery/' ),
    ),
    array(
        'eyebrow' => 'Any season',
        'title' => 'Time together',
        'copy' => 'Come for the season, the setting, or a reason to get everyone away for a bit.',
        'image' => 'https://lal.local/wp-content/uploads/2024/07/Remote-Learning-1.jpg',
        'url' => home_url( '/contact-us/' ),
    ),
);

$experience_items = array(
    array(
        'title' => 'Hiking & Trails',
        'copy' => 'Walk out into the woods without overthinking the day. A little movement goes a long way here.',
    ),
    array(
        'title' => 'Lake Arrowhead Village',
        'copy' => 'Browse nearby shops, pick up a few things, or build a lighter off-property afternoon into the trip.',
    ),
    array(
        'title' => 'Seasonal Activities',
        'copy' => 'The pace shifts with the season, which is part of the appeal. The stay does not have to feel overprogrammed.',
    ),
    array(
        'title' => 'Group Gatherings',
        'copy' => 'From casual meetups to milestone weekends, the setting does a lot of the hosting work for you.',
    ),
);

$faq_items = array(
    array(
        'question' => 'What makes this different from other Lake Arrowhead hotels?',
        'answer' => 'The lodge is intentionally quieter and more spacious. It does not feel like a busy roadside stay, and the property has room to breathe.',
    ),
    array(
        'question' => 'Can I book this for a weekend?',
        'answer' => 'Yes. Some guests come for a full week, but many use the lodge for a two- or three-night weekend reset.',
    ),
    array(
        'question' => 'What is the food scene like?',
        'answer' => 'North Shore Tavern gives the stay an easy gathering point, and the wider Lake Arrowhead area adds more options nearby.',
    ),
    array(
        'question' => 'How close is it to Los Angeles?',
        'answer' => 'Approximate drive time depends on traffic, but it is close enough to feel possible and far enough to feel like a real change of pace.',
    ),
);

$intro_grid_cards = array(
    array(
        'card_desktop_width' => '3',
        'card_heading' => 'Explore',
        'card_body' => '<p>Trails, lake views, and enough of the mountain to make a day feel fuller.</p>',
    ),
    array(
        'card_desktop_width' => '3',
        'card_heading' => 'Relax',
        'card_body' => '<p>Quiet spaces, slower mornings, and a stay that does not ask much of you.</p>',
    ),
    array(
        'card_desktop_width' => '3',
        'card_heading' => 'Gather',
        'card_body' => '<p>Shared meals, easy conversation, and places that make group time feel natural.</p>',
    ),
    array(
        'card_desktop_width' => '3',
        'card_heading' => 'Retreat',
        'card_body' => '<p>Step away from routine without needing a long-haul plan or a complicated itinerary.</p>',
    ),
);

$intro_card_grid_override = array(
    'section_anchor_id' => 'different-kind-getaway',
    'section_eyebrow' => 'A Different Kind Of Getaway',
    'section_heading' => 'This is not a typical stay',
    'section_intro' => '<p>The mountain lodge sets a different pace. You do not come here for noise or novelty overload. You come for room to breathe, time outdoors, and a setting that already feels a little removed from the usual rhythm.</p>',
    'content_alignment' => 'left',
    'container_type' => 'container',
    'use_scrollwork' => 1,
    'scrollwork_side' => 'right',
    'scrollwork_color' => 'var(--lacc-color-gold-soft, #946E29)',
    'section_classes' => 'mockup-preview__section mockup-preview__section--paper section-card-grid--intro-pattern section-card-grid--intro-helvetica',
    'padding_top' => '100px',
    'padding_bottom' => '100px',
    'header_column_width' => '12',
    'header_max_width' => '100%',
    'header_padding_bottom' => '34px',
    'section_intro_spacing_bottom' => '0',
    'section_intro_max_width' => '70rem',
    'heading_font_family' => 'haarlem',
    'heading_font_weight' => '400',
    'heading_size' => 'xxl',
    'section_heading_color' => 'var(--lacc-color-ink, #51534a)',
    'eyebrow_color' => 'var(--lacc-color-gold-soft, #946E29)',
    'eyebrow_font_size' => '12px',
    'eyebrow_text_transform' => 'uppercase',
    'card_heading_font_family' => 'haarlem',
    'card_heading_font_weight' => '400',
    'card_gutter' => '22px',
    'card_padding' => '26px 24px',
    'card_padding_top' => '26px',
    'card_padding_bottom' => '26px',
    'card_background_gradient' => 'linear-gradient(180deg, rgba(255,255,255,0.98) 0%, rgba(255,255,255,0.98) 100%)',
    'card_border_color' => 'rgba(81, 83, 74, 0.16)',
    'enable_card_hover_effect' => 0,
    'equalize_card_bottoms' => 1,
    'cards' => $intro_grid_cards,
);
?>

<style>
.mockup-preview {
    --mockup-line: rgba(81, 83, 74, 0.16);
    --mockup-shadow: 0 24px 60px rgba(81, 83, 74, 0.14);
    --mockup-scrollwork-width: 78px;
    color: var(--lacc-color-ink, #51534a);
    background: var(--lacc-color-white, #ffffff);
}

.mockup-preview,
.mockup-preview p,
.mockup-preview li,
.mockup-preview a,
.mockup-preview button,
.mockup-preview summary {
    font-family: Arial, Helvetica, sans-serif;
}

.mockup-preview .mockup-preview__experience-copy em,
.mockup-preview .mockup-preview__cta-copy em {
    font-family: "Freight Big Pro", Georgia, serif;
    font-style: italic;
}

.mockup-preview .container {
    position: relative;
    z-index: 2;
}

.mockup-preview__section {
    position: relative;
    padding: 88px 0;
}

.mockup-preview__section--paper {
    background: var(--lacc-color-white, #ffffff);
}

.mockup-preview__section--cream {
    background: var(--lacc-color-cream, #f6f3ed);
}

.mockup-preview__section--about {
    background: linear-gradient(180deg, #587596 0%, #364b63 100%);
    color: var(--lacc-color-white, #ffffff);
}

.mockup-preview__section--forest {
    background: var(--lacc-color-ink, #51534a);
    color: var(--lacc-color-cream, #f6f3ed);
}

.mockup-preview__section--split {
    padding-top: 0;
    padding-bottom: 0;
}

.mockup-preview__section--intro {
    padding-top: 0;
    padding-bottom: 0;
}

.mockup-preview__eyebrow {
    display: inline-block;
    margin-bottom: 14px;
    color: var(--lacc-color-gold-soft, #946E29);
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-style: normal;
    font-weight: 600;
    letter-spacing: .18em;
    line-height: 1.2;
    text-transform: uppercase;
}

.mockup-preview__title {
    margin: 0;
    color: inherit;
    font-size: clamp(36px, 4.8vw, 68px);
    line-height: .98;
}

.mockup-preview__lede,
.mockup-preview__copy,
.mockup-preview__faq-answer,
.mockup-preview__experience-copy,
.mockup-preview__cta-copy {
    font-size: 18px;
    line-height: 1.72;
}

.mockup-preview__hero {
    position: relative;
    min-height: 90svh;
    overflow: hidden;
    background: #333333;
}

.mockup-preview__hero .vid-container-overflow,
.mockup-preview__hero .video-container,
.mockup-preview__hero .video-hero-text-background-overlay {
    position: absolute;
    inset: 0;
}

.mockup-preview__hero .vid-container-overflow {
    z-index: 0;
    overflow: hidden;
    height: 100%;
}

.mockup-preview__hero .video-container {
    height: 100%;
    padding-bottom: 0 !important;
}

.mockup-preview__hero .video-container .wistia_responsive_padding,
.mockup-preview__hero .video-container .wistia_responsive_wrapper,
.mockup-preview__hero .video-container .wistia_embed {
    height: 100% !important;
}

.mockup-preview__hero .video-container .wistia_responsive_padding {
    position: absolute !important;
    inset: 0;
    padding-bottom: 0 !important;
}

.mockup-preview__hero .video-container,
.mockup-preview__hero .video-container .wistia_responsive_padding,
.mockup-preview__hero .video-container .wistia_responsive_wrapper,
.mockup-preview__hero .video-container .w-video-wrapper,
.mockup-preview__hero .video-container .w-css-reset,
.mockup-preview__hero .video-container img,
.mockup-preview__hero .video-container video {
    width: 100% !important;
    height: 100% !important;
}

.mockup-preview__hero .video-container .wistia_responsive_wrapper,
.mockup-preview__hero .video-container .wistia_embed,
.mockup-preview__hero .video-container .w-video-wrapper,
.mockup-preview__hero .video-container .w-css-reset,
.mockup-preview__hero .video-container video,
.mockup-preview__hero .video-container img {
    position: absolute !important;
    inset: 0;
}

.mockup-preview__hero .video-container video,
.mockup-preview__hero .video-container img {
    object-fit: cover !important;
}

.mockup-preview__hero .video-container .wistia_embed .w-bottom-bar,
.mockup-preview__hero .video-container .wistia_embed .click-for-sound-btn,
.mockup-preview__hero .video-container .wistia_embed a[aria-label*='Wistia Logo'],
.mockup-preview__hero .video-container .wistia_embed .w-wistia-logo {
    display: none !important;
    opacity: 0 !important;
    visibility: hidden !important;
    pointer-events: none !important;
}

.mockup-preview__hero .video-hero-text-background-overlay {
    z-index: 2;
}

.mockup-preview__hero .video-hero-text-background-overlay::before {
    content: '';
    position: absolute;
    inset: 0;
    background: #000000;
    mix-blend-mode: multiply;
    opacity: .25;
    pointer-events: none;
}

.mockup-preview__hero .video-hero-text-background-overlay > * {
    position: relative;
    z-index: 1;
}

.mockup-preview__hero .video-hero-text-container {
    display: flex;
    align-items: flex-end;
    width: 100%;
    height: 100%;
    padding: 0 0 86px;
}

.mockup-preview__hero .hero-slider-content {
    width: 100%;
    max-width: 920px;
}

.mockup-preview__hero .mockup-preview__hero-eyebrow {
    display: inline-block;
    margin-bottom: 18px;
    padding: 8px 16px;
    border: 2px solid var(--lacc-color-white, #ffffff);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.08);
    color: var(--lacc-color-white, #ffffff);
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .18em;
    line-height: 1.2;
    text-transform: uppercase;
}

.mockup-preview__hero .hero-slider-title {
    max-width: none;
    margin: 0 0 18px;
    color: var(--lacc-color-white, #ffffff) !important;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(50px, 7vw, 92px);
    font-weight: 400;
    letter-spacing: .04em;
    line-height: .96;
    text-transform: none;
}

.mockup-preview__hero .hero-slider-subheading,
.mockup-preview__hero .hero-slider-subheading p {
    max-width: 32em;
    margin: 0;
    color: var(--lacc-color-white, #ffffff);
    font-family: "Freight Big Pro", Georgia, serif !important;
    font-size: clamp(18px, 1.7vw, 26px);
    font-style: italic !important;
    font-weight: 500 !important;
    letter-spacing: .01em;
    line-height: 1.45;
    text-align: left;
}

.mockup-preview__hero .hero-button-group,
.mockup-preview__hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    margin-top: 34px;
}

.mockup-preview .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 178px;
    padding: .85em 1.45em;
    border: 1px solid transparent;
    border-radius: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-style: normal;
    font-weight: 600;
    letter-spacing: .08em;
    line-height: 1.2;
    text-decoration: none !important;
    text-transform: uppercase;
    transition: background-color .2s ease, color .2s ease, border-color .2s ease, transform .2s ease, box-shadow .2s ease;
}

.mockup-preview .hero-button:hover,
.mockup-preview .hero-button:focus {
    transform: translateY(-1px);
    box-shadow: 0 10px 20px rgba(0,0,0,.12);
}

.mockup-preview .hero-button:focus-visible {
    outline: 2px solid #7A5A1F;
    outline-offset: 3px;
}

.mockup-preview .hero-button--primary { background: #3f5f85; border-color: #3f5f85; color: var(--lacc-color-white, #ffffff) !important; }
.mockup-preview .hero-button--primary:hover,
.mockup-preview .hero-button--primary:focus { background: #324c6a; border-color: #324c6a; }

.mockup-preview .hero-button--secondary { background: transparent; border-color: #7A5A1F; color: #7A5A1F !important; }
.mockup-preview .hero-button--secondary:hover,
.mockup-preview .hero-button--secondary:focus { background: #644a19; border-color: #644a19; color: var(--lacc-color-white, #ffffff) !important; }

.mockup-preview .hero-button--brown { background: transparent; border-color: #7c5542; color: #7c5542 !important; }
.mockup-preview .hero-button--brown:hover,
.mockup-preview .hero-button--brown:focus { background: #7c5542; border-color: #7c5542; color: var(--lacc-color-white, #ffffff) !important; }

.mockup-preview .hero-button--light { background: var(--lacc-color-cream, #f6f3ed); border-color: #ddd4c8; color: var(--lacc-color-ink, #51534a) !important; }
.mockup-preview .hero-button--light:hover,
.mockup-preview .hero-button--light:focus { background: #ebe2d5; border-color: #ddd4c8; color: var(--lacc-color-ink, #51534a) !important; }

.mockup-preview .hero-button--outline { background: transparent; border-color: var(--lacc-color-white, #ffffff); color: var(--lacc-color-white, #ffffff) !important; }
.mockup-preview .hero-button--outline:hover,
.mockup-preview .hero-button--outline:focus { background: rgba(255,255,255,.12); border-color: var(--lacc-color-gold, #d4a441); }

.mockup-preview .hero-button--outline-dark { background: transparent; border-color: var(--lacc-color-ink, #51534a); color: var(--lacc-color-ink, #51534a) !important; }
.mockup-preview .hero-button--outline-dark:hover,
.mockup-preview .hero-button--outline-dark:focus { background: rgba(81,83,74,.08); border-color: var(--lacc-color-ink, #51534a); color: #3b3d37 !important; }

.mockup-preview .hero-button--outline-gold { background: transparent; border-color: #7c5542; color: #7c5542 !important; }
.mockup-preview .hero-button--outline-gold:hover,
.mockup-preview .hero-button--outline-gold:focus { background: #7c5542; border-color: #7c5542; color: var(--lacc-color-white, #ffffff) !important; }

.mockup-preview .background-video-toggle {
    position: absolute;
    right: 20px;
    bottom: 20px;
    z-index: 4;
    padding: 12px 14px;
    border: 0;
    border-radius: 4px;
    background: rgba(0,0,0,.65);
    color: var(--lacc-color-white, #ffffff);
    cursor: pointer;
    font-size: 16px;
}

.lacc-sandbox .mockup-preview { margin-top: 36px; }

.mockup-preview__split-grid { display: grid; grid-template-columns: minmax(0, .92fr) minmax(0, 1.08fr); align-items: stretch; }
.mockup-preview__image-panel { position: relative; min-height: 648px; background-size: cover; background-position: center; }
.mockup-preview__image-panel::after { content: ''; position: absolute; top: 0; right: calc(var(--mockup-scrollwork-width, 78px) / -2); bottom: 0; width: var(--mockup-scrollwork-width, 78px); background-color: var(--lacc-color-white, #ffffff); -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg'); mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg'); -webkit-mask-repeat: repeat-y; mask-repeat: repeat-y; -webkit-mask-position: center; mask-position: center; -webkit-mask-size: var(--mockup-scrollwork-width, 78px) auto; mask-size: var(--mockup-scrollwork-width, 78px) auto; clip-path: inset(0 50% 0 0); opacity: .6; z-index: 2; }
.mockup-preview__content-panel { position: relative; isolation: isolate; padding: clamp(44px, 7vw, 92px); background: var(--lacc-color-cream, #f6f3ed); color: var(--lacc-color-ink, #51534a); }
.mockup-preview__content-panel > * { position: relative; z-index: 1; }
.mockup-preview__content-panel::after { content: ''; position: absolute; top: 0; left: calc(var(--mockup-scrollwork-width, 78px) / -2); bottom: 0; width: var(--mockup-scrollwork-width, 78px); background-color: var(--lacc-color-gold-soft, #946E29); -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg'); mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg'); -webkit-mask-repeat: repeat-y; mask-repeat: repeat-y; -webkit-mask-position: center; mask-position: center; -webkit-mask-size: var(--mockup-scrollwork-width, 78px) auto; mask-size: var(--mockup-scrollwork-width, 78px) auto; clip-path: inset(0 0 0 50%); opacity: .5; pointer-events: none; z-index: 2; }
.mockup-preview__split-copy { max-width: 40em; }
.mockup-preview__section--split .mockup-preview__lede { font-size: 18px; line-height: 1.7; }
.mockup-preview__cards { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; margin-top: 42px; }
.mockup-preview__card { display: flex; flex-direction: column; min-height: 100%; background: rgba(255, 255, 255, 0.96); box-shadow: var(--mockup-shadow); transition: transform .2s ease, box-shadow .2s ease; }
.mockup-preview__card:hover, .mockup-preview__card:focus-within { transform: translateY(-2px); box-shadow: 0 28px 56px rgba(81, 83, 74, 0.18); }
.mockup-preview__card-media { overflow: hidden; aspect-ratio: 1 / .9; }
.mockup-preview__card-image { display: block; width: 100%; height: 100%; object-fit: cover; }
.mockup-preview__card-body { display: flex; flex: 1 1 auto; flex-direction: column; gap: 16px; padding: 24px 24px 28px; }
.mockup-preview__card-eyebrow { color: var(--lacc-color-gold-soft, #946E29); }
.mockup-preview__card-title { margin: 0; font-family: HaarlemDeco, Arial, Helvetica, sans-serif; font-size: clamp(26px, 3vw, 34px); font-weight: 400; line-height: 1.14; }
.mockup-preview__card-link { margin-top: auto; color: var(--lacc-color-gold-soft, #946E29); font-size: 14px; font-style: normal; font-weight: 600; letter-spacing: .12em; text-decoration: none; text-transform: uppercase; }

.mockup-preview__gallery-wall { width: 100vw; margin-top: 36px; margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw); overflow: hidden; }
.mockup-preview__gallery-track { display: flex; width: max-content; gap: 14px; padding: 0 22px; animation: mockup-preview-gallery-drift 150s linear infinite; will-change: transform; }
.mockup-preview__gallery-strip { display: flex; gap: 14px; min-height: 820px; align-items: center; }
.mockup-preview__gallery-group { --mockup-gallery-frame-inset: 8px; --mockup-gallery-corner-width: 64px; --mockup-gallery-corner-height: 64px; --mockup-gallery-frame-stroke: #51534a; --mockup-gallery-frame-stroke-width: 1.08px; position: relative; box-sizing: border-box; display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); grid-template-rows: .95fr 1.42fr .95fr; gap: 12px; height: clamp(380px, 39vh, 50vh); max-height: 50vh; width: clamp(370px, 30vw, 560px); padding: 28px; background: transparent; }
.mockup-preview__gallery-group--compact { grid-template-rows: .96fr 1.42fr .96fr; height: clamp(380px, 40vh, 48vh); }
.mockup-preview__gallery-group--short { grid-template-rows: .82fr 1.08fr .82fr; height: clamp(300px, 31vh, 39vh); }
.mockup-preview__gallery-group--mid { grid-template-rows: .9fr 1.24fr .9fr; height: clamp(340px, 35vh, 43vh); }
.mockup-preview__gallery-group--tall { grid-template-rows: 1fr 1.58fr 1fr; height: clamp(430px, 46vh, 50vh); }
.mockup-preview__gallery-group::before { content: ''; position: absolute; inset: 0; pointer-events: none; background: linear-gradient(var(--mockup-gallery-frame-stroke), var(--mockup-gallery-frame-stroke)) top var(--mockup-gallery-frame-inset) left calc(var(--mockup-gallery-frame-inset) + var(--mockup-gallery-corner-width)) / calc(100% - (2 * var(--mockup-gallery-frame-inset)) - (2 * var(--mockup-gallery-corner-width))) var(--mockup-gallery-frame-stroke-width) no-repeat, linear-gradient(var(--mockup-gallery-frame-stroke), var(--mockup-gallery-frame-stroke)) bottom var(--mockup-gallery-frame-inset) left calc(var(--mockup-gallery-frame-inset) + var(--mockup-gallery-corner-width)) / calc(100% - (2 * var(--mockup-gallery-frame-inset)) - (2 * var(--mockup-gallery-corner-width))) var(--mockup-gallery-frame-stroke-width) no-repeat, linear-gradient(var(--mockup-gallery-frame-stroke), var(--mockup-gallery-frame-stroke)) top calc(var(--mockup-gallery-frame-inset) + var(--mockup-gallery-corner-height)) left var(--mockup-gallery-frame-inset) / var(--mockup-gallery-frame-stroke-width) calc(100% - (2 * var(--mockup-gallery-frame-inset)) - (2 * var(--mockup-gallery-corner-height))) no-repeat, linear-gradient(var(--mockup-gallery-frame-stroke), var(--mockup-gallery-frame-stroke)) top calc(var(--mockup-gallery-frame-inset) + var(--mockup-gallery-corner-height)) right var(--mockup-gallery-frame-inset) / var(--mockup-gallery-frame-stroke-width) calc(100% - (2 * var(--mockup-gallery-frame-inset)) - (2 * var(--mockup-gallery-corner-height))) no-repeat; }
.mockup-preview__gallery-corner { position: absolute; width: var(--mockup-gallery-corner-width); height: var(--mockup-gallery-corner-height); background: url('/wp-content/themes/LACC-sage-theme-master/brand/scrollwork-brand-gray.svg') center / 100% 100% no-repeat; pointer-events: none; z-index: 2; }
.mockup-preview__gallery-corner--top-left { top: var(--mockup-gallery-frame-inset); left: var(--mockup-gallery-frame-inset); }
.mockup-preview__gallery-corner--top-right { top: var(--mockup-gallery-frame-inset); right: var(--mockup-gallery-frame-inset); transform: scaleX(-1); }
.mockup-preview__gallery-corner--bottom-left { bottom: var(--mockup-gallery-frame-inset); left: var(--mockup-gallery-frame-inset); transform: scaleY(-1); }
.mockup-preview__gallery-corner--bottom-right { right: var(--mockup-gallery-frame-inset); bottom: var(--mockup-gallery-frame-inset); transform: scale(-1); }
.mockup-preview__gallery-group:nth-child(4n + 1) { transform: translateY(10px); }
.mockup-preview__gallery-group:nth-child(4n + 2) { transform: translateY(-14px); }
.mockup-preview__gallery-group:nth-child(4n + 3) { transform: translateY(6px); }
.mockup-preview__gallery-group:nth-child(4n) { transform: translateY(-20px); }
.mockup-preview__gallery-item { position: relative; overflow: hidden; background: rgba(81, 83, 74, 0.08); border: 2px solid rgba(93, 71, 39, 0.5); box-shadow: inset 0 0 0 1px rgba(247, 240, 226, 0.62); }
.mockup-preview__gallery-item::after { content: ''; position: absolute; inset: 7px; border: 1px solid rgba(248, 240, 227, 0.34); pointer-events: none; }
.mockup-preview__gallery-group--left-feature .mockup-preview__gallery-item:nth-of-type(1) { grid-column: 1 / span 3; grid-row: 1 / span 2; }
.mockup-preview__gallery-group--left-feature .mockup-preview__gallery-item:nth-of-type(2) { grid-column: 4; grid-row: 1; }
.mockup-preview__gallery-group--left-feature .mockup-preview__gallery-item:nth-of-type(3) { grid-column: 4; grid-row: 2; }
.mockup-preview__gallery-group--left-feature .mockup-preview__gallery-item:nth-of-type(4) { grid-column: 1 / -1; grid-row: 3; }
.mockup-preview__gallery-group--right-feature .mockup-preview__gallery-item:nth-of-type(1) { grid-column: 1; grid-row: 1; }
.mockup-preview__gallery-group--right-feature .mockup-preview__gallery-item:nth-of-type(2) { grid-column: 1; grid-row: 2; }
.mockup-preview__gallery-group--right-feature .mockup-preview__gallery-item:nth-of-type(3) { grid-column: 2 / -1; grid-row: 1 / span 2; }
.mockup-preview__gallery-group--right-feature .mockup-preview__gallery-item:nth-of-type(4) { grid-column: 1 / -1; grid-row: 3; }
.mockup-preview__gallery-item img { display: block; width: 100%; height: 100%; object-fit: cover; transition: transform .55s ease; }
.mockup-preview__gallery-actions { display: flex; align-items: center; justify-content: center; gap: 24px; margin-top: 38px; }
.mockup-preview__gallery-toggle { display: inline-flex; align-items: center; justify-content: center; gap: 8px; min-width: 0; padding: .75em 1.5em; border: 1px solid #7A5A1F; border-radius: 0; background: transparent; color: #7A5A1F; font-size: 16px; font-weight: 600; letter-spacing: .04em; line-height: 1; text-transform: uppercase; transition: all .35s ease-in-out; }
.mockup-preview__gallery-toggle:hover, .mockup-preview__gallery-toggle:focus { background: #644a19; border-color: #644a19; color: var(--lacc-color-white, #ffffff); outline: none; }
.mockup-preview__gallery-wall:hover .mockup-preview__gallery-track, .mockup-preview__gallery-wall:focus-within .mockup-preview__gallery-track { animation-play-state: paused; }
@keyframes mockup-preview-gallery-drift { from { transform: translate3d(0, 0, 0); } to { transform: translate3d(calc(-50% - 11px), 0, 0); } }
.mockup-preview__gallery-item:hover img, .mockup-preview__gallery-item:focus-within img { transform: scale(1.03); }
@media (prefers-reduced-motion: reduce) { .mockup-preview__gallery-track { animation: none; } }

.mockup-preview__experiences-grid { display: grid; grid-template-columns: minmax(0, .94fr) minmax(0, 1.06fr); gap: 56px; align-items: start; }
.mockup-preview__experience-list { list-style: none; margin: 0; padding: 0; border-top: 1px solid var(--mockup-line); }
.mockup-preview__experience-item { display: grid; grid-template-columns: 22px minmax(0, 1fr); gap: 16px; align-items: start; padding: 24px 0; border-bottom: 1px solid var(--mockup-line); }
.mockup-preview__experience-item::before { content: '✦'; grid-column: 1; width: .5em; margin-top: 11px; color: var(--lacc-color-gold-soft, #946E29); font-size: 1em; line-height: 1; }
.mockup-preview__experience-body { grid-column: 2; min-width: 0; }
.mockup-preview__experience-title { margin: 0 0 8px; font-size: 28px; line-height: 1.04; }

.mockup-preview__about-shell { max-width: 880px; }
.mockup-preview__section--about .mockup-preview__eyebrow { position: relative; margin-bottom: 18px; width: fit-content; max-width: 100%; padding: 8px 18px; color: var(--lacc-color-gold-bright, #f5b62b); border: 2px solid var(--lacc-color-gold, #d4a441); border-radius: 32px; }
.mockup-preview__section--about .mockup-preview__eyebrow::before { content: ''; position: absolute; inset: 0; background: var(--lacc-color-ink, #51534a); mix-blend-mode: multiply; z-index: -1; }
.mockup-preview__section--about .mockup-preview__title { max-width: 19ch; }
.mockup-preview__section--about .mockup-preview__lede { max-width: 34em; margin-top: 28px; color: var(--lacc-color-white, #ffffff); font-family: "Freight Big Pro", Georgia, serif; font-size: 18px; font-style: italic; line-height: 1.55; }
.mockup-preview__section--about .mockup-preview__lede p { color: inherit; }

.mockup-preview__faq-list { margin-top: 34px; border-top: 1px solid var(--mockup-line); }
.mockup-preview__faq-list .panel { border-bottom: 1px solid var(--mockup-line); box-shadow: none; background: transparent; border-radius: 0; }
.mockup-preview__faq-list.wrap, #mockup-preview-faq-accordion.wrap { box-shadow: none; border-radius: 0; }
.mockup-preview__faq-list .panel + .panel { margin-top: 0; }
.mockup-preview__faq-list .panel-heading { background-color: transparent; padding: 0; border-radius: 0; box-shadow: none; }
.mockup-preview__faq-list .panel:last-child .panel-body, .mockup-preview__faq-list .panel:last-child .panel-heading, .mockup-preview__faq-list .panel:last-child .panel-heading.active { border-radius: 0; box-shadow: none; }
.mockup-preview__faq-list .panel-title .mockup-preview__faq-question { display: block; position: relative; padding: 14px 36px 14px 0; color: #51534a !important; font-family: "Freight Big Pro", Georgia, serif !important; font-size: clamp(18px, 1.6vw, 20px); font-weight: 500; letter-spacing: .01em; line-height: 1.35; text-decoration: none; text-transform: none; }
.mockup-preview__faq-list .panel-title .mockup-preview__faq-question:hover, .mockup-preview__faq-list .panel-title .mockup-preview__faq-question:focus { color: #51534a !important; text-decoration: none; }
.mockup-preview__faq-list .panel-title .mockup-preview__faq-question::before { content: '\203A'; position: absolute; right: 0; top: 17px; color: var(--lacc-color-gold-soft, #946E29); font-family: Arial, Helvetica, sans-serif !important; font-size: 26px; font-weight: 400; line-height: 1; transform: rotate(0deg); transform-origin: center; transition: transform 180ms ease; }
.mockup-preview__faq-list .panel-title .mockup-preview__faq-question:not(.collapsed)::before { transform: rotate(90deg); }
.mockup-preview__faq-answer { max-width: none; padding: 20px 28px 28px; background-color: var(--lacc-color-cream, #f6f3ed); color: #51534a; font-family: Helvetica, Arial, Roboto, sans-serif; font-size: 16px; line-height: 1.7; }
.mockup-preview__faq-answer p:last-child { margin-bottom: 0; }

.mockup-preview__cta-panel { position: relative; overflow: hidden; padding: clamp(44px, 7vw, 72px); background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(246, 243, 237, 0.12); }
.mockup-preview__cta-panel::before { content: ''; position: absolute; inset: auto -120px -34px auto; width: 340px; height: 68px; background-color: rgba(246, 243, 237, 0.18); -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork-horizontal.svg'); mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork-horizontal.svg'); -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat; -webkit-mask-size: auto 68px; mask-size: auto 68px; z-index: 0; }
.mockup-preview__cta-panel > * { position: relative; }
.mockup-preview__section-link { display: inline-flex; background: #644a19; border-color: #644a19; color: var(--lacc-color-white, #ffffff) !important; }
.mockup-preview__section-link--boxed { margin-top: 42px; }

@media (max-width: 991px) {
    .mockup-preview__intro-grid,
    .mockup-preview__split-grid,
    .mockup-preview__gallery-grid,
    .mockup-preview__experiences-grid { grid-template-columns: 1fr; }
    .mockup-preview__stats { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .mockup-preview__split-grid { gap: 0; }
    .mockup-preview__image-panel::after { top: auto; right: auto; left: 0; bottom: -28px; width: calc(100% + 220px); height: 56px; -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork-horizontal.svg'); mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork-horizontal.svg'); -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat; -webkit-mask-size: auto 56px; mask-size: auto 56px; }
    .mockup-preview__cards { grid-template-columns: 1fr; }
}

@media (max-width: 767px) {
    .mockup-preview__hero { min-height: 90svh; }
    .mockup-preview__hero .hero-slider-content { max-width: 100%; }
    .mockup-preview__hero .hero-slider-title { max-width: 8ch; }
    .mockup-preview__hero .hero-slider-subheading, .mockup-preview__hero .hero-slider-subheading p { max-width: 30ch; }
    .mockup-preview__section { padding: 64px 0; }
    .mockup-preview__hero .video-hero-text-container { padding-bottom: 62px; }
    .mockup-preview__hero-actions, .mockup-preview__hero .hero-button-group { flex-direction: column; align-items: stretch; }
    .mockup-preview .hero-button { width: 100%; min-width: 0; }
    .mockup-preview__stats { grid-template-columns: 1fr; }
    .mockup-preview__gallery-wall { padding: 0; }
    .mockup-preview__gallery-track, .mockup-preview__gallery-strip { gap: 12px; }
    .mockup-preview__gallery-actions { flex-direction: column; gap: 16px; }
    .mockup-preview__gallery-track { padding: 0 14px; animation-duration: 110s; }
    .mockup-preview__gallery-strip { min-height: 560px; }
    .mockup-preview__gallery-group { gap: 10px; width: 78vw; padding: 22px; --mockup-gallery-frame-inset: 6px; --mockup-gallery-corner-width: 48px; --mockup-gallery-corner-height: 48px; }
    .mockup-preview__gallery-group--compact { height: clamp(300px, 34vh, 42vh); }
    .mockup-preview__gallery-group--short { height: clamp(220px, 26vh, 32vh); }
    .mockup-preview__gallery-group--mid { height: clamp(270px, 30vh, 38vh); }
    .mockup-preview__gallery-group--tall { height: clamp(340px, 38vh, 46vh); }
    .mockup-preview__gallery-group::before { background: linear-gradient(var(--mockup-gallery-frame-stroke), var(--mockup-gallery-frame-stroke)) top var(--mockup-gallery-frame-inset) left calc(var(--mockup-gallery-frame-inset) + var(--mockup-gallery-corner-width) - 2px) / calc(100% - (2 * var(--mockup-gallery-frame-inset)) - (2 * var(--mockup-gallery-corner-width)) + 4px) 2px no-repeat, linear-gradient(var(--mockup-gallery-frame-stroke), var(--mockup-gallery-frame-stroke)) bottom var(--mockup-gallery-frame-inset) left calc(var(--mockup-gallery-frame-inset) + var(--mockup-gallery-corner-width) - 2px) / calc(100% - (2 * var(--mockup-gallery-frame-inset)) - (2 * var(--mockup-gallery-corner-width)) + 4px) 2px no-repeat, linear-gradient(var(--mockup-gallery-frame-stroke), var(--mockup-gallery-frame-stroke)) top calc(var(--mockup-gallery-frame-inset) + var(--mockup-gallery-corner-height) - 2px) left var(--mockup-gallery-frame-inset) / 2px calc(100% - (2 * var(--mockup-gallery-frame-inset)) - (2 * var(--mockup-gallery-corner-height)) + 4px) no-repeat, linear-gradient(var(--mockup-gallery-frame-stroke), var(--mockup-gallery-frame-stroke)) top calc(var(--mockup-gallery-frame-inset) + var(--mockup-gallery-corner-height) - 2px) right var(--mockup-gallery-frame-inset) / 2px calc(100% - (2 * var(--mockup-gallery-frame-inset)) - (2 * var(--mockup-gallery-corner-height)) + 4px) no-repeat; }
    .mockup-preview__gallery-group:nth-child(4n), .mockup-preview__gallery-group:nth-child(4n + 1), .mockup-preview__gallery-group:nth-child(4n + 2), .mockup-preview__gallery-group:nth-child(4n + 3) { transform: none; }
    .mockup-preview__gallery-item { border-width: 2px; }
    .mockup-preview__gallery-item, .mockup-preview__gallery-item:nth-child(1), .mockup-preview__gallery-item:nth-child(2), .mockup-preview__gallery-item:nth-child(3), .mockup-preview__gallery-item:nth-child(4), .mockup-preview__gallery-item:nth-child(5), .mockup-preview__gallery-item:nth-child(6), .mockup-preview__gallery-item:nth-child(7), .mockup-preview__gallery-item:nth-child(8), .mockup-preview__gallery-item:nth-child(9), .mockup-preview__gallery-item:nth-child(10) { grid-column: span 1; grid-row: span 1; }
    .mockup-preview__faq-question { font-size: 22px; }
    .mockup-preview__title { font-size: clamp(34px, 11vw, 50px); }
    .mockup-preview__lede, .mockup-preview__copy, .mockup-preview__faq-answer, .mockup-preview__experience-copy, .mockup-preview__cta-copy { font-size: 17px; }
}
</style>

<section class="mockup-preview">
    <section class="mockup-preview__hero">
        <div class="vid-container-overflow">
            <div class="video-container">
                <script>
                    window._wq = window._wq || [];
                    _wq.push({
                        id: "<?php echo esc_js( $background_video_wistia_id ); ?>",
                        options: {
                            videoFoam: true,
                            autoPlay: true,
                            muted: true,
                            silentAutoPlay: true,
                            playsinline: true,
                            playbar: false,
                            playButton: false,
                            smallPlayButton: false,
                            fullscreenButton: false,
                            settingsControl: false,
                            volumeControl: false,
                            playbackRateControl: false,
                            qualityControl: false,
                            playPauseNotifier: false,
                            controlsVisibleOnLoad: false,
                            copyLinkAndThumbnailEnabled: false,
                            endVideoBehavior: 'loop'
                        }
                    });
                </script>
                <script src="<?php echo esc_url( $background_video_url ); ?>" async></script>
                <script src="<?php echo esc_url( $background_video_library_url ); ?>" async></script>
                <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                    <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                        <div class="wistia_embed wistia_async_<?php echo esc_attr( $background_video_wistia_id ); ?> <?php echo esc_attr( $wistia_background_class_options ); ?>" style="height:100%;position:relative;width:100%">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-hero-text-background-overlay">
            <button id="mockup-background-video-playpause" class="background-video-toggle" aria-label="Pause background video" title="Pause background video">⏸</button>
            <div class="video-hero-text-container">
                <div class="container">
                    <div class="hero-slider-content">
                        <span class="mockup-preview__hero-eyebrow">Lake Arrowhead • San Bernardino Mountains</span>
                        <h1 class="hero-slider-title" data-animation="animated">Get Away.<br>Get Inspired.</h1>
                        <div class="hero-slider-subheading" data-animation="animated">
                            <p>A mountain lodge stay for slower mornings,<br>shared meals and time that feels set apart.</p>
                        </div>
                        <div class="hero-button-group">
                            <a class="hero-button hero-button--outline" href="<?php echo esc_url( $booking_url ); ?>">Book Your Stay</a>
                            <a class="hero-button hero-button--outline" href="<?php echo esc_url( $explore_url ); ?>">Explore The Lodge</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $section_card_grid_override = $intro_card_grid_override;
    include locate_template( 'components/components-section-card-grid.php', false, false );
    unset( $section_card_grid_override );
    ?>

    <section class="mockup-preview__section mockup-preview__section--split">
        <div class="mockup-preview__split-grid">
            <div class="mockup-preview__image-panel" style="background-image:url('<?php echo esc_url( $asset_firepit_group ); ?>');"></div>
            <div class="mockup-preview__content-panel">
                <div class="mockup-preview__intro-copy mockup-preview__split-copy">
                    <span class="mockup-preview__eyebrow">North Shore Tavern</span>
                    <h2 class="mockup-preview__title">A place to gather, not just dine</h2>
                    <div class="mockup-preview__lede" style="margin-top:14px;">
                        <p>Whether you linger over dinner, settle in for a second round, or use it as a simple meeting point, the tavern gives the stay a reliable social center.</p>
                    </div>
                </div>
                <a class="mockup-preview__section-link mockup-preview__section-link--boxed hero-button" href="<?php echo esc_url( home_url( '/dining/' ) ); ?>">Explore The Tavern</a>
            </div>
        </div>
    </section>

    <section class="mockup-preview__section mockup-preview__section--paper">
        <div class="container">
            <div class="mockup-preview__intro-copy">
                <span class="mockup-preview__eyebrow">Ways To Stay</span>
                <h2 class="mockup-preview__title">Find your kind of mountain time</h2>
                <div class="mockup-preview__copy" style="max-width:35em;margin-top:18px;">
                    <p>Maybe you are planning a reset, maybe a weekend away, maybe just enough time to feel somewhere else for a while.</p>
                </div>
            </div>

            <div class="mockup-preview__cards">
                <?php foreach ( $stay_cards as $stay_card ) : ?>
                    <article class="mockup-preview__card">
                        <div class="mockup-preview__card-media">
                            <img class="mockup-preview__card-image skip-lazy" src="<?php echo esc_url( $stay_card['image'] ); ?>" alt="" loading="eager" data-no-lazy="1">
                        </div>
                        <div class="mockup-preview__card-body">
                            <span class="mockup-preview__eyebrow mockup-preview__card-eyebrow"><?php echo esc_html( $stay_card['eyebrow'] ); ?></span>
                            <h3 class="mockup-preview__card-title"><?php echo esc_html( $stay_card['title'] ); ?></h3>
                            <p class="mockup-preview__copy"><?php echo esc_html( $stay_card['copy'] ); ?></p>
                            <a class="mockup-preview__card-link" href="<?php echo esc_url( $stay_card['url'] ); ?>">Learn More</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="mockup-preview__section mockup-preview__section--cream">
        <div class="container">
            <span class="mockup-preview__eyebrow">Gallery</span>
            <h2 class="mockup-preview__title">A place people come back to</h2>
            <div class="mockup-preview__copy" style="max-width:34em;margin-top:18px;">
                <p>Forest edges, low evening light, warm interiors, and a setting that looks good without feeling staged.</p>
            </div>

            <div class="mockup-preview__gallery-wall">
                <div class="mockup-preview__gallery-track">
                    <?php for ( $gallery_loop = 0; $gallery_loop < 2; $gallery_loop++ ) : ?>
                        <div class="mockup-preview__gallery-strip"<?php echo 0 === $gallery_loop ? '' : ' aria-hidden="true"'; ?>>
                            <?php foreach ( array_chunk( $gallery_images, 4 ) as $gallery_group_index => $gallery_group ) : ?>
                                <?php
                                $gallery_height_progression = array(
                                    ' mockup-preview__gallery-group--short',
                                    ' mockup-preview__gallery-group--compact',
                                    ' mockup-preview__gallery-group--mid',
                                    ' mockup-preview__gallery-group--tall',
                                );
                                $gallery_height_index = ( $gallery_group_index + ( 1 === $gallery_loop ? 2 : 0 ) ) % count( $gallery_height_progression );
                                $gallery_height_class = $gallery_height_progression[ $gallery_height_index ];
                                ?>
                                <div class="mockup-preview__gallery-group mockup-preview__gallery-group--<?php echo 0 === $gallery_group_index % 2 ? 'left-feature' : 'right-feature'; ?><?php echo $gallery_height_class; ?>">
                                    <span class="mockup-preview__gallery-corner mockup-preview__gallery-corner--top-left" aria-hidden="true"></span>
                                    <span class="mockup-preview__gallery-corner mockup-preview__gallery-corner--top-right" aria-hidden="true"></span>
                                    <span class="mockup-preview__gallery-corner mockup-preview__gallery-corner--bottom-left" aria-hidden="true"></span>
                                    <span class="mockup-preview__gallery-corner mockup-preview__gallery-corner--bottom-right" aria-hidden="true"></span>
                                    <?php foreach ( $gallery_group as $gallery_image ) : ?>
                                        <div class="mockup-preview__gallery-item">
                                            <img class="skip-lazy" src="<?php echo esc_url( $gallery_image ); ?>" alt="" loading="eager" data-no-lazy="1">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="mockup-preview__gallery-actions">
                <a class="hero-button hero-button--secondary" href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">View Full Gallery</a>
                <button type="button" class="mockup-preview__gallery-toggle" data-gallery-toggle="pause" aria-pressed="false" aria-label="Pause gallery wall">❚❚ Pause</button>
            </div>
        </div>
    </section>

    <section class="mockup-preview__section mockup-preview__section--paper">
        <div class="container">
            <div class="mockup-preview__experiences-grid">
                <div>
                    <span class="mockup-preview__eyebrow">Experiences</span>
                    <h2 class="mockup-preview__title">More to experience, without overplanning</h2>
                    <div class="mockup-preview__copy" style="max-width:33em;margin-top:18px;">
                        <p>The stay works best when there is enough to do, with room to keep the schedule light. That balance is part of the appeal.</p>
                    </div>
                </div>
                <ul class="mockup-preview__experience-list">
                    <?php foreach ( $experience_items as $experience_item ) : ?>
                        <li class="mockup-preview__experience-item">
                            <div class="mockup-preview__experience-body">
                                <h3 class="mockup-preview__experience-title"><?php echo esc_html( $experience_item['title'] ); ?></h3>
                                <p class="mockup-preview__experience-copy"><?php echo esc_html( $experience_item['copy'] ); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="mockup-preview__section mockup-preview__section--about">
        <div class="container">
            <div class="mockup-preview__about-shell">
                <span class="mockup-preview__eyebrow">About The Lodge</span>
                <h2 class="mockup-preview__title">Part of UCLA.<br>Designed for everyone.</h2>
                <div class="mockup-preview__lede">
                    <p>UCLA Lake Arrowhead Lodge has deep institutional roots, but the experience is broader than that. It is a place for alumni, families, couples, groups, and anyone looking for a mountain stay with more character than a typical hotel stop.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mockup-preview__section mockup-preview__section--paper">
        <div class="container">
            <span class="mockup-preview__eyebrow">Common Questions</span>
            <h2 class="mockup-preview__title">A few things people ask</h2>
            <div class="mockup-preview__faq-list">
                <div class="panel-group wrap" id="mockup-preview-faq-accordion">
                <?php foreach ( $faq_items as $faq_index => $faq_item ) : ?>
                    <?php $faq_panel_id = 'mockup-preview-faq-panel-' . $faq_index; ?>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="mockup-preview__faq-question collapsed" data-toggle="collapse" data-parent="#mockup-preview-faq-accordion" href="#<?php echo esc_attr( $faq_panel_id ); ?>" aria-expanded="false"><?php echo esc_html( $faq_item['question'] ); ?></a></h4>
                        </div>
                        <div id="<?php echo esc_attr( $faq_panel_id ); ?>" class="panel-collapse collapse">
                            <div class="mockup-preview__faq-answer"><p><?php echo esc_html( $faq_item['answer'] ); ?></p></div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="mockup-preview__section mockup-preview__section--forest">
        <div class="container">
            <div class="mockup-preview__cta-panel">
                <span class="mockup-preview__eyebrow" style="color:var(--lacc-color-gold, #d4a441);">Ready When You Are</span>
                <h2 class="mockup-preview__title">Let's plan your stay</h2>
                <div class="mockup-preview__cta-copy" style="max-width:34em;margin-top:18px;">
                    <p>Mountain air, slower schedules, and enough room to make the trip feel like a real break from routine.</p>
                </div>
                <div class="mockup-preview__hero-actions" style="margin-top:28px;">
                    <a class="hero-button hero-button--primary" href="<?php echo esc_url( $booking_url ); ?>">Book Now</a>
                    <a class="hero-button hero-button--light" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Get In Touch</a>
                </div>
            </div>
        </div>
    </section>
</section>

<script>
window._wq = window._wq || [];
window._wq.push({
    id: "<?php echo esc_js( $background_video_wistia_id ); ?>",
    onReady: function(video) {
        var button = document.getElementById('mockup-background-video-playpause');
        if (!button) {
            return;
        }

        function updateButton() {
            var playing = video.state() === 'playing';
            button.textContent = playing ? '⏸' : '▶';
            button.setAttribute('aria-label', playing ? 'Pause background video' : 'Play background video');
            button.setAttribute('title', playing ? 'Pause background video' : 'Play background video');
        }

        video.bind('play', updateButton);
        video.bind('pause', updateButton);
        button.addEventListener('click', function() {
            if (video.state() === 'playing') {
                video.pause();
            } else {
                video.play();
            }
        });
        updateButton();
    }
});

document.addEventListener('click', function(event) {
    var toggle = event.target.closest('[data-gallery-toggle]');
    if (!toggle) {
        return;
    }

    var section = toggle.closest('.mockup-preview__section');
    var track = section ? section.querySelector('.mockup-preview__gallery-track') : null;
    if (!track) {
        return;
    }

    var isPaused = toggle.getAttribute('data-gallery-toggle') === 'play';
    track.style.animationPlayState = isPaused ? 'running' : 'paused';
    toggle.setAttribute('data-gallery-toggle', isPaused ? 'pause' : 'play');
    toggle.setAttribute('aria-pressed', isPaused ? 'false' : 'true');
    toggle.setAttribute('aria-label', isPaused ? 'Pause gallery wall' : 'Play gallery wall');
    toggle.textContent = isPaused ? '❚❚ Pause' : '▶ Play';
});
</script>