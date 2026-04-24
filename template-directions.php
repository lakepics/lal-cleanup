<?php
/**
 * Template Name: Directions - Template
 */
?>

<style>
.column65 {
  float: left;
  width: 65%;
padding-left: 25px; padding-right: 15px;
}

.column35 {
  float: left;
  width: 35%;
padding-right: 25px; padding-left: 5px;
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}



/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column65, .column35 {
    width: 100%;
padding-left: 5px !important;
padding-right: 5px !important;
  }

img[class="headerimage"] {display: none !important;}
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


div[class="subheader-title"] {padding-top: 0px !important; margin-top: 0px !imporant;}

</style>




<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-two-goldbuttons');?>
<div class="container"><div class="divider-border"></div></div>

<div id="directions-template">
    <div class="container">
 


        <div class="col-md-12" style="margin-top: -50px;">

<img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2020/09/ontario2.jpg" class="headerimage">



<!--Row 1-->


            <div class="row" style="margin-top: 35px !important; padding-top: 0px !important;">

<h2>From Southern California Airports</h2>

<p>Getting to the UCLA Lake Arrowhead Lodge is simple. It requires reaching the CA-18 North and the CA-173 North in the San Bernardino National Forest. You can easily get to these routes with a little over one hour, on a typical day, from Los Angeles, San Bernardino and Orange County airports.
</p>


</div>


<div class="row" style="margin-top: 35px;">
<div class="column35">

<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d422931.49747338006!2d-118.07610479883287!3d34.09123806141587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x80c2b0d213b24fb5%3A0x77a87b57698badf1!2sLos%20Angeles%20International%20Airport%20(LAX)%2C%20World%20Way%2C%20Los%20Angeles%2C%20CA!3m2!1d33.9415889!2d-118.40853!4m5!1s0x80c357e80a92254b%3A0xdc8a5a45759372b0!2sUCLA%20Lake%20Arrowhead%20Conference%20Center%2C%20850%20Willow%20Creek%20Rd%2C%20Lake%20Arrowhead%2C%20CA%2092352!3m2!1d34.2655556!2d-117.18666669999999!5e0!3m2!1sen!2sus!4v1599667397132!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>


<div class="column65">
                <h3>From Los Angeles International Airport (LAX)</h3>
               

<p>Take the I-105 East for 17 miles and merge onto the I-605 North. Proceed on the I-605 North for 18 miles until the CA-210 North.  Continue on the CA-210 North fro 33 miles and exit CA-18/Waterman Avenue. Continue on CA-18 North through the San Bernardino National Forest for 18 miles until you see CA-173 West. Turn left onto CA-173 West and continue for approximately 4 miles. Turn left onto Willow Creek Road, and then Right onto North Shore Road. You will then reach the lodge.
</p>



<div style="margin-top: 15px;">
<a class="button" href="https://goo.gl/maps/KSCFFWphq5uJQZkn8" target="_blank">Get Directions</a>
</div>

</div>

 </div>



<!--Row 2-->


 <div class="row" style="margin-top: 55px;">


<div class="column35">

<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d105642.33143908258!2d-117.46072919245307!3d34.163662251094905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x80c334fc5acfd4a7%3A0x9fc4ed16c859523b!2sOntario%20International%20Airport%2C%20Ontario%2C%20CA%2091761!3m2!1d34.0559781!2d-117.598057!4m5!1s0x80c357e80a92254b%3A0xdc8a5a45759372b0!2sUCLA%20Lake%20Arrowhead%20Conference%20Center%2C%20850%20Willow%20Creek%20Rd%2C%20Lake%20Arrowhead%2C%20CA%2092352!3m2!1d34.2655556!2d-117.18666669999999!5e0!3m2!1sen!2sus!4v1599667846615!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>


<div class="column65">
                <h3>From Ontario International Airport (ONT)</h3>
                <p>
Take the I-1O East for 1.5 miles and then take the I-15 North for 6 miles.
Take the CA-210 East for 13 miles and exit CA-18/Waterman Avenue. Continue on CA-18 North through the San Bernardino National Forest for 18 miles until you see CA-173 West. Turn left onto CA-173 West and continue for approximately 4 miles. Turn left onto Willow Creek Road, and then Right onto North Shore Road. You will then reach the lodge.
</p>

<div style="margin-top: 15px;">
<a class="button" href="https://goo.gl/maps/vPVZg34P5gH3QdPu5" target="_blank">Get Directions</a>
</div>

</div>

 </div>




<!--Row 3-->

 <div class="row" style="margin-top: 55px; margin-bottom: 85px !important;">


<div class="column35">

<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d423370.4793307441!2d-117.80630462563492!3d34.00327224407901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x80dcdeedcbab40ef%3A0xc941e8f5c31119e2!2sJohn%20Wayne%20Airport%20(SNA)%2C%20Airport%20Way%2C%20Santa%20Ana%2C%20CA!3m2!1d33.6761901!2d-117.86747589999999!4m5!1s0x80c357e80a92254b%3A0xdc8a5a45759372b0!2sUCLA%20Lake%20Arrowhead%20Conference%20Center%2C%20850%20Willow%20Creek%20Rd%2C%20Lake%20Arrowhead%2C%20CA%2092352!3m2!1d34.2655556!2d-117.18666669999999!5e0!3m2!1sen!2sus!4v1599668008190!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<div class="column65">
                <h3>From John Wayne Airport (SNA)</h3>
                <p>Take the CA-55 North from John Wayne Airport for approximately 12 miles. Next, merge onto the CA-91 East and continue for 32 miles until the CA-215 North. Take the CA-215 North for 10 miles until you see CA-259 North. Take CA-259 North for a short mile until you see CA-210 North.
After one mile, exit CA-18/Waterman Avenue. Take the CA-18 North for 14 miles until you see Lake Gregory Drive. Make a left and proceed immediately to CA-189 East. Continue for 3 miles and turn left on Grass Valley Road. Continue for 2 miles as Grass Valley Road turns into Peninsula Drive. Turn left on North Bay Road and proceed for 2 miles. Turn right on CA-173 East and immediate right on Willow Creek Road. Turn Right on North Shore Road and you'll reach the lodge.</p>


<div style="margin-top: 15px;">
<a class="button" href="https://goo.gl/maps/R8VW59RQA8uwMmSZ7" target="_blank">Get Directions</a>
</div>

</div>

 </div>








        </div>



<div style="display: none !important;">
        <div class="col-md-12">
            <div class="row">
                <h3>From Orange County</h3>
                <p>Freeway 15 to the 215 (just past Rancho California), follow signs north (Riverside/Las Vegas). Continue on 215 north to Freeway 210 east (Mountain Resorts). Exit at Waterman Avenue and turn left (North) at signal. Continue forward. Waterman Avenue turns into Highway 18. Stay on Highway 18 for 20 miles into the mountains to the Lake Arrowhead turnoff. This is a left turn onto Highway 173. Stay on Highway 173 for approximately 2 miles until you come to a stop sign. Turn right at the stop sign. This is a continuation of Highway 173. You will be on Highway 173 for approximately 5 miles around the lake. When you see our sign (UCLA Conference Center) take the very next left onto Willow Creek Rd. Come to the end of the road, curve to the right, and then take the next right into the Conference Center.</p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <h3>From Pasadena / San Fernando Valley Area</h3>
                <p>WFreeway 210 East. Exit Waterman Avenue and turn left (North) at signal. Waterman Avenue turns into Highway 18. Stay on Highway 18 for 20 miles into the mountains to the Lake Arrowhead turnoff. This is a left turn onto Highway 173. Stay on Highway 173 for approximately 2 miles until you come to a stop sign. Turn right at the stop sign. This is a continuation of Highway 173. You will be on Highway 173 for approximately 5 miles around the lake. When you see our sign (UCLA Conference Center) take the very next left onto Willow Creek Rd. Come to the end of the road, curve to the right, and then take the next right into the Conference Center.</p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <h3>From Palm Springs</h3>
                <p>Freeway 10 west to Freeway 210 west (Mountain Resorts). Exit Waterman Avenue and turn left onto 30th street; to Waterman Avenue, turn right at signal. Waterman Avenue turns in Highway 18. Stay on Highway 18 for 20 miles into the mountains to the Lake Arrowhead turnoff. This is a left turn onto Highway 173. Stay on Highway 173 for approximately 2 miles until you come to a stop sign. Turn right at the stop sign. This is a continuation of Highway 173. You will be on Highway 173 for approximately 5 miles around the lake. When you see our sign (UCLA Conference Center) take the very next left onto Willow Creek Rd. Come to the end of the road, curve to the right, and then take the next right into the Conference Center.</p>
            </div>
        </div>

</div>



    </div>
</div>



<div style="display: none !important;">

<div class="drivers">
    <div class='container'>
        <div class="col-md-12">
        <h3>Transportation Options</h3>
        <p>The following companies offer service from the Los Angeles International (LAX) and Ontario Airports to the Conference Center. Please call for current rates, reservations, and snow tire chain arrangements.</p>
        <p style="font-style: italic;">Note: Buses over 40 feet in length are NOT permitted on highways 18, 138, and 173 </p>
            <div class="col-md-3">
            <strong>EBMEYER CHARTER &amp TOUR</strong><br>*
Experienced with snowy conditions.
<br><strong>Web:</strong> ebmeyercharter.com
(877) 326-3937
(760) 247-8727

            </div>        
            <div class="col-md-3">
            <strong>PRIME TIME SHUTTLE</strong><br>*
Sedan and bus services. Experienced with snowy conditions.
<br><strong>Web:</strong> primetimeshuttle.com
(800) 733-8267

            </div>        
            <div class="col-md-3">
            <strong>CORPORATE COACH CHARTER & TOURS</strong>
(800) 452-2622 
(310) 216-1171

            </div>        
            <div class="col-md-3">
            <strong>H&L CHARTER</strong>
(800) 551-0848
(909) 466-3984

            </div>
        </div>
     <div class="col-md-12">
            <div class="col-md-3">
<strong>LAKE ARROWHEAD LIMO & CAR SERVICE</strong><br>*
<br><strong>Web:</strong> lakearrowheadlimo.com
(909) 851-2212

            </div>        
            <div class="col-md-3">
            <strong>PRIME TIME SHUTTLE</strong><br>*
Sedan and bus services. Experienced with snowy conditions.
<br><strong>Web:</strong> primetimeshuttle.com
(800) 733-8267

            </div>        
            <div class="col-md-3">
<strong>RIDE SAN BERNARDINO MOUNTAINS</strong>
(Alternative to a taxi) 
(909) 338-3471


            </div>        
            <div class="col-md-3">
<strong>LUX BUS</strong>
(714) 678-1888

            </div>
        </div>
             <div class="col-md-12">
            <div class="col-md-3">
<strong>ULTIMATE LIMOUSINE</strong>
Town car, sedan, SUV, passenger van (15 people), limousine (6–10 people), SUV limo (12–20 people), and party bus (20–40 people) services.
<br><strong>Web:</strong> lalimorentalservice.com
(800) 249-1466


            </div>        
            <div class="col-md-3">
<strong>SUPER SHUTTLE</strong>
<br><strong>Web:</strong> supershuttle.com
(800) 258-3826


            </div>        
            <div class="col-md-3">
<strong>RIDE SAN BERNARDINO MOUNTAINS</strong>
(Alternative to a taxi) 
(909) 338-3471


            </div>        
            <div class="col-md-3">
<strong>ENTERPRISE</strong>
<br><strong>Web:</strong> enterprise.com
(909) 987-5000


            </div>
        </div>
    </div>
</div>






</div>

<div class="ending">
</div>
<?php get_template_part('components/full-col-h3-p-repeater');?>

<?php endwhile; ?>

