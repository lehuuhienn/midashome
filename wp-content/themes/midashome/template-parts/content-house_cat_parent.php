<?php 

get_header();

global $termObject;

$house_cat_tag = get_terms(array(
    'taxonomy' => 'house_cat',
    'parent'=> $termObject->term_id,
    // 'hide_empty' => true,
)); 

?>
    <h1 class="d-none"><?php the_title(); ?></h1>

    <?php get_template_part( 'template-parts/block/banner'); ?>

    <!-- Page Content -->
    <div class="container">

            <?php if($house_cat_tag): ?>
                
                <!-- SIDLE CONTENT -->
                <?php foreach($house_cat_tag as $key => $term): ?>
                    <?php
                        // $term = get_term_by('id', $cate, 'house_cat');
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
                                    'terms'    => $term->term_id,
                                    'operator' => 'IN'
                                )
                            )
                        );
                        $houses = new WP_Query($args);
                        if($houses->post_count<1) continue;
                    ?>
                    <div class="slide-home">
                        <div class="red-line"></div>
                        <a href="<?php echo get_term_link($term); ?>"><button class="button-midas"><?php echo $term->name; ?></button></a>
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
    
    </div>

<?php get_footer();?>