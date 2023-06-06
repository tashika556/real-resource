 <!-- Template Name: Recruiment Procedure Page -->
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
 </section>
 <section class="code_of-ethics position-relative bg_gray">
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
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="process"><?php
                $image = get_field('image'); ?>
                     <img src="<?php echo $image['url'];?>" class="bg-img w-100 img-fluid" alt="">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="mx-auto text-center pt-5">
                     <h4><?php the_field('image_source') ?></h4>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php include 'what_we_do-panel.php'; ?>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>