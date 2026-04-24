<?php
/**
 * Template Name: Planner Toolkit - Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="header__heading">
    <div class="container">
        <h1 class="header__heading--subheading">Conference Planner Toolkit</h1>
    </div>
    <div class="subheader-title">
        <div class="container">
            <div class="col-md-12">
                <h2 class="header__heading--text">A Library of Resources to Help Plan Your Event</h2>
            </div>
        </div>
    </div>
</div>
    <section class="fullrow-div">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full-row-content">
                            <p>Everything you require to keep your group organized and on track for a successful meeting, conference or retreat can be found on this page — and many of the documents are printable, for easy sharing and note-taking. Of course, your Conference Coordinator is always available to help ensure a smooth experience that your team will be talking about long after you return from the mountain. 
</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
    </section>

<div class="planner-toolkit">
<?php get_template_part('components/components-4-col-grid');?>
</div>
<?php endwhile; ?>
