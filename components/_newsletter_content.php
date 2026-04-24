<style>
.header__heading {
    margin-top: 0;
}
</style>

<?php 

// check for rows (parent repeater)
if( have_rows('row') ): ?>
<div class="container">
    <?php 
    // loop through rows (parent repeater)
    while( have_rows('row') ): the_row();
            // check for rows (sub repeater)
            if( have_rows('column') ): ?>
                <div class="row">
                    <?php 
                // loop through rows (sub repeater)
                while( have_rows('column') ): the_row();
                    $col_class = get_sub_field('bs_col'); 
                    $header = get_sub_field('heading');
                    $content = get_sub_field('content');?>
                    <div class="<?php echo $col_class; ?>">
                    <h2><?php echo $header; ?></h2>
                    <div><?php echo $content; ?></div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; //if( get_sub_field('column') ): ?>
    <?php endwhile; // while( has_sub_field('row') ): ?>
    </div>
<?php endif; // if( have_rows('row') ): ?>
