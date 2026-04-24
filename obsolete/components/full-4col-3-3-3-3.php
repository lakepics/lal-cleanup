<?php 

/**/
/*
/* Four Column Page Component: See Subpage - Full 4Col 3-3-3-3 for ACF
/*
/**/

    if (have_rows('four_columns')):
        echo '<section class="four-columns-div">
			    <div class="container">';
        while(have_rows('four_columns')): the_row();
                echo '<div class="row"><div class="col-md-12">';
                if (have_rows('col_1')):
                    while(have_rows('col_1')): the_row();
                        echo '<div class="col-md-3">';
                        echo '<h3>';
                        echo the_sub_field('heading');
                        echo '</h3>';
                        echo the_sub_field('content');
                        echo '</div>';
                    endwhile;
                endif;
                if (have_rows('col_2')):
                    while(have_rows('col_2')): the_row();
                        echo '<div class="col-md-3">';
                        echo '<h3>';
                        echo the_sub_field('heading');
                        echo '</h3>';
                        echo the_sub_field('content');
                        echo '</div>';
                    endwhile;
                endif;
                if (have_rows('col_3')):
                    while(have_rows('col_3')): the_row();
                        echo '<div class="col-md-3">';
                        echo '<h3>';
                        echo the_sub_field('heading');
                        echo '</h3>';
                        echo the_sub_field('content');
                        echo '</div>';
                    endwhile;
                endif;
                if (have_rows('col_4')):
                    while(have_rows('col_4')): the_row();
                        echo '<div class="col-md-3">';
                        echo '<h3>';
                        echo the_sub_field('heading');
                        echo '</h3>';
                        echo the_sub_field('content');
                        echo '</div>';
                    endwhile;
                endif;
                echo '</div></div>';
        endwhile;        
        echo        '</div>
        </section>';
    endif;
?>