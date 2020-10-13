<?php 

// GET CONVERSATION FIELDS

<<<<<<< HEAD
    $ccta_title = get_field('ccta_title'); 
    $ccta_bkimg = get_field('ccta_bkimg');  
    $ccta_email = get_field('ccta_email');
	$ccta_phone_number = get_field('ccta_phone_number');
=======
    $contact_cta_title = get_field("contact_cta_title"); 
    $contact_cta_image = get_field("contact_cta_image");  
    $contact_cta_description = get_field("contact_cta_description");

    $fullimg_cta_conversation_bg = "https://www.thewomensorganisation.org.uk/wp-content/uploads/2019/12/Letterbox_39_Contact_D4A7442.jpg";
    // Attempt to use Jetpack Photon CDN URL if available
    if ( function_exists('jetpack_photon_url') ) $fullimg_cta_conversation_bg = jetpack_photon_url( $fullimg_cta_conversation_bg );

>>>>>>> e1a059b4987995906bcc835c18b9c9cbb846783d
?>

<section class="fullimg-cta conversation left capped-width">
    <div class="container">
        <div class="row align-items-center" style="padding: 3rem;">
<<<<<<< HEAD
            <div class="col-md-6 d-none d-md-block stretch-left fullimg-cta__bkimg" style="background-image:url('<?php echo $ccta_bkimg['url']; ?>');"></div>
=======
            <div class="col-md-6 d-none d-md-block stretch-left fullimg-cta__bkimg" style="background-image:url('<?php echo $fullimg_cta_conversation_bg;?>');"></div>
>>>>>>> e1a059b4987995906bcc835c18b9c9cbb846783d
            <div class="col-md-6 col-sm-12 fullimg-cta__content text-center">
                <div class="h1"><?php the_field('ccta_title'); ?></div>
                <div class="gradient-link orange"><span class="gradient-link__text">Leave your details</span><a href="mailto:<?php echo $ccta_email; ?>" class="wo-btn orange">email us</a></div>
                <div class="gradient-link purple"><span class="gradient-link__text">Call us today</span><a href="tel:<?php echo $ccta_phone_number; ?>" class="wo-btn purple"><?php echo $ccta_phone_number; ?></a></div>
            </div>
            
        </div>
    </div>
</section>