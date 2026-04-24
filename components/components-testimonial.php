<?php

    $testimonials = get_field('testimonials');
    if ($testimonials) {
        echo '<div class="testimonials">';
        foreach ($testimonials as $testimonial) {
        echo 	'<div class="container">
	               	<div class="row">
		               	<div class="col-md-12">
		                    <div class="quote">' . $testimonial['quote'] . ' <div class="author">
		                        	<h3 class="testimonial-author">' . $testimonial['author'] . '</h3>
		                        	<p class="testimonial-title">' . $testimonial['title'] . '</p>
		                        </div>
		                    </div>
		                </div>
	                </div>
                </div>';

        }
        echo '</div>';
    }
?>

