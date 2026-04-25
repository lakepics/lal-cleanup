<?php
$library_swatches = array(
    array( 'label' => 'Ink', 'value' => '#51534A', 'note' => 'Primary copy, borders, and structural keylines.', 'color' => '#51534a' ),
    array( 'label' => 'Deep Ink', 'value' => '#1F221D', 'note' => 'Dense overlays, navbar grounding, and dark utility states.', 'color' => '#1f221d' ),
    array( 'label' => 'Cream', 'value' => '#F6F3ED', 'note' => 'Primary hospitality surface.', 'color' => '#f6f3ed' ),
    array( 'label' => 'White', 'value' => '#FFFFFF', 'note' => 'High-contrast content surface.', 'color' => '#ffffff' ),
    array( 'label' => 'Accessible Blue', 'value' => '#3F5F85', 'note' => 'Primary action color.', 'color' => '#3f5f85' ),
    array( 'label' => 'Old Gold', 'value' => '#7A5A1F', 'note' => 'Outline actions, utility accents, and nav separators.', 'color' => '#7a5a1f' ),
    array( 'label' => 'Decorative Gold', 'value' => '#D4A441', 'note' => 'Ornament, badges, and highlighted numerals.', 'color' => '#d4a441' ),
    array( 'label' => 'Brand Green', 'value' => '#60A57D', 'note' => 'Environmental accent and alternate arrowhead treatment.', 'color' => '#60a57d' ),
);

$library_gradients = array(
    array(
        'label' => 'Blue To Deep Blue',
        'value' => '#3F5F85 to #324C6A',
        'note' => 'Use for atmospheric blue-led panels, overlays, and feature surfaces.',
        'gradient' => 'linear-gradient(180deg, #324c6a, #3f5f85)',
    ),
    array(
        'label' => 'White To Cream',
        'value' => '#FFFFFF to #F6F3ED',
        'note' => 'Use for elevated content surfaces and soft hospitality depth.',
        'gradient' => 'linear-gradient(180deg, #f6f3ed, #ffffff)',
    ),
);

$library_card_rules = array(
    'Keep the card shell consistent: framed surface, modest shadow, same internal spacing rhythm.',
    'Use Haarlem for the main display line and Freight only where editorial warmth or numeric emphasis matters.',
    'Treat badges and eyebrows as utility markers, not a second headline.',
    'Package and detail cards should read quieter than editorial feature cards.',
);

$library_assets = array(
    'featured_banner' => 'https://lal.local/wp-content/uploads/2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6604-1.jpg',
    'split_feature' => 'https://lal.local/wp-content/uploads/2024/08/LAL-Wedding-Leah-Rachel-Photography-0114Lucy_Mike__PF-1.jpg',
    'gallery_one' => 'https://lal.local/wp-content/uploads/2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6490-1.jpg',
    'gallery_two' => 'https://lal.local/wp-content/uploads/2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6604-1.jpg',
    'gallery_three' => 'https://lal.local/wp-content/uploads/2024/08/LAL-Wedding-Leah-Rachel-Photography-0114Lucy_Mike__PF-1.jpg',
    'scrollwork' => '/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg',
    'gallery_corner' => '/wp-content/themes/LACC-sage-theme-master/brand/scrollwork-brand-gray.svg',
    'trees' => '/wp-content/themes/LACC-sage-theme-master/dist/images/lal-design-system-work/tree-mountain-lodge.svg',
    'logo_arrow' => '/wp-content/themes/LACC-sage-theme-master/brand/logos/LAL_Logo_Arrowhead_Horiz_Green.svg',
    'logo_arrowhead' => '/wp-content/themes/LACC-sage-theme-master/brand/logos/LAL_Logo_Arrowhead_Horiz_Green.svg',
    'logo_ccfr' => '/wp-content/themes/LACC-sage-theme-master/brand/logos/LAL_Logo_CCFR_Horiz_Color+White.svg',
    'logo_tavern' => '/wp-content/themes/LACC-sage-theme-master/brand/logos/north-shore-tavern-at-ucla-lake-arrowhead-lodge-logo-brown.svg',
    'logo_header' => '/wp-content/themes/LACC-sage-theme-master/assets/images/logo_top.svg',
    'logo_footer' => '/wp-content/themes/LACC-sage-theme-master/assets/images/logo_v3_white.svg',
);
?>

<style>
.design-library {
    --library-ink: #51534a;
    --library-ink-strong: #1f221d;
    --library-cream: #f6f3ed;
    --library-white: #ffffff;
    --library-blue: #3f5f85;
    --library-blue-deep: #324c6a;
    --library-gold: #d4a441;
    --library-old-gold: #7a5a1f;
    --library-gold-accent: #946e29;
    --library-taupe: #5a4f47;
    --library-border: rgba(81,83,74,0.14);
    --library-shadow: 0 24px 52px rgba(31,34,29,0.08);
    padding: 48px 0 96px;
    background:
        radial-gradient(circle at top left, rgba(212,164,65,0.08), transparent 22%),
        linear-gradient(180deg, rgba(246,243,237,0.98), rgba(255,255,255,0.98));
    color: var(--library-ink);
}

.design-library__frame {
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 24px;
}

.design-library__shell {
    overflow: hidden;
    border: 1px solid var(--library-border);
    background: rgba(255,255,255,0.9);
    box-shadow: var(--library-shadow);
}

.design-library__hero {
    display: grid;
    grid-template-columns: minmax(0, 1.15fr) minmax(280px, .85fr);
    gap: 28px;
    padding: 40px;
    border-bottom: 1px solid var(--library-border);
}

.design-library__eyebrow,
.design-library__section-kicker,
.design-library__label,
.design-library__status {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
}

.design-library__eyebrow {
    display: inline-block;
    margin-bottom: 14px;
    color: var(--library-old-gold);
}

.design-library__title,
.design-library__section-title,
.design-library__subsection-title,
.design-library__pattern-title,
.design-library__card-title,
.design-library__navbar-brand {
    margin: 0;
    color: var(--library-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-weight: 400;
}

.design-library__title {
    font-size: clamp(38px, 4vw, 64px);
    line-height: .96;
}

.design-library__lede,
.design-library__lede p,
.design-library__copy,
.design-library__copy p,
.design-library__meta,
.design-library__note,
.design-library__card-copy,
.design-library__pattern-copy p,
.design-library__rule-list li,
.design-library__accordion-answer {
    font-size: 15px;
    line-height: 1.65;
}

.design-library__lede,
.design-library__lede p {
    margin: 18px 0 0;
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(19px, 2vw, 24px);
    line-height: 1.58;
}

.design-library__hero-note {
    padding: 24px;
    border: 1px solid rgba(122,90,31,0.18);
    background: rgba(246,243,237,0.76);
}

.design-library__hero-note h3 {
    margin: 0;
    color: var(--library-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 28px;
    font-weight: 400;
}

.design-library__hero-note ul,
.design-library__rule-list {
    margin: 14px 0 0;
    padding-left: 18px;
}

.design-library__topnav {
    position: sticky;
    top: 0;
    z-index: 5;
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    padding: 16px 24px;
    border-bottom: 1px solid var(--library-border);
    background: rgba(31,34,29,0.94);
    backdrop-filter: blur(10px);
}

.design-library__topnav a {
    color: var(--library-white);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .14em;
    text-decoration: none;
    text-transform: uppercase;
}

.design-library__topnav a:hover {
    color: var(--library-cream);
    text-decoration: underline;
    text-underline-offset: .16em;
}

.design-library__section {
    padding: 36px 40px 42px;
    border-bottom: 1px solid var(--library-border);
}

.design-library__section:last-child {
    border-bottom: none;
}

.design-library__section-head {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(240px, .68fr);
    gap: 20px;
    align-items: start;
    margin-bottom: 24px;
}

.design-library__section-title {
    font-size: clamp(30px, 3vw, 44px);
    line-height: 1;
}

.design-library__section-summary {
    margin: 10px 0 0;
    max-width: 58rem;
    font-size: 15px;
    line-height: 1.65;
}

.design-library__meta {
    margin: 0;
    padding: 16px 18px;
    border: 1px solid var(--library-border);
    background: rgba(246,243,237,0.72);
}

.design-library__swatches,
.design-library__gradient-grid,
.design-library__card-grid,
.design-library__graphics-grid,
.design-library__logo-grid,
.design-library__pattern-grid,
.design-library__navbar-grid,
.design-library__detail-grid {
    display: grid;
    gap: 18px;
}

.design-library__swatches {
    grid-template-columns: repeat(4, minmax(0, 1fr));
}

.design-library__gradient-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    margin-top: 18px;
}

.design-library__swatch,
.design-library__gradient-card,
.design-library__showcase,
.design-library__card,
.design-library__detail,
.design-library__graphic,
.design-library__logo-card,
.design-library__pattern,
.design-library__navbar {
    border: 1px solid var(--library-border);
    background: rgba(255,255,255,0.92);
}

.design-library__swatch {
    overflow: hidden;
}

.design-library__gradient-card {
    overflow: hidden;
}

.design-library__swatch-chip {
    aspect-ratio: 1 / .75;
    background: var(--swatch-color);
}

.design-library__gradient-chip {
    min-height: 148px;
    background: var(--gradient-fill);
}

.design-library__swatch-meta,
.design-library__gradient-meta,
.design-library__showcase,
.design-library__card,
.design-library__detail,
.design-library__graphic,
.design-library__logo-card,
.design-library__pattern-copy,
.design-library__navbar {
    padding: 22px;
}

.design-library__swatch-meta strong {
    display: block;
    color: var(--library-ink-strong);
    font-size: 14px;
}

.design-library__gradient-meta strong {
    display: block;
    color: var(--library-ink-strong);
    font-size: 18px;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-weight: 400;
    line-height: 1;
}

.design-library__swatch-meta span {
    display: block;
    margin-top: 4px;
    color: rgba(81,83,74,0.78);
    font-size: 13px;
    line-height: 1.45;
}

.design-library__gradient-meta span {
    display: block;
    margin-top: 6px;
    color: rgba(81,83,74,0.78);
    font-size: 13px;
    line-height: 1.45;
}

.design-library__showcase-stack,
.design-library__detail-stack {
    display: grid;
    gap: 18px;
}

.design-library__subsection-title {
    margin-bottom: 10px;
    font-size: 24px;
    line-height: 1.04;
}

.design-library__label {
    display: inline-block;
    margin-bottom: 8px;
    color: rgba(81,83,74,0.72);
}

.design-library__type-scale {
    display: grid;
    gap: 12px;
}

.design-library__scale-row {
    display: grid;
    grid-template-columns: 80px minmax(0, 1fr);
    gap: 16px;
    align-items: start;
    padding-top: 14px;
    border-top: 1px solid rgba(81,83,74,0.1);
}

.design-library__scale-row:first-child {
    padding-top: 0;
    border-top: none;
}

.design-library__scale-sample {
    margin: 0;
    color: var(--library-ink);
}

.design-library__scale-sample--xxl,
.design-library__scale-sample--hero {
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-weight: 400;
}

.design-library__scale-sample--xxl {
    font-size: clamp(52px, 6vw, 92px);
    line-height: .92;
}

.design-library__scale-sample--hero {
    font-size: clamp(40px, 4.8vw, 68px);
    line-height: .98;
}

.design-library__scale-sample--freight,
.design-library__scale-sample--freight-small,
.design-library__factoid-value,
.design-library__package-price {
    font-family: "Freight Big Pro", Georgia, serif;
}

.design-library__scale-sample--freight {
    font-size: clamp(32px, 3.8vw, 46px);
    font-weight: 500;
    line-height: 1.08;
    letter-spacing: .03em;
}

.design-library__scale-sample--freight-small {
    font-size: clamp(26px, 3vw, 34px);
    font-weight: 500;
    line-height: 1.14;
    letter-spacing: .03em;
}

.design-library__scale-sample--utility {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 20px;
    font-weight: 700;
    line-height: 1.26;
}

.design-library__button-row,
.design-library__factoid-row,
.design-library__chip-row,
.design-library__arrow-row {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: center;
}

.design-library__button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 176px;
    padding: .9em 1.45em;
    border: 1px solid transparent;
    color: var(--library-white);
    font-size: 15px;
    font-weight: 600;
    letter-spacing: .08em;
    line-height: 1.2;
    text-decoration: none;
    text-transform: uppercase;
}

.design-library__button--primary {
    border-color: var(--library-blue);
    background: var(--library-blue);
}

.design-library__button--secondary {
    border-color: var(--library-old-gold);
    background: transparent;
    color: var(--library-old-gold);
}

.design-library__button--ink {
    border-color: var(--library-ink);
    background: var(--library-ink);
}

.design-library__button--gold {
    border-color: var(--library-old-gold);
    background: var(--library-old-gold);
}

.design-library__factoid {
    padding: 18px 20px;
    border: 1px solid var(--library-border);
    background: linear-gradient(180deg, rgba(81,83,74,0.92), rgba(31,34,29,0.92));
}

.design-library__factoid-value {
    display: block;
    color: #f5b62b;
    font-size: clamp(34px, 4vw, 58px);
    font-weight: 600;
    letter-spacing: .06em;
    line-height: 1;
}

.design-library__factoid-label,
.design-library__package-meta,
.design-library__card-kicker,
.design-library__pattern-eyebrow {
    display: block;
    color: rgba(81,83,74,0.72);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.design-library__package-price {
    color: var(--library-old-gold);
    font-size: clamp(30px, 2.4vw, 42px);
    font-weight: 500;
    font-style: italic;
    line-height: 1;
    letter-spacing: .03em;
}

.design-library__chip {
    display: inline-flex;
    align-items: center;
    max-width: 100%;
    white-space: nowrap;
}

.design-library__chip--outlined,
.design-library__chip--filled {
    padding: 8px 18px;
    border: 2px solid #c9973a;
    border-radius: 32px;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 16px;
    letter-spacing: .18em;
    text-transform: capitalize;
}

.design-library__chip--outlined {
    color: var(--library-gold-accent);
}

.design-library__chip--filled {
    background: var(--library-ink);
    color: var(--library-gold);
}

.design-library__chip--plain {
    color: var(--library-gold-accent);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.design-library__accordion-row {
    display: grid;
    gap: 0;
}

.design-library__accordion-menu {
    margin: 0 0 32px;
}

.design-library__accordion-menu-title {
    margin: 0 0 12px;
    color: var(--library-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(24px, 2.2vw, 30px);
    font-weight: 400;
    line-height: 1.08;
}

.design-library__accordion-menu-list {
    margin: 0;
    max-width: 640px;
    padding: 0;
    list-style: none;
}

.design-library__accordion-menu-list li {
    margin: 0;
    padding: 0 0 10px;
    border-bottom: 1px solid rgba(81,83,74,0.2);
    list-style: none;
}

.design-library__accordion-menu-list li + li {
    margin-top: 12px;
}

.design-library__accordion-menu-link {
    display: block;
    color: var(--library-blue);
    text-decoration: none;
}

.design-library__accordion-menu-link-title {
    display: block;
    color: var(--library-blue);
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 1.16;
}

.design-library__accordion-menu-link-summary {
    display: block;
    margin-top: 6px;
    color: rgba(81,83,74,0.84);
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: 14px;
    font-style: italic;
    line-height: 1.45;
}

.design-library__accordion-section + .design-library__accordion-section {
    margin-top: 30px;
}

.design-library__accordion-section-title {
    margin: 0 0 10px;
    color: var(--library-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(28px, 2.4vw, 36px);
    font-weight: 400;
    line-height: 1.08;
}

.design-library__accordion-item {
    border-bottom: 1px solid rgba(81,83,74,0.2);
}

.design-library__accordion-question {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 14px 0;
    color: var(--library-ink);
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.16;
}

.design-library__accordion-question::after {
    content: '';
    width: 9px;
    height: 9px;
    border-right: 2px solid var(--library-ink);
    border-bottom: 2px solid var(--library-ink);
    transform: rotate(-45deg);
    flex-shrink: 0;
}

.design-library__accordion-answer {
    display: none;
    padding: 12px 14px 16px;
    background: rgba(246,243,237,0.25);
    color: var(--library-ink);
    font-size: 16px;
    line-height: 1.6;
}

.design-library__accordion-item--open .design-library__accordion-question::after {
    transform: rotate(45deg);
}

.design-library__accordion-item--open .design-library__accordion-answer {
    display: block;
}

.design-library__detail-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.design-library__list {
    margin: 0;
    padding: 0;
}

.design-library__list li {
    margin: 0;
    padding: .55em 0 .55em 1.45em;
    border-bottom: 1px solid rgba(148,110,41,0.24);
}

.design-library__list--gold-star,
.design-library__list--keyline {
    list-style: none;
}

.design-library__list--gold-star li {
    position: relative;
}

.design-library__list--gold-star li,
.design-library__list--keyline li {
    list-style: none;
}

.design-library__list--gold-star li::before {
    position: absolute;
    left: 0;
    top: .72em;
}

.design-library__list--gold-star li::before {
    content: '✦';
    color: var(--library-gold-accent);
}

.design-library__list--keyline li {
    padding-left: 0;
    border-bottom-color: rgba(81,83,74,0.16);
}

.design-library__card-grid {
    grid-template-columns: repeat(4, minmax(0, 1fr));
}

.design-library__card {
    display: grid;
    gap: 12px;
}

.design-library__card-body {
    display: grid;
    gap: 12px;
}

.design-library__card-media {
    position: relative;
    overflow: hidden;
    min-height: 240px;
    border: 1px solid rgba(81,83,74,0.1);
    background: linear-gradient(180deg, rgba(246,243,237,0.9), rgba(255,255,255,0.92));
}

.design-library__card-carousel {
    position: relative;
    min-height: 240px;
}

.design-library__card-carousel-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity .24s ease;
}

.design-library__card-carousel-slide.is-active {
    opacity: 1;
}

.design-library__card-carousel-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.design-library__card-carousel::after {
    content: '';
    position: absolute;
    inset: auto 0 0 0;
    height: 42%;
    background: linear-gradient(180deg, rgba(31,34,29,0), rgba(31,34,29,0.4));
    pointer-events: none;
}

.design-library__card-carousel-controls {
    position: absolute;
    inset: auto 16px 16px 16px;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
}

.design-library__card-carousel-controls .design-library__medallion-arrow {
    width: 62px;
    height: 62px;
    border: 0;
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.08), 0 8px 20px rgba(31,34,29,0.14);
    cursor: pointer;
}

.design-library__card-carousel-indicators {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 12px;
    border-radius: 999px;
    background: rgba(255,255,255,0.14);
    backdrop-filter: blur(8px);
}

.design-library__card-carousel-dot {
    width: 10px;
    height: 10px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.72);
    background: transparent;
}

.design-library__card-carousel-dot.is-active {
    background: #ffffff;
    border-color: #ffffff;
}

.design-library__card-title {
    font-size: clamp(28px, 3vw, 40px);
    line-height: 1.02;
}

.design-library__card--package {
    background: linear-gradient(180deg, rgba(246,243,237,0.98), rgba(255,255,255,0.96));
}

.design-library__graphics-grid,
.design-library__logo-grid,
.design-library__navbar-grid,
.design-library__pattern-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.design-library__graphic,
.design-library__logo-card,
.design-library__pattern {
    display: grid;
    gap: 16px;
}

.design-library__graphic-surface,
.design-library__logo-surface,
.design-library__navbar-surface,
.design-library__pattern-media {
    position: relative;
    overflow: hidden;
    min-height: 220px;
    border: 1px solid rgba(81,83,74,0.1);
    background: linear-gradient(180deg, rgba(246,243,237,0.9), rgba(255,255,255,0.92));
}

.design-library__graphic-surface--scrollwork {
    min-height: 280px;
    background: rgba(31,34,29,0.92);
}

.design-library__scrollwork-rail {
    position: absolute;
    inset: 0 auto 0 50%;
    width: 78px;
    transform: translateX(-50%);
    background-color: var(--library-gold);
    -webkit-mask-image: url('<?php echo esc_url( $library_assets['scrollwork'] ); ?>');
    mask-image: url('<?php echo esc_url( $library_assets['scrollwork'] ); ?>');
    -webkit-mask-repeat: repeat-y;
    mask-repeat: repeat-y;
    -webkit-mask-position: center;
    mask-position: center;
    -webkit-mask-size: 78px auto;
    mask-size: 78px auto;
}

.design-library__gallery-border {
    position: absolute;
    inset: 24px;
    --gallery-frame-stroke: #51534a;
    --gallery-frame-width: 1.08px;
    --gallery-corner-size: 56px;
}

.design-library__gallery-border::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        linear-gradient(var(--gallery-frame-stroke), var(--gallery-frame-stroke)) top 0 left var(--gallery-corner-size) / calc(100% - (2 * var(--gallery-corner-size))) var(--gallery-frame-width) no-repeat,
        linear-gradient(var(--gallery-frame-stroke), var(--gallery-frame-stroke)) bottom 0 left var(--gallery-corner-size) / calc(100% - (2 * var(--gallery-corner-size))) var(--gallery-frame-width) no-repeat,
        linear-gradient(var(--gallery-frame-stroke), var(--gallery-frame-stroke)) top var(--gallery-corner-size) left 0 / var(--gallery-frame-width) calc(100% - (2 * var(--gallery-corner-size))) no-repeat,
        linear-gradient(var(--gallery-frame-stroke), var(--gallery-frame-stroke)) top var(--gallery-corner-size) right 0 / var(--gallery-frame-width) calc(100% - (2 * var(--gallery-corner-size))) no-repeat;
}

.design-library__gallery-corner {
    position: absolute;
    width: var(--gallery-corner-size);
    height: var(--gallery-corner-size);
    background: url('<?php echo esc_url( $library_assets['gallery_corner'] ); ?>') no-repeat center / contain;
}

.design-library__gallery-corner--top-left { top: 0; left: 0; }
.design-library__gallery-corner--top-right { top: 0; right: 0; transform: rotate(90deg); }
.design-library__gallery-corner--bottom-right { right: 0; bottom: 0; transform: rotate(180deg); }
.design-library__gallery-corner--bottom-left { left: 0; bottom: 0; transform: rotate(270deg); }

.design-library__graphic-surface img,
.design-library__logo-surface img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.design-library__graphic-surface--trees,
.design-library__graphic-surface--arrows {
    display: grid;
    place-items: center;
    padding: 26px;
}

.design-library__arrow-row--controls {
    gap: 18px;
}

.design-library__medallion-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 92px;
    height: 92px;
    border-radius: 999px;
    background: var(--library-taupe);
    color: #ffffff;
}

.design-library__medallion-arrow svg {
    width: 58px;
    height: 58px;
}

.design-library__logo-arrow-accent {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--library-taupe);
}

.design-library__pattern-scroller {
    position: absolute;
    inset: auto 18px 18px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 18px;
    z-index: 2;
}

.design-library__pattern-media::after {
    content: '';
    position: absolute;
    inset: auto 0 0 0;
    height: 42%;
    background: linear-gradient(180deg, rgba(31,34,29,0), rgba(31,34,29,0.45));
    pointer-events: none;
}

.design-library__pattern-scroller .design-library__medallion-arrow {
    width: 78px;
    height: 78px;
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.08), 0 8px 20px rgba(31,34,29,0.14);
}

.design-library__pattern-indicators {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: 999px;
    background: rgba(255,255,255,0.14);
    backdrop-filter: blur(8px);
}

.design-library__pattern-dot {
    width: 12px;
    height: 12px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.72);
    background: transparent;
}

.design-library__pattern-dot.is-active {
    background: #ffffff;
    border-color: #ffffff;
}

.design-library__logo-card--dark {
    background: var(--library-ink);
}

.design-library__logo-card--blue {
    background: var(--library-blue);
}

.design-library__logo-card--reverse img {
    filter: brightness(0) invert(1);
}

.design-library__logo-card .design-library__note {
    margin: 0;
}

.design-library__logo-arrow-accent svg {
    width: 42px;
    height: 58px;
}

.design-library__logo-surface {
    display: grid;
    place-items: center;
    padding: 28px;
}

.design-library__logo-surface--header {
    background: linear-gradient(180deg, rgba(246,243,237,0.96), rgba(255,255,255,0.96));
}

.design-library__logo-surface--footer {
    background: linear-gradient(180deg, rgba(31,34,29,0.98), rgba(81,83,74,0.96));
}

.design-library__logo-surface--header img,
.design-library__logo-surface--footer img {
    max-width: min(420px, 90%);
    height: auto;
}

.design-library__navbar {
    display: grid;
    gap: 18px;
}

.design-library__navbar-surface--primary {
    background: linear-gradient(180deg, rgba(246,243,237,0.96), rgba(255,255,255,0.96));
}

.design-library__navbar-surface--secondary {
    background: linear-gradient(180deg, rgba(255,255,255,0.96), rgba(246,243,237,0.94));
}

.design-library__primary-nav,
.design-library__secondary-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 18px;
    padding: 18px 22px;
}

.design-library__primary-nav {
    border-bottom: 1px solid rgba(81,83,74,0.12);
}

.design-library__primary-nav-brand {
    display: flex;
    align-items: center;
    gap: 16px;
}

.design-library__primary-nav-brand img {
    width: 180px;
    height: auto;
}

.design-library__navbar-brand {
    font-size: 24px;
}

.design-library__nav-links {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    align-items: center;
}

.design-library__nav-links a {
    color: var(--library-ink);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .14em;
    text-decoration: none;
    text-transform: uppercase;
}

.design-library__nav-links a:hover {
    color: var(--library-old-gold);
}

.design-library__secondary-nav {
    border-top: 1px solid rgba(81,83,74,0.1);
    background: rgba(246,243,237,0.7);
}

.design-library__secondary-nav .design-library__nav-links a {
    color: rgba(81,83,74,0.78);
}

.design-library__pattern {
    position: relative;
    overflow: visible;
}

.design-library__pattern-media img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.design-library__pattern-copy {
    display: grid;
    gap: 10px;
}

.design-library__pattern-copy > .design-library__status {
    margin-bottom: 2px;
}

.design-library__pattern-title {
    font-size: clamp(26px, 3vw, 38px);
    line-height: 1.02;
}

.design-library__status {
    position: absolute;
    top: 16px;
    left: 16px;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    padding: 0;
    border: 0;
    border-radius: 999px;
    background: var(--library-blue);
    color: var(--library-white);
    box-shadow: 0 10px 24px rgba(31,34,29,0.18);
    cursor: default;
    letter-spacing: .08em;
    text-transform: uppercase;
}

.design-library__status::after {
    content: attr(data-tooltip);
    position: absolute;
    top: calc(100% + 10px);
    left: 0;
    min-width: 220px;
    padding: 10px 12px;
    border-radius: 10px;
    background: rgba(31,34,29,0.96);
    color: var(--library-white);
    box-shadow: 0 14px 30px rgba(31,34,29,0.22);
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .04em;
    line-height: 1.45;
    text-transform: none;
    opacity: 0;
    transform: translateY(-4px);
    pointer-events: none;
    transition: opacity .18s ease, transform .18s ease;
}

.design-library__status:hover::after,
.design-library__status:focus::after,
.design-library__status:focus-visible::after {
    opacity: 1;
    transform: translateY(0);
}

.design-library__status:focus-visible {
    outline: 2px solid rgba(255,255,255,0.86);
    outline-offset: 2px;
}

.design-library__pattern-cta {
    display: inline-flex;
    width: fit-content;
    margin-top: 6px;
    padding: .9em 1.4em;
    border: 1px solid var(--library-old-gold);
    color: var(--library-old-gold);
    font-size: 15px;
    font-weight: 600;
    letter-spacing: .08em;
    text-decoration: none;
    text-transform: uppercase;
}

@media (max-width: 1080px) {
    .design-library__hero,
    .design-library__section-head,
    .design-library__swatches,
    .design-library__gradient-grid,
    .design-library__card-grid,
    .design-library__detail-grid,
    .design-library__graphics-grid,
    .design-library__logo-grid,
    .design-library__navbar-grid,
    .design-library__pattern-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 767px) {
    .design-library__frame {
        padding: 0 16px;
    }

    .design-library__hero,
    .design-library__section {
        padding-left: 22px;
        padding-right: 22px;
    }

    .design-library__primary-nav,
    .design-library__secondary-nav {
        flex-direction: column;
        align-items: flex-start;
    }

    .design-library__scale-row {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="design-library" aria-label="Design system library">
    <div class="design-library__frame">
        <div class="design-library__shell">
            <header class="design-library__hero">
                <div>
                    <span class="design-library__eyebrow">Design System Library</span>
                    <h2 class="design-library__title">A cleaner reference surface for the patterns we are ready to standardize</h2>
                    <div class="design-library__lede">
                        <p>This library now stays focused on production-facing system material: foundations, cards, UI details, graphics, logos, navbars, and the builder patterns that are mature enough to document. The looser post-form demos now live on the sandbox page instead.</p>
                    </div>
                </div>
                <aside class="design-library__hero-note">
                    <h3>Current Direction</h3>
                    <ul>
                        <li>Center the reference surface, simplify the container treatment, and remove stray ornament that competes with the content.</li>
                        <li>Document patterns in rows instead of compressed columns when comparison is more important than density.</li>
                        <li>Tag builder-ready patterns so the library clearly distinguishes documented production inventory from sandbox work.</li>
                    </ul>
                </aside>
            </header>

            <nav class="design-library__topnav" aria-label="Design system library sections">
                <a href="#library-foundations">Foundations</a>
                <a href="#library-cards">Cards</a>
                <a href="#library-details">UI Details</a>
                <a href="#library-graphics">Graphics</a>
                <a href="#library-logos">Logos</a>
                <a href="#library-navbars">Navbars</a>
                <a href="#library-patterns">Builder Patterns</a>
            </nav>

            <section id="library-foundations" class="design-library__section">
                <div class="design-library__section-head">
                    <div>
                        <span class="design-library__section-kicker">Foundations</span>
                        <h3 class="design-library__section-title">Color, type, action, and numeric rhythm</h3>
                        <p class="design-library__section-summary">These are the durable system pieces that should stay stable as the builder grows: the color palette, the type hierarchy, button families, and the number treatments already tuned on the flex page.</p>
                    </div>
                    <p class="design-library__meta">The container is now centered and capped at 1440px so the library reads like a real reference surface instead of a drifting demo board.</p>
                </div>

                <div class="design-library__swatches">
                    <?php foreach ( $library_swatches as $library_swatch ) : ?>
                        <article class="design-library__swatch" style="--swatch-color: <?php echo esc_attr( $library_swatch['color'] ); ?>;">
                            <div class="design-library__swatch-chip"></div>
                            <div class="design-library__swatch-meta">
                                <strong><?php echo esc_html( $library_swatch['label'] ); ?></strong>
                                <span><?php echo esc_html( $library_swatch['value'] ); ?> • <?php echo esc_html( $library_swatch['note'] ); ?></span>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="design-library__gradient-grid">
                    <?php foreach ( $library_gradients as $library_gradient ) : ?>
                        <article class="design-library__gradient-card" style="--gradient-fill: <?php echo esc_attr( $library_gradient['gradient'] ); ?>;">
                            <div class="design-library__gradient-chip"></div>
                            <div class="design-library__gradient-meta">
                                <strong><?php echo esc_html( $library_gradient['label'] ); ?></strong>
                                <span><?php echo esc_html( $library_gradient['value'] ); ?> • <?php echo esc_html( $library_gradient['note'] ); ?></span>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="design-library__showcase-stack" style="margin-top:18px;">
                    <article class="design-library__showcase">
                        <span class="design-library__label">Type Scale</span>
                        <h4 class="design-library__subsection-title">Display to utility hierarchy</h4>
                        <div class="design-library__type-scale">
                            <div class="design-library__scale-row">
                                <span class="design-library__label">XXL</span>
                                <div class="design-library__scale-sample design-library__scale-sample--xxl">Lake Arrowhead Storytelling</div>
                            </div>
                            <div class="design-library__scale-row">
                                <span class="design-library__label">H1</span>
                                <h4 class="design-library__scale-sample design-library__scale-sample--hero">A place to gather, not just dine</h4>
                            </div>
                            <div class="design-library__scale-row">
                                <span class="design-library__label">H2</span>
                                <h4 class="design-library__scale-sample design-library__scale-sample--freight">Freight Big Pro section heading</h4>
                            </div>
                            <div class="design-library__scale-row">
                                <span class="design-library__label">H3</span>
                                <h4 class="design-library__scale-sample design-library__scale-sample--freight-small">Freight Big Pro supporting line</h4>
                            </div>
                            <div class="design-library__scale-row">
                                <span class="design-library__label">H4+</span>
                                <h4 class="design-library__scale-sample design-library__scale-sample--utility">Helvetica utility heading</h4>
                            </div>
                        </div>
                    </article>

                    <article class="design-library__showcase">
                        <span class="design-library__label">Buttons</span>
                        <h4 class="design-library__subsection-title">Primary roles</h4>
                        <div class="design-library__button-row">
                            <a href="#" class="design-library__button design-library__button--primary">Primary</a>
                            <a href="#" class="design-library__button design-library__button--ink">Ink Fill</a>
                            <a href="#" class="design-library__button design-library__button--gold">Old Gold Fill</a>
                        </div>
                        <p class="design-library__note">Buttons should stay calm. Keep the approved set to primary, ink, and old-gold fills so utility actions do not multiply into near-duplicate variants.</p>
                    </article>

                    <article class="design-library__showcase">
                        <span class="design-library__label">Numbers</span>
                        <h4 class="design-library__subsection-title">Factoids and prices</h4>
                        <div class="design-library__factoid-row">
                            <div class="design-library__factoid">
                                <span class="design-library__factoid-value">50</span>
                                <span class="design-library__factoid-label">Guest rooms</span>
                            </div>
                            <div>
                                <div class="design-library__package-meta">Package rate</div>
                                <div class="design-library__package-price">$10,000</div>
                                <p class="design-library__note">Factoids use Freight semibold at .06em. Package prices stay on Freight medium italic in old gold.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section id="library-cards" class="design-library__section">
                <div class="design-library__section-head">
                    <div>
                        <span class="design-library__section-kicker">Cards</span>
                        <h3 class="design-library__section-title">Card families are now shown as a tighter system</h3>
                        <p class="design-library__section-summary">This is still one of the most important consolidation areas. The goal is fewer dialects, clearer roles, and better consistency between editorial, utility, package, and CTA surfaces.</p>
                    </div>
                    <div>
                        <span class="design-library__label">Recommended Rules</span>
                        <ul class="design-library__rule-list">
                            <?php foreach ( $library_card_rules as $library_card_rule ) : ?>
                                <li><?php echo esc_html( $library_card_rule ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="design-library__card-grid">
                    <article class="design-library__card">
                        <span class="design-library__label">Editorial Carousel Card</span>
                        <div class="design-library__card-media">
                            <div class="design-library__card-carousel" data-card-carousel>
                                <div class="design-library__card-carousel-slide is-active">
                                    <img src="<?php echo esc_url( $library_assets['gallery_one'] ); ?>" alt="North Shore Tavern editorial carousel slide one">
                                </div>
                                <div class="design-library__card-carousel-slide">
                                    <img src="<?php echo esc_url( $library_assets['gallery_two'] ); ?>" alt="North Shore Tavern editorial carousel slide two">
                                </div>
                                <div class="design-library__card-carousel-slide">
                                    <img src="<?php echo esc_url( $library_assets['gallery_three'] ); ?>" alt="North Shore Tavern editorial carousel slide three">
                                </div>
                                <div class="design-library__card-carousel-controls">
                                    <button type="button" class="design-library__medallion-arrow" data-card-carousel-prev aria-label="Previous card image">
                                        <svg viewBox="0 0 64 64" aria-hidden="true">
                                            <path d="M45 32 H20" stroke="#ffffff" stroke-width="4"></path>
                                            <path d="M31 17 L17 32 L31 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                        </svg>
                                    </button>
                                    <div class="design-library__card-carousel-indicators" aria-hidden="true">
                                        <span class="design-library__card-carousel-dot is-active"></span>
                                        <span class="design-library__card-carousel-dot"></span>
                                        <span class="design-library__card-carousel-dot"></span>
                                    </div>
                                    <button type="button" class="design-library__medallion-arrow" data-card-carousel-next aria-label="Next card image">
                                        <svg viewBox="0 0 64 64" aria-hidden="true">
                                            <path d="M19 32 H44" stroke="#ffffff" stroke-width="4"></path>
                                            <path d="M33 17 L47 32 L33 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="design-library__card-body">
                            <span class="design-library__card-kicker">North Shore Tavern</span>
                            <h4 class="design-library__card-title">A place to gather, not just dine</h4>
                            <p class="design-library__card-copy">Use this variant when the card needs a stronger editorial lead image and a small set of seasonal or mood-based frames without expanding into a full section carousel.</p>
                        </div>
                    </article>

                    <article class="design-library__card">
                        <span class="design-library__label">Utility Card</span>
                        <span class="design-library__chip design-library__chip--filled">everything you need</span>
                        <h4 class="design-library__card-title">Plan the section, then layer the support text</h4>
                        <p class="design-library__card-copy">Best for informational intros like card grids, section leads, and guided checklist content.</p>
                    </article>

                    <article class="design-library__card design-library__card--package">
                        <span class="design-library__label">Package Card</span>
                        <div class="design-library__package-meta">Fri-Sat From</div>
                        <div class="design-library__package-price">$10,000</div>
                        <ul class="design-library__list design-library__list--gold-star">
                            <li>Up to 50 guests</li>
                            <li>6 rooms and two-night stay included</li>
                            <li>Keyline list treatment for supporting details</li>
                        </ul>
                    </article>

                    <article class="design-library__card">
                        <span class="design-library__label">CTA Card</span>
                        <span class="design-library__card-kicker">Ready when you are</span>
                        <h4 class="design-library__card-title">Let&apos;s plan your stay</h4>
                        <p class="design-library__card-copy">This lane should stay lighter and more direct than editorial and package cards.</p>
                    </article>
                </div>
            </section>

            <section id="library-details" class="design-library__section">
                <div class="design-library__section-head">
                    <div>
                        <span class="design-library__section-kicker">UI Details</span>
                        <h3 class="design-library__section-title">Eyebrows, accordion language, and list treatments</h3>
                        <p class="design-library__section-summary">These recurring details now each get their own row so the library shows usage clearly instead of compressing them into a single comparison grid.</p>
                    </div>
                    <p class="design-library__meta">The approved direction is a gold-star editorial list and a plain keyline utility list. Table styles will be explored separately once we have stronger reference screenshots.</p>
                </div>

                <div class="design-library__detail-stack">
                    <article class="design-library__detail">
                        <span class="design-library__label">Eyebrows</span>
                        <h4 class="design-library__subsection-title">Preferred label treatments</h4>
                        <div class="design-library__chip-row">
                            <span class="design-library__chip design-library__chip--outlined">lake arrowhead, california</span>
                            <span class="design-library__chip design-library__chip--filled">UCLA lake arrowhead lodge</span>
                            <span class="design-library__chip design-library__chip--plain">North Shore Tavern</span>
                        </div>
                    </article>

                    <article class="design-library__detail">
                        <span class="design-library__label">Accordion</span>
                        <h4 class="design-library__subsection-title">Grouped FAQ and topic index</h4>
                        <div class="design-library__accordion-menu">
                            <h5 class="design-library__accordion-menu-title">Categories:</h5>
                            <ul class="design-library__accordion-menu-list">
                                <li>
                                    <a href="#" class="design-library__accordion-menu-link">
                                        <span class="design-library__accordion-menu-link-title">Reservation &amp; Arrival</span>
                                        <span class="design-library__accordion-menu-link-summary">Check-in timing, access expectations, and the basics to know before you arrive.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="design-library__accordion-menu-link">
                                        <span class="design-library__accordion-menu-link-title">Guest Rooms</span>
                                        <span class="design-library__accordion-menu-link-summary">Room-type guidance, property views, and what to expect from overnight stays.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="design-library__accordion-menu-link">
                                        <span class="design-library__accordion-menu-link-title">Activities &amp; Events</span>
                                        <span class="design-library__accordion-menu-link-summary">Weddings, on-property experiences, and how guests typically use the site.</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="design-library__accordion-section">
                            <h5 class="design-library__accordion-section-title">Reservation &amp; Arrival</h5>
                            <div class="design-library__accordion-row">
                                <div class="design-library__accordion-item design-library__accordion-item--open">
                                    <div class="design-library__accordion-question">What time is check-in?</div>
                                    <div class="design-library__accordion-answer">Guest check-in begins at 4 p.m. If you expect to arrive later in the evening, the front desk can still help coordinate arrival details in advance.</div>
                                </div>
                                <div class="design-library__accordion-item">
                                    <div class="design-library__accordion-question">Can I bring my pet?</div>
                                    <div class="design-library__accordion-answer">Only service animals are permitted on property.</div>
                                </div>
                                <div class="design-library__accordion-item">
                                    <div class="design-library__accordion-question">Do I need to be affiliated with UCLA to stay at the lodge?</div>
                                    <div class="design-library__accordion-answer">No. Outside of Bruin Woods summer dates, the lodge welcomes a broad mix of guests, groups, and event attendees.</div>
                                </div>
                            </div>
                        </div>
                        <div class="design-library__accordion-section">
                            <h5 class="design-library__accordion-section-title">Guest Rooms</h5>
                            <div class="design-library__accordion-row">
                                <div class="design-library__accordion-item">
                                    <div class="design-library__accordion-question">Which room type should I book?</div>
                                    <div class="design-library__accordion-answer">That depends on your group size and whether you want a more private chalet-style stay or a simpler guest room.</div>
                                </div>
                                <div class="design-library__accordion-item">
                                    <div class="design-library__accordion-question">Will my room have a lake view?</div>
                                    <div class="design-library__accordion-answer">Most guest rooms have forest views, while key public areas across the property open up to wider lake and mountain scenery.</div>
                                </div>
                            </div>
                        </div>
                        <div class="design-library__accordion-section">
                            <h5 class="design-library__accordion-section-title">Activities &amp; Events</h5>
                            <div class="design-library__accordion-row">
                                <div class="design-library__accordion-item">
                                    <div class="design-library__accordion-question">Do you host weddings?</div>
                                    <div class="design-library__accordion-answer">Yes. The current builder work is aimed at supporting stronger wedding landing pages with reusable section patterns.</div>
                                </div>
                                <div class="design-library__accordion-item">
                                    <div class="design-library__accordion-question">What can guests do on property?</div>
                                    <div class="design-library__accordion-answer">Depending on the season, guests can enjoy trails, lake views, lawn games, gathering spaces, and curated event programming.</div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="design-library__detail">
                        <span class="design-library__label">List Language</span>
                        <h4 class="design-library__subsection-title">Two supported list treatments</h4>
                        <div class="design-library__detail-grid">
                            <div>
                                <span class="design-library__label">Editorial Gold Star</span>
                                <ul class="design-library__list design-library__list--gold-star">
                                    <li>Use this for warmer hospitality details.</li>
                                    <li>Use the same star marker language we have already approved elsewhere.</li>
                                    <li>Keep the divider line warm and light.</li>
                                </ul>
                            </div>
                            <div>
                                <span class="design-library__label">Utility Keyline</span>
                                <ul class="design-library__list design-library__list--keyline">
                                    <li>Use this when structure matters more than flourish.</li>
                                    <li>Good for rules, checklists, schedules, and denser support copy.</li>
                                    <li>Let the keylines do the organizing instead of adding markers.</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section id="library-graphics" class="design-library__section">
                <div class="design-library__section-head">
                    <div>
                        <span class="design-library__section-kicker">Graphic Elements</span>
                        <h3 class="design-library__section-title">Scrollwork, gallery border, trees, and arrowheads</h3>
                        <p class="design-library__section-summary">These are the shared decorative assets that should be documented as reusable graphic language rather than reintroduced ad hoc inside individual sections.</p>
                    </div>
                    <p class="design-library__meta">The gallery border specimen uses the same lighter line weight and gray corner asset we have been tuning in the mockup gallery and split collage work.</p>
                </div>

                <div class="design-library__graphics-grid">
                    <article class="design-library__graphic">
                        <span class="design-library__label">Vertical Scrollwork</span>
                        <div class="design-library__graphic-surface design-library__graphic-surface--scrollwork">
                            <span class="design-library__scrollwork-rail" aria-hidden="true"></span>
                        </div>
                        <p class="design-library__note">Use as a divider, not as ambient page decoration. It should separate materials, not float beside them.</p>
                    </article>

                    <article class="design-library__graphic">
                        <span class="design-library__label">Gallery Border</span>
                        <div class="design-library__graphic-surface">
                            <div class="design-library__gallery-border" aria-hidden="true">
                                <span class="design-library__gallery-corner design-library__gallery-corner--top-left"></span>
                                <span class="design-library__gallery-corner design-library__gallery-corner--top-right"></span>
                                <span class="design-library__gallery-corner design-library__gallery-corner--bottom-right"></span>
                                <span class="design-library__gallery-corner design-library__gallery-corner--bottom-left"></span>
                            </div>
                        </div>
                        <p class="design-library__note">This is the border language used in the image gallery framing work and the split collage prototype.</p>
                    </article>

                    <article class="design-library__graphic">
                        <span class="design-library__label">Trees</span>
                        <div class="design-library__graphic-surface design-library__graphic-surface--trees">
                            <img src="<?php echo esc_url( $library_assets['trees'] ); ?>" alt="Tree and mountain lodge decorative graphic">
                        </div>
                        <p class="design-library__note">Use as a supporting environmental mark, not as a navigation icon.</p>
                    </article>

                    <article class="design-library__graphic">
                        <span class="design-library__label">Arrow Language</span>
                        <div class="design-library__graphic-surface design-library__graphic-surface--arrows">
                            <div class="design-library__arrow-row design-library__arrow-row--controls">
                                <span class="design-library__medallion-arrow" aria-hidden="true">
                                    <svg viewBox="0 0 64 64">
                                        <path d="M45 32 H20" stroke="#ffffff" stroke-width="4"></path>
                                        <path d="M31 17 L17 32 L31 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                    </svg>
                                </span>
                                <span class="design-library__medallion-arrow" aria-hidden="true">
                                    <svg viewBox="0 0 64 64">
                                        <path d="M19 32 H44" stroke="#ffffff" stroke-width="4"></path>
                                        <path d="M33 17 L47 32 L33 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                    </svg>
                                </span>
                                <span class="design-library__logo-arrow-accent" aria-hidden="true">
                                    <svg viewBox="0 0 44 54">
                                        <path d="M16.2 45.6L9 31.4L13.4 22.9L17 30L20.6 37.1L16.2 45.6ZM20.7 32.9L18.1 27.8L14.5 20.7L20.7 8.5V32.9ZM22.7 8.4L28.9 20.6L25.3 27.7L22.7 32.8V8.4ZM22.8 37L26.4 29.9L30 22.8L34.4 31.3L27.2 45.5L22.8 37Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <p class="design-library__note">Use medallion arrows for expressive previous and next controls, and reserve the simplified logo arrow for signage-like punctuation or branded accents rather than default navigation.</p>
                    </article>
                </div>
            </section>

            <section id="library-logos" class="design-library__section">
                <div class="design-library__section-head">
                    <div>
                        <span class="design-library__section-kicker">Logo</span>
                        <h3 class="design-library__section-title">Approved lockups from the brand folder</h3>
                        <p class="design-library__section-summary">Keep the reference set constrained to the approved brand-folder exports rather than older theme-era logo files. The goal is to document the lockups and their intended surface pairings, not every legacy usage.</p>
                    </div>
                    <p class="design-library__meta">Lead with the CCFR color-and-white lockup on blue, use the Arrowhead lockup reversed on ink, and let North Shore Tavern read wider as a full sub-brand lockup.</p>
                </div>

                <div class="design-library__logo-grid">
                    <article class="design-library__logo-card design-library__logo-card--blue">
                        <span class="design-library__label">CCFR Color + White</span>
                        <div class="design-library__logo-surface design-library__logo-surface--header">
                            <img src="<?php echo esc_url( $library_assets['logo_ccfr'] ); ?>" alt="Lake Arrowhead CCFR color and white logo">
                        </div>
                        <p class="design-library__note">Use this as the lead multitone lockup on blue-led surfaces where the full hospitality identity should read first.</p>
                    </article>

                    <article class="design-library__logo-card design-library__logo-card--dark design-library__logo-card--reverse">
                        <span class="design-library__label">Arrowhead Green To White</span>
                        <div class="design-library__logo-surface design-library__logo-surface--footer">
                            <img src="<?php echo esc_url( $library_assets['logo_arrowhead'] ); ?>" alt="Lake Arrowhead Arrowhead logo reversed to white">
                        </div>
                        <p class="design-library__note">Use the Arrowhead export on ink by filtering it to white so the silhouette stays crisp on dense dark surfaces.</p>
                    </article>

                    <article class="design-library__logo-card">
                        <span class="design-library__label">North Shore Tavern</span>
                        <div class="design-library__logo-surface design-library__logo-surface--header">
                            <img src="<?php echo esc_url( $library_assets['logo_tavern'] ); ?>" alt="North Shore Tavern logo">
                        </div>
                        <p class="design-library__note">Scale this sub-brand wider so it reads as a full lockup rather than a compact badge.</p>
                    </article>
                </div>
            </section>

            <section id="library-navbars" class="design-library__section">
                <div class="design-library__section-head">
                    <div>
                        <span class="design-library__section-kicker">Navbars</span>
                        <h3 class="design-library__section-title">Primary and secondary navigation patterns</h3>
                        <p class="design-library__section-summary">The library now documents both the main navigation shell and the secondary in-page navigation treatment used here on the library itself.</p>
                    </div>
                    <p class="design-library__meta">These are structural patterns, not final menu inventories. The point is to document hierarchy, spacing, and logo usage.</p>
                </div>

                <div class="design-library__navbar-grid">
                    <article class="design-library__navbar">
                        <span class="design-library__label">Primary Navbar</span>
                        <div class="design-library__navbar-surface design-library__navbar-surface--primary">
                            <div class="design-library__primary-nav">
                                <div class="design-library__primary-nav-brand">
                                    <img src="<?php echo esc_url( $library_assets['logo_header'] ); ?>" alt="Lake Arrowhead Lodge header logo">
                                    <div class="design-library__navbar-brand">Lake Arrowhead Lodge</div>
                                </div>
                                <div class="design-library__nav-links">
                                    <a href="#">Stay</a>
                                    <a href="#">Meet</a>
                                    <a href="#">Dine</a>
                                    <a href="#">Weddings</a>
                                    <a href="#">Contact</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="design-library__navbar">
                        <span class="design-library__label">Secondary Navbar</span>
                        <div class="design-library__navbar-surface design-library__navbar-surface--secondary">
                            <div class="design-library__secondary-nav">
                                <div class="design-library__navbar-brand">Design System Library</div>
                                <div class="design-library__nav-links">
                                    <a href="#library-foundations">Foundations</a>
                                    <a href="#library-cards">Cards</a>
                                    <a href="#library-details">UI Details</a>
                                    <a href="#library-graphics">Graphics</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section id="library-patterns" class="design-library__section">
                <div class="design-library__section-head">
                    <div>
                        <span class="design-library__section-kicker">Builder Patterns</span>
                        <h3 class="design-library__section-title">Patterns already represented in the ACF flexible builder</h3>
                        <p class="design-library__section-summary">These are the production-facing section families that are already builder-backed and worth documenting here. More exploratory sections now live in the sandbox until they are ready to be promoted.</p>
                    </div>
                    <p class="design-library__meta">Current sandbox residents include the North Shore Tavern split specimen, the image collage demo, the split collage prototype, and the FAQ demo section.</p>
                </div>

                <div class="design-library__pattern-grid">
                    <article class="design-library__pattern">
                        <div class="design-library__pattern-media">
                            <img src="<?php echo esc_url( $library_assets['featured_banner'] ); ?>" alt="Featured article banner specimen">
                        </div>
                        <div class="design-library__pattern-copy">
                            <span class="design-library__status" tabindex="0" aria-label="Featured Article Banner. ACF sub field group section_featured_article." data-tooltip="Featured Article Banner • ACF sub field group: section_featured_article">ACF+</span>
                            <span class="design-library__pattern-eyebrow">Featured Article Banner</span>
                            <h4 class="design-library__pattern-title">Featured article banner keeps the strongest legacy split layout</h4>
                            <p>This pattern preserves the older banner pacing while bringing it into the builder inventory so it can be reused without depending on a one-off landing template.</p>
                            <a href="#" class="design-library__pattern-cta">Section specimen</a>
                        </div>
                    </article>

                    <article class="design-library__pattern">
                        <div class="design-library__pattern-media">
                            <img src="<?php echo esc_url( $library_assets['split_feature'] ); ?>" alt="Split feature specimen">
                        </div>
                        <div class="design-library__pattern-copy">
                            <span class="design-library__status" tabindex="0" aria-label="Split Feature. ACF sub field group section_split_feature." data-tooltip="Split Feature • ACF sub field group: section_split_feature">ACF+</span>
                            <span class="design-library__pattern-eyebrow">Split Feature</span>
                            <h4 class="design-library__pattern-title">Editorial two-column storytelling section</h4>
                            <p>This is the builder-native split feature lane for image-plus-copy moments where the content needs more warmth and presence than a card grid intro.</p>
                            <a href="#" class="design-library__pattern-cta">Section specimen</a>
                        </div>
                    </article>

                    <article class="design-library__pattern">
                        <div class="design-library__pattern-media">
                            <img src="<?php echo esc_url( $library_assets['gallery_two'] ); ?>" alt="Image scroller specimen">
                            <div class="design-library__pattern-scroller" aria-hidden="true">
                                <span class="design-library__medallion-arrow">
                                    <svg viewBox="0 0 64 64">
                                        <path d="M45 32 H20" stroke="#ffffff" stroke-width="4"></path>
                                        <path d="M31 17 L17 32 L31 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                    </svg>
                                </span>
                                <div class="design-library__pattern-indicators">
                                    <span class="design-library__pattern-dot is-active"></span>
                                    <span class="design-library__pattern-dot"></span>
                                    <span class="design-library__pattern-dot"></span>
                                </div>
                                <span class="design-library__medallion-arrow">
                                    <svg viewBox="0 0 64 64">
                                        <path d="M19 32 H44" stroke="#ffffff" stroke-width="4"></path>
                                        <path d="M33 17 L47 32 L33 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="design-library__pattern-copy">
                            <span class="design-library__status" tabindex="0" aria-label="Image Scroller. ACF sub field group section_image_scroller." data-tooltip="Image Scroller • ACF sub field group: section_image_scroller">ACF+</span>
                            <span class="design-library__pattern-eyebrow">Image Scroller</span>
                            <h4 class="design-library__pattern-title">Atmospheric mid-page image rhythm</h4>
                            <p>The scroller creates movement and seasonal mood without requiring the heavier editorial framing of a split section. When this pattern needs visible controls, the medallion arrows are the expressive default.</p>
                            <a href="#" class="design-library__pattern-cta">Section specimen</a>
                        </div>
                    </article>

                    <article class="design-library__pattern">
                        <div class="design-library__pattern-media">
                            <img src="<?php echo esc_url( $library_assets['gallery_one'] ); ?>" alt="Card grid specimen">
                        </div>
                        <div class="design-library__pattern-copy">
                            <span class="design-library__status" tabindex="0" aria-label="Card Grid. ACF sub field group section_card_grid." data-tooltip="Card Grid • ACF sub field group: section_card_grid">ACF+</span>
                            <span class="design-library__pattern-eyebrow">Card Grid</span>
                            <h4 class="design-library__pattern-title">Structured multi-card information section</h4>
                            <p>This is the builder lane for grouped information, feature families, packages, and supporting CTA groupings that need clearer alignment than freeform content blocks.</p>
                            <a href="#" class="design-library__pattern-cta">Section specimen</a>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
</section>