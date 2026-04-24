<?php
/*
 * Template Name: Articles Home
 */
?>


<style>
@media screen and (max-width: 600px) {
div[class="sidemenu"] {display: none !important;}}
</style>



<style>
@media screen and (max-width: 600px) {
div[class="featuredimage"] {display: none;}
}
</style>

<style>
.content-area {margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
margin-top: 35px;}

.content-area {line-height: 1.5em; font-size: 16px;}
.content-area p {padding-top: 10px; line-height: 1.5em;}
</style>


<style>
aside[class="sidebar"] {display: none !important;}
</style>

<style>
@media screen and (max-width: 600px) {
div[id="main-content"] {min-width: 100% !important; padding-left: 5px; padding-right: 5px;}}
</style>


<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('./components/components-subheader');?>




<div class="header__heading" style=" background-color: #6383a8; width: 100%;">
 				<div class="container">
                <div class="col-md-12">
                <div class="row">
	 				<h1 class="header__heading--subheading">Articles</h1>
                </div>
                </div>
 				</div>
            </div>


<div class="container"">
<div class="row">

<div class="content-area" style="width: 100%;">
 <div id="main-content" role="main" style="width: 65%; float: left; object-fit: contain;">


<div class="featuredimage">
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
</div>


<?php $args = array(
  'numberposts' => 10,
  'post_type'   => 'articles',
'posts_per_page' => 5,
'order_by' => 'date',
    'order' => 'desc'

);
 
$latest_articles = get_posts( $args );

if ( $latest_articles ) {
    foreach ( $latest_articles as $post ) :
        setup_postdata( $post ); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


<div style="object-fit: contain; overflow: hidden; width: auto; margin-bottom: 25px;" class="featuredimage">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(800,400)); ?></a>
</div>


<div style="margin-bottom: 5px;"><span style="color: #6A4426; font-weight: 700;"><?php echo get_the_date(); ?></span></div>
        <?php the_excerpt(); ?>
    <?php
    endforeach; 
    wp_reset_postdata();
}

; 





?>





</div>
<div style="float: right; width: 32%;" class="sidemenu">

<h3>Recent Articles</h3>
<ul style="list-style: none !important; padding-left: 0px;">
<?php
    $recent_posts = wp_get_recent_posts(array('post_type'=>'articles'));
    foreach( $recent_posts as $recent ){
        echo '<li style="margin-bottom: 5px; list-style-type: none; list-style-position: inside;"><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
    }
?>
</ul>

<div style="display: none;">
<?php dynamic_sidebar( 'articles-side-bar' ); ?>
</div>
</div>
 </div>
    </div>

</div>
</div>
<div style="clear:both;"></div>
<?php endwhile; ?>
