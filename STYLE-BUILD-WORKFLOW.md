# Style Build Workflow

Updated: 2026-04-29

Supported local style rebuild path:

- `npm run build:styles`
- `npm run watch:styles`

Outputs written to the runtime-served files:

- `dist/styles/main.css`
- `dist/styles/custom.css`

Source entrypoints:

- `assets/styles/main.scss`
- `assets/styles/custom.scss`

Notes:

- The active theme enqueues `dist/styles/main.css` and `dist/styles/custom.css` from `lib/setup.php`.
- Do not rely on `assets/styles/main.css` as the served stylesheet.
- `build:legacy` is retained only as a reference to the older Bower/Gulp path; it is not the recommended workflow for this checkout.
- Bootstrap residue still exists in source partials and templates. This workflow only standardizes the current Sass rebuild path; it does not remove legacy Bootstrap dependencies.