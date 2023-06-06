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
<section class="why_nepal">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="job_detail-block">
                    <?php
                  if( have_posts() ) : while( have_posts() ) : the_post();
                  the_content();
endwhile;
else:
endif;
                  ?>
                </div>
                <div class="company_table">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><strong>Job Position</strong></td>
                                <td><?php the_field('job_position') ?></td>
                            </tr>
                            <tr>
                                <td><strong>Candidates:</strong></td>
                                <td><?php the_field('candidates') ?></td>
                            </tr>
                            <tr>
                                <td><strong>Qualification :</strong></td>
                                <td><?php the_field('qualification') ?></td>
                            </tr>
                            <tr>
                                <td><strong>Monthly Salary :</strong></td>
                                <td><?php the_field('monthly_salary') ?></td>
                            </tr>
                            <tr>
                                <td><strong>OT Facility :</strong></td>
                                <td><?php the_field('ot_facility') ?></td>
                            </tr>
                            <tr>
                                <td><strong>Working Hours:</strong></td>
                                <td><?php the_field('working_hours') ?></td>
                            </tr>
                            <tr>
                                <td><strong>Working Days:</strong></td>
                                <td><?php the_field('working_days') ?></td>
                            </tr>
                            <tr>
                                <td><strong>Annual Leave:</strong></td>
                                <td><?php the_field('annual_leave') ?></td>
                            </tr>
                            <tr>
                                <td><strong>Food Facility</strong></td>
                                <td><?php the_field('food_facility') ?></td>
                            </tr>
                            <tr>
                                <td><strong>Contract Period</strong></td>
                                <td><?php the_field('contract_period') ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="button" class="apply-btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Apply For Job
                </button>
            </div>
            <div class="col-lg-4">
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>
<?php include 'what_we_do-panel.php'; ?>
<?php include 'testimonial_panal.php'; ?>
<?php include 'contact_map-panel.php'; ?>
<?php get_footer(); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Fill your Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php the_field('job_form',308) ?>
        </div>
    </div>
</div>