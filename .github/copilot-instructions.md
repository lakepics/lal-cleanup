# LAL Copilot Prompt Stack

Purpose: keep behavior stable across sessions and reduce drift during long cleanup work.

Instruction layers in priority order:
1. Startup context and continuity: .github/instructions/00-startup-context.instructions.md
2. Core standing orders: .github/instructions/01-core-standing-orders.instructions.md
3. Trigger phrases: .github/instructions/02-trigger-phrases.instructions.md
4. LocalWP tooling and preflight: .github/instructions/03-localwp-tooling.instructions.md
5. Weekly review and handoff rhythm: .github/instructions/04-review-and-handoff.instructions.md
6. Session checkpoint discipline: .github/instructions/05-session-memory.instructions.md

Operating rules:
- Treat these files as the source of truth for process behavior.
- Before major tasks, run the preflight checks from Layer 3.
- If instructions conflict, prefer the lower layer number.
- Conflict resolution priority for working context: latest session memory > workspace instructions/docs > older repo notes.
- Keep edits short and dated; do not add long narrative notes.
