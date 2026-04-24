<?php
/**
 * Template Name: Refreshment 2 - Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/_subheader');?>
<?php get_template_part('components/components-one-goldbutton');?>
    <div class="container">
        <div class="single-divider-border"></div>
    </div>
<section class="text_img">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
            <h3 class="zero-margin-top">Social Hour Packages</h3>
            </div>
        </div>
            <div class="col-md-6">
                <div class="row">
                <div class="text_img__socialhour--heading">
                <h4 class="">THE VERANDA PACKAGE</h4>
                <ul>
                    <li>Garden-Fresh Vegetable Crudités with Two Specialty Dips</li>
                    <li>Domestic and Imported Cheeses</li>
                    <li>Fresh Seasonal Fruits</li>
                    <li>Crackers and French Bread</li>
                </ul>
                </div>
                <div class="text_img__socialhour--heading">
                <h4>THE FIRESIDE PACKAGE</h4>
                <ul>
                    <li>All items in the Veranda Package</li>
                    <li>Hot Items Selected &amp; Prepared by our Executive Chef</li>
                </ul>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="row">
                <div class="text_img__socialhour--heading">
                <h4>THE TAVERN PACKAGE</h4>
                <p>An assortment of cocktail snacks such as Pretzels, Nuts, and Crackers served in baskets along with one (1) Chef ’s Choice of Chips &amp; Dip. </p>
                </div>
                <div class="text_img__socialhour--heading">
                <h4>THE LAKESIDE PACKAGE</h4>
                <p>A sweet selection of seasonal items such as assorted Petit Fours and Chocolate-dipped Strawberries.</p>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="single-divider-border"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="zero-margin-top">Coffee Break Additions</h3>
                <p>Complimentary coffee service is available in your meeting room throughout the day. You may also order refreshments for your group to enjoy during meetings and breaks, and for an additional charge, you may add breakfast breads, cookies, fruit, juice, and sodas. Please inquire with our Conference Coordinators for more information.</p>
                <ul>
                    <li>Sweet Rolls</li>
                    <li>Freshly-Baked Cookies</li>
                    <li>Whole Seasonal Fruit</li>
                    <li>Cookie &amp Fruit Combo</li>
                    <li>Bottled Juice</li>
                    <li>Sodas, Individual</li>
                </ul>
            </div>
            <div class="col-md-5">
                <img class="img-responsive thirty-top-mobile" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/Dining_RefreshmentPg_01_555x350.jpg">
            </div>
    </div>
    </div>
    <div class="container">
        <div class="single-divider-border"></div>
    </div>
    <div class="container">
                <div class="row">

        <div class="col-md-12">
            <h3 class="zero-margin-top">Bar Set-ups</h3>
            <p>The Conference Center, as a state agency, cannot sell or provide alcoholic beverages. We do, however, allow you to bring your own social beverages (alcoholic or non-alcoholic) — in bottles and cans only please, no kegs. At your request, we will provide a complimentary social room set-up (ice and glasses) before or after dinner.</p>
            </div>
        </div>
    </div>
</section>

    <?php endwhile; ?>
