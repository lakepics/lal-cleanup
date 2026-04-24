<?php
/**
 * Dev-only color system preview for the flex test page.
 */
?>

<style>
.color-system-strip {
    --color-ink: #51534a;
    --color-ink-strong: #1f221d;
    --color-cream: #f6f3ed;
    --color-white: #ffffff;
    --color-accent: #7C5542;
    --color-green-punch: #60A57D;
    --color-blue: #3F5F85;
    --color-blue-hover: #324c6a;
    --color-blue-active: #2a3f58;
    --color-gradient-blue: linear-gradient(180deg, #324c6a, #3F5F85);
    --color-gradient-cream: linear-gradient(180deg, #f6f3ed, #ffffff);
    --color-gold: #d4a441;
    --color-old-gold: #7A5A1F;
    --color-sky: #8dc5db;
    --color-focus: #7A5A1F;
    --color-border: rgba(81, 83, 74, 0.14);
    --color-shadow: 0 18px 40px rgba(31, 34, 29, 0.08);
    position: relative;
    padding: 72px 0 88px;
    background:
        linear-gradient(180deg, rgba(246,243,237,0.98) 0%, rgba(255,255,255,0.98) 100%),
        radial-gradient(circle at top left, rgba(212,164,65,0.12), transparent 28%),
        radial-gradient(circle at bottom right, rgba(63,95,133,0.08), transparent 24%);
    color: var(--color-ink);
}

.color-system-strip__shell {
    border: 1px solid var(--color-border);
    box-shadow: var(--color-shadow);
    background: rgba(255,255,255,0.88);
}

.color-system-strip__intro {
    display: grid;
    grid-template-columns: minmax(0, 1.2fr) minmax(280px, 0.8fr);
    gap: 28px;
    padding: 36px;
    border-bottom: 1px solid var(--color-border);
}

.color-system-strip__eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    color: var(--color-accent);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
}

.color-system-strip__title {
    margin: 0;
    color: var(--color-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(34px, 4vw, 58px);
    font-weight: 400;
    line-height: 0.98;
}

.color-system-strip__lede,
.color-system-strip__lede p {
    margin-top: 18px;
    margin-bottom: 0;
    color: var(--color-ink);
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(19px, 2vw, 23px);
    line-height: 1.6;
}

.color-system-strip__note {
    padding: 24px;
    border: 1px solid rgba(122, 90, 31, 0.18);
    background: linear-gradient(180deg, rgba(246,243,237,0.92), rgba(255,255,255,0.92));
}

.color-system-strip__note h3 {
    margin: 0 0 12px;
    color: var(--color-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 28px;
    font-weight: 400;
}

.color-system-strip__note p,
.color-system-strip__note li {
    color: var(--color-ink);
    font-size: 15px;
    line-height: 1.6;
}

.color-system-strip__note ul {
    margin: 0;
    padding-left: 18px;
}

.color-system-strip__grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.color-system-strip__panel {
    padding: 30px 32px 34px;
    border-right: 1px solid var(--color-border);
    border-bottom: 1px solid var(--color-border);
}

.color-system-strip__panel:nth-child(2n) {
    border-right: none;
}

.color-system-strip__panel h3 {
    margin: 0 0 14px;
    color: var(--color-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 30px;
    font-weight: 400;
}

.color-system-strip__panel p {
    margin: 0 0 18px;
    color: var(--color-ink);
}

.color-system-strip__swatches {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 16px;
}

.color-system-strip__gradient-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
}

.color-system-strip__swatch {
    overflow: hidden;
    border: 1px solid var(--color-border);
    background: var(--color-white);
}

.color-system-strip__swatch-chip {
    aspect-ratio: 1 / 0.82;
    background: var(--swatch-color);
}

.color-system-strip__swatch-meta {
    padding: 12px 14px 14px;
}

.color-system-strip__gradient-card {
    overflow: hidden;
    border: 1px solid var(--color-border);
    background: var(--color-white);
}

.color-system-strip__gradient-chip {
    min-height: 136px;
    background: var(--gradient-fill);
}

.color-system-strip__gradient-meta {
    padding: 14px 16px 16px;
}

.color-system-strip__gradient-meta strong {
    display: block;
    color: var(--color-ink-strong);
    font-size: 18px;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-weight: 400;
    line-height: 1;
}

.color-system-strip__gradient-meta span {
    display: block;
    margin-top: 6px;
    color: rgba(81, 83, 74, 0.78);
    font-size: 13px;
    line-height: 1.45;
}

.color-system-strip__swatch-meta strong,
.color-system-strip__migration-table strong {
    display: block;
    color: var(--color-ink-strong);
    font-size: 14px;
}

.color-system-strip__swatch-meta span,
.color-system-strip__migration-table span {
    display: block;
    color: rgba(81, 83, 74, 0.78);
    font-size: 13px;
    line-height: 1.45;
}

.color-system-strip__button-row,
.color-system-strip__pairing-grid,
.color-system-strip__link-row {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    align-items: center;
}

.color-system-strip__button-row {
    margin-bottom: 18px;
}

.color-system-strip__button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 180px;
    padding: 0.9em 1.45em;
    border: 1px solid transparent;
    border-radius: 0;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.08em;
    line-height: 1.2;
    text-decoration: none;
    text-transform: uppercase;
    transition: background-color 200ms ease, border-color 200ms ease, color 200ms ease, box-shadow 200ms ease, transform 200ms ease;
}

.color-system-strip__button:hover {
    transform: translateY(-1px);
}

.color-system-strip__button:focus-visible,
.color-system-strip__inline-link:focus-visible,
.color-system-strip__nav-link:focus-visible {
    outline: 2px solid var(--color-focus);
    outline-offset: 3px;
}

.color-system-strip__button:active {
    transform: translateY(0);
}

.color-system-strip__button--primary {
    background: var(--color-blue);
    border-color: var(--color-blue);
    color: var(--color-white);
}

.color-system-strip__button--primary:hover {
    background: var(--color-blue-hover);
    border-color: var(--color-blue-hover);
    color: var(--color-white);
}

.color-system-strip__button--primary:active {
    background: var(--color-blue-active);
    border-color: var(--color-blue-active);
}

.color-system-strip__button--gold-text {
    background: var(--color-old-gold);
    border-color: var(--color-old-gold);
    color: var(--color-white);
}

.color-system-strip__button--gold-text:hover {
    background: #644a19;
    border-color: #644a19;
    color: var(--color-white);
}

.color-system-strip__button--gold-text:active {
    background: #533d15;
    border-color: #533d15;
}

.color-system-strip__button--secondary {
    background: transparent;
    border-color: var(--color-old-gold);
    color: var(--color-old-gold);
}

.color-system-strip__button--secondary:hover {
    background: #644a19;
    border-color: #644a19;
    color: var(--color-white);
}

.color-system-strip__button--secondary:active {
    background: #533d15;
    border-color: #533d15;
    color: var(--color-white);
}

.color-system-strip__button--ink {
    background: var(--color-ink);
    border-color: var(--color-ink);
    color: var(--color-white);
}

.color-system-strip__button--ink:hover {
    background: var(--color-ink-strong);
    border-color: var(--color-ink-strong);
    color: var(--color-white);
}

.color-system-strip__button--ink:active {
    background: var(--color-ink-strong);
    border-color: var(--color-ink-strong);
}

.color-system-strip__button--outline-ink {
    background: transparent;
    border-color: var(--color-ink);
    color: var(--color-ink);
}

.color-system-strip__button--outline-ink:hover {
    background: var(--color-ink-strong);
    border-color: var(--color-ink-strong);
    color: var(--color-white);
}

.color-system-strip__button--outline-ink:active {
    background: var(--color-ink-strong);
    border-color: var(--color-ink-strong);
    color: var(--color-white);
}

.color-system-strip__button--tertiary {
    min-width: 0;
    padding-left: 0;
    padding-right: 0;
    background: transparent;
    color: var(--color-accent);
}

.color-system-strip__button--tertiary:hover {
    color: #644535;
    text-decoration: underline;
    text-underline-offset: 0.14em;
}

.color-system-strip__button--tertiary:active {
    color: #53392c;
}

.color-system-strip__link-surface {
    padding: 18px 20px;
    border: 1px solid var(--color-border);
    background: var(--color-white);
}

.color-system-strip__inline-link,
.color-system-strip__nav-link {
    color: var(--color-blue);
    text-decoration: none;
    transition: color 200ms ease, text-decoration-color 200ms ease;
}

.color-system-strip__inline-link:hover,
.color-system-strip__nav-link:hover {
    color: var(--color-blue-hover);
    text-decoration: underline;
    text-underline-offset: 0.14em;
}

.color-system-strip__inline-link:active,
.color-system-strip__nav-link:active {
    color: var(--color-blue-active);
}

.color-system-strip__nav {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    padding: 16px 18px;
    background: var(--color-ink);
}

.color-system-strip__nav-link {
    color: var(--color-white);
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.color-system-strip__nav-link:hover {
    color: var(--color-cream);
}

.color-system-strip__pairing {
    flex: 1 1 240px;
    min-height: 150px;
    padding: 22px;
    border: 1px solid var(--color-border);
    background: var(--pairing-bg);
    color: var(--pairing-text);
}

.color-system-strip__pairing h4 {
    margin: 0 0 10px;
    font-size: 22px;
    font-weight: 600;
    color: inherit;
}

.color-system-strip__pairing p {
    margin: 0;
    color: inherit;
}

.color-system-strip__ornament-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.1fr) minmax(260px, 0.9fr);
    gap: 18px;
    align-items: stretch;
}

.color-system-strip__ornament-preview {
    position: relative;
    overflow: hidden;
    min-height: 240px;
    padding: 26px;
    border: 1px solid var(--color-border);
    background: linear-gradient(180deg, rgba(246,243,237,0.96), rgba(255,255,255,0.96));
}

.color-system-strip__ornament-preview::after {
    content: '';
    position: absolute;
    right: -28px;
    bottom: -14px;
    width: clamp(180px, 22vw, 260px);
    aspect-ratio: 99.04 / 100.39;
    background-image: url('/wp-content/themes/LACC-sage-theme-master/brand/illustrations/pine.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    opacity: .15;
    pointer-events: none;
}

.color-system-strip__ornament-preview > * {
    position: relative;
    z-index: 1;
}

.color-system-strip__ornament-preview h4,
.color-system-strip__ornament-notes h4 {
    margin: 0 0 10px;
    color: var(--color-ink);
    font-size: 22px;
    font-weight: 600;
}

.color-system-strip__ornament-preview p,
.color-system-strip__ornament-notes p {
    margin: 0;
    color: var(--color-ink);
}

.color-system-strip__ornament-kicker {
    display: inline-block;
    margin-bottom: 12px;
    color: var(--color-green-punch);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
}

.color-system-strip__ornament-notes {
    display: grid;
    gap: 14px;
}

.color-system-strip__ornament-chip {
    padding: 18px 20px;
    border: 1px solid var(--color-border);
    background: var(--color-white);
}

.color-system-strip__ornament-chip strong {
    display: block;
    margin-bottom: 6px;
    color: var(--color-ink-strong);
    font-size: 14px;
}

.color-system-strip__ornament-chip span {
    display: block;
    color: rgba(81, 83, 74, 0.78);
    font-size: 13px;
    line-height: 1.45;
}

.color-system-strip__arrow-row {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    margin-top: 16px;
}

.color-system-strip__arrow-sample {
    display: flex;
    flex: 1 1 160px;
    align-items: center;
    gap: 14px;
    min-height: 96px;
    padding: 18px 20px;
    border: 1px solid var(--color-border);
    background: rgba(255,255,255,0.9);
}

.color-system-strip__arrow-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 auto;
}

.color-system-strip__arrow-icon--medallion {
    width: 72px;
    height: 72px;
    border-radius: 999px;
    background: #5a4f47;
    color: var(--color-white);
}

.color-system-strip__arrow-icon--medallion svg {
    width: 44px;
    height: 44px;
}

.color-system-strip__arrow-icon--logo {
    width: 36px;
    height: 54px;
    color: #5a4f47;
}

.color-system-strip__arrow-icon--logo svg {
    width: 100%;
    height: 100%;
}

.color-system-strip__arrow-copy strong {
    display: block;
    margin-bottom: 4px;
    color: var(--color-ink-strong);
    font-size: 14px;
}

.color-system-strip__arrow-copy span {
    display: block;
    color: rgba(81, 83, 74, 0.78);
    font-size: 13px;
    line-height: 1.45;
}

.color-system-strip__type-layout,
.color-system-strip__type-card p {
    margin: 0;
    color: var(--color-ink);
    font-size: 15px;
    line-height: 1.6;
}

.color-system-strip__type-layout {
    display: grid;
    gap: 18px;
}

.color-system-strip__type-block {
    padding: 22px;
    border: 1px solid var(--color-border);
    background: linear-gradient(180deg, rgba(246,243,237,0.96), rgba(255,255,255,0.96));
}

.color-system-strip__type-block--scale {
    padding: 28px 30px;
}

.color-system-strip__type-block-title {
    margin: 0 0 10px;
    color: var(--color-ink);
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 26px;
    font-weight: 400;
    line-height: 1.02;
}

.color-system-strip__type-block-note {
    margin: 0;
    color: rgba(81, 83, 74, 0.84);
    font-size: 14px;
    line-height: 1.55;
}

.color-system-strip__eyebrow-samples {
    display: grid;
    gap: 14px;
    margin-top: 18px;
}

.color-system-strip__type-row {
    display: grid;
    grid-template-columns: minmax(180px, 220px) minmax(0, 1fr);
    gap: 22px;
    align-items: start;
    padding: 20px 22px;
    border: 1px solid rgba(81, 83, 74, 0.12);
    background: rgba(255,255,255,0.72);
}

.color-system-strip__type-row-label,
.color-system-strip__eyebrow-label {
    color: rgba(81, 83, 74, 0.72);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
}

.color-system-strip__type-row-label {
    padding-top: 4px;
}

.color-system-strip__type-row-content {
    display: grid;
    gap: 10px;
    min-width: 0;
}

.color-system-strip__type-compare-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 14px;
}

.color-system-strip__type-compare-item {
    display: grid;
    gap: 12px;
    padding: 18px;
    border: 1px solid rgba(81, 83, 74, 0.12);
    background: linear-gradient(180deg, rgba(246,243,237,0.78), rgba(255,255,255,0.92));
}

.color-system-strip__type-compare-font {
    color: rgba(81, 83, 74, 0.72);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
}

.color-system-strip__type-compare-heading,
.color-system-strip__type-compare-subheading {
    margin: 0;
    color: var(--color-ink);
}

.color-system-strip__type-compare-heading {
    font-size: clamp(32px, 3.6vw, 46px);
    font-weight: 500;
    line-height: 1.08;
}

.color-system-strip__type-compare-subheading {
    font-size: clamp(26px, 3vw, 34px);
    font-weight: 500;
    line-height: 1.14;
}

.color-system-strip__type-compare-copy {
    color: rgba(81, 83, 74, 0.84);
    font-size: 14px;
    line-height: 1.55;
}

.color-system-strip__type-compare-item--freight .color-system-strip__type-compare-heading,
.color-system-strip__type-compare-item--freight .color-system-strip__type-compare-subheading {
    font-family: "Freight Big Pro", Georgia, serif;
}

.color-system-strip__type-compare-item--goudy .color-system-strip__type-compare-heading,
.color-system-strip__type-compare-item--goudy .color-system-strip__type-compare-subheading {
    font-family: "ltc-goudy-old-style-pro", Georgia, serif;
}

.color-system-strip__eyebrow-chip {
    display: inline-flex;
    align-items: center;
    width: fit-content;
    max-width: 100%;
    font-size: 12px;
    line-height: 1.2;
    white-space: nowrap;
}

.color-system-strip__eyebrow-chip--outlined {
    padding: 8px 18px;
    border: 2px solid #c9973a;
    border-radius: 32px;
    color: #c9973a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0.24em;
    text-transform: capitalize;
}

.color-system-strip__eyebrow-chip--filled {
    padding: 8px 18px;
    border: 2px solid #c9973a;
    border-radius: 32px;
    background: #51534a;
    color: #f5b62b;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 400;
    letter-spacing: 0.2em;
    text-transform: capitalize;
}

.color-system-strip__eyebrow-chip--plain {
    color: #946E29;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
}

.color-system-strip__eyebrow-chip--plain-soft {
    color: #946E29;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
}

.color-system-strip__type-card {
    padding: 24px 24px 26px;
    border: 1px solid var(--color-border);
    background: var(--color-white);
    box-shadow: 0 16px 32px rgba(31, 34, 29, 0.05);
}

.color-system-strip__type-card--row {
    padding: 0;
    border: none;
    background: transparent;
    box-shadow: none;
}

.color-system-strip__type-kicker {
    display: block;
    margin-bottom: 10px;
    color: rgba(81, 83, 74, 0.75);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
}

.color-system-strip__type-card .color-system-strip__type-heading-hero,
.color-system-strip__type-card .color-system-strip__type-heading-feature,
.color-system-strip__type-card .color-system-strip__type-heading-faq {
    margin: 0;
    color: var(--color-ink);
    max-width: 600px;
}

.color-system-strip__type-heading-hero {
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(40px, 4.4vw, 60px);
    font-weight: 400;
    line-height: 0.98;
}

.color-system-strip__type-subheading-hero {
    margin-top: 14px !important;
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(21px, 2.4vw, 28px) !important;
    font-style: italic;
    line-height: 1.55 !important;
}

.color-system-strip__type-heading-feature {
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(32px, 4vw, 54px);
    font-weight: 300;
    line-height: 1.02;
    text-transform: capitalize;
}

.color-system-strip__type-copy-feature {
    margin-top: 14px !important;
    font-size: 17px !important;
    line-height: 1.7 !important;
}

.color-system-strip__type-heading-faq {
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(34px, 4.4vw, 60px);
    font-weight: 400;
    line-height: 1.04;
}

.color-system-strip__type-copy-faq {
    margin-top: 14px !important;
    font-family: Helvetica, Arial, Roboto, sans-serif;
    font-size: 17px !important;
    line-height: 1.7 !important;
}

.color-system-strip__heading-scale {
    display: grid;
    gap: 14px;
    margin-top: 18px;
}

.color-system-strip__heading-scale-item {
    display: grid;
    grid-template-columns: 72px minmax(0, 1fr);
    gap: 16px;
    align-items: start;
    padding: 14px 0;
    border-top: 1px solid rgba(81, 83, 74, 0.1);
}

.color-system-strip__heading-scale-item:first-child {
    padding-top: 0;
    border-top: none;
}

.color-system-strip__heading-scale-label {
    color: rgba(81, 83, 74, 0.72);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
}

.color-system-strip__heading-scale-sample {
    margin: 0;
    font-size: inherit !important;
    line-height: inherit !important;
    color: var(--color-ink);
}

.color-system-strip__heading-scale-meta {
    display: block;
    margin-top: 6px;
    color: rgba(81, 83, 74, 0.72);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.06em;
    text-transform: uppercase;
}

.color-system-strip__heading-scale-sample--xxl {
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(56px, 7vw, 104px) !important;
    font-weight: 400;
    line-height: 0.92 !important;
}

.color-system-strip__heading-scale-sample--h1 {
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(42px, 4.8vw, 68px) !important;
    font-weight: 400;
    line-height: 0.98 !important;
}

.color-system-strip__heading-scale-sample--h2 {
    font-family: "Freight Big Pro", Georgia, serif;
    font-size: clamp(32px, 3.6vw, 46px) !important;
    font-weight: 500;
    line-height: 1.08 !important;
}

.color-system-strip__heading-scale-sample--h3 {
    font-family: "Freight Big Pro", Georgia, serif !important;
    font-size: clamp(26px, 3vw, 34px) !important;
    font-weight: 500;
    line-height: 1.14 !important;
}

.color-system-strip__heading-scale-sample--h4 {
    font-family: Helvetica, Arial, Roboto, sans-serif;
    font-size: 24px !important;
    font-weight: 700;
    line-height: 1.2 !important;
}

.color-system-strip__heading-scale-sample--h5 {
    font-family: Helvetica, Arial, Roboto, sans-serif;
    font-size: 20px !important;
    font-weight: 700;
    line-height: 1.28 !important;
}

.color-system-strip__heading-scale-sample--h6 {
    font-family: Helvetica, Arial, Roboto, sans-serif;
    font-size: 16px !important;
    font-weight: 700;
    line-height: 1.32 !important;
    letter-spacing: 0.04em;
    text-transform: uppercase;
}

@media (max-width: 991px) {
    .color-system-strip__intro,
    .color-system-strip__grid {
        grid-template-columns: 1fr;
    }

    .color-system-strip__type-row {
        grid-template-columns: 1fr;
        gap: 14px;
    }

    .color-system-strip__panel {
        border-right: none;
    }

    .color-system-strip__swatches {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .color-system-strip__gradient-grid {
        grid-template-columns: 1fr;
    }

    .color-system-strip__ornament-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="color-system-strip" aria-label="Color system test strip">
    <div class="container">
        <div class="color-system-strip__shell">
            <div class="color-system-strip__intro">
                <div>
                    <span class="color-system-strip__eyebrow">Design System Test Strip</span>
                    <h2 class="color-system-strip__title">Warm, restrained, editorial color direction</h2>
                    <div class="color-system-strip__lede">
                        <p>This strip previews the accessible palette alongside the May 2024 brand snapshot, keeping exact brand matches where they hold up and reserving lower-contrast logo colors for decorative use.</p>
                    </div>
                </div>
                <aside class="color-system-strip__note">
                    <h3>Working Guidance</h3>
                    <ul>
                        <li>LAL Green `#51534A` is the exact brand text color and safely passes AA on white at `7.82:1`.</li>
                        <li>Logo Blue, Logo Green, Logo Gold, and Bear Brown stay decorative on white because they miss `4.5:1`.</li>
                        <li>Primary blue and Old Gold remain the accessible action colors because they pass on white at `6.59:1` and `6.34:1`.</li>
                    </ul>
                </aside>
            </div>

            <div class="color-system-strip__grid">
                <section class="color-system-strip__panel">
                    <h3>Token Preview</h3>
                    <div class="color-system-strip__swatches">
                        <article class="color-system-strip__swatch" style="--swatch-color:#51534a;">
                            <div class="color-system-strip__swatch-chip"></div>
                            <div class="color-system-strip__swatch-meta"><strong>LAL Green / Ink</strong><span>#51534A • exact brand match • AA pass on white</span></div>
                        </article>
                        <article class="color-system-strip__swatch" style="--swatch-color:#1f221d;">
                            <div class="color-system-strip__swatch-chip"></div>
                            <div class="color-system-strip__swatch-meta"><strong>Deep Ink</strong><span>#1F221D</span></div>
                        </article>
                        <article class="color-system-strip__swatch" style="--swatch-color:#f6f3ed;">
                            <div class="color-system-strip__swatch-chip"></div>
                            <div class="color-system-strip__swatch-meta"><strong>Cream</strong><span>#F6F3ED</span></div>
                        </article>
                        <article class="color-system-strip__swatch" style="--swatch-color:#ffffff;">
                            <div class="color-system-strip__swatch-chip"></div>
                            <div class="color-system-strip__swatch-meta"><strong>White</strong><span>#FFFFFF</span></div>
                        </article>
                        <article class="color-system-strip__swatch" style="--swatch-color:#7C5542;">
                            <div class="color-system-strip__swatch-chip"></div>
                            <div class="color-system-strip__swatch-meta"><strong>Accent Brown / Bear Brown</strong><span>#9E7156 brand family • decorative on white</span></div>
                        </article>
                        <article class="color-system-strip__swatch" style="--swatch-color:#3F5F85;">
                            <div class="color-system-strip__swatch-chip"></div>
                            <div class="color-system-strip__swatch-meta"><strong>Accessible Primary Blue</strong><span>#3F5F85 • brand-adjacent replacement for Logo Blue on white</span></div>
                        </article>
                        <article class="color-system-strip__swatch" style="--swatch-color:#7A5A1F;">
                            <div class="color-system-strip__swatch-chip"></div>
                            <div class="color-system-strip__swatch-meta"><strong>Accessible Old Gold</strong><span>#7A5A1F • darker than brand Logo Gold for AA on white</span></div>
                        </article>
                        <article class="color-system-strip__swatch" style="--swatch-color:#60A57D;">
                            <div class="color-system-strip__swatch-chip"></div>
                            <div class="color-system-strip__swatch-meta"><strong>Green Punch / LAL Logo Green</strong><span>#60A57D from Asset 1 / Asset 2 • exact brand match • decorative on white</span></div>
                        </article>
                        <article class="color-system-strip__swatch" style="--swatch-color:#d4a441;">
                            <div class="color-system-strip__swatch-chip"></div>
                            <div class="color-system-strip__swatch-meta"><strong>Decorative Gold</strong><span>#F5B62B / #DAA128 brand gold family • decorative on white</span></div>
                        </article>
                    </div>
                </section>

                <section class="color-system-strip__panel">
                    <h3>Button Roles</h3>
                    <div class="color-system-strip__button-row">
                        <a href="#" class="color-system-strip__button color-system-strip__button--primary">Primary Button</a>
                        <a href="#" class="color-system-strip__button color-system-strip__button--ink">Ink Fill</a>
                        <a href="#" class="color-system-strip__button color-system-strip__button--gold-text">Old Gold Fill</a>
                    </div>
                    <p>Keep the live button set to three roles: primary blue, ink fill, and old-gold fill. The brighter decorative gold stays ornamental because it only reaches 2.29:1 against white text.</p>
                </section>

                <section class="color-system-strip__panel">
                    <h3>Locked Gradients</h3>
                    <div class="color-system-strip__gradient-grid">
                        <article class="color-system-strip__gradient-card" style="--gradient-fill: var(--color-gradient-blue);">
                            <div class="color-system-strip__gradient-chip"></div>
                            <div class="color-system-strip__gradient-meta"><strong>Blue To Deep Blue</strong><span>#3F5F85 to #324C6A • use for atmospheric panels and blue-led feature surfaces.</span></div>
                        </article>
                        <article class="color-system-strip__gradient-card" style="--gradient-fill: var(--color-gradient-cream);">
                            <div class="color-system-strip__gradient-chip"></div>
                            <div class="color-system-strip__gradient-meta"><strong>White To Cream</strong><span>#FFFFFF to #F6F3ED • use for elevated content surfaces and soft hospitality depth.</span></div>
                        </article>
                    </div>
                    <p>Keep gradients limited to these two transitions so depth remains part of the system rather than an ad hoc styling device.</p>
                </section>

                <section class="color-system-strip__panel">
                    <h3>Links And Navigation</h3>
                    <div class="color-system-strip__link-row">
                        <div class="color-system-strip__link-surface">
                            <p>Inline editorial copy with <a href="#" class="color-system-strip__inline-link">a proposed link treatment</a> that changes color and gains underline on hover.</p>
                        </div>
                    </div>
                    <div class="color-system-strip__nav" style="margin-top:18px;">
                        <a href="#" class="color-system-strip__nav-link">Rooms</a>
                        <a href="#" class="color-system-strip__nav-link">Dining</a>
                        <a href="#" class="color-system-strip__nav-link">Meet</a>
                        <a href="#" class="color-system-strip__nav-link">Book</a>
                    </div>
                </section>

                <section class="color-system-strip__panel">
                    <h3>Safe Pairings</h3>
                    <div class="color-system-strip__pairing-grid">
                        <article class="color-system-strip__pairing" style="--pairing-bg:#f6f3ed; --pairing-text:#51534a;">
                            <h4>Cream + Ink</h4>
                            <p>Default editorial reading surface.</p>
                        </article>
                        <article class="color-system-strip__pairing" style="--pairing-bg:#ffffff; --pairing-text:#51534a;">
                            <h4>White + Ink</h4>
                            <p>Clean utility and form surfaces.</p>
                        </article>
                        <article class="color-system-strip__pairing" style="--pairing-bg:#3F5F85; --pairing-text:#ffffff;">
                            <h4>Accessible Blue + White</h4>
                            <p>Brand-adjacent replacement for the lighter logo blue when live action needs to pass AA.</p>
                        </article>
                        <article class="color-system-strip__pairing" style="--pairing-bg:#7C5542; --pairing-text:#ffffff;">
                            <h4>Bear Brown Family + White</h4>
                            <p>Hospitality accent family from the brand guide, but not strong enough for live white-background text treatment.</p>
                        </article>
                        <article class="color-system-strip__pairing" style="--pairing-bg:#60A57D; --pairing-text:#ffffff;">
                            <h4>Green Punch + White</h4>
                            <p>Exact brand logo green, reserved for ornamental emphasis, environmental cues, and quiet background moments.</p>
                        </article>
                    </div>
                </section>

                <section class="color-system-strip__panel">
                    <h3>Ornament Study</h3>
                    <div class="color-system-strip__ornament-grid">
                        <div class="color-system-strip__ornament-preview">
                            <span class="color-system-strip__ornament-kicker">Background Graphic Test</span>
                            <h4>Botanical motif as a soft environmental layer</h4>
                            <p>Use the current illustration export as a soft environmental layer, preserving tonal detail and hand-drawn character instead of flattening it into a generic icon shape.</p>
                        </div>
                        <div class="color-system-strip__ornament-notes">
                            <div class="color-system-strip__ornament-chip">
                                <strong>Source artwork</strong>
                                <span>The ornament preview now pulls from the reviewed brand illustration exports instead of the older design-system placeholder asset set.</span>
                            </div>
                            <div class="color-system-strip__ornament-chip">
                                <strong>Recommended use</strong>
                                <span>Keep this low-opacity and oversized, more like atmosphere than iconography, and avoid flattening it into a single-color silhouette.</span>
                            </div>
                            <div class="color-system-strip__ornament-chip">
                                <strong>Suggested starting point</strong>
                                <span>Use around 12% to 20% opacity on cream or white surfaces beside the existing scrollwork.</span>
                            </div>
                        </div>
                    </div>
                    <div class="color-system-strip__arrow-row">
                        <div class="color-system-strip__arrow-sample">
                            <span class="color-system-strip__arrow-icon color-system-strip__arrow-icon--medallion" aria-hidden="true">
                                <svg viewBox="0 0 64 64">
                                    <path d="M45 32 H20" stroke="#ffffff" stroke-width="4"></path>
                                    <path d="M31 17 L17 32 L31 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                </svg>
                            </span>
                            <div class="color-system-strip__arrow-copy">
                                <strong>Previous / next medallion</strong>
                                <span>Use for expressive carousel or gallery controls when the direction itself should carry branded character.</span>
                            </div>
                        </div>
                        <div class="color-system-strip__arrow-sample">
                            <span class="color-system-strip__arrow-icon color-system-strip__arrow-icon--medallion" aria-hidden="true">
                                <svg viewBox="0 0 64 64">
                                    <path d="M19 32 H44" stroke="#ffffff" stroke-width="4"></path>
                                    <path d="M33 17 L47 32 L33 47" fill="none" stroke="#ffffff" stroke-width="4" stroke-linejoin="miter"></path>
                                </svg>
                            </span>
                            <div class="color-system-strip__arrow-copy">
                                <strong>Companion medallion</strong>
                                <span>Keep the left and right medallions as the primary expressive control family, not as decorative badges.</span>
                            </div>
                        </div>
                        <div class="color-system-strip__arrow-sample">
                            <span class="color-system-strip__arrow-icon color-system-strip__arrow-icon--logo" aria-hidden="true">
                                <svg viewBox="0 0 44 54">
                                    <path d="M16.2 45.6L9 31.4L13.4 22.9L17 30L20.6 37.1L16.2 45.6ZM20.7 32.9L18.1 27.8L14.5 20.7L20.7 8.5V32.9ZM22.7 8.4L28.9 20.6L25.3 27.7L22.7 32.8V8.4ZM22.8 37L26.4 29.9L30 22.8L34.4 31.3L27.2 45.5L22.8 37Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <div class="color-system-strip__arrow-copy">
                                <strong>Simplified logo arrow</strong>
                                <span>Use as signage-like punctuation or section accent, not as the default previous and next control.</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="color-system-strip__panel" style="grid-column: 1 / -1;">
                    <h3>Typography Patterns</h3>
                    <div class="color-system-strip__type-layout">
                        <div class="color-system-strip__type-block color-system-strip__type-block--scale">
                            <h4 class="color-system-strip__type-block-title">Heading Scale</h4>
                            <p class="color-system-strip__type-block-note">This long-form content scale keeps Haarlem at the top, Freight Big Pro in the middle, and Helvetica for smaller utility headings. FAQ and similar utility sections remain a separate exception.</p>
                            <div class="color-system-strip__heading-scale">
                                <div class="color-system-strip__heading-scale-item">
                                    <span class="color-system-strip__heading-scale-label">XXL H1</span>
                                    <div>
                                        <div class="color-system-strip__heading-scale-sample color-system-strip__heading-scale-sample--xxl">Lake Arrowhead Storytelling</div>
                                        <span class="color-system-strip__heading-scale-meta">HaarlemDeco</span>
                                    </div>
                                </div>
                                <div class="color-system-strip__heading-scale-item">
                                    <span class="color-system-strip__heading-scale-label">H1</span>
                                    <div>
                                        <h1 class="color-system-strip__heading-scale-sample color-system-strip__heading-scale-sample--h1">Haarlem display headline</h1>
                                        <span class="color-system-strip__heading-scale-meta">HaarlemDeco</span>
                                    </div>
                                </div>
                                <div class="color-system-strip__heading-scale-item">
                                    <span class="color-system-strip__heading-scale-label">H2</span>
                                    <div>
                                        <h2 class="color-system-strip__heading-scale-sample color-system-strip__heading-scale-sample--h2">Freight Big Pro section heading</h2>
                                        <span class="color-system-strip__heading-scale-meta">Freight Big Pro</span>
                                    </div>
                                </div>
                                <div class="color-system-strip__heading-scale-item">
                                    <span class="color-system-strip__heading-scale-label">H3</span>
                                    <div>
                                        <h3 class="color-system-strip__heading-scale-sample color-system-strip__heading-scale-sample--h3">Freight Big Pro supporting heading</h3>
                                        <span class="color-system-strip__heading-scale-meta">Freight Big Pro</span>
                                    </div>
                                </div>
                                <div class="color-system-strip__heading-scale-item">
                                    <span class="color-system-strip__heading-scale-label">H4</span>
                                    <div>
                                        <h4 class="color-system-strip__heading-scale-sample color-system-strip__heading-scale-sample--h4">Helvetica utility heading</h4>
                                        <span class="color-system-strip__heading-scale-meta">Helvetica</span>
                                    </div>
                                </div>
                                <div class="color-system-strip__heading-scale-item">
                                    <span class="color-system-strip__heading-scale-label">H5</span>
                                    <div>
                                        <h5 class="color-system-strip__heading-scale-sample color-system-strip__heading-scale-sample--h5">Helvetica minor heading</h5>
                                        <span class="color-system-strip__heading-scale-meta">Helvetica</span>
                                    </div>
                                </div>
                                <div class="color-system-strip__heading-scale-item">
                                    <span class="color-system-strip__heading-scale-label">H6</span>
                                    <div>
                                        <h6 class="color-system-strip__heading-scale-sample color-system-strip__heading-scale-sample--h6">Helvetica eyebrow utility</h6>
                                        <span class="color-system-strip__heading-scale-meta">Helvetica</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <article class="color-system-strip__type-card color-system-strip__type-card--row">
                            <div class="color-system-strip__type-row">
                                <span class="color-system-strip__type-row-label">Eyebrow Treatments</span>
                                <div class="color-system-strip__type-row-content">
                                    <p class="color-system-strip__type-block-note">Keep the eyebrow styles visible as their own reference set, even when they also appear inside the pairings below.</p>
                                    <div class="color-system-strip__eyebrow-samples">
                                        <div>
                                            <span class="color-system-strip__eyebrow-label">Outlined Pill</span>
                                            <span class="color-system-strip__eyebrow-chip color-system-strip__eyebrow-chip--outlined">lake arrowhead, california</span>
                                        </div>
                                        <div>
                                            <span class="color-system-strip__eyebrow-label">Filled Pill</span>
                                            <span class="color-system-strip__eyebrow-chip color-system-strip__eyebrow-chip--filled">UCLA LAKE ARROWHEAD LODGE</span>
                                        </div>
                                        <div>
                                            <span class="color-system-strip__eyebrow-label">Tavern / Featured Article</span>
                                            <span class="color-system-strip__eyebrow-chip color-system-strip__eyebrow-chip--plain-soft">Tavern Component</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="color-system-strip__type-card color-system-strip__type-card--row">
                            <div class="color-system-strip__type-row">
                                <span class="color-system-strip__type-row-label">Freight vs LTC</span>
                                <div class="color-system-strip__type-row-content">
                                    <p class="color-system-strip__type-block-note">Same copy, same scale. This isolates the voice difference between Freight Big Pro and LTC Goudy Old Style Pro without changing sizing or hierarchy.</p>
                                    <div class="color-system-strip__type-compare-grid">
                                        <div class="color-system-strip__type-compare-item color-system-strip__type-compare-item--freight">
                                            <span class="color-system-strip__type-compare-font">Freight Big Pro</span>
                                            <h4 class="color-system-strip__type-compare-heading">Mountain time, set apart</h4>
                                            <h5 class="color-system-strip__type-compare-subheading">Gather around the details</h5>
                                            <p class="color-system-strip__type-compare-copy">Use this column to judge how much warmth, formality, and period character Freight brings when the scale stays constant.</p>
                                        </div>
                                        <div class="color-system-strip__type-compare-item color-system-strip__type-compare-item--goudy">
                                            <span class="color-system-strip__type-compare-font">LTC Goudy Old Style Pro</span>
                                            <h4 class="color-system-strip__type-compare-heading">Mountain time, set apart</h4>
                                            <h5 class="color-system-strip__type-compare-subheading">Gather around the details</h5>
                                            <p class="color-system-strip__type-compare-copy">Use this column to compare the same hierarchy in LTC Goudy and decide whether the softer editorial tone is the better default for section headings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="color-system-strip__type-card color-system-strip__type-card--row">
                            <div class="color-system-strip__type-row">
                                <span class="color-system-strip__type-row-label">Video Hero Pairing</span>
                                <div class="color-system-strip__type-row-content">
                                    <span class="color-system-strip__eyebrow-chip color-system-strip__eyebrow-chip--outlined">lake arrowhead, california</span>
                                    <h4 class="color-system-strip__type-heading-hero">A lodge stay with room to breathe</h4>
                                    <p class="color-system-strip__type-subheading-hero">Use the hero pairing when the heading needs theatrical presence and the follow-up line carries the warmer editorial voice.</p>
                                </div>
                            </div>
                        </article>

                        <article class="color-system-strip__type-card color-system-strip__type-card--row">
                            <div class="color-system-strip__type-row">
                                <span class="color-system-strip__type-row-label">Featured Article Pairing</span>
                                <div class="color-system-strip__type-row-content">
                                    <span class="color-system-strip__eyebrow-chip color-system-strip__eyebrow-chip--plain-soft">Tavern Component</span>
                                    <h4 class="color-system-strip__type-heading-feature">Gather around the details</h4>
                                    <p class="color-system-strip__type-copy-feature">This pairing reflects the featured-article and split-feature pattern: a compact uppercase eyebrow, a lighter Haarlem heading, and readable 17px to 24px supporting copy.</p>
                                </div>
                            </div>
                        </article>

                        <article class="color-system-strip__type-card color-system-strip__type-card--row">
                            <div class="color-system-strip__type-row">
                                <span class="color-system-strip__type-row-label">Card Grid Pairing</span>
                                <div class="color-system-strip__type-row-content">
                                    <span class="color-system-strip__eyebrow-chip color-system-strip__eyebrow-chip--filled">everything you need</span>
                                    <h4 class="color-system-strip__type-heading-faq">Plan the section, then layer the support text</h4>
                                    <p class="color-system-strip__type-copy-faq">This shows the denser utility pattern used across card-grid and FAQ-like intros: stronger eyebrow framing, large Haarlem display, and clean body copy for scan-friendly explanation. Keep this lane distinct from the longer-form blog and meeting-planner content scale.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

            </div>
        </div>
    </div>
</section>