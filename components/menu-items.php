<?php 

	// check for rows (parent repeater)
	if( have_rows('menuitems') ): ?>
		<div class="container">
		    <div class="divider-border"></div>
		</div>
		<div class="container fiftybottoms">
		<div class="row">
				<div class="col-md-12">
		<h2 class="zero-margin-top">SAMPLE MENUS</h2>
			<p>The menus displayed below are a sample only and may not necessarily reflect the offerings during your event.</p>
		</div>
	</div>
</div>
	<?php 

	// loop through rows (parent repeater)
	while( have_rows('menuitems') ): the_row(); ?>
	<section class="menus">
    	<div class="container">
    	    <div class="row">

        	<div class="col-md-12">
           	 	<h3 class="zero-margin-top"><?php the_sub_field('main-heading'); ?></h3>
           	 	</div>
           	 	</div>
           	 	    	    <div class="row">

	<?php 

	// check for rows (sub repeater)
	if( have_rows('rows') ): ?>
	<?php 

		// loop through rows (sub repeater)
		while( have_rows('rows') ): the_row();

			// display each item as a list - with a class of completed ( if completed )
			?>					

				<div class="col-md-4">
					<h4><?php the_sub_field('heading'); ?></h4>
					<div class="menus__list"><?php the_sub_field('lists'); ?></div>
					</div>

		<?php endwhile; ?>

	<?php endif; //if( get_sub_field('items') ): ?>
            </div>
        </div>
    </div>
    </div>
		<div class="container">
		    <div class="divider-border"></div>
		</div>
	</section>

	<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
<?php endif; // if( get_field('to-do_lists') ): ?>



