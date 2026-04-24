

<div class="award__container" style="clear: both;">
<div class="container">
<div class="row">

<img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/04/awards-main.jpg">

</div>
</div>
</div>



<div style="display: none;">

<?php
   $awards = get_field("awards");
    if ($awards) {

    echo '<div class="award__container">
        <div class="container">
            <div class="col-md-12">
                <div class="row">';    
    foreach ( $awards as $award ) {           
    echo            '<div class="award__container--column">
                        <img src=" ' . $award['image'] . ' ">
                    </div>';
    }

    echo        '</div>
            </div>
        </div>
    </div>';

    }
?>
</div>