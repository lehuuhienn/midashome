<?php
/*
    Template Name: Liên Hệ Template
*/

get_header();
?> 
        <h1 class="d-none"><?php the_title(); ?></h1>

        <?php get_template_part( 'template-parts/block/banner'); ?>

        <!-- Page Content -->
        <div class="container">

            <!-- About us -->
            <div class="about">
                <div class="red-line"></div>
                <button class="button-midas"><?php the_title(); ?></button>
                <div class="row mt-20 pl-3">
                    <div class="col-lg-7 border-color">
                            <h4><?php the_field("company_name", "options"); ?></h4>
                            <p class="add">Địa chỉ: <?php the_field("company_address", "options"); ?></p>
                            <p class="hotline">Điện thoại: <?php the_field("company_phone", "options"); ?></a></p>
                            <p class="hotline">Hotline: <?php the_field("company_hotline", "options"); ?></p>
                            <p class="mail">E-mail: <a href="mailto:<?php the_field("company_email", "options"); ?>"><?php the_field("company_email", "options"); ?></a></p>
                            <p class="web">Website: <a href="<?php echo site_url();?>"><?php echo site_url();?></a></p>
                            <div class="mapouter"><div class="gmap_canvas">
                                <?php the_field("company_map", "options"); ?>
                            </div></div>
                    </div>

                    <div class="col-lg-5">
                        <div class="form-lien-he form-ban-tin form-gui-yeu">
                            <?php echo do_shortcode(get_field('form_lien_he'));  ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End about us -->

        </div>
        <!-- /.container -->

<?php get_footer();?>