<?php
/**
 * Standalone FAQ Accordion Component
 * 
 * Reusable accordion pattern for FAQ sections without category navigation.
 * Includes schema.org FAQPage markup and accessibility features.
 * 
 * Usage:
 *   $accordion_groups = array(
 *       array(
 *           'title' => 'Group Title',
 *           'anchor' => 'group-anchor',
 *           'id_prefix' => 'faq-group-1',
 *           'faqs' => array(
 *               array('question' => 'Q?', 'answer' => 'A'),
 *           ),
 *       ),
 *   );
 *   set_query_var('accordion_groups', $accordion_groups);
 *   get_template_part('components/components-accordion', 'faq-standalone');
 */

$accordion_groups = get_query_var('accordion_groups', array());
$accordion_section_id = get_query_var('accordion_section_id', 'faq-accordion');

if (empty($accordion_groups)) {
    return;
}

// Build schema.org FAQPage entities
$faq_schema_entities = array();
foreach ($accordion_groups as $group) {
    if (empty($group['faqs'])) {
        continue;
    }
    foreach ($group['faqs'] as $faq) {
        $faq_schema_entities[] = array(
            '@type' => 'Question',
            'name' => wp_strip_all_tags($faq['question']),
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text' => wp_strip_all_tags((string) $faq['answer']),
            ),
        );
    }
}
?>

<div class="faq-accordion" data-faq-accordion>
    <?php foreach ($accordion_groups as $group_index => $group) : ?>
        <?php 
            $group_anchor = !empty($group['anchor']) ? $group['anchor'] : 'group-' . $group_index;
            $group_id = !empty($group['id_prefix']) ? $group['id_prefix'] : 'faq-group-' . $group_index;
        ?>
        <div id="<?php echo esc_attr($group_anchor); ?>" class="faq-accordion__group">
            <?php if (!empty($group['title'])) : ?>
                <h3 class="faq-accordion__group-heading"><?php echo esc_html($group['title']); ?></h3>
            <?php endif; ?>
            
            <div class="faq-accordion__items" data-accordion-group="<?php echo esc_attr($group_id); ?>">
                <?php foreach ($group['faqs'] as $faq_index => $faq) : ?>
                    <?php 
                        $panel_id = $group_id . '-item-' . $faq_index;
                        $faq_answer = !empty($faq['answer']) ? $faq['answer'] : '';
                    ?>
                    <div class="faq-accordion__item">
                        <button 
                            type="button" 
                            class="faq-accordion__trigger" 
                            aria-expanded="false" 
                            aria-controls="<?php echo esc_attr($panel_id); ?>"
                        >
                            <span class="faq-accordion__question"><?php echo esc_html($faq['question']); ?></span>
                            <span class="faq-accordion__icon" aria-hidden="true"></span>
                        </button>
                        <div id="<?php echo esc_attr($panel_id); ?>" class="faq-accordion__answer" hidden>
                            <?php echo wp_kses_post($faq_answer); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php if (!empty($faq_schema_entities)) : ?>
    <script type="application/ld+json">
    <?php echo wp_json_encode(
        array(
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $faq_schema_entities,
        ),
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
    ); ?>
    </script>
<?php endif; ?>

<style>
.faq-accordion {
    margin: 0;
    padding: 0;
}

.faq-accordion__group {
    margin-bottom: 3em;
}

.faq-accordion__group:last-child {
    margin-bottom: 0;
}

.faq-accordion__group-heading {
    margin: 0 0 1.5em 0;
    font-size: 1.5em;
    font-weight: 600;
    line-height: 1.2;
    color: #333;
}

.faq-accordion__items {
    border-top: 1px solid #ddd;
}

.faq-accordion__item {
    border-bottom: 1px solid #ddd;
}

.faq-accordion__trigger {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 1em 0;
    border: 0;
    background: transparent;
    cursor: pointer;
    font-size: 1em;
    text-align: left;
}

.faq-accordion__trigger:hover {
    opacity: 0.8;
}

.faq-accordion__question {
    flex: 1;
    font-weight: 500;
    color: #333;
}

.faq-accordion__icon {
    display: inline-block;
    width: 12px;
    height: 12px;
    margin-left: 1em;
    flex-shrink: 0;
}

.faq-accordion__icon::after {
    content: '';
    display: block;
    width: 12px;
    height: 12px;
    border-right: 2px solid currentColor;
    border-bottom: 2px solid currentColor;
    transform: rotate(-45deg);
    transition: transform 0.2s ease;
}

.faq-accordion__trigger[aria-expanded="true"] .faq-accordion__icon::after {
    transform: rotate(45deg);
}

.faq-accordion__answer {
    padding: 0 0 1.5em 0;
    color: #555;
    line-height: 1.6;
}

.faq-accordion__answer p:first-child {
    margin-top: 0;
}

.faq-accordion__answer p:last-child {
    margin-bottom: 0;
}
</style>

<script>
(function() {
    function initAccordions() {
        var groups = document.querySelectorAll('[data-accordion-group]');
        
        groups.forEach(function(group) {
            var items = group.querySelectorAll('.faq-accordion__item');
            
            items.forEach(function(item) {
                var trigger = item.querySelector('.faq-accordion__trigger');
                var answer = item.querySelector('.faq-accordion__answer');
                
                if (!trigger || !answer) return;
                
                trigger.addEventListener('click', function() {
                    var isOpen = trigger.getAttribute('aria-expanded') === 'true';
                    
                    // Close all siblings
                    items.forEach(function(sibling) {
                        var siblingTrigger = sibling.querySelector('.faq-accordion__trigger');
                        var siblingAnswer = sibling.querySelector('.faq-accordion__answer');
                        if (siblingTrigger && siblingAnswer) {
                            siblingTrigger.setAttribute('aria-expanded', 'false');
                            siblingAnswer.hidden = true;
                        }
                    });
                    
                    // Toggle current
                    if (!isOpen) {
                        trigger.setAttribute('aria-expanded', 'true');
                        answer.hidden = false;
                    }
                });
            });
        });
    }
    
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAccordions);
    } else {
        initAccordions();
    }
})();
</script>
