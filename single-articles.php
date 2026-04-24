<?php
/*
Template Name: Articles
Template Post Type: articles
*/
?>


<style>
    @media screen and (max-width: 600px) {
        div[class="sidemenu"] {
            display: none !important;
        }
        div[class="featuredimage"] {
            display: none;
        }

    }
        #main-content p {
            font-family: Proxima Nova Regular, Helvetica Neue, Helvetia, Arial, sans-serif;
            line-height: 1.3;
            letter-spacing: .03em;
            text-align: left;
            color: #3f3f3f;
            margin-bottom: 1em;
        }
    .thumbnail,
    .wp-caption {
        border: 0px #fff solid !important;
        margin-bottom: -20px !important;
    }

    .wp-caption-text {
        font-size: 13px;
        font-style: italic;
        text-align: right;
    }
    .post-image {
        margin-bottom: 1.5em;
    }
</style>


<style>
    h4 {
        color: #000;
        font-size: 18px;
    }
</style>

<style>
    aside[class="sidebar"] {
        display: none !important;
    }
</style>

<style>
    @media screen and (max-width: 600px) {
        div[id="main-content"] {
            min-width: 100% !important;
            padding-left: 5px;
            padding-right: 5px;
        }
    }
</style>


<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('./components/components-subheader'); ?>




    <div class="header__heading" style=" background-color: #6383a8; width: 100%;">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <h1 class="header__heading--subheading">Articles</h1>
                </div>
            </div>
        </div>
    </div>

    <?php add_filter('the_content', 'wpautop'); ?>

    <div class="container">
        <div class=" row">
            <div id="main-content" role="main" class="col-md-8">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
                <h2><?php the_title(); ?></h2>
                <?php if (has_post_thumbnail()) {
                    $post_thumbnail_id = get_post_thumbnail_id();
                    $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                ?>
                    <div class="post-image">
                        <img title="image title" alt="thumb image" class="img-responsive" src="<?php echo $post_thumbnail_url; ?>">
                    </div>
                <?php } ?>
                <caption>
                    <span style="font-style: italic"><?php the_post_thumbnail_caption(); ?></span>
                </caption>
                <?php the_content(); ?>
            </div>
            <div class="col-md-4 sidemenu">
                <h3>Recent Articles</h3>
                <ul style="list-style: none !important; padding-left: 0px;">
                    <?php
                    $recent_posts = wp_get_recent_posts(array('post_type' => 'articles'));
                    foreach ($recent_posts as $recent) {
                        echo '<li style="margin-bottom: 5px; list-style-type: none; list-style-position: inside;"><a href="' . get_permalink($recent["ID"]) . '" title="Look ' . esc_attr($recent["post_title"]) . '" >' .   $recent["post_title"] . '</a> </li> ';
                    }
                    ?>
                </ul>

                <div style="display: none;">
                    <?php dynamic_sidebar('articles-side-bar'); ?>
                </div>
            </div>

        </div>

    </div>
    </div>
    <div style="clear:both;"></div>
<?php endwhile; ?>