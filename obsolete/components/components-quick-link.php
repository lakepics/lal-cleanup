<?php
 $quicklinks = get_field('quick_links');
if ($quicklinks) {
    echo '<div class="quick-links"><div class="page-container">';
    foreach ($quicklinks as $content ) {
        echo '<div class="col-sm-3 center-block text-center">
        <i class="fa fa-' . $content['icon'] . ' quick-link-icon"></i>
        <p>' . $content['content'] . '</p>
        <a href="' . $content['read_more'] . '">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>';
    }
    echo '</div></div>';
}
?>
