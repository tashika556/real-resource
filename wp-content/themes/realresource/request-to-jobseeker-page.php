<!-- Template Name: Request To Page -->
<?php get_header(); ?>
<section class="bg_img banner position-relative"
    style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white">
                    <h1><?php the_title() ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="job_request">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="position-relative">
                    <div class="about_img-block">
                        <?php $image = get_field('image') ?>
                        <img src="<?php echo $image['url'] ;?>"
                            class="img-fluid w-100 pl-md-5 pl-0 pr-md-3 pr-0 position-relative" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-center flex-column h-100">
                    <div class="home-about-panel">
                        <?php if(have_posts()) : while(have_posts()) : the_post();
                        the_content();
endwhile;
else:
endif; ?>
                        <div class="readmore__content mt-4">
                            <div class="list_jobseeker">
                                <?php
                            while(have_rows('list')) : if(have_rows('list')) : the_row();
                            ?>
                                <div class="news_right_two d-flex  mb-4 p-3 bg-white bg-white">
                                    <div class="notice_img d-flex align-items-center">
                                        <img src="<?php echo get_template_directory_uri()?>/img/tick.png"
                                            class="img-fluid">
                                    </div>
                                    <div
                                        class="news_right_title_sub p-3   d-flex justify-content-center flex-column bg_gray w-100 ">
                                        <h6><?php the_sub_field('content') ?> <?php the_sub_field('title') ?> </h6>
                                    </div>
                                </div>
                                <?php endif;
                              endwhile; ?>
                            </div>
                        </div>
                        <button class="readmore__toggle animated text-uppercase font-weight-bold" role="switch"
                            aria-checked="true">
                            Show more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'what_we_do-panel.php'; ?>
<?php include 'testimonial_panal.php'; ?>
<?php include 'contact_map-panel.php'; ?>
<?php get_footer(); ?>