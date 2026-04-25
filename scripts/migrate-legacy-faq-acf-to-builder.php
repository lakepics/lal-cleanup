<?php

if ( php_sapi_name() !== 'cli' ) {
    fwrite(STDERR, "This script must be run from the command line.\n");
    exit(1);
}

require_once dirname(__DIR__, 4) . '/wp-load.php';

if ( ! function_exists('get_field') || ! function_exists('update_field') ) {
    fwrite(STDERR, "ACF functions are not available.\n");
    exit(1);
}

$template_from = 'template-faq-individual-acf.php';
$template_to = 'template-faq-accordion-builder.php';
$default_categories_intro = '<p>Don\'t see the answer to your question? Email us at <a href="mailto:UCLALakeArrowhead@ha.ucla.edu">UCLALakeArrowhead@ha.ucla.edu</a></p>';

$options = array(
    'apply' => false,
    'force' => false,
    'post_ids' => array(),
);

foreach ( array_slice($argv, 1) as $arg ) {
    if ( '--apply' === $arg ) {
        $options['apply'] = true;
        continue;
    }

    if ( '--force' === $arg ) {
        $options['force'] = true;
        continue;
    }

    if ( 0 === strpos($arg, '--post=') ) {
        $ids = explode(',', substr($arg, 7));
        foreach ( $ids as $id ) {
            $id = (int) trim($id);
            if ( $id > 0 ) {
                $options['post_ids'][] = $id;
            }
        }
    }
}

$options['post_ids'] = array_values(array_unique($options['post_ids']));

if ( empty($options['post_ids']) ) {
    $posts = get_posts(array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'meta_key' => '_wp_page_template',
        'meta_value' => $template_from,
        'fields' => 'ids',
        'orderby' => 'ID',
        'order' => 'ASC',
        'post_status' => array('publish', 'draft', 'pending', 'private', 'future'),
    ));
    $options['post_ids'] = array_map('intval', $posts);
}

if ( empty($options['post_ids']) ) {
    fwrite(STDOUT, "No posts found for migration.\n");
    exit(0);
}

foreach ( $options['post_ids'] as $post_id ) {
    $post = get_post($post_id);
    if ( ! $post ) {
        fwrite(STDOUT, "[skip] {$post_id}: post not found\n");
        continue;
    }

    $current_template = (string) get_post_meta($post_id, '_wp_page_template', true);
    $legacy_rows = get_field('accordion', $post_id);
    $existing_sections = get_field('page_sections', $post_id);

    if ( empty($legacy_rows) || ! is_array($legacy_rows) ) {
        fwrite(STDOUT, "[skip] {$post_id}: no legacy accordion rows\n");
        continue;
    }

    if ( ! empty($existing_sections) && ! $options['force'] ) {
        fwrite(STDOUT, "[skip] {$post_id}: page_sections already populated (use --force to overwrite)\n");
        continue;
    }

    $faq_groups = array();
    foreach ( $legacy_rows as $group ) {
        $title = isset($group['faq_section']) ? trim((string) $group['faq_section']) : '';
        $items = isset($group['faqs']) && is_array($group['faqs']) ? $group['faqs'] : array();

        if ( '' === $title || empty($items) ) {
            continue;
        }

        $faqs = array();
        foreach ( $items as $item ) {
            $question = isset($item['question']) ? trim((string) $item['question']) : '';
            $answer = isset($item['answer']) ? (string) $item['answer'] : '';

            if ( '' === $question || '' === trim(wp_strip_all_tags($answer)) ) {
                continue;
            }

            $faqs[] = array(
                'question' => $question,
                'answer' => $answer,
            );
        }

        if ( empty($faqs) ) {
            continue;
        }

        $faq_groups[] = array(
            'faq_section' => $title,
            'faq_section_anchor_id' => sanitize_title($title),
            'faq_section_summary' => '',
            'faqs' => $faqs,
        );
    }

    if ( empty($faq_groups) ) {
        fwrite(STDOUT, "[skip] {$post_id}: no valid FAQ groups after mapping\n");
        continue;
    }

    $page_sections = array(
        array(
            'acf_fc_layout' => 'section_faq_accordion',
            'section_anchor_id' => sanitize_title($post->post_name . '-faq'),
            'section_eyebrow' => '',
            'eyebrow_text_transform' => 'uppercase',
            'section_heading' => '',
            'section_intro' => '',
            'categories_heading' => 'Categories:',
            'categories_intro' => $default_categories_intro,
            'accordion_heading_font_family' => 'freight-big-pro',
            'heading_font_family' => 'haarlem',
            'heading_font_weight' => '400',
            'content_alignment' => 'left',
            'container_type' => 'container',
            'section_classes' => '',
            'background_color' => '#ffffff',
            'section_keyline_position' => '',
            'section_keyline_color' => '#b8b9b1',
            'padding_top' => '60px',
            'padding_bottom' => '60px',
            'faq_groups' => $faq_groups,
        ),
    );

    fwrite(
        STDOUT,
        sprintf(
            "[%s] %d %s: %d groups, %d questions\n",
            $options['apply'] ? 'apply' : 'dry-run',
            $post_id,
            $post->post_title,
            count($faq_groups),
            array_sum(array_map(static function ($group) { return count($group['faqs']); }, $faq_groups))
        )
    );

    if ( ! $options['apply'] ) {
        continue;
    }

    update_post_meta($post_id, 'legacy_faq_accordion_backup_json', wp_json_encode($legacy_rows));
    update_post_meta($post_id, 'legacy_faq_template_before_migration', $current_template);
    update_post_meta($post_id, 'legacy_faq_migrated_at', current_time('mysql'));

    $updated = update_field('page_sections', $page_sections, $post_id);
    if ( false === $updated ) {
        fwrite(STDOUT, "[error] {$post_id}: failed to update page_sections\n");
        continue;
    }

    update_post_meta($post_id, '_wp_page_template', $template_to);
    fwrite(STDOUT, "[done] {$post_id}: migrated to {$template_to}\n");
}