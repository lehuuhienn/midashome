<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme
 * @subpackage Theme
 * @since 1.0.0
 */

?>      
        
        <?php
        if(!is_page('thanh-toan')):
            $link_youtube = get_field("link_youtube", "options");
            $you_need_find = get_field("you_need_find", "options");
        ?>
        
        <section class="video-section">
            <div class="container">
                <!-- VIDEO -->
                <div class="about">
                    <div class="red-line"></div>
                    <button class="button-midas">VIDEO</button>
                    <div class="row mt-3 text-center">
                        <div class="col">
                            <?php echo $link_youtube; ?>
                        </div>
                        <div class="col">
                            <div class="row">
                            <h5 class="title-list">BẠN CẦN TÌM</h5>
                            <?php if($you_need_find): ?>
                                <?php $max_item_per_col = (int)(count($you_need_find)/3); ?>
                                <?php foreach($you_need_find as $key => $link): ?>
                                    <?php $term = get_term_by('id', $link, 'house_tag' ); ?>
                                    <?php if($key%$max_item_per_col==0): ?>

                                    <?php echo $key>0?'</div>':''; ?>

                                    <div class="col text-left">
                                    <?php endif; ?>

                                        <div class="pt-3"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></div>
                                    <?php echo $key>=count($you_need_find)-1?'</div>':''; ?>
                                <?php endforeach; ?>
                            <?php endif;?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php endif; ?>

        <?php $link_cac_menu_con_repeat = get_field('link_cac_menu_con_repeat', "options"); ?>
        <?php if($link_cac_menu_con_repeat): ?>

        <section class="py-3 bg-footer mt-3" id="link-lien-ket">
            <div class="container">
                <div class="row">
                    <?php foreach ($link_cac_menu_con_repeat as $x => $item): ?>

                        <div class="col">
                            <h5><?php echo $item['title']; ?></h5>
                            <div class="red-line-footer"></div>
                            <?php foreach ($item['link_page'] as $z => $y): ?>
                                <?php $term = get_term_by('id', $y, 'house_tag'); ?>

                                <div class="<?php echo $z>0?'pt-2':'pt-3'; ?>"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></div>
                            <?php endforeach; ?>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Footer -->
        <footer class="py-3 bg-footer-last">
            <div class="container">
                <div class="row">
                    <div class="col-6 border-color">
                        <h4><?php the_field("company_name", "options"); ?></h4>
                        <p>Địa chỉ: <?php the_field("company_address", "options"); ?></p>
                        <p>Điện thoại: <?php the_field("company_phone", "options"); ?></p>
                        <p>Hotline: <?php the_field("company_hotline", "options"); ?></p>
                        <p>Email: <?php the_field("company_email", "options"); ?></p>
                    </div>
                    <div class="col border-color">
                        <h4><?php the_field("text_thong_ke_truy_cap", "options"); ?></h4>
                        <div class="row">
                            <div class="col">
                                <div><i class="fa fa-user pr-1"></i> Số người online:</div>
                                <div><i class="fa fa-user pr-1"></i> Hôm nay:</div>
                                <div><i class="fa fa-user pr-1"></i> Tuần này:</div>
                                <div><i class="fa fa-user pr-1"></i> Tổng truy cập:</div>
                            </div>
                            <div class="col">
                                <div>15</div>
                                <div>150</div>
                                <div>100</div>
                                <div>1050</div>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <h4><?php the_field("text_dang_ky_ban_tin", "options"); ?></h4>
                        <div><?php the_field("text_intro_ban_tin", "options"); ?></div>
                        <div class="form-ban-tin form-gui-yeu">
                            <?php echo do_shortcode(get_field("form_ban_tin", "options")); ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container -->
        </footer>

        <?php wp_footer(); ?>

    </body>

</html>
