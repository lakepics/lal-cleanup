<?php
    $two_fullrows = get_field('two_fullrows');
    if ($two_fullrows) {
    echo    	'
			    <div class="column__fullwidth">
			    <div class="container">

			    <div class="col-md-12">

                    <div class="row">';
    foreach ($two_fullrows as $content) {

    echo                '

						<div class="col-md-12">

                        <div class="col-md-7">
    						<h3 class="column__fullwidth--heading">' . $content['heading'] . '</h3>
    						<div class="column__fullwidth--paragraph">'
    						 . $content['paragraph'] . '</div>
                         </div>
                         <div class="col-md-5">
                            <img class="column__fullwidth--image" src="'
                             . $content['image'] . '">
                         </div>

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