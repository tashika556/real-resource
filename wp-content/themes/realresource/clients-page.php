<!-- Template Name: Clients Page -->
<?php get_header(); ?>
<section class="bg_img banner position-relative" style="background-image: url(<?php echo the_post_thumbnail_url() ?>);">
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
            <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') :1;
        $args = array(
            'post_type'=>'partner',
            'orderby'=>array(
             'meta_key'=>'bar',
             'order'=>'DESC',
            ),
           'category_name'=>'partner',
            'posts_per_page'=>100,
            'paged'=>$paged
        );
        $custom_query=new WP_Query($args);
        while($custom_query->have_posts()):
            $custom_query->the_post();
            $postid=get_the_ID();
            ?>

            <div class="col-lg-2 mb-4 text-center">
                <div class="clients-logo">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid bg-white">
                </div>
            </div>
            <?php
endwhile;
wp_reset_postdata();
?>
        </div>
    </div>
</section>
<?php include 'contact_map-panel.php'; ?>
<?php get_footer(); ?>