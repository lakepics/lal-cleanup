<?php
/**
 * Template Name: Outside Options */
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


<a href="/local/lake-arrowhead-dining/"><img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2020/07/steak2.jpg" style="width: 100% !important;"></a>

    <h3><a href="/local/lake-arrowhead-dining/">Lake Arrowhead Dining</h3>
    <p>From steaks to shakes, Lake Arrowhead has fabulous dining options no matter your taste or budget!
Explore restaurants, cafes and more that are local.</p>

<div style="margin-top: 15px;">
<a class="button" href="/local/lake-arrowhead-dining/">Learn More</a>  
</div>

</div>
  <div class="column2" style="background-color:#fff;">

<a href="/local/lake-arrowhead-shopping/"><img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2020/07/shopping2.jpg" style="width: 100% !important;"></a>


    <h3><a href="/local/lake-arrowhead-shopping/">Lake Arrowhead Shopping</a></h3>
   <p>Enjoy Lake Arrowhead in style with great shopping options! From larger stores to boutiques, get all the essentials and great wardrobe and more, perfect for any season.</p>

<div style="margin-top: 15px;">
<a class="button" href="/local/lake-arrowhead-shopping/">Learn More</a>  
</div>

  </div>
</div>



<div class="row2">
  <div class="column2" style="background-color:#fff;">


<a href="/local/lake-arrowhead-activities/"><img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2020/07/skiing2.jpg" style="width: 100% !important;"></a>

    <h3><a href="/local/lake-arrowhead-activities/">Lake Arrowhead Activities</h3>
    <p>Take to the lake with the Arrowhead Queen Boat Tour, take ski lessons or conquer the slopes at nearby Snow Valley Resort! There's plenty to do in Lake Arrowhead, year-round.</p>


<div style="margin-top: 15px;">
<a class="button" href="/local/lake-arrowhead-activities/">Learn More</a>  
</div>


</div>
  <div class="column2" style="background-color:#fff;">


  </div>
</div>














</div>
                        </div>
      </div> 
                </div>



<?php get_template_part('components/components-grid-nav-squares');?>

<?php endwhile; ?>