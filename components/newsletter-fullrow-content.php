<?php
    $fullrows = get_field('fullrows');
    if ($fullrows) {
    echo        '
                <div class="container">
                    <div class="row">';
    foreach ($fullrows as $content) {
    echo                '
                        <div class="col-md-12">
                            <div class="fullrow__content">'
                             . $content['paragraph'] . '</div>
                        </div>
';
        }
    echo '          </div> 
                </div> ';
    }
?>


