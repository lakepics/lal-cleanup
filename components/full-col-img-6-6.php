<?php 

/*
//  Two Equal Column Intro Section w/ Image: See Full Col Img 4 8 ACF
*/


// check parent for rows
if ( have_rows('intro') ): ?>

                 <section class="fullrow-div">
			         <div class="container">
                                <div class="row">
                                   <?php 
                                    // loop through parent rows
                                    while( have_rows('intro') ): the_row(); ?> 
                                        <div class="col-md-6">
                                            <?php
                                            // check left_column for rows
                                            if ( have_rows('left_column') ):
                                                // loop through left_column rows
                                                while ( have_rows('left_column') ): the_row();
                                                    // child one - heading
                                                    if ( get_sub_field('heading') ) { echo '<h3>' . get_sub_field('heading') . '</h3'; }
                                                    // child two - contnent
                                                    if ( get_sub_field('content') ) { echo '<div>' . get_sub_field('content'); }
                                                    // child three - check for rows
                                                    if ( have_rows('buttons') ): 
                                                         // loop though child three rows ?>
                                                         <style>
                                                             .button-gold {
                                                                    background-color: rgb(173, 138, 95);
                                                                    width: 274px;
                                                                    background-position: 100%;
                                                                    background-repeat: no-repeat;
                                                                    color: rgb(255, 255, 255)!important;
                                                                    display: inline-block;
                                                                    font-size: 1em;
                                                                    min-height: 40px;
                                                                    font-weight: 600;
                                                                    letter-spacing: .05em;
                                                                    line-height: 24px;
                                                                    margin: 0;
                                                                    padding: 10px 50px 10px 20px;
                                                                    zoom: 1;
                                                                }
                                                        </style>
                                                         <?php
                                                         while ( have_rows('buttons') ): the_row();
                                                            if ( get_sub_field('button_icon') ) { 
                                                                    echo '<p class="bottom-15"><a class="fa-button button-gold" style="background-image: url(' . get_sub_field('button_icon');
                                                                    echo '") href="';
                                                                    echo the_sub_field('url');
                                                                    echo '">';
                                                                    echo the_sub_field('label');
                                                                    echo '</a></p>';
                                                                }
                                                         endwhile; // while child three has rows
                                                    endif; // if child three has rows ?>
                                                        </div>
                                                    <?php 
                                                endwhile; // while left_column has rows
                                            endif; // if left column has rows
                                        ?>
                                        </div>
                                        <div class="col-md-6">   
                                            <?php
                                            if ( have_rows('right_column') ):
                                                while ( have_rows('right_column') ): the_row();
                                                    if ( get_sub_field('image') ) { 
                                                        echo '<img class="pull-right img-responsive thirty-top-mobile" src="';
                                                        echo the_sub_field('image');
                                                        echo '">';
                                                    } 
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    <?php endwhile; ?>    
                              	</div> 
                     </div>
		            </section>
<?php endif; ?>