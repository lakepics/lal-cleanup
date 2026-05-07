<?php

    echo '<style>
        .header__heading {
            margin-top: 0 !important;
            margin-bottom: 24px;
        }
        .header__heading--subheading {
            margin: 0;
        }
        .gallery__controls {
            margin-top: 0;
            margin-bottom: 26px;
        }
        .gallery__controls .button-group {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 10px 12px;
            text-align: center;
        }
        .gallery__controls .filter-heading {
            display: none;
        }
        .gallery__controls button {
            padding: 8px 13px;
            border: 1px solid rgba(81,83,74,0.35);
            border-radius: 999px;
            background: transparent;
            color: var(--lacc-color-ink);
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .06em;
            line-height: 1.2;
            text-transform: uppercase;
            transition: background-color .2s ease, color .2s ease, border-color .2s ease;
        }
        .gallery__controls button:hover,
        .gallery__controls button:focus {
            background: rgba(81,83,74,0.08);
            border-color: var(--lacc-color-ink);
            color: var(--lacc-color-ink);
            outline: none;
        }
        .gallery__controls button.is-active {
            background: var(--lacc-color-ink);
            border-color: var(--lacc-color-ink);
            color: #fff;
        }
        .gallery__controls button.is-active:hover,
        .gallery__controls button.is-active:focus {
            background: #3a3c34;
            border-color: #3a3c34;
            color: #fff;
        }
        .lacc-gallery {
            width: 100%;
        }
        .gallery__sizer {
            width: 100%;
        }
        @media (min-width: 768px) {
            .gallery__sizer { width: 50%; }
        }
        @media (min-width: 992px) {
            .gallery__sizer { width: 33.33%; }
        }
        .gallery__item {
            width: 100%;
            margin-bottom: 24px;
        }
        @media (min-width: 768px) {
            .gallery__item { width: 50%; }
        }
        @media (min-width: 992px) {
            .gallery__item { width: 33.33%; }
        }
        .gallery__item > a {
            display: block;
            position: relative;
        }
        .gallery__item > a img {
            display: block;
            width: 100%;
            height: auto;
        }
        .gallery__item .gallery__meta {
            margin-top: 6px;
            min-height: 41px;
            text-align: center;
        }
        .gallery__item .caption {
            display: block;
            margin: 0;
            color: #51534a;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.45;
            text-align: center;
        }
        .gallery__item > a .photo-credit {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            height: 18px;
            max-width: calc(100% - 12px);
            margin: 0;
            padding: 0 6px;
            border: 0;
            border-radius: 0;
            background: rgba(255, 255, 255, 0.94);
            box-shadow: none;
            color: #6f6658;
            font-size: 9px;
            font-style: normal;
            font-weight: 500;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>';

    echo '<script>
        jQuery(function($) {
            // Filter button active state + isotope filter
            var $filters = $(".category-filters");
            $filters.on("click", "button", function() {
                $(this).addClass("is-active").siblings("button").removeClass("is-active");
                var filterValue = $(this).attr("data-filter");
                $gallery.isotope({ filter: filterValue });
            });

            // Init isotope on .lacc-gallery (renamed from .gallery to avoid WP block CSS conflict)
            var $gallery = $(".lacc-gallery");
            $gallery.imagesLoaded(function() {
                $gallery.isotope({
                    itemSelector: ".gallery__item",
                    layoutMode: "masonry",
                    percentPosition: true,
                    masonry: { columnWidth: ".gallery__sizer" }
                });
            });

            // Position control bar inside image top edge, caption bar inside image bottom edge
            var lacc_fbTimer;

            function lacc_positionFancyboxBars() {
                var $img = $(".fancybox-slide--current .fancybox-image");
                if (!$img.length) return;
                var rect = $img[0].getBoundingClientRect();
                if (!rect.width || !rect.height) return;
                var $controls = $(".fancybox-controls");
                var $caption  = $(".fancybox-caption-wrap");
                var capH = $caption.outerHeight() || 44;
                $controls.css({ top: Math.round(rect.top), left: Math.round(rect.left), width: Math.round(rect.width), transform: "none", bottom: "auto" });
                $caption.css({ top: Math.round(rect.bottom) - capH, left: Math.round(rect.left), width: Math.round(rect.width), transform: "none", bottom: "auto" });
            }

            // afterLoad fires on every slide (afterShow never fires in this Fancybox build)
            $.extend(true, $.fancybox.defaults, {
                afterLoad: function(instance, current) {
                    clearTimeout(lacc_fbTimer);
                    // afterLoad fires before the slide animation — delay to final position
                    lacc_fbTimer = setTimeout(lacc_positionFancyboxBars, 350);
                }
            });

            var lacc_fbResizeTimer;
            $(window).on("resize.fancybox-bars", function() {
                clearTimeout(lacc_fbResizeTimer);
                lacc_fbResizeTimer = setTimeout(function() {
                    if ($(".fancybox-slide--current .fancybox-image").length) {
                        lacc_positionFancyboxBars();
                    }
                }, 150);
            });
        });
    </script>';

    if ( get_field('intro_copy')) {
        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col-xs-12">' . get_field('intro_copy') . '</div>';
            echo '</div>';
        echo '</div>';
    }
    if ( get_field('gallery')) {
        echo '<div class="container">';
            echo '<div class="row gallery__controls">';
                echo '<div class="col-md-12 button-group category-filters">';
                $categories = ['Accommodations','Activities','Dining','Facilities','Lake Arrowhead','Meetings','Weddings'];
                echo '<button class="is-active" data-filter="*">All Photos</button>';
                    foreach ( $categories as $value ) {
                        $class = '.' . strtolower($value);
                        $class = preg_replace("/[\s_]/", "-", $class);
                        echo '<button data-filter="' . $class . '">' . $value . '</button>';
                    }
                echo '</div>';
            echo '</div>';
        echo '<div class="row gallery__wrapper">';
            echo '<div class="lacc-gallery">';
            echo '<div class="gallery__sizer"></div>';
            if ( have_rows('gallery') ):
                while ( have_rows('gallery') ) : the_row();
                $img_crop = get_sub_field('crop_size');
                    $col_val = 'col-xs-12 col-sm-6 col-md-4';
                    $category = get_sub_field('category');
                    $caption_text = lacc_get_gallery_caption(array(
                        get_sub_field('caption'),
                        get_sub_field('image_full_size'),
                        get_sub_field('image'),
                    ));
                    $caption_attributes = lacc_get_gallery_caption_attributes( $caption_text );
                    $caption_display = esc_html( $caption_text );
                    if ( preg_match( '/\S+\s+\S+/', $caption_text ) ) {
                        $caption_display = preg_replace( '/\s+([^\s]+)\s+([^\s]+)$/u', ' $1&nbsp;$2', $caption_display );
                    }
                    $full_size = get_sub_field('image_full_size');
                    if ( get_sub_field('video_url') ) { $full_size = get_sub_field('video_url'); }
                echo '<div class="gallery__item ' . esc_attr( trim( $col_val . ' ' . $img_crop . ' ' . $category ) ) . '"><a data-fancybox="gallery"' . $caption_attributes . ' href="' . esc_url( $full_size ) . '"><img class="img-responsive" src="' . esc_url( get_sub_field('image') ) . '" alt="' . esc_attr( $caption_text ) . '">';
                if (get_sub_field('photo_credit')) { 
                    $photo_credit = get_sub_field('photo_credit');
                    echo '<span class="photo-credit">Photo Credit: ' . esc_html( $photo_credit ) . '</span>'; 
                }
                echo '</a><div class="gallery__meta"><span class="caption">' . $caption_display . '</span></div></div>';
                endwhile;
            endif;
            echo '</div>';
        echo '</div>';
    echo '</div>';
    }

?>
