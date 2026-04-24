<?php
 $gridnavs = get_field('gridnavs');
    if ($gridnavs) {
        echo    '<section class="maingrid">
                    <div class="maingrid__container">
                            <div class="col-md-12">';
            foreach ($gridnavs as $gridnav) {
            echo                '<a href="' . $gridnav['redirect'] . '">
                                    <div class="maingrid__half_column">
                                    <div class="maingrid__box" style="background-image: url(' . $gridnav['image'] .');">
                                        <div class="maingrid__center_rectangle">
                                            <div class="maingrid__center_rectangle--title">' . $gridnav['title'] .
                                            '</div>
                                            </div>
                                        
                                    </div>
                                </div>
                                </a>';
                    if ($gridnav['redirect2']) { echo        '<a href="' . $gridnav['redirect2'] . '">
                                    <div class="maingrid__half_column">
                                    <div class="maingrid__box" style="background-image: url(' . $gridnav['image2'] .');">
                                             <div class="maingrid__center_rectangle">
                                            <div class="maingrid__center_rectangle--title">' . $gridnav['title2'] .
                                            '</div>
                                               </div>
                                </div>
                            </div>
                            </a>'; }
            }
            echo        '</div>
                    </div>
                </section>';
    }
?>