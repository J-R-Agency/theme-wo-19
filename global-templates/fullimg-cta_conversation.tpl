<?php 

// GET CONVERSATION FIELDS

    $ccta_title = get_field('ccta_title'); 
    $ccta_bkimg = get_field('ccta_bkimg');  
    $ccta_email = get_field('ccta_email');
	$ccta_phone_number = get_field('ccta_phone_number');
?>

<section class="fullimg-cta conversation left capped-width">
    <div class="container">
        <div class="row align-items-center" style="padding: 3rem;">
            <div class="col-md-6 d-none d-md-block stretch-left fullimg-cta__bkimg" style="background-image:url('<?php echo $ccta_bkimg['url']; ?>');"></div>
            <div class="col-md-6 col-sm-12 fullimg-cta__content text-center">
                <div class="h1"><?php the_field('ccta_title'); ?></div>
                <div class="gradient-link orange"><span class="gradient-link__text">Leave your details</span><a href="mailto:<?php echo $ccta_email; ?>" class="wo-btn orange">email us</a></div>
                <div class="gradient-link purple"><span class="gradient-link__text">Call us today</span><a href="tel:<?php echo $ccta_phone_number; ?>" class="wo-btn purple"><?php echo $ccta_phone_number; ?></a></div>
            </div>
            
        </div>
    </div>
</section>