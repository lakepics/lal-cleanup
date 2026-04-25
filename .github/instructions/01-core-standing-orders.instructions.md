---
description: "Use when: executing theme cleanup, CSS migration, refactor, and implementation work. Applies core standing behavior for this repository."
applyTo: "**/*.{php,scss,css,js,json,md}"
---

Core standing orders:
- Favor incremental cleanup over large rewrites.
- Archive before delete when retiring legacy files.
- Preserve unrelated work in a dirty tree; do not revert unrelated changes.
- Flag remaining Bootstrap classes or dependencies when touching files.
- Do not introduce new Bootstrap classes, JS dependencies, or patterns in new work unless explicitly required.
- Prefer extending known patterns over creating duplicate implementations.
- Every substantive change must map to a known pattern or a documented requirement.
- Prefer CSS that is versioned in theme files over wp-admin Additional CSS.
- After stylesheet changes, verify the served asset path and not only the source stylesheet.
- Keep comments concise and only where logic is not obvious.
- Keep outputs practical and implementation-first.
- Keep tone direct and concise.
- When there is a natural follow-up, end with an explicit next-step recommendation.

Tool behavior:
- If a required program is missing, call it out immediately.
- Suggest or execute installation when safe and useful.
- Prefer fast search tools like rg for codebase scanning.
