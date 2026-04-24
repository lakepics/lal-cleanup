<?php
/**
 * Template Name: Local Subpages */
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


<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>


   
                <div class="container">
                    <div class="row">
                            <div class="col-md-12">
                            <div class="fullrow__content"> 

<div style="margin-bottom: 15px;">                            
<?php the_field('summary'); ?>
</div>



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



<?php get_template_part('components/components-grid-nav-squares');?>

<?php endwhile; ?>