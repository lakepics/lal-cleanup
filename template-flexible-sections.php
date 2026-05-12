<?php
/**
 * Template Name: Flexible Sections Builder
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php $has_blueheaders = have_rows('blueheaders'); ?>
    <?php $page_sections = get_field('page_sections'); ?>
    <?php $has_video_hero = false; ?>

    <?php if ( is_array( $page_sections ) ) : ?>
      <?php foreach ( $page_sections as $page_section ) : ?>
        <?php if ( 'section_video_hero' === ( $page_section['acf_fc_layout'] ?? '' ) ) : ?>
          <?php $has_video_hero = true; ?>
          <?php break; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    <?php endif; ?>

  <?php get_template_part('components/_subheader'); ?>

    <?php if ( ! $has_blueheaders && ! $has_video_hero ) : ?>
    <div class="header__heading">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="header__heading--subheading"><?php echo esc_html( get_the_title() ); ?></h1>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <style>
  .section-video-hero,
  .section-video-hero *,
  .section-card-grid,
  .section-card-grid *,
  .section-content-block,
  .section-content-block *,
  .section-card-repeater-grid,
  .section-card-repeater-grid *,
  .section-image-scroller,
  .section-image-scroller *,
  .section-split-media,
  .section-split-media *,
  .section-faq-accordion,
  .section-faq-accordion *,
  .section-split-collage,
  .section-split-collage * {
    -webkit-hyphens: none;
    hyphens: none;
  }
  </style>
  <?php if ( have_rows('page_sections') ) : ?>
    <?php while ( have_rows('page_sections') ) : the_row(); ?>
      <?php $current_layout = get_row_layout(); ?>
      <?php if ( 'section_video_hero' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-video-hero'); ?>
      <?php elseif ( 'section_content_block' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-content-block'); ?>
      <?php elseif ( 'section_card_repeater_grid' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-card-repeater-grid'); ?>
      <?php elseif ( 'section_image_scroller' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-image-scroller'); ?>
      <?php elseif ( 'section_split_media' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-split-media'); ?>

      <?php elseif ( 'section_faq_accordion' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-faq-accordion'); ?>
      <?php elseif ( 'section_split_collage' === $current_layout ) : ?>
        <?php get_template_part('components/components', 'section-split-collage'); ?>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php else : ?>
    <div class="flexible-sections-fallback" style="padding-top:60px;padding-bottom:60px;max-width:1200px;margin:0 auto;padding-left:20px;padding-right:20px;">
      <div class="flexible-sections-fallback__content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endif; ?>
<?php endwhile; ?>
