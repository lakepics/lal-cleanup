<?php
$rows = get_field('card');
if ($rows) {
    echo '<div class="container transportation-services"><div class="row"><div class="col-md-12"><h2>Transportation Services</h2></div></div><div class="row">';
    foreach ($rows as $row) {
        $company = $row['company_name'];
        $phone = $row['phone'];
        $website = $row['website'];
        $email = $row['email'];
        $notes = $row['notes'];
        $clearfix = $row['clearfix']; ?>
        <div class="card col-md-3 <?php if ($clearfix == true) {
                                        echo ' clearfix';
                                    } ?>">
            <h3><?php echo $company; ?></h3>
            <?php if ($phone) {
                echo '<p><strong>Phone:</strong> <a href="tel:' . $phone . '">' . $phone . '</a></p>';
            } ?>
            <?php if ($website) {
                echo '<p><strong>Web:</strong> <a href="https://' . $website . '">' . $website . '</a></p>';
            } ?>
            <?php if ($email) {
                echo '<p><strong>Email:</strong> <a href="mailto:' . $email . '">' . $email . '</a></p>';
            } ?>
            <?php if ($notes) {
                echo '<p>' . $notes . '</p>';
            } ?>
        </div>
<?php
    }
    echo '</div><div class="row"><div class="col-md-9"><strong>*</strong>These companies are most familiar with our mountain location.</div></div></div>';
} ?>
<!-- Large Vehicles -->
<?php
$large_vehicles = get_field('large_vehicles');
$heading = $large_vehicles['heading'];
$content = $large_vehicles['content'];
$table_id = $large_vehicles['table_id'];
?>
<div class="container large-vehicles">
    <div class="row">
        <div class="col-md-9">
            <h2><?php echo $heading; ?></h2>
            <?php echo $content; ?>
        </div>
        <div class="clearfix col-md-12 route-table">
            <?php tablepress_print_table(array('id' => $table_id)); ?>
        </div>
    </div>
</div>