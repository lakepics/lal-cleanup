<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="row pmb-30 border-bottom">
        <?php
        $rows = get_field('amenities');
        if ($rows) {
            foreach ($rows as $row) {
                $image = $row['amenity_icon'];
                $label = $row['amenity_text'];
                echo  '<div class="col-sm-12 col-xs-12 col-md-6">
                    <div class="block-img">
                        <img src="' . $image . '"> <div class="block-text">
                        <p>' . $label . '</p>
                        </div>
                    </div>
                </div>';
            }
        }
        ?>
    </div>
    <div class="row pmb-30 border-bottom">
            <div class="col-md-9">
                <?php
                $services_heading = get_field('services_heading');
                $services_content = get_field('services_content'); ?>
                <h3><?php if ($services_heading) {
                        echo $services_heading;
                    } ?></h3>
                <?php if ($services_content) {
                    echo $services_content;
                } ?>
            </div>
        </div>
    </div>