 <!-- Template Name: Who We Are Page -->

 <?php get_header() ?>
 <section class="bg_img banner position-relative"
     style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
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
 <section class="about_page bg_gray">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">

                 <div class="about_img position-relative">
                     <div class="about_img-block">
                         <img src="<?php $image = get_field('image'); echo $image['url'];?>"
                             class="img-fluid w-100 pl-md-5 pl-0 pr-md-3 pr-0 position-relative" alt="">
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="d-flex justify-content-center flex-column h-100">
                     <div class="home-about-panel">
                         <h5>About</h5>

                         <h2><?php bloginfo('name'); ?></h2>
                         <div class="readmore__content mb-md-4 mb-0">
                             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                             <?php the_content(); endwhile; else:?>

                             <?php endif; ?>
                         </div>
                         <button class="readmore__toggle animated text-uppercase font-weight-bold" role="switch"
                             aria-checked="true">
                             Show more
                         </button>
                     </div>
                     <hr class="my-4">
                     <div class="section_title">
                         <div class="mb-3">
                             <h5>Call to Ask Any Question
                             </h5>
                         </div>
                         <h3><a href="tel: <?php the_field('phone_number',17) ?>"> <?php the_field('phone_number',17) ?>

                             </a> or <a href="tel: <?php the_field('phone_number2',17) ?>">
                                 <?php the_field('phone_number2',17) ?>

                             </a></h3>
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