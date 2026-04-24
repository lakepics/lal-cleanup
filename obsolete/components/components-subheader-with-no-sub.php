<?php
 $noheaders = get_field('noheaders');
 if ($noheaders) {
 	  foreach ($noheaders as $content) {
 	echo 	'<div class="header__heading">
 				<div class="container">
	 				<h1 class="header__heading--subheading">' . $content['heading'] . 
	 				'</h1>
 				</div>
        	</div>';
 		}
	}
?>
