<?php
/**
 * Template Name: PT - Forms - Page Template
 */
?>
<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('components/_subheader');?>

<div class="forms">
	<div class="container">
	<div class="row">
		<div class="col-md-6 col-left">
		<h2>Pre-Conference Forms</h2>
			<ul>

			<li><i class="fa fa-file-pdf-o tenpadding"></i><a  id="space" target="_blank" title="" href="https://lakearrowheadconferencecenter.ucla.edu/assets/docs/ucla-lake-arrowhead-lodge-dietary-request-restrictions.xlsx">Dietary Requests</a>
			</li>
			<li><i class="fa fa-file-pdf-o tenpadding"></i><a  id="space" target="_blank" title="" href="https://lakearrowheadconferencecenter.ucla.edu/assets/docs/ucla-lake-arrowhead-lodge-certificate-of-insurance-requirements.pdf">Certificate of Insurance Requirements</a>
			</li>
			<li><i class="fa fa-file-pdf-o tenpadding"></i><a  id="space" target="_blank" title="" href="https://lakearrowheadconferencecenter.ucla.edu/assets/docs/ucla-lake-arrowhead-lodge-daily-events-menu-selections.xlsm">Daily Event Menu Selections</a>
			</li>
			</ul>
		</div>
				<div class="col-md-6 col-left">
		<h2>Optional Form</h2>
			<ul>
			<li><i class="fa fa-file-pdf-o tenpadding"></i><a id="space" target="_blank" title="" href="https://lakearrowheadconferencecenter.ucla.edu/assets/docs/UCLA_LACC_W9.pdf">W9 Tax Form</a>
			</li>
			</ul>
		</div>
	</div>
	</div>
</div>

<?php endwhile; ?>

