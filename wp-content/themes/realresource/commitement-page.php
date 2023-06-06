 <!-- Template Name: Commitment Page -->
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
 <section class="code_of-ethics position-relative bg_gray">
     <div class="row">
         <div class="col-lg-5 col-12 m-auto">
             <div class="inner_page-title text-center pb-5">
                 <?php if(have_posts()) : while(have_posts()) : the_post();
           the_content();
endwhile;
else:
endif;
           ?>
             </div>
         </div>
     </div>
 </section>
 <section class="how_it-hepl img_bg">
     <div class="container">
         <div class="grid-container">
             <?php if (have_rows('list')) : ?>
             <?php $index = 1; ?>
             <?php while (have_rows('list')) : the_row(); ?>

             <div class="grid-item">
                 <div class="round_block position-relative p-4 mb-lg-0 mb-4">
                     <div class="box_wrapp">
                         <div class="round_imag mb-4 text-center d-flex justify-content-center align-items-center">
                             <?php
                            $image = get_sub_field('image');
                            if ($image) {
                                echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="img-fluid">';
                            }
                        ?>
                         </div>
                     </div>
                     <div class="round_block_text text-center">
                         <h4><?php the_sub_field('title'); ?></h4>
                     </div>
                     <div class="process_count d-flex align-items-center justify-content-center">
                         <h4><?php echo str_pad($index, 2, '0', STR_PAD_LEFT); ?></h4>
                     </div>
                 </div>
             </div>
             <?php $index++; ?>
             <?php endwhile; ?>
             <?php endif; ?>
         </div>
     </div>
 </section>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>