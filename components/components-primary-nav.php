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
// Nav CSS is in assets/styles/layouts/_nav.scss — compiled into dist/styles/main.css
?>

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