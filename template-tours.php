
<?php
/**
 * Template Name: Audio Tour Stop
 */
?>
<div class="lacc-hw-wrapper">
    <?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="lacc-hw-card-logo-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo-lacc-tours.png" alt="Lake Arrowhead History Walk Logo" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="lacc-hw-tour-card-wrapper">
                    <div class="lacc-hw-tour-card">
                        <div class="lacc-hw-card-image-wrapper">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="lacc-hw-tour-content">
                            <div class="lacc-hw-stop-num"><?php the_title(); ?></div>
                            <div class="lacc-hw-subtext">History of the Lake Arrowhead Community in the San Bernardino Mountain Range</div>
                            
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>

