<?php
$background_video_url = trim( get_field('background_video_url') ?: 'https://player.vimeo.com/video/1115571207' );
$background_video_library_url = trim( get_field('background_video_library_url') ?: 'https://player.vimeo.com/api/player.js' );
$background_video_h1 = get_field('background_video_h1');
$background_video_h2 = get_field('background_video_h2');
$background_video_button_url = get_field('background_video_button_url');
$background_video_button_label = get_field('background_video_button_label');
$background_video_closure_notice_show = get_field('background_video_closure_notice_show');
$background_video_closure_notice = get_field('background_video_closure_notice');

$vimeo_src = add_query_arg(
    array(
        'badge' => 0,
        'autopause' => 0,
        'player_id' => 0,
        'app_id' => 58479,
        'autoplay' => 1,
        'muted' => 1,
        'loop' => 1,
        'background' => 1,
        'playsinline' => 1,
        'controls' => 0,
        'title' => 0,
        'byline' => 0,
        'portrait' => 0,
    ),
    $background_video_url
);
?>

<style>
.background-video-vimeo-wrapper {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.background-video-vimeo {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100vw;
    height: 56.25vw;
    min-width: 100%;
    min-height: 100%;
    max-width: none;
    border: 0;
    display: block;
    transform: translate(-50%, -50%);
}

.vid-container-overflow {
    position: absolute;
    inset: 0;
    overflow: hidden;
    height: 100%;
}

.video-container {
    position: absolute;
    inset: 0;
    height: 100%;
    padding: 0 !important;
    overflow: hidden;
}

@media only screen and (max-aspect-ratio: 16/9) {
    .background-video-vimeo {
        width: 177.78vh;
        height: 100vh;
    }
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
</style>

<div class="vid-container-overflow">
    <div class="video-container">
        <div class="background-video-vimeo-wrapper">
            <iframe
                class="background-video-vimeo"
                src="<?php echo esc_url( $vimeo_src ); ?>"
                frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                title="UCLA Lake Arrowhead Lodge Weddings"
            ></iframe>
        </div>
        <script src="<?php echo esc_url( $background_video_library_url ); ?>"></script>
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
    (function() {
        var vimeoIframe = document.querySelector('.background-video-vimeo');
        var button = document.getElementById('background-video-playpause');

        if (!vimeoIframe || !window.Vimeo || vimeoIframe.src.indexOf('vimeo.com') === -1) {
            return;
        }

        try {
            var vimeoPlayer = new Vimeo.Player(vimeoIframe);

            vimeoPlayer.setVolume(0).then(function() {
                return vimeoPlayer.play();
            }).catch(function() {
                // Autoplay may still be blocked in some browsers.
            });

            function updateButton(state) {
                if (!button) {
                    return;
                }
                var playing = state === 'playing';
                button.textContent = playing ? '⏸' : '▶';
                var label = playing ? 'Pause background video' : 'Play background video';
                button.setAttribute('aria-label', label);
                button.setAttribute('title', label);
            }

            if (button) {
                vimeoPlayer.getPaused().then(function(paused) {
                    updateButton(paused ? 'paused' : 'playing');
                });
                vimeoPlayer.on('play', function() {
                    updateButton('playing');
                });
                vimeoPlayer.on('pause', function() {
                    updateButton('paused');
                });
                button.addEventListener('click', function() {
                    vimeoPlayer.getPaused().then(function(paused) {
                        if (paused) {
                            vimeoPlayer.play();
                        } else {
                            vimeoPlayer.pause();
                        }
                    });
                });
            }
        } catch (e) {
            console.warn('Vimeo player init failed:', e);
        }
    })();
</script>
