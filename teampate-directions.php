<?php
/**
 * Template Name: Directions Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('./components/components-subheader');?>



<style>
.content-area {margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
margin-top: 35px;}

.content-area {line-height: 1.5em; font-size: 16px;}
.content-area p {padding-top: 10px; line-height: 1.5em;}
</style>


<div class="header__heading" style=" background-color: #6383a8; width: 100%;">
 				<div class="container">
                <div class="col-md-12">
                <div class="row">
	 				<h1 class="header__heading--subheading"><?php the_title(); ?></h1>
                </div>
                </div>
 				</div>
            </div>


<div class="container">
    <div class="row">

<div class="content-area">
<?php the_content(); ?>
</div>
</div style="clear: both;"></div>
            </div>
    </div>

<!-- end here -->
<!-- container with img/col begines here -->
<!-- end here -->
<!-- container with img/col begines here -->

<!-- end here -->
    <div class="container">
        <div class="divider-border"></div>
    </div>
<?php endwhile; ?>

