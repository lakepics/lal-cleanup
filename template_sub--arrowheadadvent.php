<?php
/**
 * Template Name: Arrowhead AdventuresTemplate
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
<?php get_template_part('components/components-one-goldbutton');?>
<?php get_template_part('components/components-one-col-img');?>
            <div class="container">
        <div class="single-divider-border"></div>
    </div>
<section class="fullrow-div">
                <div class="container">
                <div class="col-md-12">
                    <div class="row" style="margin-bottom: 30px;">
                            <h3 class="zero-margin-top">SPECIALTY PROGRAMS FOR LARGE GROUPS</h3>
                            <div class="full-row-content"><p>If your group has a budget between $2,500 and $5,000 or includes more than 60 people, consider booking one of the following programs, which offer a great way to have fun together while experiencing growth as a team. Some of these options are also charity based/community-benefiting programs that give your group an opportunity to help others while enjoying a great time together. Each event is emcee’d and led by trained facilitators. </p>
</div>
          </div>
                </div>
            </div>

        </section>
<?php get_template_part('components/components-repeating-heading-paragraph');?>

<?php endwhile; ?>
