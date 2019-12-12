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
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="feature_paragraph"><?php echo the_field('feature_paragraph')?></div>
                <div class="lead-in_paragraph"><?php echo the_field('lead-in_paragraph')?></div>
            </div>
        </div>
    </div>
</section>