<?php

$gallery_image = get_field("gallery_image");

?>
        <?php get_template_part( 'template-parts/block/banner'); ?>

        <!-- Page Content -->
        <div class="container">

            <!-- title -->
            <div class="about">
                <div class="url-map">
                    <a href="<?php echo home_url();?>"><i class="fa fa-home icon-home"></i>TRANG CHỦ</a>
                    <?php $terms = get_the_terms($post->ID, 'house_cat'); ?>
                    <?php if($terms): ?>
                        <a href="<?php echo get_term_link($terms[0]); ?>"> &gt; <?php echo $terms[0]->name; ?></a>
                    <?php endif; ?>
                    <a href="<?php echo get_permalink(); ?>"> &gt; <?php the_title(); ?></a>
                </div>
            </div>
            <!-- End title-->

            <div class="row mt-3">
                <div class="col col-lg-6">
                    
                    <?php if($gallery_image): ?>
                        <div class="container-edit">
                            <?php foreach( $gallery_image as $image ): ?>
                            <div class="mySlides item-drop" style="padding-top: 70%" >
                                <img src="<?php echo wp_get_attachment_image_url($image["ID"], "full");?>" style="width:100%">
                            </div>
                            <?php endforeach; ?>
                                
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>
                                                
                            <div class="row-edit">
                                <?php foreach( $gallery_image as $key => $image ): ?>
                                <div class="column">
                                    <div class="item-drop" style="padding-top: 70%">
                                        <img class="demo cursor" src="<?php echo wp_get_attachment_image_url($image["ID"], "medium");?>" style="width:100%" onclick="currentSlide(<?php echo $key+1;?>)">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    <?php endif;?>

                    <div class="share mt-2">
                        <div class="sharejs"></div>
                    </div>
                </div>
                <div class="col col-lg-6">
                    <h3 class="title-detail"><?php the_title(); ?></h3>
                    <p class="btn-add" style="float:left">
                        <i class="fa fa-calendar pr-2"></i><?php the_date("d/m/Y"); ?>
                    </p>
                    <p class="btn-details pr-3" style="float: left" >
                        <i class="fa fa-comments-o pl-4 pr-2"></i><?php echo get_comments_number();?>
                    </p>
                    <p class="btn-details">
                        <?php echo do_shortcode('[ratings id="'.$post->ID.'" results="true"]'); ?>
                    </p>
                    <div class="row">
                        <div class="col">
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
                        <div class="col">
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
                    </div>
                    <div class="row mt-2">
                        <div class="w-100"><button class="btn-search" style="width: 100px; height: 30px;"> <i class="fa fa-tag pr-2" style="color:#fff"></i>TAG</button></div>
                        <div class="mt-1"><button class="btn-tag">Biệt thự cổ điển</button><button class="btn-tag">Biệt thự cổ</button><button class="btn-tag">Mẫu biệt thự 3 tầng</button><button class="btn-tag">Biệt thự cổ điển 1</button><button class="btn-tag">Biệt thự cổ điển 2</button></div>
                        <div class="w-100"><button class="btn-search mt-2" style="width: 250px; height: 30px;">GỬI YÊU CẦU TƯ VẤN</button></div>
                        <input type="text" class="input-contact" placeholder="Họ và tên"><input type="text" class="input-contact" placeholder="Email">
                        <textarea class="text-are-detail" name="" id="" cols="300" rows="3"></textarea>
                        <div><button class="btn-search btn-send mt-2">Gửi yêu cầu</button></div>
                    </div>
                </div>
            </div>

            <!-- LOGO -->
            <div class="about">
                <div class="red-line"></div>
                <button class="button-midas">MÔ TẢ CHI TIẾT</button>
                <div class="detail mt-2">
                    Biệt thự singapore phong cách hiện đại ở Đồng Hới- Quảng Bình thiết kế theo phong cách hiện đại vô cùng bắt mắt. Đây là sự lựa chọn vô cùng khác biệt của anh Minh Nhật một chủ đầu tư trẻ tuổi. Từng đi du học Singapore – quốc đảo sư tử một thời gian dài về anh rất yêu thích phong cách hiện đại – đẹp – đơn giản – tiện nghi. Đồng thời xen lẫn vào đó là những mảng xanh bắt mắt là ngôi nhà anh rất ấn tượng. Biệt thự singapore phong cách hiện đại là mẫu nhà mơ ước của anh. Và đề bài đặt ra cho đội ngũ kiến trúc sư của chúng tôi chính là Thiết kế một mẫu biệt thự hiện đại theo phong cách Singapore ở Quảng Bình quê hương anh Minh Nhật.
                </div><div class="detail-view mt-2">
                    Biệt thự singapore phong cách hiện đại ở Đồng Hới- Quảng Bình thiết kế theo phong cách hiện đại vô cùng bắt mắt. Đây là sự lựa chọn vô cùng khác biệt của anh Minh Nhật một chủ đầu tư trẻ tuổi. Từng đi du học Singapore – quốc đảo sư tử một thời gian dài về anh rất yêu thích phong cách hiện đại – đẹp – đơn giản – tiện nghi. Đồng thời xen lẫn vào đó là những mảng xanh bắt mắt là ngôi nhà anh rất ấn tượng. Biệt thự singapore phong cách hiện đại là mẫu nhà mơ ước của anh. Và đề bài đặt ra cho đội ngũ kiến trúc sư của chúng tôi chính là Thiết kế một mẫu biệt thự hiện đại theo phong cách Singapore ở Quảng Bình quê hương anh Minh Nhật.
                    Biệt thự singapore phong cách hiện đại ở Đồng Hới- Quảng Bình thiết kế theo phong cách hiện đại vô cùng bắt mắt. Đây là sự lựa chọn vô cùng khác biệt của anh Minh Nhật một chủ đầu tư trẻ tuổi. Từng đi du học Singapore – quốc đảo sư tử một thời gian dài về anh rất yêu thích phong cách hiện đại – đẹp – đơn giản – tiện nghi. Đồng thời xen lẫn vào đó là những mảng xanh bắt mắt là ngôi nhà anh rất ấn tượng. Biệt thự singapore phong cách hiện đại là mẫu nhà mơ ước của anh. Và đề bài đặt ra cho đội ngũ kiến trúc sư của chúng tôi chính là Thiết kế một mẫu biệt thự hiện đại theo phong cách Singapore ở Quảng Bình quê hương anh Minh Nhật.
                    Biệt thự singapore phong cách hiện đại ở Đồng Hới- Quảng Bình thiết kế theo phong cách hiện đại vô cùng bắt mắt. Đây là sự lựa chọn vô cùng khác biệt của anh Minh Nhật một chủ đầu tư trẻ tuổi. Từng đi du học Singapore – quốc đảo sư tử một thời gian dài về anh rất yêu thích phong cách hiện đại – đẹp – đơn giản – tiện nghi. Đồng thời xen lẫn vào đó là những mảng xanh bắt mắt là ngôi nhà anh rất ấn tượng. Biệt thự singapore phong cách hiện đại là mẫu nhà mơ ước của anh. Và đề bài đặt ra cho đội ngũ kiến trúc sư của chúng tôi chính là Thiết kế một mẫu biệt thự hiện đại theo phong cách Singapore ở Quảng Bình quê hương anh Minh Nhật.
                    Biệt thự singapore phong cách hiện đại ở Đồng Hới- Quảng Bình thiết kế theo phong cách hiện đại vô cùng bắt mắt. Đây là sự lựa chọn vô cùng khác biệt của anh Minh Nhật một chủ đầu tư trẻ tuổi. Từng đi du học Singapore – quốc đảo sư tử một thời gian dài về anh rất yêu thích phong cách hiện đại – đẹp – đơn giản – tiện nghi. Đồng thời xen lẫn vào đó là những mảng xanh bắt mắt là ngôi nhà anh rất ấn tượng. Biệt thự singapore phong cách hiện đại là mẫu nhà mơ ước của anh. Và đề bài đặt ra cho đội ngũ kiến trúc sư của chúng tôi chính là Thiết kế một mẫu biệt thự hiện đại theo phong cách Singapore ở Quảng Bình quê hương anh Minh Nhật.
                    Biệt thự singapore phong cách hiện đại ở Đồng Hới- Quảng Bình thiết kế theo phong cách hiện đại vô cùng bắt mắt. Đây là sự lựa chọn vô cùng khác biệt của anh Minh Nhật một chủ đầu tư trẻ tuổi. Từng đi du học Singapore – quốc đảo sư tử một thời gian dài về anh rất yêu thích phong cách hiện đại – đẹp – đơn giản – tiện nghi. Đồng thời xen lẫn vào đó là những mảng xanh bắt mắt là ngôi nhà anh rất ấn tượng. Biệt thự singapore phong cách hiện đại là mẫu nhà mơ ước của anh. Và đề bài đặt ra cho đội ngũ kiến trúc sư của chúng tôi chính là Thiết kế một mẫu biệt thự hiện đại theo phong cách Singapore ở Quảng Bình quê hương anh Minh Nhật.
                </div>
                <div class="text-center">
                    <button class="btn-show btn-tag" onclick="viewDetail(1)">Hiển thị chi tiết <i class="fa fa-arrow-down"></i></button>
                    <button class="btn-hide btn-tag" onclick="viewDetail()">Ẩn hiển thị <i class="fa fa-arrow-up"></i></button>
                </div>
            </div>
            <!-- END WORK -->

            <!-- comments -->
            <div class="about">
                <div class="red-line"></div>
                <button class="button-midas">BÌNH LUẬN</button>
                <div class="row mt-3">
                    <div class="row profile">
                        <div class="col-sm-3"><img src="<?php the_frontend(); ?>img/jm11use2.png" alt=""></div>
                        <div class="col-sm-9">
                            <b>Nguyễn Cẩm Vân</b>
                            <p>05/06/2019</p>
                        </div>
                        
                    </div>
                    <div class="row comment ml-5">Biệt thự singapore phong cách hiện đại</div>
                    <div class="row profile mt-2">
                            <div class="col-sm-3"><img src="<?php the_frontend(); ?>img/nb77f2kw.png" alt=""></div>
                            <div class="col-sm-9">
                                <b>Trần Huỳnh Thy</b>
                                <p>05/06/2019</p>
                            </div>
                    </div>
                    <div class="row comment ml-5">Đồng thời xen lẫn vào đó là những mảng xanh bắt mắt là ngôi nhà anh rất ấn tượng. Biệt thự singapore phong cách hiện đại là mẫu nhà mơ ước của anh. Và đề bài đặt ra cho đội ngũ kiến trúc sư của chúng tôi chính là Thiết kế một mẫu biệt thự hiện đại theo phong cách Singapore ở Quảng Bình quê hương anh Minh Nhật.</div>
                    <input type="text" class="input-contact" placeholder="Họ và tên"><input type="text" class="input-contact" placeholder="Email">
                    <textarea class="text-are-detail" name="" id="" cols="300" rows="3"></textarea>
                    <div><button class="btn-search btn-send mt-2">Bình luận</button></div>
                </div>
            </div>
            <!-- END comment -->

            <!-- START CLICKED -->
            <div class="slide-home mt-5">
                <div class="red-line"></div>
                <button class="button-midas">CÔNG TRÌNH VỪA XEM</button>
                <div class="row align-items-center mt-20">
                    <div class="controls float-xs-right hidden-xs w-100">
                        <a class="right fa fa-chevron-right btn btn-slide" href="#carousel-example7" data-slide="next"></a>
                        <a class="left fa fa-chevron-left btn btn btn-slide" href="#carousel-example7" data-slide="prev"></a>
    
                    </div>
                    <div id="carousel-example7" class="carousel slide hidden-xs" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#" class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3 tầng cao cấp ở Đảo Phú Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>
    
                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png" class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa fa-calendar"></i><a class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-user-circle-o"></i><a class="hidden-sm">Chủ đầu tư: Ông bà Oanh Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-location-arrow"></i><a class="hidden-sm">Địa điểm xây dựng: Tân Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a class="hidden-sm">Phong cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a class="hidden-sm">Kiến trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-clock-o"></i><a class="hidden-sm">Năm thi công: 2016</a>
                                                    </p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#" class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3 tầng cao cấp ở Đảo Phú Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>
    
                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png" class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa fa-calendar"></i><a class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-user-circle-o"></i><a class="hidden-sm">Chủ đầu tư: Ông bà Oanh Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-location-arrow"></i><a class="hidden-sm">Địa điểm xây dựng: Tân Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a class="hidden-sm">Phong cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a class="hidden-sm">Kiến trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-clock-o"></i><a class="hidden-sm">Năm thi công: 2016</a>
                                                    </p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#" class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3 tầng cao cấp ở Đảo Phú Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>
    
                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png" class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa fa-calendar"></i><a class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-user-circle-o"></i><a class="hidden-sm">Chủ đầu tư: Ông bà Oanh Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-location-arrow"></i><a class="hidden-sm">Địa điểm xây dựng: Tân Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a class="hidden-sm">Phong cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a class="hidden-sm">Kiến trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-clock-o"></i><a class="hidden-sm">Năm thi công: 2016</a>
                                                    </p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#" class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3 tầng cao cấp ở Đảo Phú Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>
    
                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png" class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa fa-calendar"></i><a class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-user-circle-o"></i><a class="hidden-sm">Chủ đầu tư: Ông bà Oanh Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-location-arrow"></i><a class="hidden-sm">Địa điểm xây dựng: Tân Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a class="hidden-sm">Phong cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a class="hidden-sm">Kiến trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-clock-o"></i><a class="hidden-sm">Năm thi công: 2016</a>
                                                    </p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#" class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3 tầng cao cấp ở Đảo Phú Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>
    
                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png" class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa fa-calendar"></i><a class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-user-circle-o"></i><a class="hidden-sm">Chủ đầu tư: Ông bà Oanh Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-location-arrow"></i><a class="hidden-sm">Địa điểm xây dựng: Tân Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a class="hidden-sm">Phong cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a class="hidden-sm">Kiến trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-clock-o"></i><a class="hidden-sm">Năm thi công: 2016</a>
                                                    </p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#" class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3 tầng cao cấp ở Đảo Phú Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>
    
                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png" class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa fa-calendar"></i><a class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-user-circle-o"></i><a class="hidden-sm">Chủ đầu tư: Ông bà Oanh Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-location-arrow"></i><a class="hidden-sm">Địa điểm xây dựng: Tân Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a class="hidden-sm">Phong cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a class="hidden-sm">Kiến trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-clock-o"></i><a class="hidden-sm">Năm thi công: 2016</a>
                                                    </p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#" class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3 tầng cao cấp ở Đảo Phú Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>
    
                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png" class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa fa-calendar"></i><a class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-user-circle-o"></i><a class="hidden-sm">Chủ đầu tư: Ông bà Oanh Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-location-arrow"></i><a class="hidden-sm">Địa điểm xây dựng: Tân Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a class="hidden-sm">Phong cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a class="hidden-sm">Kiến trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-clock-o"></i><a class="hidden-sm">Năm thi công: 2016</a>
                                                    </p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#" class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3 tầng cao cấp ở Đảo Phú Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>
    
                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png" class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa fa-calendar"></i><a class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-user-circle-o"></i><a class="hidden-sm">Chủ đầu tư: Ông bà Oanh Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-location-arrow"></i><a class="hidden-sm">Địa điểm xây dựng: Tân Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a class="hidden-sm">Phong cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a class="hidden-sm">Kiến trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-clock-o"></i><a class="hidden-sm">Năm thi công: 2016</a>
                                                    </p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CLICKED -->
       
    </div>
    <!-- /.container -->