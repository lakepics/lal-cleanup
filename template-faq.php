
<?php
/**
 * Template Name: FAQ - Page Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<div class="audiovisual-header">
<?php get_template_part('components/components-full-width-row');?>
</div>

<div class="faq-section">
<?php get_template_part('components/components-repeating-heading-paragraph');?>
</div>
<?php endwhile; ?>

