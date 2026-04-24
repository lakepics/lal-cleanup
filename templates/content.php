<?php
   $awards = get_field("awards");
if ($awards) {
    echo '<section class=""><div class="award-section"><div class="center-nf"><div id="awards">';
        echo '<div class="col-md-12">">';

    foreach ( $awards as $award ) {
        echo '<div class="col-md-2"><a href="' . $award['redirect'] . '"><img src=' . $award['image'] . '</a></div>';
        }
    echo '</div></div></div></div>';
    echo '</section>';
    }
    ?>