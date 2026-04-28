# 19 Change Log

## 2026-04-27
- Bootstrapped design-system document set from approved framework source.
- Added canonical framework files and machine-readable YAML companion.
- Established explicit gap register and placement guidance.
- Added formal component-to-foundation feedback loop: components can request new tokens or token changes, but cannot lock until requests are resolved.
- Added token request workflow requirements and statuses to token registry governance.
- Locked Step 4A button specimen states (primary/secondary/tertiary/gold/ink + size sweep) and synced button contract status to locked (design-system specimen).
- Locked Step 4B navigation specimen states (desktop + mobile matrix), including updated CTA spacing parity, external-link icon treatment, and mobile call CTA transparency treatment; synced navigation contract status to locked (design-system specimen).
- Ran production nav accessibility verification pass: confirmed aria state updates and Escape close behavior; documented unresolved desktop keyboard traversal gap and deferred manual screen-reader/real-device touch checks.
- Completed production nav desktop keyboard traversal: focused parent items now open submenus immediately for keyboard use, `Tab` enters submenu links, and the homepage/nav visibility regression remains resolved.

## Decision Log Template
Date:
Area:
Decision:
Reason:
Affected components:
Implementation implications:
Status: approved | proposed | in progress | deprecated | needs validation
