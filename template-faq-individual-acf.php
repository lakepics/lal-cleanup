<?php
/**
 * Template Name: FAQ Accordion  - Individual Traveler ACF
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<section class="faq-section"> 

<?php 
if( have_rows('accordion') ): ?>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <h2>Categories:</h2>
        <ul>
    <?php 
    while( have_rows('accordion') ): the_row(); ?>
    <?php if(get_sub_field('faq_section')) { $faq_section = get_sub_field('faq_section'); } ?>
    <?php echo '<li><a href="#' . $faq_section . '">' . $faq_section . '</a></li>'; ?>
  <?php endwhile;?>
    </ul>
        <div style="margin-top: 25px; margin-bottom: 25px;">
          <p>Don't see the answer to your question? Email us at <a href="mailto:UCLALakeArrowhead@ha.ucla.edu">UCLALakeArrowhead@ha.ucla.edu</a> 
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php 
if( have_rows('accordion') ): ?>
  <div class="container">
    <div class="col-md-8 col-xs-12">
    <?php 
    while( have_rows('accordion') ): the_row(); ?>
        <div class="row" name="<?php get_sub_field('faq_section') ?>">
            <h3><?php the_sub_field('faq_section'); ?></h3>
            <?php 
            if( have_rows('faqs') ): ?>
        <div class="panel-group wrap" id="bs-collapse">
                <?php 
                while( have_rows('faqs') ): the_row();
                    $panel_id = substr(get_sub_field('question'), 0, 16);
                    $panel_id = str_replace (array("\\'", "'", " "), '', $panel_id);
                    ?>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#<?php echo $panel_id; ?>"><?php if(get_sub_field('question')) {the_sub_field('question'); }?></a> </h4>
            </div>
            <div id="<?php echo $panel_id ?>" class="panel-collapse collapse">
              <div class="panel-body">
                <?php if(get_sub_field('answer')) {the_sub_field('answer');} ?>
              </div>
            </div>
          </div>
            <?php endwhile; ?>
        </div>
            <?php endif;?>
        </div>    

    <?php endwhile; ?>
    </div>
<?php endif; ?>
    </div>
  </div>
</section>
<?php endwhile; ?>
