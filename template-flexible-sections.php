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
    <?php $rendered_page_section = false; ?>
    <?php
    $render_component = static function ( $component_name ) {
        $template_file = locate_template( 'components/components-' . $component_name . '.php', false, false );

        if ( ! $template_file ) {
            return false;
        }

        include $template_file;
        return true;
    };
    ?>
    <?php while ( have_rows('page_sections') ) : the_row(); ?>
      <?php $current_layout = get_row_layout(); ?>
      <?php $normalized_layout = str_replace( '-', '_', strtolower( trim( (string) $current_layout ) ) ); ?>
      <?php
      $component_name = '';

      if ( 'section_video_hero' === $normalized_layout ) {
          $component_name = 'section-video-hero';
      } elseif ( 'section_card_grid' === $normalized_layout ) {
          $component_name = 'section-card-grid';
      } elseif ( 'section_content_block' === $normalized_layout ) {
          $component_name = 'section-content-block';
      } elseif ( 'section_card_repeater_grid' === $normalized_layout ) {
          $component_name = 'section-card-repeater-grid';
      } elseif ( 'section_image_scroller' === $normalized_layout ) {
          $component_name = 'section-image-scroller';
      } elseif ( 'section_split_media' === $normalized_layout ) {
          $component_name = 'section-split-media';
      } elseif ( 'section_faq_accordion' === $normalized_layout ) {
          $component_name = 'section-faq-accordion';
      } elseif ( 'section_split_collage' === $normalized_layout ) {
          $component_name = 'section-split-collage';
      } elseif ( false !== strpos( $normalized_layout, 'card_repeater' ) ) {
          $component_name = 'section-card-repeater-grid';
      } elseif ( false !== strpos( $normalized_layout, 'card_grid' ) ) {
          $component_name = 'section-card-grid';
      } elseif ( false !== strpos( $normalized_layout, 'content_block' ) ) {
          $component_name = 'section-content-block';
      }

      if ( '' !== $component_name && $render_component( $component_name ) ) {
          $rendered_page_section = true;
      }
      ?>
    <?php endwhile; ?>
    <?php if ( ! $rendered_page_section ) : ?>
      <div class="flexible-sections-fallback" style="padding-top:60px;padding-bottom:60px;max-width:1200px;margin:0 auto;padding-left:20px;padding-right:20px;">
        <div class="flexible-sections-fallback__content">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endif; ?>
  <?php else : ?>
    <div class="flexible-sections-fallback" style="padding-top:60px;padding-bottom:60px;max-width:1200px;margin:0 auto;padding-left:20px;padding-right:20px;">
      <div class="flexible-sections-fallback__content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endif; ?>
<?php endwhile; ?>
