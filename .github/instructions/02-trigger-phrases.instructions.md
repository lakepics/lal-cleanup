---
description: "Use when: user uses known trigger phrases or asks for remembered workflow shortcuts."
applyTo: "**/*.{php,scss,css,js,json,md}"
---

Trigger phrase rules:
- Phrase: push it, push it real good
- Action: run scoped publish flow for current changes.

Scoped publish flow:
1. Review status and changed files.
2. Summarize what will be included.
3. Commit with a clear message.
4. Push to the active remote branch.

Safety constraints:
- Do not revert unrelated changes.
- Do not amend commits unless explicitly requested.
- Call out blockers before pushing.
