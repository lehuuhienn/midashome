<?php
/*
    Template Name: Home Template
*/

get_header();
?> 
        <!-- Slider -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php the_frontend(); ?>img/banner1.png" alt="Los Angeles"
                        style="width:100%;">
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="container">

            <!-- About us -->
            <div class="about">
                <div class="red-line"></div>
                <button class="button-midas">GIỚI THIỆU VỀ CHÚNG TÔI</button>
                <div class="row align-items-center mt-20">
                    <div class="col-lg-7">
                        <p>Công ty CP tư vấn thiết kế xây dựng Thế Kỷ là đơn vị
                            hoạt động trong lĩnh vực tư vấn, thiết kế – Thi công
                            xây dựng. Được thành lập từ năm 2008, hoạt động dưới
                            sự tư vấn hỗ trợ kỹ thuật của đội ngũ kiến trúc sư,
                            kỹ sư lâu năm có tâm huyết với mục tiêu lâu dài là
                            phát triển thành một đơn vị tư vấn thiết kế thi công
                            chuyên nghiệp. Trải qua 6 năm kinh nghiệm và phát
                            triển với hàng trăm công trình tiêu biểu, Công ty CP
                            tư vấn thiết kế xây dựng Thế Kỷ tự hào là đối tác
                            tin cậy của Quý đối tác, Quý khách hàng tại Thành
                            phố Hồ Chí Minh và trên toàn quốc. … </p>
                        <a href="about-us.html" class="btn-about">Xem thêm <i
                                class="fa fa-chevron-right"></i></a>
                    </div>
                    <div class="col-lg-5">
                        <img class="img-about" height="250"
                            src="<?php the_frontend();?>img/00gkgm51.png"
                            alt="">
                    </div>
                </div>
            </div>
            <!-- End about us -->

            <!-- SIDLE CONTENT -->
            <div class="slide-home">
                <div class="red-line"></div>
                <button class="button-midas">KIẾN TRÚC</button>
                <div class="row align-items-center mt-20">
                    <div class="controls float-xs-right hidden-xs w-100">
                        <a class="right fa fa-chevron-right btn btn-slide"
                            href="#carousel-example1" data-slide="next"></a>
                        <a class="left fa fa-chevron-left btn btn btn-slide"
                            href="#carousel-example1" data-slide="prev"></a>
                    </div>
                    <div id="carousel-example1" class="carousel slide hidden-xs"
                        data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="product-detail.html"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="product-detail.html" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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

            <div class="slide-home">
                <div class="red-line"></div>
                <button class="button-midas">THIẾT KẾ NỘI THẤT</button>
                <div class="row align-items-center mt-20">
                    <div class="controls float-xs-right hidden-xs w-100">
                        <a class="right fa fa-chevron-right btn btn-slide"
                            href="#carousel-example2" data-slide="next"></a>
                        <a class="left fa fa-chevron-left btn btn btn-slide"
                            href="#carousel-example2" data-slide="prev"></a>
                    </div>
                    <div id="carousel-example2" class="carousel slide hidden-xs"
                        data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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

            <div class="slide-home">
                <div class="red-line"></div>
                <button class="button-midas">NGOẠI THẤT SÂN VƯỜN</button>
                <div class="row align-items-center mt-20">
                    <div class="controls float-xs-right hidden-xs w-100">
                        <a class="right fa fa-chevron-right btn btn-slide"
                            href="#carousel-example3" data-slide="next"></a>
                        <a class="left fa fa-chevron-left btn btn btn-slide"
                            href="#carousel-example3" data-slide="prev"></a>
                    </div>
                    <div id="carousel-example3" class="carousel slide hidden-xs"
                        data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
                                                <a href="#"
                                                    class="title-item-product">
                                                    <h5>Mẫu thiết kế biệt thự 3
                                                        tầng cao cấp ở Đảo Phú
                                                        Quốc- Kiên Giang BT1699</h5>
                                                </a>
                                            </div>

                                            <a href="#" class="photo">
                                                <img src="<?php the_frontend(); ?>img/00gkgm51.png"
                                                    class="img-fluid" alt="a" />
                                            </a>
                                            <div class="info">
                                                <div class="separator
                                                    clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa
                                                            fa-calendar"></i><a
                                                            class="hidden-sm">14/08/2018</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-eye"></i><a
                                                            class="hidden-sm">150</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-user-circle-o"></i><a
                                                            class="hidden-sm">Chủ
                                                            đầu tư: Ông bà Oanh
                                                            Phong</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-location-arrow"></i><a
                                                            class="hidden-sm">Địa
                                                            điểm xây dựng: Tân
                                                            Thành</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-home"></i><a
                                                            class="hidden-sm">Phong
                                                            cách: Tân cổ điển</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa fa-users"></i><a
                                                            class="hidden-sm">Kiến
                                                            trúc sư: Midashome</a>
                                                    </p>
                                                    <p class="btn-detail">
                                                        <i class="fa
                                                            fa-clock-o"></i><a
                                                            class="hidden-sm">Năm
                                                            thi công: 2016</a>
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
            <!-- END SLIDE CONTENT -->

            <!-- WORK-->
            <div class="work">
                <div class="red-line"></div>
                <button class="button-midas button-center">QUY TRÌNH LÀM VIỆC</button>
                <div class="row mt-3 text-center">
                    <div class="col">
                        <img src="<?php the_frontend(); ?>img/icons/stage1.png" alt="">
                        <h4 class="mt-3 text-color">Về Midashome</h4>
                        <p>Ngay khi nhận được thông tin của khách hàng, Vinavic
                            sẽ lập tưc liên hệ lại ngay với khách hàng để đặt
                            gặp gỡ, trao đổi về nhu cầu của khách hàng và khảo
                            sát hiện trạng công trình </p>
                    </div>
                    <div class="col">
                        <img src="<?php the_frontend(); ?>img/icons/stage2.png" alt="">
                        <h4 class="mt-3 text-color">Báo giá quy trình</h4>
                        <p>Sau khi thống nhất với khách hàng về ý tưởng, phong
                            cách thiết kế và công năng cho từng không gian, công
                            ty sẽ soạn thảo hợp đồng cho khách hàng xem qua và
                            tiến hành ký kết. </p>
                    </div>
                    <div class="col">
                        <img src="<?php the_frontend(); ?>img/icons/stage3.png" alt="">
                        <h4 class="mt-3 text-color">Khảo sát và ký hợp đồng</h4>
                        <p>Hai bên thống nhất bản vẽ 3D cuối cùng. Công ty sẽ
                            bàn giao toàn bộ bản vẽ thiết kế và khách hàng sẽ
                            thanh toán nốt 40% hợp đồng. </p>
                    </div>
                    <div class="col">
                        <img src="<?php the_frontend(); ?>img/icons/stage4.png" alt="">
                        <h4 class="mt-3 text-color">Bàn giao và quyết toán</h4>
                        <p>Hai bên thống nhất bản vẽ 3D cuối cùng. Công ty sẽ
                            bàn giao toàn bộ bản vẽ thiết kế và khách hàng sẽ
                            thanh toán nốt 40% hợp đồng. </p>
                    </div>
                </div>
            </div>
            <!-- END WORK -->

            <!-- LOGO -->
            <div class="work">
                <div class="red-line"></div>
                <button class="button-midas button-center">ĐỐI TÁC CỦA MIDASHOME</button>
                <div class="row mt-3 text-center">
                    <div class="container">
                        <section class="customer-logos slider">
                            <div class="slide"><img
                                    src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                            <div class="slide"><img
                                    src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                            <div class="slide"><img
                                    src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                            <div class="slide"><img
                                    src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                            <div class="slide"><img
                                    src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                            <div class="slide"><img
                                    src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                            <div class="slide"><img
                                    src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                            <div class="slide"><img
                                    src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- END WORK -->

            <!-- LOGO -->
            <div class="about">
                <div class="red-line"></div>
                <button class="button-midas">VIDEO</button>
                <div class="row mt-3 text-center">
                    <div class="col">
                        <iframe class="videos" width="420" height="315"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                    </div>
                    <div class="col">
                        <div class="row">
                            <h5 class="title-list">BẠN CẦN TÌM</h5>
                            <div class="col text-left">
                                <div class="pt-3"><a href="#">Mẫu nhà cấp 4</a></div>
                                <div class="pt-2"><a href="#">Biệt thự sân vườn</a></div>
                                <div class="pt-2"><a href="#">Biệt thự 2 tầng
                                    </a></div>
                                <div class="pt-2"><a href="#">Mẫu thiết kế biệt
                                        thự đẹp</a></div>
                                <div class="pt-2"> <a href="#">Mẫu văn
                                        phòng-khách sạn</a></div>
                                <div class="pt-2"> <a href="#">Biệt thự cổ điển
                                        đẹp</a></div>
                                <div class="pt-2"> <a href="#">Thiết kế nhà
                                        thương mại</a></div>
                                <div class="pt-2"> <a href="#">Mẫu biệt thự sang
                                        trọng</a></div>
                                <div class="pt-2"> <a href="#">Mẫu thiết kế nhà
                                        số</a></div>
                            </div>
                            <div class="col text-left">
                                <div class="pt-3"><a href="#">Mẫu nhà cấp 4</a></div>
                                <div class="pt-2"><a href="#">Biệt thự sân vườn</a></div>
                                <div class="pt-2"><a href="#">Biệt thự 2 tầng
                                    </a></div>
                                <div class="pt-2"><a href="#">Mẫu thiết kế biệt
                                        thự đẹp</a></div>
                                <div class="pt-2"> <a href="#">Mẫu văn
                                        phòng-khách sạn</a></div>
                                <div class="pt-2"> <a href="#">Biệt thự cổ điển
                                        đẹp</a></div>
                                <div class="pt-2"> <a href="#">Thiết kế nhà
                                        thương mại</a></div>
                                <div class="pt-2"> <a href="#">Mẫu biệt thự sang
                                        trọng</a></div>
                                <div class="pt-2"> <a href="#">Mẫu thiết kế nhà
                                        số</a></div>
                            </div>
                            <div class="col text-left">
                                <div class="pt-3"><a href="#">Mẫu nhà cấp 4</a></div>
                                <div class="pt-2"><a href="#">Biệt thự sân vườn</a></div>
                                <div class="pt-2"><a href="#">Biệt thự 2 tầng
                                    </a></div>
                                <div class="pt-2"><a href="#">Mẫu thiết kế biệt
                                        thự đẹp</a></div>
                                <div class="pt-2"> <a href="#">Mẫu văn
                                        phòng-khách sạn</a></div>
                                <div class="pt-2"> <a href="#">Biệt thự cổ điển
                                        đẹp</a></div>
                                <div class="pt-2"> <a href="#">Thiết kế nhà
                                        thương mại</a></div>
                                <div class="pt-2"> <a href="#">Mẫu biệt thự sang
                                        trọng</a></div>
                                <div class="pt-2"> <a href="#">Mẫu thiết kế nhà
                                        số</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END WORK -->
        </div>
        <!-- /.container -->

<?php get_footer();?>