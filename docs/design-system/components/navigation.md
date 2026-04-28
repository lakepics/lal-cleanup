# Navigation Component Contract

Status: locked (design-system specimen)
Tier: Components

## Purpose
Primary site navigation providing access to main content sections and support actions. Desktop and mobile optimized with clear visual hierarchy and state indication.

## Current Implementation
- file: components/components-primary-nav.php
- Renders WordPress menu with fallback for nested items
- Fixed position on desktop, sticky on mobile
- JavaScript-enhanced submenu interaction (touch-first on mobile, hover on desktop)

## Desktop Layout
- fixed top bar with brand logo + horizontal menu + actions
- gradient background using var(--lacc-color-brand-blue) to var(--lacc-color-brand-blue-deep)
- menu items: 13px weight 700, uppercase, 0.11em tracking
- submenus: white background, opens on hover
- submenu items: 17px weight 500, lowercase, 0.02em tracking
- visual separators between certain last nav items (cream background on hover)

## Mobile Layout (768px and below)
- collapsible hamburger toggle with expanded panel
- translucent dark overlay gradient
- full-height menu panel with crisp typography
- menu items: 22px weight 600, uppercase, 0.03em tracking
- submenu items: 17px weight 500, 0.02em tracking
- dedicated call CTA at panel bottom: tel:+19093372478
- submenu behavior: first tap opens submenu, second tap follows link (mobile-specific UX)

## Token Dependencies
- color-brand-primary (background gradient start)
- color-brand-primary-deep (background gradient end, text on mobile)
- color-bg-soft (submenu background, hover states)
- color-text-inverse (nav text, #ffffff)
- type-family-ui (Helvetica for all nav text)

## JavaScript Behavior
- Toggle button manages expanded state with aria-expanded
- Submenu open/close logic with is-open class binding
- Outside-click handler to close expanded menu/submenu
- Keyboard escape handler for dismiss
- Touch context detection for mobile submenu first-tap behavior

## Accessibility
- aria-label on toggle button and navigation landmark
- aria-expanded reflects open/close state
- Keyboard focus visible on all interactive elements (outline 2px)
- Current page indicator via current-menu-item class
- Semantic heading hierarchy preserved in navigation

## Known Issues / Technical Debt
- Bootstrap legacy .navbar-* selectors still exist in compiled main.css but are not active
- Future: remove Bootstrap import from bower when all .col-md-*, .panel-*, etc. usage is eliminated
- Current: no Bootstrap classes present in nav component itself (Bootstrap-free)

## CMS / ACF Mapping (Pending)
- Menu assignment: via WordPress theme location "primary_navigation"
- Logo/brand image: site-level option or customizer
- Call-to-action URL: site option (currently hardcoded to tel:+19093372478)
- Submenu depth: currently 2 levels, configurable via menu_args

## Responsive Behavior
- Hamburger appears at 768px breakpoint
- Desktop menu hidden on mobile view
- Mobile panel height: full viewport minus brand bar
- Smooth transitions on state changes

## Related Components
- button.md (for menu toggle and call CTA styling)
- link.md (for submenu link styling and states)

## Promotion Gate (Specimen Lock Outcome)
- [x] Sandbox specimen created showing desktop/mobile/expanded states
- [x] Desktop and mobile state matrix approved and locked in specimen review
- [x] No new Bootstrap classes/dependencies introduced in nav specimen work
- [ ] Confirm touch behavior works on real mobile device (not just emulation)
- [ ] Accessibility audit in production nav implementation: keyboard navigation, focus management, screen reader
- [ ] ACF field mapping document completed for production builder promotion

## Accessibility Verification Snapshot (2026-04-27)
- Verified in production nav implementation: submenu/button `aria-expanded` and submenu `aria-hidden` attributes update on open/close actions.
- Verified in production nav implementation: Escape closes open submenu state and clears `is-open` class states.
- Verified in production nav implementation: focus-visible styles and nav landmark/toggle aria attributes are present.
- Verified in production nav implementation: desktop tab sequence from a focused parent item with children now enters submenu links, and submenu visibility opens immediately for keyboard traversal.
- Pending manual validation: screen reader announcement quality and real mobile touch-device behavior.

## Next Steps
1. Run manual screen reader and real-device touch validation for nav interactions.
2. Complete ACF mapping and configurable CTA/link fields.
3. Continue Bootstrap residue removal in legacy layers outside this locked nav contract.
