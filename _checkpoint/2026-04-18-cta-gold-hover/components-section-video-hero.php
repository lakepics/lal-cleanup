<?php
$background_video_source = strtolower( trim( get_sub_field('background_video_source') ?: 'vimeo' ) );
$background_video_url = trim( get_sub_field('background_video_url') ?: '' );
$background_video_library_url = trim( get_sub_field('background_video_library_url') ?: '' );
$section_eyebrow = get_sub_field('section_eyebrow');
$background_video_h1 = get_sub_field('background_video_h1');
$background_video_h2 = get_sub_field('background_video_h2');
$background_video_button_url = get_sub_field('background_video_button_url');
$background_video_button_label = get_sub_field('background_video_button_label');
$background_video_closure_notice_show = get_sub_field('background_video_closure_notice_show');
$background_video_closure_notice = get_sub_field('background_video_closure_notice');
$hero_height = trim( (string) get_sub_field('hero_height') );
$section_anchor_id = strtolower( trim( (string) get_sub_field('section_anchor_id') ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$subheading_font_family = strtolower( trim( (string) get_sub_field('heading_font_family') ) );
$subheading_font_weight = trim( (string) get_sub_field('heading_font_weight') );
$hero_heading_color = trim( (string) get_sub_field('hero_heading_color') );
$hero_subheading_color = trim( (string) get_sub_field('hero_subheading_color') );
$eyebrow_color = trim( (string) get_sub_field('eyebrow_color') );
$eyebrow_font_family = strtolower( trim( (string) get_sub_field('eyebrow_font_family') ) );
$eyebrow_font_weight = trim( (string) get_sub_field('eyebrow_font_weight') );
$eyebrow_font_size = trim( (string) get_sub_field('eyebrow_font_size') );
$eyebrow_background_color = trim( (string) get_sub_field('eyebrow_background_color') );
$eyebrow_border = trim( (string) get_sub_field('eyebrow_border') );
$eyebrow_padding = trim( (string) get_sub_field('eyebrow_padding') );
$eyebrow_border_radius = trim( (string) get_sub_field('eyebrow_border_radius') );
$factoid_value_font_family = strtolower( trim( (string) get_sub_field('factoid_value_font_family') ) );
$factoid_value_font_weight = trim( (string) get_sub_field('factoid_value_font_weight') );
$factoid_value_color = trim( (string) get_sub_field('factoid_value_color') );
$factoid_label_font_family = strtolower( trim( (string) get_sub_field('factoid_label_font_family') ) );
$factoid_label_font_weight = trim( (string) get_sub_field('factoid_label_font_weight') );
$factoid_label_color = trim( (string) get_sub_field('factoid_label_color') );
$section_video_hero_id = $section_anchor_id ?: 'section-video-hero-' . uniqid();
$hero_factoids = array();
$hero_cta_buttons = array();

if ( ! in_array( $subheading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $subheading_font_family = 'haarlem';
}

if ( ! in_array( $subheading_font_weight, array( '300', '400', '500', '600', '700' ), true ) ) {
    $subheading_font_weight = '600';
}

if ( ! in_array( $factoid_value_font_family, array( 'default', 'haarlem', 'freight-big-pro' ), true ) ) {
    $factoid_value_font_family = 'default';
}

if ( ! in_array( $factoid_value_font_weight, array( '300', '400', '500', '600', '700' ), true ) ) {
    $factoid_value_font_weight = '300';
}

if ( ! in_array( $factoid_label_font_family, array( 'default', 'haarlem', 'freight-big-pro' ), true ) ) {
    $factoid_label_font_family = 'default';
}

if ( ! in_array( $factoid_label_font_weight, array( '300', '400', '500', '600', '700' ), true ) ) {
    $factoid_label_font_weight = '600';
}

if ( ! in_array( $eyebrow_font_family, array( 'default', 'haarlem', 'freight-big-pro' ), true ) ) {
    $eyebrow_font_family = 'default';
}

if ( ! in_array( $eyebrow_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $eyebrow_font_weight = '600';
}

$subheading_font_stack = 'freight-big-pro' === $subheading_font_family ? '"freight-big-pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$factoid_value_font_stack = 'freight-big-pro' === $factoid_value_font_family ? '"freight-big-pro", Georgia, serif' : ( 'haarlem' === $factoid_value_font_family ? 'HaarlemDeco, Arial, Helvetica, sans-serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif' );
$factoid_label_font_stack = 'freight-big-pro' === $factoid_label_font_family ? '"freight-big-pro", Georgia, serif' : ( 'haarlem' === $factoid_label_font_family ? 'HaarlemDeco, Arial, Helvetica, sans-serif' : 'inherit' );
$eyebrow_font_stack = 'freight-big-pro' === $eyebrow_font_family ? '"freight-big-pro", Georgia, serif' : ( 'haarlem' === $eyebrow_font_family ? 'HaarlemDeco, Arial, Helvetica, sans-serif' : 'inherit' );
$hero_heading_color = $hero_heading_color ?: 'var(--lacc-color-cream)';
$hero_subheading_color = $hero_subheading_color ?: 'rgba(246,243,237,0.82)';
$eyebrow_color = $eyebrow_color ?: 'var(--lacc-color-gold-soft)';
$eyebrow_background_color = $eyebrow_background_color ?: 'transparent';
$eyebrow_border = $eyebrow_border ?: '1px solid rgba(201,151,58,0.40)';
$eyebrow_padding = $eyebrow_padding ?: '8px 18px';
$eyebrow_font_size = $eyebrow_font_size ?: '11px';
$eyebrow_border_radius = $eyebrow_border_radius ?: '999px';
$factoid_value_color = $factoid_value_color ?: 'var(--lacc-color-gold-soft)';
$factoid_label_color = $factoid_label_color ?: 'rgba(246,243,237,0.78)';

if ( have_rows( 'hero_factoids' ) ) {
    while ( have_rows( 'hero_factoids' ) ) {
        the_row();
        $factoid_value = trim( (string) get_sub_field( 'factoid_value' ) );
        $factoid_label = trim( (string) get_sub_field( 'factoid_label' ) );

        if ( '' !== $factoid_value || '' !== $factoid_label ) {
            $hero_factoids[] = array(
                'value' => $factoid_value,
                'label' => $factoid_label,
            );
        }
    }
}

if ( have_rows( 'hero_cta_buttons' ) ) {
    while ( have_rows( 'hero_cta_buttons' ) ) {
        the_row();
        $button_label = trim( (string) get_sub_field( 'button_label' ) );
        $button_url = trim( (string) get_sub_field( 'button_url' ) );
        $button_style = strtolower( trim( (string) get_sub_field( 'button_style' ) ) );

        if ( $button_label && $button_url ) {
            $hero_cta_buttons[] = array(
                'label' => $button_label,
                'url' => $button_url,
                'style' => 'outline' === $button_style ? 'outline' : 'primary',
            );
        }
    }
}

if ( empty( $hero_cta_buttons ) && $background_video_button_url && $background_video_button_label ) {
    $hero_cta_buttons[] = array(
        'label' => $background_video_button_label,
        'url' => $background_video_button_url,
        'style' => 'primary',
    );
}

if ( ! $hero_height ) {
    $hero_height = '70vh';
}

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

$default_vimeo_url = 'https://player.vimeo.com/video/1115571207';
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
    $background_video_url ?: $default_vimeo_url
);

$section_video_hero_styles = array(
    'height:' . $hero_height,
    '--svh-overlay-fill:rgba(81, 83, 74, 0.5)',
    '--svh-title-color:' . $hero_heading_color,
    '--svh-subheading-color:' . $hero_subheading_color,
    '--svh-subheading-font:' . $subheading_font_stack,
    '--svh-subheading-weight:' . $subheading_font_weight,
    '--svh-eyebrow-color:' . $eyebrow_color,
    '--svh-eyebrow-font:' . $eyebrow_font_stack,
    '--svh-eyebrow-weight:' . $eyebrow_font_weight,
    '--svh-eyebrow-size:' . $eyebrow_font_size,
    '--svh-eyebrow-bg:' . $eyebrow_background_color,
    '--svh-eyebrow-border:' . $eyebrow_border,
    '--svh-eyebrow-padding:' . $eyebrow_padding,
    '--svh-eyebrow-radius:' . $eyebrow_border_radius,
    '--svh-factoid-value-font:' . $factoid_value_font_stack,
    '--svh-factoid-value-weight:' . $factoid_value_font_weight,
    '--svh-factoid-value-color:' . $factoid_value_color,
    '--svh-factoid-label-font:' . $factoid_label_font_stack,
    '--svh-factoid-label-weight:' . $factoid_label_font_weight,
    '--svh-factoid-label-color:' . $factoid_label_color
);
?>

<style>
.section-video-hero {
    position: relative;
    height: auto;
    min-height: 320px;
    overflow: hidden;
    background: var(--lacc-color-ink);
}

.section-video-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    z-index: 1;
    background: var(--svh-overlay-fill, rgba(81, 83, 74, 0.5));
    mix-blend-mode: multiply;
}

.section-video-hero::after {
    content: none;
}

.section-video-hero .vid-container-overflow,
.section-video-hero .video-container,
.section-video-hero .background-video-vimeo-wrapper,
.section-video-hero .wistia_responsive_padding,
.section-video-hero .wistia_responsive_wrapper,
.section-video-hero .video-hero-text-background-overlay {
    height: 100%;
}

.section-video-hero .vid-container-overflow {
    position: absolute;
    inset: 0;
    z-index: 0;
    overflow: hidden;
}

.section-video-hero .video-container {
    position: absolute;
    inset: 0;
    padding: 0 !important;
    height: 100% !important;
    overflow: hidden;
}

.section-video-hero .background-video-vimeo-wrapper,
.section-video-hero .wistia_responsive_padding,
.section-video-hero .wistia_responsive_wrapper {
    position: absolute !important;
    inset: 0;
    width: 100% !important;
    height: 100% !important;
    padding: 0 !important;
    overflow: hidden;
}

.section-video-hero .background-video-vimeo {
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

.section-video-hero .wistia_embed,
.section-video-hero .wistia_embed > div,
.section-video-hero .wistia_embed > div > div,
.section-video-hero .wistia_embed video,
.section-video-hero .w-video-wrapper,
.section-video-hero .w-video-wrapper video {
    width: 100% !important;
    height: 100% !important;
}

.section-video-hero .wistia_embed video,
.section-video-hero .w-video-wrapper video {
    object-fit: cover !important;
    object-position: center center !important;
}

@media only screen and (max-aspect-ratio: 16/9) {
    .section-video-hero .background-video-vimeo {
        width: 177.78vh;
        height: 100vh;
    }
}

.section-video-hero .video-hero-text-background-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 110px 24px 70px;
    text-align: center;
}

.section-video-hero .video-hero-text-container {
    position: relative;
    z-index: 3;
    top: auto;
    left: auto;
    width: 100% !important;
    max-width: 1120px !important;
    padding-top: 0;
    margin: 0 auto;
    transform: none;
    -webkit-transform: none;
}

.section-video-hero .hero-slider-content {
    width: 100%;
    max-width: 970px;
    margin: 0 auto;
}

.section-video-hero .hero-slider-title {
    color: var(--svh-title-color, var(--lacc-color-cream));
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(52px, 8vw, 96px);
    font-weight: 300;
    line-height: 0.98;
    letter-spacing: .04em;
    margin: 0 0 18px;
    text-align: center;
}

.section-video-hero .hero-slider-subheading {
    margin: 0 auto 28px;
    max-width: 780px;
    text-align: center;
}

.section-video-hero .hero-slider-subheading,
.section-video-hero .hero-slider-subheading p,
.section-video-hero .hero-slider-subheading li {
    color: var(--svh-subheading-color, rgba(246,243,237,0.82));
    font-family: var(--svh-subheading-font, Georgia, serif) !important;
    font-size: clamp(20px, 2.4vw, 34px);
    font-style: normal;
    font-weight: var(--svh-subheading-weight, 600) !important;
    line-height: 1.35;
    text-align: center;
}

.section-video-hero .hero-slider-subheading p:last-child {
    margin-bottom: 0;
}

.section-video-hero .hero-slider-subheading em,
.section-video-hero .hero-slider-subheading i {
    font-style: italic !important;
}

.section-video-hero .hero-slider-subheading strong,
.section-video-hero .hero-slider-subheading b {
    font-weight: 700 !important;
}

.section-video-hero .hero-factoids {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 18px 26px;
    margin: 30px auto 34px;
    max-width: 1120px;
}

.section-video-hero .hero-factoid {
    min-width: 120px;
    padding: 0 10px;
}

.section-video-hero .hero-factoid__value {
    display: block;
    margin-bottom: 4px;
    color: var(--svh-factoid-value-color, var(--lacc-color-gold-soft));
    font-family: var(--svh-factoid-value-font, HaarlemDeco, Arial, Helvetica, sans-serif) !important;
    font-size: clamp(34px, 4.2vw, 58px);
    font-weight: var(--svh-factoid-value-weight, 300) !important;
    line-height: 1;
}

.section-video-hero .hero-factoid__label {
    display: block;
    color: var(--svh-factoid-label-color, rgba(246,243,237,0.78));
    font-family: var(--svh-factoid-label-font, inherit) !important;
    font-weight: var(--svh-factoid-label-weight, 600) !important;
    letter-spacing: .18em;
    font-size: 11px;
    line-height: 1.4;
}

.section-video-hero .hero-button-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 18px 24px;
    margin-top: 6px;
}

.section-video-hero .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 260px;
    min-height: 58px;
    background: var(--lacc-color-gold-soft);
    color: var(--lacc-color-gold-ink);
    border: 1px solid var(--lacc-color-gold-soft);
    padding: 16px 32px;
    letter-spacing: .18em;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: all .2s ease;
}

.section-video-hero .hero-button--outline {
    background: transparent;
    color: var(--lacc-color-cream);
    border-color: rgba(247,243,236,0.45);
}

.section-video-hero .hero-button:hover,
.section-video-hero .hero-button:focus {
    opacity: 0.92;
    text-decoration: none;
}

.section-video-hero .background-video-toggle {
    position: absolute;
    bottom: 16px;
    right: 16px;
    z-index: 30;
    padding: 12px 14px;
    background: rgba(0,0,0,0.65);
    color: var(--lacc-color-white);
    border: 0;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    line-height: 1;
}

.section-video-hero__eyebrow {
    display: inline-block;
    margin-bottom: 28px;
    padding: var(--svh-eyebrow-padding, 8px 18px);
    border: var(--svh-eyebrow-border, 1px solid rgba(201,151,58,0.40));
    border-radius: var(--svh-eyebrow-radius, 999px);
    letter-spacing: .24em;
    font-size: var(--svh-eyebrow-size, 11px);
    line-height: 1.2;
    font-family: var(--svh-eyebrow-font, inherit);
    font-weight: var(--svh-eyebrow-weight, 600);
    color: var(--svh-eyebrow-color, var(--lacc-color-gold-soft));
    background: var(--svh-eyebrow-bg, transparent);
}

@media only screen and (max-width: 767px) {
    .section-video-hero .video-hero-text-background-overlay {
        align-items: center;
        justify-content: center;
        padding: 72px 18px 72px;
    }

    .section-video-hero .video-hero-text-container,
    .section-video-hero .hero-slider-content {
        width: 100%;
        max-width: 680px;
    }

    .section-video-hero .video-hero-text-container {
        margin-bottom: 60px;
    }

    .section-video-hero .hero-slider-title {
        font-size: 36px !important;
        line-height: 1.05 !important;
        margin-bottom: 14px;
    }

    .section-video-hero .hero-slider-subheading {
        font-size: 24px !important;
        line-height: 1.3 !important;
        margin-bottom: 22px;
    }

    .section-video-hero .hero-factoids {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 14px 0;
        margin: 22px auto 24px;
        max-width: 360px;
    }

    .section-video-hero .hero-factoid {
        width: 50%;
        min-width: 0;
        padding: 0 8px;
    }

    .section-video-hero .hero-factoid__value {
        font-size: 28px;
    }

    .section-video-hero .background-video-toggle {
        bottom: 12px;
        right: 12px;
    }
}
</style>

<div id="<?php echo esc_attr( $section_video_hero_id ); ?>" class="section-video-hero" style="<?php echo esc_attr( implode( ';', $section_video_hero_styles ) ); ?>;">
    <div class="vid-container-overflow">
        <div class="video-container">
            <?php if ( 'wistia' === $background_video_source ) : ?>
                <script>
                    window._wq = window._wq || [];
                    <?php if ( $background_video_wistia_id ) : ?>
                    _wq.push({
                        id: "<?php echo esc_js( $background_video_wistia_id ); ?>",
                        options: {
                            videoFoam: true,
                            endVideoBehavior: "loop"
                        }
                    });
                    <?php endif; ?>
                </script>
                <script src="<?php echo esc_url( $background_video_url ?: 'https://fast.wistia.com/embed/medias/4e2kjpftga.jsonp' ); ?>" async></script>
                <script src="<?php echo esc_url( $background_video_library_url ?: 'https://fast.wistia.com/assets/external/E-v1.js' ); ?>" async></script>
                <div class="wistia_responsive_padding" style="padding:0;position:absolute;inset:0;height:100%;">
                    <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                        <div class="wistia_embed wistia_async_<?php echo esc_attr( $background_video_wistia_id ?: '4e2kjpftga' ); ?> seo=false videoFoam=true" style="height:100%;position:relative;width:100%;">&nbsp;</div>
                    </div>
                </div>
            <?php else : ?>
                <div class="background-video-vimeo-wrapper">
                    <iframe
                        class="background-video-vimeo"
                        src="<?php echo esc_url( $vimeo_src ); ?>"
                        frameborder="0"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        title="Background Video Hero"
                    ></iframe>
                </div>
                <script src="<?php echo esc_url( $background_video_library_url ?: 'https://player.vimeo.com/api/player.js' ); ?>"></script>
            <?php endif; ?>
        </div>
    </div>

    <div class="video-hero-text-background-overlay">
        <button
            class="background-video-toggle"
            aria-label="Pause background video"
            title="Pause background video"
            type="button"
        >⏸</button>

        <div class="video-hero-text-container">
            <div class="hero-slider-content">
                <?php if ( $section_eyebrow ) : ?>
                    <span class="section-video-hero__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                <?php endif; ?>
                <?php if ( $background_video_h1 ) : ?>
                    <h1 class="hero-slider-title" data-animation="animated"><?php echo wp_kses( $background_video_h1, array( 'b' => array(), 'strong' => array(), 'i' => array(), 'em' => array(), 'br' => array(), 'span' => array( 'class' => array() ) ) ); ?></h1>
                <?php endif; ?>
                <?php if ( $background_video_h2 ) : ?>
                    <div class="hero-slider-subheading" data-animation="animated"><?php echo $background_video_h2; ?></div>
                <?php endif; ?>
                <?php if ( $background_video_closure_notice_show && $background_video_closure_notice ) : ?>
                    <div class="closure-notice-container" style="margin-top: 25px !important; margin-bottom: 12px !important; opacity: 0.9; background: #1a1a1a9e; text-align: left; padding: 15px 20px; max-width: 600px;">
                        <?php echo $background_video_closure_notice; ?>
                    </div>
                <?php endif; ?>

                <?php if ( ! empty( $hero_factoids ) ) : ?>
                    <div class="hero-factoids">
                        <?php foreach ( $hero_factoids as $factoid ) : ?>
                            <div class="hero-factoid">
                                <?php if ( '' !== $factoid['value'] ) : ?>
                                    <span class="hero-factoid__value"><?php echo esc_html( $factoid['value'] ); ?></span>
                                <?php endif; ?>
                                <?php if ( '' !== $factoid['label'] ) : ?>
                                    <span class="hero-factoid__label"><?php echo esc_html( $factoid['label'] ); ?></span>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if ( ! empty( $hero_cta_buttons ) ) : ?>
                    <div class="hero-button-group">
                        <?php foreach ( $hero_cta_buttons as $button ) : ?>
                            <a class="hero-button hero-button--<?php echo esc_attr( $button['style'] ); ?>" href="<?php echo esc_url( $button['url'] ); ?>" tabindex="0"><?php echo esc_html( $button['label'] ); ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php if ( 'wistia' === $background_video_source ) : ?>
<script>
window._wq = window._wq || [];
window._wq.push({
    id: "<?php echo esc_js( $background_video_wistia_id ?: '4e2kjpftga' ); ?>",
    onReady: function(video) {
        var section = document.getElementById('<?php echo esc_js( $section_video_hero_id ); ?>');
        var button = section ? section.querySelector('.background-video-toggle') : null;
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
<?php else : ?>
<script>
(function() {
    var section = document.getElementById('<?php echo esc_js( $section_video_hero_id ); ?>');
    var vimeoIframe = section ? section.querySelector('.background-video-vimeo') : null;
    var button = section ? section.querySelector('.background-video-toggle') : null;

    if (!vimeoIframe || !window.Vimeo || vimeoIframe.src.indexOf('vimeo.com') === -1) {
        return;
    }

    try {
        var vimeoPlayer = new Vimeo.Player(vimeoIframe);

        vimeoPlayer.setVolume(0).then(function() {
            return vimeoPlayer.play();
        }).catch(function() {});

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
<?php endif; ?>
