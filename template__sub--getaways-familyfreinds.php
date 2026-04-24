<?php
/**
 * Template Name: Specials - UC Family/Friends
 */
?>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th {
 text-align: left;
  padding: 8px;
background-color: #6a4426!important;
    color: #fff!important;
    font-weight: 400!important;
    text-align: center!important;
    width: 300px!important;
    font-size: 16px!important;}



td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>




    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('components/_subheader');?>
    <div class="copy-bullets">
        <div class="container">
            <div class="row">
                <div class="left-content-mobile col-xs-12 col-sm-12 col-md-12">
                    <div class="copy-div">




                        <p class="copy-paragraph">Come stay with us in beautiful Lake Arrowhead!</p>
                        <p> Spend quality time with your family and friends in a truly spectacular setting at the UCLA Lake Arrowhead Conference Center. Only a 90-minute drive from Los Angeles, San Diego or Orange County, experience the crisp mountain air, crackling fireplaces, beautiful family-style accommodations, and delicious chef-prepared meals. Enjoy local activities that include nearby hikes, small-town shopping in Lake Arrowhead Village, boutique restaurants, and lake cruises on the Arrowhead Queen.</p>
                        <div class="specials__buttons">
                            <div class="master-blue-button">
                                <div class="master-blue-button-text"></div>
                                <a target="_blank" href="/specials/getaways/family-and-friends/check-availability/">Check Availability<i id="space" class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="master-clear-button" style="display: none !important;">
                                <div target="_blank" class="master-clear-button-text" s></div>
                                <a style="display: none !important;" href="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2019/01/LACC-Friends-and-Family-2019.pdf">Download Flyer<i id="space" class="icon-download_arrow_final" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="col-xs-12 col-sm-12  col-md-4">
                    <h3 class="top-right-title" style="margin-top:0px;">Your Family &amp; Friends Package Includes:</h3>
                    <ul class="bullet-list">
                        <li>Overnight stay</li>
                        <li>Complimentary breakfast for four. Additional guests may prepay for breakfast at the posted rates.</li>
                        <li>Free Wi-Fi</li>
                        <li>Complimentary access to a 24-hour fitness center and hot tub</li>
                        <li>Cozy fireplaces in our chalet-style rooms</li>
                    </ul>
                </div-->
            </div>
        </div>
    </div>
    <section class="fullrow-div bottom-fifty">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full-row-content">
                        <p style="font-style: italic;">Reservations cannot be made more than 30 days prior to desired arrival date, and are subject to availability on a first-come, first-served basis.</p>
                        <p style="display: none !important;"><strong>Summer months and Holiday weekends reserved for <a href="/bruinwoods/summer-family-camp/">Bruin Woods</a> and <a href="/bruinwoods/family-holidays/">Family Holidays</a>. OFFER NOT AVAILABLE FROM MID-JUNE TO MID-SEPTEMBER, NOVEMBER 27–DECEMBER 1, DECEMBER 26–29, 2019 and DECEMBER 29-JANUARY 2, FEBRUARY 14–17, April 9–12, 2020.</strong></p>
</div>

<div style="margin-top: 35px; clear: both;">

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Flat Rates</th>
      <th></th>
          </tr>

<tr>
      <td><strong>Per Night For Adults</strong><br>Includes Wi-Fi, three meals daily, complimentary access to 24-hour fitness center and hot tub, and overnight stay.</td>
      <td>$195</td>
          </tr>

<tr>
      <td><strong>Per Night For Kids (Ages 3 -14)</strong><br>Includes Wi-Fi, three meals daily, complimentary access to 24-hour fitness center and hot tub, and overnight stay.</td>
      <td>$175</td>
    </tr>

  </table>
</div>
</div>


                </div>
            </div>
        </div>
    </section>








<div style="clear: both; display: none;">
    <?php get_template_part('components/components-tablepress-id2');?>
</div>


    <?php endwhile; ?>

