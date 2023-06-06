<div class="d-lg-block d-md-flex d-block mt-lg-0 mt-5 ">
    <div class="category_side-job mr-lg-0 mr-2">
        <?php
$paged= (get_query_var('paged')) ? get_query_var('paged') : 1;
$args=array(
    'post_type'=>'jobs',
    'orderby'=>'date',
    'category_name'=>'jobs',
    'posts_per_page'=>100,
    'paged'=>$paged
);
$custom_query=new WP_Query($args);
while($custom_query->have_posts()):
    $custom_query->the_post();
    $postid=get_the_ID();
?>
        <div class="category_job-item">
            <a href="<?php the_permalink() ?>">
                <div class="job_wrapp position-relative">
                    <div class="job-number">

                        <h1><?php the_field('number_of_vacancy') ?></h1>
                    </div>
                    <div class="job_title">
                        <h4><?php the_title(); ?>
                        </h4>
                        <p><strong>Date: </strong><?php echo get_the_date(); ?></p>
                    </div>
                    <div class="job-img">
                        <img src="<?php echo get_template_directory_uri()?>/img/job02.png" alt="">

                    </div>
                </div>
            </a>
        </div>
        <?php endwhile;
     wp_reset_postdata(); ?>
    </div>
    <div class="category_block_item mt-lg-4 mt-0 ml-lg-0 ml-md-2 ml-0">
        <div class="category_title bg_green-1">
            <h3>Job Category
            </h3>
        </div>
        <ul>
            <a href="<?php echo get_page_link(220) ?>">
                <li class="bg_green-2"><img src="<?php echo get_template_directory_uri()?>/img/manpower-icon.jpg"
                        alt="">Skilled
                    Manpower</li>
            </a>
            <a href="<?php echo get_page_link(220) ?>">
                <li class="bg_greem-3"><img src="<?php echo get_template_directory_uri()?>/img/manpower-icon.jpg"
                        alt="">Semi-Skilled
                    Manpower</li>
            </a>
            <a href="<?php echo get_page_link(220) ?>">
                <li class=" bg_blue-4"><img src="<?php echo get_template_directory_uri()?>/img/manpower-icon.jpg"
                        alt="">Unskilled Manpower</li>
            </a>
        </ul>
    </div>
</div>