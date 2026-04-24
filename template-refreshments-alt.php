<?php
/**
 * Template Name: Refreshment 2 - Page Template
 */
?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-one-goldbutton');?>
<?php //while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="single-divider-border"></div>
    </div>
	

   	
    <?php// endwhile; ?>
    
    
    
    <?php

// check if the flexible content field has rows of data
if( have_rows('refreshments_fields') ):

 	// loop through the rows of data
    while ( have_rows('refreshments_fields') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'image_header_block' ):

        			$image = "";
					$image = get_sub_field('heading_background_image');
					if(empty($image)){
						$image = "";
					}
					$heading = get_sub_field('area_heading');
					$info = get_sub_field('heading_optional_description');
			 		echo '<div class="container"><div class="rf-heading-container">';
					if( $image != ""){
						echo '<div class="heading-with-image" style="background: url(' . $image['url'] . ') no-repeat center center; background-size:cover;"></div>';
					}else {
						echo '<div class="single-divider-border"></div>';
					}
					echo "<h2>$heading</h2>";
					echo "<p>$info</p>";

				echo '</div></div>';

			

        endif;

// cycle through the two column layouts

		// check current row layout
        if( get_row_layout() == 'two_column_section' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('refreshment_block_one') ):

			 	echo '<div class="container refreshments">';

			 	echo '<div class="col-md-6">';
			 	echo '<div class="row">';
			 	// loop through the rows of data
			    while ( have_rows('refreshment_block_one') ) : the_row();
			
        			$imageone = "";
					$full_image_one = "";
					$heading = "";
					$info = "";
					$imageone = get_sub_field('optional_image_one');
					$heading = get_sub_field('refreshment_heading');
					$info = get_sub_field('refreshment_info');

					if(empty($heading)){
						$heading = "";
					}else{
						$headingwithtag = "<h3>".$heading."</h3>";
					}
					if(empty($info)){
						$info = "";
					}
					if(empty($imageone)){
						$imageone = "";
					} else {
						$full_image_one = "<img class='refreshment-img' src='" . $imageone['url']. "' alt='" . $imageone['alt']. "' />";
					}
					echo '<div class="col-md-12 refreshment-area"><div class="row"><div class="refreshment-container left">'. $full_image_one . "$headingwithtag <div class='refreshment-text'>$info</div></div></div></div>";

				endwhile;
				echo '</div>';
				echo '</div>';

			endif;
			// check if the nested repeater field has rows of data
        	if( have_rows('refreshment_block_two') ):

			 	echo '<div class="col-md-6">';
			 	echo '<div class="row">';

			 	// loop through the rows of data
			    while ( have_rows('refreshment_block_two') ) : the_row();
			
        			$imagetwo = "";
					$full_image_two = "";
					$headingtwo = "";
					$headingwithtag = "";
					$info = "";
					$imagetwo = get_sub_field('optional_image_two');
					$headingtwo = get_sub_field('refreshment_heading_two');
					$info = get_sub_field('refreshment_info_two');
					if(empty($headingtwo)){
						$headingtwo = "";
					}else{
						$headingwithtwotag = "<h3>".$headingtwo."</h3>";
					}
					if(empty($info)){
						$info = "";
					}
					if(empty($imagetwo)){
						$imagetwo = "";
					} else {
						$full_image_two = "<img class='refreshment-img' src='" . $imagetwo['url']. "' alt='" . $imagetwo['alt']. "' />";
					}
					echo '<div class="col-md-12 refreshment-area"><div class="row"><div class="refreshment-container right">'.$full_image_two . "$headingwithtwotag <div class='refreshment-text'>$info</div></div></div></div>";

				endwhile;

				echo '</div>';
				echo '</div>';
				echo '</div>';
			else:

				echo '<div class="col-md-12">';
				echo '<div class="row">';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			endif;

        endif;



		//one column 
        if( get_row_layout() == 'one_column_section' ):

        			$image = "";
					$image = get_sub_field('optional_image');
					if(empty($image)){
						$image = "";
					}
					$heading = get_sub_field('one_column_heading');
					$info = get_sub_field('one_column_description');
					echo '<div class="container"><div class="single-divider-border"></div></div>';
			 		echo '<div class="container"><div class="row"><div class="rf-one-column-container">';
					if( $image != ""){
						echo '<div class="col-md-7">';
						echo "<h2>$heading</h2>";
						echo "<p>$info</p>";
						echo '</div>';
						echo '<div class="col-md-5"><img class="refreshment-img" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/></div>';
					}else {
						echo '<div class="col-md-12">';
						echo "<h2>$heading</h2>";
						echo "<p>$info</p>";
						echo '</div>';
					}

				echo '</div></div></div>';

			

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
<!--section class="text_img">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
				<h3 class="zero-margin-top">Social Hour Packages</h3>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="text_heading__with_image img_appetizers">
						<h2 class="">HOUSE-MADE APPETIZERS</h2>
						<p>An exciting display of buffet-style appetizers can be created by combining items from the selection below.<span>All items require a 20-person minimum order.</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="text_img__socialhour--heading">
						<h4 class="">THE VERANDA PACKAGE</h4>
						<ul>
							<li>Garden-Fresh Vegetable Crudités with Two Specialty Dips</li>
							<li>Domestic and Imported Cheeses</li>
							<li>Fresh Seasonal Fruits</li>
							<li>Crackers and French Bread</li>
						</ul>
					</div>
					<div class="text_img__socialhour--heading">
						<h4>THE FIRESIDE PACKAGE</h4>
						<ul>
							<li>All items in the Veranda Package</li>
							<li>Hot Items Selected &amp; Prepared by our Executive Chef</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="text_img__socialhour--heading">
						<h4>THE TAVERN PACKAGE</h4>
						<p>An assortment of cocktail snacks such as Pretzels, Nuts, and Crackers served in baskets along with one (1) Chef ’s Choice of Chips &amp; Dip. </p>
					</div>
					<div class="text_img__socialhour--heading">
						<h4>THE LAKESIDE PACKAGE</h4>
						<p>A sweet selection of seasonal items such as assorted Petit Fours and Chocolate-dipped Strawberries.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="single-divider-border"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3 class="zero-margin-top">Coffee Break Additions</h3>
					<p>Complimentary coffee service is available in your meeting room throughout the day. You may also order refreshments for your group to enjoy during meetings and breaks, and for an additional charge, you may add breakfast breads, cookies, fruit, juice, and sodas. Please inquire with our Conference Coordinators for more information.</p>
					<ul>
						<li>Sweet Rolls</li>
						<li>Freshly-Baked Cookies</li>
						<li>Whole Seasonal Fruit</li>
						<li>Cookie &amp Fruit Combo</li>
						<li>Bottled Juice</li>
						<li>Sodas, Individual</li>
					</ul>
				</div>
				<div class="col-md-5">
					<img class="img-responsive thirty-top-mobile" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/Dining_RefreshmentPg_01_555x350.jpg">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="single-divider-border"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="zero-margin-top">Bar Set-ups</h3>
					<p>The Conference Center, as a state agency, cannot sell or provide alcoholic beverages. We do, however, allow you to bring your own social beverages (alcoholic or non-alcoholic) — in bottles and cans only please, no kegs. At your request, we will provide a complimentary social room set-up (ice and glasses) before or after dinner.</p>
				</div>
			</div>
		</div>
	</section-->