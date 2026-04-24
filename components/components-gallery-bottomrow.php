
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
            <a href="https://lakearrowheadconferencecenter.ucla.edu/lake-arrowhead-accommodations/amenities/">
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


