 <!-- Template Name: Home Page -->
 <?php get_header() ?>
 <section class="slider_homepage p-0">
     <div class="slider stick-dots">
         <?php $images=get_field('image_slider');
if ( $images ) :
foreach( $images as $image ): ?>

         <div class="slide">
             <div class="slide__img">
                 <img src="" alt="" data-lazy="<?php echo $image['url'];?>" class="full-image animated"
                     data-animation-in="zoomInImage" />
             </div>
             <div class="container h-100">
                 <div class="row h-100">
                     <div class="col-lg-12 h-100 d-flex align-items-center">
                         <div class="slide__content d-lg-block d-none">
                             <div class="slide__content--headings">
                                 <div class="left_border animated" data-animation-in="fadeInRight">
                                     <div class="animated" data-animation-in="fadeInRight">
                                         <p><?php bloginfo('name'); ?></p>
                                     </div>
                                     <h2 class="animated" data-animation-in="fadeInRight">
                                         Good Life Begins With A Good Company
                                     </h2>
                                     <div class="btn_theme mt-4">
                                         <a href="<?php echo get_page_link(17); ?>"
                                             class="btn-digi btn-digi-primary font-weight-bold text-uppercase">
                                             Contact
                                         </a>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-5 h-100">
                         <div class="banner-bar position-relative">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <?php 
endforeach;
endif; ?>
     </div>
 </section>
 <section class="job position-relative pt-0">
     <div class="container">
         <div class="job_list-wrapp">
             <div class="row">
                 <div class="col-lg-9 col-md-6">
                     <div class="job_slider">
                         <?php 
                       $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                       $args = array(
                        'post_type'=>'jobs',
                        'orderby'=>'date',
                        'category_name'=>'jobs',
                        'posts_per_page'=>100,
                        'paged'=> $paged
                       );
                       $custom_query=new WP_Query($args);
                       while($custom_query->have_posts()):
                        $custom_query->the_post();
                        $postid=get_the_ID();
                       ?>
                         <div class="job_slider-item">
                             <a href="job_details.php">
                                 <div class="job_wrapp position-relative">
                                     <div class="job-number">

                                         <h1><?php the_field('number_of_vacancy') ?></h1>
                                     </div>
                                     <div class="job_title">
                                         <h4><?php the_title(); ?>
                                         </h4>
                                         <p><strong>Date: </strong><?php echo get_the_date() ?></p>
                                     </div>
                                     <div class="job-img">
                                         <img src="<?php echo get_template_directory_uri()?>/img/job02.png" alt="">

                                     </div>
                                 </div>
                             </a>
                         </div>
                         <?php endwhile;
wp_reset_postdata();?>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="category_block_item">
                         <div class="category_title bg_green-1">
                             <h3>Category</h3>
                         </div>
                         <ul class="job_category-home">
                             <a href="<?php echo get_page_link(220) ?>">
                                 <li class=""><img src="<?php echo get_template_directory_uri()?>/img/manpower-icon.jpg"
                                         alt="">Skilled
                                 </li>
                             </a>
                             <a href="<?php echo get_page_link(220) ?>">
                                 <li class=""><img src="<?php echo get_template_directory_uri()?>/img/manpower-icon.jpg"
                                         alt="">Semi-Skilled
                                 </li>
                             </a>
                             <a href="<?php echo get_page_link(220) ?>">
                                 <li class=""><img src="<?php echo get_template_directory_uri()?>/img/manpower-icon.jpg"
                                         alt="">Unskilled </li>
                             </a>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section class="about mt-0">
     <div class="container">
         <div class="row">
             <div class="col-md-7">
                 <div class="home-about-panel">
                     <h5>About</h5>
                     <h2><?php bloginfo('name') ?></h2>
                     <?php the_field('summary',40) ?>
                     <div class="btn_theme mt-4">
                         <a href="<?php echo get_page_link(40) ?>"
                             class="btn-digi btn-digi-primary font-weight-bold text-uppercase">
                             Read more
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-md-5">
                 <div class="about_wrapp d-flex justify-content-center flex-column"
                     style="background: url(<?php echo get_template_directory_uri()?>/img/logo-bg.png) bottom center no-repeat;">
                     <h3>We Committed</h3>
                     <hr>
                     <?php the_field('summary',144) ?>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php include 'what_we_do-panel.php';?>
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
             <?php if(have_rows('list',88)) : while(have_rows('list',88)) : the_row() ?>
             <div class="col-lg-4 col-md-6 mb-4">
                 <div
                     class="services_wrapp d-flex flex-column justify-content-center align-items-center text-center p-4 h-100">
                     <div class="services_icon">
                         <?php $image=get_sub_field('image') ?>
                         <img src="<?php echo $image['url'] ?>" class="img-fluid" alt="">
                     </div>
                     <div class="services_text">
                         <div class="my-3">
                             <h3><?php the_sub_field('title') ?></h3>
                         </div>
                         <?php the_sub_field('content') ?>
                     </div>
                 </div>
             </div>
             <?php endwhile;
         endif;
         ?>
         </div>
     </div>
 </section>
 <section class="image_bg position-relative bg_img">
     <div class="container-fluid">
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
             <div class="col-12">
                 <div class="process">
                     <?php $image=get_field('image',173) ?>
                     <img src="<?php echo $image['url']; ?>" class="bg-img w-100 img-fluid" alt="">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="mx-auto text-center pt-5">
                     <h4><?php the_field('image_source',173); ?></h4>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>