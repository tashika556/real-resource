 <!-- Template Name: Quality Excellence Page -->
 <?php get_header() ?>
 <section class="bg_img banner position-relative"
     style="background-image: url(<?php echo the_post_thumbnail_url() ?>);">
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
 <section class="quality_page image_bg position-relative bg_img">
     <div class="container">
         <div class="row">
             <?php if (have_rows('list')) : ?>
             <?php while (have_rows('list')) : the_row(); ?>
             <div class="col-lg-6">
                 <div class="news_right_two d-flex  mb-4 p-3 bg-white bg-white">
                     <div class="notice_img d-flex align-items-center">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/tick.png" class="img-fluid">
                     </div>
                     <div class="news_right_title_sub p-3   d-flex justify-content-center flex-column bg_gray w-100 ">
                         <h5><?php the_sub_field('title'); ?> <?php the_sub_field('content'); ?></h5>

                     </div>
                 </div>
             </div>
             <?php endwhile; ?>
             <?php endif; ?>

         </div>
     </div>
 </section>
 <?php include 'what_we_do-panel.php'; ?>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>