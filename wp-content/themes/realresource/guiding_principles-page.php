 <!-- Template Name: Guiding Principles Page -->
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
 <section class="services bg_img position-relative">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 mx-auto text-center">
                 <div class="section_title section_margin">
                     <h5>Processing Chart</h5>
                     <div class="my-2">
                         <h2>Recruitment Process Flow</h2>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <?php if (have_rows('list')) : ?>
             <?php while (have_rows('list')) : the_row(); ?>
             <div class="col-lg-4 col-md-6 mb-4">
                 <div
                     class="services_wrapp d-flex flex-column justify-content-center align-items-center text-center p-4 h-100">
                     <div class="services_icon">
                         <?php
                                        $image = get_sub_field('image');
                                        if ($image) {
                                            echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="img-fluid">';
                                        }
                                        ?>
                     </div>
                     <div class="services_text">
                         <div class="my-3">
                             <h3><?php the_sub_field('title'); ?></h3>
                         </div>
                         <?php the_sub_field('content'); ?>
                     </div>
                 </div>
             </div>
             <?php endwhile; ?>
             <?php endif; ?>
         </div>
     </div>
 </section>
 <?php include 'what_we_do-panel.php';?>
 <?php include 'testimonial_panal.php'; ?>

 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>