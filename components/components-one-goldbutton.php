<?php

    $onebutton = get_field('onebutton');
    		if ($onebutton) {
        foreach ($onebutton as $content) {
       echo '<div class="row__gold-buttons">
                <div class="container">
				                    <div class="row">
				                        <div class="col-md-9 row__gold-buttons--copy">
				                                <div>' . $content['paragraph'] . '</div>
				                        </div>
				                        <div class="col-md-3">
							                <div class="row__gold-buttons--col">';

		echo 									'<div class="row__gold-buttons--rectangle">
							                            <a target="_blank" class=
							                            "row__gold-buttons--single" style="background-image: url(' . $content['btn-symbol1'] .'")

							                             href="' . $content['redirect1'] . '">' . $content['text1'] . '</a>
							                    </div>';
        }
        echo 								'</div>
			            				</div>
			            			</div>
		            			</div>
        		</div>
    		</div>
';
    }
?>
