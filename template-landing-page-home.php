<?php
/**
 * Template Name: Landing Page Home Builder
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'components/components-background-video' ); ?>

  <?php if ( have_rows( 'page_sections' ) ) : ?>
    <?php while ( have_rows( 'page_sections' ) ) : the_row(); ?>
      <?php $current_layout = get_row_layout(); ?>
      <?php if ( 'section_video_hero' === $current_layout ) : ?>
        <?php get_template_part( 'components/components', 'section-video-hero' ); ?>
      <?php elseif ( 'section_card_grid' === $current_layout ) : ?>
        <?php get_template_part( 'components/components', 'section-card-grid' ); ?>
      <?php elseif ( 'section_image_scroller' === $current_layout ) : ?>
        <?php get_template_part( 'components/components', 'section-image-scroller' ); ?>
      <?php elseif ( 'section_image_collage' === $current_layout ) : ?>
        <?php get_template_part( 'components/components', 'section-image-collage' ); ?>
      <?php elseif ( 'section_split_media' === $current_layout ) : ?>
        <?php get_template_part( 'components/components', 'section-split-media' ); ?>
      <?php elseif ( 'section_featured_article' === $current_layout ) : ?>
        <?php
        $legacy_featured_container = 'contained' === strtolower( trim( (string) get_sub_field( 'layout_variant' ) ) ) ? 'container' : 'container-fluid';
        $GLOBALS['section_split_media_override'] = array(
          'media_mode' => 'single_image',
          'content_source' => 'linked_article',
          'linked_article' => get_sub_field( 'featured_article' ),
          'use_article_title' => 1,
          'use_article_excerpt' => 1,
          'use_article_featured_image' => 1,
          'section_anchor_id' => get_sub_field( 'section_anchor_id' ),
          'section_eyebrow' => get_sub_field( 'section_eyebrow' ),
          'section_heading' => get_sub_field( 'override_title' ),
          'section_intro' => get_sub_field( 'custom_excerpt' ),
          'section_image' => get_sub_field( 'override_image' ),
          'button_label' => get_sub_field( 'button_label' ),
          'button_url' => get_sub_field( 'button_url_override' ),
          'button_style' => get_sub_field( 'button_style' ),
          'image_position' => get_sub_field( 'image_position' ),
          'container_type' => $legacy_featured_container,
          'background_color' => get_sub_field( 'background_color' ),
          'content_background_color' => get_sub_field( 'card_background_color' ),
          'eyebrow_color' => get_sub_field( 'eyebrow_color' ),
          'eyebrow_text_transform' => get_sub_field( 'eyebrow_text_transform' ),
          'eyebrow_preset' => get_sub_field( 'eyebrow_preset' ),
          'title_color' => get_sub_field( 'title_color' ),
          'body_color' => get_sub_field( 'body_color' ),
          'heading_font_family' => get_sub_field( 'heading_font_family' ),
          'heading_font_weight' => get_sub_field( 'heading_font_weight' ),
          'padding_top' => get_sub_field( 'padding_top' ),
          'padding_bottom' => get_sub_field( 'padding_bottom' ),
          'seam_enabled' => 1,
          'seam_color' => get_sub_field( 'eyebrow_color' ),
        );
        get_template_part( 'components/components', 'section-split-media' );
        unset( $GLOBALS['section_split_media_override'] );
        ?>
      <?php elseif ( 'section_split_feature' === $current_layout ) : ?>
        <?php
        $GLOBALS['section_split_media_override'] = array(
          'media_mode' => 'single_image',
          'content_source' => 'manual',
          'section_anchor_id' => get_sub_field( 'section_anchor_id' ),
          'section_eyebrow' => get_sub_field( 'section_eyebrow' ),
          'section_heading' => get_sub_field( 'section_heading' ),
          'section_intro' => get_sub_field( 'section_copy' ),
          'section_image' => get_sub_field( 'section_image' ),
          'button_label' => get_sub_field( 'button_label' ),
          'button_url' => get_sub_field( 'button_url' ),
          'button_style' => get_sub_field( 'button_style' ),
          'image_position' => get_sub_field( 'image_position' ),
          'container_type' => 'container',
          'background_color' => get_sub_field( 'background_color' ),
          'content_background_color' => get_sub_field( 'content_background_color' ),
          'eyebrow_color' => get_sub_field( 'eyebrow_color' ),
          'eyebrow_text_transform' => get_sub_field( 'eyebrow_text_transform' ),
          'eyebrow_preset' => get_sub_field( 'eyebrow_preset' ),
          'title_color' => get_sub_field( 'title_color' ),
          'body_color' => get_sub_field( 'body_color' ),
          'heading_font_family' => get_sub_field( 'heading_font_family' ),
          'heading_font_weight' => get_sub_field( 'heading_font_weight' ),
          'padding_top' => get_sub_field( 'padding_top' ),
          'padding_bottom' => get_sub_field( 'padding_bottom' ),
          'media_min_height' => get_sub_field( 'image_min_height' ),
          'seam_enabled' => 1,
          'seam_color' => get_sub_field( 'eyebrow_color' ),
        );
        get_template_part( 'components/components', 'section-split-media' );
        unset( $GLOBALS['section_split_media_override'] );
        ?>
      <?php elseif ( 'section_faq_accordion' === $current_layout ) : ?>
        <?php get_template_part( 'components/components', 'section-faq-accordion' ); ?>
      <?php elseif ( 'section_split_collage' === $current_layout ) : ?>
        <?php get_template_part( 'components/components', 'section-split-collage' ); ?>
      <?php elseif ( 'section_two_column' === $current_layout ) : ?>
        <?php get_template_part( 'components/components', 'section-two-column' ); ?>
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
