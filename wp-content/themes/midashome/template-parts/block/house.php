<?php 
    $img_default = get_frontend().'img/00gkgm51.png'; 
    $img = get_the_post_thumbnail_url(null, "medium");
    $img = $img?$img:$img_default;
    
?>
<div class="col-lg-3 mt-3">
    <div class="col-item">
        <div class="info">
            <a href="<?php echo get_permalink(); ?>"
                class="title-item-product">
                <h5><?php the_title(); ?></h5>
            </a>
        </div>
        <a href="<?php echo get_permalink(); ?>" class="photo">
            <img src="<?php echo $img; ?>" class="img-fluid" alt="<?php the_title(); ?>" />
        </a>
        <div class="info">
            <div class="separator clear-left">
                <p class="btn-add">
                    <i class="fa fa-calendar"></i>
                    <span class=""><?php echo date('d/m/Y', strtotime($post->post_date)); ?></span>
                </p>
                <p class="btn-details1 float-right">
                    <i class="fa fa-eye"></i>
                    <span class=""><?php echo pvc_get_post_views( $post->ID ); ?></span>
                </p>
                <div class="clearfix"></div>
                <p class="float-none text-left">
                    <i class="fa fa-user-circle-o"></i>
                    <a class=""><?php _e("Chủ đầu tư:", "themecustom");?> <?php the_field("chu_dau_tu"); ?></a>
                </p>
                <p class="float-none text-left">
                    <i class="fa fa-location-arrow"></i>
                    <a class=""><?php _e("Địa điểm xây dựng:", "themecustom");?> <?php the_field("dia_diem_xay_dung"); ?></a>
                </p>
                <p class="float-none text-left">
                    <i class="fa fa-home"></i>
                    <a class=""><?php _e("Phong cách:", "themecustom");?> Tân cổ điển</a>
                </p>
                <p class="float-none text-left">
                    <i class="fa fa-users"></i>
                    <a class=""><?php _e("Kiến trúc sư:", "themecustom");?> <?php the_field("kien_truc_su"); ?></a>
                </p>
                <p class="float-none text-left">
                    <i class="fa fa-clock-o"></i>
                    <a class=""><?php _e("Năm thi công:", "themecustom");?> <?php the_field("nam_thi_cong"); ?></a>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>