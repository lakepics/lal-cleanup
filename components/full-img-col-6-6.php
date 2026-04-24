<?php
    $left_img_col = get_field('left_img_col');
    if ($left_img_col) {
    echo    	'
			    <div class="column__fullwidth--img-right">
			    <div class="container">

			    <div class="col-md-12">

                    <div class="row">';
    foreach ($left_img_col as $content) {

    echo                '

                        <div class="col-md-5">
                            <img class="column__fullwidth--img-right--image" src="'
                             . $content['image'] . '">
                            </div>
                         <div class="col-md-7">
                            <h3 class="column__fullwidth--img-right--heading">' . $content['heading'] . '</h3>
                            <div class="column__fullwidth--img-right--paragraph">'
                             . $content['paragraph'] . '</div>

                        </div>
';
        }
    echo '      	</div> 
    			</div>  

			</div>
		</div>
';
    }
?>