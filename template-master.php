<?php
/**
 * Template Name: Master - Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="master-block">
<div class="col-md-12">
</div>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 bluebg-normal">

                    <h1> Heading 1</h1>
                    <h2> Heading 2</h2>
                    <h3> Heading 3</h3>
                    <h4> Heading 4</h4>
                    <h5> Heading 5</h5>
                </div>
                <div class="col-md-4 bluebg">
                    <h1> Heading 1</h1>
                    <h2> Heading 2</h2>
                    <h3> Heading 3</h3>
                    <h4> Heading 4</h4>
                    <h5> Heading 5</h5>
                </div>     
                <div class="col-md-4" style="padding: 20px !important;">
                    <h1 class="heading-test-bg"> Heading 1</h1>
                    <h2 class="heading-test-bg"> Heading 2</h2>
                    <h3 class="heading-test-bg"> Heading 3</h3>
                    <h4 class="heading-test-bg"> Heading 4</h4>
                    <h5 class="heading-test-bg"> Heading 5</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
            </div>
            <hr>
        </div> 
    </div>
    <div class="container">
    </div>
<div class="container">
<hr><div class="header__heading">
    <div class="container">
        <h1 class="header__heading--subheading">Full - Width Header</h1>
    </div>
    <div class="subheader-title">
        <div class="container">
            <div class="col-md-12">
                <h2 class="header__heading--text">H2 - 50px top, 30px bottom</h2>
            </div>
        </div>
    </div>
</div>
<section class="fullrow-div">
    <div class="container">
        <div class="col-md-12">
            <div class="row" style="margin: 0 !important;">
                <div class="col-md-12">
                    <div class="">
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<hr>

</div>
<div class="codeblock">
<pre data-lang='scss' class='prettyprint'>
// These styles are defined in styles/common/_global.scss

/******************************************************************
 * H1, H2, H3, H4, H5 STYLES
 ******************************************************************/

h1,
.h1 {
    color: $main-brown;
    font-family: $bold-sans-serif;
    font-size: 2.2em;
    line-height: 1.15;
    padding: 0;
}

h2,
.h2 {
    color: $main-brown;
    font-family: $bold-sans-serif;
    font-size: 1.9em;
    letter-spacing: 0.03em;
    line-height: 1.15;
    margin: 20px 0 15px;
}

h2 .subhead,
.h2 .subhead {
    color: $main-brown;
    font-family: $bold-sans-serif;
    font-size: 1.5em;
    letter-spacing: 0.03em;
    line-height: 1.15;
    margin: 0 0 10px 0;
    line-height: 1.3;
}

h3,
.h3 {
    font-size: 1.5em;
    font-family: $bold-sans-serif;
    margin: 15px 0px 10px 0px;
    letter-spacing: 0.03em;
    color: $main-brown;
}

//makes h3 tag above list become flush with left column
.ul__header--title {
    margin: 0 0 10px;
}

h4,
.h4 {
    font-family: $bold-sans-serif;
    letter-spacing: 0.03em;
    line-height: 1.3;
    color: $main-brown;
    margin: 10px 0px 10px 0px;
}

h5,
.h5 {
    font-family: $bold-sans-serif;
    font-size: 0.846em;
    line-height: 1.3;
    letter-spacing: 0.03em;
    color: $main-brown;
    margin: 5px 0px 10px 0px;
}

p {
    font-family: $sans-serif;
    line-height: 1.3;
    letter-spacing: 0.03em;
    text-align: left;
    color: $main-text;
    margin-bottom: 1.5em;
}

ul {
    padding-left: 17px;
    li {
        list-style-type: disc;
        list-style-position: outside;
        list-style-image: none;
        padding-bottom: 5px;
    }
}

//makes h3 tag above list become flush with left column
.ul__header--title {
    margin: 0 0 10px;
}
</pre>
</div>
</div>
<?php endwhile; ?>
