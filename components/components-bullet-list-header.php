<?php

    $bulletlists = get_field('bulletlists');
    if ($bulletlists) {
        echo '<div class="container">
                    <div class="row">';
        foreach ($bulletlists as $bulletlist) {
        echo '
                            <div class="col-md-8">
                                <div>' . $bulletlist['paragraph'] . '</div>
                            </div>
                            <div class="col-md-4">
                                <h3 class="mainrow__bullets-list--heading">' . $bulletlist['right-heading'] . '</h3>
                                <ul>' . $bulletlist['list'] . 
                                '</ul>
                            </div>';

        }
        echo '</div>
        </div>';

    }
?>