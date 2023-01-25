<?php
/**
 * Feature Standfirst.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<section class="subsection bk-grey">
    <div class="container">
        <div class="row feature-standfirst">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="feature_paragraph">
	                <p><?php echo the_field('feature_paragraph')?></p>
	            </div>
                <div class="lead-in_paragraph">
	                <p><?php echo the_field('lead-in_paragraph')?></p>
	            </div>
            </div>
        </div>
    </div>
</section>