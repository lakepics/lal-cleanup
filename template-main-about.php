<?php
/**
 * Template Name: About Main Template
 */
?>
 
<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/_fullrow__content');?>
<?php get_template_part('components/_fullrow__content2');?>
<!-- 
<section class="fullrow-div">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                    <div class="bottom-fifty">
                        <p>The IACC-certified UCLA Lake Arrowhead Conference Center is a unique venue for Southern California meetings and retreats. Located high in the pine-studded San Bernardino Mountains on the tranquil shores of Lake Arrowhead, this unique setting makes it easy for your group to focus, leave everyday distractions behind, and find inspiration.</p>
                        <p>Our 42-acre Conference Center provides unique, upscale <a href="https://lakearrowheadconferencecenter.ucla.edu/meetings/">meeting rooms</a> and chalet-style <a href="https://lakearrowheadconferencecenter.ucla.edu/accommodations/">accommodations</a> for groups of 10 to 200 guests from September through mid-June. Guests enjoy our award-winning <a href="https://lakearrowheadconferencecenter.ucla.edu/dining/">dining</a> and a wide variety of outdoor <a href="https://lakearrowheadconferencecenter.ucla.edu/recreation/">recreational activities</a>. Accommodations include two-story, chalet-style condolets with two bedrooms (queen beds) and two bathrooms, a shared living room with a wood burning fireplace, and outdoor decks with views of the lake or mountains. All of these amenities and services are part of our <a href="https://lakearrowheadconferencecenter.ucla.edu/complete-meeting-package/">Complete Meeting Package (CMP)</a>, providing meeting planners with convenience and value.</p>
                    </div>
                </div>
                <div class="row">
                        <ul>
                            <li><strong><a href="https://lakearrowheadconferencecenter.ucla.edu/directions/">Location</a></strong> — 90 miles from Los Angeles, San Diego, and Orange County on the north shore of Lake Arrowhead in the San Bernardino Mountains</li>
                            <li><strong><a href="https://lakearrowheadconferencecenter.ucla.edu/room-capacities-details/">Meeting Facilities</a></strong> — Available September to mid-June for groups of 10-200. Most meeting rooms feature high ceilings, no pillars, natural light, and many have fireplaces</li>
                            <li><strong><a href="">Services</a></strong> — <a href="https://lakearrowheadconferencecenter.ucla.edu/complete-meeting-package/">Complete Meeting Package (CMP)</a> includes overnight accommodations, meeting and breakout spaces, three meals per day, coffee breaks, audiovisual, and Wi-Fi.</li>
                            <li><strong><a href="https://lakearrowheadconferencecenter.ucla.edu/team-building/">Team Building</a></strong> — Our on-site, facilitator-led program, which includes our on-site ropes challenge course, builds leadership, relationships,and trust.</li>
                            <li><strong><a href="https://lakearrowheadconferencecenter.ucla.edu/dining/">Dining &amp; Entertainment</a></strong> — Buffet-style breakfast and lunch, and gourmet four-course dinner served at your table.</li>
                            <li><strong><a href="https://lakearrowheadconferencecenter.ucla.edu/accommodations/">Accommodations</a></strong> — Beautiful two-story, chalet-style condolets, with two bedrooms and two private bathrooms. A shared living room with a wood-burning fireplace opens out to an outdoor deck with mountain or lake views.</li>
                            <li><strong><a href="https://lakearrowheadconferencecenter.ucla.edu/recreation/">Recreation</a></strong> — 24-hours fitness center, outdoor swimming pool, indoor hot tub, tennis, volleyball, basketball, softball, rock wall, zip line, and ropes course.</li>
                        </ul>
                </div>
        </div>
    </div>
-->
    <?php get_template_part('components/components-grid-nav-squares');?>

<?php endwhile; ?>
