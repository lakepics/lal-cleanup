<?php
$section_eyebrow = get_sub_field('section_eyebrow');
$section_heading = get_sub_field('section_heading');
$section_intro = get_sub_field('section_intro');
$section_anchor_id = strtolower( trim( (string) get_sub_field('section_anchor_id') ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$content_alignment = get_sub_field('content_alignment') ?: 'left';
$container_type = get_sub_field('container_type') ?: 'container-fluid';
$background_color = get_sub_field('background_color');
$background_image = get_sub_field('background_image');
$background_gradient = trim( (string) get_sub_field('background_gradient') );
$use_scrollwork = get_sub_field('use_scrollwork');
$scrollwork_side = get_sub_field('scrollwork_side') ?: 'left';
$scrollwork_color = trim( (string) get_sub_field('scrollwork_color') );
$section_classes = trim( (string) get_sub_field('section_classes') );
$padding_top = trim( (string) get_sub_field('padding_top') );
$padding_bottom = trim( (string) get_sub_field('padding_bottom') );
$section_keyline_position = strtolower( trim( (string) get_sub_field('section_keyline_position') ) );
$section_keyline_color = trim( (string) get_sub_field('section_keyline_color') );
$section_intro_max_width = trim( (string) get_sub_field('section_intro_max_width') );
$heading_max_width = trim( (string) get_sub_field('heading_max_width') );
$section_heading_color = trim( (string) get_sub_field('section_heading_color') );
$section_button_label = trim( (string) get_sub_field('section_button_label') );
$section_button_url = trim( (string) get_sub_field('section_button_url') );
$section_button_style = strtolower( trim( (string) get_sub_field('section_button_style') ) );
$section_button_alignment = strtolower( trim( (string) get_sub_field('section_button_alignment') ) );
$cta_text_size = trim( (string) get_sub_field('cta_text_size') );
$cta_padding = trim( (string) get_sub_field('cta_padding') );
$cta_letter_spacing = trim( (string) get_sub_field('cta_letter_spacing') );
$scroll_speed = (int) get_sub_field('scroll_speed_seconds');
$pause_on_hover = get_sub_field('pause_on_hover');
$heading_font_family = strtolower( trim( (string) get_sub_field('heading_font_family') ) );
$heading_font_weight = trim( (string) get_sub_field('heading_font_weight') );
$subheading_font_family = strtolower( trim( (string) get_sub_field('subheading_font_family') ) );
$subheading_font_weight = trim( (string) get_sub_field('subheading_font_weight') );
$eyebrow_font_size = trim( (string) get_sub_field('eyebrow_font_size') );
$eyebrow_text_transform = strtolower( trim( (string) get_sub_field('eyebrow_text_transform') ) );
$scroller_image_height = trim( (string) get_sub_field('scroller_image_height') );
$scroller_image_ratio_raw = trim( (string) get_sub_field('scroller_image_ratio') );
$scroller_image_gap = trim( (string) get_sub_field('scroller_image_gap') );

if ( ! in_array( $heading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $heading_font_family = 'haarlem';
}

if ( ! in_array( $heading_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $heading_font_weight = 'freight-big-pro' === $heading_font_family ? '400' : '600';
}

if ( ! in_array( $subheading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $subheading_font_family = $heading_font_family;
}

if ( ! in_array( $subheading_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $subheading_font_weight = 'freight-big-pro' === $subheading_font_family ? '400' : $heading_font_weight;
}

$heading_font_stack = 'freight-big-pro' === $heading_font_family ? '"Freight Big Pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$subheading_font_stack = 'freight-big-pro' === $subheading_font_family ? '"Freight Big Pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$heading_letter_spacing = 'freight-big-pro' === $heading_font_family ? '.03em' : '0.1275rem';
$subheading_letter_spacing = 'freight-big-pro' === $subheading_font_family ? '.03em' : '0.1275rem';

if ( is_page( 'flex' ) && 'freight-big-pro' === $heading_font_family ) {
    $heading_font_weight = '400';
}

if ( is_page( 'flex' ) && 'freight-big-pro' === $subheading_font_family ) {
    $subheading_font_weight = '400';
}

$default_surface_gradient = function_exists( 'lacc_get_default_surface_gradient' ) ? lacc_get_default_surface_gradient() : 'linear-gradient(180deg, rgba(246,243,237,0.92) 0%, rgba(255,255,255,0.92) 100%)';
$section_intro_max_width = $section_intro_max_width ?: '100%';
$heading_max_width = $heading_max_width ?: '100%';
$section_heading_color = $section_heading_color ?: 'var(--lacc-color-ink)';
$section_keyline_position = in_array( $section_keyline_position, array( 'top', 'bottom' ), true ) ? $section_keyline_position : '';
$section_keyline_color = $section_keyline_color ?: $section_heading_color;
$scrollwork_color = $scrollwork_color ?: '#8DC5DB';
$eyebrow_font_size = $eyebrow_font_size ?: '12px';
if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $eyebrow_text_transform = 'capitalize';
}
$scroller_image_height = $scroller_image_height ?: '220px';
$scroller_image_gap = $scroller_image_gap ?: '18px';
$scroller_image_ratio = '';
$scroller_image_width = '220px';
if ( preg_match( '/^\s*(\d+(?:\.\d+)?)\s*[:\/]\s*(\d+(?:\.\d+)?)\s*$/', $scroller_image_ratio_raw, $ratio_matches ) ) {
    $ratio_width = (float) $ratio_matches[1];
    $ratio_height = (float) $ratio_matches[2];
    if ( $ratio_width > 0 && $ratio_height > 0 ) {
        $scroller_image_ratio = $ratio_width . ' / ' . $ratio_height;
        $ratio_multiplier = rtrim( rtrim( number_format( $ratio_width / $ratio_height, 4, '.', '' ), '0' ), '.' );
        $scroller_image_width = 'calc(' . $scroller_image_height . ' * ' . $ratio_multiplier . ')';
    }
}
$cta_text_size = $cta_text_size ?: '16px';
$cta_padding = $cta_padding ?: '.75em 1.5em';
$cta_letter_spacing = $cta_letter_spacing ?: '.04em';
$allowed_button_styles = array( 'primary', 'secondary', 'gold-text', 'ink', 'outline-ink', 'brown', 'light', 'outline', 'outline-dark', 'outline-gold' );
$section_button_style = in_array( $section_button_style, $allowed_button_styles, true ) ? $section_button_style : 'secondary';
$section_button_alignment = in_array( $section_button_alignment, array( 'left', 'center', 'right' ), true ) ? $section_button_alignment : $content_alignment;
$section_intro_margin = 'center' === $content_alignment ? '0 auto' : ( 'right' === $content_alignment ? '0 0 0 auto' : '0 auto 0 0' );
$heading_margin = 'center' === $content_alignment ? '0 auto 12px' : ( 'right' === $content_alignment ? '0 0 12px auto' : '0 auto 12px 0' );
$cta_justify = 'center' === $section_button_alignment ? 'center' : ( 'right' === $section_button_alignment ? 'flex-end' : 'flex-start' );
$allowed_heading_html = array(
    'b' => array(),
    'strong' => array(),
    'i' => array(),
    'em' => array(),
    'br' => array(),
    'span' => array( 'class' => array() ),
);

if ( $scroll_speed <= 0 ) {
    $scroll_speed = 30;
}

$section_class_list = array( 'section-image-scroller' );
if ( $section_classes ) {
    $section_class_list[] = $section_classes;
}
if ( $use_scrollwork ) {
    $section_class_list[] = 'section-image-scroller--scrollwork-' . $scrollwork_side;
}
if ( $pause_on_hover ) {
    $section_class_list[] = 'section-image-scroller--pause-on-hover';
}

$section_styles = array(
    '--sis-heading-font:' . $heading_font_stack,
    '--sis-heading-weight:' . $heading_font_weight,
    '--sis-heading-letter-spacing:' . $heading_letter_spacing,
    '--sis-subheading-font:' . $subheading_font_stack,
    '--sis-subheading-weight:' . $subheading_font_weight,
    '--sis-subheading-letter-spacing:' . $subheading_letter_spacing,
    '--sis-heading-color:' . $section_heading_color,
    '--sis-scrollwork-color:' . $scrollwork_color,
    '--sis-heading-max-width:' . $heading_max_width,
    '--sis-heading-margin:' . $heading_margin,
    '--sis-eyebrow-size:' . $eyebrow_font_size,
    '--sis-eyebrow-transform:' . $eyebrow_text_transform,
    '--sis-intro-max-width:' . $section_intro_max_width,
    '--sis-intro-margin:' . $section_intro_margin,
    '--sis-cta-justify:' . $cta_justify,
    '--sis-cta-align:' . $section_button_alignment,
    '--sis-cta-font-size:' . $cta_text_size,
    '--sis-cta-padding:' . $cta_padding,
    '--sis-cta-letter-spacing:' . $cta_letter_spacing,
    '--sis-image-height:' . $scroller_image_height,
    '--sis-image-width:' . $scroller_image_width,
    '--sis-image-ratio:' . ( $scroller_image_ratio ?: 'auto' ),
    '--sis-image-gap:' . $scroller_image_gap
);
if ( $background_color ) {
    $section_styles[] = 'background-color:' . $background_color;
}
if ( ! $background_gradient && empty( $background_image['url'] ) && ! $background_color ) {
    $background_gradient = $default_surface_gradient;
}
if ( $background_gradient && ! empty( $background_image['url'] ) ) {
    $section_styles[] = 'background-image:' . $background_gradient . ', url(' . esc_url( $background_image['url'] ) . ')';
    $section_styles[] = 'background-size:cover';
    $section_styles[] = 'background-position:center center';
} elseif ( $background_gradient ) {
    $section_styles[] = 'background-image:' . $background_gradient;
} elseif ( ! empty( $background_image['url'] ) ) {
    $section_styles[] = 'background-image:url(' . esc_url( $background_image['url'] ) . ')';
    $section_styles[] = 'background-size:cover';
    $section_styles[] = 'background-position:center center';
}
if ( $padding_top ) {
    $section_styles[] = 'padding-top:' . $padding_top;
}
if ( $padding_bottom ) {
    $section_styles[] = 'padding-bottom:' . $padding_bottom;
}
if ( 'top' === $section_keyline_position ) {
    $section_styles[] = 'border-top:1px solid ' . $section_keyline_color;
}
if ( 'bottom' === $section_keyline_position ) {
    $section_styles[] = 'border-bottom:1px solid ' . $section_keyline_color;
}
?>

<style>
.section-image-scroller {
    position: relative;
    --sis-scrollwork-width: var(--lacc-scrollwork-width, 78px);
    --sis-scrollwork-opacity: var(--lacc-scrollwork-opacity, 0.4);
    padding: 60px 0;
    overflow: hidden;
}

.section-image-scroller--scrollwork-left,
.section-image-scroller--scrollwork-right {
    position: relative;
}

.section-image-scroller--scrollwork-left::before,
.section-image-scroller--scrollwork-right::before {
    content: '';
    position: absolute;
    top: 0;
    width: var(--sis-scrollwork-width, 78px);
    height: 100%;
    background-color: var(--sis-scrollwork-color, #8DC5DB);
    opacity: var(--sis-scrollwork-opacity, 0.4);
    pointer-events: none;
    -webkit-mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    mask-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-position: top center;
    mask-position: top center;
    -webkit-mask-size: var(--sis-scrollwork-width, 78px) auto;
    mask-size: var(--sis-scrollwork-width, 78px) auto;
}

.section-image-scroller--scrollwork-left::before {
    left: calc(50% - 500px);
}

.section-image-scroller--scrollwork-right::before {
    right: calc(50% - 500px);
}

.section-image-scroller__header {
    margin-bottom: 48px;
}

.section-image-scroller h2 {
    width: 100%;
    max-width: var(--sis-heading-max-width, 100%);
    margin: var(--sis-heading-margin, 0 0 12px);
    font-family: var(--sis-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif) !important;
    font-weight: var(--sis-heading-weight, 600) !important;
    letter-spacing: var(--sis-heading-letter-spacing, 0.1275rem);
    color: var(--sis-heading-color, var(--lacc-color-ink)) !important;
    text-transform: capitalize;
}

.section-image-scroller h3,
.section-image-scroller h4,
.section-image-scroller h5,
.section-image-scroller h6 {
    font-family: var(--sis-subheading-font, var(--sis-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif)) !important;
    font-weight: var(--sis-subheading-weight, var(--sis-heading-weight, 600)) !important;
    letter-spacing: var(--sis-subheading-letter-spacing, 0.1275rem);
    color: var(--sis-heading-color, var(--lacc-color-ink)) !important;
    text-transform: capitalize;
}

.section-image-scroller h2 em,
.section-image-scroller h2 i,
.section-image-scroller h3 em,
.section-image-scroller h3 i,
.section-image-scroller h4 em,
.section-image-scroller h4 i,
.section-image-scroller h5 em,
.section-image-scroller h5 i,
.section-image-scroller h6 em,
.section-image-scroller h6 i,
.section-image-scroller__intro em,
.section-image-scroller__intro i {
    font-style: italic !important;
}

.section-image-scroller__intro {
    width: 100%;
    max-width: var(--sis-intro-max-width, 100%);
    margin: var(--sis-intro-margin, 0 auto 0 0);
}

.section-image-scroller__eyebrow {
    display: block;
    margin-bottom: 12px;
    letter-spacing: .2em;
    font-size: var(--sis-eyebrow-size, 12px);
    color: var(--lacc-color-sky);
    text-transform: var(--sis-eyebrow-transform, capitalize);
}

.section-image-scroller__viewport {
    overflow: hidden;
    width: 100%;
}

.section-image-scroller__track {
    display: flex;
    gap: var(--sis-image-gap, 18px);
    width: max-content;
    animation: section-image-scroller-marquee linear infinite;
}

.section-image-scroller--pause-on-hover .section-image-scroller__track:hover {
    animation-play-state: paused;
}

.section-image-scroller__item {
    width: var(--sis-image-width, 220px);
    margin-right: 0;
    flex: 0 0 auto;
    overflow: hidden;
}

.section-image-scroller__link,
.section-image-scroller__frame {
    display: block;
    width: var(--sis-image-width, 220px);
    height: var(--sis-image-height, 220px);
    aspect-ratio: var(--sis-image-ratio, auto);
    overflow: hidden;
    background: var(--lacc-color-cream);
}

.section-image-scroller__frame img,
.section-image-scroller__link img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.section-image-scroller__caption {
    margin-top: 10px;
    font-size: 14px;
}

.section-image-scroller__footer {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    margin-top: 48px;
    min-height: calc(var(--sis-cta-font-size, 16px) + 2.75em);
}

.section-image-scroller__cta {
    display: flex;
    flex: 1 1 auto;
    width: 100%;
    justify-content: var(--sis-cta-justify, flex-start);
    margin-top: 0;
    text-align: var(--sis-cta-align, left);
}

.section-image-scroller__controls {
    position: absolute;
    top: 50%;
    right: 0;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-top: 0;
    margin-left: auto;
    transform: translateY(-50%);
}

@media (max-width: 767px) {
    .section-image-scroller__footer {
        flex-direction: column;
        min-height: 0;
    }

    .section-image-scroller__controls {
        position: static;
        transform: none;
        justify-content: center;
        width: 100%;
    }
}

.section-image-scroller__toggle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-width: 0;
    padding: var(--sis-cta-padding, .75em 1.5em);
    border: 1px solid rgba(81,83,74,0.22);
    border-radius: 0;
    background: rgba(255,255,255,0.92);
    color: var(--lacc-color-ink, #51534a);
    font-size: var(--sis-cta-font-size, 16px);
    font-weight: 600;
    letter-spacing: var(--sis-cta-letter-spacing, .04em);
    line-height: 1;
    text-transform: uppercase;
    transition: background-color .2s ease, border-color .2s ease, color .2s ease;
}

.section-image-scroller__toggle:hover,
.section-image-scroller__toggle:focus {
    background: var(--lacc-color-cream, #f6f3ed);
    border-color: var(--lacc-color-gold-bright, #f5b62b);
    color: var(--lacc-color-ink, #51534a);
    outline: none;
}

.section-image-scroller .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 0;
    min-height: 0;
    width: auto;
    padding: var(--sis-cta-padding, .75em 1.5em);
    border: 1px solid transparent;
    border-radius: 0;
    letter-spacing: var(--sis-cta-letter-spacing, .04em);
    font-size: var(--sis-cta-font-size, 16px);
    font-weight: 600;
    line-height: 1;
    text-decoration: none !important;
    box-shadow: none;
    transform: translateY(0);
    transition: all .35s ease-in-out;
}

@keyframes section-image-scroller-marquee {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}
</style>

<?php $section_intro_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $section_intro ) : $section_intro; ?>

<section<?php echo $section_anchor_id ? ' id="' . esc_attr( $section_anchor_id ) . '"' : ''; ?> class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>"<?php echo $section_styles ? ' style="' . esc_attr( implode( ';', $section_styles ) ) . '"' : ''; ?>>
    <div class="<?php echo esc_attr( $container_type ); ?>">
        <?php if ( $section_eyebrow || $section_heading || $section_intro ) : ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-image-scroller__header" style="text-align: <?php echo esc_attr( $content_alignment ); ?>;">
                        <?php if ( $section_eyebrow ) : ?>
                            <span class="section-image-scroller__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                        <?php endif; ?>
                        <?php if ( $section_heading ) : ?>
                            <h2><?php echo wp_kses( $section_heading, $allowed_heading_html ); ?></h2>
                        <?php endif; ?>
                        <?php if ( $section_intro ) : ?>
                            <div class="section-image-scroller__intro"><?php echo $section_intro_output; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( have_rows( 'scroller_items' ) ) : ?>
            <?php
            $items = array();
            while ( have_rows( 'scroller_items' ) ) : the_row();
                $items[] = array(
                    'image' => get_sub_field( 'image' ),
                    'caption' => get_sub_field( 'caption' ),
                    'link_url' => get_sub_field( 'link_url' ),
                );
            endwhile;
            ?>
            <div class="section-image-scroller__viewport">
                <div class="section-image-scroller__track" style="animation-duration: <?php echo esc_attr( $scroll_speed ); ?>s;">
                    <?php for ( $loop = 0; $loop < 2; $loop++ ) : ?>
                        <?php foreach ( $items as $item ) : ?>
                            <?php if ( empty( $item['image']['url'] ) ) { continue; } ?>
                            <div class="section-image-scroller__item">
                                <?php if ( $item['link_url'] ) : ?>
                                    <a class="section-image-scroller__link" href="<?php echo esc_url( $item['link_url'] ); ?>">
                                        <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ); ?>">
                                    </a>
                                <?php else : ?>
                                    <span class="section-image-scroller__frame">
                                        <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['alt'] ); ?>">
                                    </span>
                                <?php endif; ?>
                                <?php if ( $item['caption'] ) : ?>
                                    <div class="section-image-scroller__caption"><?php echo esc_html( $item['caption'] ); ?></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( ( $section_button_label && $section_button_url ) || ! empty( $items ) ) : ?>
            <div class="section-image-scroller__footer">
                <?php if ( $section_button_label && $section_button_url ) : ?>
                    <div class="section-image-scroller__cta">
                        <a class="hero-button hero-button--<?php echo esc_attr( $section_button_style ); ?>" href="<?php echo esc_url( $section_button_url ); ?>"><?php echo esc_html( $section_button_label ); ?></a>
                    </div>
                <?php endif; ?>

                <?php if ( ! empty( $items ) ) : ?>
                    <div class="section-image-scroller__controls">
                        <button type="button" class="section-image-scroller__toggle" data-scroller-toggle="pause" aria-pressed="false" aria-label="Pause image scroller">❚❚ Pause</button>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
<script>
(function() {
    if (window.__laccImageScrollerToggleInit) {
        return;
    }
    window.__laccImageScrollerToggleInit = true;

    document.addEventListener('click', function(event) {
        var toggle = event.target.closest('[data-scroller-toggle]');
        if (!toggle) {
            return;
        }

        var section = toggle.closest('.section-image-scroller');
        var track = section ? section.querySelector('.section-image-scroller__track') : null;
        if (!track) {
            return;
        }

        var isPaused = toggle.getAttribute('data-scroller-toggle') === 'play';
        track.style.animationPlayState = isPaused ? 'running' : 'paused';
        toggle.setAttribute('data-scroller-toggle', isPaused ? 'pause' : 'play');
        toggle.setAttribute('aria-pressed', isPaused ? 'false' : 'true');
        toggle.setAttribute('aria-label', isPaused ? 'Pause image scroller' : 'Play image scroller');
        toggle.textContent = isPaused ? '❚❚ Pause' : '▶ Play';
    });
})();
</script>
