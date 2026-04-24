<!-- Two Column Page Component: See Subpage - Two Column Section for ACF -->



<?php 

    $columns = get_field('columns');

    if ($columns) {
        
        echo '<section class="two-columns-div">
			    <div class="container">';
        
        foreach ($columns as $row) {
                echo '<div class="row">';
            
            echo '<div class="col-md-6"><h3>' . $row['left_column']['heading'] . '</h3>' . $row['left_column']['content'] . '</div>';
            echo '<div class="col-md-6"><h3>' . $row['right_column']['heading'] . '</h3>' . $row['right_column']['content'] . '</div>';
                echo '</div>';
        }
        
        echo        '</div>
        </section>';
    }

?>