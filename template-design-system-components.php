<?php
/**
 * Template Name: Design System Components
 * Description: Specimen lanes for button and navigation component contracts. Visual QA before promotion.
 * Status: in-progress (2026-04-27)
 */

get_header(); ?>

<main id="main" class="site-main">

<style>
.ds-component-lane {
    max-width: 1200px;
    margin: 0 auto 60px;
    padding: 0 20px;
}

.ds-component-lane__title {
    margin: 40px 0 20px;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 32px;
    font-weight: 400;
    letter-spacing: .015em;
    line-height: 1;
    color: #51534a;
}

.ds-component-lane__description {
    margin: 0 0 30px;
    font-size: 16px;
    line-height: 1.6;
    color: #51534a;
}

.ds-component-variants {
    display: grid;
    gap: 30px;
}

.ds-component-variant {
    padding: 40px;
    border: 1px solid rgba(81,83,74,0.14);
    background: #ffffff;
    box-shadow: 0 4px 12px rgba(31,34,29,0.05);
}

.ds-component-variant__label {
    display: inline-block;
    margin-bottom: 15px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
    color: var(--lacc-color-brand-blue);
}

.ds-component-variant__title {
    margin: 0 0 8px;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.1;
    color: #51534a;
}

.ds-component-variant__demo {
    margin: 20px 0;
    padding: 30px;
    background: var(--lacc-color-bg-soft);
    border-radius: 4px;
    min-height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.ds-component-variant__note {
    margin-top: 15px;
    font-size: 13px;
    line-height: 1.5;
    color: rgba(81,83,74,0.72);
}

/* Button Specimens */
.ds-button-demo {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.85em 1.45em;
    border: 1px solid transparent;
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: .08em;
    line-height: 1.2;
    text-decoration: none;
    text-transform: uppercase;
    transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease;
    cursor: pointer;
}

.ds-button-demo:hover,
.ds-button-demo:focus {
    transform: translateY(-1px);
}

.ds-button-demo--primary {
    background: var(--lacc-color-action-primary);
    border-color: var(--lacc-color-action-primary);
}

.ds-button-demo--primary:hover,
.ds-button-demo--primary:focus {
    background: var(--lacc-color-action-primary-hover);
    border-color: var(--lacc-color-action-primary-hover);
}

.ds-button-demo--secondary {
    background: transparent;
    border: 1px solid var(--lacc-color-action-primary);
    color: var(--lacc-color-action-primary);
}

.ds-button-demo--secondary:hover,
.ds-button-demo--secondary:focus {
    background: var(--lacc-color-bg-soft);
    border-color: var(--lacc-color-action-primary);
}

.ds-button-demo--tertiary {
    background: transparent;
    border: none;
    color: var(--lacc-color-action-primary);
    text-decoration: underline;
}

.ds-button-demo--tertiary:hover,
.ds-button-demo--tertiary:focus {
    color: var(--lacc-color-action-primary-hover);
}

/* Navigation Desktop Demo */
.ds-nav-demo {
    background: linear-gradient(180deg, var(--lacc-color-brand-blue), var(--lacc-color-brand-blue-deep));
    color: var(--lacc-color-text-inverse);
    padding: 20px 30px;
    border-radius: 4px;
}

.ds-nav-demo__menu {
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.ds-nav-demo__item {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .11em;
    text-transform: uppercase;
}

.ds-nav-demo__item > a {
    color: var(--lacc-color-text-inverse);
    text-decoration: none;
    padding: 8px 12px;
    display: inline-block;
    border-radius: 3px;
    transition: background-color 0.2s ease;
}

.ds-nav-demo__item > a:hover {
    background: rgba(255,255,255,0.14);
}

.ds-nav-demo__submenu {
    background: var(--lacc-color-bg-soft);
    color: var(--lacc-color-text-brand);
    padding: 15px;
    margin-top: 10px;
    border-radius: 3px;
    font-size: 13px;
    line-height: 1.6;
}

/* Navigation Mobile Demo */
.ds-nav-mobile-demo {
    background: linear-gradient(180deg, rgba(18,29,43,0.9), rgba(18,29,43,0.72));
    color: var(--lacc-color-text-inverse);
    padding: 20px;
    border-radius: 4px;
    max-width: 320px;
}

.ds-nav-mobile-demo__menu {
    margin: 0;
    padding: 0;
    list-style: none;
}

.ds-nav-mobile-demo__item {
    font-size: 22px;
    font-weight: 600;
    letter-spacing: .03em;
    padding: 15px 0;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.ds-nav-mobile-demo__item > a {
    color: var(--lacc-color-text-inverse);
    text-decoration: none;
}

.ds-nav-mobile-demo__call {
    display: block;
    margin-top: 20px;
    padding: 12px 16px;
    background: linear-gradient(180deg, var(--lacc-color-brand-blue), var(--lacc-color-brand-blue-deep));
    color: var(--lacc-color-text-inverse);
    text-align: center;
    font-weight: 700;
    letter-spacing: .1em;
    border-radius: 3px;
    text-decoration: none;
    font-size: 14px;
}
</style>

<div class="ds-component-lane">
    <h1 class="ds-component-lane__title">Design System Component Contracts</h1>
    <p class="ds-component-lane__description">
        Visual specimens for button and navigation component variants. Status: in-progress (2026-04-27). 
        These are specimens only—not yet ACF-integrated. See docs/design-system/components/ for full contracts.
    </p>
</div>

<!-- Button Component Lane -->
<div class="ds-component-lane">
    <h2 class="ds-component-lane__title">Button Component</h2>
    <p class="ds-component-lane__description">
        Status: in-progress. Variants: Primary, Secondary (Outlined), Tertiary (Text).
        Token dependencies: color-action-primary, color-action-primary-hover, color-action-on-primary, color-bg-soft.
        See docs/design-system/components/button.md for full contract.
    </p>
    
    <div class="ds-component-variants">
        <div class="ds-component-variant">
            <span class="ds-component-variant__label">Variant: Primary</span>
            <h3 class="ds-component-variant__title">Primary CTA Button</h3>
            <div class="ds-component-variant__demo">
                <button class="ds-button-demo ds-button-demo--primary">Book Now</button>
            </div>
            <p class="ds-component-variant__note">
                Background: var(--lacc-color-action-primary) #3f5f85<br/>
                Hover: var(--lacc-color-action-primary-hover) #324c6a<br/>
                Use: Main CTAs, hero actions, form submit
            </p>
        </div>

        <div class="ds-component-variant">
            <span class="ds-component-variant__label">Variant: Secondary</span>
            <h3 class="ds-component-variant__title">Secondary (Outlined) Button</h3>
            <div class="ds-component-variant__demo">
                <button class="ds-button-demo ds-button-demo--secondary">Learn More</button>
            </div>
            <p class="ds-component-variant__note">
                Border: var(--lacc-color-action-primary) #3f5f85<br/>
                Hover background: var(--lacc-color-bg-soft) #f6f3ed<br/>
                Use: Alternate actions, less critical flows
            </p>
        </div>

        <div class="ds-component-variant">
            <span class="ds-component-variant__label">Variant: Tertiary</span>
            <h3 class="ds-component-variant__title">Tertiary (Text) Button</h3>
            <div class="ds-component-variant__demo">
                <button class="ds-button-demo ds-button-demo--tertiary">Read Article</button>
            </div>
            <p class="ds-component-variant__note">
                Color: var(--lacc-color-action-primary) #3f5f85<br/>
                Hover color: var(--lacc-color-action-primary-hover) #324c6a<br/>
                Use: Secondary links, breadcrumbs, inline navigation
            </p>
        </div>
    </div>
</div>

<!-- Navigation Component Lane -->
<div class="ds-component-lane">
    <h2 class="ds-component-lane__title">Navigation Component</h2>
    <p class="ds-component-lane__description">
        Status: in-progress. Desktop/mobile optimized. Token dependencies: color-brand-blue variants, color-text-inverse, color-bg-soft.
        See docs/design-system/components/navigation.md for full contract and current implementation status.
    </p>
    
    <div class="ds-component-variants">
        <div class="ds-component-variant">
            <span class="ds-component-variant__label">Desktop: Horizontal Menu</span>
            <h3 class="ds-component-variant__title">Desktop Navigation with Submenu</h3>
            <div class="ds-component-variant__demo">
                <nav class="ds-nav-demo">
                    <ul class="ds-nav-demo__menu">
                        <li class="ds-nav-demo__item">
                            <a href="#">Accommodations</a>
                            <div class="ds-nav-demo__submenu">
                                Room types and rates
                            </div>
                        </li>
                        <li class="ds-nav-demo__item">
                            <a href="#">Events</a>
                            <div class="ds-nav-demo__submenu">
                                Weddings, conferences, retreats
                            </div>
                        </li>
                        <li class="ds-nav-demo__item">
                            <a href="#">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <p class="ds-component-variant__note">
                Background: gradient var(--lacc-color-brand-blue) to var(--lacc-color-brand-blue-deep)<br/>
                Text: var(--lacc-color-text-inverse) #ffffff<br/>
                Submenu background: var(--lacc-color-bg-soft) #f6f3ed
            </p>
        </div>

        <div class="ds-component-variant">
            <span class="ds-component-variant__label">Mobile: Collapsible Menu</span>
            <h3 class="ds-component-variant__title">Mobile Navigation Panel</h3>
            <div class="ds-component-variant__demo">
                <nav class="ds-nav-mobile-demo">
                    <ul class="ds-nav-mobile-demo__menu">
                        <li class="ds-nav-mobile-demo__item">
                            <a href="#">Accommodations</a>
                        </li>
                        <li class="ds-nav-mobile-demo__item">
                            <a href="#">Events</a>
                        </li>
                        <li class="ds-nav-mobile-demo__item">
                            <a href="#">Dining</a>
                        </li>
                        <li class="ds-nav-mobile-demo__item">
                            <a href="#">About</a>
                        </li>
                    </ul>
                    <a class="ds-nav-mobile-demo__call" href="tel:+19093372478">Call 909-337-2478</a>
                </nav>
            </div>
            <p class="ds-component-variant__note">
                Background: translucent dark gradient<br/>
                Text: var(--lacc-color-text-inverse) #ffffff, 22px, 600 weight<br/>
                Call CTA: gradient background with var(--lacc-color-brand-blue) to var(--lacc-color-brand-blue-deep)
            </p>
        </div>
    </div>
</div>

<div class="ds-component-lane">
    <h3 style="font-size: 18px; margin-top: 40px;">Next Steps</h3>
    <ul>
        <li>Visual review: confirm button and navigation variants match contract intent</li>
        <li>Accessibility validation: keyboard nav, focus states, color contrast</li>
        <li>Mobile testing: touch behavior, responsive breakpoints, call CTA usability</li>
        <li>Then proceed to: component migration (update components to use semantic tokens)</li>
    </ul>
</div>

</main>

<?php get_footer(); ?>
