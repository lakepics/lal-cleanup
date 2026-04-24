<?php
/**
 * Template Name: Flexible Sections Builder
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part('components/templates', 'header'); ?>

  <?php $is_flex_demo_page = is_page( 'flex' ); ?>
  <?php $did_skip_flex_demo_split_feature = false; ?>

  <?php if ( have_rows('page_sections') ) : ?>
    <?php while ( have_rows('page_sections') ) : the_row(); ?>
      <?php $current_layout = get_row_layout(); ?>
      <?php if ( $is_flex_demo_page && 'section_split_feature' === $current_layout && ! $did_skip_flex_demo_split_feature ) : ?>
        <?php $did_skip_flex_demo_split_feature = true; ?>
      <?php elseif ( 'section_video_hero' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-video-hero'); ?>
      <?php elseif ( 'section_card_grid' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-card-grid'); ?>
      <?php elseif ( 'section_image_scroller' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-image-scroller'); ?>
      <?php elseif ( 'section_image_collage' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-image-collage'); ?>
      <?php elseif ( 'section_featured_article' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-featured-article'); ?>
      <?php elseif ( 'section_split_feature' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-split-feature'); ?>
      <?php elseif ( 'section_faq_accordion' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-faq-accordion'); ?>
      <?php elseif ( 'section_split_collage' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-split-collage'); ?>
        <?php elseif ( 'section_two_column' === $current_layout ) : ?>
          <?php get_template_part('components/components', 'section-two-column'); ?>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php else : ?>
    <div class="container" style="padding-top:60px;padding-bottom:60px;">
      <div class="row">
        <div class="col-md-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endwhile; ?>
