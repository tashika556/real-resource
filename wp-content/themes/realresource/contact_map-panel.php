<section id="nepal_map" class="p-0 position-relative bg_gray">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6 col-12">
                <div class="contact-info d-flex justify-content-center flex-column h-100 text-md-left text-center">
                    <div class="con-address">
                        <div class="section_title">
                            <h5>INFORMATION
                            </h5>
                            <div class="my-2">
                                <h2>Contact</h2>
                            </div>
                        </div>
                        <div class="city-name mb-3">
                            <h3><?php echo preg_replace('/^(\S+\s+\S+\s+\S+)/', '$1<br>', get_field('address', 17)); ?>
                            </h3>
                        </div>
                        <div class="email  text-white">
                            <?php the_field('email_address',17) ?>
                        </div>
                        <p> <?php the_field('phone_number',17) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <?php the_field('map',17) ?>
            </div>
        </div>
    </div>
</section>