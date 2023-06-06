 <!-- Template Name: Team Page -->
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
 <section class="team_text bg_gray">
     <div class="row">
         <div class="col-lg-6 mx-auto text-center">
             <div class="section_title">

                 <div class="readmore__content mb-md-4 mb-0">
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                     <?php the_content() ?> <?php endwhile; else: ?>

                     <?php endif; ?>
                 </div>
                 <button class="readmore__toggle font-weight-bold animated text-uppercase rounded-0" role="switch"
                     aria-checked="true">
                     Show more
                 </button>
             </div>
         </div>
     </div>
 </section>
 <section class="team_page">
     <div class="container">
         <div class="row">
             <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'team',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'team',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
          <div class="col-lg-4">
                 <div class="team_wrapp bg_gray mb-4">
                     <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                     <div class="team_name bg-white">
                         <h4><?php the_title() ?></h4>
                         <p><?php the_field('designation') ?></p>
                     </div>
                 </div>
             </div>
             <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>
         </div>
     </div>
 </section>
 <?php include 'what_we_do-panel.php'; ?>
 <?php include 'testimonial_panal.php'; ?>
 <?php include 'contact_map-panel.php'; ?>
 <?php get_footer(); ?>