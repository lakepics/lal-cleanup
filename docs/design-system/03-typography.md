# 03 Typography

Status: in progress
Source sections: 4

Typography should carry most brand expression while preserving strong readability.

## Lock Draft Roles (2026-04-27)
- display
- headline
- subhead
- body
- lede/editorial body
- utility label
- eyebrow/overline

## Approved Family Assignment by Role (Phase 1)
- display/headline primary: type-family-display
- editorial heading variants (h4/h5 style lane): type-family-editorial
- body fallback/UI copy: type-family-body-fallback
- utility/eyebrow/nav labels: type-family-ui

## Draft Type Scale (from sandbox primitives)
- display-xl: clamp(50px, 7vw, 92px), line-height .96, weight 400
- h1: clamp(48px, 6vw, 76px), line-height .94, letter-spacing .015em
- h2: clamp(40px, 4.8vw, 58px), line-height .98, letter-spacing .012em
- h3: clamp(32px, 3.6vw, 44px), line-height 1.02
- h4 editorial: clamp(28px, 3vw, 34px), line-height 1.08, italic
- h5 editorial: clamp(22px, 2.4vw, 28px), line-height 1.14, italic
- h6 display-caps: 16px, line-height 1.2, letter-spacing .14em, uppercase
- utility-caps: 14px, line-height 1.2, letter-spacing .14em, uppercase
- lede editorial: clamp(21px, 2.1vw, 26px), line-height 1.58, italic
- body default: 16px, line-height 1.6 to 1.72 depending on context

## Current Runtime Notes
- Global heading family currently set in templates/head.php for h1/h2/h3.
- Global body currently set in templates/head.php to Arial-based fallback stack.
- Sandbox editorial lanes use Freight Big Pro for key reading experiences.
- Mobile nav uses Helvetica-based utility typography and currently includes larger mobile menu sizing.

## Body Typography Strategy (DECIDED 2026-04-27)
- Global fallback body (in templates/head.php): Arial-based sans-serif at 16px, line-height 1.6-1.72, remains UI-safe default for all content unless overridden by pattern.
- Editorial body variant: "Freight Big Pro" serif, reserved for storytelling/long-form reading patterns (lede, feature articles, about sections) where premium serif treatment adds brand presence.
- Utility/form body: Helvetica-based sans-serif at 14px for density and clarity in forms, lists, and component-internal copy.
- Rule: do not apply Freight globally; keep it pattern-scoped to preserve performance and clarity. Editorial role is earned by context, not applied by default.

## Explicit Conflict Resolution
- Issue: runtime default body is Arial stack while sandbox editorial lanes emphasize Freight Big Pro.
- Decision: keep both as approved variants at different layers.
  - Layer 1: global body remains sans.
  - Layer 2: pattern-level override can introduce serif when editorial intent is clear.
  - Future: if serif becomes the majority, promote to global. Until then, explicit.
- Implementation: update 03-typography.md family assignment to reflect dual-track approach.

## Rules (Active)
- Heading roles must use approved families and scale tokens before introducing new sizes.
- Utility/eyebrow roles should stay uppercase with tracked letter-spacing unless an approved exception is logged.
- One-off type sizes in components require a documented exception entry in 19-change-log.md.

## Gap
Style inventory is drafted but not yet bound to final semantic token names in code-facing token files.
