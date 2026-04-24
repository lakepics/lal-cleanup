<?php
 $twolists = get_field('twolists');
    if ($twolists) {
        foreach ($twolists as $twolist) {
        echo    '
        <section class="row__bullet-bullet">
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="row__bullet-bullet--heading">' . $twolist['left-heading'] . '</h3>
                <ul>' . $twolist['left-list'] . '</ul>
            </div>
            <div class="col-md-6">
                <h3 class="row__bullet-bullet--heading">' . $twolist['right-heading'] . '</h3>
                    <ul>' . $twolist['right-list'] . '</ul>
                                </div>
                            </div>
                </div>
                </section>';
            }
        }
?>
