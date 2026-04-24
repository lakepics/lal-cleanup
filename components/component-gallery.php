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
            border: 1px solid rgba(201,151,58,0.40);
            border-radius: 999px;
            background: transparent;
            color: #946E29;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .06em;
            line-height: 1.2;
            text-transform: uppercase;
            transition: background-color .2s ease, color .2s ease, border-color .2s ease;
        }
        .gallery__controls button:hover,
        .gallery__controls button:focus {
            background: rgba(201,151,58,0.10);
            border-color: #946E29;
            color: #7b5a20;
            outline: none;
        }
        .gallery__controls button.is-active {
            background: #946E29;
            border-color: #946E29;
            color: #fff;
        }
        .gallery__controls button.is-active:hover,
        .gallery__controls button.is-active:focus {
            background: #7b5a20;
            border-color: #7b5a20;
            color: #fff;
        }
        .gallery__item {
            margin-bottom: 30px;
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
            margin-top: 12px;
            min-height: 3.2em;
            padding-bottom: 24px;
            text-align: center;
        }
        .gallery__item .caption {
            display: block;
            min-height: 2.8em;
            margin: 0 auto 24px;
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
            var $filters = $(".category-filters");
            $filters.on("click", "button", function() {
                $(this).addClass("is-active").siblings("button").removeClass("is-active");
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
            echo '<div class="gallery">';
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
                echo '<div class="gallery__item ' . esc_attr( trim( $col_val . ' ' . $img_crop . ' ' . $category ) ) . '"><a data-fancybox="gallery"' . $caption_attributes . ' href="' . esc_url( $full_size ) . '"><span class="enlarge">View Larger</span><img class="img-responsive" src="' . esc_url( get_sub_field('image') ) . '" alt="' . esc_attr( $caption_text ) . '">';
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
