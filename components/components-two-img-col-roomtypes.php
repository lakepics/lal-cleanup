<?php

    $rooms = get_field('rooms');
    if ($rooms) {
        foreach ($rooms as $room) {
        echo '
<section class="two-col">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="' . $room['left-main-img'] . '">
                <h3 class="two-col__heading">' . $room['left-heading'] . '</h3>
                <p>' . $room['left-list'] . '</p>
                <a data-fancybox="' . $room['left-group'] . '" data-caption="' . $room['left-caption'] . '" href="' . $room['left-big-img'] . '">
                            <img class="img-responsive" src="' . $room['left-small-img'] . '">
                          </a>
                      <a data-fancybox="' . $room['left-group2'] . '" data-caption="' . $room['left-caption2'] . '" href="' . $room['left-big-img2'] . '">
        <img class="img-responsive" src="' . $room['left-small-img2'] . '">
      </a>
                </div>
                <div class="col-md-6">
                <img class="img-responsive" src="' . $room['right-main-img'] . '">
                <h3 class="two-col__heading ">' . $room['right-heading'] . '</h3>
                <p>' . $room['right-list'] . '</p>
                <a data-fancybox="' . $room['right-group'] . '" data-caption="' . $room['right-caption'] . '" href="' . $room['right-big-img'] . '">
                    <img class="img-responsive" src="' . $room['right-small-img'] . '">
                </a>
                <a  data-fancybox="' . $room['right-group2'] . '" data-caption="' . $room['right-caption2'] . '" href="' . $room['right-big-img2'] . '">
                    <img class="img-responsive" src="' . $room['right-small-img2'] . '">
                </a>
            </div>
        </div>
</section>
';

    }
}
?>


