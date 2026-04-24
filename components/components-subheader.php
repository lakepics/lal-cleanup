<?php
 $blueheaders = get_field('blueheaders');
 if ($blueheaders) {
 	  foreach ($blueheaders as $blueheader) {
 	echo 	'<div class="header__heading">
 				<div class="container">
                <div class="row">
				<div class="col-md-12">
	 				<h1 class="header__heading--subheading">' . $blueheader['heading'] . 
	 				'</h1>
                </div>
                </div>
 				</div>
            </div>
 			    <div class="subheader-title">
            	   <div class="container">
                       <div class="row">
					   <div class="col-md-12">
                    	<h2 class="header__heading--text">' . $blueheader['subheading'] . 
                    	'</h2>
                        </div>
                    </div>
                </div>
        	</div>';
 		}
	}
