
<?php

// Render optional blue header rows from ACF repeater.
if ( have_rows('blueheaders') ) :
    while ( have_rows('blueheaders') ) : the_row();
        $bheader = trim( (string) get_sub_field('heading') );
        $bsubheader = trim( (string) get_sub_field('subheading') );
?>
<div class="header__heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="header__heading--subheading"><?php echo esc_html( $bheader ); ?></h1>
            </div>
        </div>
    </div>
</div>
<?php if ( '' !== $bsubheader ) : ?>
<div class="subheader-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="header__heading--text"><?php echo esc_html( $bsubheader ); ?></h2>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php
    endwhile;
endif;

?>

<?php 
if (has_post_thumbnail()) :
$image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
<style>
    .hero-image {
        background: url(<?php echo $image_url; ?>) no-repeat center center;
        background-size: cover;
        width: 100%;
        height: 400px;
        margin-bottom: 0px;
    }   
</style>
<?php
echo '<div class="container-fluid hero-image"></div>';

endif;
?>