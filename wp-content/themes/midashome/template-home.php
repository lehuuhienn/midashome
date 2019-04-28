<?php
/*
    Template Name: Trang chủ Template
*/

get_header();
?> 
        <h1 class="d-none"><?php the_title(); ?></h1>

        <?php get_template_part( 'template-parts/block/banner'); ?>

        <!-- Page Content -->
        <div class="container">

            <?php if($intro_page = get_field('intro_page')):  ?>
            <!-- About us -->
            <div class="about">
                <div class="red-line"></div>
                <button class="button-midas"><?php echo $intro_page->post_title; ?></button>
                <div class="row align-items-center mt-20">
                    <div class="col-lg-7">
                        <p><?php echo $intro_page->post_excerpt?$intro_page->post_excerpt:wp_trim_words($intro_page->post_content, 125, "..."); ?></p>
                        <a href="<?php echo get_permalink($intro_page); ?>" class="btn-about"><?php _e("Xem thêm", "themecustom");?> <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <div class="col-lg-5">
                        <img class="img-about" height="250" src="<?php echo get_the_post_thumbnail_url($intro_page, "medium") ?>" alt="<?php echo $intro_page->post_title; ?>">
                    </div>
                </div>
            </div>
            <!-- End about us -->
            <?php endif;?>

            <?php if($house_cat_tag = get_field('house_cat_tag')): ?>
                
                <!-- SIDLE CONTENT -->
                <?php foreach($house_cat_tag as $key => $cate): ?>
                    <?php
                        $term = get_term_by('id', $cate, 'house_cat');
                        $args = array(
                            'post_type'           => 'house',
                            'post_status'         => 'publish',
                            'ignore_sticky_posts' => 1,
                            'posts_per_page'      => 8,
                            'orderby'             => array('menu_order'=>'DESC', 'post_date'=>'DESC'),
                            'tax_query'           => array(
                                array(
                                    'taxonomy' => 'house_cat',
                                    'field'    => 'term_id',
                                    'terms'    => $cate,
                                    'operator' => 'IN'
                                )
                            )
                        );
                        $houses = new WP_Query($args);
                        if($houses->post_count<1) continue;
                    ?>
                    <div class="slide-home">
                        <div class="red-line"></div>
                        <button class="button-midas"><?php echo $term->name; ?></button>
                        <div class="row align-items-center mt-20">
                            <div class="controls float-xs-right hidden-xs w-100">
                                <a class="right fa fa-chevron-right btn btn-slide" href="#carousel-house-<?php echo ($key+1); ?>" data-slide="next"></a>
                                <a class="left fa fa-chevron-left btn btn btn-slide" href="#carousel-house-<?php echo ($key+1); ?>" data-slide="prev"></a>
                            </div>
                            <div id="carousel-house-<?php echo ($key+1); ?>" class="carousel slide hidden-xs" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    
                                    <?php $y = 0; while($houses->have_posts()): $houses->the_post(); ?>
                                        <?php if($y % 4 == 0): ?>

                                        <?php echo $y>0?"</div></div>":''; ?>

                                        <div class="item <?php echo $y==0?'active':''; ?>">
                                            <div class="row">
                                        <?php endif; ?>

                                            <?php get_template_part( 'template-parts/block/house'); ?>
                                                
                                        <?php if($y>= $houses->post_count -1): ?>

                                            </div>
                                        </div>
                                        <?php endif ?>
                                    <?php $y++; endwhile; wp_reset_postdata(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- END SLIDE CONTENT -->
            <?php endif; ?>

            <?php if($workflow_show = get_field('workflow_show') && $workflow_repeat = get_field('workflow_repeat')): ?>
            <!-- WORK-->
            <div class="work">
                <div class="red-line"></div>
                <button class="button-midas button-center"><?php the_field('workflow_title'); ?></button>
                <div class="row mt-3 text-center">
                    <?php foreach($workflow_repeat as $w): ?>
                        <div class="col">
                            <img src="<?php echo $w['img']['sizes']['medium']; ?>" alt="">
                            <h4 class="mt-3 text-color"><?php echo $w['title']; ?></h4>
                            <p><?php echo $w['des']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- END WORK -->
            <?php endif; ?>

            <?php if($partner_show = get_field('partner_show') && $partner_gallery = get_field('partner_gallery')): ?>
            <!-- LOGO -->
            <div class="work">
                <div class="red-line"></div>
                <button class="button-midas button-center"><?php the_field('partner_title'); ?></button>
                <div class="row mt-3 text-center">
                    <div class="container">
                        <section class="customer-logos slider">
                            <?php foreach($partner_gallery as $p): ?>
                                <div class="slide">
                                    <img src="<?php echo $p['sizes']['medium']; ?>" alt="<?php echo $p['alt']; ?>">
                                </div>
                            <?php endforeach;?>
                        </section>
                    </div>
                </div>
            </div>
            <!-- END WORK -->
            <?php endif; ?>

        </div>
        <!-- /.container -->

<?php get_footer();?>