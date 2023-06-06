 <!-- Template Name: Message Page -->
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
 <section class="message">
     <div class="container">
         <div class="row no-gutters">
             <div class="col-lg-4">
                 <div class="message_page-img">
                     <?php
                $image = get_field('image'); ?>
                     <img src="<?php echo $image['url'];?>" class="img-fluid w-100">
                 </div>
             </div>
             <div class="col-lg-8  col-12 mx-auto">
                 <div class="message_text p-md-5 p-3 bg_green-3 text-white bg_gray">
                     <div class="mb-md-4 mb-0">
                         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                         <?php the_content() ?> <?php endwhile; else: ?>

                         <?php endif; ?>
                         <strong><?php the_field('full_name'); ?></strong>
                         <div class="mt-3">
                             <p><?php the_field('designation'); ?></p>
                         </div>
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