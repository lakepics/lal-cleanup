# Button Component Contract

Status: locked (design-system specimen)
Tier: Elements

## Purpose
Primary interactive element for all CTAs and form submissions. Carries brand intent through color and typography.

## Variants (Locked)

### Primary (Default)
- background: var(--lacc-color-action-primary) #3f5f85
- color: var(--lacc-color-action-on-primary) #ffffff
- hover state: background shifts to var(--lacc-color-action-primary-hover) #324c6a
- use case: main CTAs, hero actions, form submit

### Secondary (Outlined)
- border: 1px solid var(--lacc-color-action-primary)
- color: var(--lacc-color-action-primary)
- background: transparent
- hover state: background-color var(--lacc-color-bg-soft), border maintains brand
- use case: alternate actions, booklet requests, less critical flows

### Tertiary (Text Only)
- color: var(--lacc-color-action-primary)
- background: transparent
- border: none
- underline: optional per pattern
- hover state: color to var(--lacc-color-action-primary-hover), underline appears
- use case: secondary links, breadcrumbs, inline navigation

## Base Styles (All Variants)
- font-family: var(--lacc-type-family-ui) Helvetica, Arial, sans-serif
- font-size: 14px
- font-weight: 700
- letter-spacing: 0.08em
- line-height: 1.2
- text-transform: uppercase
- padding: 0.85em 1.45em (flexible based on size variant)
- border-radius: 0px (sharp edges per brand)
- border: none (unless secondary variant)
- cursor: pointer
- transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease

## Size Variants
- standard: 14px, 0.85em 1.45em padding (default)
- large: 16px, 1em 1.8em padding
- small: 12px, 0.7em 1.2em padding

## States
- default: as defined above
- hover: background/color shift per variant
- focus: outline 2px solid var(--lacc-color-action-primary), outline-offset 2px
- active (pressed): opacity 0.9
- disabled: opacity 0.5, cursor not-allowed

## Token Dependencies
- color-action-primary
- color-action-primary-hover
- color-action-on-primary
- color-bg-soft (secondary variant)
- type-family-ui

## CMS / ACF Mapping (Pending)
- Label: button text (required)
- URL/Link: button destination (required)
- Type: primary | secondary | tertiary (default: primary)
- Size: standard | large | small (default: standard)
- Target: _self | _blank (default: _self)
- Aria-label: accessible label if different from visible text (optional)

## Accessibility Notes
- All variants meet WCAG AA contrast requirements.
- Focus state must be visible and obvious.
- Button text must be descriptive of action.
- No icon-only buttons without aria-label.

## Known Exceptions
- Mobile nav menu has special button styling for toggles (component-scoped, not global).
- Documentation: see components/components-primary-nav.php for nav-specific toggle treatment.

## Related Components
- badge.md (for notification counts on buttons)
- form.md (for form submission buttons)

## Next Steps
- Complete ACF field mapping for production implementation
- Bind implementation styles to semantic token names in production templates/components
- Run implementation-level accessibility pass in live theme context
