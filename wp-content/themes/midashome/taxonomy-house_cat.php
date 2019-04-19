<?php
/*
    Taxonomy House Cat
*/

get_header();

global $banner_img_alt, $posts;

$termObject = get_term_by( 'slug', $term, $taxonomy);
$banner_img_alt = get_field("feature_image", $termObject->ID);

$current_page = get_query_var('page')?max(1, get_query_var('page')):1;

$args = array(
    'post_type' => 'house',
    'posts_per_page' => 16,
    'paged' => $current_page,
    'orderby' => array( 'menu_order' => 'DESC', 'post_date'=>'DESC'),
    'tax_query' => array(
        array (
            'taxonomy' => $taxonomy,
            'field' => 'slug',
            'terms' => $term,
        )
    ),
);
$posts = new WP_Query($args);

$default_img = get_frontend()."img/00gkgm51.png";

?>

<h1 class="d-none"><?php echo $termObject->name; ?></h1>

<?php get_template_part( 'template-parts/block/banner'); ?>

<!-- Page Content -->
<div class="container">

    <!-- About us -->
    <div class="about">
        <div class="red-line"></div>
        <button class="button-midas"><?php echo $termObject->name; ?></button>
        <?php if($posts): ?>
        <div class="row mt-20 pl-3">
            <div class="col">
                <select class="input-filter mt-3">
                    <option value="">Số phòng ngủ</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col">
                    <select class="input-filter mt-3">
                        <option value="">Diện tích căn hộ</option>
                        <option value="1">20m</option>
                        <option value="2">30m</option>
                        <option value="3">40m</option>
                    </select>
                </div>
                <div class="col">
                        <select class="input-filter mt-3">
                            <option value="">Số tầng</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                </div>
                <div class="col">
                    <button class="btn-search mt-3">Tìm kiếm</button>
                </div>
        </div>
        <?php else: ?>
        <h3 class="pt-5 pb-5 text-center">Danh mục này chưa có bài viết.</h3>
        <?php endif;?>
    </div>
    <!-- End about us -->

    <?php if($posts): ?>
        <!-- list product -->
        <div class="row mt-4">

            <?php while($posts->have_posts()): $posts->the_post(); ?>
            <div class="item col-xs-3 col-lg-3">
                <div class="thumbnail">
                    <div class="info">
                        <a href="<?php echo get_permalink(); ?>" class="title-item-product">
                            <h5><?php the_title();?></h5>
                        </a>
                    </div>
                    <a href="<?php echo get_permalink(); ?>" class="photo pb-3 d-block">
                        <img src="<?php echo has_post_thumbnail()?get_the_post_thumbnail_url(null,"medium"):$default_img; ?>" class="img-fluid" alt="<?php the_title();?>" />
                    </a>
                    <div class="info">
                        <div class="separator clear-left pl-2">
                            <p class="btn-add" style="float:left">
                                <i class="fa fa-calendar pr-2"></i><a
                                    class="hidden-sm">14/08/2018</a>
                            </p>
                            <p class="btn-details">
                                <i class="fa fa-eye pl-4 pr-2"></i><a
                                    class="hidden-sm">150</a>
                            </p>
                            <p class="btn-detail">
                                <i class="fa fa-user-circle-o pr-2"></i><a
                                    class="hidden-sm">Chủ đầu tư: Ông bà
                                    Oanh Phong</a>
                            </p>
                            <p class="btn-detail">
                                <i class="fa fa-location-arrow pr-2"></i><a
                                    class="hidden-sm">Địa điểm xây dựng: Tân
                                    Thành</a>
                            </p>
                            <p class="btn-detail">
                                <i class="fa fa-home pr-2"></i><a
                                    class="hidden-sm">Phong cách: Tân cổ
                                    điển</a>
                            </p>
                            <p class="btn-detail">
                                <i class="fa fa-users pr-2"></i><a
                                    class="hidden-sm">Kiến trúc sư:
                                    Midashome</a>
                            </p>
                            <p class="btn-detail">
                                <i class="fa fa-clock-o pr-2"></i><a
                                    class="hidden-sm">Năm thi công: 2016</a>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>

        </div>

        <?php
            $args = array(
                'format' => '?page=%#%',
                'current' => $current_page,
                'total' => $posts->max_num_pages,
                'mid_size' => 5,
                'before_page_number' => '<button class="btn btn-page">',
                'after_page_number' => '</button>',
                'prev_next' => false,
                'type' => 'array'
            );
            $paging = paginate_links( $args );
        ?>
        <?php if($paging): ?>
        <div class="page mt-3">
            <?php foreach($paging as $p): ?>
                <?php echo $p; ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <!-- end list product -->

    <?php endif;?>
</div>
<!-- /.container -->

<?php get_footer();?>