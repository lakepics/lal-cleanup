

<?php
$quicklinks = get_field("quicklinks");
$card_md_value = get_field('card_md_value');

if ($quicklinks) {

    echo    '<div class="quicklinks">
            <div class="container">
                    <div class="row">';
    foreach ($quicklinks as $quicklink) {
        echo '<div class="col-md-' . $card_md_value . '">';
            if ( $quicklink['redirect'] ) { 
            echo '<a class="quicklinks__card--redirect" href="' . $quicklink['redirect'] . '">';
            }
            echo '<div class="quicklinks__card">';
                        if ( $quicklink['heading'] ) { echo '<div class="quicklinks__card--heading--container"><h3 class="quicklinks__card--heading">' . $quicklink['heading'] . '</h3></div>'; }
                    echo '<div class="quicklinks__card--img" style="background-image: url(' . $quicklink['image'] . ');" </div>
                    </div>
                    <div class="quicklinks__card--subheading">' . $quicklink['subheading'];
                    $buttons = $quicklink['buttons'];
                    if ($buttons) {
                        foreach ($buttons as $button) {
                            echo '<a class="offer-button" href="' . $button['button_url'] . '">' . $button['button_label'] . '</a>'; 
                        }
                    }
                    echo '</div>';
            if ( $quicklink['redirect'] ) { echo '</a>'; }
        echo '</div>
            </div>';
    }
    echo                '</div>
            </div>
        </div>';
}
?>
<style>
    .quicklinks__card--subheading {
        padding: 10px 30px 15px;
    }
    .quicklinks__card {
        margin-bottom: 50px;
        max-width: 720px;
    }
    .quicklinks__card--img {
        min-height: 300px;
    }
    .heading__container, 
    .quicklinks {
        margin: 80px 0;
    }
    .quicklinks a {
        color: #6a4426;
    }
    .offer-button {
        display: block;
        margin: 16px auto;
        padding: 5px 15px;
        font-size: 16px;
        font-weight: bold;
        border: 2px solid #6a4426;
        color: #6a4426;
        transition: all .25s ease-in-out;
    }
    .offer-button:hover {
        background: #6a4426;
        color: #ffffff;
    }
</style>

