<?php
$section_anchor_id = strtolower( trim( (string) get_sub_field('section_anchor_id') ) );
$section_anchor_id = preg_replace( '/[^a-z0-9_-]+/', '-', $section_anchor_id );
$section_anchor_id = trim( (string) $section_anchor_id, '-' );
$section_eyebrow = trim( (string) get_sub_field('section_eyebrow') );
$eyebrow_text_transform = strtolower( trim( (string) get_sub_field('eyebrow_text_transform') ) );
$section_heading = trim( (string) get_sub_field('section_heading') );
$section_intro = get_sub_field('section_intro');
$categories_heading = trim( (string) get_sub_field('categories_heading') );
$categories_intro = get_sub_field('categories_intro');
$accordion_heading_font_family = strtolower( trim( (string) get_sub_field('accordion_heading_font_family') ) );
$section_heading_font_family = strtolower( trim( (string) get_sub_field('heading_font_family') ) );
$section_heading_font_weight = trim( (string) get_sub_field('heading_font_weight') );
$content_alignment = strtolower( trim( (string) get_sub_field('content_alignment') ) );
$container_type = trim( (string) get_sub_field('container_type') );
$section_classes = trim( (string) get_sub_field('section_classes') );
$background_color = trim( (string) get_sub_field('background_color') );
$section_keyline_position = strtolower( trim( (string) get_sub_field('section_keyline_position') ) );
$section_keyline_color = trim( (string) get_sub_field('section_keyline_color') );
$padding_top = trim( (string) get_sub_field('padding_top') );
$padding_bottom = trim( (string) get_sub_field('padding_bottom') );

if ( ! in_array( $eyebrow_text_transform, array( 'capitalize', 'uppercase', 'none' ), true ) ) {
    $eyebrow_text_transform = 'uppercase';
}

$groups = array();
if ( have_rows('faq_groups') ) {
    while ( have_rows('faq_groups') ) {
        the_row();

        $group_title = trim( (string) get_sub_field('faq_section') );
        if ( '' === $group_title ) {
            continue;
        }

        $group_anchor = strtolower( trim( (string) get_sub_field('faq_section_anchor_id') ) );
        $group_anchor = preg_replace( '/[^a-z0-9_-]+/', '-', $group_anchor );
        $group_anchor = trim( (string) $group_anchor, '-' );
        $group_anchor = $group_anchor ?: preg_replace( '/[^a-z0-9_-]+/', '-', strtolower( $group_title ) );
        $group_anchor = trim( (string) $group_anchor, '-' );
        $group_summary = trim( wp_strip_all_tags( (string) get_sub_field('faq_section_summary') ) );

        $faqs = array();
        if ( have_rows('faqs') ) {
            while ( have_rows('faqs') ) {
                the_row();

                $question = trim( (string) get_sub_field('question') );
                $answer = get_sub_field('answer');

                if ( '' === $question || empty( $answer ) ) {
                    continue;
                }

                $faqs[] = array(
                    'question' => $question,
                    'answer' => $answer,
                );
            }
        }

        if ( empty( $faqs ) ) {
            continue;
        }

        $groups[] = array(
            'title' => $group_title,
            'anchor' => $group_anchor,
            'summary' => $group_summary,
            'faqs' => $faqs,
        );
    }
}

if ( empty( $groups ) ) {
    if ( function_exists( 'lacc_is_component_demo_page' ) && lacc_is_component_demo_page() ) {
        $section_anchor_id = 'faq-demo';
        $section_eyebrow = 'Test Component';
        $section_heading = 'FAQ accordion demo';
        $section_intro = '<p>A flexible builder version of the individual traveler FAQ pattern, tuned for the newer wedding and landing page system.</p>';
        $categories_heading = 'Categories:';
        $categories_intro = '<p>Use this section for grouped questions, quick jump links, and expandable answers without relying on an older page‑specific template.</p>';
        $accordion_heading_font_family = 'freight-big-pro';
        $section_heading_font_family = 'haarlem';
        $section_heading_font_weight = '400';
        $content_alignment = 'left';
        $container_type = 'container';
        $section_classes = '';
        $groups = array(
            array(
                'title' => 'Reservation & Arrival',
                'anchor' => 'faq-demo-reservation-arrival',
                'summary' => 'Check‑in timing, access expectations, and the basics to know before you arrive.',
                'faqs' => array(
                    array(
                        'question' => 'What time is check-in?',
                        'answer' => '<p>Guest check‑in begins at 4 p.m. If you expect to arrive later in the evening, our team can still help coordinate your arrival details in advance.</p>',
                    ),
                    array(
                        'question' => 'Can I bring my pet?',
                        'answer' => '<p>Only service animals are permitted on property.</p>',
                    ),
                    array(
                        'question' => 'Do I need to be affiliated with UCLA to stay at the lodge?',
                        'answer' => '<p>No. Outside of Bruin Woods summer dates, the lodge welcomes a broad mix of guests, groups, and event attendees.</p>',
                    ),
                ),
            ),
            array(
                'title' => 'Guest Rooms',
                'anchor' => 'faq-demo-guest-rooms',
                'summary' => 'Room‑type guidance, property views, and what to expect from overnight stays.',
                'faqs' => array(
                    array(
                        'question' => 'Which room type should I book?',
                        'answer' => '<p>That depends on your group size and whether you want a more private chalet‑style stay or a simpler guest room. The builder can support richer answer formatting like links and multi‑paragraph guidance here.</p>',
                    ),
                    array(
                        'question' => 'Will my room have a lake view?',
                        'answer' => '<p>Most guest rooms have forest views, while key public areas across the property open up to wider lake and mountain scenery.</p>',
                    ),
                ),
            ),
            array(
                'title' => 'Activities & Events',
                'anchor' => 'faq-demo-activities-events',
                'summary' => 'Weddings, on‑property experiences, and how guests typically use the site.',
                'faqs' => array(
                    array(
                        'question' => 'Do you host weddings?',
                        'answer' => '<p>Yes. The current flexible builder work on the flex page is specifically aimed at supporting a stronger wedding landing experience with reusable sections.</p>',
                    ),
                    array(
                        'question' => 'What can guests do on property?',
                        'answer' => '<p>Depending on the season, guests can enjoy trails, lake views, lawn games, gathering spaces, and curated event programming across the site.</p>',
                    ),
                ),
            ),
        );
    } else {
        return;
    }
}

$allowed_heading_weights = array( '300', '400', '500', '600', '700' );
if ( ! in_array( $section_heading_font_weight, $allowed_heading_weights, true ) ) {
    $section_heading_font_weight = '400';
}

if ( ! in_array( $content_alignment, array( 'left', 'center', 'right' ), true ) ) {
    $content_alignment = 'left';
}

if ( ! in_array( $container_type, array( 'container', 'container-fluid' ), true ) ) {
    $container_type = 'container';
}

$font_map = array(
    'haarlem' => 'HaarlemDeco, Arial, Helvetica, sans-serif',
    'freight-big-pro' => '"Freight Big Pro", Georgia, serif',
);

$section_heading_font_css = isset( $font_map[ $section_heading_font_family ] ) ? $font_map[ $section_heading_font_family ] : 'HaarlemDeco, Arial, Helvetica, sans-serif';
$accordion_heading_font_css = isset( $font_map[ $accordion_heading_font_family ] ) ? $font_map[ $accordion_heading_font_family ] : '"Freight Big Pro", Georgia, serif';

$section_id = $section_anchor_id ?: 'section-faq-accordion-' . uniqid();
$section_keyline_position = in_array( $section_keyline_position, array( 'top', 'bottom' ), true ) ? $section_keyline_position : '';
$background_color = $background_color ?: '#ffffff';
$section_keyline_color = $section_keyline_color ?: '#b8b9b1';
$padding_top = $padding_top ?: '60px';
$padding_bottom = $padding_bottom ?: '60px';
$categories_heading = $categories_heading ?: 'Categories:';

$section_styles = array(
    'background-color:' . $background_color,
    'padding-top:' . $padding_top,
    'padding-bottom:' . $padding_bottom,
    '--sfaq-keyline:' . $section_keyline_color,
    '--sfaq-heading-font:' . $section_heading_font_css,
    '--sfaq-heading-weight:' . $section_heading_font_weight,
    '--sfaq-accordion-font:' . $accordion_heading_font_css,
    '--sfaq-accordion-question-font:' . $accordion_heading_font_css,
    '--sfaq-accordion-question-size:20px',
    '--sfaq-accordion-question-weight:400',
    '--sfaq-accordion-answer-open-bg:rgba(246,243,237,0.25)',
);

if ( 'top' === $section_keyline_position ) {
    $section_styles[] = 'border-top:1px solid ' . $section_keyline_color;
}

if ( 'bottom' === $section_keyline_position ) {
    $section_styles[] = 'border-bottom:1px solid ' . $section_keyline_color;
}

$section_style_attr = implode( ';', $section_styles );
$section_class_list = array( 'section-faq-accordion', 'section-faq-accordion--align-' . $content_alignment );
if ( '' !== $section_classes ) {
    $section_class_list[] = $section_classes;
}

$header_alignment = 'center' === $content_alignment ? 'center' : $content_alignment;
$header_margin = 'center' === $content_alignment ? '0 auto 42px' : ( 'right' === $content_alignment ? '0 0 42px auto' : '0 auto 42px 0' );
$header_intro_margin = 'center' === $content_alignment ? '18px auto 0' : ( 'right' === $content_alignment ? '18px 0 0 auto' : '18px auto 0 0' );
$categories_copy_margin = 'center' === $content_alignment ? '18px auto 0' : ( 'right' === $content_alignment ? '18px 0 0 auto' : '18px auto 0 0' );

$faq_schema_entities = array();
foreach ( $groups as $group ) {
    foreach ( $group['faqs'] as $faq ) {
        $faq_schema_entities[] = array(
            '@type' => 'Question',
            'name' => wp_strip_all_tags( $faq['question'] ),
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text' => wp_strip_all_tags( (string) $faq['answer'] ),
            ),
        );
    }
}

if ( ! empty( $faq_schema_entities ) ) {
    if ( function_exists( 'lacc_register_faq_schema_entities' ) ) {
        lacc_register_faq_schema_entities( $faq_schema_entities );
    }
}

$allowed_heading_html = array(
    'b' => array(),
    'strong' => array(),
    'i' => array(),
    'em' => array(),
    'br' => array(),
    'span' => array( 'class' => array() ),
);
?>

<style>
#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__header {
    margin: <?php echo esc_html( $header_margin ); ?>;
    max-width: 920px;
    text-align: <?php echo esc_html( $header_alignment ); ?>;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__eyebrow {
    display: inline-block;
    margin-bottom: 14px;
    color: #946E29;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .14em;
    line-height: 1.2;
    text-transform: <?php echo esc_html( $eyebrow_text_transform ); ?>;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__title {
    margin: 0;
    color: #51534a;
    font-family: var(--sfaq-heading-font, HaarlemDeco, Arial, Helvetica, sans-serif);
    font-size: clamp(34px, 4.4vw, 60px);
    font-weight: var(--sfaq-heading-weight, 400);
    line-height: 1.04;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__intro {
    margin: <?php echo esc_html( $header_intro_margin ); ?>;
    max-width: 760px;
    color: #51534a;
    font-family: Helvetica, Arial, Roboto, sans-serif;
    font-size: 17px;
    line-height: 1.7;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories {
    margin: 0 auto 48px;
    max-width: 920px;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-title {
    margin: 0 0 16px;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(28px, 2.8vw, 36px);
    font-weight: 400;
    letter-spacing: 0;
    line-height: 1.1;
    text-transform: none;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list {
    display: block;
    list-style: none !important;
    margin: 0;
    margin-left: 0;
    max-width: 640px;
    padding: 0 !important;
    padding-left: 0 !important;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list li {
    list-style: none !important;
    min-height: 0;
    margin: 0;
    padding-top: .75em;
    padding-bottom: .75em;
    padding-left: 0;
    border-bottom: 1px solid var(--sfaq-keyline, #b8b9b1);
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list li:last-child {
    border-bottom: 0;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list li::before {
    content: none !important;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list a {
    display: block;
    color: #6383a8;
    text-decoration: none;
    transition: color .2s ease, opacity .2s ease;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__category-link-title {
    display: block;
    color: #6383a8;
    font-family: var(--sfaq-accordion-question-font, var(--sfaq-accordion-font, "Freight Big Pro", Georgia, serif));
    font-style: normal;
    font-size: var(--sfaq-accordion-question-size, 20px);
    font-weight: var(--sfaq-accordion-question-weight, 400);
    line-height: 1.16;
    text-decoration: none;
    text-decoration-thickness: 1px;
    text-underline-offset: .14em;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__category-link-summary {
    display: block;
    margin-top: 6px;
    color: #51534a;
    font-family: "Freight Big Pro", Georgia, serif;
    font-style: italic;
    font-size: 14px;
    line-height: 1.5;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list a:hover,
#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list a:focus {
    color: #4a6a8f;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list a:hover .section-faq-accordion__category-link-title,
#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list a:focus .section-faq-accordion__category-link-title {
    color: #4a6a8f;
    text-decoration: underline;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-copy {
    margin: <?php echo esc_html( $categories_copy_margin ); ?>;
    max-width: 640px;
    color: #51534a;
    font-family: Helvetica, Arial, Roboto, sans-serif;
    font-size: 16px;
    line-height: 1.6;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__inner {
    max-width: 1020px;
    margin: 0 auto;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__group {
    margin-bottom: 42px;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__group:last-child {
    margin-bottom: 0;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__group-title {
    margin: 0 0 18px;
    color: #51534a;
    font-family: HaarlemDeco, Arial, Helvetica, sans-serif;
    font-size: clamp(28px, 3.4vw, 40px);
    font-weight: 400;
    line-height: 1.1;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__panels {
    margin-bottom: 0;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__panel {
    border-bottom: 1px solid var(--sfaq-keyline, #b8b9b1);
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__panel-heading {
    margin: 0;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__panel-title {
    margin: 0;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__trigger {
    display: block;
    position: relative;
    width: 100%;
    padding: 14px 36px 14px 0;
    border: 0;
    background: transparent;
    color: #51534a;
    font-family: var(--sfaq-accordion-question-font, var(--sfaq-accordion-font, "Freight Big Pro", Georgia, serif));
    font-size: var(--sfaq-accordion-question-size, 20px);
    font-weight: var(--sfaq-accordion-question-weight, 400);
    letter-spacing: .01em;
    line-height: 1.16;
    text-align: left;
    text-decoration: none;
    text-transform: none;
    cursor: pointer;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__trigger:before {
    content: none !important;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__trigger:after {
    content: '';
    position: absolute;
    top: 50%;
    right: 8px;
    width: 10px;
    height: 10px;
    border-right: 2px solid #51534a;
    border-bottom: 2px solid #51534a;
    transform: translateY(-50%) rotate(-45deg);
    transform-origin: 50% 50%;
    transition: transform .2s ease;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__panel.is-open .section-faq-accordion__trigger:after {
    transform: translateY(-50%) rotate(45deg);
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__answer[hidden] {
    display: none;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__panel-body {
    padding: 1em 0 28px 1em;
    background: transparent;
    color: #51534a;
    font-family: Helvetica, Arial, Roboto, sans-serif;
    font-size: 16px;
    line-height: 1.7;
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__panel.is-open .section-faq-accordion__panel-body {
    background: var(--sfaq-accordion-answer-open-bg, rgba(246,243,237,0.25));
}

#<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__panel-body p:last-child {
    margin-bottom: 0;
}

@media (max-width: 767px) {
    #<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list {
        max-width: none;
    }

    #<?php echo esc_attr( $section_id ); ?> .section-faq-accordion__categories-list li {
        margin-bottom: 0;
    }

}
</style>

<?php
$section_intro_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $section_intro ) : $section_intro;
$categories_intro_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $categories_intro ) : $categories_intro;
?>

<section id="<?php echo esc_attr( $section_id ); ?>" class="<?php echo esc_attr( implode( ' ', $section_class_list ) ); ?>" style="<?php echo esc_attr( $section_style_attr ); ?>">
    <div class="<?php echo esc_attr( $container_type ); ?>">
        <?php if ( '' !== $section_eyebrow || '' !== $section_heading || ! empty( $section_intro ) ) : ?>
            <div class="section-faq-accordion__header">
                <?php if ( '' !== $section_eyebrow ) : ?>
                    <span class="section-faq-accordion__eyebrow"><?php echo esc_html( $section_eyebrow ); ?></span>
                <?php endif; ?>

                <?php if ( '' !== $section_heading ) : ?>
                    <h2 class="section-faq-accordion__title"><?php echo wp_kses( $section_heading, $allowed_heading_html ); ?></h2>
                <?php endif; ?>

                <?php if ( ! empty( $section_intro ) ) : ?>
                    <div class="section-faq-accordion__intro"><?php echo wp_kses_post( $section_intro_output ); ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="section-faq-accordion__inner">
                <?php if ( count( $groups ) > 1 || ! empty( $categories_intro ) ) : ?>
                    <div class="section-faq-accordion__categories">
                        <?php if ( count( $groups ) > 1 ) : ?>
                            <h3 class="section-faq-accordion__categories-title"><?php echo esc_html( $categories_heading ); ?></h3>
                            <ul class="section-faq-accordion__categories-list lacc-keyline-list--plain">
                                <?php foreach ( $groups as $group ) : ?>
                                    <li>
                                        <a href="#<?php echo esc_attr( $group['anchor'] ); ?>">
                                            <span class="section-faq-accordion__category-link-title"><?php echo esc_html( $group['title'] ); ?></span>
                                            <?php if ( ! empty( $group['summary'] ) ) : ?>
                                                <span class="section-faq-accordion__category-link-summary"><?php echo esc_html( $group['summary'] ); ?></span>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if ( ! empty( $categories_intro ) ) : ?>
                            <div class="section-faq-accordion__categories-copy"><?php echo wp_kses_post( $categories_intro_output ); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php foreach ( $groups as $group_index => $group ) : ?>
                    <?php $accordion_id = $section_id . '-accordion-' . $group_index; ?>
                    <div id="<?php echo esc_attr( $group['anchor'] ); ?>" class="section-faq-accordion__group">
                        <h3 class="section-faq-accordion__group-title"><?php echo esc_html( $group['title'] ); ?></h3>

                        <div class="section-faq-accordion__panels" id="<?php echo esc_attr( $accordion_id ); ?>" data-sfaq-group>
                            <?php foreach ( $group['faqs'] as $faq_index => $faq ) : ?>
                                <?php $panel_id = $accordion_id . '-panel-' . $faq_index; ?>
                                <?php $faq_answer_output = function_exists( 'lacc_strip_component_inline_styles' ) ? lacc_strip_component_inline_styles( $faq['answer'] ) : $faq['answer']; ?>
                                <div class="section-faq-accordion__panel">
                                    <div class="section-faq-accordion__panel-heading">
                                        <h4 class="section-faq-accordion__panel-title"><button type="button" class="section-faq-accordion__trigger" aria-expanded="false" aria-controls="<?php echo esc_attr( $panel_id ); ?>"><?php echo esc_html( $faq['question'] ); ?></button></h4>
                                    </div>
                                    <div id="<?php echo esc_attr( $panel_id ); ?>" class="section-faq-accordion__answer" hidden>
                                        <div class="section-faq-accordion__panel-body"><?php echo wp_kses_post( $faq_answer_output ); ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</section>

<?php if ( ! empty( $faq_schema_entities ) ) : ?>
<script type="application/ld+json"><?php echo wp_json_encode( array( '@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faq_schema_entities ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); ?></script>
<?php endif; ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var section = document.getElementById('<?php echo esc_js( $section_id ); ?>');

    if (!section) {
        return;
    }

    var groups = section.querySelectorAll('[data-sfaq-group]');

    groups.forEach(function (group) {
        var panels = group.querySelectorAll('.section-faq-accordion__panel');

        panels.forEach(function (panel) {
            var trigger = panel.querySelector('.section-faq-accordion__trigger');
            var answer = panel.querySelector('.section-faq-accordion__answer');

            if (!trigger || !answer) {
                return;
            }

            trigger.addEventListener('click', function () {
                var isOpen = panel.classList.contains('is-open');

                panels.forEach(function (otherPanel) {
                    var otherTrigger = otherPanel.querySelector('.section-faq-accordion__trigger');
                    var otherAnswer = otherPanel.querySelector('.section-faq-accordion__answer');

                    if (!otherTrigger || !otherAnswer) {
                        return;
                    }

                    otherPanel.classList.remove('is-open');
                    otherTrigger.setAttribute('aria-expanded', 'false');
                    otherAnswer.hidden = true;
                });

                if (!isOpen) {
                    panel.classList.add('is-open');
                    trigger.setAttribute('aria-expanded', 'true');
                    answer.hidden = false;
                }
            });
        });
    });
});
</script>