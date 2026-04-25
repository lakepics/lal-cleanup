---
description: "Use when: WordPress commands, DB access, Customizer changes, or Local WP Engine environment tasks are involved."
applyTo: "**/*.{php,scss,css,js,md}"
---

LocalWP preflight:
- Verify tools needed for the task are available: git, rg, node, npm, sass, wp or local wp-cli wrapper.
- If wp fails with DB connection, switch to Local wrapper pattern using socket flags.
- Prefer direct frontend verification after CSS or Customizer-related changes.

Known Local wrapper pattern for this site:
- Use Local wp-cli phar at /Applications/Local.app/Contents/Resources/extraResources/bin/wp-cli/wp-cli.phar
- Include mysqli and pdo_mysql socket flags when required.
- Use --path for /Users/lkepics/Local Sites/lal/app/public and --url for https://lal.local

Example command template:
php -d error_reporting='E_ALL & ~E_DEPRECATED' -d display_errors=0 -d mysqli.default_socket='LOCAL_SOCKET' -d pdo_mysql.default_socket='LOCAL_SOCKET' '/Applications/Local.app/Contents/Resources/extraResources/bin/wp-cli/wp-cli.phar' --path='/Users/lkepics/Local Sites/lal/app/public' --url='https://lal.local' <wp command>

Notes:
- Socket identifiers under ~/Library/Application Support/Local/run may rotate; verify before use.
- If DB commands fail in shell, complete urgent actions via wp-admin UI and then backfill CLI setup.
