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

$background_video_h1 = get_field('background_video_h1');
$background_video_h2 = get_field('background_video_h2');
$background_video_button_url = get_field('background_video_button_url');
$background_video_button_label = get_field('background_video_button_label');
$background_video_closure_notice_show = get_field('background_video_closure_notice_show');
$background_video_closure_notice = get_field('background_video_closure_notice');
?>

<style>
.vid-container-overflow {
    overflow: hidden;
}

.video-container {
    position: relative;
}

.video-hero-text-background-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
}

.video-hero-text-container {
    position: relative;
    z-index: 3;
}

.background-video-toggle {
    position: absolute;
    bottom: 16px;
    right: 16px;
    z-index: 30;
    padding: 12px 14px;
    background: rgba(0, 0, 0, 0.65);
    color: #fff;
    border: 0;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

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

        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                <div class="wistia_embed wistia_async_<?php echo esc_attr( $background_video_wistia_id ?: '4e2kjpftga' ); ?> <?php echo esc_attr( $wistia_background_class_options ); ?>" style="height:100%;position:relative;width:100%;">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video-hero-text-background-overlay">
    <button
        id="background-video-playpause"
        class="background-video-toggle"
        aria-label="Pause background video"
        title="Pause background video"
    >⏸</button>

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
                button.textContent = playing ? '⏸' : '▶';
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
