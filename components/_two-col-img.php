<?php
 $twocols = get_field('twocols');
    if ($twocols) {
        echo '<div class="two-column-template">';
        foreach ($twocols as $twocol) {
        echo    '<div class="two-col">
                    <div class="container">
                    <div class="row">';
        echo                		'<div class="col-md-6">
                                           
                                        <img class="img-responsive" src="' . $twocol['image'] . '">
                                        
                                    	<h3 class="two-col__heading">' . $twocol['heading'] . '
                                        </h3>
                                            <div class="two-col__copy">' . $twocol['copy'] . '</div>
                                    </div>
                                    <div class="col-md-6">
                                            
                                        <img class="img-responsive" src="' . $twocol['image2'] . '">
                                      
                                        <h3 class="two-col__heading">' . $twocol['heading2'] . '
                                        </h3>
                                            <div class="two-col__copy">' . $twocol['copy2'] . '</div>
                                    </div>
                                    ';
        echo        			'</div>
				    </div>
                    </div>';
        	}
        echo '</div>';
    	}
?>
