
<?php

// check if the repeater field has rows of data
if( have_rows('blueheaders') ):

 	// loop through the rows of data
    while ( have_rows('blueheaders') ) : the_row();

        // display a sub field value
       $bheader = get_sub_field('heading');
       $bsubheader = get_sub_field('subheading');
?>
<div class="header__heading">
 				<div class="container">
                <div class="col-md-12">
                <div class="row">
	 				<h1 class="header__heading--subheading"><?php echo $bheader; ?></h1>
                </div>
                </div>
 				</div>
            </div>
 			    <div class="subheader-title">
            	   <div class="container">
                	   <div class="col-md-12">
                       <div class="row">
							
								<h2 class="header__heading--text"><?php if(!empty($bsubheader)):?> <?php echo $bsubheader; ?><?php endif; ?></h2>
							
                        </div>
                    </div>
                </div>
        	</div>
<?php 
    endwhile;

else :

    // no rows found

endif;

?>

<?php 
if (has_post_thumbnail()) :
$image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
<style>
    .hero-image {
        background: url(<?php echo $image_url; ?>) no-repeat center center;
        background-size: cover;
        width: 100%;
        height: 400px;
        margin-bottom: 0px;
    }   
</style>
<?php
echo '<div class="container-fluid hero-image"></div>';

endif;
?>