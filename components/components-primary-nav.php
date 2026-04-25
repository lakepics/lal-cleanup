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
?>

<style>
.lacc-primary-nav {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 10000;
    color: #ffffff;
    background-image: linear-gradient(180deg, #3f5f85, #324c6a);
    box-shadow: 0 16px 36px rgba(15,20,27,0.18);
}

.lacc-primary-nav__bar {
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
    max-width: 100%;
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

.lacc-primary-nav__panel {
    display: flex;
    flex: 1 1 auto;
    align-items: center;
    justify-content: flex-end;
    gap: 18px;
    min-width: 0;
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

.lacc-primary-nav__entry {
    display: flex;
    align-items: stretch;
    border-radius: 999px;
}

.lacc-primary-nav__menu > li > a,
.lacc-primary-nav__subtoggle,
.lacc-primary-nav__menu .sub-menu a {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 13px;
    font-weight: 700 !important;
    font-synthesis: none;
    text-rendering: geometricPrecision;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    letter-spacing: .11em;
    line-height: 1.2;
    text-decoration: none;
    text-transform: uppercase;
    transition: none;
}

.lacc-primary-nav__menu > li > a,
.lacc-primary-nav__subtoggle {
    display: inline-flex;
    align-items: center;
    min-height: 44px;
    border: 0;
    background: transparent;
    color: #ffffff;
}

.lacc-primary-nav__menu > li > a {
    padding: 11px 16px;
    border-radius: 999px;
}

.lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children) > a {
    border: 1px solid rgba(255,255,255,0.74);
    border-radius: 0;
}

.lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children) > a:hover,
.lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children) > a:focus,
.lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children).current-menu-item > a {
    border-color: rgba(255,255,255,0.96);
}

.lacc-primary-nav__subtoggle {
    justify-content: center;
    min-width: 42px;
    padding: 11px 12px 11px 4px;
    border-radius: 999px;
}

.lacc-primary-nav__menu > li > a:hover,
.lacc-primary-nav__menu > li > a:focus,
.lacc-primary-nav__menu > li.current-menu-item > a,
.lacc-primary-nav__menu > li.current-menu-parent > a,
.lacc-primary-nav__menu > li.current_page_parent > a,
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
    transform: rotate(180deg);
}

.lacc-primary-nav__menu .sub-menu {
    position: absolute;
    top: calc(100% + 12px);
    left: 0;
    z-index: 5;
    display: none;
    gap: 6px;
    min-width: 260px;
    padding: 14px;
    border: 1px solid rgba(255,255,255,0.16);
    background-image: linear-gradient(180deg, #3f5f85, #324c6a);
    box-shadow: 0 20px 40px rgba(15,20,27,0.28);
}

.lacc-primary-nav__menu > li.is-open > .sub-menu {
    display: grid;
}

.lacc-primary-nav__menu .sub-menu a {
    display: block;
    padding: 12px 14px;
    border-radius: 16px;
    color: #ffffff;
}

.lacc-primary-nav__menu .sub-menu a:hover,
.lacc-primary-nav__menu .sub-menu a:focus,
.lacc-primary-nav__menu .sub-menu a:focus-visible,
.lacc-primary-nav__menu .sub-menu .current-menu-item > a {
    background: rgba(255,255,255,0.14);
    box-shadow: inset 0 0 12px rgba(255,255,255,0.12);
    color: #f6f3ed;
    font-weight: 700 !important;
}

@media (max-width: 1024px) {
    .lacc-primary-nav__bar {
        flex-wrap: wrap;
        padding: 14px 18px;
    }

    .lacc-primary-nav__toggle {
        display: inline-flex;
    }

    .lacc-primary-nav__panel {
        display: none;
        width: 100%;
        padding: 14px;
        border: 1px solid rgba(255,255,255,0.16);
        background-image: linear-gradient(180deg, #3f5f85, #324c6a);
        box-shadow: 0 16px 32px rgba(15,20,27,0.22);
    }

    .lacc-primary-nav.is-open .lacc-primary-nav__panel {
        display: grid;
        gap: 14px;
    }

    .lacc-primary-nav__menu {
        width: 100%;
    }

    .lacc-primary-nav__menu {
        display: grid;
        gap: 10px;
    }

    .lacc-primary-nav__menu > li {
        width: 100%;
    }

    .lacc-primary-nav__entry {
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto;
        border: 1px solid rgba(255,255,255,0.16);
        background: rgba(255,255,255,0.08);
    }

    .lacc-primary-nav__menu > li:not(.menu-item-has-children) > a {
        width: 100%;
        border: 1px solid rgba(255,255,255,0.16);
        background: rgba(255,255,255,0.08);
        border-radius: 0;
    }

    .lacc-primary-nav__menu > li > a,
    .lacc-primary-nav__subtoggle {
        width: 100%;
        border-radius: 0;
    }

    .lacc-primary-nav__menu .sub-menu {
        position: static;
        min-width: 0;
        margin-top: 8px;
        box-shadow: none;
    }

    .lacc-primary-nav__menu > li:hover > .sub-menu,
    .lacc-primary-nav__menu > li:focus-within > .sub-menu {
        display: none;
    }

    .lacc-primary-nav__menu > li.is-open > .sub-menu {
        display: grid;
    }

    .lacc-primary-nav__menu > li:nth-last-child(-n + 2):not(.menu-item-has-children) > a {
        width: 100%;
    }
}
</style>

<nav class="lacc-primary-nav" aria-label="Primary navigation" data-lacc-primary-nav>
    <div class="lacc-primary-nav__bar">
        <a class="lacc-primary-nav__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/dist/images/LAL_Logo_Color_WhiteText_Horiz_CCFR.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        </a>

        <button type="button" class="lacc-primary-nav__toggle" aria-expanded="false" aria-controls="<?php echo esc_attr( $lacc_primary_nav_id ); ?>">
            <span>Menu</span>
            <span class="lacc-primary-nav__toggle-bars" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <div class="lacc-primary-nav__panel" id="<?php echo esc_attr( $lacc_primary_nav_id ); ?>">
            <?php wp_nav_menu( $lacc_primary_nav_menu_args ); ?>
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

        if (!button || !menu) {
            return;
        }

        item.classList.remove('is-open');
        button.setAttribute('aria-expanded', 'false');
        menu.hidden = true;
    }

    function openItem(item) {
        var button = item.querySelector(':scope > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle');
        var menu = item.querySelector(':scope > .sub-menu');

        if (!button || !menu) {
            return;
        }

        item.classList.add('is-open');
        button.setAttribute('aria-expanded', 'true');
        menu.hidden = false;
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

            submenu.hidden = true;

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
            button.setAttribute('aria-haspopup', 'true');
            button.setAttribute('aria-label', 'Toggle ' + link.textContent.trim() + ' submenu');
            button.innerHTML = '<svg viewBox="0 0 12 12" aria-hidden="true"><path d="M2 4.25 6 8l4-3.75" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';
            entry.appendChild(button);
        });
    }

    document.querySelectorAll('[data-lacc-primary-nav]').forEach(function (nav) {
        var panel = nav.querySelector('.lacc-primary-nav__panel');
        var toggle = nav.querySelector('.lacc-primary-nav__toggle');

        enhanceMenu(nav);

        var items = nav.querySelectorAll('.menu-item-has-children');

        if (toggle && panel) {
            toggle.addEventListener('click', function () {
                var isOpen = nav.classList.toggle('is-open');
                toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

                if (!isOpen) {
                    items.forEach(closeItem);
                }
            });
        }

        items.forEach(function (item) {
            var button = item.querySelector(':scope > .lacc-primary-nav__entry > .lacc-primary-nav__subtoggle');

            if (!button) {
                return;
            }

            button.addEventListener('click', function (event) {
                event.preventDefault();
                var shouldOpen = button.getAttribute('aria-expanded') !== 'true';
                closeSiblings(item);
                if (shouldOpen) {
                    openItem(item);
                } else {
                    closeItem(item);
                }
            });

            item.addEventListener('mouseenter', function () {
                if (window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
                    closeSiblings(item);
                    openItem(item);
                }
            });

            item.addEventListener('mouseleave', function () {
                if (window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
                    closeItem(item);
                }
            });

            item.addEventListener('focusout', function (event) {
                if (!item.contains(event.relatedTarget)) {
                    closeItem(item);
                }
            });
        });

        document.addEventListener('click', function (event) {
            if (!nav.contains(event.target)) {
                items.forEach(closeItem);
                nav.classList.remove('is-open');
                if (toggle) {
                    toggle.setAttribute('aria-expanded', 'false');
                }
            }
        });

        document.addEventListener('focusin', function (event) {
            if (!nav.contains(event.target)) {
                items.forEach(closeItem);
                nav.classList.remove('is-open');
                if (toggle) {
                    toggle.setAttribute('aria-expanded', 'false');
                }
            }
        });

        nav.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                items.forEach(closeItem);
                nav.classList.remove('is-open');
                if (toggle) {
                    toggle.setAttribute('aria-expanded', 'false');
                    toggle.focus();
                }
            }
        });
    });
}());
</script>