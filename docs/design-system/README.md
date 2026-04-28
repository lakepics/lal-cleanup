# Lake Arrowhead Lodge Design System Docs

This directory is the canonical, repo-versioned source for design-system framework governance.

## Source-of-Truth Files
- `design-system-framework.md`: Full framework spec imported from the approved Google Doc, normalized for this project.
- `design-system-framework.yaml`: Compact machine-readable summary used for tooling, memory, and validation workflows.

## Intended Use
- Treat these files as architecture and decision scaffolding, not as locked final visual outputs.
- Reuse semantic tokens, approved components, and documented patterns before creating new one-off implementations.
- When a requirement is missing or unresolved, document the gap explicitly and map it to the proper layer (Foundations, Elements, Components, Patterns, Templates, or Implementation Rules).

## Current Gap Register
1. Final locked visual token values by channel (light surfaces, dark surfaces, accents) are not fully enumerated in code-facing token files yet.
Recommended home: `src/tokens/*.json` (or `assets/tokens/*.json` if this theme keeps assets-local token storage).
2. Component contract tables (props, states, CMS fields) are framework-level only and need component-by-component definitions.
Recommended home: `docs/design-system/components/*.md` plus corresponding ACF mapping notes.
3. WordPress/ACF field schema mapping is specified conceptually but not yet codified per pattern.
Recommended home: `docs/design-system/wordpress-mapping.md` and per-component implementation notes.

## Drift Guardrail
No new template, component, or style should be added without confirming:
1. Existing token/component/pattern coverage.
2. True system need versus one-off preference.
3. Explicit documentation location for the addition.
