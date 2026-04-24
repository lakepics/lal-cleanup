<?php
    $three_cols = get_field('three_cols');
    if ($three_cols) {
    echo    	'
			    <div class="column__f-5-4">
			    <div class="container">

			    <div class="col-md-12">

                    <div class="row">';
    foreach ($three_cols as $content) {

    echo                '

				<div class="col-md-12">

						<div class="divider-border-col3-5-4 "></div>
					<div class="col-md-4">
						<img class="column__f-5-4--image" src="' . $content['image'] . '">
					</div>
					<div class="col-md-5">
						<h2>'
						. $content['heading'] . '
						</h2>
						<p class="column__f-5-4--p1">' . $content['paragraph'] . '</p>
						<div class="column__f-5-4--p2">' . $content['paragraph2'] . '</div>
					</div>
					<div class="col-md-3">
						<p>' . $content['list'] . '</p>
						<div class="gen-btn">
							<div class="gen-btn-animate "></div>
								<a href="' . $content['button-direct'] . '">' . $content['button-text'] . '<i id="space" class="' . $content['fa-icon'] . '" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					';
        }
    echo '      	</div> 
    			</div>  

			</div>
		</div>
	</div>
</div>

';
    }
?>