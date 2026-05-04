<?php
$section_eyebrow = trim( (string) get_sub_field( 'section_eyebrow' ) );
$section_heading = get_sub_field( 'section_heading' );
$section_intro = get_sub_field( 'section_intro' );
$section_anchor_id = strtolower( trim( (string) get_sub_field( 'section_anchor_id' ) ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$eyebrow_text_transform = strtolower( trim( (string) get_sub_field( 'eyebrow_text_transform' ) ) );
$eyebrow_preset = strtolower( trim( (string) get_sub_field( 'eyebrow_preset' ) ) );
$content_alignment = strtolower( trim( (string) get_sub_field( 'content_alignment' ) ) );
$container_type = get_sub_field( 'container_type' ) ?: 'container';
$background_color = trim( (string) get_sub_field( 'background_color' ) );
$section_classes = trim( (string) get_sub_field( 'section_classes' ) );
$padding_top = trim( (string) get_sub_field( 'padding_top' ) );
$padding_bottom = trim( (string) get_sub_field( 'padding_bottom' ) );
$collage_min_height = trim( (string) get_sub_field( 'collage_min_height' ) );
$collage_gap = trim( (string) get_sub_field( 'collage_gap' ) );
$blend_mode = strtolower( trim( (string) get_sub_field( 'blend_mode' ) ) );
$hover_scale = trim( (string) get_sub_field( 'hover_scale' ) );
$enable_card_hover_effect = get_sub_field( 'enable_card_hover_effect' );

if ( ! in_array( $content_alignment, array( 'left', 'center', 'right' ), true ) ) {
    $content_alignment = 'center';
}

if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $eyebrow_text_transform = 'uppercase';
}
$eyebrow_color     = '';
$eyebrow_bg        = '';
$eyebrow_border    = '';
$eyebrow_padding   = '';
$eyebrow_radius    = '';

$eyebrow_preset_map = array(
    'pill'  => array(
        'transform' => 'uppercase',
        'color'     => '#946E29',
        'bg'        => 'transparent',
        'border'    => '1px solid rgba(181,138,45,0.32)',
        'padding'   => '0.42em 1.17em',
        'radius'    => '999px',
    ),
    'plain' => array(
        'transform' => 'uppercase',
        'color'     => '#946E29',
        'bg'        => 'transparent',
        'border'    => 'none',
        'padding'   => '0',
        'radius'    => '0',
    ),
    'ink'   => array(
        'transform' => 'uppercase',
        'color'     => '#f6f3ed',
        'bg'        => '#51534a',
        'border'    => 'none',
        'padding'   => '0.42em 1.17em',
        'radius'    => '999px',
    ),
);
if ( isset( $eyebrow_preset_map[ $eyebrow_preset ] ) ) {
    $p                      = $eyebrow_preset_map[ $eyebrow_preset ];
    $eyebrow_text_transform = $p['transform'];
    $eyebrow_color          = $p['color'];
    $eyebrow_bg             = $p['bg'];
    $eyebrow_border         = $p['border'];
    $eyebrow_padding        = $p['padding'];
    $eyebrow_radius         = $p['radius'];
}

$padding_top = $padding_top ?: '48px';
$padding_bottom = $padding_bottom ?: '48px';
$collage_min_height = $collage_min_height ?: '720px';
$collage_gap = $collage_gap ?: '18px';
$hover_scale = $hover_scale ?: '1.04';
$enable_card_hover_effect = ( null === $enable_card_hover_effect || '' === $enable_card_hover_effect ) ? 1 : $enable_card_hover_effect;

$allowed_blend_modes = array( 'multiply', 'normal', 'screen', 'overlay', 'darken' );
if ( ! in_array( $blend_mode, $allowed_blend_modes, true ) ) {
    $blend_mode = 'multiply';
}

$allowed_heading_html = array(
    'b' => array(),
    'strong' => array(),
    'i' => array(),
    'em' => array(),
    'br' => array(),
    'span' => array( 'class' => array() ),
);

$section_classes_list = array( 'section-image-collage', 'section-image-collage--align-' . $content_alignment );
if ( $enable_card_hover_effect ) {
    $section_classes_list[] = 'section-image-collage--hover-cards';
}
if ( $section_classes ) {
    $section_classes_list[] = $section_classes;
}

$section_styles = array(
    '--sic-eyebrow-transform:' . $eyebrow_text_transform,
    '--sic-eyebrow-color:' . ( $eyebrow_color ?: '#946E29' ),
    '--sic-eyebrow-bg:' . ( $eyebrow_bg ?: 'transparent' ),
    '--sic-eyebrow-border:' . ( $eyebrow_border ?: 'none' ),
    '--sic-eyebrow-padding:' . ( $eyebrow_padding ?: '0' ),
    '--sic-eyebrow-radius:' . ( $eyebrow_radius ?: '0' ),
    '--sic-gap:' . $collage_gap,
    '--sic-stage-min-height:' . $collage_min_height,
    '--sic-blend:' . $blend_mode,
    '--sic-hover-scale:' . $hover_scale,
    'padding-top:' . $padding_top,
    'padding-bottom:' . $padding_bottom,
);

if ( $background_color ) {
    $section_styles[] = 'background-color:' . $background_color;
}

$items = array();
if ( have_rows( 'collage_images' ) ) {
    while ( have_rows( 'collage_images' ) ) {
        the_row();

        $image = get_sub_field( 'image' );
        $image_url = '';
        $image_alt = '';

        if ( is_array( $image ) ) {
            $image_url = (string) ( $image['url'] ?? '' );
            $image_alt = (string) ( $image['alt'] ?? '' );
        } elseif ( is_numeric( $image ) ) {
            $attachment_id = (int) $image;
            if ( $attachment_id > 0 ) {
                $image_url = (string) wp_get_attachment_image_url( $attachment_id, 'full' );
                $image_alt = (string) get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
            }
        }

        if ( '' === $image_url ) {
            continue;
        }

        $image_link = trim( (string) get_sub_field( 'image_link' ) );
        $alt_override = trim( (string) get_sub_field( 'alt_text_override' ) );
        $column_start = max( 1, min( 12, (int) get_sub_field( 'column_start' ) ) );
        $column_span = max( 1, min( 12, (int) get_sub_field( 'column_span' ) ) );
        $row_start = max( 1, min( 12, (int) get_sub_field( 'row_start' ) ) );
        $row_span = max( 1, min( 12, (int) get_sub_field( 'row_span' ) ) );
        $offset_x = trim( (string) get_sub_field( 'offset_x' ) );
        $offset_y = trim( (string) get_sub_field( 'offset_y' ) );
        $rotation = trim( (string) get_sub_field( 'rotation' ) );
        $z_index = max( 1, (int) get_sub_field( 'z_index' ) );

        $items[] = array(
            'image_url'    => $image_url,
            'image_alt'    => $alt_override ?: ( $image_alt ?: $section_heading ?: 'Collage image' ),
            'image_link'   => $image_link,
            'column_start' => $column_start,
            'column_span'  => $column_span ?: 4,
            'row_start'    => $row_start,
            'row_span'     => $row_span ?: 3,
            'offset_x'     => $offset_x ?: '0px',
            'offset_y'     => $offset_y ?: '0px',
            'rotation'     => $rotation ?: '0deg',
            'z_index'      => $z_index,
        );
    }
}

$show_demo_collage = empty( $items ) && function_exists( 'lacc_is_component_demo_page' ) && lacc_is_component_demo_page();
if ( $show_demo_collage ) {
    $section_anchor_id = $section_anchor_id ?: 'image-collage';
    $section_eyebrow = $section_eyebrow ?: 'Image Collage';
    $section_heading = $section_heading ?: 'Image collage demo';
    $section_intro = $section_intro ?: '<p>This is a preview‑only render using real site imagery so you can test the layered blend, overlap, and hover motion before wiring in final content through ACF.</p>';
    $background_color = $background_color ?: '#efede8';
    $section_styles[] = 'background-color:' . $background_color;

    $items = array(
        array(
            'image_url'    => 'https://lal.local/wp-content/uploads/2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6604-1.jpg',
            'image_alt'    => 'Wedding guests and reception details at the lodge',
            'image_link'   => '',
            'column_start' => 1,
            'column_span'  => 6,
            'row_start'    => 2,
            'row_span'     => 5,
            'offset_x'     => '0px',
            'offset_y'     => '0px',
            'rotation'     => '0deg',
            'z_index'      => 2,
        ),
        array(
            'image_url'    => 'https://lal.local/wp-content/uploads/2024/08/LAL-Wedding-Leah-Rachel-Photography-0114Lucy_Mike__PF-1.jpg',
            'image_alt'    => 'Wedding couple with floral details at UCLA Lake Arrowhead Lodge',
            'image_link'   => '',
            'column_start' => 5,
            'column_span'  => 6,
            'row_start'    => 1,
            'row_span'     => 3,
            'offset_x'     => '-36px',
            'offset_y'     => '18px',
            'rotation'     => '0deg',
            'z_index'      => 3,
        ),
        array(
            'image_url'    => 'https://lal.local/wp-content/uploads/2024/08/MaggieSmithPhotography-MichelleAdam_DSC_6490-1.jpg',
            'image_alt'    => 'Wedding portrait details from the image scroller',
            'image_link'   => '',
            'column_start' => 7,
            'column_span'  => 5,
            'row_start'    => 5,
            'row_span'     => 3,
            'offset_x'     => '8px',
            'offset_y'     => '-18px',
            'rotation'     => '0deg',
            'z_index'      => 1,
        ),
    );
}

$layout_class = 'section-image-collage__layout section-image-collage__layout--full';
if ( 'container' === $container_type ) {
    $layout_class = 'section-image-collage__layout section-image-collage__layout--contained';
}
?>

<style>
.section-image-collage {
    position: relative;
    overflow: hidden;
}

.section-image-collage__header {
    margin-bottom: 34px;
}

.section-image-collage__layout {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
}

.section-image-collage__layout--contained {
    max-width: 1200px;
}

.section-image-collage__layout--full {
    max-width: none;
}

.section-image-collage--align-center .section-image-collage__header {
    text-align: center;
}

.section-image-collage--align-right .section-image-collage__header {
    text-align: right;
}

.section-image-collage__eyebrow {
    display: inline-block;
    margin-bottom: 10px;
    color: var(--sic-eyebrow-color, #946E29);
    background: var(--sic-eyebrow-bg, transparent);
    border: var(--sic-eyebrow-border, none);
    padding: var(--sic-eyebrow-padding, 0);
    border-radius: var(--sic-eyebrow-radius, 0);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: var(--sic-eyebrow-transform, uppercase);
}

.section-image-collage__header h2 {
    margin: 0 0 12px;
    color: #51534a;
}

.section-image-collage__intro {
    max-width: 780px;
}

.section-image-collage--align-center .section-image-collage__intro {
    margin-left: auto;
    margin-right: auto;
}

.section-image-collage--align-right .section-image-collage__intro {
    margin-left: auto;
}

.section-image-collage__stage {
    position: relative;
    display: grid;
    grid-template-columns: repeat(12, minmax(0, 1fr));
    grid-template-rows: repeat(8, minmax(56px, 1fr));
    gap: var(--sic-gap, 18px);
    min-height: var(--sic-stage-min-height, 720px);
    isolation: isolate;
    overflow: visible;
}

.section-image-collage__item {
    position: relative;
    grid-column: var(--sic-col, 1) / span var(--sic-col-span, 4);
    grid-row: var(--sic-row, 1) / span var(--sic-row-span, 3);
    z-index: var(--sic-z, 1);
    transform: translate(var(--sic-x, 0px), var(--sic-y, 0px)) rotate(var(--sic-rotate, 0deg));
    transform-origin: center center;
}

.section-image-collage--hover-cards .section-image-collage__item {
    box-shadow: 0 27px 32px -29px rgba(51, 51, 51, 0.5);
    transition: transform .35s ease, box-shadow .35s ease;
}

.section-image-collage--hover-cards .section-image-collage__item:hover,
.section-image-collage--hover-cards .section-image-collage__item:focus-within {
    transform: translate(var(--sic-x, 0px), var(--sic-y, 0px)) rotate(var(--sic-rotate, 0deg)) scale(var(--sic-hover-scale, 1.04));
    box-shadow: 0 30px 33px -29px rgba(51, 51, 51, 0.45);
}

.section-image-collage__media,
.section-image-collage__media:hover,
.section-image-collage__media:focus {
    display: block;
    width: 100%;
    height: 100%;
    color: inherit;
    text-decoration: none;
}

.section-image-collage__media img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
        opacity: 0.94;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 320px;
    border: 1px dashed rgba(148, 110, 41, 0.35);
    color: #6f6658;
    font-size: 15px;
    text-align: center;
    padding: 24px;
}

@media (max-width: 991px) {
    .section-image-collage__stage {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        grid-template-rows: none;
        min-height: 0;
    }

    .section-image-collage__item {
        grid-column: auto;
        grid-row: auto;
        transform: none;
    }

    .section-image-collage--hover-cards .section-image-collage__item:hover,
    .section-image-collage--hover-cards .section-image-collage__item:focus-within {
        transform: scale(1.02);
    }

    .section-image-collage__media img {
        aspect-ratio: 4 / 5;
    }
}

@media (max-width: 640px) {
    .section-image-collage__stage {
        grid-template-columns: 1fr;
    }
}
</style>

<?php $section_intro_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $section_intro ) : $section_intro; ?>

<section<?php echo $section_anchor_id ? ' id="' . esc_attr( $section_anchor_id ) . '"' : ''; ?> class="<?php echo esc_attr( implode( ' ', $section_classes_list ) ); ?>"<?php echo $section_styles ? ' style="' . esc_attr( implode( ';', $section_styles ) ) . '"' : ''; ?>>
    <div class="<?php echo esc_attr( $layout_class ); ?>">
        <?php if ( $section_eyebrow || $section_heading || $section_intro ) : ?>
            <div class="section-image-collage__header">
                <?php if ( $section_eyebrow ) : ?>
                    <span class="section-image-collage__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                <?php endif; ?>
                <?php if ( $section_heading ) : ?>
                    <h2><?php echo wp_kses( $section_heading, $allowed_heading_html ); ?></h2>
                <?php endif; ?>
                <?php if ( $section_intro ) : ?>
                    <div class="section-image-collage__intro"><?php echo $section_intro_output; ?></div>
                <?php endif; ?>
                </div>
        <?php endif; ?>

        <div class="section-image-collage__stage">
            <?php if ( ! empty( $items ) ) : ?>
                <?php foreach ( $items as $item ) : ?>
                    <div class="section-image-collage__item" style="--sic-col:<?php echo esc_attr( $item['column_start'] ); ?>;--sic-col-span:<?php echo esc_attr( $item['column_span'] ); ?>;--sic-row:<?php echo esc_attr( $item['row_start'] ); ?>;--sic-row-span:<?php echo esc_attr( $item['row_span'] ); ?>;--sic-x:<?php echo esc_attr( $item['offset_x'] ); ?>;--sic-y:<?php echo esc_attr( $item['offset_y'] ); ?>;--sic-rotate:<?php echo esc_attr( $item['rotation'] ); ?>;--sic-z:<?php echo esc_attr( $item['z_index'] ); ?>;">
                        <?php if ( $item['image_link'] ) : ?>
                            <a class="section-image-collage__media" href="<?php echo esc_url( $item['image_link'] ); ?>">
                                <img src="<?php echo esc_url( $item['image_url'] ); ?>" alt="<?php echo esc_attr( $item['image_alt'] ); ?>">
                            </a>
                        <?php else : ?>
                            <div class="section-image-collage__media">
                                <img src="<?php echo esc_url( $item['image_url'] ); ?>" alt="<?php echo esc_attr( $item['image_alt'] ); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="section-image-collage__empty" style="grid-column:1 / -1;">
                    Add images to the Image Collage section in ACF to preview the overlapping layout.
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
