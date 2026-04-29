# Bootstrap Migration Manifest

Generated: 2026-04-28
Basis: pattern scan of active (non-archived) theme files for legacy Bootstrap class/behavior markers.

## Objective
Ship de-Bootstrap work in safe cohorts without breaking production templates that still depend on legacy grid, panel, dropdown, and collapse behavior.

## Scan Method
- Command used: `rg -n -i "col-(xs|sm|md|lg|xl)-|\bnavbar\b|\bnavbar-|\bdropdown\b|\bdropdown-|\bpanel\b|\bpanel-|\bcollapse\b|data-toggle=|data-target=|glyphicon|btn-default|btn-primary|btn-info|btn-success|btn-warning|btn-danger|btn-link" --glob '*.php' --glob '*.scss' --glob '*.css' --glob '!obsolete/**' --glob '!_checkpoint/**' --glob '!node_modules/**'`
- Active hits: 1257
- Note: compiled and legacy carryover CSS still contains heavy Bootstrap residue; do not remove compatibility layers until dependent templates are remediated.

## Highest-Risk Active Files (By Legacy Hit Density)
- 154 hits: template-faq-individual.php
- 91 hits: template-faq-alt-2.php
- 73 hits: template-policies-alt.php
- 42 hits: template-film-location.php
- 41 hits: assets/styles/layouts/_subpages.scss
- 38 hits: template-sandbox.php
- 31 hits: template-landing-page-video.php
- 30 hits: assets/styles/layouts/_components.scss
- 29 hits: scss/components/_bootstrap-bandaid.scss
- 26 hits: components/components-wireframe-mockup-preview.php
- 20 hits: template-biz-landing-page.php
- 19 hits: template-directions.php
- 19 hits: assets/styles/components/_accordion.scss
- 16 hits: components/components-menu.php
- 15 hits: template-landing-page-2023.php

## Requested Spot-Check (2026-04-28)
- 0 hits: template-landing-page.php
- 33 hits: template-landing-page-2023.php (includes `.navbar-*`, `.col-md-*`/`.col-xs-*`, `.img-responsive`, and `.btn` usage)
- Disposition:
	- `template-landing-page.php` remains low-risk for de-Bootstrap and can stay outside immediate migration cohorts.
	- `template-landing-page-2023.php` stays in Cohort B due to direct grid and utility coupling.

## Execution Update (2026-04-29)
- Cohort A started with FAQ templates:
	- `template-faq-individual.php`
	- `template-faq-alt-2.php`
- Completed in this pass:
	- Added template-local vanilla accordion controller to remove runtime dependence on Bootstrap collapse JS.
	- Removed `data-toggle="collapse"` and `data-parent="#bs-collapse"` attributes from both templates.
	- Verified local behavior on `https://lal.local/faqs-for-individual-travelers/`:
		- open/close works,
		- sibling-open closes prior item,
		- `aria-expanded` toggles correctly.
- Residue still present (explicitly tracked): `.panel*` and `.collapse` classes remain in both templates and in `assets/styles/components/_accordion.scss`; these are next in Cohort A markup/CSS replacement.

## Safe-To-Retire Checkpoint (2026-04-29)
- Legacy FAQ templates are now marked deprecated in-file:
	- `template-faq-individual.php`
	- `template-faq-alt-2.php`
- `template-faq-individual.php` duplicate categories render block removed (single optional block only).
- Active FAQ behavior validated on local builder-served page (`/faqs-for-individual-travelers/`):
	- accordion open/close works,
	- `aria-expanded` toggles correctly,
	- FAQPage JSON-LD is present.
- Builder component feature parity confirmed for migration use:
	- per-group include in category block toggle,
	- per-group summary/description for category list,
	- FAQ schema output.

Retirement status:
- Safe to retire from active page assignment now: `template-faq-individual.php`, `template-faq-alt-2.php`.
- Keep files in repo temporarily as rollback artifacts until Cohort A closeout signoff.

## Rebuild List For Live (No DB Migration Plan)
Local assignment scan result (2026-04-29):
- Pages on builder template (`template-faq-accordion-builder.php`):
	- `Frequently Asked Questions for Leisure Guests` (`faqs-for-individual-travelers`)
	- `Meeting FAQ` (`meeting-faqs`)
- Pages still assigned to legacy FAQ templates locally:
	- none

Implication for live when database is not moved:
- Yes, content/template assignment must be recreated manually on live for any page still using legacy FAQ templates.
- Minimum expected rebuild/verification targets on live:
	- `faqs-for-individual-travelers` (ensure builder layout + FAQ groups match approved local structure)
	- `meeting-faqs` (ensure builder layout + FAQ groups match approved local structure)

Live verification command (run in live environment) to produce final rebuild list:
- `wp post list --post_type=page --fields=ID,post_title,post_name,page_template --format=table | rg "template-faq-individual.php|template-faq-alt-2.php|template-faq-accordion-builder.php|faq"`

If any live page still reports `template-faq-individual.php` or `template-faq-alt-2.php`, add that page to rebuild list and recreate its FAQ groups in the flexible builder.

## Cohort Plan

### Cohort A: Critical Bootstrap Coupling (migrate first)
Target outcome: remove collapse/panel/dropdown dependence from highest-risk templates while preserving current rendering.

Files:
- template-faq-individual.php
- template-faq-alt-2.php
- template-policies-alt.php
- template-film-location.php
- template-landing-page-video.php
- assets/styles/components/_accordion.scss
- assets/styles/layouts/_subpages.scss
- assets/styles/layouts/_components.scss

Gate to pass before merge:
- Parent/child accordion interactions work without Bootstrap JS.
- No layout shift at common breakpoints (375, 430, 768, 1024, 1366).
- No console errors from removed data-toggle/data-target paths.

### Cohort B: Promo/Landing Template Cluster (migrate second)
Target outcome: replace grid utility dependence and legacy button/style classes in campaign templates.

Files:
- template-biz-landing-page.php
- template-directions.php
- template-landing-page-2023.php
- template-newsletter-offer-0823.php
- template-cyber30.php
- template-cyber30-group.php
- template-wescom-credit-union.php
- template-westways.php
- template-veloz-pickleball.php
- template-summer-23-uc-groups.php
- template-summer-23-uc-affiliates.php
- template-summer-23-ucla-affiliates.php
- template-DEV-summer-23-ucla-affiliates.php

Gate to pass before merge:
- Hero and card/grid spacing parity against baseline screenshots.
- No truncated columns at mobile/tablet breakpoints.
- CTA/button variants map to theme utilities, not Bootstrap button classes.

### Cohort C: System and Residual Cleanup (migrate last)
Target outcome: retire compatibility residue after cohort A/B pages are verified.

Files:
- scss/components/_bootstrap-bandaid.scss
- components/components-menu.php
- components/components-wireframe-mockup-preview.php
- template-sandbox.php
- components/main.css
- assets/styles/main.css

Gate to pass before merge:
- No active templates require Bootstrap-only classes/behaviors.
- Compatibility SCSS removal does not alter approved cohort screenshots.
- Legacy selectors in JS/CSS are reduced to zero for production paths.

## Known Residue To Keep Visible
- Bootstrap is still imported in theme styling flows and legacy classes remain across active templates.
- `scss/components/_bootstrap-bandaid.scss` is intentionally present as a temporary compatibility bridge.
- `components/main.css` and `assets/styles/main.css` show substantial historical Bootstrap residue and should be treated as high-risk until cohort migrations are complete.

## Execution Order (Fast + Safe)
1. Complete Cohort A template migrations and verify with layout compare checklist.
2. Complete Cohort B campaign templates and re-run checklist.
3. Remove or shrink Cohort C compatibility layers only after A+B are stable in local/live checks.

## Ownership/Tracking Fields (Fill During Execution)
- Owner:
- Branch:
- Start date:
- Target release window:
- Current cohort:
- Blockers:
- Rollback path verified (yes/no):
