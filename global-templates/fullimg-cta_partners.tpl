<?php $pcta_bkimg = get_field('pcta_bkimg'); ?>
<section class="fullimg-cta partners right capped-width">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 fullimg-cta__content">
                <div class="h1"><?php echo the_field('pcta_title');?></div>
                <p><?php echo the_field('pcta_descriptor');?></p>
                <a href="<?php echo the_field('pcta_btnlink');?>" class="wo-btn purple"><?php echo the_field('pcta_btntitle');?></a>
            </div>
            <div class="col-md-6 d-none d-md-block stretch-right fullimg-cta__bkimg" style="background-image:url('<?php echo $pcta_bkimg['url']; ?>');">
                
            </div>
        </div>
    </div>
</section>