<?php
/**
 * Template Name: FAQ Accordion  - Individual Traveler
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<section class="faq-section"> 
  <!-- Begining on Accordion block -->
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <h2>Categories:</h2>
        <ul>
          <li><a href="#reservation">Reservation &amp; Arrival</a></li>
          <li><a href="#guestroom">Guest Room</a></li>
          <li><a href="#dining">Dining at  the Lodge</a></li>
          <li><a href="#thelodge">The Lodge</a></li>
          <li><a href="#lakearrowhead">Lake Arrowhead</a></li>
          <li><a href="#activities">Activities &amp; Events</a></li>
          <li><a href="#covid">COVID-19 Mitigation Efforts</a></li>
          <li><a href="#checkout">Checkout</a></li>
        </ul>
        <div style="margin-top: 25px; margin-bottom: 25px;">
          <p>Don't see the answer to your question? Email us at <a href="mailto:UCLALakeArrowhead@ha.ucla.edu">UCLALakeArrowhead@ha.ucla.edu</a> 
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row"> <a name="reservation"></a>
        <h3>Reservation &amp; Arrival</h3>
        <div class="panel-group wrap" id="bs-collapse">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#reservation1"> Can I bring my pet? </a> </h4>
            </div>
            <div id="reservation1" class="panel-collapse collapse">
              <div class="panel-body"> Only service animals are permitted. </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#reservation2"> I heard you have to be a UCLA Alumni to stay at the Lodge, is that true? </a> </h4>
            </div>
            <div id="reservation2" class="panel-collapse collapse">
              <div class="panel-body"> No. While our summer <a href="https://bruinwoods.ucla.edu/">Bruin Woods</a> program (late June - August) is generally reserved for UCLA Alumni, anyone is welcome to <a href="https://reservations.travelclick.com/112652#/guestsandrooms">book a stay</a> with us outside these times. </div>
            </div>
          </div>
          <div class="panel" style="display: none !important;">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#reservation3">Do we need chains for our vehicle?</a> </h4>
            </div>
            <div id="reservation3" class="panel-collapse collapse">
              <div class="panel-body"> As Lake Arrowhead does receive occasional snowfall in the winter months, having chains stored in your vehicle is recommended. We do sell chains at the Front Desk as well.</div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#reservation4">Why can't I book during the summer?</a> </h4>
            </div>
            <div id="reservation4" class="panel-collapse collapse">
              <div class="panel-body"> From late June through August, the UCLA Lake Arrowhead Lodge hosts <a href="https://bruinwoods.ucla.edu/">Bruin Woods</a>, a family resort program for UCLA Alumni families, and is not open to the general public. </div>
            </div>
          </div>
        </div>
        <!-- end of #bs-collapse  --> 
      </div>
      <!-- end of #bs-collapse  --> 
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row"> <a name="guestroom"></a>
        <h3>Guest Room</h3>
        <div class="panel-group wrap" id="bs-collapse">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#guestroom1"> I see you have a few different types of rooms, which one should I book? </a> </h4>
            </div>
            <div id="guestroom1" class="panel-collapse collapse">
              <div class="panel-body">
                <p style="margin-top: 15px;">Read more about our room types <a href="https://lakearrowheadconferencecenter.ucla.edu/stay-at-ucla-lake-arrowhead-conference-center/">here</a>. Most of our guest rooms are two-bedroom chalets perfect for accommodating families and small groups.</p>
                <p style="margin-top: 15px;">We suggest booking a Deluxe or Premium Chalet to enjoy a full living room or an Open Chalet which has a studio-style living room. All three of these room types offer two bathrooms.</p>
                <p style="margin-top: 15px;">One bathroom options include a queen bed in the master bedroom, a living room, and a loft. You have a choice between a Chalet with Queen Loft, which has a queen bed upstairs, or a Chalet with Twin Loft, which has two twin beds upstairs.</p>
                <p style="margin-top: 15px;">If you don't need two bedrooms, we suggest booking our Vintage Single Deluxe room with a bedroom and living room, or Vintage Single without a living room.</p>
                <p style="margin-top: 15px;">We also offer three house-style accomodations: the Geneva Lane House and Willow Creek Cottage house up to six guests and our largest house, the Briar Creek Chalet, can accomodate up to 10 people.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#guestroom2"> Will there be a TV in my room? </a> </h4>
            </div>
            <div id="guestroom2" class="panel-collapse collapse">
              <div class="panel-body"> No. Our rooms are designed for taking full advantage of your mountain getaway so be sure to explore all our 50-acre property and Lake Arrowhead has to offer. But if you can't miss your favorite show, we have high-speed internet available in every guest room for your streaming devices. Additionally, visit the Front Desk to inquire about setting up a viewing room in the Main Lodge. </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#guestroom3b"> Will there be a coffee maker in my room? </a> </h4>
            </div>
            <div id="guestroom3b" class="panel-collapse collapse">
              <div class="panel-body"> While we do not currently have coffee makers in our rooms, it is available at the Main Lodge.</div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#guestroom4"> Will my room have a lake view? </a> </h4>
            </div>
            <div id="guestroom4" class="panel-collapse collapse">
              <div class="panel-body"> The majority of our chalets have forest views, however, various areas of our property, including the Main Lodge, Dining Patio, and Front Lawn have a view of Lake Arrowhead. Don't miss the stunning lake panorama seen from our Zen Deck!</div>
            </div>
          </div>
        </div>
        <!-- end of #bs-collapse  --> 
      </div>
      <!-- end of #bs-collapse  --> 
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row"> <a name="dining"></a>
        <h3>Dining at the Lodge</h3>
        <div class="panel-group wrap" id="bs-collapse">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#dining1"> Is there a restaurant at the Lodge? </a> </h4>
            </div>
            <div id="dining1" class="panel-collapse collapse">
              <div class="panel-body"> We have an award-winning restaurant on site that is open for three meals a day during set times. Breakfast is served from 8 a.m. – 9 a.m., lunch from 12 p.m. – 1 p.m., and dinner from 6:30 p.m. – 8 p.m.</div>
            </div>
          </div>
          <div class="panel" style="display: none !important;">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#dining2"> Do you have coffee available? </a> </h4>
            </div>
            <div id="dining2" class="panel-collapse collapse">
              <div class="panel-body"> Yes, coffee is available in the Main Lodge upon request.</div>
            </div>
          </div>
        </div>
        <!-- end of #bs-collapse  --> 
      </div>
      <!-- end of #bs-collapse  --> 
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row"> <a name="thelodge"></a>
        <h3>The Lodge</h3>
        <div class="panel-group wrap" id="bs-collapse">
          <div class="panel">
            <div class="panel-heading active">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#lodge0"> What can I do at the UCLA Lake Arrowhead Lodge? </a> </h4>
            </div>
            <div id="lodge0" class="panel-collapse collapse">
              <div class="panel-body"> The UCLA Lake Arrowhead Lodge offers so much more than a typical hotel. Our 50-acre property offers the ideal mountain backdrop for every guest. Be sure to check out every location the Lodge has to offer:
                <div style="margin-top: 15px; margin-bottom: 15px;">
                  <ul>
                    <li>Front Lawn</li>
                    <li>Children's Park</li>
                    <li>Pool (seasonal)</li>
                    <li>Indoor Jacuzzi</li>
                    <li>Fitness Center</li>
                    <li>Tennis Courts</li>
                    <li>Basketball Court</li>
                    <li>Sand Volleyball Court</li>
                    <li>Amphitheater</li>
                    <li>Frontier Village</li>
                    <li>Treehouse</li>
                    <li>Ballfield</li>
                    <li>Zen Deck</li>
                  </ul>
                </div>
                Recreational equipment is available for your fun-filled day:
                <div style="margin-top: 15px;">
                  <ul>
                    <li>Tennis (4 courts available)</li>
                    <li>Pickleball</li>
                    <li>Volleyball</li>
                    <li>Basketball</li>
                    <li>Horseshoes</li>
                    <li>Putting</li>
                    <li>Bocce Ball</li>
                    <li>And more!</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end of panel -->
          
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#lodge1"> Is there a bar on site? </a> </h4>
            </div>
            <div id="lodge1" class="panel-collapse collapse">
              <div class="panel-body">There is not a bar at the Lodge. The Lodge does not sell or serve alcoholic beverages. </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#lodge2"> Is smoking prohibited on your property? </a> </h4>
            </div>
            <div id="lodge2" class="panel-collapse collapse">
              <div class="panel-body"> We are a smoke-free property and there are no designated smoking areas. </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#lodge4"> What is there to do in winter? </a> </h4>
            </div>
            <div id="lodge4" class="panel-collapse collapse">
              <div class="panel-body"> Visit the local ski resort just a short drive away, hike local trails, bundle up and enjoy the scenic lake view from our Zen Deck, play tennis on one of our four courts, relax by the firepit with s'mores, or gather the family to visit the Lake Arrowhead Village where restaurants and shops await. </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#lodge5"> I'm arriving in the winter, will I need snow chains for my vehicle? </a> </h4>
            </div>
            <div id="lodge5" class="panel-collapse collapse">
              <div class="panel-body"> As Lake Arrowhead does receive occasional snowfall in the winter months, having chains stored in your vehicle is recommended. </div>
            </div>
          </div>
        </div>
        <!-- end of #bs-collapse  --> 
      </div>
      <!-- end of #bs-collapse  --> 
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row"> <a name="lakearrowhead"></a>
        <h3>Lake Arrowhead</h3>
        <div class="panel-group wrap" id="bs-collapse">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#lakearrowhead1"> Why should I visit Lake Arrowhead? </a> </h4>
            </div>
            <div id="lakearrowhead1" class="panel-collapse collapse">
              <div class="panel-body"> Known as the "Swiss Alps of Southern California", Lake Arrowhead is nestled 5,100 feet above sea level in the San Bernardino National Forest. Lake Arrowhead offers stunning alpine lake views, hiking and biking trails and a bustling village shopping and dining experience. Be sure to check out <a href="https://skyparksantasvillage.com/">SkyPark</a> and <a href="https://snow-valley.com/">Snow Valley Mountain Resort</a> for mountain activities available nearby!
                <p style="margin-top: 15px;"> Visit <a href="http://www.ilovelakearrowhead.com">ilovelakearrowhead.com</a> to see all that the mountain has to offer!" </p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#lakearrowhead2"> Can I rent a boat? </a> </h4>
            </div>
            <div id="lakearrowhead2" class="panel-collapse collapse">
              <div class="panel-body"> Lake Arrowhead is a private lake that does not permit boat rentals, but the <a href="https://mckenziewaterskischool.com/">McKenzie Water Ski School</a> offers tours and skiing (seasonally) and the <a href="https://lakearrowheadqueen.com/">Lake Arrowhead Queen</a> offers tours and private charters. </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#lakearrowhead3"> What will the weather be like during my stay? </a> </h4>
            </div>
            <div id="lakearrowhead3" class="panel-collapse collapse">
              <div class="panel-body"> The Lake Arrowhead community has a unique climate for Southern California with four distinct seasons that support an array of outdoor recreational activities and year-round beauty. The area receives about 300 days of sunshine per year. We recommend you bring appropriate outerwear for the season and dress in layers to ensure your ultimate comfort. </div>
            </div>
          </div>
        </div>
        <!-- end of #bs-collapse  --> 
      </div>
      <!-- end of #bs-collapse  --> 
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row"> <a name="activities"></a>
        <h3>Activities &amp; Events</h3>
        <div class="panel-group wrap" id="bs-collapse">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#act1"> Do you host weddings? </a> </h4>
            </div>
            <div id="act1" class="panel-collapse collapse">
              <div class="panel-body"> Yes, we do host weddings. Please visit our <a href="/weddings">weddings page</a> for additional infomration. </p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#act3"> What is Bruin Woods? </a> </h4>
            </div>
            <div id="act3" class="panel-collapse collapse">
              <div class="panel-body"> From late June through August, the UCLA Lake Arrowhead Lodge hosts <a href="https://bruinwoods.ucla.edu/">Bruin Woods</a>, a family resort program for UCLA Alumni families, and is not open to the general public. </div>
            </div>
          </div>
        </div>
        <!-- end of #bs-collapse  --> 
      </div>
      <!-- end of #bs-collapse  --> 
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row"> <a name="covid"></a>
        <h3>COVID-19 Mitigation Efforts</h3>
        <div class="panel-group wrap" id="bs-collapse">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#covid1"> What is the UCLA Lake Arrowhead Lodge doing to prevent the spread of COVID-19? </a> </h4>
            </div>
            <div id="covid1" class="panel-collapse collapse">
              <div class="panel-body"> Health and safety is our utmost priority. Please review all of our <a href="https://lakearrowheadconferencecenter.ucla.edu/coronavirus/">COVID-19 mitigation protocols</a> in place to ensure the safety of our guests and team members. Among many other protocols, none of our team members, including guest room cleaning staff, will enter your room during your stay, except in emergencies. All UCLA Lake Arrowhead Lodge team members are tested weekly for COVID-19 and complete a daily symptom-monitoring survey. Hand sanitizer stations are available throughout the Main Lodge. </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#covid2"> What COVID-19 mitigation protocols do I need to follow during my stay? </a> </h4>
            </div>
            <div id="covid2" class="panel-collapse collapse">
              <div class="panel-body"> We expect our guests to help us prevent the spread of COVID-19 and keep the safety of all guests and team members at the UCLA Lake Arrowhead Lodge in mind during their stay. Please monitor yourself for symptoms before your arrival. Masks are mandatory in all indoor spaces and wherever you might come into contact with other guests or team members.  </div>
            </div>
          </div>
        </div>
        <!-- end of #bs-collapse  --> 
      </div>
      <!-- end of #bs-collapse  --> 
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row"> <a name="checkout"></a>
        <h3>Checkout</h3>
        <div class="panel-group wrap" id="bs-collapse">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#checkout1"> What time do I need to checkout? </a> </h4>
            </div>
            <div id="checkout1" class="panel-collapse collapse">
              <div class="panel-body"> Check out is 11:00 am. </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#bs-collapse" href="#checkout2"> Can I check out later? </a> </h4>
            </div>
            <div id="checkout2" class="panel-collapse collapse">
              <div class="panel-body"> We offer late check out based on availability, and this service may incur an additional fee.</div>
            </div>
          </div>
        </div>
        <!-- end of #bs-collapse  --> 
      </div>
      <!-- end of #bs-collapse  --> 
    </div>
  </div>
</section>
<?php endwhile; ?>
