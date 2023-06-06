 <!-- Template Name: Mission Page -->
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
 <section class="mission bg_gray">
     <div class="container">
         <div class="row">
             <div class="col-lg-10 mx-auto">
                 <?php if (have_rows('list')) : ?>
                 <?php $row_counter = 0; ?>
                 <?php while (have_rows('list')) : the_row(); ?>
                 <?php if ($row_counter % 2 == 0) : ?>
                 <div class="row">
                     <div class="col-lg-4 col-md-6">
                         <div class="mission_img bg-white d-flex justify-content-center align-items-center h-100">
                             <?php
                                        $image = get_sub_field('image');
                                        if ($image) {
                                            echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="img-fluid">';
                                        }
                                        ?>
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-6">
                         <div class="section_title mb-0 d-flex flex-column justify-content-center h-100 pl-lg-5 pl-3">
                             <div class="mb-2">
                                 <h2><?php the_sub_field('title'); ?></h2>
                             </div>
                             <p><?php the_sub_field('content'); ?></p>
                         </div>
                     </div>
                 </div>
                 <?php else : ?>
                 <div class="row">
                     <div class="col-lg-8 col-md-6">
                         <div
                             class="section_title mb-0 padding_y d-flex flex-column justify-content-center h-100 text-right pr-lg-5 pr-3">
                             <h2><?php the_sub_field('title'); ?></h2>
                             <p><?php the_sub_field('content'); ?></p>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="mission_img bg-white d-flex justify-content-center align-items-center">
                             <?php
                                        $image = get_sub_field('image');
                                        if ($image) {
                                            echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="img-fluid">';
                                        }
                                        ?>
                         </div>
                     </div>
                 </div>
                 <?php endif; ?>
                 <?php $row_counter++; ?>
                 <?php endwhile; ?>
                 <?php endif; ?>
             </div>
         </div>
     </div>
 </section>
 <?php include 'what_we_do-panel.php';?>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>