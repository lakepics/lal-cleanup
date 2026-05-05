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

## LocalWP CLI Troubleshooting (DB + ACF)

When plain `wp` fails with `Error establishing a database connection` in this Local environment, use the repo wrapper:

- `bash scripts/wp-local.sh <wp command>`
- `npm run wp:local -- <wp command>`

Why this wrapper is required:

- Auto-detects the active Local MySQL socket.
- Sets PHP MySQL socket flags for WP-CLI phar execution.
- Adds Local's MySQL client binary to `PATH`.
- Exports `MYSQL_UNIX_PORT` and passes `--socket` for `wp db query` calls to avoid fallback to `/tmp/mysql.sock`.

Quick checks:

- `bash scripts/wp-local.sh core version`
- `bash scripts/wp-local.sh option get acf_version`
- `bash scripts/wp-local.sh db query "SELECT 'db-ok' AS status;" --skip-column-names`

ACF sync command notes:

- Use `acf json sync` (not `acf sync`).
- Preview first: `bash scripts/wp-local.sh acf json sync --dry-run`
- Apply: `bash scripts/wp-local.sh acf json sync`

If `--dry-run` reports `Everything is already in sync.`, the latest JSON is already reflected in the database.