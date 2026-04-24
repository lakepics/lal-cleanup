<?php 

/**/
/*
/* Two Column Page Component: See Subpage - Two Column Section for ACF
/*
/**/

    if (have_rows('columns')):
        echo '<section class="two-columns-div">
			    <div class="container">';
        while(have_rows('columns')): the_row();
                echo '<div class="row"><div class="col-md-6">';
                if (have_rows('left_column')):
                    while(have_rows('left_column')): the_row();
                        echo '<h3>';
                        echo the_sub_field('heading');
                        echo '</h3>';
                        echo the_sub_field('content');
                    endwhile;
                endif;
                echo '</div><div class="col-md-6">';
                if (have_rows('right_column')):
                    while(have_rows('right_column')): the_row();
                        echo '<h3>';
                        echo the_sub_field('heading');
                        echo '</h3>';
                        echo the_sub_field('content');
                    endwhile;
                endif;
                echo '</div></div>';
        endwhile;        
        echo        '</div>
        </section>';
    endif;
?>