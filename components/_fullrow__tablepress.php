<?php
    $tableps = get_field('tableps');
    if ($tableps) {
    echo        '<div class="container">';
    foreach ($tableps as $content) {
    echo                ''
                             . $content['contents'] . '';
        }
    echo '</div>';
    }
?>
