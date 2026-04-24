<?php
    $fullcopys = get_field('fullcopys');
    if ($fullcopys) {
    echo        '
                <section class="header-with-copy-8--text-4">
                <div class="container">
                <div class="col-md-12">
                    <div class="row">';
    foreach ($fullcopys as $content) {
    echo                '
                        <div class="col-md-12">
                            <h4>' . $content['heading'] . '</h4>
                            <div class="col-md-8">'
                             . $content['paragraph'] . '</div>
                             <div class="col-md-4">
                             <img class="col-img-right" src="'
                             . $content['image'] . ' ">
                             </div>
                        </div>
';
        }
    echo '          </div> 
                </div>  
            </div>
        </section>';
    }
?>