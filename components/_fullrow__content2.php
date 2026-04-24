<?php
    $fullrows2 = get_field('fullrows2');
    if ($fullrows2) {
    echo        '<div class="fullrow2">
                <div class="container">
                    <div class="row">';
    foreach ($fullrows2 as $content) {
    echo                '
                        <div class="col-md-12">
                            <div class="fullrow__content">'
                             . $content['paragraph'] . '</div>
                        </div>
';
        }
    echo '          </div> 
                </div>
                </div> ';
    }
?>