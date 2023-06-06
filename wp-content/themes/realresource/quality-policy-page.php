 <!-- Template Name: Quality Page -->
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
 <section>
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="timeline-wrapper">
                     <ul class="timelin-main">
                         <?php if (have_rows('list')) : ?>
                         <?php $index = 1; ?>
                         <?php while (have_rows('list')) : the_row(); ?>
                         <li>
                             <div>
                                 <h1><?php echo $index; ?></h1>
                                 <?php the_sub_field('content'); ?>
                             </div>
                         </li>
                         <?php $index++; ?>
                         <?php endwhile; ?>
                         <?php endif; ?>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php include 'what_we_do-panel.php'; ?>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>