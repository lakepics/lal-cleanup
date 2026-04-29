# Local vs Live Layout Comparison Checklist

Generated: 2026-04-28
Purpose: catch layout regressions during phased Bootstrap migration.
Scope: content area only. Exclude nav and footer checks in this workflow.

## Inputs
- Local base URL: `https://lal.local`
- Live base URL: `<set-live-base-url>`
- Device widths: 375, 430, 768, 1024, 1366
- Browser: Chrome with cache disabled during inspection

## Page Set (Start Here)
- /flex/
- /experience/
- /faq/
- /policies/
- /film-location/
- One representative page per migrated cohort template

## Preparation
1. Hard reload local and live pages with cache disabled.
2. Confirm both pages are loaded with same viewport width.
3. Scroll to main content region.
4. Ignore nav/header and footer regions for this checklist.

## Content-Area Comparison Pass
Run all checks at each viewport width.

1. Vertical rhythm
- Section spacing above and below major blocks is visually consistent.
- No unexpected collapsed margins or extra whitespace bands.

2. Grid and column structure
- Multi-column blocks keep expected column count and wrapping.
- No overflow clipping or horizontal scroll in content area.
- Card decks and media/text rows align as expected.

3. Typography and copy flow
- Headline and body measure are comparable between local and live.
- No orphaned words from drastic width changes.
- Lists and rich text blocks preserve indentation and bullets.

4. Media behavior
- Images/video containers retain expected aspect ratios.
- Captions and overlays do not overlap body copy.
- No media crop changes that hide critical content.

5. Interactive content modules
- Accordions open/close cleanly without layout jumps.
- Tab-like or reveal modules do not overlap adjacent sections.
- Buttons/CTAs remain aligned and visible in content area.

6. Utility/state classes
- Alignment helpers and spacing utilities render consistently.
- No missing style states when Bootstrap classes were removed.

## Pass Log Template
Use one row per page per viewport.

| Date | Page | Viewport | Area checked | Result | Screenshot ref | Notes |
| --- | --- | --- | --- | --- | --- | --- |
| 2026-04-28 | /faq/ | 430 | content only | pass/fail | local-faq-430.png / live-faq-430.png | |

## Fail Handling Rule
- If any fail occurs, stop cohort promotion for that file set.
- Record exact section label and viewport.
- Fix local issue, re-test local, then re-run local vs live compare on the same page/viewport before continuing.

## Signoff Rule Per Cohort
A cohort is eligible for release only when:
- all scoped pages pass content-only checks at all defined viewport widths,
- no new horizontal overflow appears in content area,
- accordion/reveal modules behave without Bootstrap JS dependency,
- before/after references are captured in pass log.
