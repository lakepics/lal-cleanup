<?php
    $fullrows = get_field('fullrows');
    if ($fullrows) {
    echo        '
                <div class="container">
                    <div class="row">';
    foreach ($fullrows as $content) {
        $column_width = $content['card_desktop_width'];
        $column_offset = $content['card_desktop_offset'];
    echo '<div class="col-md-' . $column_width;
      if($column_offset) { echo 'col-md-offset' . $column_offset; }
     echo '">' . $content['paragraph'] . '</div>';
        }
    echo '          </div> 
                </div> ';
    }
?>