<?php
 $onecols = get_field('onecols');
    if ($onecols) {
    echo    '<div class="container">
                <div class="single-divider-border"></div>
            </div>
            <div class="text_img">';
    foreach ($onecols as $onecol) {
    echo        '<div class="text_img__block--single">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="zero-margin-top">' . $onecol['heading'] . '
                                <span class="text_img__teambuilding---small-heading">' . $onecol['subheading'] . '</span>
                            </h3>
                         <div class="col-left-copy">' . $onecol['copy'] . '</div>
                    </div>
                        <div class="col-md-5">
                            <img class="img-responsive thirty-top-mobile" src="' . $onecol['image'] . '">
                        </div>';
    echo        	'</div>
                </div>
            </div>';
        	}
    echo '</div>';
    	}
?>


