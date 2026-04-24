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
