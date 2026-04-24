<?php
/*
Template Name: General Specials
Template Post Type: specials, general, family
*/
?>

<style>
  a.button {
    background-color: #ad8a5f;
    max-width: 290px;
    background-position: 100%;
    background-repeat: no-repeat;
    color: #fff !important;
    display: inline-block;
    font-size: 1em;
    min-height: 40px;
    font-weight: 600;
    letter-spacing: .05em;
    line-height: 24px;
    margin: 0;
    padding: 10px 20px 10px 20px;
    zoom: 1;
  }
</style>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('./components/components-subheader'); ?>
  <?php add_filter('the_content', 'wpautop'); ?>

  <div class="container">
    <div class="row">
    <?php $image = get_field('image'); ?>
      <div class="col-md-4"><img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></div>
      <div class="col-md-8">
        <h2><?php the_field('special_name'); ?></h2>
        <h3><?php the_field('subheading'); ?></h3>
        <?php the_content(); ?>


        <a href="<?php the_field('travelclick_url'); ?>" class="button">Get Special</a>
      </div>

</div>
</div>
    <?php endwhile; ?>