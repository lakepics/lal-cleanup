<?php
/**
 * Template Name: Recreation SEO Optimized */
?>


<style>


* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column2 {
  float: left;
  width: 50%;
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
  <div class="column2" style="background-color:#fff;">


<a href="/team-building/"><img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2020/06/rec1.jpg" style="width: 100% !important;"></a>

    <h3><a href="/team-building/">Team-Building Activities</a></h3>
    <p>We've learned that the key to creating and maintaining a successful business, operation or team lies in strengthening the connections between people. As a result, we've created Arrowhead Adventures.</p>

<a class="button" href="/team-building/">Learn More</a>  


</div>
  <div class="column2" style="background-color:#fff;">

<a href="/recreation/sports-recreation/"><img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2020/06/rec2.jpg" style="width: 100% !important;"></a>


    <h3><a href="/recreation/sports-recreation/">Sports & Recreation Activities</a></h3>
    <p>When your meetings are finished for the day, it's time to slip away to our tranquil grounds for some good old-fashioned fun and relaxation. We offer many fun recreational activities, from active to relaxing! </p>

<a class="button" href="/recreation/sports-recreation/">Learn More</a>  

  </div>
</div>
















</div>
                        </div>
      </div> 
                </div>



<?php get_template_part('components/components-grid-nav-squares');?>

<?php endwhile; ?>