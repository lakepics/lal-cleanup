<style>
	.quicklinks__card {
		max-width: none;
		min-height: 100%;
		padding: 32px;
	}
</style>

<?php 
$rows = get_field('cards');
if( $rows ) {
	echo '<div class="container" style="margin: 48px auto;"><div class="row">';
    foreach( $rows as $row ) {
        $card_desktop_width = $row['card_desktop_width'];
		$card_desktop_offset = $row['card_desktop_offset'];
		$card_heading = $row['card_heading'];
		$card_heading_align = $row['card_heading_align'];
		$card_body = $row['card_body'];
		$card_image = $row['card_image'];
		$new_row = $row['new_row'];
		echo '<div class="col-md-' . $card_desktop_width;
		if($card_desktop_offset) { echo ' col-md-offset-' . $card_desktop_offset; }
		echo '">';
		if ($card_image) {
				echo "<img src=" . $card_image['url'] . " alt='" . $card_image['alt'] . "' class='img-responsive' />";
			}
        echo '<div class="card quicklinks__card">'; 
		 	
			
			echo '<div class="quicklinks__card-body card-body">';
			echo '<h2 style="text-align: ' . $card_heading_align . '">' . $card_heading . '</h2>';
			echo '<div>' . $card_body . '</div>';
			echo '</div></div></div>';
			if ($new_row) {
				echo '</div><div class="row" style="margin-top: 24px;">';
			}
		}
		echo '</div></div>';
	}
?>
