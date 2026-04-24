<?php header("Location: /articles-home/", true, 301); ?>


<style>

div[class="container navconstainer"] {display: none;}
</style>


<style>
@media screen and (max-width: 600px) {
div[class="sidemenu"] {display: none !important;}}
</style>

<?php get_template_part('components/_subheader');?>


<style>
aside[class="sidebar"] {display: none !important;}
</style>

<style>
@media screen and (max-width: 600px) {
div[id="main-content"] {min-width: 100% !important; padding-left: 5px; padding-right: 5px;}}
</style>


<?php get_template_part('./components/components-subheader');?>




<div class="header__heading" style=" background-color: #6383a8; width: 100%;">
 				<div class="container">
                <div class="col-md-12">
                <div class="row"><h1 class="header__heading--subheading">Articles</h1>
                </div>
                </div>
 				</div>
            </div>

<div class="container"">
<div class="row">

<div class="content-area" style="width: 100%;">
 <div id="main-content" role="main" style="width: 60%; float: left; object-fit: contain; padding-top: 35px;">



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php the_excerpt(); ?>

<?php endwhile; endif; ?>


</div>
<div style="float: right; width: 32%;" class="sidemenu">
<?php dynamic_sidebar( 'articles-side-bar' ); ?>
</div>
 </div>
    </div>

</div>
</div>
<div style="clear:both;"></div>

