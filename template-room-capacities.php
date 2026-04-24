<?php
/**
 * Template Name: Room Capacities - Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-two-goldbuttons');?>
<div class="container">
    <div class="single-divider-border"></div>
</div>
<section class="row__bullet-bullet">
    <div class="container">
        <h3 class="row__bullet-bullet--heading">Meeting Space Highlights:</h3>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>Total Meeting Rooms: 14</li>
                    <li>Total Square Footage: 10,000</li>
                    <li>Largest Meeting Space: 1,512 square feet</li>
                    <li>Maximum Group Capacity: 200 (largest room)</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>Audio Visual Capabilities &#038; Video Conferencing</li>
                    <li>No Pillars, Allowing for Unobstructed Interior Views</li>
                    <li>Complimentary Wi-Fi Throughout the Property</li>
                    <li>On-Site Dining </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('components/_fullrow__tablepress');?>

<div class="container">
<div class="PDF-map hidden-sms">
<object data="https://lakearrowheadlodge.com/assets/pdf/ucla-lake-arrowhead-lodge-meeting-room-floorplans.pdf" type="application/pdf" width="100%" height="800px"> 
  <p>It appears you don't have a PDF plugin for this browser.
   No biggie... you can <a href="https://lakearrowheadlodge.com/assets/pdf/ucla-lake-arrowhead-lodge-meeting-room-floorplans.pdf">click here to
  download the PDF file.</a></p>  
 </object>
 </div>
 </div>
</div>
<?php endwhile; ?>
