<?php 

// GET CONVERSATION FIELDS

    $contact_cta_title = get_field("contact_cta_title"); 
    $contact_cta_image = get_field("contact_cta_image");  
    $contact_cta_description = get_field("contact_cta_description");

    $fullimg_cta_conversation_bg = "https://www.thewomensorganisation.org.uk/wp-content/uploads/2019/12/Letterbox_39_Contact_D4A7442.jpg";
    // Attempt to use Jetpack Photon CDN URL if available
    if ( function_exists('jetpack_photon_url') ) $fullimg_cta_conversation_bg = jetpack_photon_url( $fullimg_cta_conversation_bg );

?>
<section class="fullimg-cta conversation left capped-width">
    <div class="container">
        <div class="row align-items-center" style="padding: 3rem;">
            <div class="col-md-6 d-none d-md-block stretch-left fullimg-cta__bkimg" style="background-image:url('<?php echo $fullimg_cta_conversation_bg;?>');"></div>
            <div class="col-md-6 col-sm-12 fullimg-cta__content text-center">
                <div class="h1">Start a conversation</div>
                <div class="gradient-link orange"><span class="gradient-link__text">Leave your details</span><a href="mailto:info@thewo.org.uk" class="wo-btn orange">email us</a></div>
                <div class="gradient-link purple"><span class="gradient-link__text">Call us today</span><a href="tel:+441517068111" class="wo-btn purple">+44(0)151 706 8111</a></div>
            </div>
            
        </div>
    </div>
</section>