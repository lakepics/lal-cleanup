<?php
$section_eyebrow = get_sub_field('section_eyebrow');
$section_heading = get_sub_field('section_heading');
$section_intro = get_sub_field('section_intro');
$section_anchor_id = strtolower( trim( (string) get_sub_field('section_anchor_id') ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$content_alignment = get_sub_field('content_alignment') ?: 'left';
$header_column_width = trim( (string) get_sub_field('header_column_width') );
$container_type = get_sub_field('container_type') ?: 'container';
$background_color = get_sub_field('background_color');
$background_image = get_sub_field('background_image');
$background_vertical_position = trim( (string) get_sub_field('background_vertical_position') );
$background_parallax = get_sub_field('background_parallax');
$use_scrollwork = get_sub_field('use_scrollwork');
$scrollwork_side = get_sub_field('scrollwork_side') ?: 'left';
$section_classes = trim( (string) get_sub_field('section_classes') );
$padding_top = trim( (string) get_sub_field('padding_top') );
$padding_bottom = trim( (string) get_sub_field('padding_bottom') );
$section_intro_max_width = trim( (string) get_sub_field('section_intro_max_width') );
$section_intro_spacing_bottom = trim( (string) get_sub_field('section_intro_spacing_bottom') );
$card_padding = trim( (string) get_sub_field('card_padding') );
$card_gutter = trim( (string) get_sub_field('card_gutter') );
$card_background_gradient = trim( (string) get_sub_field('card_background_gradient') );
$equalize_card_bottoms = get_sub_field('equalize_card_bottoms');
$card_button_spacing = trim( (string) get_sub_field('card_button_spacing') );
$section_heading_color = trim( (string) get_sub_field('section_heading_color') );
$section_button_label = trim( (string) get_sub_field('section_button_label') );
$section_button_url = trim( (string) get_sub_field('section_button_url') );
$section_button_style = strtolower( trim( (string) get_sub_field('section_button_style') ) );
$section_button_alignment = strtolower( trim( (string) get_sub_field('section_button_alignment') ) );
$section_bottom_button_label = trim( (string) get_sub_field('section_bottom_button_label') );
$section_bottom_button_url = trim( (string) get_sub_field('section_bottom_button_url') );
$section_bottom_button_style = strtolower( trim( (string) get_sub_field('section_bottom_button_style') ) );
$section_bottom_button_alignment = strtolower( trim( (string) get_sub_field('section_bottom_button_alignment') ) );
$post_grid_content = get_sub_field('post_grid_content');
$header_background_color = trim( (string) get_sub_field('header_background_color') );
$header_width = trim( (string) get_sub_field('header_width') );
$header_max_width = trim( (string) get_sub_field('header_max_width') );
$header_padding_top = trim( (string) get_sub_field('header_padding_top') );
$header_padding_right = trim( (string) get_sub_field('header_padding_right') );
$header_padding_bottom = trim( (string) get_sub_field('header_padding_bottom') );
$header_padding_left = trim( (string) get_sub_field('header_padding_left') );
$heading_font_family = strtolower( trim( (string) get_sub_field('heading_font_family') ) );
$heading_font_weight = trim( (string) get_sub_field('heading_font_weight') );
$subheading_font_family = strtolower( trim( (string) get_sub_field('subheading_font_family') ) );
$subheading_font_weight = trim( (string) get_sub_field('subheading_font_weight') );
$eyebrow_color = trim( (string) get_sub_field('eyebrow_color') );
$eyebrow_font_family = strtolower( trim( (string) get_sub_field('eyebrow_font_family') ) );
$eyebrow_font_weight = trim( (string) get_sub_field('eyebrow_font_weight') );
$eyebrow_font_size = trim( (string) get_sub_field('eyebrow_font_size') );
$eyebrow_background_color = trim( (string) get_sub_field('eyebrow_background_color') );
$eyebrow_border = trim( (string) get_sub_field('eyebrow_border') );
$eyebrow_padding = trim( (string) get_sub_field('eyebrow_padding') );
$eyebrow_border_radius = trim( (string) get_sub_field('eyebrow_border_radius') );

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

if ( ! in_array( $eyebrow_font_family, array( 'default', 'haarlem', 'freight-big-pro' ), true ) ) {
    $eyebrow_font_family = 'default';
}

if ( ! in_array( $eyebrow_font_weight, array( '400', '500', '600', '700' ), true ) ) {
    $eyebrow_font_weight = '600';
}

if ( ! in_array( $header_column_width, array( '4', '5', '6', '7', '8', '9', '10', '11', '12' ), true ) ) {
    $header_column_width = '12';
}

$heading_font_stack = 'freight-big-pro' === $heading_font_family ? '"freight-big-pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$subheading_font_stack = 'freight-big-pro' === $subheading_font_family ? '"freight-big-pro", Georgia, serif' : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$eyebrow_font_stack = 'freight-big-pro' === $eyebrow_font_family ? '"freight-big-pro", Georgia, serif' : ( 'haarlem' === $eyebrow_font_family ? 'HaarlemDeco, Arial, Helvetica, sans-serif' : 'inherit' );
$section_intro_max_width = $section_intro_max_width ?: '100%';
$eyebrow_color = $eyebrow_color ?: 'var(--lacc-color-sky)';
$eyebrow_background_color = $eyebrow_background_color ?: 'transparent';
$eyebrow_border = $eyebrow_border ?: '0';
$eyebrow_padding = $eyebrow_padding ?: '0';
$eyebrow_font_size = $eyebrow_font_size ?: '12px';
$eyebrow_border_radius = $eyebrow_border_radius ?: '0';
$section_intro_spacing_bottom = $section_intro_spacing_bottom ?: '40px';
$card_padding = $card_padding ?: '24px';
$card_gutter = $card_gutter ?: '30px';
$card_background_gradient = $card_background_gradient ?: '';
$card_button_spacing = $card_button_spacing ?: '24px';
$section_heading_color = $section_heading_color ?: 'var(--lacc-color-ink)';
$section_button_style = in_array( $section_button_style, array( 'primary', 'secondary', 'outline' ), true ) ? $section_button_style : 'primary';
$section_bottom_button_style = in_array( $section_bottom_button_style, array( 'primary', 'secondary', 'outline' ), true ) ? $section_bottom_button_style : 'secondary';
$background_vertical_position = $background_vertical_position ?: 'center';
$header_width = $header_width ?: '100%';
$header_max_width = $header_max_width ?: '100%';
$header_padding_top = $header_padding_top ?: '0';
$header_padding_right = $header_padding_right ?: '0';
$header_padding_bottom = $header_padding_bottom ?: '0';
$header_padding_left = $header_padding_left ?: '0';
$resolved_header_padding_bottom = $header_padding_bottom;
if ( $section_intro_spacing_bottom ) {
    $resolved_header_padding_bottom = ( '0' !== $header_padding_bottom && '' !== $header_padding_bottom )
        ? 'calc(' . $header_padding_bottom . ' + ' . $section_intro_spacing_bottom . ')'
        : $section_intro_spacing_bottom;
}
$section_button_alignment = in_array( $section_button_alignment, array( 'left', 'center', 'right' ), true ) ? $section_button_alignment : $content_alignment;
$section_bottom_button_alignment = in_array( $section_bottom_button_alignment, array( 'left', 'center', 'right' ), true ) ? $section_bottom_button_alignment : $content_alignment;
$section_intro_margin = 'center' === $content_alignment ? '0 auto' : ( 'right' === $content_alignment ? '0 0 0 auto' : '0 auto 0 0' );
$header_margin = 'center' === $content_alignment ? '0 auto' : ( 'right' === $content_alignment ? '0 0 0 auto' : '0 auto 0 0' );
$intro_cta_justify = 'center' === $section_button_alignment ? 'center' : ( 'right' === $section_button_alignment ? 'flex-end' : 'flex-start' );
$bottom_cta_justify = 'center' === $section_bottom_button_alignment ? 'center' : ( 'right' === $section_bottom_button_alignment ? 'flex-end' : 'flex-start' );
$header_column_class = 'col-md-' . $header_column_width;
$header_column_offset = 0;
if ( (int) $header_column_width < 12 ) {
    if ( 'center' === $content_alignment ) {
        $header_column_offset = (int) floor( ( 12 - (int) $header_column_width ) / 2 );
    } elseif ( 'right' === $content_alignment ) {
        $header_column_offset = 12 - (int) $header_column_width;
    }
}
if ( $header_column_offset > 0 ) {
    $header_column_class .= ' col-md-offset-' . $header_column_offset;
}
$header_style_attr = implode( '; ', array(
    'text-align:' . $content_alignment,
    'width:' . $header_width,
    'max-width:' . $header_max_width,
    'margin:' . $header_margin,
    'background-color:' . ( $header_background_color ?: 'transparent' ),
    'padding:' . $header_padding_top . ' ' . $header_padding_right . ' ' . $resolved_header_padding_bottom . ' ' . $header_padding_left,
    'box-sizing:border-box'
) );

$section_class_list = array( 'section-card-grid' );
if ( $section_classes ) {
    $section_class_list[] = $section_classes;
}
if ( $use_scrollwork ) {
    $section_class_list[] = 'section-card-grid--scrollwork-' . $scrollwork_side;
}
if ( $equalize_card_bottoms ) {
    $section_class_list[] = 'section-card-grid--equalize-buttons';
}

$section_styles = array(
    '--scg-heading-font:' . $heading_font_stack,
    '--scg-heading-weight:' . $heading_font_weight,
    '--scg-subheading-font:' . $subheading_font_stack,
    '--scg-subheading-weight:' . $subheading_font_weight,
    '--scg-heading-color:' . $section_heading_color,
    '--scg-intro-max-width:' . $section_intro_max_width,
    '--scg-intro-margin:' . $section_intro_margin,
    '--scg-intro-cta-justify:' . $intro_cta_justify,
    '--scg-bottom-cta-justify:' . $bottom_cta_justify,
    '--scg-bottom-cta-align:' . $section_bottom_button_alignment,
    '--scg-eyebrow-color:' . $eyebrow_color,
    '--scg-eyebrow-font:' . $eyebrow_font_stack,
    '--scg-eyebrow-weight:' . $eyebrow_font_weight,
    '--scg-eyebrow-size:' . $eyebrow_font_size,
    '--scg-eyebrow-bg:' . $eyebrow_background_color,
    '--scg-eyebrow-border:' . $eyebrow_border,
    '--scg-eyebrow-padding:' . $eyebrow_padding,
    '--scg-eyebrow-radius:' . $eyebrow_border_radius,
    '--scg-card-background:' . ( $card_background_gradient ? $card_background_gradient : 'rgba(255,255,255,0.96)' ),
    '--scg-card-padding:' . $card_padding,
    '--scg-card-gutter:' . $card_gutter,
    '--scg-card-button-spacing:' . $card_button_spacing
);
if ( $background_color ) {
    $section_styles[] = 'background-color:' . $background_color;
}
if ( ! empty( $background_image['url'] ) ) {
    $section_styles[] = 'background-image:url(' . esc_url( $background_image['url'] ) . ')';
    $section_styles[] = 'background-size:cover';
    $section_styles[] = 'background-position:center ' . $background_vertical_position;
    if ( $background_parallax ) {
        $section_styles[] = 'background-attachment:fixed';
    }
}
if ( $padding_top ) {
    $section_styles[] = 'padding-top:' . $padding_top;
}
if ( $padding_bottom ) {
    $section_styles[] = 'padding-bottom:' . $padding_bottom;
}
?>

<style>
.section-card-grid {
    position: relative;
    padding: 60px 0;
}

.section-card-grid--scrollwork-left,
.section-card-grid--scrollwork-right {
    background-image: url('/wp-content/themes/LACC-sage-theme-master/assets/images/scrollwork.svg');
    background-repeat: no-repeat;
    background-size: 70px;
}

.section-card-grid--scrollwork-left {
    background-position: top 0 left calc(50% - 650px);
}

.section-card-grid--scrollwork-right {
    background-position: top 0 right calc(50% - 650px);
}

.section-card-grid .col-md-15 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

@media (min-width: 992px) {
    .section-card-grid .col-md-15 {
        float: left;
        width: 20%;
    }
}

@media (max-width: 991px) {
    .section-card-grid .col-md-15 {
        float: left;
        width: 50%;
    }
}

@media (max-width: 767px) {
    .section-card-grid .col-md-15 {
        width: 100%;
    }
}

.section-card-grid__cards-row {
    margin-left: calc(-1 * var(--scg-card-gutter, 30px) / 2);
    margin-right: calc(-1 * var(--scg-card-gutter, 30px) / 2);
}

.section-card-grid__card-column {
    padding-left: calc(var(--scg-card-gutter, 30px) / 2);
    padding-right: calc(var(--scg-card-gutter, 30px) / 2);
}

.section-card-grid__header {
    margin-bottom: 0;
}

.section-card-grid h2 {
    font-family: var(--scg-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif) !important;
    font-weight: var(--scg-heading-weight, 600) !important;
    color: var(--scg-heading-color, var(--lacc-color-ink)) !important;
}

.section-card-grid h3,
.section-card-grid h4,
.section-card-grid h5,
.section-card-grid h6 {
    font-family: var(--scg-subheading-font, var(--scg-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif)) !important;
    font-weight: var(--scg-subheading-weight, var(--scg-heading-weight, 600)) !important;
    color: var(--scg-heading-color, var(--lacc-color-ink)) !important;
}

.section-card-grid__intro {
    width: 100%;
    max-width: var(--scg-intro-max-width, 100%);
    margin: var(--scg-intro-margin, 0 auto 0 0);
}

.section-card-grid__intro-cta {
    display: flex;
    justify-content: var(--scg-intro-cta-justify, flex-start);
    margin-top: 3em;
}

.section-card-grid__bottom-cta {
    display: flex;
    justify-content: var(--scg-bottom-cta-justify, flex-start);
    margin-top: 3em;
    text-align: var(--scg-bottom-cta-align, left);
}

.section-card-grid__post-content {
    margin-top: 3em;
}

.section-card-grid .hero-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 240px;
    min-height: 54px;
    padding: 14px 26px;
    border: 1px solid transparent;
    border-radius: 0;
    text-transform: none;
    letter-spacing: .16em;
    font-size: 12px;
    font-weight: 600;
    line-height: 1.2;
    text-decoration: none !important;
    transition: all .2s ease;
}

.section-card-grid .hero-button--primary {
    background: var(--lacc-color-accent);
    border-color: var(--lacc-color-accent);
    color: var(--lacc-color-white) !important;
}

.section-card-grid .hero-button--secondary {
    background: var(--lacc-color-ink);
    border-color: var(--lacc-color-ink);
    color: var(--lacc-color-white) !important;
}

.section-card-grid .hero-button--outline {
    background: var(--lacc-color-white);
    border-color: var(--lacc-color-ink);
    color: var(--lacc-color-ink) !important;
}

.section-card-grid .hero-button:hover,
.section-card-grid .hero-button:focus {
    opacity: 0.92;
    text-decoration: none !important;
}

.section-card-grid__eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    letter-spacing: .2em;
    font-size: var(--scg-eyebrow-size, 12px);
    line-height: 1.2;
    color: var(--scg-eyebrow-color, var(--lacc-color-sky));
    font-family: var(--scg-eyebrow-font, inherit);
    font-weight: var(--scg-eyebrow-weight, 600);
    background: var(--scg-eyebrow-bg, transparent);
    border: var(--scg-eyebrow-border, 0);
    padding: var(--scg-eyebrow-padding, 0);
    border-radius: var(--scg-eyebrow-radius, 0);
}

.section-card-grid__card {
    position: relative;
    background: var(--scg-card-background, rgba(255,255,255,0.96));
    border: 1px solid rgba(0,0,0,0.08);
    height: 100%;
    margin-bottom: 30px;
    overflow: hidden;
}

.section-card-grid--equalize-buttons .section-card-grid__cards-row {
    display: flex;
    flex-wrap: wrap;
}

.section-card-grid--equalize-buttons .section-card-grid__card-column {
    display: flex;
}

.section-card-grid--equalize-buttons .section-card-grid__card {
    display: flex;
    flex-direction: column;
    width: 100%;
}

.section-card-grid--equalize-buttons .section-card-grid__card-body {
    display: flex;
    flex-direction: column;
    flex: 1 1 auto;
}

.section-card-grid--equalize-buttons .section-card-grid__card-copy {
    flex: 1 1 auto;
    margin-bottom: var(--scg-card-button-spacing, 24px);
}

.section-card-grid__card-badge-wrap {
    text-align: center;
    padding-top: 18px;
}

.section-card-grid__card-badge {
    display: inline-block;
    background: var(--lacc-color-gold-soft);
    color: var(--lacc-color-gold-ink);
    padding: 10px 18px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .16em;
    line-height: 1.1;
}

.section-card-grid__card-image img {
    width: 100%;
    height: auto;
    display: block;
}

.section-card-grid__card-body {
    padding: var(--scg-card-padding, 24px);
}

.section-card-grid__card-title {
    margin-top: 0;
    margin-bottom: 12px;
}

.section-card-grid__card-form {
    margin-top: 1.5em;
}

.section-card-grid__card-button {
    display: inline-flex;
    justify-content: center;
    text-align: center;
    width: 100%;
    min-width: 0;
    margin-top: 2em;
}
</style>

<section<?php echo $section_anchor_id ? ' id="' . esc_attr( $section_anchor_id ) . '"' : ''; ?> class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>"<?php echo $section_styles ? ' style="' . esc_attr( implode( ';', $section_styles ) ) . '"' : ''; ?>>
    <div class="<?php echo esc_attr( $container_type ); ?>">
        <?php if ( $section_eyebrow || $section_heading || $section_intro || ( $section_button_label && $section_button_url ) ) : ?>
            <div class="row">
                <div class="<?php echo esc_attr( $header_column_class ); ?>">
                    <div class="section-card-grid__header" style="<?php echo esc_attr( $header_style_attr ); ?>;">
                        <?php if ( $section_eyebrow ) : ?>
                            <span class="section-card-grid__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                        <?php endif; ?>
                        <?php if ( $section_heading ) : ?>
                            <h2><?php echo esc_html( $section_heading ); ?></h2>
                        <?php endif; ?>
                        <?php if ( $section_intro ) : ?>
                            <div class="section-card-grid__intro"><?php echo $section_intro; ?></div>
                        <?php endif; ?>
                        <?php if ( $section_button_label && $section_button_url ) : ?>
                            <div class="section-card-grid__intro-cta">
                                <a class="hero-button hero-button--<?php echo esc_attr( $section_button_style ); ?>" href="<?php echo esc_url( $section_button_url ); ?>"><?php echo esc_html( $section_button_label ); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( have_rows( 'cards' ) ) : ?>
            <div class="row section-card-grid__cards-row">
                <?php while ( have_rows( 'cards' ) ) : the_row(); ?>
                    <?php
                    $card_width = get_sub_field( 'card_desktop_width' ) ?: '4';
                    $card_offset = get_sub_field( 'card_desktop_offset' );
                    $card_heading = get_sub_field( 'card_heading' );
                    $card_badge = trim( (string) get_sub_field( 'card_badge' ) );
                    $card_heading_align = get_sub_field( 'card_heading_align' ) ?: 'left';
                    $card_body = get_sub_field( 'card_body' );
                    $card_gravity_form_id = absint( get_sub_field( 'card_gravity_form_id' ) );
                    $card_image = get_sub_field( 'card_image' );
                    $card_button_label = get_sub_field( 'card_button_label' );
                    $card_button_url = get_sub_field( 'card_button_url' );
                    $column_class = '15' === (string) $card_width ? 'col-md-15' : 'col-md-' . preg_replace( '/[^0-9]/', '', (string) $card_width );
                    if ( $card_offset && '15' !== (string) $card_width ) {
                        $column_class .= ' col-md-offset-' . preg_replace( '/[^0-9]/', '', (string) $card_offset );
                    }
                    ?>
                    <div class="<?php echo esc_attr( $column_class ); ?> section-card-grid__card-column">
                        <div class="section-card-grid__card">
                            <?php if ( $card_badge ) : ?>
                                <div class="section-card-grid__card-badge-wrap">
                                    <span class="section-card-grid__card-badge"><?php echo esc_html( $card_badge ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $card_image['url'] ) ) : ?>
                                <div class="section-card-grid__card-image">
                                    <img class="img-responsive" src="<?php echo esc_url( $card_image['url'] ); ?>" alt="<?php echo esc_attr( $card_image['alt'] ); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="section-card-grid__card-body">
                                <?php if ( $card_heading ) : ?>
                                    <h3 class="section-card-grid__card-title" style="text-align: <?php echo esc_attr( $card_heading_align ); ?>;"><?php echo esc_html( $card_heading ); ?></h3>
                                <?php endif; ?>
                                <?php if ( $card_body ) : ?>
                                    <div class="section-card-grid__card-copy"><?php echo $card_body; ?></div>
                                <?php endif; ?>
                                <?php if ( $card_gravity_form_id && function_exists( 'gravity_form' ) ) : ?>
                                    <div class="section-card-grid__card-form">
                                        <?php gravity_form( $card_gravity_form_id, false, false, false, null, true ); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $card_button_label && $card_button_url ) : ?>
                                    <a class="hero-button hero-button--primary section-card-grid__card-button" href="<?php echo esc_url( $card_button_url ); ?>"><?php echo esc_html( $card_button_label ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if ( $section_bottom_button_label && $section_bottom_button_url ) : ?>
            <div class="section-card-grid__bottom-cta">
                <a class="hero-button hero-button--<?php echo esc_attr( $section_bottom_button_style ); ?>" href="<?php echo esc_url( $section_bottom_button_url ); ?>"><?php echo esc_html( $section_bottom_button_label ); ?></a>
            </div>
        <?php endif; ?>

        <?php if ( $post_grid_content ) : ?>
            <div class="section-card-grid__post-content">
                <?php echo $post_grid_content; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
