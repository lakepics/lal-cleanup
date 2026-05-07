<?php
/*
 * Template Name: Gallery
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>

<div id="main-content" role="main">

        <?php

        $pictures_all = get_field( 'images' ) ?: [];
        foreach ( $pictures_all as $picture ) {
            $categories[createSlug( $picture['category'] )] =  $picture['category'];
        }

        ?>

        <div class="container clearfix">
            <div class="gallery-filters-wrapper">
                <select id="gallery-filters">
                    <option selected="selected" value="*">show all</option>
                    <option value=".accommodations">Accommodations</option>
                    <option value=".activites">Activites</option>
                    <option value=".dining">Dining</option>
                    <option value=".facilities">Facilities</option>
                    <option value=".campus">Lake Arrowhead</option>
                    <option value=".meetings">Meetings</option>
                </select>
                <span>Show All</span>
            </div>
        </div>

        <div id="gallery-container" class="container clearfix">

        <?php
        $pictures = $pictures_all;
        foreach ( $pictures as $picture ) {
            $picture_src = wp_get_attachment_image_src( $picture['image']['id'], 'full' );
            $imgTitle = lacc_get_gallery_caption( array(
                isset( $picture['caption'] ) ? $picture['caption'] : '',
                isset( $picture['large_image'] ) ? $picture['large_image'] : array(),
                isset( $picture['image'] ) ? $picture['image'] : array(),
            ) );
            $caption_attributes = lacc_get_gallery_caption_attributes( $imgTitle );

            echo '<div class="item ' . esc_attr( trim( $picture['css_class'] . ' ' . createSlug( $picture['category'] ) ) ) . '">';
            if ( $picture['large_image'] ) {
                echo '<a data-fancybox="gallery"' . $caption_attributes . ' href="' . esc_url( $picture['large_image']['url'] ) . '">';
                echo '<img class="" src="' . esc_url( $picture_src[0] ) . '" alt="' . esc_attr( $imgTitle ) . '" />';
                echo '</a>';
            } else {
                echo '<img class="" src="' . esc_url( $picture_src[0] ) . '" alt="' . esc_attr( $imgTitle ) . '" />';
            }
            echo '</div>';
        }
        ?>

    </div>    
</div><!-- /main content -->

<script>
(function($) {
    $(document).ready(function() {
        var $container = $('#gallery-container');
        var $select    = $('#gallery-filters');
        var $span      = $select.siblings('span');

        $container.imagesLoaded(function() {
            $container.isotope({
                itemSelector: '.item',
                layoutMode: 'masonry'
            });
        });

        $select.on('change', function() {
            var filterValue = $(this).val();
            $container.isotope({ filter: filterValue });
            $span.text($(this).find('option:selected').text());
        });
    });
}(jQuery));
</script>

   <?php endwhile; ?>