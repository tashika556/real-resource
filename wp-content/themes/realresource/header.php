<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.minn.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
</head>
<?php wp_head() ?>
<body>
    <section class="top_header p-0 w-100 position-relative">
        <div class="container">
            <div class="row_wrapp-header">
                <div class="row">
                    <div class="col-lg-2 col-10">
                        <div class="logo"><a href="<?php echo get_page_link(8); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo1"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-2">
                        <div class="row d-flex align-items-center h-100 justify-content-around">
                            <div class="col-lg-4 border_right-header position-relative d-lg-block d-none">
                                <div class="icon_block_header d-flex justify-content-center">
                                    <div class="icon_block mr-2">
                                        <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="d-flex flex-column button_text">
                                        <strong> Call Us: </strong>
                                        <span> <a href="tel: <?php the_field('phone_number',17) ?>">
                                                <?php the_field('phone_number',17) ?></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 border_right-header position-relative d-lg-block d-none">
                                <div class="icon_block_header d-flex justify-content-center">
                                    <div class="icon_block mr-2">
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="d-flex flex-column button_text">
                                        <strong> Mail us:</strong>
                                        <span> <a href="mailto:<?php the_field('email_address',17) ?>">
                                                <?php the_field('email_address',17) ?></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 border_right-header position-relative d-lg-block d-none">
                                <div class="icon_block_header d-flex justify-content-center">
                                    <div class="icon_block mr-2">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column button_text">
                                        <strong>Address: </strong>
                                        <span><?php the_field('address',17) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="icon_block_header d-flex justify-content-center">
                                    <li class="navbar-dropdown">
                                        <div class="menu-btn">
                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>