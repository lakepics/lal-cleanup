<?php 

/*
//  One-Third / Two-Third Intro Section: See Full Col Img 4 8 ACF
*/

if ( have_rows('intro') ): ?>
                 <section class="fullrow-div">
			         <div class="container">
                                <div class="row">
                                   <?php 
                                    while( have_rows('intro') ): the_row(); ?> 
                                        <div class="col-md-4">
                                            <?php
                                            if ( have_rows('left_column') ):
                                                while ( have_rows('left_column') ): the_row();
                                                    if ( get_sub_field('heading') ) { echo '<h3>' . the_sub_field('heading') . '</h3>'; }
                                                    if ( get_sub_field('content') ) { 
                                                         echo '<div>';
                                                            echo the_sub_field('content'); 
                                                            if ( have_rows('buttons') ):
                                                                while ( have_rows('buttons') ): the_row();
                                                                if (get_sub_field('button-icon')) { echo '<p class="bottom-15">
                                                                     <a class="fa-button" style="background-image: url(' . the_sub_field('button-icon') .'") href="' . the_sub_field('url') . '">' . the_sub_field('label') . '</a> </p>';
                                                                }
                                                                endwhile;
                                                            endif;
                                                            ?>
                                                        </div>
                                                    <?php } 
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                        <div class="col-md-8">   
                                            <?php
                                            if ( have_rows('right_column') ):
                                                while ( have_rows('right_column') ): the_row();
                                                    if ( get_sub_field('image') ) { echo '<img src="' . the_sub_field('image') . '">'; } 
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    <?php endwhile; ?>    
    			            </div>  
			            </div>
		            </section>
<?php endif; ?>