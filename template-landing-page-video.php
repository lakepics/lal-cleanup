<?php
/**
 * Template Name: Landing Page Template w Video
 */
?>


<style>

@media (max-width: 767px) {
div[class="col-xs-6 col-md-12"] {width: 100% !important; margin: 0px auto;}
.col-xs-6 {width: 100% !important;}
div[class="amenities__container hidden-sm"] {padding-bottom: 25px !important;}
div[id="ticker"] {width: 100% !important; display: none;}
span.tickertext {font-size: 15px !important;}
h1.heading__container--heading {text-align: center; padding-top: 35px;}
p.heading__container--subheading {text-align: center;}
#myVideo {display: none;}
#desktopbg {display: none;}
p.herointro {padding-left: 5px; padding-right: 5px;}

}

@media (min-width: 767px) {
#mobilebg {display: none !important;}

}

.gform_wrapper {width: 700px; margin: 0px auto !important;}


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

footer {margin-top: 0px !important;}

.mySlides {display:none;}
</style>
<style>
* {
  box-sizing: border-box;
}


#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  background: linear-gradient( rgba(0,0,0,.7), rgba(0,0,0,.9)) !important;
z-index: -1;
min-height: 100%; 
}

div[id="fb-root"] {display: none !important;}

.content {

  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  }

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>

<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column33 {
  float: left;
  width: 33%;
  padding: 10px;
padding-top: 45px  !important;
  }

.column66 {
  float: left;
  width: 67%;
  padding: 10px;
padding-top: 0px !important;
  }


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column33 {
    width: 100%;
  }
}
</style>

<style>


a[class="book-a-room"] {
    background-position: right 0;
    background-repeat: no-repeat;
    color: #1C4D71;
    display: block;
    font-family: "Proxima Nova Semibold", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 1.2em;
    height: 75px;
    letter-spacing: 0.05em;
    line-height: 1;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
    transition: color .1s ease-out, background .3s ease-in;    }
</style>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script> 


<div>
<body>
<video autoplay muted loop id="myVideo">
  <source src="http://lacc.ucla.edu/wp-content/themes/LACC-sage-theme-master/assets/video/lodge-compressed.mp4" type="video/mp4">
  </video>




<!--Hero-->
<div class="container" style="min-width: 100%; background: url(''); background-repeat: no-repeat; background-size: cover;" id="desktopbg">
	    
	    <div id="heroimage" class="row" style="max-width: 1100px; margin: 0px auto; text-align: center; margin-bottom: 125px; margin-top: 125px; padding: 25px 0px 55px 0px; background: linear-gradient(
          rgba(255,255,255, 0.9), 
          rgba(255,255,255, 0.9)
        );">
	        
	     
   
   
    <h2 style="color: #000; font-size: 35px;" class="heading">Welcome to the Bruin Lodge at Lake Arrowhead</h2>
    <p style="color: #000; text-align: center; padding-bottom: 10px;" class="herointro">Enjoy a relaxing stay at our lakeside resort.</a></p>
    
   
<div style="text-align: center" style="width: 900px; margin: 0px auto;">

<div style="display:none;">
<?php echo do_shortcode( '[gravityform id="18" title="false" description="false"]' ); ?>
</div>

<a style="padding: 15px 20px 15px 20px !important;
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
    border-radius: 0;" href="/request-a-proposal/" class="rfpbutton">Book Now
</a>

</div>
   
   
   

	        
	    </div>
	    
	</div>



<!---for Mobile-->

<div class="container" style="min-width: 100%; background: url('https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/04/001-main-lodge-at-ucla-lake-arrowhead_latest-5-2.jpg'); background-repeat: no-repeat; background-size: cover;" id="mobilebg">
	    
	    <div id="heroimage" class="row" style="max-width: 1100px; margin: 0px auto; text-align: center; margin-bottom: 125px; margin-top: 125px; padding: 25px 0px 55px 0px; background: linear-gradient(
          rgba(255,255,255, 0.9), 
          rgba(255,255,255, 0.9)
        );">
	        
	     
   
   
    <h2 style="color: #000; font-size: 35px;" class="heading">Welcome to the UCLA Lake Arrowhead Conference Center</h2>
    <p style="color: #000; text-align: center; padding-bottom: 10px;" class="herointro">Plan your meeting and stay in the beautiful San Bernardino Mountains of Southern California.</a></p>
    
   
<div style="text-align: center" style="width: 900px; margin: 0px auto;">

<div style="display:none;">
<?php echo do_shortcode( '[gravityform id="18" title="false" description="false"]' ); ?>
</div>

<a style="padding: 15px 20px 15px 20px !important;
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
    border-radius: 0;" href="/request-a-proposal/">Submit RFP
</a>

</div>
   
   
   

	        
	    </div>
	    
	</div>


<!--End Mobile-->






</div>
</div>
</div>
<div style="clear: both !important;"></div>

</body>

<div style="clear: both !important;"></div>



<div style="clear: both !important;">
<div class="content" style="">
 
  <div class="container" style="width: 1300px; margin: 0px auto; padding-top: 0px !important; margin-bottom: -50px !important" id="ticker">

<div class="row" style="padding-top: 25px; padding-bottom: 25px; text-align: center;">
  <div class="mySlides">
        <a id="tickerclick" href="https://lakearrowheadconferencecenter.ucla.edu/fact-sheet/"><span class="tickertext" style="text-shadow: 2px 2px 2px rgba(0,0,0,0.9); color: #FCFCFC; font-size: 40px; font-family: adobe-caslon-pro, Georgia, Cambria, Times New Roman, Times, serif; font-size: 40px; margin: 0px 10px 5px 0; text-align: right; font-style: italic; line-height: 1.0;
margin: 0 0 5px;">Get Away & Get Inspired <i class="fa fa-chevron-right" style="font-size: 25px; padding: 2px 0px 2px 0px"></i></span></a>
  </div>

 <div class="mySlides">
   <a id="tickerclick" href="https://lakearrowheadconferencecenter.ucla.edu/testimonials"><span class="tickertext" style="text-shadow: 2px 2px 2px rgba(0,0,0,0.9); color: #FCFCFC; font-size: 40px; font-family: adobe-caslon-pro, Georgia, Cambria, Times New Roman, Times, serif; font-size: 40px; margin: 0px 10px 5px 0; text-align: right; font-style: italic; line-height: 1.0;
margin: 0 0 5px;">The Rave Reviews Keep Rolling In... <i class="fa fa-chevron-right" style="font-size: 25px; padding: 2px 0px 2px 0px"></i></span></a>
  </div>

  <div class="mySlides">
   <a id="tickerclick" href="https://lakearrowheadconferencecenter.ucla.edu/guest-room-types/"><span class="tickertext" style="text-shadow: 2px 2px 2px rgba(0,0,0,0.9); color: #FCFCFC; font-size: 40px; font-family: adobe-caslon-pro, Georgia, Cambria, Times New Roman, Times, serif; font-size: 40px; margin: 0px 10px 5px 0; text-align: right; font-style: italic; line-height: 1.0;
margin: 0 0 5px;">Modern Comfort Meets Historic Charm <i class="fa fa-chevron-right" style="font-size: 25px; padding: 2px 0px 2px 0px"></i></span></a>
  </div>

</div>
</div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 5000); 
}
</script>



</div>
</div>
<div style="clear: both !important;"></div>

<!-- Awards Section -->

<div class="award__container" style="background: #fff !important; margin-bottom: 0px !important;">
<div class="container" style="background: #fff !important;">
<div class="row" style="background: #fff !important; padding-top: 25px; padding-bottom: 25px;">

<img src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/04/awards-main.jpg" style="display: none !important;">

<center>
<p class="heading__container--subheading">Reserve this amazing one-of-a-kind destination for your organizations next meeting, conference or retreat. Located on the north shore of beautiful Lake Arrowhead, just 90 miles east of Los Angeles, our natural surroundings create a unique environment for getting down to business training, team-building, planning, holding a think-tank or whatever it is you need to accomplish!</p>
</center>           

</div>
</div>
</div>

<!-- Headings Section -->

<?php 
$headings = get_field("headings");
    if ($headings) {
    echo    '<div class="heading__container" style="background: #fff !important; margin-top: 0px !important; margin-bottom: 0px !important;">
                <div class="container">
                    <div>';
    foreach ($headings as $heading) {
    echo    '<div class="row" style="background: #fff !important;">
        <div class="col-md-12">
                <h1 class="heading__container--heading">Fresh Air. Fresh Ideas                </h1>
                </div>
                </div>
            <div class="row">
                    <div class="col-md-12">
                <p class="heading__container--subheading">Reserve this amazing one-of-a-kind destination for your organizations next meeting, conference or retreat. Located on the north shore of beautiful Lake Arrowhead, just 90 miles east of Los Angeles, our natural surroundings create a unique environment for getting down to business training, team-building, planning, holding a think-tank or whatever it is you need to accomplish!</p>
            </div>
            </div>
        </div>';
    }
    echo  '</div>
        </div>
    </div>';
    }
?>

<!-- Quicklinks Section -->

<div class="quicklinks hidden-sm" style="background: #fff !important; margin-top: 0px !important; padding-top: 55px !important; margin-bottom: 0px !important;  padding-bottom: 55px;">
            <div class="container" style="background: #fff !important; margin-top: 0px !important;">
                    <div class="row"><div class="col-md-4">
                        <a class="quicklinks__card--redirect" href="https://lakearrowheadconferencecenter.ucla.edu/meetings/cmp/">
                            </a><div class="quicklinks__card"><a class="quicklinks__card--redirect" href="https://lakearrowheadconferencecenter.ucla.edu/meetings/cmp/" id="meetingsconferencescard">
                            <div class="quicklinks__card--heading--container"><h3 class="quicklinks__card--heading">Meetings &amp; Conferences</h3></div>
                                    <div class="quicklinks__card--img" style="background-image: url(https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/04/Meetings_Pineview_UShape.jpg);" <="" div="">
                                    </div>
                                <div class="quicklinks__card--subheading">Our Complete Meeting Package (CMP) simplifies your planning and budgeting with a convenient, per-person rate that  includes accommodations, dining, and meeting facilities with A/V.</div>
                                </a>
                            </div>
                            </div><div class="col-md-4">
                        <a class="quicklinks__card--redirect" href="https://lakearrowheadconferencecenter.ucla.edu/guest-room-types/">
                            </a><div class="quicklinks__card"><a class="quicklinks__card--redirect" href="https://lakearrowheadconferencecenter.ucla.edu/guest-room-types/" id="guestroomtypescard">
                            <div class="quicklinks__card--heading--container"><h3 class="quicklinks__card--heading">Accommodations</h3></div>
                                    <div class="quicklinks__card--img" style="background-image: url(https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/04/Accommodations_10-1.jpg);" <="" div="">
                                    </div>
                                <div class="quicklinks__card--subheading">Groups of 10 to 200 can enjoy our charming chalet-style accommodations (Condolets) from  September through mid-June.</div>
                                </a>
                            </div>
                            </div><div class="col-md-4">
                        <a class="quicklinks__card--redirect" href="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/01/Property-Map0818.pdf">
                            </a><div class="quicklinks__card"><a class="quicklinks__card--redirect" href="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/01/Property-Map0818.pdf" id="propertymapcard">
                            <div class="quicklinks__card--heading--container"><h3 class="quicklinks__card--heading">Property Map</h3></div>
                                    <div class="quicklinks__card--img" style="background-image: url(https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/UCLA_QL-1.jpg);" <="" div="">
                                    </div>
                                <div class="quicklinks__card--subheading">There's plenty of ground to cover outside of your meeting, too. With 50 wooded mountain acres to explore, you'll find surprises around every bend.</div>
                                </a>
                            </div>
                            </div></div>
            </div>
        </div>



<!--Gallery Top Section-->


<div class="gallery__container hidden-xs" style="margin-top: 0px !important; margin-bottom: 0px !important;"><div class="gallery__container--row"><table width="100%" cellspacing="0" class="table_layout"><tbody><tr><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/1right.jpg " width="227"></td><td width="14px">&nbsp;</td><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/05/climbing2.jpg " width="470"></td><td width="14px">&nbsp;</td><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/05/library2.jpg " width="470"></td><td width="14px">&nbsp;</td><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/05/team2.jpg " width="470"></td><td width="14px">&nbsp;</td><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/1left.jpg " width="227"></td></tr></tbody></table></div></div>


<!--Gallery Bottom Section-->

<div style="padding-top:13px; padding-bottom: 13px; margin-top: 0px !important; margin-bottom: 0px !important;" class="gallery__container hidden-xs" ><div class="gallery__container--row"><table width="100%" cellspacing="0" class="table_layout"><tbody><tr><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/05/seating2.jpg " width="470"></td><td width="14px">&nbsp;</td><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/Dining_Chefs_edit.jpg " width="227"></td><td width="14px">&nbsp;</td><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/05/chairs2.jpg " width="470"></td><td width="14px">&nbsp;</td><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/Dining_DiningRoom_edit.jpg " width="227"></td><td width="14px">&nbsp;</td><td><img align="bottom" height="300" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/Accommodations_12_edi.jpg " width="470"></td></tr></tbody></table></div></div>



<!--Amenities Container-->

<div class="amenities__container hidden-sm" style="background: #fff !important; margin-top: 0px !important; margin-bottom: 0px !important; padding-top: 45px;">

            <div class="container">
                    <h1 class="amenities__container--heading">On-Site Amenities</h1>
                    <div class="amenities__container--row row">
                <div class="col-xs-6 col-md-12"><div class="col-md-3">
                            <div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/wifi.png " width="50px">
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <div class="desc-child">Complimentary <br> Wi-Fi</div>
                                </div>
                            </div>
                        </div><div class="col-md-3">
                            <div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/car.png " width="50px">
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <div class="desc-child">Complimentary Parking</div>
                                </div>
                            </div>
                        </div><div class="col-md-3">
                            <div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/videocamera.png " width="50px">
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <div class="desc-child">Complimentary Audio Visual Services</div>
                                </div>
                            </div>
                        </div><div class="col-md-3">
                            <div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/dining.png " width="50px">
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <div class="desc-child">Award-winning Dining</div>
                                </div>
                            </div>
                        </div>          </div>    
            </div>

<!-- Amenities Bottom Row Section -->


<div class="amenities__container--last--row row hidden-sm hidden-xs" style="background: #fff !important; margin-top: 0px !important; margin-bottom: 0px !important; padding-bottom: 50px;">
    <div class="col-xs-6 col-md-12"><div class="col-md-3">
                            <div>
                                <div class="amen-icon  col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/tennis-2px.png " width="50px">
                                </div>
                                <div class="amen-icon  col-xs-8 col-sm-8 col-md-8">
                                    <div class="amenities-desc"><div class="desc-child">Pool, Tennis Courts and More</div></div>
                                </div>
                            </div>
                        </div><div class="col-md-3">
                            <div>
                                <div class="amen-icon  col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/tv.png " width="50px">
                                </div>
                                <div class="amen-icon  col-xs-8 col-sm-8 col-md-8">
                                    <div class="amenities-desc"><div class="desc-child">Business Center</div></div>
                                </div>
                            </div>
                        </div><div class="col-md-3">
                            <div>
                                <div class="amen-icon  col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/laundry-1.png " width="50px">
                                </div>
                                <div class="amen-icon  col-xs-8 col-sm-8 col-md-8">
                                    <div class="amenities-desc"><div class="desc-child">Laundry Room</div></div>
                                </div>
                            </div>
                        </div><div class="col-md-3">
                            <div>
                                <div class="amen-icon  col-xs-4 col-sm-4 col-md-4">
                                    <img class="fa" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/weights_2.png " width="50px">
                                </div>
                                <div class="amen-icon  col-xs-8 col-sm-8 col-md-8">
                                    <div class="amenities-desc"><div class="desc-child">24-hour Fitness Center</div></div>
                                </div>
                            </div>
                        </div>          </div>    
                </div>
            </div>

            </div>