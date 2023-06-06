<!-- Template Name: Training Seminar Page -->
<?php get_header(); ?>
<section class="bg_img banner position-relative" style="background-image: url(<?php echo the_post_thumbnail_url() ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="timeline position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="info text-center d-flex flex-column justify-content-center">

                    <h2><?php the_title() ?></h2>
                    <?php if(have_posts()) : while(have_posts()) : the_post();
                   the_content();
endwhile;
else:
endif;
?>
                </div>
            </div>
            <div class="col-lg_8">
                <ol>
                    <?php if (have_rows('list')) : while(have_rows('list')) : the_row(); ?>
                    <li>
                        <div>
                            <h3><?php the_sub_field('date') ?></h3><?php the_sub_field('content') ?>
                        </div>
                        <?php endwhile;
                   endif; ?>
                    <li></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<?php include 'what_we_do-panel.php'; ?>
<?php include 'testimonial_panal.php'; ?>
<?php include 'contact_map-panel.php'; ?>
<?php get_footer(); ?>