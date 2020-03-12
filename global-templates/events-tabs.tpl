
	
		<!--CATEGORY TABS -->
		<section class="category_grey_tabs content capped-width">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs" id="nav-tab" role="tablist">	
							<li>
								<a class="nav-item nav-link" href="<?php echo site_url(); ?>/events#nav-tab">All</a>
							</li>


<?php
  $terms = get_terms( [
    'taxonomy' => Tribe__Events__Main::TAXONOMY
  ] );
 
  if ( empty( $terms ) || is_wp_error( $terms ) ) {
    return;
  }

 
  foreach ( $terms as $single_term ) {
    $url = esc_url( get_term_link( $single_term ) );
    $name = esc_html( get_term_field( 'name', $single_term ) );
 
    echo "<li><a class=\"nav-item nav-link\" href=\"?category=$name\">$name</a> </li>";
  }
 
   ?>


						</ul>
					</div>
				</div>
			</div>																		
		</section>
	