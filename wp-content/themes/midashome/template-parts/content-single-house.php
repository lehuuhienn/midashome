<?php

$gallery_image     = get_field("gallery_image");
$chu_dau_tu        = get_field("chu_dau_tu");
$dia_diem_xay_dung = get_field("dia_diem_xay_dung");
$nam_thi_cong      = get_field("nam_thi_cong");
$kien_truc_su      = get_field("kien_truc_su");
$phong_cach        = get_field("phong_cach");

// Lưu công trình vừa xem
set_house_viewed($post->ID);
$list_viewed = get_house_viewed();

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
                            <?php if($chu_dau_tu): ?>
                            <p class="btn-detail">
                                <i class="fa fa-user-circle-o pr-2"></i>
                                <span><?php _e("Chủ đầu tư:", "themecustom");?> <?php echo $chu_dau_tu; ?></span>
                            </p>
                            <?php endif; ?>
                            <?php if($dia_diem_xay_dung): ?>
                            <p class="btn-detail">
                                <i class="fa fa-location-arrow pr-2"></i>
                                <span><?php _e("Địa điểm xây dựng:", "themecustom");?> <?php echo $dia_diem_xay_dung; ?></a>
                            </p>
                            <?php endif; ?>
                            <?php if($phong_cach): ?>
                            <p class="btn-detail">
                                <i class="fa fa-home pr-2"></i>
                                <span ><?php _e("Phong cách:", "themecustom");?> 
                                    <?php $p = get_term_by('id', $phong_cach, "house_tag"); ?>
                                    <a href="<?php echo get_term_link($p); ?>"><?php echo $p->name; ?></a>
                                </span>
                            </p>
                            <?php endif; ?>
                            <?php if($kien_truc_su): ?>
                            <p class="btn-detail">
                                <i class="fa fa-users pr-2"></i>
                                <span><?php _e("Kiến trúc sư:", "themecustom");?> <?php echo $kien_truc_su; ?></span>
                            </p>
                            <?php endif; ?>
                            <?php if($nam_thi_cong): ?>
                            <p class="btn-detail">
                                <i class="fa fa-clock-o pr-2"></i>
                                <span><?php _e("Năm thi công:", "themecustom");?> <?php echo $nam_thi_cong; ?></span>
                            </p>
                            <?php endif; ?>
                        </div>
                        <div class="col">
                           
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="w-100"><button class="btn-search" style="width: 100px; height: 30px;"> <i class="fa fa-tag pr-2" style="color:#fff"></i>TAG</button></div>
                        <div class="mt-1">
                            <?php if($house_tags = wp_get_post_terms( $post->ID, "house_tag", array('orderby' => 'name', 'order' => 'ASC'))): ?>
                                <?php foreach($house_tags as $ht): ?>
                                    <a href="<?php echo get_term_link($ht); ?>"><button class="btn-tag"><?php echo $ht->name;?></button></a>
                                <?php endforeach; ?>
                            <?php endif;?>
                        </div>
                        
                        <div class="request-form pt-4 ">
                            <div class="w-100"><button class="btn-search mt-2" style="width: 250px; height: 30px;">GỬI YÊU CẦU TƯ VẤN</button></div>
                            <div class="form-gui-yeu">
                                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LOGO -->
            <div class="about">
                <div class="red-line"></div>
                <button class="button-midas">MÔ TẢ CHI TIẾT</button>
                <div class="detail mt-2">
                    <?php echo $post->post_excerpt?$post->post_excerpt:wp_trim_words($post->post_content, 188, "..."); ?>
                </div>
                <div class="detail-view mt-2">
                    <?php the_content(); ?>
                    <div class="clearfix"></div>
                </div>
                <div class="text-center">
                    <button class="btn-show btn-tag" onclick="viewDetail(1)">Hiển thị chi tiết <i class="fa fa-arrow-down"></i></button>
                    <button class="btn-hide btn-tag" onclick="viewDetail()">Ẩn hiển thị <i class="fa fa-arrow-up"></i></button>
                </div>
            </div>
            <!-- END WORK -->

            <!-- comments -->
            <div class="about ">
                <div class="red-line"></div>
                <button class="button-midas">BÌNH LUẬN</button>
                <ul class="commentlist">
                    <?php $comments = get_comments($args = array( 'post_id' => $post->ID, 'status'=>'approve', 'paged' => -1)); ?>
                </ul>
                <div class="row mt-1">
                    <?php foreach ( $comments as $cmt ): ?>

                        <div class="row profile mt-2">
                            <div class="col-sm-3"><img src="<?php echo get_avatar_url($cmt->comment_author_email, array('size'=>40)); ?>" alt=""></div>
                            <div class="col-sm-9">
                                <b>&nbsp; <?php echo $cmt->comment_author; ?></b>
                                <p>&nbsp; <?php echo (new DateTime($cmt->comment_date))->format("d/m/Y"); ?></p>
                            </div>
                        </div>
                        <div class="row comment ml-5"><?php echo $cmt->comment_content; ?></div>
                    <?php endforeach; ?>
                    <form action="" method="POST" class="comment-form" id="comment-form-ajax">
                        <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>">
                        <input name="author" type="text" class="input-contact" placeholder="Họ và tên" required data-msg-required="Họ và tên không để trống">
                        <input name="email" type="email" class="input-contact" placeholder="Email" required data-msg-required="Email không để trống" required data-msg-email="Email không đúng định dạng">
                        <textarea class="text-are-detail" name="comment" id="" cols="300" rows="3" required data-msg-required="Nội dung nhận xét không để trống"></textarea>
                        <div><button type="submit" class="btn-search btn-send mt-2">Bình luận</button></div>
                    </form>
                </div>
            </div>
            <!-- END comment -->


            <?php if($list_viewed): ?>

            <!-- START CLICKED -->
            <div class="slide-home mt-5 ">
                <div class="red-line"></div>
                <button class="button-midas">CÔNG TRÌNH VỪA XEM</button>
                <div class="row align-items-center mt-20">
                    <div class="controls float-xs-right hidden-xs w-100">
                        <a class="right fa fa-chevron-right btn btn-slide" href="#carousel-listviewed" data-slide="next"></a>
                        <a class="left fa fa-chevron-left btn btn btn-slide" href="#carousel-listviewed" data-slide="prev"></a>
                    </div>
                    <div id="carousel-listviewed" class="carousel slide hidden-xs" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <?php $y = 0; foreach($list_viewed as $house_id): global $post;  $post = get_post($house_id); ?>
                                <?php if($y % 4 == 0): ?>

                                <?php echo $y>0?"</div></div>":''; ?>

                                <div class="item <?php echo $y==0?'active':''; ?>">
                                    <div class="row">
                                <?php endif; ?>

                                    <?php get_template_part( 'template-parts/block/house'); ?>
                                        
                                <?php if($y>= count($list_viewed) -1): ?>

                                    </div>
                                </div>
                                <?php endif ?>
                            <?php $y++; endforeach; wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END CLICKED -->
            <?php endif; ?>
       
    </div>
    <!-- /.container -->