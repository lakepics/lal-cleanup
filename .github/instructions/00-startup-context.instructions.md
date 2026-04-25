---
description: "Use when: starting work, user says 'Remember what we're doing', or continuity/context reload is needed before coding."
applyTo: "**/*.{php,scss,css,js,json,md}"
---

Startup hard gate:
- Before implementation, read /memories/repo/start-here-index.md.
- Then read, in order:
  1. /memories/repo/design-system-promotion-workflow.md
  2. /memories/repo/site-template-consolidation.md
  3. /memories/repo/flexible-section-css-patterns.md
- Read the most recent file in /memories/session/ if one exists.
- If any required file is missing or unread, stop and state it explicitly.

Continuity trigger:
- If the user says "Remember what we're doing", reload the startup context set before coding.
- After reloading, restate one scoped next action before implementation.

Required synthesis before coding:
1. Big-picture strategy: exactly 5 bullets.
2. Current release objective: 1-2 sentences.
3. Scope boundaries: IN SCOPE / OUT OF SCOPE.
4. Progress state: Done / In progress / Pending.
5. Top 5 next coding tasks ordered by dependency, architectural importance, and risk reduction.
6. Top regression risks with one concrete mitigation step per risk.
7. Single next action including files to touch and expected outcome.

Pre-execution validation:
- Confirm the plan reuses an existing pattern when possible.
- Confirm it aligns with design-system rules.
- Confirm it avoids one-off logic unless explicitly justified.
- If any answer is no, stop, explain why, and propose an aligned alternative.