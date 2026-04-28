# 02 Foundations

Status: in progress
Source sections: 3

## Lock Pass Snapshot (2026-04-27)
- Scope: first lock draft for typography and color only.
- Source files audited: templates/head.php, template-sandbox.php, components/components-primary-nav.php.
- Outcome: shared brand blue values are aligned between global tokens and sandbox tokens.

## Token Categories (Current Priority)
- color (active)
- typography (active)
- spacing (pending lock)
- sizing (pending lock)
- radii (pending lock)
- borders (pending lock)
- shadows (pending lock)
- opacity (pending lock)
- z-index (pending lock)
- motion (pending lock)
- grid (pending lock)
- breakpoints (pending lock)

## Token Levels
- Primitive tokens: raw values such as hex, rgba, px, rem, clamp values.
- Semantic tokens: role-based assignments used by components and templates.

## Approved Primitive Color Values (Phase 1)
- blue: #3f5f85
- blue-deep: #324c6a
- blue-border: #4c6d93
- cream: #f6f3ed
- ink: #51534a
- ink-deep: #1f221d
- gold: #d4a441
- white: #ffffff

## Approved Semantic Color Tokens (Phase 1)
- color-brand-primary -> #3f5f85
- color-brand-primary-deep -> #324c6a
- color-brand-primary-border -> #4c6d93
- color-bg-soft -> #f6f3ed
- color-text-primary -> #51534a
- color-text-strong -> #1f221d
- color-accent-gold -> #d4a441
- color-surface-white -> #ffffff

## Approved Typography Primitive Families (Phase 1)
- type-family-display: HaarlemDeco, Arial, Helvetica, sans-serif
- type-family-editorial: "Freight Big Pro", Georgia, serif
- type-family-ui: Helvetica, Arial, sans-serif
- type-family-body-fallback: Arial, Helvetica, sans-serif

## Foundation Rules (Now Active)
- New component/template color declarations must reference semantic tokens, not ad hoc hex values.
- New type declarations must map to documented role tokens before implementation.
- If a needed value is missing, log it in docs first and map to its owning layer before code use.

## Upward Feedback Loop (Now Active)
Components are allowed to push needs back up to Foundations when tokens are missing or insufficient.

Required loop:
1. Detect gap in component work (missing semantic role, unusable value, or unresolved variant state).
2. Create token request with proposed name, role, and candidate value.
3. Validate request visually in foundations review flow before component lock.
4. Run accessibility check if request affects text/background or interactive states.
5. Approve or reject request and record decision in 19-change-log.md.
6. If approved, update token source files, runtime mapping, and component dependency lists.
7. Re-run component specimen review using updated token values.

Token request minimum payload:
- request-id (date + short slug)
- originating component
- requested token name
- role description
- candidate value(s)
- affected states (default, hover, focus, active, disabled)
- accessibility impact
- decision status (proposed, approved, rejected, deferred)

Stop rule:
- No component can be marked "locked" if it requires unresolved token requests.

## Gaps and Explicit Ownership
1. Code-facing token packages are not implemented yet.
Recommended home: assets/tokens/*.json.
2. Semantic token naming is documented but not yet mirrored in CSS custom properties.
Recommended home: templates/head.php for runtime vars and assets/tokens/*.json for source data.
3. Status labels are not yet attached to each token entry in a machine-readable inventory.
Recommended home: docs/design-system/design-system-framework.yaml plus a future token registry file.
