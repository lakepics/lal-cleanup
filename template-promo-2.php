<?php
/**
 * Template Name: Promo 2 Template
 */
?>




<style>


@media only screen and (max-width: 600px) {.awards {display: none !important;}
.entire {max-width: 100%; clear: both;}
.explanation {max-width: 90%; margin: 0px 10px 20px 10px;}
.topped {margin-top: 35px !important;}
div[class="column left-column column-entry"], div[class="column right-column column-entry"], .contain {width: 100% !important; clear: both !important; padding: 0px 5px 20px 5px;}
.leftphotos, .rightphotos {max-width: 100% !important;}

}



@media only screen and (min-width: 600px) {.banner {display: block;}
}



body {position: static !important;}
footer {position: relative !important; display: none;}
.gform_button {text-align: center !important;}

span.gform_description, h3.gform_title {text-align: center !important;}
div.gform_page_footer {text-align: center !important;}
h3.gform_title {font-size: 30px !important;}
input[type="button"], .gform_wrapper .gform_footer input.button, .gform_wrapper .gform_footer input[type=submit], .gform_wrapper .gform_page_footer input.button, .gform_wrapper .gform_page_footer input[type=submit] {padding: 8px 8px !important;
    color: #FFFFFF !important;
    font-size: 18px !important;
    width: 180px !important;
    height: 50px;
    display: inline;
    cursor: pointer;
    font-weight: normal !important;
    text-transform: uppercase;
    background-color: #1C4D71 !important;
    background-image: none;
    border: 0 !important;
    outline: 0 !important;
    font-size: 24px;
    text-align: center;
    -webkit-appearance: none;
    -webkit-border-radius: 0;
    border-radius: 0;}


body .gform_wrapper .top_label div.ginput_container, .gform_wrapper.gf_browser_chrome select, .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {width: 100% !important;}

</style>

<style>
body img.gform_ajax_spinner {
 display: none !important;
}

a[class="button external external"] {display: none !important;}
</style>

<?php while (have_posts()) : the_post(); ?>
<?php /* no title so commenting this out get_template_part('components/page', 'header'); */ ?>



<a name="contactus"></a>
<div style="background: url('https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/12/3_LACC_Wedding-Banner-5.jpg'); background-repeat: no-repeat; background-size: cover; clear: both; padding-top: 105px; padding-bottom: 85px; height: 550px !important;">
<div style="max-width: 800px; margin: 0 auto !important; background: rgba(255,255,255, 0.9) !important; padding: 20px 40px 20px 40px;">
<a name="start"></a>
<?php echo do_shortcode( '[gravityform id="28" title="true" description="true" ajax="true"]' ); ?>
</div>

</div>






<div style="clear: both; margin-top: 20px; margin-bottom: 20px; margin-left: 0px; margin-right: 0px; float: 0px auto;" class="awards">

</div>

<div style="width: 1170px; margin: 0px auto;" class="entire">
<div class="topped">

<CenteR>
<h1 style="color: #6a4426;
    font-family: Proxima Nova Bold,Helvetica Neue,Helvetia,Arial,sans-serif;
    font-size: 2.2em;
    line-height: 1.15;
    padding: 0;">Start Your Life Together</h1>
<br>
<div style="clear: both; margin-bottom: 20px; margin-bottom: 25px;" class="explanation">
As you ascend the San Bernardino Mountains, winding your way up the hill with the clouds at your eyeline and the vast expanse of the pine-filled valley below, it's impossible to ignore the majestic natural beauty that surrounds you. It's an awe-filled experience, especially for those who rarely leave the city, the crisp clean air flooded with silence and the night sky beaded with stars. As you look to the south shore of the water and the surrounding peaks, you'll breathe in deeply, think of the person you're about to marry and wonder how in the world you got so lucky.</br>
</div>
</center>
</div>

</div>







<div style="max-width: 1170px; margin: 0px auto; margin-bottom: 55px !important;" class="contain">
<div class="two-columns clearfix">
<div class="column left-column column-entry" style="float: left;
    margin: 0;
    width: 47%;">
<?php if( get_field('bullet_one') ): ?>
	<h2 style="margin-bottom: 10px;"><?php the_field('bullet_one'); ?></h2>
<?php endif; ?>

<?php if( get_field('bullet_one_desc') ): ?>
	<?php the_field('bullet_one_desc'); ?>
<?php endif; ?>



<?php if( get_field('bullet_two') ): ?>
	<h2 style="margin-bottom: 10px;"><?php the_field('bullet_two'); ?></h2>
<?php endif; ?>


<?php if( get_field('bullet_two_desc') ): ?>
	<?php the_field('bullet_two_desc'); ?>
<?php endif; ?>




<?php if( get_field('bullet_three') ): ?>
	<h2 style="margin-bottom: 10px;"><?php the_field('bullet_three'); ?></h2>
<?php endif; ?>


<?php if( get_field('bullet_three_desc') ): ?>
	<?php the_field('bullet_three_desc'); ?>
<?php endif; ?>


</div>

<div class="column right-column column-entry" style="margin-bottom: 10px; float: right; width: 47%;">
<div style="margin-bottom: 10px; max-width: 100%;
    background: transparent;
    padding: 0;
    margin-bottom: 10px;
    margin-top: 0em;
    position: relative;">
<?php if( get_field('right_column_photo') ): ?>
<img src="<?php the_field('right_column_photo'); ?>" style="max-width: 100%;
    margin-bottom: 25px;"><?php endif; ?>


<?php if( get_field('captionyes') ): ?>
<div style="float: right; margin-top: -10px; margin-bottom: 10px;"><span style="font-style: italic;"><p style="position: absolute;
    bottom: 1px;
    right: 0px;
    margin: 0;
    padding: 3px 10px;
    font-size: 0.85em;
    text-align: right;
    color: #fff !important;
    background: rgba(66,66,66,0.44);"><?php 
$caption = get_field( 'caption' );

echo do_shortcode('[caption]'.$caption.'[/caption]'); ?></p></span></div>

<?php endif; ?>


<?php if( get_field('book_now_url') ): ?><center> 
<a style="background-color: #1C4D71; color: #FFFFFF !important; min-height: 42px; padding: 10px 20px 10px 20px;" href="<?php the_field('book_now_url'); ?>">Contact Us</a></p></center>
<?php endif; ?>

<div style="margin-top: 25px; clear: both; text-align: center !important;">
or <strong>Call (909) 336-7047</strong>
</div>


</div>

</div>
</div>

<div style="clear: both; margin-top: 55px;">
</div>


<?php
$bottom_section = get_field( 'bottom_section' );
if ( $bottom_section ) {
?>

        <div class="two-columns explore-ucla container clearfix">
            <?php foreach ( $bottom_section as $new_row ) {
        echo '<div class="two-columns clearfix">';
        echo '<div class="column left-column column-entry" style="width: 47%; float: left;">';
        foreach ( $new_row['left_column'] as $entry ) {
            if ( $entry['image'] ) {
                if ( $entry['image'] ) {
                    echo '<img src="'. $entry['image'] .'" alt="" class="leftphotos" style="max-width: 100% !important;" />';
                }
            }
            if ( $entry['title'] ) {
                if ( $entry['visit_site_url'] ) {
                    echo '<h4><a href="'. $entry['visit_site_url'] .'">'. $entry['title'] .'</a></h4>';
                } else {
                    echo '<a href="'. $entry['url'] .'" target="_blank"><h4>'. $entry['title'] .'</h4></a>';
                }
            }
            if ( $entry['desc'] ) {
                echo '<p>' . $entry['desc'] . '</p>';
            }

if ( $entry['url'] ) {

$button = "Contact Us";
                echo '<div style="margin-bottom: 40px;"><a href="'. $entry['url'] .'" class="button external external" style="background-color: #1C4D71; color: #FFFFFF !important; min-height: 42px; padding: 10px 20px 10px 20px;">'. $button .'</a></div>';
            }


        }





        echo '</div>';
        echo '<div class="column right-column column-entry" style="width: 47%; float: right;">';
        foreach ( $new_row['right_column'] as $entry ) {
            if ( $entry['image'] ) {
                if ( $entry['image'] ) {
                 echo '<img src="'. $entry['image'] .'" alt="" class="rightphotos" style="max-width: 100% !important;" />';
                }
            }
            if ( $entry['title'] ) {
                if ( $entry['title'] ) {
                                        echo '<a href="'. $entry['url'] .'" target="_blank"><h4>'. $entry['title'] .'</h4></a>';
                }
            }
            if ( $entry['desc'] ) {
                echo '<p>' . $entry['desc'] . '</p>';
            }


if ( $entry['url'] ) {

$button = "Contact Us";
                echo '<div style="margin-bottom: 40px;"><a href="'. $entry['url'] .'" class="button external external" style="background-color: #1C4D71; color: #FFFFFF !important; min-height: 42px; padding: 10px 20px 10px 20px;">'. $button .'</a></div>';
            }

        }
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
$buttons = get_field( 'button' );
if ( $buttons ) {
    echo '<div class="container clearfix bottom-30"><ul class="about-buttons align-left">';
    foreach ( $buttons as $button ) {
        echo '<li><a class="button ' . $button[button_class] . ' " href="' . $button[button_url] . '" target="_blank" class="button external external" style="background-color: #1C4D71; color: #FFFFFF !important; min-height: 42px; padding: 10px 20px 10px 20px;">' . $button[button_text] . '</a></li> ';
        echo '</ul></div>';
    }
}
?>
<div style="padding: 0 20px; position: relative; margin: 0 auto; max-width: 1180px;">
<div style="margin-top: 35px; float: right;">
<?php if( get_field('attribution') ): ?>
	<i><?php the_field('attribution'); ?></i>
<?php endif; ?>




<?php get_template_part('components/component', 'quick-link'); ?>

<?php endwhile; ?>
