 <!-- Template Name: Code of Ethics Page -->
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
 <section class="code_of-ethics position-relative">
     <div class="row">
         <div class="col-lg-5 col-12 m-auto">
             <div class="inner_page-title text-center pb-5">
                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <?php the_content() ?> <?php endwhile; else: ?>

                 <?php endif; ?>
             </div>
         </div>
     </div>
 </section>
 <section class="image_bg position-relative bg_img">
     <div class="container">
         <div class="row">

             <?php if (have_rows('list')) : ?>
             <?php $index = 1; ?>
             <?php while (have_rows('list')) : the_row(); ?>
             <div class="col-lg-6">
                 <div class="news_right_two d-flex  mb-4 p-4 bg-white bg-white">
                     <div class="notice_img ">
                         <div class="event-det">
                             <h1><?php echo $index; ?></h1>
                         </div>
                     </div>
                     <div class="news_right_title_sub p-3   d-flex justify-content-center flex-column bg_gray w-100">
                         <h5><?php the_sub_field('title'); ?> <?php the_sub_field('content'); ?></h5>
                     </div>
                 </div>
             </div>
             <?php $index++; ?>
             <?php endwhile; ?>
             <?php endif; ?>
         </div>
     </div>
 </section>
 <?php include 'what_we_do-panel.php'; ?>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>