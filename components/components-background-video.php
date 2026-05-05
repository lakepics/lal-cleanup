<?php
$background_video_url = trim( get_field('background_video_url') ?: '' );
$background_video_library_url = trim( get_field('background_video_library_url') ?: '' );
$background_video_wistia_id = '';

if ( $background_video_url ) {
    if ( preg_match( '/medias\/([a-z0-9]+)(?:\.jsonp)?/i', $background_video_url, $matches ) ) {
        $background_video_wistia_id = $matches[1];
    } elseif ( preg_match( '/wistia_async_([a-z0-9]+)/i', $background_video_url, $matches ) ) {
        $background_video_wistia_id = $matches[1];
    } elseif ( preg_match( '/([a-z0-9]+)$/i', $background_video_url, $matches ) ) {
        $background_video_wistia_id = $matches[1];
    }
}

$wistia_background_class_options = 'seo=false videoFoam=true autoPlay=true muted=true silentAutoPlay=true playsinline=true playbar=false playButton=false smallPlayButton=false fullscreenButton=false settingsControl=false volumeControl=false playbackRateControl=false qualityControl=false playPauseNotifier=false controlsVisibleOnLoad=false copyLinkAndThumbnailEnabled=false endVideoBehavior=loop';

$background_video_h1 = get_field('background_video_h1') ?: 'Get Away & Get Inspired';
$background_video_h2 = get_field('background_video_h2') ?: 'The UCLA Lake Arrowhead Lodge’s inspiring surroundings provide a unique environment for solo adventurers, vacationing couples and families, and those attending conferences and retreats. Book your overnight stay or event today!';
$background_video_button_url = get_field('background_video_button_url') ?: 'https://reservations.travelclick.com/112652#/guestsandrooms';
$background_video_button_label = get_field('background_video_button_label') ?: 'Book Your Stay';
$background_video_closure_notice_show = get_field('background_video_closure_notice_show');
$background_video_closure_notice = get_field('background_video_closure_notice');
?>

<div class="background-video-hero">
    <style>
        .background-video-hero {
            position: relative;
            overflow: hidden;
            background: #000;
            height: 70vh;
            min-height: 620px;
        }

        .background-video-hero .vid-container-overflow {
            height: 70vh !important;
            min-height: 620px;
        }

        .background-video-hero .video-container {
            padding-bottom: 70vh !important;
            height: 0;
            min-height: 620px;
        }

        .background-video-hero .wistia_responsive_padding,
        .background-video-hero .wistia_responsive_wrapper,
        .background-video-hero .wistia_embed,
        .background-video-hero .wistia_embed > div,
        .background-video-hero .wistia_embed > div > div > div:nth-child(2),
        .background-video-hero .wistia_embed .w-chrome > div > div:nth-child(2) > div:nth-child(2) {
            height: 70vh !important;
            min-height: 620px;
        }

        .background-video-hero .w-video-wrapper video {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            margin-left: 0 !important;
        }

        .background-video-hero .video-hero-text-background-overlay {
            position: absolute;
            inset: 0;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 160px 24px 96px;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            pointer-events: none;
        }

        .background-video-hero .video-hero-text-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .background-video-hero .hero-slider-content {
            width: min(100%, 540px);
            pointer-events: auto;
        }

        .background-video-hero .background-video-toggle {
            position: relative;
            z-index: 3;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 0;
            min-height: 0;
            width: auto;
            padding: .85em 1.45em;
            margin: 28px 0 0;
            border: 1px solid rgba(255,255,255,0.75);
            border-radius: 0;
            background: transparent;
            cursor: pointer;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            line-height: 1.1;
            text-transform: uppercase;
            color: #ffffff;
            transition: background-color .2s ease, border-color .2s ease, color .2s ease;
            pointer-events: auto;
        }

        .background-video-hero .background-video-toggle:hover,
        .background-video-hero .background-video-toggle:focus {
            background: rgba(255,255,255,0.12);
            border-color: #ffffff;
            color: #ffffff;
        }

        .background-video-hero .background-video-toggle:focus-visible {
            outline: 2px solid #ffffff;
            outline-offset: 2px;
        }

        .background-video-hero .background-video-toggle__label {
            display: inline-block;
        }

        .background-video-hero .hero-button {
            pointer-events: auto;
        }

        @media only screen and (max-width: 767px) {
            .background-video-hero {
                height: 72vh;
                min-height: 0;
            }

            .background-video-hero .vid-container-overflow {
                height: 72vh !important;
                min-height: 0;
            }

            .background-video-hero .video-container {
                padding-bottom: 72vh !important;
                min-height: 0;
            }

            .background-video-hero .wistia_responsive_padding,
            .background-video-hero .wistia_responsive_wrapper,
            .background-video-hero .wistia_embed,
            .background-video-hero .wistia_embed > div,
            .background-video-hero .wistia_embed > div > div > div:nth-child(2),
            .background-video-hero .wistia_embed .w-chrome > div > div:nth-child(2) > div:nth-child(2) {
                height: 72vh !important;
                min-height: 0;
            }

            .background-video-hero .video-hero-text-background-overlay {
                padding: 96px 18px 72px;
            }

            .background-video-hero .video-hero-text-container,
            .background-video-hero .hero-slider-content {
                width: 100%;
                max-width: 680px;
            }

            .background-video-hero .hero-slider-content {
                max-width: 100%;
            }
        }
    </style>

    <div class="vid-container-overflow">
        <div class="video-container">
    <script>
        window._wq = window._wq || [];
        <?php if ( $background_video_wistia_id ) : ?>
        _wq.push({
            id: "<?php echo esc_js( $background_video_wistia_id ); ?>",
            options: {
                videoFoam: true,
                autoPlay: true,
                muted: true,
                silentAutoPlay: true,
                playsinline: true,
                playbar: false,
                playButton: false,
                smallPlayButton: false,
                fullscreenButton: false,
                settingsControl: false,
                volumeControl: false,
                playbackRateControl: false,
                qualityControl: false,
                playPauseNotifier: false,
                controlsVisibleOnLoad: false,
                copyLinkAndThumbnailEnabled: false,
                endVideoBehavior: "loop"
            }
        });
        <?php endif; ?>
    </script>
    <script src="<?php echo esc_url( $background_video_url ?: 'https://fast.wistia.com/embed/medias/4e2kjpftga.jsonp' ); ?>" async></script>
    <script src="<?php echo esc_url( $background_video_library_url ?: 'https://fast.wistia.com/assets/external/E-v1.js' ); ?>" async></script>
    <style>
        .video-container .wistia_embed .w-bottom-bar,
        .video-container .wistia_embed .click-for-sound-btn,
        .video-container .wistia_embed a[aria-label*="Wistia Logo"],
        .video-container .wistia_embed .w-wistia-logo {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
            pointer-events: none !important;
        }
    </style>
    <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_<?php echo esc_attr( $background_video_wistia_id ?: '4e2kjpftga' ); ?> <?php echo esc_attr( $wistia_background_class_options ); ?>" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>

        </div>
    </div>
    <div class="video-hero-text-background-overlay">
        <div class="video-hero-text-container">
            <div class="hero-slider-content">
                <?php if ( $background_video_h1 ) : ?>
                    <h1 class="hero-slider-title" data-animation="animated"><?php echo esc_html( $background_video_h1 ); ?></h1>
                <?php endif; ?>
                <?php if ( $background_video_h2 ) : ?>
                    <h2 class="hero-slider-subheading" data-animation="animated"><?php echo esc_html( $background_video_h2 ); ?></h2>
                <?php endif; ?>
                <?php if ( $background_video_closure_notice_show && $background_video_closure_notice ) : ?>
                    <div class="closure-notice-container" style="margin-top: 25px !important; margin-bottom: 12px !important; opacity: 0.9; background: #1a1a1a9e; text-align: left; padding: 15px 20px 15px 20px; max-width: 600px;">
                        <?php echo $background_video_closure_notice; ?>
                    </div>
                <?php endif; ?>
                <?php if ( $background_video_button_url && $background_video_button_label ) : ?>
                    <a class="hero-button" href="<?php echo esc_url( $background_video_button_url ); ?>" tabindex="0"><?php echo esc_html( $background_video_button_label ); ?></a>
                <?php endif; ?>
                <button
                    id="background-video-playpause"
                    class="background-video-toggle is-playing"
                    aria-label="Pause background video"
                    title="Pause background video"
                    type="button"
                >
                    <span class="background-video-toggle__label">Pause</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    window._wq = window._wq || [];
    window._wq.push({
        id: "<?php echo esc_js( $background_video_wistia_id ?: '4e2kjpftga' ); ?>",
        onReady: function(video) {
            var button = document.getElementById('background-video-playpause');
            if (!button) {
                return;
            }

            function updateButton() {
                var playing = video.state() === 'playing';
                button.classList.toggle('is-playing', playing);
                button.classList.toggle('is-paused', !playing);
                var labelNode = button.querySelector('.background-video-toggle__label');
                if (labelNode) {
                    labelNode.textContent = playing ? 'Pause' : 'Play';
                }
                var label = playing ? 'Pause background video' : 'Play background video';
                button.setAttribute('aria-label', label);
                button.setAttribute('title', label);
            }

            video.bind('play', updateButton);
            video.bind('pause', updateButton);
            button.addEventListener('click', function() {
                if (video.state() === 'playing') {
                    video.pause();
                } else {
                    video.play();
                }
            });
            updateButton();
        }
    });
</script>
