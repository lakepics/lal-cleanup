---
description: "Use when: planning, promoting, or implementing new components/sections through design-sandbox, design-system, or flexible builder workflows."
applyTo: "**/*.{php,scss,css,js,json,md}"
---

Scope of this instruction:
- Apply this kickoff template for new component work, section promotion work, ACF builder promotion, or any task that changes a component's contract.
- Do not force the full kickoff template for small bugfixes, narrow CSS cleanup, or one-file maintenance unless the task expands into component promotion.

Required kickoff structure for component promotion work:
- Project/Component
- Owner
- Date

1. Define
- Decision to lock
- Success criteria (visual + editor UX)
- In-scope files/components
- Out-of-scope for this pass

2. Design
- Primitive contract to reuse (heading/eyebrow/badge/spacing)
- Allowed variants
- Proposed default variant

3. Experiment
- Seeded matrix plan (same content, variant-only diffs)
- Workspace-local assets selected
- Find text labels to use for review

4. Build
- ACF changes planned
- Component rendering changes planned
- Fallback and safety behavior

5. QA + Promotion Gate
- Visual checks passed
- Accessibility checks passed
- Lint/tests/spot checks passed
- Approved for promotion to design-system? (yes/no)
- Approved for flexible builder? (yes/no)

6. Capture + Improve (Required)
- What changed
- Why
- What is next (top 3 tasks)
- Drift observed and guardrail added
- Process improvement learned

Alignment rules:
- This kickoff must align with /memories/repo/design-system-promotion-workflow.md.
- Reuse existing primitives and documented patterns before proposing new ones.
- If the task does not warrant the full kickoff template, state that explicitly and proceed with the lighter startup synthesis instead.