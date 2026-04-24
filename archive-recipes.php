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

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
.row {width: 100% !important; padding: 10px !important;}
  .column50, .column70, .column30 {
    width: 100% !important; padding: 10px !important;
  }
}


</style>


<style>

.column50 {width: 50%; float: left;}
.column30 {width: 30%; float: left;}
.column70 {width: 70%; float: left;}
.row {width: 100%;}
pimage.img {width: 50% !important;}


a.button {
    background-color: #ad8a5f;
    max-width: 290px;
    background-position: 100%;
    background-repeat: no-repeat;
    color: #fff!important;
    display: inline-block;
    font-size: 1em;
    min-height: 40px;
    font-weight: 600;
    letter-spacing: .05em;
    line-height: 24px;
    margin: 0;
    padding: 10px 20px 10px 20px;
    zoom: 1;}

</style>



<?php get_template_part('./components/components-subheader');?>




<div class="header__heading" style=" background-color: #6383a8; width: 100%;">
 				<div class="container">
                <div class="col-md-12">
                <div class="row"><h1 class="header__heading--subheading">Recipes</h1>
                </div>
                </div>
 				</div>
            </div>

<div class="container">
<div class="row">

<div class="content-area" style="width: 100%;">
 <div id="main-content" role="main" style="width: 100%; float: left; object-fit: contain; padding-top: 35px;">




<?php
    $loop = new WP_Query( array( 'post_type' => 'recipes' ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="pindex">
                <?php if ( has_post_thumbnail() ) { ?>


                    
<div class="pimage">
<div style="width: 50% !important;">
                        

                    </div>
                <?php } ?>
                <div class="ptitle" style="margin-bottom: 25px;">

<div class="column30">
<img src="<?php the_field('image'); ?>" style="width: 90% !important;">
</div>

<div class="column70">
                    <h3 style="font-size: 25px;"> <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
<h4><?php the_field('subheading'); ?></h4>

<p><?php the_excerpt(); ?></p>

<a href="<?php the_permalink(); ?>" class="button">See Recipe</a>
</div>

<div style="clear: both;"></div>

                </div>
            </div>
        <?php endwhile;
        if (  $loop->max_num_pages > 1 ) : ?>
            <div id="nav-below" class="navigation">
                <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
                <div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
            </div>
        <?php endif;
    endif;
    wp_reset_postdata();
?>




</div></div>


</div>

</div>
 </div>
<div style="display: none !important;">
   <?php dynamic_sidebar( 'articles-side-bar' ); ?>
</div>

</div>
</div>
<div style="clear:both;"></div>

