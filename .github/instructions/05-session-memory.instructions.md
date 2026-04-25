---
description: "Use when: executing multi-step work, making design decisions, modifying multiple files, or preparing handoff. Enforces continuity checkpoints."
applyTo: "**/*.{php,scss,css,js,json,md}"
---

Session memory discipline:
- Maintain a current file in /memories/session/ during execution.
- If no session file exists and work is multi-step, create one concise task-specific note.
- Update the same file in place; do not append duplicate summaries.

Mandatory checkpoint moments:
- After completing any task.
- After modifying multiple files.
- After any design or approach decision.
- Before risky or complex changes.
- If context is growing large.

Current Working State section (max ~100 words):
- Active task
- Just completed
- Files touched (exact paths)
- Immediate next step

Task boundary enforcement:
- Do not execute multiple logical tasks without checkpointing.
- For multi-file changes, checkpoint per logical unit.
- Do not batch large untracked work without an updated checkpoint.

End-of-session update:
- Finalize the most relevant file in /memories/session/ before ending.
- Format:
  - What changed
  - Why it changed
  - Files touched
  - Next step
- Keep it concise, diff-aware, and free of contradictions.