<?php
    $fullrows_heading = get_field('fullrows_heading');
    if ($fullrows_heading) {
    echo        '
                <div class="container">
                    <div class="row">';
    foreach ($fullrows_heading as $content) {
    echo                '
                        <div class="col-md-12 thirtypx">
                        <h3>'
                             . $content['heading'] . '</h3>
                            <div class="fullrow__content">'
                             . $content['paragraph'] . '</div>
                        </div>
';
        }
    echo '          </div>
                </div> ';
    }
?>
