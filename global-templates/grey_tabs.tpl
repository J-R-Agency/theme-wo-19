<?php
/**
 * Grey tabs.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<section class="grey_tabs">
	<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
		<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
		<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
		<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
	</div>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 d-none d-lg-block stretch-left grey_tabs__bkimg" style="background-image:url('http://localhost:8888/WomensOrg/wp-content/uploads/2019/09/cowomen-1450080-unsplash.png');">
						
					</div>
					<div class="col-lg-6 col-md-12 grey_tabs__content">
						<h3>The business start up support you need</h3>
						<p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Sit amet, consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit, sed do eiusmod sit amet, consectetur adipiscing elit.</p>
						<button>ypooooooo</button>
					</div>
				</div>
			</div>
		</div>



		<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
		<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
	</div>
</section>
