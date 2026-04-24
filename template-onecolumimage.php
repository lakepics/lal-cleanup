<?php
/**
 * Template Name: One Col/Img Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
        		<div class="row__gold-buttons">
                <div class="container">
                    <div class="row">
						<?php $intro = the_content();
						if ($intro) { echo $intro; } ?>
			        	</div>
            		</div>
        		</div>

<?php get_template_part('components/components-one-col-img');?>

<?php endwhile; ?>

