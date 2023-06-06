<a id="button"></a>
<footer class="footer-section bg_gray">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget company-intro-widget">
                        <h4 class="widget-title">About
                        </h4>
                        <?php the_field('summary2',40) ?>
                    </div>
                </div><!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget course-links-widget">
                        <h4 class="widget-title">Quick Link
                        </h4>
                        <ul class="courses-link-list">
                            <li><a href="<?php echo get_page_link(195); ?>"><i class="fas fa-long-arrow-alt-right"
                                        aria-hidden="true"></i>Company
                                    Profile</a></li>
                            <li><a href="<?php echo get_page_link(40); ?>"><i class="fas fa-long-arrow-alt-right"
                                        aria-hidden="true"></i>About
                                </a></li>
                            <li><a href="<?php echo get_page_link(132); ?>"><i class="fas fa-long-arrow-alt-right"
                                        aria-hidden="true"></i>Message From
                                    Chairman</a></li>
                            <li><a href="<?php echo get_page_link(220) ?>"><i class="fas fa-long-arrow-alt-right"
                                        aria-hidden="true"></i>Category</a>
                            </li>
                            <li><a href="<?php echo get_page_link(308) ?>"><i class="fas fa-long-arrow-alt-right"
                                        aria-hidden="true"></i>Jobs</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget latest-news-widget">
                        <h4 class="widget-title">Connect With Us</h4>
                        <div class="social_icon py-2">
                            <ul class="d-flex">
                                <li><a href="<?php the_field('facebook',17) ?>" target="_blank"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="<?php the_field('twitter',17) ?>" target="_blank"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="<?php the_field('youtube',17) ?>" target="_blank"><i class="fa fa-youtube"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="<?php the_field('instagram',17) ?>" target="_blank"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div id="footer_addresh" class="widget newsletter-widget">
                        <h4 class="widget-title">Get in Touch</h4>
                        <div class="address-links">
                            <ul>
                                <li><a><span><i class="fa fa-map-marker"
                                                aria-hidden="true"></i></span><?php the_field('address',17) ?></a>
                                </li>
                                <li><a href="tel: <?php the_field('phone_number',17) ?>"><span><i
                                                class="fa fa-volume-control-phone" aria-hidden="true"></i></span>
                                        <?php the_field('phone_number',17) ?></a>
                                </li>

                                <li><a href="mailto:<?php the_field('email_address',17) ?>">
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                        <?php the_field('email_address',17) ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-sm-left text-center">
                    <span class="copy-right-text">© 2023 Real resource management Pvt. Ltd. | All rights reserved.
                    </span>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="terms-privacy d-flex justify-content-sm-end justify-content-center">
                        <li><a href="https://archiesoft.com.np/" target="_blank"> Website by </a><span>ArchieSoft
                                Technology</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
<div class="side-bar">
    <header>
        <div class="close-btn">
            <i class="fa fa-times"></i>
        </div>
    </header>
    <div class="menu_mobile pt-5">
        <div class="item"><a href="<?php echo get_page_link(8); ?>">Home</a></div>

        <div class="item">
            <a class="sub-btn">
                About
                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="<?php echo get_page_link(40); ?>" class="sub-item"> Who We Are</a>
                <a href="<?php echo get_page_link(78); ?>" class="sub-item"> Mission and Vision</a>
                <a href="<?php echo get_page_link(88); ?>" class="sub-item"> Guiding Principles</a>
                <a href="<?php echo get_page_link(117); ?>" class="sub-item"> Certification</a>
                <a href="<?php echo get_page_link(104); ?>" class="sub-item"> Code of Ethics</a>
                <a href="<?php echo get_page_link(121); ?>" class="sub-item"> Quality Policy</a>
                <a href="<?php echo get_page_link(129); ?>" class="sub-item"> Quality Objective</a>
                <a href="<?php echo get_page_link(132); ?>" class="sub-item">Message from Chairman </a>
            </div>
        </div>
        <div class="item">
            <a class="sub-btn">
                How We Do
                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">

                <a href="<?php echo get_page_link(144); ?>" class="sub-item"> Commitment</a>
                <a href="<?php echo get_page_link(156); ?>" class="sub-item"> Organization Structure</a>
                <a href="<?php echo get_page_link(173); ?>" class="sub-item"> Recruitment Process Flow</a>
                <a href="<?php echo get_page_link(180); ?>" class="sub-item"> Quality Excellence Model</a>
                <a href="<?php echo get_page_link(193); ?>" class="sub-item"> Legal Documents</a>
                <a href="<?php echo get_page_link(182); ?>" class="sub-item"> Training/Seminar</a>
            </div>
        </div>
        <div class="item">
            <a class="sub-btn">
                Services
                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="<?php echo get_page_link(289); ?>" class="sub-item"> Required Documents</a>
                <a href="<?php echo get_page_link(220) ?>" class="sub-item"> Work Force Category</a>
                <a href="<?php echo get_page_link(292) ?>" class="sub-item"> Important Information</a>
                <a href="<?php echo get_page_link(303) ?>" class="sub-item"> Request to Jobseeker</a>
            </div>
        </div>
        <div class="item"><a href="<?php echo get_page_link(326); ?>"> Valued Clients</a></div>
        <div class="item"><a href="<?php echo get_page_link(308); ?>"> Available Job</a></div>

        <div class="item">
            <a class="sub-btn">
                Media
                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="<?php echo get_page_link(195); ?>" class="sub-item"> Company Profile</a>
                <a href="<?php echo get_page_link(197); ?>" class="sub-item">Gallery</a>
                <a href="<?php echo get_page_link(200); ?>" class="sub-item">Video</a>
            </div>
        </div>
        <div class="item"><a href="<?php echo get_page_link(17); ?>">Contact</a></div>
        <div class="address-links position-relative mt-lg-5 mt-4">
            <div class="mb-3">
                <h5>OUR LOCATION</h5>
            </div>
            <ul>
                <li><a><span class="pr-2"><i class="fa fa-map-marker"
                                aria-hidden="true"></i></span><?php the_field('address',17) ?></a>
                </li>
                <li><a href="tel: <?php the_field('phone_number',17) ?>"><span class="pr-2"><i
                                class="fa fa-volume-control-phone" aria-hidden="true"></i></span>
                        <?php the_field('phone_number',17) ?></a>
                </li>

                <li><a href="mailto:<?php the_field('email_address',17) ?>">
                        <span class="pr-2"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <?php the_field('email_address',17) ?></a>
                </li>
            </ul>
            <div class="social_sidebar mb-4 mt-5">

                <ul class="d-flex">
                    <a href="<?php the_field('facebook',17) ?>" target="_blank">
                        <li><span><i class="fa fa-facebook" aria-hidden="true"></i></span></li>
                    </a>
                    <a href="<?php the_field('twitter',17) ?>" target="_blank">
                        <li><span><i class="fa fa-twitter" aria-hidden="true"></i></span></li>
                    </a>
                    <a href="<?php the_field('youtube',17) ?>" target="_blank">
                        <li><span><i class="fa fa-youtube" aria-hidden="true"></i></span></li>
                    </a>
                    <a href="<?php the_field('instagram',17) ?>" target="_blank">
                        <li><span><i class="fa fa-instagram" aria-hidden="true"></i></span></li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick-animation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/font-awesom.js "></script>
<script src="<?php echo get_template_directory_uri()?>/js/typed.min.js"
    integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
    crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
</body>
</html>