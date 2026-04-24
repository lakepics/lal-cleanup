<!-- Two Column Page Component: See Subpage - Two Column -noheader Section for ACF -->



<?php 

    $two__col_nh = get_field('two__col_nh');

    if ($two__col_nh) {
        
        echo '<section class="two-columns-div">
                <div class="container">
                    <div class="col-md-12">';
        
        foreach ($two__col_nh as $row) {
                echo '<div class="row">';
            
            echo '<div class="col-md-6"><h3>' . $row['heading-left'] . '</h3>' . $row['content-left'] . '</div>';
            echo '<div class="col-md-6"><h3>' . $row['heading-right'] . '</h3>' . $row['content-right'] . '</div>';
                echo '</div>';
        }
        
        echo        '</div>
                </div>
        </section>';
    }

?>