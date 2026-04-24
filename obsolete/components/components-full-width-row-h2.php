<?php
    $fullrows = get_field('fullrows');
    echo '<!-- hello world -->';
    if ($fullrows) {
    echo    	'
			    <section class="fullrow-div">
			    <div class="container">

			    <div class="col-md-12">

                    <div class="row">';
    foreach ($fullrows as $content) {

    echo                '

						<div class="col-md-12">
    						<h2>' . $content['heading'] . '</h2>
    						<div class="full-row-content">'
    						 . $content['paragraph'] . '</div>

                        </div>
';
        }
    echo '      	</div> 
    			</div>  

			</div>
		</section>';
    }
?>