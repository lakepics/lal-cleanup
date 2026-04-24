<!-- components-headings -->
<?php 
$headings = get_field("headings");
    if ($headings) {
    echo    '<div class="heading__container">
                <div class="container">
                    <div>';
    foreach ($headings as $heading) {
    echo    '<div class="row">
        <div class="col-md-12">
                <h1 class="heading__container--heading">' . $heading['heading'] . '
                </h1>
                </div>
                </div>
            <div class="row">
                    <div class="col-md-12">
                <p class="heading__container--subheading">' . $heading['subheading'] . '</p>
            </div>
            </div>
        </div>';
    }
    echo  '</div>
        </div>
    </div>';
    }
?>