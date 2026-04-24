<?php
    $goldbuttons = get_field('goldbuttons');
    		if ($goldbuttons) {
        foreach ($goldbuttons as $goldbutton) {
       echo '<div class="row__gold-buttons">
                <div class="container">
                    <div class="row">
				                        <div class="col-md-8 row__gold-buttons--copy">
				                            <div>
				                                <p class="copy-paragraph">' . $goldbutton['paragraph'] . '</p>
				                            </div>
				                        </div>
				                        <div class="col-md-4">
							                <div class="row__gold-buttons--col">';

		echo 									'<p class="bottom-15">
							                            <a target="_blank" class=
							                            "row__gold-buttons--single"  style="background-image: url(' . $goldbutton['btn-symbol1'] .'")

							                             href="' . $goldbutton['redirect1'] . '">' . $goldbutton['text1'] . '</a>
							                    </p>
													<p class="bottom-15">
							                            <a target="_blank" class=
							                            "row__gold-buttons--single"  style="background-image: url(' . $goldbutton['btn-symbol2'] .'")

							                             href="' . $goldbutton['redirect2'] . '">' . $goldbutton['text2'] . '</a>
							                    </p>
													<p class="bottom-15">
							                            <a target="_blank" class=
							                            "row__gold-buttons--single"  style="background-image: url(' . $goldbutton['btn-symbol3'] .'")

							                             href="' . $goldbutton['redirect3'] . '">' . $goldbutton['text3'] . '</a>
							                    </p>';
        }
        echo 								'</div>
			            				</div>
			        	</div>
            		</div>
        		</div>
    		</div>';
    }
?>
