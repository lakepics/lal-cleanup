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