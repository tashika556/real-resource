<!-- Template Name: Work Categories Page -->
<?php get_header(); ?>
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
<section id="mission" class="members youtube_bg bg_img">
    <div class="container">
        <div class="row">
            <?php
        $paged = ( get_query_var('paged')) ? get_query_var('paged') :1 ;
        $args = array(
            'post_type'=>'workcategory',
            'orderby'=>array(
               'meta_key'=>'bar',
               'order'=>'DESC',
            ),
            'category_name'=>'work-category',
            'posts_per_page'=>100,
            'paged'=>$paged
        );
        $custom_query=new WP_Query($args);
        while($custom_query->have_posts()):
            $custom_query->the_post();
            $postid=get_the_ID();
        ?>
            <div class="col-lg-6">
                <div class="row_height row box_shadow d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="section_wrapp d-flex justify-content-center h-100 flex-column">
                            <div class="section_title mb-0">

                                <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="catagories_list-text pb-md-4 pt-md-3 pt-2 pb-3">
                                <?php the_content(); ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="catagories_img">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid rounded_box w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
      wp_reset_postdata();
      ?>
        </div>
    </div>
</section>
<?php include 'what_we_do-panel.php'; ?>
<?php include 'testimonial_panal.php'; ?>
<?php include 'contact_map-panel.php'; ?>
<?php get_footer(); ?>