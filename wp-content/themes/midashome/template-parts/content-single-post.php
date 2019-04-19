    
    <?php get_template_part( 'template-parts/block/banner'); ?>

    <!-- Page Content -->
    <div class="container">

         <!-- title -->
         <div class="about">
                <div class="url-map"><i class="fa fa-home icon-home"></i>TRANG CHỦ > TIN TỨC > <?php the_title(); ?></div>
            </div>
            <!-- End title-->

        <!-- About us -->
        <div class="about">
            <div class="mt-20">
                <h1><?php the_title(); ?></h1>
                <div class="content content-news">
                    <?php the_content();?>
                </div>
            </div>
        </div>
        <!-- End about us -->

    </div>
    <!-- /.container -->