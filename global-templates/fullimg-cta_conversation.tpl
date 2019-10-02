<?php $ccta_bkimg = get_field('ccta_bkimg'); ?>
<section class="fullimg-cta conversation left capped-width">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 d-none d-md-block stretch-left fullimg-cta__bkimg" style="background-image:url('<?php echo $ccta_bkimg['url']; ?>');"></div>
            <div class="col-md-6 col-sm-12 fullimg-cta__content text-center">
                <div class="h1"><?php echo the_field('ccta_title');?></div>
                <p><?php echo the_field('ccta_descriptor');?></p>
                <div class="gradient-link orange"><span class="gradient-link__text">Leave your details</span><a href="#" class="wo-btn orange">email us</a></div>
                <div class="gradient-link purple"><span class="gradient-link__text">Call us today</span><a href="#" class="wo-btn purple">+44(0)151 706 8111</a></div>
                <div class="gradient-link green"><span class="gradient-link__text">Speak to our team</span><a href="#" class="wo-btn green">Launch Live Chat</a></div>
            </div>
        </div>
    </div>
</section>