 <!-- Template Name: Contact Page -->
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
 <section id="contact_page" class="contact_page_top ">
     <div class="container">
         <div class="contact_row">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="section_title section_margin">
                         <h5><?php the_title() ?></h5>
                         <div class="my-2">
                             <h2>Have Some Questions?
                                 Get in touch!</h2>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-md-6">
                     <div
                         class="contact_wrapp-icon text-center d-flex flex-column justify-content-center px-5 position-relative mt-md-0 mt-4">
                         <h2><i class="fa fa-map-marker" aria-hidden="true"></i></h2>
                         <div class="py-3">
                             <h3>Address
                             </h3>

                         </div>
                         <a><?php the_field('address') ?>
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div
                         class="contact_wrapp-icon text-center d-flex flex-column justify-content-center px-5 position-relative mt-md-0 mt-4">
                         <h2><i class="fa fa-phone" aria-hidden="true"></i></h2>
                         <div class="py-3">
                             <h3>Phone Number</h3>
                         </div>
                         <a href="tel:<?php the_field('phone_number') ?>"
                             tabindex="-1"><?php the_field('phone_number') ?>
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div
                         class="contact_wrapp-icon text-center d-flex flex-column justify-content-center px-5 position-relative mt-lg-0 mt-4">
                         <h2><i class="fa fa-envelope-o" aria-hidden="true"></i></h2>
                         <div class="py-3">
                             <h3>Email Address</h3>
                         </div>
                         <a href="mailto:<?php the_field('email_address') ?>" tabindex="-1">

                             <?php the_field('email_address') ?></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>