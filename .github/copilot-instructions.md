# LAL Copilot Prompt Stack

Purpose: keep behavior stable across sessions and reduce drift during long cleanup work.

Instruction layers in priority order:
1. Core standing orders: .github/instructions/01-core-standing-orders.instructions.md
2. Trigger phrases: .github/instructions/02-trigger-phrases.instructions.md
3. LocalWP tooling and preflight: .github/instructions/03-localwp-tooling.instructions.md
4. Weekly review and handoff rhythm: .github/instructions/04-review-and-handoff.instructions.md

Operating rules:
- Treat these files as the source of truth for process behavior.
- Before major tasks, run the preflight checks from Layer 3.
- If instructions conflict, prefer the lower layer number.
- Keep edits short and dated; do not add long narrative notes.
