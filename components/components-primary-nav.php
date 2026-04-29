<?php
$lacc_primary_nav_id = 'lacc-primary-nav-panel';
$lacc_primary_nav_menu_args = array(
    'theme_location' => 'primary_navigation',
    'menu' => 'primary-nav',
    'container' => false,
    'menu_class' => 'lacc-primary-nav__menu',
    'fallback_cb' => false,
    'depth' => 2,
);

if ( ! function_exists( 'lacc_primary_nav_render_fallback_items' ) ) {
    function lacc_primary_nav_render_fallback_items( $items_by_parent, $parent_id, $depth, $max_depth ) {
        if ( $max_depth > 0 && $depth >= $max_depth ) {
            return '';
        }

        if ( empty( $items_by_parent[ $parent_id ] ) ) {
            return '';
        }

        $is_top_level = 0 === (int) $parent_id;
        $list_class = $is_top_level ? 'lacc-primary-nav__menu' : 'sub-menu';
        $html = '<ul class="' . esc_attr( $list_class ) . '">';

        foreach ( $items_by_parent[ $parent_id ] as $item ) {
            $item_id = (int) $item->ID;
            $children = isset( $items_by_parent[ $item_id ] ) ? $items_by_parent[ $item_id ] : array();
            $has_children = ! empty( $children ) && ( $max_depth <= 0 || $depth + 1 < $max_depth );

            $classes = array_filter( array_map( 'sanitize_html_class', (array) $item->classes ) );
            $classes[] = 'menu-item';
            $classes[] = 'menu-item-' . $item_id;

            if ( $has_children ) {
                $classes[] = 'menu-item-has-children';
            }

            $classes = array_unique( array_filter( $classes ) );
            $html .= '<li class="' . esc_attr( implode( ' ', $classes ) ) . '">';

            $attributes = array(
                'href' => ! empty( $item->url ) ? $item->url : '#',
            );

            if ( ! empty( $item->attr_title ) ) {
                $attributes['title'] = $item->attr_title;
            }

            if ( ! empty( $item->target ) ) {
                $attributes['target'] = $item->target;
            }

            if ( ! empty( $item->xfn ) ) {
                $attributes['rel'] = $item->xfn;
            }

            $attr_html = '';
            foreach ( $attributes as $name => $value ) {
                if ( '' === $value ) {
                    continue;
                }

                if ( 'href' === $name ) {
                    $attr_html .= ' href="' . esc_url( $value ) . '"';
                } else {
                    $attr_html .= ' ' . $name . '="' . esc_attr( $value ) . '"';
                }
            }

            $title = apply_filters( 'the_title', $item->title, $item_id );
            $html .= '<a' . $attr_html . '>' . esc_html( wp_strip_all_tags( $title ) ) . '</a>';

            if ( $has_children ) {
                $html .= lacc_primary_nav_render_fallback_items( $items_by_parent, $item_id, $depth + 1, $max_depth );
            }

            $html .= '</li>';
        }

        $html .= '</ul>';

        return $html;
    }
}

if ( ! function_exists( 'lacc_primary_nav_build_fallback_menu' ) ) {
    function lacc_primary_nav_build_fallback_menu( $menu_args ) {
        $menu_object = false;

        if ( ! empty( $menu_args['menu'] ) ) {
            $menu_object = wp_get_nav_menu_object( $menu_args['menu'] );
        }

        if ( ! $menu_object && ! empty( $menu_args['theme_location'] ) ) {
            $locations = get_nav_menu_locations();
            $theme_location = $menu_args['theme_location'];
            if ( isset( $locations[ $theme_location ] ) ) {
                $menu_object = wp_get_nav_menu_object( $locations[ $theme_location ] );
            }
        }

        if ( ! $menu_object || empty( $menu_object->term_id ) ) {
            return '';
        }

        $items = wp_get_nav_menu_items(
            $menu_object->term_id,
            array(
                'update_post_term_cache' => false,
            )
        );

        if ( empty( $items ) || is_wp_error( $items ) ) {
            return '';
        }

        $items_by_parent = array();
        foreach ( $items as $item ) {
            $parent_id = (int) $item->menu_item_parent;
            if ( ! isset( $items_by_parent[ $parent_id ] ) ) {
                $items_by_parent[ $parent_id ] = array();
            }

            $items_by_parent[ $parent_id ][] = $item;
        }

        $max_depth = isset( $menu_args['depth'] ) ? (int) $menu_args['depth'] : 0;
        return lacc_primary_nav_render_fallback_items( $items_by_parent, 0, 0, $max_depth );
    }
}

if ( ! function_exists( 'lacc_primary_nav_strip_legacy_bootstrap_classes' ) ) {
    function lacc_primary_nav_strip_legacy_bootstrap_classes( $markup ) {
        if ( empty( $markup ) || ! is_string( $markup ) ) {
            return $markup;
        }

        $legacy_classes = array(
            'dropdown',
            'dropdown-menu',
            'dropdown-toggle',
            'open',
            'navbar',
            'navbar-nav',
            'btn-outline',
        );

        $sanitized = preg_replace_callback(
            '/class=("|\')(.*?)\1/',
            static function ( $matches ) use ( $legacy_classes ) {
                $quote = $matches[1];
                $class_tokens = preg_split( '/\s+/', trim( (string) $matches[2] ) );
                if ( empty( $class_tokens ) ) {
                    return $matches[0];
                }

                $class_tokens = array_values(
                    array_filter(
                        $class_tokens,
                        static function ( $class_name ) use ( $legacy_classes ) {
                            return '' !== $class_name && ! in_array( $class_name, $legacy_classes, true );
                        }
                    )
                );

                if ( empty( $class_tokens ) ) {
                    return '';
                }

                return 'class=' . $quote . esc_attr( implode( ' ', $class_tokens ) ) . $quote;
            },
            $markup
        );

        return is_string( $sanitized ) ? $sanitized : $markup;
    }
}

$lacc_primary_nav_markup = wp_nav_menu( array_merge( $lacc_primary_nav_menu_args, array( 'echo' => false ) ) );

if ( false === strpos( (string) $lacc_primary_nav_markup, 'sub-menu' ) ) {
    $lacc_primary_nav_fallback_markup = lacc_primary_nav_build_fallback_menu( $lacc_primary_nav_menu_args );
    if ( ! empty( $lacc_primary_nav_fallback_markup ) ) {
        $lacc_primary_nav_markup = $lacc_primary_nav_fallback_markup;
    }
}

$lacc_primary_nav_markup = lacc_primary_nav_strip_legacy_bootstrap_classes( $lacc_primary_nav_markup );
?>

<style>
.lacc-primary-nav {
    --lacc-home-nav-progress: 1;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 10000;
    overflow: visible;
    position: fixed;
    color: #ffffff;
    background: transparent;
    box-shadow: 0 16px 36px rgb(15 20 27 / calc(0.18 * var(--lacc-home-nav-progress)));
    transition: box-shadow .24s ease-in-out;
}

.lacc-primary-nav::before,
.lacc-primary-nav::after {
    content: "";
    position: absolute;
    inset: 0;
    pointer-events: none;
    transition: opacity .24s ease-in-out;
}

.lacc-primary-nav::before {
    background-image: linear-gradient(180deg, var(--lacc-color-brand-blue), var(--lacc-color-brand-blue-deep));
    opacity: var(--lacc-home-nav-progress);
}

.lacc-primary-nav::after {
    opacity: 0;
}

body.home .lacc-primary-nav {
    --lacc-home-nav-progress: 0;
}

body.home .lacc-primary-nav::after {
    background-image: linear-gradient(180deg, rgba(81,83,74,0.5), rgba(31,34,29,0.5));
    mix-blend-mode: multiply;
    opacity: calc(1 - var(--lacc-home-nav-progress));
}

.lacc-primary-nav__bar {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 20px;
    min-height: 94px;
    padding: 13px 22px;
}

.lacc-primary-nav__brand {
    display: inline-flex;
    align-items: center;
    flex: 0 0 auto;
    max-width: 320px;
}

.lacc-primary-nav__brand img {
    display: block;
    width: auto;
    height: 68px;
}

.lacc-primary-nav__toggle {
    display: none;
    align-items: center;
    gap: 10px;
    margin-left: auto;
    padding: 10px 14px;
    border: 1px solid rgba(255,255,255,0.38);
    background: transparent;
    color: #ffffff;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1;
    text-transform: uppercase;
}

.lacc-primary-nav__toggle:hover,
.lacc-primary-nav__toggle:focus,
.lacc-primary-nav__toggle:focus-visible {
    border-color: rgba(255,255,255,0.84);
    background: rgba(255,255,255,0.12);
}

.lacc-primary-nav__toggle:focus-visible,
.lacc-primary-nav__menu a:focus-visible,
.lacc-primary-nav__subtoggle:focus-visible,
.lacc-primary-nav__actions a:focus-visible {
    outline: 2px solid rgba(255,255,255,0.94);
    outline-offset: 2px;
}

.lacc-primary-nav__toggle-bars {
    display: inline-grid;
    gap: 4px;
}

.lacc-primary-nav__toggle-bars span {
    display: block;
    width: 18px;
    height: 2px;
    background: currentColor;
}

html,
body {
    max-width: 100%;
    overflow-x: hidden !important;
}

html.lacc-nav-open,
body.lacc-nav-open {
    overflow-x: hidden !important;
}

.lacc-primary-nav__panel {
    display: flex;
    flex: 1 1 auto;
    align-items: center;
    justify-content: flex-end;
    gap: 18px;
    min-width: 0;
}

.lacc-primary-nav__mobile-call {
    display: none;
}

.lacc-primary-nav__menu,
.lacc-primary-nav__menu .sub-menu {
    margin: 0;
    padding: 0;
    list-style: none;
}

.lacc-primary-nav__menu > li,
.lacc-primary-nav__menu .sub-menu li {
    list-style: none;
}

.lacc-primary-nav__menu {
    display: flex;
    flex: 1 1 auto;
    align-items: center;
    justify-content: flex-end;
    gap: 16px;
    min-width: 0;
}

.lacc-primary-nav__menu > li {
    position: relative;
}

.lacc-primary-nav__menu > li.menu-item-has-children::after {
    content: '';
    position: absolute;
    top: 100%;
    left: 0;
    width: max(100%, 280px);
    height: 28px;
}

.lacc-primary-nav__entry {
    display: flex;
    align-items: stretch;
    border-radius: 999px;
}

.lacc-primary-nav__menu > li > a,
.lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a,
.lacc-primary-nav__subtoggle,
.lacc-primary-nav__menu .sub-menu a {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 13px;
    font-weight: 700 !important;
    font-synthesis: none;
    text-rendering: geometricPrecision;
    -webkit-font-smoothing: antialiased;
    letter-spacing: .11em;
    line-height: 1.35;
    text-decoration: none;
    text-transform: uppercase;
    transition: none;
}

.lacc-primary-nav__menu > li > a,
.lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 0;
    background: transparent;
    color: #ffffff;
    text-align: center;
}

.lacc-primary-nav__menu > li > a:link,
.lacc-primary-nav__menu > li > a:visited,
.lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a:link,
.lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a:visited {
    color: #ffffff;
    text-decoration: none;
}

.lacc-primary-nav__menu > li > a,
.lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a {
    padding: 11px 16px;
    border-radius: 0;
}

.lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children) > a {
    display: inline-flex;
    align-items: center;
    min-height: 0;
    padding: 10px 14px;
    line-height: 1.1;
    border: 1px solid rgba(255,255,255,0.74);
    border-radius: 0;
    transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out;
}

.lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children) > a:hover,
.lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children) > a:focus,
.lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children).current-menu-item > a {
    border-color: rgba(255,255,255,0.96);
    background-color: rgba(255,255,255,0.09) !important;
    color: #ffffff;
    box-shadow: none;
}

.lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children) > a:focus-visible {
    outline: 2px solid #ffffff;
    outline-offset: -2px;
    background-color: rgba(255,255,255,0.09) !important;
    color: #ffffff;
}

.lacc-primary-nav__subtoggle {
    display: none;
    align-items: center;
    justify-content: center;
    width: 42px;
    min-height: 44px;
    min-width: 42px;
    padding: 0;
    margin: 0;
    border: 0;
    background: transparent;
    color: #ffffff;
    -webkit-appearance: none;
    appearance: none;
    border-radius: 0;
    box-shadow: none;
}

.lacc-primary-nav__menu > li > a:hover,
.lacc-primary-nav__menu > li > a:focus,
.lacc-primary-nav__menu > li.current-menu-item > a,
.lacc-primary-nav__menu > li.current-menu-parent > a,
.lacc-primary-nav__menu > li.current_page_parent > a,
.lacc-primary-nav__menu > li.current-menu-item > .lacc-primary-nav__entry > a,
.lacc-primary-nav__menu > li.current-menu-parent > .lacc-primary-nav__entry > a,
.lacc-primary-nav__menu > li.current_page_parent > .lacc-primary-nav__entry > a,
.lacc-primary-nav__menu > li:hover > .lacc-primary-nav__entry > a,
.lacc-primary-nav__menu > li.is-open > .lacc-primary-nav__entry > a,
.lacc-primary-nav__subtoggle:hover,
.lacc-primary-nav__subtoggle:focus,
.lacc-primary-nav__menu > li:hover > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle,
.lacc-primary-nav__menu > li.is-open > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle {
    background: rgba(255,255,255,0.14);
    box-shadow: inset 0 0 16px rgba(255,255,255,0.12);
    color: #f6f3ed;
    font-weight: 700 !important;
}

.lacc-primary-nav__subtoggle svg {
    width: 12px;
    height: 12px;
    transition: transform .2s ease;
}

.lacc-primary-nav__menu > li.is-open > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle svg {
    transform: rotate(90deg);
}

.lacc-primary-nav__menu .sub-menu {
    position: absolute;
    top: calc(100% + 26px);
    left: 0;
    z-index: 5;
    display: grid;
    gap: 0;
    min-width: 260px;
    padding: 0;
    border: 1px solid rgba(81,83,74,0.16);
    border-top: 3px solid rgba(212,164,65,0.54);
    background: #ffffff;
    box-shadow: 0 20px 40px rgba(15,20,27,0.2);
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transform: translateY(4px);
    transition: opacity .26s ease-in-out, transform .26s ease-in-out, visibility .26s ease-in-out;
}

.lacc-primary-nav__menu .sub-menu > li {
    display: flex;
    align-items: center;
    width: 100%;
    min-height: 42px;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.lacc-primary-nav__menu > li.is-open > .sub-menu {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateY(0);
}

.lacc-primary-nav__menu .sub-menu a {
    display: flex;
    align-items: center;
    width: 100%;
    min-height: 100%;
    margin: 0;
    padding: 12px 16px;
    border-radius: 0;
    color: #324c6a;
    line-height: 1.45;
    box-sizing: border-box;
}

/* External link indicator — CSS pseudo, no FA dependency */
.lacc-primary-nav__menu .sub-menu a[target="_blank"]::after {
    content: '';
    display: inline-block;
    flex: 0 0 auto;
    margin-left: auto;
    padding-left: 10px;
    width: 11px;
    height: 11px;
    background-color: currentColor;
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12'%3E%3Cpath d='M6.5 1H11v4.5M11 1L5 7M2 3H1v8h8V9' stroke='currentColor' stroke-width='1.5' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12'%3E%3Cpath d='M6.5 1H11v4.5M11 1L5 7M2 3H1v8h8V9' stroke='currentColor' stroke-width='1.5' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-size: contain;
    mask-size: contain;
    opacity: 1;
}

/* Suppress legacy/global left-side external-link markers inside primary nav */
.lacc-primary-nav__menu a[target="_blank"]::before {
    content: none !important;
    display: none !important;
}

.lacc-primary-nav__menu a[target="_blank"] .fa-external-link,
.lacc-primary-nav__menu a[target="_blank"] .fa-external-link-alt,
.lacc-primary-nav__menu a[target="_blank"] .glyphicon-new-window {
    display: none !important;
}

.lacc-primary-nav__menu .sub-menu a:visited {
    color: #324c6a;
}

.lacc-primary-nav__menu .sub-menu li + li {
    border-top: 1px solid rgba(81,83,74,0.25);
}

.lacc-primary-nav__menu .sub-menu li:hover,
.lacc-primary-nav__menu .sub-menu li:focus-within {
    background: linear-gradient(180deg, #f6f3ed, #ffffff);
}

.lacc-primary-nav__menu .sub-menu a:hover,
.lacc-primary-nav__menu .sub-menu a:focus,
.lacc-primary-nav__menu .sub-menu a:focus-visible,
.lacc-primary-nav__menu .sub-menu .current-menu-item > a {
    box-shadow: none;
    color: #1f3552;
    font-weight: 700 !important;
}

@media (min-width: 1025px) {
    .lacc-primary-nav__menu > li:hover > .sub-menu {
        display: grid !important;
        opacity: 1 !important;
        visibility: visible !important;
        pointer-events: auto !important;
        transform: translateY(0) !important;
    }

    .lacc-primary-nav__menu > li:focus-within > .sub-menu {
        display: grid !important;
        opacity: 1 !important;
        visibility: visible !important;
        pointer-events: auto !important;
        transform: translateY(0) !important;
    }
}

@media (max-width: 1024px) {
    .lacc-primary-nav {
        background: transparent;
        box-shadow: none;
        overflow: hidden;
        overflow-x: hidden;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
    }

    .lacc-primary-nav__bar {
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto !important;
        align-items: center;
        column-gap: 14px !important;
        row-gap: 10px;
        min-height: 76px;
        padding: 10px 14px !important;
        background: linear-gradient(180deg, rgba(18,29,43,0.76), rgba(18,29,43,0.34));
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        overflow-x: hidden;
    }

    .lacc-primary-nav__brand {
        min-width: 0;
        max-width: 205px !important;
    }

    .lacc-primary-nav__brand img {
        width: 100%;
        max-width: 232px;
        height: auto;
    }

    .lacc-primary-nav__toggle {
        display: inline-flex;
        flex: 0 0 auto;
        margin-left: auto !important;
        justify-self: end !important;
        min-height: 38px;
        min-width: 38px;
        width: 38px;
        padding: 8px !important;
        border-color: rgba(255,255,255,0.52);
        background: rgba(16,26,38,0.34);
        white-space: nowrap;
        font-size: 0 !important;
        letter-spacing: 0 !important;
        line-height: 0 !important;
        text-indent: -9999px;
        overflow: hidden;
        color: transparent !important;
    }

    .lacc-primary-nav__toggle::before,
    .lacc-primary-nav__toggle::after {
        content: none !important;
        display: none !important;
    }

    .lacc-primary-nav__toggle .lacc-primary-nav__toggle-bars {
        display: inline-grid !important;
        color: #ffffff !important;
        text-indent: 0;
    }

    .lacc-primary-nav__panel {
        display: none;
        grid-column: 1 / -1;
        position: relative;
        left: 0;
        width: 100%;
        max-width: 100%;
        max-height: calc(100vh - 92px);
        margin: 0;
        padding: 8px;
        border: 0;
        border-radius: 0 0 4px 4px;
        background: linear-gradient(180deg, rgba(18,29,43,0.9), rgba(18,29,43,0.72));
        box-shadow: 0 16px 30px rgba(6,11,18,0.3);
        overflow: hidden;
        overflow-x: clip;
        align-items: stretch;
        box-sizing: border-box;
        min-width: 0;
    }

    .lacc-primary-nav.is-open .lacc-primary-nav__panel {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .lacc-primary-nav.is-open .lacc-primary-nav__panel > .lacc-primary-nav__menu {
        display: grid !important;
        grid-template-columns: minmax(0, 1fr) !important;
        justify-content: stretch !important;
        justify-items: stretch !important;
        align-content: start !important;
        align-self: stretch !important;
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
        float: none !important;
    }

    .lacc-primary-nav.is-open .lacc-primary-nav__panel > .lacc-primary-nav__menu > li,
    .lacc-primary-nav.is-open .lacc-primary-nav__panel > .lacc-primary-nav__menu > li > a,
    .lacc-primary-nav.is-open .lacc-primary-nav__panel > .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        justify-content: flex-start !important;
        text-align: left !important;
    }

    .lacc-primary-nav__menu {
        width: 100%;
        max-width: 100%;
        display: grid;
        grid-template-columns: minmax(0, 1fr);
        gap: 0;
        justify-content: stretch;
        justify-items: stretch;
        align-content: start;
        flex: 0 0 auto;
        min-width: 0;
        margin: 0;
        padding: 0;
        border: 1px solid rgba(255,255,255,0.2);
        background: rgba(255,255,255,0.04);
        box-shadow: none;
        overflow-y: auto;
        box-sizing: border-box;
        overflow-x: hidden;
    }

    .lacc-primary-nav__menu > li {
        width: 100%;
        max-width: 100%;
        min-width: 0;
        margin: 0;
        border-top: 1px solid rgba(255,255,255,0.12);
        text-align: left;
        overflow: hidden;
        box-sizing: border-box;
    }

    .lacc-primary-nav__menu > li:first-child {
        border-top: 0;
    }

    .lacc-primary-nav__menu > li.menu-item-has-children::after {
        display: none;
    }

    .lacc-primary-nav__entry {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 54px;
        width: 100%;
        max-width: 100%;
        min-width: 0;
        min-height: 52px;
        border: 0;
        background: transparent;
        border-radius: 0;
        overflow: hidden;
        justify-items: stretch;
        box-sizing: border-box;
    }

    .lacc-primary-nav__menu > li:not(.menu-item-has-children) > a {
        width: 100%;
        min-height: 52px;
        border: 0;
        background: transparent;
        border-radius: 0;
    }

    .lacc-primary-nav__menu > li > a,
    .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a,
    .lacc-primary-nav__subtoggle,
    .lacc-primary-nav__menu .sub-menu a {
        justify-content: flex-start;
        text-align: left;
        box-shadow: none;
        box-sizing: border-box;
    }

    .lacc-primary-nav__menu > li > a,
    .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a,
    .lacc-primary-nav__menu .sub-menu a {
        width: 100%;
        max-width: 100%;
        min-width: 0;
        justify-content: flex-start;
        text-align: left;
    }

    .lacc-primary-nav__menu > li > a,
    .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a {
        display: inline-flex;
        align-items: center;
        padding: 0 22px;
        border-radius: 0;
        color: #ffffff;
        font-size: 15px;
        font-weight: 500 !important;
        letter-spacing: .05em;
        line-height: 1;
        text-transform: uppercase;
    }

    .lacc-primary-nav__menu > li > a:link,
    .lacc-primary-nav__menu > li > a:visited,
    .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a:link,
    .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a:visited {
        color: #ffffff;
    }

    .lacc-primary-nav__menu > li > a {
        padding: 0 22px;
        color: #ffffff;
        font-size: 15px;
        font-weight: 500 !important;
        letter-spacing: .05em;
        line-height: 1;
        text-transform: uppercase;
    }

    .lacc-primary-nav__subtoggle {
        display: inline-flex;
        width: 54px;
        max-width: 54px;
        min-width: 54px;
        min-height: 52px;
        padding: 0;
        margin: 0;
        border-radius: 0;
        color: #ffffff;
        border-left: 0;
        background: transparent;
        box-shadow: none;
        flex: 0 0 54px;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
    }

    .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a {
        -webkit-tap-highlight-color: transparent;
    }

    .lacc-primary-nav__menu > li > a {
        width: 100%;
    }

    .lacc-primary-nav__menu .sub-menu {
        position: static;
        min-width: 0;
        margin-top: 0;
        margin-left: 0;
        border: 0;
        border-top: 1px solid rgba(255,255,255,0.1);
        background: rgba(255,255,255,0.06);
        box-shadow: none;
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: none;
        transition: none;
        display: none;
    }

    .lacc-primary-nav__menu > li:not(.is-open):hover > .sub-menu,
    .lacc-primary-nav__menu > li:not(.is-open):focus-within > .sub-menu {
        display: none !important;
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: none;
    }

    .lacc-primary-nav__menu > li.is-open > .sub-menu {
        display: grid;
    }

    .lacc-primary-nav__menu .sub-menu a {
        min-height: 42px;
        padding: 8px 22px 8px 38px;
        color: rgba(255,255,255,0.92);
        font-size: 12px;
        font-weight: 500 !important;
        letter-spacing: .04em;
        line-height: 1.25;
        text-transform: uppercase;
    }

    .lacc-primary-nav__menu .sub-menu a:link,
    .lacc-primary-nav__menu .sub-menu a:visited {
        color: rgba(255,255,255,0.92);
    }

    .lacc-primary-nav__menu > li > a:visited,
    .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a:visited,
    .lacc-primary-nav__menu .sub-menu a:visited {
        color: rgba(255,255,255,0.92) !important;
        background: transparent !important;
        box-shadow: none !important;
        text-decoration: none !important;
    }

    .lacc-primary-nav__menu > li > a:hover,
    .lacc-primary-nav__menu > li > a:focus,
    .lacc-primary-nav__menu > li.current-menu-item > a,
    .lacc-primary-nav__menu > li.current-menu-parent > a,
    .lacc-primary-nav__menu > li.current_page_parent > a,
    .lacc-primary-nav__menu > li.current-menu-item > .lacc-primary-nav__entry > a,
    .lacc-primary-nav__menu > li.current-menu-parent > .lacc-primary-nav__entry > a,
    .lacc-primary-nav__menu > li.current_page_parent > .lacc-primary-nav__entry > a,
    .lacc-primary-nav__menu > li:hover > .lacc-primary-nav__entry > a,
    .lacc-primary-nav__menu > li.is-open > .lacc-primary-nav__entry > a {
        background: transparent;
        box-shadow: none;
    }

    .lacc-primary-nav__menu > li:hover > .lacc-primary-nav__entry,
    .lacc-primary-nav__menu > li.is-open > .lacc-primary-nav__entry {
        background: rgba(255,255,255,0.1);
    }

    .lacc-primary-nav__subtoggle:hover,
    .lacc-primary-nav__subtoggle:focus,
    .lacc-primary-nav__subtoggle:focus-visible,
    .lacc-primary-nav__subtoggle:active,
    .lacc-primary-nav__menu > li:hover > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle {
        background: transparent !important;
        box-shadow: none;
    }

    .lacc-primary-nav__menu > li.is-open > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle {
        background: transparent !important;
        box-shadow: none;
    }

    .lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children) > a {
        width: 100%;
        min-height: 42px;
        padding-top: 8px;
        padding-bottom: 8px;
        border: 0;
        color: #ffffff;
    }

    /* Fix parent-with-children rows: link text cell must also stretch full width */
    .lacc-primary-nav__menu > li.menu-item-has-children > .lacc-primary-nav__entry > a {
        width: 100%;
    }

    .lacc-primary-nav__mobile-call {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        min-height: 50px;
        margin-top: auto;
        box-sizing: border-box;
        border: 1px solid rgba(255,255,255,0.45);
        background: rgba(255,255,255,0.06);
        color: #ffffff;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .08em;
        line-height: 1;
        text-decoration: none;
        text-transform: uppercase;
    }

    .lacc-primary-nav__mobile-call:hover,
    .lacc-primary-nav__mobile-call:focus,
    .lacc-primary-nav__mobile-call:focus-visible {
        background: rgba(255,255,255,0.1);
        color: #ffffff;
    }
}

@media (max-width: 374px) {
    .lacc-primary-nav__brand {
        max-width: none;
    }

    .lacc-primary-nav__toggle {
        padding: 8px;
    }
}

/* ---- Override compiled legacy _header.scss rules still present in main.css ---- */
/* main.css contains: nav li a:hover { background-color: #f6f3ed !important; font-weight: 400 !important; }  */
/* and: .dropdown-menu li a:hover { background-color: #f6f3ed !important; font-weight: 600; }               */
/* Keep this neutralizer desktop-only so mobile open-state row highlighting remains unified.                  */
@media (min-width: 1025px) {
    .lacc-primary-nav__menu > li > a:hover,
    .lacc-primary-nav__menu > li > a:focus,
    .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a:hover,
    .lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a:focus {
        background-color: transparent !important;
        font-weight: inherit !important;
    }
}
</style>

<nav class="lacc-primary-nav" aria-label="Primary navigation" data-lacc-primary-nav>
    <div class="lacc-primary-nav__bar">
        <a class="lacc-primary-nav__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/dist/images/LAL_Logo_Color_WhiteText_Horiz_CCFR.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        </a>

        <button type="button" class="lacc-primary-nav__toggle" aria-expanded="false" aria-controls="<?php echo esc_attr( $lacc_primary_nav_id ); ?>" aria-label="Toggle navigation menu">
            <span class="lacc-primary-nav__toggle-bars" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <div class="lacc-primary-nav__panel" id="<?php echo esc_attr( $lacc_primary_nav_id ); ?>">
            <?php echo $lacc_primary_nav_markup; ?>
            <a class="lacc-primary-nav__mobile-call" href="tel:+19093372478" aria-label="Call UCLA Lake Arrowhead Lodge at 909-337-2478">Call 909-337-2478</a>
        </div>
    </div>
</nav>

<script>
(function () {
    if (window.laccPrimaryNavInit) {
        return;
    }

    window.laccPrimaryNavInit = true;

    function closeItem(item) {
        var button = item.querySelector(':scope > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle');
        var menu = item.querySelector(':scope > .sub-menu');
        var isDesktopNav = window.innerWidth > 1024;
        var parentLink = item.querySelector(':scope > .lacc-primary-nav__entry > a');

        if (!button || !menu) {
            return;
        }

        item.classList.remove('is-open');
        button.setAttribute('aria-expanded', 'false');
        if (parentLink) {
            parentLink.setAttribute('aria-expanded', 'false');
        }
        menu.setAttribute('aria-hidden', 'true');
        menu.style.transition = 'none';
        menu.style.opacity = '0';
        menu.style.visibility = 'hidden';
        menu.style.pointerEvents = 'none';
        menu.style.transform = 'translateY(8px)';
        menu.style.display = isDesktopNav ? 'grid' : 'none';

        window.requestAnimationFrame(function () {
            menu.style.removeProperty('transition');
        });
    }

    function openItem(item) {
        var button = item.querySelector(':scope > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle');
        var menu = item.querySelector(':scope > .sub-menu');
        var parentLink = item.querySelector(':scope > .lacc-primary-nav__entry > a');

        if (!button || !menu) {
            return;
        }

        item.classList.add('is-open');
        button.setAttribute('aria-expanded', 'true');
        if (parentLink) {
            parentLink.setAttribute('aria-expanded', 'true');
        }
        menu.setAttribute('aria-hidden', 'false');
        menu.style.transition = 'none';
        menu.style.display = 'grid';
        menu.style.opacity = '1';
        menu.style.visibility = 'visible';
        menu.style.pointerEvents = 'auto';
        menu.style.transform = 'translateY(0)';

        window.requestAnimationFrame(function () {
            menu.style.removeProperty('transition');
        });
    }

    function cancelClose(item) {
        if (item._laccCloseTimer) {
            window.clearTimeout(item._laccCloseTimer);
            item._laccCloseTimer = null;
        }
    }

    function scheduleClose(item, delay) {
        cancelClose(item);
        item._laccCloseTimer = window.setTimeout(function () {
            closeItem(item);
            item._laccCloseTimer = null;
        }, delay);
    }

    function closeSiblings(item) {
        var siblings = item.parentElement ? item.parentElement.children : [];

        Array.prototype.forEach.call(siblings, function (sibling) {
            if (sibling !== item && sibling.classList && sibling.classList.contains('menu-item-has-children')) {
                closeItem(sibling);
            }
        });
    }

    function enhanceMenu(nav) {
        nav.querySelectorAll('.menu-item-has-children').forEach(function (item, index) {
            var link = item.querySelector(':scope > a');
            var submenu = item.querySelector(':scope > .sub-menu');
            var entry;
            var button;

            if (!link || !submenu) {
                return;
            }

            if (!submenu.id) {
                submenu.id = 'lacc-primary-submenu-' + index;
            }

            submenu.setAttribute('aria-hidden', 'true');

            if (item.querySelector(':scope > .lacc-primary-nav__entry')) {
                return;
            }

            entry = document.createElement('div');
            entry.className = 'lacc-primary-nav__entry';

            link.parentNode.insertBefore(entry, link);
            entry.appendChild(link);

            button = document.createElement('button');
            button.type = 'button';
            button.className = 'lacc-primary-nav__subtoggle';
            button.setAttribute('aria-expanded', 'false');
            button.setAttribute('aria-controls', submenu.id);
            button.setAttribute('aria-haspopup', 'menu');
            button.setAttribute('aria-label', 'Toggle ' + link.textContent.trim() + ' submenu');
            button.innerHTML = '<svg viewBox="0 0 12 12" aria-hidden="true"><path d="M4 2.5 8 6 4 9.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';
            entry.appendChild(button);

            link.setAttribute('aria-haspopup', 'menu');
            link.setAttribute('aria-expanded', 'false');
        });
    }

    document.querySelectorAll('[data-lacc-primary-nav]').forEach(function (nav) {
        var panel = nav.querySelector('.lacc-primary-nav__panel');
        var bar = nav.querySelector('.lacc-primary-nav__bar');
        var brand = nav.querySelector('.lacc-primary-nav__brand');
        var toggle = nav.querySelector('.lacc-primary-nav__toggle');
        var isHomeNav = document.body.classList.contains('home');
        var scrollTicking = false;

        function openNav() {
            nav.classList.add('is-open');
            setGlobalNavOpenState(true);
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'true');
            }
        }

        function closeNav() {
            nav.classList.remove('is-open');
            setGlobalNavOpenState(false);
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'false');
            }
            items.forEach(closeItem);
        }

        function enforceMobileLayoutStyles() {
            if (!bar || !brand || !toggle) {
                return;
            }

            if (window.innerWidth <= 1024) {
                bar.style.display = 'grid';
                bar.style.gridTemplateColumns = 'minmax(0, 1fr) auto';
                bar.style.columnGap = '14px';
                bar.style.alignItems = 'center';
                bar.style.overflowX = 'hidden';
                brand.style.maxWidth = '205px';
                toggle.style.marginLeft = 'auto';
                toggle.style.justifySelf = 'end';
                toggle.style.padding = '8px';
            } else {
                bar.style.removeProperty('display');
                bar.style.removeProperty('grid-template-columns');
                bar.style.removeProperty('column-gap');
                bar.style.removeProperty('align-items');
                bar.style.removeProperty('overflow-x');
                brand.style.removeProperty('max-width');
                toggle.style.removeProperty('margin-left');
                toggle.style.removeProperty('justify-self');
                toggle.style.removeProperty('padding');
            }
        }

        function setGlobalNavOpenState(isOpen) {
            document.documentElement.classList.toggle('lacc-nav-open', !!isOpen);
            document.body.classList.toggle('lacc-nav-open', !!isOpen);
        }

        enhanceMenu(nav);

        var items = nav.querySelectorAll('.menu-item-has-children');

        function isDesktopNavMode() {
            return window.innerWidth > 1024;
        }

        function syncOpenStateToViewport() {
            enforceMobileLayoutStyles();
            if (isDesktopNavMode()) {
                nav.classList.remove('is-open');
                setGlobalNavOpenState(false);
                if (toggle) {
                    toggle.setAttribute('aria-expanded', 'false');
                }
            }

            items.forEach(function (item) {
                closeItem(item);
            });
        }

        function updateHomeNavProgress() {
            if (!isHomeNav) {
                nav.style.setProperty('--lacc-home-nav-progress', '1');
                nav.classList.remove('is-scrolled');
                return;
            }

            var threshold = 180;
            var progress = Math.max(0, Math.min(1, window.scrollY / threshold));
            nav.style.setProperty('--lacc-home-nav-progress', progress.toFixed(3));

            if (progress > 0.02) {
                nav.classList.add('is-scrolled');
            } else {
                nav.classList.remove('is-scrolled');
            }
        }

        function queueHomeNavProgress() {
            if (scrollTicking) {
                return;
            }

            scrollTicking = true;
            window.requestAnimationFrame(function () {
                updateHomeNavProgress();
                scrollTicking = false;
            });
        }

        updateHomeNavProgress();
        syncOpenStateToViewport();
        setGlobalNavOpenState(false);

        if (isHomeNav) {
            window.addEventListener('scroll', queueHomeNavProgress, { passive: true });
            document.addEventListener('scroll', queueHomeNavProgress, { passive: true });
            window.addEventListener('resize', queueHomeNavProgress);
        }

        window.addEventListener('resize', syncOpenStateToViewport);

        if (toggle && panel) {
            toggle.addEventListener('click', function (event) {
                event.preventDefault();
                event.stopPropagation();

                if (nav.classList.contains('is-open')) {
                    closeNav();
                } else {
                    openNav();
                }
            });
        }

        items.forEach(function (item) {
            var entry = item.querySelector(':scope > .lacc-primary-nav__entry');
            var button = item.querySelector(':scope > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle');
            var submenu = item.querySelector(':scope > .sub-menu');
            var parentLink = item.querySelector(':scope > .lacc-primary-nav__entry > a');
            var submenuLinks = submenu ? submenu.querySelectorAll('a') : [];

            function isParentRowToggleTarget(target) {
                var targetElement = target && target.nodeType === 1 ? target : (target && target.parentElement ? target.parentElement : null);

                if (!targetElement) {
                    return false;
                }

                if (button && targetElement.closest('.lacc-primary-nav__subtoggle') === button) {
                    return true;
                }

                if (parentLink && targetElement.closest('a') === parentLink) {
                    return true;
                }

                return false;
            }

            function toggleParentItem() {
                var isExpanded = item.classList.contains('is-open');

                if (!isExpanded && button.getAttribute('aria-expanded') === 'true') {
                    isExpanded = true;
                }

                if (!isExpanded && parentLink && parentLink.getAttribute('aria-expanded') === 'true') {
                    isExpanded = true;
                }

                if (isExpanded) {
                    closeItem(item);
                    return;
                }

                items.forEach(function (otherItem) {
                    if (otherItem !== item) {
                        closeItem(otherItem);
                    }
                });
                openItem(item);
            }

            function handleParentToggleEvent(event) {
                if (isDesktopNavMode() || !nav.classList.contains('is-open')) {
                    return;
                }

                if (!isParentRowToggleTarget(event.target)) {
                    return;
                }

                event.preventDefault();
                event.stopPropagation();
                toggleParentItem();
            }

            if (!button) {
                return;
            }

            if (entry) {
                entry.addEventListener('click', handleParentToggleEvent);
            }

            if (parentLink) {
                parentLink.addEventListener('focus', function () {
                    if (isDesktopNavMode()) {
                        closeSiblings(item);
                        openItem(item);
                    }
                });

                parentLink.addEventListener('keydown', function (event) {
                    if (event.key !== 'Tab' || event.shiftKey) {
                        return;
                    }

                    if (!isDesktopNavMode()) {
                        return;
                    }

                    if (!submenuLinks.length) {
                        return;
                    }

                    closeSiblings(item);
                    openItem(item);
                    event.preventDefault();
                    submenuLinks[0].focus();
                });
            }

            if (submenuLinks.length) {
                submenuLinks.forEach(function (submenuLink, submenuIndex) {
                    submenuLink.addEventListener('keydown', function (event) {
                        if (event.key === 'Tab' && event.shiftKey && submenuIndex === 0) {
                            event.preventDefault();
                            parentLink.focus();
                            return;
                        }

                        if (event.key === 'Tab' && !event.shiftKey && submenuIndex === submenuLinks.length - 1) {
                            closeItem(item);
                        }
                    });
                });
            }

            item.addEventListener('mouseenter', function () {
                if (isDesktopNavMode()) {
                    cancelClose(item);
                    closeSiblings(item);
                    openItem(item);
                }
            });

            item.addEventListener('mouseleave', function () {
                if (isDesktopNavMode()) {
                    scheduleClose(item, 220);
                }
            });

            if (submenu) {
                submenu.addEventListener('mouseenter', function () {
                    if (isDesktopNavMode()) {
                        cancelClose(item);
                        openItem(item);
                    }
                });

                submenu.addEventListener('mouseleave', function () {
                    if (isDesktopNavMode()) {
                        scheduleClose(item, 220);
                    }
                });
            }

            item.addEventListener('focusout', function (event) {
                if (!isDesktopNavMode()) {
                    return;
                }

                if (!item.contains(event.relatedTarget)) {
                    closeItem(item);
                }
            });
        });

        document.addEventListener('click', function (event) {
            if (!nav.contains(event.target)) {
                closeNav();
            }
        });

        document.addEventListener('focusin', function (event) {
            if (!nav.contains(event.target)) {
                closeNav();
            }
        });

        nav.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeNav();
                if (toggle) {
                    if (window.getComputedStyle(toggle).display !== 'none') {
                        toggle.focus();
                    } else {
                        var fallbackFocusTarget = nav.querySelector('.lacc-primary-nav__menu > li > .lacc-primary-nav__entry > a, .lacc-primary-nav__menu > li > a');
                        if (fallbackFocusTarget) {
                            fallbackFocusTarget.focus();
                        }
                    }
                }
            }
        });
    });
}());
</script>