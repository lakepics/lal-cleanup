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
$use_scrollwork = get_sub_field('use_scrollwork');
$scrollwork_side = get_sub_field('scrollwork_side') ?: 'left';
$section_classes = trim( (string) get_sub_field('section_classes') );
$padding_top = trim( (string) get_sub_field('padding_top') );
$padding_bottom = trim( (string) get_sub_field('padding_bottom') );
$section_intro_max_width = trim( (string) get_sub_field('section_intro_max_width') );
$section_heading_color = trim( (string) get_sub_field('section_heading_color') );
$section_button_label = trim( (string) get_sub_field('section_button_label') );
$section_button_url = trim( (string) get_sub_field('section_button_url') );
$section_button_style = strtolower( trim( (string) get_sub_field('section_button_style') ) );
$section_button_alignment = strtolower( trim( (string) get_sub_field('section_button_alignment') ) );
$scroll_speed = (int) get_sub_field('scroll_speed_seconds');
$pause_on_hover = get_sub_field('pause_on_hover');
$heading_font_family = strtolower( trim( (string) get_sub_field('heading_font_family') ) );
$heading_font_weight = trim( (string) get_sub_field('heading_font_weight') );
$subheading_font_family = strtolower( trim( (string) get_sub_field('subheading_font_family') ) );
$subheading_font_weight = trim( (string) get_sub_field('subheading_font_weight') );
$eyebrow_font_size = trim( (string) get_sub_field('eyebrow_font_size') );
$scroller_image_height = trim( (string) get_sub_field('scroller_image_height') );
$scroller_image_gap = trim( (string) get_sub_field('scroller_image_gap') );

if ( ! in_array( $heading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $heading_font_family = 'haarlem';
}

if ( ! in_array( $heading_font_weight, array( '500', '600', '700' ), true ) ) {
    $heading_font_weight = '600';
}

if ( ! in_array( $subheading_font_family, array( 'haarlem', 'freight-big-pro' ), true ) ) {
    $subheading_font_family = $heading_font_family;
}

if ( ! in_array( $subheading_font_weight, array( '500', '600', '700' ), true ) ) {
    $subheading_font_weight = $heading_font_weight;
}

$heading_font_stack = 'freight-big-pro' === $heading_font_family ? '"freight-big-pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$subheading_font_stack = 'freight-big-pro' === $subheading_font_family ? '"freight-big-pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$section_intro_max_width = $section_intro_max_width ?: '100%';
$section_heading_color = $section_heading_color ?: 'var(--lacc-color-ink)';
$eyebrow_font_size = $eyebrow_font_size ?: '12px';
$scroller_image_height = $scroller_image_height ?: '220px';
$scroller_image_gap = $scroller_image_gap ?: '18px';
$section_button_style = in_array( $section_button_style, array( 'primary', 'secondary', 'outline' ), true ) ? $section_button_style : 'secondary';
$section_button_alignment = in_array( $section_button_alignment, array( 'left', 'center', 'right' ), true ) ? $section_button_alignment : $content_alignment;
$section_intro_margin = 'center' === $content_alignment ? '0 auto' : ( 'right' === $content_alignment ? '0 0 0 auto' : '0 auto 0 0' );
$cta_justify = 'center' === $section_button_alignment ? 'center' : ( 'right' === $section_button_alignment ? 'flex-end' : 'flex-start' );

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
    '--sis-subheading-font:' . $subheading_font_stack,
    '--sis-subheading-weight:' . $subheading_font_weight,
    '--sis-heading-color:' . $section_heading_color,
    '--sis-eyebrow-size:' . $eyebrow_font_size,
    '--sis-intro-max-width:' . $section_intro_max_width,
    '--sis-intro-margin:' . $section_intro_margin,
    '--sis-cta-justify:' . $cta_justify,
    '--sis-cta-align:' . $section_button_alignment,
    '--sis-image-height:' . $scroller_image_height,
    '--sis-image-gap:' . $scroller_image_gap
);
if ( $background_color ) {
    $section_styles[] = 'background-color:' . $background_color;
}
if ( ! empty( $background_image['url'] ) ) {
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
?>

<style>
.section-image-scroller {
    position: relative;
    padding: 60px 0;
    overflow: hidden;
}

.section-image-scroller--scrollwork-left,
.section-image-scroller--scrollwork-right {
    background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    background-repeat: no-repeat;
    background-size: 70px;
}

.section-image-scroller--scrollwork-left {
    background-position: top 0 left calc(50% - 650px);
}

.section-image-scroller--scrollwork-right {
    background-position: top 0 right calc(50% - 650px);
}

.section-image-scroller__header {
    margin-bottom: 35px;
}

.section-image-scroller h2 {
    font-family: var(--sis-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif) !important;
    font-weight: var(--sis-heading-weight, 600) !important;
    color: var(--sis-heading-color, var(--lacc-color-ink)) !important;
}

.section-image-scroller h3,
.section-image-scroller h4,
.section-image-scroller h5,
.section-image-scroller h6 {
    font-family: var(--sis-subheading-font, var(--sis-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif)) !important;
    font-weight: var(--sis-subheading-weight, var(--sis-heading-weight, 600)) !important;
    color: var(--sis-heading-color, var(--lacc-color-ink)) !important;
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
    width: 220px;
    margin-right: 0;
    flex: 0 0 auto;
}

.section-image-scroller__link,
.section-image-scroller__frame {
    display: block;
    width: 220px;
    height: var(--sis-image-height, 220px);
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

.section-image-scroller__cta {
    display: flex;
    justify-content: var(--sis-cta-justify, flex-start);
    margin-top: 26px;
    text-align: var(--sis-cta-align, left);
}

.section-image-scroller .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 240px;
    min-height: 54px;
    padding: 14px 26px;
    border: 1px solid transparent;
    border-radius: 0;
    letter-spacing: .16em;
    font-size: 12px;
    font-weight: 600;
    line-height: 1.2;
    text-decoration: none !important;
    transition: all .2s ease;
}

.section-image-scroller .hero-button--primary {
    background: var(--lacc-color-accent);
    border-color: var(--lacc-color-accent);
    color: var(--lacc-color-white) !important;
}

.section-image-scroller .hero-button--secondary {
    background: var(--lacc-color-ink);
    border-color: var(--lacc-color-ink);
    color: var(--lacc-color-white) !important;
}

.section-image-scroller .hero-button--outline {
    background: var(--lacc-color-white);
    border-color: var(--lacc-color-ink);
    color: var(--lacc-color-ink) !important;
}

.section-image-scroller .hero-button:hover,
.section-image-scroller .hero-button:focus {
    opacity: 0.92;
    text-decoration: none !important;
}

@keyframes section-image-scroller-marquee {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}
</style>

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
                            <h2><?php echo esc_html( $section_heading ); ?></h2>
                        <?php endif; ?>
                        <?php if ( $section_intro ) : ?>
                            <div class="section-image-scroller__intro"><?php echo $section_intro; ?></div>
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

        <?php if ( $section_button_label && $section_button_url ) : ?>
            <div class="section-image-scroller__cta">
                <a class="hero-button hero-button--<?php echo esc_attr( $section_button_style ); ?>" href="<?php echo esc_url( $section_button_url ); ?>"><?php echo esc_html( $section_button_label ); ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>
