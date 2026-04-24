<?php
    $logos = get_field('logos');
    if ($logos) {
    echo        '
                <section class="fullrow__logo">
                <div class="container">
                <div class="col-md-12">
                    <div class="row">';
    foreach ($logos as $logo) {
    echo                '<img class="fullrow__logo--image img-responsive"src="' . $logo['image'] . '">
                            <h3>' . $logo['heading'] . '</h3>
                            <div class="full-row-content">'
                             . $logo['paragraph'] . '</div>
';
        }
    echo '          </div> 
                </div>  
            </div>
        </section>';
    }
?>