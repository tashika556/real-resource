 <!-- Template Name: Organization Structure Page -->
 <?php get_header(); ?>
 <section class="bg_img banner position-relative"
     style="background-image: url(<?php echo the_post_thumbnail_url() ?>);">
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
 <section class="image_bg position-relative bg_img">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="process pt-0"><?php
                $image = get_field('image'); ?>
                     <img src="<?php echo $image['url'];?>" class="img-fluid w-100">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="btn_theme mt-4 mx-auto text-center">
                     <a href="<?php echo get_page_link(162); ?>"
                         class="btn-digi btn-digi-primary font-weight-bold text-uppercase">
                         View Team
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php include 'what_we_do-panel.php'; ?>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>