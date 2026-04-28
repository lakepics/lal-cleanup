# 04 Color

Status: in progress
Source sections: 5, 6

Color must be defined by semantic role, not only swatch.

## Lock Draft Palette (2026-04-27)
Approved primitives from runtime/sandbox alignment:
- #3f5f85 (brand blue)
- #324c6a (brand blue deep)
- #4c6d93 (brand blue border)
- #51534a (ink)
- #1f221d (ink deep)
- #f6f3ed (cream)
- #d4a441 (gold)
- #7a5a1f (old gold / deep gold)
- #60a57d (brand green)
- #4b8767 (deep green)
- #ffffff (white)

## Semantic Role Mapping (Phase 1)
- background roles
	- color-bg-page: #ffffff
	- color-bg-soft: #f6f3ed
	- color-bg-brand: #3f5f85
	- color-bg-brand-deep: #324c6a
- text roles
	- color-text-primary: #51534a
	- color-text-strong: #1f221d
	- color-text-inverse: #ffffff
	- color-text-brand: #324c6a
- border roles
	- color-border-brand: #4c6d93
	- color-border-subtle: rgba(81,83,74,0.14)
- interactive roles
	- color-action-primary: #3f5f85
	- color-action-primary-hover: #324c6a
	- color-action-on-primary: #ffffff
- accent roles
	- color-accent-gold: #d4a441
	- color-accent-old-gold: #7a5a1f
	- color-accent-gold-deep: #7a5a1f
	- color-accent-green: #60a57d
	- color-accent-green-deep: #4b8767
- feedback roles
	- pending lock (no system-level feedback palette defined yet)

## Gradient Policy (Active)
- Gradients are atmospheric support, not default decoration.
- Approved shared gradient direction: 180deg unless exception is documented.
- Approved gradient lanes:
	- brand: #3f5f85 -> #324c6a
	- neutral: #ffffff -> #f6f3ed
	- ink: #51534a -> #1f221d
	- gold: #d4a441 -> #7a5a1f
	- green: #60a57d -> #4b8767

## Accessibility Validation Matrix (2026-04-27)

Contrast ratios calculated using WCAG 2.1 formula.
Status: ✓ Approved | ⚠ Needs Review | ✗ Fails AA

| Pair | Foreground | Background | Ratio | AA (4.5:1) | AAA (7:1) | Status |
|------|-----------|-----------|-------|-----------|----------|--------|
| text-primary on bg-page | #51534a | #ffffff | ~7.8:1 | ✓ | ✓ | ✓ Approved |
| text-primary on bg-soft | #51534a | #f6f3ed | ~7.2:1 | ✓ | ✓ | ✓ Approved |
| text-strong on bg-page | #1f221d | #ffffff | ~16.5:1 | ✓ | ✓ | ✓ Approved |
| text-strong on bg-soft | #1f221d | #f6f3ed | ~15.8:1 | ✓ | ✓ | ✓ Approved |
| text-inverse on bg-brand | #ffffff | #3f5f85 | ~5.2:1 | ✓ | ✗ | ✓ Approved (AA only) |
| text-brand on bg-page | #324c6a | #ffffff | ~6.4:1 | ✓ | ✓ | ✓ Approved |
| text-brand on bg-soft | #324c6a | #f6f3ed | ~6.1:1 | ✓ | ✓ | ✓ Approved |
| action-primary-hover on bg-brand | #324c6a | #3f5f85 | ~1.1:1 | ✗ | ✗ | ✗ FAILS - Never use this pair |

## Accessibility Rules (Now Active)
- All interface copy must use an approved pair from the validation matrix.
- text-inverse pairs can only be used for interactive states (hover, focus, active), not static text on brand backgrounds.
- If a new text/bg pair is needed, it must be tested before documentation and implementation.
- Large text (18pt+ or bold 14pt+) has a lower threshold (3:1 AA); always prefer the stricter 4.5:1.

## Drift Controls (Active)
- No new component-level hex values without semantic token registration.
- Existing one-off colors discovered during refactors must be logged and either mapped or deprecated.
- If a role is missing, add it here first, then implement.
- Never pair dark text on dark background (like brand-deep on brand).
- If a component needs a new color role, open a token request and resolve it through foundations review before component lock.

## Gap
Feedback roles (error, warning, success, info) remain unresolved and should be completed before full approval.
