<section id="testimonial" class="position-relative bg_gray p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
   'post_type' => 'testimonial',
   'orderby' => array(
    'meta_key' => 'bar',
    'order' => 'DESC',
   ),
   'category_name' => 'testimonial',
   'posts_per_page' => 1,
   'paged' => $paged
);
$custom_query = new WP_Query($args);
while($custom_query->have_posts()):
    $custom_query->the_post();
    $postid= get_the_ID();
?>
                <div class="testimonial-slide">
                    <div class="testimonial_box">
                        <div class="testimonial_box-inner">
                            <div class="testimonial_box-top text-center">


                                <div class="testimonial_box-text">
                                    <?php the_content() ?>
                                    <div class="testimonial_box-info text-center mt-4">
                                        <div class="testimonial_box-name">
                                            <h4><?php the_title() ?></h4>
                                            <p><?php the_field('location') ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial_box-shape"></div>
                            </div>

                        </div>
                    </div>
                    <?php endwhile;
wp_reset_postdata();
?>
                </div>
            </div>
            <div class="col-lg-6 bg-white d-flex align-items-center">
                <div class="row">
                    <?php
$paged =( get_query_var('paged') )? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'partner',
    'orderby' => array(
'meta_key' => 'bar',
'order' => 'DESC',
    ),

    'category_name' => 'partner',
    'posts_per_page' => 100,
    'paged' => $paged
);
$custom_query = new WP_Query($args);
while($custom_query->have_posts()):
    $custom_query->the_post();
    $postid = get_the_ID();
 ?>
                    <div class="col-lg-3 mb-5 text-center">
                        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid bg-white">
                    </div>
                  <?php endwhile;
wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>