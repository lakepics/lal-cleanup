# Deployment Manifest - 2026-05-08

Generated: 2026-05-08
Method: Git diff against origin/main plus current local build verification.
Branch: main
Ahead of origin/main: 11 commits

## Commits queued to push
- 336f04c Room capacities: stacked button spacing + TablePress header contrast
- dcba52f Migrate .master-blue-button to SCSS - restores /meetings button CSS
- 4477e49 Image scroller: add static strip toggle (no-scroll mode)
- d0c6744 fix: navbar taller on non-Bootstrap templates due to box-sizing mismatch
- 7ac88ef fix: remove nav override that was killing dropdown link colors
- 382b069 feat: set inline text link color to design system Accessible Blue (#3F5F85)
- 06b1a73 fix: align blue header text on non-Bootstrap templates
- a1b1612 fix: gold button CSS + Blue Header H1 support on flexible-sections template
- a24e0a4 fix(qa): fix history floats, planner toolkit cards, meet-team PHP warnings
- 494904f fix(cmp): restore Bootstrap on CMP page + add standalone gen-btn styles
- d5a288d Gallery: filter pills, isotope sizer, fancybox control bar layout - bar positioning WIP (deferred)

## Files changed in queued commit range (origin/main..HEAD)
- acf-json/group_theme_section_builder.json
- assets/styles/layouts/_custom.scss
- assets/styles/layouts/_fancybox.scss
- assets/styles/layouts/_nav.scss
- assets/styles/layouts/_subpages.scss
- components/component-gallery.php
- components/components-section-image-scroller.php
- functions.php
- template-flexible-sections.php
- template-gallery.php
- template-meet-team.php

## Manual deploy artifacts (not tracked in git)
- dist/styles/main.css
- dist/styles/custom.css

Build verification:
- npm run build:styles completed successfully on 2026-05-08
- dist/styles/main.css and dist/styles/custom.css were freshly regenerated

## Explicit non-scope confirmation (to stop drift)
The following files are not in the queued push range and are already contained by origin/main:
- templates/head.php
- templates/header.php
- templates/footer.php
- template-landing-page-home.php

## Notes
- This manifest supersedes older mtime-based manifests from 2026-04-19 and 2026-04-20 for current push planning.
- For production deploy, include both source changes above and the rebuilt dist CSS artifacts.
- If validating against a production-like local baseline, compare rendered pages against lal-dev-2.local before final push.