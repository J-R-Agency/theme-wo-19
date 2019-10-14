<?php
/**
 * Template Name: Opportunities page
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

get_header(); ?>

<div class="site <?php echo $theme_colour; ?>">
    <?php include_once (get_template_directory() . '/global-templates/banner_hero.tpl'); ?>
    <section class="opportunities generic bk-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-8 text-left">
                    <h5>Lorem ipsum dolor sit amet consectetur adipiscing</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-title">Job title goes here</div>
                                </button>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                    <div class="d-block job-links">
                                        <a href="#" class="wo-btn orange">FULL JOB DESCRIPTION</a>
                                        <a href="#" class="wo-btn orange">EQUAL OPPORTUNITIES FORM</a>
                                        <a href="#" class="wo-btn orange">APPLICATION FORM</a>
                                    </div>

                                    <hr>

                                    <h5 class="job">This job opportunity is part funded by</h5>
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <div class="card-title">Job title goes here</div>
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                    <div class="d-block job-links">
                                        <a href="#" class="wo-btn orange">FULL JOB DESCRIPTION</a>
                                        <a href="#" class="wo-btn orange">EQUAL OPPORTUNITIES FORM</a>
                                        <a href="#" class="wo-btn orange">APPLICATION FORM</a>
                                    </div>

                                    <hr>

                                    <h5 class="job">This job opportunity is part funded by</h5>
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <div class="card-title">Job title goes here</div>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                    <div class="d-block job-links">
                                        <a href="#" class="wo-btn orange">FULL JOB DESCRIPTION</a>
                                        <a href="#" class="wo-btn orange">EQUAL OPPORTUNITIES FORM</a>
                                        <a href="#" class="wo-btn orange">APPLICATION FORM</a>
                                    </div>

                                    <hr>

                                    <h5 class="job">This job opportunity is part funded by</h5>
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                        <div class="col-sm-6 col-lg-4 job-img">
                                            <img src="http://preview.thewomensorganisation.org.uk/wp-content/uploads/2019/10/eujob.png" alt="opportunity">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-3 d-none d-md-block more-info-sidebar">
                    <h4>More Info</h4>
                    <ul>
                        <li><a class="theme" href="#">Our History</a></li>
                        <li><a class="theme" href="#">Our Mission & Values</a></li>
                        <li><a class="theme" href="#">Work With Us</a></li>
                        <li><a class="theme" href="#">Support Us</a></li>
                        <li><a class="theme" href="#">Media Centre</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();
