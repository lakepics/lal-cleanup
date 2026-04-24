<?php

    $bulletlistsnoheaders = get_field('bulletlistsnoheaders');
    if ($bulletlistsnoheaders) {
        echo '<div class="copy-bullets">
                <div class="container">
                    <div class="row">';
        foreach ($bulletlistsnoheaders as $bulletlistsnoheader) {
        echo '<div class="col-md-12">
                    <div class="row">
                            <div class="col-md-8">
                                <div class="copy-div">
                                    <p class="copy-paragraph">' . $bulletlistsnoheader['paragraph'] . '</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <ul class="bullet-list">' . $bulletlistsnoheader['list'] . 
                                '</ul>
                            </div>
                        </div>
                    </div>';

        }
        echo '</div>
            </div>
        </div>';

    }
?>