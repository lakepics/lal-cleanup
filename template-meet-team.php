<?php
/**
 * Template Name: Meet Team Template */
?>


<style>


* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column3 {
  float: left;
  width: 33%;
  padding: 10px;
  }

/* Clear floats after the columns */
.row2:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column2 {
    width: 100%;
  }

div[class="clearfix column left-column column-entry"], div[class="clearfix column right-column column-entry"], .column {min-width: 100% !important; width: 100% !important;}
img[class="team-img"] {width: 100% !important;}

}


a.button {background-color: #ad8a5f;
    max-width: 290px;
    background-position: 100%;
    background-repeat: no-repeat;
    color: #fff!important;
    display: inline-block;
    font-size: 1em;
    min-height: 40px;
    font-weight: 600;
    letter-spacing: .05em;
    line-height: 24px;
    margin: 0;
    padding: 10px 20px 10px 20px;
    zoom: 1;}


</style>

<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column50 {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>


   
                <div class="container" style="margin-bottom: 35px;">
                    <div class="row" style="padding-bottom: 35px">
                            <div class="col-md-12">





























</div>

<div style="clear: both !important;"></div>











<div style="margin-bottom: 15px;">                            
<?php the_field('summary'); ?>
</div>




<div style="clear: both;"></div>

<div class="container">

<div class="row" style="margin-bottom: 35px !important;">


 <?php
$team = get_field( "meet_the_team" );

if ( $team ) {
    foreach ( $team as $team_section ) {
        echo '<div class="container clearfix two-columns"><h2>' . $team_section['team_sub_head'] . '</h2>';
        if ( $team_section['team_members'] ) {
            $team_members = $team_section['team_members'];
            foreach ( $team_members as $row ) {
                echo '<div class="clearfix column left-column column-entry" style="margin-bottom: 35px;">';
                foreach ( $row['left_column'] as $entry ) {
                    echo '<div class="team clearfix">';
                    echo '<img class="team-img" style="width: 50%;" src="'. $entry['image'] .'" alt="' . $entry['alt_text'] . '" />';
                    echo '<h3 class="team-name">' . $entry['name'] . '</h3>';
                    echo '<div class="team-title">' . $entry['title'] . '</div>';
                    echo '<div class="team-phone">' . $entry['phone'] . '</div>';
                    echo '<div class="team-email"><a href="mailto:' . $entry['email'] . '">' . $entry['email'] . '</a></div>';
                    echo '<div class="bio" style="padding-top: 35px; width: 90%;"><strong><div style="padding-bottom: 15px; display: none !important;">What do you like most about working at the Lake Arrowhead Lodge?</strong></div>' . $entry['bio'] . '</div>';
                    echo '</div>';
                }
                echo '</div>';
                echo '<div class="clearfix column right-column column-entry " style="margin-bottom: 35px;">';
                foreach ( $row['right_column'] as $entry ) {
                    echo '<div class="team clearfix">';
                    echo '<img class="team-img" style="width: 50%" src="'. $entry['image'] .'" alt="' . $entry['alt_text'] . '" />';
                    echo '<h3 class="team-name">' . $entry['name'] . '</h3>';
                    echo '<div class="team-title">' . $entry['title'] . '</div>';
                    echo '<div class="team-phone">' . $entry['phone'] . '</div>';
                    echo '<div class="team-email"><a href="mailto:' . $entry['email'] . '">' . $entry['email'] . '</a></div>';
                    echo '<div class="bio" style="padding-top: 35px; width: 90%;"><strong><div style="padding-bottom: 15px; display: none !important;">What do you like most about working at the Lake Arrowhead Lodge?</strong></div>' . $entry['bio'] . '</div>';
                    echo '</div>';
                }
                echo '</div>';
            }
        }
        echo '</div>';
    }
}
?>

</div>
</div>
<div style="clear: both;"></div>



<div class="container">

<div class="row" style="margin-bottom: 35px !important;">






  <div class="column" style="margin-bottom: 35px !important;">


<?php if( have_rows('profile') ): ?>
 

 
    <?php while( have_rows('profile') ): the_row(); ?>



<img src="<?php the_sub_field('image'); ?>" style="max-width: 100%;">
        <h3><?php the_sub_field('name'); ?></h3> <?php the_sub_field('position'); ?><br>
<?php the_sub_field('phone'); ?><br>
<a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
        <div style="margin-top: 15px;">

<div style="margin-bottom: 10px;">
<strong>What do you like most about working at the UCLA Lake Arrowhead Lodge?</strong><br>
</div>

<div style="margin-bottom: 35px !important;">
       <p><?php the_sub_field('description'); ?> </p>
</div>

</div>       
    <?php endwhile; ?>
 

 
<?php endif; ?>




</div>
  <div class="column">





<?php if( have_rows('profile2') ): ?>
 

 
    <?php while( have_rows('profile2') ): the_row(); ?>



<img src="<?php the_sub_field('image2'); ?>" style="max-width: 50%;">
        <h3><?php the_sub_field('name2'); ?></h3> <?php the_sub_field('position2'); ?><br>
<?php the_sub_field('phone2'); ?><br>
<a href="mailto:<?php the_sub_field('email2'); ?>"><?php the_sub_field('email2'); ?></a>
        <div style="margin-top: 15px;">
<div style="margin-bottom: 10px;">
<strong>What do you like most about working at the UCLA Lake Arrowhead Lodge?</strong><br>
</div>

<div style="margin-bottom: 35px !important;">
       <p><?php the_sub_field('description2'); ?> </p>
</div>

</div>       
    <?php endwhile; ?>
 

 
<?php endif; ?>










</div>
</div>
</div>

<style>
.column {
  float: left;
  width: 50%;
padding: 0px 5px 0px 5px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>



















<div class="container">
<div class="row2">
 <div class="column3" style="background-color:#fff;">

<?php the_field('col1content'); ?>

  </div>
  


<div class="column3" style="background-color:#fff;">

<?php the_field('col2content'); ?>

  </div>





<div class="column3" style="background-color:#fff;">

<?php the_field('col3content'); ?>

  </div>



</div>








</div>





</div>
                        </div>
      </div> 
                </div>



<?php get_template_part('components/components-grid-nav-squares');?>

<?php endwhile; ?>