<?php
/**
 * Sub Section.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<section class="subsection bk-grey grey-w-icon">
    <div class="container">
        <div class="row align-items-center text-center justify-content-center">
            <div class="col-md-10 col-sm-12">
                <h4><?php echo the_field('subsection_title')?></h4>
                <div class="h3"><?php echo the_field('subsection_subtitle')?></div>
                <?php echo the_field('subsection_copy')?>
            </div>
        </div>
    </div>
</section>