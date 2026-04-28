# 13 Components

Status: in progress
Source sections: 15

Core component families:
- cards
- banners
- hero modules
- navigation components
- content modules

Each component needs:
- contract (inputs, states, outputs)
- allowed variants and defaults
- token dependencies
- responsive behavior
- accessibility notes
- CMS mapping

## Component-to-Foundation Feedback Requirement
When component implementation exposes a missing or weak token, the component must open a token request upstream before lock.

Required behavior:
- Do not introduce ad hoc values to bypass missing tokens.
- Mark the component as "in progress" until token request is resolved.
- Link the request in component contract docs and 19-change-log.md.
- Re-validate specimens after token approval and runtime propagation.

Promotion rule:
- Components can only promote to locked/approved when all token dependencies are satisfied by approved tokens.
