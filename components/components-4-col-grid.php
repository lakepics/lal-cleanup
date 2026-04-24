<?php 
$fourcols = get_field("fourcols");
if ($fourcols) {
	echo '<section class="meeting_planner_toolkit">';
	echo   '<section class="planner">
		    <div class="container">
		        <div class="row">
		            <div>';

		foreach ($fourcols as $content) {                    
            echo       '<div class="col-md-3 col-xs-12 col-sm-6">
		                    <div class="planner__card">
		                        <a class="planner__card-link" href="' . $content['redirect'] . '">
		                      
		                            <div class="planner__card--heading">' . $content['heading'] . '</div>
		                            <div class="planner__card--img" style="background-image: url(' . $content['image'] . ');">
		                            </div>
		                        </a>
		                    </div>
		                </div>';
		            }

     echo       		'</div>
		        </div>
		    </div>
		</section>';
	}
?>
<?php 
$fourcols2 = get_field("fourcols2");
if ($fourcols2) {
	echo   '<section class="planner">
		    <div class="container">
		        <div class="row">
		            <div>';

		foreach ($fourcols2 as $content) {                    
            echo       '<div class="col-md-3 col-xs-12 col-sm-6">
		                    <div class="planner__card">
		                        <a class="planner__card-link" href="' . $content['redirect'] . '">
		                      
		                            <div class="planner__card--heading">' . $content['heading'] . '</div>
		                            <div class="planner__card--img" style="background-image: url(' . $content['image'] . ');">
		                            </div>
		                        </a>
		                    </div>
		                </div>';
		            }

     echo       		'</div>
		        </div>
		    </div>
		</section>';
	}
?>
<?php 
$fourcols3 = get_field("fourcols3");
if ($fourcols3) {
	echo   '<section class="planner">
		    <div class="container">
		        <div class="row">
		            <div>';

		foreach ($fourcols3 as $content) {                    
            echo       '<div class="col-md-3 col-xs-12 col-sm-6">
		                    <div class="planner__card">
		                        <a class="planner__card-link" href="' . $content['redirect'] . '">
		                      
		                            <div class="planner__card--heading">' . $content['heading'] . '</div>
		                            <div class="planner__card--img" style="background-image: url(' . $content['image'] . ');">
		                            </div>
		                        </a>
		                    </div>
		                </div>';
		            }

     echo       		'</div>
		        </div>
		    </div>
		</section>
		</section>';
	}
?>
