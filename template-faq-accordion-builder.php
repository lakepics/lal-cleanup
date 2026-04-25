<?php
/**
 * Template Name: FAQ Accordion Builder
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('components/_subheader'); ?>

<?php if ( have_rows('page_sections') ) : ?>
    <?php while ( have_rows('page_sections') ) : the_row(); ?>
        <?php if ( 'section_faq_accordion' === get_row_layout() ) : ?>
            <?php get_template_part('components/components', 'section-faq-accordion'); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php else : ?>
    <section class="faq-section">
        <div class="container" style="padding-top:60px;padding-bottom:60px;">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php endwhile; ?>