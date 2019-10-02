<?php
/**
 * Grey tabs.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<?php  if( have_rows('grey_tabs') ): ?>
<section class="grey_tabs capped-width">
	<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
	
		<?php $count = 0; ?>
		<?php while ( have_rows('grey_tabs') ) : the_row(); ?>
			<?php $class = ($count != 0) ?: 'active'; ?>
			<a class="nav-item nav-link <?php echo $class; ?>" id="grey-tabs_<?php echo $count; ?>" data-toggle="tab" href="#grey-tabs-content_<?php echo $count; ?>" role="tab" aria-controls="nav-home"><?php echo the_sub_field('gt_tabtitle');?></a>
			<?php $count = $count + 1; ?>
        <?php endwhile; ?>
	</div>
	<div class="tab-content" id="nav-tabContent">
		<?php $count = 0; ?>
		<?php while ( have_rows('grey_tabs') ) : the_row(); ?>
			<?php $bkimg = get_sub_field('gt_bkimg');?>
			<?php $class = ($count != 0) ?: 'active'; ?>	
			<div class="tab-pane fade show <?php echo $class; ?>" id="grey-tabs-content_<?php echo $count; ?>" role="tabpanel" aria-labelledby="grey-tabs_<?php echo $count; ?>">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6 d-none d-md-block stretch-left grey_tabs__bkimg" style="background-image:url('<?php echo $bkimg['url']; ?>');">
							
						</div>
						<div class="col-md-6 col-sm-12 grey_tabs__content">
							<div class="h1"><?php echo the_sub_field('gt_title');?></div>
							<p><?php echo the_sub_field('gt_descriptor');?></p>
							<a href="<?php echo the_sub_field('gt_btnlink');?>" class="wo-btn green"><?php echo the_sub_field('gt_btntitle');?></a>
						</div>
					</div>
				</div>
			</div>
			<?php $count = $count + 1; ?>
		<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>
