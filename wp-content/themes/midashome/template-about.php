<?php
/*
    Template Name: Thông tin Template
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
                    <button class="button-midas button-center"><?php the_title(); ?></button>
                    <div class="mt-20 pl-3">
                        <?php
                            while ( have_posts() ) :
                                the_post();
                                the_content();
                            endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
                <!-- End about us -->
            </div>

<?php get_footer();?>