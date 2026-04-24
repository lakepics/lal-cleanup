<?php
/**
 * Template Name: Specials Main Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div class="header__heading">
 				<div class="container">
	 				<h1 class="header__heading--subheading">Specials</h1>
 				</div>
        	</div>
<div class="main-specials">
<?php get_template_part('components/components-full-width-row');?>
</div>
<?php get_template_part('components/components-grid-nav-squares');?>

<?php endwhile; ?>
