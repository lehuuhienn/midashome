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
    'meta_query' => array(),
);

// FILTER
$so_phong_ngu = isset($_GET['so_phong_ngu'])?$_GET['so_phong_ngu']:'';
if(strlen($so_phong_ngu)>0 ){
    $args['meta_query'][] = array(
        'key'     => 'so_phong_ngu',
        'value'   =>  esc_sql($_GET['so_phong_ngu']),
        'compare' => '=',
    );
}
$dien_tich = isset($_GET['dien_tich'])?$_GET['dien_tich']:'';
if(strlen($dien_tich)>0 ){
    $args['meta_query'][] = array(
        'key'     => 'dien_tich',
        'value'   =>  esc_sql($_GET['dien_tich']),
        'compare' => '=',
    );
}
$so_tang = isset($_GET['so_tang'])?$_GET['so_tang']:'';
if(strlen($so_tang)>0 ){
    $args['meta_query'][] = array(
        'key'     => 'so_tang',
        'value'   =>  esc_sql($_GET['so_tang']),
        'compare' => '=',
    );
}

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
        <a href="<?php echo get_term_link($termObject); ?>"><button class="button-midas"><?php echo $termObject->name; ?></button></a>
        <form action="" method="GET" class="row mt-20 pl-3">
            <div class="col">
                <select name="so_phong_ngu" class="input-filter mt-3">
                    <option value="">Số phòng ngủ</option>
                    <?php for($i=1; $i<6; $i++): ?>
                        <option <?php echo $so_phong_ngu==$i?'selected':''; ?> value="<?php echo $i ?>"><?php echo $i.' phòng' ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="col">
                <select name="dien_tich" class="input-filter mt-3">
                    <option value="">Diện tích căn hộ</option>
                    <?php for($i=15; $i<55; $i+=5): ?>
                        <option <?php echo $dien_tich==$i?'selected':''; ?> value="<?php echo $i.'m' ?>"><?php echo $i.'m' ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="col">
                <select name="so_tang" class="input-filter mt-3">
                    <option value="">Số tầng</option>
                    <?php for($i=1; $i<6; $i++): ?>
                        <option <?php echo $so_tang==$i?'selected':''; ?> value="<?php echo $i ?>"><?php echo $i.' tầng' ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn-search mt-3">Tìm kiếm</button>
            </div>
        </form>
    </div>
    <!-- End about us -->

    <?php if($posts->have_posts()): ?>
        <!-- list product -->
        <div class="row mt-4">

            <?php while($posts->have_posts()): $posts->the_post(); ?>
            <?php get_template_part( 'template-parts/block/house'); ?>
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
        <div class="page paged mt-3">
            <?php foreach($paging as $p): ?>
                <?php echo $p; ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <!-- end list product -->
    <?php else: ?>
        <h3 class="pt-5 pb-5 text-center">Danh mục này chưa có bài viết.</h3>

    <?php endif;?>
</div>
<!-- /.container -->

<?php get_footer();?>