<?php
    $fullrows2 = get_field('fullrows2');
    if ($fullrows2) {
    echo        '
                <section class="fullrow-div">
                <div class="container">
                <div class="col-md-12">
                    <div class="row">';
    foreach ($fullrows2 as $content) {
    echo                '
                            <h3>' . $content['heading'] . '</h3>
                            <div class="full-row-content">'
                             . $content['paragraph'] . '</div>
';
        }
    echo '          </div> 
                </div>  
            </div>
        </section>';
    }
?>