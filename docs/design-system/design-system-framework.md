Lake Arrowhead Lodge Design System Framework
Purpose
This framework defines the core structure of the Lake Arrowhead Lodge design system so brand, UI, and website implementation stay aligned over time.
It should help guide:
* visual design decisions
* Figma system organization
* front-end implementation
* content presentation patterns
* future refactors and QA
* GitHub Copilot code suggestions
This is a system framework, not a final visual spec. It defines what the design system must contain, how it should be organized, and how decisions should be documented to minimize drift.
________________


1. System Principles
1.1 Role of the system
The design system should:
* translate brand strategy into reusable interface rules
* support both editorial storytelling and practical hospitality UX
* balance warmth, refinement, clarity, and restraint
* work across marketing pages, booking-adjacent flows, and evergreen content
* remain flexible enough for WordPress implementation realities
1.2 Core objectives
The system must prioritize:
* consistency across brand, web, and future collateral
* scalability for new templates and modules
* clarity in content hierarchy
* accessibility
* maintainability
* property-specific character, avoiding generic resort styling
1.3 Design qualities to preserve
Target qualities:
* premium but not flashy
* grounded and natural
* quiet confidence
* editorial but usable
* text-forward where needed
* image-supportive without overdependence
* regionally and materially rooted
________________


2. Source of Truth Model
2.1 System layers
The design system should be organized in layers:
1. Foundations
   * tokens, variables, base rules
2. Elements
   * typography, color, spacing, icons, buttons, forms
3. Components
   * cards, banners, nav items, accordions, galleries
4. Patterns
   * heroes, promo bands, room lists, content sections, amenity blocks
5. Templates
   * page-level layouts assembled from patterns
6. Implementation rules
   * CSS architecture, naming, states, responsive behavior
2.2 Rule precedence
When conflicts appear, use this priority order:
1. latest approved brand positioning
2. verified property facts
3. approved design system tokens and component rules
4. current website implementation
5. legacy design or copy
2.3 Status labels
Every major system item should carry one of these labels:
* approved
* proposed
* in progress
* deprecated
* needs validation
This helps Copilot and human collaborators avoid treating rough ideas as final.
________________


3. Foundations
3.1 Design tokens
All foundational decisions should eventually exist as tokens or variables.
Minimum token categories:
* color
* typography
* spacing
* sizing
* radii
* borders
* shadows
* opacity
* z-index
* motion
* grid
* breakpoints
Recommended token levels:
* primitive tokens
 raw values such as hex, rem, px, rgba
* semantic tokens
 meaningful assignments such as:
   * color-bg-page
   * color-text-primary
   * color-border-muted
   * space-section-lg
   * shadow-card-default
This separation helps preserve flexibility during redesigns.
________________


4. Typography System
4.1 Goals
Typography should do most of the brand work. It must support:
   * editorial storytelling
   * hospitality reassurance
   * scannable utility content
   * strong readability on desktop and mobile
4.2 Type categories
Define styles for these categories:
   * display
   * heading
   * subheading
   * body
   * small body
   * caption
   * eyebrow / label
   * button text
   * form text
   * quote / pull quote
   * metadata
4.3 Type style inventory
At minimum, the system should define:
   * Display 1
   * Display 2
   * H1
   * H2
   * H3
   * H4
   * Intro / lead paragraph
   * Body Large
   * Body Default
   * Body Small
   * Caption
   * Label / Eyebrow
   * Button
   * Quote
   * Fine Print
Each should document:
   * font family
   * font size
   * line height
   * font weight
   * letter spacing
   * text transform
   * intended use
   * responsive behavior
4.4 Typography rules
Document rules for:
   * maximum line length
   * paragraph spacing
   * heading spacing
   * text alignment
   * balance of serif vs sans usage
   * sentence case vs uppercase
   * link styling inside body copy
   * emphasis styling
   * list styling
   * blockquote styling
4.5 Copy hierarchy guidance
Include practical usage guidance such as:
   * heroes should usually use one display or H1 level, not multiple competing headlines
   * cards should not mix too many type scales
   * body copy should favor readability over decorative styling
   * utility interfaces should lean more functional than editorial
________________


5. Color System
5.1 Color roles
Color should be defined by role, not only by swatch.
Minimum semantic roles:
   * page background
   * section background
   * elevated surface
   * card background
   * text primary
   * text secondary
   * text inverse
   * border subtle
   * border strong
   * accent primary
   * accent secondary
   * link
   * link hover
   * CTA primary
   * CTA secondary
   * focus ring
   * success
   * warning
   * error
   * disabled
5.2 Color families
Expected families:
   * core neutrals
   * warm supporting neutrals
   * primary brand accent
   * secondary brand accent
   * seasonal or decorative support colors if needed
   * utility / feedback colors
5.3 Color documentation
For each color token, define:
   * token name
   * hex / rgba / hsl
   * semantic purpose
   * approved pairings
   * prohibited uses
   * contrast notes
5.4 Accessibility expectations
Document:
   * acceptable text/background combinations
   * inverse usage
   * hover and active contrast rules
   * limitations for tinted overlays on photography
________________


6. Gradients and Atmospheric Treatments
6.1 Role of gradients
Gradients should be treated as supporting atmosphere, not default decoration.
Use cases may include:
   * hero overlays
   * subtle section transitions
   * premium CTA emphasis
   * image legibility enhancement
   * depth on dark surfaces
6.2 Gradient categories
Define if used:
   * overlay gradients
   * background wash gradients
   * accent gradients
   * interactive gradients
6.3 Rules
Document:
   * where gradients are allowed
   * where they are not allowed
   * opacity range
   * color stop logic
   * interaction with photography
   * interaction with text contrast
   * performance considerations
________________


7. Layout and Grid System
7.1 Grid goals
The grid should support:
   * elegant editorial pacing
   * image/text combinations
   * modular WordPress block assembly
   * predictable implementation
7.2 Grid definitions
Define:
   * page container widths
   * content max widths
   * reading width
   * full-bleed behavior
   * standard column grid
   * gutter sizes
   * section padding
   * vertical rhythm
7.3 Layout modes
System should support multiple layout modes:
   * narrow reading column
   * standard content width
   * split layout
   * multi-column editorial layout
   * full-bleed media
   * inset media
   * card grid
   * feature band
   * asymmetrical storytelling layout if approved
7.4 Breakpoints
Define clear breakpoints for:
   * mobile
   * mobile large
   * tablet
   * laptop
   * desktop
   * wide desktop
For each breakpoint, specify:
   * container width
   * horizontal padding
   * grid columns
   * spacing shifts
   * type scaling behavior
________________


8. Spacing and Sizing
8.1 Spacing scale
Use a consistent spacing system rather than ad hoc values.
Document:
   * micro spacing
   * inline spacing
   * component padding
   * card padding
   * section spacing
   * page spacing
8.2 Usage categories
Define spacing rules for:
   * text stack spacing
   * form spacing
   * CTA group spacing
   * media-to-text spacing
   * section-to-section transitions
   * dense vs relaxed layouts
8.3 Sizing tokens
Include tokens for:
   * icon sizes
   * button heights
   * input heights
   * card minimum heights where needed
   * media aspect ratios
   * avatar or badge sizes if needed
________________


9. Shape, Borders, Radii, Shadows
9.1 Shape language
Document the system’s shape characteristics:
   * square vs softened
   * restrained vs rounded
   * formal vs organic
9.2 Border system
Define:
   * border widths
   * border colors
   * divider rules
   * subtle vs strong separators
9.3 Radius system
Document radius options and their intended use:
   * none
   * small
   * medium
   * large
   * pill / full
9.4 Shadow system
Document shadow roles:
   * none
   * subtle elevation
   * standard card
   * prominent overlay
   * modal / floating layer
Rules should note when shadows are appropriate and when flat design is preferred.
________________


10. Imagery System
10.1 Imagery roles
Image usage should be categorized by purpose:
   * brand atmosphere
   * property overview
   * room/product detail
   * amenity storytelling
   * seasonal context
   * utility/informational image
   * illustration / decorative art
10.2 Image behavior
Document:
   * aspect ratios
   * cropping principles
   * focal point priorities
   * overlay rules
   * caption rules
   * corner treatment
   * image stacking rules
   * image + text composition rules
10.3 Photography guidance
Define how imagery should feel:
   * natural light vs stylized
   * editorial vs commercial
   * wide environmental vs detail
   * warm vs cool grading
   * human presence vs empty spaces
   * density of image usage per page
________________


11. Iconography and Decorative Graphics
11.1 Icon system
Define:
   * icon style
   * stroke weight
   * corner treatment
   * detail level
   * allowed sizes
   * alignment behavior
   * icon with text rules
11.2 Icon categories
Potential categories:
   * navigation
   * amenities
   * property features
   * utility
   * status
   * social
11.3 Decorative graphics
If the project includes botanical, wildlife, mountain, or heritage-inspired illustration, document:
   * approved style family
   * monochrome or tint behavior
   * acceptable placements
   * scale rules
   * layering rules
   * when not to use decorative elements
________________


12. Motion and Interaction
12.1 Motion principles
Motion should feel:
   * subtle
   * calm
   * purposeful
   * never flashy
   * supportive of hierarchy and comprehension
12.2 Motion categories
Document:
   * hover transitions
   * focus states
   * reveal animations
   * accordion motion
   * modal transitions
   * navigation transitions
   * loading states
12.3 Motion tokens
Define:
   * durations
   * easing curves
   * transform distances
   * opacity transitions
   * reduced-motion behavior
________________


13. Utilities
Utilities should exist for fast, safe composition and implementation.
13.1 Utility categories
Recommended utility groups:
   * spacing
   * layout
   * display
   * alignment
   * typography
   * color
   * background
   * border
   * radius
   * shadow
   * visibility
   * responsive helpers
13.2 Utility philosophy
Utilities should:
   * reflect approved token values
   * avoid one-off magic numbers
   * support composition without bypassing component standards
   * remain readable in implementation
13.3 Anti-drift rule
If a utility becomes overly specific to one module, it should probably become a component rule instead.
________________


14. Core Elements
These are the primary reusable UI elements that should be fully specified before deeper page work continues.
14.1 Buttons
Variants:
   * primary
   * secondary
   * tertiary
   * text link
   * icon button if needed
Document for each:
   * background
   * text color
   * border
   * hover
   * active
   * focus
   * disabled
   * inverse version
   * size variants
   * icon placement rules
14.2 Links
Define:
   * inline link
   * standalone text link
   * CTA link
   * external link handling
   * visited behavior if applicable
   * hover underline treatment
14.3 Form controls
Document:
   * text input
   * textarea
   * select
   * checkbox
   * radio
   * toggle if needed
   * validation states
   * help text
   * error text
   * labels
   * placeholders
14.4 Tags, badges, labels
Potential usage:
   * seasonal notes
   * room attributes
   * amenity tags
   * availability or editorial categorization
14.5 Dividers and rules
Define style options for:
   * section dividers
   * card dividers
   * editorial separators
   * subtle content grouping
________________


15. Core Components
15.1 Cards
Define a card family rather than a single card.
Possible card types:
   * editorial card
   * room card
   * offer card
   * amenity card
   * article/news card
   * image card
   * quote/testimonial card
For each card type, define:
   * structure
   * spacing
   * image ratio
   * metadata placement
   * CTA style
   * hover behavior
   * responsive stacking behavior
15.2 Banners
Possible banner types:
   * promotional banner
   * informational banner
   * seasonal banner
   * announcement strip
Define:
   * density
   * allowed content length
   * dismissal behavior if any
   * CTA treatment
15.3 Hero modules
Potential hero variants:
   * image hero
   * split hero
   * editorial hero
   * interior page hero
   * campaign hero
   * utility hero
For each hero, define:
   * headline region
   * eyebrow usage
   * body copy length
   * CTA count limit
   * media behavior
   * overlay rules
   * mobile collapse pattern
15.4 Navigation components
Define:
   * header
   * primary nav
   * mobile nav
   * footer nav
   * breadcrumb
   * section nav if needed
Include states and responsive behavior.
15.5 Content modules
Define common reusable content blocks such as:
   * text block
   * media + text
   * gallery
   * quote block
   * icon list
   * feature list
   * amenity grid
   * FAQ / accordion
   * CTA band
   * testimonial block
   * stats / facts block
   * map or location block
   * related content block
________________


16. Pattern Library
Patterns are larger assemblies built from components.
16.1 Page-building patterns
Document patterns such as:
   * homepage storytelling flow
   * accommodations listing section
   * room detail intro
   * amenities overview
   * dining or experience feature section
   * event/wedding promotional section
   * about/history storytelling section
   * contact or inquiry section
   * FAQ section
   * seasonal campaign landing section
16.2 Pattern requirements
Each pattern should include:
   * purpose
   * recommended content inputs
   * required fields
   * optional fields
   * mobile behavior
   * accessibility considerations
   * CMS implications
   * example combinations
   * anti-patterns
________________


17. Template System
Templates should be assembled from approved patterns, not invented from scratch every time.
17.1 Template categories
Examples:
   * homepage
   * standard interior page
   * landing page
   * room listing page
   * room detail page
   * offer page
   * dining/amenity page
   * event page
   * story/editorial page
   * contact page
17.2 Template documentation
Each template should define:
   * purpose
   * target content hierarchy
   * recommended pattern order
   * optional modules
   * prohibited combinations
   * SEO/content notes
   * editorial guidance
   * responsive notes
________________


18. Accessibility Framework
Accessibility should be embedded in the system, not added later.
18.1 Required considerations
Document standards for:
   * color contrast
   * focus visibility
   * keyboard navigation
   * semantic structure
   * heading order
   * form labeling
   * error messaging
   * touch target sizing
   * reduced motion
   * alt text expectations
   * link clarity
18.2 Component accessibility notes
Each core component should include a short accessibility section.
________________


19. Content Design Rules
Because this project is hospitality and editorial, content presentation needs system-level guidance.
19.1 Content tone support
The system should support copy that is:
   * specific
   * grounded
   * non-generic
   * calm
   * refined
   * sensory where useful
   * concise when functional
19.2 Interface copy rules
Document guidance for:
   * CTA labels
   * headings
   * room names
   * descriptive blurbs
   * metadata labels
   * form instructions
   * empty states
   * error states
19.3 Content length guidance
For major patterns, define preferred lengths for:
   * hero headlines
   * hero body copy
   * card titles
   * card summaries
   * CTA groups
   * promo copy
   * FAQ answers
This helps both CMS entry and design consistency.
________________


20. CMS and WordPress Mapping
The design system should anticipate implementation.
20.1 Component-to-CMS mapping
For each component or pattern, define:
   * editable fields
   * required fields
   * optional fields
   * repeaters if applicable
   * image requirements
   * fallback behavior
   * content constraints
20.2 Guardrails
Document guardrails such as:
   * maximum CTA count
   * maximum copy length
   * minimum image size
   * required alt text
   * allowed background options
   * prohibited field combinations
This is especially useful for ACF planning and theme cleanup.
________________


21. Naming Conventions
Use consistent names across Figma, docs, CSS, and CMS.
21.1 Naming structure
Recommended naming layers:
   * foundation/*
   * element/*
   * component/*
   * pattern/*
   * template/*
Examples:
   * foundation/color/text-primary
   * element/button/primary
   * component/card/room
   * pattern/hero/split
   * template/page/room-detail
21.2 Naming rules
Names should be:
   * descriptive
   * stable
   * role-based, not appearance-only
   * reusable beyond one page
Avoid vague names like:
   * fancy card
   * dark banner
   * homepage hero alt 2
Prefer names like:
   * component/card/editorial
   * pattern/banner/promo
   * pattern/hero/interior-standard
________________


22. Documentation Format for Repo
To reduce drift, store the system in discrete files.
22.1 Recommended file structure
/docs
  /design-system
    00-overview.md
    01-principles.md
    02-foundations.md
    03-typography.md
    04-color.md
    05-layout-grid.md
    06-spacing-sizing.md
    07-shape-elevation.md
    08-imagery.md
    09-iconography.md
    10-motion.md
    11-utilities.md
    12-elements.md
    13-components.md
    14-patterns.md
    15-templates.md
    16-accessibility.md
    17-content-guidelines.md
    18-wordpress-mapping.md
    19-change-log.md


22.2 Front-end token structure
/src
  /tokens
    color.json
    typography.json
    spacing.json
    sizing.json
    radius.json
    shadow.json
    motion.json
    grid.json


22.3 Component reference structure
/src
  /components
    /button
    /card
    /hero
    /banner
    /form
    /nav




23. Suggested Component Inventory
Below is a practical initial inventory for the project.
23.1 Priority 1 foundations
   * typography scale
   * color tokens
   * spacing scale
   * grid and container rules
   * buttons
   * links
   * form controls
   * basic cards
   * hero system
   * section spacing rules
23.2 Priority 2 shared components
   * promo banner
   * CTA band
   * image/text block
   * accordion
   * quote block
   * amenity list
   * footer system
   * navigation system
   * gallery behavior
23.3 Priority 3 extended patterns
   * room comparison/listing pattern
   * offer/promo landing modules
   * local area/storytelling modules
   * event/wedding pattern set
   * seasonal content variants
________________


24. Decision Log Requirements
To minimize drift, document every nontrivial system decision.
Each entry should include:
   * date
   * system area
   * decision
   * reason
   * affected components
   * implementation implications
   * status
Example:
Date: 2026-04-27
Area: Buttons
Decision: Primary CTA uses solid fill only on high-priority actions; lower-priority CTAs shift to outlined or text treatments.
Reason: Too many visually competing actions diluted page hierarchy.
Affected components: button/primary, hero, card, promo-banner
Status: approved


25. Copilot Instructions Block
Use the following as a reusable instruction block inside project docs or prompt files.
You are working on the Lake Arrowhead Lodge website and design system design system.


Follow these rules:
1. Treat design tokens and semantic system names as source of truth.
2. Reuse existing components and patterns before inventing new ones.
3. Prefer semantic naming over visual-only naming.
4. Preserve alignment between brand tone, UI behavior, and CMS structure.
5. Avoid generic hospitality UI language and styling.
6. Do not create one-off variants unless clearly documented as approved.
7. When proposing a new component, explain:
   - why an existing component cannot handle the need
   - what new fields or states are required
   - how it affects templates and CMS structure
8. When editing templates, use approved pattern names and token references.
9. Flag anything that appears deprecated, duplicated, or inconsistent.
10. Keep accessibility, responsive behavior, and content constraints explicit.


26. Recommended Next Deliverables
Convert this framework into the following concrete docs next:
   1. Design tokens spec
   2. Typography spec
   3. Color application spec
   4. Core components inventory
   5. Pattern library outline
   6. WordPress/ACF mapping plan
________________


27. Compact YAML Version for Project Memory
This is useful if you want a machine-readable summary in a repo file like design-system.framework.yaml.
design_system:
  project: Lake Arrowhead Lodge
  purpose:
    - align brand, UI, and web implementation
    - reduce drift across design, content, and development
    - create reusable foundations, components, and patterns
  layers:
    - foundations
    - elements
    - components
    - patterns
    - templates
    - implementation_rules
  foundations:
    - design_tokens
    - typography
    - color
    - gradients
    - grid
    - spacing
    - sizing
    - radii
    - borders
    - shadows
    - motion
    - breakpoints
  elements:
    - buttons
    - links
    - form_controls
    - tags
    - badges
    - dividers
    - icons
  components:
    - cards
    - banners
    - heroes
    - navigation
    - gallery
    - accordion
    - quote_block
    - media_text
    - feature_list
    - cta_band
    - footer
  patterns:
    - homepage_storytelling
    - accommodations_listing
    - room_detail_intro
    - amenities_overview
    - dining_or_experience_feature
    - event_promo
    - about_story_section
    - contact_inquiry
    - faq
    - seasonal_landing
  templates:
    - homepage
    - standard_interior
    - landing_page
    - room_listing
    - room_detail
    - offer_page
    - amenity_page
    - event_page
    - editorial_page
    - contact_page
  requirements:
    - accessibility
    - responsive_behavior
    - cms_mapping
    - content_constraints
    - semantic_naming
    - decision_logging


28. Best Practice for Long-Term Drift Control
Use this rule:
No new template, component, or style should be added without answering three questions:
   1. Is this already covered by an existing token, component, or pattern?
   2. If not, is this a true new system need or a one-off page preference?
   3. If it is new, where is it documented so design, code, and CMS remain aligned?