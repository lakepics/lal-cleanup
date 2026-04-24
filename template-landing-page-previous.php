<?php
/**
 * Template Name: Landing Page Template Legacy
 */
?>
<?php while (have_posts()) : the_post(); ?>


<!-- Slides Section -->



<?php
   $slides = get_field("slides");
if ($slides) {
echo '<section class="section-hero-slider"><div class="hero-slider">';
        echo '<div class="hero-slider">';

    foreach ( $slides as $slide ) {
        echo 	'<article class="hero" data-background="light">
    <div class="hero-slider-image" style="background-image: URl(' . $slide['image'] . ');">
    </div>
    <div class="hero-slider-container">
        <div class="black-box">
            <div class="hero-slider-content">
                <h1 class="hero-slider-title" data-animation="animated">' . $slide['overlay-h1'] . '
                                </h1>
                <h2 class="hero-slider-subheading" data-animation="animated">' . $slide['overlay-h2'] . '
                                </h2>
                <div class="hero-slider-btn">
                    <div class="heros-btn"></div>
                    <a href="' . $slide['overlay-redirect'] . '">' . $slide['button-text'] . '<i id="space" class="fa fa-arrow-circle-right" aria-hidden="true">
                                                </i>
                                        </a>
                </div>
                <div class="gold-absolute-wrapper-container">
                <div class="gold-button-container">
                <div class="gold-buttons-mobile-center">
                    <div class="phone-slider-box">
                         <a href="https://lakearrowheadconferencecenter.ucla.edu//meetings/"><div class="phone-slider-box--text">Meetings & Conferences
                        </div></a>
                    </div>
                    <div class="phone-slider-box">
                        <a href="https://lakearrowheadconferencecenter.ucla.edu/stay-at-ucla-lake-arrowhead-conference-center/"> <div class="phone-slider-box--text">Accommodations
                        </div> </a>
                    </div>
                    <div class="phone-slider-box">
                         <a href="https://lakearrowheadconferencecenter.ucla.edu/meetings/room-capacities-floor-plans/"><div class="phone-slider-box--text">Property Maps
                        </div></a>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</article>
';
        }
    echo '</section>';
    echo '</div>';
}
    ?>




<!-- Awards Section -->

<div class="award__container" style="clear: both;">
<div class="container">
<div class="row">

<img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/04/awards-main.jpg">
 


</div>
</div>
</div>



<div style="display: none;">

<?php
   $awards = get_field("awards");
    if ($awards) {

    echo '<div class="award__container">
        <div class="container">
            <div class="col-md-12">
                <div class="row">';    
    foreach ( $awards as $award ) {           
    echo            '<div class="award__container--column">
                        <img src=" ' . $award['image'] . ' ">
                    </div>';
    }

    echo        '</div>
            </div>
        </div>
    </div>';

    }
?>
</div>


<!-- Headings Section -->

<?php 
$headings = get_field("headings");
    if ($headings) {
    echo    '<div class="heading__container">
                <div class="container">
                    <div>';
    foreach ($headings as $heading) {
    echo    '<div class="row">
        <div class="col-md-12">
                <h1 class="heading__container--heading">' . $heading['heading'] . '
                </h1>
                </div>
                </div>
            <div class="row">
                    <div class="col-md-12">
                <p class="heading__container--subheading">' . $heading['subheading'] . '</p>
            </div>
            </div>
        </div>';
    }
    echo  '</div>
        </div>
    </div>';
    }
?>







<!-- Quicklinks Section -->

<?php 
$quicklinks = get_field("quicklinks");
if ($quicklinks) {

echo    '<div class="quicklinks hidden-sm hidden-xs">
            <div class="container">
                    <div class="row">';
foreach ($quicklinks as $quicklink) {                    
echo                    '<div class="col-md-4">
                        <a class="quicklinks__card--redirect" href="' . $quicklink['redirect'] . '">
                            <div class="quicklinks__card">
                            <div class="quicklinks__card--heading--container"><h3 class="quicklinks__card--heading">' . $quicklink['heading'] . '</h3></div>
                                    <div class="quicklinks__card--img" style="background-image: url(' . $quicklink['image'] . ');" </div>
                                    </div>
                                <div class="quicklinks__card--subheading">' . $quicklink['subheading'] . '</div>
                                </a>
                            </div>
                            </div>';
    }
echo                '</div>
            </div>
        </div>';
    }
?>
















<!-- Gallery Top Row Section -->



    <?php
    $toprows = get_field('toprows');
    if ($toprows) {
        echo '<div class="gallery__container hidden-xs">';
        echo '<div class="gallery__container--row"><table width="100%" cellspacing="0" class="table_layout">';
        echo '<tr>';
        foreach ($toprows as $toprow) {
            echo '<td><img align="bottom" height="300" src="' . $toprow['image1'] . ' "width="227" /></td><td width="14px">&nbsp;</td>';
            echo '<td><img align="bottom" height="300" src="' . $toprow['image2'] . ' "width="470" /></td><td width="14px">&nbsp;</td>';
            echo '<td><img align="bottom" height="300" src="' . $toprow['image3'] . ' "width="470" /></td><td width="14px">&nbsp;</td>';
            echo '<td><img align="bottom" height="300" src="' . $toprow['image4'] . ' "width="470" /></td><td width="14px">&nbsp;</td>';
            echo '<td><img align="bottom" height="300" src="' . $toprow['image5'] . ' "width="227" /></td>';
        }
        echo '</tr></table></div></div>';
    }
    ?>



<!-- Gallery Bottom Row Section -->


    <?php
    $bottomrows = get_field('bottomrows');
    if ($bottomrows) {
        echo '<div style="padding-top:13px" class="gallery__container hidden-xs">';
        echo '<div class="gallery__container--row"><table width="100%" cellspacing="0" class="table_layout">';
        echo '<tr>';
        foreach ($bottomrows as $bottomrow) {
            echo '<td><img align="bottom" height="300" src="' . $bottomrow['image1'] . ' "width="470" /></td><td width="14px">&nbsp;</td>';
            echo '<td><img align="bottom" height="300" src="' . $bottomrow['image2'] . ' "width="227" /></td><td width="14px">&nbsp;</td>';

            echo '<td><img align="bottom" height="300" src="' . $bottomrow['image3'] . ' "width="470" /></td><td width="14px">&nbsp;</td>';
            echo '<td><img align="bottom" height="300" src="' . $bottomrow['image4'] . ' "width="227" /></td><td width="14px">&nbsp;</td>';
            echo '<td><img align="bottom" height="300" src="' . $bottomrow['image5'] . ' "width="470" /></td>';
        }
        echo '</tr></table></div></div>';
        echo '<div class="row">
    <div class="gallery__button">
        <div class="single-gallery-item hidden-sm hidden-md hidden-lg">
            <a href="https://lakearrowheadconferencecenter.ucla.edu/gallery/">
                <div class="homepage-gallery-grid">
                    <div class="maingrid__half_column">
                        <div class="maingrid__box" style="background-image: url(https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/04/Slider-1-MainLodge-compressor2-compressor3.jpg);">
                            <div class="maingrid__center_rectangle">
                                <div class="maingrid__center_rectangle--title">View Gallery</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="single-gallery-item hidden-sm hidden-md hidden-lg">
            <a href="https://lakearrowheadconferencecenter.ucla.edu/accommodations/on-site-amentities/">
                <div class="homepage-gallery-grid">
                    <div class="maingrid__half_column">
                        <div class="maingrid__box" style="background-image: url(https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/04/indoor-hot-tub.jpg);">
                            <div class="maingrid__center_rectangle">
                                <div class="maingrid__center_rectangle--title">On-Site Amenities</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="gallery__button--text  hidden-xs">
            <div class="gallery__button--child center-nf"><a href="https://lakearrowheadconferencecenter.ucla.edu/gallery/">View Full Gallery<i id="space" class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    </a>
</div>
';
        }
    ?>




<!-- Amenities Top Row Section -->

<?php
    $topgoldicons = get_field('topgoldicons');
    if ($topgoldicons) {
    echo    '<div class="amenities__container hidden-sm hidden-xs">

            <div class="container">
                    <h1 class="amenities__container--heading">On-Site Amenities</h1>
                    <div class="amenities__container--row row">
                <div class="col-xs-6 col-md-12">';
    foreach ($topgoldicons as $topgoldicon) {
    echo                '<div class="col-md-3">
                            <div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="' . $topgoldicon['image'] . ' "width="50px" />
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <div class="desc-child">' . $topgoldicon['text'] . '</div>
                                </div>
                            </div>
                        </div>';
        }
    echo '          </div>    
            </div>';
    }
?>


<!-- Amenities Bottom Row Section -->


<?php
    $bottomgoldicons = get_field('bottomgoldicons');
    if ($bottomgoldicons) {
    echo    '<div class="amenities__container--last--row row hidden-sm hidden-xs">
    <div class="col-xs-6 col-md-12">';
    foreach ($bottomgoldicons as $bottomgoldicon) {
    echo                '<div class="col-md-3">
                            <div>
                                <div class="amen-icon  col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="' . $bottomgoldicon['image'] . ' "width="50px" />
                                </div>
                                <div class="amen-icon  col-xs-8 col-sm-8 col-md-8">
                                    <div class="amenities-desc"><div class="desc-child">' . $bottomgoldicon['text'] . '</div></div>
                                </div>
                            </div>
                        </div>';
        }
    echo '          </div>    
                </div>
            </div>

            </div>';
    }
?>



<?php endwhile; ?>

